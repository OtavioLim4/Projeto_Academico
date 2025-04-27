<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            color: #333;
        }

        .row {
            background-color: #2ecc71; 
            color: #fff;
            padding: 20px;
            border-radius: 5px;
        }

        .side-nav {
            background-color: #2ecc71; 
            color: #fff; 
            padding: 15px;
            border-radius: 5px;
        }

        .side-nav-item {
            color: #fff; 
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
            color: #2ecc71; 
        }
    </style>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users view content">
            <h3><?= h($user->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Username') ?></th>
                    <td><?= h($user->username) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($user->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($user->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($user->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Contatos') ?></h4>
                <?php if (!empty($user->contatos)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Telefone') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->contatos as $contatos) : ?>
                        <tr>
                            <td><?= h($contatos->id) ?></td>
                            <td><?= h($contatos->telefone) ?></td>
                            <td><?= h($contatos->email) ?></td>
                            <td><?= h($contatos->user_id) ?></td>
                            <td><?= h($contatos->created) ?></td>
                            <td><?= h($contatos->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Contatos', 'action' => 'view', $contatos->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Contatos', 'action' => 'edit', $contatos->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Contatos', 'action' => 'delete', $contatos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contatos->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Educacional') ?></h4>
                <?php if (!empty($user->educacional)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Curso') ?></th>
                            <th><?= __('Instituicao') ?></th>
                            <th><?= __('Datainicio') ?></th>
                            <th><?= __('Dataconclusao') ?></th>
                            <th><?= __('Certificados') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->educacional as $educacional) : ?>
                        <tr>
                            <td><?= h($educacional->id) ?></td>
                            <td><?= h($educacional->curso) ?></td>
                            <td><?= h($educacional->instituicao) ?></td>
                            <td><?= h($educacional->datainicio) ?></td>
                            <td><?= h($educacional->dataconclusao) ?></td>
                            <td><?= h($educacional->certificados) ?></td>
                            <td><?= h($educacional->user_id) ?></td>
                            <td><?= h($educacional->created) ?></td>
                            <td><?= h($educacional->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Educacional', 'action' => 'view', $educacional->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Educacional', 'action' => 'edit', $educacional->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Educacional', 'action' => 'delete', $educacional->id], ['confirm' => __('Are you sure you want to delete # {0}?', $educacional->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Profissional') ?></h4>
                <?php if (!empty($user->profissional)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Empresa') ?></th>
                            <th><?= __('Cargo') ?></th>
                            <th><?= __('Datainicio') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->profissional as $profissional) : ?>
                        <tr>
                            <td><?= h($profissional->id) ?></td>
                            <td><?= h($profissional->empresa) ?></td>
                            <td><?= h($profissional->cargo) ?></td>
                            <td><?= h($profissional->datainicio) ?></td>
                            <td><?= h($profissional->user_id) ?></td>
                            <td><?= h($profissional->created) ?></td>
                            <td><?= h($profissional->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Profissional', 'action' => 'view', $profissional->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Profissional', 'action' => 'edit', $profissional->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Profissional', 'action' => 'delete', $profissional->id], ['confirm' => __('Are you sure you want to delete # {0}?', $profissional->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
