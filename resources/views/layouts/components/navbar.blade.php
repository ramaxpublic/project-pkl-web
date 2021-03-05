<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              
            </div>
            <a><p>Dashboard</p></a>
          </div>
         
          <div id="navigation">
            
            <ul class="navbar-nav">
              <li class="nav-item">
                  <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle now-ui-icons users_single-02" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                </a>
                                
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item"><b>{{ Auth::user()->name }}</b></a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>