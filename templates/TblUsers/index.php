<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\TblUser> $tblUsers
 */
?>
<div class="tblUsers index content">
    <?= $this->Html->link(__('Agregar usuario'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Información del personal') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('Nombre ') ?></th>
                    <th><?= $this->Paginator->sort('Correo') ?></th>
                    <th><?= $this->Paginator->sort('Num. Empleado') ?></th>
                    <th><?= $this->Paginator->sort('Telefono') ?></th>
                    <th class="actions"><?= __('Acciones') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tblUsers as $tblUser): ?>
                <tr>
                    <td><?= h($tblUser->Name_user) ?></td>
                    <td><?= h($tblUser->Email_user) ?></td>
                    <td><?= h($tblUser->Num_empleado) ?></td>
                    <td><?= h($tblUser->Num_contacto) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $tblUser->Id_user]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tblUser->Id_user]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tblUser->Id_user], ['confirm' => __('Are you sure you want to delete # {0}?', $tblUser->Id_user)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('Ir')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('a la siguiente') . ' >') ?>
            <?= $this->Paginator->last(__('a la anterior') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}')) ?></p>
    </div>
</div>
