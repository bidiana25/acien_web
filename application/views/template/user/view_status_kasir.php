<?php
foreach ($company_status as $key => $value) {
  $expire_date = $value->expire_date;
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
            <p class="description">Masa Berlaku Aplikasi <a href='https://kasir-acien.online/' target="_blank">kasir-acien.online</a> Berakhir pada
            <h1 class='expire_date_warning'><?= date('d-M-Y', strtotime($expire_date)) ?></h1>
            </p>
          </div>

          <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
            <div class="icon"><i class="fa fa-shopping-bag"></i></div>
            <h4 class="title"><a href="">Pilih Paket</a></h4>

            <form action="<?php echo base_url('status_kasir/tambah') ?>" method="post">
              <table>
                <tr>
                  <th>Username</th>
                  <th><a>: <?= $this->session->userdata('username')  ?></a>
                  </th>
                </tr>

                <tr>
                  <th>Pilihan Paket </th>
                  <th>:
                    <select required name="m_c_payment_method_id" class='m_c_payment_method_id' id='m_c_payment_method_id'>
                      <option value="" disabled selected>Pilih Paket</option>
                      <?php
                      foreach ($pilihan_payment as $key => $value) {
                        echo "<option value='" . $value->id . "' label='" . $value->show_text . ' - Rp' . number_format($value->value) . "'></option>";
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

              <br /> <br /> <br />

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
          <img src="<?php echo base_url() ?>assets/NewBiz/img/promo_gratis_receipt.jpg" class="img-fluid" alt="">
        </div>
      </div>
      <br><br>



    </div>
  </section><!-- #about -->


</main>














<script type="text/javascript">
  $(document).ready(function() {

    $(".m_c_payment_method_id").change(function() {
      var m_c_payment_method_id = $(this).val();
      var post_id = 'id=' + m_c_payment_method_id;

      $.ajax({
        type: "POST",
        url: '<?php echo base_url('ajax/A_check_checkout_value') ?>',
        data: post_id,
        cache: false,
        success: function(reading_feedback) {
          $(".return_data").html(reading_feedback);

          console.log(reading_feedback);
        }
      });









      $.ajax({
        type: "POST",
        url: '<?php echo base_url('ajax/A_check_checkout_confirmation') ?>',
        data: post_id,
        cache: false,
        success: function(reading_feedback2) {
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
  .expire_date_warning {
    color: red;
    font-weight: bold;
  }

  .img-fluid
  {
    height: 600px;
  }


  table tr th {
    min-width: 130px;
  }
</style>



<!------------------------------------------ MENCOBA CUSTOM CONTROL !------------------------------------>
<style type="text/css">
  /* class applies to select element itself, not a wrapper element */
  .select-css {
    display: block;
    font-size: 14px;
    font-family: sans-serif;
    font-weight: 700;
    color: #444;
    line-height: 1.3;
    padding: .6em 1.4em .5em .8em;
    width: 100%;
    max-width: 100%;
    /* useful when width is set to anything other than 100% */
    box-sizing: border-box;
    margin: 0;
    border: 1px solid #aaa;
    box-shadow: 0 1px 0 1px rgba(0, 0, 0, .04);
    border-radius: .5em;
    -moz-appearance: none;
    -webkit-appearance: none;
    appearance: none;
    background-color: #fff;
    margin-left: 25px;
    /* note: bg image below uses 2 urls. The first is an svg data uri for the arrow icon, and the second is the gradient. 
    for the icon, if you want to change the color, be sure to use `%23` instead of `#`, since it's a url. You can also swap in a different svg icon or an external image reference
    
  */
    background-image: url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22292.4%22%20height%3D%22292.4%22%3E%3Cpath%20fill%3D%22%23007CB2%22%20d%3D%22M287%2069.4a17.6%2017.6%200%200%200-13-5.4H18.4c-5%200-9.3%201.8-12.9%205.4A17.6%2017.6%200%200%200%200%2082.2c0%205%201.8%209.3%205.4%2012.9l128%20127.9c3.6%203.6%207.8%205.4%2012.8%205.4s9.2-1.8%2012.8-5.4L287%2095c3.5-3.5%205.4-7.8%205.4-12.8%200-5-1.9-9.2-5.5-12.8z%22%2F%3E%3C%2Fsvg%3E'),
      linear-gradient(to bottom, #ffffff 0%, #e5e5e5 100%);
    background-repeat: no-repeat, repeat;
    /* arrow icon position (1em from the right, 50% vertical) , then gradient position*/
    background-position: right .7em top 50%, 0 0;
    /* icon size, then gradient */
    background-size: .65em auto, 100%;
  }

  /* Hide arrow icon in IE browsers */
  .select-css::-ms-expand {
    display: none;
  }

  /* Hover style */
  .select-css:hover {
    border-color: #888;
  }

  /* Focus style */
  .select-css:focus {
    border-color: #aaa;
    /* It'd be nice to use -webkit-focus-ring-color here but it doesn't work on box-shadow */
    box-shadow: 0 0 1px 3px rgba(59, 153, 252, .7);
    box-shadow: 0 0 0 3px -moz-mac-focusring;
    color: #222;
    outline: none;
  }

  /* Set options to normal weight */
  .select-css option {
    font-weight: normal;
  }

  /* Support for rtl text, explicit support for Arabic and Hebrew */
  *[dir="rtl"] .select-css,
  :root:lang(ar) .select-css,
  :root:lang(iw) .select-css {
    background-position: left .7em top 50%, 0 0;
    padding: .6em .8em .5em 1.4em;
  }

  /* Disabled styles */
  .select-css:disabled,
  .select-css[aria-disabled=true] {
    color: graytext;
    background-image: url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22292.4%22%20height%3D%22292.4%22%3E%3Cpath%20fill%3D%22graytext%22%20d%3D%22M287%2069.4a17.6%2017.6%200%200%200-13-5.4H18.4c-5%200-9.3%201.8-12.9%205.4A17.6%2017.6%200%200%200%200%2082.2c0%205%201.8%209.3%205.4%2012.9l128%20127.9c3.6%203.6%207.8%205.4%2012.8%205.4s9.2-1.8%2012.8-5.4L287%2095c3.5-3.5%205.4-7.8%205.4-12.8%200-5-1.9-9.2-5.5-12.8z%22%2F%3E%3C%2Fsvg%3E'),
      linear-gradient(to bottom, #ffffff 0%, #e5e5e5 100%);
  }

  .select-css:disabled:hover,
  .select-css[aria-disabled=true] {
    border-color: #aaa;
  }
</style>