<div class="footer">
    <div id="footerMobile" class="footer-container blue-bg">
        <div class="footer-div">
            <img class="logo" src="{{asset('admin/assets/icons/logo.svg')}}" alt="">
        </div>
        <hr>
        <div>
            <div id="shop" class="footer-drop-down">
                <p class="drop-down-title">TIENDA</p>
                <p class="drop-down-cross">+</p>
            </div>
            <div id="shopList" style="display: flex; flex-direction: column">
                <a href="{{ url('productos?categoryId=2') }}">PLAZA</a>
                <a href="{{ url('productos?categoryId=1') }}">JUEGOS INDIVIDUALES</a>
                <a href="{{ url('productos') }}">VER TODOS</a>
            </div>
        </div>
        <hr>
        <div>
            <div id="us" class="footer-drop-down">
                <p class="drop-down-title">NOSOTROS</p>
                <p class="drop-down-cross">+</p>
            </div>
            <div id="usList" class="active">
                <ul>
                    <li></li>
                </ul>
            </div>
        </div>
        <hr>
        <div>
            <div id="socialMedia" class="footer-drop-down">
                <p class="drop-down-title">NUESTRAS REDES</p>
                <p class="drop-down-cross">+</p>
            </div>
            <div id="socialMediaList">
                <a href="https://www.instagram.com/decorelieve/?hl=es" target="_blank">
                    <img src="{{ asset('admin/assets/icons/igIcon.svg') }}" alt="">
                </a>
                <a href="https://m.facebook.com/DecoRelieve/" target="_blank">
                    <img src="{{ asset('admin/assets/icons/fbIcon.svg') }}" alt="">
                </a>
            </div>
        </div>
        <hr>
        <div class="footer-div">
            <button class="button contact-btn">Contacto</button>
        </div>
        <div class="footer-div questions-div">
            <a class="general-questions" href="">POLÍTICA DE DEVOLUCIONES</a>
            <a class="general-questions" href="">PREGUNTAS FRECUENTES</a>
            <a class="general-questions" href="">ENVÍOS Y GARANTÍAS</a>
        </div>
    </div>

    <div id="footerDesktop" class="footer-container blue-bg" style="display: none;">
        <div class="footer-div">
            <img class="logo" src="{{asset('admin/assets/icons/logo.svg')}}" alt="">
        </div>
        <hr>
        <div>
            <div id="shop" class="footer-drop-down">
                <p class="drop-down-title">TIENDA</p>
                <p class="drop-down-cross">+</p>
            </div>
            <div id="shopList" style="display: flex; flex-direction: column">
                <a href="{{ url('productos?categoryId=2') }}">PLAZA</a>
                <a href="{{ url('productos?categoryId=1') }}">JUEGOS INDIVIDUALES</a>
                <a href="{{ url('productos') }}">VER TODOS</a>
            </div>
        </div>
        <hr>
        <div>
            <div id="us" class="footer-drop-down">
                <p class="drop-down-title">NOSOTROS</p>
                <p class="drop-down-cross">+</p>
            </div>
            <div id="usList" class="active">
                <ul>
                    <li></li>
                </ul>
            </div>
        </div>
        <hr>
        <div>
            <div id="socialMedia" class="footer-drop-down">
                <p class="drop-down-title">NUESTRAS REDES</p>
                <p class="drop-down-cross">+</p>
            </div>
            <div id="socialMediaList">
                <a href="https://www.instagram.com/decorelieve/?hl=es" target="_blank">
                    <img src="{{ asset('admin/assets/icons/igIcon.svg') }}" alt="">
                </a>
                <a href="https://m.facebook.com/DecoRelieve/" target="_blank">
                    <img src="{{ asset('admin/assets/icons/fbIcon.svg') }}" alt="">
                </a>
            </div>
        </div>
        <hr>
        <div class="footer-div">
            <button class="button contact-btn">Contacto</button>
        </div>
        <div class="footer-div questions-div">
            <a class="general-questions" href="">POLÍTICA DE DEVOLUCIONES</a>
            <a class="general-questions" href="">PREGUNTAS FRECUENTES</a>
            <a class="general-questions" href="">ENVÍOS Y GARANTÍAS</a>
        </div>
    </div>
    <div class="footer-copyright light-blue-bg" style="margin: 0">
        <p class="copyright-text" style="margin-right: 2px">Jugando Toy © Todos los derechos reservados.</p>
        <div class="d-flex">
            <p class="copyright-text" style="margin-right: 5px">Sitio creado por </p>
            <img src="{{ asset('admin/assets/images/GridMakersLogo.svg') }}" alt="">
        </div>
    </div>
</div>
