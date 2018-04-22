<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <?php if ($this->session->userdata('isLogin')){ ?>
            <a class="navbar-brand" title="Swinburne Biosafety and Biosafety Online System Home"
			href="<?php echo base_url();?>index.php/home/index">Swinburne BBOS</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle Navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa fa-bell fa-lg fa-fw"></i> Notifications</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>index.php/settings/index"><i class="fa fa-user fa-lg fa-fw"></i> My Account</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>index.php/landing/logout"><i class="fa fa-sign-out fa-lg fa-fw"></i> Log Out</a>
                    </li>
                </ul>
            </div>
        <?php } else { ?>
            <a class="navbar-brand" href="<?php echo base_url(); ?>index.php/landing/index">Swinburne BBOS</a>
        <?php } ?>
    </div>
</nav>