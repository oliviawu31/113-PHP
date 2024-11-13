<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>資料庫連線</title>

</head>
<body>
    <h1>資料庫連線</h1>
    
    <?php
    $dsn= "mysql:host=localhost;charset=utf8;dbname=school";
    $pdo=new PDO($dsn,'root','');
    $sql="select * from classes";

    // FETCH =>拿 ，fetch all 拿所有的東西，這個指令只執行一次
    // PDO::FETCH_ASSOC =>將會以 關聯陣列（Associative Array）的方式
    // PDO::FETCH_NUM =>

    $rows=$pdo->query($sql)->fetchALL(PDO::FETCH_ASSOC);

    // echo $rows[0][3];=>用
    foreach($rows as $row){
        echo $row['id']."-".$row['name']."-",$row['tutor']."<br>";
    }
    // echo $rows[0][3];
    // echo "<pre>";
    // print_r($rows);
    // echo "</pre>";

    ?>
    
</body>
</html>