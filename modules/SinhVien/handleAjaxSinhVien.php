<?php
require_once "HelperSinhVien.php";

switch ($_POST['type']) {
    case 'getDetailPost':
        $result = json_encode(getDetailPost($_POST['post_id']));
        echo $result;
        break;
    case 'searchPosts':
        $result = json_encode(searchPosts($_POST['search']));
        echo $result;
        break;
    case 'searchPosts_Time':
        $result = json_encode(searchPosts_Time($_POST['year'], $_POST['hk']));
        echo $result;
        break;
}

function searchPosts_Time($year = '', $hk = '') {
    $helperSV = new HelperSinhVien();
    $rs1 = $helperSV->getToken();
    if($rs1['success'] == 0) {
        return array(
            'success' => 0,
            'error' => $rs1['error'],
        );
    } else {
        $rs2 = $helperSV->getListPostsSearch_Time($rs1['access_token'], $year, $hk);
        if($rs2['success'] == 0) {
            return array(
                'success' => 0,
                'error' => $rs2['error'],
            );
        } else {
            $htmlContent = '';
            $list_post = $rs2['data'];
            $itemsPerPage = 6;
            $totalItems = count($list_post);
            $totalPages = ceil($totalItems / $itemsPerPage);
            $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
            $startItem = ($currentPage - 1) * $itemsPerPage;
            $endItem = $startItem + $itemsPerPage;
            for ($i = $startItem; $i < $endItem && $i < $totalItems; $i++) {
                if (empty($list_post[$i]['post_image']))
                    $src = "../../asset/img_thongbao.png";
                else $src = "https://qlsvtt-fit.dotb.cloud/upload/resize/" . $list_post[$i]['post_image'];
                $htmlContent .= '
                    <form class="container_listtle" data-key="' . $list_post[$i]['id'] . '">
                        <div class="trailing">
                            <img src="' . $src . '" alt="Trailing Image">
                        </div>
                        <div class="title">
                            <p>' . $list_post[$i]['title'] . '</p>
                            <div class="content_title">' . $list_post[$i]['short_description'] . '</div>      
                            <div class="footer_title">
                                <label>Người đăng: ' . $list_post[$i]['full_user_name'] . '</label>
                                <div class="spacer"></div>
                                <label>Thời gian: ' . date("d-m-Y", strtotime($list_post[$i]['date_posted'])) . '</label>
                            </div>    
                        </div>
                    </form>';
            }
            $htmlContent .= '<div class="pagination">';
            for ($page = 1; $page <= $totalPages && $page < 5; $page++) {
                $htmlContent .= '<a href="?page=' . $page . '">' . $page . '</a>';
            }
            $htmlContent .= '</div>';
            return array(
                'success' => 1,
                'data' => $rs2['data'],
                'htmlContent' => $htmlContent,
            );
        }
    }
}

function searchPosts($search = '') {
    $helperSV = new HelperSinhVien();
    $rs1 = $helperSV->getToken();
    if($rs1['success'] == 0) {
        return array(
            'success' => 0,
            'error' => $rs1['error'],
        );
    } else {
        $rs2 = $helperSV->getListPostsSearch($rs1['access_token'], $search);
        if($rs2['success'] == 0) {
            return array(
                'success' => 0,
                'error' => $rs2['error'],
            );
        } else {
            $htmlContent = '';
            $list_post = $rs2['data'];
            $itemsPerPage = 6;
            $totalItems = count($list_post);
            $totalPages = ceil($totalItems / $itemsPerPage);
            $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
            $startItem = ($currentPage - 1) * $itemsPerPage;
            $endItem = $startItem + $itemsPerPage;
            for ($i = $startItem; $i < $endItem && $i < $totalItems; $i++) {
                if (empty($list_post[$i]['post_image']))
                    $src = "../../asset/img_thongbao.png";
                else $src = "https://qlsvtt-fit.dotb.cloud/upload/resize/" . $list_post[$i]['post_image'];
                $htmlContent .= '
                    <form class="container_listtle" data-key="' . $list_post[$i]['id'] . '">
                        <div class="trailing">
                            <img src="' . $src . '" alt="Trailing Image">
                        </div>
                        <div class="title">
                            <p>' . $list_post[$i]['title'] . '</p>
                            <div class="content_title">' . $list_post[$i]['short_description'] . '</div>      
                            <div class="footer_title">
                                <label>Người đăng: ' . $list_post[$i]['full_user_name'] . '</label>
                                <div class="spacer"></div>
                                <label>Thời gian: ' . date("d-m-Y", strtotime($list_post[$i]['date_posted'])) . '</label>
                            </div>    
                        </div>
                    </form>';
            }
            $htmlContent .= '<div class="pagination">';
            for ($page = 1; $page <= $totalPages && $page < 5; $page++) {
                $htmlContent .= '<a href="?page=' . $page . '">' . $page . '</a>';
            }
            $htmlContent .= '</div>';

            return array(
                'success' => 1,
                'data' => $rs2['data'],
                'htmlContent' => $htmlContent,
            );
        }
    }
}

function getDetailPost($post_id = '') {
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