@extends('layouts.main')
@section('title')
    Start Page
@endsection
@section('extra_css')
    <!-- Datatables -->
 
@endsection
@section('content')

    <!-- page content -->
   

		

<h1>Invoice List</h1>
<hr>

<div class="row">

	<div class="col-xs-12">

		<div id="response" class="alert alert-success" style="display:none;">
			<a href="#" class="close" data-dismiss="alert">&times;</a>
			<div class="message"></div>
		</div>
	
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4>Manage Invoices</h4>
			</div>
			<div class="panel-body form-group form-group-sm">
				<table class="table table-striped table-bordered" id="data-table" cellspacing="0"><thead><tr>

				<th><h4>Invoice</h4></th>
				<th><h4>Customer</h4></th>
				<th><h4>Issue Date</h4></th>
				<th><h4>Due Date</h4></th>
				<th><h4>Type</h4></th>
				<th><h4>Status</h4></th>
				<th><h4>Action</h4></th>

			  </tr></thead><tbody>
				<tr>
					<td>1</td>
					<td>test</td>
				    <td>16/04/2018</td>
				    <td>16/04/2018</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=1" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="1" data-email="test@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/1.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="1" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>1</td>
					<td>test</td>
				    <td>16/04/2018</td>
				    <td>17/04/2018</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=1" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="1" data-email="test@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/1.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="1" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>1</td>
					<td>Rajesh Kumar</td>
				    <td>16/04/2018</td>
				    <td>16/04/2018</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=1" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="1" data-email="akbq@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/1.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="1" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>1</td>
					<td>Rajesh Kumar</td>
				    <td>16/04/2018</td>
				    <td>17/04/2018</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=1" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="1" data-email="akbq@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/1.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="1" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>100dd</td>
					<td>Krishan</td>
				    <td>03/01/2017</td>
				    <td>11/01/2017</td>
				    <td>receipt</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=100dd" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="100dd" data-email="ohkrish@gmail.com" data-invoice-type="receipt" data-custom-email="nhhjj" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/100dd.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="100dd" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>109</td>
					<td>Anass</td>
				    <td>20/03/2018</td>
				    <td>20/03/2018</td>
				    <td>quote</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=109" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="109" data-email="aessiti@gmail.com" data-invoice-type="quote" data-custom-email="2021" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/109.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="109" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>1111</td>
					<td>oswaldo gerardino</td>
				    <td>04/01/2018</td>
				    <td>05/01/2018</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=1111" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="1111" data-email="oswaldogeovanny@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/1111.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="1111" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>111111111</td>
					<td>sss</td>
				    <td>10/02/2018</td>
				    <td>16/02/2018</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=111111111" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="111111111" data-email="sss" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/111111111.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="111111111" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>1144</td>
					<td>Test</td>
				    <td>18/01/2017</td>
				    <td>13/01/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=1144" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="1144" data-email="bobjeff101@hotmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/1144.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="1144" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>1145</td>
					<td>Lingutla Radhika</td>
				    <td>13/01/2017</td>
				    <td>13/01/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=1145" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="1145" data-email="radhimohan30@yahoo.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/1145.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="1145" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>1147</td>
					<td>Juan Campos</td>
				    <td>18/01/2017</td>
				    <td>31/01/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=1147" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="1147" data-email="in" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/1147.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="1147" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>1148</td>
					<td>sikik</td>
				    <td>13/01/2017</td>
				    <td>20/01/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=1148" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="1148" data-email="demo0@hostname.club" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/1148.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="1148" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>1150</td>
					<td>fujitaufik</td>
				    <td>14/01/2017</td>
				    <td>15/01/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=1150" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="1150" data-email="fujitaufik@gmail.com" data-invoice-type="invoice" data-custom-email="fujitaufik@gmail.com" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/1150.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="1150" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>1151</td>
					<td>Mohamed</td>
				    <td>14/01/2017</td>
				    <td>14/01/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=1151" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="1151" data-email="maa@nozomit.com" data-invoice-type="invoice" data-custom-email="qweqwe" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/1151.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="1151" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>1152</td>
					<td>Juan Campos</td>
				    <td>02/01/2017</td>
				    <td>02/01/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=1152" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="1152" data-email="in" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/1152.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="1152" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>1153</td>
					<td>ZDesign Studio</td>
				    <td>15/01/2017</td>
				    <td>15/01/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=1153" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="1153" data-email="zdesignstudio@outlook.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/1153.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="1153" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>1154</td>
					<td>asd</td>
				    <td>16/01/2017</td>
				    <td>16/06/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=1154" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="1154" data-email="asd.de" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/1154.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="1154" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>1155</td>
					<td>laurent</td>
				    <td>16/01/2017</td>
				    <td>17/01/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=1155" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="1155" data-email="laurent@laurent.tg" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/1155.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="1155" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>1156</td>
					<td>Juan Campos</td>
				    <td>18/01/2017</td>
				    <td>18/01/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=1156" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="1156" data-email="in" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/1156.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="1156" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>1158</td>
					<td>Lingutla Radhika</td>
				    <td>17/01/2017</td>
				    <td>27/01/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=1158" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="1158" data-email="radhimohan30@yahoo.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/1158.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="1158" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>1159</td>
					<td>fdsaf</td>
				    <td>13/01/2017</td>
				    <td>24/01/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=1159" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="1159" data-email="dasfadsf" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/1159.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="1159" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>1160</td>
					<td>ahsan</td>
				    <td>20/01/2017</td>
				    <td>24/01/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=1160" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="1160" data-email="ahsankk126@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/1160.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="1160" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>1161</td>
					<td>a</td>
				    <td>18/01/2017</td>
				    <td>19/01/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=1161" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="1161" data-email="sathya27593@gmail.com" data-invoice-type="invoice" data-custom-email="sathya2793@gmail.com" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/1161.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="1161" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>1162</td>
					<td>Ahsan</td>
				    <td>18/01/2017</td>
				    <td>18/01/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=1162" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="1162" data-email="ahsankk126@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/1162.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="1162" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>1163</td>
					<td>Ahsan</td>
				    <td>19/01/2017</td>
				    <td>19/01/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=1163" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="1163" data-email="ahsankk126@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/1163.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="1163" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>1165</td>
					<td>laurent</td>
				    <td>17/01/2017</td>
				    <td>19/01/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=1165" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="1165" data-email="laurent@laurent.tg" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/1165.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="1165" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>1166</td>
					<td>Suwaji</td>
				    <td>19/01/2017</td>
				    <td>19/01/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=1166" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="1166" data-email="suwaji@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/1166.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="1166" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>1167</td>
					<td>MUQEEM</td>
				    <td>20/01/2017</td>
				    <td>20/01/2017</td>
				    <td>receipt</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=1167" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="1167" data-email="muqeemqasim@yhaoo.com" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/1167.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="1167" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>1168</td>
					<td>CHUA KIAN JIE</td>
				    <td>11/01/2017</td>
				    <td>02/01/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=1168" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="1168" data-email="r_asiel@hotmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/1168.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="1168" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11695</td>
					<td>Sasmita Patra</td>
				    <td>19/01/2017</td>
				    <td>20/01/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11695" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11695" data-email="seoczar@seoczar.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11695.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11695" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11696</td>
					<td>Ahsan</td>
				    <td>30/01/2017</td>
				    <td>23/01/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11696" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11696" data-email="ahsankk126@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11696.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11696" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11697</td>
					<td>Nimesh Parekh</td>
				    <td>19/01/2017</td>
				    <td>20/01/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11697" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11697" data-email="nimesh@yopmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11697.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11697" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11698</td>
					<td>Mario</td>
				    <td>19/01/2017</td>
				    <td>19/01/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11698" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11698" data-email="mmoreno@a.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11698.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11698" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11699</td>
					<td>seys</td>
				    <td>19/01/2017</td>
				    <td>19/01/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11699" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11699" data-email="ysy@rtyr.it" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11699.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11699" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11700</td>
					<td>Ahsan</td>
				    <td>20/01/2017</td>
				    <td>31/01/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11700" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11700" data-email="ahsankk126@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11700.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11700" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11701</td>
					<td>Festim Bajgora</td>
				    <td>21/01/2017</td>
				    <td>21/01/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11701" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11701" data-email="festimbajgora@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11701.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11701" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11702</td>
					<td>asdf</td>
				    <td>21/01/2017</td>
				    <td>21/01/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11702" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11702" data-email="test@test.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11702.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11702" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11703</td>
					<td>rakshi</td>
				    <td>21/01/2017</td>
				    <td>24/01/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11703" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11703" data-email="behrouzpc@yahoo.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11703.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11703" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11704</td>
					<td>Krishan</td>
				    <td>09/01/2017</td>
				    <td>17/01/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=11704" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11704" data-email="ohkrish@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11704.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11704" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11705</td>
					<td>Melinda</td>
				    <td>21/01/2017</td>
				    <td>21/01/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11705" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11705" data-email="mell@yahu.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11705.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11705" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11706</td>
					<td>Krishan</td>
				    <td>22/01/2017</td>
				    <td>24/01/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11706" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11706" data-email="ohkrish@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11706.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11706" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11707</td>
					<td>MHD ARFAN</td>
				    <td>22/01/2017</td>
				    <td>22/01/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11707" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11707" data-email="flwebsol@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11707.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11707" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11708</td>
					<td>x</td>
				    <td>04/01/2017</td>
				    <td>02/01/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11708" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11708" data-email="x@x.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11708.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11708" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11709</td>
					<td>Ahsan</td>
				    <td>23/01/2017</td>
				    <td>23/01/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11709" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11709" data-email="ahsankk126@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11709.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11709" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11710</td>
					<td>Ahsan</td>
				    <td>23/01/2017</td>
				    <td>23/01/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11710" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11710" data-email="ahsankk126@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11710.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11710" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11711</td>
					<td>laurent</td>
				    <td>23/01/2017</td>
				    <td>24/01/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11711" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11711" data-email="laurent@laurent.tg" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11711.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11711" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11712</td>
					<td>Krishan</td>
				    <td>23/01/2017</td>
				    <td>24/01/2017</td>
				    <td>receipt</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=11712" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11712" data-email="ohkrish@gmail.com" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11712.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11712" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11713</td>
					<td>Ahsan</td>
				    <td>23/01/2017</td>
				    <td>23/01/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11713" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11713" data-email="ahsankk126@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11713.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11713" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11714</td>
					<td>Ahsan</td>
				    <td>23/01/2017</td>
				    <td>23/01/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11714" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11714" data-email="ahsankk126@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11714.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11714" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11715</td>
					<td>محمد حسن</td>
				    <td>24/01/2017</td>
				    <td>24/01/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11715" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11715" data-email="mw3sm@hotmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11715.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11715" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11715</td>
					<td>محمد حسن</td>
				    <td>24/01/2017</td>
				    <td>24/01/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11715" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11715" data-email="mw3sm@hotmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11715.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11715" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11715</td>
					<td>محمد حسن</td>
				    <td>24/01/2017</td>
				    <td>24/01/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11715" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11715" data-email="mw3sm@hotmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11715.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11715" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11715</td>
					<td>محمد حسن</td>
				    <td>24/01/2017</td>
				    <td>24/01/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11715" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11715" data-email="mw3sm@hotmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11715.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11715" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11716</td>
					<td>Ahsan</td>
				    <td>24/01/2017</td>
				    <td>24/01/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11716" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11716" data-email="ahsankk126@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11716.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11716" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11717</td>
					<td>laurent</td>
				    <td>17/01/2017</td>
				    <td>25/01/2017</td>
				    <td>receipt</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11717" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11717" data-email="laurent@laurent.tg" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11717.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11717" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11718</td>
					<td>Juan Campos</td>
				    <td>24/01/2017</td>
				    <td>24/01/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11718" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11718" data-email="in" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11718.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11718" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11719</td>
					<td>ee</td>
				    <td>24/01/2017</td>
				    <td>27/01/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11719" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11719" data-email="ee@ee.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11719.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11719" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11720</td>
					<td>jkhgjk</td>
				    <td>17/01/2017</td>
				    <td>08/01/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11720" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11720" data-email="demo@site.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11720.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11720" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11721</td>
					<td>Ahsan</td>
				    <td>24/01/2017</td>
				    <td>24/01/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11721" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11721" data-email="ahsankk126@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11721.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11721" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11723</td>
					<td>kj</td>
				    <td>16/01/2017</td>
				    <td>26/01/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11723" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11723" data-email="jhkj@jh.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11723.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11723" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11724</td>
					<td>Ahsan</td>
				    <td>25/01/2017</td>
				    <td>25/01/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11724" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11724" data-email="ahsankk126@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11724.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11724" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11725</td>
					<td>TEST CUSTOMER</td>
				    <td>25/01/2017</td>
				    <td>25/01/2017</td>
				    <td>receipt</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=11725" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11725" data-email="test@gmail.com" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11725.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11725" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11726</td>
					<td>ss</td>
				    <td>26/01/2017</td>
				    <td>26/01/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11726" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11726" data-email="lijockonline@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11726.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11726" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11727</td>
					<td>Lingutla Radhika</td>
				    <td>26/01/2017</td>
				    <td>25/02/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=11727" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11727" data-email="radhimohan30@yahoo.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11727.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11727" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11728</td>
					<td>Lingutla Radhika</td>
				    <td>26/01/2017</td>
				    <td>26/01/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11728" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11728" data-email="radhimohan30@yahoo.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11728.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11728" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11729</td>
					<td>Krishan</td>
				    <td>26/01/2017</td>
				    <td>12/01/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11729" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11729" data-email="ohkrish@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11729.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11729" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11730</td>
					<td>Ahsan</td>
				    <td>27/01/2017</td>
				    <td>31/01/2017</td>
				    <td>quote</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11730" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11730" data-email="ahsankk126@gmail.com" data-invoice-type="quote" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11730.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11730" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11731</td>
					<td>Brian</td>
				    <td>27/01/2017</td>
				    <td>27/01/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11731" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11731" data-email="briansaban.boca@gmail.com" data-invoice-type="invoice" data-custom-email="Servicio aereo" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11731.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11731" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11732</td>
					<td>Mohamed</td>
				    <td>28/01/2017</td>
				    <td>28/01/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11732" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11732" data-email="maa@nozomit.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11732.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11732" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11733</td>
					<td>Ahsan</td>
				    <td>29/01/2017</td>
				    <td>30/01/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11733" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11733" data-email="ahsankk126@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11733.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11733" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11734</td>
					<td>Ahsan</td>
				    <td>29/01/2017</td>
				    <td>29/01/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11734" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11734" data-email="ahsankk126@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11734.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11734" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11735</td>
					<td>asd</td>
				    <td>29/01/2017</td>
				    <td>31/01/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11735" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11735" data-email="asd@ad.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11735.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11735" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11736</td>
					<td>ffefe</td>
				    <td>03/01/2017</td>
				    <td>31/01/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11736" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11736" data-email="fdfq" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11736.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11736" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11737</td>
					<td>Ahsan</td>
				    <td>30/01/2017</td>
				    <td>04/02/2017</td>
				    <td>quote</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11737" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11737" data-email="ahsankk126@gmail.com" data-invoice-type="quote" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11737.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11737" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11738</td>
					<td>Ahsan</td>
				    <td>30/01/2017</td>
				    <td>30/01/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11738" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11738" data-email="ahsankk126@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11738.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11738" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11739</td>
					<td>Juan Campos</td>
				    <td>30/01/2017</td>
				    <td>30/01/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=11739" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11739" data-email="in" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11739.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11739" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11740</td>
					<td>fdsf</td>
				    <td>31/01/2017</td>
				    <td>04/02/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11740" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11740" data-email="fsdf@fdsf.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11740.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11740" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11741</td>
					<td>raza</td>
				    <td>08/02/2017</td>
				    <td>24/02/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11741" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11741" data-email="abc@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11741.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11741" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11742</td>
					<td>aaa</td>
				    <td>07/02/2017</td>
				    <td>06/02/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11742" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11742" data-email="aaa@aaa.t" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11742.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11742" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11743</td>
					<td>Vinay K.S</td>
				    <td>01/02/2017</td>
				    <td>01/02/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=11743" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11743" data-email="vinaysgv2008@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11743.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11743" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11743</td>
					<td>Vinay K.S</td>
				    <td>01/02/2017</td>
				    <td>01/02/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=11743" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11743" data-email="vinaysgv2008@gmail.com" data-invoice-type="invoice" data-custom-email="vinay@gmail.cm" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11743.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11743" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11743</td>
					<td>Vinay K.S</td>
				    <td>01/02/2017</td>
				    <td>01/02/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=11743" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11743" data-email="vinaysgv2008@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11743.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11743" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11743</td>
					<td>Vinay K.S</td>
				    <td>01/02/2017</td>
				    <td>01/02/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=11743" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11743" data-email="vinaysgv2008@gmail.com" data-invoice-type="invoice" data-custom-email="vinay@gmail.cm" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11743.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11743" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11744</td>
					<td>Faisal</td>
				    <td>01/02/2017</td>
				    <td>01/02/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11744" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11744" data-email="gghd@hfhgf.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11744.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11744" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11745</td>
					<td>DGD</td>
				    <td>01/02/2017</td>
				    <td>03/02/2017</td>
				    <td>receipt</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=11745" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11745" data-email="sw@sd.df" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11745.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11745" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11746</td>
					<td>Ahsan</td>
				    <td>01/02/2017</td>
				    <td>01/02/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11746" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11746" data-email="ahsankk126@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11746.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11746" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11747</td>
					<td>laurent</td>
				    <td>02/02/2017</td>
				    <td>08/02/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11747" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11747" data-email="laurent@laurent.tg" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11747.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11747" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11748</td>
					<td>ео</td>
				    <td>01/02/2017</td>
				    <td>03/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11748" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11748" data-email="кон" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11748.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11748" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11749</td>
					<td>Masud</td>
				    <td>02/02/2017</td>
				    <td>09/02/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11749" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11749" data-email="clessx@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11749.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11749" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11750</td>
					<td>imeto</td>
				    <td>14/02/2017</td>
				    <td>22/02/2017</td>
				    <td>quote</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11750" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11750" data-email="netoviameil" data-invoice-type="quote" data-custom-email="dasdsadvasvasdsadvasdvsadasdafsasdasfasdfasdfa" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11750.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11750" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11751</td>
					<td>Ahsan</td>
				    <td>03/02/2017</td>
				    <td>23/02/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11751" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11751" data-email="ahsankk126@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11751.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11751" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11752</td>
					<td>manjesh</td>
				    <td>03/02/2017</td>
				    <td>07/02/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11752" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11752" data-email="manjesh@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11752.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11752" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11753</td>
					<td>SHilpa</td>
				    <td>03/02/2017</td>
				    <td>03/02/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11753" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11753" data-email="shilpa@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11753.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11753" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11754</td>
					<td>test</td>
				    <td>03/02/2017</td>
				    <td>03/02/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11754" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11754" data-email="test@test.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11754.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11754" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11755</td>
					<td>jitendra</td>
				    <td>04/02/2017</td>
				    <td>28/02/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11755" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11755" data-email="jkchen@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11755.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11755" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11756</td>
					<td>Sanjib Sen</td>
				    <td>01/02/2017</td>
				    <td>15/02/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11756" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11756" data-email="mail_mayuras@rediffmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11756.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11756" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11757</td>
					<td>sdf</td>
				    <td>04/02/2017</td>
				    <td>05/02/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11757" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11757" data-email="aea@gmai.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11757.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11757" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11758</td>
					<td>KOnina</td>
				    <td>21/09/2000</td>
				    <td>21/10/2000</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11758" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11758" data-email="Konian" data-invoice-type="invoice" data-custom-email="Thanks for your things!" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11758.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11758" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11759</td>
					<td>imeto</td>
				    <td>05/02/2017</td>
				    <td>08/02/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=11759" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11759" data-email="netoviameil" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11759.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11759" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11760</td>
					<td>dzfbzdf</td>
				    <td>01/02/2017</td>
				    <td>08/02/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11760" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11760" data-email="fbzd@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11760.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11760" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11761</td>
					<td>ทดสอบ</td>
				    <td>06/02/2017</td>
				    <td>06/02/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11761" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11761" data-email="-" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11761.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11761" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11762</td>
					<td>CHANDER</td>
				    <td>07/02/2017</td>
				    <td>07/02/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=11762" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11762" data-email="savethisid.ashish@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11762.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11762" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11763</td>
					<td>imeto</td>
				    <td>06/02/2017</td>
				    <td>06/02/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=11763" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11763" data-email="netoviameil" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11763.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11763" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11764</td>
					<td>qweqwe</td>
				    <td>15/02/2017</td>
				    <td>15/02/2017</td>
				    <td>receipt</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=11764" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11764" data-email="qwqwqweq" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11764.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11764" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11765</td>
					<td>addsdads</td>
				    <td>07/02/2017</td>
				    <td>07/02/2017</td>
				    <td>receipt</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=11765" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11765" data-email="ah@gmail.com" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11765.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11765" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11766</td>
					<td>Ahsan</td>
				    <td>08/02/2017</td>
				    <td>08/02/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11766" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11766" data-email="ahsankk126@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11766.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11766" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11767</td>
					<td>imeto</td>
				    <td>07/02/2017</td>
				    <td>14/02/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11767" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11767" data-email="netoviameil" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11767.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11767" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11768</td>
					<td>Ahsan</td>
				    <td>08/02/2017</td>
				    <td>08/02/2017</td>
				    <td>receipt</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11768" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11768" data-email="ahsankk126@gmail.com" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11768.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11768" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11769</td>
					<td>a</td>
				    <td>02/02/2017</td>
				    <td>31/01/2017</td>
				    <td>quote</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11769" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11769" data-email="a@gmail.com" data-invoice-type="quote" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11769.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11769" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11770</td>
					<td>new test</td>
				    <td>09/02/2017</td>
				    <td>16/02/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11770" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11770" data-email="n@mail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11770.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11770" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11771</td>
					<td>mehdi</td>
				    <td>09/02/2017</td>
				    <td>13/02/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11771" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11771" data-email="san" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11771.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11771" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11772</td>
					<td>mehdi</td>
				    <td>01/02/2017</td>
				    <td>01/02/2017</td>
				    <td>receipt</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11772" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11772" data-email="san" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11772.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11772" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11773</td>
					<td>manish dixit</td>
				    <td>09/02/2017</td>
				    <td>21/02/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=11773" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11773" data-email="manish.27389@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11773.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11773" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11774</td>
					<td>SUBA</td>
				    <td>09/02/2017</td>
				    <td>09/02/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11774" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11774" data-email="SUBA" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11774.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11774" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11775</td>
					<td>assad</td>
				    <td>09/02/2017</td>
				    <td>09/02/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11775" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11775" data-email="ahmed@as.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11775.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11775" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11776</td>
					<td>mehdi</td>
				    <td>17/02/2017</td>
				    <td>16/03/2017</td>
				    <td>receipt</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11776" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11776" data-email="san" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11776.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11776" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11777</td>
					<td>Monorom Ali Shaikh</td>
				    <td>16/02/2017</td>
				    <td>17/02/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11777" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11777" data-email="james@rebootdigital.co.uk" data-invoice-type="invoice" data-custom-email="test" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11777.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11777" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11778</td>
					<td>SERVELEC</td>
				    <td>17/02/2017</td>
				    <td>16/02/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11778" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11778" data-email="sad@sadsad.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11778.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11778" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11779</td>
					<td>Melinda</td>
				    <td>16/02/2017</td>
				    <td>16/02/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11779" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11779" data-email="mell@yahu.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11779.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11779" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11780</td>
					<td>sasa</td>
				    <td>11/02/2017</td>
				    <td>06/02/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11780" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11780" data-email="sas" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11780.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11780" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11781</td>
					<td>dip</td>
				    <td>18/02/2017</td>
				    <td>19/02/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=11781" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11781" data-email="d@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11781.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11781" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11782</td>
					<td>mehdi</td>
				    <td>17/02/2017</td>
				    <td>17/02/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=11782" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11782" data-email="san.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11782.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11782" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11783</td>
					<td>Melinda</td>
				    <td>25/02/2017</td>
				    <td>23/02/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11783" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11783" data-email="mell@yahu.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11783.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11783" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11784</td>
					<td>mehdi</td>
				    <td>07/02/2017</td>
				    <td>22/02/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11784" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11784" data-email="san.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11784.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11784" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11785</td>
					<td>nicolas</td>
				    <td>01/02/2017</td>
				    <td>21/02/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11785" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11785" data-email="invencoes.net" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11785.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11785" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11786</td>
					<td>Purushothaman</td>
				    <td>20/02/2017</td>
				    <td>25/02/2017</td>
				    <td>quote</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11786" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11786" data-email="eeepurushoth@gmail.com" data-invoice-type="quote" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11786.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11786" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11787</td>
					<td>Deepak Singh</td>
				    <td>21/02/2017</td>
				    <td>21/02/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11787" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11787" data-email="jxv93448@psoxs.com" data-invoice-type="invoice" data-custom-email="jxv93448@psoxs.com" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11787.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11787" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11788</td>
					<td>Testos</td>
				    <td>01/02/2017</td>
				    <td>01/02/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11788" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11788" data-email="asas@bk.ru" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11788.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11788" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11789</td>
					<td>aaa</td>
				    <td>21/02/2017</td>
				    <td>22/02/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11789" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11789" data-email="a@gmail.com" data-invoice-type="invoice" data-custom-email="this is demo" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11789.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11789" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11790</td>
					<td>yeison cruz</td>
				    <td>21/02/2017</td>
				    <td>21/02/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11790" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11790" data-email="yeisoncruz16@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11790.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11790" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11791</td>
					<td>javad</td>
				    <td>08/02/2017</td>
				    <td>05/02/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11791" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11791" data-email="info@mes" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11791.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11791" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11792</td>
					<td>Ryan</td>
				    <td>23/02/2017</td>
				    <td>23/02/2017</td>
				    <td>quote</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11792" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11792" data-email="flex@flex.com" data-invoice-type="quote" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11792.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11792" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11793</td>
					<td>kkkdfksaf`</td>
				    <td>24/02/2017</td>
				    <td>24/02/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11793" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11793" data-email="rath@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11793.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11793" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11794</td>
					<td>mehdi</td>
				    <td>30/01/2017</td>
				    <td>07/02/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11794" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11794" data-email="san.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11794.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11794" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11795</td>
					<td>as</td>
				    <td>25/02/2017</td>
				    <td>25/02/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11795" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11795" data-email="asas@bv.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11795.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11795" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11796</td>
					<td>edson fufu</td>
				    <td>26/02/2017</td>
				    <td>07/02/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11796" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11796" data-email="eddy20062020@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11796.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11796" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11797</td>
					<td>demo</td>
				    <td>27/02/2017</td>
				    <td>28/02/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=11797" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11797" data-email="demo@gmail.com" data-invoice-type="invoice" data-custom-email="drg dgh tr" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11797.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11797" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11797</td>
					<td>demo</td>
				    <td>01/02/2017</td>
				    <td>27/02/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11797" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11797" data-email="demo@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11797.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11797" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11797</td>
					<td>Sanjeev Kumar</td>
				    <td>27/02/2017</td>
				    <td>28/02/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=11797" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11797" data-email="thesanjeev1@gmail.com" data-invoice-type="invoice" data-custom-email="drg dgh tr" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11797.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11797" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11797</td>
					<td>Sanjeev Kumar</td>
				    <td>01/02/2017</td>
				    <td>27/02/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11797" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11797" data-email="thesanjeev1@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11797.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11797" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11798</td>
					<td>Sanjeev Kumar</td>
				    <td>01/02/2017</td>
				    <td>07/02/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11798" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11798" data-email="thesanjeev1@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11798.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11798" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11799</td>
					<td>Mahmud Imrna</td>
				    <td>14/02/2017</td>
				    <td>16/02/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11799" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11799" data-email="imran@imran.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11799.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11799" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11800</td>
					<td>me</td>
				    <td>28/02/2017</td>
				    <td>04/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11800" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11800" data-email="me@i.de" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11800.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11800" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11801</td>
					<td>mnx</td>
				    <td>01/03/2017</td>
				    <td>04/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11801" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11801" data-email="mnx@i.de" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11801.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11801" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11802</td>
					<td>efw</td>
				    <td>28/02/2017</td>
				    <td>28/02/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=11802" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11802" data-email="jxv93448@psoxs.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11802.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11802" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11803</td>
					<td>admin</td>
				    <td>02/03/2017</td>
				    <td>22/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11803" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11803" data-email="admin@admin.vc" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11803.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11803" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11804</td>
					<td>abdul mirzani</td>
				    <td>02/03/2017</td>
				    <td>15/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11804" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11804" data-email="abdul.g@duminex.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11804.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11804" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11805</td>
					<td>1</td>
				    <td>01/03/2017</td>
				    <td>08/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11805" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11805" data-email="i@.ide" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11805.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11805" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11806</td>
					<td>efw</td>
				    <td>01/03/2017</td>
				    <td>01/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11806" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11806" data-email="jxv93448@psoxs.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11806.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11806" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11807</td>
					<td>mehdi</td>
				    <td>01/03/2017</td>
				    <td>16/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11807" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11807" data-email="san.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11807.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11807" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11808</td>
					<td>mehdi</td>
				    <td>02/03/2017</td>
				    <td>09/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11808" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11808" data-email="san.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11808.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11808" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11809</td>
					<td>efw</td>
				    <td>08/03/2017</td>
				    <td>09/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11809" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11809" data-email="jxv93448@psoxs.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11809.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11809" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11810</td>
					<td>Melinda</td>
				    <td>03/03/2017</td>
				    <td>07/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11810" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11810" data-email="mell@yahu.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11810.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11810" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11811</td>
					<td>Mohamed</td>
				    <td>03/03/2017</td>
				    <td>08/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11811" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11811" data-email="maa@nozomit.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11811.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11811" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11812</td>
					<td>cxv</td>
				    <td>03/03/2017</td>
				    <td>03/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11812" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11812" data-email="d@gg.in" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11812.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11812" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11813</td>
					<td>Melinda</td>
				    <td>03/03/2017</td>
				    <td>08/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11813" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11813" data-email="mell@yahu.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11813.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11813" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11814</td>
					<td>Kalyan yadav</td>
				    <td>03/03/2017</td>
				    <td>04/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11814" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11814" data-email="dkalyanyadav@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11814.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11814" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11815</td>
					<td>Melinda</td>
				    <td>03/03/2017</td>
				    <td>03/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11815" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11815" data-email="mell@yahu.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11815.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11815" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11816</td>
					<td>efw</td>
				    <td>01/03/2017</td>
				    <td>01/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11816" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11816" data-email="jxv93448@psoxs.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11816.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11816" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11817</td>
					<td></td>
				    <td></td>
				    <td></td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11817" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11817" data-email="" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11817.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11817" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11818</td>
					<td>efw</td>
				    <td>06/03/2017</td>
				    <td>15/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11818" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11818" data-email="jxv93448@psoxs.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11818.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11818" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11819</td>
					<td>MHD ARFAN</td>
				    <td>04/03/2017</td>
				    <td>05/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11819" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11819" data-email="flwebsol@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11819.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11819" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11820</td>
					<td>Monorom Ali Shaikh</td>
				    <td>04/03/2017</td>
				    <td>06/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11820" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11820" data-email="monorom@yahoo.co.in" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11820.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11820" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11821</td>
					<td>mehdi</td>
				    <td>04/03/2017</td>
				    <td>31/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11821" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11821" data-email="san.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11821.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11821" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11822</td>
					<td>efw</td>
				    <td>05/03/2017</td>
				    <td>09/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11822" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11822" data-email="jxv93448@psoxs.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11822.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11822" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11823</td>
					<td>MHD ARFAN</td>
				    <td>08/03/2017</td>
				    <td>22/03/2017</td>
				    <td>quote</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11823" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11823" data-email="flwebsol@gmail.com" data-invoice-type="quote" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11823.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11823" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11824</td>
					<td>sdaasasd</td>
				    <td>08/03/2017</td>
				    <td>15/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11824" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11824" data-email="sdadsasad" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11824.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11824" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11825</td>
					<td>murat</td>
				    <td>06/03/2017</td>
				    <td>13/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11825" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11825" data-email="mtezcan2010@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11825.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11825" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11826</td>
					<td>Shanaka Sampath</td>
				    <td>06/03/2017</td>
				    <td>08/03/2017</td>
				    <td>quote</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11826" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11826" data-email="Shanakasmedia@gmail.com" data-invoice-type="quote" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11826.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11826" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11827</td>
					<td>efw</td>
				    <td>01/03/2017</td>
				    <td>11/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11827" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11827" data-email="jxv93448@psoxs.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11827.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11827" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11828</td>
					<td>Mutua Test</td>
				    <td>06/03/2017</td>
				    <td>06/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11828" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11828" data-email="tellam.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11828.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11828" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11828</td>
					<td>Mutua Test</td>
				    <td>06/03/2017</td>
				    <td>06/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11828" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11828" data-email="tellam.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11828.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11828" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11828</td>
					<td>sadf</td>
				    <td>06/03/2017</td>
				    <td>06/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11828" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11828" data-email="adfdsf" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11828.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11828" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11828</td>
					<td>sadf</td>
				    <td>06/03/2017</td>
				    <td>06/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11828" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11828" data-email="adfdsf" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11828.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11828" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11829</td>
					<td>efw</td>
				    <td>07/03/2017</td>
				    <td>14/03/2017</td>
				    <td>receipt</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=11829" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11829" data-email="jxv93448@psoxs.com" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11829.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11829" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11830</td>
					<td>Melinda</td>
				    <td>08/03/2017</td>
				    <td>15/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11830" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11830" data-email="mell@yahu.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11830.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11830" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11831</td>
					<td>rAM</td>
				    <td>08/03/2017</td>
				    <td>08/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11831" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11831" data-email="ram@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11831.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11831" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11832</td>
					<td>efw</td>
				    <td>08/03/2017</td>
				    <td>08/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11832" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11832" data-email="jxv93448@psoxs.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11832.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11832" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11833</td>
					<td>فهد العلي</td>
				    <td>08/03/2017</td>
				    <td>08/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=11833" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11833" data-email="lsls@lsls.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11833.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11833" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11834</td>
					<td>mehdi</td>
				    <td>09/03/2017</td>
				    <td>18/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=11834" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11834" data-email="san.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11834.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11834" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11834</td>
					<td>mehdi</td>
				    <td>09/03/2017</td>
				    <td>18/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=11834" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11834" data-email="san.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11834.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11834" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11834</td>
					<td>mehdi</td>
				    <td>09/03/2017</td>
				    <td>18/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=11834" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11834" data-email="san.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11834.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11834" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11834</td>
					<td>mehdi</td>
				    <td>09/03/2017</td>
				    <td>18/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=11834" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11834" data-email="san.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11834.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11834" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11834</td>
					<td>mehdi</td>
				    <td>09/03/2017</td>
				    <td>18/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=11834" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11834" data-email="san.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11834.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11834" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11834</td>
					<td>mehdi</td>
				    <td>09/03/2017</td>
				    <td>18/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=11834" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11834" data-email="san.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11834.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11834" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11834</td>
					<td>فهد العلي</td>
				    <td>09/03/2017</td>
				    <td>18/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=11834" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11834" data-email="dksa@hotmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11834.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11834" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11834</td>
					<td>فهد العلي</td>
				    <td>09/03/2017</td>
				    <td>18/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=11834" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11834" data-email="dksa@hotmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11834.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11834" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11834</td>
					<td>فهد العلي</td>
				    <td>09/03/2017</td>
				    <td>18/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=11834" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11834" data-email="dksa@hotmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11834.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11834" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11835</td>
					<td>efw</td>
				    <td>15/03/2017</td>
				    <td>16/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11835" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11835" data-email="jxv93448@psoxs.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11835.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11835" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11836</td>
					<td>javier</td>
				    <td>08/03/2017</td>
				    <td>08/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=11836" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11836" data-email="javeymxl@gmaic.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11836.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11836" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11837</td>
					<td>efw</td>
				    <td>09/03/2017</td>
				    <td>27/02/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11837" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11837" data-email="jxv93448@psoxs.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11837.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11837" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11838</td>
					<td>john</td>
				    <td>09/03/2017</td>
				    <td>10/03/2017</td>
				    <td>quote</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11838" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11838" data-email="john@gmail.com" data-invoice-type="quote" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11838.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11838" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11839</td>
					<td>Melinda</td>
				    <td>10/03/2017</td>
				    <td>17/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=11839" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11839" data-email="mell@yahu.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11839.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11839" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11840</td>
					<td>kamlesh</td>
				    <td>11/03/2017</td>
				    <td></td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11840" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11840" data-email="rajraj.kamlesh@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11840.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11840" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11841</td>
					<td>dsd</td>
				    <td>08/03/2017</td>
				    <td>23/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11841" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11841" data-email="velez@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11841.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11841" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11842</td>
					<td>Dave Batist</td>
				    <td>15/03/2017</td>
				    <td>07/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11842" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11842" data-email="shsjaja@shshs.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11842.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11842" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11843</td>
					<td>efw</td>
				    <td>21/03/2017</td>
				    <td>16/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11843" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11843" data-email="jxv93448@psoxs.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11843.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11843" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11845</td>
					<td>Melinda</td>
				    <td>28/02/2017</td>
				    <td>11/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=11845" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11845" data-email="mell@yahu.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11845.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11845" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11846</td>
					<td>efw</td>
				    <td>13/03/2017</td>
				    <td>13/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11846" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11846" data-email="jxv93448@psoxs.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11846.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11846" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11847</td>
					<td>khan</td>
				    <td>14/03/2017</td>
				    <td>16/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11847" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11847" data-email="khan@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11847.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11847" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11848</td>
					<td>telkom</td>
				    <td>14/03/2017</td>
				    <td>14/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11848" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11848" data-email="telkom@gamail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11848.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11848" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11849</td>
					<td>Melinda</td>
				    <td>14/03/2017</td>
				    <td>16/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11849" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11849" data-email="mell@yahu.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11849.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11849" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11850</td>
					<td>t naags</td>
				    <td>14/03/2017</td>
				    <td>16/03/2017</td>
				    <td>receipt</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=11850" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11850" data-email="naagswebdesigner@gmail.com" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11850.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11850" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11851</td>
					<td>asd</td>
				    <td>27/02/2017</td>
				    <td>02/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11851" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11851" data-email="das" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11851.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11851" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11852</td>
					<td>Melinda</td>
				    <td>14/03/2017</td>
				    <td>14/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11852" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11852" data-email="mell@yahu.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11852.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11852" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11853</td>
					<td>test customer 2</td>
				    <td>14/03/2017</td>
				    <td>14/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11853" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11853" data-email="e" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11853.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11853" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11854</td>
					<td>efw</td>
				    <td>26/02/2017</td>
				    <td>01/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11854" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11854" data-email="jxv93448@psoxs.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11854.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11854" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11855</td>
					<td>mehdi</td>
				    <td>15/03/2017</td>
				    <td>16/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11855" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11855" data-email="san.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11855.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11855" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11856</td>
					<td>husasain</td>
				    <td>16/03/2017</td>
				    <td>16/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11856" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11856" data-email="msajid@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11856.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11856" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11857</td>
					<td>Hanna</td>
				    <td>16/03/2017</td>
				    <td>22/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11857" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11857" data-email="hanah@alasalameqp.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11857.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11857" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11858</td>
					<td>Hanna</td>
				    <td>16/03/2017</td>
				    <td>31/03/2017</td>
				    <td>receipt</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11858" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11858" data-email="hanah@alasalameqp.com" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11858.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11858" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11859</td>
					<td>vv</td>
				    <td>02/03/2017</td>
				    <td>27/02/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11859" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11859" data-email="@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11859.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11859" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11860</td>
					<td>Mohamed</td>
				    <td>17/03/2017</td>
				    <td>24/03/2017</td>
				    <td>receipt</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11860" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11860" data-email="maa@nozomit.com" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11860.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11860" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11861</td>
					<td>Yna</td>
				    <td>17/03/2017</td>
				    <td>24/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11861" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11861" data-email="Yapineda96.yap@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11861.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11861" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11862</td>
					<td>Hanna</td>
				    <td>17/03/2017</td>
				    <td>31/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11862" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11862" data-email="hanah@alasalameqp.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11862.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11862" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11863</td>
					<td>Solomon</td>
				    <td>17/03/2017</td>
				    <td>18/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11863" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11863" data-email="solomon.webdads2u.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11863.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11863" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11864</td>
					<td>Hanna</td>
				    <td>18/03/2017</td>
				    <td>16/03/2017</td>
				    <td>receipt</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11864" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11864" data-email="hanah@alasalameqp.com" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11864.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11864" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11865</td>
					<td>xc</td>
				    <td>19/03/2017</td>
				    <td>19/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11865" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11865" data-email="anug818@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11865.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11865" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11866</td>
					<td>smartphoneassist</td>
				    <td>19/03/2017</td>
				    <td>19/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=11866" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11866" data-email="info@ifixstore.it" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11866.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11866" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11867</td>
					<td>anu</td>
				    <td>20/03/2017</td>
				    <td>20/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=11867" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11867" data-email="a@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11867.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11867" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11868</td>
					<td>mee</td>
				    <td>20/03/2017</td>
				    <td>20/03/0017</td>
				    <td>receipt</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=11868" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11868" data-email="macnussolutions@gmail.com" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11868.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11868" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11869</td>
					<td>Melinda</td>
				    <td>20/03/2017</td>
				    <td>22/03/2017</td>
				    <td>receipt</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=11869" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11869" data-email="mell@yahu.com" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11869.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11869" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11870</td>
					<td>efw</td>
				    <td>21/03/2017</td>
				    <td>22/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11870" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11870" data-email="jxv93448@psoxs.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11870.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11870" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11871</td>
					<td>fdgdfgdf</td>
				    <td>20/03/2017</td>
				    <td>20/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11871" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11871" data-email="test@gmail.com" data-invoice-type="invoice" data-custom-email="hgfhgfh" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11871.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11871" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11872</td>
					<td>a</td>
				    <td>20/03/2017</td>
				    <td>21/03/2017</td>
				    <td>quote</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11872" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11872" data-email="a" data-invoice-type="quote" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11872.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11872" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11873</td>
					<td>Jeskap</td>
				    <td>01/03/2017</td>
				    <td>31/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11873" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11873" data-email="junior@sv2.com.br" data-invoice-type="invoice" data-custom-email="cobrança do pagamento do servidor" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11873.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11873" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11874</td>
					<td>name</td>
				    <td>21/03/2017</td>
				    <td>22/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11874" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11874" data-email="email@gmail.com" data-invoice-type="invoice" data-custom-email="nishant@carbontech.in" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11874.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11874" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11875</td>
					<td>pawan yadav</td>
				    <td>21/03/2017</td>
				    <td>21/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11875" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11875" data-email="pawan.sandiya@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11875.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11875" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11876</td>
					<td>Maxwell</td>
				    <td>08/03/2017</td>
				    <td>21/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11876" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11876" data-email="max@max.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11876.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11876" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11877</td>
					<td>pawan yadavqw</td>
				    <td>21/03/2017</td>
				    <td>21/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11877" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11877" data-email="pawan.sandiya@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11877.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11877" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11878</td>
					<td>Chottinakara Temple</td>
				    <td>22/03/2017</td>
				    <td>22/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11878" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11878" data-email="ct@temple.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11878.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11878" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11879</td>
					<td>Longjam</td>
				    <td>22/03/2017</td>
				    <td>23/03/2017</td>
				    <td>receipt</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11879" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11879" data-email="mjt_taurian@yahoo.com" data-invoice-type="receipt" data-custom-email="Thanks for buying" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11879.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11879" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11880</td>
					<td>John</td>
				    <td>23/03/2017</td>
				    <td>30/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11880" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11880" data-email="kusumatomy@gmail,com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11880.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11880" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11881</td>
					<td>ddsasdsd</td>
				    <td>23/03/2017</td>
				    <td>24/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11881" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11881" data-email="dfsdf@fdsfsf.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11881.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11881" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11882</td>
					<td>Chottinakara Temple</td>
				    <td>24/03/2017</td>
				    <td>24/05/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11882" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11882" data-email="ct@temple.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11882.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11882" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11883</td>
					<td>Jansher Tariq</td>
				    <td>24/03/2017</td>
				    <td>24/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11883" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11883" data-email="jansherk41@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11883.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11883" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11884</td>
					<td>mehdi</td>
				    <td>25/03/2017</td>
				    <td>25/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11884" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11884" data-email="san.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11884.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11884" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11885</td>
					<td>MHD ARFAN</td>
				    <td>25/03/2017</td>
				    <td>07/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11885" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11885" data-email="flwebsol@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11885.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11885" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11886</td>
					<td>efw</td>
				    <td>26/03/2017</td>
				    <td>23/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=11886" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11886" data-email="jxv93448@psoxs.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11886.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11886" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11887</td>
					<td>فهد مخن</td>
				    <td>26/03/2017</td>
				    <td>26/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11887" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11887" data-email="jsfs@kgd.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11887.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11887" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11887</td>
					<td>فهد مخن</td>
				    <td>26/03/2017</td>
				    <td>26/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11887" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11887" data-email="jsfs@kgd.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11887.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11887" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11887</td>
					<td>فهد مخن</td>
				    <td>26/03/2017</td>
				    <td>26/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11887" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11887" data-email="jsfs@kgd.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11887.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11887" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11887</td>
					<td>فهد مخن</td>
				    <td>26/03/2017</td>
				    <td>26/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11887" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11887" data-email="jsfs@kgd.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11887.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11887" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11887</td>
					<td>فهد مخن</td>
				    <td>26/03/2017</td>
				    <td>26/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11887" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11887" data-email="jsfs@kgd.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11887.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11887" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11887</td>
					<td>فهد مخن</td>
				    <td>26/03/2017</td>
				    <td>26/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11887" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11887" data-email="jsfs@kgd.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11887.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11887" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11887</td>
					<td>فهد مخن</td>
				    <td>26/03/2017</td>
				    <td>26/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11887" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11887" data-email="jsfs@kgd.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11887.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11887" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11887</td>
					<td>فهد مخن</td>
				    <td>26/03/2017</td>
				    <td>26/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11887" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11887" data-email="jsfs@kgd.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11887.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11887" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11887</td>
					<td>فهد مخن</td>
				    <td>26/03/2017</td>
				    <td>26/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11887" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11887" data-email="jsfs@kgd.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11887.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11887" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11888</td>
					<td>Monorom Ali Shaikh</td>
				    <td>28/03/2017</td>
				    <td>28/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11888" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11888" data-email="monorom@yahoo.co.in" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11888.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11888" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>11889</td>
					<td>vff</td>
				    <td>27/03/2017</td>
				    <td>27/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=11889" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="11889" data-email="v v" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/11889.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="11889" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>12</td>
					<td>abhinav</td>
				    <td>03/11/2017</td>
				    <td>10/11/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=12" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="12" data-email="gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/12.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="12" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>12</td>
					<td>abhinav</td>
				    <td>28/07/2017</td>
				    <td>27/07/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=12" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="12" data-email="gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/12.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="12" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>12</td>
					<td>abhinav</td>
				    <td>28/07/2017</td>
				    <td>27/07/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=12" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="12" data-email="gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/12.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="12" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>12</td>
					<td>abhinav</td>
				    <td>10/11/2017</td>
				    <td>10/11/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=12" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="12" data-email="gmail.com" data-invoice-type="invoice" data-custom-email="www.djs2@gmail.com" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/12.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="12" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>12</td>
					<td>Muhammad </td>
				    <td>03/11/2017</td>
				    <td>10/11/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=12" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="12" data-email="abdalli17b@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/12.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="12" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>12</td>
					<td>Muhammad </td>
				    <td>28/07/2017</td>
				    <td>27/07/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=12" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="12" data-email="abdalli17b@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/12.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="12" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>12</td>
					<td>Muhammad </td>
				    <td>28/07/2017</td>
				    <td>27/07/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=12" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="12" data-email="abdalli17b@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/12.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="12" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>12</td>
					<td>Muhammad </td>
				    <td>10/11/2017</td>
				    <td>10/11/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=12" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="12" data-email="abdalli17b@gmail.com" data-invoice-type="invoice" data-custom-email="www.djs2@gmail.com" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/12.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="12" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>12</td>
					<td>marcilio</td>
				    <td>03/11/2017</td>
				    <td>10/11/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=12" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="12" data-email="contato@grupozion.com.br" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/12.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="12" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>12</td>
					<td>marcilio</td>
				    <td>28/07/2017</td>
				    <td>27/07/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=12" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="12" data-email="contato@grupozion.com.br" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/12.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="12" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>12</td>
					<td>marcilio</td>
				    <td>28/07/2017</td>
				    <td>27/07/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=12" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="12" data-email="contato@grupozion.com.br" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/12.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="12" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>12</td>
					<td>marcilio</td>
				    <td>10/11/2017</td>
				    <td>10/11/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=12" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="12" data-email="contato@grupozion.com.br" data-invoice-type="invoice" data-custom-email="www.djs2@gmail.com" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/12.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="12" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>12</td>
					<td>paras</td>
				    <td>03/11/2017</td>
				    <td>10/11/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=12" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="12" data-email="parasdave93@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/12.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="12" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>12</td>
					<td>paras</td>
				    <td>28/07/2017</td>
				    <td>27/07/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=12" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="12" data-email="parasdave93@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/12.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="12" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>12</td>
					<td>paras</td>
				    <td>28/07/2017</td>
				    <td>27/07/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=12" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="12" data-email="parasdave93@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/12.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="12" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>12</td>
					<td>paras</td>
				    <td>10/11/2017</td>
				    <td>10/11/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=12" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="12" data-email="parasdave93@gmail.com" data-invoice-type="invoice" data-custom-email="www.djs2@gmail.com" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/12.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="12" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>12</td>
					<td>Chareis</td>
				    <td>03/11/2017</td>
				    <td>10/11/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=12" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="12" data-email="chareishoeffel@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/12.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="12" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>12</td>
					<td>Chareis</td>
				    <td>28/07/2017</td>
				    <td>27/07/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=12" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="12" data-email="chareishoeffel@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/12.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="12" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>12</td>
					<td>Chareis</td>
				    <td>28/07/2017</td>
				    <td>27/07/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=12" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="12" data-email="chareishoeffel@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/12.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="12" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>12</td>
					<td>Chareis</td>
				    <td>10/11/2017</td>
				    <td>10/11/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=12" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="12" data-email="chareishoeffel@gmail.com" data-invoice-type="invoice" data-custom-email="www.djs2@gmail.com" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/12.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="12" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>12</td>
					<td>Chareis</td>
				    <td>03/11/2017</td>
				    <td>10/11/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=12" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="12" data-email="chareishoeffel@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/12.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="12" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>12</td>
					<td>Chareis</td>
				    <td>28/07/2017</td>
				    <td>27/07/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=12" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="12" data-email="chareishoeffel@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/12.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="12" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>12</td>
					<td>Chareis</td>
				    <td>28/07/2017</td>
				    <td>27/07/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=12" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="12" data-email="chareishoeffel@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/12.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="12" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>12</td>
					<td>Chareis</td>
				    <td>10/11/2017</td>
				    <td>10/11/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=12" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="12" data-email="chareishoeffel@gmail.com" data-invoice-type="invoice" data-custom-email="www.djs2@gmail.com" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/12.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="12" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>12121212</td>
					<td>iggy</td>
				    <td>12/04/2018</td>
				    <td>12/04/2018</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=12121212" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="12121212" data-email="ade.arman@icloud.com" data-invoice-type="invoice" data-custom-email="ADE.ARMAN@ICLOUD.COM" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/12121212.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="12121212" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>1222</td>
					<td>ramesh nagar</td>
				    <td>02/10/2017</td>
				    <td>10/10/2017</td>
				    <td>quote</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=1222" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="1222" data-email="nagar@gmail.com" data-invoice-type="quote" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/1222.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="1222" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>1222</td>
					<td>ramesh nagar</td>
				    <td>02/10/2017</td>
				    <td>10/10/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=1222" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="1222" data-email="nagar@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/1222.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="1222" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>1222</td>
					<td>ramesh nagar</td>
				    <td>02/10/2017</td>
				    <td>10/10/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=1222" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="1222" data-email="nagar@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/1222.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="1222" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>1222</td>
					<td>ramesh nagar</td>
				    <td>02/10/2017</td>
				    <td>10/10/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=1222" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="1222" data-email="nagar@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/1222.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="1222" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>1222</td>
					<td>jaydeep</td>
				    <td>02/10/2017</td>
				    <td>10/10/2017</td>
				    <td>quote</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=1222" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="1222" data-email="dsa" data-invoice-type="quote" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/1222.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="1222" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>1222</td>
					<td>jaydeep</td>
				    <td>02/10/2017</td>
				    <td>10/10/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=1222" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="1222" data-email="dsa" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/1222.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="1222" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>1222</td>
					<td>jaydeep</td>
				    <td>02/10/2017</td>
				    <td>10/10/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=1222" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="1222" data-email="dsa" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/1222.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="1222" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>1222</td>
					<td>jaydeep</td>
				    <td>02/10/2017</td>
				    <td>10/10/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=1222" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="1222" data-email="dsa" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/1222.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="1222" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>1222</td>
					<td>jaydeep</td>
				    <td>02/10/2017</td>
				    <td>10/10/2017</td>
				    <td>quote</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=1222" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="1222" data-email="dsa" data-invoice-type="quote" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/1222.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="1222" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>1222</td>
					<td>jaydeep</td>
				    <td>02/10/2017</td>
				    <td>10/10/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=1222" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="1222" data-email="dsa" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/1222.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="1222" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>1222</td>
					<td>jaydeep</td>
				    <td>02/10/2017</td>
				    <td>10/10/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=1222" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="1222" data-email="dsa" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/1222.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="1222" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>1222</td>
					<td>jaydeep</td>
				    <td>02/10/2017</td>
				    <td>10/10/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=1222" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="1222" data-email="dsa" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/1222.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="1222" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>1222</td>
					<td>jaydeep</td>
				    <td>02/10/2017</td>
				    <td>10/10/2017</td>
				    <td>quote</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=1222" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="1222" data-email="dsa" data-invoice-type="quote" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/1222.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="1222" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>1222</td>
					<td>jaydeep</td>
				    <td>02/10/2017</td>
				    <td>10/10/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=1222" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="1222" data-email="dsa" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/1222.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="1222" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>1222</td>
					<td>jaydeep</td>
				    <td>02/10/2017</td>
				    <td>10/10/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=1222" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="1222" data-email="dsa" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/1222.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="1222" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>1222</td>
					<td>jaydeep</td>
				    <td>02/10/2017</td>
				    <td>10/10/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=1222" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="1222" data-email="dsa" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/1222.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="1222" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>1222</td>
					<td>jaydeep</td>
				    <td>02/10/2017</td>
				    <td>10/10/2017</td>
				    <td>quote</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=1222" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="1222" data-email="dsa" data-invoice-type="quote" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/1222.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="1222" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>1222</td>
					<td>jaydeep</td>
				    <td>02/10/2017</td>
				    <td>10/10/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=1222" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="1222" data-email="dsa" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/1222.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="1222" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>1222</td>
					<td>jaydeep</td>
				    <td>02/10/2017</td>
				    <td>10/10/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=1222" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="1222" data-email="dsa" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/1222.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="1222" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>1222</td>
					<td>jaydeep</td>
				    <td>02/10/2017</td>
				    <td>10/10/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=1222" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="1222" data-email="dsa" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/1222.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="1222" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>122211</td>
					<td>ghjfghjfghjkj</td>
				    <td>02/11/2017</td>
				    <td>09/11/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=122211" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="122211" data-email="asas@bfdfg.ll" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/122211.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="122211" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>12222</td>
					<td>gdfg</td>
				    <td>16/08/2017</td>
				    <td>15/08/2017</td>
				    <td>receipt</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=12222" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="12222" data-email="fsdfsdf@gmail.com" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/12222.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="12222" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>123</td>
					<td>chentesito</td>
				    <td>08/02/2018</td>
				    <td>10/02/2018</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=123" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="123" data-email="zhsgs@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/123.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="123" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>123</td>
					<td>chentesito</td>
				    <td>28/05/2017</td>
				    <td>29/05/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=123" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="123" data-email="zhsgs@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/123.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="123" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>123</td>
					<td>chentesito</td>
				    <td>08/02/2018</td>
				    <td>10/02/2018</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=123" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="123" data-email="zhsgs@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/123.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="123" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>123</td>
					<td>chentesito</td>
				    <td>04/09/2017</td>
				    <td>04/09/2017</td>
				    <td>quote</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=123" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="123" data-email="zhsgs@gmail.com" data-invoice-type="quote" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/123.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="123" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>123</td>
					<td>chentesito</td>
				    <td>04/09/2017</td>
				    <td>04/09/2017</td>
				    <td>quote</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=123" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="123" data-email="zhsgs@gmail.com" data-invoice-type="quote" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/123.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="123" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>123</td>
					<td>chentesito</td>
				    <td>04/09/2017</td>
				    <td>04/09/2017</td>
				    <td>quote</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=123" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="123" data-email="zhsgs@gmail.com" data-invoice-type="quote" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/123.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="123" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>123</td>
					<td>chentesito</td>
				    <td>13/02/2018</td>
				    <td>14/02/2018</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=123" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="123" data-email="zhsgs@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/123.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="123" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>123</td>
					<td>Dhaval Rupareliya</td>
				    <td>08/02/2018</td>
				    <td>10/02/2018</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=123" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="123" data-email="abc@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/123.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="123" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>123</td>
					<td>Dhaval Rupareliya</td>
				    <td>28/05/2017</td>
				    <td>29/05/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=123" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="123" data-email="abc@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/123.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="123" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>123</td>
					<td>Dhaval Rupareliya</td>
				    <td>08/02/2018</td>
				    <td>10/02/2018</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=123" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="123" data-email="abc@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/123.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="123" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>123</td>
					<td>Dhaval Rupareliya</td>
				    <td>04/09/2017</td>
				    <td>04/09/2017</td>
				    <td>quote</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=123" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="123" data-email="abc@gmail.com" data-invoice-type="quote" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/123.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="123" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>123</td>
					<td>Dhaval Rupareliya</td>
				    <td>04/09/2017</td>
				    <td>04/09/2017</td>
				    <td>quote</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=123" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="123" data-email="abc@gmail.com" data-invoice-type="quote" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/123.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="123" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>123</td>
					<td>Dhaval Rupareliya</td>
				    <td>04/09/2017</td>
				    <td>04/09/2017</td>
				    <td>quote</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=123" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="123" data-email="abc@gmail.com" data-invoice-type="quote" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/123.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="123" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>123</td>
					<td>Dhaval Rupareliya</td>
				    <td>13/02/2018</td>
				    <td>14/02/2018</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=123" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="123" data-email="abc@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/123.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="123" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>123</td>
					<td>aaaaa</td>
				    <td>08/02/2018</td>
				    <td>10/02/2018</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=123" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="123" data-email="abcQ@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/123.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="123" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>123</td>
					<td>aaaaa</td>
				    <td>28/05/2017</td>
				    <td>29/05/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=123" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="123" data-email="abcQ@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/123.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="123" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>123</td>
					<td>aaaaa</td>
				    <td>08/02/2018</td>
				    <td>10/02/2018</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=123" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="123" data-email="abcQ@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/123.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="123" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>123</td>
					<td>aaaaa</td>
				    <td>04/09/2017</td>
				    <td>04/09/2017</td>
				    <td>quote</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=123" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="123" data-email="abcQ@gmail.com" data-invoice-type="quote" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/123.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="123" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>123</td>
					<td>aaaaa</td>
				    <td>04/09/2017</td>
				    <td>04/09/2017</td>
				    <td>quote</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=123" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="123" data-email="abcQ@gmail.com" data-invoice-type="quote" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/123.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="123" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>123</td>
					<td>aaaaa</td>
				    <td>04/09/2017</td>
				    <td>04/09/2017</td>
				    <td>quote</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=123" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="123" data-email="abcQ@gmail.com" data-invoice-type="quote" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/123.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="123" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>123</td>
					<td>aaaaa</td>
				    <td>13/02/2018</td>
				    <td>14/02/2018</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=123" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="123" data-email="abcQ@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/123.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="123" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>123</td>
					<td>eshan</td>
				    <td>08/02/2018</td>
				    <td>10/02/2018</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=123" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="123" data-email="linkplusbd@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/123.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="123" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>123</td>
					<td>eshan</td>
				    <td>28/05/2017</td>
				    <td>29/05/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=123" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="123" data-email="linkplusbd@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/123.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="123" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>123</td>
					<td>eshan</td>
				    <td>08/02/2018</td>
				    <td>10/02/2018</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=123" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="123" data-email="linkplusbd@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/123.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="123" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>123</td>
					<td>eshan</td>
				    <td>04/09/2017</td>
				    <td>04/09/2017</td>
				    <td>quote</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=123" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="123" data-email="linkplusbd@gmail.com" data-invoice-type="quote" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/123.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="123" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>123</td>
					<td>eshan</td>
				    <td>04/09/2017</td>
				    <td>04/09/2017</td>
				    <td>quote</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=123" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="123" data-email="linkplusbd@gmail.com" data-invoice-type="quote" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/123.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="123" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>123</td>
					<td>eshan</td>
				    <td>04/09/2017</td>
				    <td>04/09/2017</td>
				    <td>quote</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=123" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="123" data-email="linkplusbd@gmail.com" data-invoice-type="quote" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/123.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="123" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>123</td>
					<td>eshan</td>
				    <td>13/02/2018</td>
				    <td>14/02/2018</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=123" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="123" data-email="linkplusbd@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/123.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="123" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>123</td>
					<td>Edgar</td>
				    <td>08/02/2018</td>
				    <td>10/02/2018</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=123" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="123" data-email="ejguinan@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/123.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="123" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>123</td>
					<td>Edgar</td>
				    <td>28/05/2017</td>
				    <td>29/05/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=123" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="123" data-email="ejguinan@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/123.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="123" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>123</td>
					<td>Edgar</td>
				    <td>08/02/2018</td>
				    <td>10/02/2018</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=123" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="123" data-email="ejguinan@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/123.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="123" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>123</td>
					<td>Edgar</td>
				    <td>04/09/2017</td>
				    <td>04/09/2017</td>
				    <td>quote</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=123" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="123" data-email="ejguinan@gmail.com" data-invoice-type="quote" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/123.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="123" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>123</td>
					<td>Edgar</td>
				    <td>04/09/2017</td>
				    <td>04/09/2017</td>
				    <td>quote</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=123" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="123" data-email="ejguinan@gmail.com" data-invoice-type="quote" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/123.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="123" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>123</td>
					<td>Edgar</td>
				    <td>04/09/2017</td>
				    <td>04/09/2017</td>
				    <td>quote</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=123" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="123" data-email="ejguinan@gmail.com" data-invoice-type="quote" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/123.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="123" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>123</td>
					<td>Edgar</td>
				    <td>13/02/2018</td>
				    <td>14/02/2018</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=123" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="123" data-email="ejguinan@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/123.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="123" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>123</td>
					<td>John</td>
				    <td>08/02/2018</td>
				    <td>10/02/2018</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=123" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="123" data-email="john@doe.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/123.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="123" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>123</td>
					<td>John</td>
				    <td>28/05/2017</td>
				    <td>29/05/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=123" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="123" data-email="john@doe.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/123.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="123" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>123</td>
					<td>John</td>
				    <td>08/02/2018</td>
				    <td>10/02/2018</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=123" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="123" data-email="john@doe.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/123.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="123" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>123</td>
					<td>John</td>
				    <td>04/09/2017</td>
				    <td>04/09/2017</td>
				    <td>quote</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=123" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="123" data-email="john@doe.com" data-invoice-type="quote" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/123.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="123" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>123</td>
					<td>John</td>
				    <td>04/09/2017</td>
				    <td>04/09/2017</td>
				    <td>quote</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=123" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="123" data-email="john@doe.com" data-invoice-type="quote" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/123.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="123" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>123</td>
					<td>John</td>
				    <td>04/09/2017</td>
				    <td>04/09/2017</td>
				    <td>quote</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=123" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="123" data-email="john@doe.com" data-invoice-type="quote" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/123.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="123" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>123</td>
					<td>John</td>
				    <td>13/02/2018</td>
				    <td>14/02/2018</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=123" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="123" data-email="john@doe.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/123.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="123" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>123</td>
					<td>John</td>
				    <td>08/02/2018</td>
				    <td>10/02/2018</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=123" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="123" data-email="john@doe.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/123.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="123" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>123</td>
					<td>John</td>
				    <td>28/05/2017</td>
				    <td>29/05/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=123" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="123" data-email="john@doe.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/123.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="123" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>123</td>
					<td>John</td>
				    <td>08/02/2018</td>
				    <td>10/02/2018</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=123" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="123" data-email="john@doe.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/123.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="123" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>123</td>
					<td>John</td>
				    <td>04/09/2017</td>
				    <td>04/09/2017</td>
				    <td>quote</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=123" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="123" data-email="john@doe.com" data-invoice-type="quote" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/123.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="123" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>123</td>
					<td>John</td>
				    <td>04/09/2017</td>
				    <td>04/09/2017</td>
				    <td>quote</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=123" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="123" data-email="john@doe.com" data-invoice-type="quote" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/123.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="123" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>123</td>
					<td>John</td>
				    <td>04/09/2017</td>
				    <td>04/09/2017</td>
				    <td>quote</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=123" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="123" data-email="john@doe.com" data-invoice-type="quote" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/123.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="123" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>123</td>
					<td>John</td>
				    <td>13/02/2018</td>
				    <td>14/02/2018</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=123" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="123" data-email="john@doe.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/123.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="123" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>123</td>
					<td>John</td>
				    <td>08/02/2018</td>
				    <td>10/02/2018</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=123" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="123" data-email="john@doe.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/123.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="123" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>123</td>
					<td>John</td>
				    <td>28/05/2017</td>
				    <td>29/05/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=123" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="123" data-email="john@doe.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/123.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="123" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>123</td>
					<td>John</td>
				    <td>08/02/2018</td>
				    <td>10/02/2018</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=123" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="123" data-email="john@doe.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/123.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="123" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>123</td>
					<td>John</td>
				    <td>04/09/2017</td>
				    <td>04/09/2017</td>
				    <td>quote</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=123" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="123" data-email="john@doe.com" data-invoice-type="quote" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/123.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="123" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>123</td>
					<td>John</td>
				    <td>04/09/2017</td>
				    <td>04/09/2017</td>
				    <td>quote</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=123" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="123" data-email="john@doe.com" data-invoice-type="quote" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/123.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="123" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>123</td>
					<td>John</td>
				    <td>04/09/2017</td>
				    <td>04/09/2017</td>
				    <td>quote</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=123" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="123" data-email="john@doe.com" data-invoice-type="quote" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/123.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="123" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>123</td>
					<td>John</td>
				    <td>13/02/2018</td>
				    <td>14/02/2018</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=123" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="123" data-email="john@doe.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/123.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="123" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>12313</td>
					<td>3123</td>
				    <td>26/07/2017</td>
				    <td>27/07/2017</td>
				    <td>receipt</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=12313" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="12313" data-email="wellmaster@gmail.com" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/12313.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="12313" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>12313</td>
					<td>3123</td>
				    <td>26/07/2017</td>
				    <td>27/07/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=12313" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="12313" data-email="wellmaster@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/12313.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="12313" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>12313</td>
					<td>3123</td>
				    <td>26/07/2017</td>
				    <td>27/07/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=12313" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="12313" data-email="wellmaster@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/12313.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="12313" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>12313</td>
					<td>oswaldo gerardino</td>
				    <td>26/07/2017</td>
				    <td>27/07/2017</td>
				    <td>receipt</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=12313" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="12313" data-email="oswaldogeovanny@gmail.com" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/12313.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="12313" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>12313</td>
					<td>oswaldo gerardino</td>
				    <td>26/07/2017</td>
				    <td>27/07/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=12313" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="12313" data-email="oswaldogeovanny@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/12313.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="12313" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>12313</td>
					<td>oswaldo gerardino</td>
				    <td>26/07/2017</td>
				    <td>27/07/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=12313" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="12313" data-email="oswaldogeovanny@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/12313.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="12313" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>12313</td>
					<td>oswaldo gerardino</td>
				    <td>26/07/2017</td>
				    <td>27/07/2017</td>
				    <td>receipt</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=12313" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="12313" data-email="oswaldogeovanny@gmail.com" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/12313.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="12313" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>12313</td>
					<td>oswaldo gerardino</td>
				    <td>26/07/2017</td>
				    <td>27/07/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=12313" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="12313" data-email="oswaldogeovanny@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/12313.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="12313" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>12313</td>
					<td>oswaldo gerardino</td>
				    <td>26/07/2017</td>
				    <td>27/07/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=12313" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="12313" data-email="oswaldogeovanny@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/12313.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="12313" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>12313</td>
					<td>oswaldo gerardino</td>
				    <td>26/07/2017</td>
				    <td>27/07/2017</td>
				    <td>receipt</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=12313" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="12313" data-email="oswaldogeovanny@gmail.com" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/12313.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="12313" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>12313</td>
					<td>oswaldo gerardino</td>
				    <td>26/07/2017</td>
				    <td>27/07/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=12313" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="12313" data-email="oswaldogeovanny@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/12313.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="12313" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>12313</td>
					<td>oswaldo gerardino</td>
				    <td>26/07/2017</td>
				    <td>27/07/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=12313" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="12313" data-email="oswaldogeovanny@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/12313.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="12313" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>1234</td>
					<td>CSS GROUP</td>
				    <td>22/07/2017</td>
				    <td>25/07/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=1234" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="1234" data-email="kevin@gmail.com" data-invoice-type="invoice" data-custom-email="surshkrish.mca@gmail.com" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/1234.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="1234" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>1234</td>
					<td>CSS GROUP</td>
				    <td>22/07/2017</td>
				    <td>25/07/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=1234" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="1234" data-email="kevin@gmail.com" data-invoice-type="invoice" data-custom-email="surshkrish.mca@gmail.com" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/1234.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="1234" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>1234</td>
					<td>CSS GROUP</td>
				    <td>22/07/2017</td>
				    <td>25/07/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=1234" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="1234" data-email="kevin@gmail.com" data-invoice-type="invoice" data-custom-email="surshkrish.mca@gmail.com" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/1234.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="1234" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>1234</td>
					<td>CSS GROUP</td>
				    <td>22/07/2017</td>
				    <td>25/07/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=1234" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="1234" data-email="kevin@gmail.com" data-invoice-type="invoice" data-custom-email="surshkrish.mca@gmail.com" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/1234.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="1234" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>1234</td>
					<td>CSS GROUP</td>
				    <td>22/07/2017</td>
				    <td>25/07/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=1234" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="1234" data-email="kevin@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/1234.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="1234" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>1234</td>
					<td>ABC</td>
				    <td>22/07/2017</td>
				    <td>25/07/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=1234" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="1234" data-email="ABC@gmail.com" data-invoice-type="invoice" data-custom-email="surshkrish.mca@gmail.com" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/1234.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="1234" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>1234</td>
					<td>ABC</td>
				    <td>22/07/2017</td>
				    <td>25/07/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=1234" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="1234" data-email="ABC@gmail.com" data-invoice-type="invoice" data-custom-email="surshkrish.mca@gmail.com" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/1234.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="1234" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>1234</td>
					<td>ABC</td>
				    <td>22/07/2017</td>
				    <td>25/07/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=1234" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="1234" data-email="ABC@gmail.com" data-invoice-type="invoice" data-custom-email="surshkrish.mca@gmail.com" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/1234.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="1234" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>1234</td>
					<td>ABC</td>
				    <td>22/07/2017</td>
				    <td>25/07/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=1234" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="1234" data-email="ABC@gmail.com" data-invoice-type="invoice" data-custom-email="surshkrish.mca@gmail.com" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/1234.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="1234" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>1234</td>
					<td>ABC</td>
				    <td>22/07/2017</td>
				    <td>25/07/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=1234" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="1234" data-email="ABC@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/1234.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="1234" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>1234</td>
					<td>juan garcia</td>
				    <td>22/07/2017</td>
				    <td>25/07/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=1234" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="1234" data-email="juangarcia@gmail.com" data-invoice-type="invoice" data-custom-email="surshkrish.mca@gmail.com" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/1234.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="1234" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>1234</td>
					<td>juan garcia</td>
				    <td>22/07/2017</td>
				    <td>25/07/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=1234" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="1234" data-email="juangarcia@gmail.com" data-invoice-type="invoice" data-custom-email="surshkrish.mca@gmail.com" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/1234.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="1234" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>1234</td>
					<td>juan garcia</td>
				    <td>22/07/2017</td>
				    <td>25/07/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=1234" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="1234" data-email="juangarcia@gmail.com" data-invoice-type="invoice" data-custom-email="surshkrish.mca@gmail.com" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/1234.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="1234" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>1234</td>
					<td>juan garcia</td>
				    <td>22/07/2017</td>
				    <td>25/07/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=1234" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="1234" data-email="juangarcia@gmail.com" data-invoice-type="invoice" data-custom-email="surshkrish.mca@gmail.com" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/1234.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="1234" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>1234</td>
					<td>juan garcia</td>
				    <td>22/07/2017</td>
				    <td>25/07/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=1234" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="1234" data-email="juangarcia@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/1234.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="1234" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>1234</td>
					<td>Suresh Krish</td>
				    <td>22/07/2017</td>
				    <td>25/07/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=1234" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="1234" data-email="surshkrish.mca@gmail.com" data-invoice-type="invoice" data-custom-email="surshkrish.mca@gmail.com" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/1234.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="1234" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>1234</td>
					<td>Suresh Krish</td>
				    <td>22/07/2017</td>
				    <td>25/07/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=1234" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="1234" data-email="surshkrish.mca@gmail.com" data-invoice-type="invoice" data-custom-email="surshkrish.mca@gmail.com" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/1234.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="1234" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>1234</td>
					<td>Suresh Krish</td>
				    <td>22/07/2017</td>
				    <td>25/07/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=1234" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="1234" data-email="surshkrish.mca@gmail.com" data-invoice-type="invoice" data-custom-email="surshkrish.mca@gmail.com" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/1234.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="1234" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>1234</td>
					<td>Suresh Krish</td>
				    <td>22/07/2017</td>
				    <td>25/07/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=1234" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="1234" data-email="surshkrish.mca@gmail.com" data-invoice-type="invoice" data-custom-email="surshkrish.mca@gmail.com" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/1234.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="1234" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>1234</td>
					<td>Suresh Krish</td>
				    <td>22/07/2017</td>
				    <td>25/07/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=1234" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="1234" data-email="surshkrish.mca@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/1234.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="1234" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>1234</td>
					<td>Suresh Krish</td>
				    <td>22/07/2017</td>
				    <td>25/07/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=1234" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="1234" data-email="surshkrish.mca@gmail.com" data-invoice-type="invoice" data-custom-email="surshkrish.mca@gmail.com" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/1234.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="1234" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>1234</td>
					<td>Suresh Krish</td>
				    <td>22/07/2017</td>
				    <td>25/07/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=1234" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="1234" data-email="surshkrish.mca@gmail.com" data-invoice-type="invoice" data-custom-email="surshkrish.mca@gmail.com" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/1234.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="1234" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>1234</td>
					<td>Suresh Krish</td>
				    <td>22/07/2017</td>
				    <td>25/07/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=1234" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="1234" data-email="surshkrish.mca@gmail.com" data-invoice-type="invoice" data-custom-email="surshkrish.mca@gmail.com" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/1234.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="1234" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>1234</td>
					<td>Suresh Krish</td>
				    <td>22/07/2017</td>
				    <td>25/07/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=1234" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="1234" data-email="surshkrish.mca@gmail.com" data-invoice-type="invoice" data-custom-email="surshkrish.mca@gmail.com" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/1234.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="1234" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>1234</td>
					<td>Suresh Krish</td>
				    <td>22/07/2017</td>
				    <td>25/07/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=1234" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="1234" data-email="surshkrish.mca@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/1234.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="1234" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>1234</td>
					<td>Suresh Krish</td>
				    <td>22/07/2017</td>
				    <td>25/07/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=1234" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="1234" data-email="surshkrish.mca@gmail.com" data-invoice-type="invoice" data-custom-email="surshkrish.mca@gmail.com" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/1234.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="1234" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>1234</td>
					<td>Suresh Krish</td>
				    <td>22/07/2017</td>
				    <td>25/07/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=1234" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="1234" data-email="surshkrish.mca@gmail.com" data-invoice-type="invoice" data-custom-email="surshkrish.mca@gmail.com" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/1234.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="1234" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>1234</td>
					<td>Suresh Krish</td>
				    <td>22/07/2017</td>
				    <td>25/07/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=1234" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="1234" data-email="surshkrish.mca@gmail.com" data-invoice-type="invoice" data-custom-email="surshkrish.mca@gmail.com" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/1234.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="1234" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>1234</td>
					<td>Suresh Krish</td>
				    <td>22/07/2017</td>
				    <td>25/07/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=1234" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="1234" data-email="surshkrish.mca@gmail.com" data-invoice-type="invoice" data-custom-email="surshkrish.mca@gmail.com" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/1234.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="1234" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>1234</td>
					<td>Suresh Krish</td>
				    <td>22/07/2017</td>
				    <td>25/07/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=1234" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="1234" data-email="surshkrish.mca@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/1234.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="1234" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>1234</td>
					<td>Suresh Krish</td>
				    <td>22/07/2017</td>
				    <td>25/07/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=1234" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="1234" data-email="surshkrish.mca@gmail.com" data-invoice-type="invoice" data-custom-email="surshkrish.mca@gmail.com" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/1234.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="1234" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>1234</td>
					<td>Suresh Krish</td>
				    <td>22/07/2017</td>
				    <td>25/07/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=1234" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="1234" data-email="surshkrish.mca@gmail.com" data-invoice-type="invoice" data-custom-email="surshkrish.mca@gmail.com" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/1234.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="1234" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>1234</td>
					<td>Suresh Krish</td>
				    <td>22/07/2017</td>
				    <td>25/07/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=1234" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="1234" data-email="surshkrish.mca@gmail.com" data-invoice-type="invoice" data-custom-email="surshkrish.mca@gmail.com" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/1234.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="1234" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>1234</td>
					<td>Suresh Krish</td>
				    <td>22/07/2017</td>
				    <td>25/07/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=1234" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="1234" data-email="surshkrish.mca@gmail.com" data-invoice-type="invoice" data-custom-email="surshkrish.mca@gmail.com" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/1234.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="1234" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>1234</td>
					<td>Suresh Krish</td>
				    <td>22/07/2017</td>
				    <td>25/07/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=1234" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="1234" data-email="surshkrish.mca@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/1234.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="1234" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>1234</td>
					<td>Suresh Krish</td>
				    <td>22/07/2017</td>
				    <td>25/07/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=1234" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="1234" data-email="surshkrish.mca@gmail.com" data-invoice-type="invoice" data-custom-email="surshkrish.mca@gmail.com" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/1234.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="1234" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>1234</td>
					<td>Suresh Krish</td>
				    <td>22/07/2017</td>
				    <td>25/07/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=1234" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="1234" data-email="surshkrish.mca@gmail.com" data-invoice-type="invoice" data-custom-email="surshkrish.mca@gmail.com" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/1234.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="1234" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>1234</td>
					<td>Suresh Krish</td>
				    <td>22/07/2017</td>
				    <td>25/07/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=1234" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="1234" data-email="surshkrish.mca@gmail.com" data-invoice-type="invoice" data-custom-email="surshkrish.mca@gmail.com" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/1234.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="1234" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>1234</td>
					<td>Suresh Krish</td>
				    <td>22/07/2017</td>
				    <td>25/07/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=1234" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="1234" data-email="surshkrish.mca@gmail.com" data-invoice-type="invoice" data-custom-email="surshkrish.mca@gmail.com" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/1234.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="1234" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>1234</td>
					<td>Suresh Krish</td>
				    <td>22/07/2017</td>
				    <td>25/07/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=1234" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="1234" data-email="surshkrish.mca@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/1234.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="1234" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>12345</td>
					<td>test</td>
				    <td>08/02/2018</td>
				    <td>10/02/2018</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=12345" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="12345" data-email="test@test.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/12345.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="12345" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>12345</td>
					<td>test</td>
				    <td>20/07/2017</td>
				    <td>17/07/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=12345" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="12345" data-email="test@test.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/12345.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="12345" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>12345</td>
					<td>test</td>
				    <td>20/07/2017</td>
				    <td>17/07/2017</td>
				    <td>quote</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=12345" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="12345" data-email="test@test.com" data-invoice-type="quote" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/12345.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="12345" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>12345</td>
					<td>test</td>
				    <td>08/02/2018</td>
				    <td>10/02/2018</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=12345" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="12345" data-email="test@test.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/12345.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="12345" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>12345</td>
					<td>test</td>
				    <td>08/02/2018</td>
				    <td>10/02/2018</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=12345" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="12345" data-email="test@test.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/12345.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="12345" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>12345</td>
					<td>Sidney  jackson</td>
				    <td>08/02/2018</td>
				    <td>10/02/2018</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=12345" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="12345" data-email="david@contrastweb.co.uk" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/12345.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="12345" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>12345</td>
					<td>Sidney  jackson</td>
				    <td>20/07/2017</td>
				    <td>17/07/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=12345" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="12345" data-email="david@contrastweb.co.uk" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/12345.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="12345" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>12345</td>
					<td>Sidney  jackson</td>
				    <td>20/07/2017</td>
				    <td>17/07/2017</td>
				    <td>quote</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=12345" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="12345" data-email="david@contrastweb.co.uk" data-invoice-type="quote" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/12345.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="12345" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>12345</td>
					<td>Sidney  jackson</td>
				    <td>08/02/2018</td>
				    <td>10/02/2018</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=12345" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="12345" data-email="david@contrastweb.co.uk" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/12345.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="12345" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>12345</td>
					<td>Sidney  jackson</td>
				    <td>08/02/2018</td>
				    <td>10/02/2018</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=12345" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="12345" data-email="david@contrastweb.co.uk" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/12345.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="12345" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>12345</td>
					<td>Dhaval Rupareliya</td>
				    <td>08/02/2018</td>
				    <td>10/02/2018</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=12345" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="12345" data-email="abc@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/12345.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="12345" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>12345</td>
					<td>Dhaval Rupareliya</td>
				    <td>20/07/2017</td>
				    <td>17/07/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=12345" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="12345" data-email="abc@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/12345.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="12345" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>12345</td>
					<td>Dhaval Rupareliya</td>
				    <td>20/07/2017</td>
				    <td>17/07/2017</td>
				    <td>quote</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=12345" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="12345" data-email="abc@gmail.com" data-invoice-type="quote" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/12345.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="12345" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>12345</td>
					<td>Dhaval Rupareliya</td>
				    <td>08/02/2018</td>
				    <td>10/02/2018</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=12345" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="12345" data-email="abc@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/12345.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="12345" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>12345</td>
					<td>Dhaval Rupareliya</td>
				    <td>08/02/2018</td>
				    <td>10/02/2018</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=12345" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="12345" data-email="abc@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/12345.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="12345" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>12345</td>
					<td>Dhaval Rupareliya</td>
				    <td>08/02/2018</td>
				    <td>10/02/2018</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=12345" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="12345" data-email="abc@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/12345.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="12345" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>12345</td>
					<td>Dhaval Rupareliya</td>
				    <td>20/07/2017</td>
				    <td>17/07/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=12345" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="12345" data-email="abc@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/12345.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="12345" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>12345</td>
					<td>Dhaval Rupareliya</td>
				    <td>20/07/2017</td>
				    <td>17/07/2017</td>
				    <td>quote</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=12345" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="12345" data-email="abc@gmail.com" data-invoice-type="quote" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/12345.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="12345" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>12345</td>
					<td>Dhaval Rupareliya</td>
				    <td>08/02/2018</td>
				    <td>10/02/2018</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=12345" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="12345" data-email="abc@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/12345.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="12345" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>12345</td>
					<td>Dhaval Rupareliya</td>
				    <td>08/02/2018</td>
				    <td>10/02/2018</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=12345" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="12345" data-email="abc@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/12345.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="12345" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>12345</td>
					<td>A1 Jobs</td>
				    <td>08/02/2018</td>
				    <td>10/02/2018</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=12345" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="12345" data-email="provtjeter@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/12345.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="12345" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>12345</td>
					<td>A1 Jobs</td>
				    <td>20/07/2017</td>
				    <td>17/07/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=12345" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="12345" data-email="provtjeter@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/12345.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="12345" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>12345</td>
					<td>A1 Jobs</td>
				    <td>20/07/2017</td>
				    <td>17/07/2017</td>
				    <td>quote</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=12345" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="12345" data-email="provtjeter@gmail.com" data-invoice-type="quote" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/12345.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="12345" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>12345</td>
					<td>A1 Jobs</td>
				    <td>08/02/2018</td>
				    <td>10/02/2018</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=12345" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="12345" data-email="provtjeter@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/12345.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="12345" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>12345</td>
					<td>A1 Jobs</td>
				    <td>08/02/2018</td>
				    <td>10/02/2018</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=12345" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="12345" data-email="provtjeter@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/12345.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="12345" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>12345</td>
					<td>A1 Jobs</td>
				    <td>08/02/2018</td>
				    <td>10/02/2018</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=12345" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="12345" data-email="provtjeter@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/12345.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="12345" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>12345</td>
					<td>A1 Jobs</td>
				    <td>20/07/2017</td>
				    <td>17/07/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=12345" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="12345" data-email="provtjeter@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/12345.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="12345" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>12345</td>
					<td>A1 Jobs</td>
				    <td>20/07/2017</td>
				    <td>17/07/2017</td>
				    <td>quote</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=12345" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="12345" data-email="provtjeter@gmail.com" data-invoice-type="quote" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/12345.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="12345" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>12345</td>
					<td>A1 Jobs</td>
				    <td>08/02/2018</td>
				    <td>10/02/2018</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=12345" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="12345" data-email="provtjeter@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/12345.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="12345" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>12345</td>
					<td>A1 Jobs</td>
				    <td>08/02/2018</td>
				    <td>10/02/2018</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=12345" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="12345" data-email="provtjeter@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/12345.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="12345" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>12345</td>
					<td>Dhaval Rupareliya</td>
				    <td>08/02/2018</td>
				    <td>10/02/2018</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=12345" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="12345" data-email="abc@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/12345.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="12345" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>12345</td>
					<td>Dhaval Rupareliya</td>
				    <td>20/07/2017</td>
				    <td>17/07/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=12345" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="12345" data-email="abc@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/12345.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="12345" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>12345</td>
					<td>Dhaval Rupareliya</td>
				    <td>20/07/2017</td>
				    <td>17/07/2017</td>
				    <td>quote</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=12345" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="12345" data-email="abc@gmail.com" data-invoice-type="quote" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/12345.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="12345" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>12345</td>
					<td>Dhaval Rupareliya</td>
				    <td>08/02/2018</td>
				    <td>10/02/2018</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=12345" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="12345" data-email="abc@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/12345.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="12345" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>12345</td>
					<td>Dhaval Rupareliya</td>
				    <td>08/02/2018</td>
				    <td>10/02/2018</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=12345" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="12345" data-email="abc@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/12345.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="12345" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>123aa</td>
					<td>fsdfsd</td>
				    <td>01/08/2017</td>
				    <td>01/08/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=123aa" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="123aa" data-email="dfsdf" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/123aa.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="123aa" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>125</td>
					<td>Carlos Manuel Cabrera Pérez</td>
				    <td>16/07/2017</td>
				    <td>24/07/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=125" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="125" data-email="carloscabrera24@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/125.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="125" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>1251</td>
					<td>Paddy Darcy</td>
				    <td>09/10/2017</td>
				    <td>12/10/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=1251" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="1251" data-email="pady.darcy@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/1251.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="1251" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>128790</td>
					<td>KCO Properties, LLC.</td>
				    <td>22/09/2017</td>
				    <td>28/10/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=128790" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="128790" data-email="kingonwu@hotmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/128790.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="128790" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>144</td>
					<td>jjj</td>
				    <td>03/05/2017</td>
				    <td>09/05/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=144" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="144" data-email="jj@jk.gom" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/144.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="144" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>144</td>
					<td>jjj</td>
				    <td>04/07/2017</td>
				    <td>15/07/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=144" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="144" data-email="jj@jk.gom" data-invoice-type="invoice" data-custom-email="rahul@websparrows.com" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/144.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="144" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>144</td>
					<td>jjj</td>
				    <td>14/02/2018</td>
				    <td>15/02/2018</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=144" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="144" data-email="jj@jk.gom" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/144.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="144" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>144</td>
					<td>Ram Kumar</td>
				    <td>03/05/2017</td>
				    <td>09/05/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=144" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="144" data-email="rahul@websparrows.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/144.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="144" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>144</td>
					<td>Ram Kumar</td>
				    <td>04/07/2017</td>
				    <td>15/07/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=144" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="144" data-email="rahul@websparrows.com" data-invoice-type="invoice" data-custom-email="rahul@websparrows.com" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/144.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="144" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>144</td>
					<td>Ram Kumar</td>
				    <td>14/02/2018</td>
				    <td>15/02/2018</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=144" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="144" data-email="rahul@websparrows.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/144.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="144" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>144</td>
					<td>yyyyy</td>
				    <td>03/05/2017</td>
				    <td>09/05/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=144" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="144" data-email="yyy" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/144.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="144" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>144</td>
					<td>yyyyy</td>
				    <td>04/07/2017</td>
				    <td>15/07/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=144" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="144" data-email="yyy" data-invoice-type="invoice" data-custom-email="rahul@websparrows.com" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/144.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="144" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>144</td>
					<td>yyyyy</td>
				    <td>14/02/2018</td>
				    <td>15/02/2018</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=144" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="144" data-email="yyy" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/144.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="144" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>14444444</td>
					<td>Agent 1</td>
				    <td>03/08/2017</td>
				    <td>03/08/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=14444444" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="14444444" data-email="rtrrtrtrt@ggg.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/14444444.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="14444444" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>14555</td>
					<td>mama</td>
				    <td>30/03/2018</td>
				    <td>30/03/2018</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=14555" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="14555" data-email="mama.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/14555.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="14555" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>148777</td>
					<td>Fernando</td>
				    <td>29/03/2018</td>
				    <td>30/03/2018</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=148777" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="148777" data-email="contato@ayron.com.br" data-invoice-type="invoice" data-custom-email="teste" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/148777.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="148777" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>15</td>
					<td>Frank</td>
				    <td>09/01/2018</td>
				    <td>01/01/2018</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=15" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="15" data-email="frank.johan@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/15.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="15" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>15000</td>
					<td>Bebo</td>
				    <td>24/08/2017</td>
				    <td>24/08/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=15000" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="15000" data-email="info@beb.ie" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/15000.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="15000" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>154</td>
					<td>ctest</td>
				    <td>07/07/2017</td>
				    <td>07/07/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=154" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="154" data-email="ctest@test.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/154.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="154" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>154555</td>
					<td>fvxv</td>
				    <td>08/12/2017</td>
				    <td>15/12/2017</td>
				    <td>quote</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=154555" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="154555" data-email="sadsad@gmail.com" data-invoice-type="quote" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/154555.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="154555" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>155</td>
					<td>ZikWal</td>
				    <td>27/06/2017</td>
				    <td>27/06/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=155" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="155" data-email="mail.ru" data-invoice-type="invoice" data-custom-email="zikwal@mail.ru" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/155.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="155" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>155</td>
					<td>ZikWal</td>
				    <td>27/06/2017</td>
				    <td>27/06/2017</td>
				    <td>quote</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=155" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="155" data-email="mail.ru" data-invoice-type="quote" data-custom-email="zikwal@mail.ru" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/155.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="155" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>155</td>
					<td>ZikWal</td>
				    <td>27/06/2017</td>
				    <td>27/06/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=155" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="155" data-email="mail.ru" data-invoice-type="invoice" data-custom-email="zikwal@mail.ru" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/155.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="155" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>155</td>
					<td>ZikWal</td>
				    <td>27/06/2017</td>
				    <td>27/06/2017</td>
				    <td>quote</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=155" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="155" data-email="mail.ru" data-invoice-type="quote" data-custom-email="zikwal@mail.ru" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/155.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="155" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>156484213138</td>
					<td>bonaona</td>
				    <td>20/03/2018</td>
				    <td>22/03/2018</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=156484213138" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="156484213138" data-email="adsfasf@asdad.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/156484213138.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="156484213138" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>16136641</td>
					<td>test</td>
				    <td>28/06/2017</td>
				    <td>10/07/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=16136641" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="16136641" data-email="test" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/16136641.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="16136641" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>1650</td>
					<td>cvbc</td>
				    <td>02/11/2017</td>
				    <td>02/03/2018</td>
				    <td>receipt</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=1650" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="1650" data-email="cvbcvb@hdf.fghf" data-invoice-type="receipt" data-custom-email="vbcvbbc" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/1650.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="1650" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>17786214</td>
					<td>Aurel</td>
				    <td>22/09/2017</td>
				    <td>22/09/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=17786214" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="17786214" data-email="aurel@icloud.com" data-invoice-type="invoice" data-custom-email="Pentru informatii scrieti la adresa support@icloud.com" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/17786214.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="17786214" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>18087</td>
					<td>ERICE</td>
				    <td>29/06/2017</td>
				    <td>29/06/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=18087" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="18087" data-email="ERICE-TEST.COM" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/18087.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="18087" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>msdnfsdnk</td>
				    <td>01/11/2017</td>
				    <td>01/11/2017</td>
				    <td>receipt</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="dfkd@djkfk.com" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>msdnfsdnk</td>
				    <td>10/05/2017</td>
				    <td>10/05/2017</td>
				    <td>receipt</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="dfkd@djkfk.com" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>msdnfsdnk</td>
				    <td>01/11/2017</td>
				    <td>01/11/2017</td>
				    <td>receipt</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="dfkd@djkfk.com" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>msdnfsdnk</td>
				    <td>05/12/2017</td>
				    <td>28/11/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="dfkd@djkfk.com" data-invoice-type="invoice" data-custom-email="sdfsdfsdf" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>msdnfsdnk</td>
				    <td>18/10/2017</td>
				    <td>18/10/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="dfkd@djkfk.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>msdnfsdnk</td>
				    <td>18/10/2017</td>
				    <td>18/10/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="dfkd@djkfk.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>msdnfsdnk</td>
				    <td>19/12/2017</td>
				    <td>19/12/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="dfkd@djkfk.com" data-invoice-type="invoice" data-custom-email="sdfsdfsdf" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>tajamul israr</td>
				    <td>01/11/2017</td>
				    <td>01/11/2017</td>
				    <td>receipt</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="munda.sialkoti5@gmail.com" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>tajamul israr</td>
				    <td>10/05/2017</td>
				    <td>10/05/2017</td>
				    <td>receipt</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="munda.sialkoti5@gmail.com" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>tajamul israr</td>
				    <td>01/11/2017</td>
				    <td>01/11/2017</td>
				    <td>receipt</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="munda.sialkoti5@gmail.com" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>tajamul israr</td>
				    <td>05/12/2017</td>
				    <td>28/11/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="munda.sialkoti5@gmail.com" data-invoice-type="invoice" data-custom-email="sdfsdfsdf" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>tajamul israr</td>
				    <td>18/10/2017</td>
				    <td>18/10/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="munda.sialkoti5@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>tajamul israr</td>
				    <td>18/10/2017</td>
				    <td>18/10/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="munda.sialkoti5@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>tajamul israr</td>
				    <td>19/12/2017</td>
				    <td>19/12/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="munda.sialkoti5@gmail.com" data-invoice-type="invoice" data-custom-email="sdfsdfsdf" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>deneye</td>
				    <td>01/11/2017</td>
				    <td>01/11/2017</td>
				    <td>receipt</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="deneye.com" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>deneye</td>
				    <td>10/05/2017</td>
				    <td>10/05/2017</td>
				    <td>receipt</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="deneye.com" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>deneye</td>
				    <td>01/11/2017</td>
				    <td>01/11/2017</td>
				    <td>receipt</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="deneye.com" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>deneye</td>
				    <td>05/12/2017</td>
				    <td>28/11/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="deneye.com" data-invoice-type="invoice" data-custom-email="sdfsdfsdf" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>deneye</td>
				    <td>18/10/2017</td>
				    <td>18/10/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="deneye.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>deneye</td>
				    <td>18/10/2017</td>
				    <td>18/10/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="deneye.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>deneye</td>
				    <td>19/12/2017</td>
				    <td>19/12/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="deneye.com" data-invoice-type="invoice" data-custom-email="sdfsdfsdf" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>deneye</td>
				    <td>01/11/2017</td>
				    <td>01/11/2017</td>
				    <td>receipt</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="deneye.com" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>deneye</td>
				    <td>10/05/2017</td>
				    <td>10/05/2017</td>
				    <td>receipt</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="deneye.com" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>deneye</td>
				    <td>01/11/2017</td>
				    <td>01/11/2017</td>
				    <td>receipt</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="deneye.com" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>deneye</td>
				    <td>05/12/2017</td>
				    <td>28/11/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="deneye.com" data-invoice-type="invoice" data-custom-email="sdfsdfsdf" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>deneye</td>
				    <td>18/10/2017</td>
				    <td>18/10/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="deneye.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>deneye</td>
				    <td>18/10/2017</td>
				    <td>18/10/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="deneye.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>deneye</td>
				    <td>19/12/2017</td>
				    <td>19/12/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="deneye.com" data-invoice-type="invoice" data-custom-email="sdfsdfsdf" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>chentesito</td>
				    <td>01/11/2017</td>
				    <td>01/11/2017</td>
				    <td>receipt</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="zhsgs@gmail.com" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>chentesito</td>
				    <td>10/05/2017</td>
				    <td>10/05/2017</td>
				    <td>receipt</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="zhsgs@gmail.com" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>chentesito</td>
				    <td>01/11/2017</td>
				    <td>01/11/2017</td>
				    <td>receipt</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="zhsgs@gmail.com" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>chentesito</td>
				    <td>05/12/2017</td>
				    <td>28/11/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="zhsgs@gmail.com" data-invoice-type="invoice" data-custom-email="sdfsdfsdf" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>chentesito</td>
				    <td>18/10/2017</td>
				    <td>18/10/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="zhsgs@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>chentesito</td>
				    <td>18/10/2017</td>
				    <td>18/10/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="zhsgs@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>chentesito</td>
				    <td>19/12/2017</td>
				    <td>19/12/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="zhsgs@gmail.com" data-invoice-type="invoice" data-custom-email="sdfsdfsdf" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>chentesito</td>
				    <td>01/11/2017</td>
				    <td>01/11/2017</td>
				    <td>receipt</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="zhsgs@gmail.com" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>chentesito</td>
				    <td>10/05/2017</td>
				    <td>10/05/2017</td>
				    <td>receipt</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="zhsgs@gmail.com" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>chentesito</td>
				    <td>01/11/2017</td>
				    <td>01/11/2017</td>
				    <td>receipt</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="zhsgs@gmail.com" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>chentesito</td>
				    <td>05/12/2017</td>
				    <td>28/11/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="zhsgs@gmail.com" data-invoice-type="invoice" data-custom-email="sdfsdfsdf" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>chentesito</td>
				    <td>18/10/2017</td>
				    <td>18/10/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="zhsgs@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>chentesito</td>
				    <td>18/10/2017</td>
				    <td>18/10/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="zhsgs@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>chentesito</td>
				    <td>19/12/2017</td>
				    <td>19/12/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="zhsgs@gmail.com" data-invoice-type="invoice" data-custom-email="sdfsdfsdf" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>customer</td>
				    <td>01/11/2017</td>
				    <td>01/11/2017</td>
				    <td>receipt</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="rakshi.n2@gmail.com" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>customer</td>
				    <td>10/05/2017</td>
				    <td>10/05/2017</td>
				    <td>receipt</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="rakshi.n2@gmail.com" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>customer</td>
				    <td>01/11/2017</td>
				    <td>01/11/2017</td>
				    <td>receipt</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="rakshi.n2@gmail.com" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>customer</td>
				    <td>05/12/2017</td>
				    <td>28/11/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="rakshi.n2@gmail.com" data-invoice-type="invoice" data-custom-email="sdfsdfsdf" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>customer</td>
				    <td>18/10/2017</td>
				    <td>18/10/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="rakshi.n2@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>customer</td>
				    <td>18/10/2017</td>
				    <td>18/10/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="rakshi.n2@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>customer</td>
				    <td>19/12/2017</td>
				    <td>19/12/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="rakshi.n2@gmail.com" data-invoice-type="invoice" data-custom-email="sdfsdfsdf" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>customer</td>
				    <td>01/11/2017</td>
				    <td>01/11/2017</td>
				    <td>receipt</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="rakshi.n2@gmail.com" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>customer</td>
				    <td>10/05/2017</td>
				    <td>10/05/2017</td>
				    <td>receipt</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="rakshi.n2@gmail.com" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>customer</td>
				    <td>01/11/2017</td>
				    <td>01/11/2017</td>
				    <td>receipt</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="rakshi.n2@gmail.com" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>customer</td>
				    <td>05/12/2017</td>
				    <td>28/11/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="rakshi.n2@gmail.com" data-invoice-type="invoice" data-custom-email="sdfsdfsdf" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>customer</td>
				    <td>18/10/2017</td>
				    <td>18/10/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="rakshi.n2@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>customer</td>
				    <td>18/10/2017</td>
				    <td>18/10/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="rakshi.n2@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>customer</td>
				    <td>19/12/2017</td>
				    <td>19/12/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="rakshi.n2@gmail.com" data-invoice-type="invoice" data-custom-email="sdfsdfsdf" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>Marlon Gester</td>
				    <td>01/11/2017</td>
				    <td>01/11/2017</td>
				    <td>receipt</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="clavecuenta@hotmail.com" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>Marlon Gester</td>
				    <td>10/05/2017</td>
				    <td>10/05/2017</td>
				    <td>receipt</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="clavecuenta@hotmail.com" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>Marlon Gester</td>
				    <td>01/11/2017</td>
				    <td>01/11/2017</td>
				    <td>receipt</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="clavecuenta@hotmail.com" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>Marlon Gester</td>
				    <td>05/12/2017</td>
				    <td>28/11/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="clavecuenta@hotmail.com" data-invoice-type="invoice" data-custom-email="sdfsdfsdf" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>Marlon Gester</td>
				    <td>18/10/2017</td>
				    <td>18/10/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="clavecuenta@hotmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>Marlon Gester</td>
				    <td>18/10/2017</td>
				    <td>18/10/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="clavecuenta@hotmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>Marlon Gester</td>
				    <td>19/12/2017</td>
				    <td>19/12/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="clavecuenta@hotmail.com" data-invoice-type="invoice" data-custom-email="sdfsdfsdf" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>Danieli</td>
				    <td>01/11/2017</td>
				    <td>01/11/2017</td>
				    <td>receipt</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="danieli@shpresa.al" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>Danieli</td>
				    <td>10/05/2017</td>
				    <td>10/05/2017</td>
				    <td>receipt</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="danieli@shpresa.al" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>Danieli</td>
				    <td>01/11/2017</td>
				    <td>01/11/2017</td>
				    <td>receipt</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="danieli@shpresa.al" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>Danieli</td>
				    <td>05/12/2017</td>
				    <td>28/11/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="danieli@shpresa.al" data-invoice-type="invoice" data-custom-email="sdfsdfsdf" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>Danieli</td>
				    <td>18/10/2017</td>
				    <td>18/10/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="danieli@shpresa.al" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>Danieli</td>
				    <td>18/10/2017</td>
				    <td>18/10/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="danieli@shpresa.al" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>Danieli</td>
				    <td>19/12/2017</td>
				    <td>19/12/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="danieli@shpresa.al" data-invoice-type="invoice" data-custom-email="sdfsdfsdf" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>A1 Jobs</td>
				    <td>01/11/2017</td>
				    <td>01/11/2017</td>
				    <td>receipt</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="admin@testcom" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>A1 Jobs</td>
				    <td>10/05/2017</td>
				    <td>10/05/2017</td>
				    <td>receipt</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="admin@testcom" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>A1 Jobs</td>
				    <td>01/11/2017</td>
				    <td>01/11/2017</td>
				    <td>receipt</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="admin@testcom" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>A1 Jobs</td>
				    <td>05/12/2017</td>
				    <td>28/11/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="admin@testcom" data-invoice-type="invoice" data-custom-email="sdfsdfsdf" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>A1 Jobs</td>
				    <td>18/10/2017</td>
				    <td>18/10/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="admin@testcom" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>A1 Jobs</td>
				    <td>18/10/2017</td>
				    <td>18/10/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="admin@testcom" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>A1 Jobs</td>
				    <td>19/12/2017</td>
				    <td>19/12/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="admin@testcom" data-invoice-type="invoice" data-custom-email="sdfsdfsdf" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>Shiva</td>
				    <td>01/11/2017</td>
				    <td>01/11/2017</td>
				    <td>receipt</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="snreddyatwork@gmail.com" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>Shiva</td>
				    <td>10/05/2017</td>
				    <td>10/05/2017</td>
				    <td>receipt</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="snreddyatwork@gmail.com" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>Shiva</td>
				    <td>01/11/2017</td>
				    <td>01/11/2017</td>
				    <td>receipt</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="snreddyatwork@gmail.com" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>Shiva</td>
				    <td>05/12/2017</td>
				    <td>28/11/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="snreddyatwork@gmail.com" data-invoice-type="invoice" data-custom-email="sdfsdfsdf" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>Shiva</td>
				    <td>18/10/2017</td>
				    <td>18/10/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="snreddyatwork@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>Shiva</td>
				    <td>18/10/2017</td>
				    <td>18/10/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="snreddyatwork@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>Shiva</td>
				    <td>19/12/2017</td>
				    <td>19/12/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="snreddyatwork@gmail.com" data-invoice-type="invoice" data-custom-email="sdfsdfsdf" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>Andri</td>
				    <td>01/11/2017</td>
				    <td>01/11/2017</td>
				    <td>receipt</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="yantoandri489@gmail.com" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>Andri</td>
				    <td>10/05/2017</td>
				    <td>10/05/2017</td>
				    <td>receipt</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="yantoandri489@gmail.com" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>Andri</td>
				    <td>01/11/2017</td>
				    <td>01/11/2017</td>
				    <td>receipt</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="yantoandri489@gmail.com" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>Andri</td>
				    <td>05/12/2017</td>
				    <td>28/11/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="yantoandri489@gmail.com" data-invoice-type="invoice" data-custom-email="sdfsdfsdf" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>Andri</td>
				    <td>18/10/2017</td>
				    <td>18/10/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="yantoandri489@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>Andri</td>
				    <td>18/10/2017</td>
				    <td>18/10/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="yantoandri489@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>Andri</td>
				    <td>19/12/2017</td>
				    <td>19/12/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="yantoandri489@gmail.com" data-invoice-type="invoice" data-custom-email="sdfsdfsdf" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>مدرسه میلاد نور</td>
				    <td>01/11/2017</td>
				    <td>01/11/2017</td>
				    <td>receipt</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="re@asd.com" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>مدرسه میلاد نور</td>
				    <td>10/05/2017</td>
				    <td>10/05/2017</td>
				    <td>receipt</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="re@asd.com" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>مدرسه میلاد نور</td>
				    <td>01/11/2017</td>
				    <td>01/11/2017</td>
				    <td>receipt</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="re@asd.com" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>مدرسه میلاد نور</td>
				    <td>05/12/2017</td>
				    <td>28/11/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="re@asd.com" data-invoice-type="invoice" data-custom-email="sdfsdfsdf" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>مدرسه میلاد نور</td>
				    <td>18/10/2017</td>
				    <td>18/10/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="re@asd.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>مدرسه میلاد نور</td>
				    <td>18/10/2017</td>
				    <td>18/10/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="re@asd.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>مدرسه میلاد نور</td>
				    <td>19/12/2017</td>
				    <td>19/12/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="re@asd.com" data-invoice-type="invoice" data-custom-email="sdfsdfsdf" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>Andri</td>
				    <td>01/11/2017</td>
				    <td>01/11/2017</td>
				    <td>receipt</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="yantoandri489@gmail.com" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>Andri</td>
				    <td>10/05/2017</td>
				    <td>10/05/2017</td>
				    <td>receipt</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="yantoandri489@gmail.com" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>Andri</td>
				    <td>01/11/2017</td>
				    <td>01/11/2017</td>
				    <td>receipt</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="yantoandri489@gmail.com" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>Andri</td>
				    <td>05/12/2017</td>
				    <td>28/11/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="yantoandri489@gmail.com" data-invoice-type="invoice" data-custom-email="sdfsdfsdf" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>Andri</td>
				    <td>18/10/2017</td>
				    <td>18/10/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="yantoandri489@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>Andri</td>
				    <td>18/10/2017</td>
				    <td>18/10/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="yantoandri489@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>Andri</td>
				    <td>19/12/2017</td>
				    <td>19/12/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="yantoandri489@gmail.com" data-invoice-type="invoice" data-custom-email="sdfsdfsdf" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>مدرسه میلاد نور</td>
				    <td>01/11/2017</td>
				    <td>01/11/2017</td>
				    <td>receipt</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="re@asd.com" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>مدرسه میلاد نور</td>
				    <td>10/05/2017</td>
				    <td>10/05/2017</td>
				    <td>receipt</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="re@asd.com" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>مدرسه میلاد نور</td>
				    <td>01/11/2017</td>
				    <td>01/11/2017</td>
				    <td>receipt</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="re@asd.com" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>مدرسه میلاد نور</td>
				    <td>05/12/2017</td>
				    <td>28/11/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="re@asd.com" data-invoice-type="invoice" data-custom-email="sdfsdfsdf" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>مدرسه میلاد نور</td>
				    <td>18/10/2017</td>
				    <td>18/10/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="re@asd.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>مدرسه میلاد نور</td>
				    <td>18/10/2017</td>
				    <td>18/10/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="re@asd.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>مدرسه میلاد نور</td>
				    <td>19/12/2017</td>
				    <td>19/12/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="re@asd.com" data-invoice-type="invoice" data-custom-email="sdfsdfsdf" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>Andri</td>
				    <td>01/11/2017</td>
				    <td>01/11/2017</td>
				    <td>receipt</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="yantoandri489@gmail.com" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>Andri</td>
				    <td>10/05/2017</td>
				    <td>10/05/2017</td>
				    <td>receipt</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="yantoandri489@gmail.com" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>Andri</td>
				    <td>01/11/2017</td>
				    <td>01/11/2017</td>
				    <td>receipt</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="yantoandri489@gmail.com" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>Andri</td>
				    <td>05/12/2017</td>
				    <td>28/11/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="yantoandri489@gmail.com" data-invoice-type="invoice" data-custom-email="sdfsdfsdf" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>Andri</td>
				    <td>18/10/2017</td>
				    <td>18/10/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="yantoandri489@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>Andri</td>
				    <td>18/10/2017</td>
				    <td>18/10/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="yantoandri489@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>Andri</td>
				    <td>19/12/2017</td>
				    <td>19/12/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="yantoandri489@gmail.com" data-invoice-type="invoice" data-custom-email="sdfsdfsdf" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>Andri</td>
				    <td>01/11/2017</td>
				    <td>01/11/2017</td>
				    <td>receipt</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="yantoandri489@gmail.com" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>Andri</td>
				    <td>10/05/2017</td>
				    <td>10/05/2017</td>
				    <td>receipt</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="yantoandri489@gmail.com" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>Andri</td>
				    <td>01/11/2017</td>
				    <td>01/11/2017</td>
				    <td>receipt</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="yantoandri489@gmail.com" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>Andri</td>
				    <td>05/12/2017</td>
				    <td>28/11/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="yantoandri489@gmail.com" data-invoice-type="invoice" data-custom-email="sdfsdfsdf" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>Andri</td>
				    <td>18/10/2017</td>
				    <td>18/10/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="yantoandri489@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>Andri</td>
				    <td>18/10/2017</td>
				    <td>18/10/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="yantoandri489@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2</td>
					<td>Andri</td>
				    <td>19/12/2017</td>
				    <td>19/12/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2" data-email="yantoandri489@gmail.com" data-invoice-type="invoice" data-custom-email="sdfsdfsdf" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>200</td>
					<td>DINESH kumar</td>
				    <td>19/12/2017</td>
				    <td>19/12/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=200" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="200" data-email="bmtanushka@gmail.com" data-invoice-type="invoice" data-custom-email="sdfsdfsdf" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/200.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="200" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>200</td>
					<td>DINESH kumar</td>
				    <td>19/12/2017</td>
				    <td>19/12/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=200" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="200" data-email="bmtanushka@gmail.com" data-invoice-type="invoice" data-custom-email="sdfsdfsdf" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/200.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="200" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>200</td>
					<td>مدرسه میلاد نور</td>
				    <td>19/12/2017</td>
				    <td>19/12/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=200" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="200" data-email="re@asd.com" data-invoice-type="invoice" data-custom-email="sdfsdfsdf" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/200.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="200" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>200</td>
					<td>مدرسه میلاد نور</td>
				    <td>19/12/2017</td>
				    <td>19/12/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=200" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="200" data-email="re@asd.com" data-invoice-type="invoice" data-custom-email="sdfsdfsdf" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/200.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="200" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>200</td>
					<td>مدرسه میلاد نور</td>
				    <td>19/12/2017</td>
				    <td>19/12/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=200" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="200" data-email="re@asd.com" data-invoice-type="invoice" data-custom-email="sdfsdfsdf" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/200.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="200" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>200</td>
					<td>مدرسه میلاد نور</td>
				    <td>19/12/2017</td>
				    <td>19/12/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=200" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="200" data-email="re@asd.com" data-invoice-type="invoice" data-custom-email="sdfsdfsdf" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/200.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="200" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>20180001</td>
					<td>Deddy</td>
				    <td>31/01/2018</td>
				    <td>31/01/2018</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=20180001" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="20180001" data-email="deddy@interactive.co.id" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/20180001.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="20180001" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>21</td>
					<td>umar</td>
				    <td>15/03/2018</td>
				    <td>15/03/2018</td>
				    <td>receipt</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=21" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="21" data-email="uarain@gmail.com" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/21.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="21" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>212</td>
					<td>Cris</td>
				    <td>06/09/2017</td>
				    <td>13/09/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=212" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="212" data-email="cris@test.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/212.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="212" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>22</td>
					<td>Jmi dolson</td>
				    <td>14/03/2018</td>
				    <td>15/03/2018</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=22" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="22" data-email="768@7890.com" data-invoice-type="invoice" data-custom-email="asdada" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/22.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="22" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>22</td>
					<td>Jmi dolson</td>
				    <td>14/03/2018</td>
				    <td>15/03/2018</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=22" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="22" data-email="768@7890.com" data-invoice-type="invoice" data-custom-email="asdada" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/22.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="22" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>22</td>
					<td>Jmi dolson</td>
				    <td>14/03/2018</td>
				    <td>15/03/2018</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=22" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="22" data-email="768@7890.com" data-invoice-type="invoice" data-custom-email="asdada" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/22.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="22" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>22</td>
					<td>Jmi dolson</td>
				    <td>04/03/2018</td>
				    <td>08/03/2018</td>
				    <td>quote</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=22" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="22" data-email="768@7890.com" data-invoice-type="quote" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/22.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="22" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>22</td>
					<td>Jmi dolson</td>
				    <td>14/03/2018</td>
				    <td>15/03/2018</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=22" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="22" data-email="768@7890.com" data-invoice-type="invoice" data-custom-email="asdada" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/22.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="22" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>22</td>
					<td>Jmi dolson</td>
				    <td>14/03/2018</td>
				    <td>15/03/2018</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=22" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="22" data-email="768@7890.com" data-invoice-type="invoice" data-custom-email="asdada" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/22.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="22" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>22</td>
					<td>Jmi dolson</td>
				    <td>14/03/2018</td>
				    <td>15/03/2018</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=22" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="22" data-email="768@7890.com" data-invoice-type="invoice" data-custom-email="asdada" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/22.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="22" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>22</td>
					<td>Jmi dolson</td>
				    <td>04/03/2018</td>
				    <td>08/03/2018</td>
				    <td>quote</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=22" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="22" data-email="768@7890.com" data-invoice-type="quote" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/22.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="22" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>22</td>
					<td>pera peric</td>
				    <td>14/03/2018</td>
				    <td>15/03/2018</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=22" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="22" data-email="a@a.com" data-invoice-type="invoice" data-custom-email="asdada" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/22.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="22" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>22</td>
					<td>pera peric</td>
				    <td>14/03/2018</td>
				    <td>15/03/2018</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=22" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="22" data-email="a@a.com" data-invoice-type="invoice" data-custom-email="asdada" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/22.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="22" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>22</td>
					<td>pera peric</td>
				    <td>14/03/2018</td>
				    <td>15/03/2018</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=22" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="22" data-email="a@a.com" data-invoice-type="invoice" data-custom-email="asdada" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/22.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="22" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>22</td>
					<td>pera peric</td>
				    <td>04/03/2018</td>
				    <td>08/03/2018</td>
				    <td>quote</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=22" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="22" data-email="a@a.com" data-invoice-type="quote" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/22.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="22" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>22</td>
					<td>sdadknj</td>
				    <td>14/03/2018</td>
				    <td>15/03/2018</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=22" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="22" data-email="sda@fdsd.com" data-invoice-type="invoice" data-custom-email="asdada" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/22.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="22" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>22</td>
					<td>sdadknj</td>
				    <td>14/03/2018</td>
				    <td>15/03/2018</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=22" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="22" data-email="sda@fdsd.com" data-invoice-type="invoice" data-custom-email="asdada" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/22.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="22" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>22</td>
					<td>sdadknj</td>
				    <td>14/03/2018</td>
				    <td>15/03/2018</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=22" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="22" data-email="sda@fdsd.com" data-invoice-type="invoice" data-custom-email="asdada" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/22.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="22" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>22</td>
					<td>sdadknj</td>
				    <td>04/03/2018</td>
				    <td>08/03/2018</td>
				    <td>quote</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=22" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="22" data-email="sda@fdsd.com" data-invoice-type="quote" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/22.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="22" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>23</td>
					<td>Edgar</td>
				    <td>14/09/2017</td>
				    <td>15/09/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=23" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="23" data-email="ejguinan@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/23.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="23" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>23</td>
					<td>Edgar</td>
				    <td>14/09/2017</td>
				    <td>15/09/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=23" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="23" data-email="ejguinan@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/23.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="23" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>23</td>
					<td>Edgar</td>
				    <td>14/09/2017</td>
				    <td>15/09/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=23" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="23" data-email="ejguinan@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/23.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="23" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>23</td>
					<td>Edgar</td>
				    <td>14/09/2017</td>
				    <td>15/09/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=23" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="23" data-email="ejguinan@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/23.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="23" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>23232131221</td>
					<td>asd</td>
				    <td>19/02/2018</td>
				    <td>24/02/2018</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=23232131221" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="23232131221" data-email="christophersalame@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/23232131221.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="23232131221" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>23456</td>
					<td>jaydeep</td>
				    <td>01/11/2017</td>
				    <td>01/11/2017</td>
				    <td>receipt</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=23456" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="23456" data-email="dsa" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/23456.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="23456" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>235</td>
					<td>Ai</td>
				    <td>05/07/2017</td>
				    <td>13/07/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=235" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="235" data-email="aiii@teleworm.us" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/235.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="235" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>2389</td>
					<td>Frank</td>
				    <td>04/02/2018</td>
				    <td>14/02/2018</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=2389" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="2389" data-email="frank.johan@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/2389.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="2389" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>25</td>
					<td>rohit</td>
				    <td>22/02/2018</td>
				    <td>28/02/2018</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=25" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="25" data-email="gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/25.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="25" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>25</td>
					<td>bhanulab</td>
				    <td>22/02/2018</td>
				    <td>28/02/2018</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=25" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="25" data-email="bhanulab@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/25.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="25" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>266</td>
					<td>A1 Jobs</td>
				    <td>12/07/2017</td>
				    <td>12/07/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=266" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="266" data-email="admin@testcom" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/266.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="266" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>29993</td>
					<td>dsc</td>
				    <td>17/06/2017</td>
				    <td>17/06/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=29993" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="29993" data-email="add@dddw.dd" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/29993.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="29993" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>3</td>
					<td>Demo</td>
				    <td>18/12/2017</td>
				    <td>18/02/2018</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=3" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="3" data-email="demo@demo.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/3.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="3" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>3</td>
					<td>Demo</td>
				    <td>22/08/2017</td>
				    <td>23/08/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=3" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="3" data-email="demo@demo.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/3.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="3" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>3</td>
					<td>Demo</td>
				    <td>22/08/2017</td>
				    <td>23/08/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=3" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="3" data-email="demo@demo.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/3.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="3" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>3</td>
					<td>Frank</td>
				    <td>18/12/2017</td>
				    <td>18/02/2018</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=3" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="3" data-email="frank.johan@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/3.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="3" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>3</td>
					<td>Frank</td>
				    <td>22/08/2017</td>
				    <td>23/08/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=3" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="3" data-email="frank.johan@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/3.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="3" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>3</td>
					<td>Frank</td>
				    <td>22/08/2017</td>
				    <td>23/08/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=3" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="3" data-email="frank.johan@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/3.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="3" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>3</td>
					<td>James</td>
				    <td>18/12/2017</td>
				    <td>18/02/2018</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=3" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="3" data-email="seanwebdev@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/3.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="3" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>3</td>
					<td>James</td>
				    <td>22/08/2017</td>
				    <td>23/08/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=3" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="3" data-email="seanwebdev@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/3.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="3" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>3</td>
					<td>James</td>
				    <td>22/08/2017</td>
				    <td>23/08/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=3" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="3" data-email="seanwebdev@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/3.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="3" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>3</td>
					<td>James</td>
				    <td>18/12/2017</td>
				    <td>18/02/2018</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=3" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="3" data-email="seanwebdev@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/3.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="3" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>3</td>
					<td>James</td>
				    <td>22/08/2017</td>
				    <td>23/08/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=3" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="3" data-email="seanwebdev@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/3.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="3" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>3</td>
					<td>James</td>
				    <td>22/08/2017</td>
				    <td>23/08/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=3" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="3" data-email="seanwebdev@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/3.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="3" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>3600000</td>
					<td>aa</td>
				    <td>13/02/2018</td>
				    <td>15/02/2018</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=3600000" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="3600000" data-email="aaa@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/3600000.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="3600000" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>400,000</td>
					<td>Musa Semaganda</td>
				    <td>28/05/2017</td>
				    <td>28/06/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=400,000" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="400,000" data-email="musa@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/400,000.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="400,000" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>4276</td>
					<td>MCB Bank</td>
				    <td>18/06/2017</td>
				    <td>18/07/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=4276" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="4276" data-email="mcb@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/4276.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="4276" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43278</td>
					<td>Sudhakar BN</td>
				    <td>28/03/2017</td>
				    <td>28/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=43278" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43278" data-email="snkaverienterprises@gmail.com" data-invoice-type="invoice" data-custom-email="test bill" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43278.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43278" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43279</td>
					<td>Hans Peter</td>
				    <td>28/03/2017</td>
				    <td>28/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=43279" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43279" data-email="hans@spambog.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43279.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43279" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43280</td>
					<td>MHD ARFAN</td>
				    <td>28/03/2017</td>
				    <td>28/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=43280" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43280" data-email="flwebsol@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43280.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43280" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43281</td>
					<td>Julio Cruces Carvalll</td>
				    <td>28/03/2017</td>
				    <td>29/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=43281" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43281" data-email="julio.cruces.carvallo@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43281.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43281" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43282</td>
					<td>test</td>
				    <td>30/03/2017</td>
				    <td>30/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=43282" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43282" data-email="test" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43282.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43282" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43283</td>
					<td>magg</td>
				    <td>06/03/2017</td>
				    <td>16/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=43283" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43283" data-email="fsdd@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43283.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43283" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43284</td>
					<td>efw</td>
				    <td>28/03/2017</td>
				    <td>28/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=43284" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43284" data-email="jxv93448@psoxs.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43284.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43284" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43285</td>
					<td>Jose Pretzanzin</td>
				    <td>28/03/2017</td>
				    <td>31/03/2017</td>
				    <td>quote</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=43285" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43285" data-email="jose.pretz@gmail.com" data-invoice-type="quote" data-custom-email="estamos probando esto" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43285.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43285" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43286</td>
					<td>Lorenzen</td>
				    <td>29/03/2017</td>
				    <td>29/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=43286" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43286" data-email="lorenzen_limos@yahoo.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43286.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43286" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43287</td>
					<td>Makhija</td>
				    <td>29/03/2017</td>
				    <td>30/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=43287" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43287" data-email="a.makhija@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43287.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43287" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43288</td>
					<td>Nirmik</td>
				    <td>30/03/2017</td>
				    <td>31/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=43288" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43288" data-email="info@caronrent.net" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43288.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43288" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43289</td>
					<td>efw</td>
				    <td>29/03/2017</td>
				    <td>29/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=43289" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43289" data-email="jxv93448@psoxs.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43289.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43289" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43290</td>
					<td>mehdi</td>
				    <td>30/03/2017</td>
				    <td>30/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=43290" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43290" data-email="san.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43290.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43290" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43291</td>
					<td>efw</td>
				    <td>30/03/2017</td>
				    <td>01/04/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=43291" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43291" data-email="jxv93448@psoxs.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43291.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43291" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43291</td>
					<td>efw</td>
				    <td>30/03/2017</td>
				    <td>01/04/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=43291" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43291" data-email="jxv93448@psoxs.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43291.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43291" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43291</td>
					<td>efw</td>
				    <td>30/03/2017</td>
				    <td>01/04/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=43291" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43291" data-email="jxv93448@psoxs.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43291.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43291" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43291</td>
					<td>efw</td>
				    <td>30/03/2017</td>
				    <td>01/04/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=43291" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43291" data-email="jxv93448@psoxs.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43291.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43291" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43291</td>
					<td>efw</td>
				    <td>30/03/2017</td>
				    <td>01/04/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=43291" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43291" data-email="jxv93448@psoxs.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43291.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43291" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43291</td>
					<td>efw</td>
				    <td>30/03/2017</td>
				    <td>01/04/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=43291" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43291" data-email="jxv93448@psoxs.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43291.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43291" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43291</td>
					<td>efw</td>
				    <td>30/03/2017</td>
				    <td>01/04/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=43291" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43291" data-email="jxv93448@psoxs.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43291.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43291" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43291</td>
					<td>efw</td>
				    <td>30/03/2017</td>
				    <td>01/04/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=43291" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43291" data-email="jxv93448@psoxs.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43291.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43291" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43291</td>
					<td>efw</td>
				    <td>30/03/2017</td>
				    <td>01/04/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=43291" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43291" data-email="jxv93448@psoxs.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43291.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43291" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43291</td>
					<td>efw</td>
				    <td>30/03/2017</td>
				    <td>01/04/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=43291" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43291" data-email="jxv93448@psoxs.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43291.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43291" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43291</td>
					<td>efw</td>
				    <td>30/03/2017</td>
				    <td>01/04/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=43291" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43291" data-email="jxv93448@psoxs.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43291.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43291" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43291</td>
					<td>efw</td>
				    <td>30/03/2017</td>
				    <td>01/04/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=43291" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43291" data-email="jxv93448@psoxs.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43291.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43291" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43291</td>
					<td>efw</td>
				    <td>30/03/2017</td>
				    <td>01/04/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=43291" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43291" data-email="jxv93448@psoxs.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43291.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43291" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43291</td>
					<td>efw</td>
				    <td>30/03/2017</td>
				    <td>01/04/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=43291" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43291" data-email="jxv93448@psoxs.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43291.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43291" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43291</td>
					<td>efw</td>
				    <td>30/03/2017</td>
				    <td>01/04/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=43291" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43291" data-email="jxv93448@psoxs.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43291.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43291" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43291</td>
					<td>efw</td>
				    <td>30/03/2017</td>
				    <td>01/04/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=43291" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43291" data-email="jxv93448@psoxs.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43291.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43291" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43292</td>
					<td>efw</td>
				    <td>01/03/2017</td>
				    <td>30/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=43292" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43292" data-email="jxv93448@psoxs.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43292.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43292" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43292</td>
					<td>efw</td>
				    <td>01/03/2017</td>
				    <td>30/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=43292" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43292" data-email="jxv93448@psoxs.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43292.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43292" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43292</td>
					<td>efw</td>
				    <td>01/03/2017</td>
				    <td>30/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=43292" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43292" data-email="jxv93448@psoxs.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43292.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43292" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43292</td>
					<td>efw</td>
				    <td>01/03/2017</td>
				    <td>30/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=43292" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43292" data-email="jxv93448@psoxs.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43292.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43292" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43293</td>
					<td>mee</td>
				    <td>30/03/2017</td>
				    <td>30/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=43293" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43293" data-email="macnussolutions@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43293.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43293" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43293</td>
					<td>mee</td>
				    <td>30/03/2017</td>
				    <td>30/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=43293" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43293" data-email="macnussolutions@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43293.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43293" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43293</td>
					<td>mee</td>
				    <td>30/03/2017</td>
				    <td>30/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=43293" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43293" data-email="macnussolutions@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43293.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43293" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43293</td>
					<td>mee</td>
				    <td>30/03/2017</td>
				    <td>30/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=43293" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43293" data-email="macnussolutions@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43293.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43293" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43294</td>
					<td>zas</td>
				    <td>30/03/2017</td>
				    <td>30/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=43294" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43294" data-email="fgfdg" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43294.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43294" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43295</td>
					<td>zak saa</td>
				    <td>30/03/2017</td>
				    <td>30/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=43295" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43295" data-email="zak@gmail.com" data-invoice-type="invoice" data-custom-email="hello" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43295.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43295" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43296</td>
					<td>test</td>
				    <td>30/03/2017</td>
				    <td>30/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=43296" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43296" data-email="jaypatan2015@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43296.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43296" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43298</td>
					<td>Longjam</td>
				    <td>01/03/2017</td>
				    <td>28/02/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=43298" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43298" data-email="mjt_taurian@yahoo.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43298.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43298" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43299</td>
					<td>Joseph Oduor</td>
				    <td>01/03/2017</td>
				    <td>31/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=43299" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43299" data-email="joseph.obonyo@gmail.com" data-invoice-type="invoice" data-custom-email="joseph.obonyo@gmail.com" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43299.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43299" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43300</td>
					<td>vm.,fv</td>
				    <td>08/04/2017</td>
				    <td>08/04/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=43300" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43300" data-email="zayedabraham@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43300.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43300" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43301</td>
					<td>فهد العلي</td>
				    <td>01/04/2017</td>
				    <td>01/04/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=43301" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43301" data-email="dksa@hotmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43301.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43301" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43302</td>
					<td>Longjam</td>
				    <td>29/03/2017</td>
				    <td>03/04/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=43302" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43302" data-email="mjt_taurian@yahoo.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43302.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43302" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43303</td>
					<td>mehdi</td>
				    <td>04/04/2017</td>
				    <td>04/04/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=43303" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43303" data-email="san.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43303.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43303" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43304</td>
					<td>65</td>
				    <td>12/04/2017</td>
				    <td>27/03/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=43304" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43304" data-email="dfhg@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43304.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43304" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43305</td>
					<td>A1 Jobs</td>
				    <td>03/04/2017</td>
				    <td>03/04/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=43305" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43305" data-email="admin@testcom" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43305.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43305" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43306</td>
					<td>Melinda</td>
				    <td>03/04/2017</td>
				    <td>03/04/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=43306" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43306" data-email="mell@yahu.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43306.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43306" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43307</td>
					<td>A1 Jobs</td>
				    <td>03/04/2017</td>
				    <td>03/04/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=43307" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43307" data-email="admin@testcom" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43307.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43307" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43308</td>
					<td>A1 Jobs</td>
				    <td>04/04/2017</td>
				    <td>04/04/2017</td>
				    <td>receipt</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=43308" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43308" data-email="admin@testcom" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43308.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43308" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43309</td>
					<td>Joe b</td>
				    <td>05/04/2017</td>
				    <td>27/04/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=43309" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43309" data-email="ww@ww.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43309.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43309" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43310</td>
					<td>Longjam</td>
				    <td>04/04/2017</td>
				    <td>30/04/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=43310" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43310" data-email="mjt_taurian@yahoo.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43310.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43310" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43311</td>
					<td>asdasd</td>
				    <td>29/03/2017</td>
				    <td>12/04/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=43311" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43311" data-email="asdasdas" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43311.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43311" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43312</td>
					<td>Longjam</td>
				    <td>03/04/2017</td>
				    <td>03/04/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=43312" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43312" data-email="mjt_taurian@yahoo.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43312.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43312" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43313</td>
					<td>mee</td>
				    <td>04/04/2017</td>
				    <td>11/04/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=43313" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43313" data-email="macnussolutions@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43313.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43313" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43315</td>
					<td>q</td>
				    <td>13/04/2017</td>
				    <td>15/04/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=43315" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43315" data-email="q" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43315.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43315" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43316</td>
					<td>q</td>
				    <td>13/04/2017</td>
				    <td>26/04/2017</td>
				    <td>receipt</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=43316" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43316" data-email="qq" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43316.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43316" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43317</td>
					<td>mee</td>
				    <td>05/04/2017</td>
				    <td>13/04/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=43317" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43317" data-email="macnussolutions@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43317.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43317" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43318</td>
					<td>Mutua Test</td>
				    <td>05/04/2017</td>
				    <td>20/04/2017</td>
				    <td>quote</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=43318" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43318" data-email="tellam.com" data-invoice-type="quote" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43318.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43318" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43319</td>
					<td>qweqwe</td>
				    <td>29/03/2017</td>
				    <td>05/04/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=43319" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43319" data-email="qweqwe" data-invoice-type="invoice" data-custom-email="rr" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43319.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43319" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43320</td>
					<td>qwdqwd</td>
				    <td>03/04/2017</td>
				    <td>26/04/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=43320" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43320" data-email="qwdqwd" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43320.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43320" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43321</td>
					<td>A1 Jobs</td>
				    <td>28/04/2017</td>
				    <td>29/04/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=43321" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43321" data-email="admin@testcom" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43321.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43321" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43322</td>
					<td>Melinda</td>
				    <td>28/04/2017</td>
				    <td>29/04/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=43322" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43322" data-email="mell@yahu.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43322.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43322" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43323</td>
					<td>MHD ARFAN</td>
				    <td>28/04/2017</td>
				    <td>29/04/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=43323" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43323" data-email="flwebsol@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43323.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43323" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43324</td>
					<td>A1 Jobs</td>
				    <td>28/04/2017</td>
				    <td>29/04/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=43324" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43324" data-email="admin@testcom" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43324.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43324" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43325</td>
					<td>mee</td>
				    <td>28/04/2017</td>
				    <td>29/04/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=43325" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43325" data-email="macnussolutions@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43325.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43325" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43326</td>
					<td>A1 Jobs</td>
				    <td>28/04/2017</td>
				    <td>28/04/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=43326" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43326" data-email="admin@testcom" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43326.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43326" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43327</td>
					<td>A1 Jobs</td>
				    <td>28/04/2017</td>
				    <td>29/04/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=43327" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43327" data-email="admin@testcom" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43327.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43327" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43328</td>
					<td>A1 Jobs</td>
				    <td>28/04/2017</td>
				    <td>29/04/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=43328" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43328" data-email="admin@testcom" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43328.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43328" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43329</td>
					<td>Longjam</td>
				    <td>29/04/2017</td>
				    <td>30/04/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=43329" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43329" data-email="mjt_taurian@yahoo.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43329.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43329" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43330</td>
					<td>Mutua Test</td>
				    <td>29/04/2017</td>
				    <td>24/04/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=43330" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43330" data-email="tellam.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43330.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43330" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43331</td>
					<td>A1 Jobs</td>
				    <td>20/04/2017</td>
				    <td>18/04/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=43331" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43331" data-email="admin@testcom" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43331.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43331" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43332</td>
					<td>supp1</td>
				    <td>30/04/2017</td>
				    <td>23/04/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=43332" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43332" data-email="sismail34@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43332.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43332" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43333</td>
					<td>sdafasv</td>
				    <td>30/04/2017</td>
				    <td>30/04/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=43333" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43333" data-email="zxcv x" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43333.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43333" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43334</td>
					<td>Mohamed</td>
				    <td>27/02/2017</td>
				    <td>13/04/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=43334" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43334" data-email="maa@nozomit.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43334.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43334" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43335</td>
					<td>chiorag</td>
				    <td>01/05/2017</td>
				    <td>01/05/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=43335" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43335" data-email="chirag.333@rediffmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43335.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43335" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43335</td>
					<td>chiorag</td>
				    <td>01/05/2017</td>
				    <td>01/05/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=43335" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43335" data-email="chirag.333@rediffmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43335.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43335" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43335</td>
					<td>chiorag</td>
				    <td>01/05/2017</td>
				    <td>01/05/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=43335" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43335" data-email="chirag.333@rediffmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43335.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43335" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43335</td>
					<td>chiorag</td>
				    <td>01/05/2017</td>
				    <td>01/05/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=43335" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43335" data-email="chirag.333@rediffmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43335.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43335" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43336</td>
					<td>A1 Jobs</td>
				    <td>02/05/2017</td>
				    <td>05/05/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=43336" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43336" data-email="admin@testcom" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43336.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43336" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43337</td>
					<td>mehdi</td>
				    <td>03/05/2017</td>
				    <td>16/05/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=43337" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43337" data-email="san.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43337.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43337" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43337</td>
					<td>mehdi</td>
				    <td>03/05/2017</td>
				    <td>16/05/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=43337" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43337" data-email="san.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43337.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43337" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43337</td>
					<td>mehdi</td>
				    <td>03/05/2017</td>
				    <td>16/05/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=43337" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43337" data-email="san.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43337.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43337" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43337</td>
					<td>mehdi</td>
				    <td>03/05/2017</td>
				    <td>16/05/2017</td>
				    <td>receipt</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=43337" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43337" data-email="san.com" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43337.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43337" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43337</td>
					<td>mehdi</td>
				    <td>03/05/2017</td>
				    <td>16/05/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=43337" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43337" data-email="san.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43337.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43337" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43337</td>
					<td>mehdi</td>
				    <td>03/05/2017</td>
				    <td>16/05/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=43337" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43337" data-email="san.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43337.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43337" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43337</td>
					<td>mehdi</td>
				    <td>03/05/2017</td>
				    <td>16/05/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=43337" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43337" data-email="san.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43337.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43337" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43337</td>
					<td>mehdi</td>
				    <td>03/05/2017</td>
				    <td>16/05/2017</td>
				    <td>receipt</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=43337" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43337" data-email="san.com" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43337.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43337" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43337</td>
					<td>mehdi</td>
				    <td>03/05/2017</td>
				    <td>16/05/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=43337" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43337" data-email="san.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43337.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43337" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43337</td>
					<td>mehdi</td>
				    <td>03/05/2017</td>
				    <td>16/05/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=43337" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43337" data-email="san.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43337.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43337" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43337</td>
					<td>mehdi</td>
				    <td>03/05/2017</td>
				    <td>16/05/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=43337" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43337" data-email="san.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43337.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43337" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43337</td>
					<td>mehdi</td>
				    <td>03/05/2017</td>
				    <td>16/05/2017</td>
				    <td>receipt</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=43337" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43337" data-email="san.com" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43337.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43337" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43337</td>
					<td>mehdi</td>
				    <td>03/05/2017</td>
				    <td>16/05/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=43337" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43337" data-email="san.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43337.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43337" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43337</td>
					<td>mehdi</td>
				    <td>03/05/2017</td>
				    <td>16/05/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=43337" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43337" data-email="san.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43337.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43337" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43337</td>
					<td>mehdi</td>
				    <td>03/05/2017</td>
				    <td>16/05/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=43337" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43337" data-email="san.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43337.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43337" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43337</td>
					<td>mehdi</td>
				    <td>03/05/2017</td>
				    <td>16/05/2017</td>
				    <td>receipt</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=43337" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43337" data-email="san.com" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43337.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43337" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43338</td>
					<td>murat</td>
				    <td>17/05/2017</td>
				    <td>23/05/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=43338" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43338" data-email="mtezcan2010@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43338.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43338" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43339</td>
					<td>mehdi</td>
				    <td>02/05/2017</td>
				    <td>02/05/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=43339" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43339" data-email="san.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43339.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43339" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43340</td>
					<td>user user</td>
				    <td>02/05/2017</td>
				    <td>02/05/2017</td>
				    <td>quote</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=43340" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43340" data-email="user@example.com" data-invoice-type="quote" data-custom-email="user@example.com" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43340.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43340" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43341</td>
					<td>A1 Jobs</td>
				    <td>03/05/2017</td>
				    <td>04/05/2017</td>
				    <td>receipt</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=43341" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43341" data-email="admin@testcom" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43341.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43341" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43342</td>
					<td>Mutua Test</td>
				    <td>02/05/2017</td>
				    <td>02/05/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=43342" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43342" data-email="tellam.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43342.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43342" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43342</td>
					<td>Mutua Test</td>
				    <td>02/05/2017</td>
				    <td>02/05/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=43342" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43342" data-email="tellam.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43342.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43342" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43342</td>
					<td>Mutua Test</td>
				    <td>02/05/2017</td>
				    <td>02/05/2017</td>
				    <td>receipt</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=43342" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43342" data-email="tellam.com" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43342.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43342" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43342</td>
					<td>Mutua Test</td>
				    <td>02/05/2017</td>
				    <td>02/05/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=43342" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43342" data-email="tellam.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43342.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43342" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43342</td>
					<td>Mutua Test</td>
				    <td>02/05/2017</td>
				    <td>02/05/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=43342" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43342" data-email="tellam.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43342.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43342" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43342</td>
					<td>Mutua Test</td>
				    <td>02/05/2017</td>
				    <td>02/05/2017</td>
				    <td>receipt</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=43342" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43342" data-email="tellam.com" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43342.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43342" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43342</td>
					<td>Mutua Test</td>
				    <td>02/05/2017</td>
				    <td>02/05/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=43342" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43342" data-email="tellam.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43342.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43342" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43342</td>
					<td>Mutua Test</td>
				    <td>02/05/2017</td>
				    <td>02/05/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=43342" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43342" data-email="tellam.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43342.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43342" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43342</td>
					<td>Mutua Test</td>
				    <td>02/05/2017</td>
				    <td>02/05/2017</td>
				    <td>receipt</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=43342" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43342" data-email="tellam.com" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43342.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43342" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43343</td>
					<td>ss</td>
				    <td>10/05/2017</td>
				    <td>10/05/2017</td>
				    <td>receipt</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=43343" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43343" data-email="s@yahoo.com" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43343.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43343" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43344</td>
					<td>murat</td>
				    <td>03/05/2017</td>
				    <td>04/05/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=43344" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43344" data-email="mtezcan2010@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43344.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43344" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43345</td>
					<td>dxvdsf</td>
				    <td>03/05/2017</td>
				    <td>23/05/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=43345" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43345" data-email="dfsdfs" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43345.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43345" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43345</td>
					<td>dxvdsf</td>
				    <td>03/05/2017</td>
				    <td>23/05/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=43345" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43345" data-email="dfsdfs" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43345.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43345" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43345</td>
					<td>dxvdsf</td>
				    <td>03/05/2017</td>
				    <td>23/05/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=43345" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43345" data-email="dfsdfs" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43345.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43345" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43345</td>
					<td>dxvdsf</td>
				    <td>03/05/2017</td>
				    <td>23/05/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=43345" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43345" data-email="dfsdfs" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43345.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43345" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43346</td>
					<td>Longjam</td>
				    <td>05/05/2017</td>
				    <td>05/05/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=43346" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43346" data-email="mjt_taurian@yahoo.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43346.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43346" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43346</td>
					<td>Longjam</td>
				    <td>05/05/2017</td>
				    <td>05/05/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=43346" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43346" data-email="mjt_taurian@yahoo.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43346.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43346" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43346</td>
					<td>Elann</td>
				    <td>05/05/2017</td>
				    <td>05/05/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=43346" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43346" data-email="cdksdk" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43346.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43346" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43346</td>
					<td>Elann</td>
				    <td>05/05/2017</td>
				    <td>05/05/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=43346" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43346" data-email="cdksdk" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43346.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43346" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>43347</td>
					<td>A1 Jobs</td>
				    <td>10/05/2017</td>
				    <td>11/05/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=43347" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="43347" data-email="admin@testcom" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/43347.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="43347" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>4444</td>
					<td>mee</td>
				    <td>07/10/2017</td>
				    <td>11/10/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=4444" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="4444" data-email="gginallin@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/4444.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="4444" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>5</td>
					<td>hj</td>
				    <td>08/04/2018</td>
				    <td>15/03/2018</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=5" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="5" data-email="katara.atul@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/5.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="5" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>5</td>
					<td>hj</td>
				    <td>25/10/2017</td>
				    <td>28/10/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=5" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="5" data-email="katara.atul@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/5.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="5" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>5</td>
					<td>hj</td>
				    <td>25/10/2017</td>
				    <td>28/10/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=5" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="5" data-email="katara.atul@gmail.com" data-invoice-type="invoice" data-custom-email="test@gmail.com" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/5.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="5" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>5</td>
					<td>hj</td>
				    <td>25/09/2017</td>
				    <td>25/09/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=5" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="5" data-email="katara.atul@gmail.com" data-invoice-type="invoice" data-custom-email="3" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/5.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="5" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>5</td>
					<td>hj</td>
				    <td>08/04/2018</td>
				    <td>15/03/2018</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=5" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="5" data-email="katara.atul@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/5.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="5" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>5</td>
					<td>hj</td>
				    <td>08/04/2018</td>
				    <td>15/03/2018</td>
				    <td>receipt</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=5" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="5" data-email="katara.atul@gmail.com" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/5.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="5" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>5</td>
					<td>rupa</td>
				    <td>08/04/2018</td>
				    <td>15/03/2018</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=5" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="5" data-email="rupa@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/5.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="5" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>5</td>
					<td>rupa</td>
				    <td>25/10/2017</td>
				    <td>28/10/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=5" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="5" data-email="rupa@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/5.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="5" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>5</td>
					<td>rupa</td>
				    <td>25/10/2017</td>
				    <td>28/10/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=5" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="5" data-email="rupa@gmail.com" data-invoice-type="invoice" data-custom-email="test@gmail.com" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/5.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="5" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>5</td>
					<td>rupa</td>
				    <td>25/09/2017</td>
				    <td>25/09/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=5" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="5" data-email="rupa@gmail.com" data-invoice-type="invoice" data-custom-email="3" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/5.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="5" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>5</td>
					<td>rupa</td>
				    <td>08/04/2018</td>
				    <td>15/03/2018</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=5" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="5" data-email="rupa@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/5.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="5" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>5</td>
					<td>rupa</td>
				    <td>08/04/2018</td>
				    <td>15/03/2018</td>
				    <td>receipt</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=5" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="5" data-email="rupa@gmail.com" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/5.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="5" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>5</td>
					<td>CSS GROUP</td>
				    <td>08/04/2018</td>
				    <td>15/03/2018</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=5" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="5" data-email="kevin@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/5.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="5" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>5</td>
					<td>CSS GROUP</td>
				    <td>25/10/2017</td>
				    <td>28/10/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=5" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="5" data-email="kevin@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/5.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="5" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>5</td>
					<td>CSS GROUP</td>
				    <td>25/10/2017</td>
				    <td>28/10/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=5" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="5" data-email="kevin@gmail.com" data-invoice-type="invoice" data-custom-email="test@gmail.com" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/5.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="5" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>5</td>
					<td>CSS GROUP</td>
				    <td>25/09/2017</td>
				    <td>25/09/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=5" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="5" data-email="kevin@gmail.com" data-invoice-type="invoice" data-custom-email="3" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/5.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="5" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>5</td>
					<td>CSS GROUP</td>
				    <td>08/04/2018</td>
				    <td>15/03/2018</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=5" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="5" data-email="kevin@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/5.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="5" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>5</td>
					<td>CSS GROUP</td>
				    <td>08/04/2018</td>
				    <td>15/03/2018</td>
				    <td>receipt</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=5" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="5" data-email="kevin@gmail.com" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/5.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="5" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>5</td>
					<td>Ketanbhai</td>
				    <td>08/04/2018</td>
				    <td>15/03/2018</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=5" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="5" data-email="test@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/5.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="5" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>5</td>
					<td>Ketanbhai</td>
				    <td>25/10/2017</td>
				    <td>28/10/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=5" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="5" data-email="test@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/5.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="5" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>5</td>
					<td>Ketanbhai</td>
				    <td>25/10/2017</td>
				    <td>28/10/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=5" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="5" data-email="test@gmail.com" data-invoice-type="invoice" data-custom-email="test@gmail.com" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/5.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="5" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>5</td>
					<td>Ketanbhai</td>
				    <td>25/09/2017</td>
				    <td>25/09/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=5" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="5" data-email="test@gmail.com" data-invoice-type="invoice" data-custom-email="3" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/5.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="5" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>5</td>
					<td>Ketanbhai</td>
				    <td>08/04/2018</td>
				    <td>15/03/2018</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=5" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="5" data-email="test@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/5.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="5" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>5</td>
					<td>Ketanbhai</td>
				    <td>08/04/2018</td>
				    <td>15/03/2018</td>
				    <td>receipt</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=5" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="5" data-email="test@gmail.com" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/5.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="5" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>5</td>
					<td>marcilio</td>
				    <td>08/04/2018</td>
				    <td>15/03/2018</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=5" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="5" data-email="contato@grupozion.com.br" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/5.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="5" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>5</td>
					<td>marcilio</td>
				    <td>25/10/2017</td>
				    <td>28/10/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=5" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="5" data-email="contato@grupozion.com.br" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/5.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="5" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>5</td>
					<td>marcilio</td>
				    <td>25/10/2017</td>
				    <td>28/10/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=5" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="5" data-email="contato@grupozion.com.br" data-invoice-type="invoice" data-custom-email="test@gmail.com" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/5.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="5" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>5</td>
					<td>marcilio</td>
				    <td>25/09/2017</td>
				    <td>25/09/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=5" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="5" data-email="contato@grupozion.com.br" data-invoice-type="invoice" data-custom-email="3" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/5.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="5" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>5</td>
					<td>marcilio</td>
				    <td>08/04/2018</td>
				    <td>15/03/2018</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=5" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="5" data-email="contato@grupozion.com.br" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/5.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="5" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>5</td>
					<td>marcilio</td>
				    <td>08/04/2018</td>
				    <td>15/03/2018</td>
				    <td>receipt</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=5" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="5" data-email="contato@grupozion.com.br" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/5.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="5" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>5</td>
					<td>Ketanbhai</td>
				    <td>08/04/2018</td>
				    <td>15/03/2018</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=5" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="5" data-email="test@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/5.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="5" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>5</td>
					<td>Ketanbhai</td>
				    <td>25/10/2017</td>
				    <td>28/10/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=5" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="5" data-email="test@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/5.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="5" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>5</td>
					<td>Ketanbhai</td>
				    <td>25/10/2017</td>
				    <td>28/10/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=5" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="5" data-email="test@gmail.com" data-invoice-type="invoice" data-custom-email="test@gmail.com" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/5.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="5" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>5</td>
					<td>Ketanbhai</td>
				    <td>25/09/2017</td>
				    <td>25/09/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=5" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="5" data-email="test@gmail.com" data-invoice-type="invoice" data-custom-email="3" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/5.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="5" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>5</td>
					<td>Ketanbhai</td>
				    <td>08/04/2018</td>
				    <td>15/03/2018</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=5" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="5" data-email="test@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/5.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="5" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>5</td>
					<td>Ketanbhai</td>
				    <td>08/04/2018</td>
				    <td>15/03/2018</td>
				    <td>receipt</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=5" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="5" data-email="test@gmail.com" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/5.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="5" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>5</td>
					<td>marcilio</td>
				    <td>08/04/2018</td>
				    <td>15/03/2018</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=5" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="5" data-email="contato@grupozion.com.br" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/5.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="5" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>5</td>
					<td>marcilio</td>
				    <td>25/10/2017</td>
				    <td>28/10/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=5" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="5" data-email="contato@grupozion.com.br" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/5.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="5" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>5</td>
					<td>marcilio</td>
				    <td>25/10/2017</td>
				    <td>28/10/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=5" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="5" data-email="contato@grupozion.com.br" data-invoice-type="invoice" data-custom-email="test@gmail.com" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/5.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="5" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>5</td>
					<td>marcilio</td>
				    <td>25/09/2017</td>
				    <td>25/09/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=5" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="5" data-email="contato@grupozion.com.br" data-invoice-type="invoice" data-custom-email="3" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/5.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="5" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>5</td>
					<td>marcilio</td>
				    <td>08/04/2018</td>
				    <td>15/03/2018</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=5" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="5" data-email="contato@grupozion.com.br" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/5.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="5" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>5</td>
					<td>marcilio</td>
				    <td>08/04/2018</td>
				    <td>15/03/2018</td>
				    <td>receipt</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=5" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="5" data-email="contato@grupozion.com.br" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/5.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="5" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>5</td>
					<td>Cris</td>
				    <td>08/04/2018</td>
				    <td>15/03/2018</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=5" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="5" data-email="cris@test.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/5.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="5" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>5</td>
					<td>Cris</td>
				    <td>25/10/2017</td>
				    <td>28/10/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=5" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="5" data-email="cris@test.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/5.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="5" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>5</td>
					<td>Cris</td>
				    <td>25/10/2017</td>
				    <td>28/10/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=5" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="5" data-email="cris@test.com" data-invoice-type="invoice" data-custom-email="test@gmail.com" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/5.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="5" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>5</td>
					<td>Cris</td>
				    <td>25/09/2017</td>
				    <td>25/09/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=5" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="5" data-email="cris@test.com" data-invoice-type="invoice" data-custom-email="3" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/5.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="5" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>5</td>
					<td>Cris</td>
				    <td>08/04/2018</td>
				    <td>15/03/2018</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=5" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="5" data-email="cris@test.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/5.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="5" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>5</td>
					<td>Cris</td>
				    <td>08/04/2018</td>
				    <td>15/03/2018</td>
				    <td>receipt</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=5" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="5" data-email="cris@test.com" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/5.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="5" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>5</td>
					<td>marcilio</td>
				    <td>08/04/2018</td>
				    <td>15/03/2018</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=5" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="5" data-email="contato@grupozion.com.br" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/5.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="5" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>5</td>
					<td>marcilio</td>
				    <td>25/10/2017</td>
				    <td>28/10/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=5" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="5" data-email="contato@grupozion.com.br" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/5.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="5" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>5</td>
					<td>marcilio</td>
				    <td>25/10/2017</td>
				    <td>28/10/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=5" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="5" data-email="contato@grupozion.com.br" data-invoice-type="invoice" data-custom-email="test@gmail.com" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/5.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="5" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>5</td>
					<td>marcilio</td>
				    <td>25/09/2017</td>
				    <td>25/09/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=5" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="5" data-email="contato@grupozion.com.br" data-invoice-type="invoice" data-custom-email="3" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/5.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="5" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>5</td>
					<td>marcilio</td>
				    <td>08/04/2018</td>
				    <td>15/03/2018</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=5" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="5" data-email="contato@grupozion.com.br" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/5.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="5" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>5</td>
					<td>marcilio</td>
				    <td>08/04/2018</td>
				    <td>15/03/2018</td>
				    <td>receipt</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=5" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="5" data-email="contato@grupozion.com.br" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/5.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="5" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>54</td>
					<td>Cris</td>
				    <td>12/09/2017</td>
				    <td>13/09/2017</td>
				    <td>receipt</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=54" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="54" data-email="cris@test.com" data-invoice-type="receipt" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/54.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="54" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>5428</td>
					<td>James</td>
				    <td>25/04/2018</td>
				    <td>09/04/2018</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=5428" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="5428" data-email="seanwebdev@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/5428.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="5428" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>55555</td>
					<td>Customer1</td>
				    <td>14/12/2017</td>
				    <td>21/12/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=55555" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="55555" data-email="customer@customer.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/55555.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="55555" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>5652</td>
					<td>Carlos Manuel Cabrera Pérez</td>
				    <td>08/06/2017</td>
				    <td>09/06/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=5652" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="5652" data-email="carloscabrera24@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/5652.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="5652" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>6</td>
					<td>Jitendra</td>
				    <td>30/11/2017</td>
				    <td>14/12/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=6" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="6" data-email="hello@hi.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/6.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="6" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>6</td>
					<td>Jitendra</td>
				    <td>03/01/2018</td>
				    <td>24/01/2018</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=6" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="6" data-email="hello@hi.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/6.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="6" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>6</td>
					<td>Jitendra</td>
				    <td>03/01/2018</td>
				    <td>24/01/2018</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=6" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="6" data-email="hello@hi.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/6.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="6" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>6</td>
					<td>ghc</td>
				    <td>30/11/2017</td>
				    <td>14/12/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=6" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="6" data-email="fcc" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/6.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="6" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>6</td>
					<td>ghc</td>
				    <td>03/01/2018</td>
				    <td>24/01/2018</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=6" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="6" data-email="fcc" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/6.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="6" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>6</td>
					<td>ghc</td>
				    <td>03/01/2018</td>
				    <td>24/01/2018</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=6" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="6" data-email="fcc" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/6.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="6" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>6</td>
					<td>ddd</td>
				    <td>30/11/2017</td>
				    <td>14/12/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=6" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="6" data-email="sa@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/6.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="6" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>6</td>
					<td>ddd</td>
				    <td>03/01/2018</td>
				    <td>24/01/2018</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=6" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="6" data-email="sa@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/6.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="6" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>6</td>
					<td>ddd</td>
				    <td>03/01/2018</td>
				    <td>24/01/2018</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=6" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="6" data-email="sa@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/6.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="6" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>6</td>
					<td>ddd</td>
				    <td>30/11/2017</td>
				    <td>14/12/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=6" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="6" data-email="sa@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/6.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="6" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>6</td>
					<td>ddd</td>
				    <td>03/01/2018</td>
				    <td>24/01/2018</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=6" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="6" data-email="sa@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/6.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="6" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>6</td>
					<td>ddd</td>
				    <td>03/01/2018</td>
				    <td>24/01/2018</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=6" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="6" data-email="sa@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/6.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="6" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>6000</td>
					<td>Edgar</td>
				    <td>28/08/2017</td>
				    <td>28/08/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=6000" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="6000" data-email="ejguinan@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/6000.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="6000" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>66</td>
					<td>Kingsley Onwuemenyi</td>
				    <td>20/01/2018</td>
				    <td>20/02/2018</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=66" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="66" data-email="digikings@yahoo.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/66.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="66" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>753</td>
					<td>eshan</td>
				    <td>08/02/2018</td>
				    <td>20/02/2018</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=753" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="753" data-email="linkplusbd@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/753.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="753" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>84848</td>
					<td>Nauman</td>
				    <td>08/04/2018</td>
				    <td>08/04/2018</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=84848" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="84848" data-email="kdfjsdlf" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/84848.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="84848" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>8989</td>
					<td>mehdi</td>
				    <td>25/05/2017</td>
				    <td>25/05/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=8989" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="8989" data-email="san.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/8989.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="8989" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>954</td>
					<td>Ram Kumar</td>
				    <td>03/01/2018</td>
				    <td>04/01/2018</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=954" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="954" data-email="ramkumar@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/954.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="954" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>9898</td>
					<td>Kamlesh Nishad</td>
				    <td>30/07/2017</td>
				    <td>30/07/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=9898" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="9898" data-email="humbolt28@gmail.com" data-invoice-type="invoice" data-custom-email="humbolt28@gmail.com" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/9898.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="9898" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>989898</td>
					<td>abbas</td>
				    <td>18/07/2017</td>
				    <td>01/08/2017</td>
				    <td>invoice</td>
				<td><span class="label label-success">paid</span></td>
				    <td><a href="invoice-edit.php?id=989898" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="989898" data-email="hkjg@chjg" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/989898.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="989898" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>heylo</td>
					<td>Frank</td>
				    <td>23/11/2017</td>
				    <td>23/11/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=heylo" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="heylo" data-email="frank.johan@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/heylo.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="heylo" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>qwerfg</td>
					<td>ewrthg</td>
				    <td>02/09/2017</td>
				    <td>09/09/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=qwerfg" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="qwerfg" data-email="sdfR@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/qwerfg.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="qwerfg" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>swsws</td>
					<td>123</td>
				    <td>12/03/2017</td>
				    <td>12/04/2017</td>
				    <td>quote</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=swsws" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="swsws" data-email="12312" data-invoice-type="quote" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/swsws.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="swsws" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>TKS-43348</td>
					<td>mee</td>
				    <td>07/05/2017</td>
				    <td>07/05/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=TKS-43348" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="TKS-43348" data-email="macnussolutions@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/TKS-43348.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="TKS-43348" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>TKS-43348</td>
					<td>mee</td>
				    <td>07/05/2017</td>
				    <td>07/05/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=TKS-43348" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="TKS-43348" data-email="macnussolutions@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/TKS-43348.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="TKS-43348" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>TKS-43348</td>
					<td>mee</td>
				    <td>07/05/2017</td>
				    <td>07/05/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=TKS-43348" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="TKS-43348" data-email="macnussolutions@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/TKS-43348.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="TKS-43348" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>TKS-43348</td>
					<td>mee</td>
				    <td>07/05/2017</td>
				    <td>07/05/2017</td>
				    <td>quote</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=TKS-43348" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="TKS-43348" data-email="macnussolutions@gmail.com" data-invoice-type="quote" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/TKS-43348.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="TKS-43348" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>TKS-43348</td>
					<td>mee</td>
				    <td>07/05/2017</td>
				    <td>07/05/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=TKS-43348" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="TKS-43348" data-email="macnussolutions@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/TKS-43348.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="TKS-43348" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>TKS-43348</td>
					<td>mee</td>
				    <td>07/05/2017</td>
				    <td>07/05/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=TKS-43348" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="TKS-43348" data-email="macnussolutions@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/TKS-43348.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="TKS-43348" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>TKS-43348</td>
					<td>mee</td>
				    <td>07/05/2017</td>
				    <td>07/05/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=TKS-43348" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="TKS-43348" data-email="macnussolutions@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/TKS-43348.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="TKS-43348" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>TKS-43348</td>
					<td>mee</td>
				    <td>07/05/2017</td>
				    <td>07/05/2017</td>
				    <td>quote</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=TKS-43348" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="TKS-43348" data-email="macnussolutions@gmail.com" data-invoice-type="quote" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/TKS-43348.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="TKS-43348" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>TKS-43348</td>
					<td>mee</td>
				    <td>07/05/2017</td>
				    <td>07/05/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=TKS-43348" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="TKS-43348" data-email="macnussolutions@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/TKS-43348.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="TKS-43348" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>TKS-43348</td>
					<td>mee</td>
				    <td>07/05/2017</td>
				    <td>07/05/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=TKS-43348" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="TKS-43348" data-email="macnussolutions@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/TKS-43348.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="TKS-43348" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>TKS-43348</td>
					<td>mee</td>
				    <td>07/05/2017</td>
				    <td>07/05/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=TKS-43348" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="TKS-43348" data-email="macnussolutions@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/TKS-43348.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="TKS-43348" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>TKS-43348</td>
					<td>mee</td>
				    <td>07/05/2017</td>
				    <td>07/05/2017</td>
				    <td>quote</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=TKS-43348" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="TKS-43348" data-email="macnussolutions@gmail.com" data-invoice-type="quote" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/TKS-43348.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="TKS-43348" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>TKS-43348</td>
					<td>mee</td>
				    <td>07/05/2017</td>
				    <td>07/05/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=TKS-43348" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="TKS-43348" data-email="macnussolutions@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/TKS-43348.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="TKS-43348" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>TKS-43348</td>
					<td>mee</td>
				    <td>07/05/2017</td>
				    <td>07/05/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=TKS-43348" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="TKS-43348" data-email="macnussolutions@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/TKS-43348.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="TKS-43348" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>TKS-43348</td>
					<td>mee</td>
				    <td>07/05/2017</td>
				    <td>07/05/2017</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=TKS-43348" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="TKS-43348" data-email="macnussolutions@gmail.com" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/TKS-43348.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="TKS-43348" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>TKS-43348</td>
					<td>mee</td>
				    <td>07/05/2017</td>
				    <td>07/05/2017</td>
				    <td>quote</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=TKS-43348" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="TKS-43348" data-email="macnussolutions@gmail.com" data-invoice-type="quote" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/TKS-43348.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="TKS-43348" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			
				<tr>
					<td>unique</td>
					<td>unique</td>
				    <td>05/01/2018</td>
				    <td>05/01/2018</td>
				    <td>invoice</td>
				<td><span class="label label-info">open</span></td>
				    <td><a href="invoice-edit.php?id=unique" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="unique" data-email="unique@unique" data-invoice-type="invoice" data-custom-email="" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="invoices/unique.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="unique" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			</tr></tbody></table>			</div>
		</div>
	</div>
<div>

<div id="delete_invoice" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Delete Invoice</h4>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to delete this invoice?</p>
      </div>
      <div class="modal-footer">
        <button type="button" data-dismiss="modal" class="btn btn-primary" id="delete">Delete</button>
		<button type="button" data-dismiss="modal" class="btn">Cancel</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

	</div>
    <!-- page content -->

@endsection

@section('extra_script')

   
@endsection