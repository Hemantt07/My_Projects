<nav class="navbar navbar-expand-lg ">
  <div class="container-fluid">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link @if(Request::path()=='/')active @endif " aria-current="page" href="/">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if(Request::path()=='products')active @endif " href="/products">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if(Request::path()=='orders')active @endif " href="/orders">Orders</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if(Request::path()=='settings')active @endif " href="/settings">Settings</a>
        </li>
      </ul>
  </div>
</nav>
