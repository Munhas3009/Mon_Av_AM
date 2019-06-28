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
                            <?php echo $this->Form->control('unidade_id', ['options' => $unidades, 'empty' => true, 'label' => 'Unidade Sanitária'
                                , 'class' => 'form-control select2', 'style'=>'width: 100%;']); ?>
                            <span class="glyphicon glyphicon-home form-control-feedback"></span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group has-feedback">                
                            <?php echo $this->Form->control('user_id', ['options' => $users, 'empty' => true, 'label' => 'Utilizador'
                                , 'class' => 'form-control select2', 'style'=>'width: 100%;']); ?>
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
                            <?php echo $this->Form->control('unidade_sanitaria', ['label' => 'Quantidade aplicadas na US']); ?>
                            <span class="glyphicon glyphicon-alert form-control-feedback"></span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group has-feedback">                
                            <?php echo $this->Form->control('brigada_movel', ['label' => 'Quantidade aplicada por Brigadas Moveis']); ?>
                            <span class="glyphicon glyphicon-alert form-control-feedback"></span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group has-feedback">                
                            <?php echo $this->Form->control('agente_comun_saude', ['label' => 'Quantidade aplicada por Agentes Comunitários']); ?>
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
