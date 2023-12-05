<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Agregar Toastr CSS y JS a tu página -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <link rel="stylesheet" href="../assets/css/carrito.css">
</head>

<body>
    <a href=""></a>
    <div class="container">
        <div class="row">
            <div class="col-xs-8">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <div class="row">
                                <div class="col-xs-6">
                                    <h5><span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart</h5>
                                </div>
                                <div class="col-xs-6">
                                    <button type="button" class="btn btn-primary btn-sm btn-block" href="./productos.php">
                                        <span class="glyphicon glyphicon-share-alt"></span> Continue shopping
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="mostrarCarro">

                    </div>
                    <div id="sas"></div>



</body>

</html>
<script>
    $(document).ready(function() {
        recargarPagina();
        barra();
    });


    function barra() {
        $.ajax({
            url: '../controller/user/ctrlUser.php?opc=6',
            type: 'GET',
            success: function(response) {
                $('#mostrarBarra').html(response);
            },
            error: function() {
                // Maneja errores si la solicitud AJAX falla
                $('#mostrarBarra').html('Error al cargar la barra de navegación');
            }
        });
    }



    function recargarPagina() {
        $.ajax({
            type: "GET",
            url: "../controller/user/ctrlUser.php?opc=3",
            data: {},
            success: function(data) {
                $('#mostrarCarro').html(data);
            }
        });
    }

    function mostrarTotal() {
        $.ajax({
            type: "GET",
            url: "../controller/user/ctrlUser.php?opc=3",
            data: {},
            success: function(data) {
                $('#total').html(data);
            }
        });
    }

    function borrarDeCarrito(id_producto) {
        $.ajax({
            type: "POST",
            url: "../controller/user/ctrlUser.php?opc=4",
            data: {
                id_producto: id_producto
            },
            success: function(data) {
                $('#tbMensajes').html(data); // Actualiza la tabla del carrito
            }
        });
        recargarPagina();

    }

    function comprarCarrito() {
        // Agrega al carrito
        $.ajax({
            type: "POST",
            url: "../controller/user/ctrlUser.php?opc=5",
            data: {},
            success: function(data) {
                $('#sas').html(data); // Actualiza la tabla del carrito
                mostrarNotificacion('¡Compra realizada con éxito!', 'success');
            },
        });
        recargarPagina();
    }

    function mostrarNotificacion(mensaje, tipo) {
        toastr.options = {
            closeButton: true,
            progressBar: true,
            positionClass: 'toast-top-right',
            timeOut: 3000, // Duración de la notificación en milisegundos
        };

        if (tipo === 'success') {
            toastr.success(mensaje);
        } else if (tipo === 'error') {
            toastr.error(mensaje);
        } else if (tipo === 'warning') {
            toastr.warning(mensaje);
        } else if (tipo === 'info') {
            toastr.info(mensaje);
        }
    }


</script>