<form action="{{ route('test.store') }}" method="POST" enctype="multipart/form-data">
  @csrf
 <form-group>
 <input type="text" name="project_name" id="project_name" value="">
 </form>
 <form-group>
 <textarea name="project_description" id="project_description"></textarea>
 </form>

 <input type="submit" value="submit">
</form>