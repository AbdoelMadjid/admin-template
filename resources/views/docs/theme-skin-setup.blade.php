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
                        <h4 class="font-weight-semibold mb-0">Using Pre-built Themes from INSPINIA v4.0</h4>
                    </div>

                    <div class="card-body">
                        <p class="text-muted mb-4">Switch between multiple built-in themes by setting the data-skin
                            attribute in the <html> tag. Themes like Classic, Material, Modern, SaaS, Flat, and
                            Minimal
                            are pre-configured for quick integration and visual consistency across your layout.
                        </p>

                        <h5 class="mb-2">Classic Theme (Default Classic Theme)</h5>
                        <div
                            class="alert alert-primary alert-bordered border-start border-primary d-flex align-items-center gap-2 mb-3">
                            <i class="ti ti-info-circle fs-20"></i>
                            <div class="fw-bold text-decoration-underline">
                                INSPINIA comes with the Classic Theme set as the Default.
                            </div>
                            <a href="https://webapplayers.com/inspinia/classic/index.html" target="_blank"
                                class="btn btn-dark ms-auto">Preview</a>
                        </div>


                        <h5 class="mb-2">Material Theme</h5>
                        <div
                            class="alert alert-secondary alert-bordered border-start border-secondary d-flex align-items-center gap-2 mb-3">
                            <i class="ti ti-info-circle fs-20"></i>
                            <div>
                                Set <code>data-skin="material"</code> in the <code>&lt;html&gt;</code> tag to use
                                the
                                Material theme.
                            </div>
                            <a href="https://webapplayers.com/inspinia/material/index.html" target="_blank"
                                class="btn btn-dark ms-auto">Preview</a>
                        </div>


                        <h5 class="mb-2">Modern Theme</h5>
                        <div
                            class="alert alert-success alert-bordered border-start border-success d-flex align-items-center gap-2 mb-3">
                            <i class="ti ti-info-circle fs-20"></i>
                            <div>
                                Set <code>data-skin="modern"</code> in the <code>&lt;html&gt;</code> tag to use the
                                Modern theme.
                            </div>
                            <a href="https://webapplayers.com/inspinia/modern/index.html" target="_blank"
                                class="btn btn-dark ms-auto">Preview</a>
                        </div>

                        <h5 class="mb-2">SaaS Theme</h5>
                        <div
                            class="alert alert-info alert-bordered border-start border-info d-flex align-items-center gap-2 mb-3">
                            <i class="ti ti-info-circle fs-20"></i>
                            <div>
                                Set <code>data-skin="saas"</code> in the <code>&lt;html&gt;</code> tag to use the
                                SaaS
                                theme.
                            </div>
                            <a href="https://webapplayers.com/inspinia/saas/index.html" target="_blank"
                                class="btn btn-dark ms-auto">Preview</a>
                        </div>

                        <h5 class="mb-2">Flat Theme</h5>
                        <div
                            class="alert alert-purple alert-bordered border-start border-purple d-flex align-items-center gap-2 mb-3">
                            <i class="ti ti-info-circle fs-20"></i>
                            <div>
                                Set <code>data-skin="flat"</code> in the <code>&lt;html&gt;</code> tag to use the
                                Flat
                                theme.
                            </div>
                            <a href="https://webapplayers.com/inspinia/flat/index.html" target="_blank"
                                class="btn btn-dark ms-auto">Preview</a>
                        </div>

                        <h5 class="mb-2">Minimal Theme</h5>
                        <div
                            class="alert alert-danger alert-bordered border-start border-danger d-flex align-items-center gap-2 mb-0">
                            <i class="ti ti-info-circle fs-20"></i>
                            <div>
                                Set <code>data-skin="minimal"</code> in the <code>&lt;html&gt;</code> tag to use the
                                Minimal theme.
                            </div>
                            <a href="https://webapplayers.com/inspinia/minimal/index.html" target="_blank"
                                class="btn btn-dark ms-auto">Preview</a>
                        </div>
                    </div>
                </div>

            </div> <!-- container -->

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
