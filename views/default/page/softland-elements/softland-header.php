<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$site_url = elgg_get_site_url();
$site = elgg_get_site_entity();
$site_name = $site->name;
?>
 <meta charset="utf-8">
  <title><?php echo $site_name;?></title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,700|Roboto:300,400,700&display=swap" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?php echo $site_url?>mod/softland_theme/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo $site_url?>mod/softland_theme/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?php echo $site_url?>mod/softland_theme/vendor/line-awesome/css/line-awesome.min.css" rel="stylesheet">
  <link href="<?php echo $site_url?>mod/softland_theme/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?php echo $site_url?>mod/softland_theme/vendor/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo $site_url?>mod/softland_theme/vendor/css/style.css" rel="stylesheet">


 