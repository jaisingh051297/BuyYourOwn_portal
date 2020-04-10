  <!-- ======= Footer ======= -->
  <footer id="footer">

<div class="footer-top">
    <div class="container">
        <div class="row">

            <div class="col-lg-3 col-md-6 footer-contact">
                <h3>BuyYourOwn</h3>
                <p>
                    Nanak Nagari <br> Chaheru, 144401<br> Punjab India <br><br>
                    <strong>Phone:</strong>  +91-8005243672<br>
                    <strong>Email:</strong> jaisinghverma1997@gmail.com<br>
                </p>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
                <h4>Our Services</h4>
                <ul>
                    <li><i class="bx bx-chevron-right"></i> <a href="services.php">View more</a></li>
                </ul>
            </div>

            <div class="col-lg-4 col-md-6 footer-newsletter">
                <h4>Subscribe Us</h4>
                <p>For getting latest apartment details</p>
                <form action="" method="post">
                    <input type="email" name="email"><input type="submit" name="submit" value="Subscribe">
                </form>
            </div>
            <?php
          include 'connect.php';
            if(isset($_POST['submit'])){
                $email = $_POST["email"];
                $sql = "INSERT INTO suscribe VALUES (DEFAULT, '$email')";
                        if ($conn->query($sql) === TRUE) {
                            echo '<script>alert("Thank you!")</script>';
                        } else {
                            echo "Error: " . $sql . "<br>" . $conn->error;
                        }
            }   
            ?>
        </div>
    </div>
</div>

<div class="container d-md-flex py-4">

    <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
            &copy; Copyright <strong><span>Jai Singh </span></strong>. All Rights Reserved
        </div>
    </div>
    <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="https://twitter.com/jaisingh051297" target="_blank" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="https://www.facebook.com/jaiverma1997" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.instagram.com/jaisinghverma1997/?hl=en" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
        <!-- <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a> -->
    </div>
</div>
</footer>
<!-- End Footer -->

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/venobox/venobox.min.js"></script>
<script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>