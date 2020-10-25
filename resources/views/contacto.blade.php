@if(session('matriculaConfirmado'))
    @include('confirmacion' )
@endif

<div class="modal fade" id="ContactoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg"  role="document" >
        <link rel="stylesheet" href="css/contacto.css">
        <div class="modal-content" >
            <div class="modal-header"> 
                <h6 class="mt-2 display-8 font-weight-bold" id="exampleModalLabel">Métodos de Contacto</h6>
                <button type="button" class="close btn btn-danger" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="row g-3 was-validated mt-1" action="{{ route('contacto.send') }}" method="POST">
                    @csrf
                    <div class="col-lg-6 ">
                        <dl class="row">
                            <dt class="col-sm-3 my-2">Dirección:</dt>
                            <dd class="col-sm-9 my-2">
                                <p>Calle Oropéndola, N°2 </p>
                                <p>29631 Arroyo de La Miel, Málaga</p>
                            </dd>
                            <dt class="col-sm-3 my-2">Facebook:</dt>
                            <dd class="col-sm-9 my-2">LaAcademiaSC</dd>
                            <dt class="col-sm-3 my-2">Teléfono:</dt>
                            <dd class="col-sm-9 my-2">+34 662510860</dd>
                            <dt class="col-sm-3 my-2">Email:</dt>
                            <dd class="col-sm-9 my-2">la_academia_sc@hotmail.com</dd>
                        </dl>
                    </div>
                    <div class="col-lg-6 row ">
                        <h6 class="pl-2 pb-2 display-8 font-weight-bold">o envíanos un mensaje!</h6>
                        <span class="subrayado mx-1"></span>
                        <div class="containerRelative px-0  col-12 col-md-12 my-4 mx-1">
                            <input placeholder=" " type="text" name="name" value="{{old('name')}}" class="form-Dani" id="name" required>
                            <span class="barra  "></span>
                            <label for="name" class="form-label" onclick="document.getElementById('name').focus()">Nombre</label>
                        </div>
                        <div class=" containerRelative px-0 col-12 col-md-12 my-4 mx-1">
                            <input placeholder=" " type="text" name="subname" value="{{old('subname')}}" class="form-Dani" id="subname" required>
                            <span class="barra "></span>
                            <label for="subname" class="form-label" onclick="document.getElementById('subname').focus()">Apellidos</label>
                        </div>
                        <div class="containerRelative px-0 col-12 col-md-12 my-4 mx-1">
                            <input placeholder=" " type="email" name="email" value="{{old('email')}}" class="form-Dani" id="email" required>
                            <span class="barra "></span>
                         <label for="email" class="form-label" onclick="document.getElementById('email').focus()">Correo electrónico</label>
                        </div>
                        <div class="col-md-12 containerRelative mx-1">
                            <textarea class="form-Dani col-12" placeholder=" " value="{{old('mensaje')}}" name="mensaje" id="mensaje" rows="4"required></textarea>
                            <span class="barra"></span>
                            <label for="validationTextarea" onclick="document.getElementById('mensaje').focus()" class="form-label">Mensaje</label>
                        </div>
                        <button class="btn btn-success px-0 col-12 col-md-12 mt-2 mx-1" type="submit">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>