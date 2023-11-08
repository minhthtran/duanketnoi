<?php

class helperLogin
{
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

    function loginPortal($username = '', $password = '') {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'http://localhost/proj-thnn-master/dotbedu_prod_qlsvtt-fit/rest/v11_3/qlsvtt/login',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array(
                'username' => $username,
                'password' => $password,
            ),
        ));

        $response = curl_exec($curl);

        if (curl_errno($curl))
            $err = 'Error: ' . curl_error($curl);
        curl_close($curl);
        $data = json_decode($response, true);

        if(!empty($data['error'])) {
            return array(
                'success' => 0,
                'error' => $data['error'],
            );
        } else {
            return array(
                'success' => 1,
                'id' => $data['data']['id'],
                'object' => $data['data']['object'],
            );
        }
    }
}
