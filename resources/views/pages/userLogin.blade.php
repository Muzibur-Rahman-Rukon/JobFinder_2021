@extends('master')
@section('body')

 <div class="container ">
     <center> <h1 style="margin-top: 5%;color:#fb246a">JOB FINDER LOGIN</h1></center>
            <!-- Mobile Menu -->
<div class="row">

    <div class="col-lg-9" >
          <form>
           
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<div class="col-lg-3">
     <figure><img src="{{URL::to('assets/img/signup-image.jpg')}}" alt="sing up image"></figure>
</div>
        </div>
   </div>
    @endsection