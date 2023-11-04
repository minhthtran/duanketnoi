<?php
require_once "HelperSinhVien.php";

switch ($_POST['type']) {
    case 'getDetailPost':
        $result = json_encode(getDetailPost($_POST['post_id']));
        echo $result;
        break;
}

function getDetailPost($post_id = '')
{
    $helperSV = new HelperSinhVien();
    $rs1 = $helperSV->getToken();
    if($rs1['success'] == 0) {
        return array(
            'success' => 0,
            'error' => $rs1['error'],
        );
    } else {
        $rs2 = $helperSV->getDetailPost($rs1['access_token'], $post_id);
        if($rs2['success'] == 0) {
            return array(
                'success' => 0,
                'data' => $rs2['dataErorr'],
            );
        } else
        {
            return array(
                'success' => 1,
                'data' => $rs2['data'],
            );
        }
    }
}