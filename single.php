<?php get_header() ?>

<!-- Banner start -->
<div class="banner blogBnr">
    <div class="bnrIn">
        <div class="bnrTxt">
        	<h2>Blog</h2>
        </div>
    </div>
</div>
<!-- Banner end -->

<!-- Blog start -->
<div class="blogCont">
	<?php if (have_posts()) : ?>
	<?php 	while (have_posts()) : 
		gt_set_post_view(); 
		the_post();
	?>

	<div class="single-blog">
    	<div class="posted">
            <div class="pPersonPhoto">
            	<amp-img width="75" height="75" layout="intrinsic" src="<?php  ?>" alt="image"></amp-img>
            </div>
            <div class="pPersonName">Lior Izik</div>
            <div class="pDate"><?php echo get_the_date() ?></div>
        </div>
    	<h1><?php echo get_the_title(); ?></h1>
    	 <amp-img width="1067" height="562" layout="responsive" src="<?php echo get_the_post_thumbnail_url() ?>" alt="single image"></amp-img>
       <?php the_content(); ?>
        <div class="sbBtm">
            <ul class="socialLink">
            	<li class="facebook"><a href="#"></a></li>
            	<li class="twitter"><a href="#"></a></li>
            	<li class="linkedin"><a href="#"></a></li>
            	<li class="link"><a href="#"></a></li>
            	<li class="heart"><a href="#"></a></li>
            </ul>
            <div class="sbBtmBtn">
                <div>
                	<a class="btn" href="#">See All</a>
                </div>
                <div class="sb-prevNext">
                	<a class="btn" href="#">Prev</a>
                	<a class="btn" href="#">Next</a>
                </div>
            </div>
        </div>
    </div>
    <?php endwhile; ?>
        <?php endif; ?>
</div>
<!-- Blog end -->

<?php get_footer() ?>