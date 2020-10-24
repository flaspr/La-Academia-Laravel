<!DOCTYPE html>
<html lang="en">

    <!-- Modal -->
<div class="modal fade" id="ContactoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
    <link rel="stylesheet" href="css/matricula.css">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            Contacta con nosotros
            <form class="row g-3 was-validated mt-3" action="{{ route('matricula.send') }}" method="POST">
                @csrf
                <div class="col-md-5 row ">
                    <div class="containerRelative px-0  col-12 col-md-12 my-4">
                        <input placeholder=" " type="text" name="name" class="form-Dani" id="validationCustom01" required>
                        <span class="barra  "></span>
                        <label for="validationCustom01" class="form-label">Nombre</label>
                    </div>
                    
                    <div class=" containerRelative px-0 col-12 col-md-12 my-4">
                        <input placeholder=" " type="text" name="subname" class="form-Dani" id="validationCustom01" required>
                        <span class="barra "></span>
                        <label for="validationCustom01" class="form-label">Apellidos</label>
                    </div>
        
                    <div class="containerRelative px-0 col-12 col-md-12 my-4">
                        <input placeholder=" " type="email" name="email" class="form-Dani" id="email" required>
                        <span class="barra "></span>
                        <label for="email" class="form-label">Correo electrónico</label>
                    </div>
        
                </div>
        
                <div class="pr-3 col-md-12 containerRelative">
                    <textarea class="form-Dani col-12" placeholder=" "  id="mensaje" rows="4"required></textarea>
                    <span class="barra"></span>
                    <label for="validationTextarea" class="form-label">Mensaje</label>
                </div>
        
                <div class="col-12">
                    <button class="btn btn-success ml-4" type="submit">Enviar</button>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
    </div>
</div>
</div>

</html>