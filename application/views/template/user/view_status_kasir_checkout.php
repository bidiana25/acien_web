
<?php
    foreach ($company_status as $key => $value) 
    {                                        
        $expire_date= $value->expire_date;
    }


    foreach ($select_existing_payment as $key => $value) 
    {                                        
        $date= $value->date;
        $time= $value->time;
        $total_day= $value->total_day;
        $payment_value= $value->payment_value;
        $payment_photo= $value->payment_photo;

    }
?>







<!-- lib modal-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>







<main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="status_kasir">
        <div class="container">
            <br><br><br><br>
            <header class="section-header">
                <h3>Status <a href='https://kasir-acien.online/' target="_blank">kasir-acien.online</a></h3>
                <p>Silahkan melakukan payment sebelum expire date</p>
            </header>

            <div class="row about-container">

                
                <div class="col-lg-6 content order-lg-1 order-2">
                    <p>
                        
                    </p>

                    <div class="icon-box wow fadeInUp">
                        
                        <h4 class="title"><a href="">Expire Date</a></h4>
                        <p class="description">Masa Berlaku Aplikasi <a href='https://kasir-acien.online/' target="_blank">kasir-acien.online</a> Berakhir pada <h1 class='expire_date_warning'><?=date('d-M-Y', strtotime($expire_date))?></h1></p>
                    </div>

                    <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
                        <div class="icon"><i class="fa fa-shopping-bag"></i></div>
                        <h4 class="title"><a href="">Menunggu Pembayaran</a></h4>

                        <form action="<?php echo base_url('status_kasir/checkout') ?>" method="post" >
                        <table>
                            <tr>
                                <th>Tanggal Pembelian</th>
                                <th><a>: <?=date('d-M-Y', strtotime($date)).' / '.date('H:i', strtotime($time))?></a>
                                </th>
                                

                            </tr>
                            <tr>
                                <th>Durasi Paket</th>
                                <th><a>: <?=$total_day.' Hari'?></a>
                                </th>
                            </tr>

                            <tr>
                                <th>Total Tagihan</th>
                                <th><a>: <?=number_format($payment_value)?></a>
                                </th>
                            </tr>

                            <tr>
                                <th>Bukti Transfer</th>
                                <th><a>: <?=($payment_photo)?></a>
                                </th>
                            </tr>

                            
                        </table>

                        

                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Batalkan Transaksi</button>





                        <!-- Modal -->
                          <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog">
                            
                              <!-- Modal content-->
                              <div class="modal-content">
                                <div class="modal-header">
                                <h4 class="modal-title">Apakah Kamu Yakin Untuk Membatalkan Transaksi?</h4>
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  
                                </div>
                                
                                <div class="modal-footer">
                                <input type="submit" name="cancel" value="Batalkan Transaksi">
                                 
                                </div>
                              </div>
                              
                            </div>
                          </div>

                        </form>
                    </div>

                    

                </div>
                

                <div class="col-lg-6 background order-lg-2 order-1 wow fadeInUp">
                    <img src="<?php echo base_url() ?>assets/NewBiz/img/about-img.svg" class="img-fluid" alt="">
                </div>
            </div>

            

        </div>
    </section><!-- #about -->


</main>














<script type="text/javascript">
    













</script>







<style type="text/css">
.expire_date_warning
{
    color: red;
    font-weight: bold;
}


table tr th
{
    min-width: 130px;
}
</style>