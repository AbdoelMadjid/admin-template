<!DOCTYPE html>
<html lang="en">

<head>
    <base href="{{ url('/') }}/">
    <meta charset="utf-8">
    <title>INSPINIA - Responsive Bootstrap 5 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Inspinia is the #1 best-selling admin dashboard template on WrapBootstrap. Perfect for building CRM, CMS, project management tools, and custom web apps with clean UI, responsive design, and powerful features.">
    <meta name="keywords"
        content="Inspinia, admin dashboard, WrapBootstrap, HTML template, Bootstrap admin, CRM template, CMS template, responsive admin, web app UI, admin theme, best admin template">
    <meta name="author" content="WebAppLayers">

    <!-- App favicon -->
    <link rel="shortcut icon" href="docs/images/favicon.ico">

    <!-- Theme Config Js -->
    <script src="docs/js/config.js"></script>

    <!-- Vendor css -->
    <link href="docs/css/vendor.min.css" rel="stylesheet" type="text/css">

    <!-- App css -->
    <link href="docs/css/app.min.css" rel="stylesheet" type="text/css" id="app-style">

    <!-- Icons css -->
    <link href="docs/css/icons.min.css" rel="stylesheet" type="text/css">
</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">


        <!-- Header Nav-->
        @include('layouts.docs.header-nav')
        <!-- Header Nav End -->



        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="container mt-3">

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Scrollable Layout</h4>
                    </div>

                    <div class="card-body">
                        <div
                            class="alert alert-info alert-bordered border-start border-info d-flex align-items-center gap-2">
                            <i class="ti ti-info-circle fs-20"></i>
                            <div>
                                To enable full scrolling and view all content, please add
                                <code>data-layout-position="scrollable"</code> to the
                                <code>&lt;html&gt;</code> tag.
                            </div>
                        </div>

                        <p class="text-muted">
                            Scrollable Layout: Both the topbar and sidebar scroll independently, ideal for long
                            menus or
                            fixed header content.
                        </p>

                        <a href="https://webapplayers.com/inspinia/classic/layouts-scrollable.html" target="_blank"
                            class="btn btn-soft-primary">Scrollable Layout Preview <i
                                class="ti ti-external-link fs-14 ms-2"></i></a>
                    </div>
                </div>


                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Horizontal Layout</h4>
                    </div>

                    <div class="card-body">
                        <div
                            class="alert alert-info alert-bordered border-start border-info d-flex align-items-center gap-2">
                            <i class="ti ti-info-circle fs-20"></i>
                            <div>
                                To enable the Horizontal Layout, just extend horizontal layout like
                                {{-- <code>@extends('layouts.horizontal')</code> --}}
                            </div>
                        </div>


                        <p class="text-muted">
                            Horizontal Layout: Features top Navigation with menu items aligned horizontally.
                        </p>

                        <a href="https://webapplayers.com/inspinia/classic/layouts-horizontal.html" target="_blank"
                            class="btn btn-soft-primary">Horizontal Layout Preview <i
                                class="ti ti-external-link fs-14 ms-2"></i></a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Compact Layout</h4>
                    </div>

                    <div class="card-body">
                        <div
                            class="alert alert-info alert-bordered border-start border-info d-flex align-items-center gap-2">
                            <i class="ti ti-info-circle fs-20"></i>
                            <div>
                                To use the compact layout, follow this structure: wrap your page title in
                                <code>&lt;div class="container-fluid"&gt;</code> and place your main content inside
                                <code>&lt;div class="container-xl"&gt;</code>. This ensures proper spacing and
                                alignment.
                            </div>
                        </div>

                        <p class="text-muted">
                            Compact Layout: Page content width is constrained within a container for a cleaner,
                            narrower
                            layout.
                        </p>

                        <a href="https://webapplayers.com/inspinia/classic/layouts-compact.html" target="_blank"
                            class="btn btn-soft-primary">Compact Layout Preview <i
                                class="ti ti-external-link fs-14 ms-2"></i></a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Boxed Layout</h4>
                    </div>

                    <div class="card-body">
                        <div
                            class="alert alert-info alert-bordered border-start border-info d-flex align-items-center gap-2">
                            <i class="ti ti-info-circle fs-20"></i>
                            <div>
                                To enable the boxed layout, add
                                <code>data-layout-width="boxed"</code> to the
                                <code>&lt;html&gt;</code> tag. For optimal spacing and usability, we also recommend
                                adding
                                <code>data-sidenav-size="sm-hover"</code> to make the sidebar compact while keeping
                                more room for content.
                            </div>
                        </div>

                        <p class="text-muted">
                            Boxed Layout: The body width is fixed at 1340px, centering the content with surrounding
                            margins.
                        </p>

                        <a href="https://webapplayers.com/inspinia/classic/layouts-boxed.html" target="_blank"
                            class="btn btn-soft-primary">Boxed Layout Preview <i
                                class="ti ti-external-link fs-14 ms-2"></i></a>
                    </div>
                </div>


                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Preloader Layout</h4>
                    </div>

                    <div class="card-body">
                        <div
                            class="alert alert-info alert-bordered border-start border-info d-flex align-items-start gap-2">
                            <i class="ti ti-info-circle fs-20"></i>
                            <div>
                                To enable the preloader, please add the following code inside the
                                <code>&lt;body&gt;</code> tag:
                                <pre>
<code class="language-html">
&lt;!-- Preloader --&gt;
&lt;div id="preloader"&gt;
    &lt;div class="spinner-border text-primary" role="status"&gt;
        &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code>
                               </pre>
                            </div>
                        </div>

                        <p class="text-muted">
                            Preloader Layout: Displays a loading animation before the main content appears,
                            enhancing
                            the user experience during initial page load or content fetching.
                        </p>

                        <a href="https://webapplayers.com/inspinia/classic/layouts-preloader.html" target="_blank"
                            class="btn btn-soft-primary">Preloader Layout Preview <i
                                class="ti ti-external-link fs-14 ms-2"></i></a>
                    </div>
                </div>
            </div>
            <!-- container -->

            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start">
                            © 2014 -
                            <script>
                                document.write(new Date().getFullYear())
                            </script> Inspinia By <span class="fw-semibold">WebAppLayers</span>
                        </div>
                        <div class="col-md-6">
                            <div class="text-md-end d-none d-md-block">
                                10GB of <span class="fw-bold">250GB</span> Free.
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->


    <!-- Vendor js -->
    <script src="docs/js/vendor.min.js"></script>

    <!-- App js -->
    <script src="docs/js/app.js"></script>

</body>

</html>
