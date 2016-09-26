@extends("layouts.admin_app")
@section('content')
	<section id="allAuthor_wrap">
		<h1>Təsdiqlənməmiş Müəlliflərin Siyahısı</h1>
		<table class="table table-bordered">
			<thead>
				<td>Ad</td>
				<td>Soyad</td>
				<td>Yaş</td>
				<td>Sahəsi</td>
				<td>Biografiyası</td>
				<td>Email</td>
				<td>Əlaqə linkləri</td>
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
				<td>
					<p>www.facebook.com</p>
					<p>www.linkedin.com</p>
					<p>www.twitter.com</p>
					<p>www.youtube.com</p>
					<p>www.website.com</p>
				</td>
				<td>54561231231</td>
				<td>Şəkil</td>
				<td>
					<form action="" method="">
						<input type="submit" name="" value="Təsdiqlə">
					</form>
				</td>
			</tbody>
		</table>
	</section>
@stop