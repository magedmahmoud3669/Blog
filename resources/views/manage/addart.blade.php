@extends('layouts.app')
@section('content')

<div class="container">
<form  action="add" method="POST">
          {{ csrf_field() }}  
     <div class="form-group">
     <label for="usr">enter title</label> 
     <input type="text" name="title" class="form-control"> <br/>
 </div>
<div class="form-group">
	<label for="usr">body</label> 

     <textarea  rows="6" 
                cols="50" 
                name="body"
                class="form-control" 
     	         >

                                      
     </textarea>
     </div> 
     <br>
     <input type="submit" value="add new" class="btn btn primary">
     </form>
     </div>                                    
@endsection
