<?php 
include '../conexion.php';
include '../../style.css';
include '../Nav.html';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Diario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>


 <style>
    .tabla-scroll { max-height: 540px; overflow-y: auto; }

    .table-fixed { table-layout: fixed; width: 100%; }

    .table-fixed th, .table-fixed td {
      padding: .20rem .1rem;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
      vertical-align: middle;
    }

    .tabla-scroll thead th {
  position: sticky;
  top: 0;
  z-index: 10;
  background: #212529;
  color: #fff;

.td:nth-child(1),
.th:nth-child(1) {
  text-align: center;
}
}
  </style>

<?php


// 1. Obtener todos los lotes únicos
$lotes = mysqli_query($mysqli, "SELECT DISTINCT lote FROM bd_vargas");

// 2. Detectar si el usuario seleccionó un lote
$loteSeleccionado = isset($_POST['lote']) ? $_POST['lote'] : '';

// 3. Armar la consulta filtrada
if ($loteSeleccionado != '') {
    $sql = "SELECT * FROM bd_vargas WHERE lote = '$loteSeleccionado'";
} 

$consulta = mysqli_query($mysqli, $sql);
?>
  
<!-- FORMULARIO DE FILTRO -->
 <div style="margin-left:1110px;"> 
<form method="POST">
  <label for="lote">Seleccione un lote:</label>
  <select style="font-size:13px;width:300px;" class="form-select" aria-label="Disabled select example" name="lote" id="lote">
    <option value="VACIO" <?php if ($loteSeleccionado === "VACIO") echo "selected"; ?>>VACIO</option>
    <option value="">-- Todos --</option>
    <?php while ($row = mysqli_fetch_assoc($lotes)) { ?>
        <option value="<?php echo $row['lote']; ?>" 
            <?php if ($loteSeleccionado == $row['lote']) echo "selected"; ?>>
            <?php echo $row['lote']; ?>
        </option>
    <?php } ?>
  </select>
  <button type="submit"class="btn btn-success">Buscar</button>
</form>
    </div>

   
     <table class="table table-bordered table-sm table-fixed">
    <thead>
    <tr>
    <th style="width: 300px;">Granja Levante
    <th>LOURDES	
    </th>    
    </th>
     <tr>
    <th  style="width: 300px;">Fecha de Recepcion
    <th>vie,  16 - ago - 2024	
    </th>    
    </th>
     <tr>
    <th  style="width: 300px;">Fecha de Encasetamiento
    <th>vie,  13 - dic - 2024	
    </th>    
    </th>
    </tr>
    <tr>
    <th  style="width: 300px;">N° Pollitas Recibidas
    <th>94860</th>    
    </th>
    </tr>

    </table>


<div class="tabla-scroll">
  <table class="table table-bordered table-fixed table-sm">
    <colgroup>
      <col style="width:120px;text-align:center;"> <!-- Lote -->
      <col style="width:130px;"> <!-- Fecha Dia -->
      <col style="width:60px;">  <!-- Dias -->
      <col style="width:100px;">  <!-- Sem -->
      <col style="width:100px;"> <!-- Produccion -->
      <col style="width:100px;"> <!-- Consumo Kg -->
      <col style="width:100px;">  <!-- Mortalidad -->
      <col style="width:100px;">  <!-- Seleccion -->
      <col style="width:100px;">  <!-- Otros -->
      <col style="width:100px;"> <!-- Observaciones -->
      <col style="width:100px;"> <!-- Saldo de Aves -->
      <col style="width:100px;"> <!-- Consumo Gr.A.D -->
      <col style="width:100px;"> <!-- Gr.A.D Tabla -->
      <col style="width:100px;"> <!-- % Diario de Prod. -->
      <col style="width:100px;"> <!-- Prom. Ave dia cc -->
      <col style="width:100px;"> <!-- Consumo de agua -->
      <col style="width:100px;"> <!-- Actualizar -->
      <col style="width:100px;text-align:center;"> <!-- Lote -->
      <col style="width:100px;"> <!-- Fecha Dia -->
      <col style="width:100px;">  <!-- Dias -->
      <col style="width:100px;">  <!-- Sem -->
      <col style="width:100px;"> <!-- Produccion -->
      <col style="width:100px;"> <!-- Consumo Kg -->
      <col style="width:100px;">  <!-- Mortalidad -->
      <col style="width:100px;">  <!-- Seleccion -->
      <col style="width:100px;">  <!-- Otros -->
      <col style="width:100px;"> <!-- Observaciones -->
      <col style="width:100px;"> <!-- Saldo de Aves -->
      <col style="width:100px;"> <!-- Consumo Gr.A.D -->
      <col style="width:530px;"> <!-- Gr.A.D Tabla -->
      <col style="width:100px;"> <!-- % Diario de Prod. -->
      <col style="width:100px;"> <!-- Prom. Ave dia cc -->
      <col style="width:100px;"> <!-- Consumo de agua -->
      <col style="width:100px;"> <!-- Actualizar -->
      <col style="width:100px;">  <!-- Otros -->
      <col style="width:100px;"> <!-- Observaciones -->
      <col style="width:200px;"> <!-- Saldo de Aves -->
      <col style="width:200px;"> <!-- Consumo Gr.A.D -->
      <col style="width:100px;"> <!-- Gr.A.D Tabla -->
      <col style="width:100px;"> <!-- % Diario de Prod. -->
      <col style="width:200px;"> <!-- Prom. Ave dia cc -->
      <col style="width:200px;"> <!-- Gr.A.D Tabla -->

    </colgroup>

  <thead>
  <!-- Fila de agrupación -->
  <tr>
    <th scope="col" class="bg-light"></th>
    <th scope="col" class="bg-light"></th>
    <th scope="col" class="bg-light"></th>

    <!-- Agrupación -->
    <th colspan="3" class="bg-warning text-dark text-center">PRODUCCION DE HUEVO</th>
     <th colspan="2" class="bg-warning text-dark text-center">H.AV.ALOJ</th>
      <th colspan="4" class="bg-warning text-dark text-center">CONSUMO DE ALIMENTO</th>
      <th colspan="2" class="bg-warning text-dark text-center">CONVERSION</th>
      <th colspan="8" class="bg-warning text-dark text-center">AVES-INVENTARIO</th>
      <th colspan="4" class="bg-warning text-dark text-center">PESO AVES</th>
      <th colspan="2" class="bg-warning text-dark text-center">PESO HUEVO</th>
    <th class="bg-light"></th></th>
    <th class="bg-light"></th></th>
    <th  colspan="4" class="bg-warning text-dark text-center">MASA HUEVO</th>  
    <th  colspan="2" class="bg-warning text-dark text-center">CONSUMO AGUA</th>  
    <th class="bg-light"></th></th>
    <th class="bg-light"></th></th>
    <th  colspan="2" class="bg-warning text-dark text-center">KILOS</th>
    <th class="bg-light"></th>
  </tr>

  <!-- Fila de encabezados originales -->
  <tr>
    <th>Fecha finalizacion semana</th>
    <th >Semana Produccion</th>
    <th scope="col" class="table-light">Edad Semana</th>

    <!-- Columnas agrupadas -->
    <th scope="col" class="table-dark text-center">SEMANA</th>
    <th scope="col" class="text-center" style="background-color: orange; color: white;">%TB</th>
    <th scope="col" class="table-dark text-center">REAL</th>
    <th scope="col" class="text-center"style="background-color: orange; color: white;">TB</th>
    <th scope="col" class="table-dark text-center">REAL</th>
    <th scope="col" class="table-dark text-center">KILOS</th>
    <th scope="col" class="text-center" style="background-color: orange; color: white;">TB</th>
    <th scope="col" class="table-dark text-center">REAL</th>
    <th scope="col" class="table-dark text-center">K.A.A</th>
    <th scope="col" class="table-dark text-center text-center">SEM</th>
    <th scope="col" class="table-dark text-center text-center">ACUM</th>
    <th scope="col" class="table-dark text-center">MO</th>
    <th scope="col" class="table-dark text-center">SEL</th>
    <th scope="col" class="table-dark text-center">VEN</th>
    <th scope="col" class="table-dark text-center">%M Sm</th>
    <th scope="col" class="table-dark text-center">%M Ac</th>
    <th scope="col"class="table-dark text-center">% SeL Sm</th>
    <th scope="col" class="table-dark text-center">%M+S Ac </th>
    <th scope="col" class="text-center" style="background-color: orange; color: white;">M.TAB</th>
    <th scope="col" class="table-dark text-center">REAL</th>
    <th scope="col" class="table-dark text-center">TAB</th>
    <th scope="col" class="table-dark text-center">UNIF</th>
    <th scope="col" class="table-dark text-center">CV</th>
    <th scope="col" class="table-dark text-center">REAL</th>
    <th scope="col" class="table-dark text-center">TAB</th>
    <th scope="col" class="table-dark text-center">SALDO AVES</th>
    <th scope="col" class="table-dark text-center">OBSERVACIONES</th>
    <th scope="col" class="table-dark text-center">Real sem</th>
    <th scope="col" class="table-dark text-center">Tabla sem</th>
    <th scope="col" class="text-center" style="background-color: orange; color: white;">Real sem</th>
    <th scope="col" class="table-dark text-center">Tabla Acum</th>
    <th scope="col" class="table-dark text-center">REAL</th>
    <th scope="col" class="table-dark text-center">TABLA</th>
    <th scope="col" class="table-dark text-center">HUEVOS ACUM</th>
    <th scope="col" class="table-dark text-center">CONV. KG/ DOC ACUM</th>
    <th scope="col" class="table-dark text-center">SEM</th>
    <th scope="col" class="table-dark text-center">ACUM</th>
    <th scope="col" class="table-dark text-center">SALIDAS ACUM</th>
    <th scope="col" class="table-dark text-center">GR X H</th>
  </tr>
</thead>

  <tbody>


 
    <?php

     while ($fila = mysqli_fetch_assoc($consulta)) { ?>
    <tr>
      <td><input type="text" name="" id="" value="<?php echo $fila['fecha_fin_sem']; ?>"></td>
      <th scope="row"><input type="text" name="" id="" value="<?php echo $fila['sem_prod']; ?>"></th>
      <td><input type="number" name="" id="" value="<?php echo $fila['edad_sem']; ?>"></td>
      <td><input type="number" name="" id="" value="<?php echo $fila['prod_huevo_sem']; ?>"></td>
      <td><input type="decimal" name="" id="" value="<?php echo $fila['prod_huevo_tab']; ?>"></td>
      <td><input type="number" name="" id="" step="0.01" value="<?php echo $fila['prod_huevo_real']; ?>"></td>
      <td><input type="decimal" name="" id="" value="<?php echo $fila['h_av_aloj_tab']; ?>"></td>
      <td><input type="decimal" name="" id="" value="<?php echo $fila['h_av_aloj_real']; ?>"></td>
      <td><input type="decimal" name="" id="" value="<?php echo $fila['consumo_alim_kg']; ?>"></td>
      <td><input type="number"   name="" id=""   value="<?php echo $fila['consumo_alim_tab']; ?>"></td>
      <td><input type="decimal" class=""value="<?php echo $fila['consumo_alim_real']; ?>"></td>
      <td><input type="decimal" name="" id="" value="<?php echo $fila['consumo_alim_k_a_a']; ?>"></td>
      <td><input type="decimal" name="" id="" value="<?php echo $fila['conv_sem_tab']; ?>"></td>
      <td><input type="decimal" name="" id="" value="<?php echo $fila['conv_acum_tab']; ?>"></td>
      <td><input type="decimal" name="" id="" value="<?php echo $fila['mort_sem']; ?>"></td>
      <td><input type="decimal" name="" id="" value="<?php echo $fila['mort_select_sem']; ?>"></td>
      <td><input type="decimal" name="" id="" value="<?php echo $fila['mort_venta']; ?>"></td>
      <td><input type="decimal" name="" id="" value="<?php echo $fila['percent_mort_sem']; ?>"></td>
      <td><input type="decimal" name="" id="" value="<?php echo $fila['percent_mort_acum']; ?>"></td>
      <td><input type="decimal" name="" id="" value="<?php echo $fila['percent_select_sem']; ?>"></td>
      <td><input type="decimal" name="" id="" value="<?php echo $fila['percent_mort_and_select_acum']; ?>"></td>
      <td><input type="decimal" name="" id="" value="<?php echo $fila['mort_tab']; ?>"></td>
      <td><input type="decimal" name="" id="" value="<?php echo $fila['peso_ave_real']; ?>"></td>
      <td><input type="decimal" name="" id="" value="<?php echo $fila['peso_ave_tab']; ?>"></td>
      <td><input type="decimal" name="" id="" value="<?php echo $fila['unif']; ?>"></td>
      <td><input type="decimal" name="" id="" value="<?php echo $fila['cv']; ?>"></td>
      <td><input type="decimal" name="" id="" value="<?php echo $fila['peso_huevo_real']; ?>"></td>
      <td><input type="number" name="" id="" value="<?php echo $fila['peso_huevo_tab']; ?>"></td>
      <td><input type="text"   name="" id=""   value="<?php echo $fila['saldo_ave']; ?>"></td>
      <td><input type="decimal" name="" id="" style="width:713px;" value="<?php echo $fila['observaciones']; ?>"></td>
      <td><input type="decimal" name="" id="" value="<?php echo $fila['masa_huevo_real_sem']; ?>"></td>
      <td><input type="decimal" name="" id="" value="<?php echo $fila['masa_huevo_tab_sem']; ?>"></td>
      <td><input type="decimal" name="" id="" value="<?php echo $fila['masa_huevo_real_acum']; ?>"></td>
      <td><input type="decimal" name="" id="" value="<?php echo $fila['masa_huevo_tab_acum']; ?>"></td>
      <td><input type="decimal" name="" id="" value="<?php echo $fila['cons_agua_real']; ?>"></td>
      <td><input type="decimal" name="" id="" value="<?php echo $fila['cons_agua_tab']; ?>"></td>
      <td><input type="decimal" name="" id="" value="<?php echo $fila['huevo_acum']; ?>"></td>
      <td><input type="decimal" name="" id="" value="<?php echo $fila['conv_kg_doc_acum']; ?>"></td>
      <td><input type="decimal" name="" id="" value="<?php echo $fila['kg_sem']; ?>"></td>
      <td><input type="decimal" name="" id="" value="<?php echo $fila['kg_acum']; ?>"></td>
      <td><input type="decimal" name="" id="" value="<?php echo $fila['salidas_acum']; ?>"></td>
      <td><input type="decimal" name="" id="" value="<?php echo $fila['gr_x_huevo']; ?>"></td>
      <td>
        <center><a href="act_diario.php?pk=<?php echo $v[1] ?>"><i class='bx bx-edit bx-flashing-hover' style='color:#2ce01c' ></i></a></center>
      </td>

    </tr>
    <?php }
    ?>
  </tbody>
</table>


</div>
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
<script src="https://kit.fontawesome.com/6013e7f642.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>

</body>
</html>