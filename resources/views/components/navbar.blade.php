<!-- NAVBAR -->

<nav class="navbar navbar-expand-lg bg-dark border-bottom" data-bs-theme="dark">
<div class="container-fluid">
<a class="navbar-brand" href="{{ route('Homepage') }}"><i class="bi bi-camera-reels-fill"></i></a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav me-auto mb-2 mb-lg-0">
<!-- MENU -->
<li class="nav-item">
<a class="nav-link active" aria-current="page" href="{{ route('Homepage') }}">Home</a>
</li>

<li class="nav-item">
<a class="nav-link" href="{{ route('aboutUs') }}">Chi siamo</a>
</li>


<li class="nav-item">
<a class="nav-link" href="{{ route('contacts') }}">Contattaci</a>
</li>

<!-- DROPDOWN -->
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
I nostri servizi
</a>
<ul class="dropdown-menu">
<li><a class="dropdown-item" href="{{ route('movie.list') }}">I nostri film</a></li>
</ul>
</li>

</ul>

</div>
</div>
</nav>

<!-- FINE NAVBAR -->