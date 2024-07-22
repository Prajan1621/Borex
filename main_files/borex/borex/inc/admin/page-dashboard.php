<?php if (!defined('ABSPATH')) {
	die;
} // Cannot access directly. ?>

<div class="wrap td-wrap">

    <div class="td-admin-page-header">

        <div class="td-admin-page-header-text">
            <h1><?php esc_html_e('Welcome to Borex!', 'borex'); ?></h1>
            <p><?php esc_html_e('Borex is a WordPress theme for business and finance company', 'borex'); ?></p>
        </div>

        <div class="td-admin-page-header-logo">
            <img src="<?php echo get_theme_file_uri('inc/admin/assets/images/admin-logo.png'); ?>"/>
            <strong>V-<?php echo wp_get_theme()->get('Version'); ?></strong>
        </div>
    </div>

    <div class="td-admin-boxes">

        <div class="td-admin-box">

            <div class="td-admin-box-header">
                <h2><?php esc_html_e('Theme Documentation', 'borex'); ?></h2>
            </div>

            <div class="td-admin-box-inside">
                <p><?php esc_html_e('You can find everything about theme settings. See our online documentation.', 'borex'); ?></p>
                <a href="https://docs.themedraft.net/wp/borex/" target="_blank"
                   class="button"><?php esc_html_e('Go to Documentation', 'borex'); ?></a>
            </div>

        </div>

        <div class="td-admin-box">

            <div class="td-admin-box-header">
                <h2><?php esc_html_e('Theme Support', 'borex'); ?></h2>
            </div>

            <div class="td-admin-box-inside">
                <p><?php esc_html_e('Do you need help? Feel free to ask any question.', 'borex'); ?></p>
                <a href="https://support.themedraft.net/forum/borex-business-amp-finance-wordpress-theme" target="_blank"
                   class="button"><?php esc_html_e('Go to Support Forum', 'borex'); ?></a>
            </div>
        </div>
    </div>
</div>