<template>
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
      <!-- Sidebar - Brand -->
      <router-link class="sidebar-brand d-flex align-items-center justify-content-center" to="/">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-shopping-cart"></i>        </div>

        <div class="sidebar-brand-text mx-3">Ecommerce</div>
      </router-link>

      <!-- Divider -->
      <hr class="sidebar-divider my-0" />

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <router-link class="nav-link" to="/admin">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></router-link>
      </li>

      <!-- User Menu -->
      <li class="nav-item">
        <router-link class="nav-link" to="/admin/users">
          <i class="fas fa-fw fa-table"></i>
          <span>Users</span></router-link>
      </li>


    </ul>
    <!-- End of Sidebar -->
</template>

<script>

export default {
    name: 'Sidebar'
}
</script>
