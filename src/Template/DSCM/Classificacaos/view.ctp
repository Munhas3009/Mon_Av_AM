<section class="content-header">
    <h1>
        Classificação 
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
                        <dd><?= $this->Number->format($classificacao->id) ?></dd>

                        <dt scope="row"><?= __('Classificação') ?></dt>
                        <dd><?= h($classificacao->name) ?></dd>

                        <dt scope="row"><?= __('Registado') ?></dt>
                        <dd><?= h($classificacao->created) ?></dd>
                        <dt scope="row"><?= __('Actualizado') ?></dt>
                        <dd><?= h($classificacao->modified) ?></dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <i class="fa fa-text-width"></i>
                    <h3 class="box-title"><?= __('Comentário') ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <?= $this->Text->autoParagraph($classificacao->comentarios); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <i class="fa fa-share-alt"></i>
                    <h3 class="box-title"><?= __('Unidades Sanitárias') ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <?php if (!empty($classificacao->unidades)): ?>

                        <div class="box-body table-responsive no-padding">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col" class="actions text-center"><?= __('Id') ?></th>
                                        <th scope="col" class="actions text-center"><?= __('Nome da US') ?></th>
                                        <!--<th scope="col" class="actions text-center"><?= __('Slogan') ?></th>-->
                                        <th scope="col" class="actions text-center"><?= __('NUIT') ?></th>
                                        <th scope="col" class="actions text-center"><?= __('Correio') ?></th>
                                        <th scope="col" class="actions text-center"><?= __('D_Fundação') ?></th>
                                        <!--<th scope="col"><?= __('Id_Classif') ?></th>-->
                                        <th scope="col" class="actions text-center"><?= __('Distrito') ?></th>
                                        <th scope="col" class="actions text-center"><?= __('Nº de Camas') ?></th>
                                        <th scope="col" class="actions text-center"><?= __('Endereço') ?></th>
                                        <!--<th scope="col" class="actions text-center"><?= __('Comentários') ?></th>-->
                                        <th scope="col" class="actions text-center"><?= __('Registado') ?></th>
                                        <th scope="col" class="actions text-center"><?= __('Actualizado') ?></th>
                                        <th scope="col" class="actions text-center"><?= __('Acções ') ?></th>
                                    </tr>
                                </thead>
                                <?php foreach ($classificacao->unidades as $unidades): ?>
                                    <tr>
                                        <td><?= h($unidades->id) ?></td>
                                        <td><?= h($unidades->name) ?></td>
                                        <!--<td><?= h($unidades->slogan) ?></td>-->
                                        <td><?= h($unidades->nuit) ?></td>
                                        <td><?= h($unidades->email) ?></td>
                                        <td><?= h($unidades->data_fundacao) ?></td>
                                        <!--<td><?= h($unidades->classificacao_id) ?></td>-->
                                        <td><?= h($unidades->distrito_id) ?></td>
                                        <td><?= h($unidades->numero_camas) ?></td>
                                        <td><?= h($unidades->endereco) ?></td>
                                        <!--<td><?= h($unidades->comentarios) ?></td>-->
                                        <td><?= h($unidades->created) ?></td>
                                        <td><?= h($unidades->modified) ?></td>
                                        <td class="actions text-center">
                                            <?= $this->Html->link(__(''), ['controller' => 'Unidades', 'action' => 'view', $unidades->id], ['class' => 'btn btn-info btn-xs', 'class' => 'fa fa-eye']) ?>
                                            <?= $this->Html->link(__(''), ['controller' => 'Unidades', 'action' => 'edit', $unidades->id], ['class' => 'btn btn-warning btn-xs', 'class' => 'fa fa-edit']) ?>
                                            <?=
                                            $this->Form->postLink(__(''), ['controller' => 'Unidades', 'action' => 'delete', $unidades->id], ['confirm' => __('Are you sure you want to delete # {0}?', $unidades->id)
                                                , 'class' => 'btn btn-danger btn-xs', 'class' => 'fa fa-trash-o'])
                                            ?>
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