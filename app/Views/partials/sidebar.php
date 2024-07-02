<div class="d-flex flex-column flex-shrink-0 p-3">
    <div id="bdSidebar" class="d-flex flex-column flex-shrink-0 p-3 bg-success text-white">
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item mb-1">
                <a href="#"
                   class="sidebar-link collapsed"
                   data-bs-toggle="collapse"
                   data-bs-target="#barang"
                   aria-expanded="false"
                   aria-controls="barang">
                    <i class="fa-regular fa-user"></i>
                    Barang
                </a>
            </li>
            <ul id="barang" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                <li class="sidebar-item">
                    <a href="/barang/barang" class="sidebar-link">
                        <i class="fas fa-sign-in-alt pe-2"></i>
                        <span class="topic">Data Barang</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="/barang/laporan" class="sidebar-link">
                        <i class="fas fa-user-plus pe-2"></i>
                        <span class="topic">Laporan Barang</span>
                    </a>
                </li>
            </ul>
            <br>
            <li class="nav-item mb-1">
                <a href="#"
                   class="sidebar-link collapsed"
                   data-bs-toggle="collapse"
                   data-bs-target="#supplyer"
                   aria-expanded="false"
                   aria-controls="supplyer">
                    <i class="fa-regular fa-user"></i>
                    supplyer
                </a>
            </li>
            <ul id="supplyer" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                <li class="sidebar-item">
                    <a href="/barang/barang" class="sidebar-link">
                        <i class="fas fa-sign-in-alt pe-2"></i>
                        <span class="topic">Data supplyer</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="/barang/laporan" class="sidebar-link">
                        <i class="fas fa-user-plus pe-2"></i>
                        <span class="topic">tambah supplyer</span>
                    </a>
                </li>
            </ul>
            <li class="nav-item mb-1">
                <a href="#">
                    <i class="fa-regular fa-newspaper"></i>
                    Laporan
                </a>
            </li>
            <li class="sidebar-item nav-item mb-1">
                <a href="#"
                   class="sidebar-link collapsed"
                   data-bs-toggle="collapse"
                   data-bs-target="#settings"
                   aria-expanded="false"
                   aria-controls="settings">
                    <i class="fas fa-cog pe-2"></i>
                    <span class="topic">Settings</span>
                </a>
                <ul id="settings" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <i class="fas fa-sign-in-alt pe-2"></i>
                            <span class="topic">Login</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <i class="fas fa-user-plus pe-2"></i>
                            <span class="topic">Register</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <i class="fas fa-sign-out-alt pe-2"></i>
                            <span class="topic">Log Out</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        <hr>
    </div>

    <div id="content" class="bg-light flex-fill">
        <div class="p-2 d-md-none d-flex text-white bg-success">
        </div>
        <div class="p-4">
            <nav style="--bs-breadcrumb-divider:'>';font-size:14px">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <i class="fa-solid fa-house"></i>
                    </li>
                    <li class="breadcrumb-item"></li>
                    <li class="breadcrumb-item"></li>
                </ol>
            </nav>
            <hr>
            <div class="row">
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2LcGZ4Wjw+0w54u8xYqvCc7h6V19kP2F2NxPlmTB1T" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>
