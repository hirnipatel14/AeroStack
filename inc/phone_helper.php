<?php
/**
 * Phone helper: detect mobile devices and return appropriate phone link.
 */
function is_mobile_device() {
    $ua = isset($_SERVER['HTTP_USER_AGENT']) ? strtolower($_SERVER['HTTP_USER_AGENT']) : '';
    $mobile_agents = array('iphone','ipod','android','blackberry','opera mini','opera mobi','iemobile','windows phone','mobile','silk/','kindle');
    foreach ($mobile_agents as $ma) {
        if (strpos($ua, $ma) !== false) {
            return true;
        }
    }
    return false;
}

function get_phone_href() {
    // Core phone number parts (used for WhatsApp and displayed text)
    $digits = '9998671468';
    $display = '+91-9998671468';

    if (is_mobile_device()) {
        // On mobile: use the site-specific tel URL per request
        return 'https://aerostack.designmasters.in/tel:' . $display;
    }

    // On desktop: open WhatsApp chat
    return 'https://api.whatsapp.com/send?phone=' . $digits;
}

?>
