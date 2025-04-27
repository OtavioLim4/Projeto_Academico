<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Educacional $educacional
 * @var \Cake\Collection\CollectionInterface|string[] $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Educacional'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="educacional form content">
            <?= $this->Form->create($educacional) ?>
            <fieldset>
                <legend><?= __('Add Educacional') ?></legend>
                <?php
                    echo $this->Form->control('curso');
                    echo $this->Form->control('instituicao');
                    echo $this->Form->control('datainicio', ['empty' => true]);
                    echo $this->Form->control('dataconclusao', ['empty' => true]);
                    echo $this->Form->control('certificados');
                    echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
