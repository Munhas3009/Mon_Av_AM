<!-- Content Header (Page header) -->
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h5 class="box-title" align="center"><?php echo __('Campanha Realizada'); ?></h5>

                    <div class="box-body table-responsive no-padding">

                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th scope="col" class="actions text-center"><?= $this->Paginator->sort('id') ?></th>
                                    <th scope="col" class="actions text-center"><?= $this->Paginator->sort('US') ?></th>
                                    <th scope="col" class="actions text-center"><?= $this->Paginator->sort('técnico ') ?></th>
                                    <th scope="col" class="actions text-center"><?= $this->Paginator->sort('Descrição') ?></th>
                                    <th scope="col" class="actions text-center"><?= $this->Paginator->sort('Nº dose') ?></th>
                                    <th scope="col" class="actions text-center"><?= $this->Paginator->sort('US') ?></th>
                                    <th scope="col" class="actions text-center"><?= $this->Paginator->sort('BM') ?></th>
                                    <th scope="col" class="actions text-center"><?= $this->Paginator->sort('ACS') ?></th>
                                    <th scope="col" class="actions text-center"><?= $this->Paginator->sort('Idade') ?></th>
                                    <th scope="col" class="actions text-center"><?= $this->Paginator->sort('MPP') ?></th>
                                    <th scope="col" class="actions text-center"><?= $this->Paginator->sort('registado') ?></th>
                                    <th scope="col" class="actions text-center"><?= $this->Paginator->sort('Actualizado') ?></th>

                                </tr>
                            </thead>
                            <tbody>                            
                                <tr>
                                    <td><?= $this->Number->format($campanha->id) ?></td>
                                    <td><?= $campanha->has('unidade') ? $this->Html->link($campanha->unidade->name, ['controller' => 'Unidades', 'action' => 'view', $campanha->unidade->id]) : '' ?></td>
                                    <td><?= $campanha->has('user') ? $this->Html->link($campanha->user->name, ['controller' => 'Users', 'action' => 'view', $campanha->user->id]) : '' ?></td>
                                    <td><?= h($campanha->desc_campanha) ?></td>
                                    <td><?= $this->Number->format($campanha->dose) ?></td>
                                    <td><?= $this->Number->format($campanha->unidade_sanitaria) ?></td>
                                    <td><?= $this->Number->format($campanha->brigada_movel) ?></td>
                                    <td><?= $this->Number->format($campanha->agente_comun_saude) ?></td>
                                    <td><?= h($campanha->interv_idade) ?></td>
                                    <td><?= $this->Number->format($campanha->mulheres_p_parto) ?></td>
                                    <td><?= h($campanha->created) ?></td>
                                    <td><?= h($campanha->modified) ?></td>                                    
                                </tr>                           
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>
</section>
