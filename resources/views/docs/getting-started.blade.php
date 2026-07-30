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
                        <h3 class="card-title">Setup</h3>
                    </div>
                    <div class="card-body">

                        <h4>Prerequisites</h4>
                        <p>
                            The Laravel framework has a few system requirements. All of these requirements are
                            satisfied
                            by the
                            <a href="https://laravel.com/docs/12.x/homestead" target="_blank">Laravel Homestead</a>
                            virtual machine, so it's highly recommended that you use
                            Homestead as your local Laravel development environment.
                        </p>

                        <p>Please follow below steps to install and setup all prerequisites:</p>


                        <ul>
                            <li>
                                <h5>PHP</h5>
                                <p class="mb-2">In order to use build tools you will need to download
                                    and install PHP. If you do not have PHP installed already,
                                    you can get it by downloading the package installer from the
                                    official website. Please download the stable version of PHP.
                                </p><a href="https://www.php.net/" target="_blank">Download PHP</a>
                            </li>
                            <li class="pt-2">
                                <h5>Composer</h5>
                                <p class="mb-2">Make sure you have the Composer installed & running
                                    on your computer. If you already have installed Composer on your computer, you
                                    can skip this step.</p>
                                <a href="https://getcomposer.org/" target="_blank">Download
                                    Composer</a>
                            </li>
                            <li class="pt-2">
                                <h5>Node.js</h5>
                                <p class="mb-2">In order to use build tools you will need to download
                                    and install Node.js. If you do not have Node.js installed already,
                                    you can get it by downloading the package installer from the
                                    official website. Please download the stable version of Node.js
                                    (LTS).</p><a href="https://nodejs.org/" target="_blank">Download
                                    Node.js</a>
                            </li>
                        </ul>

                        <h4 class="mt-4">Installation</h4>

                        <h5 class="fw-normal">You can run this app using one of these package managers
                            <strong>Yarn</strong>, <strong>NPM</strong>.
                        </h5>

                        <div class="mt-3">
                            <h5 class="mb-1"><span class="font-semibold text-blue-500">1. Yarn</h5>
                            <p class="mb-2 text-gray-800">If you don't have <strong>yarn</strong> installed on your
                                PC,
                                use the next command <code>npm i -g yarn</code> or <code>sudo npm i -g yarn </code>
                            </p>
                        </div>

                        <table class="table table-bordered m-0">
                            <thead>
                                <tr>
                                    <th style="width:20%"><i class="ti-file"></i> Command</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><code>yarn</code></td>
                                    <td>This would install all required dependencies in <code>node_modules</code>
                                        folder.</td>
                                </tr>
                                <tr>
                                    <td><code>yarn dev</code></td>
                                    <td> Runs the project locally, starts the development server.</td>
                                </tr>
                                <tr>
                                    <td><code>yarn build</code></td>
                                    <td>It bundles with production mode. Your app is now ready to be deployed.</td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="mt-3">
                            <h5 class="mb-1"><span class="font-semibold text-blue-500">2. NPM</h5>
                            <p class="mb-2 text-gray-800"><strong>npm</strong> comes preinstalled when you install
                                Nodejs</p>
                        </div>

                        <table class="table table-bordered m-0">
                            <thead>
                                <tr>
                                    <th style="width:20%"><i class="ti-file"></i> Command</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><code>npm i</code></td>
                                    <td>This would install all required dependencies in <code>node_modules</code>
                                        folder.</td>
                                </tr>
                                <tr>
                                    <td><code>npm run dev</code></td>
                                    <td> Runs the project locally, starts the development server.</td>
                                </tr>
                                <tr>
                                    <td><code>npm run build</code></td>
                                    <td>It bundles with production mode. Your app is now ready to be deployed.</td>
                                </tr>
                            </tbody>
                        </table>

                        <h5 class="mt-3 fw-normal">To spin up the Laravel development server, follow the
                            below mentioned
                            steps in a separate terminal:</h5>

                        <table class="table table-bordered m-0">
                            <thead>
                                <tr>
                                    <th style="width:20%"><i class="ti-file"></i> Command</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <code>composer i</code><br>
                                    </td>
                                    <td> This will install all required dependencies in
                                        <code>vendor</code> folder.
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <code>cp .env.example .env</code>
                                    </td>
                                    <td>
                                        This will copy .env.example as .env file.
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <code>php artisan key:generate</code>
                                    </td>
                                    <td>
                                        This will generate a unique key and write it in your .env file
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <code>php artisan migrate</code><br>
                                    </td>
                                    <td>
                                        This will execute all pending migrations to database.
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <code>php artisan db:seed</code><br>
                                    </td>
                                    <td>
                                        Creates a dummy user into your database for authentication
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <code>php artisan serve</code><br>
                                    </td>
                                    <td>
                                        Runs the project locally, starts the development server on <a
                                            href="http://127.0.0.1:8000" target="_blank">http://127.0.0.1:8000</a>.
                                    </td>
                                </tr>
                            </tbody>
                        </table>

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
