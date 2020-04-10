<?php 
include 'connect.php';
include 'header.php';
?>
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
            <h2 class="font-weight-bold">Book apartment with you choice</h2>
          
            </ul>
          </div>
        </div>
        <?php
          $id = 0;
          $sql = "SELECT * FROM home";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            echo '<div class="row blog justify-content-between align-items-center" data-aos="fade-up">';
              // output data of each row
            while($row = $result->fetch_assoc()) {
              echo '<div class="col-lg-4 col-md-6 portfolio-item filter-app">';
              echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'" class="img-fluid" style="height:300px; width:600px;" />';
              echo '<div class="portfolio-info">';
            // echo "<br> - Name: "" " . $row["price"] ." " . $row["discription"] ." ". $row["rating"] . "<br>";
              // echo '<h4>'. $row["location"]. '</h4>';
              echo '<p>'. $row["discription"] .'</p>';
              echo '<p style="color:red;" class="font-weight-bold"> RS.'. $row["price"] .'</p>';
              echo '<a href="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'" data-gall="portfolioGallery" class="venobox preview-link" title="apartment"><i class="bx bx-plus"></i></a>';
              $id = $row["id"];
              // echo $id;  
              echo' <form id="form1" name="form1" method="post" action="cart.php">
                      <input type="hidden" name="id" id="'. $id .'" value="'. $id .'" />
                      <input type="submit" class="text-center btn btn-outline-danger" name="book" id="'. $id .'" value="Book Now" />
                    </form>';
                    // echo '<a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>';
              echo '</div>';
              echo '</div>';
            }
              echo '</div>';
            } else {
                echo "0 results";
            }
          
          ?>

      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->
  <?php 
    include 'footer.php';
?>