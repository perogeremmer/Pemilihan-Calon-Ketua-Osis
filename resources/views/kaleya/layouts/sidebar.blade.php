<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p> {{ \Illuminate\Support\Facades\Session::get('name') }}
        </p>
      </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
      <li class="active treeview">
        <ul class="treeview-menu">
         <li class="active"><a href="{{ route('kaleya.home') }}"><i class="fa fa-circle-o"></i> Home</a></li>
         <li class="active"><a href="{{ route('acara.index') }}"><i class="fa fa-circle-o"></i> Acara</a></li>
         <li class="active"><a href="{{ route('pesan.index') }}"><i class="fa fa-envelope"></i> Pesan</a></li>
       </ul>
     </li>
   </ul>
 </section>
 <!-- /.sidebar -->
</aside>