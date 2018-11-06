<?php

$page = "Upcoming";

$title = "Upcoming";

$metaD = "Welcome to Workshops in Wild Places";

include 'includes/header.php';

?>

<main id="upcoming" role="main" class="body-wrap">
   
    <!--banner-->					

    <div role="banner" class="container-fluid p-0 bg-img-about">        
        <div class="row d-flex min-70">
            <div class="offset-lg-1"></div>
                <div class="col-lg-10 d-flex flex-column justify-content-center align-items-center text-center p-5">
                    <h2 class="headline l-h pb-2 enter-top">Upcoming Workshops</h2>
                    <h5 class="text-white text-uppercase pb-2 enter-bottom">IN THE WORKS FOR 2020 and 2021</h5>
                </div>
            <div class="offset-lg-1"></div>
        </div>
        <div id="sec-2"></div>
    </div>

    <!--intro-->

    <div class="container-fluid p-0">
        
        <!--card -- chile-->
        
        <div id="sec-3" class="row shadow-lg m-4">
            <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center text-center text-secondary bg-light min-50 p-5 o-12">
                <h2 class="headline text-secondary pb-2 l-h enter-top">Chile</h2>
                <p class="h4 pt-2 enter-left">Painting in the Atacama</p>
                <p class="pt-2 m-0 fade-in">February 2020</p>
                <p class="font-italic pt-2 m-0 fade-in">Location Coming Soon</p>
                <!--<a href="http://www.altoatacama.com/" target="_blank" class="btn btn-outline-secondary enter-bottom">Read More</a>-->
            </div>
            <div class="col-lg-6 min-50 bg-img-chile-2"></div>
        </div><!--end row--> 
        
        <!--card -- nova scotia-->
        
        <div id="sec-3" class="row shadow-lg m-4">
            <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center text-center text-secondary bg-light min-50 p-5 o-12">
                <h2 class="headline text-secondary pb-2 l-h enter-top">Nova Scotia</h2>
                <p class="h4 pt-2 enter-left">Art Retreat in old growth forest</p>
                <p class="py-2 fade-in">September 2020 | Trout Point Lodge</p>
                <a href="https://www.troutpoint.com/" target="_blank" class="btn btn-outline-secondary enter-bottom">Read More</a>
            </div>
            <div class="col-lg-6 min-50 bg-img-ns"></div>
        </div><!--end row-->  
        
        <!--card -- mongolia-->
        
        <div class="row shadow-lg m-4">
            <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center text-center text-secondary bg-light min-50 p-5 o-12">
                <h2 class="headline text-secondary pb-2 l-h enter-top">Mongolia</h2>
                <p class="h4 pt-2 enter-left">Art Retreat in the Gobi</p>
                <p class="py-2 fade-in">August, 2021 | Three Camel Lodge</p>
                <a href="https://www.threecamellodge.com/" target="_blank" class="btn btn-outline-secondary enter-bottom">Read More</a>
            </div>
            <div class="col-lg-6 min-50 bg-img-mongolia-horses"></div>
        </div><!--end row--> 
        
         <!--card -- newsletter/signup-->
        
        <div id="sec-3" class="row shadow-lg bg-light text-secondary m-4">
            <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center text-center p-5 o-12">
                <h2 class="headline text-secondary pb-2 l-h enter-top">Signup</h2>
                <p class="pt-2 mb-0 enter-left">Get WiWP info, news, updates, and workshop info straight to your inbox.</p>
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
               </div>
               <!--End mailchimp form 2-->
            </div>
            <div class="col-lg-6 bg-img-signup min-50"></div>
        </div><!--end row-->
        
         <!--card -- contact-->
        
        <div id="sec-3" class="row shadow-lg bg-light text-secondary m-4">
            <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center text-center p-5 o-12">
                <h2 class="headline text-secondary pb-2 l-h enter-top">Contact</h2>
                <p class="py-2 mb-0 enter-left">To put your name on the list or for more information about upcoming workshops, please contact Janice below.</p>
                 <a class="btn btn-outline-secondary" href="mailto:janicemasonsteeves@gmail.com">Contact</a>
            </div>
            <div class="col-lg-6 bg-img-contact min-50"></div>
        </div><!--end row--> 
        
    </div><!--end container-->
</main>

<?php

include 'includes/footer.php';

?>