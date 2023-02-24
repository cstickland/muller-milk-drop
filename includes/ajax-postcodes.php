<?php

function get_postcodes() {
    $key = "AIzaSyD2wBuiy-P3_RR_X--pTdLjTEAMVBfJtTA";
    $sheet = "1Hgy1bdaQ6zkG_FHB3hQ0SRHjkQ1L2m-Gdoi8pr3G2zU";
    $page = "Ideas";
    $url = "https://sheets.googleapis.com/v4/spreadsheets/" . $sheet . "/values/" . $page . "?key=" . $key . "&majorDimension=COLUMNS";
    
    $codes = curl_init($url);
    curl_setopt($codes, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($codes);
    echo $result;
    die();
}


add_action('wp_ajax_postcodes', 'get_postcodes');

?>