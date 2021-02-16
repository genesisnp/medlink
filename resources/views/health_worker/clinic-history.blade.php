@extends('layouts.master')
@section('title', 'PATIENTS')

{{-- @push('styles')
    <link rel="stylesheet" href={{ mix('css/patients.css') }}>
@endpush  --}}

@section('content')
    @component('components.header.header', [ 'title' => 'Historia Clínica', 'showCenterLogo' => false ])
    @endcomponent

@endsection

@push('scripts')

@endpush
