<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('iconz') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

    <?= $this->Html->css(['normalize.min', 'milligram.min', 'cake']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

    <style>
    .top-nav {
        background-color:  #28a745;
        font-family: Arial, sans-serif;
        margin-top: 3px;
        border-radius: 3px;
    }

    .top-nav a {
        color: white;
        text-decoration: none;
        transition: color 0.3s;
    }

    .top-nav a:hover {
        color: green;
        background-color: white;
        border-radius: 5px;
        padding: 2px;
    }
</style>
</head>
<body>
    <!--  -->
    <nav class="top-nav">
        <div class="top-nav-title">
            <a href="<?= $this->Url->build('/') ?>" style="color: light;"><span>Sistema</span>Acadêmico</a>
        </div>
        <div class="top-nav-links">
            <a href="Profissional">Profissionais</a>
            <a href="Users">Usuarios</a>
            <a href="Principal">Inico</a>
        </div>
    </nav>

    <main class="main">
        <div class="container">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </main>
    <!DOCTYPE html>
<html lang="pt-br">
<head>
