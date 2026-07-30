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
                        <h4 class="card-title"> Topbar Option</h4>
                    </div>

                    <div class="card-body">
                        <!-- Dark Topbar -->
                        <div
                            class="alert alert-purple alert-bordered border-start border-purple d-flex align-items-center gap-2">
                            <i class="ti ti-info-circle fs-xxl"></i>
                            <div>
                                To enable the dark topbar, add
                                <code>data-topbar-color="dark"</code> to the
                                <code>&lt;html&gt;</code> tag in your layout.
                            </div>
                            <a href="https://webapplayers.com/inspinia/classic/topbar-dark.html" target="_blank"
                                class="btn btn-dark ms-auto">
                                Preview <i class="ti ti-external-link fs-14 ms-2"></i>
                            </a>
                        </div>

                        <!-- Gray Topbar -->
                        <div
                            class="alert alert-purple alert-bordered border-start border-purple d-flex align-items-center gap-2">
                            <i class="ti ti-info-circle fs-xxl"></i>
                            <div>
                                To enable the gray topbar, add
                                <code>data-topbar-color="gray"</code> to the
                                <code>&lt;html&gt;</code> tag in your layout.
                            </div>
                            <a href="https://webapplayers.com/inspinia/classic/topbar-gray.html" target="_blank"
                                class="btn btn-dark ms-auto">
                                Preview <i class="ti ti-external-link fs-14 ms-2"></i>
                            </a>
                        </div>

                        <!-- Gradient Topbar -->
                        <div
                            class="alert alert-purple alert-bordered border-start border-purple d-flex align-items-center gap-2 mb-0">
                            <i class="ti ti-info-circle fs-xxl"></i>
                            <div>
                                To enable the gradient topbar, add
                                <code>data-topbar-color="gradient"</code> to the
                                <code>&lt;html&gt;</code> tag in your layout.
                            </div>
                            <a href="https://webapplayers.com/inspinia/classic/topbar-gradient.html" target="_blank"
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
