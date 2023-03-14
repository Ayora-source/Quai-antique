
  <footer class="text-white text-center text-lg-start" style="background-color: #23242a;">
       <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      <p style="color: rgba(254, 219, 178, 1)"></p>
    </div>
      <!--Grid row-->
      <div class="row mt-4">
        <!--Grid column-->
        <div class="col-lg-4 col-md-12 mb-4 mb-md-0"  style="text-align: center;">
          <h4 class="text-uppercase mb-4" style="color: rgba(254, 219, 178, 1)">Horraire D'ouverture</h4>
           <?php
                $query = "SELECT * FROM schedule";
                //Execute the request 
                $result = mysqli_query($connect, $query);

                // Loop that displays the results of the query
                while ($row = mysqli_fetch_assoc($result)) {
                   echo "<div class='element-item'>";
                   echo "<p style=\"text-align: center; font-size: 15px\">" . $row["day"] . " :  " . $row["opening_m"] . "- " . $row["closure_m"] . " / " . $row["opening_s"] . "- " . $row["closure_s"] . "";
                   echo "</div>";
                }
                ?> 
        </div>

        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0" style="text-align: center;">
          <h4 class="text-uppercase mb-4 pb-1" style="color: rgba(254, 219, 178, 1)">Adresse</h4>

          <div class="form-outline form-white mb-4">
          <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 48.8px;"></div><div class="form-notch-trailing"></div></div></div>
              <span class="ms-2">44 rue du limousin 11100 Narbonne</span><br><br>
              <span class="ms-2">quai.antique@gmail.com</span><br><br>
              <span class="ms-2">06 00 00 00 00</span><br><br>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0" style="text-align: center;">
          <h4 class="text-uppercase mb-4" style="color: rgba(254, 219, 178, 1)">Localisation</h4>
            <div class="mapouter"><div class="gmap_canvas"><iframe width="350" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q=44%20rue%20du%20limousin%20narbonne&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><br></div></div>
        </div>
      </div>

    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2023 Copyright:
    </div>
  </footer>
  
</div>
<!-- End of .container -->