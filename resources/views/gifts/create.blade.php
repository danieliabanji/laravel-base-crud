@extends('layouts.app')
@section('content')
    <section id="create">
        <div id="bg-gifts">
            <div class="container">
                <h1 class="text-center fonts py-4">Caro Babbo Natale, per Natale esigo...</h1>
                <div class="row">
                    <div class="col-6">
                        <img class="img-fluid mt-5" src="{{ Vite::asset('resources/img/buzon.png') }}" alt="">
                    </div>
                    <div class="col-6 my-card">
                        <form action="{{ route('gifts.store') }}" method="POST" class="p-4">
                            @csrf
                            <div class="row">
                                <div class="mb-3 col-6">
                                    <label for="title" class="form-label">Regalo</label>
                                    <input type="text" class="form-control @error('title') is-valid is-invalid @enderror"
                                        id="gift" name="gift" required>
                                    @error('title')
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                        <div class="invalid-feedback">
                                            Please enter a message correct.
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3 col-lg-6 col-md-12">
                                    <label for="description" class="form-label">Descrizione</label>
                                    <textarea class="form-control" id="description" name="description"></textarea>

                                </div>
                                <div class="mb-3 col-6">
                                    <label for="name" class="form-label">Nome</label>
                                    <input type="text" class="form-control @error('name') is-valid is-invalid @enderror"
                                        id="name" name="name" required>
                                    @error('name')
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                        <div class="invalid-feedback">
                                            Please enter a message correct.
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3 col-6">
                                    <label for="surname" class="form-label">Cognome</label>
                                    <input type="text"
                                        class="form-control @error('surname') is-valid is-invalid @enderror" id="surname"
                                        name="surname" required>
                                    @error('surname')
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                        <div class="invalid-feedback">
                                            Please enter a message correct.
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3 col-6">
                                    <label for="age" class="form-label">Anni</label>
                                    <input type="number" class="form-control @error('age') is-valid is-invalid @enderror"
                                        id="age" name="age">
                                    @error('age')
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                        <div class="invalid-feedback">
                                            Please enter a message correct.
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3 col-6">
                                    <label for="country" class="form-label">Nazione</label>
                                    <input type="text"
                                        class="form-control @error('country') is-valid is-invalid @enderror" id="country"
                                        name="country" required>
                                    @error('country')
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                        <div class="invalid-feedback">
                                            Please enter a message correct.
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3 col-6">
                                    <label for="city" class="form-label">Citta</label>
                                    <input type="text" class="form-control @error('city') is-valid is-invalid @enderror"
                                        id="city" name="city" required>
                                    @error('city')
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                        <div class="invalid-feedback">
                                            Please enter a message correct.
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3 col-6">
                                    <label for="address" class="form-label">Indirizzo</label>
                                    <input type="text"
                                        class="form-control @error('address') is-valid is-invalid @enderror" id="address"
                                        name="address" required>
                                    @error('address')
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                        <div class="invalid-feedback">
                                            Please enter a message correct.
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3 col-12">
                                    <label for="image" class="form-label">Url Immagine</label>
                                    <input type="text" class="form-control @error('image') is-valid is-invalid @enderror"
                                        id="image" name="image" required>
                                    @error('image')
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                        <div class="invalid-feedback">
                                            Please enter a message correct.
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="text-center mt-5">
                                <button type="submit" class="btn my_btn_gold">Invia la letterina</button>
                                <button type="reset" class="btn my_btn_blue">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

    </section>
    </div>
@endsection
