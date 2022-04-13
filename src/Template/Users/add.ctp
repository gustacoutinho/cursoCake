<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="col-md-2" id="actions-sidebar">    
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title"><?= __('Actions') ?></h3>
        </div>
        <ul class="nav nav-pills nav-stacked">
            <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
        </ul>
    </div>
</div>
<div class="products col-lg-10 col-md-9">
        <div class="box box-primary">
            <div class="box-header with-border">
            <legend><?= __('Add User') ?></legend>
            </div>
            <div class="box-body">
            <?= $this->Form->create($user) ?>
                <fieldset>
                    <?php
                        echo $this->Form->control('username');
                        echo $this->Form->control('password');
                        echo $this->Form->control('active');
                    ?>
                </fieldset>
                <?= $this->Form->button(__('Submit')) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>