<?php

$page = "Home";

$title = "Home";

$metaD = "Welcome to Workshops in Wild Places";

include 'includes/header.php';

?>
  
<main role="main">  

  <!--banner-->

    <div role="banner" class="container-fluid p-0">
      <div id="banner" class="row d-flex fs slide-1 min-100 m-0">
         <div class="offset-lg-2"></div>
            <div class="col-md-8 d-flex flex-column justify-content-center align-items-center text-center text-white min-100 p-5">
                <h1 class="site-title ts l-h">
                    <span class="d-inline-block animated fadeInDown">Workshops</span> in <span class="d-inline-block pink enter-right">Wild</span> <span class="d-inline-block enter-bottom">Places</span></h1>
                    <a href="#home-about">
<!--                    <i class="fa fa-angle-down display-2 pt-3"></i>-->
                    <i class="fa fa-long-arrow-down pt-3 enter-bottom"></i>
                    </a>
            </div>
            <div class="offset-lg-2"></div>
        </div>
    </div>

        <!--about-->
    <div class="container-fluid p-0">
       
       <div id="home-about" class="row fs slide-about d-flex min-100 m-0 p-0 rellax" data-rellax-speed="0">
          <div class="col-md-7 d-flex flex-column justify-content-center align-items-start text-left text-white min-100 p-5">
              <h2 class="headline pb-2 l-h enter-top">About</h2>
                <hr class="text-white w-100 ts enter-left">
              <p class="py-2 enter-right">Workshops in Wild Places is an international art teaching initiative developed by Canadian artist and educator Janice Mason Steeves. Travel to remote locations throughout the world to connect with the beauty and power of the wild landscape.</p>
              <a href="/about.php" class="btn btn-outline-light mt-3 animsition-link enter-bottom">Learn More</a>
            </div>
            <div class="offset-md-5"></div>
        </div><!--end row-->

        <!--newfoundland-->
        <div class="row fs slide-2 p-0 m-0">
            <div class="offset-md-5"></div>
            <div class="col-md-7 d-flex flex-column justify-content-center align-items-end text-right text-white min-100 p-5">
                <a href="/nfld.html">
                <h2 class="headline pb-2 l-h enter-top">New<span class="table-lg">found</span><span class="table-lg">land</span></h2>
                </a>
                <hr class="text-white w-75 ts enter-left">
                <p class="py-2 enter-right">Join me for a week-long immersion into the landscape of Newfoundland at The Doctor's House, a small luxury inn with a spa is nestled in 100 forested acres on the shores of Trinity Bay.</p>
                <a href="/nfld.php" class="btn btn-outline-light animsition-link enter-bottom" data-animsition-overlay="true" data-animsition-out-class="overlay-slide-out-right" data-animsition-out-duration="1000">Learn More</a>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row fs bg-scotland-banner p-0 m-0">
            <div class="col-md-7 d-flex flex-column justify-content-center align-items-start text-left text-white bg-3 min-100 p-5">
                <h2 class="headline pb-2 l-h enter-top">Scotland</h2>
                <hr class="text-white w-75 ts enter-left">
                <p class="py-2 enter-right">Workshops in Wild Places is an international art teaching initiative developed by Canadian artist Janice Mason Steeves. In these unique, innovative workshops, students travel to remote, wild locations throughout the world to connect with the landscape and translate that experience into Abstract Painting.</p>
                <a href="/scotland.php" class="btn btn-outline-light animsition-link enter-bottom">Read More</a>
            </div>
            <div class="offset-md-5"></div>
        </div><!--end row-->

        <div class="row fs slide-3 p-0 m-0">
            <div class="offset-md-5"></div>
            <div class="col-md-7 d-flex flex-column justify-content-center align-items-end text-right text-white bg-3 min-100 p-5">
                <h2 class="headline pb-2 l-h animated fadeInDown">British Columbia</h2>
                <hr class="text-white w-75">
                <p class="py-2 animated flipInX">Workshops in Wild Places is an international art teaching initiative developed by Canadian artist Janice Mason Steeves. In these unique, innovative workshops, students travel to remote, wild locations throughout the world to connect with the landscape and translate that experience into Abstract Painting.</p>
                <a href="/bc.php" class="btn btn-outline-light animsition-link">Read More</a>
            </div>
        </div><!--end row-->
    </div><!--end container-->
</main>

<?php

include 'includes/footer.php';

?>