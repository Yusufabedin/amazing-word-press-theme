<?php $image_id = explode(',', $atts['achieve_img']) ?>
<div class="cmnTxtBox">
    <div class="cmnTxtBoxMid">
    	<h2><?php echo $atts['about_achievements_titel'] ?></h2>
        <p><?php echo $atts['inner_titel'] ?></p>
        <ol>
        	<?php echo $atts['achievements_description'] ?>
        </ol>
        <?php //print_r($atts) ?>
    </div>
</div>

<div class="txtImgSec aboutSec-6">
   
        <?php foreach($image_id as $single_image_id): ?>
             <div class="imgBox">
        <amp-img width="898" height="511" layout="responsive" src="<?php echo wp_get_attachment_image_src( $single_image_id, 'full' )[0]; ?>" alt="Image"></amp-img>

    </div>
    <?php endforeach; ?>
</div
