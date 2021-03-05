<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tracking Covid</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- bootstrap css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <!-- style css -->
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!-- Responsive-->
  <link rel="stylesheet" href="css/responsive.css">
  <!-- fevicon -->
  <link rel="icon" href="images/fevicon.png" type="image/gif" />
  <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
  <!-- Tweaks for older IEs-->
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
  <!-- owl stylesheets --> 
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
  <!-- Favicons -->


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets2/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets2/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets2/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets2/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets2/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets2/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets2/vendor/owl.carousel/assets2/owl.carousel.min.css" rel="stylesheet">
  <link href="assets2/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets2/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medilab - v2.1.1
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>


  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="{{route('index')}}">Home</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets2/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          
          <li><a href="#kasus">Data Kasus</a></li>
          <li><a href="#kasusdunia">Data Kasus Dunia</a></li>
          <li><a href="#kasusindonesia">Data Kasus Indonesia</a></li>
          <li><a href="#protect">Protect</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#news">News</a></li>
          <!-- <li class="drop-down"><a href="">Data Negara</a>
            <ul>
              <li><a href="provinsi">Provinsi</a></li>
              <li><a href="kota">Kota</a></li>
              <li><a href="kecamatan">Kecamatan</a></li>
              <li><a href="kelurahan">Kelurahan</a></li>
              <li><a href="rw">Rw</a></li>
              <li><a href="laporan">Laporan Kasus</a></li>
            </ul> -->
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h1 >Jaga Kesehatan</h1>
      <h2 >Dengan Menerapkan Konsep 3M.</h2>
    </div>
  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="kasus" class="kasus">
      <div class="container-fluid">
      <div class="container " >
                <br><h1 class="display-3 text-center">Tracking Covid</h1>
		<p class="lead m-0 text-center">Coronavirus Global &amp; Indonesia Live Data</p>
        
            <div class="row">
                <div class="col-sm">
                </div>
            </div>
            <br>
            <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card bg-danger img-card box-primary-shadow">
         <div class="card-body">
          <div class="d-flex">
           <div class="text-white">
            <p class="text-white mb-0">TOTAL POSITIF</p>
            <p class="mb-0 number-font">
              <?php echo $posglobal['value'] ?>
            </p>
            <p class="text-white mb-0">ORANG</p>
           </div>
           <div class="ml-auto"> <img src="{{asset('assets/assetfrontend/assets/img/sad.png')}}" width="100" height="100" alt="Positif"> </div>
          </div>
         </div>
        </div>
       </div><!-- COL END -->
       <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card bg-success img-card box-secondary-shadow">
         <div class="card-body">
          <div class="d-flex">
           <div class="text-white">
            <p class="text-white mb-0">TOTAL SEMBUH</p>
            <p class="mb-0 number-font">
              <?php echo $semglobal['value'] ?>
            </p>
            <p class="text-white mb-0">ORANG</p>
           </div>
           <div class="ml-auto"> <img src="{{asset('assets/assetfrontend/assets/img/happy.png')}}" width="100" height="100" alt="Positif"> </div>
          </div>
         </div>
        </div>
       </div><!-- COL END -->
       <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card  bg-secondary img-card box-success-shadow">
         <div class="card-body">
          <div class="d-flex">
           <div class="text-white">
            <p class="text-white mb-0">TOTAL MENINGGAL</p>
            <p class="mb-0 number-font">
              <?php echo $menglobal['value'] ?>
            </p>
            <p class="text-white mb-0">ORANG</p>
           </div>
           <div class="ml-auto"> <img src="{{asset('assets/assetfrontend/assets/img/cry.png')}}" width="100" height="100" alt="Positif"> </div>
          </div>
         </div>
        </div>
       </div><!-- COL END -->
       <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card  bg-info img-card box-success-shadow">
         <div class="card-body">
          <div class="d-flex">
           <div class="text-white">
            <p class="text-white mb-0">INDONESIA</p>
            <p class="mb-0 number-font">{{$positif}}  POSITIF, {{$sembuh}}  SEMBUH, {{$meninggal}} MENINGGAL</p>
           </div>
           <div class="ml-auto"> <img src="{{asset('assets/assetfrontend/assets/img/indo.png')}}" width="100" height="100" alt="Positif"> </div>
          </div>
         </div>
        </div>
       </div>
       <div class="col text-center">
        <h6><br><p>Update terakhir : {{ $tanggal }}</p></h6>
    </div> <!-- COL END -->
     </div>
     <br>
    </section><!-- End About Section -->
    
    <div class="card mb-4" id="kasusdunia">
        <div class="card-header">
            Data Global Coronavirus
        </div>
        <div class="card-body">
          <div style="height:600px;overflow:auto;margin-right:15px;">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>NO.</th>
                            <th>NEGARA</th>
                            <th>POSITIF</th>
                            <th>SEMBUH</th>
                            <th>MENINGGAL</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $no = 1;
                      @endphp
                        @foreach($dunia as $data)
                            <tr>     
                              <th>{{$no++ }}</th>
                              <th> <?php echo $data['attributes']['Country_Region'] ?></th>
                              <th> <?php echo number_format($data['attributes']['Confirmed']) ?></th>
                              <th><?php echo number_format($data['attributes']['Recovered'])?></th>
                              <th><?php echo number_format($data['attributes']['Deaths'])?></th>
                            </tr>
                          @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="card mb-4" id="kasusindonesia">
        <div class="card-header">
                Data Coronavirus Berdasarkan Provinsi di Negara Indonesia
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>NO.</th>
                            <th>PROVINSI</th>
                            <th>POSITIF</th>
                            <th>SEMBUH</th>
                            <th>MENINGGAL</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no=1; @endphp
                        @foreach($tampil as $tmp)
               
                    <tr>
                        <th>{{$no++ }}</th>
                        <th>{{$tmp->nama_provinsi}}</th>
                        <th>{{number_format($tmp->Positif)}}</th>
                        <th>{{number_format($tmp->Sembuh)}}</th>
                        <th>{{number_format($tmp->Meninggal)}}</th>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="protect_section layout_padding" id="protect">
  <div class="container">
     <div class="row">
        <div class="col-sm-12">
           <center><h1 class="protect_taital"><b>How to Protect Yourself</b></h1></center>
            </div>
     </div>
     <br><br>
     <div class="protect_section_2 layout_padding">
        <div class="row">
           <div class="col-md-6">
              <h1 class="hands_text"><a href="#">Wash your <br>hands frequently</a></h1>
              <h1 class="hands_text_2"><a href="#">Maintain social <br>distancing</a></h1>
              <h1 class="hands_text"><a href="#">Avoid touching eyes,<br>nose and mouth</a></h1>
           </div>
           <div class="col-md-6">
              <div class="image_2"><img src="{{asset('assets/images/img-2.png')}}"></div>
           </div>
        </div>
     </div>
  </div>
</div><br><br><br>
<!-- protect section end -->

<div class="about_section layout_padding" id="about">
  <div class="container">
     <div class="row">
        <div class="col-sm-12">
          <center><h1 class="protect_taital"><b>About</b></h1></center><br><br>
           <div class="about_img"><img src="{{asset('assets/images/img-1.png')}}"></div>
        </div>
        <div class="col-md-6">
           </div>
     </div>
  </div>
</div><br><br><br>

<div class="news_section layout_padding" id="news">
  <div class="container">
     <div id="main_slider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
           <div class="carousel-item active">
              <center><h1 class="news_taital"><b>Latest News</b></h1><br></center>
              <div class="news_section_2 layout_padding">
                 <div class="box_main"><center>
                    <div class="image_1"><img src="{{asset('assets/images/news-img.png')}}"></div>
                    <h2 class="design_text">Coronavirus is Very dangerous</h2>
                    <p class="lorem_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look</p>
                    </center>
                 </div>
              </div>
           </div></div></div></div></div></main>

           <div class="copyright_section">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12">
                     <p class="copyright_text"> <center> © 2020 All Rights Reserved</center></p>
                  </div>
               </div>
            </div>
         </div>

  
  <script src="assets2/vendor/jquery/jquery.min.js"></script>
  <script src="assets2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets2/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets2/vendor/php-email-form/validate.js"></script>
  <script src="assets2/vendor/venobox/venobox.min.js"></script>
  <script src="assets2/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets2/vendor/counterup/counterup.min.js"></script>
  <script src="assets2/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets2/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets2/js/main.js"></script>

</body>

</html>