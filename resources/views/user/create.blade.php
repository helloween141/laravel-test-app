@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Create user</li>
                    </ol>
                </nav>
                <div class="card">
                    <div class="card-header">{{ __('Create user') }}</div>
                    <div class="card-body">
                        <form action="{{ route('create') }}">
                            <div class="form-group">
                                <label for="exampleInputName1">Name</label>
                                <input type="name" class="form-control" id="exampleInputName1" aria-describedby="nameHelp" placeholder="Enter name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
