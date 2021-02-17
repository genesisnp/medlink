@push('styles')
    <link rel="stylesheet" href={{ mix('css/tabs-timetable.css') }}>
@endpush

@php
    $showControl = isset($showControl) ? $showControl : true;
    $showLegend = isset($showLegend) ? $showLegend : false;
    $showDate = isset($showDate) ? $showDate : false;
    $showArrows = isset($showArrows) ? $showArrows : false;
@endphp

<div id="presenciales" class="tabs-content__item current">
    @if ($showLegend)
        <div class="tabs-legend">
            <div class="tabs-legend__item">
                <span class="tabs-legend__text">Horarios Disponibles</span>
                <div class="tabs-legend__color tabs-legend__color--green-light"></div>
            </div>
            <div class="tabs-legend__item">
                <span class="tabs-legend__text">Horarios No Disponibles</span>
                <div class="tabs-legend__color tabs-legend__color--white"></div>
            </div>
        </div>
    @endif
    
    <div class="tabs-timetable-wrapper">
        <div class="tabs-timetable__content">
            <div class="tabs-timetable__item">
                <h3 class="tabs-timetable__day">Lunes 
                    @if ($showDate)
                        <span>{{ $date }}</span>
                    @endif
                </h3>
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
        @if ($showControl)
            <div class="tabs-timetable-controls">
                <a href="#" class="button button--blue-cian">
                    <div class="button__icon icon-save"></div>
                    <span class="button__text">Guardar</span>
                </a>
            </div>
        @endif
        @if ($showArrows)
            <div class="tabs-timetable-arrows">
                <button class="tabs-timetable__arrow tabs-timetable__arrow--left">
                    <span class="icon-polygon"></span>
                </button>
                <button class="tabs-timetable__arrow tabs-timetable__arrow--right">
                    <span class="icon-polygon"></span>
                </button>
            </div> 
        @endif
        
    </div>
</div>
<div id="virtuales" class="tabs-content__item">
    @if ($showLegend)
        <div class="tabs-legend">
            <div class="tabs-legend__item">
                <span class="tabs-legend__text">Horarios Disponibles</span>
                <div class="tabs-legend__color tabs-legend__color--blue-cian"></div>
            </div>
            <div class="tabs-legend__item">
                <span class="tabs-legend__text">Horarios No Disponibles</span>
                <div class="tabs-legend__color tabs-legend__color--white"></div>
            </div>
        </div>
    @endif
    
    <div class="tabs-timetable-wrapper">
        <div class="tabs-timetable__content">
            <div class="tabs-timetable__item">
                <h3 class="tabs-timetable__day">Lunes
                    @if ($showDate)
                        <span>{{ $date }}</span>
                    @endif
                </h3>
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
        @if ($showControl)
            <div class="tabs-timetable-controls">
                <a href="#" class="button button--blue-cian">
                    <div class="button__icon icon-save"></div>
                    <span class="button__text">Guardar</span>
                </a>
            </div>
        @endif
        @if ($showArrows)
            <div class="tabs-timetable-arrows">
                <button class="tabs-timetable__arrow tabs-timetable__arrow--left">
                    <span class="icon-polygon"></span>
                </button>
                <button class="tabs-timetable__arrow tabs-timetable__arrow--right">
                    <span class="icon-polygon"></span>
                </button>
            </div> 
        @endif
    </div>
</div>