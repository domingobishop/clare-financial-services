<?php
/**
 * Admin
 *
 */

add_action('admin_menu', 'cfs_settings');
add_action('admin_init', 'cfs_settings_data');

function cfs_settings() {
    add_menu_page('CFS theme settings', 'CFS', 'administrator', 'cfs-settings', 'cfs_settings_page', 'dashicons-admin-generic', 21);
}

function cfs_settings_data() {

    register_setting('cfs_settings_group', 'footer_1');
    register_setting('cfs_settings_group', 'footer_2');

}

function tech_settings_page()
{
    // admin
    ?>
    <style>
        .cfs-admin input[type=text] {
            width: 100%;
            max-width: 320px;
        }
        .cfs-admin textarea {
            width: 100%;
            max-width: 320px;
            height: 12em;
        }
    </style>
    <div class="cfs-admin wrap">
        <h2>CFS theme settings</h2>

        <form method="post" action="options.php" novalidate="novalidate">
            <?php settings_fields( 'cfs_settings_group' ); ?>
            <?php do_settings_sections( 'cfs_settings_group' ); ?>
            <table class="form-table">
                <h3>Footer</h3>
                <tr valign="top">
                    <th scope="row"><label for="footer_1">Footer section 1</label></th>
                    <td><textarea name="footer_1"><?php echo esc_attr( get_option('footer_1') ); ?></textarea></td>
                </tr>
                <tr valign="top">
                    <th scope="row"><label for="footer_2">Widget HTML code</label></th>
                    <td><textarea name="footer_2"><?php echo esc_attr( get_option('footer_2') ); ?></textarea></td>
                </tr>
            </table>
            <?php submit_button(); ?>
        </form>

    </div>
    <?php
}