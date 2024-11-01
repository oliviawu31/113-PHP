<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- <a href="index.php">首頁</a>
    <a href="about.php">關於我們</a>
    <a href="product.php">產品介紹</a>
    <a href="contact.php">聯絡我們</a>
    <a href="login.php">登入</a> -->
    <!-- < ?php include("common/navbar.php"); ?> -->
    <?php 
   $page= "login";
    include("common/navbar.php"); ?>
    <main>
        <h2>請登入</h2>
        <form action="handle_login.php" method="POST">
            <div>
                <label for="username">帳號：</label>
                <input type="text" id="username" name="username">
            </div>
            <div>
                <label for="password">密碼：</label>
                <input type="password" id="password" name="password">
            </div>
            <input type="submit" value="登入">
        </form>
    </main>
    <?php include("common/footer.html"); ?>

</body>
</html>