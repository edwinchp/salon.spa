<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <!-- Brand -->
    <a class="navbar-brand" href="#">Spa Lambrosio</a>
    
    <!-- Links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link {{Request::is('servicios') ? 'active' : ''}}" href="/servicios">Servicios</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/ofertas">Ofertas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{Request::is('ventas') ? 'active' : ''}}" href="/ventas">Ventas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/inventario">Inventario</a>
      </li>
      
      <!-- Dropdown -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
          Dropdown link
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Link 1</a>
          <a class="dropdown-item" href="#">Link 2</a>
          <a class="dropdown-item" href="#">Link 3</a>
        </div>
      </li>
    </ul>
    </nav>