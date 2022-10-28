@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <div class="row">
        <form action="Create" method="post">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Fullname</label>
                <input type="text" name="fullname"class="form-control" id="exampleInputEmail1" placeholder="Enter your fullname" value="{{ old('fullname')}}">
                <span style="color:red">@error('fullname'){{$message}}@enderror</span>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Email</label>
                <input type="email" name="email" class="form-control" id="exampleInputPassword1" placeholder="Enter your Email"  value="{{ old('email')}}">
                <span style="color:red">@error('email'){{$message}}@enderror</span>
            </div>
            <br>
               <button type="submit" class="btn btn-info">Add data</button>
          </form>
      </div>
          
        <div class="row">
          <h1 style="text-align: center">Table Data</h1>
            <table class="table table-bordered">
              <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Full name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
              </thead>
              <tbody>
                {{-- Control display function output --}}
                @foreach ($Userdatas as $Users)
                <tr class="text-center">   
                    <td>{{$Users->id}}</td>
                    <td>{{$Users->fullname}}</td>
                    <td>{{$Users->email}}</td>
                    <td>
                    <a href="{{"Edit/".$Users['id']}}" class="btn btn-success" >Edit</a>
                    <a href="{{"Delete/".$Users['id']}}" class="btn btn-danger" >Delete</a>
                    </td>
                </tr>
                @endforeach
              </tbody>
            </table>
    </div>
</div>
</div>
@endsection
