@extends('layouts.app')
@section('content')
    <section id="create">
        <div id="bg-gifts">
            <div class="container">
                <h1 class="text-center fonts py-4">Caro Babbo Natale, ho cambiato idea...</h1>

                <div class="row">
                    <div class="col-6">
                        <img class="img-fluid" src="{{ Vite::asset('resources/img/albero.png') }}" alt="Albero">
                    </div>
                    <div class="col-6 my-card">
                        <form action="{{ route('gifts.update', $gift->id) }}" method="POST" class="p-4">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="mb-3 col-6">
                                    <label for="gift" class="form-label">Regalo</label>
                                    <input type="text" class="form-control @error('gift') is-invalid @enderror"
                                        id="gift" name="gift" required value="{{ old('gift', $gift->gift) }}">
                                    @error('gift')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3 col-lg-6 col-md-12">
                                    <label for="description" class="form-label">Descrizione</label>
                                    <textarea class="form-control" id="description" name="description">
                                        {{ old('description', $gift->description) }}
                                    </textarea>

                                </div>
                                <div class="mb-3 col-6">
                                    <label for="name" class="form-label">Nome</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        id="name" name="name" required value="{{ old('name', $gift->name) }}">
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3 col-6">
                                    <label for="surname" class="form-label">Cognome</label>
                                    <input type="text" class="form-control @error('surname') is-invalid @enderror"
                                        id="surname" name="surname" required value="{{ old('surname', $gift->surname) }}">
                                    @error('surname')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3 col-6">
                                    <label for="age" class="form-label">Anni</label>
                                    <input type="number" class="form-control @error('age') is-invalid @enderror"
                                        id="age" name="age" value="{{ old('age', $gift->age) }}">
                                    @error('age')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3 col-6">
                                    <label for="country" class="form-label">Nazione</label>
                                    <input type="text" class="form-control @error('country') is-invalid @enderror"
                                        id="country" name="country" required
                                        value="{{ old('country', $gift->country) }}">
                                    @error('country')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3 col-6">
                                    <label for="city" class="form-label">Città'</label>
                                    <input type="text" class="form-control @error('city') is-invalid @enderror"
                                        id="city" name="city" required value="{{ old('city', $gift->city) }}">
                                    @error('city')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3 col-6">
                                    <label for="address" class="form-label">Indirizzo</label>
                                    <input type="text" class="form-control @error('address') is-invalid @enderror"
                                        id="address" name="address" required
                                        value="{{ old('address', $gift->address) }}">
                                    @error('address')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3 col-12">
                                    <label for="image" class="form-label">Url Immagine</label>
                                    <input type="text" class="form-control @error('image') is-invalid @enderror"
                                        id="image" name="image" required value="{{ old('image', $gift->image) }}">
                                    @error('image')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="text-center mt-5">
                                <button type="submit" class="btn my_btn_gold">Modifica la letterina</button>
                                <button type="reset" class="btn my_btn_blue">Reset</button>
                                <a class="btn my_btn_green" href="{{ route('gifts.index') }}">Home</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
    </div>
@endsection
