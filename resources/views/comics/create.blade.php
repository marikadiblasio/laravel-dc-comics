@extends('layouts.app')

@section('content')
    <div class="my-form-height container">
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <h3 class="py-3 text-center text-primary">Inserisci un nuovo fumetto</h3>
            <div class="mb-3">
                <label for="title" class="form-label">Inserisci il titolo</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci qui il titolo">
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Inserisci il link dell'immagine</label>
                <textarea class="form-control" id="thumb" name="thumb" rows="5"></textarea>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Inserisci la descrizione</label>
                <textarea class="form-control" id="description" name="description" rows="9"></textarea>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="price" class="form-label">Inserisci il prezzo</label>
                    <input type="text" class="form-control" id="price" name="price"
                        placeholder="Inserisci qui il prezzo">
                </div>
                <div class="col">
                    <label for="series" class="form-label">Inserisci la serie</label>
                    <input type="text" class="form-control" id="series" name="series"
                        placeholder="Inserisci qui la serie">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="sale_date" class="form-label">Inserisci la data di uscita</label>
                    <input type="text" class="form-control" id="sale_date" name="sale_date"
                        placeholder="Inserisci qui la data di uscita">
                </div>
                <div class="col">
                    <label for="type" class="form-label">Inserisci il genere</label>
                    <input type="text" class="form-control" id="type" name="type"
                        placeholder="Inserisci qui il genere">
                </div>
            </div>
            <div class="mb-3">
                <label for="artists" class="form-label">Inserisci l'artista/gli artisti</label>
                <textarea class="form-control" id="artists" name="artists" rows="5"></textarea>
            </div>
            <div class="mb-3">
                <label for="writers" class="form-label">Inserisci lo scrittore/gli scrittori</label>
                <textarea class="form-control" id="writers" name="writers" rows="5"></textarea>
            </div>
        </form>
    </div>
@endsection
