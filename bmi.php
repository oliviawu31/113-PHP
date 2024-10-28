<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>計算BMI</title>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: lightblue;
            margin: 0;
            padding: 20px;
        }
       
</style>

</head>
<body>
<?php 
    //這行檢查URL中是否存在名為 bmi 的參數。//
    //isset() 用於確認該變數是否被設置且不為 null。//
    if(isset($_GET['bmi'])){
        echo "你上一次量測的BMI為{$_GET['bmi']}";
    }

    ?>
    <h1>計算BMI-GET版本</h1>
    <!-- method="get"：使用GET方法，數據將附加到URL中（例如：result.php?height=175&weight=70）。 -->
    <form action="result.php" method="get">
        <div>
            <label for="height">身高：</label>
            <input type="number" name="height" id="height" step="0.1" >/cm
        </div>
        <div>
            <label for="weight">體重：</label>
            <input type="number" name="weight" id="weight" step="0.1">/kg
        </div>
        <div>
            <input type="submit" value="計算">
            
            <input type="reset" value="清空/重置">
        </div>
    </form>
    <h1>計算BMI-POST</h1>
    <form action="result.php" method="post">
        <div>
            <label for="height">身高：</label>
            <input type="number" name="height" id="height" step="0.1" >/cm
        </div>
        <div>
        <label for="weight">體重：</label>
            <input type="number" name="weight" id="weight" step="0.1">/kg
        </div>
        <!-- input:submit+input:rest
        <input type="submit" value="">
        <input type="reset" value=""> -->
        <div>
        <input type="submit" value="計算">
        <input type="reset" value="清空/重置">
        </div>
    </form>
</body>
</html>