<!--
* Author: WebAppLayers
* Product Name: INSPINIA
* Version: 4.2.0
* Purchase: https://wrapbootstrap.com/theme/inspinia-multipurpose-admin-dashboard-template-WB0R5L90S?ref=inspinia
* Website:  https://webapplayers.com
* Contact: support@webapplayers.com
* License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
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
                        <h3 class="card-title">Folder Structure</h3>
                    </div>

                    <div class="card-body">
                        <p class="text-muted fs-16 mb-3">After purchasing, extract the ZIP file you received.
                            Inside,
                            you'll find the following files and folders exactly as listed below:
                        </p>

                        <div class="verti-sitemap fs-18">
                            <ul class="list-unstyled ps-5 mb-0">

                                <li>

                                    <div class="first-list">
                                        <div class="list-wrap">
                                            <a href="javascript:void(0);"
                                                class="fw-medium text-primary d-flex gap-2 align-items-center">
                                                <i class="ti ti-folder me-1 align-bottom"></i>app
                                            </a>
                                        </div>
                                        <ul class="second-list list-unstyled">
                                            <li>
                                                <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                                    <i class="ti ti-folder me-1 align-bottom"></i>Http
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                                    <i class="ti ti-folder me-1 align-bottom"></i>Models
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                                    <i class="ti ti-folder me-1 align-bottom"></i>Providers
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="first-list">
                                        <div class="list-wrap">
                                            <a href="javascript:void(0);"
                                                class="fw-medium text-primary d-flex gap-2 align-items-center">
                                                <i class="ti ti-folder me-1 align-bottom"></i>bootstrap
                                            </a>
                                        </div>
                                    </div>

                                    <div class="first-list">
                                        <div class="list-wrap">
                                            <a href="javascript:void(0);"
                                                class="fw-medium text-primary d-flex gap-2 align-items-center">
                                                <i class="ti ti-folder me-1 align-bottom"></i>config
                                            </a>
                                        </div>
                                    </div>

                                    <div class="first-list">
                                        <div class="list-wrap">
                                            <a href="javascript:void(0);"
                                                class="fw-medium text-primary d-flex gap-2 align-items-center">
                                                <i class="ti ti-folder me-1 align-bottom"></i>database
                                            </a>
                                        </div>
                                    </div>

                                    <div class="first-list">
                                        <div class="list-wrap">
                                            <a href="javascript:void(0);"
                                                class="fw-medium text-primary d-flex gap-2 align-items-center">
                                                <i class="ti ti-folder me-1 align-bottom"></i>public
                                            </a>
                                        </div>
                                        <ul class="second-list list-unstyled">
                                            <li>
                                                <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                                    <i class="ti ti-folder me-1 align-bottom"></i>data
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                                    <i class="ti ti-folder me-1 align-bottom"></i>images
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="first-list">
                                        <div class="list-wrap">
                                            <a href="javascript:void(0);"
                                                class="fw-medium text-primary d-flex gap-2 align-items-center">
                                                <i class="ti ti-folder me-1 align-bottom"></i>resources
                                            </a>
                                        </div>

                                        <ul class="second-list list-unstyled">
                                            <li><a href="javascript:void(0);" class="d-flex align-items-center gap-2"><i
                                                        class="ti ti-folder me-1 align-bottom"></i>js</a></li>
                                            <li>
                                                <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                                    <i class="ti ti-folder me-1 align-bottom"></i>scss
                                                </a>
                                                <ul class="third-list list-unstyled">
                                                    <li>
                                                        <a href="javascript:void(0);"
                                                            class="d-flex align-items-center gap-2">
                                                            <i class="ti ti-folder me-1 align-bottom"></i>config
                                                        </a>
                                                        <ul class="third-list list-unstyled">
                                                            <li><a href="javascript:void(0);"
                                                                    class="d-flex align-items-center gap-2"><i
                                                                        class="ti ti-folder me-1 align-bottom"></i>_themes-classic.scss
                                                                    <span class="text-muted"> (INSPINIA comes
                                                                        with the Classic Skin as its default
                                                                        Theme.)</span></a></li>
                                                            <li><a href="javascript:void(0);"
                                                                    class="d-flex align-items-center gap-2"><i
                                                                        class="ti ti-folder me-1 align-bottom"></i>_themes-material.scss</a>
                                                            </li>
                                                            <li><a href="javascript:void(0);"
                                                                    class="d-flex align-items-center gap-2"><i
                                                                        class="ti ti-folder me-1 align-bottom"></i>_themes-modern.scss</a>
                                                            </li>
                                                            <li><a href="javascript:void(0);"
                                                                    class="d-flex align-items-center gap-2"><i
                                                                        class="ti ti-folder me-1 align-bottom"></i>_themes-saas.scss</a>
                                                            </li>
                                                            <li><a href="javascript:void(0);"
                                                                    class="d-flex align-items-center gap-2"><i
                                                                        class="ti ti-folder me-1 align-bottom"></i>_themes-flat.scss</a>
                                                            </li>
                                                            <li><a href="javascript:void(0);"
                                                                    class="d-flex align-items-center gap-2"><i
                                                                        class="ti ti-folder me-1 align-bottom"></i>_themes-minimal.scss</a>
                                                            </li>
                                                            <li><a href="javascript:void(0);"
                                                                    class="d-flex align-items-center gap-2"><i
                                                                        class="ti ti-folder me-1 align-bottom"></i><span
                                                                        class="text-decoration-line-through">_themes-galaxy.scss</span>
                                                                    <i class="text-muted fs-14 fs-semibold">
                                                                        COMING SOON</i></a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);"
                                                            class="d-flex align-items-center gap-2">
                                                            <i class="ti ti-folder me-1 align-bottom"></i>components
                                                        </a>
                                                    </li>
                                                    <li><a href="javascript:void(0);"
                                                            class="d-flex align-items-center gap-2"><i
                                                                class="ti ti-folder me-1 align-bottom"></i>pages</a>
                                                    </li>
                                                    <li><a href="javascript:void(0);"
                                                            class="d-flex align-items-center gap-2"><i
                                                                class="ti ti-folder me-1 align-bottom"></i>plugins</a>
                                                    </li>
                                                    <li><a href="javascript:void(0);"
                                                            class="d-flex align-items-center gap-2"><i
                                                                class="ti ti-folder me-1 align-bottom"></i>structure</a>
                                                    </li>
                                                    <li><a href="javascript:void(0);"
                                                            class="d-flex align-items-center gap-2"><i
                                                                class="ti ti-folder me-1 align-bottom"></i>app.scss</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="javascript:void(0);"
                                                    class="d-flex align-items-center gap-2"><i
                                                        class="ti ti-folder me-1 align-bottom"></i>views</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="first-list">
                                        <div class="list-wrap">
                                            <a href="javascript:void(0);"
                                                class="fw-medium text-primary d-flex gap-2 align-items-center">
                                                <i class="ti ti-folder me-1 align-bottom"></i>routes
                                            </a>
                                        </div>
                                    </div>


                                    <!-- File-level structure -->
                                    <div class="first-list">
                                        <div class="list-wrap">
                                            <a href="javascript:void(0);"
                                                class="fw-medium text-primary d-flex gap-2 align-items-center">
                                                <i class="ti ti-file me-1 align-bottom"></i>.env.example
                                            </a>
                                        </div>
                                    </div>
                                    <div class="first-list">
                                        <div class="list-wrap">
                                            <a href="javascript:void(0);"
                                                class="fw-medium text-primary d-flex gap-2 align-items-center">
                                                <i class="ti ti-file me-1 align-bottom"></i>composer.json
                                            </a>
                                        </div>
                                    </div>
                                    <div class="first-list">
                                        <div class="list-wrap">
                                            <a href="javascript:void(0);"
                                                class="fw-medium text-primary d-flex gap-2 align-items-center">
                                                <i class="ti ti-file me-1 align-bottom"></i>package.json
                                            </a>
                                        </div>
                                    </div>
                                    <div class="first-list">
                                        <div class="list-wrap">
                                            <a href="javascript:void(0);"
                                                class="fw-medium text-primary d-flex gap-2 align-items-center">
                                                <i class="ti ti-file me-1 align-bottom"></i>vite.config.js
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
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
