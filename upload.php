<?php
// 確認是否有上傳檔案
if(isset($_POST["submit"])) {
    // 從 $_FILES 取得檔案
    $file = $_FILES["file"];

    // 取得檔案資訊
    $fileName = $file["name"]; // 檔案名稱
    $fileType = $file["type"]; // 檔案類型
    $fileTmpName = $file["tmp_name"]; // 暫存檔案名稱
    $fileError = $file["error"]; // 錯誤碼，上傳成功為 0
    $fileSize = $file["size"]; // 檔案大小

    // 檢查是否有錯誤
    if($fileError === 0) {
        // 設定目標位置
        $targetPath = "uploads/" . $fileName;
        // 將暫存檔案移動到目標位置
        move_uploaded_file($fileTmpName, $targetPath);
        echo "檔案上傳成功！";
    } else {
        echo "上傳檔案時發生錯誤：".$fileError;
    }
}
?>
