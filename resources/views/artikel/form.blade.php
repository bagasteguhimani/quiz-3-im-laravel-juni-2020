@extends('layouts.master');

@section('content')
<div>
	<div class="card card-primary">
		<div class="card-header">
			<h3 class="card-title">Create Artikel</h3>
		</div>
		<form role="form" action="/artikel" method="POST">
			@csrf
			<div class="card-body">
				<div class="form-group">
					<label for="Judul">Judul</label>
					<input type="text" class="form-control" id="Judul" placeholder="" name="judul">
				</div>
				<div class="form-group">
					<label for="Isi">Isi</label>
					<input type="text" class="form-control" id="Isi" placeholder="" name="isi">

				</div>
				<div class="form-group">
					<label for="Slug">Slug</label>
					<input type="text" class="form-control" id="Slug" placeholder="" name="slug">

				</div>
				<div class="form-group">
					<label for="Tag">Tag</label>
					<input type="text" class="form-control" id="Tag" placeholder="" name="tag">
				</div>


				<!-- /.card-body -->

				<div class="card-footer">
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
			</form>
		</div>
</div>

@endsection