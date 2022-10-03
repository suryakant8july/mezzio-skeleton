<?php

/**
 * Development-only configuration.
 *
 * Put settings you want enabled when under development mode in this file, and
 * check it into your repository.
 *
 * Developers on your team will then automatically enable them by calling on
 * `composer development-enable`.
 */


return [
    /** Email Related Setting */
    'from_email' => 'admin@gmail.com',
    'EMAIL_LINK_EXPIRY_DAY' => 5,
    'basePath' => str_replace('\\', '/', dirname(dirname(__DIR__)) . "/public/"),
    'mail_retry_count' => 3,
    'form_group_id' => 5,
    'createPDF' => 1,
    'server' => 'LOCAL', //LOCAL, UAT, PROD
    'local' => true,
    'strategyDBFlag' => true,
    'local_service' => [
        'auth' => dirname(__FILE__) . '/../../public/login.json', // Local      
    ],    
    'PREFIX' => 'prefix_',    
    'RootPath' => $_SERVER['DOCUMENT_ROOT'],    
    'clientIpAddress' => function () {
        $ipaddress = '';
        if (isset($_SERVER['HTTP_CLIENT_IP'])) {
            $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
        } else if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else if (isset($_SERVER['HTTP_X_FORWARDED'])) {
            $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
        } else if (isset($_SERVER['HTTP_FORWARDED_FOR'])) {
            $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
        } else if (isset($_SERVER['HTTP_FORWARDED'])) {
            $ipaddress = $_SERVER['HTTP_FORWARDED'];
        } else if (isset($_SERVER['REMOTE_ADDR'])) {
            $ipaddress = $_SERVER['REMOTE_ADDR'];
        } else {
            $ipaddress = 'UNKNOWN';
        }
        return $ipaddress;
    },
    'P_MAX_LIMIT' => 20,
    /**pagination maximun limit */     
];
