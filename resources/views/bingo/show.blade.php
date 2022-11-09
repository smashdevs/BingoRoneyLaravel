@extends('layouts.app', ['page' => __('Jogos'), 'pageSlug' => 'jogos'])
<style>

</style>
@section('content')
<div id="app">
    <tela-bingo :data="
        {
            nome:'{!! $data->nome !!}',
            descricao:'{!! $data->descricao !!}',
            id:'{!! $data->id !!}',
            horaBingo: '{!! $data->hora_inicio !!}'
        }"></tela-bingo>
</div>
    @endsection
    <script type="module" src="{{ mix('/resources/js/app.js') }}"></script>
    <script type="module" src="{{ mix('/resources/css/app.css') }}"></script>
