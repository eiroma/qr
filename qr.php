<?php
//error_reporting(-1);
//ini_set("display_errors", "On");

//送信されたものを受信する
//文字列をQRコードにする

/***セキュリティ***
*クリックジャキング(iframeのページを作ってCSSで透明にして上に重ねて表示させてボタンを押すと悪意あるサイトに飛ぶようにする)---index.php
*xss対策:htmlspecialchars（サイトをまたいでスクリプトを実行させる:ユーザが悪意のあるサイトのリンクをクリックすると脆弱サイトとユーザのやりとりの間に攻撃者が用意した悪意のあるスクリプトが入ってしまう）
*/

$comment = "";

$s = "";

function h($s) {
    return htmlspecialchars($s, ENT_QUOTES, "UTF-8");
}

if(isset($_POST["comment"])){
    $comment = h($_POST["comment"]); //xss対策（ユーザから送られてきたデータをそのままユーザに返さないようにする）
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>QRcode</title>
</head>
<body>
    <h1>QR作成</h1>
    <div class="png">
        <p>PNG</p>
        <img src="https://api.qrserver.com/v1/create-qr-code/?data=<?=$comment?>&size=100x100&color=255-0-0&format=png" alt="QRコードpng" />
    </div>
    <div class="gif">
        <p>GIF</p>
        <img src="https://api.qrserver.com/v1/create-qr-code/?data=<?=$comment?>&size=100x100&color=0-255-0&format=gif" alt="QRコードgif" />
    </div>
    <div class=jepg>
        <p>JPEG</p>
        <img src="https://api.qrserver.com/v1/create-qr-code/?data=<?=$comment?>&size=100x100&color=0-0-255&format=jpeg" alt="QRコードjpeg" />
    </div>
    <div class="jpg">
        <p>JPG</p>
        <img src="https://api.qrserver.com/v1/create-qr-code/?data=<?=$comment?>&size=100x100&color=556B2F&format=jpg" alt="QRコードjpg" />
    </div>
</body>
</html>
