    <?php
        include '../controller/traerDatosController.php';
        ?>

        <!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="../style/index.css">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

            
            <title>Autos</title>
        </head>
        <body>
            


            <!-- Tabla de datos -->
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Placa</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Color</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($datosCarro as $carro) { ?>
                        <tr>
                            <th scope="row"><?php echo $carro['id'] ?></th>
                            <td><?php echo $carro['placa'] ?></td>
                            <td><?php echo $carro['marca'] ?></td>
                            <td><?php echo $carro['color'] ?></td>
                            <td>
                                <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#editarModal<?php echo $carro['id'] ?>">Editar</button>
                                <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#eliminarModal<?php echo $carro['id'] ?>">Eliminar</button>
                                <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#registrarModal"<?php echo $carro['id'] ?>">Registrar</button>
                            </td>
    </div>
    </div>
                        
                        <!-- Modal de Editar -->
                        <div class="modal fade" id="editarModal<?php echo $carro['id'] ?>" tabindex="-1" aria-labelledby="editarModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <form class="row gy-2 gx-3 align-items-center bg-light p-4 rounded shadow" action="../controller/appController.php" method="post">
            
            <div class="col-auto">
                <label class="visually-hidden" for="autoSizingInput">Placa</label>
                <input type="text" class="form-control" id="autoSizingInput" name="placa" placeholder="Placa">
            </div>
            <div class="col-auto">
            <label class="visually-hidden" for="autoSizingInput">Marca</label>
            <input type="text" class="form-control" id="autoSizingInput" name="marca" placeholder="Marca">
                </div>
            <div class="col-auto">
                <label class="visually-hidden" for="autoSizingInputGroup">Color</label>
                <div class="input-group">
                <span class="input-group-text">Color</span>
                <input type="text" class="form-control" id="autoSizingInputGroup" name="color" placeholder="Color">
                </div>
            </div>
        
            <div class="form-check form-switch col-auto">
            <input class="form-check-input" type="checkbox" name="guardar" id="flexSwitchCheckDefault">
            <label class="form-check-label" for="flexSwitchCheckDefault">Guardar</label>
            </div>
            <div class="form-check form-switch col-auto">
            <input class="form-check-input" type="checkbox" name="actualizar" id="flexSwitchCheckChecked">
            <label class="form-check-label" for="flexSwitchCheckChecked">Actualizar</label>
            </div>
            <div class="form-check form-switch col-auto">
            <input class="form-check-input" type="checkbox" name="eliminar" id="flexSwitchCheckChecked">
            <label class="form-check-label" for="flexSwitchCheckChecked">Eliminar</label>
            </div>

            <div class="col-auto">
                <button type="submit" class="btn btn-primary">Aceptar</button>
            </div>
            <div class="col-auto">
            <input type="text" name="id" id="id" class="form-control" placeholder="Ingresa ID">
            </button>
            </div>

    </form>
    </div>
    </div>
    </div>
                        
                        <!-- Modal de Eliminar -->
                        <div class="modal fade" id="eliminarModal<?php echo $carro['id'] ?>" tabindex="-1" aria-labelledby="eliminarModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <form class="row gy-2 gx-3 align-items-center bg-light p-4 rounded shadow" action="../controller/appController.php" method="post">
            
            <div class="col-auto">
                <label class="visually-hidden" for="autoSizingInput">Placa</label>
                <input type="text" class="form-control" id="autoSizingInput" name="placa" placeholder="Placa">
            </div>
            <div class="col-auto">
            <label class="visually-hidden" for="autoSizingInput">Marca</label>
            <input type="text" class="form-control" id="autoSizingInput" name="marca" placeholder="Marca">
                </div>
            <div class="col-auto">
                <label class="visually-hidden" for="autoSizingInputGroup">Color</label>
                <div class="input-group">
                <span class="input-group-text">Color</span>
                <input type="text" class="form-control" id="autoSizingInputGroup" name="color" placeholder="Color">
                </div>
            </div>
        
            <div class="form-check form-switch col-auto">
            <input class="form-check-input" type="checkbox" name="guardar" id="flexSwitchCheckDefault">
            <label class="form-check-label" for="flexSwitchCheckDefault">Guardar</label>
            </div>
            <div class="form-check form-switch col-auto">
            <input class="form-check-input" type="checkbox" name="actualizar" id="flexSwitchCheckChecked">
            <label class="form-check-label" for="flexSwitchCheckChecked">Actualizar</label>
            </div>
            <div class="form-check form-switch col-auto">
            <input class="form-check-input" type="checkbox" name="eliminar" id="flexSwitchCheckChecked">
            <label class="form-check-label" for="flexSwitchCheckChecked">Eliminar</label>
            </div>

            <div class="col-auto">
                <button type="submit" class="btn btn-primary">Aceptar</button>
            </div>
            <div class="col-auto">
            <input type="text" name="id" id="id" class="form-control" placeholder="Ingresa ID">
            </button>
            </div>

    </form>
    </div>
    </div>
    </div>

                        <!-- Modal de Registro -->
                        <div class="modal fade" id="registrarModal<?php echo $carro['id'] ?>" tabindex="-1" aria-labelledby="registrarModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <form class="row gy-2 gx-3 align-items-center bg-light p-4 rounded shadow" action="../controller/appController.php" method="post">
            
            <div class="col-auto">
                <label class="visually-hidden" for="autoSizingInput">Placa</label>
                <input type="text" class="form-control" id="autoSizingInput" name="placa" placeholder="Placa">
            </div>
            <div class="col-auto">
            <label class="visually-hidden" for="autoSizingInput">Marca</label>
            <input type="text" class="form-control" id="autoSizingInput" name="marca" placeholder="Marca">
                </div>
            <div class="col-auto">
                <label class="visually-hidden" for="autoSizingInputGroup">Color</label>
                <div class="input-group">
                <span class="input-group-text">Color</span>
                <input type="text" class="form-control" id="autoSizingInputGroup" name="color" placeholder="Color">
                </div>
            </div>
        
            <div class="form-check form-switch col-auto">
            <input class="form-check-input" type="checkbox" name="guardar" id="flexSwitchCheckDefault">
            <label class="form-check-label" for="flexSwitchCheckDefault">Guardar</label>
            </div>
            <div class="form-check form-switch col-auto">
            <input class="form-check-input" type="checkbox" name="actualizar" id="flexSwitchCheckChecked">
            <label class="form-check-label" for="flexSwitchCheckChecked">Actualizar</label>
            </div>
            <div class="form-check form-switch col-auto">
            <input class="form-check-input" type="checkbox" name="eliminar" id="flexSwitchCheckChecked">
            <label class="form-check-label" for="flexSwitchCheckChecked">Eliminar</label>
            </div>

            <div class="col-auto">
                <button type="submit" class="btn btn-primary">Aceptar</button>
            </div>
            <div class="col-auto">
            <input type="text" name="id" id="id" class="form-control" placeholder="Ingresa ID">
            </button>
            </div>

    </form>
    </div>
    </div>
    </div>
                    <?php } ?>
                </tbody>
            </table>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
        </body>
        </html>
