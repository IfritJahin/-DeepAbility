@extends('layouts.user_type.auth')

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
           <div class="form-group">
                        <label for="question_text">{{ __('question text') }}</label>
                        <input type="text" class="form-control" id="question_text" placeholder="{{ __('question text') }}" name="question_text" value="{{ old('question_text') }}" />
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                          <label class="form-check-label" for="exampleRadios1">
                            Default radio
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                          <label class="form-check-label" for="exampleRadios2">
                            Second default radio
                          </label>
                        </div>
                        <div class="form-check disabled">
                          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled>
                          <label class="form-check-label" for="exampleRadios3">
                            Disabled radio
                          </label>
                        </div>
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
            $('#QA').submit(function(e){
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
<div class="container-fluid">

<!-- Page Heading -->



<!-- Content Row -->

</div>
@endsection