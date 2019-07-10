<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<!-- Main content -->
<section class="content">

    <div class="row">
        <div class="box-body">                    
            <div class="col-md-6">
                <p align="left"><?= __('Nome da US:') ?> <b><?= h($unidade->name) ?></b></p>
                <p align="left"><?= __('NUIT:') ?> <b><?= h($unidade->nuit) ?></b></p>
            </div>
            <!--col-md-6-->
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <i class="fa fa-share-alt"></i>
                    <h6 class="box-title" align="center"><?= __('Consultas') ?></h6>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <?php if (!empty($unidade->tratamentos)): ?>
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th scope="col" class="actions text-center"><?= __('Qd') ?></th>       
                                    <th scope="col" class="actions text-center"><?= __('Esp.') ?></th>                                    
                                    <th scope="col" class="actions text-center"><?= __('Estado') ?></th>
                                    <th scope="col" class="actions text-center"><?= __('Diagnóstico') ?></th>
                                    <th scope="col" class="actions text-center"><?= __('Tratamento') ?></th>                                    

                                </tr>
                            </thead>
                            <?php foreach ($unidade->tratamentos as $tratamentos): ?>
                                <tr>
                                    <td><?= h($tratamentos->id) ?></td>
                                    <td><?= h($tratamentos->especialidade_id) ?></td>                                    
                                    <td><?= h($tratamentos->estado) ?></td>
                                    <td><?= h($tratamentos->diagnostico_id) ?></td>
                                    <td><?= h($tratamentos->tratamento) ?></td>                                    

                                </tr>
                            <?php endforeach; ?>
                        </table>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <footer>    
        <div class="col-md-6">
            <p align="left"> <?= __('Correio:') ?><b><?= h($unidade->email) ?></b></p>
        </div>        
    </footer>

</section>
