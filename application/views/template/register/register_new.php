<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Halaman Registrasi</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/Regis_new/css/nunito-font.css">

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/Regis_new/css/style.css" />
</head>

<!-- Untuk flashdata notif error !-->
<?php
if ($this->session->flashdata('error') != '') {
    echo '<div class="alert alert-danger" role="alert">';
    echo $this->session->flashdata('error');
    echo '</div>';
}
?>

<body class="form-v6">
    <div class="page-content">
        <div class="form-v6-content">
            <div class="form-left">
                <img src="<?php echo base_url() ?>assets/Regis_new/images/form-v6.jpg" alt="form">
            </div>
            <form class="form-detail" action="<?php echo base_url(); ?>index.php/C_register/proses" method="post">
                <h2>Form Registrasi</h2>
                <div class="form-row">
                    <input type="text" name="username" id="username" class="input-text" placeholder="Username" required>
                    <span id="username_result"></span>
                </div>
                <div class="form-row">
                    <input type="text" name="email" id="your-email" class="input-text" placeholder="Email" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
                </div>
                <div class="form-row">
                    <input type="text" name="phone" id="your-phone" class="input-text" placeholder="Nomor Telepon" required>
                </div>
                <div class="form-row">
                    <input type="text" name="name" id="name" class="input-text" placeholder="Nama Perusahaan" required>
                </div>
                <div class="form-row">
                    <input type="password" name="password" id="password" class="input-text" placeholder="Password" required>
                </div>
                <div class="form-row">
                    <input type="password" name="comfirm-password" id="comfirm-password" class="input-text" placeholder="Konfirmasi Password" required>
                </div>
                <div class="form-row-last">
                    <input type="submit" name="register" class="register" value="Registrasi">
                </div>
            </form>
        </div>
    </div>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>

    <script language="JavaScript" type="text/javascript">
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