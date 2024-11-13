@extends('layouts/app')

@section('title')
    <title>Table Reservations</title>
@endsection

@section('content')

<div class="container p-4">
  <div class="row">
    <div class="col-12">
      <h1>FOR ADMINS ONLY</h1>

      <div class="row">
        <h2>RESERVATIONS FOR THE NEXT THREE DAYS</h2>
        @foreach($reserves as $reserve)
          <div class="col-12 my-4 border rounded">
              <div class="row">
                <div class="col-3 my-4">
                  People: {{$reserve->persons;}}
                </div>
                <div class="col-3 my-4">
                  date: {{$reserve->date;}}
                </div>
                <div class="col-3 my-4">
                  Time: {{$reserve->time;}}
                </div>
                <div class="col-3 my-4">
                  <form action="/reserve/{{$reserve->id}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">Delete Reservation</button>
                  </form>
                </div>
              </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</div>

@endsection
