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
            <div class="box box-danger">
                <div class="box-header">
                    <h5 class="box-title" align="center">Campanhas</h5>
                </div>

                <div class="box-body">
                    <?php if (!empty($unidade->campanhas)): ?>
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th scope="col" class="actions text-center"><?= __('Qd') ?></th>                                    
                                    <th scope="col" class="actions text-center"><?= __('Dose') ?></th>                                    
                                </tr>
                            </thead>
                            <?php foreach ($unidade->campanhas as $campanhas): ?>
                                <tr>
                                    <td><?= h($campanhas->id) ?></td>                                    
                                    <td><?= h($campanhas->dose) ?></td>                                    
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    <?php endif; ?>
                </div>
                <!--box-body-->
            </div>
        </div>
        <!-- /.col (left) -->

        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header">
                    <h5 class="box-title" align="center">Parto</h5>
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

    <div class="row">
        <div class="col-md-12">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <i class="fa fa-share-alt"></i>
                    <h5 class="box-title" align="center"><?= __('Consultas') ?></h5>
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

<!-- daterange picker -->
<?php echo $this->Html->css('AdminLTE./bower_components/bootstrap-daterangepicker/daterangepicker', ['block' => 'css']); ?>
<!-- bootstrap datepicker -->
<?php echo $this->Html->css('AdminLTE./bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min', ['block' => 'css']); ?>
<!-- iCheck for checkboxes and radio inputs -->
<?php echo $this->Html->css('AdminLTE./plugins/iCheck/all', ['block' => 'css']); ?>
<!-- Bootstrap Color Picker -->
<?php echo $this->Html->css('AdminLTE./bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min', ['block' => 'css']); ?>
<!-- Bootstrap time Picker -->
<?php echo $this->Html->css('AdminLTE./plugins/timepicker/bootstrap-timepicker.min', ['block' => 'css']); ?>
<!-- Select2 -->
<?php echo $this->Html->css('AdminLTE./bower_components/select2/dist/css/select2.min', ['block' => 'css']); ?>

<!-- Select2 -->
<?php echo $this->Html->script('AdminLTE./bower_components/select2/dist/js/select2.full.min', ['block' => 'script']); ?>
<!-- InputMask -->
<?php echo $this->Html->script('AdminLTE./plugins/input-mask/jquery.inputmask', ['block' => 'script']); ?>
<?php echo $this->Html->script('AdminLTE./plugins/input-mask/jquery.inputmask.date.extensions', ['block' => 'script']); ?>
<?php echo $this->Html->script('AdminLTE./plugins/input-mask/jquery.inputmask.extensions', ['block' => 'script']); ?>
<!-- date-range-picker -->
<?php echo $this->Html->script('AdminLTE./bower_components/moment/min/moment.min', ['block' => 'script']); ?>
<?php echo $this->Html->script('AdminLTE./bower_components/bootstrap-daterangepicker/daterangepicker', ['block' => 'script']); ?>
<!-- bootstrap datepicker -->
<?php echo $this->Html->script('AdminLTE./bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min', ['block' => 'script']); ?>
<!-- bootstrap color picker -->
<?php echo $this->Html->script('AdminLTE./bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min', ['block' => 'script']); ?>
<!-- bootstrap time picker -->
<?php echo $this->Html->script('AdminLTE./plugins/timepicker/bootstrap-timepicker.min', ['block' => 'script']); ?>
<!-- iCheck 1.0.1 -->
<?php echo $this->Html->script('AdminLTE./plugins/iCheck/icheck.min', ['block' => 'script']); ?>

<?php $this->start('scriptBottom'); ?>
<script>
    $(function () {
        //Initialize Select2 Elements
        $('.select2').select2()

        //Datemask dd/mm/yyyy
        $('#datemask').inputmask('dd/mm/yyyy', {'placeholder': 'dd/mm/yyyy'})
        //Datemask2 mm/dd/yyyy
        $('#datemask2').inputmask('mm/dd/yyyy', {'placeholder': 'mm/dd/yyyy'})
        //Money Euro
        $('[data-mask]').inputmask()

        //Date range picker
        $('#reservation').daterangepicker()
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'})
        //Date range as a button
        $('#daterange-btn').daterangepicker(
                {
                    ranges: {
                        'Today': [moment(), moment()],
                        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'This Month': [moment().startOf('month'), moment().endOf('month')],
                        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                    },
                    startDate: moment().subtract(29, 'days'),
                    endDate: moment()
                },
                function (start, end) {
                    $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
                }
        )

        //Date picker
        $('#datepicker').datepicker({
            autoclose: true
        })

        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
            checkboxClass: 'icheckbox_minimal-blue',
            radioClass: 'iradio_minimal-blue'
        })
        //Red color scheme for iCheck
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
            checkboxClass: 'icheckbox_minimal-red',
            radioClass: 'iradio_minimal-red'
        })
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
            checkboxClass: 'icheckbox_flat-green',
            radioClass: 'iradio_flat-green'
        })

        //Colorpicker
        $('.my-colorpicker1').colorpicker()
        //color picker with addon
        $('.my-colorpicker2').colorpicker()

        //Timepicker
        $('.timepicker').timepicker({
            showInputs: false
        })
    })
</script>
<?php $this->end(); ?>