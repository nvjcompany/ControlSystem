<html>
    <head>
        <meta charset="utf-8">
        <title>Private Control System</title>
        <link rel="stylesheet" href="views/styles.css" type="text/css"/>
        <script>
        var siteUrl = document.location.href;
        if(siteUrl !== '<?=Config::getInstance()->GetSiteURL()?>')
        {
            window.location.href='<?=Config::getInstance()->GetSiteURL()?>';
        }
        </script>
    </head>
    <body id="loginPage">
        <div id="login">
            <form method="POST">
                <header>Вход</header>
                <div id="loginBox">
                    <div style="padding-left:25px;">
                        
                        <p>
                            <label for="username">
                                Потребителско име<span class="red">*</span>
                            </label>
                        </p>
                            <input type="text" name="username" id="username" placeholder="Въведи име" required="required"/>
                        <span class="info">Поне 6 знака.</span>
                        <p>
                            <label for="password">Парола<span class="red">*</span></label>
                        </p>
                            <input type="password" name="password" id="password" placeholder="Въведи парола" required="required"/>
                        <span class="info">Малки,големи букви и числа.</span>
                        <div><?=(isset($errorMessage) ? '<span class="red" style="font-size:12px;">Грешни потребителки детайли!</span>': '')?></div>
                        <div id="loginButton">
                            <button type="submit">Вход</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>