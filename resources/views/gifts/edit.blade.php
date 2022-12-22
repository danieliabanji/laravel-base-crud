@extends('layouts.app')
@section('content')
    <section class="container mt-4">
        <h1 class="text-center">Modifica {{ $gift->gift }}</h1>
        <div class="row bg-white">
            <div class="col-12">
                <form action="{{ route('gifts.update', $gift->id) }}" method="POST" class="p-4">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="title" class="form-label">Regalo</label>
                        <input type="text" class="form-control" id="gift" name="gift"
                            value="{{ old('gift', $gift->gift) }}">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea class="form-control" id="description" name="description"> {{ old('description', $gift->description) }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="name" name="name"
                            value="{{ old('name', $gift->name) }}">
                    </div>
                    <div class="mb-3">
                        <label for="surname" class="form-label">Cognome</label>
                        <input type="text" class="form-control" id="surname" name="surname"
                            value="{{ old('surname', $gift->surname) }}">
                    </div>
                    <div class="mb-3">
                        <label for="age" class="form-label">Anni</label>
                        <input type="number" class="form-control" id="age" name="age"
                            value="{{ old('age', $gift->age) }}">
                    </div>
                    <div class="mb-3">
                        <label for="country" class="form-label">Nazione</label>
                        <input type="text" class="form-control" id="country" name="country"
                            value="{{ old('country', $gift->country) }}">
                    </div>
                    <div class="mb-3">
                        <label for="city" class="form-label">Citta</label>
                        <input type="text" class="form-control" id="city" name="city"
                            value="{{ old('city', $gift->city) }}">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Indirizzo</label>
                        <input type="text" class="form-control" id="address" name="address"
                            value="{{ old('address', $gift->address) }}">
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Url Immagine</label>
                        <input type="text" class="form-control" id="image" name="image"
                            value="{{ old('image', $gift->image) }}">
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                    <button type="reset" class="btn btn-primary">Reset</button>
                </form>
            </div>
        </div>

    </section>
@endsection
