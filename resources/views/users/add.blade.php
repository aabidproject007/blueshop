@extends('layouts.main')
@section('title')
Start Page
@endsection

@section('content')

    <!-- page content -->
    <!--<div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Users Management</h3>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Create Users</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <ul class="dropdown-menu" role="menu">

                                    </ul>
                                </li>

                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <form class="form-horizontal form-label-left" method="post" action="{{route('admin_add')}}">
                                {{csrf_field()}}

                                <span class="section">User Info</span>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Full Name <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="full-name" name="name" data-validation="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Email<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="email" id="email" name="email" data-validation="required email" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Password</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="password" class="form-control col-md-7 col-xs-12" data-validation="required" type="password" name="password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Role</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <select class="form-control" name="role" data-validation="required">
                                            <option value="">Select Role</option>
                                            <option value="0">Super Admin </option>
                                            <option value="1"> Admin </option>
                                            <option value="2">Sales Person </option>
                                            

                                        </select>
                                    </div>
                                </div>
                              

                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-3">
                                        <button type="submit" class="btn btn-primary">Cancel</button>
                                        <button id="send" type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <h1>Add User</h1>
<hr>

<div id="response" class="alert alert-success" style="display:none;">
	<a href="#" class="close" data-dismiss="alert">&times;</a>
	<div class="message"></div>
</div>
						
<div class="row">
	<div class="col-xs-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4>User Information</h4>
			</div>
			<div class="panel-body form-group form-group-sm">
				<!--<form method="post" id="add_user">-->
				  <form class="form-horizontal form-label-left" id="add_user" method="post" action="{{route('admin_add')}}">
                                {{csrf_field()}}
					<input type="hidden" name="action" value="add_user">

					<div class="row">
						<div class="col-xs-4">
							<input type="text" id="name" class="form-control margin-bottom required" name="name" placeholder="Name">
						</div>
						
						<div class="col-xs-4">
							<input type="text" id="email" class="form-control margin-bottom required" name="email" placeholder="Enter user's email address">
						</div>
						<div class="col-xs-4">
							<input type="password" id="password"  class="form-control required" name="Unknown." id="password" placeholder="Enter user's password">
						</div>
					</div>

					<!--<div class="row">
						<div class="col-xs-4">
							<input type="text" class="form-control" name="phone" placeholder="Enter user's phone number">
						</div>
						
					</div>-->
					<div class="row">
						<div class="col-xs-4">
							<select class="form-control item-select required" id="role"  name="role" >
                                            <option value="">Select Role</option>
                                            <option value="0">Super Admin </option>
                                            <option value="1"> Admin </option>
                                            <option value="2">Sales Person </option>
                                            

                                        </select>
						</div>
						
					</div>

					<div class="row">
						<div class="col-xs-12 margin-top btn-group">
							<input type="submit" id="action_add_user" class="btn btn-success float-right" value="Add user" data-loading-text="Adding...">
							<!-- <button  id="action_add_user" type="submit" class="btn btn-success float-right" data-loading-text="Adding...">Add user</button>-->
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
    <!-- page content -->

@endsection
@section('extra_script')
<script>
$(document).ready(function() {
$("#action_add_user").click(function(e) {
		e.preventDefault();
	    actionAddUser();
	});
	function actionAddUser() {

		var errorCounter = validateForm();

		if (errorCounter > 0) {
		    $("#response").removeClass("alert-success").addClass("alert-warning").fadeIn();
		    $("#response .message").html("<strong>Error</strong>: It appear's you have forgotten to complete something!");
		    $("html, body").animate({ scrollTop: $('#response').offset().top }, 1000);
		} else {

			$(".required").parent().removeClass("has-error");

			var $btn = $("#action_add_user").button("loading");
					var $btn = $("#action_add_user").button("loading");
			 var name = $('#name').val();
                var email = $('#email').val();
                var password = $('#password').val();
                var role = $('#role').val();

			$.ajax({

				url: "{{route('admin_add')}}",
				type: 'POST',
			/*	 data: {name: name, email: email, password: password, role: role,_token: '{{ csrf_token() }}'},*/
				data: $("#add_user").serialize(),
				dataType: 'json',
				success: function(data){
					if(data.error!='1')
					{
							$("#response .message").html("<strong>" + data.status + "</strong>: " + data.message);
					$("#response").removeClass("alert-warning").addClass("alert-success").fadeIn();
					$("html, body").animate({ scrollTop: $('#response').offset().top }, 1000);
						$btn.button("reset");
					}
					else{
						
						$("#response .message").html("<strong>" + data.status + "</strong>: " + data.message);
					$("#response").removeClass("alert-success").addClass("alert-warning").fadeIn();
					$("html, body").animate({ scrollTop: $('#response').offset().top }, 1000);
					$btn.button("reset");
					}
				
				
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