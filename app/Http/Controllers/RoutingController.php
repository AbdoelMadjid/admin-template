<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class RoutingController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): Redirector|RedirectResponse
    {
        if (Auth::user()) {
            return redirect('/dashboards/index');
        } else {
            return redirect('pages/authentication/auth1/login');
        }
    }

    /**
     * Display a view based on the first route param
     */
    public function root(Request $request, $first): View
    {
        if (view()->exists($first)) {
            return view($first);
        }
        return view('pages.error.view-not-found', ['viewName' => $first]);
    }

    /**
     * second level route
     */
    public function secondLevel(Request $request, $first, $second): View
    {
        $primaryView = $first . '.' . $second;
        if (view()->exists($primaryView)) {
            return view($primaryView);
        }

        // Backward compatibility / resolver for moved pages:
        // e.g. pages/profile -> pages/general/profile
        if ($first === 'pages') {
            foreach (['general', 'error', 'authentication', 'miscellaneous'] as $sub) {
                $subView = $first . '.' . $sub . '.' . $second;
                if (view()->exists($subView)) {
                    return view($subView);
                }
            }
        }

        return view('pages.error.view-not-found', ['viewName' => $primaryView]);
    }

    /**
     * fourth level route
     */
    public function fourthLevel(Request $request, $first, $second, $third, $fourth): View
    {
        $primaryView = $first . '.' . $second . '.' . $third . '.' . $fourth;
        if (view()->exists($primaryView)) {
            return view($primaryView);
        }

        return view('pages.error.view-not-found', ['viewName' => $primaryView]);
    }

    /**
     * third level route
     */
    public function thirdLevel(Request $request, $first, $second, $third): View
    {
        $primaryView = $first . '.' . $second . '.' . $third;
        if (view()->exists($primaryView)) {
            return view($primaryView);
        }

        // Backward-compatible resolver for moved Ecommerce pages:
        // apps/ecommerce/{slug} -> apps/ecommerce/{group}/{slug}
        if ($first === 'apps' && $second === 'ecommerce') {
            foreach (['products', 'orders', 'reports', 'sellers'] as $group) {
                $nestedView = $first . '.' . $second . '.' . $group . '.' . $third;
                if (view()->exists($nestedView)) {
                    return view($nestedView);
                }
            }
        }

        return view('pages.error.view-not-found', ['viewName' => $primaryView]);
    }
}
