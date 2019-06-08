<ul class="sidebar-menu" data-widget="tree">
  <li class="header">MENU DE NAVEGAÇÃO </li>
  
  
  <li class="treeview">
    <a href="#"> 
      <i class="fa fa-laptop"></i>
      <span> Gestão do sistema </span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li><a href="<?php echo $this->Url->build('/users'); ?>"><i class="fa fa-circle-o"></i> Utilizadores </a></li>
      <li><a href="<?php echo $this->Url->build('/roles'); ?>"><i class="fa fa-circle-o"></i> Grupos </a></li>
      
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

  <li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Documentação</span></a></li>
  <li class="header">LABELS</li>

  <li><a href="<?php echo $this->Url->build('/pages/debug'); ?>"><i class="fa fa-bug"></i> <span>Debug</span></a></li>
  <li><a href="<?php echo $this->Url->build('/users/logout'); ?>"><i class="fa fa-power-off"></i> <span>Terminar sessão</a></li>
</ul>