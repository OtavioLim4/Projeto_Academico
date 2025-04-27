<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Profissional $profissional
 * @var string[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $profissional->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $profissional->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Profissional'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="profissional form content">
            <?= $this->Form->create($profissional) ?>
            <style>
                body {
                    font-family: 'Arial', sans-serif;
                    background-color: #f4f4f4;
                    color: #333;
                }

                .profissional {
                    background-color: #2ecc71; 
                    color: #fff; 
                    padding: 20px;
                    border-radius: 5px;
                }

                .profissional legend {
                    color: #fff; 
                }

                .profissional label {
                    color: #fff;
                }

                .profissional input[type="text"],
                .profissional input[type="date"],
                .profissional select {
                    background-color: #fff; 
                    color: #333; 
                }

                .profissional button {
                    background-color: #fff;
                    color: #2ecc71;
                }
            </style>
            <fieldset>
                <legend><?= __('Edit Profissional') ?></legend>
                <?php
                    echo $this->Form->control('empresa');
                    echo $this->Form->control('cargo');
                    echo $this->Form->control('datainicio', ['empty' => true]);
                    echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
