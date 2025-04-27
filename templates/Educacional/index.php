<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Educacional> $educacional
 */
?>
<div class="educacional index content">
    <?= $this->Html->link(__('New Educacional'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Educacional') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('curso') ?></th>
                    <th><?= $this->Paginator->sort('instituicao') ?></th>
                    <th><?= $this->Paginator->sort('datainicio') ?></th>
                    <th><?= $this->Paginator->sort('dataconclusao') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($educacional as $educacional): ?>
                <tr>
                    <td><?= $this->Number->format($educacional->id) ?></td>
                    <td><?= h($educacional->curso) ?></td>
                    <td><?= h($educacional->instituicao) ?></td>
                    <td><?= h($educacional->datainicio) ?></td>
                    <td><?= h($educacional->dataconclusao) ?></td>
                    <td><?= $educacional->has('user') ? $this->Html->link($educacional->user->id, ['controller' => 'Users', 'action' => 'view', $educacional->user->id]) : '' ?></td>
                    <td><?= h($educacional->created) ?></td>
                    <td><?= h($educacional->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $educacional->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $educacional->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $educacional->id], ['confirm' => __('Are you sure you want to delete # {0}?', $educacional->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
