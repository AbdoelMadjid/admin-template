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



        @include('layouts.docs.header-nav')


        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">

            <div class="container mt-3">
                <div class="card">
                    <div class="card-header">
                        <h4 class="font-weight-semibold mb-0">Introduction</h4>
                    </div>

                    <div class="card-body">
                        <div class="alert alert-success mb-3 fs-15">
                            <strong>New in v4:</strong> 6 built-in theme skins, multiple sidebar and topbar modes,
                            scrollable and boxed layouts, and a completely modular SCSS + Gulp development workflow.
                        </div>

                        <h5 class="text-dark fs-14 mb-2">
                            Thank you for choosing <span class="fw-semibold">INSPINIA</span> – Your Trusted Admin &
                            Dashboard Template All in One Solution.
                        </h5>

                        <p class="text-muted fs-14 mb-0">
                            <span class="fw-semibold">INSPINIA v4</span> is a fully reimagined version, offering
                            enhanced design, flexible layouts, and support for multiple themes, topbars, and
                            sidebars.
                            Whether you're building a CRM, analytics dashboard, SaaS platform, or internal admin
                            tool,
                            INSPINIA gives you everything you need to create a fast, professional, and beautiful
                            application.
                        </p>

                        <p class="text-muted fs-14 mb-4">
                            This template is crafted with modern web standards and is powered by <span
                                class="fw-semibold">Bootstrap v5.3.8 and Laravel v12</span>, ensuring a responsive
                            and
                            scalable experience across all devices.
                        </p>


                        <h5 class="text-dark fs-14 mb-3">
                            If you have any questions, feedback, or need assistance, feel free to reach out via our
                            profile:
                            <a href="https://wrapbootstrap.com/user/WebAppLayers/message"
                                target="_blank">https://wrapbootstrap.com/user/WebAppLayers/message</a>
                        </h5>

                        <p class="text-muted fs-14">
                            We’re here to help! This documentation provides an overview of INSPINIA’s core features,
                            components, and usage. We’ll continue to improve and expand it with future updates.
                        </p>

                        <p class="text-muted fs-15 mb-0">
                            Thank you once again for choosing <span class="fw-semibold">INSPINIA</span>. We hope it
                            accelerates your development and helps you deliver outstanding results.
                        </p>

                    </div>
                </div>


                <div class="row justify-content-center mb-3">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <p class="fw-bold mb-0 float-end">
                                    <a class="btn btn-soft-primary d-flex stretched-link"
                                        href="https://webapplayers.com/inspinia/classic/index.html"
                                        target="_blank">Start now <i class="icon-base ti ti-chevron-right"></i></a>
                                </p>

                                <div class="badge badge-soft-danger p-3 mb-3">
                                    <i class="icon-base ti ti-rocket fs-28"></i>
                                </div>
                                <h4>Explore INSPINIA v1.0</h4>
                                <h5 class="text-muted fs-15  mb-0">Kickstart your project with INSPINIA and easily
                                    set
                                    up theming, Dark mode, and RTL support.
                                </h5>

                            </div>
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
