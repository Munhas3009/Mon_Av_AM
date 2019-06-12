<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Consultas
    <small>
            <?php echo __(''); ?>
            <i class="fa fa-medkit"></i>
        </small>

    <div class="pull-right"><?php echo $this->Html->link(__('Adicionar'), ['action' => 'add'], ['class'=>'btn btn-success btn-xs']) ?></div>
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
                  <th scope="col" class="actions text-center"><?= $this->Paginator->sort('unidade_id') ?></th>
                  <th scope="col" class="actions text-center"><?= $this->Paginator->sort('user_id') ?></th>
                  <th scope="col" class="actions text-center"><?= $this->Paginator->sort('especialidade_id') ?></th>
                  <th scope="col" class="actions text-center"><?= $this->Paginator->sort('paciente_id') ?></th>
                  <!--<th scope="col" class="actions text-center"><?= $this->Paginator->sort('contador') ?></th>-->
                  <th scope="col" class="actions text-center"><?= $this->Paginator->sort('estado') ?></th>
                  <th scope="col" class="actions text-center"><?= $this->Paginator->sort('diagnostico_id') ?></th>
                  <th scope="col" class="actions text-center"><?= $this->Paginator->sort('tratamento') ?></th>
                  <th scope="col" class="actions text-center"><?= $this->Paginator->sort('svacinacao') ?></th>
                  <th scope="col" class="actions text-center"><?= $this->Paginator->sort('obs') ?></th>
                  <th scope="col" class="actions text-center"><?= $this->Paginator->sort('Registado') ?></th>
                  <th scope="col" class="actions text-center"><?= $this->Paginator->sort('Actualizado') ?></th>
                  <th scope="col" class="actions text-center"><?= __('Acções') ?></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($tratamentos as $tratamento): ?>
                <tr>
                  <td><?= $this->Number->format($tratamento->id) ?></td>
                  <td><?= $tratamento->has('unidade') ? $this->Html->link($tratamento->unidade->name, ['controller' => 'Unidades', 'action' => 'view', $tratamento->unidade->id]) : '' ?></td>
                  <td><?= $tratamento->has('user') ? $this->Html->link($tratamento->user->name, ['controller' => 'Users', 'action' => 'view', $tratamento->user->id]) : '' ?></td>
                  <td><?= $tratamento->has('especialidade') ? $this->Html->link($tratamento->especialidade->name, ['controller' => 'Especialidades', 'action' => 'view', $tratamento->especialidade->id]) : '' ?></td>
                  <td><?= $tratamento->has('paciente') ? $this->Html->link($tratamento->paciente->name, ['controller' => 'Pacientes', 'action' => 'view', $tratamento->paciente->id]) : '' ?></td>
                  <!--<td><?= $this->Number->format($tratamento->contador) ?></td>-->
                  <td><?= h($tratamento->estado) ?></td>
                  <td><?= $tratamento->has('diagnostico') ? $this->Html->link($tratamento->diagnostico->name, ['controller' => 'Diagnosticos', 'action' => 'view', $tratamento->diagnostico->id]) : '' ?></td>
                  <td><?= h($tratamento->tratamento) ?></td>
                  <td><?= h($tratamento->svacinacao) ?></td>
                  <td><?= h($tratamento->obs) ?></td>
                  <td><?= h($tratamento->created) ?></td>
                  <td><?= h($tratamento->modified) ?></td>
                  <td class="actions text-center">
                      <?= $this->Html->link(__(''), ['action' => 'view', $tratamento->id], ['class'=>'btn btn-info btn-xs', 'class' => 'fa fa-eye']) ?>
                      <?= $this->Html->link(__(''), ['action' => 'edit', $tratamento->id], ['class'=>'btn btn-warning btn-xs', 'class' => 'fa fa-edit']) ?>
                      <?= $this->Form->postLink(__(''), ['action' => 'delete', $tratamento->id], ['confirm' => __('Tem certeza que deseja remover # {0}?', $tratamento->id)
                          , 'class'=>'btn btn-danger btn-xs', 'class' => 'fa fa-trash-o']) ?>
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