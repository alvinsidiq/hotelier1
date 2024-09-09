  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link <?= $menu == 'dashboard' ? '': 'collapsed' ?>" href="<?= base_url('Admin')?>">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      </li>
      <li class="nav-item">
        <a class="nav-link  <?= $menu == 'roomtype' || $menu == 'room' ? '': 'collapsed' ?>" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Manage Room</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content  <?= $menu == 'roomtype' || $menu == 'room' ? '': 'collapse' ?> " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?= base_url('RoomType') ?>">
              <i class="bi bi-circle"></i><span>Room Type</span>
            </a>
          </li>
          <li>
            <a href="<?= base_url('Room')?>">
              <i class="bi bi-circle"></i><span>Room</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link <?= $menu == 'services' ? '': 'collapsed' ?>" href="<?= base_url('Layanan') ?>">
          <i class="bi bi-server"></i>
          <span>Services</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?= $menu == 'carousel' ? '': 'collapsed' ?>" href="<?= base_url('Carousel') ?>">
          <i class="bi bi-stack"></i>
          <span>Carousel</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?= $menu == 'testimoni' ? '': 'collapsed' ?>" href="<?= base_url('Testimoni/index') ?>">
          <i class="bi bi-stack"></i>
          <span>Testimoni</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?= $menu == 'staff' ? '': 'collapsed' ?>" href="<?= base_url('Staff/index') ?>">
          <i class="bi bi-stack"></i>
          <span>Staff</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="tables-general.html">
              <i class="bi bi-circle"></i><span>General Tables</span>
            </a>
          </li>
          <li>
            <a href="tables-data.html">
              <i class="bi bi-circle"></i><span>Data Tables</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.html">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->


      <li class="nav-item">
        <a class="nav-link " href="<?= base_url('Login/Logout')?>">
          <i class="bi bi-file-earmark"></i>
          <span>Logout</span>
        </a>
      </li><!-- End Blank Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->