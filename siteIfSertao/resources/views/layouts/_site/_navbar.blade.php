<nav>
    <div class="nav-wrapper light-green darken-4">
        <div class="container">
            <a href="#!" class="brand-logo">LOGO</a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="{{ route('site.home') }}">Home</a></li>
                <li><a href="{{ route('site.prof') }}">Professores</a></li>
                <li><a href="collapsible.html">Trabalhos</a></li>
                <li><a href="mobile.html">Atas</a></li>
                <li><a href="{{ route('site.informes') }}">Informes</a></li>
                <li><a href="mobile.html">Projetos</a></li>
                
                

                <ul id="cursos" class="dropdown-content">
                    <li><a href="#!">NDE</a></li>
                    <li><a href="#!">Colegiado</a></li>

                </ul>

                <li><a class="dropdown-trigger" href="#" data-target="cursos">Cursos<i class="material-icons right">arrow_drop_down</i></a></li>

                <li><a href="mobile.html"><i class="far fa-user"></i></a></li>
            </ul>
        </div>
    </div>
</nav>

<ul class="sidenav" id="mobile-demo">
    <li><a href="sass.html">Home</a></li>
    <li><a href="badges.html">Professores</a></li>
    <li><a href="collapsible.html">Trabalhos</a></li>
    <li><a href="mobile.html">Atas</a></li>
    <li><a href="mobile.html">Informes</a></li>
    <li><a href="mobile.html">Projetos</a></li>
</ul>