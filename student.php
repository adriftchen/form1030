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
    ],
    '02'=>[
      '姓名'=>'BBB',
      'Chinese'=>'30',
      'Chemistry'=>'40',
    ],
    '03'=>[
      '姓名'=>'CCC',
      'Chinese'=>'50',
      'Chemistry'=>'60',
    ],
    '04'=>[
      '姓名'=>'EEE',
      'Chinese'=>'70',
      'Chemistry'=>'80',
    ],
    '05'=>[
      '姓名'=>'FFF',
      'Chinese'=>'90',
      'Chemistry'=>'80',
    ],
    '06'=>[
      '姓名'=>'GGG',
      'Chinese'=>'70',
      'Chemistry'=>'60',
    ],
    '07'=>[
      '姓名'=>'HHH',
      'Chinese'=>'55',
      'Chemistry'=>'55',
    ],
    '08'=>[
      '姓名'=>'III',
      'Chinese'=>'30',
      'Chemistry'=>'33',
    ],
    '09'=>[
      '姓名'=>'JJJ',
      'Chinese'=>'90',
      'Chemistry'=>'99',
    ],
    '10'=>[
      '姓名'=>'KKK',
      'Chinese'=>'66',
      'Chemistry'=>'67',
    ]

  ];

  if(! empty($_POST['num'])){
    // echo "現正查詢"{$_POST['num']}"號"
    echo "現正查詢".$_POST['num']."號<br>";
    echo $student[$_POST['num']]['姓名']."<br>";
    echo "Chinese grade:".$student[$_POST['num']]['Chinese']."<br>";
    echo "Chemistry grade:".$student[$_POST['num']]['Chemistry'];
  

  }else{

  }

  ?>
  <form action="student.php" method="post">
  <h5>請輸入座號查詢學生資料</h5>
  <input type="text" name="num">
  <input type="submit" value="查詢">
  </form>
</body>
</html>