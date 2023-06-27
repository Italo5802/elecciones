
    <h1  > LISTADO DE CANDIDATOS</h1>
    <hr size="8px" color="black" />
      <?php if ($candidatos): ?>
        <div class="table-responsive table-sm" style="height: 500px;">
          <table class="table table-black table-bordered table-hover">
            <!-- Contenido de la tabla -->
            <thead>
               <tr>
                 <th >ID</th>
                 <th >DIGNIDAD</th>
                 <th >IDEOLOGÍA</th>
                 <th >MOVIMIENTO</th>
                 <th >NOMBRE</th>
                 <th >APELLIDO</th>
                 <th >PROFESION</th>
                 <th >EDAD</th>
                 <th >LATITUD</th>
                 <th >LONGITUD</th>
               </tr>
            </thead>
            <tbody>
              <?php foreach ($candidatos as $filaTemporal): ?>
                <tr>
                  <td >
                    <?php echo $filaTemporal->id_el; ?>
                  </td >
                  <td style="width: 80px;">
                    <?php echo $filaTemporal->dignidad_el; ?>
                  </td>
                  <td style="width: 80px;">
                    <?php echo $filaTemporal->ideologia_el; ?>
                  </td>
                  <td style="width: 90px;">
                    <?php echo $filaTemporal->movimiento_el; ?>
                  </td>
                  <td>
                    <?php echo $filaTemporal->nombre_el; ?>
                  </td>
                  <td>
                    <?php echo $filaTemporal->apellido_el; ?>
                  </td>
                  <td style="width: 99px;">
                    <?php echo $filaTemporal->profesion_el; ?>
                  </td>
                  <td>
                    <?php echo $filaTemporal->edad_el; ?>
                  </td>
                  <td>
                    <?php echo $filaTemporal->latitud_el; ?>
                  </td>
                  <td>
                    <?php echo $filaTemporal->longitud_el; ?>
                  </td>
                  <td class="text-center">
                    <a href="#" title="Editar empleado" style="color:green;">
                      <i class="glyphicon glyphicon-pencil"></i>
                    </a>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="<?php echo site_url('/candidatos/eliminar/'); ?><?php echo $filaTemporal->id_el; ?>" title="Eliminar empleado" onclick="return confirm('¿Estas seguro de elminar de forma permanente el registro seleccionado?');" style="color:red;">
                    <i class="glyphicon glyphicon-trash"></i>
                  </a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>

    <?php else: ?>
      <h1>No hay empleados</h1>
  <?php endif; ?>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
