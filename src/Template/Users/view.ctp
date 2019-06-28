<section class="content-header">
    <h1>
        Utilizador
        <small>
            <?php echo __(''); ?>
            <i class="fa fa-eye"></i>
        </small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo $this->Url->build(['action' => 'index']); ?>"><i class="fa fa-dashboard"></i> <?php echo __('Home'); ?></a></li>
        <li class="active"><i class="fa fa-info"></i></li>
        <li><a href="<?php echo $this->Url->build(['action' => 'view', $user->id, '_ext' => 'pdf']); ?>"><i class="fa fa-download"></i><?php echo __('Pdf'); ?></a></li>

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

    <div class="row">
        <div class="col-md-12">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <i class="fa fa-share-alt"></i>
                    <h3 class="box-title"><?= __('Campanhas') ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <?php if (!empty($user->campanhas)): ?>
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th scope="col" class="actions text-center"><?= __('Id') ?></th>
                                    <th scope="col" class="actions text-center"><?= __('US') ?></th>
                                    <!--<th scope="col"><?= __('User Id') ?></th>-->
                                    <th scope="col" class="actions text-center"><?= __('Descrição') ?></th>
                                    <th scope="col" class="actions text-center"><?= __('Nº Dose') ?></th>
                                    <th scope="col"><?= __('MinUS') ?></th>
                                    <th scope="col"><?= __('MinBM') ?></th>
                                    <th scope="col"><?= __('MinACS') ?></th>
                                    <th scope="col"><?= __('Interv Idade') ?></th>
                                    <th scope="col"><?= __('MPP') ?></th>
                                    <!--<th scope="col"><?= __('Comentario') ?></th>-->
                                    <th scope="col"><?= __('Registado') ?></th>
                                    <th scope="col"><?= __('Actualizado') ?></th>
                                    <!--<th scope="col" class="actions text-center"><?= __('Actions') ?></th>-->
                                </tr>
                            </thead>
                            <?php foreach ($user->campanhas as $campanhas): ?>
                                <tr>
                                    <td><?= h($campanhas->id) ?></td>
                                    <td><?= h($campanhas->unidade_id) ?></td>
                                    <!--<td><?= h($campanhas->user_id) ?></td>-->
                                    <td><?= h($campanhas->desc_campanha) ?></td>
                                    <td><?= h($campanhas->dose) ?></td>
                                    <td><?= h($campanhas->unidade_sanitaria) ?></td>
                                    <td><?= h($campanhas->brigada_movel) ?></td>
                                    <td><?= h($campanhas->agente_comun_saude) ?></td>
                                    <td><?= h($campanhas->interv_idade) ?></td>
                                    <td><?= h($campanhas->mulheres_p_parto) ?></td>
                                    <!--<td><?= h($campanhas->comentario) ?></td>-->
                                    <td><?= h($campanhas->created) ?></td>
                                    <td><?= h($campanhas->modified) ?></td>
                <!--                      <td class="actions text-right">
                                    <?= $this->Html->link(__('View'), ['controller' => 'Campanhas', 'action' => 'view', $campanhas->id], ['class' => 'btn btn-info btn-xs']) ?>
                                    <?= $this->Html->link(__('Edit'), ['controller' => 'Campanhas', 'action' => 'edit', $campanhas->id], ['class' => 'btn btn-warning btn-xs']) ?>
                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Campanhas', 'action' => 'delete', $campanhas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $campanhas->id), 'class' => 'btn btn-danger btn-xs']) ?>
                                  </td>-->
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <i class="fa fa-share-alt"></i>
                    <h3 class="box-title"><?= __('Partos') ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <?php if (!empty($user->partos)): ?>
                        <table id="example1" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th scope="col" class="actions text-center"><?= __('Id') ?></th>
                                    <th scope="col" class="actions text-center"><?= __('US') ?></th>
    <!--                                <th scope="col"><?= __('User Id') ?></th>
                                    <th scope="col"><?= __('Paciente Id') ?></th>-->
                                    <th scope="col" class="actions text-center"><?= __('Tipo') ?></th>
                                    <th scope="col" class="actions text-center"><?= __('Peso') ?></th>
                                    <!--<th scope="col"><?= __('Obs') ?></th>-->
                                    <th scope="col" class="actions text-center"><?= __('Registado') ?></th>
                                    <th scope="col" class="actions text-center"><?= __('Actualizado') ?></th>
                                    <!--<th scope="col" class="actions text-center"><?= __('Actions') ?></th>-->
                                </tr>
                            </thead>
                            <?php foreach ($user->partos as $partos): ?>
                                <tr>
                                    <td><?= h($partos->id) ?></td>
                                    <td><?= h($partos->unidade_id) ?></td>
                                    <!--<td><?= h($partos->user_id) ?></td>-->
                                    <!--<td><?= h($partos->paciente_id) ?></td>-->
                                    <td><?= h($partos->tipo) ?></td>
                                    <td><?= h($partos->peso) ?></td>
                                    <!--<td><?= h($partos->obs) ?></td>-->
                                    <td><?= h($partos->created) ?></td>
                                    <td><?= h($partos->modified) ?></td>
        <!--                                    <td class="actions text-right">
                                    <?= $this->Html->link(__('View'), ['controller' => 'Partos', 'action' => 'view', $partos->id], ['class' => 'btn btn-info btn-xs']) ?>
                                    <?= $this->Html->link(__('Edit'), ['controller' => 'Partos', 'action' => 'edit', $partos->id], ['class' => 'btn btn-warning btn-xs']) ?>
                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Partos', 'action' => 'delete', $partos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $partos->id), 'class' => 'btn btn-danger btn-xs']) ?>
                                    </td>-->
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <i class="fa fa-share-alt"></i>
                    <h3 class="box-title"><?= __('Tratamentos') ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <?php if (!empty($user->tratamentos)): ?>
                        <table id="example3" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th scope="col" class="actions text-center"><?= __('Id') ?></th>
                                    <th scope="col" class="actions text-center"><?= __('US') ?></th>
                                    <!--<th scope="col" class="actions text-center"><?= __('User Id') ?></th>-->
                                    <th scope="col" class="actions text-center"><?= __('Especial') ?></th>
                                    <!--<th scope="col" class="actions text-center"><?= __('Paciente Id') ?></th>-->
                                    <th scope="col" class="actions text-center"><?= __('Estado') ?></th>
                                    <th scope="col" class="actions text-center"><?= __('Diagnóstico') ?></th>
                                    <th scope="col" class="actions text-center"><?= __('Tratamento') ?></th>
                                    <!--<th scope="col" class="actions text-center"><?= __('Svacinacao') ?></th>-->
                                    <!--<th scope="col" class="actions text-center"><?= __('Obs') ?></th>-->
                                    <!--<th scope="col" class="actions text-center"><?= __('Contador') ?></th>-->
                                    <th scope="col" class="actions text-center"><?= __('Registado') ?></th>
                                    <th scope="col" class="actions text-center"><?= __('Actualizado') ?></th>
                                    <!--<th scope="col" class="actions text-center"><?= __('Actions') ?></th>-->
                                </tr>
                            </thead>
                            <?php foreach ($user->tratamentos as $tratamentos): ?>
                                <tr>
                                    <td><?= h($tratamentos->id) ?></td>
                                    <td><?= h($tratamentos->unidade_id) ?></td>
                                    <!--<td><?= h($tratamentos->user_id) ?></td>-->
                                    <td><?= h($tratamentos->especialidade_id) ?></td>
                                    <!--<td><?= h($tratamentos->paciente_id) ?></td>-->
                                    <td><?= h($tratamentos->estado) ?></td>
                                    <td><?= h($tratamentos->diagnostico_id) ?></td>
                                    <td><?= h($tratamentos->tratamento) ?></td>
                                    <!--<td><?= h($tratamentos->svacinacao) ?></td>-->
                                    <!--<td><?= h($tratamentos->obs) ?></td>-->
                                    <!--<td><?= h($tratamentos->contador) ?></td>-->
                                    <td><?= h($tratamentos->created) ?></td>
                                    <td><?= h($tratamentos->modified) ?></td>
        <!--                                    <td class="actions text-right">
                                    <?= $this->Html->link(__('View'), ['controller' => 'Tratamentos', 'action' => 'view', $tratamentos->id], ['class' => 'btn btn-info btn-xs']) ?>
                                    <?= $this->Html->link(__('Edit'), ['controller' => 'Tratamentos', 'action' => 'edit', $tratamentos->id], ['class' => 'btn btn-warning btn-xs']) ?>
                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tratamentos', 'action' => 'delete', $tratamentos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tratamentos->id), 'class' => 'btn btn-danger btn-xs']) ?>
                                    </td>-->
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
        $('#example1').DataTable()
        $('#example2').DataTable()
        $('#example3').DataTable({
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