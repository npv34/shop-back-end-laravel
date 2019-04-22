@extends('layouts.app')
@section('page-content')
    <div class="col-12 col-md-12">
        <form method="post" action="" enctype="multipart/form-data">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @csrf
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" required value="{{ old('name') }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Slug</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="slug" required value="{{ old('slug') }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Desc</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="desc" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Image</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" name="image" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary mb-2">Create</button>
                </div>
            </div>
        </form>
    </div>

@endsection
