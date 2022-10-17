@extends('layouts.app')

@section('Page-title', 'Create Room')

@section('content')
<span id="dit-is-room.create-pagina">Create Room</span>
<form method="post", action="/rooms">
    @method('POST')
    @csrf
    <div class="form-group">
      <label for="number">Subject</label>
      <input type="text" class="form-control" id="number" placeholder="Kamernummer" name="room_number">
    </div>
    <div class="form-group">
      <label for="name">Issue:</label>
      <textarea class="form-control" id="name" rows="3" placeholder="Describe your issue" name="room_name"></textarea>
    </div>
    <input type="submit">
  </form>
@endsection
