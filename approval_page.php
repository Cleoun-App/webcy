<?php include_once "./layout/main_header.php" ?>

<?php include_once "./layout/main_sidebar.php" ?>

<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">

    <?php include_once "./layout/main_topbar.php" ?>

    <!-- Start Content -->

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="mb-5">
                    <!--progress bar-->
                    <div class="row d-none">
                        <div class="col-12 col-lg-8 mx-auto my-5">
                            <div class="multisteps-form__progress">
                                <button class="multisteps-form__progress-btn js-active" type="button" title="User Info">
                                    <span>Approve Transaksi</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!--form panels-->
                    <div class="row">
                        <div class="col-12 col-lg-8 m-auto">
                            <form class="multisteps-form__form mb-8">
                                <!--single form panel-->
                                <div class="card multisteps-form__panel p-3 border-radius-xl bg-white js-active" data-animation="FadeIn">
                                    <h5 class="font-weight-bolder mb-0">Approve Transaksi</h5>
                                    <div class="multisteps-form__content">
                                        <div class="row mt-3">
                                            <div class="col-12 col-sm-6">
                                                <label>Nama Pelanggan</label>
                                                <input class="multisteps-form__input form-control" disabled type="text" value="Dinar Mulia" />
                                            </div>
                                            <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                                <label>Pembayaran</label>
                                                <input class="multisteps-form__input form-control" disabled type="text" value="Rp.1.5jt" />
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-12 col-sm-6">
                                                <label>Jatuh Tempo</label>
                                                <input class="multisteps-form__input form-control" disabled type="text" value="10 Februari 2023" />
                                            </div>
                                            <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                                <label>Denda</label>
                                                <input class="multisteps-form__input form-control" disabled type="text" value="Rp 20.000" />
                                            </div>
                                        </div>
                                        <p class="mb-0 mt-3"><strong>Detail Transaksi</strong></p>
                                        <div class="row mt-1">
                                            <div class="col-12">
                                                <label>Perihal</label>
                                                <input class="multisteps-form__input form-control" disabled type="text" value="Penyewaan Gedung" />
                                            </div>
                                            <div class="col-12 mt-3 mt-sm-0">
                                                <label>Nama Gedung</label>
                                                <input class="multisteps-form__input form-control" disabled type="text" value="Gelora Buat Konser" />
                                            </div>
                                            <div class="col-12 mt-3 mt-sm-0">
                                                <label>Durasi Penyewaan</label>
                                                <input class="multisteps-form__input form-control" disabled type="text" value="3 Hari" />
                                            </div>
                                            <div class="col-12 mt-3 mt-sm-0">
                                                <label>Total Pembayaran</label>
                                                <input class="multisteps-form__input form-control" disabled type="text" value="Rp. 1.520.000" />
                                            </div>
                                        </div>
                                        <div class="button-row d-flex mt-4">
                                            <!-- <button class="btn bg-gradient-info mb-0" style="margin-right: 10px" type="button">Detail</button> -->
                                            <button class="btn bg-gradient-success mb-0" type="button">Approve</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer pt-3">
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