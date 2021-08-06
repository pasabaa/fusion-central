<?php include('template/header.php') ?>

<div class="container">
    <div class="row justify-content-around align-items-center">
        <div class="col-md-4 col-12 p-4 my-4 rounded form">
            <h1 class="display-4 fw-bolder">Contáctanos</h1>
            <form class="p-4">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="mt-2">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control form-control-sm" id="nombre"
                                aria-describedby="nombre">
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="mt-2">
                            <label for="apellidos" class="form-label">Apellidos</label>
                            <input type="text" class="form-control form-control-sm" id="apellidos"
                                aria-describedby="apellidos">
                        </div>
                    </div>
                </div>
                <div class="mt-2">
                    <label for="email" class="form-label">Correo electrónico</label>
                    <input type="email" class="form-control form-control-sm" id="email" aria-describedby="email">
                </div>
                <div class="mt-2">
                    <label for="message" class="form-label">Mensaje</label>
                    <textarea id="message" class="form-control form-control-sm" aria-describedby="message"></textarea>
                </div>
                <div class="mt-2 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Recibir actualizaciones del sitio</label>
                </div>
                <button type="submit" class="mt-4 btn bg-green fw-bolder">Submit</button>
            </form>
        </div>
    </div>

</div>

<?php include('template/footer.php')?>