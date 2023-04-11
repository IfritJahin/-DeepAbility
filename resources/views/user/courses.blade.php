@extends('layouts.user_type.auth')

@section('content')
<table class="table" id="questiontable">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Courses</th>
      <th scope="col">Expire Date</th>
      <th scope="col">Plans</th>
      <th scope="col">Prices</th>
      <th scope="col">Enroll</th>
      
    </tr>
  </thead>
  <tbody>
    @if(count((array)$subjects) > 0)
        @foreach($subjects as $subject)
          <tr>
            <td>{{$subject->id}}</td>
            <td>{{$subject->subject}}</td>
            <td>{{$subject->expire}}</td>
            <td>
               @if($subject->plan !=0)
                   <span style= "color: Red">PAID</span>
               @else
                   <span style= "color: Green">FREE</span>
               @endif
            </td>
            <td>
               @if($subject->prices!=null)
                  @php $planprices=json_decode($subject->prices); @endphp
                  @foreach($planprices as $key=>$price)
                    <span>{{$key}} {{$price}},</span>
                    <td>
                       <a href="{{route('course.content')}}" class="btn btn-primary buynow" data-prices="{{$subject->prices}}" data-bs-toggle="modal" data-bs-target="#buyModal">Enroll</button></a>
                    </td>
                  @endforeach
               @else
                   <span>No Prices</span>
                   <td>
                       <a href="{{route('course.content')}}" class="btn btn-primary buynow" >Enroll Free</button></a>
                    </td>

               @endif
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
<div class="modal fade" id="buyModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">

      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">BUY COURSE</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form id="buyform">
           @csrf
          <div class="modal-body">
                <select name="price" id="price" required class="w-100">
                </select>
            </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-warning buynowbutton">BUY NOW</button>
        </div>
        </form>
      </div>
 
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
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
    $('#buyform').submit(function(e){
          e.preventDefault();
          var formData=$(this).serialize();
          var price=$('#price').val();
          $.ajax({url:"{{route('addcourse')}}", type:"POST", data: formData ,
            success:function(response)
            {
              console.log(response);
            }
        });
      });
</script>
@(layouts.footers.auth.footer')

@endsection