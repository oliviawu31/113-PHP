<?php
// 取得當前的月份和年份，若沒有透過URL傳遞則使用當前月份和年份
$month = isset($_GET['month']) ? $_GET['month'] : date("m");
$year = isset($_GET['year']) ? $_GET['year'] : date("Y");

// 計算上一個月的年月
$prevMonth = $month - 1;
if ($prevMonth < 1) {
    $prevMonth = 12; // 如果是1月，則上一個月是12月
    $prevYear = $year - 1; // 需將年份減少1
} else {
    $prevYear = $year;
}

// 計算下一個月的年月
$nextMonth = $month + 1;
if ($nextMonth > 12) {
    $nextMonth = 1; // 如果是12月，則下一個月是1月
    $nextYear = $year + 1; // 需將年份增加1
} else {
    $nextYear = $year;
}

// 每年特別的日期
$spDate = [
    '2024-11-07' => "立冬",
    '2024-11-22' => '小雪'
];

// 每年固定的假期
$holidays = [
    '01-01' => "元旦"
];

// 計算當月的第一天是星期幾
$firstDay = "$year-$month-01"; // 取得當月的第一天
$firstDayTime = strtotime($firstDay); // 將第一天轉換為時間戳
$firstDayWeek = date("w", $firstDayTime); // 取得第一天是星期幾，0為星期日

// 取得當月有多少天
$daysInMonth = date("t", $firstDayTime);  // 當月的天數
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>萬年曆</title>
    <style>
        table {
            border-collapse: collapse;
            margin: auto;
        }
        td {
            padding: 5px 10px;
            text-align: center;
            border: 1px solid #999;
            width: 65px;
        }
        .holiday {
            background: pink;
            color: #999;
        }
        .grey-text {
            color: #999;
        }
        .today {
            background: blue;
            color: white;
            font-weight: bolder;
        }
        .nav {
            width: 520px;
            margin: auto;
        }
        .nav table td {
            border: 0px;
            padding: 0;
        }
        a {
            text-decoration: none;
            padding: 5px;
            color: blue;
        }
        a:hover {
            color: darkblue;
        }
    </style>
</head>
<body>
<h1>萬年曆</h1>

<div class='nav'>
    <table style="width:100%">
        <tr>
            <td style='text-align:left'>
                <!-- 上一個月與前年按鈕 -->
                <a href="calendar.php?year=<?= $prevYear; ?>&month=<?= $prevMonth; ?>">上一個月</a>
                <!-- 在此按鈕中傳遞參數讓其切換到前年 -->
                <a href="calendar.php?year=<?= $prevYear - 1; ?>&month=<?= $prevMonth; ?>">前年</a>
            </td>
            <td>
                <!-- 顯示當前的年月 -->
                <?= $year; ?>年 <?= $month; ?>月
            </td>
            <td style='text-align:right'>
                <!-- 下一個月與明年按鈕 -->
                <a href="calendar.php?year=<?= $nextYear; ?>&month=<?= $nextMonth; ?>">下一個月</a>
                <a href="calendar.php?year=<?= $nextYear + 1; ?>&month=<?= $nextMonth; ?>">明年</a>
            </td>
        </tr>
    </table>
</div>

<table>
<tr>
    <td></td>
    <td>日</td>
    <td>一</td>
    <td>二</td>
    <td>三</td>
    <td>四</td>
    <td>五</td>
    <td>六</td>
</tr>

<?php
// 顯示每一行的日期
for ($i = 0; $i < 6; $i++) { // 六行
    echo "<tr>";
    for ($j = 0; $j < 7; $j++) { // 七列（週日到週六）
        $cell = $i * 7 + $j - $firstDayWeek; // 計算單元格中應顯示的日期
        if ($cell < 1 || $cell > $daysInMonth) { // 如果日期超出當月範圍，則顯示空白
            echo "<td></td>";
        } else {
            $theDayTime = strtotime("$cell days", $firstDayTime); // 計算具體的日期時間戳
            $day = date("d", $theDayTime); // 取得日（1-31）
            $dateStr = date("Y-m-d", $theDayTime); // 格式化成 "YYYY-MM-DD" 格式

            // 判斷是否為本月日期，如果不是本月則加上灰色字樣
            $theMonthClass = (date("m", $theDayTime) == $month) ? '' : 'grey-text';
            // 判斷是否為今天的日期
            $isTodayClass = ($dateStr == date("Y-m-d")) ? 'today' : '';
            // 判斷是否為週末（週日和週六）
            $isHolidayClass = (date("w", $theDayTime) == 0 || date("w", $theDayTime) == 6) ? 'holiday' : '';

            // 顯示日期
            echo "<td class='$theMonthClass $isTodayClass $isHolidayClass'>";
            echo $day;
            // 顯示特殊日期（例如節氣）
            if (isset($spDate[$dateStr])) {
                echo "<br>{$spDate[$dateStr]}";
            }
            // 顯示假期
            if (isset($holidays[date("m-d", $theDayTime)])) {
                echo "<br>{$holidays[date("m-d", $theDayTime)]}";
            }
            echo "</td>";
        }
    }
    echo "</tr>";
}
?>
</table>

</body>
</html>
