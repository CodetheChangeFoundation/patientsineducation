jQuery(document).ready(function($) {

    // Handling for Square and Circle Fields
    $('.wcp-main-wrap .panel-default').each(function(index, el) {
        var ac_panel = $(this);
        var hover_effect = ac_panel.find('select[id^="hovereffect"]').val();
        if (hover_effect.indexOf("circle") == -1 && hover_effect.indexOf("square") == -1){
            ac_panel.find('.if-square-circle').hide();
        } else {
            ac_panel.find('.if-square-circle').show();
        }
    });

    $('select[id^="hovereffect"]').change(function(event) {
        var hover_effect = $(this).val();
        var ac_panel = $(this).closest('.panel-default');
        if (hover_effect.indexOf("circle") == -1 && hover_effect.indexOf("square") == -1){
            ac_panel.find('.if-square-circle').hide();
        } else {
            ac_panel.find('.if-square-circle').show();
        }
    });
    
    // Apply Color Picker
    $('.colorpicker').wpColorPicker();

    // Sorting and Panels
    var active = false,
        sorting = false;
    
    $( "#wcpinner" )
    .accordion({
        header: "> div > h3",
        collapsible: true,
        activate: function( event, ui){
            //this fixes any problems with sorting if panel was open (remove to see what I am talking about)
            if(sorting)
                $(this).sortable("refresh");   
        }
    })
    .sortable({
        handle: "h3",
        placeholder: "ui-state-highlight",
        start: function( event, ui ){
            //change bool to true
            sorting=true;
            
            //find what tab is open, false if none
            active = $(this).accordion( "option", "active" ); 
            
            //possibly change animation here
            $(this).accordion( "option", "animate", { easing: 'swing', duration: 0 } );
            
            //close tab
            $(this).accordion({ active:false });
        },
        stop: function( event, ui ) {
            ui.item.children( "h3" ).triggerHandler( "focusout" );
            
            //possibly change animation here; { } is default value
            $(this).accordion( "option", "animate", { } );
            
            //open previously active panel
            $(this).accordion( "option", "active", active );
            
            //change bool to false
            sorting=false;
        }
    });

    // Total IMages
    var count = $('.wcp-main-wrap .group:last-child').attr('id');
    
    $('.wcp-main-wrap .group').each(function(index, el) {
    	if (parseInt($(this).attr('id')) > parseInt(count)) {
    		count = $(this).attr('id');
    	};
    });
   
    // Insert New Image
    $(".add").click(function(event) {
        event.preventDefault();
        count = parseInt(count) + 1;
        var clone_this = $('.wcp-main-wrap div#0').clone(true);
        $(clone_this).attr('id', count);
        $(clone_this).find('input, select, textarea').each(function(index, el) {
            var new_name = '';
            if ($(this).attr('name') !== undefined) {
                var old_name = $(this).attr('name');
                // console.log(old_name);
                new_name = old_name.replace(/[0-9]/g, count);
                $(this).attr('name', new_name);
                $(this).val('');
            }

            if ($(this).hasClass('colorpicker')) {
                var c_wrap = $(this).closest('.wcp-color-wrap');
                // console.log(c_wrap);
                c_wrap.html('<input name="'+new_name+'" type="text" class="colorpicker" data-alpha="true">');
                c_wrap.find('.colorpicker').wpColorPicker();
            }
        });
        $(clone_this).appendTo('.wcp-main-wrap').hide().fadeIn('slow');
    });

    // Duplicate Last Image
    $(".duplicate").click(function(event) {
        event.preventDefault();
        count = parseInt(count) + 1;

        var selected_values = [];
        $('.wcp-main-wrap .group:last-child select').each(function(index, el) {
            var sele_id = $(this).attr('id');
            var sele_val = $(this).val();
            selected_values[sele_id] = sele_val;
        });
        var clone_this = $('.wcp-main-wrap .group:last-child').clone(true);
        $(clone_this).attr('id', count);
        $(clone_this).find('input, select, textarea').each(function(index, el) {
            var new_name = '';
            if ($(this).attr('name') !== undefined) {
                var old_name = $(this).attr('name');
                // console.log(old_name);
                new_name = old_name.replace(/[0-9]/g, count);
                $(this).attr('name', new_name);
            }

            var this_input_id = $(this).attr('id');
            if (this_input_id in selected_values) {
                $(this).val(selected_values[this_input_id]);
            }

            if ($(this).hasClass('colorpicker')) {
                var c_val = $(this).val();
                var c_wrap = $(this).closest('.wcp-color-wrap');
                // console.log(c_wrap);
                c_wrap.html('<input value="'+c_val+'" name="'+new_name+'" type="text" class="colorpicker" data-alpha="true">');
                c_wrap.find('.colorpicker').wpColorPicker();
            }
        });
        $(clone_this).appendTo('.wcp-main-wrap').hide().fadeIn('slow');
    });



    $(".wcp-main-wrap").on('click', '.button-delete', function(event) {
        event.preventDefault();
        var this_col = $(this).closest('.group').attr('id');
        if (this_col == '0' || this_col == 0) {
            alert('Sorry, you can not delete first Column!');
        } else {
            $(this).closest('.group').fadeOut('slow', function() {
               $(this).remove(); 
            });
        }
    });

    // Media Uploader
    var ich_cpt_uploader;
     
    jQuery('.upload_image_button').live('click', function( event ){
     
        event.preventDefault();

        var this_widget = '#' + jQuery(this).closest('.group').attr('id');
     
     
        // Create the media frame.
        ich_cpt_uploader = wp.media.frames.ich_cpt_uploader = wp.media({
          title: jQuery( this ).data( 'title' ),
          button: {
            text: jQuery( this ).data( 'btntext' ),
          },
          multiple: false  // Set to true to allow multiple files to be selected
        });
     
        // When an image is selected, run a callback.
        ich_cpt_uploader.on( 'select', function() {
          // We set multiple to false so only get one image from the uploader
          attachment = ich_cpt_uploader.state().get('selection').first().toJSON();
            
            
             jQuery(this_widget).find('.image-url').val(attachment.url);
             jQuery(this_widget).find('.image-title').val(attachment.title);
             jQuery(this_widget).find('.alt-text').val(attachment.alt);
             // jQuery(this_widget).find('.img-prev').html('<img src="'+attachment.url+'" width="100%">')
        });
     
        // Finally, open the modal
        ich_cpt_uploader.open();
    });
    
    $('#ichricheditor-tmce').trigger('click');
    $('.ich-rich-editor-wrap').hide();
    
    var current_textarea = '';
    var win_scroll = '';

    $('.caption-settings-wrap').on('click', '.ich-open-editor', function(event) {
        event.preventDefault();

        $('.caption-settings-wrap').hide();
        $('.ich-rich-editor-wrap').show();

        current_textarea = $(this).closest('.input-group').find('textarea');
        var curr_contents = $(this).closest('.input-group').find('textarea').val();

        if (jQuery("#wp-ichricheditor-wrap").hasClass("tmce-active")){
            tinyMCE.get('ichricheditor').setContent(curr_contents);
        }else{
            $('#ichricheditor').val(curr_contents);
        }        
        // console.log(curr_contents);

        win_scroll = $(window).scrollTop();
        jQuery('html, body').animate({
            scrollTop: jQuery('#ichcpt_options').offset().top
        }, 300);
    });

    $('.ich-rich-editor-wrap').on('click', '.ich-editor-insert', function(event) {
        event.preventDefault();
        var content = '';
        if (jQuery("#wp-ichricheditor-wrap").hasClass("tmce-active")){
            content = tinyMCE.get('ichricheditor').getContent();
        }else{
            content = $('#ichricheditor').val();
        }        
        $(current_textarea).val(content);
        $('.caption-settings-wrap').show();
        $('.ich-rich-editor-wrap').hide();
        jQuery('html, body').animate({
            scrollTop: win_scroll
        }, 300);

    });

    $('.ich-rich-editor-wrap').on('click', '.ich-editor-cancel', function(event) {
        event.preventDefault();
        $('.caption-settings-wrap').show();
        $('.ich-rich-editor-wrap').hide();

        jQuery('html, body').animate({
            scrollTop: win_scroll
        }, 300);
    });

});