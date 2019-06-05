<section class="content-header">
  <h1>
    Campanha
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
            <dd><?= $campanha->has('unidade') ? $this->Html->link($campanha->unidade->name, ['controller' => 'Unidades', 'action' => 'view', $campanha->unidade->id]) : '' ?></dd>
            <dt scope="row"><?= __('User') ?></dt>
            <dd><?= $campanha->has('user') ? $this->Html->link($campanha->user->name, ['controller' => 'Users', 'action' => 'view', $campanha->user->id]) : '' ?></dd>
            <dt scope="row"><?= __('Desc Campanha') ?></dt>
            <dd><?= h($campanha->desc_campanha) ?></dd>
            <dt scope="row"><?= __('Interv Idade') ?></dt>
            <dd><?= h($campanha->interv_idade) ?></dd>
            <dt scope="row"><?= __('Id') ?></dt>
            <dd><?= $this->Number->format($campanha->id) ?></dd>
            <dt scope="row"><?= __('Dose') ?></dt>
            <dd><?= $this->Number->format($campanha->dose) ?></dd>
            <dt scope="row"><?= __('Unidade Sanitaria') ?></dt>
            <dd><?= $this->Number->format($campanha->unidade_sanitaria) ?></dd>
            <dt scope="row"><?= __('Brigada Movel') ?></dt>
            <dd><?= $this->Number->format($campanha->brigada_movel) ?></dd>
            <dt scope="row"><?= __('Agente Comun Saude') ?></dt>
            <dd><?= $this->Number->format($campanha->agente_comun_saude) ?></dd>
            <dt scope="row"><?= __('Mulheres P Parto') ?></dt>
            <dd><?= $this->Number->format($campanha->mulheres_p_parto) ?></dd>
            <dt scope="row"><?= __('Created') ?></dt>
            <dd><?= h($campanha->created) ?></dd>
            <dt scope="row"><?= __('Modified') ?></dt>
            <dd><?= h($campanha->modified) ?></dd>
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
          <h3 class="box-title"><?= __('Comentario') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <?= $this->Text->autoParagraph($campanha->comentario); ?>
        </div>
      </div>
    </div>
  </div>
</section>
