<?php include "header.php"?>
 <div id="content" class="orders-page">      
      	<div class="me-heading bg-white border-bottom">      		
      		<div class="row">
				<div class="me-hl col-xs-12 col-md-9">
      				<h1 class="content-heading">Order Listing</h1>
      			</div>
				<div class="me-hl col-xs-12 col-md-3">
	      			<!--<a href="product-add.php?title=Adding Product" target="_blank" class="btn btn-success add-product float-right" title="Add product"><i class="fa fa-plus"></i> Add Order</a>-->
	      		</div>
       		</div>       		
      	</div>
        <!-- table container -->
    <div class="table-container">				
		<!-- content -->
        <div class="content-cont">
			<div class="tab-content innerAll spacing-x2">
				<table class="me-table table table-striped table-primary dt-responsive nowrap no-footer dtr-inline dataTable" id="order-listing-table" style="width: 100%">			
					<thead>
						<tr>
							<th class="center th-check" style="width: 30px;">					        	
								<div class="checkbox checkbox-single" style="width: 30px;">
									<label class="checkbox-custom">
										<i class="fa fa-fw fa-square-o"></i>
										<input type="checkbox" class="check-all">
									</label>
								</div>
							</th>
							<th class="center">ID</th>
							<th class="center">Status</th>
							<th class="center">Products</th>
							<th class="center">Price</th>
							<th class="center">Company</th>
							<th class="center">Civility</th>
							<th class="center">First Name</th>
							<th class="center">Last Name</th>
							<th class="center">Creation Date</th>
							<th class="center">Last Status Update</th>
							<th class="text-center">Action</th>
						</tr>
					</thead>			
					<tbody>
						<tr>
							<td class="text-center">
								<div class="checkbox checkbox-single margin-none">
									<label class="checkbox-custom">
										<i class="fa fa-fw fa-square-o"></i>
										<input type="checkbox" class="check-product">
									</label>
								</div>
							</td>
							<td class="center">1</td>							
							<td class="center"><span class="btn btn-success" style="border-radius: 4px;">Partially Delivered</span></td>	
							<td class="center">4</td>
							<td class="text-right">1.788.00 €</td>
							<td class="center">Duel Academy</td>
							<td class="center">M</td>
							<td class="center">Joey</td>
							<td class="center">Wheeler</td>
							<td class="center">Jun 5, 2016 8:00:12 PM</td>
							<td class="center">Jun 8, 2016 9:32:12 AM</td>
							<td class="text-center dtActionCls">							
								<a href="order-info.php" target="_blank" class="btn btn-success" ><i class="fa fa-search" title="View"></i>
							</td>
						</tr>						
						<tr>
							<td class="text-center">
								<div class="checkbox checkbox-single margin-none">
									<label class="checkbox-custom">
										<i class="fa fa-fw fa-square-o"></i>
										<input type="checkbox" class="check-product">
									</label>
								</div>
							</td>
							<td class="center">2</td>							
							<td class="center"><span class="btn btn-default" style="border-radius: 4px;">Current Delivery</span></td>	
							<td class="center">6</td>
							<td class="text-right">2.999.45 €</td>
							<td class="center"></td>
							<td class="center">Mlle</td>
							<td class="center">Trinity</td>
							<td class="center">Doe</td>
							<td class="center">Aug 15, 2016 2:00:12 PM</td>
							<td class="center">Aug 18, 2016 6:32:12 AM</td>
							<td class="text-center dtActionCls">							
								<a href="order-info.php" target="_blank" class="btn btn-success" ><i class="fa fa-search" title="View"></i>
							</td>
						</tr>						
						<tr>
							<td class="text-center">
								<div class="checkbox checkbox-single margin-none">
									<label class="checkbox-custom">
										<i class="fa fa-fw fa-square-o"></i>
										<input type="checkbox" class="check-product">
									</label>
								</div>
							</td>
							<td class="center">3</td>							
							<td class="center"><span class="btn btn-success" style="border-radius: 4px;">Partially Delivered</span></td>	
							<td class="center">1</td>
							<td class="text-right">4.999.45 €</td>
							<td class="center">Game Stop</td>
							<td class="center">M</td>
							<td class="center">Yugi</td>
							<td class="center">Moto</td>
							<td class="center">Jul 25, 2016 8:00:12 PM</td>
							<td class="center">Jul 30, 2016 9:32:12 AM</td>
							<td class="text-center dtActionCls">							
								<a href="order-info.php" target="_blank" class="btn btn-success" ><i class="fa fa-search" title="View"></i>
							</td>
						</tr>
						<tr>
							<td class="text-center">
								<div class="checkbox checkbox-single margin-none">
									<label class="checkbox-custom">
										<i class="fa fa-fw fa-square-o"></i>
										<input type="checkbox" class="check-product">
									</label>
								</div>
							</td>
							<td class="center">4</td>							
							<td class="center"><span class="btn btn-default" style="border-radius: 4px;">Current Delivery</span></td>	
							<td class="center">1</td>
							<td class="text-right">499.95 €</td>
							<td class="center">Duel Academy</td>
							<td class="center">Mme</td>
							<td class="center">Jaden</td>
							<td class="center">Yuki</td>
							<td class="center">Aug 5, 2016 1:00:12 PM</td>
							<td class="center">Aug 8, 2016 2:32:22 PM</td>
							<td class="text-center dtActionCls">							
								<a href="order-info.php" target="_blank" class="btn btn-success" ><i class="fa fa-search" title="View"></i>
							</td>
						</tr>
						<tr>
							<td class="text-center">
								<div class="checkbox checkbox-single margin-none">
									<label class="checkbox-custom">
										<i class="fa fa-fw fa-square-o"></i>
										<input type="checkbox" class="check-product">
									</label>
								</div>
							</td>
							<td class="center">5</td>							
							<td class="center"><span class="btn btn-success" style="border-radius: 4px;">Fully Delivered</span></td>	
							<td class="center">3</td>
							<td class="text-right">2.123.45 €</td>
							<td class="center">Kaiba Corp.</td>
							<td class="center">M</td>
							<td class="center">Seto</td>
							<td class="center">Kaiba</td>
							<td class="center">Agu 11, 2016 6:00:12 PM</td>
							<td class="center">Aug 18, 2016 7:32:12 AM</td>

							<td class="text-center dtActionCls">							
								<a href="order-info.php" target="_blank" class="btn btn-success" ><i class="fa fa-search" title="View"></i>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div><!-- // Content END -->
<?php include "footer.php"?>