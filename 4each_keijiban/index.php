<!DOCTYPE html>
<html lang ="ja">

<head>
<meta charaset="UTF-8">
<title>4eachblog 掲示板</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    
    <?php
    
    mb_internal_encoding("utf8");
    $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","mysql");
    $stmt = $pdo->query("select * from 4each_keijiban914");
    
//    while ($row = $stmt->fetch()){
//        echo $row['handlname'];
//        echo $row['title'];
//        echo $row['comments'];
//    }
    
    ?>
    
    
    
    
    <header>
<!--  ロゴ-->
        <div class="logo"><img src="4eachblog_logo.jpg"></div>
<!--メニュー-->
        <div class="menu">

            <ul>
                <li>トップ</li>
                <li>プロフィール</li>
                <li>４eachについて</li>
                <li>登録ファーム</li>
                <li>問い合わせ</li>
                <li>その他</li>
            </ul>
        </div>
    </header>
    
    <main>
        
<!--       題名 -->
        <div class="mainArea">

            <div class="top">
            <h1>プログラミングに役立つ掲示板</h1>
            </div>
            
        
<!--        入力フォーム-->
        <form method="post" action="insert.php">
        <h2>入力フォーム</h2>
            
        <div>
            <label>ハンドルネーム</label>
            <br>
            <input type="text" class="text" size="35" name="handlname">
        </div>
            
        <div>
            <label>タイトル</label>
            <br>
            <input type="text" class="text" size="35" name="title">
        </div>
            
        <div>
            <label>コメント</label>
            <br>
            <textarea cols="50" lows="30" name="comments"></textarea>
        </div>
        
        <div>
<!--
            <form action ="insert.php" method="post">
            <input type ="text"  value="<?php echo $_POST['handlname']; ?>" name="handlname">
            <input type ="text" value="<?php echo $_POST['title']; ?>" name="title">
            <input type ="text" value="<?php echo $_POST['comments']; ?>" name="comments">            
-->
            <input type="submit" class="submit" value="投稿する">
<!--                </form>-->
        </div>
        
        </form>
        
<!--        投稿記事-->
            
    <?php        
         while($row = $stmt->fetch()){   
            echo"<div class='kiji''>";
            echo"<h3>".$row['title']."</h3>";
            echo"<div calss='coments'>";
            echo $row['comments'];
            echo"<div class='handlmane'>posted by".$row['handlname']."</div>";
            echo"</div>";
            echo"</div>";
         }
    ?>
        
        
            </div>
            
<!--        サイドメニュー-->
            <div class="side">


            <h3>人気の記事</h3>
            <ul>
                <li>PHPオススメ本</li>
                <li>PHP MyAdminの使い方</li>
                <li>今人気のエディタTop5</li>
                <li>HTMLの基礎</li>
            </ul>

            <h3>オススメリンク</h3>
            <ul>
                <li>インターノウス株式会社</li>
                <li>XAMPPのダウンロード</li>
                <li>Eclipseのダウンロード</li>
                <li>Bracketsのダウンロード</li>
            </ul>

            <h3>カテゴリ</h3>
            <ul>
                <li>HTML</li>
                <li>PHP</li>
                <li>MySQL</li>
                <li>JavaScript</li>
            </ul>
        </div>

    </main>
    
    

    
    <footer>
        <p>
            copyright ©　interenous ｜4each blog is the one which provides A to Z about programming.
        </p>
    </footer>

    
  
    
</body>

</html>