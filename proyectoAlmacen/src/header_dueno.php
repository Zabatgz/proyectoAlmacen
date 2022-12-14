<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/proyectoAlmacen/src/menuDueño.php">Menu</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">Subir Factura</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="añadirProducto.php">Añadir Producto</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Gestionar Stock</a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Visualizar Stock
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="/proyectoAlmacen/src/visualizarStockDueno.php?sucursal=1">Sucursal Talcahuano</a></li>
            <li><a class="dropdown-item" href="/proyectoAlmacen/src/visualizarStockDueno.php?sucursal=2">Sucursal Concepcion</a></li>
            <li><a class="dropdown-item" href="/proyectoAlmacen/src/visualizarStockDueno.php?sucursal=3">Sucursal Chiguayante</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <ul class="navbar-nav me-auto">
      <li class="nav-item">
          <a class="nav-link" href="../index.html">Cerrar Sesion</a>
      </li>
    </ul>
  </div>
</nav>

