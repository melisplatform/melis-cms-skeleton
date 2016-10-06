<?php include "header.php"?>
<div id="content" class="order-info-page">      
      	<div class="me-heading bg-white border-bottom">      		
      		<div class="row">      		
      			<div class="me-hl col-xs-12 col-md-6">
      				<h1 class="content-heading">
      				<a href="#" style="color: #686868;">Client Info</a></h1>
      			</div>	      		
	      		<div class="me-hr col-xs-12 col-md-6">
	      			<a class="btn btn-success" title="Save Client's Info"><i class="fa fa-save" style="padding-right:10px;"></i>Save Client's Info</a>
					<a class="btn btn-danger" title="Cancel Order"><i class="fa fa-ban" style="padding-right:10px;"></i>Cancel</a>
	      		</div>
		      		
       		</div>
       		
      	</div>
	<!-- content -->
	<div class="content-cont">
		<!-- tab head -->
		<div class="widget widget-tabs widget-tabs-double-2 widget-tabs-responsive" style="margin-bottom:0">
			<div class="widget-head nav">
				<ul class="tabs-label nav-tabs">
					<li class="active">
						<a data-toggle="tab" href="#tabs_edition" aria-expanded="true">
							<i class="icon-sliders"></i>
							<span>Main</span>
						</a>
					</li>
					<li class="">
						<a class="" data-toggle="tab" href="#tabs_contact" aria-expanded="false">
							<i class="icon-phone-fill"></i>
							<span>Contact</span>
						</a>
					</li>
					<li class="">
						<a class="" data-toggle="tab" href="#tabs_company" aria-expanded="false">
							<i class="icon-building"></i>
							<span>Company</span>
						</a>
					</li>
					<li class="">
						<a class="" data-toggle="tab" href="#tabs_address" aria-expanded="false">
							<i class="icon-map-location-2"></i>
							<span>Address</span>
						</a>
					</li>
					<li class="">
						<a class="" data-toggle="tab" href="#tabs_orders" aria-expanded="false">
							<i class="icon-truck"></i>
							<span>Orders</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
		
		<div class="tab-content innerAll spacing-x2">
			
			<!-- MAIN -->
			<div id="tabs_edition" class="active tab-pane">		
				<div class="melis-product-heading border-bottom">
					<h3>Main Information</h3>
					<div class="make-switch bs-melis bs-medium" data-on-label="Online" data-off-label="Offline" data-text-label="Status">
						<input type="checkbox" checked>
					</div>
				</div>									
				
				<!-- Order details container -->
				<div class="row melis-pdc">				
					<div class="col-xs-12 col-lg-6">					
						<div class="">
							<div class="pdc-heading clearfix">
								<h4>
									<i class="fa fa-bars"></i>
									General Data
								</h4>																
							</div>						
							<div class="pdc-content">
								<div class="me-action-button-cont">
									<div class="form-group">
									<label class="label-block" for="">Locked</label>
										<div class="make-switch bs-melis" data-on-label="Yes" data-off-label="No" data-text-label="<i class='fa fa-arrows-h'>">
											<input type="checkbox">
										</div>
									</div>
									<div class="form-group">
									<label class="label-block" for="">Emailing</label>
										<div class="make-switch bs-melis" data-on-label="Yes" data-off-label="No" data-text-label="<i class='fa fa-arrows-h'>">
											<input type="checkbox" checked>
										</div>
									</div>
									<div class="form-group">
										<label for="">Country</label>
										<select class="form-control" id="delivery-address-civility">
											<option>Francais</option>
											<option>English</option>
										</select>
									</div>
									<div class="form-group">
										<label for="">Email (Login)</label>
										<input type="email" class="form-control" name="" value="yugimoto@gamestop.com" id="" placeholder="">
									</div>
									<div class="form-group">
										<label for="">Password</label>
										<input type="email" class="form-control" name="" value="" id="" placeholder="Don't put anything to keep unchanged">
									</div>
								</div>
							</div>
						</div>				
					</div>
					<div class="col-xs-12 col-lg-6">					
						<div class="">
							<div class="pdc-heading clearfix">
								<h4>
									<i class="fa fa-user"></i>
									Main Contact
								</h4>								
							</div>						
							<div class="pdc-content">
								<div class="me-action-button-cont">
									<table class="info-table">
										<tr>
											<td><label>Civility</label></td>
											<td>M</td>
										</tr>
										<tr>
											<td><label>First Name</label></td>
											<td>Yugi</td>
										</tr>
										<tr>
											<td><label>Last Name</label></td>
											<td>Moto</td>
										</tr>
										<tr>
											<td><label>Department</label></td>
											<td>Human Resource</td>
										</tr>
									</table>
								</div>
							</div>
						</div>				
					</div>
				</div>			
				<!-- product details container -->
				<div class="row melis-pdc"></div>			
			</div>
			<!-- END MAIN -->	
			
			<!-- CONTACT -->
			<div id="tabs_contact" class="tab-pane">
				<div class="melis-product-heading border-bottom clearfix">
					<h3>Contact Information</h3>					
					<!--<a class="btn btn-success" title="Add Contact"><i class="fa fa-plus" style="padding-right:10px;"></i>Add Contact</a>-->
				</div>
				<div class="row melis-pdc">			
					<div class="col-xs-12 col-md-12">
						<div class="add-client-contact">
							<form method="POST" name="" id="" class="" action="">
								<fieldset id="">
									<div class="form-group">
										<label for="">Civility</label>
										<select class="form-control" id="delivery-address-civility">
											<option>M</option>
											<option>Mme</option>
											<option>Mlle</option>
										</select>
									</div>
									<div class="form-group">
										<label for="">First Name</label>
										<input type="text" class="form-control" name="" id="" placeholder="">
									</div>
									<div class="form-group">
										<label for="">Last Name</label>
										<input type="text" class="form-control" name="" id="" placeholder="">
									</div>
									<div class="form-group">
										<label for="">Department</label>
										<input type="text" class="form-control" name="" id="" placeholder="">
									</div>
									<div class="form-group">
										<label for="">Email</label>
										<input type="email" class="form-control" name="" id="" placeholder="yourname@domain.com">
									</div>
									<div class="form-group">
										<label for="">Password</label>
										<input type="password" class="form-control" name="" id="" placeholder="">
									</div>
									<div class="form-group">
										<label for="">Mobile Phone</label>
										<input type="text" class="form-control" name="" id="" placeholder="09XXXXXXXXX">
									</div>
									<div class="form-group">
										<label for="">Landline</label>
										<input type="text" class="form-control" name="" id="" placeholder="0X XX XX XX XX">
									</div>
									<div class="form-group">
										<a class="btn btn-success client-save-address-btn" title="Save Adress"><i class="fa fa-save" style="padding-right:10px;"></i>Save Contact</a>
									</div>
								</fieldset>
							</form>
						</div>	
					</div>		
				</div>			
			</div>
			<!-- END CONTACT -->
			
			<!-- COMPANY -->
			<div id="tabs_company" class="tab-pane">
				<div class="melis-product-heading border-bottom clearfix">
					<h3>Company</h3>
				</div>
				<div class="row melis-pdc">			
					<div class="col-xs-12 col-md-12">						
						<form method="POST" name="" id="" class="" action="">
							<fieldset id="">
								<div class="form-group">
									<label for="">Type of Company</label>
									<input type="text" class="form-control" name="" id="" placeholder="">
								</div>
								<div class="form-group">
									<label for="">Name</label>
									<input type="text" class="form-control" name="" id="" placeholder="">
								</div>
								<div class="form-group">
									<label for="">Registration Number</label>
									<input type="text" class="form-control" name="" id="" placeholder="">
								</div>								
							</fieldset>
						</form>	
					</div>	
				</div>			
			</div>
			<!-- END COMPANY -->
			
			<!-- ADDRESS -->
			<div id="tabs_address" class="tab-pane">
				<div class="melis-product-heading border-bottom clearfix">
					<h3>Address</h3>
					<a class="btn btn-success client-add-address-btn" title="Add Adress"><i class="fa fa-plus" style="padding-right:10px;"></i>Add Adress</a>
				</div>
				<div class="row melis-pdc">			
					<div class="col-xs-12 col-md-12">
						<div class="add-client-address me-action-button-cont">
							<form method="POST" name="" id="" class="" action="">
								<fieldset id="">
									<div class="form-group">
										<div class="make-switch bs-melis bs-medium" data-on-label="Delivery" data-off-label="Billing" data-text-label="Type">
											<input type="checkbox">
										</div>
									</div>
									<div class="form-group">
										<label class="label-block" for="">Default</label>
										<div class="make-switch bs-melis" data-on-label="Yes" data-off-label="No" data-text-label="<i class='fa fa-arrows-h'>">
											<input type="checkbox">
										</div>
									</div>
									<div class="form-group">
										<label for="">Civility</label>
										<select class="form-control" id="delivery-address-civility">
											<option>M</option>
											<option>Mme</option>
											<option>Mlle</option>
										</select>
									</div>
									<div class="form-group">
										<label for="">First Name</label>
										<input type="text" class="form-control" name="" id="" placeholder="">
									</div>
									<div class="form-group">
										<label for="">Last Name</label>
										<input type="text" class="form-control" name="" id="" placeholder="">
									</div>
									<div class="form-group">
										<label for="">Number</label>
										<input type="text" class="form-control" name="" id="" placeholder="">
									</div>
									<div class="form-group">
										<label for="">Stair</label>
										<input type="text" class="form-control" name="" id="" placeholder="">
									</div>
									<div class="form-group">
										<label for="">Building</label>
										<input type="text" class="form-control" name="" id="" placeholder="">
									</div>
									<div class="form-group">
										<label for="">Company</label>
										<input type="text" class="form-control" name="" id="" placeholder="">
									</div>
									<div class="form-group">
										<label for="">Street</label>
										<input type="text" class="form-control" name="" id="" placeholder="">
									</div>
									<div class="form-group">
										<label for="">Zip Code</label>
										<input type="text" class="form-control" name="" id="" placeholder="">
									</div>
									<div class="form-group">
										<label for="">State</label>
										<input type="text" class="form-control" name="" id="" placeholder="">
									</div>
									<div class="form-group">
										<label for="">Country</label>
										<input type="text" class="form-control" name="" id="" placeholder="">
									</div>
									<div class="form-group">
										<label for="">Infos Comp.</label>
										<input type="text" class="form-control" name="" id="" placeholder="">
									</div>
									<div class="form-group">
										<label for="">Mobile Phone</label>
										<input type="text" class="form-control" name="" id="" placeholder="09XXXXXXXXX">
									</div>
									<div class="form-group">
										<label for="">Landline</label>
										<input type="text" class="form-control" name="" id="" placeholder="0X XX XX XX XX">
									</div>
									<div class="form-group">
										<a class="btn btn-success client-save-address-btn" title="Save Adress"><i class="fa fa-save" style="padding-right:10px;"></i>Save Address</a>
									</div>
								</fieldset>
							</form>
						</div>		
					</div>		
				</div>			
			</div>
			<!-- END ADDRESS -->
			
			<!-- ORDERS -->
			<div id="tabs_orders" class="tab-pane">
				<div class="melis-product-heading border-bottom clearfix">
					<h3>Shipping</h3>
				</div>
				<div class="row melis-pdc">			
					<div class="col-xs-12 col-md-12">
						<table id="client-order-table" class="me-table table table-striped table-primary dt-responsive nowrap no-footer dtr-inline dataTable" style="width: 100%">			
							<thead>
								<tr>
									<th class="center th-check" style="width: 30px;">					        	
										<div class="checkbox checkbox-single" style="width: 30px;">
											<label class="checkbox-custom">
												<i class="fa fa-fw fa-square-o"></i>
												<input type="checkbox" class="check-all" checked="checked">
											</label>
										</div>
									</th>
									<th class="center">ID</th>
									<th class="center" style="width: 160px;">SKU</th>
									<th class="center" style="width: 70px;">QTY</th>
									<th class="center" style="width: 100px;">Price w/ Tax</th>
									<th class="center" style="width: 70px;">Name</th>
									<th class="center">Catalogue</th>
								</tr>
							</thead>						
							<tbody>
								<tr>
									<td class="text-center">
										<div class="checkbox checkbox-single margin-none">
											<label class="checkbox-custom">
												<i class="fa fa-fw fa-square-o"></i>
												<input type="checkbox" checked="checked">
											</label>
										</div>
									</td>
									<td class="center">1</td>
									<td class="center" style="font-size: 14px;">
										<a href="product-variants.php" target="_blank" >PRD-70321-OK</a>
									</td>
									<td class="center">1</td>
									<td class="text-right">1.400.10 €</td>
									<td class="center">Super Awesome Long Sleeve</td>										
									<td class="center">Summer 2016</td>										
								</tr>
								<tr>
									<td class="text-center">
										<div class="checkbox checkbox-single margin-none">
											<label class="checkbox-custom">
												<i class="fa fa-fw fa-square-o"></i>
												<input type="checkbox" checked="checked">
											</label>
										</div>
									</td>
									<td class="center">2</td>
									<td class="center" style="font-size: 14px;">
										<a href="product-variants.php" target="_blank" >PRD-65001-FK</a>
									</td>
									<td class="center">1</td>
									<td class="text-right">2.210.25 €</td>
									<td class="center">Super Awesome Short</td>										
									<td class="center">Summer 2016</td>										
								</tr>
								<tr>
									<td class="text-center">
										<div class="checkbox checkbox-single margin-none">
											<label class="checkbox-custom">
												<i class="fa fa-fw fa-square-o"></i>
												<input type="checkbox" checked="checked">
											</label>
										</div>
									</td>
									<td class="center">3</td>
									<td class="center" style="font-size: 14px;">
										<a href="product-variants.php" target="_blank" >PRD-88888-1G</a>
									</td>
									<td class="center">1</td>
									<td class="text-right">1.065.25 €</td>
									<td class="center">Awesome Jacket</td>										
									<td class="center">Winter 2016</td>										
								</tr>
							</tbody>
						</table>
					</div>		
				</div>			
			</div>
			<!-- END ORDERS -->
			
		</div>
	</div> 
</div>
<?php include "footer.php"?>