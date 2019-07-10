<!DOCTYPE html>
<html>
    <head>
        <?= $this->Html->charset() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            M&A
        </title>

        <?= $this->Html->meta('icon', ['fullBase' => true]) ?>
        <?= $this->Html->css('base.css', ['fullBase' => true]) ?>
        <?= $this->Html->css('style.css', ['fullBase' => true]) ?>
        <?= $this->Html->css('home.css', ['fullBase' => true]) ?>
        <link href="https://fonts.googleapis.com/css?family=Raleway:500i|Roboto:300,400,700|Roboto+Mono" rel="stylesheet">
    </head>

    <body>
        <header class="row">
            <div class="header-image" align="center"><?= $this->Html->image('moz.png', ['fullBase' => true, 'width' => 60]) ?></div>           
            <div class="header-title" align="center">                
                <p align="center"><h6>República de Moçambique</h6></p>
                <p align="center"><h6>Ministério da Saúde</h6></p>
                <p align="center"><h5><b>Direcção de Saúde da Cidade de Maputo</b></h5></p>
            </div>
        </header>

        <div class="row" align="right">
            <div class="container clearfix">
                <?= $this->fetch('content') ?>
            </div>
        </div>

        <div class="actions text-right"> 
            <p align="left">Elaborado por: <b><?php
                    if ($this->request->session()->read('Auth.User.name')) {
                        echo $this->request->session()->read('Auth.User.name') . ' ' . $this->request->session()->read('Auth.User.apelido');
                    }
                    ?></b>
                <small><?php echo $this->request->session()->read('Auth.User.Role.name'); ?></small></p>
            
            <p align="left">Data Hora: <b> <?php echo(strftime("%m/%d/%Y %H:%M")); ?> </b></p>
        </div>

        <div class="row" align="center"> 
            <p align="center">Sistema de Monitoria e Avaliação de AM</p>
        </div>
    </body>
</html>