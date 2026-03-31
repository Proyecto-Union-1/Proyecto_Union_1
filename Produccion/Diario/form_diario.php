<?php 
include '../conexion.php';
// Asegúrate de que las rutas de estos archivos sean correctas
include '../../style.css'; 
include '../Nav.html'; 
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Diario - Avícola San Martín</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <style>
        .tabla-scroll { 
            max-height: 800px; 
            overflow: auto; 
            border: 1px solid #ccc;
        }

        /* Fuerza a la tabla a respetar los anchos y no comprimirse */
        .table-fixed { 
            table-layout: fixed; 
            width: auto; 
            min-width: 100%;
        }

        .table-fixed th, .table-fixed td {
            padding: .3rem;
            vertical-align: middle;
            text-align: center;
        }

        /* Estilo para los inputs dentro de la tabla */
        .table-fixed input {
            border: 1px solid transparent;
            background: transparent;
            width: 100%;
            text-align: center;
            transition: all 0.2s;
        }

        .table-fixed input:hover {
            border: 1px solid #ccc;
            background: #f9f9f9;
        }

        .table-fixed input:focus {
            outline: none;
            background: #fff;
            border: 1px solid #007bff;
            box-shadow: 0 0 5px rgba(0,123,255,0.2);
        }

        /* Encabezado pegajoso */
        .tabla-scroll thead th {
            position: sticky;
            top: 0;
            z-index: 10;
            background: #212529;
            color: #fff;
        }
    </style>
</head>
<body>
     <table class="table table-bordered table-sm table-fixed">
    <thead>
    <tr>
    <th style="width: 50px;">Granja Levante
    <th>LOURDES	
    </th>    
    </th>
     <tr>
    <th  style="width: 50px;">Fecha de Recepcion
    <th>vie,  16 - ago - 2024	
    </th>    
    </th>
     <tr>
    <th  style="width: 50px;">Fecha de Encasetamiento
    <th>vie,  13 - dic - 2024	
    </th>    
    </th>
    </tr>
    <tr>
    <th  style="width: 50px;">N° Pollitas Recibidas
    <th>94860</th>    
    </th>
    </tr>

    </table>





<div class="container-fluid mt-8">
    <div class="tabla-scroll">
        <table class="table table-bordered table-sm table-fixed">
            <thead>
                <tr>
                    <th rowspan="2" style="width: 50px;">ID</th>
                    <th rowspan="2" style="width: 200px;">Lote</th>
                    <th rowspan="2" style="width: 120px;">Fecha Dia</th>
                    <th colspan="2" class="text-center" style="background-color:darkorange";>EDAD</th>
                    <th rowspan="2" style="width: 100px;">Produccion</th>
                    <th colspan="1" class="text-center"style="background-color:darkorange">Consumo</th>
                    <th rowspan="2" style="width: 90px;">Mortalidad</th>
                    <th rowspan="2" style="width: 90px;">Seleccion</th>
                    <th rowspan="2" style="width: 80px;">Otros</th>
                    <th rowspan="2" style="width: 100%;">Observaciones</th>
                    <th rowspan="2" style="width: 210px;">Saldo Aves</th>
                    <th rowspan="2" style="width: 220px;">Cons. Gr.A.D</th>
                    <th rowspan="2" style="width: 210px;">Gr.A.D Tab</th>
                    <th rowspan="2" style="width: 210px;">% Prod</th>
                    <th rowspan="2" style="width: 220px;">Prom. Ave</th>
                    <th rowspan="2" style="width: 120px;">Agua</th>
                </tr>
                <tr>
                    <th style="width: 60px;">DIAS</th>
                    <th style="width: 220px;">SEM</th>
                    <th style="width: 100px;">KILOS</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $select = "SELECT * FROM data_diario";
                $consulta = mysqli_query($mysqli, $select);
                while ($v = mysqli_fetch_array($consulta)) { 
                    $id = $v['id_Diario']; 
                ?>
                <tr data-id="<?php echo $id; ?>">
                    <td class="bg-light"><strong><?php echo $id; ?></strong></td>
                    <td><input type="text" onchange="guardarCambio(<?php echo $id; ?>, 'Lote', this.value,this)" value="<?php echo $v[1] ?>"></td>
                    <td><input type="text" onchange="guardarCambio(<?php echo $id; ?>, 'Fecha_Dia', this.value,this)" value="<?php echo $v[2] ?>"></td>
                    <td><input type="number" onchange="guardarCambio(<?php echo $id; ?>, 'Dias', this.value,this)" value="<?php echo $v[3] ?>"></td>
                    <td><input type="text" onchange="guardarCambio(<?php echo $id; ?>, 'Sem', this.value,this)" value="<?php echo $v[4] ?>"></td>
                    <td><input type="number" onchange="guardarCambio(<?php echo $id; ?>, 'Produccion', this.value,this)" value="<?php echo $v[5] ?>"></td>
                    <td><input type="number" onchange="guardarCambio(<?php echo $id; ?>, 'Consumo_Kilos', this.value,this)" value="<?php echo $v[6] ?>"></td>
                    <td><input type="number" onchange="guardarCambio(<?php echo $id; ?>, 'Mortalidad', this.value,this)" value="<?php echo $v[7] ?>"></td>
                    <td><input type="number" onchange="guardarCambio(<?php echo $id; ?>, 'Seleccion', this.value,this)" value="<?php echo $v[8] ?>"></td>
                    <td><input type="number" onchange="guardarCambio(<?php echo $id; ?>, 'Otros', this.value,this)" value="<?php echo $v[9] ?>"></td>
                    <td><input type="text" onchange="guardarCambio(<?php echo $id; ?>, 'Observaciones', this.value,this)" value="<?php echo $v[10] ?>"></td>
                    <td><input type="number" onchange="guardarCambio(<?php echo $id; ?>, 'Saldo_Aves', this.value,this)" value="<?php echo $v[11] ?>"></td>
                    <td><input type="number" onchange="guardarCambio(<?php echo $id; ?>, 'Consumo_Gr_AD', this.value,this)" value="<?php echo $v[12] ?>"></td>
                    <td><input type="number" onchange="guardarCambio(<?php echo $id; ?>, 'Gr_AD_Tabla', this.value,this)" value="<?php echo $v[13] ?>"></td>
                    <td><input type="number" onchange="guardarCambio(<?php echo $id; ?>, 'Porc_Diario_Prod', this.value,this)" value="<?php echo $v[14] ?>"></td>
                    <td><input type="number" onchange="guardarCambio(<?php echo $id; ?>, 'Prom_Ave_Dia', this.value,this)" value="<?php echo $v[15] ?>"></td>
                    <td><input type="number" onchange="guardarCambio(<?php echo $id; ?>, 'Consumo_Agua', this.value,this)" value="<?php echo $v[16] ?>"></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<script>
function guardarCambio(id, columna, valor, elemento) { // Recibe 'elemento'
    const datos = new FormData();
    datos.append('id', id);
    datos.append('columna', columna);
    datos.append('valor', valor);

    fetch('actualizar_dato.php', {
        method: 'POST',
        body: datos
    })
    .then(res => res.text())
    .then(data => {
        if(data.trim() === "ok") { 
            console.log("Guardado con éxito");
            elemento.style.backgroundColor = "#0afd42"; // Usa 'elemento' directamente
            setTimeout(() => { elemento.style.backgroundColor = "transparent"; }, 500);
        } else {
            console.error("Error del servidor:", data);
        }
    })
    .catch(error => {
        console.error('Error real de red:', error);
        alert("Error de red: Verifica que el archivo actualizar_dato.php exista.");
    });
}

</script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>

</body>
</html>