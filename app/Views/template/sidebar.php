<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/'); ?>">
                <i class="mdi mdi-home menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tr-surat" aria-expanded="false" aria-controls="tr-surat">
                <i class="mdi mdi-book-multiple menu-icon"></i>
                <span class="menu-title">Transaksi Surat</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tr-surat">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="<?= base_url('/transaksi-surat/surat-masuk'); ?>">Surat Masuk</a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?= base_url('/transaksi-surat/surat-keluar'); ?>">Surat Keluar</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/logout">
                <i class="mdi mdi-logout-variant menu-icon"></i>
                <span class="menu-title">Logout</span>
            </a>
        </li>
    </ul>
</nav>