<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Stylish Portfolio - Start Bootstrap Template</title>

  <!-- Bootstrap Core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="css/stylish-portfolio.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <a class="menu-toggle rounded" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
      <li class="sidebar-brand">
        <a class="js-scroll-trigger" href="#page-top">Start Bootstrap</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#page-top">Home</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#about">About</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#services">Services</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#portfolio">Portfolio</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#contact">Contact</a>
      </li>
    </ul>
  </nav>

  <!-- Header -->
  <header class="masthead d-flex">
    <div class="container text-center my-auto">
      <h2>HOME</h2>
          <p class="lead mb-5">
            Nama saya adalah Zaidan Fadhil <br>
            saya bersekolah di SMK Taruna Bhakti saya kelas XII RPL 1 <br>
            Dan saya disini akan memberikan experience dan pengalaman saya disini <br>
            selamat menikmati</p>
      <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Experience</a>
    </div>
    <div class="overlay"></div>
  </header>

  <!-- About -->
  <section class="content-section bg-light" id="about">
    <div class="container text-center">
      <div class="row">
        <div class="col-lg-10 mx-auto">
        <h2>EXPERIENCE</h2>
          <p>selama saya bersekolah di SMK Taruna Bhakti saya membuat berbagai macam project<br>
          mulai dari aplikasi pemesanan makanan aplikasi transaksi<br> 
          dengan menggunakan berbagai macam bahasa dari java,JavaScript,html,css,php dll</p>
          <a class="btn btn-dark btn-xl js-scroll-trigger" href="#services">portofolio</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Services -->
  <section class="content-section bg-primary text-white text-center" id="services">
    <div class="container">
      <div class="content-section-heading">
        <h2 class="mb-5">PORTOFOLIO</h2>
      </div>
      <div class="col-lg-10 mx-auto">
          <img src="{{ asset('img/Screenshot.png') }}" alt="" width =500px>
          <p>aplikasi pemesanan makanan</p>
          <video width="720" height="auto" controls>
            <source src="{{ asset('img/bandicam 2020-04-05 19-15-34-395.mp4') }}" type="video/mp4" />
          </video>
          <p>demo aplikasi transaksi</p>
        </div>
      
  </section>

  