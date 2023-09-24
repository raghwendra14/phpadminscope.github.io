<?php

include("common/top.php");

?>



<!-- slider home -->



<section class="pic_body col-lg-12 col-md-12 col-sm-12" style="background-image: url(./image/topimage.png); width: 100%; height: 40vh;">
  <div class="container">
    <div class="row">
      <div class="col">
        <h1 class="text-light" style="margin-top: 13vh; margin-left: 12vw; ">CONTACT US</h1>
      </div>
    </div>
  </div>
</section>


<div class="container">
  <div class="row">
    <div class="col text-center" style="margin-top: 10vh;">
      <h1><b>Need Help? Get in Touch</b></h1>
      <pre>Do you have any questions? Please do not hesitate to contact us directly.
         Our team will come back to you within a matter of hours to help you.</pre>
    </div>
  </div>

  <div class="row">
    <div class="col-4 text-center">
      <i class="fa fa-map-marker" aria-hidden="true" style="color: red;"></i>

      <h4>Our Location</h4>
      <p>Address: 1st Floor Mithulok Building, Boring Road ,Near Bharat Petrol Pump Patna, Bihar 800001 India</p>
      <button type="button" class="btn">Find Location on Map</button>
    </div>

    <div class="col-4 text-center">
      <i class="fa fa-map-marker " aria-hidden="true"></i>

      <h4>Our Location</h4>
      <p>Address: 1st Floor Mithulok Building, Boring Road ,Near Bharat Petrol Pump Patna, Bihar 800001 India</p>
      <button type="button" class="btn">Find Location on Map</button>
    </div>

    <div class="col-4 text-center">
      <i class="fa fa-map-marker fa-denger" aria-hidden="true"></i>

      <h4>Our Location</h4>
      <p>Address: 1st Floor Mithulok Building, Boring Road ,Near Bharat Petrol Pump Patna, Bihar 800001 India</p>
      <button type="button" class="btn">Find Location on Map</button>
    </div>
  </div>
</div>


<div class="container">
  <div class="row">
    <div class="col">
      <form action="conn.php" method="post">
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control mb-4" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control mb-4" name="password" id="exampleInputPassword1" placeholder="Password">
        </div>
        <button type="reset" class="btn btn-primary">reset</button>
        <button type="botton" class="btn btn-primary">button</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>

<?php

include("common/bottom.php");

?>