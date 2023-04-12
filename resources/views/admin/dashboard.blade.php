@extends('admin.layouts.user_type.auth')

@section('content')

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addstatusModal">
  Add Status
</button>

<!-- Modal -->
<div class="modal fade" id="addstatusModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen-sm-down">

      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Questions</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form id="statusform">
           @csrf
        <div class="modal-body">
        <label>Questions</label>
             <input type="text" name="status" class="w-100" placeholder="Enter status " required>
             <input type="text" name="motivation" class="w-100" placeholder="Enter motivation " required>
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
            $('#statusform').submit(function(e){
          e.preventDefault();
          var formData=$(this).serialize();
          $.ajax({url:"{{route('status')}}", type:"POST", data:formData ,
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


