<?php
/**
 * embeed css
 */

//  todo - if added only from shortcodes
//  for GTM analytics
if( '2' == $style || '3' == $style ) {
    ?>
    <style>
        .ht-ctc-chat svg { 
            pointer-events: none;
            /* display: inline-block; */
        }
    </style>
    <?php
}


// include_once HT_CTC_PLUGIN_DIR .'new/inc/assets/img/svg-style-2.php';
// <div class="ht-ctc-svg img-icon ctc-analytics">
//     < ?php echo style_2_svg($img_size, $call_to_action); ? >
// </div>

// include_once HT_CTC_PLUGIN_DIR .'new/inc/assets/img/svg-style-3.php';
// <div class="ht-ctc-svg img-icon ctc-analytics">
//     < ?php echo style_3_svg($img_size, $call_to_action); ? >
// </div>