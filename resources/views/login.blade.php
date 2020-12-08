@extends('layouts.core_template')
@section('body_contents')
<div class="row">
    <div class="col-sm-6 offset-sm-3">
        <div class="card mt-5">
            <div class="card-body">
                <h1 class="card-title text-center">Student Management System</h1>
                <form action="{{ url('authenticate') }}" method="post">
                    <h3 class="mb-3 text-center">Login</h3>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" class="form-control" placeholder="Email Address" autofocus>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="checkbox mb-3">
                        <label><input type="checkbox" value="1" name="remember_token" id="remember_token"> Remember
                            me</label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection