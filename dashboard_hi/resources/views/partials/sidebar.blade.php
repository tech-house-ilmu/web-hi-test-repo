{{-- ini adalah componen sidebar. silahkan costumize sesuai design dashboard HI --}}

<div id="sidebar" class="bg-costum text-light border-end d-flex flex-column vh-100">
    <div class="p-3">
        <!-- Sidebar Header -->
         <h5 class="d-flex justify-content-between align-items-center">
                    <img src="{{ asset('img/logo.jpg') }}" alt="Logo" style="width: 60px; height: 60px;" />
                    <div>
                              <span class="sidebar-text">House Ilmu Indonesia</span>
                              <h6 class="text-muted">Dashboard Admin</h6>
                    </div>
          </h5>

        <ul class="nav flex-column">
                    <li class="nav-item">
                              <a class="nav-link" href="#overview">
                              <i class="fas fa-th-large me-2"></i>
                              <span class="sidebar-text">Overview</span>
                              </a>
                    </li>
            <li class="nav-item">
                <a class="nav-link" href="/">
                    <i class="fas fa-home me-2"></i>
                    <span class="sidebar-text">Home</span>
                </a>
            </li>
            <li class="nav-item">
                    <a class="nav-link" href="#programme">
                              <i class="fas fa-book me-2"></i>
                              <span class="sidebar-text">Programme</span>
                    </a>
          </li>

            <li class="nav-item">
                <a class="nav-link" href="#career">
                    <i class="fas fa-briefcase me-2"></i>
                    <span class="sidebar-text">Career</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-info-circle me-2"></i>
                    <span class="sidebar-text">About</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-users me-2"></i>
                    <span class="sidebar-text">Teams</span>
                </a>
            </li>

            {{-- jika ada penambahan menu, maka sisipkan disini kemudan buat file cssnya --}}

            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-sign-out-alt me-2"></i>
                    <span class="sidebar-text">Logout</span>
                </a>
            </li>
        </ul>

       <!-- Profile Section -->
          <div class="d-flex flex-column align-items-center mt-auto mb-6">
                    <!-- Profile Button with border -->
                    <button class="btn btn-outline-light d-flex align-items-center px-3 py-2 w-100">
                              <img src="{{ asset('img/p2.jpg') }}" alt="Profile" class="rounded-circle" style="width: 45px; height: 45px;" />
                              <div class="ms-2 text-start">
                                        <p class="mb-0">Putra Pongkowulu</p>
                                        <small class="text-muted">putrapongkowulu@gmail.com</small>
                              </div>
                                 <i class="fas fa-chevron-right ms-auto custom-icon"></i>
                    </button>
          </div>
    </div>
</div>
