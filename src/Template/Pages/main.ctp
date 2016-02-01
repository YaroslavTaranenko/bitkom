<?php
    $this->layout = null;
?>
<!doctype html>
<head>
    <?=$this->Html->css('hat');?>
    <?=$this->Html->css('menu');?>
    <?=$this->Html->css('main');?>
    <?=$this->Html->script('https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js');?>
    <?=$this->Html->script('main');?>
    <?=$this->Html->script('menu');?>
</head>
<body>
    <header>
        <div id="top_panel">
            <div class="wrapper">
                <div class="left">
                    <div id="user"><span class="ws">.</span> Вход на сайт</div>
                </div>
                
                <div class="right">
                    <div id="top_menu">
                        <ul>
                            <li>Главная</li>
                            <li><a href="#">Доставка</a></li>
                            <li><a href="#">Способы оплаты</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <div id="header">
            <div id="logo_block">asdf</div>
            <div id="search_block">asdf</div>
            <div id="phone_block">asdf</div>
            <div id="basket_block">asdf</div>
        </div>
    </header>
    <nav>
        <?php include 'includes/head/menu.php'?>
    </nav>
    
    <div id="on_main">
        <div class="left">
            sdfas
        </div>
        <div class="right">
            asdfasd
        </div>
    </div>
</body>
