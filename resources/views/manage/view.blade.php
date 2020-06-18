@extends('layouts.app')
@section('content')

<div class="container">
    <table>
        <tr>
            <td>title</td>
        </tr>
        
    @foreach($articles as $ar)
    <tr>
      <td>
      <a href="{{ "/read/".$ar->id}}">{{$ar->title}}</a>
      
       </td>
    </tr>
    @endforeach

    </table>
    <br/>
    <a href="add">add new article</a>

</div>                                   
@endsection
