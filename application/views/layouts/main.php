<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100i,300,300i,400,700" rel="stylesheet">

    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('tool/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('tool/css/all.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('tool/css/owl.carousel.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('tool/css/style.css'); ?>">

    <script type="text/javascript" src="<?= base_url('tool/js/jquery-3.2.1.slim.min.js'); ?>"></script>

    <title>Login</title>
     <link rel="shortcut icon" type="image/png" href="<?= base_url('tool/img/favicon.png'); ?>">
</head>
<body>
<!--===================== Header Area ================= -->
<div class="header-area">
	<div class="container-fluid">
		<div class="row">
				<div class="logo">
					<?= anchor("home", '<i class="fas fa-home ic"></i>'); ?> 
                    <span>Welcome! To codeIgniter CRUD APP</span>
				</div>
		</div>
	</div>
</div>
<!-- ==================== Bootstrap nav-area ==================-->
<nav class="navbar navbar-expand-lg navbar navbar-light" style="background-color: #4e7f1624;">

    <?= anchor("home", '<i class="fas fa-home ic"></i> CodeIgniter', ['class'=>'navbar-brand']);?> 

 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon"></span>
</button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <?= anchor("home", 'Home', ['class'=>'nav-link']) ?>
        <!-- <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a> -->
      </li>
      <li class="nav-item">
        <?= anchor("projects", 'Projects', ['class'=>'nav-link']) ?>
        
      </li>
      <li class="nav-item active">
        <?= anchor("users/register", 'Register', ['class'=>'nav-link']) ?>
        <!-- <a class="nav-link" href="#">Link</a> -->
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    <!-- logout btn -->
    <?php if($this->session->userdata('logged_in')): ?>
    <ul class="nav navbar-nav navbar-right">
      <li class="nav-item"><a href="<?= base_url()?>users/logout" class="btn btn-warning btn-sm">Logout</a></li>
    </ul>
   <?php endif; ?>
  </div>
</nav>

<div class="padding-bottom"></div>

<!-- ==================== Content area ================= -->
<div class="container">
<div class="row">
    <div class="col-md-3 col-sm-4">
        <?php $this->load->view('users/login_view'); ?>
    </div>
    <div class="col-md-9 col-sm-8">
        <?php $this->load->view($main_view); ?>
    </div>
</div>
</div>

<div class="padding-top"></div>
<!--===================== Footer Area ================= -->
<div class="foter-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 ofsett-3">
                <p>&copy Tahmid Nishat | 2019<br>
                Email : tahmid.ni7@gmail.com</p>
                <div class="social-links">
                      <?= anchor("https://www.facebook.com/iamTahmid.ni7", '<i class="fab fa-facebook ic"></i>',['title'=>'Facebook', 'target'=>'_blank']); ?>
                      <?= anchor("https://github.com/tahmid-ni7", '<i class="fab fa-github ic"></i>',
                      ['title'=>'gitHub', 'target'=>'_blank']); ?>
                      <?= anchor("https://www.instagram.com/tahmid_ni7/", '<i class="fab fa-instagram"></i>', ['title'=>'Instagram', 'target'=>'_blank']); ?>
                </div>
            </div>
        </div>
    </div>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="<?= base_url('tool/js/popper-1.12.9.min.js'); ?>"></script>
    <script type="text/javascript" src="<?= base_url('tool/js/bootstrap.min.js'); ?>"></script>
    <script type="text/javascript" src="<?= base_url('tool/js/all.js'); ?>"></script>
    <script type="text/javascript" src="<?= base_url('tool/js/owl.carousel.min.js'); ?>"></script>
    <script type="text/javascript" src="<?= base_url('tool/js/main.js'); ?>"></script>
</body>
</html>