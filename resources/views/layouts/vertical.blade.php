<!DOCTYPE html>
@php
    $htmlAttributeSection = trim($__env->yieldContent('html_attribute'));
    $htmlAttributes = str_contains($htmlAttributeSection, 'class=')
        ? $htmlAttributeSection
        : trim('class="sidebar-with-line" ' . $htmlAttributeSection);
@endphp
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" {!! $htmlAttributes !!}>

<head>
    @include('layouts.partials.title-meta')

    @include('layouts.partials.head-css')
</head>

<body>

    <!-- Begin page -->
    <div class="wrapper">

        @include('layouts.partials.menu')

        <!-- ============================================================== -->
        <!-- Start Main Content -->
        <!-- ============================================================== -->

        <div class="content-page">

            <div class="container-fluid">

                @yield('content')

            </div>

            @include('layouts.partials.footer')

        </div>

        @include('layouts.partials.customizer')

    </div>

    @include('layouts.partials.footer-scripts')

</body>

</html>
