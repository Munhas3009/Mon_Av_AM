<ul class="sidebar-menu" data-widget="tree">
    <li class="header">PAINEL DE NAVEGAÇÃO</li>

    <li class="treeview">
        <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Gráfico</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="<?php echo $this->Url->build('/pages/charts/chartjs'); ?>"><i class="fa fa-circle-o"></i> ChartJS</a></li>
            <li><a href="<?php echo $this->Url->build('/pages/charts/morris'); ?>"><i class="fa fa-circle-o"></i> Morris</a></li>
            <li><a href="<?php echo $this->Url->build('/pages/charts/flot'); ?>"><i class="fa fa-circle-o"></i> Flot</a></li>
            <li><a href="<?php echo $this->Url->build('/pages/charts/inline'); ?>"><i class="fa fa-circle-o"></i> Inline charts</a></li>
        </ul>
    </li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-thermometer-3"></i><span>Campanha</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="<?php echo $this->Url->build('/us/campanhas/add'); ?>"><i class="fa fa-circle-o"></i> Registar</a></li>
            <li><a href="<?php echo $this->Url->build('/us/campanhas'); ?>"><i class="fa fa-circle-o"></i> Todas </a></li>

        </ul>
    </li>

    <li class="treeview">
        <a href="#">
            <i class="fa fa-support"></i> <span>Diagnóstico</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="<?php echo $this->Url->build('/us/diagnosticos/add'); ?>"><i class="fa fa-circle-o"></i> Registar </a></li>
            <li><a href="<?php echo $this->Url->build('/us/diagnosticos'); ?>"><i class="fa fa-circle-o"></i> Todos </a></li>
        </ul>
    </li>

    <li class="treeview">
        <a href="#">
            <i class="fa fa-user-circle-o"></i> <span> Paciente</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="<?php echo $this->Url->build('/us/pacientes/add'); ?>"><i class="fa fa-circle-o"></i> Registar </a></li>
            <li><a href="<?php echo $this->Url->build('/us/pacientes'); ?>"><i class="fa fa-circle-o"></i> Todos </a></li>

        </ul>
    </li>
    
    <li>
        <a href="<?php echo $this->Url->build('/pages/calendar'); ?>">
            <i class="fa fa-calendar"></i> <span>Calendário</span>
            <span class="pull-right-container">
                <small class="label pull-right bg-red">3</small>
                <small class="label pull-right bg-blue">17</small>
            </span>
        </a>
    </li>
    <li>
        <a href="<?php echo $this->Url->build('/pages/mailbox/mailbox'); ?>">
            <i class="fa fa-envelope"></i> <span>Correio</span>
            <span class="pull-right-container">
                <small class="label pull-right bg-yellow">12</small>
                <small class="label pull-right bg-green">16</small>
                <small class="label pull-right bg-red">5</small>
            </span>
        </a>
    </li>

    <li class="header">LABELS</li>
    <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Importante</span></a></li>
    <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Atenção</span></a></li>
    <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Informação</span></a></li>
    <li><a href="<?php echo $this->Url->build('/users/logout '); ?>"><i class="fa fa-power-off"></i> <span>Terminar sessão</a></li>
</ul>