<?php include '~/../header_footer/header.php'; ?>
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
                <?php for ($i = 1; $i <= 5; $i++) { ?>
                    <a href="file-<?php echo $i; ?>.html">
                        (<?php echo $i; ?>) file-<?php echo $i; ?>;
                    </a>
                    <br>
                <?php } ?>
            </div>
        <!-- <div class= "content-detail">
            <h3> Tiêu đề con của thông báo<h3>
            <div>
            (1) Có bằng Tiến sĩ có chuyên ngành đào tạo phù hợp với vị trí việc làm cần tuyển; 
            (2) Có bằng Thạc sĩ được đào tạo bằng tiếng Anh, có chuyên ngành đào tạo phù hợp với vị trí việc làm cần tuyển; 
            (3) Có bằng Thạc sĩ có ngành/chuyên ngành đào tạo phù hợp tốt nghiệp tại các trường thành viên thuộc Đại học Quốc gia Hà Nội, Đại học Quốc gia TP. Hồ Chí Minh;
             trường đại học Kinh tế TP. HCM, Học viện Công nghệ Bưu chính Viễn thông. Ở bậc đại học phải tốt nghiệp đạt từ loại Khá trở lên.
            </div>

        </div> -->
    </div>

    <br>
<?php include '~/../header_footer/footer.php'; ?>