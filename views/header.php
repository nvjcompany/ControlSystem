<html>
    <head>
        <meta charset="utf-8">
        <title>Private Control System</title>
        <link rel="stylesheet" href="views/MainStyles.css" type="text/css"/>
    </head>
    <body>
        <div id="content">
            <div id="menu">
                <ul>
                    <li><a href="<?=Config::getInstance()->GetSiteURL();?>">Начало</a></li>
                    <li><a href="#">Екипи</a></li>
                    <li><a href="#">Задачи</a></li>
                    <li><a href="<?=Config::getInstance()->GetSiteURL();?>Users">Потребители</a></li>
                </ul>
            </div>
            <div id="left-bar">
                <p>Добре дошъл ,<?=$_SESSION['firstName']?></p>
                <hr>
                <button onclick="window.location.href='<?=Config::getInstance()->GetSiteURL();?>Register'">Създай нов потребител</button>
                <button>Създай нова задача</button>
                <button>Създай нов екип</button>
                <hr>
                <p><button onclick="window.location.href='<?=Config::getInstance()->GetSiteURL();?>logout'"> Изход </button></p>
            </div>


