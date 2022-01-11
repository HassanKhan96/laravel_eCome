@extends('master')
@section('content')
<div class="container custom-container">
    <div class="row w-100 justify-content-center">
        <div class="col-sm-7">
                <h2 class="mb-5 text-center mt-5">Register User</h2>
                <form  action="register" method="POST" class="d-flex flex-column justify-content-center align-items-center" >
                    @csrf
                    <div class="col-sm-10 mb-3">
                        <label for="staticUsrename" class="col-sm-2 form-label">Username</label>
                        <input type="text" name="name" class="form-control" id="staticUsrename" placeholder="Enter username">
                    </div>
                    <div class="col-sm-10 mb-3">
                        <label for="staticEmail" class="col-sm-2 form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="staticEmail" placeholder="Enter email">
                    </div>
                    
                    <div class="col-sm-10 mb-3">
                        <label for="inputPassword" class="col-sm-2 form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Enter password">
                    </div>
                    <div class="col-sm-10">
                        <button class="btn btn-primary" type="submit">Register</button>
                    </div>
                </form>
        </div>
    </div>
</div>
@endsection