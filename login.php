<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loginin</title>
</head>
<body>
    <h1>登入頁面</h1>
    <form action="check_login.php" method="post">
    <input type="text" name="acc" placeholder="使用者名稱" required>
            <input type="password" name="pw" placeholder="密碼" required>
            <input type="submit" value="登入">
    </form>
    
</body>
</html>