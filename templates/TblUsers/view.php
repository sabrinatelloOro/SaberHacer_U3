<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TblUser $tblUser
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Tbl User'), ['action' => 'edit', $tblUser->Id_user], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Tbl User'), ['action' => 'delete', $tblUser->Id_user], ['confirm' => __('Are you sure you want to delete # {0}?', $tblUser->Id_user), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Tbl Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Tbl User'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tblUsers view content">
            <h3><?= h($tblUser->Id_user) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name User') ?></th>
                    <td><?= h($tblUser->Name_user) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email User') ?></th>
                    <td><?= h($tblUser->Email_user) ?></td>
                </tr>
                <tr>
                    <th><?= __('Num Empleado') ?></th>
                    <td><?= h($tblUser->Num_empleado) ?></td>
                </tr>
                <tr>
                    <th><?= __('Num Contacto') ?></th>
                    <td><?= h($tblUser->Num_contacto) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id User') ?></th>
                    <td><?= $this->Number->format($tblUser->Id_user) ?></td>
                </tr>
                <tr>
                    <th><?= __('Edad User') ?></th>
                    <td><?= $this->Number->format($tblUser->Edad_user) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
