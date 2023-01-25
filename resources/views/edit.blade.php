@extends('master')

@section('content')

<div class="card">
	<div class="card-header">Edit Activity</div>
	<div class="card-body">
		<form method="post" action="{{ url('update', $workActivity->id) }}" enctype="multipart/form-data">
			@csrf
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">User ID</label>
				<div class="col-sm-10">
					<input type="text" name="user_id" class="form-control" value="{{ $workActivity->user_id }}" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Schedule Started At</label>
				<div class="col-sm-10">
					<input type="date" name="schedule_started_at" class="form-control" value="{{ $workActivity->schedule_started_at }}" />
				</div>
			</div>
      <div class="row mb-3">
        <label class="col-sm-2 col-label-form">Schedule Ended At</label>
        <div class="col-sm-10">
          <input type="date" name="schedule_ended_at" class="form-control" value="{{ $workActivity->schedule_ended_at }}" />
        </div>
      </div>
      <div class="row mb-3">
        <label class="col-sm-2 col-label-form">Started At</label>
        <div class="col-sm-10">
          <input type="date" name="started_at" class="form-control" value="{{ $workActivity->schedule_started_at }}" />
        </div>
      </div>
      <div class="row mb-3">
        <label class="col-sm-2 col-label-form">Ended At</label>
        <div class="col-sm-10">
          <input type="date" name="ended_at" class="form-control" value="{{ $workActivity->ended_at }}" />
        </div>
      </div>
      <div class="row mb-3">
        <label class="col-sm-2 col-label-form">Note</label>
        <div class="col-sm-10">
          <input type="text" name="note" class="form-control" value="{{ $workActivity->note }}" />
        </div>
      </div>

			<div class="text-center">
				<input type="hidden" name="hidden_id" value="{{ $workActivity->id }}" />
				<input type="submit" class="btn btn-primary" value="Edit" />
			</div>
		</form>
	</div>
</div>


@endsection('content')
