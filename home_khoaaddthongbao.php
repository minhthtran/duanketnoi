<?php include '~/../header_footer/header.php'; ?>

<div>
   <p class='the_p'>THÔNG BÁO / Tạo thông báo</p>
   <form class="form_inserttb">
        <label>Tiêu đề</label><br>
        <input  id="myInput" type="text" ></input><br>
        <label>Nội dung</label><br>
        <textarea id="myInput_content"></textarea><br>
        <label>Hình</label><br>
        <button class="btn_selectfile">Chọn file</button><br>
        <label>Chọn file đính kèm</label><br>
        <button class="btn_selectfile">Chọn file</button><br>
        <div id="div_action">
            <button class="btn_hoantat">Hoàn tất và tải lên</button>
            <button class="btn_selectfile1">Hủy tạo</button>
        </div>
    </form>
</div><br>
<?php include '~/../header_footer/footer.php'; ?>