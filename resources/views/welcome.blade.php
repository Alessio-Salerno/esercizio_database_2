<x-layout>




<header>

<div class="container-fluid header">

@if (session()->has('successMessage'))
<div class="alert alert-success">
    {{ session('successMessage') }}
</div>
@endif

    <div class="row h-100">
        <div class="col-12 text-color d-flex justify-content-center align-items-center">
            <h1 class="text-light display-1 fw-bold">MOVIE MANIA</h1>
        </div>
    </div>
</div>

</header>

</x-layout>    
  