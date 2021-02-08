@extends('layouts.master')
@section('title', 'MY PROFILE')

@section('content')
    @component('components.header.header', [ 'title' => 'Mi Perfil', 'showCenterLogo' => false ])
    @endcomponent

    @component('components.finances.finances')
    @endcomponent

@endsection

@push('scripts')
    
    
@endpush
