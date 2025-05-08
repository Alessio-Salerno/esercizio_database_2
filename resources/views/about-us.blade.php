<x-layout>




<header>



<div class="container-fluid header">
    <div class="row h-100 justify-content-around align-items-center">
      
<div class="col-6">
    <h2 class="text-white text-color text-center">Chi siamo</h2>
    <p class="text-white text-color">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum alias debitis dignissimos, voluptate architecto fugiat ad repellat sapiente iure corrupti labore exercitationem, optio autem in, nobis repudiandae doloremque dicta! Numquam.</p>

</div>

<div class="col-6">
<img src="/media/WhatsApp Image 2025-05-05 at 12.10.15.jpeg" alt="foto team" class="img-fluid shadow rounded">
</div>

    </div>
</div>

</header>


<section>
    <div class="container userHeight">
        <div class="row h-100 justify-content-around align-items-center">
            @foreach ($users as $user )
            <div class="col-12 col-md-4">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $user['name'] }} {{ $user['surname'] }}</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">{{ $user['role'] }}</h6>
                    <a href="{{ route('aboutUsDetail', ['name' => $user['name']]) }}" class="card-link">Leggi di più</a>
                </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


</x-layout>