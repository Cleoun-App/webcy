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
                        <h5 class="mb-0">Transaksi Kendaraan</h5>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-flush" id="datatable-search">
                            <thead class="thead-light">
                                <tr>
                                    <th>Nama</th>
                                    <th>Type</th>
                                    <th>Merek</th>
                                    <th>Plat Nomor</th>
                                    <th>Penyewa</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-sm font-weight-normal">Sedan</td>
                                    <td class="text-sm font-weight-normal">Engkel</td>
                                    <td class="text-sm font-weight-normal">Misthubisi Hino DX1000</td>
                                    <td class="text-sm font-weight-normal">DK10068XL</td>
                                    <td class="text-sm font-weight-normal">-</td>
                                    <td class="text-sm font-weight-normal">
                                        <span class="badge badge-sm bg-gradient-success">Tersedia</span>
                                    </td>
                                    <td class="text-sm font-weight-normal">
                                        <a class="btn badge badge-success m-0" href="/add_penyewa.php">Sewa</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">Open Kap</td>
                                    <td class="text-sm font-weight-normal">l300</td>
                                    <td class="text-sm font-weight-normal">Zuzuki kejora</td>
                                    <td class="text-sm font-weight-normal">DD1798TB</td>
                                    <td class="text-sm font-weight-normal">Yeni Pakaya</td>
                                    <td class="text-sm font-weight-normal">
                                        <span class="badge badge-sm bg-gradient-danger">Tersewa</span>
                                    </td>
                                    <td class="text-sm font-weight-normal"><button type="button" class="btn badge badge-success m-0" data-bs-toggle="modal" data-bs-target="#sewa-modal">cek penyewa</button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="sewa-modal" tabindex="-1" role="dialog" aria-labelledby="sewa-modalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Penyewa Ibu Sri Wahyuni</h5>
                                                        <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form>
                                                            <div class="form-group">
                                                                <label for="name" class="col-form-label">Nama </label>
                                                                <input type="text" class="form-control" placeholder="Nama penyewa" id="name">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="duration" class="col-form-label">Durasi </label>
                                                                <input type="text" class="form-control" placeholder="Durasi Penyewaan" id="duration">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="pricetag" class="col-form-label">Harga </label>
                                                                <input type="text" class="form-control" disabled placeholder="Estimasi Harga Sewa" id="pricetag">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="explanation" class="col-form-label">Keterangan</label>
                                                                <textarea class="form-control" id="explanation"></textarea>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Tutup</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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