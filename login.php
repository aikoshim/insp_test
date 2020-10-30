<?php

/*  
 *  $connはデータベース設定のための変数
 *  mysqli_num_rowsは結果の行数を取得する
 */
$conn=mysqli_connect('','','');
mysqli_select_db($conn,'sqli_test');

$userid = $_POST['userid']
$password = $_POST['password']

$sql="SELECT user_id,password FROM users WHERE user_id='$userid' AND password='$password';";
$result=mysqli_query($conn,$sql)
if(mysqli_num_rows($result)!=0){
    //1行以上ある
    echo "ログイン成功";
}else{
    echo "ログイン失敗";
  } 
mysqli_close($conn);

?>