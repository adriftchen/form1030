<?php
$users=[
  ['acc'=>'AAA','pw'=>'1111','type'=>'vip'],
  ['acc'=>'BBB','pw'=>'2222','type'=>'mem'],
  ['acc'=>'CCC','pw'=>'3333','type'=>'vip']

];

if(!empty($_POST['acc']) && !empty($_POST['pw'])){
  $acc=$_POST['acc'];
  $pw=$_POST['pw'];
  $chk='';
  foreach($users as $user){
      if($user['acc']==$acc){
          $chk=$user;  
      }
  }

  if(!empty($chk)){
      if($chk['pw']==$pw){
        switch($chk['type']){
          case 'vip':
            header("location:vip.php?name={$chk['acc']}");
          break;
          case 'mem':
            header("location:mem.php?name={$chk['acc']}");
          break;

        }
          
      }else{
          header("location:error.php?e=2"); /* 密碼錯誤 */
      }
  }else{
      header("location:error.php?e=1"); /* 帳號錯誤 */
  }

}else{
  header("location:login.html");
}

?>