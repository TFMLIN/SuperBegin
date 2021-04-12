<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>新标签页</title>
</head>
<body>
    <div style="background-color: rgba(255,255,255,0.5); margin:0%;height:100%;">
    <!-- 搜索框 -->
    <form action="https://www.google.com/search" method="get" role="search">
        <div style="text-align: center;">
            <input class="sbox" name="q" type="text" autocomplete="off" autofocus="autofocus">
        </div>
    </form>
    
    <!-- 快速访问 -->
    <!-- <h1 style="text-align: center;">快速访问</h1> -->
    <div class="urllist">
        <ul>
            <?php
                $file = fopen("url.txt", "r");
                while(!feof($file)){
                    echo '<li><div class="box"><a href="' . str_replace("\n","",fgets($file)) . '">' . str_replace("\n","",fgets($file)) . '</a></div></li>';
                    echo PHP_EOL;
                }
                fclose($file);
            ?>
        </ul>
    </div>

    <!-- url添加 -->
    <form action="functions.php" method="post">
        <div class="addurl">
            <input class="in" type="text" name="url" autocomplete="off">
            <input class="in" type="text" name="site" autocomplete="off">
            <input type="submit">
        </div>
    </form>
    </div>
</body>
</html>