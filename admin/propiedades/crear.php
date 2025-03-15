<?
require "../../includes/templates";
incluirTemplate("header"); 
?>

<form class="formulario-inicio contenedor" method="$_POST">
    <div class="contenedor">
      <div class="input-contenedor">
        <i class="fas fa-user icon"></i>
        <input
          class="input-inicio"
          type="text"
          placeholder="Nombre de usuario"
          name="usuario"
        />
      </div>

      <div class="input-contenedor">
        <i class="fas fa-user icon"></i>
        <input class="input-inicio" type="text" placeholder="Nombres" name="nombre"/>
      </div>

      <div class="input-contenedor">
        <i class="fas fa-user icon"></i>
        <input
          class="input-inicio"
          type="text"
          placeholder="Apellido Paterno"
          name="apellidoPaterno"
        />
      </div>
      <div class="input-contenedor">
        <i class="fas fa-user icon"></i>
        <input
          class="input-inicio"
          type="text"
          placeholder="Apellido Materno"
          name="apellidoMaterno"
        />
      </div>

      <div class="input-contenedor">
        <input class="input-inicio" class="date" type="date" name="fechaNacimiento"/>
      </div>

      <div class="input-contenedor">
        <i class="fa-sharp fa-solid fa-mobile-screen-button"></i>
        <input
          class="input-inicio"
          type="text"
          placeholder="Ingrese su numero de celular"
          name="telefonoCelular"
        />
      </div>

      <div class="input-contenedor">
        <i class="fa-sharp fa-solid fa-phone"></i>
        <input
          class="input-inicio"
          type="text"
          placeholder="Ingrese su numero de telefono fijo"
          name="telefonoFijo"
        />
      </div>

      <div class="input-contenedor">
        <i class="fas fa-envelope icon"></i>
        <input
          class="input-inicio"
          type="text"
          placeholder="Correo Electronico"
          name="email"
        />
      </div>

      <div class="input-contenedor">
        <i class="fas fa-key icon"></i>
        <input class="input-inicio" type="password" placeholder="Contraseña" name="password"/>
      </div>
    </div>
    <div class="campo">
        <label class="campo__label" for="calle">Calle:</label>
        <input
          class="campo__field"
          type="text"
          placeholder="Ingresa la Calle"
          id="calle"
          name="calle"
          required
          value="<?php echo $calle; ?>"
        />
      </div>
      <div class="campo">
        <label class="campo__label" for="piso">Piso:</label>
        <input
          class="campo__field"
          type="number"
          placeholder="Ingresa el Piso"
          id="piso"
          name="piso"
          value="<?php echo $piso; ?>"
        />
      </div>
      <div class="campo">
        <label class="campo__label" for="codigoPostal">Código Postal:</label>
        <input
          class="campo__field"
          type="number"
          placeholder="Ingresa el Código Postal"
          id="codigoPostal"
          name="codigoPostal"
          required
          value="<?php echo $codigoPostal; ?>"
        />
      </div>
      <div class="campo">
        <label class="campo__label" for="municipio">Municipio:</label>
        <input
          class="campo__field"
          type="text"
          placeholder="Ingresa el Municipio"
          id="municipio"
          name="municipio"
          required
          value="<?php echo $municipio; ?>"
        />
      </div>
      <div class="campo">
        <label class="campo__label" for="numeroInterno">Número Interno:</label>
        <input
          class="campo__field"
          type="number"
          placeholder="Ingresa el Número Interno"
          id="numeroInterno"
          name="numeroInterno"
          value="<?php echo $numeroInterno; ?>"
        />
      </div>
      <div class="campo">
        <label class="campo__label" for="numeroExterno">Número Externo:</label>
        <input
          class="campo__field"
          type="number"
          placeholder="Ingresa el Número Externo"
          id="numeroExterno"
          name="numeroExterno"
          required
          value="<?php echo $numeroExterno; ?>"
        />
      </div>
      <div class="campo">
        <label class="campo__label" for="lote">Lote:</label>
        <input
          class="campo__field"
          type="number"
          placeholder="Ingresa el Lote"
          id="lote"
          name="lote"
          value="<?php echo $lote; ?>"
        />
      </div>
      <div class="campo">
        <label class="campo__label" for="asentamiento">Asentamiento:</label>
        <input
          class="campo__field"
          type="text"
          placeholder="Ingresa el Asentamiento"
          id="asentamiento"
          name="asentamiento"
          required
          value="<?php echo $asentamiento; ?>"
        />
      </div>
      <div class="campo">
        <label class="campo__label" for="estado">Estado:</label>
        <input
          class="campo__field"
          type="text"
          placeholder="Ingresa el Estado"
          id="estado"
          name="estado"
          required
          value="<?php echo $estado; ?>"
        />
      </div>
      <div class="campo">
        <label class="campo__label" for="departamento">Departamento:</label>
        <input
          class="campo__field"
          type="text"
          placeholder="Ingresa el Departamento"
          id="departamento"
          name="departamento"
          value="<?php echo $departamento; ?>"
        />
      </div>
      <div class="campo">
        <label class="campo__label" for="pais">País:</label>
        <input
          class="campo__field"
          type="text"
          placeholder="Ingresa el País"
          id="pais"
          name="pais"
          required
          value="<?php echo $pais; ?>"
        />
      </div>
      <div class="campo">
        <label class="campo__label" for="catalogo">País:</label>
        <select name="producto" id="producto">
            <option value="producto" name="producto">Producto</option>
            <option value="servicio" name="servicio">servicio</option>
        </select>
      </div>
      <div class="campo">
        <label class="campo__label" for="area">Area:</label>
        <select name="area" id="area">
            <option value="ComidaYBebida">Comida Y Bebida</option>
        </select>

      </div>
      
</form>

<!-- Creamos nuestro footer -->
<?php incluirTemplate("footer"); ?>
