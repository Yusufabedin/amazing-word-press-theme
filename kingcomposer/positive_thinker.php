<?php $image_id = explode(',', $atts['positive_image']) ?>
<div class="cmnTxtBox tCenter">
    <div class="cmnTxtBoxMid">
    	<h2><?php echo $atts['positive_titel'] ?></h2>
        <p><?php echo $atts['positive_description'] ?></p>
    </div>
</div>



<div class="txtImgSec aboutSec-8">
	
    <div class="imgBox">
    	
        <div class="imgBoxMid">
        	<?php foreach($image_id as $single_image_id): ?>
        	<amp-img width="634" height="440" layout="responsive" src="<?php echo wp_get_attachment_image_src( $single_image_id, 'full' )[0]; ?>" alt="Image"></amp-img>
		<?php endforeach; ?> 
        </div>	
    </div>
   
    <div class="txtBox">
	<?php echo $atts['all_description'] ?>
    </div>
</div>
<!-- About end -->