<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="{{route('dashboard.index')}}">LaundryO</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="{{route('dashboard.index')}}">Lau</a>
    </div> 
    <ul class="sidebar-menu">
      @if(auth()->user()->role == 'admin')
      <li class="menu-header">Admin</li>
      <li class="{{ active('dashboard*') }}"><a class="nav-link" href="/dashboard"><i class="fas fa-fire"></i><span>Dashboard</span></a></li>           
      <li class="{{ active('user*') }}"><a class="nav-link" href="{{route('user.index')}}"><i class="fas fa-user"></i><span>User</span></a></li>
      <li class="{{ active('member*') }}"><a class="nav-link" href="{{route('member.index')}}"><i class="fa-solid fa-users"></i><span>Member</span></a></li>           
      <li class="{{ active('outlet*') }}"><a class="nav-link" href="{{route('outlet.index')}}"><i class="fa-solid fa-store"></i><span>Outlet</span></a></li>           
      <li class="{{ active('paket*') }}"><a class="nav-link" href="{{route('paket.index')}}"><i class="fa-solid fa-box-open"></i></i><span>Paket</span></a></li>           
      <li class="{{ active('transaksi*') }}"><a class="nav-link" href="{{route('transaksi.index')}}"><i class="fa-solid fa-cash-register"></i><span>Transaksi</span></a></li>           
      <li class="{{ active('detailtransaksi*') }}"><a class="nav-link" href="{{route('detailtransaksi.index')}}"><i class="fa-solid fa-scroll"></i><span>Laporan</span></a></li>           
      @endif

      @if(auth()->user()->role == 'kasir')
      <li class="menu-header">Kasir</li>
      <li class="{{ active('user*') }}"><a class="nav-link" href="{{route('user.index')}}"><i class="fas fa-user"></i><span>User</span></a></li>  
      <li class="{{ active('member*') }}"><a class="nav-link" href="{{route('member.index')}}"><i class="fa-solid fa-users"></i><span>Member</span></a></li>      
      <li class="{{ active('transaksi*') }}"><a class="nav-link" href="{{route('transaksi.index')}}"><i class="fa-solid fa-cash-register"></i><span>Transaksi</span></a></li>
      <li class="{{ active('detailtransaksi*') }}"><a class="nav-link" href="{{route('detailtransaksi.index')}}"><i class="fa-solid fa-scroll"></i><span>Laporan</span></a></li>
      @endif

      @if(auth()->user()->role == 'owner')
      <li class="menu-header">owner</li>
      <li class="{{ active('detailtransaksi*') }}"><a class="nav-link" href="{{route('detailtransaksi.index')}}"><i class="fa-solid fa-scroll"></i><span>Laporan</span></a></li>        
      @endif
    </ul>
  </aside>
</div>
