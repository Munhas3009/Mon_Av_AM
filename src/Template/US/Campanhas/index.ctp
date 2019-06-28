<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Campanhas
        <small>
            <?php echo __(''); ?>
            <i class="fa fa-list"></i>
        </small>
    </h1>

    <ol class="breadcrumb">        
        <li><a href="<?php echo $this->Url->build('/us/campanhas/add'); ?>"><i class="fa fa-plus-square"></i>Registar</a></li>
        <li class="active"><i class="fa fa-list"></i>Lista de Campanhas</li>
        <li><a href="<?php echo $this->Url->build('/us/campanhas/export'); ?>"><i class="fa fa-download"></i>Excel</a></li>
    </ol>

</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"><?php echo __('Lista'); ?></h3>

                    <div class="box-tools">
          <!--            <form action="<?php echo $this->Url->build(); ?>" method="POST">
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
                                <th scope="col" class="actions text-center"><?= $this->Paginator->sort('US') ?></th>
                                <th scope="col" class="actions text-center"><?= $this->Paginator->sort('técnico') ?></th>
                                <th scope="col" class="actions text-center"><?= $this->Paginator->sort('Descrição') ?></th>
                                <th scope="col" class="actions text-center"><?= $this->Paginator->sort('Nºdose') ?></th>
                                <th scope="col" class="actions text-center"><?= $this->Paginator->sort('US') ?></th>
                                <th scope="col" class="actions text-center"><?= $this->Paginator->sort('BM') ?></th>
                                <th scope="col" class="actions text-center"><?= $this->Paginator->sort('ACS') ?></th>
                                <th scope="col" class="actions text-center"><?= $this->Paginator->sort('idade') ?></th>
                                <th scope="col" class="actions text-center"><?= $this->Paginator->sort('MPP') ?></th>
                                <th scope="col" class="actions text-center"><?= $this->Paginator->sort('registado') ?></th>
                                <th scope="col" class="actions text-center"><?= $this->Paginator->sort('Actualizado') ?></th>
                                <th scope="col" class="actions text-center"><?= __('Acções') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($campanhas as $campanha): ?>
                                <tr>
                                    <td><?= $this->Number->format($campanha->id) ?></td>
                                    <td><?= $campanha->has('unidade') ? $this->Html->link($campanha->unidade->name, ['controller' => 'Unidades', 'action' => 'view', $campanha->unidade->id]) : '' ?></td>
                                    <td><?= $campanha->has('user') ? $this->Html->link($campanha->user->name, ['controller' => 'Users', 'action' => 'view', $campanha->user->id]) : '' ?></td>
                                    <td><?= h($campanha->desc_campanha) ?></td>
                                    <td><?= $this->Number->format($campanha->dose) ?></td>
                                    <td><?= $this->Number->format($campanha->unidade_sanitaria) ?></td>
                                    <td><?= $this->Number->format($campanha->brigada_movel) ?></td>
                                    <td><?= $this->Number->format($campanha->agente_comun_saude) ?></td>
                                    <td><?= h($campanha->interv_idade) ?></td>
                                    <td><?= $this->Number->format($campanha->mulheres_p_parto) ?></td>
                                    <td><?= h($campanha->created) ?></td>
                                    <td><?= h($campanha->modified) ?></td>
                                    <td class="actions text-center">
                                        <?= $this->Html->link(__(''), ['action' => 'view', $campanha->id], ['class' => 'btn btn-info btn-xs', 'class' => 'fa fa-eye']) ?>
                                        <?= $this->Html->link(__(''), ['action' => 'edit', $campanha->id], ['class' => 'btn btn-warning btn-xs', 'class' => 'fa fa-edit']) ?>
                                        <?=
                                        $this->Form->postLink(__(''), ['action' => 'delete', $campanha->id], ['confirm' => __('Are you sure you want to delete # {0}?', $campanha->id)
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