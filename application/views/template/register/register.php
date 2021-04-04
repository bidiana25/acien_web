<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Pendaftaran Kasir Acien</title>
    <!-- Mobile Specific Metas -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/images/acien.png" />
    <!--===============================================================================================-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Font-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/Regis/css/opensans-font.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/Regis/fonts/line-awesome/css/line-awesome.min.css">
    <!-- Jquery -->
    <link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
    <!-- Main Style Css -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/Regis/css/style.css" />
</head>

<body class="form-v4">
    <div class="page-content">
        <div class="form-v4-content">
            <div class="form-left">
                <h2>INFORMASI</h2>
                <p class="text-1">Kamu dapat login pada aplikasi <a href='https://kasir-acien.online/' target="_blank">kasir-acien.online</a> jika kamu sudah melakukan proses registrasi pada halaman ini.</p>
                <p class="text-2"><span>Registrasi Sekarang :</span> dan kamu bisa mencoba <a href='https://kasir-acien.online/' target="_blank">kasir-acien.online</a></p>
                <form action="<?php echo site_url('Login'); ?>" method="post">
                    <div class="form-left-last">
                        <input type="submit" name="account" class="account" value="Sudah Memiliki Akun">
                    </div>
                </form>
            </div>
            <form class="form-detail" action="<?php echo base_url('register/tambah') ?>" onsubmit="return validateForm()" method="post" id="myform">
                <h2>Form Registrasi</h2>

                <div class="form-row">
                    <label for="Nama Perusahaan">Nama Perusahaan</label>

                    <a class="warning_label_company_postfix" id='warning_label_company_postfix'>(Sudah Digunakan)</a>
                    <a class="warning2_label_company_postfix" id='warning2_label_company_postfix'>(Tidak Boleh Ada Spasi)</a>
                    <a class="warning3_label_company_postfix" id='warning3_label_company_postfix'>(Tidak Boleh Ada Special Character)</a>
                    <a class="warning4_label_company_postfix" id='warning4_label_company_postfix'>(Tidak Boleh Kosong)</a>

                    <input type="text" name="company_postfix"  minlength="8" maxlength="40" placeholder="Tanpa Spasi" id="company_postfix" class="input-text">

                </div>

                <div class="form-row">
                    <label for="Nomor Telepon">Tanggal Gajian Perusahaan</label>
                    
                    
                    <select class="tanggal_gajian"  id="tanggal_gajian" name="tanggal_gajian">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                    </select>
                </div>

                <br>


                <div class="form-row">
                    <label for="Username">Username</label>
                    <a class="warning_label_username" id='warning_label_username'>(Sudah Digunakan)</a>
                    <a class="warning2_label_username" id='warning2_label_username'>(Tidak Boleh Ada Spasi)</a>
                    <a class="warning3_label_username" id='warning3_label_username'>(Tidak Boleh Ada Special Character)</a>
                    <a class="warning4_label_username" id='warning4_label_username'>(Tidak Boleh Kosong)</a>

                    <input type="text" name="username" id="username"  minlength="8" maxlength="40" placeholder="Tanpa Spasi" class="input-text">
                </div>
                <div class="form-row">
                    <label for="Email">Alamat Email</label>
                    <a class="warning2_label_email" id='warning2_label_email'>(Email Tidak Valid)</a>
                    <a class="warning3_label_email" id='warning3_label_email'>(Email Tidak Valid)</a>
                    <a class="warning4_label_email" id='warning4_label_email'>(Tidak Boleh Kosong)</a>

                    <input type="text" name="email" placeholder="Email" id="email"  minlength="8" maxlength="99" class="input-text">
                </div>

                <div class="form-row">
                    <label for="Nomor Telepon">Nomor Telepon</label>
                    <a class="warning2_label_phone" id='warning2_label_phone'>(No Telepon Tidak Valid)</a>
                    <a class="warning3_label_phone" id='warning3_label_phone'>(No Telepon Tidak Valid)</a>
                    <a class="warning4_label_phone" id='warning4_label_phone'>(Tidak Boleh Kosong)</a>

                    <input type="text" name="phone" placeholder="Nomor Telepon" id="phone"  minlength="4" maxlength="15" class="input-text">
                </div>

                

                <div class="form-group">
                    <div class="form-row form-row-1 ">
                        <label for="password">Password</label>
                        
                        <a class="warning2_label_password" id='warning2_label_password'>(Minimal 8 Character)</a>
                        <a class="warning3_label_password" id='warning3_label_password'>(Tidak Boleh Ada Special Character)</a>
                        <a class="warning4_label_password" id='warning4_label_password'>(Tidak Boleh Kosong)</a>


                        <input type="password" name="password"  minlength="8" maxlength="20" placeholder="Min 8 character" id="password" class="input-text">
                    </div>
                    <div class="form-row form-row-1">
                        <label for="comfirm-password">Konfirmasi Password</label>
                        
                        <a class="warning2_label_confirm_password" id='warning2_label_confirm_password'>(Password Tidak Sama)</a>
                        <a class="warning4_label_confirm_password" id='warning4_label_confirm_password'>(Tidak Boleh Kosong)</a>


                        <input type="password" name="confirm_password"  minlength="8" maxlength="20" placeholder="Konfirmasi" id="confirm_password" class="input-text">
                    </div>
                </div>
                <div class="form-row-last">

                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Submit</button>
                </div>


                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Konfirmasi Data Pengguna</h4>
                            </div>
                            <div class="modal-body">
                                <table>
                                    <tr>
                                        <th><label>Username Saat Login</label>

                                        </th>

                                        <th><a class="modal_text_right" id="modal_username"></a></th>
                                    </tr>

                                    <tr>
                                        <th><label>Tanggal Gajian Perusahaan</label>

                                        </th>

                                        <th><a class="modal_text_right" id="modal_tanggal_gajian"></a></th>
                                    </tr>

                                    <tr>
                                        <th><label>Alamat Email</label></th>

                                        <th><a class="modal_text_right" id="modal_email"></a></th>
                                    </tr>

                                    <tr>
                                        <th><label>Nomor Telepon</label></th>

                                        <th><a class="modal_text_right" id="modal_phone"></a></th>
                                    </tr>
                                </table>
                            </div>
                            <div class="modal-footer">
                                <input type="submit" name="register" class="register" value="Register">

                            </div>
                        </div>

                    </div>
                </div>

            </form>


        </div>
    </div>







    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

    <script>
        var true_logic_company_postfix = 0;
        var true_logic_username = 0;
        var true_logic_email = 0;
        var true_logic_phone = 0;
        var true_logic_password = 0;
        var true_logic_confirm_password = 0;





        $(document).ready(function() {
            $('#company_postfix').change(function() {
                var company_postfix = $('#company_postfix').val();
                var post_id = 'id=' + company_postfix;
                if (company_postfix != '') {


                    var specialChars = "<>!#$%^&*()[]{}?:;|'\"\\,/~`=";
                    var checkForSpecialChar = function(string) {
                        for (i = 0; i < specialChars.length; i++) {
                            if (string.indexOf(specialChars[i]) > -1) {
                                return true
                            }
                        }
                        return false;
                    }


                    if (company_postfix.indexOf(" ") >= 0) {
                        true_logic_company_postfix = 0;
                        console.log("contains spaces");
                        document.getElementById('warning_label_company_postfix').style.display = 'none';
                        document.getElementById('warning2_label_company_postfix').style.display = 'block';
                        document.getElementById('warning3_label_company_postfix').style.display = 'none';
                        document.getElementById('warning4_label_company_postfix').style.display = 'none';
                    } else if (checkForSpecialChar(company_postfix)) {
                        true_logic_company_postfix = 0;
                        console.log("contains sc");

                        document.getElementById('warning_label_company_postfix').style.display = 'none';
                        document.getElementById('warning2_label_company_postfix').style.display = 'none';
                        document.getElementById('warning3_label_company_postfix').style.display = 'block';
                        document.getElementById('warning4_label_company_postfix').style.display = 'none';
                    } else {

                        console.log('read change');
                        $.ajax({
                            type: "POST",
                            url: '<?php echo base_url('ajax/A_check_existing_company_postfix') ?>',
                            data: post_id,
                            cache: false,
                            success: function(reading_feedback_1) {
                                $(".return_data_2").html(reading_feedback_1);
                                console.log(reading_feedback_1);


                                if (reading_feedback_1 == "1") {
                                    true_logic_company_postfix = 0;
                                    document.getElementById('warning_label_company_postfix').style.display = 'block';
                                    document.getElementById('warning2_label_company_postfix').style.display = 'none';
                                    document.getElementById('warning3_label_company_postfix').style.display = 'none';
                                    document.getElementById('warning4_label_company_postfix').style.display = 'none';
                                } else {
                                    true_logic_company_postfix = 1;
                                    document.getElementById('warning_label_company_postfix').style.display = 'none';
                                    document.getElementById('warning2_label_company_postfix').style.display = 'none';
                                    document.getElementById('warning3_label_company_postfix').style.display = 'none';
                                    document.getElementById('warning4_label_company_postfix').style.display = 'none';

                                }
                            }
                        });
                    }

                }





            });











            $('#username').change(function() {
                var username = $('#username').val();
                var post_id = 'id=' + username;
                if (username != '') {


                    var specialChars = "<>!#$%^&*()[]{}?:;|'\"\\,/~`=";
                    var checkForSpecialChar = function(string) {
                        for (i = 0; i < specialChars.length; i++) {
                            if (string.indexOf(specialChars[i]) > -1) {
                                return true
                            }
                        }
                        return false;
                    }


                    if (username.indexOf(" ") >= 0) {
                        true_logic_username = 0;
                        console.log("contains spaces");
                        document.getElementById('warning_label_username').style.display = 'none';
                        document.getElementById('warning2_label_username').style.display = 'block';
                        document.getElementById('warning3_label_username').style.display = 'none';
                        document.getElementById('warning4_label_username').style.display = 'none';
                    } else if (checkForSpecialChar(username)) {
                        true_logic_username = 0;
                        console.log("contains sc");

                        document.getElementById('warning_label_username').style.display = 'none';
                        document.getElementById('warning2_label_username').style.display = 'none';
                        document.getElementById('warning3_label_username').style.display = 'block';
                        document.getElementById('warning4_label_username').style.display = 'none';
                    } else {
                        console.log('read change');
                        $.ajax({
                            type: "POST",
                            url: '<?php echo base_url('ajax/A_check_existing_username') ?>',
                            data: post_id,
                            cache: false,
                            success: function(reading_feedback_2) {
                                $(".return_data_2").html(reading_feedback_2);
                                console.log(reading_feedback_2);


                                if (reading_feedback_2 == "1") {
                                    true_logic_username = 0;
                                    document.getElementById('warning_label_username').style.display = 'block';
                                    document.getElementById('warning2_label_username').style.display = 'none';
                                    document.getElementById('warning3_label_username').style.display = 'none';
                                    document.getElementById('warning4_label_username').style.display = 'none';
                                } else {
                                    true_logic_username = 1;
                                    document.getElementById('warning_label_username').style.display = 'none';
                                    document.getElementById('warning2_label_username').style.display = 'none';
                                    document.getElementById('warning3_label_username').style.display = 'none';
                                    document.getElementById('warning4_label_username').style.display = 'none';
                                }
                            }
                        });
                    }

                }





            });








            $('#email').change(function() {
                var email = $('#email').val();
                var post_id = 'id=' + email;
                if (email != '') {


                    var specialChars = "<>!#$%^&*()[]{}?:;|'\"\\,/~`= ";
                    var checkForSpecialChar = function(string) {
                        for (i = 0; i < specialChars.length; i++) {
                            if (string.indexOf(specialChars[i]) > -1) {
                                return true
                            }
                        }
                        return false;
                    }


                    if (email.indexOf("@") < 0) {
                        true_logic_email = 0;
                        console.log("contains spaces");
                        document.getElementById('warning2_label_email').style.display = 'block';
                        document.getElementById('warning3_label_email').style.display = 'none';
                        document.getElementById('warning4_label_email').style.display = 'none';
                    } else if (checkForSpecialChar(email)) {
                        true_logic_email = 0;
                        console.log("contains sc");

                        document.getElementById('warning2_label_email').style.display = 'none';
                        document.getElementById('warning3_label_email').style.display = 'block';
                        document.getElementById('warning4_label_email').style.display = 'none';
                    } else {
                        true_logic_email = 1;
                        document.getElementById('warning2_label_email').style.display = 'none';
                        document.getElementById('warning3_label_email').style.display = 'none';
                        document.getElementById('warning4_label_email').style.display = 'none';
                    }

                }





            });








            $('#phone').change(function() {
                var phone = $('#phone').val();
                var post_id = 'id=' + phone;
                if (phone != '') {


                    var specialChars = "<>@!#$%^&*()_+[]{}?:;|'\"\\,./~`-=qwertyuiopasdfghjklzxcvbnm";
                    var checkForSpecialChar = function(string) {
                        for (i = 0; i < specialChars.length; i++) {
                            if (string.indexOf(specialChars[i]) > -1) {
                                return true
                            }
                        }
                        return false;
                    }


                    if (phone.indexOf(" ") >= 0) {
                        true_logic_phone = 0;
                        console.log("contains spaces");
                        document.getElementById('warning2_label_phone').style.display = 'block';
                        document.getElementById('warning3_label_phone').style.display = 'none';
                        document.getElementById('warning4_label_phone').style.display = 'none';
                    } else if (checkForSpecialChar(phone)) {
                        true_logic_phone = 0;
                        console.log("contains sc");

                        document.getElementById('warning2_label_phone').style.display = 'none';
                        document.getElementById('warning3_label_phone').style.display = 'block';
                        document.getElementById('warning4_label_phone').style.display = 'none';
                    } else {
                        true_logic_phone = 1;
                        document.getElementById('warning2_label_phone').style.display = 'none';
                        document.getElementById('warning3_label_phone').style.display = 'none';
                        document.getElementById('warning4_label_phone').style.display = 'none';
                    }

                }





            });









            $('#password').change(function() {
                var password = $('#password').val();
                var post_id = 'id=' + password;
                if (password != '') {


                    var specialChars = "<>!#$%^&*()_+[]{}?:;|'\"\\,./~`-=";
                    var checkForSpecialChar = function(string) {
                        for (i = 0; i < specialChars.length; i++) {
                            if (string.indexOf(specialChars[i]) > -1) {
                                return true
                            }
                        }
                        return false;
                    }


                    if (password.length < 8) {
                        true_logic_password = 0;
                        console.log("contains spaces");
                        document.getElementById('warning2_label_password').style.display = 'block';
                        document.getElementById('warning3_label_password').style.display = 'none';
                        document.getElementById('warning4_label_password').style.display = 'none';
                    } else if (checkForSpecialChar(password)) {
                        true_logic_password = 0;
                        console.log("contains sc");

                        document.getElementById('warning2_label_password').style.display = 'none';
                        document.getElementById('warning3_label_password').style.display = 'block';
                        document.getElementById('warning4_label_password').style.display = 'none';
                    }else if (confirm_password.length>=8 && confirm_password != password) {
                        true_logic_confirm_password = 0;
                        console.log("pass not match");
                        document.getElementById('warning2_label_confirm_password').style.display = 'block';
                        document.getElementById('warning4_label_confirm_password').style.display = 'none';



                    } else {
                        true_logic_password = 1;
                        document.getElementById('warning2_label_password').style.display = 'none';
                        document.getElementById('warning3_label_password').style.display = 'none';
                        document.getElementById('warning4_label_password').style.display = 'none';
                    }

                }





            });











            $('#confirm_password').change(function() {
                var confirm_password = $('#confirm_password').val();
                var password = $('#password').val();


                console.log(confirm_password);
                if (confirm_password != '') {




                    if (confirm_password != password) {
                        true_logic_confirm_password = 0;
                        console.log("pass not match");
                        document.getElementById('warning2_label_confirm_password').style.display = 'block';
                        document.getElementById('warning4_label_confirm_password').style.display = 'none';

                    } else {
                        true_logic_confirm_password = 1;
                        document.getElementById('warning2_label_confirm_password').style.display = 'none';
                        document.getElementById('warning4_label_confirm_password').style.display = 'none';
                    }

                }





            });



















        });




        mycode();

        function mycode() {

            var company_postfix = $('#company_postfix').val();
            var username = $('#username').val();
            var email = $('#email').val();
            var tanggal_gajian = $('#tanggal_gajian').val();
            var phone = $('#phone').val();
            var password = $('#password').val();
            var confirm_password = $('#confirm_password').val();

            console.log(username);
            document.getElementById("modal_username").text = username + "@" + company_postfix;
            document.getElementById("modal_tanggal_gajian").text = "Setiap tanggal "+tanggal_gajian;
            document.getElementById("modal_phone").text = phone;
            document.getElementById("modal_email").text = email;


            tid = setTimeout(mycode, 500); // repeat myself
        }

        function validateForm() {

            var company_postfix = $('#company_postfix').val();
            var username = $('#username').val();
            var email = $('#email').val();
            var phone = $('#phone').val();
            var password = $('#password').val();
            var confirm_password = $('#confirm_password').val();
            if (company_postfix == "") {
                document.getElementById('warning4_label_company_postfix').style.display = 'block';
            }
            if (username == "") {
                document.getElementById('warning4_label_username').style.display = 'block';
            }
            if (email == "") {
                document.getElementById('warning4_label_email').style.display = 'block';
            }
            if (phone == "") {
                document.getElementById('warning4_label_phone').style.display = 'block';
            }
            if (password == "") {
                document.getElementById('warning4_label_password').style.display = 'block';
            }
            if (confirm_password == "") {
                document.getElementById('warning4_label_confirm_password').style.display = 'block';
            }


            if (company_postfix == "" || username == "" || email == "" || phone == "" || password == "" || confirm_password == "" || true_logic_company_postfix == 0 || true_logic_username == 0 || true_logic_email == 0 || true_logic_phone == 0 || true_logic_password == 0 || true_logic_confirm_password == 0) {
                return false;
            }
        }
    </script>


</body>

</html>


<style type="text/css">
    .warning_label_company_postfix {
        display: none;
        color: red;
        font-size: 12px;
        font-weight: bold;
    }


    .warning2_label_company_postfix {
        display: none;
        color: red;
        font-size: 12px;
        font-weight: bold;
    }

    .warning3_label_company_postfix {
        display: none;
        color: red;
        font-size: 12px;
        font-weight: bold;
    }

    .warning4_label_company_postfix {
        display: none;
        color: red;
        font-size: 12px;
        font-weight: bold;
    }



    .warning_label_username {
        display: none;
        color: red;
        font-size: 12px;
        font-weight: bold;
    }

    .warning2_label_username {
        display: none;
        color: red;
        font-size: 12px;
        font-weight: bold;
    }

    .warning3_label_username {
        display: none;
        color: red;
        font-size: 12px;
        font-weight: bold;
    }


    .warning4_label_username {
        display: none;
        color: red;
        font-size: 12px;
        font-weight: bold;
    }


    .warning2_label_email {
        display: none;
        color: red;
        font-size: 12px;
        font-weight: bold;
    }

    .warning3_label_email {
        display: none;
        color: red;
        font-size: 12px;
        font-weight: bold;
    }



    .warning4_label_email {
        display: none;
        color: red;
        font-size: 12px;
        font-weight: bold;
    }


    .warning2_label_phone {
        display: none;
        color: red;
        font-size: 12px;
        font-weight: bold;
    }

    .warning3_label_phone {
        display: none;
        color: red;
        font-size: 12px;
        font-weight: bold;
    }




    .warning4_label_phone {
        display: none;
        color: red;
        font-size: 12px;
        font-weight: bold;
    }


    .warning2_label_password {
        display: none;
        color: red;
        font-size: 12px;
        font-weight: bold;
    }

    .warning3_label_password {
        display: none;
        color: red;
        font-size: 12px;
        font-weight: bold;
    }



    .warning4_label_password {
        display: none;
        color: red;
        font-size: 12px;
        font-weight: bold;
    }


    .warning2_label_confirm_password {
        display: none;
        color: red;
        font-size: 12px;
        font-weight: bold;
    }

    .warning4_label_confirm_password {
        display: none;
        color: red;
        font-size: 12px;
        font-weight: bold;
    }

    .tanggal_gajian
    {
        margin-left: 10px;
        border-radius: 5px;
    }



    .modal_text_right {
        margin-left: 10px;
        text-align: left;
        font-size: 14px;
        vertical-align: super;
    }


    .form-left a
    {
        color: white;
    }
</style>