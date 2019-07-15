<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Bootstrap, Landing page, Template, Registration, Landing">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
    <title>Clarivel Gutiérrez</title>

     <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/line-icons.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/nivo-lightbox.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/color-switcher.css">

    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/menu_sideslide.css">
    <link rel="stylesheet" href="css/main.css">    
     <!-- nav bar Styles -->

      
  </head>
  
  <body>


 <!-- nav bar section Start -->

 <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

 <!-- nav bar section End -->

            


    <!-- Header Section Start -->
    <header id="slider-area">  
        
      <!-- Main Carousel Section -->
      <div id="carousel-area">
        <div id="carousel-slider" class="carousel slide carousel-fade" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-slider" data-slide-to="1"></li>
            <li data-target="#carousel-slider" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img src="img/slider/house2.png" alt="">
              <div class="carousel-caption text-left">
                <h3 class="wow fadeInRight" data-wow-delay="0.2s">Encontramos</h1>  
                <h2 class="wow fadeInRight" data-wow-delay="0.4s">El hogar de tus sueños</h2>
                <h4 class="wow fadeInRight" data-wow-delay="0.6s">En el Eje  Cafetero</h4>
                <a href="#" class="btn btn-lg btn-common btn-effect wow fadeInRight" data-wow-delay="0.9s">Conoce más</a>
                <a href="#" class="btn btn-lg btn-border wow fadeInRight" data-wow-delay="1.2s">Contáctanos</a>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/slider/house3.png" alt="">
              <div class="carousel-caption text-center">
                <h3 class="wow fadeInDown" data-wow-delay="0.3s">Proyectos sobre planos</h3>
                <h2 class="wow bounceIn" data-wow-delay="0.6s">Propiedades nuevas</h2> 
                <h4 class="wow fadeInUp" data-wow-delay="0.9s">Vende con nosotros tu propiedad </h4>
                <a href="#" class="btn btn-lg btn-common btn-effect wow fadeInUp" data-wow-delay="1.2s"> Mira nuestras propiedades</a>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/slider/house1.png" alt="">
              <div class="carousel-caption text-center">
                <h3 class="wow fadeInDown" data-wow-delay="0.3s">Proyectos para Invertir</h3>
                <h2 class="wow fadeInRight" data-wow-delay="0.6s"> En el Eje Cafetero</h2> 
                <h4 class="wow fadeInUp" data-wow-delay="0.6s"> Gana la valorización</h4>
                <a href="#" class="btn btn-lg btn-border wow fadeInUp" data-wow-delay="0.9s"> Comprar ahora</a>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carousel-slider" role="button" data-slide="prev">
            <span class="carousel-control" aria-hidden="true"><i class="lni-chevron-left"></i></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carousel-slider" role="button" data-slide="next">
            <span class="carousel-control" aria-hidden="true"><i class="lni-chevron-right"></i></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>  

    </header>
    <!-- Header Section End --> 

    <!-- Services Section Start -->
    <section id="services" class="section">
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title">Nuestros Servicios</h2>
          <span>Servicios</span>
          <p class="section-subtitle"> Brindamos la mejor asesoría en el eje cafetero</p>
        </div>


        <div class="row">

          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="item-boxes services-item wow fadeInDown" data-wow-delay="0.2s">
              <div class="icon color-6">
                <i class="lni-briefcase"></i>
              </div>
              <h4> Tours Inmobiliarios</h4>
              <p> te presentamos diferentes alternativas según tu presupuesto, y te mostramos el proyecto de manera física</p>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="item-boxes services-item wow fadeInDown" data-wow-delay="0.4s">
              <div class="icon color-1">
                <i class="lni-pencil"></i>
              </div>
              <h4>Acompañamiento en el proceso de compra</h4>
              <p> Te brindamos seguridad a la hora de firmar</p>
            </div>
          </div>


         


          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="item-boxes services-item wow fadeInDown" data-wow-delay="0.6s">
              <div class="icon color-3">
                <i class="lni-stats-up"></i>
              </div>
              <h4>Asesoría para inversión en el Eje Cafetero</h4>
              <p> Si buscas ganar dinero invirtiendo en propiedad raíz y ganar por la valorización, te asesoramos.</p>
            </div>
          </div>

          
        </div>
      </div>
    </section>
    <!-- Services Section End -->



    <!-- Features Section Start -->
    <section id="features" class="section">
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title">Por qué escogernos</h2>
          <span>Por qué</span>
          <p class="section-subtitle"> Somos tu mejor opción </p>
        </div>
        <div class="row">
          <!-- Start featured -->
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="featured-box">
              <div class="featured-icon">
                <i class="lni-layout"></i>
              </div>
              <div class="featured-content">
                <div class="icon-o"><i class="lni-layout"></i></div>
                <h4>Asesoría en inversión</h4>
                <p>Lorem ipsum dolor re et magna aliqua.</p>
              </div>
            </div>
          </div>
          <!-- End featured -->
          <!-- Start featured -->
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="featured-box">
              <div class="featured-icon">
                <i class="lni-tab"></i>
              </div>
              <div class="featured-content">
                <div class="icon-o"><i class="lni-tab"></i></div>
                <h4>Gran variedad de proyectos nuevos y sobre planos</h4>
                <p>Lorem unt ut labore et magna aliqua.</p>
              </div>
            </div>
          </div>
          <!-- End featured -->


          <!-- Start featured -->
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="featured-box">
              <div class="featured-icon">
                <i class="lni-rocket"></i>
              </div>
              <div class="featured-content">
                <div class="icon-o"><i class="lni-rocket"></i></div>
                <h4>Seguridad y Confianza</h4>
                <p>Lorem ipsum magna aliqua.</p>
              </div>
            </div>
          </div>
          <!-- End featured -->
          <!-- Start featured -->
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="featured-box">
              <div class="featured-icon">
                <i class="lni-pencil"></i>
              </div>
              <div class="featured-content">
                <div class="icon-o"><i class="lni-pencil"></i></div>
                <h4>10 años de experiencia</h4>
                <p>Lorem ipsum t labore et magna aliqua.</p>
              </div>
            </div>
          </div>
          <!-- End featured -->
          <!-- Start featured -->
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="featured-box">
              <div class="featured-icon">
                <i class="lni-leaf"></i>
              </div>
              <div class="featured-content">
                <div class="icon-o"><i class="lni-leaf"></i></div>
                <h4>Propiedades para todos los presupuestos</h4>
                <p>Lorem ipsum ut labore et magna aliqua.</p>
              </div>
            </div>
          </div>
          <!-- End featured -->
          <!-- Start featured -->
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="featured-box">
              <div class="featured-icon">
                <i class="lni-pencil"></i>
              </div>
              <div class="featured-content">
                <div class="icon-o"><i class="lni-pencil"></i></div>
                <h4>Acompañamiento en el proceso de compra</h4>
                <p>Lorem ipsum ut labore et magna aliqua.</p>
              </div>
            </div>
          </div>
          <!-- End featured -->
        </div>
      </div>
    </section>
    <!-- Features Section End -->    


    <!-- Portfolio Section -->
    <section id="portfolios" class="section">
      <!-- Container Starts -->
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title">Proyectos sobre planos</h2>
          <span>Eje Cafetero</span>
          <p class="section-subtitle">Encuentra el hogar de tus sueños</p>
        </div>
        <div class="row">          
          <div class="col-md-12">
            <!-- Portfolio Controller/Buttons -->
            <div class="controls text-center">
              <a class="filter active btn btn-common btn-effect" data-filter="all">
                Todos 
              </a>
              <a class="filter btn btn-common btn-effect" data-filter=".design">
                Pereira 
              </a>
              <a class="filter btn btn-common btn-effect" data-filter=".development">
                Cerritos
              </a>
              <a class="filter btn btn-common btn-effect" data-filter=".print">
                Dosquebradas 
              </a>
            </div>
            <!-- Portfolio Controller/Buttons Ends-->
          </div>
        </div>

        <!-- Portfolio Recent Projects -->
        <div id="portfolio" class="row">
          <div class="col-lg-4 col-md-6 col-xs-12 mix development print">
            <div class="portfolio-item">
              <div class="shot-item">
                <img src="https://images.wasi.co/inmuebles/g35952120190712092201.png" alt="" />  
                <div class="single-content">
                  <div class="fancy-table">
                    <div class="table-cell">
                      <div class="zoom-icon">
                        <a class="lightbox" href="https://images.wasi.co/inmuebles/g35952120190712092201.png"><i class="lni-zoom-in item-icon"></i></a>
                      </div>
                      <a href="#">Ver proyecto</a>
                    </div>
                  </div>
                </div>
              </div>               
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12 mix design print">
            <div class="portfolio-item">
              <div class="shot-item">
                <img src="https://images.wasi.co/inmuebles/gr91191120190606101106.jpg" alt="" /> 
                <div class="single-content">
                  <div class="fancy-table">
                    <div class="table-cell">
                      <div class="zoom-icon">
                        <a class="lightbox" href="https://images.wasi.co/inmuebles/gr91191120190606101106.jpg"><i class="lni-zoom-in item-icon"></i></a>
                      </div>
                      <a href="#">Ver proyecto</a>
                    </div>
                  </div>
                </div>
              </div>               
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12 mix development">
            <div class="portfolio-item">
              <div class="shot-item">
                <img src="https://images.wasi.co/inmuebles/g3595720190531102239.jpeg" alt="" />  
                <div class="single-content">
                  <div class="fancy-table">
                    <div class="table-cell">
                      <div class="zoom-icon">
                        <a class="lightbox" href="https://images.wasi.co/inmuebles/g3595720190531102239.jpeg"><i class="lni-zoom-in item-icon"></i></a>
                      </div>
                      <a href="#">Ver proyecto</a>
                    </div>
                  </div>
                </div>
              </div>               
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12 mix development design">
            <div class="portfolio-item">
              <div class="shot-item">
                <img src="https://images.wasi.co/inmuebles/g35951820190527045018.jpeg" alt="" /> 
                <div class="single-content">
                  <div class="fancy-table">
                    <div class="table-cell">
                      <div class="zoom-icon">
                        <a class="lightbox" href="https://images.wasi.co/inmuebles/g35951820190527045018.jpeg"><i class="lni-zoom-in item-icon"></i></a>
                      </div>
                      <a href="#">Ver proyecto</a>
                    </div>
                  </div>
                </div>
              </div>               
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12 mix development">
            <div class="portfolio-item">
              <div class="shot-item">
                <img src="https://images.wasi.co/inmuebles/g3595420190412061326.png" alt="" />  
                <div class="single-content">
                  <div class="fancy-table">
                    <div class="table-cell">
                      <div class="zoom-icon">
                        <a class="lightbox" href="https://images.wasi.co/inmuebles/g3595420190412061326.png"><i class="lni-zoom-in item-icon"></i></a>
                      </div>
                      <a href="#">Ver proyecto</a>
                    </div>
                  </div>
                </div>
              </div>               
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12 mix print design">
            <div class="portfolio-item">
              <div class="shot-item">
                <img src="https://images.wasi.co/inmuebles/g35951220190225035024.jpg" alt="" />  
                <div class="single-content">
                  <div class="fancy-table">
                    <div class="table-cell">
                      <div class="zoom-icon">
                        <a class="lightbox" href="https://images.wasi.co/inmuebles/g35951220190225035024.jpg"><i class="lni-zoom-in item-icon"></i></a>
                      </div>
                      <a href="#">Ver proyecto</a>
                    </div>
                  </div>
                </div>
              </div>               
            </div>
          </div>
        </div>
      </div>
      <!-- Container Ends -->
    </section>
    <!-- Portfolio Section Ends --> 



 
   
    <!-- Footer Section Start -->
    <footer>
      <!-- Footer Area Start -->
      <section class="footer-Content">
        <div class="container">
          <div class="row">
          


            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">

              <h3 class="block-title">¡Contáctame!</h3>

              <ul class="contact-footer">
                  <li> <strong> Ciudad :</strong> <span>Pereira, Risaralda, Colombia.</span> </li>
              </ul>
              
              <ul class="footer-social">
                <li><a class="facebook" href="#"><i class="lni-facebook-filled"></i></a></li>
                <li><a class="twitter" href="#"><i class="lni-twitter-filled"></i></a></li>
                <li><a class="linkedin" href="#"><i class="lni-linkedin-fill"></i></a></li>
                <li><a class="google-plus" href="#"><i class="lni-google-plus"></i></a></li>
              </ul> 

               <p> </br> Created with love by <a href="https://github.com/MelissaEscobar/" >M3lissaEG</a></p>              

            </div>


            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              <h3 class="block-title"> </br></h3>

              <ul class="contact-footer">
                  <li> <strong> Teléfono :</strong> <span>+57 318 770 9387</span> </li>
              </ul>

            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              <h3 class="block-title"> </br></h3>

              <ul class="contact-footer">
                  <li> <strong>E-mail :</strong> <span><a href="#">clarivel.gutierrez@gmail.com</a></span> </li>
              </ul>

            </div>


           
            
          </div>
        </div>
      </section>
      <!-- Footer area End -->


      
    </footer>
    <!-- Footer Section End --> 

    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
      <i class="lni-arrow-up"></i>
    </a>

      

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="js/jquery-min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/color-switcher.js"></script>
    <script src="js/jquery.mixitup.js"></script>
    <script src="js/nivo-lightbox.js"></script>
    <script src="js/owl.carousel.js"></script>    
    <script src="js/jquery.stellar.min.js"></script>    
    <script src="js/jquery.nav.js"></script>    
    <script src="js/scrolling-nav.js"></script>    
    <script src="js/jquery.easing.min.js"></script>     
    <script src="js/wow.js"></script> 
    <script src="js/jquery.vide.js"></script>
    <script src="js/jquery.counterup.min.js"></script>    
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/main.js"></script>
    
  </body>
</html>