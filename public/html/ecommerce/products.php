<?php include "header.php"?>
 <div id="content" class="products-page">      
      	<div class="me-heading bg-white border-bottom">      		
      		<div class="row">
				<div class="me-hl col-xs-12 col-md-9">
      				<h1 class="content-heading">Product Listing</h1>
      			</div>
				<div class="me-hl col-xs-12 col-md-3">
	      			<a href="product-add.php?title=Adding Product" target="_blank" class="btn btn-success add-product float-right" title="Add product"><i class="fa fa-plus"></i> Add Product</a>
	      		</div>
       		</div>       		
      	</div>
        <!-- table container -->
        <div class="table-container">				
		<!-- content -->
         <div class="content-cont">
			<div class="row melis-pdc">
				<div class="tab-content innerAll spacing-x2">
					<table class="me-table table table-striped table-primary dt-responsive nowrap no-footer dtr-inline dataTable" id="product-listing-table" style="width: 100%">					
						<thead>
							<tr>
								<th class="center" style="width: 50px;"><i class="fa fa-reorder"></i></th>
								<th class="center th-check" style="width: 30px;">					        	
									<div class="checkbox checkbox-single" style="width: 30px;">
										<label class="checkbox-custom">
											<i class="fa fa-fw fa-square-o"></i>
											<input type="checkbox" class="check-all">
										</label>
									</div>
								</th>
								<th class="center" style="width: 50px;">ID</th>
								<th class="center th-image" style="width: 100px;">Image</th>
								<th class="center th-status" style="width: 70px;">Status</th>
								<th class="center th-name">Name</th>
								<th class="center th-cat" style="width: 160px;">Categories</th>
								<th class="text-center th-action">Action</th>
							</tr>
						</thead>			 
						<tbody>
							<tr>
								<td class="center">1</td>
								<td class="text-center">
									<div class="checkbox checkbox-single margin-none">
										<label class="checkbox-custom">
											<i class="fa fa-fw fa-square-o"></i>
											<input type="checkbox" class="check-product">
										</label>
									</div>
								</td>
								<td class="center">1</td>
								<td class="center">
									<a href="product-add.php" target="_blank"><img src="images/fashion/female/2.jpg" width="60" ></a>
								</td>
								<td class="center">
									<span class="text-success"><i class="fa fa-fw fa-circle"></i></span>
								</td>
								<td style="font-size: 14px;">
									<a id="row-1"  class="tooltipTable" href="product-add.php" target="_blank" >Super Awesome Long Sleeve</a>
									<?php tooltipTables('1')?>	
								</td>
								<td>
									<span class="cell-val-table" style="margin:0 2px 4px 0;display:inline-block;padding: 3px 10px;background: #ECEBEB;border-radius: 4px;color: #7D7B7B;">Shirt</span>
									<span class="cell-val-table" style="margin:0 2px 4px 0;display:inline-block;padding: 3px 10px;background: #ECEBEB;border-radius: 4px;color: #7D7B7B;">Long Pants</span>
									<span class="cell-val-table" style="margin:0 2px 4px 0;display:inline-block;padding: 3px 10px;background: #ECEBEB;border-radius: 4px;color: #7D7B7B;">Shiny Shoes</span>
									<span class="cell-val-table" style="margin:0 2px 4px 0;display:inline-block;padding: 3px 10px;background: #ECEBEB;border-radius: 4px;color: #7D7B7B;">Yellow</span>
									<span class="cell-val-table" style="margin:0 2px 4px 0;display:inline-block;padding: 3px 10px;background: #ECEBEB;border-radius: 4px;color: #7D7B7B;">Black Stripe</span>
									<span class="cell-val-table" style="margin:0 2px 4px 0;display:inline-block;padding: 3px 10px;background: #ECEBEB;border-radius: 4px;color: #7D7B7B;">Guinuine</span>
									<span class="cell-val-table" style="margin:0 2px 4px 0;display:inline-block;padding: 3px 10px;background: #ECEBEB;border-radius: 4px;color: #7D7B7B;">Test</span>
									<span class="cell-val-table" style="margin:0 2px 4px 0;display:inline-block;padding: 3px 10px;background: #ECEBEB;border-radius: 4px;color: #7D7B7B;">Very Long Pants</span>
									<span class="cell-val-table" style="margin:0 2px 4px 0;display:inline-block;padding: 3px 10px;background: #ECEBEB;border-radius: 4px;color: #7D7B7B;">Super Shiny Shoes</span>
									
								</td>
								<td class="text-center">
									<a href="product-add.php" target="_blank" class="btn btn-success" ><i class="fa fa-pencil" title="Edit"></i></a>		
									<a href="" class="btn btn-danger" style="margin-right:5px;"><i data-toggle="modal"class="fa fa-times" title="Delete"></i></a>
								</td>
								
							</tr>						
							<tr>
								<td class="center">2</td>
								<td class="text-center">
									<div class="checkbox checkbox-single margin-none">
										<label class="checkbox-custom">
											<i class="fa fa-fw fa-square-o"></i>
											<input type="checkbox" class="check-product">
										</label>
									</div>
								</td>
								<td class="center">2</td>
								<td class="center">
									<a href="product-add.php" target="_blank"><img src="images/fashion/female/1.jpg" width="60" ></a>
								</td>
								<td class="center">
									<span class="text-success"><i class="fa fa-fw fa-circle"></i></span>
								</td>
								<td style="font-size: 14px;">
									<a id="row-2"  class="tooltipTable" href="product-add.php" target="_blank" >Summer board shorts</a>
									<?php tooltipTables('2')?>	
								</td>
								<td>
									<span class="cell-val-table" style="margin:0 2px 4px 0;display:inline-block;padding: 3px 10px;background: #ECEBEB;border-radius: 4px;color: #7D7B7B;">awesome shirt</span>
									<span class="cell-val-table" style="margin:0 2px 4px 0;display:inline-block;padding: 3px 10px;background: #ECEBEB;border-radius: 4px;color: #7D7B7B;">pants</span>
									<span class="cell-val-table" style="margin:0 2px 4px 0;display:inline-block;padding: 3px 10px;background: #ECEBEB;border-radius: 4px;color: #7D7B7B;">shoes</span>
									
								</td>
								<td class="text-center dtActionCls">							
									<a href="product-add.php" target="_blank" class="btn btn-success" ><i class="fa fa-pencil" title="Edit"></i></a>		
									<a href="" class="btn btn-danger" style="margin-right:5px;"><i class="fa fa-times" title="Delete"></i></a>
								</td>
							</tr>						
							<tr>
								<td class="center">3</td>
								<td class="text-center">
									<div class="checkbox checkbox-single margin-none">
										<label class="checkbox-custom">
											<i class="fa fa-fw fa-square-o"></i>
											<input type="checkbox">
										</label>
									</div>
								</td>
								<td class="center">3</td>
								<td class="center">
									<a href="product-add.php" target="_blank"><img src="images/fashion/female/3.jpg" width="60" ></a>
								</td>
								<td class="center">
									<span class="text-success"><i class="fa fa-fw fa-circle"></i></span>
								</td>
								<td style="font-size: 14px;">
									<a id="row-3"  class="tooltipTable" href="product-add.php" target="_blank" >Simple Long Sleeve</a>
									<?php tooltipTables('3')?>	
								</td>
								<td>
									<span class="cell-val-table" style="margin:0 2px 4px 0;display:inline-block;padding: 3px 10px;background: #ECEBEB;border-radius: 4px;color: #7D7B7B;">pants</span>	
								</td>
								<td class="text-center dtActionCls">
									<a href="product-add.php" target="_blank" class="btn btn-success" ><i class="fa fa-pencil" title="Edit"></i></a>	
									<a href="" class="btn btn-danger" style="margin-right:5px;"><i class="fa fa-times" title="Delete"></i></a>
								</td>
							</tr>						
							<tr>
								<td class="center">4</td>
								<td class="text-center">
									<div class="checkbox checkbox-single margin-none">
										<label class="checkbox-custom">
											<i class="fa fa-fw fa-square-o"></i>
											<input type="checkbox">
										</label>
									</div>
								</td>
								<td class="center">4</td>
								<td class="center">
									<a href="product-add.php" target="_blank"><img src="images/fashion/female/4.jpg" width="60" ></a>
								</td>
								<td class="center">
									<span class="text-success"><i class="fa fa-fw fa-circle"></i></span>
								</td>
								<td style="font-size: 14px;">
									<a id="row-4"  class="tooltipTable" href="product-add.php" target="_blank" >Summer Blouse</a>
									<?php tooltipTables('4')?>	
								</td>
								<td>
									<span class="cell-val-table" style="margin:0 2px 4px 0;display:inline-block;padding: 3px 10px;background: #ECEBEB;border-radius: 4px;color: #7D7B7B;">pants</span>	
									<span class="cell-val-table" style="margin:0 2px 4px 0;display:inline-block;padding: 3px 10px;background: #ECEBEB;border-radius: 4px;color: #7D7B7B;">long sleeves</span>
								</td>
								<td class="text-center dtActionCls">
									<a href="product-add.php" target="_blank" class="btn btn-success" ><i class="fa fa-pencil" title="Edit"></i></a>	
									<a href="" class="btn btn-danger" style="margin-right:5px;"><i class="fa fa-times" title="Delete"></i></a>
								</td>
							</tr>						
							<tr>
								<td class="center">5</td>
								<td class="text-center">
									<div class="checkbox checkbox-single margin-none">
										<label class="checkbox-custom">
											<i class="fa fa-fw fa-square-o"></i>
											<input type="checkbox">
										</label>
									</div>
								</td>
								<td class="center">5</td>
								<td class="center">
									<a href="product-add.php" target="_blank"><img src="images/fashion/female/5.jpg" width="60" ></a>
								</td>
								<td class="center">
									<span class="text-success"><i class="fa fa-fw fa-circle"></i></span>
								</td>
								<td style="font-size: 14px;">
									<a id="row-5"  class="tooltipTable" href="product-add.php" target="_blank" >Something amazing dress</a>
									<?php tooltipTables('5')?>	
								</td>
								<td>
									<span class="cell-val-table" style="margin:0 2px 4px 0;display:inline-block;padding: 3px 10px;background: #ECEBEB;border-radius: 4px;color: #7D7B7B;">dress</span>	
									<span class="cell-val-table" style="margin:0 2px 4px 0;display:inline-block;padding: 3px 10px;background: #ECEBEB;border-radius: 4px;color: #7D7B7B;">gown</span>
								</td>
								<td class="text-center dtActionCls">
									<a href="product-add.php" target="_blank" class="btn btn-success" ><i class="fa fa-pencil" title="Edit"></i></a>	
									<a href="" class="btn btn-danger" style="margin-right:5px;"><i class="fa fa-times" title="Delete"></i></a>
								</td>
							</tr>						
							<tr>
								<td class="center">6</td>
								<td class="text-center">
									<div class="checkbox checkbox-single margin-none">
										<label class="checkbox-custom">
											<i class="fa fa-fw fa-square-o"></i>
											<input type="checkbox">
										</label>
									</div>
								</td>
								<td class="center">6</td>
								<td class="center">
									<a href="product-add.php" target="_blank"><img src="images/fashion/female/6.jpg" width="60" ></a>
								</td>
								<td class="center">
									<span class="text-success"><i class="fa fa-fw fa-circle"></i></span>
								</td>
								<td style="font-size: 14px;">
									<a id="row-6"  class="tooltipTable" href="product-add.php" target="_blank" >Call it what you like dress</a>
									<?php tooltipTables('6')?>								
								</td>
								<td>
									<span class="cell-val-table" style="margin:0 2px 4px 0;display:inline-block;padding: 3px 10px;background: #ECEBEB;border-radius: 4px;color: #7D7B7B;">dress</span>	
									<span class="cell-val-table" style="margin:0 2px 4px 0;display:inline-block;padding: 3px 10px;background: #ECEBEB;border-radius: 4px;color: #7D7B7B;">shirt</span>
									<span class="cell-val-table" style="margin:0 2px 4px 0;display:inline-block;padding: 3px 10px;background: #ECEBEB;border-radius: 4px;color: #7D7B7B;">pants</span>
								</td>
								<td class="text-center dtActionCls">
									<a href="product-add.php" target="_blank" class="btn btn-success" ><i class="fa fa-pencil" title="Edit"></i></a>	
									<a href="" class="btn btn-danger" style="margin-right:5px;"><i class="fa fa-times" title="Delete"></i></a>
								</td>
							</tr>						
							<tr>
								<td class="center">7</td>
								<td class="text-center">
									<div class="checkbox checkbox-single margin-none">
										<label class="checkbox-custom">
											<i class="fa fa-fw fa-square-o"></i>
											<input type="checkbox">
										</label>
									</div>
								</td>
								<td class="center">7</td>
								<td class="center">
									<a href="product-add.php" target="_blank"><img src="images/fashion/female/7.jpg" width="60" ></a>
								</td>
								<td class="center">
									<span class="text-success"><i class="fa fa-fw fa-circle"></i></span>
								</td>
								<td style="font-size: 14px;">
									<a id="row-7"  class="tooltipTable" href="product-add.php" target="_blank" >Winter coat and alligator skin</a>
									<?php tooltipTables('7')?>	
								</td>
								<td>
									<span class="cell-val-table" style="margin:0 2px 4px 0;display:inline-block;padding: 3px 10px;background: #ECEBEB;border-radius: 4px;color: #7D7B7B;">shirt</span>
									<span class="cell-val-table" style="margin:0 2px 4px 0;display:inline-block;padding: 3px 10px;background: #ECEBEB;border-radius: 4px;color: #7D7B7B;">pants</span>
								</td>
								<td class="text-center dtActionCls">
									<a href="product-add.php" target="_blank" class="btn btn-success"><i class="fa fa-pencil" title="Edit"></i></a>	
									<a href="" class="btn btn-danger" style="margin-right:5px;"><i class="fa fa-times" title="Delete"></i></a>
									
								</td>
							</tr>						
							<tr>
								<td class="center">8</td>
								<td class="text-center">
									<div class="checkbox checkbox-single margin-none">
										<label class="checkbox-custom">
											<i class="fa fa-fw fa-square-o"></i>
											<input type="checkbox">
										</label>
									</div>
								</td>
								<td class="center">8</td>
								<td class="center">
									<a href="product-add.php" target="_blank"><img src="images/fashion/female/8.jpg" width="60" ></a>
								</td>
								<td class="center">
									<span class="text-success"><i class="fa fa-fw fa-circle"></i></span>
								</td>
								<td style="font-size: 14px;">
									<a id="row-8"  class="tooltipTable" href="product-add.php" target="_blank" >Black Paris Hoody</a>
									<?php tooltipTables('8')?>	
								</td>
								<td>
									<span class="cell-val-table" style="margin:0 2px 4px 0;display:inline-block;padding: 3px 10px;background: #ECEBEB;border-radius: 4px;color: #7D7B7B;">hood</span>
									<span class="cell-val-table" style="margin:0 2px 4px 0;display:inline-block;padding: 3px 10px;background: #ECEBEB;border-radius: 4px;color: #7D7B7B;">jacket</span>
									<span class="cell-val-table" style="margin:0 2px 4px 0;display:inline-block;padding: 3px 10px;background: #ECEBEB;border-radius: 4px;color: #7D7B7B;">coat</span>
									
								</td>
								<td class="text-center dtActionCls">
									<a href="product-add.php" target="_blank" class="btn btn-success" ><i class="fa fa-pencil" title="Edit"></i></a>	
									<a href="" class="btn btn-danger" style="margin-right:5px;"><i class="fa fa-times" title="Delete"></i></a>
								</td>
							</tr>
							<tr>
								<td class="center">9</td>
								<td class="text-center">
									<div class="checkbox checkbox-single margin-none">
										<label class="checkbox-custom">
											<i class="fa fa-fw fa-square-o"></i>
											<input type="checkbox">
										</label>
									</div>
								</td>
								<td class="center">9</td>
								<td class="center">
									<a href="product-add.php" target="_blank"><img src="images/fashion/female/8.jpg" width="60" ></a>
								</td>
								<td class="center">
									<span class="text-success"><i class="fa fa-fw fa-circle"></i></span>
								</td>
								<td style="font-size: 14px;">
									<a id="row-9"  class="tooltipTable" href="product-add.php" target="_blank" >Black Paris Hoody</a>
									<?php tooltipTables('9')?>	
								</td>
								<td>
									<span class="cell-val-table" style="margin:0 2px 4px 0;display:inline-block;padding: 3px 10px;background: #ECEBEB;border-radius: 4px;color: #7D7B7B;">hood</span>
									<span class="cell-val-table" style="margin:0 2px 4px 0;display:inline-block;padding: 3px 10px;background: #ECEBEB;border-radius: 4px;color: #7D7B7B;">jacket</span>
									<span class="cell-val-table" style="margin:0 2px 4px 0;display:inline-block;padding: 3px 10px;background: #ECEBEB;border-radius: 4px;color: #7D7B7B;">coat</span>
									
								</td>
								<td class="text-center dtActionCls">
									<a href="product-add.php" target="_blank" class="btn btn-success" ><i class="fa fa-pencil" title="Edit"></i></a>	
									<a href="" class="btn btn-danger" style="margin-right:5px;"><i class="fa fa-times" title="Delete"></i></a>
								</td>
							</tr>
							<tr>
								<td class="center">10</td>
								<td class="text-center ">
									<div class="checkbox checkbox-single margin-none">
										<label class="checkbox-custom">
											<i class="fa fa-fw fa-square-o"></i>
											<input type="checkbox">
										</label>
									</div>
								</td>
								<td class="center">10</td>
								<td class="center">
									<a href="product-add.php" target="_blank"><img src="images/fashion/female/7.jpg" width="60" ></a>
								</td>
								<td class="center">
									<span class="text-success"><i class="fa fa-fw fa-circle"></i></span>
								</td>
								<td style="font-size: 14px;">
									<a id="row-10"  class="tooltipTable" href="product-add.php" target="_blank" >Winter coat and alligator skin</a>
									<?php tooltipTables('10')?>	
								</td>
								<td>
									<span class="cell-val-table" style="margin:0 2px 4px 0;display:inline-block;padding: 3px 10px;background: #ECEBEB;border-radius: 4px;color: #7D7B7B;">shirt</span>
									<span class="cell-val-table" style="margin:0 2px 4px 0;display:inline-block;padding: 3px 10px;background: #ECEBEB;border-radius: 4px;color: #7D7B7B;">pants</span>
								</td>
								<td class="text-center dtActionCls">
									<a href="product-add.php" target="_blank" class="btn btn-success" ><i class="fa fa-pencil" title="Edit"></i></a>	
									<a href="" class="btn btn-danger" style="margin-right:5px;"><i class="fa fa-times" title="Delete"></i></a>
								</td>
							</tr>
							
							<tr>
								<td class="center">11</td>
								<td class="text-center">
									<div class="checkbox checkbox-single margin-none">
										<label class="checkbox-custom">
											<i class="fa fa-fw fa-square-o"></i>
											<input type="checkbox">
										</label>
									</div>
								</td>
								<td class="center">11</td>
								<td class="center">
									<a href="product-add.php" target="_blank"><img src="images/fashion/female/8.jpg" width="60" ></a>
								</td>
								<td class="center">
									<span class="text-success"><i class="fa fa-fw fa-circle"></i></span>
								</td>
								<td style="font-size: 14px;">
									<a id="row-11"  class="tooltipTable" href="product-add.php" target="_blank" >Black Paris Hoody</a>
									<?php tooltipTables('11')?>	
								</td>
								<td>
									<span class="cell-val-table" style="margin:0 2px 4px 0;display:inline-block;padding: 3px 10px;background: #ECEBEB;border-radius: 4px;color: #7D7B7B;">hood</span>
									<span class="cell-val-table" style="margin:0 2px 4px 0;display:inline-block;padding: 3px 10px;background: #ECEBEB;border-radius: 4px;color: #7D7B7B;">jacket</span>
									<span class="cell-val-table" style="margin:0 2px 4px 0;display:inline-block;padding: 3px 10px;background: #ECEBEB;border-radius: 4px;color: #7D7B7B;">coat</span>
									
								</td>
								<td class="text-center dtActionCls">
									<a href="product-add.php" target="_blank" class="btn btn-success" ><i class="fa fa-pencil" title="Edit"></i></a>	
									<a href="" class="btn btn-danger" style="margin-right:5px;"><i class="fa fa-times" title="Delete"></i></a>
								</td>
							</tr>
							<tr>
								<td class="center">12</td>
								<td class="text-center">
									<div class="checkbox checkbox-single margin-none">
										<label class="checkbox-custom">
											<i class="fa fa-fw fa-square-o"></i>
											<input type="checkbox">
										</label>
									</div>
								</td>
								<td class="center">12</td>
								<td class="center">
									<a href="product-add.php" target="_blank"><img src="images/fashion/female/8.jpg" width="60" ></a>
								</td>
								<td class="center">
									<span class="text-success"><i class="fa fa-fw fa-circle"></i></span>
								</td>
								<td style="font-size: 14px;">
									<a id="row-12"  class="tooltipTable" href="product-add.php" target="_blank" >Black Paris Hoody</a>
									<?php tooltipTables('12')?>	
								</td>
								<td>
									<span class="cell-val-table" style="margin:0 2px 4px 0;display:inline-block;padding: 3px 10px;background: #ECEBEB;border-radius: 4px;color: #7D7B7B;">hood</span>
									<span class="cell-val-table" style="margin:0 2px 4px 0;display:inline-block;padding: 3px 10px;background: #ECEBEB;border-radius: 4px;color: #7D7B7B;">jacket</span>
									<span class="cell-val-table" style="margin:0 2px 4px 0;display:inline-block;padding: 3px 10px;background: #ECEBEB;border-radius: 4px;color: #7D7B7B;">coat</span>								
								</td>
								<td class="text-center">
									<a href="product-add.php" class="btn btn-success" ><i class="fa fa-pencil" title="Edit"></i></a>	
									<a href="" class="btn btn-danger" style="margin-right:5px;"><i class="fa fa-times" title="Delete"></i></a>
								</td>
							</tr>						
							
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div><!-- // Content END -->

<?php include "footer.php"?>