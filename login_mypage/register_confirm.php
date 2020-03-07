<?php
mb_internal_encoding("utf8");

$temp_pic_name = $_FILES['picture']['tmp_name'];

$original_pic_name = $_FILES['picture']['name'];
$path_filename = './image/'.$original_pic_name;

move_uploaded_file($temp_pic_name,'./image/'.$original_pic_name);

?>



<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <title>マイページ登録</title>
        <link rel="stylesheet" type="text/css" href="register_confirm.css">
        
        <meta http-equiv="content-type" charset="utf-8">
        <!--文字化けの為、4eachにないが入れたけど平気？ -->
        
    </head>
    
    <body>
        
         <header>
            <img src="4eachblog_logo.jpg">
        </header>
        
        <main>
            <div class="form">
                <div class="form_contents">
                    <h2>会員登録 確認</h2>
                    
                    <p>こちらの内容で登録しても宜しいでしょうか？</p>
                    
                    <div class="name">
                        <label>氏名 :</label>
                        <?php echo $_POST['name'];?>
                        <br>
                    </div>
                    
                    <div class="mail">

                    <label>メールアドレス :</label>
                    <?php echo $_POST['mail'];?>
                    <br>
                    </div>
                    
                    <div class="password">
                        <label>パスワード :</label>
                        <?php echo $_POST['password'];?>
                        <br>
                    </div>
                    
                    <div class="picture">
                        <label>プロフィール写真 :</label>
                        <?php echo $original_pic_name;?>
                        <br>
                    </div>
                    
                    <div class="comments">
                        <label>コメント :</label>
                        <?php echo $_POST['comments'];?>
                        <br>
                    </div>
                    
                    
                    <div class="senntaku">
                        <form action="register.php">
                            <input type="submit" class="modoru_button" size="35" value="戻って修正する">
                        </form>
                        
                        <form action="register_insert.php" method="post">
                            <input type="submit" class="submit_button" size="35" value="登録する">
                            <input type="hidden" value="<?php echo $_POST['name'];?>"name="name">
                            <input type="hidden" value="<?php echo $_POST['mail'];?>"name="mail">
                            <input type="hidden" value="<?php echo $_POST['password'];?>"name="password">
                            <input type="hidden" value="<?php echo $path_filename;?>"name="picture">
                            <input type="hidden" value="<?php echo $_POST['comments'];?>"name="comments">
                        </form>
                    </div>
                </div>
            </div>
        </main>
        
        <footer>
        ©2018 InterNous.inc.All rights reserved
        </footer>
        
        display: 
        
        
    
    </body>






</html>