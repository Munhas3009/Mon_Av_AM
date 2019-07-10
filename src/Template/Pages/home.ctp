<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Dashboard
        <small>Painel de controlo</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3>150</h3>

                    <p>Consultas</p>
                </div>
                <div class="icon">
                    <i class="ion ion-medkit"></i>
                </div>
                <a href="<?php echo $this->Url->build('/medico/tratamentos'); ?>" class="small-box-footer">Mais info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                    <h3>53<sup style="font-size: 20px">%</sup></h3>

                    <p>Pacientes</p>
                </div>
                <div class="icon">
                    <i class="ion ion-ios-people"></i>
                </div>
                <a href="<?php echo $this->Url->build('/us/pacientes'); ?>" class="small-box-footer">Mais info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
                <div class="inner">
                   
                    <h3>8</h3>

                    <p>Unidades Sanitárias</p>
                </div>
                <div class="icon">
                    <i class="ion ion-ios-home"></i>
                </div>
                <a href="<?php echo $this->Url->build('/dscm/unidades'); ?>" class="small-box-footer">Mais info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
                <div class="inner">
                    <h3>
                        
                       <?php echo 8 ?>
                        
                    </h3>

                    <p>Utilizadores</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="<?php echo $this->Url->build('/users'); ?>" class="small-box-footer">Mais info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
    </div>
    <!-- /.row -->
    <!-- Main row -->
    <div class="row">
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="nav-tabs-custom">
                <!-- Tabs within a box -->
                <ul class="nav nav-tabs pull-right">
                    <li class="active"><a href="#revenue-chart" data-toggle="tab">Area</a></li>
                    <li><a href="#sales-chart" data-toggle="tab">Donut</a></li>
                    <li class="pull-left header"><i class="fa fa-inbox"></i>Consultas</li>
                </ul>
                <div class="tab-content no-padding">
                    <!-- Morris chart - Sales -->
                    <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;"></div>
                    <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;"></div>
                </div>
            </div>
           
            <!-- quick email widget -->
            <div class="box box-info">
                <div class="box-header">
                    <i class="fa fa-envelope"></i>

                    <h3 class="box-title">Nota de Correio</h3>
                    <!-- tools box -->
                    <div class="pull-right box-tools">
                        <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                                title="Remove">
                            <i class="fa fa-times"></i></button>
                    </div>
                    <!-- /. tools -->
                </div>
                <div class="box-body">
                    <form action="#" method="post">
                        <div class="form-group">
                            <input type="email" class="form-control" name="emailto" placeholder="Email to:">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" placeholder="Subject">
                        </div>
                        <div>
                            <textarea class="textarea" placeholder="Message"
                                      style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                        </div>
                    </form>
                </div>
                <div class="box-footer clearfix">
                    <button type="button" class="pull-right btn btn-default" id="sendEmail">Enviar
                        <i class="fa fa-arrow-circle-right"></i></button>
                </div>
            </div>

        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable">

            <!-- Map box -->
            <div class="box box-solid bg-light-blue-gradient">
                <div class="box-header">
                    <!-- tools box -->
                    <div class="pull-right box-tools">
                        <button type="button" class="btn btn-primary btn-sm daterange pull-right" data-toggle="tooltip"
                                title="Date range">
                            <i class="fa fa-calendar"></i></button>
                        <button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse"
                                data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                            <i class="fa fa-minus"></i></button>
                    </div>
                    <!-- /. tools -->

                    <i class="fa fa-map-marker"></i>

                    <h3 class="box-title">
                        Visitantes
                    </h3>
                </div>
                <div class="box-body">
                    <div id="world-map" style="height: 250px; width: 100%;"></div>
                </div>
                <!-- /.box-body-->
                <div class="box-footer no-border">
                    <div class="row">
                        <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                            <div id="sparkline-1"></div>
                            <div class="knob-label">Visitantes</div>
                        </div>
                        <!-- ./col -->
                        <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                            <div id="sparkline-2"></div>
                            <div class="knob-label">Em linha</div>
                        </div>
                        <!-- ./col -->
                        <div class="col-xs-4 text-center">
                            <div id="sparkline-3"></div>
                            <div class="knob-label">Desligados</div>
                        </div>
                        <!-- ./col -->
                    </div>
                    <!-- /.row -->
                </div>
            </div>
            <!-- /.box -->

            <!-- solid sales graph -->
            <div class="box box-solid bg-teal-gradient">
                <div class="box-header">
                    <i class="fa fa-th"></i>

                    <h3 class="box-title">Gráfico de partos</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn bg-teal btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn bg-teal btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="box-body border-radius-none">
                    <div class="chart" id="line-chart" style="height: 250px;"></div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer no-border">
                    <div class="row">
                        <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                            <input type="text" class="knob" data-readonly="true" value="20" data-width="60" data-height="60"
                                   data-fgColor="#39CCCC">

                            <div class="knob-label">Ordem de Notificações</div>
                        </div>
                        <!-- ./col -->
                        <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                            <input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60"
                                   data-fgColor="#39CCCC">

                            <div class="knob-label">Em linha</div>
                        </div>
                        <!-- ./col -->
                        <div class="col-xs-4 text-center">
                            <input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60"
                                   data-fgColor="#39CCCC">

                            <div class="knob-label">In-Store</div>
                        </div>
                        <!-- ./col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.box-footer -->
            </div>
            <!-- /.box -->

            <!-- Calendar -->
            <div class="box box-solid bg-green-gradient">
                <div class="box-header">
                    <i class="fa fa-calendar"></i>

                    <h3 class="box-title">Calendário</h3>
                    <!-- tools box -->
                    <div class="pull-right box-tools">
                        <!-- button with a dropdown -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-bars"></i></button>
                            <ul class="dropdown-menu pull-right" role="menu">
                                <li><a href="#">Adicionar evento</a></li>
                                <li><a href="#">Remover evento</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Visualizar calendário</a></li>
                            </ul>
                        </div>
                        <button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                        </button>
                    </div>
                    <!-- /. tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <!--The calendar -->
                    <div id="calendar" style="width: 100%"></div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-black">
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- Progress bars -->
                            <div class="clearfix">
                                <span class="pull-left">Task #1</span>
                                <small class="pull-right">90%</small>
                            </div>
                            <div class="progress xs">
                                <div class="progress-bar progress-bar-green" style="width: 90%;"></div>
                            </div>

                            <div class="clearfix">
                                <span class="pull-left">Task #2</span>
                                <small class="pull-right">70%</small>
                            </div>
                            <div class="progress xs">
                                <div class="progress-bar progress-bar-green" style="width: 70%;"></div>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                            <div class="clearfix">
                                <span class="pull-left">Task #3</span>
                                <small class="pull-right">60%</small>
                            </div>
                            <div class="progress xs">
                                <div class="progress-bar progress-bar-green" style="width: 60%;"></div>
                            </div>

                            <div class="clearfix">
                                <span class="pull-left">Task #4</span>
                                <small class="pull-right">40%</small>
                            </div>
                            <div class="progress xs">
                                <div class="progress-bar progress-bar-green" style="width: 40%;"></div>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
            </div>
            <!-- /.box -->

        </section>
        <!-- right col -->
    </div>
    <!-- /.row (main row) -->

</section>
<!-- /.content -->


<!-- Morris chart -->
<?php echo $this->Html->css('AdminLTE./bower_components/morris.js/morris', ['block' => 'css']); ?>
<!-- jvectormap -->
<?php echo $this->Html->css('AdminLTE./bower_components/jvectormap/jquery-jvectormap', ['block' => 'css']); ?>
<!-- Date Picker -->
<?php echo $this->Html->css('AdminLTE./bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min', ['block' => 'css']); ?>
<!-- Daterange picker -->
<?php echo $this->Html->css('AdminLTE./bower_components/bootstrap-daterangepicker/daterangepicker', ['block' => 'css']); ?>
<!-- bootstrap wysihtml5 - text editor -->
<?php echo $this->Html->css('AdminLTE./plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min', ['block' => 'css']); ?>

<!-- jQuery UI 1.11.4 -->
<?php echo $this->Html->script('AdminLTE./bower_components/jquery-ui/jquery-ui.min', ['block' => 'script']); ?>
<!-- Morris.js charts -->
<?php echo $this->Html->script('AdminLTE./bower_components/raphael/raphael.min', ['block' => 'script']); ?>
<?php echo $this->Html->script('AdminLTE./bower_components/morris.js/morris.min', ['block' => 'script']); ?>
<!-- Sparkline -->
<?php echo $this->Html->script('AdminLTE./bower_components/jquery-sparkline/dist/jquery.sparkline.min', ['block' => 'script']); ?>
<!-- jvectormap -->
<?php echo $this->Html->script('AdminLTE./plugins/jvectormap/jquery-jvectormap-1.2.2.min', ['block' => 'script']); ?>
<?php echo $this->Html->script('AdminLTE./plugins/jvectormap/jquery-jvectormap-world-mill-en', ['block' => 'script']); ?>
<!-- jQuery Knob Chart -->
<?php echo $this->Html->script('AdminLTE./bower_components/jquery-knob/dist/jquery.knob.min', ['block' => 'script']); ?>
<!-- daterangepicker -->
<?php echo $this->Html->script('AdminLTE./bower_components/moment/min/moment.min', ['block' => 'script']); ?>
<?php echo $this->Html->script('AdminLTE./bower_components/bootstrap-daterangepicker/daterangepicker', ['block' => 'script']); ?>
<!-- datepicker -->
<?php echo $this->Html->script('AdminLTE./bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min', ['block' => 'script']); ?>
<!-- Bootstrap WYSIHTML5 -->
<?php echo $this->Html->script('AdminLTE./plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min', ['block' => 'script']); ?>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<?php echo $this->Html->script('AdminLTE.pages/dashboard', ['block' => 'script']); ?>
<!-- AdminLTE for demo purposes -->
<?php echo $this->Html->script('AdminLTE.demo', ['block' => 'script']); ?>

<?php $this->start('scriptBottom'); ?>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<?php $this->end(); ?>
