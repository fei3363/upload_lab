<?php
// $fileDir = 'path/to/your/files/'; // 檔案所在的目錄路徑

// 檢查是否提供了有效的檔案名稱
if (isset($_GET['file'])) {
    $fileName = $_GET['file'];
    $filePath = $fileName;
    
    // $filePath = $fileDir . $fileName;

    // 確認檔案存在
    if (file_exists($filePath)) {
        // 設定下載標頭
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filePath));
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($filePath));

        // 讀取並輸出檔案內容
        ob_clean();
        flush();
        readfile($filePath);
        exit;
    } else {
        echo '檔案不存在！';
    }
} else {
    echo '無效的檔案名稱！';
}
?>
