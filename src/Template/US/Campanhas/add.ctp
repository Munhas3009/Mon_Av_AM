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
        <small>
            <?php echo __(''); ?>
            <i class="fa fa-plus-circle"></i>
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
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title"><?php echo __('Formulário'); ?></h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <?php echo $this->Form->create($campanha, ['role' => 'form']); ?>
                <div class="box-body">

                    <div class="col-md-6">
                        <div class="form-group has-feedback">                
                            <?php echo $this->Form->control('unidade_id', ['options' => $unidades, 'empty' => true, 'label' => 'Unidade Sanitária']); ?>
                            <span class="glyphicon glyphicon-home form-control-feedback"></span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group has-feedback">                
                            <?php echo $this->Form->control('user_id', ['options' => $users, 'empty' => true, 'label' => 'Utilizador']); ?>
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group has-feedback">                
                            <?php echo $this->Form->control('desc_campanha', ['label' => 'Descrição da campanha']); ?>
                            <span class="glyphicon glyphicon-subtitles form-control-feedback"></span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group has-feedback">                
                            <?php echo $this->Form->control('dose', ['label' => 'Número de doses']); ?>
                            <span class="glyphicon glyphicon-level-up form-control-feedback"></span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group has-feedback">                
                            <?php echo $this->Form->control('unidade_sanitaria', ['label' => 'Quantas aplicadas na US']); ?>
                            <span class="glyphicon glyphicon-alert form-control-feedback"></span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group has-feedback">                
                            <?php echo $this->Form->control('brigada_movel', ['label' => 'Quantas aplicadas por Brigadas Moveis']); ?>
                            <span class="glyphicon glyphicon-alert form-control-feedback"></span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group has-feedback">                
                            <?php echo $this->Form->control('agente_comun_saude', ['label' => 'Quantos aplicadas por Agentes Comunitários']); ?>
                            <span class="glyphicon glyphicon-alert form-control-feedback"></span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group has-feedback">                
                            <?php echo $this->Form->control('interv_idade', ['label' => 'Intervalo de idade']); ?>
                            <span class="glyphicon glyphicon-time form-control-feedback"></span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group has-feedback">                
                            <?php echo $this->Form->control('mulheres_p_parto', ['label' => 'Mulheres pos parto']); ?>
                            <span class="glyphicon glyphicon-queen form-control-feedback"></span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group has-feedback">                
                            <?php echo $this->Form->control('comentario', ['label' => 'Comentário']); ?>
                            <span class="glyphicon glyphicon-comment form-control-feedback"></span>
                        </div>
                    </div>
                    
                </div>
                <!-- /.box-body -->

                <?php echo $this->Form->submit(__('Salvar'), ['class' => 'btn btn-primary']); ?>

                <?php echo $this->Form->end(); ?>
            </div>
            <!-- /.box -->
        </div>
    </div>
    <!-- /.row -->
</section>
