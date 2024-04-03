@extends('layouts.app')
   @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
<a href="{{ route('test.create') }}">Add</a>
@section('content')
<table border="1" cellspacing="3" cellpadding="3">
  <tr>
    <td>project_name</td>
    <td>project_description</td>
    <td>Action</td>
  </tr>   

@foreach($test as $eachtest)
  <tr>
    <td>{{$eachtest->project_name}}</td>
    <td>{{$eachtest->project_description}}</td>
    <td>
    
       <a href="{{ route('test.edit', $eachtest->id) }}"
            class="btn btn-primary btn-sm">Edit</a>
            
       <a href="{{ route('test.show', $eachtest->id) }}"
            class="btn btn-primary btn-sm">Show</a>     
    
     <form action="{{ route('test.destroy', $eachtest->id) }}" method="post">
      @csrf
      @method('DELETE')
      <button type="submit" class="btn btn-danger btn-sm">Delete</button>
    </form>
     
     
     </td>
  </tr>   
@endforeach
</table>

@endsection