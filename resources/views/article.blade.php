@extends('layouts.master')

@section('content')
<button type="submit"><a href='/article/create'>Create new</button>
 @foreach ( $article as $key => $item)
 {
    <hr>
    {{-- @php
        echo dd($item->name);
    @endphp --}}
    <h4 class="font-weight-bold">Judul : {{$item->name}}</h4>
    <h5>Slug : {{$item->slug}}</h5>
    <p>{{$item->isi}}</p>
    <button type="submit" class="btn btn-primary btn-info"><a href="/article/{{$item->id}}" class="text-light">Info</a></button>
    <button type="submit" class="btn btn-primary btn-info"><a href="/article/{{$item->id}}/edit" class="text-light">Edit</a></button>
    <form action="/article/{{$item->id}}" method="POST" class="d-inline">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-primary btn-danger " >Delete</button>
    </form>
 }

 @endforeach
@endsection

