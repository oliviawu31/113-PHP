<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>[班級]詳細資料</title>
</head>
<body>
    <h1>班級學員</h1>

    <?php
    $dsn= "mysql:host=localhost;charset=utf8;dbname=school";
    $pdo=new PDO($dsn,'root','');
    // $sql="select * from classes,class_student,students WHERE classes.id=class_student.school_num students.school_num ";
    $sql=SELECT * 
    FROM classes,
    LEFT JOIN class_student ON classes.id = class_student.school_num
    LEFT JOIN students ON students.school_num = class_student.school_num;

    $rows=$pdo->query($sql)->fetchALL(PDO::FETCH_ASSOC);

    ?>


</body>
</html>