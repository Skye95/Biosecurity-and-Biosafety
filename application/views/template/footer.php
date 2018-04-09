<br/>
<br/>
<footer class="bg-dark">
    <div class="container">
        <?php if ($this->session->userdata('isLogin')){ ?>
        <p class="text-center text-white">
            Currently logged in as: <?php echo $this->session->userdata('account_name'); ?> | Copyright &copy; Biosafety and Biosecurity Online System - SKY Team 2018
        </p>
        <?php } else { ?>
        <p class="text-center text-white">
            Copyright &copy; Biosafety and Biosecurity Online System - SKY Team 2018
        </p>
        <?php } ?>
    </div>
</footer>