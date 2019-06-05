<section class="content-header">
    <h1>
        Grupo
        <small>
            <?php echo __(''); ?>
            <i class="fa fa-eye"></i>
        </small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo $this->Url->build(['action' => 'index']); ?>"><i class="fa fa-dashboard"></i> <?php echo __('Home'); ?></a></li>
    </ol>
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

                        <dt scope="row"><?= __('Id') ?></dt>
                        <dd><?= $this->Number->format($role->id) ?></dd>

                        <dt scope="row"><?= __('Nome do grupo') ?></dt>
                        <dd><?= h($role->name) ?></dd>
                        <dt scope="row"><?= __('Comentário') ?></dt>
                        <dd><?= h($role->comment) ?></dd>

                        <dt scope="row"><?= __('Criado') ?></dt>
                        <dd><?= h($role->created) ?></dd>
                        <dt scope="row"><?= __('Actualizado') ?></dt>
                        <dd><?= h($role->modified) ?></dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <i class="fa fa-share-alt"></i>
                    <h3 class="box-title"><?= __('Utilizadores') ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <?php if (!empty($role->users)): ?>
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th scope="col"><?= __('Id') ?></th>
                                    <th scope="col"><?= __('Nome') ?></th>
                                    <th scope="col"><?= __('Apelido') ?></th>
                                    <th scope="col"><?= __('Correio eletrónico') ?></th>
                                    <!--<th scope="col"><?= __('Username') ?></th>-->
                                    <!--<th scope="col"><?= __('Password') ?></th>-->
                                    <!--<th scope="col"><?= __('Passkey') ?></th>-->
                                    <!--<th scope="col"><?= __('Photo') ?></th>-->
                                    <!--<th scope="col"><?= __('Photo Dir') ?></th>-->
                                    <th scope="col"><?= __('Timeout') ?></th>
                                    <!--<th scope="col"><?= __('Role Id') ?></th>-->
                                    <th scope="col"><?= __('Registado') ?></th>
                                    <th scope="col"><?= __('Actualizado') ?></th>
                                    <th scope="col" class="actions text-center"><?= __('Acções') ?></th>
                                </tr>
                            </thead>
                            <?php foreach ($role->users as $users): ?>
                                <tr>
                                    <td><?= h($users->id) ?></td>
                                    <td><?= h($users->name) ?></td>
                                    <td><?= h($users->apelido) ?></td>
                                    <td><?= h($users->email) ?></td>
                <!--                    <td><?= h($users->username) ?></td>
                                    <td><?= h($users->password) ?></td>
                                    <td><?= h($users->passkey) ?></td>-->
<!--                                    <td><?= h($users->photo) ?></td>-->

                                    <td><?= h($users->timeout) ?></td>
                                    <!--<td><?= h($users->role_id) ?></td>-->
                                    <td><?= h($users->created) ?></td>
                                    <td><?= h($users->modified) ?></td>
                                    <td class="actions text-right">
                                        <?= $this->Html->link(__(''), ['controller' => 'Users', 'action' => 'view', $users->id], ['class' => 'btn btn-info btn-xs', 'class' => 'fa fa-eye']) ?>
                                        <?= $this->Html->link(__(''), ['controller' => 'Users', 'action' => 'edit', $users->id], ['class' => 'btn btn-warning btn-xs', 'class' => 'fa fa-edit']) ?>
                                        <?= $this->Form->postLink(__(''), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)
                                            , 'class' => 'btn btn-danger btn-xs', 'class' => 'fa fa-trash-o']) ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- DataTables -->
<?php echo $this->Html->css('AdminLTE./bower_components/datatables.net-bs/css/dataTables.bootstrap.min', ['block' => 'css']); ?>

<!-- DataTables -->
<?php echo $this->Html->script('AdminLTE./bower_components/datatables.net/js/jquery.dataTables.min', ['block' => 'script']); ?>
<?php echo $this->Html->script('AdminLTE./bower_components/datatables.net-bs/js/dataTables.bootstrap.min', ['block' => 'script']); ?>

<?php $this->start('scriptBottom'); ?>
<script>
    $(function () {
        $('#example2').DataTable({
            'paging': true,
            'lengthChange': false,
            'searching': true,
            'ordering': true,
            'info': true,
            'autoWidth': false
        })
    })
</script>
<?php $this->end(); ?>