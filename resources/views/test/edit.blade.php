
<form action="{{ route('test.update', $test->id) }}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('PUT')
 
 <form-group>
 <input type="text" name="project_name" id="project_name" value="{{$test->project_name}}">
 </form>
 <form-group>
 <textarea name="project_description" id="project_description">{{$test->project_description}}</textarea>
 </form>

 <input type="submit" value="Update">

 
</form>