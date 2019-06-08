<section class="content-header">
    <h1>
        Campanha
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
                        <dd><?= $this->Number->format($campanha->id) ?></dd>

                        <dt scope="row"><?= __('Unidade Sanitária') ?></dt>
                        <dd><?= $campanha->has('unidade') ? $this->Html->link($campanha->unidade->name, ['controller' => 'Unidades', 'action' => 'view', $campanha->unidade->id]) : '' ?></dd>
                        <dt scope="row"><?= __('Utilizador') ?></dt>
                        <dd><?= $campanha->has('user') ? $this->Html->link($campanha->user->name, ['controller' => 'Users', 'action' => 'view', $campanha->user->id]) : '' ?></dd>
                        <dt scope="row"><?= __('Descrição da Campanha') ?></dt>
                        <dd><?= h($campanha->desc_campanha) ?></dd>
                        <dt scope="row"><?= __('Intervalo de Idade') ?></dt>
                        <dd><?= h($campanha->interv_idade) ?></dd>

                        <dt scope="row"><?= __('Nº de Doses') ?></dt>
                        <dd><?= $this->Number->format($campanha->dose) ?></dd>
                        <dt scope="row"><?= __('Quantidade admin na US') ?></dt>
                        <dd><?= $this->Number->format($campanha->unidade_sanitaria) ?></dd>
                        <dt scope="row"><?= __('Quantidade admin por BM') ?></dt>
                        <dd><?= $this->Number->format($campanha->brigada_movel) ?></dd>
                        <dt scope="row"><?= __('Quantidade admin por ACS') ?></dt>
                        <dd><?= $this->Number->format($campanha->agente_comun_saude) ?></dd>
                        <dt scope="row"><?= __('Quantidade admin a MPP') ?></dt>
                        <dd><?= $this->Number->format($campanha->mulheres_p_parto) ?></dd>
                        <dt scope="row"><?= __('Criado') ?></dt>
                        <dd><?= h($campanha->created) ?></dd>
                        <dt scope="row"><?= __('Actualizado') ?></dt>
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
                    <h3 class="box-title"><?= __('Comentário') ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <?= $this->Text->autoParagraph($campanha->comentario); ?>
                </div>
            </div>
        </div>
    </div>
</section>
