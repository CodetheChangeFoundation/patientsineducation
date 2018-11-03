<div class="ich-prefix">
<?php
    
    // Getting Data
    $images_data = get_post_meta( $atts['id'], 'ich_cpt', true );
    $fgg_settings = get_post_meta( $atts['id'], 'ichcpt_settings', true );

    // Variables Init
    $css_class = (isset($fgg_settings['columns'])) ? 'col-1-'.$fgg_settings['columns'] : '1' ;
    $padding = (isset($fgg_settings['col_space'])) ? $fgg_settings['col_space'] : '10px' ;

    ?>

    
    <div class="row wcp-fgg-wrap" style="width:auto;margin-left: -<?php echo $padding; ?>;margin-right: -<?php echo $padding; ?>;">

        <?php foreach ($images_data as $key => $data) { ?>
            <?php
                extract($data);
                $border_styling = '';  
                $trspeed = '';
                $caption_style_cus = '';
                $image_style_cus = '';
                ?>
            <div class="<?php echo $css_class; ?>" style="padding: <?php echo $padding; ?>;">
                <?php if (strpos($hovereffect, 'square') !== false) {
                    include 'render/square.php';
                } else if (strpos($hovereffect, 'circle') !== false) {
                    include 'render/circle.php';
                } else if ($hovereffect == 'scroll-image-bottom-caption' || $hovereffect == 'scroll-image-top-caption') {
                    include 'render/scroll-image.php';
                } else {
                    include 'render/default.php';
                } ?>
            </div>
            
        <?php } ?>
    </div>
    

    <?php if (isset($fgg_settings['custom_css']) && $fgg_settings['custom_css'] != '') { ?>
        <style>
            <?php echo stripcslashes($fgg_settings['custom_css']); ?>
        </style>
    <?php } ?>

    <div class="clearfix"></div>
    
</div>