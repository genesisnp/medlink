@extends('layouts.master')
@section('title', 'PATIENTS')

@section('content')
    @component('components.header.header', [ 'title' => 'Historia Clínica', 'showCenterLogo' => false ])
    @endcomponent

    @component('components.clinic-history.clinic-history')
    @endcomponent
    
@endsection

@push('scripts')

@endpush
