@extends('master')

@section('content')

@if($errors->any())

<div class="alert alert-danger">
	<ul>
	@foreach($errors->all() as $error)

		<li>{{ $error }}</li>

	@endforeach
	</ul>
</div>

@endif

<div class="card">
	<div class="card-header">Add Activity</div>
	<div class="card-body">
		<form method="post" action="{{ url('store') }}" enctype="multipart/form-data">
			@csrf
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">User ID</label>
				<div class="col-sm-10">
					<input type="text" name="user_id" class="form-control" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Schedule Started At</label>
				<div class="col-sm-10">
					<input type="date" name="schedule_started_at" class="form-control" />
				</div>
			</div>
      <div class="row mb-3">
        <label class="col-sm-2 col-label-form">Schedule Ended At</label>
        <div class="col-sm-10">
          <input type="date" name="schedule_ended_at" class="form-control" />
        </div>
      </div>
      <div class="row mb-3">
        <label class="col-sm-2 col-label-form">Started At</label>
        <div class="col-sm-10">
          <input type="date" name="started_at" class="form-control" />
        </div>
      </div>
      <div class="row mb-3">
        <label class="col-sm-2 col-label-form">Ended At</label>
        <div class="col-sm-10">
          <input type="date" name="ended_at" class="form-control" />
        </div>
      </div>
      <div class="row mb-3">
        <label class="col-sm-2 col-label-form">Notes</label>
        <div class="col-sm-10">
          <input type="text" name="note" class="form-control" />
        </div>
      </div>


			<div class="text-center">
				<input type="submit" class="btn btn-primary" value="Add" />
			</div>
		</form>
	</div>
</div>

@endsection('content')
