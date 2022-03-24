@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-10">

                <h1>Create Staff</h1>
            </div>
            <div class="col-2">
                <a href="/staffs" class="btn btn-outline-primary float-end">Staff List</a>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <form action="/staffs" method="post">
                    @csrf
                    @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input class="form-control" type="text" name="name" placeholder="Staff's Name">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input class="form-control" type="text" name="email" placeholder="Staff's Email">
                    </div>

                    <div class="form-group">
                        <label for="address">Address</label>
                        <textarea class="form-control" name="address" cols="30" rows="10"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input class="form-control" type="text" name="phone" placeholder="Staff's Phone Number">
                    </div>

                    <button class="btn btn-success float-end" type="submit">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection
