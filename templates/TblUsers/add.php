<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TblUser $tblUser
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Acciones') ?></h4>
            <?= $this->Html->link(__('Regresar'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tblUsers form content">
            <?= $this->Form->create($tblUser) ?>
            <fieldset>
                <legend><?= __('Agregando usuario') ?></legend>
                <?php
                    echo $this->Form->control('Name_user');
                    echo $this->Form->control('Email_user');
                    echo $this->Form->control('Num_empleado');
                    echo $this->Form->control('Edad_user');
                    echo $this->Form->control('Num_contacto');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Guardar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
