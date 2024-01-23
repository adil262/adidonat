<?php
   session_start();
      include "includes/head.php";

      if(isset($_POST['insert'])){
         $nama = $_POST['nama'];
         $phone = $_POST['phonenumber'];
         $email = $_POST['email'];
         $massage = $_POST['massage'];

         $query = mysqli_query($link, "INSERT INTO contact (nama_contact , hp_contact , email_contact , massage_contact) 
                              VALUE ('$nama' , '$phone' , '$email' , '$massage')");
         
      }
?>
<body class="main-layout">
   <!-- loader  -->
   <div class="loader_bg">
      <div class="loader"><img src="assets/images/loading.gif" alt="#" /></div>
   </div>
   <!-- end loader -->
   <!-- header -->
   <header>
      <!-- header inner -->
      <div class="head_top">
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <!-- <a href="index.html"><img src="images/logo.png" alt="#" /></a> -->
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                           data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false"
                           aria-label="Toggle navigation">
                           <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item">
                                 <a class="nav-link" href="home.php"> Home </a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#about">About</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#contact">Contact us</a>
                              </li>
                           </ul>
                           <div class="sign_btn"><a href="admin/login.php">Sign in</a></div>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
         <!-- end header inner -->
         <!-- end header -->
         <!-- banner -->
         <section class="banner_main">
            <div class="container-fluid">
               <div class="row d_flex">
                  <div class="col-md-5">
                     <div class="text-bg">
                        <h1>Donut Worry <center>be<br>Happy</center>
                        </h1>
                        <span>Ayo Nikmati Sekarang!!</span>
                        <!-- <span>Donut Worry be Happy</span> -->
                        <a href="index.php">Buy Now</a>
                     </div>
                  </div>
                  <div class="col-md-7 padding_right1">
                     <div class="text-img">
                        <figure><img src="assets/images/top.png" alt="#" /></figure>
                        <h3>01</h3>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </div>
   </header>
   <!-- end banner -->
   <!-- about -->
   <div id="about" class="about">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="titlepage">
                  <h2>Tentang Adi Donat</h2>
                  <span>Berdiri sejak tahun 2019</span>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-8 offset-md-2 ">
               <div class="about_box ">
                  <figure><img src="assets/images/top.png" alt="#" /></figure>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- about -->
   <!-- best -->
   <div id="" class="best">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="titlepage">
                  <h2>Dibuat Dengan Terbaik</h2>
                  <!-- <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                     labore et dolore magna</span> -->
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-4">
               <div class="best_box">
                  <h4>BAHAN <br>TRADISIONAL</h4>
                  <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod t dolor in reprehenderit in
                     voluptate velit</p> -->
               </div>
            </div>
            <div class="col-md-4">
               <div class="best_box">
                  <h4>4 SEHAT <br> 5 SEMPURNA</h4>
                  <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod t dolor in reprehenderit in
                     voluptate velit</p> -->
               </div>
            </div>
            <div class="col-md-4">
               <div class="best_box">
                  <h4>100% <br> High Quality</h4>
                  <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod t dolor in reprehenderit in
                     voluptate velit</p> -->
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- end best -->
   <!-- request -->
   
   <!-- <div id="contact" class="request">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="titlepage">
                  <h2>Hubungi Kami</h2>
                  <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor <br>
                     incididunt ut labore et dolore magna</span>
               </div>
            </div>
         </div>
        
         <div class="row">
            <div class="col-sm-12">
               <div class="black_bg">
                  <div class="row">
                     <div class="col-md-7 ">
                        <form class="main_form">
                           <div class="row">
                              <div class="col-md-12 ">
                                 <input class="contactus" placeholder="Nama" type="text" name="nama" required>
                              </div>
                              <div class="col-md-12">
                                 <input class="contactus" placeholder="Phone Number" type="number" name="phonenumber" required>
                              </div>
                              <div class="col-md-12">
                                 <input class="contactus" placeholder="Email" type="text" name="email" required>
                              </div>
                              <div class="col-md-12">
                                 <textarea class="textarea" placeholder="Message" type="text"
                                    name="massage" required></textarea>
                              </div>
                              <div class="col-sm-12">
                                 <input type="submit" name="insert" value="Tambah" class="send_btn" ></input>
                                 <!-- <input type="hidden" name="nama" value="<?=$_POST['nama'];?>">
                                 <input type="hidden" name="phonenumber" value="<?=$_POST['phonenumber'];?>">
                                 <input type="hidden" name="email" value="<?=$_POST['email'];?>">
                                 <input type="hidden" name="massage" value="<?=$_POST['message'];?>"> -->
                              <!-- </div> 
                           </div>
                        </form>
                     </div>
                     <div class="col-md-5">
                        <div class="mane_img">
                           <figure><img src="assets/images/mane_img.jpg" alt="#" /></figure>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div> -->
   <!-- end request -->
   <!-- two_box section -->
   <div class="two_box">
      <div class="container-fluid">
         <div class="row d_flex">
            <div class="col-md-6">
               <div class="two_box_img">
                  <figure><img src="assets/images/top.png" alt="#" /></figure>
               </div>
            </div>
            <div class="col-md-6">
               <div class="two_box_img">
                  <h2><span class="offer"> </span>Ada Penawaran Menarik Setiap Harinya</h2>
                  <p>Harga terjangkau dan setiap bulannya memiliki varian rasa baru. Kapan lagi mendapatkan promo menarik dengan varian rasa yang beragam</p>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- end two_box section -->
   <!-- testimonial -->
   <div class="testimonial">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="titlepage">
                  <h2>Testimoni</h2>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-12">
               <div id="myCarousel" class="carousel slide testimonial_Carousel " data-ride="carousel">
                  <ol class="carousel-indicators">
                     <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                     <li data-target="#myCarousel" data-slide-to="1"></li>
                     <li data-target="#myCarousel" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="container">
                           <div class="carousel-caption ">
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="test_box">
                                       <h3>Michl ro</h3>
                                       <p><i class="padd_rightt0"><img src="assets/images/te1.png" alt="#" /></i>Enaak kali waak..Donatnya lembut kaliii <i class="padd_leftt0"><img src="assets/images/te2.png"
                                                alt="#" /></i> <br>Sering-Sering ngadain promoin min</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="container">
                           <div class="carousel-caption">
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="test_box">
                                       <h3>Angel</h3>
                                       <p><i class="padd_rightt0"><img src="assets/images/te1.png" alt="#" /></i>Enak banget bikin nagih <i class="padd_leftt0"><img src="assets/images/te2.png"
                                                alt="#" /></i> <br>Kapan-kapan order lagi kak</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="container">
                           <div class="carousel-caption">
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="test_box">
                                       <h3>Disa</h3>
                                       <p><i class="padd_rightt0"><img src="assets/images/te1.png" alt="#" /></i>Yang coklatnya enak banget, Greenteanya juga dapat banget khasnya greentea<i class="padd_leftt0"><img src="assets/images/te2.png"
                                                alt="#" /></i> <br>Tapi kurang, kurang banyaak :)</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                     <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                     <span class="carousel-control-next-icon" aria-hidden="true"></span>
                     <span class="sr-only">Next</span>
                  </a>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- end testimonial -->
   <!--  footer -->
   <footer>
         <div class="copyright">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <p>© 2021 All Rights Reserved. Design by Adi Donat</a>
                     </p>
                  </div>
               </div>
            </div>
         </div>
   </footer>
   <!-- end footer -->
   <!-- Javascript files-->
   <script src="assets/js/jquery.min.js"></script>
   <script src="assets/js/popper.min.js"></script>
   <script src="assets/js/bootstrap.bundle.min.js"></script>
   <script src="assets/js/jquery-3.0.0.min.js"></script>
   <script src="assets/js/plugin.js"></script>
   <!-- sidebar -->
   <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="assets/js/custom.js"></script>
   <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</body>

</html>