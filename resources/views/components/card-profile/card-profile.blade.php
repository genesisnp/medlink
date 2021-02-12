@push('styles')
    <link rel="stylesheet" href={{ mix('css/card-profile.css') }}>
@endpush

<div class="card-profile bg-white">
    <div class="card-profile__container">
        <div class="card-profile-front">
            <div class="card-profile-front__wrapper">
                <div class="card-profile-image">
                    <label for="front-profile" class="card-profile-image__label"><span class="icon-edit"></span>Editar imagen de portada</label>
                    <input type="file" name="front-profile" id="front-profile" class="card-profile-image__input"/> 
                    <img src="assets/images/bg-my-perfil.jpg" class="card-profile-image__preview-img front-profile"/>
                </div>
            </div>
        </div>
        <div class="card-profile__content">
            <div class="card-profile-info">
                <div class="card-profile-info__left">
                    <h2>Frances Mujica</h2>
                    <h3>Cardiología</h3>
                    <span>CMP: 12345</span>
                    <span>RNE: 1234</span>
                </div>
                <div class="card-profile-info__right">
                    <div class="card-profile-info__social-media">
                        <a href="#" class="icon-web">
                            <span class="hidden-visually">Icono web</span>
                        </a>
                        <a href="#" class="icon-linkedin">
                            <span class="hidden-visually">Icono Linkedin</span>
                        </a>
                        <a href="#" class="icon-instagram2">
                            <span class="hidden-visually">Icon Instagram</span>
                        </a>
                        <a href="#" class="icon-facebook">
                            <span class="hidden-visually">Icon Facebook</span>
                        </a>
                    </div>
                    <div class="card-profile-info-image">
                        {{-- <img src="assets/images/imagen-dr.png" alt="Imagen de la Dra Frances Mujica"> --}}
                        <div class="card-profile-image">
                            <label for="img-profile" class="card-profile-image__label"><span class="icon-edit"></span></label>
                            <input type="file" name="img-profile" id="img-profile" class="card-profile-image__input"/> 
                            <img src="assets/images/imagen-dr.png" class="card-profile-image__preview-img img-profile"/>
                        </div>
                    </div>
                </div>
                <p class="card-profile-info__description">Soy la Dra Frances Mujica, médico especialista en Dermatología clínica, estética y cirugía láser. Con mas de una década de experiencia tratando las patologías de la piel, el cabello y las uñas. Graduada en la Universidad de Medicina de Moscú-I.M.Sechenov- Rusia. Me apasiona mi trabajo y es un verdadero placer poder resolver todos los problemas relacionados a mi especialidad.</p>
                <ul class="card-profile-info__costs">
                    <li>COSTO DE CITA VIRTUAL: <strong>S/100</strong></li>
                    <li>COSTO DE CITA PRESENCIAL: <strong>S/210</strong></li>
                </ul>
                <div class="card-profile-info__controls">
                    <button class="button button--blue-cian open-modal" data-modal-link="form-appointment">
                        <span class="button__icon icon-edit"></span>
                        <span class="button__text">Editar</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@push('scripts')
    <script src={{ mix('js/card-profile.js') }}></script>
@endpush