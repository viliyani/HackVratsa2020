@extends('layouts.manage')

@section('content')
<div class="alert alert-info">Привет, <strong>{{ Auth::user()->name }}</strong>!</div>
@endsection
