<header class="bg-white">
    <div class="container d-flex justify-content-between align-items-center">
        <div>
            <img class="img-fluid" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo">
        </div>
        <nav class="navbar navbar-expand-lg">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="d-flex flex-wrap align-items-center list-unstyled">
                @foreach (config('partialsdb.navLinks') as $link)
                <li class="pe-4"><a href="#">{{$link}}</a></li>
                @endforeach
            </ul>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
        </nav>
    </div>
</header>
