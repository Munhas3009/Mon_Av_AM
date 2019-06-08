<section class="content-header">
    <h1>
        Diagnóstico
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
                        <dd><?= $this->Number->format($diagnostico->id) ?></dd>

                        <dt scope="row"><?= __('Nome da doença') ?></dt>
                        <dd><?= h($diagnostico->name) ?></dd>
                        <dt scope="row"><?= __('Sintoma') ?></dt>
                        <dd><?= h($diagnostico->sintoma) ?></dd>
                        <dt scope="row"><?= __('Método') ?></dt>
                        <dd><?= h($diagnostico->metodo) ?></dd>

                        <dt scope="row"><?= __('Registado') ?></dt>
                        <dd><?= h($diagnostico->created) ?></dd>
                        <dt scope="row"><?= __('Actualizado') ?></dt>
                        <dd><?= h($diagnostico->modified) ?></dd>
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
                    <h3 class="box-title"><?= __('Tratamentos') ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <?php if (!empty($diagnostico->tratamentos)): ?>

                        <div class="box-tools">

                        </div>

                        <div class="box-body table-responsive no-padding">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col" class="actions text-center"><?= __('Id') ?></th>
                                        <th scope="col" class="actions text-center"><?= __('US') ?></th>
    <!--                                        <th scope="col"><?= __('Médico') ?></th>-->
                                        <th scope="col" class="actions text-center"><?= __('Especialidade') ?></th>
                                        <!--<th scope="col"><?= __('Paciente Id') ?></th>-->
                    <!--                    <th scope="col"><?= __('Contador') ?></th>-->
                                        <th scope="col" class="actions text-center"><?= __('Estado') ?></th>
                                        <!--<th scope="col"><?= __('Diagnóstico') ?></th>-->
                                        <th scope="col" class="actions text-center"><?= __('Tratamento') ?></th>
                                        <th scope="col" class="actions text-center"><?= __('Vacinação') ?></th>
                                        <th scope="col" class="actions text-center"><?= __('Observação') ?></th>
                                        <th scope="col" class="actions text-center"><?= __('Registado') ?></th>
                                        <th scope="col" class="actions text-center"><?= __('Actualizado') ?></th>
<!--                                        <th scope="col" class="actions text-center"><?= __('Acções') ?></th>-->
                                    </tr>
                                </thead>
                                <?php foreach ($diagnostico->tratamentos as $tratamentos): ?>
                                    <tr>
                                        <td><?= h($tratamentos->id) ?></td>
                                        <td><?= h($tratamentos->unidade_id) ?></td>
                                        <!--<td><?= h($tratamentos->user_id) ?></td>-->
                                        <td><?= h($tratamentos->especialidade_id) ?></td>
                                        <!--<td><?= h($tratamentos->paciente_id) ?></td>-->
                                        <!--<td><?= h($tratamentos->contador) ?></td>-->
                                        <td><?= h($tratamentos->estado) ?></td>
                                        <!--<td><?= h($tratamentos->diagnostico_id) ?></td>-->
                                        <td><?= h($tratamentos->tratamento) ?></td>
                                        <td><?= h($tratamentos->svacinacao) ?></td>
                                        <td><?= h($tratamentos->obs) ?></td>
                                        <td><?= h($tratamentos->created) ?></td>
                                        <td><?= h($tratamentos->modified) ?></td>
<!--                                        <td class="actions text-center">
                                            <?= $this->Html->link(__(''), ['controller' => 'Tratamentos', 'action' => 'view', $tratamentos->id], ['class' => 'btn btn-info btn-xs', 'class' => 'fa fa-eye']) ?>
                                            <?= $this->Html->link(__(''), ['controller' => 'Tratamentos', 'action' => 'edit', $tratamentos->id], ['class' => 'btn btn-warning btn-xs', 'class' => 'fa fa-edit']) ?>
                                            <?=
                                            $this->Form->postLink(__(''), ['controller' => 'Tratamentos', 'action' => 'delete', $tratamentos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tratamentos->id)
                                                , 'class' => 'btn btn-danger btn-xs', 'class' => 'fa fa-trash-o'])
                                            ?>
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