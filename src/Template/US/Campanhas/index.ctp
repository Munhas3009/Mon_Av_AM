<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Campanhas
    <small>
            <?php echo __(''); ?>
            <i class="fa fa-list"></i>
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
                  <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('US') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('Utilizador') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('Descrição') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('Nº de dose') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('Aplicada na US') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('Aplicada por BM') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('Aplicada por ACS') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('interv_idade') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('mulheres_p_parto') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('Criado') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('Actualizado') ?></th>
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
                      <?= $this->Html->link(__(''), ['action' => 'view', $campanha->id], ['class'=>'btn btn-info btn-xs', 'class' => 'fa fa-eye']) ?>
                      <?= $this->Html->link(__(''), ['action' => 'edit', $campanha->id], ['class'=>'btn btn-warning btn-xs', 'class' => 'fa fa-edit']) ?>
                      <?= $this->Form->postLink(__(''), ['action' => 'delete', $campanha->id], ['confirm' => __('Are you sure you want to delete # {0}?', $campanha->id)
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