<?php include "header.php"?>
 <div id="content" class="orders-page">      
      	<div class="me-heading bg-white border-bottom">      		
      		<div class="row">
				<div class="me-hl col-xs-12 col-md-9">
      				<h1 class="content-heading">Clients Listing</h1>
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
				<table class="me-table table table-striped table-primary dt-responsive nowrap no-footer dtr-inline dataTable" id="clients-listing-table" style="width: 100%">			
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
							<th class="center">Company</th>
							<th class="center">Address</th>
							<th class="center">Zipcode</th>
							<th class="center">City</th>
							<th class="center">Country</th>
							<th class="center">Tel</th>
							<th class="center">Fax</th>
							<th class="center">Dept.</th>
							<th class="center">Civility</th>
							<th class="center">First Name</th>
							<th class="center">Last Name</th>
							<th class="center">Email</th>
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
							<td class="center"><span class="text-success"><i class="fa fa-fw fa-circle"></i></span></td>	
							<td class="center">Kaiba Corp.</td>
							<td class="center">4Fl., Five Star Hotel, Mainland Street, North Drive, Kell Avenue</td>
							<td class="center">90001</td>
							<td class="center">Los Angeles</td>
							<td class="center">United State</td>
							<td class="center">3232-3232-2232</td>
							<td class="center">2111-2356-7755</td>
							<td class="center">Human Resource</td>
							<td class="center">M</td>
							<td class="center">Seto</td>
							<td class="center">Kaiba</td>
							<td class="center">setokaiba@kaibacorp.com</td>
							<td class="text-center dtActionCls">
								<a href="clients-info.php" target="_blank" class="btn btn-success" ><i class="fa fa-search" title="View"></i>
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
							<td class="center"><span class="text-success"><i class="fa fa-fw fa-circle"></i></span></td>	
							<td class="center">Duel Academy</td>
							<td class="center">&nbsp;</td>
							<td class="center">&nbsp;</td>
							<td class="center">&nbsp;</td>
							<td class="center">&nbsp;</td>
							<td class="center">&nbsp;</td>
							<td class="center">&nbsp;</td>
							<td class="center">&nbsp;</td>
							<td class="center">M</td>
							<td class="center">Joey</td>
							<td class="center">Wheeler</td>
							<td class="center">joeywheeler@duelacademy.com</td>
							<td class="text-center dtActionCls">
								<a href="clients-info.php" target="_blank" class="btn btn-success" ><i class="fa fa-search" title="View"></i>
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
							<td class="center"><span class="text-success"><i class="fa fa-fw fa-circle"></i></span></td>	
							<td class="center">&nbsp;</td>
							<td class="center">&nbsp;</td>
							<td class="center">&nbsp;</td>
							<td class="center">&nbsp;</td>
							<td class="center">&nbsp;</td>
							<td class="center">&nbsp;</td>
							<td class="center">&nbsp;</td>
							<td class="center">&nbsp;</td>
							<td class="center">Mll</td>
							<td class="center">Trinity</td>
							<td class="center">Doe</td>
							<td class="center">trinity008@gmail.com</td>
							<td class="text-center dtActionCls">
								<a href="clients-info.php" target="_blank" class="btn btn-success" ><i class="fa fa-search" title="View"></i>
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
							<td class="center"><span class="text-success"><i class="fa fa-fw fa-circle"></i></span></td>
							<td class="center">Duel Academy</td>
							<td class="center">&nbsp;</td>
							<td class="center">&nbsp;</td>
							<td class="center">&nbsp;</td>
							<td class="center">&nbsp;</td>
							<td class="center">&nbsp;</td>
							<td class="center">&nbsp;</td>
							<td class="center">&nbsp;</td>
							<td class="center">Mme</td>
							<td class="center">Jaden</td>
							<td class="center">Yuki</td>
							<td class="center">jadenyuki@duelacademy.com</td>
							<td class="text-center dtActionCls">
								<a href="clients-info.php" target="_blank" class="btn btn-success" ><i class="fa fa-search" title="View"></i>
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
							<td class="center"><span class="text-success"><i class="fa fa-fw fa-circle"></i></span></td>	
							<td class="center">Game Stop</td>
							<td class="center">&nbsp;</td>
							<td class="center">&nbsp;</td>
							<td class="center">&nbsp;</td>
							<td class="center">&nbsp;</td>
							<td class="center">&nbsp;</td>
							<td class="center">&nbsp;</td>
							<td class="center">&nbsp;</td>
							<td class="center">M</td>
							<td class="center">Yugi</td>
							<td class="center">Moto</td>
							<td class="center">yugimoto@gamestop.com</td>
							<td class="text-center dtActionCls">
								<a href="clients-info.php" target="_blank" class="btn btn-success" ><i class="fa fa-search" title="View"></i>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div><!-- // Content END -->
<?php include "footer.php"?>