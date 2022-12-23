<?php
$packages = config('package.packages');
?>
@extends('layouts.app')

@section('content')
    <section id="gifts">
        @include('partials.lucine')


        <div class="container">
            <a href="{{ route('home') }}" class="text-decoration-none">
                <h1 class="text-center py-5 fonts">Regali di Natale</h1>
            </a>
            <div class="row ">
                @foreach ($gifts as $gift)
                    <div class="col-sm-12 col-md-3 col-lg-3 mb-4">
                        <div class="card my-card">

                            <img src="{{ Vite::asset('resources/img/' . $packages[rand(0, 5)]['url']) }} "
                                class="card-img-top" alt="box-random">

                            <div class="card-body text-center">
                                <h5 class="card-title py-3 text-capitalize">{{ $gift->name }} {{ $gift->surname }}</h5>
                                <a href="{{ route('gifts.show', $gift->id) }}" class="btn my_btn_gold fonts">Scopri!</a>
                                <a href="{{ route('gifts.edit', $gift->id) }}" class="btn my_btn_blue fonts">Modifica!</a>
                                <form action="{{ route('gifts.destroy', $gift->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn my_btn_delete"><i
                                            class="fa-solid fa-trash"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div id="letter">
            <div class="christmas-card">
                <div class="card-front">
                    <div class="christmas-tree"></div>
                    <div class="ribbon"></div>
                    <div class="text">
                        {{-- <a href="{{ route('gifts.create') }}" class="btn btn-success">
                            Scrivi a Babbo
                        </a> --}}
                        <div class="bg">
                            <div class="centerer">
                                <a href="{{ route('gifts.create') }}"
                                    class="btn btn-primary mybtn_position my_btn_gold">Scrivi a
                                    Babbo</a>
                            </div>
                        </div>


                    </div>
                    <div class="star"></div>
                    <div class="balls"></div>
                </div>
            </div>
        </div>


    </section>
@endsection
