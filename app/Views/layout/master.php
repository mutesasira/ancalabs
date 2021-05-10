<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ANCA Biotech - Laboratory Booking System</title>
        <link rel="stylesheet" href="<?= base_url('public/assets/venders/animate.css/animate.min.css') ?>"/>
        <link rel="stylesheet" href="<?= base_url('public/assets/venders/bootstrap-5.0.0-dist/css/bootstrap.min.css') ?>"/>
        <link rel="stylesheet" href="<?= base_url('public/assets/venders/bootstrap-icons/bootstrap-icons.css') ?>"/>
        <link rel="stylesheet" href="<?= base_url('public/assets/venders/boxicons/css/boxicons.min.css') ?>"/>
        <link rel="stylesheet" href="<?= base_url('public/assets/venders/fontawesome-free/css/all.min.css') ?>"/>
        <link rel="stylesheet" href="<?= base_url('public/assets/venders/glightbox/css/glightbox.min.css') ?>"/>
        <link rel="stylesheet" href="<?= base_url('public/assets/venders/remixicon/remixicon.css') ?>"/>
        <link rel="stylesheet" href="<?= base_url('public/assets/venders/swiper/swiper-bundle.min.css') ?>"/>
        <link rel="stylesheet" href="<?= base_url('public/assets/venders/datepicker.css') ?>"/>
        <link rel="stylesheet" href="<?= base_url('public/assets/css/style.css') ?>"/>
    </head>
    <body>
	    <div class="container">
        <!-- End Header -->
        <!-- ======= Hero Section ======= -->
		<?= $this->include('partials/navbar'); ?>
		
        <?= $this->renderSection("content"); ?>

        <!-- ======= Footer ======= -->
		<?= $this->include('partials/footer'); ?>
		
		</div>

      <!--<script src="<?= base_url('public/assets/js/jquery.js') ?>"></script>-->
        <script src="<?= base_url('public/assets/venders/bootstrap-5.0.0-dist/js/bootstrap.min.js') ?>"></script>
    </body>
</html>
