@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create User') }}</div>
                <div class="card-body">
                    <form method="post" action="{{route('dashboard.users.store')}}">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Name.." value="">
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" name="email" placeholder="email.." value="">
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" name="password" placeholder="password.." value="">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection