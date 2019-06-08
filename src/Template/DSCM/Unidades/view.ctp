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
                        <dd><?= $this->Number->format($unidade->id) ?></dd>

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
    <div class="row">
        <div class="col-md-12">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <i class="fa fa-share-alt"></i>
                    <h3 class="box-title"><?= __('Campanhas') ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <?php if (!empty($unidade->campanhas)): ?>
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>

                                <tr>
                                    <th scope="col" class="actions text-center"><?= __('Id') ?></th>
                                    <!--<th scope="col"><?= __('Unidade Id') ?></th>-->
                                    <!--<th scope="col"><?= __('User Id') ?></th>-->
                                    <th scope="col" class="actions text-center"><?= __('Descrição da Campanha') ?></th>
                                    <th scope="col" class="actions text-center"><?= __('Dose') ?></th>
                                    <th scope="col" class="actions text-center"><?= __('Minist. US') ?></th>
                                    <th scope="col" class="actions text-center"><?= __('Minist. BM') ?></th>
                                    <th scope="col" class="actions text-center"><?= __('Minist. ACS') ?></th>
                                    <th scope="col" class="actions text-center"><?= __('Interv Idade') ?></th>
                                    <th scope="col" class="actions text-center"><?= __('Mulheres P Parto') ?></th>
                                    <th scope="col" class="actions text-center"><?= __('Comentários') ?></th>
                                    <th scope="col" class="actions text-center"><?= __('Registado') ?></th>
                                    <th scope="col" class="actions text-center"><?= __('Actualizado') ?></th>
                                    <!--<th scope="col" class="actions text-center"><?= __('Actions') ?></th>-->
                                </tr>
                            </thead>
                            <?php foreach ($unidade->campanhas as $campanhas): ?>
                                <tr>
                                    <td><?= h($campanhas->id) ?></td>
                                    <!--<td><?= h($campanhas->unidade_id) ?></td>-->
                                    <!--<td><?= h($campanhas->user_id) ?></td>-->
                                    <td><?= h($campanhas->desc_campanha) ?></td>
                                    <td><?= h($campanhas->dose) ?></td>
                                    <td><?= h($campanhas->unidade_sanitaria) ?></td>
                                    <td><?= h($campanhas->brigada_movel) ?></td>
                                    <td><?= h($campanhas->agente_comun_saude) ?></td>
                                    <td><?= h($campanhas->interv_idade) ?></td>
                                    <td><?= h($campanhas->mulheres_p_parto) ?></td>
                                    <td><?= h($campanhas->comentario) ?></td>
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
                    <h3 class="box-title"><?= __('Tratamentos') ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <?php if (!empty($unidade->tratamentos)): ?>
                        <table id="example1" class="table table-bordered table-hover">
                            <thead>

                                <tr>
                                    <th scope="col" class="actions text-center"><?= __('Id') ?></th>
                                    <!--<th scope="col"><?= __('Unidade Id') ?></th>-->
                                    <th scope="col" class="actions text-center"><?= __('Médico') ?></th>
                                    <th scope="col" class="actions text-center"><?= __('Especialidade') ?></th>
                                    <!--<th scope="col"><?= __('Paciente Id') ?></th>-->
                                    <!--<th scope="col"><?= __('Contador') ?></th>-->
                                    <th scope="col" class="actions text-center"><?= __('Estado') ?></th>
                                    <th scope="col" class="actions text-center"><?= __('Diagnóstico') ?></th>
                                    <th scope="col" class="actions text-center"><?= __('Tratamento') ?></th>
                                    <th scope="col" class="actions text-center"><?= __('Vacinação') ?></th>
                                    <th scope="col" class="actions text-center"><?= __('Observação') ?></th>
                                    <th scope="col" class="actions text-center"><?= __('Registado') ?></th>
                                    <th scope="col" class="actions text-center"><?= __('Actualizado') ?></th>
                                    <!--<th scope="col" class="actions text-center"><?= __('Actions') ?></th>-->
                                </tr>
                            </thead>
                            <?php foreach ($unidade->tratamentos as $tratamentos): ?>
                                <tr>
                                    <td><?= h($tratamentos->id) ?></td>
                                    <!--<td><?= h($tratamentos->unidade_id) ?></td>-->
                                    <td><?= h($tratamentos->user_id) ?></td>
                                    <td><?= h($tratamentos->especialidade_id) ?></td>
                                    <!--<td><?= h($tratamentos->paciente_id) ?></td>-->
                                    <!--<td><?= h($tratamentos->contador) ?></td>-->
                                    <td><?= h($tratamentos->estado) ?></td>
                                    <td><?= h($tratamentos->diagnostico_id) ?></td>
                                    <td><?= h($tratamentos->tratamento) ?></td>
                                    <td><?= h($tratamentos->svacinacao) ?></td>
                                    <td><?= h($tratamentos->obs) ?></td>
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
