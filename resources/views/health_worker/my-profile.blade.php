@extends('layouts.master')
@section('title', 'MY PROFILE')

@section('content')
    @component('components.header.header', [ 'title' => 'Mi Perfil', 'showCenterLogo' => false ])
    @endcomponent

    @component('components.progress.progress')
    @endcomponent

    @component('components.form-profile.form-profile')
    @endcomponent

@endsection

