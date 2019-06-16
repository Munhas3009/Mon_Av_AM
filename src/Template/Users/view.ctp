<section class="content-header">
  <h1>
    User
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
            <dd><?= h($user->name) ?></dd>
            <dt scope="row"><?= __('Apelido') ?></dt>
            <dd><?= h($user->apelido) ?></dd>
            <dt scope="row"><?= __('Email') ?></dt>
            <dd><?= h($user->email) ?></dd>
            <dt scope="row"><?= __('Username') ?></dt>
            <dd><?= h($user->username) ?></dd>
            <dt scope="row"><?= __('Password') ?></dt>
            <dd><?= h($user->password) ?></dd>
            <dt scope="row"><?= __('Passkey') ?></dt>
            <dd><?= h($user->passkey) ?></dd>
            <dt scope="row"><?= __('Photo') ?></dt>
            <dd><?= h($user->photo) ?></dd>
            <dt scope="row"><?= __('Photo Dir') ?></dt>
            <dd><?= h($user->photo_dir) ?></dd>
            <dt scope="row"><?= __('Role') ?></dt>
            <dd><?= $user->has('role') ? $this->Html->link($user->role->name, ['controller' => 'Roles', 'action' => 'view', $user->role->id]) : '' ?></dd>
            <dt scope="row"><?= __('Id') ?></dt>
            <dd><?= $this->Number->format($user->id) ?></dd>
            <dt scope="row"><?= __('Timeout') ?></dt>
            <dd><?= h($user->timeout) ?></dd>
            <dt scope="row"><?= __('Created') ?></dt>
            <dd><?= h($user->created) ?></dd>
            <dt scope="row"><?= __('Modified') ?></dt>
            <dd><?= h($user->modified) ?></dd>
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
          <h3 class="box-title"><?= __('Campanhas') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <?php if (!empty($user->campanhas)): ?>
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
              <?php foreach ($user->campanhas as $campanhas): ?>
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
          <?php if (!empty($user->tratamentos)): ?>
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
              <?php foreach ($user->tratamentos as $tratamentos): ?>
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
