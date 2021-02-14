@extends('layouts.master')
@section('title', 'DIARY AND CALENDAR')

@section('content')

    @component('components.header.header', [ 'title' => 'Agenda y Calendario', 'showCenterLogo' => false ])
    @endcomponent

    @component('components.diary.diary')
    @endcomponent
    
    @component('components.tabs.tabs', [ 'data_tab' => 'presenciales', 'data_tab2' => 'virtuales', 'tab_text' => 'presenciales', 'tab_text2' => 'virtuales' ])
        @slot('tabs_body')
            <div id="presenciales" class="tabs-content__item current">
                <div class="tabs-timetable">
                <div class="tabs-timetable__content">
                        <div class="tabs-timetable__item">
                            <h3 class="tabs-timetable__day">Lunes</h3>
                            <div class="tabs-timetable__time time-available">09:00 am</div>
                            <div class="tabs-timetable__time">10:00 am</div>
                            <div class="tabs-timetable__time">11:00 am</div>
                            <div class="tabs-timetable__time">12:00 am</div>
                            <div class="tabs-timetable__time">1:00 pm</div>
                            <div class="tabs-timetable__time">2:00 pm</div>
                            <div class="tabs-timetable__time">3:00 pm</div>
                            <div class="tabs-timetable__time">4:00 pm</div>
                            <div class="tabs-timetable__time">5:00 pm</div>
                            <div class="tabs-timetable__time">6:00 pm</div>
                            <div class="tabs-timetable__time">7:00 pm</div>
                            <div class="tabs-timetable__time">8:00 pm</div>
                            <div class="tabs-timetable__time">9:00 pm</div>
                            <div class="tabs-timetable__time">10:00 pm</div>
                        </div>
                        <div class="tabs-timetable__item">
                            <h3 class="tabs-timetable__day">Martes</h3>
                            <div class="tabs-timetable__time">09:00 am</div>
                            <div class="tabs-timetable__time">10:00 am</div>
                            <div class="tabs-timetable__time">11:00 am</div>
                            <div class="tabs-timetable__time">12:00 am</div>
                            <div class="tabs-timetable__time">1:00 pm</div>
                            <div class="tabs-timetable__time">2:00 pm</div>
                            <div class="tabs-timetable__time">3:00 pm</div>
                            <div class="tabs-timetable__time">4:00 pm</div>
                            <div class="tabs-timetable__time">5:00 pm</div>
                            <div class="tabs-timetable__time">6:00 pm</div>
                            <div class="tabs-timetable__time">7:00 pm</div>
                            <div class="tabs-timetable__time">8:00 pm</div>
                            <div class="tabs-timetable__time">9:00 pm</div>
                            <div class="tabs-timetable__time">10:00 pm</div>
                        </div>
                        <div class="tabs-timetable__item">
                            <h3 class="tabs-timetable__day">Miércoles</h3>
                            <div class="tabs-timetable__time">09:00 am</div>
                            <div class="tabs-timetable__time">10:00 am</div>
                            <div class="tabs-timetable__time">11:00 am</div>
                            <div class="tabs-timetable__time">12:00 am</div>
                            <div class="tabs-timetable__time">1:00 pm</div>
                            <div class="tabs-timetable__time">2:00 pm</div>
                            <div class="tabs-timetable__time">3:00 pm</div>
                            <div class="tabs-timetable__time">4:00 pm</div>
                            <div class="tabs-timetable__time">5:00 pm</div>
                            <div class="tabs-timetable__time">6:00 pm</div>
                            <div class="tabs-timetable__time">7:00 pm</div>
                            <div class="tabs-timetable__time">8:00 pm</div>
                            <div class="tabs-timetable__time">9:00 pm</div>
                            <div class="tabs-timetable__time">10:00 pm</div>
                        </div>
                        <div class="tabs-timetable__item">
                            <h3 class="tabs-timetable__day">Jueves</h3>
                            <div class="tabs-timetable__time">09:00 am</div>
                            <div class="tabs-timetable__time">10:00 am</div>
                            <div class="tabs-timetable__time">11:00 am</div>
                            <div class="tabs-timetable__time">12:00 am</div>
                            <div class="tabs-timetable__time">1:00 pm</div>
                            <div class="tabs-timetable__time">2:00 pm</div>
                            <div class="tabs-timetable__time">3:00 pm</div>
                            <div class="tabs-timetable__time">4:00 pm</div>
                            <div class="tabs-timetable__time">5:00 pm</div>
                            <div class="tabs-timetable__time">6:00 pm</div>
                            <div class="tabs-timetable__time">7:00 pm</div>
                            <div class="tabs-timetable__time">8:00 pm</div>
                            <div class="tabs-timetable__time">9:00 pm</div>
                            <div class="tabs-timetable__time">10:00 pm</div>
                        </div>
                        <div class="tabs-timetable__item">
                            <h3 class="tabs-timetable__day">Viernes</h3>
                            <div class="tabs-timetable__time">09:00 am</div>
                            <div class="tabs-timetable__time">10:00 am</div>
                            <div class="tabs-timetable__time">11:00 am</div>
                            <div class="tabs-timetable__time">12:00 am</div>
                            <div class="tabs-timetable__time">1:00 pm</div>
                            <div class="tabs-timetable__time">2:00 pm</div>
                            <div class="tabs-timetable__time">3:00 pm</div>
                            <div class="tabs-timetable__time">4:00 pm</div>
                            <div class="tabs-timetable__time">5:00 pm</div>
                            <div class="tabs-timetable__time">6:00 pm</div>
                            <div class="tabs-timetable__time">7:00 pm</div>
                            <div class="tabs-timetable__time">8:00 pm</div>
                            <div class="tabs-timetable__time">9:00 pm</div>
                            <div class="tabs-timetable__time">10:00 pm</div>
                        </div>
                        <div class="tabs-timetable__item">
                            <h3 class="tabs-timetable__day">Sábado</h3>
                            <div class="tabs-timetable__time">09:00 am</div>
                            <div class="tabs-timetable__time">10:00 am</div>
                            <div class="tabs-timetable__time">11:00 am</div>
                            <div class="tabs-timetable__time">12:00 am</div>
                            <div class="tabs-timetable__time">1:00 pm</div>
                            <div class="tabs-timetable__time">2:00 pm</div>
                            <div class="tabs-timetable__time">3:00 pm</div>
                            <div class="tabs-timetable__time">4:00 pm</div>
                            <div class="tabs-timetable__time">5:00 pm</div>
                            <div class="tabs-timetable__time">6:00 pm</div>
                            <div class="tabs-timetable__time">7:00 pm</div>
                            <div class="tabs-timetable__time">8:00 pm</div>
                            <div class="tabs-timetable__time">9:00 pm</div>
                            <div class="tabs-timetable__time">10:00 pm</div>
                        </div>
                        <div class="tabs-timetable__item">
                            <h3 class="tabs-timetable__day">Domingo</h3>
                            <div class="tabs-timetable__time">09:00 am</div>
                            <div class="tabs-timetable__time">10:00 am</div>
                            <div class="tabs-timetable__time">11:00 am</div>
                            <div class="tabs-timetable__time">12:00 am</div>
                            <div class="tabs-timetable__time">1:00 pm</div>
                            <div class="tabs-timetable__time">2:00 pm</div>
                            <div class="tabs-timetable__time">3:00 pm</div>
                            <div class="tabs-timetable__time">4:00 pm</div>
                            <div class="tabs-timetable__time">5:00 pm</div>
                            <div class="tabs-timetable__time">6:00 pm</div>
                            <div class="tabs-timetable__time">7:00 pm</div>
                            <div class="tabs-timetable__time">8:00 pm</div>
                            <div class="tabs-timetable__time">9:00 pm</div>
                            <div class="tabs-timetable__time">10:00 pm</div>
                        </div>
                </div>
                <div class="tabs-controls">
                    <a href="#" class="button button--blue-cian">
                        <div class="button__icon icon-save"></div>
                        <span class="button__text">Guardar</span>
                    </a>
                </div>
                </div>
            </div>
            <div id="virtuales" class="tabs-content__item">
                <div class="tabs-timetable">
                    <div class="tabs-timetable__content">
                        <div class="tabs-timetable__item">
                            <h3 class="tabs-timetable__day">Lunes</h3>
                            <div class="tabs-timetable__time time-available">09:00 am</div>
                            <div class="tabs-timetable__time">10:00 am</div>
                            <div class="tabs-timetable__time">11:00 am</div>
                            <div class="tabs-timetable__time">12:00 am</div>
                            <div class="tabs-timetable__time">1:00 pm</div>
                            <div class="tabs-timetable__time">2:00 pm</div>
                            <div class="tabs-timetable__time">3:00 pm</div>
                            <div class="tabs-timetable__time">4:00 pm</div>
                            <div class="tabs-timetable__time">5:00 pm</div>
                            <div class="tabs-timetable__time">6:00 pm</div>
                            <div class="tabs-timetable__time">7:00 pm</div>
                            <div class="tabs-timetable__time">8:00 pm</div>
                            <div class="tabs-timetable__time">9:00 pm</div>
                            <div class="tabs-timetable__time">10:00 pm</div>
                        </div>
                        <div class="tabs-timetable__item">
                            <h3 class="tabs-timetable__day">Martes</h3>
                            <div class="tabs-timetable__time">09:00 am</div>
                            <div class="tabs-timetable__time">10:00 am</div>
                            <div class="tabs-timetable__time">11:00 am</div>
                            <div class="tabs-timetable__time">12:00 am</div>
                            <div class="tabs-timetable__time">1:00 pm</div>
                            <div class="tabs-timetable__time">2:00 pm</div>
                            <div class="tabs-timetable__time">3:00 pm</div>
                            <div class="tabs-timetable__time">4:00 pm</div>
                            <div class="tabs-timetable__time">5:00 pm</div>
                            <div class="tabs-timetable__time">6:00 pm</div>
                            <div class="tabs-timetable__time">7:00 pm</div>
                            <div class="tabs-timetable__time">8:00 pm</div>
                            <div class="tabs-timetable__time">9:00 pm</div>
                            <div class="tabs-timetable__time">10:00 pm</div>
                        </div>
                        <div class="tabs-timetable__item">
                            <h3 class="tabs-timetable__day">Miércoles</h3>
                            <div class="tabs-timetable__time">09:00 am</div>
                            <div class="tabs-timetable__time">10:00 am</div>
                            <div class="tabs-timetable__time">11:00 am</div>
                            <div class="tabs-timetable__time">12:00 am</div>
                            <div class="tabs-timetable__time">1:00 pm</div>
                            <div class="tabs-timetable__time">2:00 pm</div>
                            <div class="tabs-timetable__time">3:00 pm</div>
                            <div class="tabs-timetable__time">4:00 pm</div>
                            <div class="tabs-timetable__time">5:00 pm</div>
                            <div class="tabs-timetable__time">6:00 pm</div>
                            <div class="tabs-timetable__time">7:00 pm</div>
                            <div class="tabs-timetable__time">8:00 pm</div>
                            <div class="tabs-timetable__time">9:00 pm</div>
                            <div class="tabs-timetable__time">10:00 pm</div>
                        </div>
                        <div class="tabs-timetable__item">
                            <h3 class="tabs-timetable__day">Jueves</h3>
                            <div class="tabs-timetable__time">09:00 am</div>
                            <div class="tabs-timetable__time">10:00 am</div>
                            <div class="tabs-timetable__time">11:00 am</div>
                            <div class="tabs-timetable__time">12:00 am</div>
                            <div class="tabs-timetable__time">1:00 pm</div>
                            <div class="tabs-timetable__time">2:00 pm</div>
                            <div class="tabs-timetable__time">3:00 pm</div>
                            <div class="tabs-timetable__time">4:00 pm</div>
                            <div class="tabs-timetable__time">5:00 pm</div>
                            <div class="tabs-timetable__time">6:00 pm</div>
                            <div class="tabs-timetable__time">7:00 pm</div>
                            <div class="tabs-timetable__time">8:00 pm</div>
                            <div class="tabs-timetable__time">9:00 pm</div>
                            <div class="tabs-timetable__time">10:00 pm</div>
                        </div>
                        <div class="tabs-timetable__item">
                            <h3 class="tabs-timetable__day">Viernes</h3>
                            <div class="tabs-timetable__time">09:00 am</div>
                            <div class="tabs-timetable__time">10:00 am</div>
                            <div class="tabs-timetable__time">11:00 am</div>
                            <div class="tabs-timetable__time">12:00 am</div>
                            <div class="tabs-timetable__time">1:00 pm</div>
                            <div class="tabs-timetable__time">2:00 pm</div>
                            <div class="tabs-timetable__time">3:00 pm</div>
                            <div class="tabs-timetable__time">4:00 pm</div>
                            <div class="tabs-timetable__time">5:00 pm</div>
                            <div class="tabs-timetable__time">6:00 pm</div>
                            <div class="tabs-timetable__time">7:00 pm</div>
                            <div class="tabs-timetable__time">8:00 pm</div>
                            <div class="tabs-timetable__time">9:00 pm</div>
                            <div class="tabs-timetable__time">10:00 pm</div>
                        </div>
                        <div class="tabs-timetable__item">
                            <h3 class="tabs-timetable__day">Sábado</h3>
                            <div class="tabs-timetable__time">09:00 am</div>
                            <div class="tabs-timetable__time">10:00 am</div>
                            <div class="tabs-timetable__time">11:00 am</div>
                            <div class="tabs-timetable__time">12:00 am</div>
                            <div class="tabs-timetable__time">1:00 pm</div>
                            <div class="tabs-timetable__time">2:00 pm</div>
                            <div class="tabs-timetable__time">3:00 pm</div>
                            <div class="tabs-timetable__time">4:00 pm</div>
                            <div class="tabs-timetable__time">5:00 pm</div>
                            <div class="tabs-timetable__time">6:00 pm</div>
                            <div class="tabs-timetable__time">7:00 pm</div>
                            <div class="tabs-timetable__time">8:00 pm</div>
                            <div class="tabs-timetable__time">9:00 pm</div>
                            <div class="tabs-timetable__time">10:00 pm</div>
                        </div>
                        <div class="tabs-timetable__item">
                            <h3 class="tabs-timetable__day">Domingo</h3>
                            <div class="tabs-timetable__time">09:00 am</div>
                            <div class="tabs-timetable__time">10:00 am</div>
                            <div class="tabs-timetable__time">11:00 am</div>
                            <div class="tabs-timetable__time">12:00 am</div>
                            <div class="tabs-timetable__time">1:00 pm</div>
                            <div class="tabs-timetable__time">2:00 pm</div>
                            <div class="tabs-timetable__time">3:00 pm</div>
                            <div class="tabs-timetable__time">4:00 pm</div>
                            <div class="tabs-timetable__time">5:00 pm</div>
                            <div class="tabs-timetable__time">6:00 pm</div>
                            <div class="tabs-timetable__time">7:00 pm</div>
                            <div class="tabs-timetable__time">8:00 pm</div>
                            <div class="tabs-timetable__time">9:00 pm</div>
                            <div class="tabs-timetable__time">10:00 pm</div>
                        </div>
                    </div>
                </div>
                <div class="tabs-controls">
                    <a href="#" class="button button--blue-cian">
                        <div class="button__icon icon-save"></div>
                        <span class="button__text">Guardar</span>
                    </a>
                </div>
            </div>
        @endslot
    @endcomponent
    
@endsection

@push('scripts')
    
    
@endpush
