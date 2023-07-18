
<!-- index.php -->
<!DOCTYPE html>
<html>
<head>
  <title>新聞網站</title>
</head>
<body>
  <?php
    $includedFile = $_GET['include'] ?? ''; // 取得 URL 中的 include 參數值

    if (!empty($includedFile)) {
        include $includedFile; // 引入相對應的文章檔案
    // //   $filePath = "articles/$includedFile.php"; // 根據 include 參數值組合檔案路徑
    //   if (file_exists($filePath)) {
    //     include $filePath; // 引入相對應的文章檔案
    //   } else {
    //     echo "<p>找不到該文章。</p>";
    //   }
    }
  ?>
</body>
</html>
