<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
      <x-nav-link 
        text="Dashboard" 
        icon="tachometer-alt" 
        url="{{ route('admin.dashboard') }}"
        active="{{ request()->routeIs('admin.dashboard') ? ' active' : '' }}"
    />
    
    <li class="nav-header">USERS</li>

    @can('member-list')
    <x-nav-link 
        text="Member" 
        icon="users" 
        url="{{ route('admin.member') }}"
        active="{{ request()->routeIs('admin.member') ? ' active' : '' }}"
    />
    @endcan

    @can('role-list')
    <x-nav-link 
        text="Roles" 
        icon="th-list" 
        url="{{ route('admin.roles') }}"
        active="{{ request()->routeIs('admin.roles') ? ' active' : '' }}"
    />
    @endcan

    <li class="nav-header">OTHERS</li>
    
    @can('setting-list')
    <x-nav-link 
        text="Settings" 
        icon="cogs" 
        url="{{ route('admin.settings') }}"
        active="{{ request()->routeIs('admin.settings') ? ' active' : '' }}"
    />
    @endcan

    <x-nav-link 
        text="Activity Log" 
        icon="th" 
        url="{{ route('admin.logs') }}"
        active="{{ request()->routeIs('admin.logs') ? ' active' : '' }}"
    />

    <li class="nav-item">
      <a href="#" class="nav-link" id="logout">
        <i class="nav-icon fas fa-sign-out-alt"></i>
        <p>
          Logout
        </p>
      </a>
    </li>
    </ul>
</nav>