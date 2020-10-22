<div class="section-pricing bg-principal text-light py-6">
    <div class="container-xl">
        <div class="text-center ">
            <div>
                <i class="fas fa-euro-sign text-light fa-3x"></i>
            </div>
            <p class="display-7 my-3">
                NUESTROS
                <span class="font-weight-bold">
                    PRECIOS
                </span>
            </p>
        </div>
        <div class="row text-center align-items-stretch justify-content-center">

            <!-- Carta Precio -->
            @component('components.card')
            @slot('title','Primaria')
            @slot('price1')
            2 horas a la semana (martes y jueves)
            45€<span class="text-small font-weight-normal ml-2">/mes por asignatura
            </span>
            @endslot
            @slot('price2')
            3 horas a la semana (lunes miércoles y viernes)
            55€<span class="text-small font-weight-normal ml-2">/mes por asignatura
            </span>
            @endslot
            @slot('listSubjects',["Lenguaje y Literatura","Inglés","Matemáticas","Francés"])
            @endcomponent

            <!-- FIN Carta Precio -->

            <!-- Carta Precio -->
            @component('components.card')
            @slot('title','ESO')
            @slot('price1')
            2 horas a la semana (martes y jueves)
            45€<span class="text-small font-weight-normal ml-2">/mes por asignatura
            </span>
            @endslot
            @slot('price2')
            3 horas a la semana (lunes miércoles y viernes)
            55€<span class="text-small font-weight-normal ml-2">/mes por asignatura
            </span>
            @endslot
            @slot('listSubjects',["Lenguaje y Literatura","Inglés","Matemáticas","Francés","Física y Química"])
            @endcomponent
            <!-- FIN Carta Precio -->

            <!-- Carta Precio -->
            @component('components.card')
            @slot('title','Bachillerato')
            @slot('price1')
            2 horas a la semana (martes y jueves)
            45€<span class="text-small font-weight-normal ml-2">/mes por asignatura
            </span>
            @endslot
            @slot('price2')
            3 horas a la semana (lunes miércoles y viernes)
            55€<span class="text-small font-weight-normal ml-2">/mes por asignatura
            </span>
            @endslot
            @slot('listSubjects',["Lenguaje y Literatura","Inglés","Matemáticas","Francés","Física","Química"])
            @endcomponent
            <!-- FIN Carta Precio -->


        </div>

    </div>

</div>
