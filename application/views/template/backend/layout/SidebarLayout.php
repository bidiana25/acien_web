<div class="pcoded-navigation-label">Navigation</div>
<ul class="pcoded-item pcoded-left-item">


    <!-- Diluar Grouping disini -->
    <li <?php if ($this->uri->segment(2) == "buku_besar") {
            echo 'class="pcoded-hasmenu"';
        } ?>>
        <a href="<?= base_url("dashboard/"); ?>" class="waves-effect waves-dark">
            <span class="pcoded-micon">
                <i class="feather icon-credit-card"></i>
            </span>
            <span class="pcoded-mtext">Dashboard</span>
        </a>
    </li>


    <?php
    $level_user_id = $this->session->userdata('level_user_id');
    if ($level_user_id == 1 or $level_user_id == 6) {
    ?>


        <li class="pcoded-hasmenu">
            <a href="javascript:void(0)" class="waves-effect waves-dark">
                <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                <span class="pcoded-mtext" href="<?= base_url("c_t_login_user"); ?>">Master Data</span>
            </a>
            <ul class="pcoded-submenu">
                <li class="">
                    <a href="<?= base_url("a_m_c_bank"); ?>" class="submenu waves-effect waves-dark">
                        <span class="pcoded-mtext">Rekening Pemabayaran</span>
                    </a>
                </li>
                <li class="">
                    <a href="<?= base_url("c_t_m_d_level_user"); ?>" class="submenu waves-effect waves-dark">
                        <span class="pcoded-mtext">Level User</span>
                    </a>
                </li>
                <li class="">
                    <a href="<?= base_url("c_t_m_d_jenis_barang"); ?>" class="submenu waves-effect waves-dark">
                        <span class="pcoded-mtext">Jenis Barang</span>
                    </a>
                </li>
                <li class="">
                    <a href="<?= base_url("c_t_m_d_kategori"); ?>" class="submenu waves-effect waves-dark">
                        <span class="pcoded-mtext">Kategori</span>
                    </a>
                </li>
                <li class="">
                    <a href="<?= base_url("c_t_m_d_barang"); ?>" class="submenu waves-effect waves-dark">
                        <span class="pcoded-mtext">Barang</span>
                    </a>
                </li>
                <li class="">
                    <a href="<?= base_url("c_t_m_d_satuan"); ?>" class="submenu waves-effect waves-dark">
                        <span class="pcoded-mtext">Satuan</span>
                    </a>
                </li>
                <li class="">
                    <a href="<?= base_url("c_t_m_d_no_polisi"); ?>" class="submenu waves-effect waves-dark">
                        <span class="pcoded-mtext">No Polisi</span>
                    </a>
                </li>
                <li class="">
                    <a href="<?= base_url("c_t_m_d_supir"); ?>" class="submenu waves-effect waves-dark">
                        <span class="pcoded-mtext">Nama Supir</span>
                    </a>
                </li>
                <li class="">
                    <a href="<?= base_url("c_t_m_d_sales"); ?>" class="submenu waves-effect waves-dark">
                        <span class="pcoded-mtext">Nama Sales</span>
                    </a>
                </li>
                <li class="">
                    <a href="<?= base_url("c_t_m_d_supplier"); ?>" class="submenu waves-effect waves-dark">
                        <span class="pcoded-mtext">Nama Supplier</span>
                    </a>
                </li>
                <li class="">
                    <a href="<?= base_url("c_t_m_d_pelanggan"); ?>" class="submenu waves-effect waves-dark">
                        <span class="pcoded-mtext">Nama Pelanggan</span>
                    </a>
                </li>

                <li class="">
                    <a href="<?= base_url("c_t_m_d_payment_method"); ?>" class="submenu waves-effect waves-dark">
                        <span class="pcoded-mtext">Payment Method</span>
                    </a>
                </li>

                <li class="">
                    <a href="<?= base_url("c_t_m_d_lokasi"); ?>" class="submenu waves-effect waves-dark">
                        <span class="pcoded-mtext">Lokasi</span>
                    </a>
                </li>

            </ul>
        </li>
        <li class="pcoded-hasmenu">
            <a href="javascript:void(0)" class="waves-effect waves-dark">
                <span class="pcoded-micon"><i class="feather icon-list"></i></span>
                <span class="pcoded-mtext">Transaksi</span>
            </a>
            <ul class="pcoded-submenu">
                <li class="">
                    <a href="<?= base_url("c_t_t_t_pembelian"); ?>" class="submenu waves-effect waves-dark">
                        <span class="pcoded-mtext">Pembelian</span>
                    </a>
                </li>


                <li class="">
                    <a href="<?= base_url("c_t_t_t_retur_pembelian"); ?>" class="submenu waves-effect waves-dark">
                        <span class="pcoded-mtext">Retur Pembelian</span>
                    </a>
                </li>


                <li class="">
                    <a href="<?= base_url("c_t_t_t_penjualan"); ?>" class="submenu waves-effect waves-dark">
                        <span class="pcoded-mtext">Penjualan</span>
                    </a>
                </li>

                <li class="">
                    <a href="<?= base_url("c_t_t_t_retur_penjualan"); ?>" class="submenu waves-effect waves-dark">
                        <span class="pcoded-mtext">Retur Penjualan</span>
                    </a>
                </li>

                <li class="">
                    <a href="<?= base_url("c_t_t_t_po_auto"); ?>" class="submenu waves-effect waves-dark">
                        <span class="pcoded-mtext">PO Auto</span>
                    </a>
                </li>

                <li class="">
                    <a href="<?= base_url("c_t_t_t_po_manual"); ?>" class="submenu waves-effect waves-dark">
                        <span class="pcoded-mtext">PO Manual</span>
                    </a>
                </li>


                <li class="">
                    <a href="<?= base_url("c_t_info_stock"); ?>" class="submenu waves-effect waves-dark">
                        <span class="pcoded-mtext">Info Stock</span>
                    </a>
                </li>




            </ul>
        </li>

    <?php
    }
    ?>





    <?php
    if ($level_user_id == 1) {
    ?>
        <li class="pcoded-hasmenu">
            <a href="javascript:void(0)" class="waves-effect waves-dark">
                <span class="pcoded-micon"><i class="feather icon-layers"></i></span>
                <span class="pcoded-mtext">Admin</span>
            </a>
            <ul class="pcoded-submenu">
                <li class="">
                    <a href="<?= base_url("c_t_login_user"); ?>" class="submenu waves-effect waves-dark">
                        <span class="pcoded-mtext">User</span>
                    </a>
                </li>

            </ul>
        </li>



    <?php
    }

    ?>


    <?php
    if ($level_user_id == 1 or $level_user_id == 6) {
    ?>
        <li class="pcoded-hasmenu">
            <a href="javascript:void(0)" class="waves-effect waves-dark">
                <span class="pcoded-micon"><i class="feather icon-layers"></i></span>
                <span class="pcoded-mtext">Laporan</span>
            </a>
            <ul class="pcoded-submenu">
                <li class="">
                    <a href="<?= base_url("c_laporan"); ?>" class="submenu waves-effect waves-dark">
                        <span class="pcoded-mtext">Detail</span>
                    </a>
                </li>

            </ul>
        </li>



    <?php
    }

    ?>

















</ul>