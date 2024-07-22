<?php
$cta_btn_text = borex_option('header_cta_btn_text');
$cta_btn_url = borex_option('header_cta_btn_url');
?>

<li class="header-cta-button"><a class="td-button" href="<?php echo esc_url($cta_btn_url);?>"><?php echo esc_html($cta_btn_text);?><i class="fas fa-long-arrow-alt-right"></i></a></li>
