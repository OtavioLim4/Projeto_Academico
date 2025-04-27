<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Educacional $educacional
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Educacional'), ['action' => 'edit', $educacional->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Educacional'), ['action' => 'delete', $educacional->id], ['confirm' => __('Are you sure you want to delete # {0}?', $educacional->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Educacional'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Educacional'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="educacional view content">
            <h3><?= h($educacional->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Curso') ?></th>
                    <td><?= h($educacional->curso) ?></td>
                </tr>
                <tr>
                    <th><?= __('Instituicao') ?></th>
                    <td><?= h($educacional->instituicao) ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $educacional->has('user') ? $this->Html->link($educacional->user->id, ['controller' => 'Users', 'action' => 'view', $educacional->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($educacional->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Datainicio') ?></th>
                    <td><?= h($educacional->datainicio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dataconclusao') ?></th>
                    <td><?= h($educacional->dataconclusao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($educacional->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($educacional->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Certificados') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($educacional->certificados)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
