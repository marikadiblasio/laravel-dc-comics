@extends('layouts.app')


@section('content')
<div class="container welcome text-center">
    <h1 class="display-3 col-12">The Biggest Comics Collection</h1>
    <a href="{{route('comics.index')}}" class="btn btn-primary my-5" type="button">Discover</a>
</div>
@endsection
