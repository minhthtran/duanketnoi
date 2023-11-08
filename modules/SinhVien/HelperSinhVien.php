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

    function getListPosts($token) {
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
                'oauth-token: ' . $token),
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

    function getDetailPost($token, $post_id = '') {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://qlsvtt-fit.dotb.cloud/rest/v11_3/Posts/detail_posts',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array('id' => $post_id),
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_HTTPHEADER => array(),
        ));

        $response = curl_exec($curl);
        if (curl_errno($curl))
            $err = 'Error: ' . curl_error($curl);
        curl_close($curl);
        $data = json_decode(html_entity_decode($response), true);
        curl_close($curl);
        if(!empty($data['error'])) {
            return array(
                'success' => 0,
                'error' => $err,
                'dataErorr' => $data['error'],
            );
        } else {
            return array(
                'success' => 1,
                'data' => $data,
            );
        }
    }

    function getListPostsSearch($token, $search) {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://qlsvtt-fit.dotb.cloud/rest/v11_3/Posts/list_posts_search',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array('search' => $search),
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_HTTPHEADER => array(
                'oauth-token: ' . $token),
        ));
        $response = curl_exec($curl);
        if (curl_errno($curl))
            $err = 'Error: ' . curl_error($curl);
        curl_close($curl);
        $data = json_decode(html_entity_decode($response), true);
        if(!empty($data['error'])) {
            return array(
                'success' => 0,
                'error' => $data['error'],
            );
        } else {
            return array(
                'success' => 1,
                'data' => $data,
            );
        }
    }

    function getListPostsSearch_Time($token, $year = '', $hk = '') {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://qlsvtt-fit.dotb.cloud/rest/v11_3/Posts/list_posts_search_time',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array(
                'year' => $year,
                'hk' => $hk),
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_HTTPHEADER => array(
                'oauth-token: ' . $token),
        ));
        $response = curl_exec($curl);
        if (curl_errno($curl))
            $err = 'Error: ' . curl_error($curl);
        curl_close($curl);
        $data = json_decode(html_entity_decode($response), true);
        if(!empty($data['error'])) {
            return array(
                'success' => 0,
                'error' => $data['error'],
            );
        } else {
            return array(
                'success' => 1,
                'data' => $data,
            );
        }
    }
}
