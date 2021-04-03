<?php

foreach ($jumlah_client as $key => $value) {
  $total_client_id = $value->total_id;
  }

foreach ($jumlah_users as $key => $value) {
  $total_users_id = $value->total_id;
  }



$datetime1 = strtotime('2020-01-01');
$datetime2 = strtotime(date('Y-m-d'));

$secs = $datetime2 - $datetime1;// == <seconds between the two times>
$hour_support = $secs / 1440;

?>




<section id="intro" class="clearfix">
    <div class="container">

        <div class="intro-img">
            <img src="<?php echo base_url() ?>assets/NewBiz/img/" alt="" class="img-fluid">
        </div>

        <div class="intro-info">
            <h2>Kamu Butuh <br> Kasir Digital?<br><span><a href='https://kasir-acien.online/' target='_blank'>kasir-acien.online</a></span><br>Solusinya!</h2>
            <div>
                <a href="<?= base_url('/register') ?>" class="btn-get-started scrollto">Coba Gratis</a>
            </div>
        </div>

    </div>
</section><!-- #intro -->

<main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
        <div class="container">

            <header class="section-header">
                <h3>Ingin upgrade usaha kamu?</h3>
                <p><a href='https://kasir-acien.online/' target='_blank'>kasir-acien.online</a> solusinya!</p>
            </header>

            <div class="row about-container">

                <div class="col-lg-6 content order-lg-1 order-2">
                    <p>
                        Aplikasi <a href='https://kasir-acien.online/' target='_blank'>kasir-acien.online</a> membantu pembukuan transaksi dari penjualan usaha kamu dengan lebih efisien.<br> Dirancang dengan teknologi masa kini, <a href='https://kasir-acien.online/' target='_blank'>kasir-acien.online</a> menawarkan fitur:
                    </p>

                    <div class="icon-box wow fadeInUp">
                        <div class="icon"><i class="fa fa-shopping-bag"></i></div>
                        <h4 class="title"><a href="">Struk Penjualan</a></h4>
                        <p class="description">Aplikasi <a href='https://kasir-acien.online/' target='_blank'>kasir-acien.online</a> membuat struk penjualan dan mendata laporan penjualan secara lengkap!</p>
                    </div>

                    <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
                        <div class="icon"><i class="fa fa-photo"></i></div>
                        <h4 class="title"><a href="">Inventory Barang</a></h4>
                        <p class="description">Aplikasi <a href='https://kasir-acien.online/' target='_blank'>kasir-acien.online</a> dapat mengelola stok barang usaha kamu!</p>
                    </div>

                    <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
                        <div class="icon"><i class="fa fa-bar-chart"></i></div>
                        <h4 class="title"><a href="">Payroll dan Absensi Karyawan</a></h4>
                        <p class="description">Aplikasi <a href='https://kasir-acien.online/' target='_blank'>kasir-acien.online</a> menyediakan fitur absensi online yang dapat menghitung gaji karyawan secara instan!</p>
                    </div>

                </div>

                <div class="col-lg-6 background order-lg-2 order-1 wow fadeInUp">
                    <img src="<?php echo base_url() ?>assets/NewBiz/img/laptop_dengan_kasir.JPG" class="img-fluid" alt="">
                </div>
            </div>

            <div class="row about-extra">
                <div class="col-lg-6 wow fadeInUp">
                    <img src="<?php echo base_url() ?>assets/NewBiz/img/tangan_bidin_pegang_hp.JPG" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
                    <br><br><h4> Tahukah kamu?</h4>
                    <p>
                         <a href='https://kasir-acien.online/' target='_blank'>kasir-acien.online</a> hanya membutuhkan jaringan internet dan web-browser sehingga dapat digunakan pada device apapun.
                    </p>
                    <p>
                        Selain itu <a href='https://kasir-acien.online/' target='_blank'>kasir-acien.online</a> juga bisa digunakan untuk semua jenis printer receipt.
                    </p>

                    <p>
                        <h4>Tunggu apa lagi?</h4>
                       
                        <a href="<?= base_url('/register') ?>" class="btn-get-started scrollto">Coba Gratis</a>
                    </p>
                </div>
            </div>

            

        </div>
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services" class="section-bg">
        <div class="container">

            <header class="section-header">
                <h3>Pilihan Paket</h3>
                <p>Pilih paket yang sesuai dengan kebutuhan kamu!</p>
            </header>

            <div class="row">

                <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s">
                    <div class="box">
                        <div class="icon"><i class="ion-ios-clock-outline" style="color: #ff689b;"></i></div>
                        <h4 class="title"><a href="<?= base_url('/register') ?>">Paket 30 Hari</a></h4>
                        <p class="description">Rp50.000,00</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-duration="1.4s">
                    <div class="box">
                        <div class="icon"><i class="ion-ios-clock-outline" style="color: #4680ff;"></i></div>
                        <h4 class="title"><a href="<?= base_url('/register') ?>">Paket 6 Bulan </a></h4>
                        <p class="description">Rp270.000,00</p>
                    </div>
                </div>

         

                


                <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                    <div class="box">
                        <div class="icon"><i class="ion-ios-clock-outline" style="color: #3fcdc7;"></i></div>
                        <h4 class="title"><a href="<?= base_url('/register') ?>">Paket 1 Tahun <br>(Free Printer Receipt)</a></h4>
                        <p class="description">Rp540.000,00</p>
                    </div>
                    
                </div>
                

                

            </div>

        </div>
    </section><!-- #services -->






    <!--==========================
      Why Us Section
    ============================-->
    <section id="why-us" class="wow fadeIn">
        <div class="container">
            <header class="section-header">
                <h3>Our History!</h3>
                
            </header>

            

            <div class="row counters">

                <div class="col-lg-3 col-6 text-center">
                    <span data-toggle="counter-up"><?=number_format($total_client_id+500)?></span>
                    <p>Clients</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-toggle="counter-up"><?=number_format($total_users_id+500)?></span>
                    <p>Users</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-toggle="counter-up"><?=number_format($hour_support)?></span>
                    <p>Hours Of Support</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-toggle="counter-up">19</span>
                    <p>Hard Workers</p>
                </div>

            </div>

        </div>
    </section>



    <!--==========================
      Clients Section
    ============================-->
    <section id="clients" class="section-bg">

      <div class="container">

        <div class="section-header">
          <h3>Cocok untuk berbagai macam tipe usaha</h3>
          <p><a href='https://kasir-acien.online/' target='_blank'>kasir-acien.online</a> bisa dipakai untuk usaha apa saja</p>
        </div>

        <div class="row no-gutters clients-wrap clearfix wow fadeInUp">

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="<?php echo base_url() ?>assets/NewBiz/img/kedai_kopi.jpg" class="img-fluid" alt="">
            </div>
          </div>

          
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="<?php echo base_url() ?>assets/NewBiz/img/restoran.jpg" class="img-fluid" alt="">
            </div>
          </div>
        
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="<?php echo base_url() ?>assets/NewBiz/img/toko_roti.jpg" class="img-fluid" alt="">
            </div>
          </div>
          
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="<?php echo base_url() ?>assets/NewBiz/img/fast_food.jpg" class="img-fluid" alt="">
            </div>
          </div>
          
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="<?php echo base_url() ?>assets/NewBiz/img/mini_market.jpg" class="img-fluid" alt="">
            </div>
          </div>
        
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="<?php echo base_url() ?>assets/NewBiz/img/toko_retail.jpg" class="img-fluid" alt="">
            </div>
          </div>
          
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="<?php echo base_url() ?>assets/NewBiz/img/salon.jpg" class="img-fluid" alt="">
            </div>
          </div>
          
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="<?php echo base_url() ?>assets/NewBiz/img/dll.jpg" class="img-fluid" alt="">
            </div>
          </div>

        </div>

      </div>

    </section>

    
    

    <!--==========================
      Team Section
    ============================-->
    <section id="team">
        <div class="container">
            <div class="section-header">
                <h3>Yuk kembangkan bisnis kamu dengan <a href='https://kasir-acien.online/' target='_blank'>kasir-acien.online</a></h3>
              
                <p>
                <a href="<?= base_url('/register') ?>" class="btn-get-started scrollto">Coba Gratis Sekarang</a>
                </p>
            </div>


        </div>
    </section><!-- #team -->

    

    

</main>