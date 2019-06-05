<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Campanha $campanha
 */
?>
<!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Campanha
      <small><?php echo __('Add'); ?></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo $this->Url->build(['action' => 'index']); ?>"><i class="fa fa-dashboard"></i> <?php echo __('Home'); ?></a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title"><?php echo __('Form'); ?></h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <?php echo $this->Form->create($campanha, ['role' => 'form']); ?>
            <div class="box-body">
              <?php
                echo $this->Form->control('unidade_id', ['options' => $unidades]);
                echo $this->Form->control('user_id', ['options' => $users]);
                echo $this->Form->control('desc_campanha');
                echo $this->Form->control('dose');
                echo $this->Form->control('unidade_sanitaria');
                echo $this->Form->control('brigada_movel');
                echo $this->Form->control('agente_comun_saude');
                echo $this->Form->control('interv_idade');
                echo $this->Form->control('mulheres_p_parto');
                echo $this->Form->control('comentario');
              ?>
            </div>
            <!-- /.box-body -->

          <?php echo $this->Form->submit(__('Submit')); ?>

          <?php echo $this->Form->end(); ?>
        </div>
        <!-- /.box -->
      </div>
  </div>
  <!-- /.row -->
</section>
