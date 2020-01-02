<?php 
$image_ids = explode(',', $atts['trial_images']);
$trail_url = explode('|', $atts['free_trial_buttom']);
// print_r($image_ids);
 ?>

<!-- freeTrial start -->
<div class="freeTrial">
    <div class="fTrialCont">
    	<h2><?php echo $atts['trial_titel'] ?></h2>
        <p><?php echo $atts['trial_description'] ?></p>
        <div class="fTrialMid">
        <?php foreach($image_ids as $single_image): ?>
            <div class="fTrialIn">
                <div class="fTrialImg">
                    <amp-img width="506" height="441" layout="responsive" src="<?php echo wp_get_attachment_image_src( $single_image, 'full' )[0] ?>" alt="Image"></amp-img>
                </div>
            </div>
        <?php endforeach; ?>
            
        </div>
        <h4><?php echo $atts['zoho_titel'] ?></h4>
        <a class="ftBtn" href="<?php echo $trail_url[0] ?>"><?php echo $trail_url[1] ?></a>
    </div>
</div>
<!-- freeTrial end -->

 <?//php print_r($atts); ?> 