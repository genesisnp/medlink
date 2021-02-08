@extends('layouts.master')
@section('title', 'DIARY AND CALENDAR')

@section('content')
    @component('components.header.header', [ 'title' => 'Agenda y Calendario', 'showCenterLogo' => false ])
    @endcomponent

    @component('components.diary.diary')
    @endcomponent

    @component('components.tabs-diary.tabs-diary')
    @endcomponent
    
@endsection

@push('scripts')
    
    
@endpush
