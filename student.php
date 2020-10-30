<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>學生資料輸入</title>
</head>
<body>
  <pre>
    建立一個輸入畫面
    建立一個學生資料陣列
    輸入學生班級座號，顯示學生詳細資料
  </pre>
  <?php
  $student=[
    '01'=>[
      '姓名'=>'AAA',
      'Chinese'=>'10',
      'Chemistry'=>'20',
      '身高'=>'180',
      '體重'=>'70',
    ],
    '02'=>[
      '姓名'=>'BBB',
      'Chinese'=>'30',
      'Chemistry'=>'40',
      '身高'=>'150',
      '體重'=>'70',
    ],
    '03'=>[
      '姓名'=>'CCC',
      'Chinese'=>'50',
      'Chemistry'=>'60',
      '身高'=>'120',
      '體重'=>'30',
    ],
    '04'=>[
      '姓名'=>'EEE',
      'Chinese'=>'70',
      'Chemistry'=>'80',
      '身高'=>'144',
      '體重'=>'70',
    ],
    '05'=>[
      '姓名'=>'FFF',
      'Chinese'=>'90',
      'Chemistry'=>'80',
      '身高'=>'180',
      '體重'=>'30',
    ],
    '06'=>[
      '姓名'=>'GGG',
      'Chinese'=>'70',
      'Chemistry'=>'60',
      '身高'=>'190',
      '體重'=>'70',
    ],
    '07'=>[
      '姓名'=>'HHH',
      'Chinese'=>'55',
      'Chemistry'=>'55',
      '身高'=>'110',
      '體重'=>'35',
    ],
    '08'=>[
      '姓名'=>'III',
      'Chinese'=>'30',
      'Chemistry'=>'33',
      '身高'=>'23',
      '體重'=>'40',
    ],
    '09'=>[
      '姓名'=>'JJJ',
      'Chinese'=>'90',
      'Chemistry'=>'99',
      '身高'=>'188',
      '體重'=>'77',
    ],
    '10'=>[
      '姓名'=>'KKK',
      'Chinese'=>'66',
      'Chemistry'=>'67',
      '身高'=>'150',
      '體重'=>'65',
    ]

  ];


  if(!empty($_POST['num']) || !empty($_GET['num'])){
    //echo "你查詢的學生為{$_POST['num']}號";
    
    if(isset($_POST['num'])){
        $num=$_POST['num'];
    }else{
        $num=$_GET['num'];    
    }

    $stu=$student[$num];

    echo "你查詢的學生為{$num}號<br>";
    echo $stu['姓名']."<br>";
    echo "Chinese grade:".$stu['Chinese']."<br>";
    echo "chemistry grade:".$stu['Chemistry'];
    echo "<div><a href='form.php?num={$num}&height={$stu['身高']}&weight={$stu['體重']}' >查詢BMI</a></div>";
    echo "<div><a href='student.php' >重新查詢</a></div>";

}else{

    
    ?>
    <form action="student.php" method="post">
    <h5>請輸入座號查詢學生資料</h5>
    <input type="text" name="num">
    <input type="submit" value="查詢">
    </form>
    <?php
  }
  ?>
    
</body>
</html>