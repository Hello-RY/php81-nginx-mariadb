@extends('layouts.app')

@section('title', 'postn')


@section('content')

  <x-alert class="bg-green-400" type='warning' >
    this is an alart message!@
  </x-alert>

  <h1>post index</h1>
  @foreach ($posts as $post)
  <div>
    <p class="text-green-400">this is a paragraphfaaaaaa</p>
    <h2> {{ $post->title }} </h2>

  </div>      
  @endforeach
@endsection
