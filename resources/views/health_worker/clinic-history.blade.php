@extends('layouts.master')
@section('title', 'PATIENTS')

{{-- @push('styles')
    <link rel="stylesheet" href={{ mix('css/patients.css') }}>
@endpush  --}}

@section('content')
    @component('components.header.header', [ 'title' => 'Historia Clínica', 'showCenterLogo' => false ])
    @endcomponent

    <div class="clinic-history">
        <div class="clinic-history__container">
            <ul class="clinic-history__accordion accordion">
                <li>
                    <a>Información del paciente</a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit, ipsum, fuga, in, obcaecati magni ullam nobis voluptas fugiat tenetur voluptatum quas tempora maxime rerum neque deserunt suscipit provident cumque et mollitia ex aspernatur porro minus sapiente voluptatibus eos at perferendis repellat odit aliquid harum molestias ratione pariatur adipisci. Aliquid, iure.</p>
                </li>
                <li>
                    <a>Antecedentes Personales</a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit, ipsum, fuga, in, obcaecati magni ullam nobis voluptas fugiat tenetur voluptatum quas tempora maxime rerum neque deserunt suscipit provident cumque et mollitia ex aspernatur porro minus sapiente voluptatibus eos at perferendis repellat odit aliquid harum molestias ratione pariatur adipisci. Aliquid, iure.</p>
                </li>
                <li>
                    <a>Historial del Paciente</a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit, ipsum, fuga, in, obcaecati magni ullam nobis voluptas fugiat tenetur voluptatum quas tempora maxime rerum neque deserunt suscipit provident cumque et mollitia ex aspernatur porro minus sapiente voluptatibus eos at perferendis repellat odit aliquid harum molestias ratione pariatur adipisci. Aliquid, iure.</p>
                </li>
            </ul> 
        </div>
    </div>
    
@endsection

@push('scripts')

@endpush
