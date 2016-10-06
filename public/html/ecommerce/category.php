<?php include "header.php"?>
<!-- content -->
<div id="content" class="category-page">	
    <div class="content-cont">		
		<div class="panel-group" id="accordion">
			<div class="panel panel-default">
				<div class="panel-heading">
					<div class="panel-title">
						<a href="" class="btn btn-success add-category float-right" id="prod-cat-jstree-add-btn" title="Add Category"><i class="fa fa-plus"></i> Add Product Category</a>
						<a class="accordion-toggle" data-toggle="collapse" data-target="#collapseOne">
							<h1 class="content-heading">Categories</h1>
						</a>						
					</div>
				</div>
				<div id="collapseOne" class="panel-collapse collapse in">
					<div class="panel-body">
						<div class="row melis-pdc">				
							<div class="col-xs-12 col-lg-3 group-btn">
								<div class="cont-box">
									<input id="prod-cat-jstree-search" class="search-input form-control" placeholder="Type in Category for Search"><br><br>
									<a href="#" class="btn btn-success toggle-all-close" title="Clear Search Category">
									<i class="fa fa-minus"></i> Collapse All</a>
									<a href="#" class="btn btn-success toggle-all-open" title="Clear Search Category">
									<i class="fa fa-plus"></i> Expand All</a>
									<br><br>
									<a href="#" class="btn btn-success" id="cat-clear-search" title="Clear Search Category">
									<i class="fa fa-close"></i> Clear Search</a>
									<a href="#" class="btn btn-success" id="cat-clear-refresh" title="Refresh Category">
									<i class="fa fa-refresh"></i> Refresh</a>
								</div>
							</div>
							<div class="col-xs-12 col-lg-9">				
								<div class="cat-div">	
									<div id="prod-cat-jstree"></div>	
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					<div class="panel-title">
						<a href="#" class="btn btn-success adds-category float-right" id="prod-cat-jstree-adds-btn" title="Add Category"><i class="fa fa-close"></i> Add Category</a>						
						<a href="#" class="btn btn-success save-category float-right" id="prod-cat-jstree-save-btn" title="Save Category"><i class="fa fa-save"></i> Save Category</a>
						<a href="#" class="btn btn-danger del-category float-right" id="prod-cat-jstree-del-btn" title="Delete Category">
						<i class="fa fa-close"></i> Delete Category</a>
						<a class="accordion-toggle" data-toggle="collapse" data-target="#collapseTwo">
							<h1 class="content-heading">Information</h1> 
						</a>
						
					</div>
				</div>
				<div id="collapseTwo" class="panel-collapse collapse in">
					<div class="panel-body">
						<div class="widget widget-tabs widget-tabs-double-2 widget-tabs-responsive" style="margin-bottom:0">
							<div class="widget-head nav">
								<ul class="tabs-label nav-tabs">
									<li class="active">
										<a data-toggle="tab" href="#tabs_text" aria-expanded="true">
											<i class="icon-paper-documents"></i>
											<span>Text</span>
										</a>
									</li>
									<li class="">
										<a data-toggle="tab" href="#tabs_images" aria-expanded="true">
											<i class="icon-picture"></i>
											<span>Images</span>
										</a>
									</li>
									<li class="">
										<a class="" data-toggle="tab" href="#tabs_seo" aria-expanded="false">
											<i class="icon-desktop-heart"></i>
											<span>SEO</span>
										</a>
									</li>
									<li class="">
										<a class="" data-toggle="tab" href="#tabs_products" aria-expanded="false">
											<i class="icon-file-box"></i>
											<span>Products</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="tab-content innerAll spacing-x2">
							<!-- TEXT -->
							<div id="tabs_text" class="tab-pane active">
								<div class="melis-product-heading border-bottom clearfix">
									<h3>Category Texts</h3>									
								</div>
								<div class="row melis-pdc">
									<div class="col-xs-12 col-lg-12">	
										<div class="msg-box"></div>
										<fieldset class="">
											<div class="form-group">	
												<label>ID:</label>&nbsp;<label id="prod-cat-jstree-save-label-id"></label>
												<input type="hidden" id="prod-cat-jstree-save-id" class="form-control">
											</div>
											<div class="form-group">
												<label>Category Name*</label><br>
												<input type="text" id="prod-cat-jstree-save-name" class="form-control">
											</div>
											<div class="form-group">
												<label>Description</label><br>
												<textarea id="prod-cat-jstree-save-desc" rows="5" class="form-control"></textarea>
											</div>	
											<div class="form-group">
												<div class="make-switch bs-melis bs-medium" data-on-label="Enable" data-off-label="Disable" data-text-label="Status">
													<input type="checkbox">
												</div>
											</div>
										</fieldset>		
									</div>			
								</div>			
							</div>
							<!-- END TEXT -->
							
							<!-- General -->
							<div id="tabs_images" class="tab-pane">				
								<div class="melis-product-heading border-bottom">
									<h3>Attachments</h3>					
								</div>
								<div class="row melis-pdc">				
									<div class="col-xs-12 col-lg-5">										
										<div class="available-categories">
											<div class="pdc-heading clearfix">
												<h4>
													<i class="fa fa-link"></i>
													File Attachments
												</h4>
												<a data-toggle="modal" data-target="#addFile" class="btn btn-success add-file" title="Add File">
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
									</div>
									<div class="col-xs-12 col-lg-7">
										<div class="melis-product-filter clearfix">	
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
							</div>
							<!-- END General -->
							
							<!-- SEO -->
							<div id="tabs_seo" class="tab-pane">			
								<div class="melis-product-heading border-bottom clearfix">
									<h3>Category SEO</h3>									
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
						<!-- Products -->
						<div id="tabs_products" class="tab-pane">
							<div class="melis-product-heading clearfix">
								<h3>Products</h3>
							</div>		
						<table id="cat-products-table" class="me-table table table-striped table-primary dt-responsive nowrap no-footer dtr-inline dataTable" style="width: 100%">			
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
									<td class="text-center">
										<div class="checkbox checkbox-single margin-none">
											<label class="checkbox-custom">
												<i class="fa fa-fw fa-square-o"></i>
												<input type="checkbox" class="check-product" checked="checked">
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
										<a id="row-1" class="tooltipTable" href="product-add.php" target="_blank" >Super Awesome Long Sleeve</a>
										<?php tooltipTables('1')?>	
									</td>
									<td>
										<span class="btn btn-default cell-val-table">shirt</span>
										<span class="btn btn-default cell-val-table">long pants</span>
										<span class="btn btn-default cell-val-table">shiny shoes</span>
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
										<a href="product-add.php" target="_blank" class="btn btn-success" ><i class="fa fa-pencil" title="Edit"></i></a>
										<a href="" class="btn btn-danger" style="margin-right:5px;"><i data-toggle="modal"class="fa fa-times" title="Delete"></i></a>
									</td>
									
								</tr>
								
								<tr>
									<td class="text-center">
										<div class="checkbox checkbox-single margin-none">
											<label class="checkbox-custom">
												<i class="fa fa-fw fa-square-o"></i>
												<input type="checkbox" class="check-product" checked="checked">
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
										<a id="row-2" class="tooltipTable" href="product-add.php" target="_blank" >Summer board shorts</a>
										<?php tooltipTables('2')?>	
									</td>
									<td>
										<span class="btn btn-default cell-val-table">awesome shirt</span>
										<span class="btn btn-default cell-val-table">pants</span>
										<span class="btn btn-default cell-val-table">shoes</span>
										
									</td>
									<td class="text-center dtActionCls">					
										<a href="product-add.php" target="_blank" class="btn btn-success" ><i class="fa fa-pencil" title="Edit"></i></a>
										<a href="" class="btn btn-danger" style="margin-right:5px;"><i class="fa fa-times" title="Delete"></i></a>
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
										<a href="product-add.php" target="_blank"><img src="images/fashion/female/3.jpg" width="60" ></a>
									</td>
									<td class="center">
										<span class="text-success"><i class="fa fa-fw fa-circle"></i></span>
									</td>
									<td style="font-size: 14px;">
										<a id="row-3" class="tooltipTable" href="product-add.php" target="_blank" >Simple Long Sleeve</a>
										<?php tooltipTables('3')?>	
									</td>
									<td>
										<span class="btn btn-default cell-val-table">pants</span>	
									</td>
									<td class="text-center dtActionCls">
										<a href="product-add.php" target="_blank" class="btn btn-success" ><i class="fa fa-pencil" title="Edit"></i></a>
										<a href="" class="btn btn-danger" style="margin-right:5px;"><i class="fa fa-times" title="Delete"></i></a>
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
									<td class="center">4</td>
									<td class="center">
										<a href="product-add.php" target="_blank"><img src="images/fashion/female/4.jpg" width="60" ></a>
									</td>
									<td class="center">
										<span class="text-success"><i class="fa fa-fw fa-circle"></i></span>
									</td>
									<td style="font-size: 14px;">
										<a id="row-4" class="tooltipTable" href="product-add.php" target="_blank" >Summer Blouse</a>
										<?php tooltipTables('4')?>	
									</td>
									<td>
										<span class="btn btn-default cell-val-table">pants</span>	
										<span class="btn btn-default cell-val-table">long sleeves</span>
									</td>
									<td class="text-center dtActionCls">
										<a href="product-add.php" target="_blank" class="btn btn-success" ><i class="fa fa-pencil" title="Edit"></i></a>
										<a href="" class="btn btn-danger" style="margin-right:5px;"><i class="fa fa-times" title="Delete"></i></a>
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
									<td class="center">5</td>
									<td class="center">
										<a href="product-add.php" target="_blank"><img src="images/fashion/female/5.jpg" width="60" ></a>
									</td>
									<td class="center">
										<span class="text-success"><i class="fa fa-fw fa-circle"></i></span>
									</td>
									<td style="font-size: 14px;">
										<a id="row-5" class="tooltipTable" href="product-add.php" target="_blank" >Something amazing dress</a>
										<?php tooltipTables('5')?>	
									</td>
									<td>
										<span class="btn btn-default cell-val-table">dress</span>	
										<span class="btn btn-default cell-val-table">gown</span>
									</td>
									<td class="text-center dtActionCls">
										<a href="product-add.php" target="_blank" class="btn btn-success" ><i class="fa fa-pencil" title="Edit"></i></a>
										<a href="" class="btn btn-danger" style="margin-right:5px;"><i class="fa fa-times" title="Delete"></i></a>
									</td>
								</tr>
							</tbody>
						</table>
						</div><!-- END Products -->
						
						
							<div class="bg-white innerAll border-bottom">
								
							</div>		
						</div>
					</div>
				</div>
			</div>
		</div>		
	</div>
</div><!-- // Content END -->
<!-- // Main Container Fluid END -->
<?php include "footer.php"?>