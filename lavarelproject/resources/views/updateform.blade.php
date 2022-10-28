@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <div class="row">
        <form action="/Update" method="post">
            @csrf
            <input type="hidden" name="id" value="{{$Updatedata['id']}}">
            <div class="form-group">
                <label for="exampleInputEmail1">Fullname</label>
                <input type="text" name="fullname"class="form-control" id="exampleInputEmail1" placeholder="Enter your fullname" value="{{$Updatedata['fullname']}}">
                <span style="color:red">@error('fullname'){{$message}}@enderror</span>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Email</label>
                <input type="email" name="email" class="form-control" id="exampleInputPassword1" placeholder="Enter your Email"  value="{{$Updatedata['email']}}">
                <span style="color:red">@error('email'){{$message}}@enderror</span>
            </div>
            <br>
               <button type="submit" class="btn btn-info">Update data</button>
          </form>
      </div>

</div>
</div>
@endsection
