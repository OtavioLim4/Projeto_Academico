<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\User> $users
 */
?>
<div class="users index content">
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

        .users h3 {
            color: #fff; 
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

        .actions a {
            color: #fff; 
        }

        .actions a:hover {
            text-decoration: none;
            color: #fff; 
            font-weight: bold;
        }

        .actions a.edit {
            background-color: #2ecc71;
            color: #fff;
            padding: 5px 10px;
            border-radius: 4px;
            margin-right: 5px;
        }

        .actions a.view {
            background-color: #2ecc71;
            color: #fff;
            padding: 5px 10px;
            border-radius: 4px;
        }

        .actions a.delete {
            color: #e74c3c;
            padding: 5px 10px;
            border-radius: 4px;
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
       
        }

        .pagination .active a {
            background-color: #27ae60;
        }
    </style>

    <?= $this->Html->link(__('Adicionar novo usuario'), ['action' => 'add'], ['class' => 'button float-right','style' => 'background: green;']) ?>
    <h3><?= __('Users') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('username') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $this->Number->format($user->id) ?></td>
                    <td><?= h($user->username) ?></td>
                    <td><?= h($user->created) ?></td>
                    <td><?= h($user->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
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

