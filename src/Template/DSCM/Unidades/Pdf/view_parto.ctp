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
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header">
                    <h6 class="box-title" align="center">Parto</h6>
                </div>
                <div class="box-body">

                    <?php if (!empty($unidade->partos)): ?>
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th scope="col" class="actions text-center"><?= __('Qd') ?></th>                                    
                                    <th scope="col" class="actions text-center"><?= __('Peso') ?></th>                                                                      
                                </tr>
                            </thead>
                            <?php foreach ($unidade->partos as $partos): ?>
                                <tr>
                                    <td><?= h($partos->id) ?></td>        
                                    <td><?= h($partos->peso) ?></td>       
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    <?php endif; ?>                    
                </div>
                <!--box-body-->
            </div>
            <!--box-->
        </div>
        <!-- /.col (right) -->
    </div>
    <!--row-->


    <footer>    
        <div class="col-md-6">
            <p align="left"> <?= __('Correio:') ?><b><?= h($unidade->email) ?></b></p>
        </div>        
    </footer>

</section>
