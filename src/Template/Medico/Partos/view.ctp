<section class="content-header">
  <h1>
    Parto
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
            <dd><?= $this->Number->format($parto->id) ?></dd>
              
            <dt scope="row"><?= __('Unidade Sanitária') ?></dt>
            <dd><?= $parto->has('unidade') ? $this->Html->link($parto->unidade->name, ['controller' => 'Unidades', 'action' => 'view', $parto->unidade->id]) : '' ?></dd>
            <dt scope="row"><?= __('Utilizador') ?></dt>
            <dd><?= $parto->has('user') ? $this->Html->link($parto->user->name, ['controller' => 'Users', 'action' => 'view', $parto->user->id]) : '' ?></dd>
            <dt scope="row"><?= __('Paciente') ?></dt>
            <dd><?= $parto->has('paciente') ? $this->Html->link($parto->paciente->id, ['controller' => 'Pacientes', 'action' => 'view', $parto->paciente->id]) : '' ?></dd>
            <dt scope="row"><?= __('Tipo') ?></dt>
            <dd><?= h($parto->tipo) ?></dd>
            <dt scope="row"><?= __('Observações') ?></dt>
            <dd><?= h($parto->obs) ?></dd>
            
            <dt scope="row"><?= __('Peso') ?></dt>
            <dd><?= $this->Number->format($parto->peso) ?></dd>
            <dt scope="row"><?= __('Registado') ?></dt>
            <dd><?= h($parto->created) ?></dd>
            <dt scope="row"><?= __('Actualizado') ?></dt>
            <dd><?= h($parto->modified) ?></dd>
          </dl>
        </div>
      </div>
    </div>
  </div>

</section>
