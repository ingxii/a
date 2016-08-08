<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>优乐网 | Data Tables</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">-->
    <link rel="stylesheet" href="https://cdn.bootcss.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <!--<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">-->
    <link rel="stylesheet" href="https://cdn.bootcss.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- jQuery 2.1.4 -->
    <script src="../../plugins/jQuery/jQuery-2.1.4.min.js"></script>
</head>

<body class="hold-transition skin-blue-light sidebar-mini">
    <div class="wrapper">

        <header class="main-header">
            <!-- Logo -->
            <a href="/admin" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini">YL</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>优乐网</b>.com</span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope-o"></i>
                                <span class="label label-success">4</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 4 messages</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li>
                                            <!-- start message -->
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                                </div>
                                                <h4>                            Support Team                            <small><i class="fa fa-clock-o"></i> 5 mins</small>
                          </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <!-- end message -->
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="../../dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                                                </div>
                                                <h4>                            AdminLTE Design Team                            <small><i class="fa fa-clock-o"></i> 2 hours</small>
                          </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="../../dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                                                </div>
                                                <h4>                            Developers                            <small><i class="fa fa-clock-o"></i> Today</small>
                          </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">See All Messages</a></li>
                            </ul>
                        </li>

                        <!-- Notifications: style can be found in dropdown.less -->
                        <li class="dropdown notifications-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-bell-o"></i>
                                <span class="label label-warning">10</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 10 notifications</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the page and may cause design problems
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-users text-red"></i> 5 new members joined
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-user text-red"></i> You changed your username
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">View all</a></li>
                            </ul>
                        </li>

                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="../../dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                                <span class="hidden-xs">admin</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                    <p>
                                        admin - Web Developer
                                        <small>Member since Nov. 2012</small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <li class="user-body">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Followers</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Sales</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Friends</a>
                                    </div>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="/auth/logout" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>

                        <!-- Control Sidebar Toggle Button -->
                        <li>
                            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                        </li>

                    </ul>
                </div>
            </nav>
        </header>



        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p>admin</p>
                        <a href="#"><i class="fa fa-circle text-success"></i> 超级管理员</a>
                    </div>
                </div>
                <!-- search form -->
                <form action="#" method="get" class="sidebar-form">
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
                    </div>
                </form>
                <!-- /.search form -->
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu">
                    <li class="header">NAVIGATION</li>
                    <li class="treeview @if(isset($type) && $type=='a') active @endif">
                        <a href="#">
                            <i class="fa fa-dashboard"></i> <span>用户管理</span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">

                            <li><a href="/admin/a/1"><i class="fa fa-circle-o"></i>会员列表</a></li>
                            <li><a href="/admin/a/2"><i class="fa fa-circle-o"></i>店铺列表</a></li>
                            <li><a href="/admin/a/3"><i class="fa fa-circle-o"></i>合伙人列表</a></li>
                            <li><a href="/admin/a/4"><i class="fa fa-circle-o"></i>店铺申请</a></li>
                            <li><a href="/admin/a/5"><i class="fa fa-circle-o"></i>合伙人申请</a></li>

                        </ul>
                    </li>

                    <li class="treeview @if(isset($type) && $type=='b') active @endif">
                        <a href="#">
                            <i class="fa fa-th"></i>
                            <span>业务管理</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">

                            <li><a href="/admin/b/1"><i class="fa fa-circle-o"></i>财务汇总</a></li>
                            <li><a href="/admin/b/2"><i class="fa fa-circle-o"></i>交易查询</a></li>
                            <li><a href="/admin/b/3"><i class="fa fa-circle-o"></i>提现管理</a></li>
                            <li><a href="/admin/b/4"><i class="fa fa-circle-o"></i>红包发放</a></li>
                            <li><a href="/admin/b/5"><i class="fa fa-circle-o"></i>返利查询</a></li>
                            <li><a href="/admin/b/6"><i class="fa fa-circle-o"></i>积分明细</a></li>
                            <li><a href="/admin/b/7"><i class="fa fa-circle-o"></i>红包领取</a></li>


                        </ul>
                    </li>

                    <li class="treeview @if(isset($type) && $type=='c') active @endif">
                        <a href="#">
                            <i class="fa fa-envelope"></i>
                            <span>信息中心</span>
                            <span class="label label-primary ">4</span><i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="/admin/c/1"><i class="fa fa-circle-o"></i>系统公告</a></li>
                            <li><a href="/admin/c/2"><i class="fa fa-circle-o"></i>收件箱</a></li>
                            <li><a href="/admin/c/3"><i class="fa fa-circle-o"></i>发件箱</a></li>
                            <li><a href="/admin/c/4"><i class="fa fa-circle-o"></i>写信</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="">
                            <i class="fa fa-pie-chart"></i> <span>Charts</span> <small class="label bg-green pull-right">new</small>
                        </a>
                    </li>


                    <li class="treeview @if(isset($type) && $type=='d') active @endif">
                        <a href="#">
                            <i class="fa fa-share"></i> <span>系统管理</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">

                            <li><a href="/admin/d/1"><i class="fa fa-circle-o"></i>账号设置</a></li>
                            <li><a href="/admin/d/2"><i class="fa fa-circle-o"></i>管理员设置</a></li>
                            <li><a href="/admin/d/3"><i class="fa fa-circle-o"></i>系统设置</a></li>
                            <li><a href="/admin/d/4"><i class="fa fa-circle-o"></i>管理组设置</a></li>
                            <li><a href="/admin/d/5"><i class="fa fa-circle-o"></i>后台记录</a></li>

                            <li>
                                <a href="#"><i class="fa fa-circle-o"></i> 二级菜单 <i class="fa fa-angle-left pull-right"></i></a>
                                <ul class="treeview-menu">
                                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>


                                </ul>
                            </li>

                        </ul>
                    </li>

                    <li class="header">常用功能</li>
                    <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>支付</span></a></li>
                    <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>支付</span></a></li>
                    <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>支付</span></a></li>
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>



        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1> @yield('header','header') <a href="javascript:history.go(-1);"><small>返回</small></a>     </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="#">admin</a></li>
                    <li class="active">Data</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        @yield('content')
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Version</b> 2.3.0
            </div>
            <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
            <strong><a href="http://127.0.0.1:88/">EXAMPLE</a></strong>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Create the tabs -->
            <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
                <li><a href="#control-sidebar-stats-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
                <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <!-- Home tab content -->
                <div class="tab-pane" id="control-sidebar-home-tab">
                    11111
                </div>
                <!-- /.tab-pane -->
                <!-- Stats tab content -->
                <div class="tab-pane" id="control-sidebar-stats-tab">
                    2222222
                </div>
                <!-- /.tab-pane -->
                <!-- Settings tab content -->
                <div class="tab-pane" id="control-sidebar-settings-tab">
                    3333333333
                </div>
                <!-- /.tab-pane -->
            </div>
        </aside>
        <!-- /.control-sidebar -->
        <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->

    <!-- Bootstrap 3.3.5 -->
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../../plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
    <!-- page script -->
    <script>
        $(function() {
            $("#example1").DataTable();
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false
            });
        });
    </script>
    <!-- CK Editor -->
    <script src="https://cdn.ckeditor.com/4.4.3/standard/ckeditor.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="../../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <script>
        // $(function () {
        //   // Replace the <textarea id="editor1"> with a CKEditor
        //   // instance, using default configuration.
        //   CKEDITOR.replace('editor1');
        //   //bootstrap WYSIHTML5 - text editor
        //   $(".textarea").wysihtml5();
        // });
    </script>

</body>

</html>