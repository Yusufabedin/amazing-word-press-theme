<?php get_header() ?>

<!-- Blog start -->
<div class="blogCont">
	<h2>Top  viewed</h2>
    <div class="blogRow">
        <?php $popularpost = new WP_Query( array( 'post_type'=>'post','posts_per_page' => 3) ); 
        ?>
        <?php if ( $popularpost->have_posts() ) : ?>
        <?php while ( $popularpost->have_posts() ) : $popularpost->the_post(); ?>
        <div class="blogBox">
        
            <a class="blogImg" href="#">
                <amp-img width="366" height="207" layout="responsive" src="<?php the_post_thumbnail_url(); ?>"></amp-img>
            </a>
             
            <h6><a href="<?php echo get_permalink() ?>"><?php the_title() ?></a></h6>
            <p>To Day Business Operations - Zoho One Review</p>
            <div class="postTime">
            	<span class="viewLike">
                	<span class="view"><?php echo gt_get_post_view();  ?></span>
                    <span class="like">115</span>
                </span>
            	<span class="postDate"><?php echo get_the_date() ?></span>
            </div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
         
     
    </div>



        <!--  letest post-->
	<h2>Latest Posts</h2>
    <div class="blogRow">

        <?php $recent_posts = new WP_Query(['post_type' => 'post']); ?>
        <?php if ( $recent_posts->have_posts() ) : 
            while ($recent_posts-> have_posts() ) : $recent_posts->the_post();
        
            ?>
        <div class="blogBox">
            <a class="blogImg" href="<?php echo get_permalink() ?>">
                <amp-img width="366" height="207" layout="responsive" src="<?php the_post_thumbnail_url(); ?>"></amp-img>
            </a>
            <h6><a href="<?php echo get_permalink() ?>"><?php the_title() ?></a></h6>
            <p><?php echo substr(get_the_excerpt(), 0, 45) ?></p>
            <div class="postTime">
            	<span class="viewLike">
                	<span class="view">15K</span>
                    <span class="like">115</span>
                </span>
            	<span class="postDate"><?php echo get_the_date() ?></span>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
    <ul class="pagination">
    	<li class="pagiPrev"><a href="#">Prev</a></li>
    	<li><a href="#">1</a></li>
    	<li><a href="#">2</a></li>
    	<li><a href="#">3</a></li>
    	<li><span>...</span></li>
    	<li class="pagiNext"><a href="#">Next</a></li>
    </ul>
</div>
<?php endif; ?>
<!-- Blog end -->
<?php get_footer() ?>