<?php
$um=$_POST["um"];//我是账号
$pd=$_POST["pd"];//我是密码
if($um=="admin"&&$pd=="12345"){
echo "验证成功";
}else{
echo "失败";
}
?>