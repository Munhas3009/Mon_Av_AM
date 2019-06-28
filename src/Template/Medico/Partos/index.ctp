<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Partos
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
                  <th scope="col" class="actions text-center"><?= $this->Paginator->sort('Unidade Sanitária') ?></th>
                  <th scope="col" class="actions text-center"><?= $this->Paginator->sort('Utilizador') ?></th>
                  <th scope="col" class="actions text-center"><?= $this->Paginator->sort('paciente') ?></th>
                  <th scope="col" class="actions text-center"><?= $this->Paginator->sort('tipo') ?></th>
                  <th scope="col" class="actions text-center"><?= $this->Paginator->sort('peso') ?></th>
                  <th scope="col" class="actions text-center"><?= $this->Paginator->sort('Observações') ?></th>
                  <th scope="col" class="actions text-center"><?= $this->Paginator->sort('registado') ?></th>
                  <th scope="col" class="actions text-center"><?= $this->Paginator->sort('actualizado') ?></th>
                  <th scope="col" class="actions text-center"><?= __('Acções') ?></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($partos as $parto): ?>
                <tr>
                  <td><?= $this->Number->format($parto->id) ?></td>
                  <td><?= $parto->has('unidade') ? $this->Html->link($parto->unidade->name, ['controller' => 'Unidades', 'action' => 'view', $parto->unidade->id]) : '' ?></td>
                  <td><?= $parto->has('user') ? $this->Html->link($parto->user->name, ['controller' => 'Users', 'action' => 'view', $parto->user->id]) : '' ?></td>
                  <td><?= $parto->has('paciente') ? $this->Html->link($parto->paciente->id, ['controller' => 'Pacientes', 'action' => 'view', $parto->paciente->id]) : '' ?></td>
                  <td><?= h($parto->tipo) ?></td>
                  <td><?= $this->Number->format($parto->peso) ?></td>
                  <td><?= h($parto->obs) ?></td>
                  <td><?= h($parto->created) ?></td>
                  <td><?= h($parto->modified) ?></td>
                  <td class="actions text-center">
                      <?= $this->Html->link(__(''), ['action' => 'view', $parto->id], ['class'=>'btn btn-info btn-xs', 'class' => 'fa fa-eye']) ?>
                      <?= $this->Html->link(__(''), ['action' => 'edit', $parto->id], ['class'=>'btn btn-warning btn-xs', 'class' => 'fa fa-edit']) ?>
                      <?= $this->Form->postLink(__(''), ['action' => 'delete', $parto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $parto->id)
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