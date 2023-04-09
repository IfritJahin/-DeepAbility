@extends('admin.layouts.user_type.auth')

@section('content')
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addsubjectModal">
  Add Questions
</button>

<!-- Modal -->
<div class="modal fade" id="addsubjectModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">

      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Questions</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form id="QA">
           @csrf
        <div class="modal-body">
        <label>Questions</label>
             <input type="text" name="question" class="w-100" placeholder="Enter Question">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
        </form>
      </div>
 
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
});</script>
@endsection