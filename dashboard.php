<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://cdn.selfish.com.mx/wp-content/uploads/2016/09/ico-2.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-...." crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet"><!--Enlace de la tipografia que se esta usando-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"><!--Enlace para los iconos que se encuentran en bootstrap-->
    <link rel="stylesheet" href="css/style.css">
    <title>Sistema de Cliente | Dashboard</title>
</head>
<body>
    <?php include('menu.php'); ?> <!--Llamado del menu al archivo-->

     <!-- Contenido principal -->
    <div class="contenedor-principal">
        <div class="bottom-container">
            <div class="title">
                    <h5>Clientes</h5>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Cliente</th>
                        <th scope="col">Proyecto</th>
                        <th scope="col">Solicitud</th>
                        <th scope="col">Estatus</th>
                        <th scope="col">Detalles</th>
                    </tr>
                </thead>
            <tbody>
                <tr>
                    <td>Luis Gabriel de sousa</td>
                    <td>2024-01-21</td>
                    <td>Inactivo</td>
                    <td>10,000.00</td>
                    <td><button id="showPopup"><i class="bi bi-eye"></i></button></td>
                </tr>
                        
                <tr>
                    <td>Ricardo Javier Santos Juarez</td>
                    <td>2024-01-21</td>
                    <td>Inactivo</td>
                    <td>10,000.00</td>
                    <td><button id="showPopup"><i class="bi bi-eye"></i></button></td>
                </tr>
                <tr>
                    <td>Pablo Saul Solorzano</td>
                    <td>2024-01-21</td>
                    <td>Inactivo</td>
                    <td>10,000.00</td>
                    <td><button id="showPopup"><i class="bi bi-eye"></i></button></td>
                </tr>
                <tr>
                    <td>Karina del Rocio Reyes</td>
                    <td>2024-01-21</td>
                    <td>Inactivo</td>
                    <td>10,000.00</td>
                    <td><button id="showPopup"><i class="bi bi-eye"></i></button></td>
                </tr>
                
                    </tbody>
                </table>
        </div>
    </div>
    <div class="modal fade" id="popup" tabindex="-1" aria-labelledby="popupLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="popupLabel">Detalles del Proyecto</h5>
                </div>
                <div class="modal-body">
                    <label for="comments" class="form-label">Comentarios:</label>
                    <input type="text" id="comments" class="form-control mb-3">

                    <label for="price" class="form-label">Precio:</label>
                    <input type="text" id="price" class="form-control mb-3">

                    <label for="developmentTime" class="form-label">Tiempo de Desarrollo:</label>
                    <input type="text" id="developmentTime" class="form-control mb-3">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary" id="submitBtn">Enviar</button>
                </div>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/dashboard.js"></script>
</body>
</html>