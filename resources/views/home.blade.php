@extends('layouts.app')
@section('content')
    <section class="home position-relative">
        <div id="audio">
            <audio controls autoplay>
                <source src="{{ Vite::asset('./resources/audio/We-Wish-You-A-Merry-Chhristmas-Kids.mp3') }}" type="audio/mp3">
            </audio>
        </div>
        <a href="{{ route('gifts.index') }}" class="btn btn-primary mybtn_position">Regali</a>
    </section>
@endsection
