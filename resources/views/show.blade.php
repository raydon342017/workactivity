@extends('master')

@section('content')

<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>Acitivity Details</b></div>
			<div class="col col-md-6">
				<a href="{{ url('/') }}" class="btn btn-primary btn-sm float-end">View All</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>User ID</b></label>
			<div class="col-sm-10">
				{{ $workActivity->user_id }}
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Schedule Started At</b></label>
			<div class="col-sm-10">
				{{ $workActivity->schedule_started_at }}
			</div>
		</div>
		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>Schedule Ended At</b></label>
			<div class="col-sm-10">
				{{ $workActivity->schedule_ended_at }}
			</div>
		</div>
    <div class="row mb-3">
      <label class="col-sm-2 col-label-form"><b>Started At</b></label>
      <div class="col-sm-10">
        {{ $workActivity->started_at }}
      </div>
    </div>
    <div class="row mb-4">
      <label class="col-sm-2 col-label-form"><b>Ended At</b></label>
      <div class="col-sm-10">
        {{ $workActivity->ended_at }}
      </div>
    </div>

    <div class="row mb-4">
      <label class="col-sm-2 col-label-form"><b>Note</b></label>
      <div class="col-sm-10">
        {{ $workActivity->note }}
      </div>
    </div>

	</div>
</div>

@endsection('content')
