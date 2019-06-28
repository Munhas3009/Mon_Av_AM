<section class="content-header">
    <h1>
        Paciente
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
                        <dd><?= $this->Number->format($paciente->id) ?></dd>

                        <dt scope="row"><?= __('Nome completo') ?></dt>
                        <dd><?= h($paciente->full_name) ?></dd>
                        <dt scope="row"><?= __('Área de trabalho') ?></dt>
                        <dd><?= h($paciente->area_trabalho) ?></dd>
                        <dt scope="row"><?= __('Residência') ?></dt>
                        <dd><?= h($paciente->residencia) ?></dd>
                        <dt scope="row"><?= __('Genero') ?></dt>
                        <dd><?= h($paciente->genero) ?></dd>

                        <dt scope="row"><?= __('Idade') ?></dt>
                        <dd><?= $this->Number->format($paciente->idade) ?></dd>

                        <dt scope="row"><?= __('Contacto') ?></dt>
                        <dd><?= $this->Number->format($paciente->contacto) ?></dd>
                        <dt scope="row"><?= __('Entrada') ?></dt>
                        <dd><?= h($paciente->created) ?></dd>
                        <dt scope="row"><?= __('Actualizado') ?></dt>
                        <dd><?= h($paciente->modified) ?></dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-12">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <i class="fa fa-share-alt"></i>
                    <h3 class="box-title"><?= __('Partos') ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <?php if (!empty($paciente->partos)): ?>
                        <table class="table table-hover">
                            <tr>
                                <th scope="col"><?= __('Id') ?></th>
                                <th scope="col"><?= __('Unidade Id') ?></th>
                                <th scope="col"><?= __('User Id') ?></th>
                                <th scope="col"><?= __('Paciente Id') ?></th>
                                <th scope="col"><?= __('Tipo') ?></th>
                                <th scope="col"><?= __('Peso') ?></th>
                                <th scope="col"><?= __('Obs') ?></th>
                                <th scope="col"><?= __('Created') ?></th>
                                <th scope="col"><?= __('Modified') ?></th>
                                <th scope="col" class="actions text-center"><?= __('Actions') ?></th>
                            </tr>
                            <?php foreach ($paciente->partos as $partos): ?>
                                <tr>
                                    <td><?= h($partos->id) ?></td>
                                    <td><?= h($partos->unidade_id) ?></td>
                                    <td><?= h($partos->user_id) ?></td>
                                    <td><?= h($partos->paciente_id) ?></td>
                                    <td><?= h($partos->tipo) ?></td>
                                    <td><?= h($partos->peso) ?></td>
                                    <td><?= h($partos->obs) ?></td>
                                    <td><?= h($partos->created) ?></td>
                                    <td><?= h($partos->modified) ?></td>
                                    <td class="actions text-right">
                                        <?= $this->Html->link(__('View'), ['controller' => 'Partos', 'action' => 'view', $partos->id], ['class' => 'btn btn-info btn-xs']) ?>
                                        <?= $this->Html->link(__('Edit'), ['controller' => 'Partos', 'action' => 'edit', $partos->id], ['class' => 'btn btn-warning btn-xs']) ?>
                                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Partos', 'action' => 'delete', $partos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $partos->id), 'class' => 'btn btn-danger btn-xs']) ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

      <div class="row">
        <div class="col-md-12">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <i class="fa fa-share-alt"></i>
                    <h3 class="box-title"><?= __('Tratamentos') ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <?php if (!empty($paciente->tratamentos)): ?>

                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th scope="col" class="actions text-center"><?= __('Id') ?></th>
                                <th scope="col" class="actions text-center"><?= __('US') ?></th>
                                <!--<th scope="col"><?= __('Util') ?></th>-->
                                <th scope="col" class="actions text-center"><?= __('Especial') ?></th>
                                <!--<th scope="col"><?= __('Paciente Id') ?></th>-->
                                <th scope="col" class="actions text-center"><?= __('Estado') ?></th>
                                <th scope="col" class="actions text-center"><?= __('Diagnóstico') ?></th>
                                <th scope="col" class="actions text-center"><?= __('Tratamento') ?></th>
                                <!--<th scope="col"><?= __('Svacinacao') ?></th>-->
                                <th scope="col" class="actions text-center"><?= __('Observações') ?></th>
                                <!--<th scope="col"><?= __('Contador') ?></th>-->
                                <th scope="col" class="actions text-center"><?= __('Registado') ?></th>
                                <th scope="col" class="actions text-center"><?= __('Actualizado') ?></th>
                                <!--<th scope="col" class="actions text-center"><?= __('Actions') ?></th>-->
                            </tr>
                            </thead>
                            <?php foreach ($paciente->tratamentos as $tratamentos): ?>
                                <tr>
                                    <td><?= h($tratamentos->id) ?></td>
                                    <td><?= h($tratamentos->unidade_id) ?></td>
                                    <td><?= h($tratamentos->user_id) ?></td>
                                    <td><?= h($tratamentos->especialidade_id) ?></td>
                                    <!--<td><?= h($tratamentos->paciente_id) ?></td>-->
                                    <td><?= h($tratamentos->estado) ?></td>
                                    <td><?= h($tratamentos->diagnostico_id) ?></td>
                                    <td><?= h($tratamentos->tratamento) ?></td>
                                    <!--<td><?= h($tratamentos->svacinacao) ?></td>-->
                                    <td><?= h($tratamentos->obs) ?></td>
                                    <!--<td><?= h($tratamentos->contador) ?></td>-->
                                    <td><?= h($tratamentos->created) ?></td>
                                    <td><?= h($tratamentos->modified) ?></td>
<!--                                    <td class="actions text-right">
                                        <?= $this->Html->link(__('View'), ['controller' => 'Tratamentos', 'action' => 'view', $tratamentos->id], ['class' => 'btn btn-info btn-xs']) ?>
                                        <?= $this->Html->link(__('Edit'), ['controller' => 'Tratamentos', 'action' => 'edit', $tratamentos->id], ['class' => 'btn btn-warning btn-xs']) ?>
                                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tratamentos', 'action' => 'delete', $tratamentos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tratamentos->id), 'class' => 'btn btn-danger btn-xs']) ?>
                                    </td>-->
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
