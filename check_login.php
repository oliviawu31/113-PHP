<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>check login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center; /* 將內容置中 */
        }
        h1 {
            margin-bottom: 20px;
        }
        a {
            color: #5cb85c;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<?php 
// session_start();
if(!isset($_POST['acc'])){
    header("location:login.php");
    exit();
}

$acc=$_POST['acc'];
$pw=$_POST['pw'];

if($acc=='admin' && $pw=='1234'){
    echo "帳密正確:登入成功";
    setcookie("login","$acc",time()+180);
    echo $_COOKIE['login'];

    // $_SESSION['login']=$acc;
    echo "<br><a href='login.php'>回首頁</a>";
}else{
    echo "帳密錯誤:登入失敗";

}
?>




</body>
</html>