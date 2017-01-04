@extends ('layouts.app')

@section ('content')
<div class="container">
	<h2> Beban Kerja </h2>

	<hr>

	<!-- List of Record Section -->
	<div class="card">
		<h3> Senarai Rekod</h3>

		<br>

		<div class="panel panel-default">
			<div class="table-responsive">
				<table class="table table-hovered" id="myTable">
					<thead>
						<tr>
							<th>Nama Fail</th>
							<th>Hospital</th>
							<th>Bulan & Tahun</th>
							<th>Label</th>
							<th>Juru Muat Naik</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						@forelse($records as $record)
						<tr>
							<td>{{ $record->name }}</td>
							<td>{{ $record->user->hospital->name }}</td>
							<td>{{ $record->month }} {{ $record->year }}</td>
							<td>{{ $record->label->name }}</td>
							<td>{{ $record->uploader }}</td>
							<td>
								<a href="{{route('bebankerja::getRecord', $record->id)}}" class="btn btn-primary btn-sm" role="button">Muat Turun Fail</a>
								&nbsp
								<a href="#deleteModal-{{ $record->id }}" class="btn btn-danger btn-sm" role="button" data-toggle="modal">Hapus Fail</a>
							</td>
						</tr>

						<!-- Modal HTML -->
						<div id="deleteModal-{{ $record->id }}" class="modal fade">
							<div class="modal-dialog modal-sm">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
										<h4 class="modal-title">Hapus Laporan</h4>
									</div>
									<div class="modal-body">
										<p>
											Anda pasti untuk hapuskan laporan ini? 
										</p>
									</div>
									<div class="modal-footer">
										{!! Form::open(['route' => ['bebankerja::deleteRecord', $record->id]]) !!}
										<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
										<button class="btn btn-danger" type="submit">Delete</button>
										{!! Form::close() !!}
									</div>
								</div>
							</div>
						</div>

						@empty
						<tr>
							<td colspan="6" style="text-align: center"><i>Tiada Rekod</i></td>
						</tr>
						@endforelse
					</tbody>
				</table>
			</div>

		</div>
	</div>

	
	<hr>
	<!-- Download Record Form Section -->
	@role('Admin Hospital')
	<div class="card" style="padding-bottom: 16px">
		<h3>Muat Turun Rekod Tahunan</h3>

		<br>

		@if (Session::has('error_message'))
		<div class="alert alert-danger">
			<ul>
				<li>{{ Session::get('error_message') }}</li>
			</ul>
		</div>
		@endif
		<!-- Annual Records download form -->
		{!! Form::open(array('url' => '/bebankerja/collection', 'class' => 'form')) !!}
		{!! Form::label('year', 'Rekod Tahun') !!}
		{!! Form::selectYear('year', 2010, 2020) !!}
		<button type="submit" class="btn btn-primary btn-xs">Muat Turun Rekod</button>
		{!! Form::close() !!}

	</div>		
	@endrole

	<hr>

	<div class="card" style="margin-bottom: 16px">
		<h3>Muat Naik Fail</h3>

		<div class="panel panel-default">
			<div class="table-responsive">
				<table class="table table-hovered">
					<thead>
						<tr>
							<th>Nama Aset</th>
							<th>Tarikh</th>
							<th>Juru Muat Naik</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						@forelse($templates as $template)
						<tr>
							<td>{{$template->name}}</td>
							<td>{{$template->month}}</td>
							<td>{{$template->uploader}}</td>
							<td>
								<a href="{{route('bebankerja::getTemplate', $template->id)}}" class="btn btn-primary btn-sm" role="button">Muat Turun Fail</a>
							</td>
						</tr>
						@empty
						<tr>
							<td colspan="6" style="text-align: center"><i>Tiada Aset</i></td>
						</tr>
						@endforelse
					</tbody>
				</table>
			</div>
		</div>

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

		{!! Form::open( ['route' => 'bebankerja::store', 'novalidate' => 'novalidate', 'class' => 'form', 'files' => true]) !!}
		<div class="form-group">
			{!! Form::label('uploader', 'Nama') !!}
			{!! Form::text('uploader', $user->name, ['class' => 'form-control', 'placeholder' => 'Nama Pegawai Bertugas']) !!}
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

</div>
@endsection