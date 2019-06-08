<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Utilizadores 
        <small>
            <?php echo __(''); ?>
            <i class="fa fa-users"></i>
        </small>

        <div class="pull-right"><?php echo $this->Html->link(__('Adicionar'), ['action' => 'add'], ['class' => 'btn btn-success btn-xs']) ?></div>
    </h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"><?php echo __('Lista'); ?></h3>

                    <div class="box-tools">
<!--                        <form action="<?php echo $this->Url->build(); ?>" method="POST">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control pull-right" placeholder="<?php echo __('Search'); ?>">

                                <div class="input-group-btn">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </form>-->
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th scope="col" class="actions text-center"><?= $this->Paginator->sort('id') ?></th>
                                <th scope="col" class="actions text-center"><?= $this->Paginator->sort('nome') ?></th>
                                <th scope="col" class="actions text-center"><?= $this->Paginator->sort('apelido') ?></th>
                                <th scope="col" class="actions text-center"><?= $this->Paginator->sort('Correio eletrónico') ?></th>
                                <th scope="col" class="actions text-center"><?= $this->Paginator->sort('utilizador') ?></th>
                                <!--<th scope="col" class="actions text-center"><?= $this->Paginator->sort('password') ?></th>-->
                                <!--<th scope="col" class="actions text-center"><?= $this->Paginator->sort('passkey') ?></th>-->
                                <th scope="col" class="actions text-center"><?= $this->Paginator->sort('photo') ?></th>
                                <!--<th scope="col" class="actions text-center"><?= $this->Paginator->sort('photo_dir') ?></th>-->
                                <th scope="col" class="actions text-center"><?= $this->Paginator->sort('timeout') ?></th>
                                <th scope="col" class="actions text-center"><?= $this->Paginator->sort('grupo') ?></th>
                                <th scope="col" class="actions text-center"><?= $this->Paginator->sort('registado') ?></th>
                                <th scope="col" class="actions text-center"><?= $this->Paginator->sort('actualizado') ?></th>
                                <th scope="col" class="actions text-center"><?= __('Acções') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($users as $user): ?>
                                <tr>
                                    <td><?= $this->Number->format($user->id) ?></td>
                                    <td><?= h($user->name) ?></td>
                                    <td><?= h($user->apelido) ?></td>
                                    <td><?= h($user->email) ?></td>
                                    <td><?= h($user->username) ?></td>
                                    <!--<td><?= h($user->password) ?></td>-->
                                    <!--<td><?= h($user->passkey) ?></td>-->
                                    <!--<td><?= h($user->photo) ?></td>-->
                                    <td class="actions text-center"><?= $this->Html->image('../webroot/uploads/users' . $user->photo_dir . '/' . $user->photo, array('width' => 35, 'height' => 35)); ?></td>

                                    <td><?= h($user->timeout) ?></td>
                                    <td><?= $user->has('role') ? $this->Html->link($user->role->name, ['controller' => 'Roles', 'action' => 'view', $user->role->id]) : '' ?></td>
                                    <td><?= h($user->created) ?></td>
                                    <td><?= h($user->modified) ?></td>
                                    <td class="actions text-center">
                                        <?= $this->Html->link(__(''), ['action' => 'view', $user->id], ['class' => 'btn btn-info btn-xs', 'class' => 'fa fa-eye']) ?>
                                        <?= $this->Html->link(__(''), ['action' => 'edit', $user->id], ['class' => 'btn btn-warning btn-xs', 'class' => 'fa fa-edit']) ?>
                                        <?=
                                        $this->Form->postLink(__(''), ['action' => 'delete', $user->id], ['confirm' => __('Tem certeza que deseja remover # {0}?', $user->id)
                                            , 'class' => 'btn btn-danger btn-xs', 'class' => 'fa fa-trash-o'])
                                        ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
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