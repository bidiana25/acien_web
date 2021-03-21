<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Pendaftaran Acien Global Indonesia</title>
    <!-- Mobile Specific Metas -->
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
                <p class="text-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et molestie ac feugiat sed. Diam volutpat commodo.</p>
                <p class="text-2"><span>Eu ultrices:</span> Vitae auctor eu augue ut. Malesuada nunc vel risus commodo viverra. Praesent elementum facilisis leo vel.</p>
                <form action="<?php echo site_url('Login'); ?>" method="post">
                    <div class="form-left-last">
                        <input type="submit" name="account" class="account" value="Sudah Memiliki Akun">
                    </div>
                </form>
            </div>
            <form class="form-detail" action="#" method="post" id="myform">
                <h2>Form Pendaftaran</h2>
                <div class="form-row">
                    <label for="Username">Username</label>
                    <br />
                    <label id="username_result"></label>
                    <input type="text" name="username" id="username" class="input-text" required>
                </div>
                <div class="form-row">
                    <label for="Email">Email</label>
                    <input type="email" name="email" id="email" class="input-text" required>
                </div>
                <div class="form-row">
                    <label for="Nama Perusahaan">Nama Perusahaan</label>
                    <br />
                    <label id="name_result"></label>
                    <input type="text" name="name" id="name" class="input-text" required>

                </div>
                <div class="form-row">
                    <label for="Nomor Telepon">Nomor Telepon</label>
                    <input type="text" name="phone" id="nomor_telepon" class="input-text" required>
                </div>
                <div class="form-group">
                    <div class="form-row form-row-1 ">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="input-text" required>
                    </div>
                    <div class="form-row form-row-1">
                        <label for="comfirm-password">Konfirmasi Password</label>
                        <input type="password" name="comfirm_password" id="comfirm_password" class="input-text" required>
                    </div>
                </div>
                <div class="form-row-last">
                    <input type="submit" name="register" class="register" value="Register">
                </div>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <script>
        // just for the demos, avoids form submit
        jQuery.validator.setDefaults({
            debug: true,
            success: function(label) {
                label.attr('id', 'valid');
            },
        });
        $("#myform").validate({
            rules: {
                password: "required",
                comfirm_password: {
                    equalTo: "#password"
                }
            },
            messages: {
                name: {
                    required: "Silahkan Isi Nama Perusahaan"
                },
                password: {
                    required: "Silahkan Isi Password"
                },
                comfirm_password: {
                    required: "Silahkan Isi Konfirmasi Password",
                    equalTo: "Password Salah"
                }
            }
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#username').change(function() {
                var username = $('#username').val();
                if (username != '') {
                    $.ajax({
                        url: "<?php echo base_url(); ?>C_register/check_username_avalibility",
                        method: "POST",
                        data: {
                            username: username
                        },
                        success: function(data) {
                            $('#username_result').html(data);
                        }
                    });
                }
            });
            $('#name').change(function() {
                var name = $('#name').val();
                if (name != '') {
                    $.ajax({
                        url: "<?php echo base_url(); ?>C_register/check_name_avalibility",
                        method: "POST",
                        data: {
                            name: name
                        },
                        success: function(data) {
                            $('#name_result').html(data);
                        }
                    });
                }
            });
        });
    </script>


</body>

</html>