@extends('layouts.master')
@section('title', 'FINANCES')

@section('content')
    @component('components.header.header', [ 'title' => 'Finanzas', 'showCenterLogo' => false ])
    @endcomponent

    @component('components.finances.finances')
    @endcomponent

@endsection

@push('scripts')
    
    
@endpush
