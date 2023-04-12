@extends('layouts.user_type.auth')

@section('content')

<!-- Modal -->

  <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Courses</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form id="paymentform">
           @csrf
        <div class="modal-body">
        <label>user Name</label>
             <input type="text" name="name" placeholder="Enter User Name" required>
             <br></br>
             <select name="priceway" id="priceway" required class="w-100">
             <option value="">--Please choose an option--</option>
                <option value="0">Bkash</option>
                <option value="1">Nagad</option>
                </select>
            <input type="number" name="itk" placeholder="In TAKA" required>
            <br></br>
            <input type="text" name="subject" placeholder="Enter Course Name" required>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
        </form>
      </div>
 
  </div>
</div>
<script>
    $(document).ready(function () {

      $('.buynow').click(function(){
        
        var prices=JSON.parse($(this).attr('data-prices'));
        var html= '';
        html +=`
                <option value="">--Please choose an option--</option>
                <option value="`+prices.TK+`">TK`+prices.TK+`</option>
        `;
        $('#price').html(html);
      });
    });
    $('#paymentform').submit(function(e){
          e.preventDefault();
          var formData=$(this).serialize();
          $.ajax({url:"{{route('paymentcom')}}", type:"POST", data: formData ,
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

    
</script>
@include('layouts.footers.auth.footer')

@endsection


