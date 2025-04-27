<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Profissional> $profissional
 */
?>
<div class="profissional index content">
    <style>
        
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            color: #333;
        }

      
        .table-responsive {
            margin-top: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #2ecc71;
            color: #fff;
           
        }

      
        .paginator {
            margin-top: 20px;
        }

        .pagination {
            list-style: none;
            display: flex;
            justify-content: center;
        }

        .pagination li {
            margin: 0 5px;
        }

        .pagination a {
            text-decoration: none;
            padding: 5px 10px;
            background-color: #2ecc71;
            color: #fff;
            border-radius: 4px;
        }

        .pagination .active a {
            background-color: #27ae60;
        }
        .new-profissional-link {
            background-color: #2ecc71;
        }
    </style>

<?= $this->Html->link(__('New Profissional'), ['action' => 'add'], ['class' => 'button float-right new-profissional-link']) ?>
    <h3 class="green-theme"><?= __('Profissional') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('empresa') ?></th>
                    <th><?= $this->Paginator->sort('cargo') ?></th>
                    <th><?= $this->Paginator->sort('datainicio') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($profissional as $profissional): ?>
                <tr>
                    <td><?= $this->Number->format($profissional->id) ?></td>
                    <td><?= h($profissional->empresa) ?></td>
                    <td><?= h($profissional->cargo) ?></td>
                    <td><?= h($profissional->datainicio) ?></td>
                    <td><?= $profissional->has('user') ? $this->Html->link($profissional->user->id, ['controller' => 'Users', 'action' => 'view', $profissional->user->id]) : '' ?></td>
                    <td><?= h($profissional->created) ?></td>
                    <td><?= h($profissional->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $profissional->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $profissional->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $profissional->id], ['confirm' => __('Are you sure you want to delete # {0}?', $profissional->id)]) ?>
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
