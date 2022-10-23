@extends('layouts.app', ['page' => __('Bingo'), 'pageSlug' => 'bingo'])

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="title">Meus jogos</h3>
                    <p class="category">Jogos onde você está inscrito</p>
                </div>
                <div class="card-body all-icons">
                    <div class="row">
                        <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                            <div class="game-card">
                                <img src="{{ asset('images/3-youtube-banners-gaming-channel-art-v2-Q8TD5L6.jpg') }}" alt="">
                            </div>
                            <a href="">
                                <p class="text-center font-weight-bold">Bingo do Ronei</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
