@extends('layouts.app')

@section('content')

<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">
      <div class="card-header">
        <h1>Department / Show #{{ $department->id }}</h1>
      </div>

      <div class="card-body">
        <div class="card-block bg-light">
          <div class="row">
            <div class="col-md-6">
              <a class="btn btn-link" href="{{ route('departments.index') }}"><- Back</a>
            </div>
            <div class="col-md-6">
              <a class="btn btn-sm btn-warning float-right mt-1" href="{{ route('departments.edit', $department->id) }}">
                Edit
              </a>
            </div>
          </div>
        </div>
        <br>

        <label>
Name</label>
<p>
	{{ $department->
name }}
</p> <label>Order</label>
<p>
	{{ $department->order }}
</p>
      </div>
    </div>
  </div>
</div>

@endsection
