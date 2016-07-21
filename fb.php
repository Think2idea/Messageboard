<?php
 $fh=fopen('./msg.txt','a');//打开文档
 $str=$_POST['username'].":".$_POST['comments']."<br> \r\n";
// $str=preg_replace('/script/','*',$str); //替换关键词
 fwrite($fh,$str);               //写留言
 fclose($fh);

 //echo '请刷新查看留言';
header("location:http://localhost/messb/messagepro.html");

?>
