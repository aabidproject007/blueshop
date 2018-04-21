@extends('layouts.main')
@section('title')
    Start Page
@endsection
@section('extra_css')
    <!-- Datatables -->
   <style>
		@import url(http://fonts.googleapis.com/css?family=Open+Sans:400,700);
		body, h1, h2, h3, h4, h5, h6{
			font-family: 'Open Sans', sans-serif;
		}
		option.separator {
    margin-top:8px;
    border-top:1px solid #666;
    padding:0;
}
	</style>
	

@endsection
@section('content')

    <!-- page content -->
   <h1>Create Invoice</h1>
		<hr>

		<div id="response" class="alert alert-success" style="display:none;">
			<a href="#" class="close" data-dismiss="alert">&times;</a>
			<div class="message"></div>
		</div>

		<form method="post" id="create_invoice" method="post" action="{{route('invoice_add')}}">
		{{csrf_field()}}
			<input type="hidden" name="action" value="create_invoice">
			<!--<div class="row">
				<div class="col-xs-12">
					<textarea name="custom_email" id="custom_email" class="custom_email_textarea" placeholder="Enter a custom email message here if you wish to override the default invoice type email message."></textarea>
				</div>
			</div>-->
			<div class="row">
				<div class="col-xs-5">
					<h1>
						<img src="{{asset('images/logo.png')}}" class="img-responsive">
					</h1>
				</div>
				<div class="col-xs-7 text-right">
					<div class="row">
						<div class="col-xs-6">
							<h1 class="invoice_type">INVOICE</h1>
						</div>
						<!--<div class="col-xs-3">
							<select name="invoice_type" id="invoice_type" class="form-control">
								<option value="invoice" selected>Invoice</option>
								<option value="quote">Quote</option>
								<option value="receipt">Receipt</option>
							</select>
						</div>
						<div class="col-xs-3">
							<select name="invoice_status" id="invoice_status" class="form-control">
								<option value="open" selected>Open</option>
								<option value="paid">Paid</option>
							</select>
						</div>-->
					</div>
					<!--<div class="col-xs-4 no-padding-right">
				        <div class="form-group">
				            <div class="input-group date" id="invoice_date">
				                <input type="text" class="form-control required" name="invoice_date" placeholder="Select invoice date" data-date-format="DD/MM/YYYY" />
				                <span class="input-group-addon">
				                    <span class="glyphicon glyphicon-calendar"></span>
				                </span>
				            </div>
				        </div>
				    </div>
				    <div class="col-xs-4">
				        <div class="form-group">
				            <div class="input-group date" id="invoice_due_date">
				                <input type="text" class="form-control required" name="invoice_due_date" placeholder="Select due date" data-date-format="DD/MM/YYYY" />
				                <span class="input-group-addon">
				                    <span class="glyphicon glyphicon-calendar"></span>
				                </span>
				            </div>
				        </div>
				    </div>
					<div class="input-group col-xs-4 float-right">
						<span class="input-group-addon">#SSJ</span>
						<input type="text" name="invoice_id" id="invoice_id" class="form-control required" placeholder="Invoice Number" aria-describedby="sizing-addon1" value="1">
					</div>-->
				</div>
			</div>
			<div class="row">
				<div class="col-xs-6">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="float-left">Customer Information</h4>
							<a href="#" class="float-right select-customer">Select existing customer</a>
							<div class="clear"></div>
						</div>
						<div class="panel-body form-group form-group-sm">
							<div class="row">
								<div class="col-xs-6">
									<div class="form-group">
										<input type="text" class="form-control margin-bottom copy-input required" name="customer_name" id="customer_name" placeholder="Enter name" tabindex="1">
									</div>
									<!--<div class="form-group">
										<input type="text" class="form-control margin-bottom copy-input required" name="customer_address_1" id="customer_address_1" placeholder="Address 1" tabindex="3">	
									</div>
									<div class="form-group">
										<input type="text" class="form-control margin-bottom copy-input required" name="customer_town" id="customer_town" placeholder="Town" tabindex="5">		
									</div>
									<div class="form-group no-margin-bottom">
										<input type="text" class="form-control copy-input required" name="customer_postcode" id="customer_postcode" placeholder="Postcode" tabindex="7">					
									</div>-->
								</div>
								<!--<div class="col-xs-6">
									<div class="input-group float-right margin-bottom">
										<span class="input-group-addon">@</span>
										<input type="email" class="form-control copy-input required" name="customer_email" id="customer_email" placeholder="E-mail address" aria-describedby="sizing-addon1" tabindex="2">
									</div>
								    <div class="form-group">
								    	<input type="text" class="form-control margin-bottom copy-input" name="customer_address_2" id="customer_address_2" placeholder="Address 2" tabindex="4">
								    </div>
								    <div class="form-group">
								    	<input type="text" class="form-control margin-bottom copy-input required" name="customer_county" id="customer_county" placeholder="County" tabindex="6">
								    </div>
								    <div class="form-group no-margin-bottom">
								    	<input type="text" class="form-control required" name="customer_phone" id="customer_phone" placeholder="Phone number" tabindex="8">
									</div>
								</div>-->
							</div>
						</div>
					</div>
				</div>
				<!--<div class="col-xs-6 text-right">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4>Shipping Information</h4>
						</div>
						<div class="panel-body form-group form-group-sm">
							<div class="row">
								<div class="col-xs-6">
									<div class="form-group">
										<input type="text" class="form-control margin-bottom required" name="customer_name_ship" id="customer_name_ship" placeholder="Enter name" tabindex="9">
									</div>
									<div class="form-group">
										<input type="text" class="form-control margin-bottom" name="customer_address_2_ship" id="customer_address_2_ship" placeholder="Address 2" tabindex="11">	
									</div>
									<div class="form-group no-margin-bottom">
										<input type="text" class="form-control required" name="customer_county_ship" id="customer_county_ship" placeholder="County" tabindex="13">
									</div>
								</div>
								<div class="col-xs-6">
									<div class="form-group">
								    	<input type="text" class="form-control margin-bottom required" name="customer_address_1_ship" id="customer_address_1_ship" placeholder="Address 1" tabindex="10">
									</div>
									<div class="form-group">
										<input type="text" class="form-control margin-bottom required" name="customer_town_ship" id="customer_town_ship" placeholder="Town" tabindex="12">							
								    </div>
								    <div class="form-group no-margin-bottom">
								    	<input type="text" class="form-control required" name="customer_postcode_ship" id="customer_postcode_ship" placeholder="Postcode" tabindex="14">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>-->
			</div>
			<!-- / end client details section -->
			<table class="table table-bordered" id="invoice_table">
				<thead>
					<tr>
						<th class="col-sm-1">
							<a href="#" class="btn btn-success btn-xs add-row"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
						</th>
						<th class="col-sm-2">
							<h4> Vendor</h4>
						</th>
						<th class="col-sm-2">
							<h4>Item Name</h4>
						</th>
						<th class="col-sm-1">
							<h4>Qty</h4>
						</th>
						<th class="col-sm-2">
							<h4>Price</h4>
						</th>
						<th class="col-sm-1">
							<h4>Discount</h4>
						</th>
						
						<th class="col-sm-1">
							<h4>Total</h4>
						</th>
						<th class="col-sm-2">
							<h4>Salesman</h4>
						</th>
						<th class="col-sm-1" style="display: none;">
							<h4>GST</h4>
						</th>
					</tr>
				</thead>
				<tbody>
					<tr id="actRow">
					<td><a href="#" class="btn btn-danger btn-xs delete-row"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>
						<td class="col-sm-2">
						
						<div class="form-group form-group-sm  no-margin-bottom">
					
							
								<select name="vendor[]" class="form-control item-select vendor-row" id="vendor" >
								 
									 <option value="" readonly=true class="separator">Vendor</option>
									  @foreach ($vendor as $key => $value)
                        <option value="{{ $key }}">{{ $value }}</option>
                    @endforeach
          

								</select>
								
							</div>
						</td>
						<td class="text-right" class="col-sm-2">
						<div class="form-group form-group-sm  no-margin-bottom">
						<!--<input type="text" class="form-control form-group-sm item-input invoice_product" name="item" placeholder="Enter item">-->
						<select name="item[]" class="form-control item-select UsersSelect"  id="item">
					<option value="">Item</option>
                </select>
						
								
							</div>
						</td>
						<td class="text-right" class="col-sm-1">
						
							<div class="form-group form-group-sm no-margin-bottom">
								<input type="text" class="form-control invoice_product_qty calculate" name="invoice_product_qty[]" value="1">
								
							</div>
						</td>
						<td class="text-right" class="col-sm-2">
							<div class="input-group input-group-sm  no-margin-bottom">
								<span class="input-group-addon">&#8377;</span>
								<input type="text" class="form-control calculate invoice_product_price required" name="invoice_product_price[]" aria-describedby="sizing-addon1" placeholder="0.00">
							</div>
						</td>
						
						
				        <td class="text-right" class="col-sm-1">
							<div class="form-group form-group-sm  no-margin-bottom">
								<input type="text" class="form-control calculate" name="invoice_product_discount[]" placeholder="Enter % or value (ex: 10% or 10.50)">
							</div>
						</td>
					    <td class="text-right" class="col-sm-1">
							<div class="input-group input-group-sm">
								<span class="input-group-addon">&#8377</span>
								<input type="text" class="form-control calculate-sub" name="invoice_product_sub[]" id="invoice_product_sub" value="0.00" aria-describedby="sizing-addon1" >
							</div>
						</td>
						<td class="text-right" class="col-sm-2">
							<div class="input-group input-group-sm  no-margin-bottom">
								<select class="form-control item-select" id="vendor" name=salesperson[]>
									 <option value="">sales person</option>
									  @foreach ($user as $key => $value)
                        <option value="{{ $value }}">{{ $value }}</option>
                    @endforeach
          

								</select>
							</div>
						</td>
						<td class="text-right" class="col-sm-1" style="display: none;">
							<div class="input-group input-group-sm  no-margin-bottom">
									
								<input type="text" class="form-control calculate invoice_product_gst required" name="gst_per[]" id="gst" aria-describedby="sizing-addon1" placeholder="0.00%">
							</div>
						</td>
							<td class="text-right" class="col-sm-1" style="display: none;">
							<div class="input-group input-group-sm  no-margin-bottom">
									
								<input type="text" class="form-control calculate invoice_product_gst_amount required" name="gst_tax[]" id="gst" aria-describedby="sizing-addon1" placeholder="0.00%">
							</div>
						</td>
						
					</tr>
				</tbody>
			</table>
			<div id="invoice_totals" class="padding-right row text-right">
				<div class="col-xs-6">
					<div class="input-group form-group-sm textarea no-margin-bottom">
						<div class="col-xs-3 col-xs-offset-3">
							<strong>Paid:</strong>
						</div>
					
								<span class="input-group-addon">&#8377;</span>
								<input type="text" class="form-control calculate required" name="paid" aria-describedby="sizing-addon1" placeholder="0.00" id="paid" disabled="disabled">
					</div>
					</div>
								<div class="col-xs-6 no-padding-right">
					<div class="row">
						<div class="col-xs-4 col-xs-offset-5">
							<strong>Sub Total:</strong>
						</div>
						<div class="col-xs-3">
							&#8377;<span class="invoice-sub-total">0.00</span>
							<input type="hidden" name="invoice_subtotal" id="invoice_subtotal">
						</div>
					</div>
					<div class="row">
						<div class="col-xs-4 col-xs-offset-5">
							<strong>Discount:</strong>
						</div>
						<div class="col-xs-3">
							&#8377;<span class="invoice-discount">0.00</span>
							<input type="hidden" name="invoice_discount" id="invoice_discount">
						</div>
					</div>
					<div class="row" style="display: none;">
						<div class="col-xs-4 col-xs-offset-5">
							<strong class="shipping">Shipping:</strong>
						</div>
						<div class="col-xs-3">
							<div class="input-group input-group-sm">
								<span class="input-group-addon">&#8377;</span>
								<input type="text" class="form-control calculate shipping" name="invoice_shipping" aria-describedby="sizing-addon1" placeholder="0.00">
							</div>
						</div>
					</div>
					<div class="row" id="gst-tax">
						
					</div>
					<div class="row" hidden="true">
						<div class="col-xs-4 col-xs-offset-5">
							<strong>TAX/VAT:</strong><br>Remove TAX/VAT <input type="checkbox" checked=true class="remove_vat" >
						</div>
						<div class="col-xs-3">
							&#8377;<span class="invoice-vat" data-enable-vat="1" data-vat-rate="20" data-vat-method="">0.00</span>
							<input type="hidden" name="invoice_vat" id="invoice_vat">
						</div>
					</div>
					<div class="row">
						<div class="col-xs-4 col-xs-offset-5">
							<strong>Total:</strong>
						</div>
						<div class="col-xs-3">
							&#8377;<span class="invoice-total">0.00</span>
							<input type="hidden" name="invoice_total" id="invoice_total">
						</div>
					</div>
				<!--Balnce Div-->
					<div class="row">
						<div class="col-xs-4 col-xs-offset-5">
							<strong>Balance:</strong>
						</div>
						<div class="col-xs-3">
							&#8377;<span class="balance" id="balance">0.00</span>
							<input type="hidden" name="balance" id="invoice_balance">
						
						</div>
					</div>
				</div>

			</div>
			<div class="row">
			<input type="hidden"  id="gst-hidden" value="">
			
				<div class="col-xs-12 margin-top btn-group">
					<input type="submit" id="action_create_invoice" class="btn btn-success float-right" value="Create Invoice" data-loading-text="Creating...">
					<!--<button type="submit" class="btn btn-success"> create Invoice</button>-->
				</div>
			</div>
		</form>


	</div>
    <!-- page content -->

@endsection

@section('extra_script')
<script type="text/javascript">
    $(document).ready(function() {
    	 $('#invoice_table').on('change', ".vendor-row", function(e) {
    	
    	e.preventDefault();
    	var vendid = $(this).val();
    	 	var tr=  $(this)
     .closest("tr")
     .find("select.UsersSelect")
     
    
    	 if(vendid) {
                $.ajax({
                    url: "http://localhost:8000/invoice/item_fill/"+vendid,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
             
                            tr.empty();
                           
                          tr.append('<option value="">Item</option>');
                        $.each(data, function(key, value) {
                        		
    
                        	 tr.append('<option value="'+ key +'">'+ value +'</option>');
   
                        });


                    }
                });
            }else{
            	
                
            }
     
      
    });
    	 $('#invoice_table').on('change', ".UsersSelect", function(e) {
    	
    	e.preventDefault();
    	var vendid = $(this).val();
    	
    	 	var tr=$(this).closest("tr").find("#gst");
         
    	 if(vendid) {
                $.ajax({
                    url: "http://localhost:8000/invoice/gst_fill/"+vendid,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                    	console.log(data);
             
                         tr.val(data.gst_tax)
     					 gstshow(data.gst_tax);
                    }
                });
            }else{
            	
                
            }
      
    });
       
       function gstshow(id) {
      
            	var gsthidden=$('#gst-hidden').val();
            	var count=0;
					var strArray = gsthidden.split(',');
				
				var a=strArray.indexOf(id);
				
				if(a== -1){
					
						var sgst=parseFloat(id)/2;
            			
						$('#gst-tax').append('<div class="gst'+id+'"><div class="col-xs-4 col-xs-offset-5"><strong class="shipping">S-GST '+sgst+'%:</strong></div><div class="col-xs-3">&#8377;<span class="sgst" id="s'+id+'">0.00</span></div><div class="col-xs-4 col-xs-offset-5"><strong class="shipping">C-GST '+sgst+'%:</strong></div><div class="col-xs-3">&#8377;<span class="cgst" id="c'+id+'">0.00</span></div></div>');/*
						$('#gst-hidden').append( ).val(id+",");*/
						gstadd=$('#gst-hidden').val();
						$('#gst-hidden').val(gstadd + "," + id);
					}
					else
					{
						
						
					
						
					}
            	/*for(var i = 0; i < strArray.length; i++){
            		if(strArray[i]!=id && )
            		{
            			count++;
            			
					}
					else
					{
						
						
					}
           
        }*/
            	}
 
	
      
	    
        
    });
</script>
<script>
$(document).ready(function() {
	

  // email invoice
	$(document).on('click', ".email-invoice", function(e) {
        e.preventDefault();

        var invoiceId = 'action=email_invoice&id='+$(this).attr('data-invoice-id')+'&email='+$(this).attr('data-email')+'&invoice_type='+$(this).attr('data-invoice-type')+'&custom_email='+$(this).attr('data-custom-email'); //build a post data structure
		emailInvoice(invoiceId);
   	});

	// delete invoice
	$(document).on('click', ".delete-invoice", function(e) {
        e.preventDefault();

        var invoiceId = 'action=delete_invoice&delete='+ $(this).attr('data-invoice-id'); //build a post data structure
        var invoice = $(this);

	    $('#delete_invoice').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteInvoice(invoiceId);
			$(invoice).closest('tr').remove();
        });
   	});

	// delete product
	$(document).on('click', ".delete-product", function(e) {
        e.preventDefault();

        var productId = 'action=delete_product&delete='+ $(this).attr('data-product-id'); //build a post data structure
        var product = $(this);

	    $('#confirm').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteProduct(productId);
			$(product).closest('tr').remove();
        });
   	});

	// create customer
	$("#action_create_customer").click(function(e) {
		e.preventDefault();
	    actionCreateCustomer();
	});

	$(document).on('click', ".item-select", function(e) {

   		e.preventDefault;

   		var product = $(this);

   		$('#insert').modal({ backdrop: 'static', keyboard: false }).one('click', '#selected', function(e) {

		    var itemText = $('#insert').find("option:selected").text();
		    var itemValue = $('#insert').find("option:selected").val();

		    $(product).closest('tr').find('.invoice_product').val(itemText);
		    $(product).closest('tr').find('.invoice_product_price').val(itemValue);

		    updateTotals('.calculate');
        	calculateTotal();

   		});

   		return false;

   	});

   	$(document).on('click', ".select-customer", function(e) {

   		e.preventDefault;

   		var customer = $(this);

   		$('#insert_customer').modal({ backdrop: 'static', keyboard: false });

   		return false;

   	});

   	$(document).on('click', ".customer-select", function(e) {

		    var customer_name = $(this).attr('data-customer-name');
		    var customer_email = $(this).attr('data-customer-email');
		    var customer_phone = $(this).attr('data-customer-phone');

		    var customer_address_1 = $(this).attr('data-customer-address-1');
		    var customer_address_2 = $(this).attr('data-customer-address-2');
		    var customer_town = $(this).attr('data-customer-town');
		    var customer_county = $(this).attr('data-customer-county');
		    var customer_postcode = $(this).attr('data-customer-postcode');

		    var customer_name_ship = $(this).attr('data-customer-name-ship');
		    var customer_address_1_ship = $(this).attr('data-customer-address-1-ship');
		    var customer_address_2_ship = $(this).attr('data-customer-address-2-ship');
		    var customer_town_ship = $(this).attr('data-customer-town-ship');
		    var customer_county_ship = $(this).attr('data-customer-county-ship');
		    var customer_postcode_ship = $(this).attr('data-customer-postcode-ship');

		    $('#customer_name').val(customer_name);
		    $('#customer_email').val(customer_email);
		    $('#customer_phone').val(customer_phone);

		    $('#customer_address_1').val(customer_address_1);
		    $('#customer_address_2').val(customer_address_2);
		    $('#customer_town').val(customer_town);
		    $('#customer_county').val(customer_county);
		    $('#customer_postcode').val(customer_postcode);


		    $('#customer_name_ship').val(customer_name_ship);
		    $('#customer_address_1_ship').val(customer_address_1_ship);
		    $('#customer_address_2_ship').val(customer_address_2_ship);
		    $('#customer_town_ship').val(customer_town_ship);
		    $('#customer_county_ship').val(customer_county_ship);
		    $('#customer_postcode_ship').val(customer_postcode_ship);

		    $('#insert_customer').modal('hide');

	});

	// create invoice
	$("#action_create_invoice").click(function(e) {
		e.preventDefault();
	    actionCreateInvoice();
	});

	// update invoice
	$(document).on('click', "#action_edit_invoice", function(e) {
		e.preventDefault();
		updateInvoice();
	});

	// enable date pickers for due date and invoice date
	var dateFormat = $(this).attr('data-vat-rate');
	$('#invoice_date, #invoice_due_date').datetimepicker({
		showClose: false,
		format: dateFormat
	});

	// copy customer details to shipping
    $('input.copy-input').on("input", function () {
        $('input#' + this.id + "_ship").val($(this).val());
    });
    
    // remove product row
    $('#invoice_table').on('click', ".delete-row", function(e) {
    	e.preventDefault();
    	
       var count=0;
     var tr=$(this).closest('tr'),
           
       sgst = $('[name="gst_per[]"]', tr).val();
         
        $('#invoice_table tbody tr').each(function() {
            
                 gstpercent = $('[name="gst_per[]"]',this).val();
              
                if(gstpercent){
					if(sgst == gstpercent)
	        {
			 
				count++;
			}
				}
	        
			
            
	    });
	      if(sgst){
	    if(count == 1)
	    {
	    var gsthidden=$('#gst-hidden').val();
            	
					var arr = gsthidden.split(',');
	    	
    var itemtoRemove = "," +sgst;
    arr.splice($.inArray(itemtoRemove, arr),1);
	    		
						$('#gst-hidden').val(arr);
	    		  	
			$(".gst" + sgst).remove();
		
					
		}
    	}
       	$(this).closest('tr').remove();
        findgst(sgst);
        calculateTotal();
        
    });

    // add new product row on invoice
      var count = 0; // Global unique counter
      var cloned = $('#invoice_table tr:last').clone();
      $('.add-row').click(function() {
            count++; // Increment counter
            /*$('#invoice_table tbody > tr:last').clone(true).appendTo('#invoice_table ')*/
            cloned.clone().appendTo('#invoice_table').
             // Clone and append
                  filter('[id]').each(function() { // For each new item with an ID
                        this.id = this.id + '_' + count; // Append the counter to the ID
                  });
            return false;
      });
   /* var cloned = $('#invoice_table tr:last').clone();
   
    $(".add-row").click(function(e) {
        e.preventDefault();
        cloned.clone().appendTo('#invoice_table'); 
    });*/
    
    calculateTotal();
    
    $('#invoice_table').on('input', '.calculate', function () {
	    updateTotals(this);
	    updategstTotals(this);
	    calculateTotal();
	});

	$('#invoice_totals').on('input', '.calculate', function () {
	    calculateTotal();
	});

	$('#invoice_product').on('input', '.calculate', function () {
	    calculateTotal();
	});

	$('.remove_vat').on('change', function() {
        calculateTotal();
    });

	function updateTotals(elem) {

        var tr = $(elem).closest('tr'),
            quantity = $('[name="invoice_product_qty[]"]', tr).val(),
	        price = $('[name="invoice_product_price[]"]', tr).val(),
            isPercent = $('[name="invoice_product_discount[]"]', tr).val().indexOf('%') > -1,
            percent = $.trim($('[name="invoice_product_discount[]"]', tr).val().replace('%', '')),
           gstpercent = $('[name="gst_per[]"]', this).val(),
	        subtotal = parseInt(quantity) * parseFloat(price);
	       
	        if(subtotal)
	        {
	        	
			}
			else{
				
				subtotal=0;
			}
           gst_tax = ((parseFloat(gstpercent) / 100) * subtotal);
        if(percent && $.isNumeric(percent) && percent !== 0) {
            if(isPercent){
                subtotal = subtotal - ((parseFloat(percent) / 100) * subtotal);
            } else {
                subtotal = subtotal - parseFloat(percent);
            }
        } else {
            $('[name="invoice_product_discount[]"]', tr).val('');
        }

	    $('.calculate-sub', tr).val(subtotal.toFixed(2));
	    $('[name="gst_tax[]"]', tr).val(gst_tax.toFixed(2));
	  
	  
	}
    function updategstTotals(elem) {
       	
       	var tr = $(elem).closest('tr'),
            quantity = $('[name="invoice_product_qty[]"]', tr).val(),
	        price = $('[name="invoice_product_price[]"]', tr).val(),
        
           gstpercent = $('[name="gst_per[]"]', tr).val();
          findgst(gstpercent);
          
          }
    function findgst(id){
          	
		  	var stax=0;
		  	var gid=id;
           $('#invoice_table tbody tr').each(function() {
                       
                quantity = $('[name="invoice_product_qty[]"]', this).val(),
	            price = $('[name="invoice_product_price[]"]', this).val() || 0,
                 gstpercent = $('[name="gst_per[]"]',this).val();
               if(gid == gstpercent){
			
			   	 subtotal = parseInt(quantity) * parseFloat(price);
                 gst_tax = ((parseFloat(gstpercent) / 100) * subtotal)/2;
                 stax+=gst_tax;
               
			   }
			   else{
			
			   }
			
            
	    });
        
		 $("#s" + id).text((stax).toFixed(2));
	      $("#c" + id).text((stax).toFixed(2));
	  
            	}
    function calculateTotal() {
	    
	    var grandTotal = 0,
	    	disc = 0,
	    	grandgstTotal = 0,
	    	gst_tax=0,
	    	c_ship = parseInt($('.calculate.shipping').val()) || 0;
	    	paid = parseFloat($('#paid').val()) || 0;

	    $('#invoice_table tbody tr').each(function() {
            var c_sbt = $('.calculate-sub', this).val(),
           
                quantity = $('[name="invoice_product_qty[]"]', this).val(),
	            price = $('[name="invoice_product_price[]"]', this).val() || 0,
                 gstpercent = $('[name="gst_per[]"]', this).val(),
               
	        subtotal = parseInt(quantity) * parseFloat(price);
	       
           gst_tax = ((parseFloat(gstpercent) / 100) * subtotal);
                
            
            grandTotal += parseFloat(c_sbt)  ;
            grandgstTotal += parseFloat(gst_tax)  ;
            disc += subtotal - parseFloat(c_sbt);
             $('[name="gst_tax[]"]', this).val(gst_tax.toFixed(2));
            
	    });
		if(grandgstTotal){}else{grandgstTotal=0;}
        // VAT, DISCOUNT, SHIPPING, TOTAL, SUBTOTAL:
	    var subT = parseFloat(grandTotal),
	    	finalTotal = parseFloat(grandTotal + c_ship + grandgstTotal);
	    	balance=finalTotal - paid;
	    	if(finalTotal||paid){
			 
			 $('#paid').prop("disabled", false);
			 
			}
			else
			{
				
				 $('#paid').prop("disabled", true);
				
			}
			
	    
	    	vat = parseInt($('.invoice-vat').attr('data-vat-rate'));

	    $('.invoice-sub-total').text(subT.toFixed(2));
	    $('#invoice_subtotal').val(subT.toFixed(2));
        $('.invoice-discount').text(disc.toFixed(2));
        $('#invoice_discount').val(disc.toFixed(2));
        $('.balance').text(balance.toFixed(2));
        $('#invoice_balance').val(balance.toFixed(2));
        if($('.invoice-vat').attr('data-enable-vat') === '1') {

	        if($('.invoice-vat').attr('data-vat-method') === '1') {
		        $('.invoice-vat').text(((vat / 100) * finalTotal).toFixed(2));
		        $('#invoice_vat').val(((vat / 100) * finalTotal).toFixed(2));
	            $('.invoice-total').text((finalTotal).toFixed(2));
	            $('#invoice_total').val((finalTotal).toFixed(2));
	        } else {
	            $('.invoice-vat').text(((vat / 100) * finalTotal).toFixed(2));
	            $('#invoice_vat').val(((vat / 100) * finalTotal).toFixed(2));
		        $('.invoice-total').text((finalTotal + ((vat / 100) * finalTotal)).toFixed(2));
		        $('#invoice_total').val((finalTotal + ((vat / 100) * finalTotal)).toFixed(2));
	        }
		} else {
			$('.invoice-total').text((finalTotal).toFixed(2));
			$('#invoice_total').val((finalTotal).toFixed(2));
		}

		// remove vat
    	if($('input.remove_vat').is(':checked')) {
	        $('.invoice-vat').text("0.00");
	        $('#invoice_vat').val("0.00");
	       
            $('.invoice-total').text((finalTotal).toFixed(2));
            $('#invoice_total').val((finalTotal).toFixed(2));
	    }

	}
			//add action invoice
		
	       function actionCreateInvoice() {

		var errorCounter = validateForm();

		if (errorCounter > 0) {
		    $("#response").removeClass("alert-success").addClass("alert-warning").fadeIn();
		    $("#response .message").html("<strong>Error</strong>: It appear's you have forgotten to complete something!");
		    $("html, body").animate({ scrollTop: $('#response').offset().top }, 1000);
		} else {

			var $btn = $("#action_create_invoice").button("loading");

			$(".required").parent().removeClass("has-error");
			$("#create_invoice").find(':input:disabled').removeAttr('disabled');

			$.ajax({

				url: "{{route('invoice_add')}}",
				type: 'POST',
			/*	 data: {name: name, email: email, password: password, role: role,_token: '{{ csrf_token() }}'},*/
				data: $("#create_invoice").serialize(),
				dataType: 'json',
				success: function(data){
					$("#create_invoice").load(" #create_invoice");
					$("#response .message").html("<strong>" + data.status + "</strong>: " + data.message);
					$("#response").removeClass("alert-warning").addClass("alert-success").fadeIn();
					$("html, body").animate({ scrollTop: $('#response').offset().top }, 1000);
					/*$("#create_invoice").before().html("<a href='/invoice-add.php' class='btn btn-primary'>Create new invoice</a>");*/
					
					/*$("#create_invoice").remove();*/
					$btn.button("reset");
				
				
				},
				error: function(data){
					$("#response .message").html("<strong>" + data.status + "</strong>: " + data.message);
					$("#response").removeClass("alert-success").addClass("alert-warning").fadeIn();
					$("html, body").animate({ scrollTop: $('#response').offset().top }, 1000);
					$btn.button("reset");
				}

			});
		}

	}
 		   function validateForm() {
	    // error handling
	    var errorCounter = 0;

	    $(".required").each(function(i, obj) {

	        if($(this).val() === ''){
	            $(this).parent().addClass("has-error");
	            errorCounter++;
	        } else{ 
	            $(this).parent().removeClass("has-error"); 
	        }


	    });

	    return errorCounter;
	}
});
</script>
   
@endsection