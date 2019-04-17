@extends('layouts.app')

@section('content')

<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">
      <div class="card-header">
        <h1>Channel / Show #{{ $channel->id }}</h1>
      </div>

      <div class="card-body">
        <div class="card-block bg-light">
          <div class="row">
            <div class="col-md-6">
              <a class="btn btn-link" href="{{ route('channels.index') }}"><- Back</a>
            </div>
            <div class="col-md-6">
              <a class="btn btn-sm btn-warning float-right mt-1" href="{{ route('channels.edit', $channel->id) }}">
                Edit
              </a>
            </div>
          </div>
        </div>
        <br>

        <label>
Name</label>
<p>
	{{ $channel->
name }}
</p> <label>Thumbnail</label>
<p>
	{{ $channel->thumbnail }}
</p> <label>Order</label>
<p>
	{{ $channel->order }}
</p> <label>Dept_id</label>
<p>
	{{ $channel->dept_id }}
</p> <label>Rebellion</label>
<p>
	{{ $channel->rebellion }}
</p>
      </div>
    </div>
  </div>
</div>

@endsection
