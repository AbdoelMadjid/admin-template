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
                        <h4 class="card-title mb-0">Dark Mode Setting</h4>

                        <div class="ms-auto">
                            <a href="https://webapplayers.com/inspinia/classic/dark.html" target="_blank"
                                class="btn btn-soft-success ms-auto">Dark Preview</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <p class="text-muted">
                                    Simply add the attribute <code>data-bs-theme="dark"</code> to the
                                    <code>&lt;html&gt;</code> tag. This will enable Dark Mode instantly—no need to
                                    modify any CSS or JavaScript files.
                                </p>

                                <pre class="bg-light d-inline-flex rounded">
                                    <code class="language-html">
                                        &lt;html lang=&quot;en&quot; data-bs-theme=&quot;dark&quot;&gt;
                                    </code>
                                </pre>
                            </div>
                        </div>
                        <!--end row-->
                    </div>
                    <!--end card-body-->
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
