<!--セッションがセットされてないときlogin.phpにて、メアド、パスワードのところにソースコードが標示される。
log_out.phpにて、セッションが削除出来ていない。php中級の質問があります。-->


<?php
session_start();
if(isset($_SESSION['id'])){
    header("Location:mypage.php");
}
?>

<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>マイページ登録</title>
        <link rel="stylesheet" type="text/css" href="login.css">
    </head>
    
    <body>
        <header>
            <img src="4eachblog_logo.jpg">
            <div class="login"><a href="login.php">ログイン</a></div>
        </header>
        
        <main>
            <div class="form">
                <form action="mypage.php" method="post">
                    <div class="form_contents">
                            <div class="mail">
                                <label>メールアドレス</label><br>
                                <div class="tyuuou">
                                    <input type="text" class="formbox" size="40" value="<?php echo $_COOKIE['mail']; ?>" name="mail">
                                </div>
                            </div>
                            <div class="password">
                                <label>パスワード</label><br>
                                <div class="tyuuou">
                                    <input type="password" class="formbox" size="40" value="<?php echo $_COOKIE['password']; ?>" name="password">
                                </div>
                            </div>
                        <div class="in">
                            <div class="loginbutton">
                                <input type="submit" class="submit_button" size="35" value="ログイン">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        
        </main>
        
        <footer>
        ©2018 InterNous.inc.All rights reserved
        </footer>
    
    </body>
</html>