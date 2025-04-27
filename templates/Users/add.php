<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
    <style>
            body {
                font-family: 'Arial', sans-serif;
                background-color: #f4f4f4;
                color: #333;
            }

            .users {
                background-color: #2ecc71; 
                color: #fff; 
                padding: 20px;
                border-radius: 5px;
            }

            .users legend {
                color: #green;
            }

            .users label {
                color: #fff; 
            }

            .users input[type="text"],
            .users input[type="password"] {
                background-color: #fff; 
                color: #333; 
            }

            .users button {
                background-color: #fff;
                color: #2ecc71;
            }
        </style>

        <div class="users form content">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <legend><?= __('Adicionar um novo usuario') ?></legend>
                <?php
                    echo $this->Form->control('username');
                    echo $this->Form->control('password');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
