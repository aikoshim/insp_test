<?php

/*  
 *  $conn�̓f�[�^�x�[�X�ݒ�̂��߂̕ϐ�
 *  mysqli_num_rows�͌��ʂ̍s�����擾����
 */
$conn=mysqli_connect('','','');
mysqli_select_db($conn,'sqli_test');

$userid = $_POST['userid']
$password = $_POST['password']

$sql="SELECT user_id,password FROM users WHERE user_id='$userid' AND password='$password';";
$result=mysqli_query($conn,$sql)
if(mysqli_num_rows($result)!=0){
    //1�s�ȏ゠��
    echo "���O�C������";
}else{
    echo "���O�C�����s";
  } 
mysqli_close($conn);

?>