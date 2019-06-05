<section class="content-header">
  <h1>
    Unidade
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
            <dd><?= h($unidade->name) ?></dd>
            <dt scope="row"><?= __('Slogan') ?></dt>
            <dd><?= h($unidade->slogan) ?></dd>
            <dt scope="row"><?= __('Nuit') ?></dt>
            <dd><?= h($unidade->nuit) ?></dd>
            <dt scope="row"><?= __('Email') ?></dt>
            <dd><?= h($unidade->email) ?></dd>
            <dt scope="row"><?= __('Classificacao') ?></dt>
            <dd><?= $unidade->has('classificacao') ? $this->Html->link($unidade->classificacao->name, ['controller' => 'Classificacaos', 'action' => 'view', $unidade->classificacao->id]) : '' ?></dd>
            <dt scope="row"><?= __('Distrito') ?></dt>
            <dd><?= $unidade->has('distrito') ? $this->Html->link($unidade->distrito->name, ['controller' => 'Distritos', 'action' => 'view', $unidade->distrito->id]) : '' ?></dd>
            <dt scope="row"><?= __('Id') ?></dt>
            <dd><?= $this->Number->format($unidade->id) ?></dd>
            <dt scope="row"><?= __('Numero Camas') ?></dt>
            <dd><?= $this->Number->format($unidade->numero_camas) ?></dd>
            <dt scope="row"><?= __('Data Fundacao') ?></dt>
            <dd><?= h($unidade->data_fundacao) ?></dd>
            <dt scope="row"><?= __('Created') ?></dt>
            <dd><?= h($unidade->created) ?></dd>
            <dt scope="row"><?= __('Modified') ?></dt>
            <dd><?= h($unidade->modified) ?></dd>
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
          <h3 class="box-title"><?= __('Endereco') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <?= $this->Text->autoParagraph($unidade->endereco); ?>
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
            <?= $this->Text->autoParagraph($unidade->comentarios); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-share-alt"></i>
          <h3 class="box-title"><?= __('Campanhas') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <?php if (!empty($unidade->campanhas)): ?>
          <table class="table table-hover">
              <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('Unidade Id') ?></th>
                    <th scope="col"><?= __('User Id') ?></th>
                    <th scope="col"><?= __('Desc Campanha') ?></th>
                    <th scope="col"><?= __('Dose') ?></th>
                    <th scope="col"><?= __('Unidade Sanitaria') ?></th>
                    <th scope="col"><?= __('Brigada Movel') ?></th>
                    <th scope="col"><?= __('Agente Comun Saude') ?></th>
                    <th scope="col"><?= __('Interv Idade') ?></th>
                    <th scope="col"><?= __('Mulheres P Parto') ?></th>
                    <th scope="col"><?= __('Comentario') ?></th>
                    <th scope="col"><?= __('Created') ?></th>
                    <th scope="col"><?= __('Modified') ?></th>
                    <th scope="col" class="actions text-center"><?= __('Actions') ?></th>
              </tr>
              <?php foreach ($unidade->campanhas as $campanhas): ?>
              <tr>
                    <td><?= h($campanhas->id) ?></td>
                    <td><?= h($campanhas->unidade_id) ?></td>
                    <td><?= h($campanhas->user_id) ?></td>
                    <td><?= h($campanhas->desc_campanha) ?></td>
                    <td><?= h($campanhas->dose) ?></td>
                    <td><?= h($campanhas->unidade_sanitaria) ?></td>
                    <td><?= h($campanhas->brigada_movel) ?></td>
                    <td><?= h($campanhas->agente_comun_saude) ?></td>
                    <td><?= h($campanhas->interv_idade) ?></td>
                    <td><?= h($campanhas->mulheres_p_parto) ?></td>
                    <td><?= h($campanhas->comentario) ?></td>
                    <td><?= h($campanhas->created) ?></td>
                    <td><?= h($campanhas->modified) ?></td>
                      <td class="actions text-right">
                      <?= $this->Html->link(__('View'), ['controller' => 'Campanhas', 'action' => 'view', $campanhas->id], ['class'=>'btn btn-info btn-xs']) ?>
                      <?= $this->Html->link(__('Edit'), ['controller' => 'Campanhas', 'action' => 'edit', $campanhas->id], ['class'=>'btn btn-warning btn-xs']) ?>
                      <?= $this->Form->postLink(__('Delete'), ['controller' => 'Campanhas', 'action' => 'delete', $campanhas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $campanhas->id), 'class'=>'btn btn-danger btn-xs']) ?>
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
          <?php if (!empty($unidade->tratamentos)): ?>
          <table class="table table-hover">
              <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('Unidade Id') ?></th>
                    <th scope="col"><?= __('User Id') ?></th>
                    <th scope="col"><?= __('Especialidade Id') ?></th>
                    <th scope="col"><?= __('Paciente Id') ?></th>
                    <th scope="col"><?= __('Contador') ?></th>
                    <th scope="col"><?= __('Estado') ?></th>
                    <th scope="col"><?= __('Diagnostico Id') ?></th>
                    <th scope="col"><?= __('Tratamento') ?></th>
                    <th scope="col"><?= __('Svacinacao') ?></th>
                    <th scope="col"><?= __('Obs') ?></th>
                    <th scope="col"><?= __('Created') ?></th>
                    <th scope="col"><?= __('Modified') ?></th>
                    <th scope="col" class="actions text-center"><?= __('Actions') ?></th>
              </tr>
              <?php foreach ($unidade->tratamentos as $tratamentos): ?>
              <tr>
                    <td><?= h($tratamentos->id) ?></td>
                    <td><?= h($tratamentos->unidade_id) ?></td>
                    <td><?= h($tratamentos->user_id) ?></td>
                    <td><?= h($tratamentos->especialidade_id) ?></td>
                    <td><?= h($tratamentos->paciente_id) ?></td>
                    <td><?= h($tratamentos->contador) ?></td>
                    <td><?= h($tratamentos->estado) ?></td>
                    <td><?= h($tratamentos->diagnostico_id) ?></td>
                    <td><?= h($tratamentos->tratamento) ?></td>
                    <td><?= h($tratamentos->svacinacao) ?></td>
                    <td><?= h($tratamentos->obs) ?></td>
                    <td><?= h($tratamentos->created) ?></td>
                    <td><?= h($tratamentos->modified) ?></td>
                      <td class="actions text-right">
                      <?= $this->Html->link(__('View'), ['controller' => 'Tratamentos', 'action' => 'view', $tratamentos->id], ['class'=>'btn btn-info btn-xs']) ?>
                      <?= $this->Html->link(__('Edit'), ['controller' => 'Tratamentos', 'action' => 'edit', $tratamentos->id], ['class'=>'btn btn-warning btn-xs']) ?>
                      <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tratamentos', 'action' => 'delete', $tratamentos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tratamentos->id), 'class'=>'btn btn-danger btn-xs']) ?>
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
