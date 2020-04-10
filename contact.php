<?php 
include 'header.php';
session_start();
?>

    <!-- ======= Contact Section ======= -->
    <div class="map-section">
      <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
    </div>

    <section id="contact" class="contact">
      <div class="container">

        <div class="row justify-content-center" data-aos="fade-up">

          <div class="col-lg-10">

            <div class="info-wrap">
              <div class="row">
                <div class="col-lg-4 info">
                  <i class="icofont-google-map"></i>
                  <h4>Location:</h4>
                  <p>Nanak Nagari <br>Chaheru, 144401, Punjab India</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="icofont-envelope"></i>
                  <h4>Email:</h4>
                  <p>jaisinghverma1997@gmail.com<br>jaisingh1160@gmal.com</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="icofont-phone"></i>
                  <h4>Call:</h4>
                  <p>+91-8005243672<br>+91-9559014486</p>
                </div>
              </div>
            </div>

          </div>

        </div>

        <div class="row mt-5 justify-content-center" data-aos="fade-up">
          <div class="col-lg-10">
            <form class="form-group" action="#" method="post" enctype="multipart/form-data">
              <div class="form-row">
                <div class="col-md-6 form-group">
                    <input type="text" name="name" class="form-control" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                  </div>

                  <div class="col-md-6 form-group">
                    <input type="email" name="email" class="form-control" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validate"></div>
                  </div>
              </div>
                  <div class="form-group">
                    <input type="text" name="subject" class="form-control" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                    <div class="validate"></div>
                  </div>

                  <div class="form-group">
                    <textarea name="message" class="form-control pb-5" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                    <div class="validate"></div>
                  </div>

                  <div class="text-center"><input class="btn btn-outline-danger w-auto btn-block text-center" type="submit" value="submit" name="submit"></div>
            </form>
          </div>
          <?php
          include 'connect.php';
      

        if(isset($_POST['submit'])){
          
            $name = $_POST["name"];
            $email = $_POST["email"];
            $subject = $_POST["subject"];
            $message = $_POST["message"];
      
                  $sql = "INSERT INTO contact VALUES (DEFAULT, '$name', '$email', '$subject', '$message')";
                    if ($conn->query($sql) === TRUE) {
                        echo '<script>alert("Thank you!")</script>';
                    } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }
           }   
        ?>
        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
  <?php 
    include 'footer.php';
    Session_destroy()
  ?>