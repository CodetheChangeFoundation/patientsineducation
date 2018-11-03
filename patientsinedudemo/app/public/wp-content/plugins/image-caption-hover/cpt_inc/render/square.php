<div class="ih-item <?php echo $hovereffect; ?>" id="wcp-widget-<?php echo $atts['id'].'-'.$key; ?>">
    <div class="wcp-ih-inner">
    <?php if (isset($captionlink) && $captionlink != '') {
        $popup =  (isset($data['lightbox'])) ? 'rel="prettyPhoto['.$atts['id'].']"' : '' ;
        echo   '<a '.$popup.' href="'.$captionlink.'" target="'.$captiontarget.'">';
    }
        $infoBack = $this->has_info_class($hovereffect);
    ?>
        <div class="img">
            <img src="<?php echo $imageurl; ?>" title="<?php echo $imagetitle; ?>" alt="<?php echo $imagealt; ?>" />                
        </div>
        <div class="info" <?php echo (!$infoBack) ? 'style="background-color: '.$captionbg.';color:'.$captioncolor.';"' : '' ; ?>>
            <div <?php echo ($infoBack) ? 'style="background-color: '.$captionbg.';color:'.$captioncolor.';" class="info-back"' : '' ; ?>>
                <h3 style="font-size:<?php echo (isset($title_font_size)) ? $title_font_size : '' ; ?>;background-color:<?php echo (isset($title_bg_color)) ? $title_bg_color : '' ; ?>;">
                    <?php echo (isset($imagetitle) && $imagetitle != '') ? $imagetitle : 'TITLE HERE' ; ?>
                </h3>
                <div class="bottom-caption" style="text-align: <?php echo $captionalignment; ?>;">
                    <?php
                        if (isset($fgg_settings['caption_shortcodes'])) {
                            echo apply_filters('the_content', $captiontext);
                        } else {
                            echo $captiontext;
                        }
                     ?>
                </div>
            </div>
        </div>
    </div>
    <?php if (isset($captionlink) && $captionlink != '') {
        echo   '</a>';
    } ?>
</div>
<style>
    #wcp-widget-<?php echo $atts['id'].'-'.$key; ?> .info h3 {
        color: <?php echo (isset($titlecolor)) ? $titlecolor : ''; ?>;
    }    
    #wcp-widget-<?php echo $atts['id'].'-'.$key; ?> .info .bottom-caption * {
        color: <?php echo $captioncolor; ?>;
    }    
</style>