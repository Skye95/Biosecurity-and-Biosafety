<nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-fixed-top">
    <div class="container">
        <?php if ($this->session->userdata('isLogin')){ ?>
            <a class="navbar-brand" href="<?php echo base_url(); ?>index.php/home/index">Swinburne Biosafety and Biosecurity Online System</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle Navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Notifications</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Settings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>index.php/landing/logout">Logout</a>
                    </li>
                </ul>
            </div>
        <?php } else { ?>
            <a class="navbar-brand" href="<?php echo base_url(); ?>index.php/landing/index">Swinburne Biosafety and Biosecurity Online System</a>
        <?php } ?>
    </div>
</nav>