<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>登入</h1>
    <!-- <a href="index.php">首頁</a>
    <a href="about.php">關於我們</a>
    <a href="product.php">產品介紹</a>
    <a href="contact.php">聯絡我們</a>
    <a href="login.php">登入</a> -->
    <?php include("common/navbar.php"); ?>
    <main>
        <h2>請登入</h2>
        <form action="handle_login.php" method="POST">
            <input type="submit" value="登入">
        </form>
    </main>
    <!-- <footer>
        <p>版權所有</p>
    </footer> -->
    <?php include("common/footer.html"); ?>

</body>
</html>