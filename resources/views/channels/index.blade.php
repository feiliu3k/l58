@extends('layouts.app')

@section('content')
<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">
      <div class="card-header">
        <h1>
          Channel
          <a class="btn btn-success float-xs-right" href="{{ route('channels.create') }}">Create</a>
        </h1>
      </div>

      <div class="card-body">
        @if($channels->count())
          <table class="table table-sm table-striped">
            <thead>
              <tr>
                <th class="text-xs-center">#</th>
                <th>
Name</th> <th>Thumbnail</th> <th>Order</th> <th>Dept_id</th> <th>Rebellion</th>
                <th class="text-xs-right">OPTIONS</th>
              </tr>
            </thead>

            <tbody>
              @foreach($channels as $channel)
              <tr>
                <td class="text-xs-center"><strong>{{$channel->id}}</strong></td>

                <td>{{$channel->
name}}</td> <td>{{$channel->thumbnail}}</td> <td>{{$channel->order}}</td> <td>{{$channel->dept_id}}</td> <td>{{$channel->rebellion}}</td>

                <td class="text-xs-right">
                  <a class="btn btn-sm btn-primary" href="{{ route('channels.show', $channel->id) }}">
                    V
                  </a>

                  <a class="btn btn-sm btn-warning" href="{{ route('channels.edit', $channel->id) }}">
                    E
                  </a>

                  <form action="{{ route('channels.destroy', $channel->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Delete? Are you sure?');">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE">

                    <button type="submit" class="btn btn-sm btn-danger">D </button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {!! $channels->render() !!}
        @else
          <h3 class="text-xs-center alert alert-info">Empty!</h3>
        @endif
      </div>
    </div>
  </div>
</div>

@endsection
