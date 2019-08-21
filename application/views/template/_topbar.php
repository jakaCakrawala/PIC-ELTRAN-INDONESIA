<header class="header header-normal">
            <!-- end topbar -->

            <div class="container">
                <nav class="navbar navbar-default yamm">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="logo-normal">
                            <a class="navbar-brand" href="<?php echo site_url('home'); ?>"><img src="<?php echo site_url('assets/images/logo.png'); ?>" alt="" width="65" height="69"></a>
                        </div>
                    </div>

                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="<?php echo site_url('home'); ?>">Home</a></li>
                            <li><a href="<?php echo site_url('about_us'); ?>">About Us</a></li>
                             <li class="dropdown hassubmenu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Business Line <span class="fa fa-angle-down"></span></a>

                                <ul class="dropdown-menu" role="menu">
                                    <?php foreach ($category as $val) { ?>
                                    <li><a href="<?php echo site_url('bussinees_line/page/'.$val->id); ?>"><?php echo $val->name; ?></a></li>
                                    <?php } ?>
                                </ul>
                            </li>

                            <li><a href="<?php echo site_url('news'); ?>" >News </a></li>
                            <li><a href="<?php echo site_url('contact'); ?>">Contact</a></li>
                            <li><a href="<?php echo site_url('login'); ?>">Login</a></li>

                        </ul>
                    </div>
                </nav><!-- end navbar -->
            </div><!-- end container -->
        </header>