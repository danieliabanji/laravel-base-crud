@extends('layouts.app')
@section('content')
    <div id="bg-gifts" class="position-relative">
        <section class="container bg-white">

            <div class="my-card my-pos-absolute-center">
                <h2 class="text-center text-capitalize">{{ $gift->name }} te lo sei meritato! </h2>
                <h3 class="text-center p-5 text-capitalize">{{ $gift->gift }}</h3>
                <div class="row">
                    <div class="col-12 col-md-4">
                        <img src="{{ $gift->image }}" class="img-fluid img-gift" alt="{{ $gift->gift }}">
                    </div>
                    <div class="col-12 col-md-8">
                        <div>
                            Il regalo appartiene a: <strong>{{ $gift->name }}</strong>
                        </div>
                        <div>
                            Anni: <strong>{{ $gift->age }}</strong>
                        </div>
                        <div>
                            Paese: <strong>{{ $gift->country }}</strong>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
