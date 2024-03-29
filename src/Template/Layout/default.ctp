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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1><?= $this->Html->link('Gestion de Formation 9000',['controller'=> 'Home','action' => 'index']) ?></h1>
            </li>
        </ul>
        <div class="top-bar-section">
        <ul>
            <li>
            <?= $this->Html->link('Gestion des formations',['controller'=> 'Formations','action' => 'index']) ?>
            </li>
            <li>
            <?= $this->Html->link('Gestion des employés',['controller'=> 'Employees','action' => 'index']) ?>
            </li>
        </ul>

            <div class="right">
    <?php 
        if ($this->Session->read('Auth.User')){
        $user = $this->Session->read('Auth.User');
        echo $this->Html->link($user['username'],['controller'=> 'home','action' => 'index', $user['id']],['class' => 'button', 'target' => '']);
        echo $this->Html->link('Logout',['controller' => 'Users', 'action' => 'logout'],['class' => 'button', 'target' => '']);
        }
    ?>
            </div>
        </div>
    </nav>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>