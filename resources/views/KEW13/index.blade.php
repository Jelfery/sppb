@extends ('layouts.app')

@section ('content')
	<div class="container">
		<h2> Laporan KEW-13 </h2>

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
								<th>Bulan</th>
								<th>Label</th>
								<th>Juru Muat Naik</th>
								<th>&nbsp</th>
							</tr>
						</thead>
						<tbody>
							@forelse($records as $record)
							<tr>
								<td>{{ $record->name }}</td>
								<td>{{ $record->user->hospital->name }}</td>
								<td>{{ $record->month }}</td>
								<td>{{ $record->label->name }}</td>
								<td>{{ $record->uploader }}</td>
								<td>
									<a href="{{route('KEW13::getRecord', $record->id)}}" class="btn btn-primary" role="button">Muat Turun Fail</a>
									<a href="#deleteModal-{{ $record->id }}" class="btn btn-danger" role="button" data-toggle="modal">Hapus Fail</a>
								</td>
							</tr>

							<!-- Modal HTML -->
							<div id="deleteModal" class="modal fade">
								<div class="modal-dialog modal-sm">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
											<h4 class="modal-title">Delete Record</h4>
										</div>
										<div class="modal-body">
											<p>
												Are you sure to delete this record?
											</p>
										</div>
										<div class="modal-footer">
											{!! Form::open(['route' => ['KEW13::deleteRecord', $record->id]]) !!}
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

		@role('Admin Hospital')
		<hr>
		<!-- Download Record Form Section -->
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
			{!! Form::open(array('url' => '/KEW13/collection', 'class' => 'form')) !!}
				{!! Form::label('year', 'Rekod Tahun') !!}
				{!! Form::selectYear('year', 2010, 2020) !!}
				<button type="submit" class="btn btn-primary btn-xs">Muat Turun Rekod</button>
			{!! Form::close() !!}
		</div>
		@endrole
		
		<hr>

		<!-- Upload File Form Section -->
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

			{!! Form::open( ['route' => 'KEW13::store', 'novalidate' => 'novalidate', 'class' => 'form', 'files' => true]) !!}
				<div class="form-group">
					{!! Form::label('uploader', 'Nama') !!}
					{!! Form::text('uploader', null, ['class' => 'form-control', 'placeholder' => 'Nama Pegawai Bertugas']) !!}
				</div>
				<div class="form-group">
					{!! Form::label('file', 'Fail', ['class' => '']) !!}
					{!! Form::file('file', null, ['class' => 'form-control']) !!}
				</div>
				<hr>
				<div class="form-group">
					<button type="submit" class="btn btn-primary form-control">Submit</button>
				</div>
			{!! Form::close() !!}
		</div>
	</div>
@endsection