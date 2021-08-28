@extends('layouts.app')
@section('title','Software House')
@section('content')
	
@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<section class="book_call_talk_wrp">
    <div class="container">
        <h2 class="heading_title text-left">Book a time to talk <br> for open discussion</h2>
        <div class="book_call_talk_box">
        <form method="post" id="meetingForm" action="arrangeMeeting" enctype="multipart/form-data">
        	@csrf
        	<div class="row">
	            <div class="col-lg-6">
	                <div class="book_call_talk_box_title date_and_time_wrp">
	                	<h3>Select Date and Time</h3>
	                    <div class="form-group">
                        <input type="input" class="form-control @if($errors->has('date')) is-invalid @enderror" id="inputDate" name="date" value="{{old('date')}}">
                        @if($errors->has('date')) 
				           	<div class="error">{{ $errors->first('date') }}</div>
				          @enderror
				        </div>
                        <div class="time_select_wrp">
                            <h4>Times you are available</h4>
                            <div class="row">
				        		<div class="col-lg-6 col-md-6">
                                    <div class="time_select_group">
                                    <input type="radio" id="test1" name="time" value="09:00:00">
                                    <label class="time-class" for="test1">09.00 PM</label>
						        	</div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="time_select_group">
                                    <input type="radio" id="test2" name="time" value="09:10:00">
                                    <label class="time-class" for="test2" >09.10 PM</label>
						        	</div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="time_select_group">
                                    <input type="radio" id="test3" name="time" value="09:20:00">
                                    <label class="time-class" for="test3">09.20 PM</label>
						        	</div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="time_select_group">
                                    <input type="radio" id="test4" name="time" value="09:30:00">
                                    <label class="time-class" for="test4">09.30 PM</label>
						        	</div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="time_select_group">
                                    <input type="radio" id="test5" name="time" value="09:40:00">
                                    <label class="time-class" for="test5">09.40 PM</label>
						        	</div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="time_select_group">
                                    <input type="radio" id="test6" name="time" value="09:50:00">
                                    <label class="time-class" for="test6">09.50 PM</label>
						        	</div>
                                </div>
                            </div>
                        </div>
				        @if($errors->has('time')) 
				           	<div class="error">{{ $errors->first('time') }}</div>
				        @enderror
	                </div>
	            </div>
	            <div class="col-lg-6">
	                <div class="book_call_talk_box_title">
	                	<h3>Purpose for the call</h3>
                        <div class="book_call_field_wrp">
	                    <div class="form-group">
	                    	<input type="text" name="name" placeholder="Enter your full name"  class="form-control @if($errors->has('name')) is-invalid @enderror" value="{{old('name')}}">
	                    	@if($errors->has('name'))
							    <div class="error">{{ $errors->first('name') }}</div>
							@endif
	                    </div>
	                    <div class="form-group">
	                    	<input type="text" name="email" placeholder="Email Address"  class="form-control @if($errors->has('email')) is-invalid @enderror" value="{{old('email')}}">
	                    	@if($errors->has('email')) 
				           		<div class="error">{{ $errors->first('email') }}</div>
				          	@enderror
	                    </div>
	                    <div class="form-group">
	                    	<input type="text" name="cellnumber" placeholder="Cell or landline number"  class="form-control @if($errors->has('cellnumber')) is-invalid @enderror" value="{{old('cellnumber')}}">
	                    	@if($errors->has('cellnumber')) 
				           		<div class="error">{{ $errors->first('cellnumber') }}</div>
				          	@enderror
	                    </div>
	                    <div class="form-group inputDnD">
					        <input type="file" class="form-control-file @if($errors->has('logo')) is-invalid @enderror" id="inputFile" onchange="readUrl(this)" name="logo">
                            <span class="file_label_text">
                                <img src="{{ URL::asset('public/assets/images/cloud_upload.png') }}" class="img-fluid">
                                <p><strong>Drag and drop to upload logo</strong>Doc, PDF, Images ETC</p>
                            </span>
					        @if($errors->has('logo')) 
				           		<div class="error">{{ $errors->first('logo') }}</div>
				          	@enderror
					    </div>
	                    <div class="form-group">
	                    	<textarea class="form-control @if($errors->has('note')) is-invalid @enderror" name="note" placeholder="Quick Note About Your Project" rows="5">{{old('name')}}</textarea>
	                    	@if($errors->has('note')) 
				           		<div class="error">{{ $errors->first('note') }}</div>
				          	@enderror
	                    </div>
	                    <div class="form-group">
	                    	<button type="submit" class=" form-control btn btn-primary">Book Now</button>
	                    </div>
                        </div>
	                </div>
	            </div>
        	</div>
        </form>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script type="text/javascript">
	function readUrl(input) {
	  if (input.files && input.files[0]) {
	    let reader = new FileReader();
	    reader.onload = (e) => {
	      let imgData = e.target.result;
	      let imgName = input.files[0].name;
	      input.setAttribute("data-title", imgName);
	    }
	    reader.readAsDataURL(input.files[0]);
	  }
	}

	$('#inputDate').change(function(){
		var date = $(this).val();
		$.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });
		$.ajax({
          url:'checkTimeAvailability',
          type:'POST',
          data:{'date':date},
          dataType : 'json',
          encode: true,
          success:function(res){
			$("input[type='radio'][name='time']").prop("disabled",false);
			$('.time-class').css('background', '');

          	if (res) {
          		$.each(res, function(key, value) {
		          	var a = value.time;
					$("input[type='radio'][name='time'][value='" + a + "']").prop("disabled",true);
					var radioID = $("input[type='radio'][name='time'][value='" + a + "']").attr('id');
					$("label[for="+radioID+"]").css('background', '#f5f5f5');
          		});
          	}
          }
        });
	});
</script>
@endsection
