<?php include "header.php"?>
<div id="content" class="product-add-page">      
      	<div class="me-heading bg-white border-bottom">      		
      		<div class="row">      		
      			<div class="me-hl col-xs-12 col-md-9">
      				<h1 class="content-heading">
      				<a href="#" style="color: #686868;">Products</a>
      				 / Summer shirt</h1>
      			</div>	      		
	      		<div class="me-hr col-xs-12 col-md-3">
	      			<a class="btn btn-success add-product" title="Add product"><i class="fa fa-save" style="padding-right:10px;"></i>Save product</a>
	      			<a class="btn btn-danger" title="Cancel"><i class="fa fa-ban" style="padding-right:10px;"></i>Cancel</a>
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
						<a class="" data-toggle="tab" href="#tabs_text" aria-expanded="false">
							<i class="icon-paper-documents"></i>
							<span>Text</span>
						</a>
					</li>
					<li class="">
						<a class="" data-toggle="tab" href="#tabs_variant" aria-expanded="false">
							<i class="icon-collage"></i>
							<span>Variants</span>
						</a>
					</li>
					<li class="">
						<a class="" data-toggle="tab" href="#tabs_seo" aria-expanded="false">
							<i class="icon-desktop-heart"></i>
							<span>SEO</span>
						</a>
					</li>
					<li class="">
						<a class="" data-toggle="tab" href="#tabs_prices" aria-expanded="false">
							<i class="icon-cogs"></i>
							<span>PRICE</span>
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
					<div class="make-switch bs-melis bs-medium" data-on-label="Online" data-off-label="Offline" data-text-label="Status">
						<input type="checkbox">
					</div>
				</div>
				<!-- product details container -->
				<div class="row melis-pdc">				
					<div class="col-xs-12 col-lg-6">					
						<div class="available-categories">
							<div class="pdc-heading clearfix">
								<h4>
									<i class="fa fa-tags"></i>
									Product Categories
								</h4>							
								<a data-toggle="modal" data-target="#editCategoryModal" class="btn btn-success add-product" title="Add product">
									<i class="fa fa-tags" style="padding-right:10px;"></i>
									See All Categories
								</a>
							</div>						
							<div class="pdc-content border-bottom">
								<div class="me-action-button-cont">								
									<span>
										<span class="ab-attr">shirt</span>
										<i class="fa fa-times"></i>
									</span>
									
									<span>
										<span class="ab-attr">pants</span>
										<i class="fa fa-times"></i>
									</span>
									
									<span>
										<span class="ab-attr">super shiny shoes</span>
										<i class="fa fa-times"></i>
									</span>
									
									<span>
										<span class="ab-attr">awesome shirt</span>
										<i class="fa fa-times"></i>
									</span>
									
									<span>
										<span class="ab-attr">no pants</span>
										<i class="fa fa-times"></i>
									</span>
									
									<span>
										<span class="ab-attr">slippers</span>
										<i class="fa fa-times"></i>
									</span>
									
									<span>
										<span class="ab-attr">sleeveless</span>
										<i class="fa fa-times"></i>
									</span>
									
									<span>
										<span class="ab-attr">jackets</span>
										<i class="fa fa-times"></i>
									</span>
									
									<span>
										<span class="ab-attr">socks</span>
										<i class="fa fa-times"></i>
									</span>							
								</div>
							</div>
						</div>
						
						<br/><br/>
						
						<div class="available-categories">
							<div class="pdc-heading clearfix">
								<h4>
									<i class="fa fa-link"></i>
									File Attachments
								</h4>
								<a data-toggle="modal" data-target="#addFile" class="btn btn-success add-file" title="Add product">
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
							</div>
						</div>									
						<br/><br/>					
						<div class="available-categories">
							<div class="pdc-heading clearfix">
								<h4>
									<i class="fa fa-cubes"></i>
									Product Attributes
								</h4>
							</div>							
							<div class="pdc-content border-bottom">
								<div class="ui-widget">
									<label>Add Attribute to this Product: </label>
									<div class="form-group">
									<input type="text" style="width: 180px;" class="form-control" id="attrib-input" data-provide="typeahead">&nbsp;<a class="btn btn-success add-attribute" id="add-attribute-btn" title="Add Attribute">
										<i class="fa fa-cubes" style="padding-right:10px;"></i>
											Add Attribute
										</a>
									</div>									
								</div>								
								<div class="me-action-button-cont attribute-area"></div>													
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
									<li><a data-filter="*" data-text='All' class="current">All Categories</a></li>
									<li><a data-filter=".people" data-text='People'>People</a></li>
									<li><a data-filter=".places" data-text='Places'>Places</a></li>
									<li><a data-filter=".food" data-text='Food'>Food</a></li>
									<li><a data-filter=".objects" data-text='Objects'>Objects</a></li>
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
				<div class="row melis-pdc"></div>			
			</div>
			<!-- END MAIN -->	
			
			<!-- TEXT -->
			<div id="tabs_text" class="tab-pane">
				<div class="melis-product-heading border-bottom clearfix">
					<h3>Product Texts</h3>
					<a data-toggle="modal" data-target="#addTextModal" class="btn btn-success add-product" title="Create New Field">
						<i class="fa fa-file-text-o" style="padding-right:10px;"></i>
						Add Text Field
					</a>
				</div>
				<div class="row">			
					<div class="col-xs-12 col-md-4">
						<ul class="nav-tabs product-text-tab">
							<li class="active">
								<a class="clearfix" data-toggle="tab" href="#ptext-french" aria-expanded="true">
									&nbsp;<img src="images/fr.png">
									<span>French</span>
									<i class="fa fa-times"></i>
								</a>
							</li>
							<li class="">
								<a class="clearfix" data-toggle="tab" href="#ptext-english" aria-expanded="false">
									&nbsp;<img src="images/en.png">
									<span>English</span>
									<i class="fa fa-times"></i>
								</a>
							</li>
						</ul>					
					</div>				
					<div class="col-xs-12 col-md-8">
						<!-- product text CONTENT  -->
						<div class="tab-content">						
							<div id="ptext-french" class="tab-pane active custom-field-type" style="border: 1px solid #eee; padding: 15px;">
								<h3>French</h3><br>
								<div class="custom-field-type-area"></div>
							</div>						
							<div id="ptext-english" class="tab-pane custom-field-type" style="border: 1px solid #eee; padding: 15px;">
								<h3>English</h3><br>
								<div class="custom-field-type-area"></div>
							</div>						
						</div>					
					</div>					
				</div>			
			</div>
			<!-- END TEXT -->
			
			<!-- VARIANT -->			
			<div id="tabs_variant" class="tab-pane">
				<div class="melis-product-heading border-bottom clearfix">
					<h3>Product Variants</h3>
					<a href="product-variants.php" target="_blank" class="btn btn-success add-product" title="Add product">
						<i class="fa fa-globe" style="padding-right:10px;"></i>
						Add Variants
					</a>
				</div>
				
				<table id="product-variant-table" class="me-table table table-striped table-primary dt-responsive nowrap no-footer dtr-inline dataTable" style="width: 100%">			
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
							<th class="center" style="width: 70px;">Default</th>
							<th class="center" style="width: 100px;">Image</th>
							<th class="center" style="width: 70px;">Status</th>
							<th class="center" style="width: 160px;">SKU</th>
							<th class="center">Attribute Values</th>
							<th class="text-center">Action</th>
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
							<td class="center">
							<span class="text-success"><i class="fa fa-fw fa-star"></i></span>
							</td>
							<td class="center">
								<a href="product-variants.php" target="_blank"><img src="images/fashion/female/2.jpg" width="60" style="border-radius: 3px;"></a>
							</td>					
							<td class="center">
								<span class="text-success"><i class="fa fa-fw fa-circle"></i></span>
							</td>
							<td class="center" style="font-size: 14px;">
								<a class="tooltipTable2" href="product-variants.php" target="_blank" >PRD-70321-OK</a>
								<?php tooltipTables2('1')?>	
							</td>
							<td class="center innerLR">
								<span class="btn btn-default" style="border-radius: 4px;color: #7D7B7B;">Small</span>
							</td>						
							<td class="text-center">
								<a href="product-variants.php" target="_blank" class="btn btn-success" ><i class="fa fa-pencil" title="Edit"></i></a>
								<a href="#" class="btn btn-danger" title="Delete Variant" style="margin-right:5px;"><i data-toggle="modal"class="fa fa-times" title="Delete"></i></a>
							</td>
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
							<td class="center">
							</td>
							<td class="center">
								<a href="product-variants.php" target="_blank"><img src="images/fashion/female/1.jpg" width="60" style="border-radius: 3px;"></a>
							</td>
							
							<td class="center">
								<span class="text-success"><i class="fa fa-fw fa-circle"></i></span>
							</td>
							<td class="center" style="font-size: 14px;">
								<a class="tooltipTable2" href="product-variants.php" target="_blank" >PRD-54232-OK</a>
								<?php tooltipTables2('2')?>	
							</td>
							<td class="center innerLR">
								<span class="btn btn-default" style="border-radius: 4px;color: #7D7B7B;">Medium</span>
							</td>					
							
							<td class="text-center">
								<a class="btn btn-success" title="Make this the Default Product"><i class="fa fa-star"></i></a>	
								<a href="product-variants.php" target="_blank" class="btn btn-success" ><i class="fa fa-pencil" title="Edit"></i></a>
								<a href="#" class="btn btn-danger" title="Delete Variant" style="margin-right:5px;"><i data-toggle="modal"class="fa fa-times" title="Delete"></i></a>
							</td>
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
							<td class="center">
							</td>
							<td class="center">
								<a href="product-variants.php" target="_blank"><img src="images/fashion/female/4.jpg" width="60" style="border-radius: 3px;"></a>
							</td>
							<td class="center">
							<span class="text-success"><i class="fa fa-fw fa-circle"></i></span>
							</td>
							<td class="center" style="font-size: 14px;">
								<a class="tooltipTable2" href="product-variants.php" target="_blank" >PRD-54232-OK</a>
								<?php tooltipTables2('3')?>	
							</td>
							<td class="center innerLR">
								<span class="btn btn-default cell-val-table">Large</span>
								<span class="btn btn-default cell-val-table">Red</span>
								<span class="btn btn-default cell-val-table">Outing</span>
								<span class="btn btn-default cell-val-table">V-Cut</span>
								<span class="btn btn-default cell-val-table">Text 24 String</span>
								<span class="btn btn-default cell-val-table">yup Anything</span>
								<span class="btn btn-default cell-val-table">Not quite long for a sample, maybe add more text.</span>
								<span class="btn btn-default cell-val-table">There is</span>
								<span class="btn btn-default cell-val-table">Why?</span>
								<span class="btn btn-default cell-val-table">Single Sample</span>
								<span class="btn btn-default cell-val-table">Test Sample</span>
								<span class="btn btn-default cell-val-table">Another Sample</span>
								<span class="btn btn-default cell-val-table">and Another Sample</span>
								<span class="btn btn-default cell-val-table">and became Sample</span>
							</td>					
													
							<td class="text-center">
								<a class="btn btn-success" title="Make this the Default Product"><i class="fa fa-star"></i></a>	
								<a href="product-variants.php" target="_blank" class="btn btn-success" ><i class="fa fa-pencil" title="Edit"></i></a>
								<a href="#" class="btn btn-danger" title="Delete Variant" style="margin-right:5px;"><i data-toggle="modal"class="fa fa-times" title="Delete"></i></a>
							</td>
						</tr>

					</tbody>
				</table>
			</div>
			<!-- END VARIANT -->
		
			<!-- SEO -->
			<div id="tabs_seo" class="tab-pane">
				<div class="melis-product-heading border-bottom clearfix">
					<h3>Product SEO</h3>					
				</div>					
				<div class="row">					
					<div class="col-xs-12 col-md-12">					
						<!-- product text CONTENT  -->
						<div class="tab-content">								
							<form method="POST" name="pageseo" id="" class="pageseo" action="">
								<fieldset id="">
									<div class="form-group">													
										<label for="">Meta Title</label>
										<input type="text" class="form-control" name="pseo_meta_title" id="pseo_meta_title" placeholder="">
									</div>
									<div class="form-group">
										<label for="">Meta Description</label>
										<input type="text" class="form-control" name="pseo_meta_desc" id="pseo_meta_desc" placeholder="">
									</div>
									<div class="form-group">
										<label for="">URL</label>
										<input type="text" class="form-control" name="" id="" placeholder="">
									</div>
									<div class="form-group">
										<label for="">URL Redirection</label>
										<input type="text" class="form-control" name="" id="" placeholder="">
									</div>
									<div class="form-group">
										<label for="">URL 301</label>
										<input type="text" class="form-control" name="" id="" placeholder="">
									</div>
								</fieldset>
							</form>									
						</div>					
					</div>			
				</div>
			</div>
			<!-- END SEO -->
		
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
								<a class="clearfix" data-toggle="tab" href="#price-United State" data-country="United State" aria-expanded="false">
									&nbsp;<img src="images/en-flat.jpg">
									<span>United State</span>
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
							$country_price = array ('general','france','United State','poland','great-britain');
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
		</div>
	</div> 
</div>
<?php include "footer.php"?>