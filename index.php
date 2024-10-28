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
    <h1>計算BMI</h1>
    <form action="result.php" method="get">
        <div>
        <label for="height">身高 (公分):</label>
        <input type="number" name="height" id="height" step="0.1">
        </div>
        <div>
        <label for="weight">體重 (公斤):</label>
        <input type="number" name="weight" id="height" step="0.1">
        </div>
        <!-- input:submit+input:rest
        <input type="submit" value="">
        <input type="reset" value=""> -->
        <div>
        <input type="submit" value="計算">
        <input type="reset" value="清空/重置">
        </div>

</body>
</html>