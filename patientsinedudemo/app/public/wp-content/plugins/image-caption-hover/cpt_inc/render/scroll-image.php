<div class="wcp-caption-plugin" ontouchstart="" id="wcp-widget-<?php echo $atts['id'].'-'.$key; ?>" style="<?php echo $border_styling; ?>">
    <?php if (isset($captionlink) && $captionlink != '') {
        $popup =  (isset($data['lightbox'])) ? 'rel="prettyPhoto"' : '' ;
        echo   '<a '.$popup.' href="'.$captionlink.'" target="'.$captiontarget.'">';
    } ?>
        <div class="image-caption-box <?php echo $hovereffect; ?>" style="display: block;
              transition: background-position 5s ease-out 0s;
                -webkit-transition: background-position 5s ease-out 0s;
                -moz-transition: background-position 5s ease-out 0s;
                background-color: #ffffff;
                height: 280px;
                background-position: center 0;
                background-repeat: no-repeat;
                background-size: 100% auto;
                background-image: url('<?php echo $imageurl; ?>');">
            <div class="caption"
                style="background-color: <?php echo $captionbg; ?>;
                    color: <?php echo $captioncolor; ?>;
                    transition-duration: <?php // echo $animationspeed; ?>;
                    -webkit-transition-duration: <?php // echo $animationspeed; ?>;">
                <div style="display:table;height:100%;width: 100%;">
                    <<?php echo $captionwrap; ?> class="centered-text" style="text-align: <?php echo $captionalignment; ?>; padding: 5px;">
                        <?php
                            if (isset($fgg_settings['caption_shortcodes'])) {
                                echo apply_filters('the_content', $captiontext);
                            } else {
                                echo $captiontext;
                            }
                         ?>
                    </<?php echo $captionwrap; ?>>
                </div>
            </div>
        </div>

    <?php if (isset($captionlink) && $captionlink != '') {
        echo   '</a>';
    } ?>
</div>
<style>
    #wcp-widget-<?php echo $atts['id'].'-'.$key; ?> .centered-text * {
        color: <?php echo $captioncolor; ?>;
    }    
</style>