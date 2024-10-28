<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI結果</title>
</head>
<body>
<?php 
if(isset($_GET['height'])){
    $height=$_GET['height'];
}else if(isset($_POST['height'])){
    $height=$_POST['height'];
}else{
    echo "請使用正確管道進到此頁面!";
    exit();
}

if(isset($_GET['weight'])){
    $weight=$_GET['weight'];
}else if(isset($_POST['weight'])){
    $weight=$_POST['weight'];
}else{
    echo "請使用正確管道進到此頁面!";
    exit();
}

?>
    <h1>BMI結果</h1>

    <!-- $_GET['height'] = index.php裡 name="height"-->
    <div>你的身高:<?=$height;?>公分</div>
    <div>你的體重:<?=$weight;?>公斤</div>
    <?php
    $h=$height/100;
    // round=>四捨五入
    $bmi=round($weight/($h * $h),2);
    //體位判斷//
    if ($bmi < 18.5){
        $category = "體重過輕";
    } else if  ($bmi < 24){
        $category = "健康體位";
    } else if ($bmi < 27) {
        $category = "過重";
    } else if ($bmi < 30) {
        $category = "輕度肥胖";
    } else if ($bmi < 35) {
        $category = "中度肥胖";
    } else {
        $category = "重度肥胖";
    }

    ?>
    <div>您的BMI為:<?=$bmi;?></div> 
    <div>體位判定為:<?=$category;?></div>
    <div>
        <a href="index.php">回首頁/重新測量</a>
    </div>

</body>
</html>