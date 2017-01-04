@extends ('layouts.app')

@section ('content')
	<div class="container">

		<h3>Senarai Pengguna</h3>
		<div class="panel panel-default">
			<div class="panel-body">
				<a href="{{route('user::create')}}" class="btn btn-primary" role="button">Tambah Pengguna</a>
			</div>
		</div>
		<hr>
		<div class="panel panel-default">
		<div class="table-responsive">
			<table class="table table-striped" id="myTable">
				<thead class="primary">
					<tr>
						<th>Hospital</th>
						<th>Nama</th>
						<th>Email</th>
						<th>Peranan</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					@foreach($users as $user)
					<tr>
						<td>{{ $user->hospital->name }}</td>
						<td>{{ $user->name }}</td>
						<td>{{ $user->email }}</td>
						<td>
							@if(!empty($user->roles))
								@foreach($user->roles as $v)
									<label class="label label-success">{{ $v->display_name }}</label>
								@endforeach
							@endif
						</td>
						<td>
							<a href="#deleteModal-{{ $user->id }}" class="btn btn-danger btn-sm" role="button" data-toggle="modal">Hapus Pengguna</a>
						</td>
					</tr>

					<!-- Modal HTML -->
					<div id="deleteModal-{{ $user->id }}" class="modal fade">
						<div class="modal-dialog modal-sm">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
									<h4 class="modal-title">Delete Record</h4>
								</div>
								<div class="modal-body">
									<p>
										Are you sure to delete this record with id {{$user->id}}? 
									</p>
								</div>
								<div class="modal-footer">
									{!! Form::open(['route' => ['user::deleteUser', $user->id]]) !!}
									<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
									<button class="btn btn-danger" type="submit">Delete</button>
									{!! Form::close() !!}
								</div>
							</div>
						</div>
					</div>
					@endforeach
				</tbody>
			</table>
		</div>
		</div>
		<!--  -->
	</div>

@endsection