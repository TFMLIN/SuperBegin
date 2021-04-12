<?php
    $url = $_POST["url"];
    $name = $_POST["site"];
    if(!$url || !$name){
        echo '请输入网址和网站名';
    }
    else{
        $file = fopen("url.txt", "a");
        fwrite($file, PHP_EOL.$url);
        fwrite($file, PHP_EOL.$name);
        fclose($file);
        echo $url.'  '.$name.'写入成功';
    }
?>