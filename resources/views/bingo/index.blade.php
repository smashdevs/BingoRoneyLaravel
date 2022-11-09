@extends('layouts.app', ['page' => __('Jogos'), 'pageSlug' => 'jogos'])
<style>
    .font-icon-detail {
        background-image: url("http://localhost:8000/images/Gaming%20Vlogger%20Channel%20Banner%20Maker%20copy.jpg");
        width: 100%;
    }

    .font-icon-detail .shadow{
        background-color: white;
        position: absolute;
        bottom: 16px;
        opacity: .8;
        width: 86%;
    }

    .font-icon-detail .text{
        position: absolute;
        bottom: 16px;
        text-align: center;
        color: black;
        width: 86%;
        left: 12px;
        font-weight: 600;
    }

    .card-header button.novo_bingo {
        position: absolute;
        right: 10px;
        top: 10px;
    }

    .card-header button.novo_bingo i {
        margin-top: -5px;
        margin-right: 5px;
    }

    .card .card-header {
        color: black !important;
    }
</style>
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5 class="title">Meus bingos</h5>
                <p class="category">Bingos criados por você:</p>
                @include("bingo.includes.new")
            </div>
            <div class="card-body all-icons">
                <div class="row">
                    @foreach ($games as $game)
                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                        <a href="{{ route("jogos.show",["jogo"=>$game->id]) }}">
                            <div class="font-icon-detail">
                                <div class="shadow">&nbsp;</div>
                                <div class="text">{{ $game->nome }}</div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
  </div>
@endsection
