<?php
header("X-FRAME-OPTIONS: DENY"); //クリックジャキング:DENYはフレーム内のページ表示を全ドメインで禁止する

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>QRcode</title>
</head>
<body>
    <h1>QR作成</h1>
    <form action="qr.php" method="POST">
       <p>メッセージを入力してください</p>
        <textarea type="text" name="comment" required></textarea>
        <input type="submit" value="送信">
    </form>
</body>
</html>