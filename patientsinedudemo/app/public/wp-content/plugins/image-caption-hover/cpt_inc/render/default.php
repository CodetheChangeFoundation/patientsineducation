<div class="wcp-caption-plugin" ontouchstart="" id="wcp-widget-<?php echo $atts['id'].'-'.$key; ?>" style="<?php echo $border_styling; ?>">
    <?php if (isset($captionlink) && $captionlink != '') {
        $popup =  (isset($data['lightbox'])) ? 'rel="prettyPhoto"' : '' ;
        echo   '<a '.$popup.' href="'.$captionlink.'" target="'.$captiontarget.'">';
    } ?>
        <div class="image-caption-box">
            <div class="caption <?php echo $hovereffect; ?>"
                style="background-color: <?php echo $captionbg; ?>;
                    color: <?php echo $captioncolor; ?>;">
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
            <img class="wcp-caption-image" src="<?php echo $imageurl; ?>" title="<?php echo $imagetitle; ?>" alt="<?php echo $imagealt; ?>" style="<?php echo $trspeed; echo $image_style_cus; ?>"/>
        </div>

    <?php if (isset($captionlink) && $captionlink != '') {
        echo   '</a>';
    } ?>
</div>
<style>
    <?php if ($captioncolor != '') { ?>
        #wcp-widget-<?php echo $atts['id'].'-'.$key; ?> .centered-text * {
            color: <?php echo $captioncolor; ?>;
        }
    <?php } ?>
</style>