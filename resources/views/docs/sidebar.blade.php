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
                        <h4 class="card-title"> Sidebar Option</h4>
                    </div>

                    <div class="card-body">
                        <!-- Light Sidebar -->
                        <div
                            class="alert alert-primary alert-bordered border-start border-primary d-flex align-items-center gap-2">
                            <i class="ti ti-info-circle fs-20"></i>
                            <div>
                                To switch to a light sidebar, add
                                <code>data-menu-color="light"</code> to the
                                <code>&lt;html&gt;</code> tag in your layout.
                            </div>
                            <a href="https://webapplayers.com/inspinia/classic/sidebar-light.html" target="_blank"
                                class="btn btn-dark ms-auto">
                                Preview <i class="ti ti-external-link fs-14 ms-2"></i>
                            </a>
                        </div>

                        <!-- Gradient Sidebar -->
                        <div
                            class="alert alert-secondary alert-bordered border-start border-secondary d-flex align-items-center gap-2">
                            <i class="ti ti-info-circle fs-20"></i>
                            <div>
                                To enable a gradient sidebar style, add
                                <code>data-menu-color="gradient"</code> to the
                                <code>&lt;html&gt;</code> tag in your layout.
                            </div>
                            <a href="https://webapplayers.com/inspinia/classic/sidebar-gradient.html" target="_blank"
                                class="btn btn-dark ms-auto">
                                Preview <i class="ti ti-external-link fs-14 ms-2"></i>
                            </a>
                        </div>

                        <!-- Gray Sidebar -->
                        <div
                            class="alert alert-purple alert-bordered border-start border-purple d-flex align-items-center gap-2">
                            <i class="ti ti-info-circle fs-20"></i>
                            <div>
                                To enable a gray sidebar style, add
                                <code>data-menu-color="gray"</code> to the
                                <code>&lt;html&gt;</code> tag.
                            </div>
                            <a href="https://webapplayers.com/inspinia/classic/sidebar-gray.html" target="_blank"
                                class="btn btn-dark ms-auto">
                                Preview <i class="ti ti-external-link fs-14 ms-2"></i>
                            </a>
                        </div>

                        <!-- Image Sidebar -->
                        <div
                            class="alert alert-success alert-bordered border-start border-success d-flex align-items-center gap-2">
                            <i class="ti ti-info-circle fs-20"></i>
                            <div>
                                To enable an image with a gradient sidebar style, add
                                <code>data-menu-color="image"</code> to the
                                <code>&lt;html&gt;</code> tag in your layout.
                            </div>
                            <a href="https://webapplayers.com/inspinia/classic/sidebar-image.html" target="_blank"
                                class="btn btn-dark ms-auto">
                                Preview <i class="ti ti-external-link fs-14 ms-2"></i>
                            </a>
                        </div>

                        <!-- Compact Sidebar -->
                        <div
                            class="alert alert-light alert-bordered border-start border-dark d-flex align-items-center gap-2">
                            <i class="ti ti-info-circle fs-20"></i>
                            <div>
                                To enable the medium-sized (compact) sidebar, add
                                <code>data-sidenav-size="compact"</code> to the
                                <code>&lt;html&gt;</code> tag.
                            </div>
                            <a href="https://webapplayers.com/inspinia/classic/sidebar-compact.html" target="_blank"
                                class="btn btn-dark ms-auto">
                                Preview <i class="ti ti-external-link fs-14 ms-2"></i>
                            </a>
                        </div>

                        <!-- Icon View Sidebar -->
                        <div
                            class="alert alert-info alert-bordered border-start border-info d-flex align-items-center gap-2">
                            <i class="ti ti-info-circle fs-20"></i>
                            <div>
                                To enable the icon view menu with full menu on hover, add
                                <code>data-sidenav-size="on-hover"</code> to the
                                <code>&lt;html&gt;</code> tag in your layout.
                            </div>
                            <a href="https://webapplayers.com/inspinia/classic/sidebar-icon-view.html" target="_blank"
                                class="btn btn-dark ms-auto">
                                Preview <i class="ti ti-external-link fs-14 ms-2"></i>
                            </a>
                        </div>

                        <!-- On Hover Active -->
                        <div
                            class="alert alert-warning alert-bordered border-start border-warning d-flex align-items-center gap-2">
                            <i class="ti ti-info-circle fs-20"></i>
                            <div>
                                To enable the full menu on hover after minimizing the sidebar, add
                                <code>data-sidenav-size="sm-hover-active"</code> to the
                                <code>&lt;html&gt;</code> tag in your layout.
                            </div>
                            <a href="https://webapplayers.com/inspinia/classic/sidebar-on-hover-active.html"
                                target="_blank" class="btn btn-dark ms-auto">
                                Preview <i class="ti ti-external-link fs-14 ms-2"></i>
                            </a>
                        </div>

                        <!-- Offcanvas Sidebar -->
                        <div
                            class="alert alert-danger alert-bordered border-start border-danger d-flex align-items-center gap-2">
                            <i class="ti ti-info-circle fs-20"></i>
                            <div>
                                To enable the offcanvas menu, add
                                <code>data-sidenav-size="offcanvas"</code> to the
                                <code>&lt;html&gt;</code> tag.
                            </div>
                            <a href="https://webapplayers.com/inspinia/classic/sidebar-offcanvas.html" target="_blank"
                                class="btn btn-dark ms-auto">
                                Preview <i class="ti ti-external-link fs-14 ms-2"></i>
                            </a>
                        </div>

                        <!-- No Icons with Line -->
                        <div
                            class="alert alert-success alert-bordered border-start border-success d-flex align-items-center gap-2">
                            <i class="ti ti-info-circle fs-20"></i>
                            <div>
                                To remove icons and display sidebar items in line style, add the class
                                <code>"sidebar-no-icons sidebar-with-line"</code> to the
                                <code>&lt;html&gt;</code> tag.
                            </div>
                            <a href="https://webapplayers.com/inspinia/classic/sidebar-no-icons.html" target="_blank"
                                class="btn btn-dark ms-auto">
                                Preview <i class="ti ti-external-link fs-14 ms-2"></i>
                            </a>
                        </div>

                        <!-- Sidebar With Lines -->
                        <div
                            class="alert alert-purple alert-bordered border-start border-purple d-flex align-items-center gap-2 mb-0">
                            <i class="ti ti-info-circle fs-20"></i>
                            <div>
                                To display the sidebar with vertical lines, add the class
                                <code>"sidebar-with-line"</code> to the
                                <code>&lt;html&gt;</code> tag.
                            </div>
                            <a href="https://webapplayers.com/inspinia/classic/sidebar-with-lines.html" target="_blank"
                                class="btn btn-dark ms-auto">
                                Preview <i class="ti ti-external-link fs-14 ms-2"></i>
                            </a>
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
