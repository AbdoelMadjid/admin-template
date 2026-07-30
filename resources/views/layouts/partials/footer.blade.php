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
                    @php
                        $laravelVersion = app()->version();
                        $phpVersion = PHP_VERSION;
                        try {
                            $mysqlVersion =
                                \Illuminate\Support\Facades\DB::selectOne('SELECT VERSION() as version')->version ??
                                '-';
                        } catch (\Throwable $e) {
                            $mysqlVersion = '-';
                        }
                    @endphp
                    Laravel <span class="fw-bold">{{ $laravelVersion }}</span> |
                    PHP <span class="fw-bold">{{ $phpVersion }}</span> |
                    MySQL <span class="fw-bold">{{ $mysqlVersion }}</span>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- end Footer -->
