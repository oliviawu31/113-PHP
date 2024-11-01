<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>首頁</h1>
    <!-- <a href="about.php">關於我們</a>
    <a href="product.php">產品介紹</a>
    <a href="contact.php">聯絡我們</a>
    <a href="login.php">登入</a> -->
    <!-- <?php include("common/navbar.php"); ?> -->
    <?php
        $page= "index";
     include("common/navbar.php"); 
     ?>

    <main>
        <h2>歡迎光臨</h2>
        <p>這是一個網站的首頁</p>
    </main>
    <!-- <footer>
        <p>版權所有</p>
    </footer> -->
    <?php include("common/footer.html"); ?>