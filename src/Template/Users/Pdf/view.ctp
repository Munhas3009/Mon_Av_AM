<section class="content-header">
    <h1>
        Utilizador
        <small>
            <?php echo __(''); ?>
            <i class="fa fa-eye"></i>
        </small>
    </h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <i class="fa fa-info"></i>
                    <h3 class="box-title"><?php echo __('Informação'); ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <dl class="dl-horizontal">

                        <dd><?=
                            $this->Html->image('../webroot/uploads/users' . $user->photo_dir . '/' . $user->photo
                                    , array('width' => 50, 'height' => 50, 'class' => 'img-circle', 'alt' => 'User Image'));
                            ?></dd>

                        <dt scope="row"><?= __('Id') ?></dt>
                        <dd><?= $this->Number->format($user->id) ?></dd>

                        <dt scope="row"><?= __('Nome') ?></dt>
                        <dd><?= h($user->name) ?></dd>
                        <dt scope="row"><?= __('Apelido') ?></dt>
                        <dd><?= h($user->apelido) ?></dd>
                        <dt scope="row"><?= __('Correio eletrónico') ?></dt>
                        <dd><?= h($user->email) ?></dd>
                        <dt scope="row"><?= __('Utilizador') ?></dt>
                        <dd><?= h($user->username) ?></dd>
            <!--            <dt scope="row"><?= __('Password') ?></dt>
                        <dd><?= h($user->password) ?></dd>-->
            <!--            <dt scope="row"><?= __('Passkey') ?></dt>
                        <dd><?= h($user->passkey) ?></dd>-->
            <!--            <dt scope="row"><?= __('Photo') ?></dt>
                        <dd><?= h($user->photo) ?></dd>
                        <dt scope="row"><?= __('Photo Dir') ?></dt>
                        <dd><?= h($user->photo_dir) ?></dd>-->
                        <dt scope="row"><?= __('Grupo') ?></dt>
                        <dd><?= $user->has('role') ? $this->Html->link($user->role->name, ['controller' => 'Roles', 'action' => 'view', $user->role->id]) : '' ?></dd>

<!--            <dt scope="row"><?= __('Timeout') ?></dt>
                <dd><?= h($user->timeout) ?></dd>-->
                        <dt scope="row"><?= __('Registado') ?></dt>
                        <dd><?= h($user->created) ?></dd>
                        <dt scope="row"><?= __('Actualizado') ?></dt>
                        <dd><?= h($user->modified) ?></dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</section>