<?php

$page = "Home";

$title = "Home";

$metaD = "Welcome to Workshops in Wild Places";

include 'includes/header.php';

?>
  
<main role="main" class="body-wrap">  

  <!--banner-->

    <div role="banner" class="container-fluid p-0">
      <div id="banner" class="row d-flex fs banner-home m-0">
         <div class="offset-lg-2"></div>
            <div class="col-lg-8 d-flex flex-column justify-content-center align-items-center text-center text-white min-100 p-5 rellax" data-rellax-speed="-3">
                <h1 class="site-title ts l-h mb-3">
                    <span class="d-inline-block enter-top">Workshops</span> in <span class="d-inline-block pink enter-left">Wild</span> <span class="d-inline-block enter-bottom">Places</span>
                </h1>
            </div>
            <div class="offset-lg-2"></div>
        </div>
        <div id="sec-1"></div>
    </div>

    <!--about-->
        
    <div class="container-fluid p-0">
        <div class="row d-flex text-secondary min-70 m-4 shadow-lg">
            <div class="col-lg-6 bg-img-scotland-5 min-50"></div>
            <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center text-center bg-light min-50 p-5">
              <h2 class="headline text-secondary pb-2 l-h enter-left">About</h2>
                <p class="pt-2 enter-top">Workshops in <span class="pink">Wild</span> Places is an international art teaching initiative developed by Canadian artist and educator Janice Mason Steeves. Travel to remote locations throughout the world to connect with the beauty and power of the wild landscape.</p>
              <a href="/about.php" class="btn btn-outline-secondary mt-2 animsition-link enter-bottom">Learn More</a>
            </div>
        </div><!--end row-->
        
        <!--nfld-->
          
        <div class="row d-flex min-70 text-light m-4 shadow-lg">
            <div class="col-lg-12 d-flex flex-column justify-content-center align-items-center text-center bg-img-nfld min-50 p-5">
                <h2 class="headline card-home py-2 l-h">New<span class="table-lg">found</span><span class="table-lg">land</span></h2>
                <p class="h4 pt-2">The Doctor’s House</p>
                <p class="py-2 enter-top">June 1-8, 2019</p>
                <a href="/nfld.php" class="btn btn-outline-light animsition-link enter-bottom">Learn More</a>
            </div>
        </div><!--end row-->
          
        <!--scotland-->
           
        <div class="row d-flex min-70 text-light m-4 shadow-lg">
            <div class="col-lg-12 d-flex flex-column justify-content-center align-items-center text-center bg-img-scotland min-50 p-5">
                <h2 class="headline text-light pb-2 l-h enter-top">Scotland</h2>
                <p class="h4 pt-2 enter-left">Dunskey Estate</p>
                <p class="py-2 enter-top">September 14-22, 2019</p>
                <a href="/scotland.php" class="btn btn-outline-light animsition-link enter-bottom">Read More</a>
            </div>
        </div><!--end row-->
           
        <!--bc-->
           
        <div id="sec-3" class="row d-flex min-70 text-light m-4 shadow-lg">
            <div class="col-lg-12 d-flex flex-column justify-content-center align-items-center text-center bg-img-bc min-50 p-5">
                <h2 class="headline pb-2 l-h enter-top">British Columbia</h2>
                <p class="h4 pt-2 enter-left">Long Beach Lodge</p>
                <p class="py-2 enter-top">November 10-17, 2019</p>
                <a href="/bc.php" class="btn btn-outline-light animsition-link enter-bottom">Read More</a>
            </div>
        </div><!--end row-->
        
        <!--card -- chile-->
        
        <div id="sec-3" class="row shadow-lg m-4">
            <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center text-center text-secondary bg-light min-50 p-5 o-12">
                <h2 class="headline text-secondary pb-2 l-h enter-top">Chile</h2>
                <p class="h4 pt-2 enter-left">Painting in the Atacama</p>
                <p class="py-2 fade-in">February 2020</p>
                <a href="/upcoming.php" class="btn btn-outline-secondary animsition-link enter-bottom">Read More</a>
            </div>
            <div class="col-lg-6 min-50 bg-img-chile"></div>
        </div><!--end row-->  
        
        <!--card -- nova scotia-->
        
        <div id="sec-3" class="row shadow-lg m-4">
            <div class="col-lg-6 min-50 bg-img-ns"></div>
            <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center text-center text-secondary bg-light min-50 p-5 o-12">
                <h2 class="headline text-secondary pb-2 l-h enter-top">Nova Scotia</h2>
                <p class="h4 pt-2 enter-left">Art Retreat in old growth forest</p>
                <p class="py-2 fade-in">September 2020</p>
                <a href="/upcoming.php" class="btn btn-outline-secondary animsition-link enter-bottom">Read More</a>
            </div>
        </div><!--end row-->  
        
        <!--card -- mongolia-->
        
        <div id="sec-3" class="row shadow-lg m-4">
            <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center text-center text-secondary bg-light min-50 p-5 o-12">
                <h2 class="headline text-secondary pb-2 l-h enter-top">Mongolia</h2>
                <p class="h4 pt-2 enter-left">Art Retreat in the Gobi</p>
                <p class="py-2 fade-in">August, 2021</p>
                <a href="/upcoming.php" class="btn btn-outline-secondary animsition-link enter-bottom">Read More</a>
            </div>
            <div class="col-lg-6 min-50 bg-img-mongolia"></div>
        </div><!--end row-->
        
         <!--card -- newsletter/signup-->
        
        <div id="sec-3" class="row shadow-lg bg-light text-secondary m-4">
            <div class="col-lg-6 bg-img-signup min-50"></div>
            <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center text-center p-5">
                <h2 class="headline text-secondary pb-2 l-h enter-top">Signup</h2>
                <p class="pt-2 mb-0 enter-left">Get WiWP news, anouncements, and workshop info straight to your inbox.</p>
                <!-- Begin MailChimp Signup Form -->
               <div id="mc_embed_signup">
                  <form action="https://janicemasonsteeves.us12.list-manage.com/subscribe/post?u=a9ab1596540478d19124106d8&amp;id=66a407ea79" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate-2 bs" target="_blank" novalidate>
                     <!--form-->
                     <div id="mc_embed_signup_scroll">
                        <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
                        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_a9ab1596540478d19124106d8_66a407ea79" tabindex="-1" value=""></div>
                        <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe-2" class="button"></div>
                     </div>
                  </form>
               </div><!--End mailchimp form 2-->
            </div><!--end col-->
        </div><!--end row-->   
    </div><!--end container-->
</main>

<?php

include 'includes/footer.php';

?>