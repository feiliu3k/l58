@extends('layouts.app')

@section('content')
<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">
      <div class="card-header">
        <h1>
          Department
          <a class="btn btn-success float-xs-right" href="{{ route('departments.create') }}">Create</a>
        </h1>
      </div>

      <div class="card-body">
        @if($departments->count())
          <table class="table table-sm table-striped">
            <thead>
              <tr>
                <th class="text-xs-center">#</th>
                <th>
Name</th> <th>Order</th>
                <th class="text-xs-right">OPTIONS</th>
              </tr>
            </thead>

            <tbody>
              @foreach($departments as $department)
              <tr>
                <td class="text-xs-center"><strong>{{$department->id}}</strong></td>

                <td>{{$department->
name}}</td> <td>{{$department->order}}</td>

                <td class="text-xs-right">
                  <a class="btn btn-sm btn-primary" href="{{ route('departments.show', $department->id) }}">
                    V
                  </a>

                  <a class="btn btn-sm btn-warning" href="{{ route('departments.edit', $department->id) }}">
                    E
                  </a>

                  <form action="{{ route('departments.destroy', $department->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Delete? Are you sure?');">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE">

                    <button type="submit" class="btn btn-sm btn-danger">D </button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {!! $departments->render() !!}
        @else
          <h3 class="text-xs-center alert alert-info">Empty!</h3>
        @endif
      </div>
    </div>
  </div>
</div>

@endsection
