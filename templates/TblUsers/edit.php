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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tblUser->Id_user],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tblUser->Id_user), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Tbl Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tblUsers form content">
            <?= $this->Form->create($tblUser) ?>
            <fieldset>
                <legend><?= __('Edit Tbl User') ?></legend>
                <?php
                    echo $this->Form->control('Name_user');
                    echo $this->Form->control('Email_user');
                    echo $this->Form->control('Num_empleado');
                    echo $this->Form->control('Edad_user');
                    echo $this->Form->control('Num_contacto');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
