<?php include "header.php"?>
<div id="content" class="product-add-variant-page">      
      	<div class="me-heading bg-white border-bottom">      		
      		<div class="row">      		
      			<div class="me-hl col-xs-12 col-md-9">
      				<h1 class="content-heading">
      				<a href="products.php" style="color: #686868;">Products</a>
      				 / <a href="product-add.php" style="color: #686868;">Summer shirt</a> / PRD-54232-OK</h1>
      			</div>	      		
	      		<div class="me-hr col-xs-12 col-md-3">
	      			<a class="btn btn-success" title="Save Variant"><i class="fa fa-save" style="padding-right:10px;"></i>Save Variant</a>
	      			<a class="btn btn-danger" title="Cancel" style="width:100px;"><i class="fa fa-ban" style="padding-right:10px;"></i>Cancel</a>
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
						<a class="" data-toggle="tab" href="#tabs_prices" aria-expanded="false">
							<i class="icon-cogs"></i>
							<span>Prices</span>
						</a>
					</li>
					<li class="">
						<a class="" data-toggle="tab" href="#tabs_stocks" aria-expanded="false">
							<i class="icon-file-box"></i>
							<span>Stocks</span>
						</a>
					</li>
				</ul>
			</div>
		</div>	
		<div class="tab-content innerAll spacing-x2">		
			<!-- MAIN -->
			<div id="tabs_edition" class="active tab-pane">		
				<div class="melis-product-heading border-bottom">
					<h3>General Data</h3>
					<div class="make-switch bs-melis bs-medium" data-on-label="Online" data-off-label="Offline" data-text-label="Status">
						<input type="checkbox">
					</div>
				</div>
				<!-- product details container -->
				<div class="row melis-pdc">				
					<div class="col-xs-12 col-lg-6">
						<div class="pdc-heading clearfix">
							<h4>
								<i class="fa fa-cog"></i>
								Information
							</h4>
						</div>	
						<div class="pdc-content border-bottom">
							<div class="me-action-button-cont">							
								<form method="POST" name="" id="" action="">
									<fieldset id="variant-general-fields">		
										<div class="form-group">
											<label for="">SKU</label>
											<input type="text" class="form-control" name="" id="" placeholder="Product SKU">
										</div>
										<div class="form-group">
											<label for="">Main Variant</label><br>
											<div class="make-switch bs-melis bs-medium" data-on-label="Yes" data-off-label="No" data-text-label="Main">
												<input type="checkbox">
											</div>
										</div>
									</fieldset>
								</form>						
							</div>
						</div>
						<br>
						<div class="available-categories">
							<div class="pdc-heading clearfix">
								<h4>
									<i class="fa fa-link"></i>
									File Attachments
								</h4>
								<a data-toggle="modal" data-target="#addFile" class="btn btn-success add-product" title="Add product">
									<i class="fa fa-link" style="padding-right:10px;"></i>
									Attach File
								</a>
							</div>						
							<div class="pdc-content border-bottom">
								<div class="me-file-cont">
									<p>awesomefile.attached-here.pdf 
										<i class="fa fa-times-circle" ></i>
									</p>								
									<p>shirt-collection01.doc 
										<i class="fa fa-times-circle" ></i>
									</p>								
									<p>product-documentations-guide.pdf 
										<i class="fa fa-times-circle" ></i>
									</p>
									
								</div>							
								<br/><br/>							
							</div>
						</div>
							<div class="available-categories">
								<div class="pdc-heading clearfix">
									<h4>
										<i class="fa fa-cubes"></i>
										Product Attributes
									</h4>
								</div>							
								<div class="pdc-content border-bottom">							
									<div class="me-action-button-cont attribute-area">
										<table>
											<tr>
												<td>
													<label>Size:&nbsp;</label>
												</td>
												<td>
													<div class="form-group">
														<select class="form-control">
															<option>Small</option>
															<option>Medium</option>
															<option>Large</option>
														</select>
													</div>
												</td>
											</tr>
											<tr>
												<td>										
													<label>Color:&nbsp;</label>
												</td>
												<td>
													<div class="form-group">
														<select class="form-control">
															<option>Red</option>
															<option>Blue</option>
															<option>Green</option>
															<option>Magenta</option>
														</select>
													</div>
												</td>
											</tr>
											<tr>
												<td>										
													<label>Weight:&nbsp;</label>
												</td>
												<td>
													<div class="form-group">
														<input type="text" class="form-control">
													</div>
												</td>
											</tr>
										</table>
									</div>
								</div>
							</div>					
						</div>								
					<div class="col-xs-12 col-lg-6">						
						<!-- heading -->
						<div class="pdc-heading clearfix">
							<h4>
								<i class="fa fa-image"></i>
								Product Images
							</h4>
							<a data-toggle="modal" data-target="#addImage" class="btn btn-success add-product" title="Add product">
								<i class="fa fa-camera" style="padding-right:10px;"></i>
								Add Image
							</a>
						</div>					
						<div class="melis-product-filter clearfix">
							<div class="melis-filter-image filter-dropdown filter-search-container clearfix">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="fa fa-clone" style="padding-right:10px;"></i>
									<span class="filter-key">Type</span>
									<span class="caret"></span>
								</a>
								<ul class="portfolioFilter dropdown-menu filter-key-values">
									<li>
										<a data-filter="*" data-text='All' class="current">All Categories</a>
									</li>
									<li>
										<a data-filter=".people" data-text='People'>People</a>
									</li>
									<li>
										<a data-filter=".places" data-text='Places'>Places</a>
									</li>
									<li>
										<a data-filter=".food" data-text='Food'>Food</a>
									</li>
									<li>
										<a data-filter=".objects" data-text='Objects'>Objects</a>
									</li>
								</ul>
							</div>						
							<div class="melis-filter-image filter-dropdown filter-search-container clearfix">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="fa fa-globe" style="padding-right:10px;"></i>
									<span class="filter-key">Country</span>
									<span class="caret"></span>
								</a>
								<ul class="portfolioFilter dropdown-menu filter-key-values">
									<li>
										<a data-filter=".france" data-text='France'>France</a>
									</li>
									<li>
										<a data-filter=".usa" data-text='USA'>USA</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="portfolioContainer">						 
							<div class="a objects france">								
								<div class="me-p-image">
								   <img src="images/gallery-2/15.jpg">
								   
								   <div class="hover-details">
										<div class="me-p-btn-cont">
											<a data-toggle="modal" data-target="#viewImage">
												<i class="fa fa-eye"></i>
											</a>
											<a data-toggle="modal" data-target="#editImage">
												<i class="fa fa-pencil"></i>
											</a>
											<a class="delete-p-image">
												<i class="fa fa-times"></i>
											</a>
										</div>
								   </div>
							   </div>							   
							</div>						 
							<div class="a people places usa">
								<div class="me-p-image">
									<img src="images/fashion/female/2.jpg">
									<div class="hover-details">
										<div class="me-p-btn-cont">
											<a data-toggle="modal" data-target="#viewImage">
												<i class="fa fa-eye"></i>
											</a>
											<a data-toggle="modal" data-target="#editImage">
												<i class="fa fa-pencil"></i>
											</a>
											<a class="delete-p-image">
												<i class="fa fa-times"></i>
											</a>
										</div>
								   </div>
								</div>
							</div>						 
							<div class="a food">
								<div class="me-p-image">
									<img src="images/fashion/female/3.jpg">
									<div class="hover-details">
										<div class="me-p-btn-cont">
											<a href="#">
												<i class="fa fa-eye"></i>
											</a>
											<a data-toggle="modal" data-target="#editImage">
												<i class="fa fa-pencil"></i>
											</a>
											<a class="delete-p-image">
												<i class="fa fa-times"></i>
											</a>
										</div>
								   </div>
								</div>
							</div>							 
							<div class="a people places france">
								<div class="me-p-image">
									<img src="images/fashion/female/4.jpg">
									<div class="hover-details">
										<div class="me-p-btn-cont">
											<a data-toggle="modal" data-target="#viewImage">
												<i class="fa fa-eye"></i>
											</a>
											<a data-toggle="modal" data-target="#editImage">
												<i class="fa fa-pencil"></i>
											</a>
											<a class="delete-p-image">
												<i class="fa fa-times"></i>
											</a>
										</div>
								   </div>
								</div>
							</div>						 
							<div class="a places objects">
								<div class="me-p-image">
									<img src="images/gallery-2/3.jpg">
									<div class="hover-details">
										<div class="me-p-btn-cont">
											<a data-toggle="modal" data-target="#viewImage">
												<i class="fa fa-eye"></i>
											</a>
											<a data-toggle="modal" data-target="#editImage">
												<i class="fa fa-pencil"></i>
											</a>
											<a class="delete-p-image">
												<i class="fa fa-times"></i>
											</a>
										</div>
								   </div>
								</div>
							</div>						 
							<div class="a people food objects usa">
								<div class="me-p-image">
									<img src="images/gallery-2/5.jpg">
									<div class="hover-details">
										<div class="me-p-btn-cont">
											<a data-toggle="modal" data-target="#viewImage">
												<i class="fa fa-eye"></i>
											</a>
											<a data-toggle="modal" data-target="#editImage">
												<i class="fa fa-pencil"></i>
											</a>
											<a class="delete-p-image" >
												<i class="fa fa-times"></i>
											</a>
										</div>
								   </div>
								</div>
							</div>						 
							<div class="a food objects">
								<div class="me-p-image">
									<img src="images/gallery-2/8.jpg">
									<div class="hover-details">
										<div class="me-p-btn-cont">
											<a data-toggle="modal" data-target="#viewImage">
												<i class="fa fa-eye"></i>
											</a>
											<a data-toggle="modal" data-target="#editImage">
												<i class="fa fa-pencil"></i>
											</a>
											<a class="delete-p-image">
												<i class="fa fa-times"></i>
											</a>
										</div>
								   </div>
								</div>
							</div>							 
							<div class="a food usa france">
								<div class="me-p-image">
									<img src="images/avatar-large-girl.jpg">
									<div class="hover-details">
										<div class="me-p-btn-cont">
											<a data-toggle="modal" data-target="#viewImage">
												<i class="fa fa-eye"></i>
											</a>
											<a data-toggle="modal" data-target="#editImage">
												<i class="fa fa-pencil"></i>
											</a>
											<a class="delete-p-image">
												<i class="fa fa-times"></i>
											</a>
										</div>
								   </div>
								</div>
							</div>
							<div class="a food usa france">
								<div class="me-p-image">
									<img src="images/fashion/female/6.jpg">
									<div class="hover-details">
										<div class="me-p-btn-cont">
											<a data-toggle="modal" data-target="#viewImage">
												<i class="fa fa-eye"></i>
											</a>
											<a data-toggle="modal" data-target="#editImage">
												<i class="fa fa-pencil"></i>
											</a>
											<a class="delete-p-image">
												<i class="fa fa-times"></i>
											</a>
										</div>
								   </div>
								</div>
							</div>							
							<div class="a food usa france">
								<div class="me-p-image">
									<img src="images/fashion/female/7.jpg">
									<div class="hover-details">
										<div class="me-p-btn-cont">
											<a data-toggle="modal" data-target="#viewImage">
												<i class="fa fa-eye"></i>
											</a>
											<a data-toggle="modal" data-target="#editImage">
												<i class="fa fa-pencil"></i>
											</a>
											<a class="delete-p-image">
												<i class="fa fa-times"></i>
											</a>
										</div>
								   </div>
								</div>
							</div>							
							<div class="a food usa france">
								<div class="me-p-image">
									<img src="images/fashion/female/1.jpg">
									<div class="hover-details">
										<div class="me-p-btn-cont">
											<a data-toggle="modal" data-target="#viewImage">
												<i class="fa fa-eye"></i>
											</a>
											<a data-toggle="modal" data-target="#editImage">
												<i class="fa fa-pencil"></i>
											</a>
											<a class="delete-p-image">
												<i class="fa fa-times"></i>
											</a>
										</div>
								   </div>
								</div>
							</div>							
							<div class="a food usa france">
								<div class="me-p-image">
									<img src="images/gallery-2/1.jpg">
									<div class="hover-details">
										<div class="me-p-btn-cont">
											<a data-toggle="modal" data-target="#viewImage">
												<i class="fa fa-eye"></i>
											</a>
											<a data-toggle="modal" data-target="#editImage">
												<i class="fa fa-pencil"></i>
											</a>
											<a class="delete-p-image">
												<i class="fa fa-times"></i>
											</a>
										</div>
								   </div>
								</div>
							</div>
						</div>
					</div>
				</div>					
					<!-- product details container -->
				<div class="row melis-pdc">							
				</div>		
			</div>
			<!-- END MAIN -->			
			
			<!-- Prices -->			
			<div id="tabs_prices" class="tab-pane">
				<div class="melis-product-heading border-bottom clearfix">
					<h3>Prices</h3>					
				</div>			
				<div class="row melis-pdc">	
					<div class="col-xs-12 col-lg-4">	
						<div class="pdc-heading clearfix">
							<h4>
								<i class="fa fa-globe"></i>
								Country
							</h4>
						</div>
						<ul class="nav-tabs product-text-tab country-price-tab">
							<li class="active">
								<a class="clearfix" data-toggle="tab" href="#price-general" data-country="General" aria-expanded="true"><span>General</span>
									<i class="fa fa-globe"></i>
								</a>
							</li>
							<li class="">						
								<a class="clearfix" data-toggle="tab" href="#price-france" data-country="France" aria-expanded="true">
									&nbsp;<img src="images/fr.png">
									<span>France</span>
									<i class="fa fa-times"></i>
								</a>
							</li>
							<li class="">						
								<a class="clearfix" data-toggle="tab" href="#price-america" data-country="America" aria-expanded="false">
									&nbsp;<img src="images/en-flat.jpg">
									<span>America</span>
									<i class="fa fa-times"></i>
								</a>
							</li>
							<li class="">						
								<a class="clearfix" data-toggle="tab" href="#price-poland" data-country="Poland" aria-expanded="true">
									&nbsp;<img src="images/pl.png">
									<span>Poland</span>
									<i class="fa fa-times"></i>
								</a>
							</li>
							<li class="">						
								<a class="clearfix" data-toggle="tab" href="#price-great-britain" data-country="Great Britain" aria-expanded="false">
									&nbsp;<img src="images/en.png">
									<span>Great Britain</span>
									<i class="fa fa-times"></i>
								</a>
							</li>
						</ul>
					</div>
					<div class="col-xs-12 col-lg-8">				
						<div class="pdc-heading clearfix">
							<h4>
								<i class="fa fa-dollar"></i>
								<span class="country-price-label">General</span>&nbsp;Pricing
							</h4>
						</div>
						<div class="tab-content">
							<?php
							$country_price = array ('general','france','america','poland','great-britain');
							foreach($country_price as $country_val){
								if($country_val == 'general'){$active='active';} else {$active='';}
							?>				
							<div id="price-<?=$country_val?>" class="tab-pane <?=$active?>">
								<div class="country-price <?=$country_val?>">
									<div class="form-group">
										<label for="1_pseo_meta_title">Price *</label>
										<input type="text" class="form-control" name="pseo_meta_title" id="1_pseo_meta_title" placeholder="Variant Price">
									</div>					
									<div class="form-group">
										<label for="1_pseo_meta_title">Tax Class</label><br>
										<select class="form-control" style="width:250px">
											<option>None</option>
											<option>Taxable Goods</option>
											<option>Shipping</option>
											<option>Tax Exempt</option>
										</select>
									</div>
									<div class="form-group">
										<label for="1_pseo_meta_title">VAT Amount</label>
										<input type="text" class="form-control" name="pseo_meta_title" id="1_pseo_meta_title" placeholder="Product VAT">
									</div>
									<div class="form-group">
										<label for="1_pseo_meta_title">Price Off Taxes</label>
										<input type="text" class="form-control" name="pseo_meta_title" id="1_pseo_meta_title" placeholder="Product without taxes">
									</div>
									
									<div class="form-group">
										<label for="1_pseo_meta_title">Product All Taxes</label>
										<input type="text" class="form-control" name="pseo_meta_title" id="1_pseo_meta_title" placeholder="Product all taxex">
									</div>
									<hr>
									<div class="form-group">
										<label for="1_pseo_meta_title">Special Price</label>
										<input type="text" class="form-control" name="pseo_meta_title" id="1_pseo_meta_title" placeholder="Promo value">
									</div>								
									<div class="form-group">
										<label for="1_pseo_meta_title">Start Date</label>
										<div class="input-group date date-time" data-start-date="2016/11/1" data-date="" data-date-format="mm/dd/yyyy" data-link-field="promo_price_start_date">
											<input class="form-control" size="32" type="text" value="" readonly>
											<span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
											<span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
										</div>
										<input type="hidden" id="promo_price_start_date" value="" />
									</div>					
									<div class="form-group">
										<label for="1_pseo_meta_title">End Date</label>
										<div class="input-group date date-time" data-date="" data-date-format="mm/dd/yyyy" data-link-field="promo_price_end_date">
											<input class="form-control" size="32" type="text" value="" readonly>
											<span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
											<span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
										</div>
										<input type="hidden" id="promo_price_end_date" value="" />
									</div>
									<div class="form-group">
										<label for="1_pseo_meta_title">Promotion Without Taxes</label>
										<input type="text" class="form-control" name="pseo_meta_title" id="1_pseo_meta_title" placeholder="Promo without tax">
									</div>					
									<div class="form-group">
										<label for="1_pseo_meta_title">Promotion All Taxes</label>
										<input type="text" class="form-control" name="pseo_meta_title" id="1_pseo_meta_title" placeholder="Promo with tax">
									</div>				
								</div>
							</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
			<!-- End of Pricing -->
			
			<!-- Stock Management -->
			<div id="tabs_stocks" class="tab-pane">
				<div class="melis-product-heading border-bottom clearfix">
					<h3>Stock Management</h3>					
				</div>	
				<div class="row melis-pdc">	
					<div class="col-xs-12 col-lg-4">	
						<div class="pdc-heading clearfix">
							<h4>
								<i class="fa fa-globe"></i>
								Country
							</h4>
						</div>
						<ul class="nav-tabs product-text-tab country-stock-tab">
							<li class="active">
								<a class="clearfix" data-toggle="tab" href="#price-general" data-country="General" aria-expanded="true"><span>General</span>
									<i class="fa fa-globe"></i>
								</a>
							</li>
							<li class="">						
								<a class="clearfix" data-toggle="tab" href="#price-france" data-country="France" aria-expanded="true">
									&nbsp;<img src="images/fr.png">
									<span>France</span>
									<i class="fa fa-times"></i>
								</a>
							</li>
							<li class="">						
								<a class="clearfix" data-toggle="tab" href="#price-america" data-country="America" aria-expanded="false">
									&nbsp;<img src="images/en-flat.jpg">
									<span>America</span>
									<i class="fa fa-times"></i>
								</a>
							</li>
							<li class="">						
								<a class="clearfix" data-toggle="tab" href="#price-poland" data-country="Poland" aria-expanded="true">
									&nbsp;<img src="images/pl.png">
									<span>Poland</span>
									<i class="fa fa-times"></i>
								</a>
							</li>
							<li class="">						
								<a class="clearfix" data-toggle="tab" href="#price-great-britain" data-country="Great Britain" aria-expanded="false">
									&nbsp;<img src="images/en.png">
									<span>Great Britain</span>
									<i class="fa fa-times"></i>
								</a>
							</li>
						</ul>
					</div>
					<div class="col-xs-12 col-lg-8">				
						<div class="pdc-heading clearfix">
							<h4>
								<i class="fa fa-cubes"></i>
								<span class="country-stock-label">General</span>&nbsp;Stocks
							</h4>
						</div>
						<div class="tab-content">
							<?php
							foreach($country_price as $country_val){
								if($country_val == 'general'){$active='active';} else {$active='';}
							?>				
							<div id="stock-<?=$country_val?>" class="tab-pane <?=$active?>">									
								<div class="form-group">
									<label for="1_pseo_meta_title">Current Quantity</label>
									<input type="text" value="32" class="form-control" name="pseo_meta_title" id="1_pseo_meta_title" placeholder="Quantity Remaining">
								</div>
								<div class="form-group">
									<label for="1_pseo_meta_title">Total Quantity</label>
									<input type="text" value="100" class="form-control" name="pseo_meta_title" id="1_pseo_meta_title" placeholder="Quantity Remaining">
								</div>
							</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
			<!-- END Stock -->	
			
		</div>
			
	</div>	 
</div> 
<?php include "footer.php"?>