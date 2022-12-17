<?php
/*
* まずdocker psでコンテナiDを把握
 * docker exec -it XXXXXXXX /bin/bashでログイン
 * apt update
 * apt install tesseract-ocr
 * install libtesseract-dev
 * でorcをインストール(画像にある文字や数字を読み込むライブラリのこと)
 * 日本語化対応するために
 * git clone https://github.com/tesseract-ocr/tessdata_best.git
 * で、cloneしたファイルの中の
 * jpn.traineddata       jpn_vert.traineddata  
 * これを移動させます。
 * mv jpn.traineddata /usr/share/tesseract-ocr/4.00/tessdata
 * mv jpn_vert.traineddata /usr/share/tesseract-ocr/4.00/tessdata
 * で、この二つのソフトがどこからでも呼び出せるようにuser/shareのocrコマンド系フォルダに移動する
 * tesseract --list-langs うまく言ったかはこのコマンドで確認
 */

$filename = $_FILES['upload_file']['name'];
$uploaded_path = 'image_orc/'.$filename;
$result = move_uploaded_file($_FILES['upload_file']['tmp_name'],$uploaded_path);

$path = '/var/www/html/ocr/image_orc/'.$filename;
//echo $path;
$command = '/usr/bin/tesseract "'. $path .'" stdout -l eng jpn osd jpn_vert';
exec($command, $ocr_texts);


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body style="text-align:center; padding-top:30px;">
<img src="<?= $uploaded_path ?>">
<br>
<div style="font-size:30px; color:red;">解析結果「<?= $ocr_texts[0] ?>」</div>
<hr>
フリーライブラリによる取得データは<br>
_____________________________<br>
<?php var_dump($ocr_texts); ?>
<br>
-----------------------------
</body>
</html>

