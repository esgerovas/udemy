@extends("layouts.admin_app")
@section('content')
<section id="allCourse">
	<style type="text/css">
		textarea{
				resize: none;
				border: none;
				background-color: transparent;
				padding: 2px;
				height: 25px;
				cursor: pointer;
				width: 100%;
			}
			.box-body form{
				float: right;
			}
			.box-title textarea{
			
			}
			.box-title h4{
				width: calc(100% - 100px);
			}
			textarea:focus{
				resize: none;
			}
			input[value="Yenilə"]{
				border: none;
				background-color: #00A65A;
				color: white;
				padding: 1px 15px;
				border-radius: 2px;
			}
			input[value="Sil"]{
				border: none;
				background-color: #DD4B39;
				color: white;
				padding: 1px 15px;
				border-radius: 2px;
			}
			button{
				border: none;
				background-color: #3C8DBC;
				color: white;
				border-radius: 2px;
				padding: 1px 12px;
				font-weight: bold;
			}
	</style>
	<h1>Menular</h1>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="box box-solid">
					<div class="box-header with-border">
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<div class="box-group" id="accordion">
							<!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
							<div class="panel box box-primary">
								<div class="box-header with-border">
									<h4 class="box-title">
										<textarea>Collapsible Group Item #1</textarea>
									</h4>
									<div class="submits" style="float: right;">
										<form action="">
											<input type="submit" name="" value="Yenilə">
											<input type="submit" name="" value="Sil">
											<button data-toggle="collapse" data-parent="#accordion" href="#collapseOne">+</button>
										</form>
									</div>
								</div>
								<div id="collapseOne" class="panel-collapse collapse in">
									<div class="box-body">
										<ul>
											<li>
												<textarea>sfsdfd</textarea>
												<form action="">
													<input type="submit" name="" value="Yenilə">
													<input type="submit" name="" value="Sil">
												</form>
											</li>
											<li>
												<textarea>sfsdfd</textarea>
												<form action="">
													<input type="submit" name="" value="Yenilə">
													<input type="submit" name="" value="Sil">
												</form>
											</li>
											<li>
												<textarea>sfsdfd</textarea>
												<form action="">
													<input type="submit" name="" value="Yenilə">
													<input type="submit" name="" value="Sil">
												</form>
											</li>
											<li>
												<textarea>sfsdfd</textarea>
												<form action="">
													<input type="submit" name="" value="Yenilə">
													<input type="submit" name="" value="Sil">
												</form>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel box box-danger">
								<div class="box-header with-border">
									<h4 class="box-title">
										<textarea>Collapsible Group Item #1</textarea>
									</h4>
									<div class="submits" style="float: right;">
										<form action="">
											<input type="submit" name="" value="Yenilə">
											<input type="submit" name="" value="Sil">
											<button data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">+</button>
										</form>
									</div>
								</div>
								<div id="collapseTwo" class="panel-collapse collapse">
									<div class="box-body">
										<ul>
											<li>
												<textarea>sfsdfd</textarea>
												<form action="">
													<input type="submit" name="" value="Yenilə">
													<input type="submit" name="" value="Sil">
												</form>
											</li>
											<li>
												<textarea>sfsdfd</textarea>
												<form action="">
													<input type="submit" name="" value="Yenilə">
													<input type="submit" name="" value="Sil">
												</form>
											</li>
											<li>
												<textarea>sfsdfd</textarea>
												<form action="">
													<input type="submit" name="" value="Yenilə">
													<input type="submit" name="" value="Sil">
												</form>
											</li>
											<li>
												<textarea>sfsdfd</textarea>
												<form action="">
													<input type="submit" name="" value="Yenilə">
													<input type="submit" name="" value="Sil">
												</form>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel box box-success">
								<div class="box-header with-border">
									<h4 class="box-title">
										<textarea>Collapsible Group Item #1</textarea>
									</h4>
									<div class="submits" style="float: right;">
										<form action="">
											<input type="submit" name="" value="Yenilə">
											<input type="submit" name="" value="Sil">
											<button data-toggle="collapse" data-parent="#accordion" href="#collapseThree">+</button>
										</form>
									</div>
								</div>
								<div id="collapseThree" class="panel-collapse collapse">
									<div class="box-body">
										<ul>
											<li>
												<textarea>sfsdfd</textarea>
												<form action="">
													<input type="submit" name="" value="Yenilə">
													<input type="submit" name="" value="Sil">
												</form>
											</li>
											<li>
												<textarea>sfsdfd</textarea>
												<form action="">
													<input type="submit" name="" value="Yenilə">
													<input type="submit" name="" value="Sil">
												</form>
											</li>
											<li>
												<textarea>sfsdfd</textarea>
												<form action="">
													<input type="submit" name="" value="Yenilə">
													<input type="submit" name="" value="Sil">
												</form>
											</li>
											<li>
												<textarea>sfsdfd</textarea>
												<form action="">
													<input type="submit" name="" value="Yenilə">
													<input type="submit" name="" value="Sil">
												</form>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->
			</div>
		</div>
	</div>
</section>
@stop