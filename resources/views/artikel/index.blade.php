@extends('layouts.master')

@section('content')

<div class="card">
	<div class="card-header">
		<h3 class="card-title">DataTable</h3>
		<a href="/artikel/create" class="btn btn-primary">
			Create New Artikel
		</a>
	</div>
	<div class="card-body">
		<div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12">
			<table id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
				<thead>
					<tr role="row"><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending">Judul</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Isi</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Slug</th><th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column descending" aria-sort="ascending">tag</th>
					</tr>
				</thead>
				<tbody>
				@foreach($artikel as $key => $artikel)
					<tr>
						<td> {{ $artikel->judul }} </td>
						<td> {{ $artikel->isi }} </td>
						<td> {{ $artikel->slug }} </td>
						<td> {{ $artikel->tag }} </td>
					</tr>
				@endforeach
				</tbody>
			</table>
	</div>
	
@endsection

