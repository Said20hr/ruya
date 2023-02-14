@extends('voyager::master')
@section('content')
    <div class="page-content">
        @include('voyager::alerts')
        @include('voyager::dimmers')

        @livewire('admin.google-analytics')
    </div>
@stop



