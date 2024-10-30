<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hw</title>
    <style>
        
    body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    color: #333;
    text-align: center;
}

.calendar {
    width: 100%;
    max-width: 600px;
    margin: 20px auto;
    border-collapse: collapse;
    background-color: #ffffff;
}

.calendar th {
    background-color: #dddddd;
    padding: 10px;
}

.calendar td {
    border: 1px solid #cccccc;
    padding: 15px;
    height: 60px;
    vertical-align: top;
}

a {
    display: inline-block;
    margin: 10px;
    padding: 10px 20px;
    background-color: #cccccc;
    text-decoration: none;
    color: #333;
}

a:hover {
    background-color: #aaaaaa;
}

</style>

</head>

<?php
function createCalendar($year, $month) {
    $daysInMonth = cal_days_in_month(CAL_GREGORIAN, $month, $year);
    $firstDayOfWeek = date('w', strtotime("$year-$month-01"));

    // 顯示標題
    echo "<h2>$year 年 $month 月</h2>";
    echo "<table class='calendar'>";
    echo "<tr>
            <th>日</th>
            <th>一</th>
            <th>二</th>
            <th>三</th>
            <th>四</th>
            <th>五</th>
            <th>六</th>
          </tr><tr>";

    // 空格填充
    for ($i = 0; $i < $firstDayOfWeek; $i++) {
        echo "<td></td>";
    }

    // 顯示每一天
    for ($day = 1; $day <= $daysInMonth; $day++) {
        echo "<td>$day</td>";
        if (($day + $firstDayOfWeek) % 7 == 0) {
            echo "</tr><tr>";
        }
    }

    echo "</tr></table>";
}

// 獲取當前年份和月份
$year = isset($_GET['year']) ? intval($_GET['year']) : date('Y');
$month = isset($_GET['month']) ? intval($_GET['month']) : date('n');

createCalendar($year, $month);
?>

<a href="?year=<?php echo $year; ?>&month=<?php echo $month > 1 ? $month - 1 : 12; ?>">上一月</a>
<a href="?year=<?php echo $year; ?>&month=<?php echo $month < 12 ? $month + 1 : 1; ?>">下一月</a>


<body>
    
</body>
</html>