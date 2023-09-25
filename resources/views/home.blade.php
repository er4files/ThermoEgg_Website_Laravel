<!DOCTYPE html>
<html lang="en">
  <head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ThermoEgg - Egg Incubator Monitor</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/templatemo-digimedia-v2.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animated.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.css')}}">

    <!-- Login dan Logout -->
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!-- kontak -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet"
        id="bootstrap-css" />

    <!--suhu realtime-->
    <!-- Panggil file jquery untuk proses realtime -->
    <script type="text/javascript" src="{{('jquery/jquery.min.js')}}"></script>

    <!-- Ajak untuk realtime-->
    <script type="text/javascript">
        $(document).ready(function(){
           setInterval(function(){
                $("#suhu").load("{{url('bacasuhu')}}");
                $("#kelembaban").load("{{url('bacakelembaban')}}");
           },1000); //100ms = 1s
        });
    </script>
  </head>
  <body>
    <!--  Preloader Start -->
    <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- Preloader End -->

    <!-- Pre-header Starts -->
    <div class="pre-header">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-sm-8 col-7">
            <ul class="info">
              <li><a href="mailto:thermoeggcentre@gmail.com" target="_blank"><i class="fa fa-envelope"></i>thermoeggcentre@gmail.com</a></li>
              <li><a href="https://wa.me/6282244286612" target="_blank"><i class="fa fa-phone"></i>+62 822-4428-6612</a></li>
            </ul>
          </div>
          <div class="col-lg-4 col-sm-4 col-5">
            <ul class="info">
              <li><a><b>Welcome {{ auth()->user()->name }} </b></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- Pre-header End -->

    <!-- Header Area Start -->
    <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav class="main-nav">
              <!-- Logo Start -->
              <a class="logo">
                <img src="{{asset('assets/images/logoweb.png')}}" alt="">
              </a>
              <!-- Logo End -->
              <!-- Menu Start -->
              <ul class="nav">
                <li class="scroll-to-section"><a href="#home" class="active">Home</a></li>
                <li class="scroll-to-section"><a href="#monitoring">Monitoring</a></li>
                <li class="scroll-to-section"><a href="#graphic">Graphic</a></li>
                <li class="scroll-to-section"><a href="#tips">Tips & Tricks</a></li>
                <li class="scroll-to-section"><a href="#spotlights">Spotlights</a></li>
                <li class="scroll-to-section"><a href="#contact">Contact</a></li> 
                <li class="scroll-to-section">
                <form action="/logout" method="POST">
                  @csrf
                  <button type="submit" class="btn btn-danger">Logout</button>
                </form>
                </li> 
              </ul>        
              <a class='menu-trigger'>
                  <span>Menu</span>
              </a>
              <!-- Menu End -->
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- Header Area End -->

    <!--home-->
    <div class="main-banner wow fadeIn" id="home" data-wow-duration="1s" data-wow-delay="0.5s">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="row">
              <div class="col-lg-6 align-self-center">
                <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                  <div class="row">
                    <div class="col-lg-12">
                      <h6>Teknik Komputer</h6>
                      <h2>Monitoring Temperature and Humidity in Egg Incubators</h2>
                      <p>Website Monitoring Temperature and Humidity in Egg Incubators adalah sebuah platform yang digunakan untuk memantau suhu dan kelembaban dalam inkubator penetas telur. Platform ini menggunakan teknologi IoT (Internet of Things) dengan menggunakan modul ESP8266 yang terhubung dengan Arduino dan diintegrasikan dengan kerangka kerja Laravel.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                  <img src="{{asset('assets/images/ayam.png')}}" alt="" class="img-fluid animated"><img src="{{asset('assets/images/ayam.png')}}" alt="" class="img-fluid animated">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--monitoring-->
    <div id="monitoring" class="about section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="row">
              <div class="col-lg-6">
                <div class="about-left-image  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                  <img src="{{asset('assets/images/1.png')}}" alt="" >
                </div>
              </div>
              <div class="col-lg-6 align-self-center  wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <div class="about-right-content">
                  <div class="section-heading">
                    <h6>Monitoring</h6>
                    <h4>Suhu dan Kelembaban Pada <em> Inkubator Telur</em></h4>
                    <div class="line-dec"></div>
                  </div>
                </p>
                <div class="table-container">
                  <table class="custom-table">
                    <tr>
                      <td>
                        <div class="data-box">
                          <div>
                            <h4>SUHU</h4>
                          </div>
                          <div>
                            <div>
                              <span id="suhu">0</span> <span>°C</span>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="data-box">
                          <div>
                            <h4>KELEMBABAN</h4>
                          </div>
                          <div>
                            <div>
                              <span id="kelembaban">0</span> <span>%</span>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </table>
                </div>              
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--graphic-->
    <div id="graphic" class="about section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="row">
              <div class="col-lg-6">
                <div class="about-left-image  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                  <img src="{{asset('assets/images/2.png')}}" alt="">
                </div>
              </div>
              <div class="col-lg-6 align-self-center  wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <div class="about-right-content">
                  <div class="section-heading">
                    <h6>Graphic</h6>
                    <h4>Suhu dan Kelembaban Pada <em> Inkubator Telur</em></h4>
                    <div class="line-dec"></div>
                  </div>
                  <br>
                  <div class="border-first-button"><a href="graph">Grafik Suhu Dan Kelembaban</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--tips&trick-->
    <div id="tips" class="services section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
              <h6>Tips & Tricks</h6>
              <h4>Penetasan Telur Dengan <em>Inkubator</em></h4>
              <div class="line-dec"></div>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="naccs">
              <div class="grid">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="menu">
                      <div class="first-thumb active">
                        <div class="thumb">
                          <span class="icon"><img src="{{ asset('assets/images/service-icon-01.png')}}" alt=""></span>
                          Persiapan
                        </div>
                      </div>
                      <div>
                        <div class="thumb">                 
                          <span class="icon"><img src="{{ asset('assets/images/service-icon-02.png')}}" alt=""></span>
                          Suhu
                        </div>
                      </div>
                      <div>
                        <div class="thumb">                 
                          <span class="icon"><img src="{{ asset('assets/images/service-icon-03.png')}}" alt=""></span>
                          Pembalikan Telur
                        </div>
                      </div>
                      <div>
                        <div class="thumb">                 
                          <span class="icon"><img src="{{ asset('assets/images/service-icon-04.png')}}" alt=""></span>
                          Perawatan
                        </div>
                      </div>
                      <div class="last-thumb">
                        <div class="thumb">                 
                          <span class="icon"><img src="{{ asset('assets/images/service-icon-01.png')}}" alt=""></span>
                          Waktu Penetasan
                        </div>
                      </div>
                    </div>
                  </div> 
                  <div class="col-lg-12">
                    <ul class="nacc">
                      <li class="active">
                        <div>
                          <div class="thumb">
                            <div class="row">
                              <div class="col-lg-6 align-self-center">
                                <div class="left-text">
                                  <h4>Persiapan</h4>
                                  <p>Pilih telur yang sehat, bebas dari retakan atau kerusakan lainnya. Pastikan kulit telur utuh dan tidak ada kerusakan yang dapat mempengaruhi perkembangan embrio.</p>
                                  <p>Cucilah tangan Anda secara menyeluruh sebelum menangani telur. Hal ini penting untuk mencegah kontaminasi mikroba yang dapat merugikan perkembangan embrio.</p>
                                </div>
                              </div>
                              <div class="col-lg-6 align-self-center">
                                <div class="right-image">
                                  <img src="{{ asset('assets/images/a1.png')}}" alt="">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div>
                          <div class="thumb">
                            <div class="row">
                              <div class="col-lg-6 align-self-center">
                                <div class="left-text">
                                  <h4>Suhu &amp; Kelembaban</h4>
                                  <p>Sesuaikan suhu inkubator sesuai dengan jenis telur yang akan diinkubasi. Setiap jenis telur memiliki suhu yang optimal untuk perkembangan embrio yang sehat. Pastikan untuk mengikuti petunjuk spesifik mengenai suhu yang tepat.</p>
                                  <p>Jaga kelembaban yang tepat di dalam inkubator. Pengaturan kelembaban yang baik penting untuk menjaga kondisi lingkungan yang optimal bagi embrio. Gunakan ember air atau alat pengukur kelembaban yang sesuai untuk menjaga kelembaban yang tepat.</p>
                                </div>
                              </div>
                              <div class="col-lg-6 align-self-center">
                                <div class="right-image">
                                  <img src="{{ asset('assets/images/a2.png')}}" alt="">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div>
                          <div class="thumb">
                            <div class="row">
                              <div class="col-lg-6 align-self-center">
                                <div class="left-text">
                                  <h4>Pembalikan Telur</h4>
                                  <p>Balikkan telur secara teratur, minimal 2-3 kali sehari. Hal ini membantu memastikan perkembangan embrio yang merata dan mencegah adhesi embrio pada dinding telur.</p>
                                  <p>Ingatlah untuk tidak membalik telur dalam tiga hari terakhir sebelum penetasan. Pada tahap ini, embrio memasuki fase akhir perkembangannya dan mempersiapkan diri untuk menetas.</p>
                                </div>
                              </div>
                              <div class="col-lg-6 align-self-center">
                                <div class="right-image">
                                  <img src="{{ asset('assets/images/a3.png')}}" alt="">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div>
                          <div class="thumb">
                            <div class="row">
                              <div class="col-lg-6 align-self-center">
                                <div class="left-text">
                                  <h4>Pemantauan &amp; Perawatan</h4>
                                  <p>Periksa telur secara rutin menggunakan cahaya penetas untuk melihat perkembangan embrio. Observasi yang teliti memungkinkan Anda untuk memonitor kesehatan dan pertumbuhan embrio dengan lebih baik.</p>
                                  <p>Jaga kebersihan inkubator dengan membersihkannya secara teratur. Hindari kontaminasi mikroba yang dapat mempengaruhi perkembangan embrio dengan membersihkan inkubator secara teratur sesuai instruksi yang diberikan.</p>
                                </div>
                              </div>
                              <div class="col-lg-6 align-self-center">
                                <div class="right-image">
                                  <img src="{{ asset('assets/images/a4.png')}}" alt="">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div>
                          <div class="thumb">
                            <div class="row">
                              <div class="col-lg-6 align-self-center">
                                <div class="left-text">
                                  <h4>Waktu Penetasan</h4>
                                  <p>Catat tanggal penetasan dan ikuti panduan waktu penetasan yang tepat untuk jenis telur yang diinkubasi. Setiap jenis telur memiliki periode inkubasi yang berbeda, jadi penting untuk mengikuti petunjuk yang spesifik.</p>
                                  <p>Bersabarlah dan hindari mencoba mempercepat proses penetasan. Setiap embrio memiliki tahapan perkembangan yang berbeda dan membutuhkan waktu yang tepat untuk menetas. Mempercepat proses dapat merusak kesehatan dan vitalitas anak ayam atau hewan yang menetas.</p>
                                </div>
                              </div>
                              <div class="col-lg-6 align-self-center">
                                <div class="right-image">
                                  <img src="{{ asset('assets/images/a5.png')}}" alt="">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>          
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--Spotlights-->
    <div id="spotlights" class="our-portfolio section">
      <div class="container">
        <div class="row">
          <div class="col-lg-5">
            <div class="section-heading wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
              <h6>User Spotlights</h6>
              <h4>User Experience While Using This <em>Website</em></h4>
              <div class="border-first-button"><a href="customer">See User Experience</a></div>
        
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
        <div class="row">
          <div class="col-lg-12">
            <div class="loop owl-carousel">
              <div class="item">
                <a href="#">
                  <div class="portfolio-item">
                  <div class="thumb">
                    <img src="{{ asset('assets/images/era.jpg')}}" alt="">
                  </div>
                  <div class="down-content">
                    <h4>Rahmad Era Sugiarto</h4>
                    <span>Programmer</span>
                  </div>
                </div>
                </a>  
              </div>
              <div class="item">
                <a href="#">
                  <div class="portfolio-item">
                  <div class="thumb">
                    <img src="{{ asset('assets/images/johardio.jpg')}}" alt="">
                  </div>
                  <div class="down-content">
                    <h4>Johardio Eka Putra Ariv</h4>
                    <span>Network Manager</span>
                  </div>
                </div>
                </a>  
              </div>
              <div class="item">
                <a href="#">
                  <div class="portfolio-item">
                  <div class="thumb">
                    <img src="{{ asset('assets/images/tutik.jpg')}}" alt="">
                  </div>
                  <div class="down-content">
                    <h4>Tutik Noer Kholifah</h4>
                    <span>Miliyarder</span>
                  </div>
                </div>
                </a>  
              </div>
              <div class="item">
                <a href="#">
                  <div class="portfolio-item">
                  <div class="thumb">
                    <img src="{{ asset('assets/images/elonmusk.jpg')}}" alt="">
                  </div>
                  <div class="down-content">
                    <h4>Elon Musk</h4>
                    <span>Investor</span>
                  </div>
                </div>
                </a>  
              </div>
              <div class="item">
                <a href="#">
                  <div class="portfolio-item">
                  <div class="thumb">
                    <img src="{{ asset('assets/images/jokowi.jpg')}}" alt="">
                  </div>
                  <div class="down-content">
                    <h4>Joko Widodo</h4>
                    <span>Presiden</span>
                  </div>
                </div>
                </a>  
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--contact-->
    <div id="contact" class="contact-us section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 offset-lg-3">
            <div class="section-heading wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
              <h6>Contact Us</h6>
              <h4>Get In Touch With Us <em>Now</em></h4>
              <div class="line-dec"></div>
            </div>
          </div>
          <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
            <form autocomplete="off" id="contact" method="post">
              <div class="row">
                <div class="col-lg-12">
                  <div class="contact-dec">
                    <img src="{{ asset('assets/images/contact-dec-v2.png')}}" alt="">
                  </div>
                </div>
                <div class="col-lg-5">
                  <div id="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d19367.361611714296!2d113.7064812806143!3d-8.145129119257714!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd695b617d8f623%3A0xf6c4437632474338!2sPoliteknik%20Negeri%20Jember!5e1!3m2!1sid!2sus!4v1683859609741!5m2!1sid!2sus" width="100%" height="636px" frameborder="0" style="border:0" allowfullscreen></iframe>
                  </div>
                </div>
                <div class="col-lg-7">
                  <div class="fill-form">
                    <div class="row">
                      <div class="col-lg-4">
                        <div class="info-post">
                          <div class="icon">
                            <img src="{{ asset('assets/images/phone-icon.png')}}" alt="">
                            <a href="https://wa.me/6282244286612" target="_blank">+62 822-4428-6612</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="info-post">
                          <div class="icon">
                            <img src="{{ asset('assets/images/email-icon.png')}}" alt="">
                            <a href="mailto:thermoeggcentre@gmail.com" target="_blank">thermoeggcentre
                              @gmail.com</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="info-post">
                          <div class="icon">
                            <img src="{{ asset('assets/images/location-icon.png')}}" alt="">
                            <a href="https://goo.gl/maps/QmTASeYP1fKohp766?coh=178572&entry=tt" target="_blank">Politeknik Negeri Jember</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <fieldset>
                          <input type="text" name="name" id="name" placeholder="Name" autocomplete="on" required>
                        </fieldset>
                        <fieldset>
                          <input type="text" name="phone" id="phone" placeholder="Your Contact Number" autocomplete="on">
                        </fieldset>
                        <fieldset>
                          <input type="email" name="email" id="email" placeholder="Your Email" required>
                        </fieldset>
                      </div>
                      <div class="col-lg-6">
                        <fieldset>
                          <textarea name="message" class="form-control" id="message" placeholder="Message" required></textarea>
                        </fieldset>
                      </div>
                      <div class="col-lg-12">
                        <fieldset>
                          <button type="button" id="form-submit" class="main-button"  name="submit" onclick="gotowhatsapp()" value="Submit">Send Message Now</button>
                        </fieldset>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!--footer-->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <p>Copyright © 2023 Workshop Pemrograman Web. All Rights Reserved. 
            <br>Design: <a href="#" target="_parent" title="free css templates">Teknik Komputer</a></p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Scripts -->
    <script src="{{ asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('assets/js/owl-carousel.js')}}"></script>
    <script src="{{ asset('assets/js/animation.js')}}"></script>
    <script src="{{ asset('assets/js/imagesloaded.js')}}"></script>
    <script src="{{ asset('assets/js/custom.js')}}"></script>

    <!-- Scripts Login Dan Logout -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Scripts Kontak Mengirim Form ke WA-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
      function gotowhatsapp() {

          var name = document.getElementById("name").value;
          var phone = document.getElementById("phone").value;
          var email = document.getElementById("email").value;
          var message = document.getElementById("message").value;

          var url = "https://wa.me/6282244286612?text="
              + "Nama: " + name + "%0a"
              + "No HP: " + phone + "%0a"
              + "Email: " + email + "%0a"
              + "Pesan: " + message;

          window.open(url, '_blank').focus();
      }
    </script>
  </body>
</html>