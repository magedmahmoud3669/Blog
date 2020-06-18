@extends('layouts.app')
@section('content')

<div class="container">
    <div class="form-group">
      <label for="usr">title:</label>
      {{$article->title}}
    </div>
    <div class="form-group">
      <label for="usr">body:</label>
      {{$article->body}}
    </div>




    <form action="/read/{{$article->id}} " method="POST">
      {{csrf_field()}}
      <div class="form-group">

      <label for="usr">body:</label>
      <textarea rows="4" cols="50" name="body" class="form-group"></textarea>
    </div>
    <br/>
    <input type="submit" value="Add Comment">
    </form>
  </div>

  <table class="table table-stripped">
      <tr>
        <td>comments</td>
      </tr>
      @foreach($article->comments as $c)
      <tr>
        <td> 
          {{$c->body}}</td>
      </tr>
      @endforeach
    </table>




                               
@endsection
