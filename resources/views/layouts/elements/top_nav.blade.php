<!-- top navigation -->
<div class="top-buttons btn-group">
			<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Invoices <span class="caret"></span></button>
		  	<ul class="dropdown-menu" role="menu">	
		  		<li><a href="{{route('invoice_create')}}">Create Invoice</a></li>	    
				<li><a href="{{route('invoice_list')}}">Manage Invoices</a></li>
				<li><a href="#" class="download-csv">Download CSV</a></li>
		  	</ul>
		</div>

		<div class="top-buttons btn-group">
			<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Items <span class="caret"></span></button>
		  	<ul class="dropdown-menu" role="menu">	
		  		<li><a href="product-add.php">Add Item</a></li>	    
				<li><a href="product-list.php">Manage Item</a></li>
		  	</ul>
		</div>

		<div class="top-buttons btn-group">
			<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Customers <span class="caret"></span></button>
		  	<ul class="dropdown-menu" role="menu">	
		  		<li><a href="customer-add.php">Add Customer</a></li>	    
				<li><a href="customer-list.php">Manage Customers</a></li>
		  	</ul>
		</div>

		<div class="top-buttons btn-group">
			<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Users <span class="caret"></span></button>
		  	<ul class="dropdown-menu" role="menu">	
		  		<li><a href="user-add.php">Add User</a></li>	    
				<li><a href="user-list.php">Manage Users</a></li>
		  	</ul>
		</div>

		<div class="top-buttons float-right btn-group">
			<a class="btn btn-info float-right" href="{{ route('logout') }}" role="button">Logout</a>
		</div>

		<div class="top-buttons btn-group float-right">
			<p class="user">Hey, admin</p>
		</div>
<!-- /top navigation -->