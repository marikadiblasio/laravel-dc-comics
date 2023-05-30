@extends('layouts.app')

@section('content')
    <div class="my-form-height container">
        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
            @csrf
            @method('PUT')
            <h3 class="py-3 text-center text-primary">Modifica {{$comic->title}}</h3>
            <div class="mb-3">
                <label for="title" class="form-label">Inserisci il nuovo titolo</label>
                <input type="text" class="form-control" id="title" name="title" value="{{$comic->title}}" placeholder="Inserisci qui il titolo">
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Inserisci la nuova url dell'immagine</label>
                <textarea class="form-control" id="thumb" name="thumb" rows="5">{{$comic->thumb}}</textarea>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Inserisci la nuova descrizione</label>
                <textarea class="form-control" id="description" name="description" rows="9">{{$comic->description}}</textarea>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="price" class="form-label">Inserisci il prezzo</label>
                    <input type="text" class="form-control" id="price" name="price" value="{{$comic->price}}"
                        placeholder="Inserisci qui il nuovo prezzo">
                </div>
                <div class="col">
                    <label for="series" class="form-label">Inserisci la nuova serie</label>
                    <input type="text" class="form-control" id="series" value="{{$comic->series}}" name="series"
                        placeholder="Inserisci qui la serie">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="sale_date" class="form-label">Inserisci la data di uscita</label>
                    <input type="date" class="form-control" id="sale_date" value="{{$comic->sale_date}}" name="sale_date"
                        placeholder="Inserisci qui la data di uscita">
                </div>
                <div class="col">
                    <label for="type" class="form-label">Inserisci il genere</label>
                    <input type="text" class="form-control" id="type" value="{{$comic->type}}" name="type"
                        placeholder="Inserisci qui il genere">
                </div>
            </div>
            <div class="mb-3">
                <label for="artists" class="form-label">Inserisci l'artista/gli artisti</label>
                <textarea class="form-control" id="artists" name="artists" rows="5">{{$comic->artists}}</textarea>
            </div>
            <div class="mb-3">
                <label for="writers" class="form-label">Inserisci lo scrittore/gli scrittori</label>
                <textarea class="form-control" id="writers" name="writers" rows="5">{{$comic->writers}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary mb-3">Salva modifiche</button>
            <button type="reset" class="btn btn-danger mb-3">Annulla</button>
        </form>
    </div>
@endsection
