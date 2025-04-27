<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Profissional $profissional
 * @var \Cake\Collection\CollectionInterface|string[] $users
 */
?>
<div class="row">
    <style>
       
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            color: #333;
        }

        
        .side-nav {
            background-color: #333; 
            padding: 10px;
            border-radius: 5px;
        }

        .side-nav h4 {
            color: #fff;
        }

        .side-nav-item {
            color: #fff;
        }

        
        .column-responsive {
            padding: 20px;
        }

        .profissional.form.content {
            background-color: #fff; 
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

     
        .green-theme {
            color: #2ecc71; 
        }

       
        input[type="text"],
        input[type="password"],
        select {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

       
        button {
            background-color: #2ecc71; 
            color: #fff; 
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #27ae60; 
        }

      
        fieldset legend {
            font-size: 1.2em;
            margin-bottom: 10px;
        }
    </style>
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading green-theme"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Profissional'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="profissional form content green-theme">
            <?= $this->Form->create($profissional) ?>
            <fieldset>
                <legend class="green-theme"><?= __('Add Profissional') ?></legend>
                <?php
                    echo $this->Form->control('empresa');
                    echo $this->Form->control('cargo');
                    echo $this->Form->control('datainicio', ['empty' => true]);
                    echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Adicionar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

