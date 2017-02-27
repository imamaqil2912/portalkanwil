<div class="user-panel">
    <div class="pull-left image">
        <img src="<?php echo base_url()?>assets/img/user.png" class="img-circle" alt="User Image">
    </div>
    <div class="pull-left info">
        <p><?php echo $this->ion_auth->user()->row()->username?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
    </div>
</div>
      <!-- search form -->
<form action="#" method="get" class="sidebar-form">
<div class="input-group">
    <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
        <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
        </button>
        </span>
</div>
</form>
<!-- /.search form -->
<!-- sidebar menu: : style can be found in sidebar.less -->
<?php
/// menu untuk administrator
if($this->ion_auth->is_admin())
{
?>
    <ul class="sidebar-menu">
<li class="header">MENU ADMINISTRATOR</li>
    <li class="active">
        <a href="#">
            <i class="fa fa-home"></i> <span>Beranda</span>
        </a>
    </li>
    <li class="treeview">
        <a href="#">
        <i class="fa fa-wrench"></i>
        <span>Setting</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Sinkronasi Data STKAA</a></li>
            <li><a href="<?php echo site_url('users') ?>"><i class="fa fa-circle-o"></i> Administrasi User</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Administrasi Link</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Administrasi Pengumuman</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Administrasi Software & Driver</a></li>
        </ul>
    </li>
        <li class="treeview">
        <a href="#">
        <i class="fa fa-refresh"></i>
        <span>Update Data</span>
        <span class="pull-right-container">
            <span class="fa fa-angle-left pull-right"></span>
        </span>
        </a>
        <ul class="treeview-menu">
        <li><a href="pages/layout/top-nav.html"><i class="fa fa-line-chart"></i>Update Data Penerimaan</a></li>
        <li><a href="pages/layout/boxed.html"><i class="fa fa-street-view"></i>Update Data Kepatuhan</a></li>
        <li><a href="pages/layout/fixed.html"><i class="fa  fa-file-text-o"></i>Update Data STP</a></li>
        <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-check-square-o"></i> Update Data IKU</a></li>
        </ul>
    </li>
        <li class="treeview">
        <a href="#">
        <i class="fa fa-exchange"></i>
        <span>Monitoring</span>
        <span class="pull-right-container">
            <span class="fa fa-angle-left pull-right"></span>
        </span>
        </a>
        <ul class="treeview-menu">
        <li><a href="pages/layout/top-nav.html"><i class="fa fa-bar-chart"></i>Pengawasan Rutin</a></li>
        <li><a href="pages/layout/boxed.html"><i class="fa fa-pie-chart"></i>Pengawasan Non Rutin</a></li>
        <li><a href="pages/layout/fixed.html"><i class="fa fa-tags"></i>Pengawasan Data Eksternal</a></li>
        </ul>
    </li>
<?php
}else{
    /// menu untuk users
?>
    <li class="treeview">
        <a href="#">
        <i class="fa fa-exchange"></i>
        <span>Monitoring</span>
        <span class="pull-right-container">
            <span class="fa fa-angle-left pull-right"></span>
        </span>
        </a>
        <ul class="treeview-menu">
        <li><a href="pages/layout/top-nav.html"><i class="fa fa-bar-chart"></i>Pengawasan Rutin</a></li>
        <li><a href="pages/layout/boxed.html"><i class="fa fa-pie-chart"></i>Pengawasan Non Rutin</a></li>
        <li><a href="pages/layout/fixed.html"><i class="fa fa-tags"></i>Pengawasan Data Eksternal</a></li>
        </ul>
    </li>
<?php
}
?>
</ul>