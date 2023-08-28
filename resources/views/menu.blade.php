<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" style="padding-top:20px;padding-bottom:20px;" class="brand-link">
      <span class="brand-text font-weight-light" style="font-size: initial;line-height: 1.6;">IT Black Owl</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" style="overflow-x: unset;overflow-y: unset;">
      

      
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-header" style="font-size: inherit;">Menu</li>
          <li class="nav-item">
            <a href="#" class="nav-link" onclick="ajax_email('{{Auth::user()->id}}');">
              <i class="nav-icon far fa-calendar-alt" style="font-size: 14px;"></i>
              <p>
                Tampilkan Email
                <span class="badge badge-info right"></span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link" onclick="ajax_code_acak('{{Auth::user()->id}}');">
              <i class="nav-icon far fa-calendar-alt" style="font-size: 14px;"></i>
              <p>
                Code Acak
                <span class="badge badge-info right"></span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link" onclick="ajax_qrcode('{{Auth::user()->id}}');">
              <i class="nav-icon far fa-calendar-alt" style="font-size: 14px;"></i>
              <p>
                QR Code
                <span class="badge badge-info right"></span>
              </p>
            </a>
          </li>

          <li class="nav-item" onclick="ajax_masking('{{Auth::user()->id}}');">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-calendar-alt" style="font-size: 14px;"></i>
              <p>
                Masking
                <span class="badge badge-info right"></span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link" onclick="ajax_parsing('{{Auth::user()->id}}');">
              <i class="nav-icon far fa-calendar-alt" style="font-size: 14px;"></i>
              <p>
                Parsing
                <span class="badge badge-info right"></span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="profile" class="nav-link" >
              <i class="nav-icon far fa-calendar-alt" style="font-size: 14px;"></i>
              <p>
                Profile
                <span class="badge badge-info right"></span>
              </p>
            </a>
          </li>

          <li class="nav-item">
          <form method="POST" action="{{ route('logout') }}">
              @csrf
              <span class="nav-link" style="padding-left: 14px; display:block ruby">
              <x-dropdown-link :href="route('logout')"
                      onclick="event.preventDefault();
                                  this.closest('form').submit();" style="padding-left:0!important; font-size:inherit!important;">
                  {{ __('Log Out') }}
              </x-dropdown-link>
              </span>
          </form>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>