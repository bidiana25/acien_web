<header id="header" class="fixed-top">
    <div class="container">

        <div class="logo float-left">
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <h1 class="text-light"><a href="#header"><span>NewBiz</span></a></h1> -->
            <a href="#intro" class="scrollto"><img src="<?php echo base_url() ?>assets/NewBiz/img/acien.png" alt="" class="img-fluid"></a>
        </div>

        <nav class="main-nav float-right d-none d-lg-block">
            <ul>
                <li class="active"><a href="#intro">Home</a></li>
                <li><a href="<?= base_url('c_dashboard/#about') ?>">About Us</a></li>
                <li><a href="<?= base_url('c_dashboard/#services') ?>">Services</a></li>
                <li><a href="<?= base_url('c_dashboard/#portfolio') ?>">Portfolio</a></li>
                <li><a href="<?= base_url('c_dashboard/#team') ?>">Team</a></li>

                <li><a href="<?= base_url('c_dashboard/#contact') ?>">Contact Us</a></li>

                <?php if (is_login()) :  ?>
                    <li class="drop-down"><a><?= substr($this->session->userdata('username'), 0, 10) ?></a>
                        <ul>
                            <li><a href="<?= base_url('status_kasir') ?>">Status Kasir</a></li>

                            <li><a href="#">Setting</a></li>

                        </ul>
                    </li>
                    <li><a href="<?= base_url('/login/logout') ?>" class="button">Logout</a></li>
                <?php else : ?>
                    <li><a href="<?= base_url('login') ?>" class="button">Masuk</a></li>
                    <li><a href="<?= base_url('/Register') ?>">Register</a></li>
                <?php endif; ?>
            </ul>
        </nav><!-- .main-nav -->

    </div>
</header><!-- #header -->






<!--

<li class="drop-down"><a href="">Drop Down</a>
                    <ul>
                        <li><a href="#">Drop Down 1</a></li>
                        <li class="drop-down"><a href="#">Drop Down 2</a>
                            <ul>
                                <li><a href="#">Deep Drop Down 1</a></li>
                                <li><a href="#">Deep Drop Down 2</a></li>
                                <li><a href="#">Deep Drop Down 3</a></li>
                                <li><a href="#">Deep Drop Down 4</a></li>
                                <li><a href="#">Deep Drop Down 5</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Drop Down 3</a></li>
                        <li><a href="#">Drop Down 4</a></li>
                        <li><a href="#">Drop Down 5</a></li>
                    </ul>
                </li>




    -->