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
          header("location:mem.php");
      }else{
          header("location:error.php");
      }
  }else{
      header("location:error.php");
  }

}else{
  header("location:login.html");
}

?>