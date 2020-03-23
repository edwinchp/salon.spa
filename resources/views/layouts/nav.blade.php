<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <!-- Brand -->
    <a class="navbar-brand" href="/servicios">Spa Lambrosio</a>
    
    <!-- Links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link {{Request::is('servicios') ? 'active' : ''}}" href="/servicios">Servicios</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{Request::is('promociones') ? 'active' : ''}}" href="/promociones">Promociones</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{Request::is('ventas') ? 'active' : ''}}" href="/ventas">Ventas</a>
      </li>
    </ul>
    </nav>