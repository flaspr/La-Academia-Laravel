<div class="col-12 col-md-6 col-lg-4 mb-5 mb-lg-0 card-effect-2">
    <div class="bg-dark p-5 h-100 zoom-out-card-effect-2 rounded-lg shadow">

        <h2 class="display-8 text-uppercase font-weight-bold mb-3">{{ $title }}</h2>
        <div>

            <ul class="list-unstyled text-small text-left">
                <h5 class=" font-weight-bold">
                    <div class="text-center">
                        <i class="fas fa-sm fa-star text-secundario-claro"></i>
                        <i class="fas fa-sm fa-star-half-alt text-secundario-claro"></i>
                        <i class="far fa-sm fa-star "></i>
                    </div>
                    {{ $price1 }}
                </h5>
                <h5 class="font-weight-bold">
                    <div class="text-center">

                        <i class="fas fa-sm fa-star text-secundario-claro"></i>
                        <i class="fas fa-sm fa-star text-secundario-claro"></i>
                        <i class="fas fa-sm fa-star text-secundario-claro"></i>
                    </div>
                    {{ $price2 }}
                </h5>
            </ul>

            <ul class="list-unstyled my-3 text-small text-left ">
                @foreach($listSubjects as $subjet)
                <li class="mb-3 h5">
                    <i class="fa fa-check mr-2"></i>
                    {{ $subjet }}
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
