    // ready


    $(document).ready(function() {

        //--------------------- SELECCIONAR FOTO PRODUCTO ---------------------
        $("#foto").on("change", function() {
            var uploadFoto = document.getElementById("foto").value;
            var foto = document.getElementById("foto").files;
            var nav = window.URL || window.webkitURL;
            var contactAlert = document.getElementById('form_alert');

            if (uploadFoto != '') {
                var type = foto[0].type;
                var name = foto[0].name;
                if (type != 'image/jpeg' && type != 'image/jpg' && type != 'image/png') {
                    contactAlert.innerHTML = '<p class="errorArchivo">El archivo no es válido.</p>';
                    $("#img").remove();
                    $(".delPhoto").addClass('notBlock');
                    $('#foto').val('');
                    return false;
                } else {
                    contactAlert.innerHTML = '';
                    $("#img").remove();
                    $(".delPhoto").removeClass('notBlock');
                    var objeto_url = nav.createObjectURL(this.files[0]);
                    $(".prevPhoto").append("<img id='img' src=" + objeto_url + ">");
                    $(".upimg label").remove();

                }
            } else {
                alert("No selecciono foto");
                $("#img").remove();

            }
        });

        $('.delPhoto').click(function() {
            $('#foto').val('');
            $(".delPhoto").addClass('notBlock');
            $("#img").remove();

            if ($('#foto_actual') && $('#foto_remove')) {
                $('#foto_remove').val('img_producto.png');
            }

        });


        // modal agregar existencias (agg_exist)
        $('.agg_exist').click(function(e) {
            // act on the event
            e.preventDefault();
            var producto = $(this).attr('product');
            var action = 'infoProducto';

            $.ajax({
                url: '../generales/ajax.php',
                type: 'POST',
                async: true,
                data: {
                    action: action,
                    producto: producto
                },

                success: function(response) {

                    if (response != "error") {

                        var info = JSON.parse(response);

                        $('#id_producto').val(info.id_producto);
                        $('#nameProduct').html(info.nombre_producto);

                    }
                },
                error: function(error) {
                    console.log(error)
                }

            }); //end ajax

            $('.modal-product').fadeIn();
            $('.buscador').fadeOut();
        });

        // activar campos para registrar clientes
        $('#agregar-cliente').click(function(e) {
            e.preventDefault();
            $('#nombre_cliente').removeAttr('disabled');
            $('#telefono_cliente').removeAttr('disabled');
            $('#direccion_cliente').removeAttr('disabled');

            $('.guardar-cliente').slideDown('disabled')

        })

        //buscar cliente desde venta 

        $('#id_cliente').keyup(function(e) {
            e.preventDefault();

            var cl = $(this).val();
            var action = 'searchCliente';

            $.ajax({
                url: '../generales/ajax.php',
                type: 'POST',
                async: true,
                data: {
                    action: action,
                    cliente: cl
                },

                success: function(response) {

                    if (response == 0) {
                        $('#nombre_cliente').val('');
                        $('#telefono_cliente').val('');
                        $('#direccion_cliente').val('');
                        //Mostrar boton agregar
                        $('.button-cliente').slideDown('');
                    } else {
                        var data = $.parseJSON(response);
                        $('#id').val(data.id_cliente)
                        $('#nombre_cliente').val(data.nombre_cliente)
                        $('#telefono_cliente').val(data.telefono)
                        $('#direccion_cliente').val(data.direccion)

                        //Mostrar boton agregar
                        $('.button-cliente').slideUp('');

                        //Bloque campos
                        $('#nombre_cliente').attr('disabled', 'disabled');
                        $('#telefono_cliente').attr('disabled', 'disabled');
                        $('#direccion_cliente').attr('disabled', 'disabled');

                        //Oculta botón guardar
                        $('.guardar-cliente').slideUp('');
                    }
                },
                error: function(error) {

                }

            }); //end ajax

        });

        //crear cliente desde venta
        $('#add_cliente').submit(function(e) {
            e.preventDefault();

            $.ajax({
                url: '../generales/ajax.php',
                type: 'POST',
                async: true,
                data: $('#add_cliente').serialize(),

                success: function(response) {
                    if (response != 'error') {
                        // agregar id en input hidden
                        $('#id').val(response);
                        // bloquear campos
                        $('#nombre_cliente').attr('disabled', 'disabled');
                        $('#telefono_cliente').attr('disabled', 'disabled');
                        $('#direccion_cliente').attr('disabled', 'disabled');

                        // ocultar boton agregar
                        $('.button-cliente').slideUp('');
                        // ocultar boton guardar
                        $('.guardar-cliente').slideUp('');

                    }

                },
                error: function(error) {

                }

            }); //end ajax

        })

        //buscar producto
        $('#id_producto').keyup(function(e) {
            e.preventDefault();

            var producto = $(this).val();
            var action = 'infoProducto';
            if (producto != '') {


                $.ajax({
                    url: '../generales/ajax.php',
                    type: 'POST',
                    async: true,
                    data: { action: action, producto: producto },

                    success: function(response) {
                        if (response != 'error') {
                            var info = JSON.parse(response);

                            $('#txt_nameProduct').val(info.nombre_producto);
                            $('#txt_existenciaProducto').val(info.existencia);
                            $('#txt_cantidad').val(info.cantidad);
                            $('#txt_precio').val(info.precio);
                            $('#txt_precioTotal').val(info.precio);

                            //activar cantidad
                            $('#txt_cantidad').removeAttr('disabled');

                            //mostrar botón agregar
                            $('.input-add').slideDown();

                        } else {

                            $('#txt_nameProduct').val('-');
                            $('#txt_existenciaProducto').val('-');
                            $('#txt_cantidad').val('-');
                            $('#txt_precio').val('0.00');
                            $('#txt_precioTotal').val('0.00');

                            //bloquear cantidad
                            $('#txt_cantidad').attr('disabled', 'disabled');


                            //ocultar botón agregar
                            $('.input-add').slideUp();

                        }

                    },
                    error: function(error) {

                    }

                }); //end ajax
            }

        })

        //validar cantidad de producto - Módulo ventas
        $('#txt_cantidad').keyup(function(e) {
            e.preventDefault();

            var precio_total = $(this).val() * $('#txt_precio').val();
            var existencia = parseInt($('#txt_existenciaProducto').val());
            $('#txt_precioTotal').val(precio_total.toFixed(2));

            // ocultar botón agregar si cantidad es menor a 1
            if (($(this).val() < 1 || isNaN($(this).val())) || ($(this).val() > existencia)) {
                $('.input-add').slideUp();
            } else {
                $('.input-add').slideDown();
            }

        });

        //agregar producto al detalle venta (temporal)
        $('#add').click(function(e) {
            e.preventDefault();

            if ($('#txt_cantidad').val() > 0) {
                var id_producto = $('#id_producto').val();
                var cantidad = $('#txt_cantidad').val();
                var action = 'agregarDetProducto';

                $.ajax({
                    url: '../generales/ajax.php',
                    type: 'POST',
                    async: true,
                    data: { action: action, producto: id_producto, cantidad: cantidad },

                    success: function(response) {
                        if (response != 'error') {
                            var info = JSON.parse(response);
                            $('#detalle_venta ').html(info.detalle);
                            $('#detalle_totales').html(info.totales);

                            $('#id_producto').val('');
                            $('#txt_nameProduct').val('');
                            $('#txt_existenciaProducto').val('');
                            $('#txt_cantidad').val('');
                            $('#txt_precio').val('0.00');
                            $('#txt_precioTotal').val('0.00');

                            //bloquear cantidad
                            $('#txt_cantidad').attr('disabled', 'disabled');

                            //ocultar botón agregar
                            $('.input-add').slideUp();

                        } else {
                            console.log('no data');
                        }
                        viewProcesar();
                    },
                    error: function(error) {}

                }); //end ajax
            }
        });

        //anular venta
        $('.button-anular').click(function(e) {
            e.preventDefault();

            var rows = $('#detalle_venta tr').length;
            if (rows > 0) {
                var action = 'anularVenta';

                $.ajax({
                    url: '../generales/ajax.php',
                    type: 'POST',
                    async: true,
                    data: { action: action },

                    success: function(response) {
                        if (response != 'error') {
                            location.reload();
                        }
                    },
                    error: function(error) {}

                }); //end ajax


            }
        })

        //crear venta
        $('#button-procesar').click(function(e) {
            e.preventDefault();

            var rows = $('#detalle_venta tr').length;
            if (rows > 0) {
                var action = 'crearVenta';
                var cod_cliente = $('#id').val();

                $.ajax({
                    url: '../generales/ajax.php',
                    type: 'POST',
                    async: true,
                    data: { action: action, cod_cliente: cod_cliente },

                    success: function(response) {

                        if (response != 'error') {

                            var info = JSON.parse(response);
                            //console.log(response);

                            generarPDF(info.id_cliente, info.id_venta);
                            // alert("La venta se ha registrado con éxito");
                            location.reload();

                        } else {
                            console.log('no data');
                        }
                    },
                    error: function(error) {}

                }); //end ajax


            }
        })

        //ver PDF de venta
        $('').click(function(e) {
            e.preventDefault();
            var Codcliente = $(this).attr('cl');
            var Codfactura = $(this).attr('f');

            generarPDF(Codcliente, Codfactura);
        })

        //cambiar contraseña
        $('.nueva_contrasena').keyup(function() {
            validPass();
        })

        //Form para cambio de contraseña
        $('#formCambio').submit(function(e) {
            e.preventDefault();

            var passActual = $('#txt_Actual').val();
            var passNueva = $('#txt_newPass').val();
            var passConfirm = $('#txt_confirmPass').val();
            var action = 'changePass';

            if (passNueva != passConfirm) {
                $('#alert-contra').html('<p class="coincidencia">Las contraseñas no coinciden </p > ');

                $('#alert-contra').slideDown();
                return false;
            }
            if (passNueva.length < 6) {
                $('#alert-contra').html('<p class="mayor">La contraseña debe ser mayor a 6 caracteres</p>');
                $('#alert-contra').slideDown();
                return false;
            }

            $.ajax({
                url: '../generales/ajax.php',
                type: 'POST',
                async: true,
                data: {
                    action: action,
                    passActual: passActual,
                    passNueva: passNueva,
                },

                success: function(response) {
                    if (response != 'error') {
                        var info = JSON.parse(response);
                        if (info.cod == '00') {
                            $('#alert-contra').html('<p class="cambiada">' + info.msg + '</p>');
                            $('#formCambio')[0].reset();
                        } else {
                            $('#alert-contra').html('<p class="noPosible">' + info.msg + '</p>');
                        }
                        $('#alert-contra').slideDown();
                    }
                },
                error: function(error) {}

            }); //end ajax

        });

    }); //END READY


    //validar contraseña 
    function validPass() {
        var passNueva = $('#txt_newPass').val();
        var passConfirm = $('#txt_confirmPass').val();

        if (passNueva != passConfirm) {
            $('#alert-contra').html('<p class="coincidencia">Las contraseñas no coinciden </p > ');

            $('#alert-contra').slideDown();
            return false;
        }
        if (passNueva.length < 6) {
            $('#alert-contra').html('<p class="mayor">La contraseña debe ser mayor a 6 caracteres</p>');
            $('#alert-contra').slideDown();
            return false;
        }

        $('#alert-contra').html('');
        $('#alert-contra').slideUp();

    }
    //generar PDF
    function generarPDF(cliente, factura) {
        var ancho = 1000;
        var alto = 800;
        // Calcular posición x, y para centrar documento
        var x = parseInt((window.screen.width / 2) - (ancho / 2));
        var y = parseInt((window.screen.height / 2) - (alto / 2));

        $url = 'factura/generaFactura.php?cl=' + cliente + '&f=' + factura;
        window.open($url, "Factura", "left=" + x + ",top=" + y + ",heigth=" + alto +
            ",width=" + ancho + ",scrollbar=si,location=no,resizable=si,menubar=no");
    }



    //eliminar detalle temp
    function del_product_detalle(id_detemp) {
        var action = 'del_product_detalle';
        var id_detalle = id_detemp;

        $.ajax({
            url: '../generales/ajax.php',
            type: 'POST',
            async: true,
            data: { action: action, id_detalle: id_detalle },

            success: function(response) {
                if (response != 'error') {
                    var info = JSON.parse(response);

                    $('#detalle_venta ').html(info.detalle);
                    $('#detalle_totales').html(info.totales);

                    $('#id_producto').val('');
                    $('#txt_nameProduct').val('');
                    $('#txt_existenciaProducto').val('');
                    $('#txt_cantidad').val('');
                    $('#txt_precio').val('0.00');
                    $('#txt_precioTotal').val('0.00');

                    //bloquear cantidad
                    $('#txt_cantidad').attr('disabled', 'disabled');

                    //ocultar botón agregar
                    $('.input-add').slideUp();

                } else {
                    $('#detalle_venta ').html('');
                    $('#detalle_totales').html('');
                }
                viewProcesar();
            },
            error: function(error) {}

        }); //end ajax

    }

    //ocultar/mostrar botones agregar y anular
    function viewProcesar() {
        if ($('#detalle_venta tr').length > 0) {
            $('.button-procesar').show();
        } else {
            $('.button-procesar').hide();
        }
    }

    function searchForDetalle(id) {
        var action = 'searchForDetalle';
        var usuario = id;

        $.ajax({
            url: '../generales/ajax.php',
            type: 'POST',
            async: true,
            data: { action: action, usuario: usuario },

            success: function(response) {
                if (response != 'error') {
                    var info = JSON.parse(response);
                    $('#detalle_venta ').html(info.detalle);
                    $('#detalle_totales').html(info.totales);

                } else {
                    console.log('no data');
                }
                viewProcesar();
            },
            error: function(error) {}

        }); //end ajax
    }



    function sendDataProduct() {
        $('#alert-modal').html('');

        $.ajax({
            url: '../generales/ajax.php',
            type: 'POST',
            async: true,
            data: $('#form_add_product').serialize(),

            success: function(response) {
                if (response == "error") {
                    $('#alert-modal').html('<div id="alert-modal-error"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:"><path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" /></svg><b> Error al actualizar existencias. </b></div>')
                } else {
                    var info = JSON.parse(response);
                    $('.row' + info.id_producto + ' .celPrecio').html(info.nuevo_precio);
                    $('.row' + info.id_producto + ' .celExistencia').html(info.nueva_existencia);
                    $('#txt-cantidad').val('');
                    $('#txt-precio').val('');
                    $('#alert-modal').html('<div id="alert-modal-confirm"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:"><path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" /></svg><b> Existencias actualizadas correctamente. </b></div>');
                }
            },
            error: function(error) {
                console.log(error);
            }

        }); //end ajax


    }

    function closeModal() {
        $('#alert-modal').html('');
        $('#txt-cantidad').val('');
        $('#txt-precio').val('');
        $('.modal-product').fadeOut();
        $('#buscador').fadeIn();
    }


    // función para ajustes

    function mostrar(ajustes) {
        var perfil = document.getElementById('perfil');
        var estadistica = document.getElementById('estadistica');
        var cambiacontra = document.getElementById('cambiacontra');



        switch (ajustes) {
            case 1:
                perfil.style.display = 'block';
                estadistica.style.display = 'none';
                cambiacontra.style.display = 'none';
                break;

            case 2:
                perfil.style.display = 'none';
                estadistica.style.display = 'block';
                cambiacontra.style.display = 'none';
                break;

            case 3:
                perfil.style.display = 'none';
                estadistica.style.display = 'none';
                cambiacontra.style.display = 'block';
                break;

            default:
                alert("hay un problema: No existe el producto.")
        }

    }