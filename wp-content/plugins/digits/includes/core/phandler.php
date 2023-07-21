<?php


if (!defined('ABSPATH')) {
    exit;
}

add_action('wp_ajax_dig_modify_addon', 'digits_modify_addons');


/*
 * -1 -> Delete Plugin
 */

function digits_modify_addons()
{
    if (!current_user_can('manage_options')) {
        die();
    }

    include_once(ABSPATH . 'wp-admin/includes/class-wp-upgrader.php');
    include_once(ABSPATH . 'wp-admin/includes/plugin-install.php');


    $nounce = $_POST['nounce'];


    if (!wp_verify_nonce($nounce, 'dig_addon' . $_POST['plugin'])) {
        wp_send_json_error(array('errorMessage' => __('Error', 'digits')));
    }
    if (isset($_POST['type']) && isset($_POST['plugin'])) {
        $type = $_POST['type'];

        $plugin = $_POST['plugin'];

        if ($type == -1) {

            deactivate_plugins($plugin);
            wp_ajax_delete_plugin();
            die();
        } else {

            $digpc = '8699958a-77f3-4db8-9422-126b0836e1c5';
            if (empty($digpc)) {
                wp_send_json_error(array('errorMessage' => __('Please enter a valid purchase code', 'digits')));
                die();
            }

            $status = array(
                'install' => 'plugin',
                'slug' => sanitize_key(wp_unslash($_POST['slug'])),
            );

            if (!current_user_can('install_plugins')) {
                $status['errorMessage'] = __('Sorry, you are not allowed to install plugins on this site.');
                wp_send_json_error($status);
            }

            
            if ($type == 10) {
                wp_ajax_update_plugin();
            } else {
                $result = activate_plugin($plugin);
                if (is_wp_error($result)) {
                    $status['errorCode'] = $result->get_error_code();
                    $status['errorMessage'] = $result->get_error_message();
                    wp_send_json_error($status);
                }
                wp_send_json_success($status);
            }

        }


    }


}


function dig_showResponse($success, $message = null, $code = -1)
{

    $reponse = array();
    header('Content-Type: application/json');
    $reponse['success'] = $success;
    if ($message != null) {
        $reponse['msg'] = $message;
    }
    $response['code'] = $code;

    echo json_encode($reponse);

    die();

}

//uninstall_plugin