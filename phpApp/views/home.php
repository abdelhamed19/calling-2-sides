<!DOCTYPE html>
<html lang="en">
<?php include 'components/home/HeadSection.php'; ?>
  <body>
    <!-- Start Nave Bar -->
    <?php include 'components/home/NavSection.php'; ?>
    <!-- End nav bar -->
    <!-- Start Header Section -->
    <div class="container-fluid description">
      <div class="row h-100">
        <div class="col-md-6 desc-contant" data-bs-ride="carousel" data-bs-interval="1000">
          <h1>
            We help you to <br />
            boost your <br />
            business
          </h1>
          <div class="btn-group">
            <a href="#">contact Us</a>
            <a href="#">Explore Journey</a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="position-relative animation-img h-100" >
            <img class="f-img"  src="./public/assets/image/animation/1e547763da5090f7b0ed3120755330bd.webp" alt="" />
            <img class="s-img" src="./public/assets/image/animation/64ddd7f3015ecb0784054ba518ea9c2c.webp" alt="">
            <img class="t-img" src="./public/assets/image/animation/cddd68b07d9b56e92ab1311035c5f38e.webp" alt="">
            <img class="fo-img" src="./public/assets/image/animation/f9663e7cacbfd597c7da31a0ee969d5d.svg" alt="">
          </div>
            
        </div>
      </div>
    </div>
    <!-- End Header Section -->
    <!-- strat slider desc -->
    <?php include 'components/home/SliderSection.php'; ?>
    <!-- End slider desc-->
    <!-- Start Our Services -->
    <?php include 'components/home/HomeServices.php'; ?>
    <!-- End Our Services -->
     <!-- Footer Start -->
     <?php include 'components/home/FooterSection.php'; ?>
      <!-- End Footer -->

  </body>
</html>
