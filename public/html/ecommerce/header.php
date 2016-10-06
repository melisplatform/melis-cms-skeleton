<?php include "inc.php"?>
<!DOCTYPE html>
	<!--[if lt IE 7]> 
	<html class="ie lt-ie9 lt-ie8 lt-ie7">
	<![endif]-->
	<!--[if IE 7]>    
	<html class="ie lt-ie9 lt-ie8">
	<![endif]-->
	<!--[if IE 8]>    
	<html class="ie lt-ie9">
	<![endif]-->
	<!--[if gt IE 8]> 
	<html>
	<![endif]-->
	<!--[if !IE]><!-->
<html>
   <!-- <![endif]-->
   <head>
		<title>MELIS Commerce</title>
		<!-- Meta -->
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />		
		<!--[if lt IE 9]>
		<link rel="stylesheet" href="../assets/components/library/bootstrap/css/bootstrap.min.css" />
		<![endif]-->		
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
		
		<!-- #### External Stylesheets #### -->
		<link rel="stylesheet" href="css/admin/module.admin.page.form_elements.min.css" />
		<link rel="stylesheet" href="css/admin/module.admin.page.index.min.css" />
		<!-- DataTable Plugin -->
		<link rel="stylesheet" href="css/dataTables.bootstrap.min.css" />
		<link rel="stylesheet" href="css/responsive.bootstrap.min.css" />
		<link rel="stylesheet" href="css/datatables.min.css" />
		<link rel="stylesheet" href="css/dataTables.uikit.min.css" />
		<!-- jsTree -->
		<link rel="stylesheet" href="css/jstree/style.min.css"/>
		<!-- DateTime Picker -->
		<link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
		<!-- Tooltip -->		
		<link href="css/jquery.qtip.min.css" rel="stylesheet" media="screen">
		<!-- Melis Customized CSS -->
		<link rel="stylesheet" href="css/a-style.css"/>
		
		<!-- #### Scripts Libraries #### -->
		<script type="text/javascript" charset="UTF-8" src="js/jquery.min.js?v=v1.2.3"></script>
		<script type="text/javascript" charset="UTF-8" src="js/jquery-ui.min.js?v=v1.2.3"></script>
		<script type="text/javascript" charset="UTF-8" src="js/bootstrap.min.js?v=v1.2.3"></script>		
		<!-- jQuery Migrate -->
		<script type="text/javascript" charset="UTF-8" src="js/jquery-migrate.min.js?v=v1.2.3"></script>
		<!-- LessJS -->
		<script type="text/javascript" charset="UTF-8" src="js/less.min.js?v=v1.2.3"></script>
		<!-- IE Compatibility -->
		<script type="text/javascript" charset="UTF-8" src="js/ie.prototype.polyfill.js?v=v1.2.3"></script>		
		<!-- Tooltip -->
		<script type="text/javascript" charset="UTF-8" src="js/jquery.qtip.min.js?v=v1.2.3"></script>
		<!-- Animations -->
		<script type="text/javascript" charset="UTF-8" src="js/isotope.pkgd.min.js"></script>
		<script type="text/javascript" charset="UTF-8" src="js/imagesloaded.pkgd.min.js"></script>		
		<script type="text/javascript" charset="UTF-8" src="js/modernizr.js?v=v1.2.3"></script>
		<script type="text/javascript" charset="UTF-8" src="js/breakpoints.js?v=v1.2.3"></script>
		<script type="text/javascript" charset="UTF-8" src="js/animations.init.js?v=v1.2.3"></script>
		<script type="text/javascript" charset="UTF-8" src="js/fuelux-checkbox.js?v=v1.2.3"></script>
		<!-- Widget Scrollable -->
		<script type="text/javascript" charset="UTF-8" src="js/widget-scrollable.init.js?v=v1.2.3"></script>
		<!-- Holder -->
		<script type="text/javascript" charset="UTF-8" src="js/holder.js?v=v1.2.3"></script>
		<!-- Side Bar -->
		<script type="text/javascript" charset="UTF-8" src="js/sidebar.main.init.js?v=v1.2.3"></script>
		<script type="text/javascript" charset="UTF-8" src="js/sidebar.collapse.init.js?v=v1.2.3"></script>
		<!-- jsTree -->
		<script type="text/javascript" charset="UTF-8" src="js/jstree/dist/jstree.min.js"></script>		
		<!-- DataTables -->		
		<script type="text/javascript" charset="UTF-8" src="js/datatables.min.js"></script>
		<script type="text/javascript" charset="UTF-8" src="js/dataTables.bootstrap.min.js"></script>
		<script type="text/javascript" charset="UTF-8" src="js/dataTables.responsive.js"></script>
		<script type="text/javascript" charset="UTF-8" src="js/responsive.bootstrap.min.js"></script>
		<script type="text/javascript" charset="UTF-8" src="js/dataTables.rowReorder.min.js"></script>
		<!-- Customs -->
		<script type="text/javascript" charset="UTF-8" src="js/a-melis.js"></script>		
   </head>
   <body class="">
      <div class="navbar navbar-fixed-top navbar-primary main" role="navigation">
         <div class="navbar-header pull-left">
            <div class="navbar-brand">
               <div class="pull-left">
                  <a href="" class="toggle-button toggle-sidebar btn-navbar"><i class="fa fa-bars"></i></a>
               </div>
               <a href="" class="appbrand innerL">MelisCommerce</a>
            </div>
         </div>
         <ul class="nav navbar-nav navbar-left">
            <li>
				<a href="#"><?php echo (isset($_GET['title']) ? $_GET['title'] : 'Dashboard');?></a>
			</li>
         </ul>
         <ul class="nav navbar-nav navbar-right hidden-xs">            
            <li class="dropdown">
               <a href="" class="dropdown-toggle" data-toggle="dropdown"><img src="images/en-flat.jpg" /></a>
               <ul class="dropdown-menu pull-right">
                  <li class="active"><a href="">English</a></li>
                  <li><a href="">Romanian</a></li>
               </ul>
            </li>
            <li><a href="" class="menu-icon"><i class="fa fa-sign-out"></i></a></li>
         </ul>
      </div>
      <div id="menu" class="hidden-print hidden-xs">
         <div class="sidebar sidebar-inverse">
            <div class="user-profile media innerAll">
               <a href="" class="pull-left"><img src="../assets/images/people/50/8.jpg" alt="" class="img-circle"><span class="badge badge-primary">2</span></a>
               <div class="media-body">
                  <a href="" class="strong">Adrian Demian</a>
                  <p class="text-success"><i class="fa fa-fw fa-circle"></i> Online</p>
               </div>
               <ul>
                  <li class="active"><a href=""><i class="fa fa-fw fa-user"></i></a></li>
                  <li><a href=""><i class="fa fa-fw fa-lock"></i></a></li>
               </ul>
            </div>
            <div class="sidebarMenuWrapper">
               <ul class="list-unstyled">
                  <li class="hasSubmenu commerce active">
                    <a href="#" data-target="#collapse-commerce" data-toggle="collapse" class="collapsed">
                    <i class="fa fa-shopping-cart"></i>
                    <span>Commerce</span>
                    </a>
                    <ul class="in" id="collapse-commerce">
                       <li><a href="dashboard.php?title=Dashboard"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
                       <li><a href="category.php?title=Category"><i class="fa fa-tags"></i><span>Categories</span></a></li>
                       <li><a href="products.php?title=Products Listing"><i class="fa fa-archive"></i><span>Products</span></a></li>
                       <li><a href="clients.php?title=Clients"><i class="fa fa-users"></i><span>Clients</span></a></li>
                       <li><a href="orders.php?title=Orders"><i class="fa fa-cart-plus"></i><span>Orders</span></a></li>
                       <li><a href="reports.php?title=Reports"><i class="fa fa-line-chart"></i><span>Reports</span></a></li>
                       <li><a href="attributes.php?title=Attributes"><i class="fa fa-cubes"></i><span>Attributes</span></a></li>
                       <li><a href="promotions.php?title=Promotions"><i class="fa fa-gift"></i><span>Promotions</span></a></li>
                       <li><a href="settings.php?title=Settings"><i class="fa fa-cogs"></i><span>Settings</span></a></li>
                    </ul>
                  </li>
               </ul>
            </div>
         </div>
      </div>