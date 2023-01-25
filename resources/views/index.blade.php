@extends('master')

@section('content')

@if($message = Session::get('success'))

<div class="alert alert-success">
	{{ $message }}
</div>

@endif

<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>Work Activity Data</b></div>
			<div class="col col-md-6">
				<a href="{{ url('create') }}" class="btn btn-success btn-sm float-end">Add</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<table class="table table-bordered">
			<tr>
				<th>User Id</th>
				<th>Schedule Started At</th>
				<th>Schedule Ended At</th>
				<th>Started At</th>
        <th>Ended At</th>
				<th>Action</th>
			</tr>
			@if(count($data) > 0)

				@foreach($data as $row)

					<tr>
						<td>{{ $row->user_id }}</td>
						<td>{{ $row->schedule_started_at }}</td>
						<td>{{ $row->schedule_ended_at }}</td>
            <td>{{ $row->started_at }}</td>
						<td>{{ $row->ended_at }}</td>
						<td>
							<form method="post" action="{{ url('create', $row->id) }}">
								@csrf
								@method('DELETE')
								<a href="{{ url('show', $row->id) }}" class="btn btn-primary btn-sm">View</a>
								<a href="{{ url('edit', $row->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <a href="{{ url('destroy', $row->id) }}" class="btn btn-danger btn-sm">Delete</a>

							</form>

						</td>
					</tr>

				@endforeach

			@else
				<tr>
					<td colspan="5" class="text-center">No Data Found</td>
				</tr>
			@endif
		</table>

	</div>
</div>

@endsection
