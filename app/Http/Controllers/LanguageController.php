<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\App;

class LanguageController extends Controller
{
    /**
     * Switch application language.
     *
     * @param string $locale
     * @return RedirectResponse
     */
    public function switch(string $locale): RedirectResponse
    {
        $availableLocales = ['en', 'id'];

        if (in_array($locale, $availableLocales)) {
            // Store in session
            session(['locale' => $locale]);

            // Set cookie for 1 year (525600 minutes)
            Cookie::queue('locale', $locale, 525600);

            // Also set App locale immediately for the current process
            App::setLocale($locale);
        }

        return redirect()->back();
    }
}
