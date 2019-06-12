<section class="content-header">
  <h1>
    Consulta
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
            <dt scope="row"><?= __('Unidade') ?></dt>
            <dd><?= $tratamento->has('unidade') ? $this->Html->link($tratamento->unidade->name, ['controller' => 'Unidades', 'action' => 'view', $tratamento->unidade->id]) : '' ?></dd>
            <dt scope="row"><?= __('User') ?></dt>
            <dd><?= $tratamento->has('user') ? $this->Html->link($tratamento->user->name, ['controller' => 'Users', 'action' => 'view', $tratamento->user->id]) : '' ?></dd>
            <dt scope="row"><?= __('Especialidade') ?></dt>
            <dd><?= $tratamento->has('especialidade') ? $this->Html->link($tratamento->especialidade->name, ['controller' => 'Especialidades', 'action' => 'view', $tratamento->especialidade->id]) : '' ?></dd>
            <dt scope="row"><?= __('Paciente') ?></dt>
            <dd><?= $tratamento->has('paciente') ? $this->Html->link($tratamento->paciente->name, ['controller' => 'Pacientes', 'action' => 'view', $tratamento->paciente->id]) : '' ?></dd>
            <dt scope="row"><?= __('Estado') ?></dt>
            <dd><?= h($tratamento->estado) ?></dd>
            <dt scope="row"><?= __('Diagnostico') ?></dt>
            <dd><?= $tratamento->has('diagnostico') ? $this->Html->link($tratamento->diagnostico->name, ['controller' => 'Diagnosticos', 'action' => 'view', $tratamento->diagnostico->id]) : '' ?></dd>
            <dt scope="row"><?= __('Tratamento') ?></dt>
            <dd><?= h($tratamento->tratamento) ?></dd>
            <dt scope="row"><?= __('Svacinacao') ?></dt>
            <dd><?= h($tratamento->svacinacao) ?></dd>
            <dt scope="row"><?= __('Obs') ?></dt>
            <dd><?= h($tratamento->obs) ?></dd>
            <dt scope="row"><?= __('Id') ?></dt>
            <dd><?= $this->Number->format($tratamento->id) ?></dd>
            <dt scope="row"><?= __('Contador') ?></dt>
            <dd><?= $this->Number->format($tratamento->contador) ?></dd>
            <dt scope="row"><?= __('Created') ?></dt>
            <dd><?= h($tratamento->created) ?></dd>
            <dt scope="row"><?= __('Modified') ?></dt>
            <dd><?= h($tratamento->modified) ?></dd>
          </dl>
        </div>
      </div>
    </div>
  </div>

</section>
