<div class="sidebar offcanvas-md offcanvas-start col-md-3 col-lg-2 bg-body-tertiary d-flex flex-column flex-shrink-0 p-3" tabindex="-1" id="sidebar">
   <div class="offcanvas-header fs-5">
      Lutfi web
   </div>
   <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
         <a href="/" class="nav-link {{ ($title == "Home")? 'active' : '' }}" aria-current="page">Home</a>
      </li>
      <li>
         <a href="/history" class="nav-link {{ ($title == "History")? 'active' : '' }}">History</a>
      </li>
      <li>
         <a href="/paket" class="nav-link {{ ($title == "Daftar Paket")? 'active' : '' }}">Products</a>
      </li>
      <li>
         <a href="/hutang" class="nav-link {{ ($title == "Daftar Hutang")? 'active' : '' }}">Hutang</a>
      </li>
   </ul>
   <hr>
   <div class="dropdown">
      <a href="#" class="d-flex align-items-center text-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="https://github.com/mdo.png" alt="" width="35" height="35" class="rounded-circle me-2">
        <strong>mdo</strong>
      </a>
      <ul class="dropdown-menu dropdown-menu-dark text-small shadow" style="">
         <li><a class="dropdown-item" href="#">New project...</a></li>
         <li><a class="dropdown-item" href="#">Settings</a></li>
         <li><a class="dropdown-item" href="#">Profile</a></li>
         <li><hr class="dropdown-divider"></li>
         <li>
            <form action="/logout" method="post">
               @csrf
               <button type="submit" class="dropdown-item">Logout</button>
            </form>
         </li>
      </ul>
   </div>
</div>