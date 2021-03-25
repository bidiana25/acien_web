
<?php
    foreach ($company_status as $key => $value) 
    {                                        
        $expire_date= $value->expire_date;
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
                        <h4 class="title"><a href="">Pilih Paket</a></h4>

                        <form action="<?php echo base_url('status_kasir/tambah') ?>" method="post" >
                        <table>
                            <tr>
                                <th>Pilihan Paket</th>
                                <th>:
                                <select name="m_c_payment_method_id" class='m_c_payment_method_id' id='m_c_payment_method_id' placeholder='Pick a state...'>
                                <option value=0 label='Pilih Paket'></option>
                                  <?php
                                  foreach ($pilihan_payment as $key => $value) 
                                  {
                                    echo "<option value='".$value->id."' label='".$value->show_text.' - Rp'.number_format($value->value)."'></option>";

                                  }
                                  ?>
                                  </select>


                                </th>
                            </tr>
                            <tr>
                                <th>Total Harga</th>
                                <th>:
                                <a class="return_data"></a>


                                </th>
                            </tr>

                            
                        </table>

                        

                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Checkout</button>



                        <!-- Modal -->
                          <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog">
                            
                              <!-- Modal content-->
                              <div class="modal-content">
                                <div class="modal-header">
                                <h4 class="modal-title">Konfirmasi Pesanan</h4>
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  
                                </div>
                                <div class="modal-body">
                                  <p class='return_data2'></p>
                                </div>
                                <div class="modal-footer">
                                <input type="submit" name="checkout" class="btn btn-info btn-lg" value="Checkout">
                                 
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
    







$(document).ready(function()
{

$(".m_c_payment_method_id").change(function()
{
var m_c_payment_method_id=$(this).val();
var post_id = 'id='+ m_c_payment_method_id;
 
$.ajax
({
type: "POST",
url: '<?php echo base_url('ajax/A_check_checkout_value') ?>',
data: post_id,
cache: false,
success: function(reading_feedback)
{
$(".return_data").html(reading_feedback);

console.log(reading_feedback);
} 
});









$.ajax
({
type: "POST",
url: '<?php echo base_url('ajax/A_check_checkout_confirmation') ?>',
data: post_id,
cache: false,
success: function(reading_feedback2)
{
$(".return_data2").html(reading_feedback2);

console.log(reading_feedback2);
} 
});


 
});
});







mycode();

function mycode() {
  
  
    var value1 = document.getElementById("m_c_payment_method_id").value;
  var value = document.getElementById("m_c_payment_method_id").label;
  
  


  tid = setTimeout(mycode, 500); // repeat myself
}







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