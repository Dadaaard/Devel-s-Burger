@extends('reservation.layout')
@section('content')
<div class="row">
 <div class="col-lg-12 margin-tb">
 <div class="pull-left">
 <h2> Reserve Form</h2>
</div>
</div>
</div>
@if($errors->any())
<div class="alert alert-danger">
 <strong>Whoops</strong> There were some problems with your input. <br> <br>
 <ul>
 @foreach($errors->all() as $error)
 <li>{{ $error}}</li>
 @endforeach
</ul>
</div>
@endif
<form action="{{route('reservation_models.store')}}" method="POST" >
 @csrf 
 <div class="col-xs-12 col-sm-12 col-md-12">
 <div class="form-group">
 <strong>First Name: </strong>
 <input type="text" name="fname" class="form-control"
placeholder="First Name">
 </div>
 </div>
 <div class="col-xs-12 col-sm-12 col-md-12">
 <div class="form-group">
 <strong>Last Name: </strong>
 <input type="text" name="lname" class="form-control" placeholder="Last Name">
 </div>
 </div>
 <div class="col-xs-12 col-sm-12 col-md-12">
 <div class="form-group">
 <strong>Contact Number: </strong>
 <input type="text" name="contactno" class="form-control" placeholder="Contact Number">
 </div>
 </div>
 
 <a class="btn btn-primary" href="{{ route('home')}}">Back </a>
 <button type="submit" class="btn btn-primary">Submit</button>
 </div>
 </div>
</form>
@endsection