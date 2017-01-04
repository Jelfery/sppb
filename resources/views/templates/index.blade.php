@extends ('layouts.app')

@section ('content')
<div class="container">
	<h2> Laporan Aset </h2>

	<hr>

	@if (Session::has('file_error'))
	<div class="alert alert-danger">
		<ul>
			<li>{{ Session::get('file_error') }}</li>
		</ul>
	</div>
	@endif
	@if (Session::has('file_success'))
	<div class="alert alert-success">
		<ul>
			<li>{{ Session::get('file_success') }}</li>
		</ul>
	</div>
	@endif
	<div class="panel panel-default">
		<div class="table-responsive">
			<table class="table table-striped" id="myTable">
				<thead class="primary">
					<tr>
						<th>Nama Borang</th>
						<th>Unit</th>
						<th>Juru Muat Naik</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					@foreach($files as $file)
					<tr>
						<td>{{ $file->name }}</td>
						<td>{{ $file->label->name }}</td>
						<td>{{ $file->uploader }}</td>
						<td>
							<a href="#deleteModal-{{ $file->id }}" class="btn btn-danger btn-sm" role="button" data-toggle="modal">Hapus Borang</a>
						</td>
					</tr>

					<!-- Modal HTML -->
					<div id="deleteModal-{{ $file->id }}" class="modal fade">
						<div class="modal-dialog modal-sm">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
									<h4 class="modal-title">Hapus Borang</h4>
								</div>
								<div class="modal-body">
									<p>
										Anda pasti untuk hapuskan aset ini? 
									</p>
								</div>
								<div class="modal-footer">
									{!! Form::open(['route' => ['template::deleteTemplate', $file->id]]) !!}
									<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
									<button class="btn btn-danger" type="submit">Hapus</button>
									{!! Form::close() !!}
								</div>
							</div>
						</div>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
		
		<hr>

		<div class="card" style="margin-bottom: 16px">
			<h3>Muat Naik Fail</h3>

			<br>

			@if (count($errors) > 0)
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif

			{!! Form::open( ['route' => 'template::store', 'novalidate' => 'novalidate', 'class' => 'form', 'files' => true]) !!}
			<hr>
			<div class="form-group">
				{!! Form::label('filename', 'Nama') !!}
				{!! Form::text('filename', null, ['class' => 'form-control', 'placeholder' => 'Nama Fail']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('label', 'Label') !!}
				{!! Form::select('label', \App\Label::lists('name', 'id'), null, ['class'=>'form-control select2', 'style' => 'width: 100%', 'data-placeholder' => "Label"]) !!}
			</div>
			<div class="form-group">
				{!! Form::label('uploader', 'Nama Pegawai') !!}
				{!! Form::text('uploader', $user->name, ['class' => 'form-control', 'placeholder' => 'Nama Juru Muat Naik']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('file', 'Fail', ['class' => '']) !!}
				{!! Form::file('file', null, ['class' => 'form-control']) !!}
			</div>
			<hr>
			<div class="form-group">
				<button type="submit" class="btn btn-primary form-control">Hantar</button>
			</div>
			{!! Form::close() !!}
		</div>

		<hr>

		<!--  -->
	</div>

	@endsection