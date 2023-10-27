<?php

class HelperSinhVien {
    function getToken() {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://qlsvtt-fit.dotb.cloud/rest/v11_3/oauth2/token',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array('username' => 'admin', 'password' => 'ad@dotb###', 'grant_type' => 'password', 'client_id' => 'dotb_ufm', 'client_secret' => 'dotb_ufm', 'platform' => 'base'),
            CURLOPT_HTTPHEADER => array(),
            CURLOPT_SSL_VERIFYPEER => false,
        ));

        $response = curl_exec($curl);
        if (curl_errno($curl))
            $err = 'Error: ' . curl_error($curl);
        curl_close($curl);
        $data = json_decode($response, true);
        if(!empty($data['error'])) {
            return array(
                'success' => 0,
                'error' => $err,
            );
        } else {
            return array(
                'success' => 1,
                'access_token' => $data['access_token'],
                'expires_in' => $data['expires_in'],
                'token_type' => $data['token_type'],
                'scope' => $data['scope'],
                'refresh_token' => $data['refresh_token'],
                'refresh_expires_in' => $data['refresh_expires_in'],
                'download_token' => $data['download_token'],
            );
        }
    }

    function getListPosts($token){
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://qlsvtt-fit.dotb.cloud/rest/v11_3/Posts/list_posts',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_HTTPHEADER => array(
                'oauth-token: ' . $token,
                'Authorization: Bearer 45fa94df-a977-45a9-b970-16d2f6ab0b3d'),
        ));
        $response = curl_exec($curl);
        if (curl_errno($curl))
            $err = 'Error: ' . curl_error($curl);
        curl_close($curl);
        $data = json_decode(html_entity_decode($response), true);
        if(!empty($data['error'])) {
            return array(
                'success' => 0,
                'error' => $err,
            );
        } else {
            return array(
                'success' => 1,
                'data' => $data,
            );
        }
    }
}
