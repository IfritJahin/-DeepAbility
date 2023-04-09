@extends('admin.layouts.user_type.auth')

@section('content')
<h2 clas="mb-4">Admin DASHBOARD</h2>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addsubjectModal">
  ADD COURSES
</button>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Courses</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    @if(count((array)$subjects) > 0)
        @foreach($subjects as $subject)
          <tr>
            <td>{{$subject->id}}</td>
            <td>{{$subject->subject}}</td>
            <td>
              <button class="btn btn-info editButon" data-id="{{$subject->id}}" data-subject="{{$subject->subject}}" data-bs-toggle="modal" data-bs-target="#editsubjectModal">Edit</button>
            </td>
          </tr>
        @endforeach
    @else
    <tr>
      <td colspan="4">Course not found!</td>
    </tr>
    @endif
  </tbody>
</table>
<!-- Modal -->
<div class="modal fade" id="addsubjectModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">

      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Courses</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form id="addcourse">
           @csrf
        <div class="modal-body">
        <label>Courses</label>
             <input type="text" name="subject" placeholder="Enter Subject Name">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
        </form>
      </div>
 
  </div>
</div>

<!-- editModal -->
<div class="modal fade" id="editsubjectModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <form id="edit_course">
    @csrf
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Courses</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <label>Edit Courses</label>

          <input type="text" name="subject" placeholder="Enter Subject Name" id="edit_c" required>
          <input type="hidden" name="id"  id="editcourse_id">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </div>
    </form>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script>
    $(document).ready(function () {
            $('#addcourse').submit(function(e){
          e.preventDefault();
          var formData=$(this).serialize();
          $.ajax({url:"{{route('addcourse')}}", type:"POST", data: formData ,
            success:function(data)
            {
              console.log(data);
              if(data.success == true){
                location.reload();
              }
              else{
                alert(data.msg);
              }
            }
        });
      });
      $(".editButton").click(function(){
        var course_id=$(this).attr('data-id');
        var course=$(this).attr('data-course');
        $("#edit_c").val(course);
        $("#editcourse_id").val(course_id);
      });
        $('#edit_course').submit(function(e){
        e.preventDefault();
        var formData=$(this).serialize();
        $.ajax({url:"{{route('editcourse')}}", type:"POST", data: formData ,
          success:function(data)
          {
            console.log(data);
            if(data.success == true){
              location.reload();
            }
            else{
              alert(data.msg);
            }
          }
      });
    });
});</script>
@endsection
@push('admin.dashboard')

 
@endpush

