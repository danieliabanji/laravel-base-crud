@extends('layouts.app')
@section('content')
    <div id="bg-gifts" class="position-relative">
        <section class="container bg-white ">

            <div class="my-card my-pos-absolute-center p-5">

                <h2 class="text-center"><span class="text-capitalize">{{ $gift->name }}</span> quest'anno sei stato buono,
                    ti sei meritato: </h2>
                <h3 class="text-center p-5 text-capitalize">{{ $gift->gift }}</h3>
                <div class="row align-items-center">

                    <div class="col-lg-6 col-md-4">
                        <div class="d-flex justify-content-center">
                            <div class="box-body ">
                                <img src="{{ $gift->image }}" class="img img-fluid img-gift" alt="{{ $gift->gift }}">
                                <div class="box-lid">
                                    <div class="box-bowtie"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-6 col-md-4 ">
                        <div class="p-1">
                            <strong>Il regalo appartiene a: </strong><span class="text-capitalize">{{ $gift->name }}
                                {{ $gift->surname }}</span>
                        </div>
                        <div class="p-1">
                            <strong> Anni:</strong> <span class="text-capitalize">{{ $gift->age }}</span>
                        </div>
                        <div class="p-1">
                            <strong> Paese:</strong> <span class="text-capitalize">{{ $gift->country }}</span>
                        </div>
                        <div class="p-1">
                            <strong> Citta: </strong><span class="text-capitalize">{{ $gift->city }}</span>
                        </div>
                        <div class="p-1">
                            <strong>Indirizzo: </strong><span class="text-capitalize">{{ $gift->address }}</span>
                        </div>
                        @if (!is_null($gift->description))
                            <div class="p-1">
                                <strong>Descrizione del regalo:</strong> {{ $gift->description }}
                            </div>
                        @endif
                    </div>
                </div>
                <a href="{{ route('gifts.edit', $gift->id) }}" class="btn my_btn_blue float-end mx-2">Modifica!</a>
                <a class="btn my_btn_green float-end" href="{{ route('gifts.index') }}">Home</a>

            </div>

        </section>
    </div>
@endsection
