<?php include "header.php"?>
<!-- content -->
<div id="content" class="category-page">	
    <div class="content-cont">      
	    <!-- heading -->
	    <div class="me-heading bg-white border-bottom">		
			<div class="row">			
				<div class="me-hl col-xs-12 col-md-9">
					<h1 class="content-heading">Attributes</h1>
				</div>				
		   		<div class="me-hr col-xs-12 col-md-3">
		   			<a id="me-new-attribute" class="btn btn-success add-product" title="Add product">
		      			<i class="fa fa-plus" style="padding-right:10px;"></i>
		      			New Attribute
		   			</a>
		   		</div>	
			</div>			
		</div>		
		<div id="addAttributeCont" class="me-heading bg-white border-bottom">
			<div class="me-add-attribute-cont">
				<div class="row ">	
					<div class="col-xs-12 col-md-12">
						<div class="pdc-heading clearfix">
							<h4><i class="fa fa-language"></i>Language</h4>
						</div>
						<ul>
							<li>
								<div class="form-group">
									<label>Name</label>
									<input type="text" class="form-control" name="" id="" placeholder="Attribute name">
								</div>
								<div class="form-group">
									<label for="">Description</label>
									<input type="text" class="form-control" name="" id="" placeholder="Description">
								</div>
								<div class="form-group">
								   <label for="">Languages</label>
								   <select name="" id="" class="form-control">
									  <option value="" selected="selected">Choose Language</option>
									  <option value="french">French</option>
									  <option value="english">English</option>
								   </select>
								</div>
								<span class="add-language-attribute fa fa-plus"></span>
							</li>
						</ul>
					</div>
				</div>
				<div class="row me-action-button-cont">			
					<div class="col-xs-12 col-md-12">
						<div class="pdc-heading clearfix">
							<h4><i class="fa fa-cogs"></i>General Data</h4>
						</div>				
						<div class="form-group">
							<label for="">Reference</label>
							<input type="text" class="form-control" name="" id="" placeholder="Reference">
						</div>					
						<div class="form-group">
						   <label for="">Type</label>
						   <select name="page_type" id="" class="form-control">
								<option value="" selected="selected">Choose Type</option>
								<option>Numeric</option>
								<option>Float</option>
								<option>Boolean</option>
								<option>Short String</option>
								<option>Text</option>
								<option>Date Time</option>
								<option>Binary</option>
						   </select>
						</div>					 
						<div class="">
							<div class="form-group">
								<label class="label-block">Visibility</label>
								<div class="make-switch bs-melis" data-on-label="YES" data-off-label="NO" data-text-label="<i class='fa fa-arrows-h'>">
									<input type="checkbox">
								</div>
							</div>						
							<div class="form-group">
								<label class="label-block">Searchable</label>
								<div class="make-switch bs-melis" data-on-label="YES" data-off-label="NO" data-text-label="<i class='fa fa-arrows-h'>">
									<input type="checkbox">
								</div>
							</div>											
						</div>					
					</div>
				</div>
				<br>
				<div class="form-group">
					<a class="btn btn-success add-attribute" title="Add Attribute"><i class="fa fa-save"></i> Save Attribute</a>
				</div>	
			</div>	
		</div>
		<div class="tab-content innerAll spacing-x2">
			<div class="row melis-pdc">			
				<div class="col-xs-12 col-md-12">
					<div class="table-container">
						<table id="attribute-table" class="me-table table table-striped table-primary dt-responsive nowrap no-footer dtr-inline dataTable" style="width: 100%">			
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
									<th class="center" style="width: 60px;">ID</th>
									<th class="center">Name</th>
									<th class="center" style="width: 100px;">Reference</th>
									<th class="center" style="width: 100px;">Type</th>
									<th class="center" style="width: 100px;">Action</th>
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
										<a href="attribute-info.php" target="_blank">Color</a>
									</td>
									<td class="center">attr1</td>
									<td class="center">Variable</td>
									<td class="text-center">
										<a href="attribute-info.php" target="_blank" class="btn btn-success" ><i class="fa fa-pencil" title="Edit"></i></a>		
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
									<td class="center">2</td>
									<td class="center" style="font-size: 14px;">
										<a href="attribute-info.php" target="_blank">Size</a>
									</td>
									<td class="center">attr2</td>
									<td class="center">Variable</td>
									<td class="text-center">
										<a href="attribute-info.php" target="_blank" class="btn btn-success" ><i class="fa fa-pencil" title="Edit"></i></a>		
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
									<td class="center" style="font-size: 14px;">
										<a href="attribute-info.php" target="_blank">Lenght</a>
									</td>
									<td class="center">attr3</td>
									<td class="center">Integer</td>
									<td class="text-center">
										<a href="attribute-info.php" target="_blank" class="btn btn-success" ><i class="fa fa-pencil" title="Edit"></i></a>		
										<a href="" class="btn btn-danger" style="margin-right:5px;"><i class="fa fa-times" title="Delete"></i></a>
									</td>									
								</tr>
							</tbody>
						</table>				
					</div>		
				</div>		
			</div>		
		</div>		
	</div>
</div><!-- // Content END -->
<!-- // Main Container Fluid END -->
<?php include "footer.php"?>