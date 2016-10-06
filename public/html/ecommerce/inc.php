<!-- PHP Code for Demo -->
<?php
/* For Demo Function for Tooltip Table*/
function tooltipTables($tableRow) {
?>
	<table id="" class="tooltiptext qtipTable table-row-<?=$tableRow?>">			
		<thead>
			<tr>														
				<th class="center" rowspan="2" style="width: 10px;">ID</th>
				<th class="center" rowspan="2" style="width: 10px;">MAIN</th>
				<th class="center" rowspan="2" style="width: 100px;">IMAGE</th>
				<th class="center" rowspan="2" style="width: 10px;">STATUS</th>
				<th class="center" rowspan="2">VARIABLES</th>
				<th class="center" rowspan="2">PRODUCT SKU</th>
				<th class="center" rowspan="2" style="width: 120px; "colspan="2">COUNTRY</th>
				<th class="center" rowspan="2" style="width: 100px;">PRICE</th>
				<th class="center" colspan="3" style="width: 20px;">STOCKS</th>
			</tr>
			<tr>			
				<th class="center">QTY</th>
				<th class="center">TOTAL</th>
				<th class="center">VISUAL</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td class="center" rowspan="6">1</td>
				<td class="center" rowspan="6">
				<span class="text-success"><i class="fa fa-fw fa-star"></i></span>
				</td>
				<td class="center" rowspan="6">
					<a href="product-variants.php" target="_blank"><img src="images/fashion/female/2.jpg" width="60" style="border-radius: 3px;"></a>
				</td>					
				<td class="center" rowspan="6">
					<span class="text-success"><i class="fa fa-fw fa-circle"></i></span>
				</td>
				<td class="innerLR" rowspan="6">
					<span class="btn btn-default cell-val-table" style="border-radius: 4px;color: #7D7B7B;">Small</span>
					<span class="btn btn-default cell-val-table" style="border-radius: 4px;color: #7D7B7B;">Red</span>
					<span class="btn btn-default cell-val-table" style="border-radius: 4px;color: #7D7B7B;">150gram</span>
				</td>					
				<td class="center" style="font-size: 14px;" rowspan="6">
					<a href="product-variants.php" target="_blank">PRD-70321-OK</a>
				</td>
			</tr>
			<tr>
				<td class="center"><i class="fa fa-globe"></i></td>
				<td>GENERAL</td>
				<td class="text-right">&euro; 1.200.00</td>
				<td class="center">5</td>
				<td class="center">20</td>
				<td>
					<div class="progress progress-mini" style="height: 17px;">
						<div class="progress-bar progress-bar-primary" style="width: 25%;"></div>
					</div>
				</td>
			</tr>
			<tr>
				<td><img src="images/fr.png"></td>
				<td>FRANCE</td>
				<td class="text-right">&euro; 1.200.00</td>
				<td class="center">5</td>
				<td class="center">20</td>
				<td>
					<div class="progress progress-mini" style="height: 17px;">
						<div class="progress-bar progress-bar-primary" style="width: 25%;"></div>
					</div>
				</td>
			</tr>
			<tr>
				<td><img src="images/en-flat.jpg"></td>
				<td>UNITED STATE</td>
				<td class="text-right">$ 890.00</td>
				<td class="center">15</td>
				<td class="center">25</td>
				<td>
					<div class="progress progress-mini" style="height: 17px;">
						<div class="progress-bar progress-bar-primary" style="width: 60%;"></div>
					</div>
				</td>
			</tr>
			<tr>
				<td><img src="images/pl.png"></td>
				<td>POLAND</td>
				<td class="text-right">z&#322; 1.110.00</td>
				<td class="center">18</td>
				<td class="center">32</td>
				<td>
					<div class="progress progress-mini" style="height: 17px;">
						<div class="progress-bar progress-bar-primary" style="width: 56%;"></div>
					</div>
				</td>
			</tr>
			<tr>
				<td><img src="images/en.png"></td>
				<td>GREAT BRETAIN</td>
				<td class="text-right">&pound; 1.210.00</td>
				<td class="center">12</td>
				<td class="center">55</td>
				<td>
					<div class="progress progress-mini" style="height: 17px;">
						<div class="progress-bar progress-bar-primary" style="width: 22%;"></div>
					</div>
				</td>
			</tr>
		</tbody>
		<tbody>
			<tr>
				<td class="center" rowspan="6">2</td>
				<td class="center" rowspan="6">
				</td>
				<td class="center" rowspan="6">
					<a href="product-variants.php" target="_blank"><img src="images/fashion/female/1.jpg" width="60" style="border-radius: 3px;"></a>
				</td>
				
				<td class="center" rowspan="6">
					<span class="text-success"><i class="fa fa-fw fa-circle"></i></span>
				</td>
				<td class="center innerLR" rowspan="6">
					<span class="btn btn-default cell-val-table" style="border-radius: 4px;color: #7D7B7B;">Medium</span>
				</td>
				
				<td class="center" style="font-size: 14px;" rowspan="6">
					<a href="product-variants.php" target="_blank">PRD-54232-OK</a>
				</td>
			</tr>
			<tr>
				<td class="center"><i class="fa fa-globe"></i></td>
				<td>GENERAL</td>
				<td class="text-right">&euro; 1.200.00</td>
				<td class="center">5</td>
				<td class="center">20</td>
				<td>
					<div class="progress progress-mini" style="height: 17px;">
						<div class="progress-bar progress-bar-primary" style="width: 25%;"></div>
					</div>
				</td>
			</tr>
			<tr>
				<td><img src="images/fr.png"></td>
				<td>FRANCE</td>
				<td class="text-right">&euro; 1.200.00</td>
				<td class="center">5</td>
				<td class="center">20</td>
				<td>
					<div class="progress progress-mini" style="height: 17px;">
						<div class="progress-bar progress-bar-primary" style="width: 25%;"></div>
					</div>
				</td>
			</tr>
			<tr>
				<td><img src="images/en-flat.jpg"></td>
				<td>UNITED STATE</td>
				<td class="text-right">$ 890.00</td>
				<td class="center">15</td>
				<td class="center">25</td>
				<td>
					<div class="progress progress-mini" style="height: 17px;">
						<div class="progress-bar progress-bar-primary" style="width: 60%;"></div>
					</div>
				</td>
			</tr>
			<tr>
				<td><img src="images/pl.png"></td>
				<td>POLAND</td>
				<td class="text-right">z&#322; 1.110.00</td>
				<td class="center">18</td>
				<td class="center">32</td>
				<td>
					<div class="progress progress-mini" style="height: 17px;">
						<div class="progress-bar progress-bar-primary" style="width: 56%;"></div>
					</div>
				</td>
			</tr>
			<tr>
				<td><img src="images/en.png"></td>
				<td>GREAT BRETAIN</td>
				<td class="text-right">&pound; 1.210.00</td>
				<td class="center">12</td>
				<td class="center">55</td>
				<td>
					<div class="progress progress-mini" style="height: 17px;">
						<div class="progress-bar progress-bar-primary" style="width: 22%;"></div>
					</div>
				</td>
			</tr>
		</tbody>
		<tbody>
			<tr>
				<td class="center" rowspan="6">3</td>
				<td class="center" rowspan="6">
				</td>
				<td class="center" rowspan="6">
					<a href="product-variants.php" target="_blank"><img src="images/fashion/female/4.jpg" width="60" style="border-radius: 3px;"></a>
				</td>
				<td class="center" rowspan="6">
				<span class="text-success"><i class="fa fa-fw fa-circle"></i></span>
				</td>
				<td class="innerLR" rowspan="6">
					<span class="btn btn-default cell-val-table" style="border-radius: 4px;color: #7D7B7B;">Large</span>
				</td>			
				<td class="center" style="font-size: 14px;" rowspan="6">
					<a href="product-variants.php" target="_blank">PRD-54232-OK</a>
				</td>
			</tr>
			<tr>
				<td class="center"><i class="fa fa-globe"></i></td>
				<td>GENERAL</td>
				<td class="text-right">&euro; 1.200.00</td>
				<td class="center">5</td>
				<td class="center">20</td>
				<td>
					<div class="progress progress-mini" style="height: 17px;">
						<div class="progress-bar progress-bar-primary" style="width: 25%;"></div>
					</div>
				</td>
			</tr>
			<tr>
				<td><img src="images/fr.png"></td>
				<td>FRANCE</td>
				<td class="text-right">&euro; 1.200.00</td>
				<td class="center">5</td>
				<td class="center">20</td>
				<td>
					<div class="progress progress-mini" style="height: 17px;">
						<div class="progress-bar progress-bar-primary" style="width: 25%;"></div>
					</div>
				</td>
			</tr>
			<tr>
				<td><img src="images/en-flat.jpg"></td>
				<td>UNITED STATE</td>
				<td class="text-right">$ 890.00</td>
				<td class="center">15</td>
				<td class="center">25</td>
				<td>
					<div class="progress progress-mini" style="height: 17px;">
						<div class="progress-bar progress-bar-primary" style="width: 60%;"></div>
					</div>
				</td>
			</tr>
			<tr>
				<td><img src="images/pl.png"></td>
				<td>POLAND</td>
				<td class="text-right">z&#322; 1.110.00</td>
				<td class="center">18</td>
				<td class="center">32</td>
				<td>
					<div class="progress progress-mini" style="height: 17px;">
						<div class="progress-bar progress-bar-primary" style="width: 56%;"></div>
					</div>
				</td>
			</tr>
			<tr>
				<td><img src="images/en.png"></td>
				<td>GREAT BRETAIN</td>
				<td class="text-right">&pound; 1.210.00</td>
				<td class="center">12</td>
				<td class="center">55</td>
				<td>
					<div class="progress progress-mini" style="height: 17px;">
						<div class="progress-bar progress-bar-primary" style="width: 22%;"></div>
					</div>
				</td>
			</tr>
		</tbody>
		<tbody>
			<tr>
				<td class="center" rowspan="6">4</td>
				<td class="center" rowspan="6"></td>
				<td class="center" rowspan="6">
					<a href="product-variants.php" target="_blank"><img src="images/fashion/female/5.jpg" width="60" style="border-radius: 3px;"></a>
				</td>					
				<td class="center" rowspan="6">
					<span class="text-success"><i class="fa fa-fw fa-circle"></i></span>
				</td>
				<td class="innerLR" rowspan="6">
					<span class="btn btn-default cell-val-table" style="border-radius: 4px;color: #7D7B7B;">Small</span>
				</td>					
				<td class="center" style="font-size: 14px;" rowspan="6">
					<a href="product-variants.php" target="_blank">PRD-76321-OK</a>
				</td>
			</tr>
			<tr>
				<td class="center"><i class="fa fa-globe"></i></td>
				<td>GENERAL</td>
				<td class="text-right">&euro; 1.200.00</td>
				<td class="center">5</td>
				<td class="center">20</td>
				<td>
					<div class="progress progress-mini" style="height: 17px;">
						<div class="progress-bar progress-bar-primary" style="width: 25%;"></div>
					</div>
				</td>
			</tr>
			<tr>
				<td><img src="images/fr.png"></td>
				<td>FRANCE</td>
				<td class="text-right">&euro; 1.200.00</td>
				<td class="center">5</td>
				<td class="center">20</td>
				<td>
					<div class="progress progress-mini" style="height: 17px;">
						<div class="progress-bar progress-bar-primary" style="width: 25%;"></div>
					</div>
				</td>
			</tr>
			<tr>
				<td><img src="images/en-flat.jpg"></td>
				<td>UNITED STATE</td>
				<td class="text-right">$ 890.00</td>
				<td class="center">15</td>
				<td class="center">25</td>
				<td>
					<div class="progress progress-mini" style="height: 17px;">
						<div class="progress-bar progress-bar-primary" style="width: 60%;"></div>
					</div>
				</td>
			</tr>
			<tr>
				<td><img src="images/pl.png"></td>
				<td>POLAND</td>
				<td class="text-right">z&#322; 1.110.00</td>
				<td class="center">18</td>
				<td class="center">32</td>
				<td>
					<div class="progress progress-mini" style="height: 17px;">
						<div class="progress-bar progress-bar-primary" style="width: 56%;"></div>
					</div>
				</td>
			</tr>
			<tr>
				<td><img src="images/en.png"></td>
				<td>GREAT BRETAIN</td>
				<td class="text-right">&pound; 1.210.00</td>
				<td class="center">12</td>
				<td class="center">55</td>
				<td>
					<div class="progress progress-mini" style="height: 17px;">
						<div class="progress-bar progress-bar-primary" style="width: 22%;"></div>
					</div>
				</td>
			</tr>
		</tbody>
		<tbody>
			<tr>
				<td class="center" rowspan="6">5</td>
				<td class="center" rowspan="6"></td>
				<td class="center" rowspan="6">
					<a href="product-variants.php" target="_blank"><img src="images/fashion/female/6.jpg" width="60" style="border-radius: 3px;"></a>
				</td>					
				<td class="center" rowspan="6">
					<span class="text-success"><i class="fa fa-fw fa-circle"></i></span>
				</td>
				<td class="innerLR" rowspan="6">
					<span class="btn btn-default" style="border-radius: 4px;color: #7D7B7B;">Small</span>
				</td>					
				<td class="center" style="font-size: 14px;" rowspan="6">
					<a href="product-variants.php" target="_blank">PRD-703222-OK</a>
				</td>
			</tr>
			<tr>
				<td class="center"><i class="fa fa-globe"></i></td>
				<td>GENERAL</td>
				<td class="text-right">&euro; 1.200.00</td>
				<td class="center">5</td>
				<td class="center">20</td>
				<td>
					<div class="progress progress-mini" style="height: 17px;">
						<div class="progress-bar progress-bar-primary" style="width: 25%;"></div>
					</div>
				</td>
			</tr>
			<tr>
				<td><img src="images/fr.png"></td>
				<td>FRANCE</td>
				<td class="text-right">&euro; 1.200.00</td>
				<td class="center">5</td>
				<td class="center">20</td>
				<td>
					<div class="progress progress-mini" style="height: 17px;">
						<div class="progress-bar progress-bar-primary" style="width: 25%;"></div>
					</div>
				</td>
			</tr>
			<tr>
				<td><img src="images/en-flat.jpg"></td>
				<td>UNITED STATE</td>
				<td class="text-right">$ 890.00</td>
				<td class="center">15</td>
				<td class="center">25</td>
				<td>
					<div class="progress progress-mini" style="height: 17px;">
						<div class="progress-bar progress-bar-primary" style="width: 60%;"></div>
					</div>
				</td>
			</tr>
			<tr>
				<td><img src="images/pl.png"></td>
				<td>POLAND</td>
				<td class="text-right">z&#322; 1.110.00</td>
				<td class="center">18</td>
				<td class="center">32</td>
				<td>
					<div class="progress progress-mini" style="height: 17px;">
						<div class="progress-bar progress-bar-primary" style="width: 56%;"></div>
					</div>
				</td>
			</tr>
			<tr>
				<td><img src="images/en.png"></td>
				<td>GREAT BRETAIN</td>
				<td class="text-right">&pound; 1.210.00</td>
				<td class="center">12</td>
				<td class="center">55</td>
				<td>
					<div class="progress progress-mini" style="height: 17px;">
						<div class="progress-bar progress-bar-primary" style="width: 22%;"></div>
					</div>
				</td>
			</tr>
		</tbody>
	</table>
<?php 
}	
function tooltipTables2($tableRow){
?>
	<table class="center qtipTable tooltiptext2 table-row-<?=$tableRow?>">			
		<thead> 
		<tr>														
			<th class="center" rowspan="2">&nbsp;</th>
			<th class="center" rowspan="2">COUNTRY</th>
			<th class="center" rowspan="2" style="width: 20%">PRICE</th>
			<th class="center" colspan="3">STOCKS</th>
		</tr>
		<tr>			
			<th class="center">REMAINING</th>
			<th class="center">TOTAL</th>
			<th class="center">VISUAL</th>
		</tr>
		</thead>
		<tbody>
		<tr>
			<td>
				<i class="fa fa-globe"></i>
			</td>
			<td>
				General
			</td>
			<td class="text-right">&euro; 1.200.00</td>
			<td class="center">
				<p class="text-center">24</p>			
			</td>
			<td>
				<p class="text-center">50</p>
			</td>
			<td>
				<div class="progress progress-mini" style="height: 17px;">
					<div class="progress-bar progress-bar-primary" style="width: 56%;"></div>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<img src="images/fr.png">				
			</td>
			<td>
				France
			</td>
			<td class="text-right">&euro; 1.200.00</td>
			<td class="center">
				<p class="text-center">24</p>			
			</td>
			<td>
				<p class="text-center">50</p>
			</td>
			<td>
				<div class="progress progress-mini" style="height: 17px;">
					<div class="progress-bar progress-bar-primary" style="width: 56%;"></div>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<img src="images/en-flat.jpg">
			</td>
			<td>
				United State
			</td>
			<td class="text-right">$ 890.00</td>
			<td class="center">
				<p class="text-center">10</p>			
			</td>
			<td>
				<p class="text-center">15</p>
			</td>
			<td>
				<div class="progress progress-mini" style="height: 17px;">
					<div class="progress-bar progress-bar-primary" style="width: 66%;"></div>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<img src="images/pl.png">
			</td>
			<td>
				Poland
			</td>
			<td class="text-right">z&#322; 1.110.00</td>
			<td class="center">
				<p class="text-center">3</p>			
			</td>
			<td>
				<p class="text-center">10</p>
			</td>
			<td>
				<div class="progress progress-mini" style="height: 17px;">
					<div class="progress-bar progress-bar-primary" style="width: 30%;"></div>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<img src="images/en.png">
			</td>
			<td>
				Great Britain
			</td>
			<td class="text-right">&pound; 1.210.00</td>
			<td class="center">
				<p class="text-center">1</p>			
			</td>
			<td>
				<p class="text-center">5</p>
			</td>
			<td>
				<div class="progress progress-mini" style="height: 17px;">
					<div class="progress-bar progress-bar-primary" style="width: 20%;"></div>
				</div>
			</td>
		</tr>
		</tbody>
	</table>
<?php } ?>