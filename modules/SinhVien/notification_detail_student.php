<?php include '../../header_footer/header.php'; ?>
    <div class="container_detail_noti">
        <div class="the_ps">THÔNG BÁO KHOA CÔNG NGHỆ THÔNG TIN </div>
        <div class="the_ps">></div>
        <div class="the_ps">THÔNG BÁO CHI TIẾT</div>
    </div>
    <div class="fr-detail">
        <!-- title của chi tiết thông báo -->
        <h2>KẾ HOẠCH THỰC HÀNH NGHỀ NGHIỆP HỌC KÌ 2 NĂM 2023</h2>
        <div class="description-noti">
        Khoa Công nghệ thông tin trường Đại học Tài chính Marketing hiện có nhu cầu tuyển dụng 3 giảng viên.
        </div>
            <div class="content-detail">
                <?php for ($i = 1; $i <= 5; $i++) { ?>
                    <h3> Tiêu đề con của thông báo </h3>
                    <div class="description-detail">
                        (<?php echo $i  ; ?>) Có bằng Tiến sĩ có chuyên ngành đào tạo phù hợp với vị trí việc làm cần tuyển;
                    </div>
                <?php } ?>
            </div>
            <div class="content-detail">
                <p>Xem thêm: </p>
<<<<<<< HEAD
                <?php for ($i = 1; $i <= 5; $i++) { ?>
                    <a href="file-<?php echo $i; ?>.html">
                        (<?php echo $i; ?>) file-<?php echo $i; ?>;
=======
                <?php for ($i = 0; $i < count($postDetail['list_attachment']); $i++) { ?>
                    <a href="https://qlsvtt/dotbedu_prod_qlsvtt_fit/index.php?entryPoint=downFromPortal&downloadFromApi=true&type=Notes&id=<?php echo $postDetail['list_attachment'][$i]['id']; ?>">
                        (<?php echo ($i+1); ?>) <?php echo $postDetail['list_attachment'][$i]['filename']; echo ' '; echo $postDetail['list_attachment'][$i]['description']; ?>;
>>>>>>> remotes/origin/nhathoai
                    </a>
                    <br>
                <?php } ?>
            </div>
    </div>

    <br>
<?php include '~/../header_footer/footer.php'; ?>