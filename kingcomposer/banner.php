<?php 
$left_button = explode('|',  $atts['trial_button_left']);
$right_button = explode('|', $atts['trial_button_right']);
 ?>

<!-- Banner start -->
<div class="banner">
    <div class="bnrIn">
        <div class="homeBnrBox">
            <div class="homeBnrImg">
            	<amp-img width="294" height="294" layout="responsive" src="<?php echo $atts['banner_image'] ?>" alt="Image"></amp-img>
            </div>
            <div class="homeBnrTxt">
                <h1><?php echo $atts['banner_title'] ?></h1>
                <p><?php echo $atts['banner_des'] ?></p>
                <a class="bnrBtn1" href="<?php echo $left_button[0] ?>"><?php echo $left_button[1] ?></a>
                <a class="bnrBtn2" href="<?php echo $right_button[0] ?>"><?php echo $right_button[1] ?></a>
            </div>
        </div>       
    </div>
</div>
<!-- Banner end -->
<?//php  print_r($atts) ?>