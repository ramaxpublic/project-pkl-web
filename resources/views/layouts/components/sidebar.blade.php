<div class="sidebar" data-color="blue">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a class="simple-text logo-normal"><p>
          Tracking Covid</p>
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a href="{{url('#')}}">
              <i class="now-ui-icons objects_key-25"></i>
              <p>Admin</p>
            </a>
          </li>
          <li>
            <a href="{{ url('/admin/provinsi') }}">
              <i class="now-ui-icons location_map-big"></i>
              <p>Provinsi</p>
            </a>
          </li>
          <li>
            <a href="{{ url('/admin/kota') }}">
              <i class="now-ui-icons location_map-big"></i>
              <p>Kota</p>
            </a>
          </li>
          <li>
            <a href="{{ url('/admin/kecamatan') }}">
              <i class="now-ui-icons location_map-big"></i>
              <p>Kecamatan</p>
            </a>
          </li>
          <li>
            <a href="{{ url('/admin/desa') }}">
              <i class="now-ui-icons location_map-big"></i>
              <p>Desa</p>
            </a>
          </li>
          <li>
            <a href="{{ url('/admin/rw') }}">
              <i class="now-ui-icons location_map-big"></i>
              <p>Rw</p>
            </a>
          </li>
          <li>
            <a href="{{ url('/admin/kasus') }}">
              <i class="now-ui-icons location_map-big"></i>
              <p>Kasus</p>
            </a>
          </li>
        </ul>
      </div>
    </div>