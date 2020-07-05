@extends('layouts.master')
@section('content')
    <form role="form" class='ml-5 mt-5 mr-5' action="/article" method="POST">
    @csrf
    <div class="card-body">
        <div class="form-group">
            <label>Judul</label>
            <input type="text" class="form-control" name="name"  >
        </div>
        <div class="form-group">
            <label>Isi</label>
            <input type="text" class="form-control" name="isi" >
        </div>
        <div class="form-group">
            <label>Tag</label>
            <input type="text" class="form-control" name="tag" >
        </div>
        <button type="submit" class="btn btn-primary btn-info">Submit</button>
    </div>
    </form>

@endsection
