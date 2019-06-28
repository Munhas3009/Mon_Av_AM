<?php
/**
 * @var \App\View\AppView $this
 */
?>
<?php $this->layout = 'AdminLTE.login'; ?>

<div class="users form">
    <?= $this->Form->create() ?>
    <?= $this->Flash->render('auth') ?>

    <div class="form-group has-feedback">
        <?= $this->Form->control('username', array('label' => false, 'placeholder' => 'Username', 'autofocus' => 'true')) ?>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
    </div>

    <div class="form-group has-feedback">
        <?= $this->Form->control('password', array('label' => false, 'placeholder' => 'Senha')) ?>
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
    </div>

    <div class="row">
        <div class="col-xs-8">
            <div class="checkbox icheck">
                <label>
                    <input type="checkbox"> Lembrar me a senha
                </label>
            </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">

            <?= $this->Form->button(__('Entrar'), array('class' => 'btn btn-primary btn-block btn-flat')); ?>

        </div>
        <!-- /.col -->
    </div>
    <?= $this->Form->end() ?>
</div>