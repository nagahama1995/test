<?php
mb_internal_encoding("utf8");

session_start();

//if(empty($_POST['rand'])){
//    header("Location:login_error.php");
//}

?>

<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>マイページ登録</title>
        <link rel="stylesheet" type="text/css" href="mypage_hensyu.css">
    </head>
    
    <body>
        <header>
            <img src="4eachblog_logo.jpg">
            <div class="logout"><a href="log_out.php">ログアウト</a></div>
        </header>
        
        <main>
            <form action="mypage_update.php" method="post" enctype="multipart/form-date">
                <div class="form_contents">
                    <h2>会員情報</h2>
                    
                    <div class="aisatu">
                        こんにちは！ <?php echo $_SESSION['name']; ?>さん
                    </div>
                    
                    <img src="<?php echo $_SESSION['picture']; ?>">
                    
                    <div class="naka">
                        <div class="name">
                            氏名：<input type="text" class="formbox" size="40" name="name" required value="<?php echo $_SESSION['name']; ?>">
                        </div>
                        <br>
                        <div class="mail">
                            メール：<input type="text" class="formbox" size="40" name="mail" required value="<?php echo $_SESSION['mail']; ?>">
                        </div>
                        <br>
                        <div class="password">
                            パスワード：<input type="text" class="formbox" size="40" name="password" required value="<?php echo $_SESSION['password']; ?>">
                        </div>
                        <br>
                    </div>
                    
                    <div class="comments">
                        <input type="text" class="formbox" size="40" name="comments" required value="<?php echo $_SESSION['comments']; ?>">
                    </div>
                    <div class="button">
                        <input type="submit" class="hensyu_button" size="35" value="この内容に変更する">
            
                    </div>
                </div>
            </form>
        </main>
        
        
        <footer>
        ©2018 InterNous.inc.All rights reserved
        </footer>
    
    
    </body>

</html>