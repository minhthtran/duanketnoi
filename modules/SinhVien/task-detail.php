<?php include '../../header_footer/header.php'; ?>
<meta charset="UTF-8">
<link href="../../css/task-detail.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://cdn.tiny.cloud/1/YOUR_API_KEY/tinymce/5/tinymce.min.js"></script>



<div class="container-register">
    <div class="line-one">
        <div class="line-one-topic">
            <label for="topicInput">Tiêu đề:</label>
            <input type="text" id="topicInput" name="topicInput">
        </div>
        <div class="line-one-status">
            <label for="statusInput">Trạng thái:</label>
            <select id="dropdownStatus" name="dropdown">
                <option value="option1">Hoàn Thành</option>
                <option value="option2">Đang tiến hành</option>
                <option value="option3">Mở</option>
            </select>
        </div>
    </div>
    <div class="line-two">
        <div class="line-two-left">
            <div class="left-prioritize">
                <label for="dropdownLevel">Mức độ ưu tiên:</label>
                <select id="dropdownLevel" name="dropdown">
                    <option value="option1">Cao</option>
                    <option value="option2">Thấp</option>
                    <option value="option3">Trung bình</option>
                </select>
            </div>
            <div class="left-start">
                <label for="dateStart">Ngày bắt đầu:</label>
                <input type="text" id="dateStart" name="dateStart" readonly>
            </div>
            <div class="left-end">
                <label for="dateEnd">Ngày kết thúc:</label>
                <input type="text" id="dateEnd" name="dateEnd" readonly>
            </div>
        </div>
        <div class="line-two-right">
            <div class="right-course">
                <label for="nameCourse">Tên học phần:</label>
                <select id="nameCourse" name="nameCourse">
                    <option value="option1">THNN</option>
                    <option value="option2">KLTN</option>
                </select>
            </div>
            <div class="right-people">
                <label for="chargePeople">Người phụ trách:</label>
                <select id="chargePeople" name="chargePeople">
                    <option value="option1">Sinh viên 1</option>
                    <option value="option2">Sinh viên 2</option>
                    <option value="option3">Sinh viên 3</option>
                </select>
            </div>
            <div class="right-description">
                <label for="descriptionInput">Mô tả thêm:</label>
                <textarea id="descriptionInput" name="descriptionInput"></textarea>
            </div>
        </div>
    </div>
    <div class="line-three">
        <div class="line-three-title">Nội dung</div>
        <textarea id="lineThreeContent" name="content"></textarea>
    </div>
    <div class="line-four">
        <div class="line-four-left">
            <div class="left-select">
                <p>Chọn file đính kèm</p>
                <input type="file" id="fileInput" style="">
                <img id="fileUploadedIndicator" style="display: none">
            </div>
            <div class="left-created">
                <p>Ngày tạo</p>
                <div>No data</div>
            </div>
        </div>
        <div class="line-four-right">
            <div class="right-job">
                <p>Mã công việc</p>
                <div>No data</div>
            </div>
            <div class="right-modified">
                <p>Ngày sửa</p>
                <div>No data</div>
            </div>
        </div>
    </div>
    <div class="line-five-groupBtn">
        <div id="saveButton" class="btn btn-skill-save">Lưu</div>
        <div id="cancleButton" class="btn btn-skill-cancle">Hủy bỏ</div>
    </div>
</div>
<script>
    //Ngày tháng field
    document.addEventListener("DOMContentLoaded", function () {
        flatpickr("#dateStart,#dateEnd",{
            dateFormat: "Y-m-d",
            minDate: "today",
        });
    });
    //Cấu hình power tiny
    document.addEventListener("DOMContentLoaded", function () {
        tinymce.init({
            selector: "#lineThreeContent",
            plugins: "autoresize lists link",
            toolbar: "undo redo | formatselect | bold italic | bullist numlist outdent indent | link",
            autoresize_bottom_margin: 16,
        });
    });
    const fileInput = document.getElementById("fileInput");
    const fileUploadedIndicator = document.getElementById("fileUploadedIndicator");

    fileInput.addEventListener("change", function() {
        if (fileInput.files.length > 0) {
            fileUploadedIndicator.style.display = "inline";
        } else {
            fileUploadedIndicator.style.display = "none";
        }
    });

</script>
<?php include '../../header_footer/footer.php'; ?>