@section('page_title', 'Need help? Contact us - Buypowernow - Easy payment for PHCN Services')
@extends('layouts.app')
@section('content')
<div class="page container wrapper">
    <div class="row">
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
        <!-- Include all compiled plugins (below), or include individual files as needed -->

      
        <!--Header  -->
        <div class="container wrapper header">
            <div class="row">
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="logo col-xs-4 col-xs-offset-2">
                        <a href="/"><img src="/resources/frontend2/images/logo-white.png" /></a>
                    </div>
                </div>
            </div>
        </div>
        <!--End Header  -->
		<!--Main Site  -->
		<div class="container wrapper inner-main">


			<!-- <div class="col-lg-8 col-md-8 col-xs-12  main" style="margin-bottom: 10px; padding: 0px 0px 0px 0px; border-radius: 0px; ">
	<a href="/car-insurance">
		<img src="resources/adverts/910214802.jpg" style="width: 100%">
	</a>
</div> -->
			<!-- <div class="col-lg-8 col-md-8 col-xs-12  main"> -->
			<div class="col-lg-12 col-md-12 col-xs-12  ">
				<div>
					<div class="panel panel-default">
						<div class="panel-heading">
							Contact Us Today!
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-sm-4">
									<span>
										<i class="glyphicon glyphicon-phone"></i> Phone:</strong>
										08138752358
									</span>
								</div>
								<div class="col-sm-4">
									<span>
										<i class="glyphicon glyphicon-envelope"></i> Email:</strong> support@vtpass.com
									</span>
								</div>
								<div class="col-sm-4">
									<address>
										<strong>
											Broadshift Technologies Limited.
										</strong>
										21A, Muyibat Oyefusi Cresent,
										Omole Phase 1, Ikeja,
										Lagos, Nigeria.
										<!-- 320 Odusanmi Street, Ogba<br>
								Ikeja, Lagos<br> -->
									</address>
								</div>
							</div>
							<form class="form" action="https://vtpass.com/contact" accept-charset="UTF-8" class="form-horizontal" id="contact_form">
								<div class="row">
									<div class="col-sm-4">
										<div class="form-group">
											<div class="inputGroupContainer">
												<div class="input-group">
													<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
													<input name="name" required placeholder="Enter Name" class="form-control" type="text">
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="form-group">
											<div class="inputGroupContainer">
												<div class="input-group">
													<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
													<input name="email" required placeholder="Enter Email" class="form-control" type="text">
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="form-group">
											<div class="inputGroupContainer">
												<div class="input-group">
													<span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
													<input name="phone" required placeholder="08138752358" class="form-control" type="text">
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-12">
										<div class="form-group">
											<div class=" ">
												<div class=" ">
													<!-- <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span> -->
													<textarea class="form-control" rows="7" name="message" placeholder="Your Message"></textarea>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="">
										<button type="submit" class="btn btn-info pull-right form-control">Send <span class="glyphicon glyphicon-send"></span></button>
									</div>
								</div>
							</form>
						</div>
					</div>

				</div>
			</div>
			<div class="modal fade" id="referAfriend" tab/="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header" style="background-color: #1e87e4;">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title" id="myModalLabel" style="font-size: 20px;color: white;font-style: bold;">Refer a friend</h4>
						</div>
						<div class="modal-body" style="text-align: center; align-content: center;">
							<a href="/login" class="btn btn-success btn-lg" style="margin-bottom: 10px;">Please Login to Refer a Friend</a><br>
							<a href="/register">Don't Have an account yet? Please Register</a>
							<!-- </div>  -->
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--End Main Site  -->
		@endsection