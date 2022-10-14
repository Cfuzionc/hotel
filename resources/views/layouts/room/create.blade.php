@extends('layouts.app')

@section('Page-title', 'Create Room')

@section('content')
<span id="dit-is-room.create-pagina">Create Room</span>
<form method="post", action="/rooms">
    @method('POST')
    @csrf
    <div class="form-group">
      <label for="exampleFormControlInput1">Subject</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="kamernummer" name="kamernummer">
    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect1">Select Team</label>
      <select class="form-control" id="exampleFormControlSelect1" name="team_id">
        @foreach($rooms as $room)
          <option class="form-control"
            value="{{ $room->id }}">{{ $room->kamernaam }}
        </option>
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Issue:</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Describe your issue" name="issue"></textarea>
    </div>
    <input type="submit" name="">
  </form>
@endsection
