<!-- <?php echo print_r($atts) ?> -->
<!-- gRating start -->
<div class="gRating">
    <div class="gRatingTop">
        <h2><?php echo $atts['client_rating_title'] ?></h2>
    </div>
    <div class="grCarousel">
        <div class="grCaroIn">
            <amp-carousel id="carousel" width="1200" height="630" layout="responsive" type="slides" autoplay delay="3000" on="slideChange:cSelector.toggle(index=event.index, value=true)">
                 <?php foreach($atts['amz_reviews'] as $single_review): ?>
                <div class="slide-wrap">
                    <span class="gLogo"><amp-img width="241" height="80" layout="intrinsic" src="<?php echo get_template_directory_uri() ?>/image/gLogo.png" alt="gLogo"></amp-img></span>                    
                    <div class="slideMid">
                        <p>"<?php echo $single_review->client_rating_text ?>"</p>
                    </div>

                    <span class="star"><amp-img width="243" height="41" layout="intrinsic" src="<?php echo get_template_directory_uri() ?>/image/star.png" alt="star"></amp-img></span>
                    <h6><?php echo $single_review->client_name_who_rates ?></h6>
                </div>
            <?php endforeach; ?>               
            </amp-carousel>
            <amp-selector id="cSelector" on="select:carousel.goToSlide(index=event.targetOption)" layout="container">
                <span option="0" selected></span>
                <span option="1"></span>
                <span option="2"></span>
                <span option="3"></span>
                <span option="4"></span>
            </amp-selector>
        </div>
    </div>
    <div class="gRatingBtm">
        <div class="grBtmIn">
            <span>See more reviews on:</span>
            <ul>
            	<li><a href="#"><amp-img width="194" height="56" layout="responsive" src="<?php echo get_template_directory_uri() ?>/image/upLogo.png" alt="upLogo"></amp-img></a></li>
            	<li><button on="tap:gPopup"><amp-img width="185" height="62" layout="responsive" src="<?php echo get_template_directory_uri() ?>/image/gLogo2.png" alt="gLogo2"></amp-img></button></li>
            	<li><a href="#"><amp-img width="241" height="66" layout="responsive" src="<?php echo get_template_directory_uri() ?>/image/udLogo.png" alt="udLogo"></amp-img></a></li>
            </ul>
        </div>
    </div>
</div>
<!-- gRating end -->
