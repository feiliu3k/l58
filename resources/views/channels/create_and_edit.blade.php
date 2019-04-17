@extends('layouts.app')

@section('content')

<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">

      <div class="card-header">
        <h1>
          Channel /
          @if($channel->id)
            Edit #{{ $channel->id }}
          @else
            Create
          @endif
        </h1>
      </div>

      <div class="card-body">
        @if($channel->id)
          <form action="{{ route('channels.update', $channel->id) }}" method="POST" accept-charset="UTF-8">
          <input type="hidden" name="_method" value="PUT">
        @else
          <form action="{{ route('channels.store') }}" method="POST" accept-charset="UTF-8">
        @endif

          @include('common.error')

          <input type="hidden" name="_token" value="{{ csrf_token() }}">

          
                <div class="form-group">
                	<label for="
name-field">
Name</label>
                	<input class="form-control" type="text" name="
name" id="
name-field" value="{{ old('
name', $channel->
name ) }}" />
                </div> 
                <div class="form-group">
                	<label for="thumbnail-field">Thumbnail</label>
                	<input class="form-control" type="text" name="thumbnail" id="thumbnail-field" value="{{ old('thumbnail', $channel->thumbnail ) }}" />
                </div> 
                <div class="form-group">
                    <label for="order-field">Order</label>
                    <input class="form-control" type="text" name="order" id="order-field" value="{{ old('order', $channel->order ) }}" />
                </div> 
                <div class="form-group">
                    <label for="dept_id-field">Dept_id</label>
                    <input class="form-control" type="text" name="dept_id" id="dept_id-field" value="{{ old('dept_id', $channel->dept_id ) }}" />
                </div> 
                <div class="form-group">
                    <label for="rebellion-field">Rebellion</label>
                    <input class="form-control" type="text" name="rebellion" id="rebellion-field" value="{{ old('rebellion', $channel->rebellion ) }}" />
                </div>

          <div class="well well-sm">
            <button type="submit" class="btn btn-primary">Save</button>
            <a class="btn btn-link float-xs-right" href="{{ route('channels.index') }}"> <- Back</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
