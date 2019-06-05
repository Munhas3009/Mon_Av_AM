<section class="content-header">
  <h1>
    Distrito
    <small><?php echo __('View'); ?></small>
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
          <h3 class="box-title"><?php echo __('Information'); ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <dl class="dl-horizontal">
            <dt scope="row"><?= __('Name') ?></dt>
            <dd><?= h($distrito->name) ?></dd>
            <dt scope="row"><?= __('Id') ?></dt>
            <dd><?= $this->Number->format($distrito->id) ?></dd>
            <dt scope="row"><?= __('Created') ?></dt>
            <dd><?= h($distrito->created) ?></dd>
            <dt scope="row"><?= __('Modified') ?></dt>
            <dd><?= h($distrito->modified) ?></dd>
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
          <h3 class="box-title"><?= __('Comentarios') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <?= $this->Text->autoParagraph($distrito->comentarios); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-share-alt"></i>
          <h3 class="box-title"><?= __('Unidades') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <?php if (!empty($distrito->unidades)): ?>
          <table class="table table-hover">
              <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('Name') ?></th>
                    <th scope="col"><?= __('Slogan') ?></th>
                    <th scope="col"><?= __('Nuit') ?></th>
                    <th scope="col"><?= __('Email') ?></th>
                    <th scope="col"><?= __('Data Fundacao') ?></th>
                    <th scope="col"><?= __('Classificacao Id') ?></th>
                    <th scope="col"><?= __('Distrito Id') ?></th>
                    <th scope="col"><?= __('Numero Camas') ?></th>
                    <th scope="col"><?= __('Endereco') ?></th>
                    <th scope="col"><?= __('Comentarios') ?></th>
                    <th scope="col"><?= __('Created') ?></th>
                    <th scope="col"><?= __('Modified') ?></th>
                    <th scope="col" class="actions text-center"><?= __('Actions') ?></th>
              </tr>
              <?php foreach ($distrito->unidades as $unidades): ?>
              <tr>
                    <td><?= h($unidades->id) ?></td>
                    <td><?= h($unidades->name) ?></td>
                    <td><?= h($unidades->slogan) ?></td>
                    <td><?= h($unidades->nuit) ?></td>
                    <td><?= h($unidades->email) ?></td>
                    <td><?= h($unidades->data_fundacao) ?></td>
                    <td><?= h($unidades->classificacao_id) ?></td>
                    <td><?= h($unidades->distrito_id) ?></td>
                    <td><?= h($unidades->numero_camas) ?></td>
                    <td><?= h($unidades->endereco) ?></td>
                    <td><?= h($unidades->comentarios) ?></td>
                    <td><?= h($unidades->created) ?></td>
                    <td><?= h($unidades->modified) ?></td>
                      <td class="actions text-right">
                      <?= $this->Html->link(__('View'), ['controller' => 'Unidades', 'action' => 'view', $unidades->id], ['class'=>'btn btn-info btn-xs']) ?>
                      <?= $this->Html->link(__('Edit'), ['controller' => 'Unidades', 'action' => 'edit', $unidades->id], ['class'=>'btn btn-warning btn-xs']) ?>
                      <?= $this->Form->postLink(__('Delete'), ['controller' => 'Unidades', 'action' => 'delete', $unidades->id], ['confirm' => __('Are you sure you want to delete # {0}?', $unidades->id), 'class'=>'btn btn-danger btn-xs']) ?>
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
