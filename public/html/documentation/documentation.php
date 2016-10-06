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
		<title>MELIS Platform - Documentation</title>
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
		<link rel="stylesheet" href="css/highlights/atom-one-dark.css"/>	
		<!-- Melis Customized CSS -->
		<link rel="stylesheet" href="css/styles.css"/>	
		<link rel="stylesheet" href="css/documentation.css"/>	
		<link rel="stylesheet" href="css/a-style.css"/>
		
		<!-- #### Scripts Libraries #### -->
		<script type="text/javascript" charset="UTF-8" src="js/jquery.min.js?v=v1.2.3"></script>
		<script type="text/javascript" charset="UTF-8" src="js/jquery-ui.min.js?v=v1.2.3"></script>
		<script type="text/javascript" charset="UTF-8" src="js/bootstrap.min.js?v=v1.2.3"></script>				
		<script type="text/javascript" charset="UTF-8" src="js/highlight.pack.js"></script>				
		<script type="text/javascript" charset="UTF-8" src="js/css-tricks.js"></script>
		<script type="text/javascript" charset="UTF-8" src="js/custom.js"></script>				
		<!-- Init Scripts -->
		<script>hljs.initHighlightingOnLoad();</script>		
	</head>
	<body class="me-commerce">
		<div class="navbar navbar-fixed-top navbar-primary main" role="navigation">
			<div class="navbar-header pull-left">
				<div class="navbar-brand">
					<div class="pull-left">
						<a href="" class="toggle-button toggle-sidebar btn-navbar"><i class="fa fa-bars"></i></a>
					</div>
					<a href="" class="appbrand innerL">Melis Platform</a>
				</div>
			</div>
			<ul class="nav navbar-nav navbar-left">
				<li>
					<a href="#">Documentation</a>
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right hidden-xs">            
				<li class="dropdown">
					<a href="" class="dropdown-toggle" data-toggle="dropdown"><img src="images/en-flat.jpg" /></a>
					<ul class="dropdown-menu pull-right">
						<li class="active"><a href="">English</a></li>
						<li><a href="">Francias</a></li>
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
						<span>Documentation</span>
						</a>
					</li>
				</ul>
            </div>
         </div>
    </div>
	<div id="content" class="order-info-page">      
      	<div class="me-heading bg-white border-bottom">      		
      		<div class="row">      		
      			<div class="me-hl col-xs-12 col-md-22">
      				<h1 class="content-heading">
      				<a href="#" style="color: #686868;">Documentation</a></h1>
      			</div>	      		
       		</div>       		
      	</div>
		<!-- content -->
		<div class="content-cont">
			<div class="widget widget-tabs widget-tabs-double-2 widget-tabs-responsive" style="margin-bottom:0">
				<div class="widget-head nav">
					<ul class="tabs-label nav-tabs">
						<li class="active">
							<a class="" data-toggle="tab" href="#tabs_introduction" aria-expanded="false">
								<i class="glyphicon glyphicon-home"></i>
								<span>Introduction</span>
							</a>
						</li>
						<li class="">
							<a class="" data-toggle="tab" href="#tabs_components" aria-expanded="false">
								<i class="glyphicon glyphicon-list-alt"></i>
								<span>Components</span>
							</a>
						</li>
						<li class="">
							<a class="" data-toggle="tab" href="#tabs_basic_styling" aria-expanded="false">
								<i class="glyphicon glyphicon-text-width"></i>
								<span>Styling</span>
							</a>
						</li>
						<li class="">
							<a class="" data-toggle="tab" href="#tabs_elements" aria-expanded="false">
								<i class="glyphicon glyphicon-gift"></i>
								<span>Elements</span>
							</a>
						</li>
						<li class="">
							<a class="" data-toggle="tab" href="#tabs_icons" aria-expanded="false">
								<i class="glyphicon glyphicon-star-empty"></i>
								<span>Icons</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="tab-content innerAll spacing-x2">
				<!-- Introduction -->			
				<div id="tabs_introduction" class="active tab-pane doc-intro">		
					<div class="melis-documentation-heading border-bottom">
						<h3>Introduction</h3>						
					</div>									
					<!-- Labels -->
					<div class="row">				
						<div class="col-xs-12 col-lg-12">
							<h1>Lorem Ipsum</h1>
							<h4>Sub Title</h4>
							<p><strong class="text-success">Lorem ipsum dolor</strong> sit amet, consectetur adipiscing elit. In posuere justo a sem euismod, ut rutrum magna accumsan. Proin congue odio elit, nec volutpat mi fermentum id. Curabitur volutpat dictum nisl, sit amet pretium enim rutrum eget. Maecenas eget mattis lorem, eu placerat diam.</p>
							<p>Nulla maximus, <span class="text-info">lacus et vehicula</span> venenatis, ipsum turpis pretium lacus, in iaculis turpis dui sed tellus. Nulla suscipit et turpis at dapibus. Ut a justo in justo aliquam pellentesque. Ut pharetra, diam ut convallis laoreet, lectus dui venenatis lorem, sit amet ultrices dui dui posuere est. Phasellus mauris tellus, fermentum id urna vitae, efficitur iaculis nulla.</p>
							<p>Fusce augue neque, iaculis at neque ut, facilisis facilisis orci. Duis pellentesque orci urna, eu euismod <span class="text-danger">massa</span> iaculis consequat. Maecenas ultrices ut arcu et fringilla. In pharetra dui at sem iaculis, in faucibus nisl auctor.</p>
						</div>
					</div>
					<div class="row">	
						<div class="col-xs-12 col-lg-6">
							<div class="img img-lg center">
								<img src="images/sample-image.jpg" title="Sample Image 1">
								<span class="img-caption">Sample Image 1</span>
							</div>
						</div>
						<div class="col-xs-12 col-lg-6">
							<h3>Another Title</h3>
							<p>Aliquam egestas purus turpis, id scelerisque arcu interdum sed. Pellentesque et sapien enim. Donec auctor ligula risus, quis laoreet risus tempus id. Pellentesque pretium blandit eros id rutrum. Sed dictum a nunc euismod rhoncus. Proin ut ante semper, tincidunt eros et, pulvinar felis. <em class="text-danger">Aenean</em> non eros ac nisi dictum lacinia id sit amet ipsum. Praesent vel lacinia magna. Donec feugiat rhoncus elit vel pulvinar. Maecenas consequat, sapien sed scelerisque bibendum, nunc ante convallis eros, <u>sed convallis est</u> ante non neque.</p>
							<ul>
								<li>Vivamus enim erat</li>
								<li>finibus quis scelerisque vitae</li>
								<li>ornare at odio. Integer tortor risus</li>
								<li>pharetra vel nunc sed</li>
								<li>feugiat fermentum nibh</li>
							</ul>
							</p>
							<p>Pellentesque blandit feugiat tortor. Sed auctor elit vitae malesuada iaculis. Nulla eu interdum quam.</p>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-lg-6">
							<h3>Another Title</h3>
							<p>Integer elementum placerat odio sit amet lobortis. Vivamus in mauris vel augue laoreet rutrum vel vitae est. Nullam quis ipsum justo. Aenean nisl sapien, sollicitudin vel eros id, sagittis condimentum sem. Phasellus mollis nunc pharetra ex malesuada, convallis tristique felis eleifend. Curabitur in luctus risus. Fusce tempor justo auctor ex sagittis sollicitudin. Ut nec justo eu turpis rutrum varius. Quisque at quam nec mauris aliquam tempus non quis augue. Aenean ornare lobortis tristique.							
							</p>
						</div>
						<div class="col-xs-12 col-lg-6">
							<div class="img img-lg center">
								<img src="images/sample-image2.jpg" title="Sample Image 2">
								<span class="img-caption">Sample Image 2</span>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-lg-12">
							<div class="img img-lg center">
								<img src="images/sample-image3.jpg" title="Sample Image 3">
								<span class="img-caption">Sample Image 3</span>
							</div>
						</div>
					</div>
				</div>
				<!-- Components -->
				<div id="tabs_components" class="tab-pane">		
					<div class="melis-documentation-heading border-bottom">
						<h3>Component</h3>						
					</div>									
					<!-- Labels -->
					<div class="row melis-pdc">				
						<div class="col-xs-12 col-lg-6">
							<h4>Labels</h4>
							<pre><code class="html">&lt;span class=&quot;label label-default&quot;&gt;Default&lt;/span&gt;
&lt;span class=&quot;label label-primary&quot;&gt;Primary&lt;/span&gt;
&lt;span class=&quot;label label-success&quot;&gt;Success&lt;/span&gt;
&lt;span class=&quot;label label-info&quot;&gt;Info&lt;/span&gt;
&lt;span class=&quot;label label-warning&quot;&gt;Warning&lt;/span&gt;
&lt;span class=&quot;label label-danger&quot;&gt;Danger&lt;/span&gt;</code></pre>
						</div>
						<div class="col-xs-12 col-lg-6">
							<div class="code-window">
								<div class="window-bar">
									<div class="circles">
										<span class="circle circle-green"></span>
										<span class="circle circle-yellow"></span>
										<span class="circle circle-red"></span>
									</div>
									<div class="languages">
										<span>Example</span>
									</div>
								</div>
								<div class="code-output">
									<span class="label label-default">Default</span>
									<span class="label label-primary">Primary</span>
									<span class="label label-success">Success</span>
									<span class="label label-info">Info</span>
									<span class="label label-warning">Warning</span>
									<span class="label label-danger">Danger</span>
								</div>
							</div>							
						</div>
					</div>
					
					<!-- Labels with Icon -->
					<div class="row melis-pdc">				
						<div class="col-xs-12 col-lg-6">
							<h4>Labels with Icon</h4>
							<pre><code class="html">&lt;span class=&quot;label label-default&quot;&gt;a delicious coffee &lt;i class=&quot;fa fa-coffee&quot;&gt;&lt;/i&gt;&lt;/span&gt;
&lt;span class=&quot;label label-primary&quot;&gt;&lt;i class=&quot;fa fa-cloud&quot;&gt;&lt;/i&gt; Float in clouds&lt;/span&gt;
&lt;span class=&quot;label label-danger&quot;&gt;&lt;i class=&quot;fa fa-exclamation-circle&quot;&gt;&lt;/i&gt; Danger &lt;i class=&quot;fa fa-exclamation-circle&quot;&gt;&lt;/i&gt;&lt;/span&gt;</code></pre>
						</div>
						<div class="col-xs-12 col-lg-6">
							<div class="code-window">
								<div class="window-bar">
									<div class="circles">
										<span class="circle circle-green"></span>
										<span class="circle circle-yellow"></span>
										<span class="circle circle-red"></span>
									</div>
									<div class="languages">
										<span>Example</span>
									</div>
								</div>
								<div class="code-output">
									<span class="label label-default">a delicious coffee <i class="fa fa-coffee"></i></span>
									<span class="label label-primary"><i class="fa fa-cloud"></i> Float in clouds</span>
									<span class="label label-danger"><i class="fa fa-exclamation-circle"></i> Danger <i class="fa fa-exclamation-circle"></i></span>
								</div>
							</div>
						</div>
					</div>
					
					<!-- Buttons -->
					<div class="row melis-pdc">				
						<div class="col-xs-12 col-lg-6">
							<h4>Buttons</h4>
							<pre><code class="html">&lt;button type=&quot;button&quot; class=&quot;btn btn-xs btn-default&quot;&gt;Default&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-xs btn-primary&quot;&gt;Primary&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-xs btn-success&quot;&gt;Success&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-xs btn-info&quot;&gt;Info&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-xs btn-warning&quot;&gt;Warning&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-xs btn-danger&quot;&gt;Danger&lt;/button&gt;

&lt;br&gt;&lt;br&gt;

&lt;button type=&quot;button&quot; class=&quot;btn btn-sm btn-default&quot;&gt;Default&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-sm btn-primary&quot;&gt;Primary&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-sm btn-success&quot;&gt;Success&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-sm btn-info&quot;&gt;Info&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-sm btn-warning&quot;&gt;Warning&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-sm btn-danger&quot;&gt;Danger&lt;/button&gt;

&lt;br&gt;&lt;br&gt;

&lt;button type=&quot;button&quot; class=&quot;btn btn-default&quot;&gt;Default&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Primary&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-success&quot;&gt;Success&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-info&quot;&gt;Info&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-warning&quot;&gt;Warning&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-danger&quot;&gt;Danger&lt;/button&gt;

&lt;br&gt;&lt;br&gt;

&lt;button type=&quot;button&quot; class=&quot;btn btn-lg btn-default&quot;&gt;Default&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-lg btn-primary&quot;&gt;Primary&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-lg btn-success&quot;&gt;Success&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-lg btn-info&quot;&gt;Info&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-lg btn-warning&quot;&gt;Warning&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-lg btn-danger&quot;&gt;Danger&lt;/button&gt;

&lt;br&gt;&lt;br&gt;

&lt;button type=&quot;button&quot; class=&quot;btn btn-xl btn-default&quot;&gt;Default&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-xl btn-primary&quot;&gt;Primary&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-xl btn-success&quot;&gt;Success&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-xl btn-info&quot;&gt;Info&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-xl btn-warning&quot;&gt;Warning&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-xl btn-danger&quot;&gt;Danger&lt;/button&gt;</code></pre>
						</div>
						<div class="col-xs-12 col-lg-6">
							<div class="code-window">
								<div class="window-bar">
									<div class="circles">
										<span class="circle circle-green"></span>
										<span class="circle circle-yellow"></span>
										<span class="circle circle-red"></span>
									</div>
									<div class="languages">
										<span>Example</span>
									</div>
								</div>
								<div class="code-output">
									<button type="button" class="btn btn-xs btn-default">Default</button>
									<button type="button" class="btn btn-xs btn-primary">Primary</button>
									<button type="button" class="btn btn-xs btn-success">Success</button>
									<button type="button" class="btn btn-xs btn-info">Info</button>
									<button type="button" class="btn btn-xs btn-warning">Warning</button>
									<button type="button" class="btn btn-xs btn-danger">Danger</button>
									<br><br>
									<button type="button" class="btn btn-sm btn-default">Default</button>
									<button type="button" class="btn btn-sm btn-primary">Primary</button>
									<button type="button" class="btn btn-sm btn-success">Success</button>
									<button type="button" class="btn btn-sm btn-info">Info</button>
									<button type="button" class="btn btn-sm btn-warning">Warning</button>
									<button type="button" class="btn btn-sm btn-danger">Danger</button>
									<br><br>
									<button type="button" class="btn btn-default">Default</button>
									<button type="button" class="btn btn-primary">Primary</button>
									<button type="button" class="btn btn-success">Success</button>
									<button type="button" class="btn btn-info">Info</button>
									<button type="button" class="btn btn-warning">Warning</button>
									<button type="button" class="btn btn-danger">Danger</button>
									<br><br>
									<button type="button" class="btn btn-lg btn-default">Default</button>
									<button type="button" class="btn btn-lg btn-primary">Primary</button>
									<button type="button" class="btn btn-lg btn-success">Success</button>
									<button type="button" class="btn btn-lg btn-info">Info</button>
									<button type="button" class="btn btn-lg btn-warning">Warning</button>
									<button type="button" class="btn btn-lg btn-danger">Danger</button>
									<br><br>
									<button type="button" class="btn btn-xl btn-default">Default</button>
									<button type="button" class="btn btn-xl btn-primary">Primary</button>
									<button type="button" class="btn btn-xl btn-success">Success</button>
									<button type="button" class="btn btn-xl btn-info">Info</button>
									<button type="button" class="btn btn-xl btn-warning">Warning</button>
									<button type="button" class="btn btn-xl btn-danger">Danger</button>
								</div>
							</div>
						</div>
					</div>					
				</div>
				<!-- Basic Styling -->
				<div id="tabs_basic_styling" class="tab-pane">		
					<div class="melis-documentation-heading border-bottom">
						<h3>Styling</h3>						
					</div>									
					
					<!-- Headers Text -->
					<div class="row melis-pdc">				
						<div class="col-xs-12 col-lg-6">
							<h4>Headers Text</h4>
							<pre><code class="html">&lt;h1&gt;h1. Hello World!&lt;/h1&gt;
&lt;h2&gt;h2. Hello World!&lt;/h2&gt;
&lt;h3&gt;h3. Hello World!&lt;/h3&gt;
&lt;h4&gt;h4. Hello World!&lt;/h4&gt;
&lt;h5&gt;h5. Hello World!&lt;/h5&gt;
&lt;h6&gt;h6. Hello World!&lt;/h6&gt;</code></pre>
						</div>
						<div class="col-xs-12 col-lg-6">
							<div class="code-window">
								<div class="window-bar">
									<div class="circles">
										<span class="circle circle-green"></span>
										<span class="circle circle-yellow"></span>
										<span class="circle circle-red"></span>
									</div>
									<div class="languages">
										<span>Example</span>
									</div>
								</div>
								<div class="code-output">
									<h1>h1. Hello World!</h1>
									<h2>h2. Hello World!</h2>
									<h3>h3. Hello World!</h3>
									<h4>h4. Hello World!</h4>
									<h5>h5. Hello World!</h5>
									<h6>h6. Hello World!</h6>
								</div>
							</div>
						</div>
					</div>				
					
					<!-- Text Color -->
					<div class="row melis-pdc">				
						<div class="col-xs-12 col-lg-6">
							<h4>Colored Text</h4>
							<pre><code class="html">&lt;p&gt;This is a normal paragraph without any contectual classes.&lt;/p&gt;
&lt;p class=&quot;text-primary&quot;&gt;A paragraph with .text-primary class.&lt;/p&gt;
&lt;p class=&quot;text-success&quot;&gt;A paragraph with .text-success class.&lt;/p&gt;
&lt;p class=&quot;text-info&quot;&gt;A paragraph with .text-info class.&lt;/p&gt;
&lt;p class=&quot;text-warning&quot;&gt;A paragraph with .text-warning class.&lt;/p&gt;
&lt;p class=&quot;text-danger&quot;&gt;A paragraph with .text-danger class.&lt;/p&gt;</code></pre>
						</div>
						<div class="col-xs-12 col-lg-6">
							<div class="code-window">
								<div class="window-bar">
									<div class="circles">
										<span class="circle circle-green"></span>
										<span class="circle circle-yellow"></span>
										<span class="circle circle-red"></span>
									</div>
									<div class="languages">
										<span>Example</span>
									</div>
								</div>
								<div class="code-output">
									<p>This is a normal paragraph without any contectual classes.</p>
									<p class="text-primary">A paragraph with .text-primary class.</p>
									<p class="text-success">A paragraph with .text-success class.</p>
									<p class="text-info">A paragraph with .text-info class.</p>
									<p class="text-warning">A paragraph with .text-warning class.</p>
									<p class="text-danger">A paragraph with .text-danger class.</p>
								</div>
							</div>
						</div>
					</div>
					
					<!-- Default Alerts -->
					<div class="row melis-pdc">				
						<div class="col-xs-12 col-lg-6">
							<h4>Default Alerts</h4>
							<pre><code class="html">&lt;div class=&quot;alert alert-success&quot; role=&quot;alert&quot;&gt;
&lt;strong&gt;Well done!&lt;/strong&gt; You successfully read this important alert message.&lt;/div&gt;
&lt;div class=&quot;alert alert-info&quot; role=&quot;alert&quot;&gt;
&lt;strong&gt;Heads up!&lt;/strong&gt; This alert needs your attention, but it&apos;s not super important.&lt;/div&gt;
&lt;div class=&quot;alert alert-warning&quot; role=&quot;alert&quot;&gt;
&lt;strong&gt;Warning!&lt;/strong&gt; Better check yourself, you&apos;re not looking too good.&lt;/div&gt;
&lt;div class=&quot;alert alert-danger&quot; role=&quot;alert&quot;&gt;
&lt;strong&gt;Oh snap!&lt;/strong&gt; Change a few things up and try submitting again.&lt;/div&gt;</code></pre>
						</div>
						<div class="col-xs-12 col-lg-6">
							<div class="code-window">
								<div class="window-bar">
									<div class="circles">
										<span class="circle circle-green"></span>
										<span class="circle circle-yellow"></span>
										<span class="circle circle-red"></span>
									</div>
									<div class="languages">
										<span>Example</span>
									</div>
								</div>
								<div class="code-output">
									<div class="alert alert-success" role="alert"><strong>Well done!</strong> You successfully read this important alert message.</div>
									<div class="alert alert-info" role="alert"><strong>Heads up!</strong> This alert needs your attention, but it's not super important.</div>
									<div class="alert alert-warning" role="alert"><strong>Warning!</strong> Better check yourself, you're not looking too good.</div>
									<div class="alert alert-danger" role="alert"><strong>Oh snap!</strong> Change a few things up and try submitting again.</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Customized Alerts -->
					<div class="row melis-pdc">				
						<div class="col-xs-12 col-lg-6">
							<h4>Customized Alerts</h4>
							<pre><code class="html">&lt;div class=&quot;alert alert-success&quot; role=&quot;alert&quot;&gt;
&lt;button type=&quot;button&quot; class=&quot;close&quot; data-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt;&lt;span aria-hidden=&quot;true&quot;&gt;&amp;times;&lt;/span&gt;&lt;/button&gt;
&lt;strong&gt;Well done!&lt;/strong&gt; You successfully read this important &lt;a href=&quot;#&quot; class=&quot;alert-link&quot;&gt;alert message.&lt;/a&gt;
&lt;/div&gt;
&lt;div class=&quot;alert alert-info&quot; role=&quot;alert&quot;&gt;
&lt;button type=&quot;button&quot; class=&quot;close&quot; data-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt;&lt;span aria-hidden=&quot;true&quot;&gt;&amp;times;&lt;/span&gt;&lt;/button&gt;
&lt;strong&gt;Heads up!&lt;/strong&gt; This alert needs your attention, but it&apos;s not &lt;a href=&quot;#&quot; class=&quot;alert-link&quot;&gt;super important.&lt;/a&gt;
&lt;/div&gt;
&lt;div class=&quot;alert alert-warning&quot; role=&quot;alert&quot;&gt;
&lt;button type=&quot;button&quot; class=&quot;close&quot; data-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt;&lt;span aria-hidden=&quot;true&quot;&gt;&amp;times;&lt;/span&gt;&lt;/button&gt;
&lt;strong&gt;Warning!&lt;/strong&gt; Better check yourself, you&apos;re not looking too &lt;a href=&quot;#&quot; class=&quot;alert-link&quot;&gt;good.&lt;/a&gt;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&lt;/div&gt;
&lt;div class=&quot;alert alert-danger&quot; role=&quot;alert&quot;&gt;
&lt;button type=&quot;button&quot; class=&quot;close&quot; data-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt;&lt;span aria-hidden=&quot;true&quot;&gt;&amp;times;&lt;/span&gt;&lt;/button&gt;
&lt;strong&gt;Oh snap!&lt;/strong&gt; Change a few things up and try &lt;a href=&quot;#&quot; class=&quot;alert-link&quot;&gt;submitting&lt;/a&gt; again.
&lt;/div&gt;</code></pre>
						</div>
						<div class="col-xs-12 col-lg-6">
							<div class="code-window">
								<div class="window-bar">
									<div class="circles">
										<span class="circle circle-green"></span>
										<span class="circle circle-yellow"></span>
										<span class="circle circle-red"></span>
									</div>
									<div class="languages">
										<span>Example</span>
									</div>
								</div>
								<div class="code-output">
									<div class="alert alert-success" role="alert">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<strong>Well done!</strong> You successfully read this important <a href="#" class="alert-link">alert message.</a>
									</div>
									<div class="alert alert-info" role="alert">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<strong>Heads up!</strong> This alert needs your attention, but it's not <a href="#" class="alert-link">super important.</a>
									</div>
									<div class="alert alert-warning" role="alert">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<strong>Warning!</strong> Better check yourself, you're not looking too <a href="#" class="alert-link">good.</a>
									</div>
									<div class="alert alert-danger" role="alert">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<strong>Oh snap!</strong> Change a few things up and try <a href="#" class="alert-link">submitting</a> again.
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<!-- Tables -->
					<div class="row melis-pdc">				
						<div class="col-xs-12 col-lg-6">
							<h4>Tables</h4>
							<pre><code class="html">&lt;table class=&quot;table&quot;&gt;
  &lt;caption&gt;Optional table caption.&lt;/caption&gt;
  &lt;thead&gt;
    &lt;tr&gt;
      &lt;th&gt;#&lt;/th&gt;
      &lt;th&gt;First Name&lt;/th&gt;
      &lt;th&gt;Last Name&lt;/th&gt;
      &lt;th&gt;Username&lt;/th&gt;
    &lt;/tr&gt;
  &lt;/thead&gt;
  &lt;tbody&gt;
    &lt;tr&gt;
      &lt;th scope=&quot;row&quot;&gt;1&lt;/th&gt;
      &lt;td&gt;Mark&lt;/td&gt;
      &lt;td&gt;Otto&lt;/td&gt;
      &lt;td&gt;@mdo&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;th scope=&quot;row&quot;&gt;2&lt;/th&gt;
      &lt;td&gt;Jacob&lt;/td&gt;
      &lt;td&gt;Thornton&lt;/td&gt;
      &lt;td&gt;@fat&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;th scope=&quot;row&quot;&gt;3&lt;/th&gt;
      &lt;td&gt;Larry&lt;/td&gt;
      &lt;td&gt;the Bird&lt;/td&gt;
      &lt;td&gt;@twitter&lt;/td&gt;
    &lt;/tr&gt;
  &lt;/tbody&gt;
&lt;/table&gt;</code></pre>
						</div>
						<div class="col-xs-12 col-lg-6">
						<div class="code-window">
								<div class="window-bar">
									<div class="circles">
										<span class="circle circle-green"></span>
										<span class="circle circle-yellow"></span>
										<span class="circle circle-red"></span>
									</div>
									<div class="languages">
										<span>Example</span>
									</div>
								</div>
								<div class="code-output">
									<table class="table">
										<caption>Optional table caption.</caption>
										<thead>
											<tr>
											  <th>#</th>
											  <th>First Name</th>
											  <th>Last Name</th>
											  <th>Username</th>
											</tr>
										</thead>
										<tbody>
											<tr>
											  <th scope="row">1</th>
											  <td>Mark</td>
											  <td>Otto</td>
											  <td>@mdo</td>
											</tr>
											<tr>
											  <th scope="row">2</th>
											  <td>Jacob</td>
											  <td>Thornton</td>
											  <td>@fat</td>
											</tr>
											<tr>
											  <th scope="row">3</th>
											  <td>Larry</td>
											  <td>the Bird</td>
											  <td>@twitter</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					
					
					
				</div>
				
				<!-- Elements -->
				<div id="tabs_elements" class="tab-pane">		
					<div class="melis-documentation-heading border-bottom">
						<h3>Elements</h3>
					</div>					
					<!-- Color Pallete -->
					<div class="row melis-pdc">				
						<div class="col-xs-12 col-lg-6">
							<h4>Color Pallete</h4>
							<pre><code class="html">&lt;ul class=&quot;color-palette-circular&quot;&gt;
  &lt;li style=&quot;background-color: #99c975&quot;&gt;#99c975&lt;/li&gt;
  &lt;li style=&quot;background-color: #7D7B7B&quot;&gt;#7D7B7B&lt;/li&gt;
  &lt;li style=&quot;background-color: #d9534f&quot;&gt;#d9534f&lt;/li&gt;
  &lt;li style=&quot;background-color: #d2322d&quot;&gt;#d2322d&lt;/li&gt;
  &lt;li style=&quot;background-color: #f8f9fb; color: #666&quot;&gt;#f8f9fb&lt;/li&gt;
&lt;/ul&gt;</code></pre>
						</div>
						<div class="col-xs-12 col-lg-6">
						<div class="code-window">
								<div class="window-bar">
									<div class="circles">
										<span class="circle circle-green"></span>
										<span class="circle circle-yellow"></span>
										<span class="circle circle-red"></span>
									</div>
									<div class="languages">
										<span>Example</span>
									</div>
								</div>
								<div class="code-output">
									<ul class="color-palette-circular">
										<li style="background-color: #99c975">#99c975</li>
										<li style="background-color: #7D7B7B">#7D7B7B</li>
										<li style="background-color: #d9534f">#d9534f</li>
										<li style="background-color: #d2322d">#d2322d</li>
										<li style="background-color: #f8f9fb; color: #666">#f8f9fb</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					
					<!-- Jumbotron -->
					<div class="row melis-pdc">				
						<div class="col-xs-12 col-lg-6">
							<h4>Jumbotron</h4>
							<pre><code class="html">&lt;div class=&quot;jumbotron&quot;&gt;
  &lt;div class=&quot;container&quot;&gt;
    &lt;h1&gt;Hello, world!&lt;/h1&gt;
    &lt;p&gt;This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.&lt;/p&gt;
    &lt;p&gt;&lt;a class=&quot;btn btn-primary btn-lg&quot; href=&quot;#&quot; role=&quot;button&quot;&gt;Learn more&lt;/a&gt;&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
						</div>
						<div class="col-xs-12 col-lg-6">
						<div class="code-window">
								<div class="window-bar">
									<div class="circles">
										<span class="circle circle-green"></span>
										<span class="circle circle-yellow"></span>
										<span class="circle circle-red"></span>
									</div>
									<div class="languages">
										<span>Example</span>
									</div>
								</div>
								<div class="code-output">
									<div class="jumbotron">
										<div class="container">
											<h1>Hello, world!</h1>
											<p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
											<p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<!-- Carousel -->
					<div class="row melis-pdc">				
						<div class="col-xs-12 col-lg-6">
							<h4>Carousel</h4>
							<pre><code class="html">&lt;div id=&quot;carousel1&quot; class=&quot;carousel slide&quot;&gt;
&lt;!-- Indicators --&gt;
&lt;ol class=&quot;carousel-indicators&quot;&gt;
&lt;li data-target=&quot;#carousel1&quot; data-slide-to=&quot;0&quot; class=&quot;active&quot;&gt;&lt;/li&gt;
&lt;li data-target=&quot;#carousel1&quot; data-slide-to=&quot;1&quot;&gt;&lt;/li&gt;
&lt;li data-target=&quot;#carousel1&quot; data-slide-to=&quot;2&quot;&gt;&lt;/li&gt;
&lt;/ol&gt;
&lt;!-- Wrapper for slides --&gt;
&lt;div class=&quot;carousel-inner&quot; role=&quot;listbox&quot;&gt;
&lt;div class=&quot;item active&quot;&gt;
&lt;img src=&quot;images/placeholder-1900.png&quot; alt=&quot;&quot;&gt;
&lt;/div&gt;
&lt;div class=&quot;item&quot;&gt;
&lt;img src=&quot;images/placeholder-1900.png&quot; alt=&quot;&quot;&gt;
&lt;/div&gt;
&lt;div class=&quot;item&quot;&gt;
&lt;img src=&quot;images/placeholder-1900.png&quot; alt=&quot;&quot;&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;!-- Controls --&gt;
&lt;a class=&quot;left carousel-control&quot; href=&quot;#carousel1&quot; role=&quot;button&quot; data-slide=&quot;prev&quot;&gt;
&lt;i class=&quot;fa fa-angle-left&quot;&gt;&lt;/i&gt;
&lt;/a&gt;
&lt;a class=&quot;right carousel-control&quot; href=&quot;#carousel1&quot; role=&quot;button&quot; data-slide=&quot;next&quot;&gt;
&lt;i class=&quot;fa fa-angle-right&quot;&gt;&lt;/i&gt;
&lt;/a&gt;
&lt;/div&gt;</code></pre>
						</div>
						<div class="col-xs-12 col-lg-6">
						<div class="code-window">
								<div class="window-bar">
									<div class="circles">
										<span class="circle circle-green"></span>
										<span class="circle circle-yellow"></span>
										<span class="circle circle-red"></span>
									</div>
									<div class="languages">
										<span>Example</span>
									</div>
								</div>
								<div class="code-output">
									<div id="carousel1" class="carousel slide">
										<!-- Indicators -->
										<ol class="carousel-indicators">
											<li data-target="#carousel1" data-slide-to="0" class="active"></li>
											<li data-target="#carousel1" data-slide-to="1"></li>
											<li data-target="#carousel1" data-slide-to="2"></li>
										</ol>
										<!-- Wrapper for slides -->
										<div class="carousel-inner" role="listbox">
											<div class="item active">
												<img src="images/placeholder-1900.png" alt="">
											</div>
											<div class="item">
												<img src="images/placeholder-1900.png" alt="">
											</div>
											<div class="item">
												<img src="images/placeholder-1900.png" alt="">
											</div>										
										</div>
										<!-- Controls -->
										<a class="left carousel-control" href="#carousel1" role="button" data-slide="prev">
											<i class="fa fa-angle-left"></i>
										</a>
										<a class="right carousel-control" href="#carousel1" role="button" data-slide="next">
											<i class="fa fa-angle-right"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<!-- Carousel with Steps -->
					<div class="row melis-pdc">				
						<div class="col-xs-12 col-lg-6">
							<h4>Carousel With Steps</h4>
							<pre><code class="html">&lt;div id=&quot;step-image&quot; class=&quot;step-image carousel slide&quot;&gt;
  &lt;!-- Indicators --&gt;
  &lt;ol class=&quot;carousel-indicators&quot;&gt;
    &lt;li data-target=&quot;#step-image&quot; data-slide-to=&quot;0&quot; class=&quot;active&quot;&gt;&lt;/li&gt;
    &lt;li data-target=&quot;#step-image&quot; data-slide-to=&quot;1&quot;&gt;&lt;/li&gt;
    &lt;li data-target=&quot;#step-image&quot; data-slide-to=&quot;2&quot;&gt;&lt;/li&gt;
    &lt;li data-target=&quot;#step-image&quot; data-slide-to=&quot;3&quot;&gt;&lt;/li&gt;
  &lt;/ol&gt;

  &lt;!-- Wrapper for slides --&gt;
  &lt;div class=&quot;carousel-inner&quot; role=&quot;listbox&quot;&gt;
    &lt;div class=&quot;item active&quot;&gt;
      &lt;img src=&quot;assets/img/step1.png&quot; alt=&quot;&quot;&gt;
      &lt;div class=&quot;carousel-caption&quot;&gt;
        &lt;h4&gt;Placing your cursor&lt;/h4&gt;
        &lt;p&gt;In order to add an image to your page or post, you must first insert your cursor in the place in the text where you want the image to appear. By placing your cursor within your text, you can add images inline with your content. You can also place your cursor on a blank line if you want the image to appear by itself instead.&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;

    &lt;div class=&quot;item&quot;&gt;
      &lt;img src=&quot;assets/img/step2.png&quot; alt=&quot;&quot;&gt;
      &lt;div class=&quot;carousel-caption&quot;&gt;
        &lt;h4&gt;Click the Add Media button&lt;/h4&gt;
        &lt;p&gt;Once you&rsquo;ve placed your cursor on the line where you want your image to appear, click on the Add Media button to launch the media uploader interface, and then select the Insert Media option from the list of actions in the left side of the media uploader window.&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;

    &lt;div class=&quot;item&quot;&gt;
      &lt;img src=&quot;assets/img/step3.png&quot; alt=&quot;&quot;&gt;
      &lt;div class=&quot;carousel-caption&quot;&gt;
        &lt;h4&gt;Add or Select Your Image&lt;/h4&gt;
        &lt;div&gt;
          &lt;p&gt;You can add or select the image you want to add to your page or post by choosing from either of the following options in the center of the media uploader window:&lt;/p&gt;
          &lt;ul&gt;
            &lt;li&gt;&lt;strong&gt;Upload Files:&lt;/strong&gt; Upload the image you want to use from your computer by dragging it into the upload area.&lt;/li&gt;
            &lt;li&gt;&lt;strong&gt;Media Library:&lt;/strong&gt; Select from any previously uploaded images in the media library by clicking on the one you wish to add to your page or post.&lt;/li&gt;
          &lt;/ul&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;

    &lt;div class=&quot;item&quot;&gt;
      &lt;img src=&quot;assets/img/step4.png&quot; alt=&quot;&quot;&gt;
      &lt;div class=&quot;carousel-caption&quot;&gt;
        &lt;h4&gt;Attachment Details&lt;/h4&gt;
        &lt;p&gt;The Attachment Details pane displays a small un-cropped thumbnail of the image, as well as important information such as the filename, date uploaded, and image dimensions in pixels.&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    
  &lt;/div&gt;

  &lt;!-- Controls --&gt;
  &lt;a class=&quot;left carousel-control&quot; href=&quot;#step-image&quot; role=&quot;button&quot; data-slide=&quot;prev&quot;&gt;
    &lt;i class=&quot;fa fa-angle-left&quot;&gt;&lt;/i&gt;
  &lt;/a&gt;
  &lt;a class=&quot;right carousel-control&quot; href=&quot;#step-image&quot; role=&quot;button&quot; data-slide=&quot;next&quot;&gt;
    &lt;i class=&quot;fa fa-angle-right&quot;&gt;&lt;/i&gt;
  &lt;/a&gt;
&lt;/div&gt;</code></pre>
						</div>
						<div class="col-xs-12 col-lg-6">
						<div class="code-window">
								<div class="window-bar">
									<div class="circles">
										<span class="circle circle-green"></span>
										<span class="circle circle-yellow"></span>
										<span class="circle circle-red"></span>
									</div>
									<div class="languages">
										<span>Example</span>
									</div>
								</div>
								<div class="code-output">
									<div id="step-image" class="step-image carousel slide">
										<!-- Indicators -->
										<ol class="carousel-indicators">
											<li data-target="#step-image" data-slide-to="0" class="active"></li>
											<li data-target="#step-image" data-slide-to="1"></li>
											<li data-target="#step-image" data-slide-to="2"></li>
											<li data-target="#step-image" data-slide-to="3"></li>
										</ol>

										<!-- Wrapper for slides -->
										<div class="carousel-inner" role="listbox">
											<div class="item active">
												<img src="images/step1.png" alt="">
												<div class="carousel-caption">
												<h4>Placing your cursor</h4>
												<p>In order to add an image to your page or post, you must first insert your cursor in the place in the text where you want the image to appear. By placing your cursor within your text, you can add images inline with your content. You can also place your cursor on a blank line if you want the image to appear by itself instead.</p>
											  </div>
											</div>

											<div class="item">
											  <img src="images/step2.png" alt="">
											  <div class="carousel-caption">
												<h4>Click the Add Media button</h4>
												<p>Once you’ve placed your cursor on the line where you want your image to appear, click on the Add Media button to launch the media uploader interface, and then select the Insert Media option from the list of actions in the left side of the media uploader window.</p>
											  </div>
											</div>

											<div class="item">
											  <img src="images/step3.png" alt="">
											  <div class="carousel-caption">
												<h4>Add or Select Your Image</h4>
												<div>
												  <p>You can add or select the image you want to add to your page or post by choosing from either of the following options in the center of the media uploader window:</p>
												  <ul>
													<li><strong>Upload Files:</strong> Upload the image you want to use from your computer by dragging it into the upload area.</li>
													<li><strong>Media Library:</strong> Select from any previously uploaded images in the media library by clicking on the one you wish to add to your page or post.</li>
												  </ul>
												</div>
											  </div>
											</div>

											<div class="item">
											  <img src="images/step4.png" alt="">
											  <div class="carousel-caption">
												<h4>Attachment Details</h4>
												<p>The Attachment Details pane displays a small un-cropped thumbnail of the image, as well as important information such as the filename, date uploaded, and image dimensions in pixels.</p>
											  </div>
											</div>
											
										 </div>

										 <!-- Controls -->
										 <a class="left carousel-control" href="#step-image" role="button" data-slide="prev">
											<i class="fa fa-angle-left"></i>
										 </a>
										 <a class="right carousel-control" href="#step-image" role="button" data-slide="next">
											<i class="fa fa-angle-right"></i>
										 </a>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<!-- Tabs -->
					<div class="row melis-pdc">				
						<div class="col-xs-12 col-lg-6">
							<h4>Tabs</h4>
							<pre><code class="html">&lt;div class=&quot;tabs tabs-text&quot;&gt;

  &lt;!-- Nav tabs --&gt;
  &lt;ul class=&quot;nav nav-tabs&quot; role=&quot;tablist&quot;&gt;
    &lt;li role=&quot;presentation&quot; class=&quot;active&quot;&gt;
      &lt;a href=&quot;#home1&quot; aria-controls=&quot;home&quot; role=&quot;tab&quot; data-toggle=&quot;tab&quot;&gt;Home&lt;/a&gt;
    &lt;/li&gt;
    &lt;li role=&quot;presentation&quot;&gt;
      &lt;a href=&quot;#profile1&quot; aria-controls=&quot;profile&quot; role=&quot;tab&quot; data-toggle=&quot;tab&quot;&gt;Profile&lt;/a&gt;
    &lt;/li&gt;
    &lt;li role=&quot;presentation&quot;&gt;
      &lt;a href=&quot;#messages1&quot; aria-controls=&quot;messages&quot; role=&quot;tab&quot; data-toggle=&quot;tab&quot;&gt;Messages&lt;/a&gt;
    &lt;/li&gt;
    &lt;li role=&quot;presentation&quot;&gt;
      &lt;a href=&quot;#settings1&quot; aria-controls=&quot;settings&quot; role=&quot;tab&quot; data-toggle=&quot;tab&quot;&gt;&lt;i class=&quot;fa fa-cogs&quot;&gt;
	  &lt;/i&gt; Settings&lt;/a&gt;
    &lt;/li&gt;
  &lt;/ul&gt;

  &lt;!-- Tab panes --&gt;
  &lt;div class=&quot;tab-content&quot;&gt;
    &lt;div role=&quot;tabpanel&quot; class=&quot;tab-pane active fade in&quot; id=&quot;home1&quot;&gt;Something about Home&lt;/div&gt;
    &lt;div role=&quot;tabpanel&quot; class=&quot;tab-pane fade&quot; id=&quot;profile1&quot;&gt;Something about Profile&lt;/div&gt;
    &lt;div role=&quot;tabpanel&quot; class=&quot;tab-pane fade&quot; id=&quot;messages1&quot;&gt;Something about Message&lt;/div&gt;
    &lt;div role=&quot;tabpanel&quot; class=&quot;tab-pane fade&quot; id=&quot;settings1&quot;&gt;Something about Settings with icon&lt;/div&gt;
  &lt;/div&gt;

&lt;/div&gt;</code></pre>
						</div>
						<div class="col-xs-12 col-lg-6">
						<div class="code-window">
								<div class="window-bar">
									<div class="circles">
										<span class="circle circle-green"></span>
										<span class="circle circle-yellow"></span>
										<span class="circle circle-red"></span>
									</div>
									<div class="languages">
										<span>Example</span>
									</div>
								</div>
								<div class="code-output">
									<div class="tabs tabs-text">
										<!-- Nav tabs -->
										<ul class="nav nav-tabs" role="tablist">
											<li role="presentation" class="active">
												<a href="#home1" aria-controls="home" role="tab" data-toggle="tab">Home</a>
											</li>
											<li role="presentation">
												<a href="#profile1" aria-controls="profile" role="tab" data-toggle="tab">Profile</a>
											</li>
											<li role="presentation">
												<a href="#messages1" aria-controls="messages" role="tab" data-toggle="tab">Messages</a>
											</li>
											<li role="presentation">
												<a href="#settings1" aria-controls="settings" role="tab" data-toggle="tab"><i class="fa fa-cogs"></i> Settings</a>
											</li>
										</ul>
										<!-- Tab panes -->
										<div class="tab-content">
											<div role="tabpanel" class="tab-pane active fade in" id="home1">Something about Home</div>
											<div role="tabpanel" class="tab-pane fade" id="profile1">Something about Profile</div>
											<div role="tabpanel" class="tab-pane fade" id="messages1">Something about Message</div>
											<div role="tabpanel" class="tab-pane fade" id="settings1">Something about Settings with icon</div>
										</div>

									</div>
								</div>
							</div>
						</div>
					</div>
					
					<!-- Breadcrumbs -->
					<div class="row melis-pdc">				
						<div class="col-xs-12 col-lg-6">
							<h4>Breadcrumbs</h4>
							<pre><code class="html">&lt;ol class=&quot;breadcrumb&quot;&gt;
  &lt;li class=&quot;active&quot;&gt;Home&lt;/li&gt;
&lt;/ol&gt;
&lt;ol class=&quot;breadcrumb&quot;&gt;
  &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;active&quot;&gt;Library&lt;/li&gt;
&lt;/ol&gt;
&lt;ol class=&quot;breadcrumb&quot;&gt;
  &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Library&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;active&quot;&gt;Data&lt;/li&gt;
&lt;/ol&gt;</code></pre>
						</div>
						<div class="col-xs-12 col-lg-6">
						<div class="code-window">
								<div class="window-bar">
									<div class="circles">
										<span class="circle circle-green"></span>
										<span class="circle circle-yellow"></span>
										<span class="circle circle-red"></span>
									</div>
									<div class="languages">
										<span>Example</span>
									</div>
								</div>
								<div class="code-output">
									<ol class="breadcrumb">
										<li class="active">Home</li>
									</ol>
									<ol class="breadcrumb">
										<li><a href="#">Home</a></li>
										<li class="active">Library</li>
									</ol>
									<ol class="breadcrumb">
										<li><a href="#">Home</a></li>
										<li><a href="#">Library</a></li>
										<li class="active">Data</li>
									</ol>
								</div>
							</div>
						</div>
					</div>							
				</div>
				
				<!-- Icons Tab -->
				<div id="tabs_icons" class="tab-pane">		
					<div class="melis-documentation-heading border-bottom">
						<h3>Icons</h3>						
					</div>									
					<!-- Icons -->
					<div class="row melis-pdc">				
						<div class="col-xs-12 col-lg-12">
							<h4 class="melis-documentation-heading border-bottom">Web Application Icons</h4>
							<div class="row fontawesome-icon-list">    
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-adjust"></i> adjust</div>
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-anchor"></i> anchor</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-archive"></i> archive</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-area-chart"></i> area-chart</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-arrows"></i> arrows</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-arrows-h"></i> arrows-h</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-arrows-v"></i> arrows-v</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-asterisk"></i> asterisk</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-at"></i> at</div>	
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-automobile"></i> automobile <span class="text-muted">(alias)</span></div>						
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-ban"></i> ban</div>	
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-bank"></i> bank <span class="text-muted">(alias)</span></div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-bar-chart"></i> bar-chart</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-bar-chart-o"></i> bar-chart-o <span class="text-muted">(alias)</span></div>					
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-barcode"></i> barcode</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-bars"></i> bars</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-bed"></i> bed</div>
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-beer"></i> beer</div>
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-bell"></i> bell</div>
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-bell-o"></i> bell-o</div>
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-bell-slash"></i> bell-slash</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-bell-slash-o"></i> bell-slash-o</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-bicycle"></i> bicycle</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-binoculars"></i> binoculars</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-birthday-cake"></i> birthday-cake</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-bolt"></i> bolt</div>
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-bomb"></i> bomb</div>
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-book"></i> book</div>
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-bookmark"></i> bookmark</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-bookmark-o"></i> bookmark-o</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-briefcase"></i> briefcase</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-bug"></i> bug</div>
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-building"></i> building</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-building-o"></i> building-o</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-bullhorn"></i> bullhorn</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-bullseye"></i> bullseye</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-bus"></i> bus</div>
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-cab"></i> cab <span class="text-muted">(alias)</span></div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-calculator"></i> calculator</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-calendar"></i> calendar</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-calendar-o"></i> calendar-o</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-camera"></i> camera</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-camera-retro"></i> camera-retro</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-car"></i> car</div>
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-caret-square-o-down"></i> caret-square-o-down</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-caret-square-o-left"></i> caret-square-o-left</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-caret-square-o-right"></i> caret-square-o-right</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-caret-square-o-up"></i> caret-square-o-up</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-cart-arrow-down"></i> cart-arrow-down</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-cart-plus"></i> cart-plus</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-cc"></i> cc</div>
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-certificate"></i> certificate</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-check"></i> check</div>
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-check-circle"></i> check-circle</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-check-circle-o"></i> check-circle-o</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-check-square"></i> check-square</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-check-square-o"></i> check-square-o</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-child"></i> child</div>
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-circle"></i> circle</div>								
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-circle-o"></i> circle-o</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-circle-o-notch"></i> circle-o-notch</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-circle-thin"></i> circle-thin</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-clock-o"></i> clock-o</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-close"></i> close <span class="text-muted">(alias)</span></div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-cloud"></i> cloud</div>
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-cloud-download"></i> cloud-download</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-cloud-upload"></i> cloud-upload</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-code"></i> code</div>
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-code-fork"></i> code-fork</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-coffee"></i> coffee</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-cog"></i> cog</div>
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-cogs"></i> cogs</div>
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-comment"></i> comment</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-comment-o"></i> comment-o</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-comments"></i> comments</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-comments-o"></i> comments-o</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-compass"></i> compass</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-copyright"></i> copyright</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-credit-card"></i> credit-card</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-crop"></i> crop</div>
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-crosshairs"></i> crosshairs</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-cube"></i> cube</div>
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-cubes"></i> cubes</div>
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-cutlery"></i> cutlery</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-dashboard"></i> dashboard <span class="text-muted">(alias)</span></div>
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-database"></i> database</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-desktop"></i> desktop</div>
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-diamond"></i> diamond</div>
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-dot-circle-o"></i> dot-circle-o</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-download"></i> download</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-edit"></i> edit <span class="text-muted">(alias)</span></div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-ellipsis-h"></i> ellipsis-h</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-ellipsis-v"></i> ellipsis-v</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-envelope"></i> envelope</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-envelope-o"></i> envelope-o</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-envelope-square"></i> envelope-square</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-eraser"></i> eraser</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-exchange"></i> exchange</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-exclamation"></i> exclamation</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-exclamation-circle"></i> exclamation-circle</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-exclamation-triangle"></i> exclamation-triangle</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-external-link"></i> external-link</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-external-link-square"></i> external-link-square</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-eye"></i> eye</div>
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-eye-slash"></i> eye-slash</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-eyedropper"></i> eyedropper</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-fax"></i> fax</div>
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-female"></i> female</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-fighter-jet"></i> fighter-jet</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-file-archive-o"></i> file-archive-o</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-file-audio-o"></i> file-audio-o</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-file-code-o"></i> file-code-o</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-file-excel-o"></i> file-excel-o</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-file-image-o"></i> file-image-o</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-file-movie-o"></i> file-movie-o <span class="text-muted">(alias)</span></div>				
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-file-pdf-o"></i> file-pdf-o</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-file-photo-o"></i> file-photo-o <span class="text-muted">(alias)</span></div>
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-file-picture-o"></i> file-picture-o <span class="text-muted">(alias)</span></div>
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-file-powerpoint-o"></i> file-powerpoint-o</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-file-sound-o"></i> file-sound-o <span class="text-muted">(alias)</span></div>
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-file-video-o"></i> file-video-o</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-file-word-o"></i> file-word-o</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-file-zip-o"></i> file-zip-o <span class="text-muted">(alias)</span></div>
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-film"></i> film</div>
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-filter"></i> filter</div>
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-fire"></i> fire</div>
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-fire-extinguisher"></i> fire-extinguisher</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-flag"></i> flag</div>
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-flag-checkered"></i> flag-checkered</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-flag-o"></i> flag-o</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-flash"></i> flash <span class="text-muted">(alias)</span></div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-flask"></i> flask</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-folder"></i> folder</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-folder-o"></i> folder-o</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-folder-open"></i> folder-open</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-folder-open-o"></i> folder-open-o</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-frown-o"></i> frown-o</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-futbol-o"></i> futbol-o</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-gamepad"></i> gamepad</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-gavel"></i> gavel</div>
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-gear"></i> gear <span class="text-muted">(alias)</span></div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-gears"></i> gears <span class="text-muted">(alias)</span></div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-genderless"></i> genderless <span class="text-muted">(alias)</span></div>						
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-gift"></i> gift</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-glass"></i> glass</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-globe"></i> globe</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-graduation-cap"></i> graduation-cap</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-group"></i> group <span class="text-muted">(alias)</span></div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-hdd-o"></i> hdd-o</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-headphones"></i> headphones</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-heart"></i> heart</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-heart-o"></i> heart-o</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-heartbeat"></i> heartbeat</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-history"></i> history</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-home"></i> home</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-hotel"></i> hotel <span class="text-muted">(alias)</span></div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-image"></i> image <span class="text-muted">(alias)</span></div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-inbox"></i> inbox</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-info"></i> info</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-info-circle"></i> info-circle</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-institution"></i> institution <span class="text-muted">(alias)</span></div>						
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-key"></i> key</div>	
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-keyboard-o"></i> keyboard-o</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-language"></i> language</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-laptop"></i> laptop</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-leaf"></i> leaf</div>								
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-legal"></i> legal <span class="text-muted">(alias)</span></div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-lemon-o"></i> lemon-o</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-level-down"></i> level-down</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-level-up"></i> level-up</div>								
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-life-bouy"></i> life-bouy <span class="text-muted">(alias)</span></div>						
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-life-buoy"></i> life-buoy <span class="text-muted">(alias)</span></div>					
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-life-ring"></i> life-ring</div>								
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-life-saver"></i> life-saver <span class="text-muted">(alias)</span></div>
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-lightbulb-o"></i> lightbulb-o</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-line-chart"></i> line-chart</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-location-arrow"></i> location-arrow</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-lock"></i> lock</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-magic"></i> magic</div>								
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-magnet"></i> magnet</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-mail-forward"></i> mail-forward <span class="text-muted">(alias)</span></div>					
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-mail-reply"></i> mail-reply <span class="text-muted">(alias)</span></div>						
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-mail-reply-all"></i> mail-reply-all <span class="text-muted">(alias)</span></div>					
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-male"></i> male</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-map-marker"></i> map-marker</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-meh-o"></i> meh-o</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-microphone"></i> microphone</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-microphone-slash"></i> microphone-slash</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-minus"></i> minus</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-minus-circle"></i> minus-circle</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-minus-square"></i> minus-square</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-minus-square-o"></i> minus-square-o</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-mobile"></i> mobile</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-mobile-phone"></i> mobile-phone <span class="text-muted">(alias)</span></div>					
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-money"></i> money</div>								
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-moon-o"></i> moon-o</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-mortar-board"></i> mortar-board <span class="text-muted">(alias)</span></div>					
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-motorcycle"></i> motorcycle</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-music"></i> music</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-navicon"></i> navicon <span class="text-muted">(alias)</span></div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-newspaper-o"></i> newspaper-o</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-paint-brush"></i> paint-brush</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-paper-plane"></i> paper-plane</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-paper-plane-o"></i> paper-plane-o</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-paw"></i> paw</div>	
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-pencil"></i> pencil</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-pencil-square"></i> pencil-square</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-pencil-square-o"></i> pencil-square-o</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-phone"></i> phone</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-phone-square"></i> phone-square</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-photo"></i> photo <span class="text-muted">(alias)</span></div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-picture-o"></i> picture-o</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-pie-chart"></i> pie-chart</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-plane"></i> plane</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-plug"></i> plug</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-plus"></i> plus</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-plus-circle"></i> plus-circle</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-plus-square"></i> plus-square</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-plus-square-o"></i> plus-square-o</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-power-off"></i> power-off</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-print"></i> print</div>						
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-puzzle-piece"></i> puzzle-piece</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-qrcode"></i> qrcode</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-question"></i> question</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-question-circle"></i> question-circle</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-quote-left"></i> quote-left</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-quote-right"></i> quote-right</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-random"></i> random</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-recycle"></i> recycle</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-refresh"></i> refresh</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-remove"></i> remove <span class="text-muted">(alias)</span></div>								
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-reorder"></i> reorder <span class="text-muted">(alias)</span></div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-reply"></i> reply</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-reply-all"></i> reply-all</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-retweet"></i> retweet</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-road"></i> road</div>								
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-rocket"></i> rocket</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-rss"></i> rss</div>
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-rss-square"></i> rss-square</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-search"></i> search</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-search-minus"></i> search-minus</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-search-plus"></i> search-plus</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-send"></i> send <span class="text-muted">(alias)</span></div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-send-o"></i> send-o <span class="text-muted">(alias)</span></div>								
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-server"></i> server</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-share"></i> share</div>								
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-share-alt"></i> share-alt</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-share-alt-square"></i> share-alt-square</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-share-square"></i> share-square</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-share-square-o"></i> share-square-o</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-shield"></i> shield</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-ship"></i> ship</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-shopping-cart"></i> shopping-cart</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-sign-in"></i> sign-in</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-sign-out"></i> sign-out</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-signal"></i> signal</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-sitemap"></i> sitemap</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-sliders"></i> sliders</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-smile-o"></i> smile-o</div>								
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-soccer-ball-o"></i> soccer-ball-o <span class="text-muted">(alias)</span></div>					
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-sort"></i> sort</div>						
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-sort-alpha-asc"></i> sort-alpha-asc</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-sort-alpha-desc"></i> sort-alpha-desc</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-sort-amount-asc"></i> sort-amount-asc</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-sort-amount-desc"></i> sort-amount-desc</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-sort-asc"></i> sort-asc</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-sort-desc"></i> sort-desc</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-sort-down"></i> sort-down <span class="text-muted">(alias)</span></div>						
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-sort-numeric-asc"></i> sort-numeric-asc</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-sort-numeric-desc"></i> sort-numeric-desc</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-sort-up"></i> sort-up <span class="text-muted">(alias)</span></div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-space-shuttle"></i> space-shuttle</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-spinner"></i> spinner</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-spoon"></i> spoon</div>								
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-square"></i> square</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-square-o"></i> square-o</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-star"></i> star</div>								
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-star-half"></i> star-half</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-star-half-empty"></i> star-half-empty <span class="text-muted">(alias)</span></div>				
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-star-half-full"></i> star-half-full <span class="text-muted">(alias)</span></div>				
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-star-half-o"></i> star-half-o</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-star-o"></i> star-o</div>								
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-street-view"></i> street-view</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-suitcase"></i> suitcase</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-sun-o"></i> sun-o</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-support"></i> support <span class="text-muted">(alias)</span></div>						
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-tablet"></i> tablet</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-tachometer"></i> tachometer</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-tag"></i> tag</div>	
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-tags"></i> tags</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-tasks"></i> tasks</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-taxi"></i> taxi</div>							
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-terminal"></i> terminal</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-thumb-tack"></i> thumb-tack</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-thumbs-down"></i> thumbs-down</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-thumbs-o-down"></i> thumbs-o-down</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-thumbs-o-up"></i> thumbs-o-up</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-thumbs-up"></i> thumbs-up</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-ticket"></i> ticket</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-times"></i> times</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-times-circle"></i> times-circle</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-times-circle-o"></i> times-circle-o</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-tint"></i> tint</div>					
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-toggle-down"></i> toggle-down <span class="text-muted">(alias)</span></div>						
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-toggle-left"></i> toggle-left <span class="text-muted">(alias)</span></div>						
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-toggle-off"></i> toggle-off</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-toggle-on"></i> toggle-on</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-toggle-right"></i> toggle-right <span class="text-muted">(alias)</span></div>					
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-toggle-up"></i> toggle-up <span class="text-muted">(alias)</span></div>					
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-trash"></i> trash</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-trash-o"></i> trash-o</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-tree"></i> tree</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-trophy"></i> trophy</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-truck"></i> truck</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-tty"></i> tty</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-umbrella"></i> umbrella</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-university"></i> university</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-unlock"></i> unlock</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-unlock-alt"></i> unlock-alt</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-unsorted"></i> unsorted <span class="text-muted">(alias)</span></div>				
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-upload"></i> upload</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-user"></i> user</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-user-plus"></i> user-plus</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-user-secret"></i> user-secret</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-user-times"></i> user-times</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-users"></i> users</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-video-camera"></i> video-camera</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-volume-down"></i> volume-down</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-volume-off"></i> volume-off</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-volume-up"></i> volume-up</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-warning"></i> warning <span class="text-muted">(alias)</span></div>					
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-wheelchair"></i> wheelchair</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-wifi"></i> wifi</div>									
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-wrench"></i> wrench</div>
							</div>
							<h4 class="melis-documentation-heading border-bottom">Transportation Icons</h4>
							<div class="row fontawesome-icon-list">
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-ambulance"></i> ambulance</div>							
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-automobile"></i> automobile <span class="text-muted">(alias)</span></div>
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-bicycle"></i> bicycle</div>
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-bus"></i> bus</div>
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-cab"></i> cab <span class="text-muted">(alias)</span></div>								
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-car"></i> car</div>
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-fighter-jet"></i> fighter-jet</div>								
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-motorcycle"></i> motorcycle</div>								
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-plane"></i> plane</div>
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-rocket"></i> rocket</div>
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-ship"></i> ship</div>
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-space-shuttle"></i> space-shuttle</div>								
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-subway"></i> subway</div>
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-taxi"></i> taxi</div>
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-train"></i> train</div>
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-truck"></i> truck</div>
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-wheelchair"></i> wheelchair</div>							
							</div>
							<h4 class="melis-documentation-heading border-bottom">Gender Icons</h4>
							<div class="row fontawesome-icon-list">
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-circle-thin"></i> circle-thin</div>								
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-genderless"></i> genderless <span class="text-muted">(alias)</span></div>
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-mars"></i> mars</div>
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-mars-double"></i> mars-double</div>								
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-mars-stroke"></i> mars-stroke</div>								
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-mars-stroke-h"></i> mars-stroke-h</div>								
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-mars-stroke-v"></i> mars-stroke-v</div>								
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-mercury"></i> mercury</div>
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-neuter"></i> neuter</div>
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-transgender"></i> transgender</div>								
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-transgender-alt"></i> transgender-alt</div>								
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-venus"></i> venus</div>
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-venus-double"></i> venus-double</div>								
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-venus-mars"></i> venus-mars</div>								
							</div>
							<h4 class="melis-documentation-heading border-bottom">File Type Icons</h4>
							<div class="row fontawesome-icon-list">
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-file"></i> file</div>
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-file-archive-o"></i> file-archive-o</div>								
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-file-audio-o"></i> file-audio-o</div>								
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-file-code-o"></i> file-code-o</div>								
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-file-excel-o"></i> file-excel-o</div>								
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-file-image-o"></i> file-image-o</div>								
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-file-movie-o"></i> file-movie-o <span class="text-muted">(alias)</span></div>
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-file-o"></i> file-o</div>
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-file-pdf-o"></i> file-pdf-o</div>								
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-file-photo-o"></i> file-photo-o <span class="text-muted">(alias)</span></div>
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-file-picture-o"></i> file-picture-o <span class="text-muted">(alias)</span></div>
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-file-powerpoint-o"></i> file-powerpoint-o</div>								
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-file-sound-o"></i> file-sound-o <span class="text-muted">(alias)</span></div>
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-file-text"></i> file-text</div>								
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-file-text-o"></i> file-text-o</div>								
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-file-video-o"></i> file-video-o</div>								
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-file-word-o"></i> file-word-o</div>								
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-file-zip-o"></i> file-zip-o <span class="text-muted">(alias)</span></div>
							</div>							
							<h4 class="melis-documentation-heading border-bottom">Form Control Icons</h4>
							<div class="row fontawesome-icon-list">
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-check-square"></i> check-square</div>								
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-check-square-o"></i> check-square-o</div>								
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-circle"></i> circle</div>
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-circle-o"></i> circle-o</div>								
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-dot-circle-o"></i>dot-circle-o</div>								
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-minus-square"></i> minus-square</div>								
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-minus-square-o"></i> minus-square-o</div>								
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-plus-square"></i> plus-square</div>								
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-plus-square-o"></i> plus-square-o</div>								
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-square"></i> square</div>
								<div class="fa-hover col-md-2 col-sm-2"><i class="fa fa-square-o"></i> square-o</div>								
							</div>
							<h4 class="melis-documentation-heading border-bottom">Animated Spinner Icons</h4>
							<div class="row fontawesome-icon-list">
								<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
								<span class="sr-only">Loading...</span>
								<i class="fa fa-circle-o-notch fa-spin fa-3x fa-fw"></i>
								<span class="sr-only">Loading...</span>
								<i class="fa fa-refresh fa-spin fa-3x fa-fw"></i>
								<span class="sr-only">Loading...</span>
								<i class="fa fa-cog fa-spin fa-3x fa-fw"></i>
								<span class="sr-only">Loading...</span>
								<i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
								<span class="sr-only">Loading...</span>
							</div>
						</div>
						<div class="col-xs-12 col-lg-12">
							<h4 class="melis-documentation-heading border-bottom">Large Icons</h4>
							<ul class="glyphicons-list">            
							  <li>
								<span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-asterisk</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-plus</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-euro" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-euro</span>
							  </li>
							  
							  <li>
								<span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-minus</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-cloud" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-cloud</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-envelope</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-pencil</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-glass" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-glass</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-music" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-music</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-search</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-heart</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-star</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-star-empty</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-user</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-film" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-film</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-th-large" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-th-large</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-th" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-th</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-th-list</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-ok</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-remove</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-zoom-in</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-zoom-out" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-zoom-out</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-off" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-off</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-signal" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-signal</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-cog</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-trash</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-home</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-file" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-file</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-time</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-road" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-road</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-download-alt</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-download" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-download</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-upload" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-upload</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-inbox" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-inbox</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-play-circle</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-repeat" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-repeat</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-refresh</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-list-alt</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-lock" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-lock</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-flag" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-flag</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-headphones" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-headphones</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-volume-off" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-volume-off</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-volume-down" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-volume-down</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-volume-up" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-volume-up</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-qrcode" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-qrcode</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-barcode" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-barcode</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-tag" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-tag</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-tags" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-tags</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-book" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-book</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-bookmark" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-bookmark</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-print" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-print</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-camera" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-camera</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-font" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-font</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-bold" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-bold</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-italic" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-italic</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-text-height" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-text-height</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-text-width" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-text-width</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-align-left" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-align-left</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-align-center" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-align-center</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-align-right" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-align-right</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-align-justify</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-list" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-list</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-indent-left" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-indent-left</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-indent-right" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-indent-right</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-facetime-video" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-facetime-video</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-picture" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-picture</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-map-marker</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-adjust" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-adjust</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-tint" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-tint</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-edit</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-share" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-share</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-check" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-check</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-move" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-move</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-step-backward" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-step-backward</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-fast-backward" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-fast-backward</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-backward" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-backward</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-play" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-play</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-pause" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-pause</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-stop" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-stop</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-forward" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-forward</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-fast-forward" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-fast-forward</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-step-forward" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-step-forward</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-eject" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-eject</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-chevron-left</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-chevron-right</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-plus-sign</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-minus-sign" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-minus-sign</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-remove-sign</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-ok-sign</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-question-sign</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-info-sign</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-screenshot" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-screenshot</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-remove-circle</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-ok-circle</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-ban-circle" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-ban-circle</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-arrow-left</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-arrow-right</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-arrow-up</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-arrow-down</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-share-alt</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-resize-full" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-resize-full</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-resize-small" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-resize-small</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-exclamation-sign</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-gift" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-gift</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-leaf" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-leaf</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-fire" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-fire</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-eye-open</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-eye-close</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-warning-sign" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-warning-sign</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-plane" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-plane</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-calendar</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-random" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-random</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-comment" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-comment</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-magnet" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-magnet</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-chevron-up</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-chevron-down</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-retweet" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-retweet</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-shopping-cart</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-folder-close" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-folder-close</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-folder-open</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-resize-vertical" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-resize-vertical</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-resize-horizontal" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-resize-horizontal</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-hdd" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-hdd</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-bullhorn" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-bullhorn</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-bell" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-bell</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-certificate" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-certificate</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-thumbs-up</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-thumbs-down" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-thumbs-down</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-hand-right</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-hand-left" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-hand-left</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-hand-up" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-hand-up</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-hand-down" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-hand-down</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-circle-arrow-right" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-circle-arrow-right</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-circle-arrow-left" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-circle-arrow-left</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-circle-arrow-up" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-circle-arrow-up</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-circle-arrow-down" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-circle-arrow-down</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-globe</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-wrench</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-tasks" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-tasks</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-filter" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-filter</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-briefcase</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-fullscreen</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-dashboard" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-dashboard</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-paperclip" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-paperclip</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-heart-empty" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-heart-empty</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-link" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-link</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-phone</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-pushpin</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-usd" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-usd</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-gbp" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-gbp</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-sort" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-sort</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-sort-by-alphabet" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-sort-by-alphabet</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-sort-by-alphabet-alt" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-sort-by-alphabet-alt</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-sort-by-order" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-sort-by-order</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-sort-by-order-alt" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-sort-by-order-alt</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-sort-by-attributes" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-sort-by-attributes</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-sort-by-attributes-alt" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-sort-by-attributes-alt</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-unchecked" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-unchecked</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-expand" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-expand</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-collapse-down" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-collapse-down</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-collapse-up" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-collapse-up</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-log-in</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-flash" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-flash</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-log-out</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-new-window</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-record" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-record</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-save" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-save</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-open" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-open</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-saved" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-saved</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-import" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-import</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-export" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-export</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-send" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-send</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-floppy-disk</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-floppy-saved" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-floppy-saved</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-floppy-remove" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-floppy-remove</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-floppy-save" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-floppy-save</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-floppy-open" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-floppy-open</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-credit-card</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-transfer" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-transfer</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-cutlery" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-cutlery</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-header" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-header</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-compressed" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-compressed</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-earphone</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-phone-alt</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-tower" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-tower</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-stats" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-stats</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-sd-video" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-sd-video</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-hd-video" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-hd-video</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-subtitles" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-subtitles</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-sound-stereo" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-sound-stereo</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-sound-dolby" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-sound-dolby</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-sound-5-1" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-sound-5-1</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-sound-6-1" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-sound-6-1</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-sound-7-1" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-sound-7-1</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-copyright-mark" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-copyright-mark</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-registration-mark" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-registration-mark</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-cloud-download</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-cloud-upload" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-cloud-upload</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-tree-conifer" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-tree-conifer</span>
							  </li>
							
							  <li>
								<span class="glyphicon glyphicon-tree-deciduous" aria-hidden="true"></span>
								<span class="glyphicon-class">glyphicon glyphicon-tree-deciduous</span>
							  </li>								
							</ul>					
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
    <!-- // Sidebar menu & content wrapper END -->
	
	</body>
</html>