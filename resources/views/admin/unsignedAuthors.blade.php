@extends("layouts.admin_app")
@section('content')
	<section id="allAuthor_wrap">
	<style type="text/css">
		table thead td{
			font-weight: bold;
		}
		table tbody input{
			background-color: #994399;
			border: 1px solid transparent;
			padding:  3px 10px;
			border-radius: 2px;
			color: white;
		}
		table tbody td textarea{
			resize: none;  
			border: none; 
			background-color: transparent;
			padding: 2px;
			width: 100%;
			min-height: 100%;
		}
		table tbody td textarea:focus{
			border: lightgray; 
			background-color: white;
		}
	</style>
		<h1>Təsdiqlənməmiş Müəlliflərin Siyahısı</h1>
		<table class="table table-bordered">
			<form action="" method="">
				<thead>
					<td>Ad</td>
					<td>Soyad</td>
					<td>Yaş</td>
					<td>Sahəsi</td>
					<td>Biografiyası</td>
					<td>Email</td>
					<!-- <td>Əlaqə linkləri</td> -->
					<td>Tel</td>
					<td>Şəkil</td>
					<td>Təsdiqlə</td>
				</thead>
				<tbody>
					<td>Alim</td>
					<td>Babazade</td>
					<td>20</td>
					<td>Kompüter mühəndisliyi</td>
					<td>..</td>
					<td>alim.b@code.edu.az</td>
					<!-- <td>
						<p>www.facebook.com</p>
						<p>www.linkedin.com</p>
						<p>www.twitter.com</p>
						<p>www.youtube.com</p>
						<p>www.website.com</p>
						
					</td> -->
					<td>54561231231</td>
					<td>Şəkil</td>
					<td>
						<input type="submit" name="" value="Təsdiqlə">
					</td>
				</tbody>
			</form>
		</table>
	</section>
@stop