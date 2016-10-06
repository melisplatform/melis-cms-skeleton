<?php include "header.php"?>
<div id="content" class="order-info-page">      
      	<div class="me-heading bg-white border-bottom">      		
      		<div class="row">      		
      			<div class="me-hl col-xs-12 col-md-6">
      				<h1 class="content-heading">
      				<a href="#" style="color: #686868;">Order</a>
      				 / ORD00001</h1>
      			</div>	      		
	      		<div class="me-hr col-xs-12 col-md-6">
	      			<a class="btn btn-success" title="Save Order"><i class="fa fa-save" style="padding-right:10px;"></i>Save Order</a>
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
						<a class="" data-toggle="tab" href="#tabs_basket" aria-expanded="false">
							<i class="icon-shopping-basket"></i>
							<span>Basket</span>
						</a>
					</li>
					<li class="">
						<a class="" data-toggle="tab" href="#tabs_address" aria-expanded="false">
							<i class="icon-map-location-1"></i>
							<span>Address</span>
						</a>
					</li>
					<li class="">
						<a class="" data-toggle="tab" href="#tabs_payment" aria-expanded="false">
							<i class="icon-money"></i>
							<span>Payment</span>
						</a>
					</li>
					<li class="">
						<a class="" data-toggle="tab" href="#tabs_shipping" aria-expanded="false">
							<i class="icon-shippment"></i>
							<span>Shipping</span>
						</a>
					</li>
					<li class="">
						<a class="" data-toggle="tab" href="#tabs_messages" aria-expanded="false">
							<i class="icon-comment-2"></i>
							<span>Messages</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
		
		<div class="tab-content innerAll spacing-x2">
			
			<!-- MAIN -->
			<div id="tabs_edition" class="active tab-pane">		
				<div class="melis-product-heading border-bottom">
					<h3>General Information</h3>
				</div>
				<!-- Order details container -->
				<div class="row melis-pdc">				
					<div class="col-xs-12 col-lg-6">					
						<div class="">
							<div class="pdc-heading clearfix">
								<h4>
									<i class="fa fa-shopping-cart"></i>
									Order #1
								</h4>
							</div>						
							<div class="pdc-content">
								<div class="me-action-button-cont">
									<div class="form-group">
										<label for="">Status</label>
										<select class="form-control" id="delivery-address-civility">
											<option>Current Delivery</option>
											<option>Parially Delivered</option>
											<option>Fully Delivered</option>
										</select>
									</div>
									<div class="form-group">
										<label for="">Order Code</label>
										<input type="text" class="form-control" name="" value="ORD00001" id="" placeholder="">
									</div>
								</div>
							</div>
						</div>
						
						
												
					</div>
				</div>			
				<!-- product details container -->
				<div class="row melis-pdc"></div>			
			</div>
			<!-- END MAIN -->	
			
			<!-- BASKET -->
			<div id="tabs_basket" class="tab-pane">
				<div class="melis-product-heading border-bottom clearfix">
					<h3>Baskets</h3>
				</div>
				<div class="row melis-pdc">			
					<div class="col-xs-12 col-md-12">
						<table id="order-info-table" class="me-table table table-striped table-primary dt-responsive nowrap no-footer dtr-inline dataTable" style="width: 100%">			
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
			<!-- END BASKET -->
			
			<!-- ADDRESS -->
			<div id="tabs_address" class="tab-pane">
				<div class="melis-product-heading border-bottom clearfix">
					<h3>Address</h3>
				</div>
				<div class="row melis-pdc">			
					<div class="col-xs-12 col-md-6">
						<div class="pdc-heading clearfix">
							<h4>
								<i class="fa fa-map-o"></i>
								Delivery Address
							</h4>
						</div>
						<form method="POST" name="" id="" class="me-action-button-cont" action="">
							<fieldset id="">
								<div class="form-group">
									<label class="label-block" for="">Default</label>
									<div class="make-switch bs-melis" data-on-label="Yes" data-off-label="No" data-text-label="<i class='fa fa-arrows-h'>">
										<input type="checkbox" checked>
									</div>
								</div>
								<div class="form-group">
									<label class="label-block" for="">Civility</label>
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
									<input type="text" class="form-control" name="" id="" placeholder="XXXXX">
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
							</fieldset>
						</form>	
					</div>
					<div class="col-xs-12 col-md-6">
						<div class="pdc-heading clearfix">
							<h4>
								<i class="fa fa-map"></i>
								Billing Address
							</h4>
						</div>	
						<form method="POST" name="" id="" class="me-action-button-cont" action="">
							<fieldset id="">
								<div class="form-group">
									<label class="label-block" for="">Default</label>
									<div class="make-switch bs-melis" data-on-label="Yes" data-off-label="No" data-text-label="<i class='fa fa-arrows-h'>">
										<input type="checkbox">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="label-block">Civility</label>
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
									<input type="text" class="form-control" name="" id="" placeholder="XXXXX">
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
							</fieldset>
						</form>	
					</div>		
				</div>			
			</div>
			<!-- END ADDRESS -->
			
			<!-- PAYMENT -->
			<div id="tabs_payment" class="tab-pane">
				<div class="melis-product-heading border-bottom clearfix">
					<h3>Payment</h3>
				</div>
				<div class="row melis-pdc">			
					<div class="col-xs-12 col-md-12">
						<table class="info-table">
							<tr>
								<td><label>Price</label></td>
								<td>4.675.60 €</td>
							</tr>
							<tr>
								<td><label>Order Price</label></td>
								<td>4.675.60 €</td>
							</tr>
							<tr>
								<td><label>Price Shipment</label></td>
								<td>0.00 €</td>
							</tr>
							<tr>
								<td><label>Type</label></td>
								<td>Card - VISA</td>
							</tr>
							<tr>
								<td><label>Validation</label></td>
								<td>G6CPHSY17UFX4C1BY0JPY21QE</td>
							</tr>
							<tr>
								<td><label>Payment Date</label></td>
								<td>Aug 11, 2016 6:21:58 AM</td>
							</tr>
							<tr>
								<td><label>Coupon</label></td>
								<td>COUP01 - 10%</td>
							</tr>
						</table>
					</div>		
				</div>			
			</div>
			<!-- END PAYMENT -->
			
			<!-- SHIPPING -->
			<div id="tabs_shipping" class="tab-pane">
				<div class="melis-product-heading border-bottom clearfix">
					<h3>Shipping</h3>
				</div>
				<div class="row melis-pdc">			
					<div class="col-xs-12 col-md-12">
						<form method="POST" name="" id="" class="" action="">
							<fieldset id="">
								<div class="form-group">
									<label for="">Delivery Code</label>
									<input type="text" class="form-control" name="" id="" placeholder="">
								</div>
								<div class="form-group">
									<label for="">Description</label>
									<textarea class="form-control" rows="8"></textarea>
								</div>
							</fieldset>
						</form>
					</div>		
				</div>			
			</div>
			<!-- END SHIPPING -->
			
			<!-- MESSAGES -->
			<div id="tabs_messages" class="tab-pane">
				<div class="melis-product-heading border-bottom clearfix">
					<h3>Messages</h3>
					<a data-toggle="modal" data-target="#addMessage" class="btn btn-success" title="Add Message">
						<i class="fa fa-comment" style="padding-right:10px;"></i>
						Add Message
					</a>
				</div>
				<div class="row melis-pdc">
					<div class="col-xs-12 col-md-12">									
						<div class="message-board">
							<div class="message-post">
								<div class="ord-msg-time">Jul 11, 2016 2:42:11 PM</div>
								<div class="ord-msg-post">Notice: Delayed on delivery due of storm.</div>
							</div>
						</div>
					</div>		
				</div>			
			</div>
			<!-- END MESSAGES -->
		</div>
	</div> 
</div>
<?php include "footer.php"?>