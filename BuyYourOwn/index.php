<?php 
// session_start();
include 'header.php';
include 'connect.php';
?>
    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg);">
                    <div class="container">
                        <div class="carousel-content animated fadeInUp">
                            <h2 class="text-center">Welcome to <span>BuyYourOwn </span></h2>
                            <h4 class="text-center">Select Property</h4>
                            <div class="text-center"><img  style="height:100px; width:100px;" src="view.png"></div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg);">
                    <div class="container">
                        <div class="carousel-content animated fadeInUp">
                            <h2 class="text-center">Welcome to <span>BuyYourOwn </span></h2>
                            <h4 class="text-center">View Details</h4>
                            <div class="text-center"><img  style="height:100px; width:100px;" src="select.png"></div>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg);">
                    <div class="container">
                        <div class="carousel-content animated fadeInUp">
                            <h2 class="text-center">Welcome to <span>BuyYourOwn </span></h2>
                            <h4 class="text-center">Book your apartment</h4>
                            <div class="text-center"><a href="portfolio.php"><img style="height:100px; width:100px;" src="boking.png"></a></div>
                        </div>
                    </div>
                </div>

            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon bx bx-left-arrow" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon bx bx-right-arrow" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        </div>
    </section>
    <!-- End Hero -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="row">
        
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="fade-up">
              <div class="icon"><i class="icofont-computer"></i></div>
              <h4 class="title"><a href="">Projects</a></h4>
              <p class="description">We have completed more than 6 projects we love to do intresting projects.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="icofont-chart-bar-graph"></i></div>
              <h4 class="title"><a href="">Success</a></h4>
              <p class="description">Our success rate is high we almost got 90 % . We gave our 100 % in every project.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="icofont-earth"></i></div>
              <h4 class="title"><a href="">Location</a></h4>
              <p class="description">We are in few cities in india like Delhi, Amritsar and Phagwara. </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="icofont-image"></i></div>
              <h4 class="title"><a href="">jai verma</a></h4>
              <p class="description">B.tech ( 2020 ) from Lovely Professional University  </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="icofont-settings"></i></div>
              <h4 class="title"><a href=""></a></h4>
              <p class="description"></p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="icofont-image"></i></div>
              <h4 class="title"><a href="">Jai Verma</a></h4>
              <p class="description">B.tech ( 2020 ) from Lovely Professional University "IOT" </p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->
    <!-- End #main -->
<?php 
    include 'footer.php';
?>