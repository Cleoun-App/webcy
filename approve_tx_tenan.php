<?php include_once "./layout/main_header.php" ?>

<?php include_once "./layout/main_sidebar.php" ?>

<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">

    <?php include_once "./layout/main_topbar.php" ?>

    <!-- Start Content -->



    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-12">
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header pb-1">
                        <h5 class="mb-0">Approve Pembayaran</h5>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-flush" id="datatable-search">
                            <thead class="thead-light">
                                <tr>
                                    <th>Nama</th>
                                    <th>Tenan</th>
                                    <th>Nama Jualan</th>
                                    <th>Harga</th>
                                    <th>Jatuh Tempo</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-sm font-weight-normal">Yuni Tara</td>
                                    <td class="text-sm font-weight-normal">Kanti Nuskambangan</td>
                                    <td class="text-sm font-weight-normal">Ibu Yuni Shop</td>
                                    <td class="text-sm font-weight-normal">Rp. 350k</td>
                                    <td class="text-sm font-weight-normal">16 Mei 2023</td>
                                    <td class="text-sm font-weight-normal">
                                        <span class="badge badge-sm bg-gradient-success">Waiting</span>
                                    </td>
                                    <td class="text-sm font-weight-normal">
                                        <a type="button" class="btn badge badge-success m-0" href="/approval_page.php">approve</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">Feni Rose</td>
                                    <td class="text-sm font-weight-normal">Kantin X Kantin</td>
                                    <td class="text-sm font-weight-normal">FenniNeh</td>
                                    <td class="text-sm font-weight-normal">Rp. 850k</td>
                                    <td class="text-sm font-weight-normal">20 Apr 2023</td>
                                    <td class="text-sm font-weight-normal">
                                        <span class="badge badge-sm bg-gradient-success">Waiting</span>
                                    </td>
                                    <td class="text-sm font-weight-normal">
                                        <a type="button" class="btn badge badge-success m-0" href="/approval_page.php">approve</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer pt-3  ">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6 mb-lg-0 mb-4">
                        <div class="copyright text-center text-sm text-muted text-lg-start">
                            © <script>
                                document.write(new Date().getFullYear())
                            </script>,
                            made with <i class="fa fa-heart"></i> by
                            <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
                            for a better web.
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- End Content -->

</main>

<?php include_once "./layout/main_body.php" ?>