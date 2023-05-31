@extends('layouts.app')

@section('content')
    <div class="my-form-height container">
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <h3 class="py-3 text-center text-primary">Inserisci un nuovo fumetto</h3>
            <div class="mb-3">
                <label for="title" class="form-label">Inserisci il titolo</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{old('title')}}" placeholder="Inserisci qui il titolo"
                    required maxlength="150">
            </div>
            @error('title')
            <div class="alert alert-danger">
                {{$message}}
            </div>
            @enderror
            <div class="mb-3">
                <label for="thumb" class="form-label">Inserisci l'url dell'immagine</label>
                <textarea required class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb" rows="5">
                    {{old('thumb')}}
                </textarea>
            </div>
            @error('thumb')
            <div class="alert alert-danger">
                {{$message}}
            </div>
            @enderror
            <div class="mb-3">
                <label for="description" class="form-label">Inserisci la descrizione</label>
                <textarea required class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="9">
                    {{old('description')}}
                </textarea>
            </div>
            @error('description')
            <div class="alert alert-danger">
                {{$message}}
            </div>
            @enderror
            <div class="row mb-3">
                <div class="col">
                    <label for="price" class="form-label">Inserisci il prezzo</label>
                    <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{old('price')}}"
                        placeholder="Inserisci qui il prezzo" required maxlength="30">
                </div>
                @error('price')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
                @enderror
                <div class="col">
                    <label for="series" class="form-label">Inserisci la serie</label>
                    <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series"
                    value="{{old('series')}}" placeholder="Inserisci qui la serie" required maxlength="70">
                </div>
                @error('series')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="sale_date" class="form-label">Inserisci la data di uscita</label>
                    <input type="date" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date"
                    value="{{old('date')}}" placeholder="Inserisci qui la data di uscita" required>
                </div>
                @error('sale_date')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
                @enderror
                <div class="col">
                    <label for="type" class="form-label">Inserisci il genere</label>
                    <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type"
                    value="{{old('type')}}" placeholder="Inserisci qui il genere" required maxlength="70">
                </div>
                @error('type')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="artists" class="form-label">Inserisci l'artista/gli artisti</label>
                <textarea required class="form-control @error('artists') is-invalid @enderror" id="artists" name="artists" rows="5">
                    {{old('thumb')}}
                </textarea>
            </div>
            @error('artists')
            <div class="alert alert-danger">
                {{$message}}
            </div>
            @enderror
            <div class="mb-3">
                <label for="writers" class="form-label">Inserisci lo scrittore/gli scrittori</label>
                <textarea required class="form-control @error('artists') is-invalid @enderror" id="writers" name="writers" rows="5">
                    {{old('thumb')}}
                </textarea>
            </div>
            @error('writers')
            <div class="alert alert-danger">
                {{$message}}
            </div>
            @enderror
            <button type="submit" class="btn btn-primary mb-3">Inserisci</button>
            <button type="reset" class="btn btn-danger mb-3">Annulla</button>
        </form>
    </div>
@endsection
