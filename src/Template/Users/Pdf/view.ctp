<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <i class="fa fa-info"></i>
                    <h5 class="box-title" align="center"><?php echo __('Informação'); ?></h5>
                </div>
                <!-- /.box-header -->
                <div class="box-body">

                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th scope="col" class="actions text-center"><?= $this->Paginator->sort('id') ?></th>
                                <th scope="col" class="actions text-center"><?= $this->Paginator->sort('nome') ?></th>
                                <th scope="col" class="actions text-center"><?= $this->Paginator->sort('apelido') ?></th>
                                <th scope="col" class="actions text-center"><?= $this->Paginator->sort('Correio eletrónico') ?></th>
                                <th scope="col" class="actions text-center"><?= $this->Paginator->sort('Foto') ?></th>
                                <th scope="col" class="actions text-center"><?= $this->Paginator->sort('grupo') ?></th>
                                <th scope="col" class="actions text-center"><?= $this->Paginator->sort('registado') ?></th>
                                <th scope="col" class="actions text-center"><?= $this->Paginator->sort('actualizado') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?= $this->Number->format($user->id) ?></td>
                                <td><?= h($user->name) ?></td>
                                <td><?= h($user->apelido) ?></td>
                                <td><?= h($user->email) ?></td>
                                <td class="actions text-center">
                                    <?=
                                    $this->Html->image('../webroot/uploads/users' . $user->photo_dir . '/' . $user->photo
                                            , ['width' => 50, 'height' => 50, 'class' => 'img-circle', 'alt' => 'User Image', 'fullBase' => true]);
                                    ?>
                                </td>
                                <td>
                                    <?=
                                    $user->has('role') ? $this->Html->link($user->role->name, ['controller' => 'Roles', 'action' => 'view', $user->role->id]) : ''
                                    ?>
                                </td>
                                <td><?= h($user->created) ?></td>
                                <td><?= h($user->modified) ?></td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</section>





