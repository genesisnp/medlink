@extends('layouts.master')
@section('title', 'INDICATOR')

@section('content')
    @component('components.header.header')
    @endcomponent

    @component('components.patients-attended.patients-attended')
    @endcomponent

    @component('components.views.views')
    @endcomponent

    @component('components.progress.progress')
    @endcomponent

    @component('components.citation-breakdown.citation-breakdown')
    @endcomponent

    @component('components.effectiveness-rate.effectiveness-rate')
    @endcomponent

    @component('components.diagnostics.diagnostics')
    @endcomponent

@endsection

@push('scripts')
    
    
@endpush
