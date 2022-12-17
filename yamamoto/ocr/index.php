<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
  <style>
  .btn{
    width:120px;
    height:80px;
    line-height:80px;
    margin:auto;
   }
   #btn{
    display:block;
    width:100%;
    height:100%;
    text-decoration: none;
    background:#F7DD33;
    text-align:center;
    border:4px solid #F7DD33;
    color:#666666;
    font-size:20px;
    font-weight:bold;
    border-radius:10px;
    -webkit-border-radius:10px;
    -moz-border-radius:10px;
    box-shadow:1px 1px 6px 0px #FFFFFF inset;
    text-shadow:0px 1px 1px #ADADAD ;
    transition: all 0.5s ease;
   }
   #btn:hover{
    background:#FFAA00;
    color:#FFFFFF;
    box-shadow:none;
   }

  </style>
</head>
<body>
  <div style="text-align:center; background-color:#eee;">
  <div><img src="in.jpg"></div>
  <form action="ocr.php" method="post"  enctype="multipart/form-data">
  <p><input type="file" name="upload_file"></p>
  <p class="btn"><input type="submit" id="btn" value="送信"></p>
  </form>
</body>
</html>
