<section class="content-header">
    <h1>
        Unidade Sanitária
        <small>
            <?php echo __(''); ?>
            <i class="fa fa-eye"></i>
        </small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo $this->Url->build(['action' => 'index']); ?>"><i class="fa fa-dashboard"></i> <?php echo __('Home'); ?></a></li>
        <li class="active"><i class="fa fa-info"></i></li>
          <li><a href="<?php echo $this->Url->build(['action' => 'viewCampanha', $unidade->id]); ?>"><i class="fa fa-thermometer-2"></i><?php echo __('Campanhas'); ?></a></li>
              <li><a href="<?php echo $this->Url->build(['action' => 'viewTratamento', $unidade->id]); ?>"><i class="fa fa-heartbeat"></i><?php echo __('Consultas'); ?></a></li>
                  <li><a href="<?php echo $this->Url->build(['action' => 'viewParto', $unidade->id]); ?>"><i class="fa fa-child"></i><?php echo __('Partos'); ?></a></li>
        <li><a href="<?php echo $this->Url->build(['action' => 'view', $unidade->id, '_ext' => 'pdf']); ?>"><i class="fa fa-download"></i><?php echo __('Pdf'); ?></a></li>

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

<!--                        <dt scope="row"><?= __('Id') ?></dt>
                        <dd><?= $this->Number->format($unidade->id) ?></dd>-->

                        <dt scope="row"><?= __('Nome da US') ?></dt>
                        <dd><?= h($unidade->name) ?></dd>
                        <dt scope="row"><?= __('Slogan') ?></dt>
                        <dd><?= h($unidade->slogan) ?></dd>
                        <dt scope="row"><?= __('NUIT') ?></dt>
                        <dd><?= h($unidade->nuit) ?></dd>
                        <dt scope="row"><?= __('Correio') ?></dt>
                        <dd><?= h($unidade->email) ?></dd>
                        <dt scope="row"><?= __('Classificação') ?></dt>
                        <dd><?= $unidade->has('classificacao') ? $this->Html->link($unidade->classificacao->name, ['controller' => 'Classificacaos', 'action' => 'view', $unidade->classificacao->id]) : '' ?></dd>
                        <dt scope="row"><?= __('Distrito') ?></dt>
                        <dd><?= $unidade->has('distrito') ? $this->Html->link($unidade->distrito->name, ['controller' => 'Distritos', 'action' => 'view', $unidade->distrito->id]) : '' ?></dd>

                        <dt scope="row"><?= __('Número de Camas') ?></dt>
                        <dd><?= $this->Number->format($unidade->numero_camas) ?></dd>
                        <dt scope="row"><?= __('Data da Fundação') ?></dt>
                        <dd><?= h($unidade->data_fundacao) ?></dd>
                        <dt scope="row"><?= __('Registado') ?></dt>
                        <dd><?= h($unidade->created) ?></dd>
                        <dt scope="row"><?= __('Actualizado') ?></dt>
                        <dd><?= h($unidade->modified) ?></dd>
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
                    <h3 class="box-title"><?= __('Endereço') ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <?= $this->Text->autoParagraph($unidade->endereco); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <i class="fa fa-text-width"></i>
                    <h3 class="box-title"><?= __('Comentários') ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <?= $this->Text->autoParagraph($unidade->comentarios); ?>
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
