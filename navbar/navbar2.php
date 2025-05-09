<div class="main-nav nav-two">
    <div class="container">
        <nav class="navbar navbar-expand-md navbar-light">

            <!-- Kategori Buku -->
            <div class="navbar-category d-none d-md-block">
                <ul class="navbar-nav">
                    <li class="nav-item-link">
                        <a href="#" class="nav-link-item fw-bold text-warning">
                            <i class="bx bx-book-content"></i>
                            Kategori Buku
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Menu Navigasi -->
            <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link active">Beranda</a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            Menu Lain
                            <i class="bx bx-chevron-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="nav-item">
                                <a href="about.php" class="nav-link">Tentang Perpus</a>
                            </li>
                            <li class="nav-item">
                                <a href="log-out.php" class="nav-link">Logout</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="shop-grid.php" class="nav-link">Koleksi Buku</a>
                    </li>

                    <li class="nav-item">
                        <a href="contact.php" class="nav-link">Kontak</a>
                    </li>
                </ul>

                <!-- Username -->
                <div class="top-header-right ms-3 me-3">
                    <h6 class="mb-0 text-warning">
                        <i class="bx bx-user"></i> <?= $_SESSION['username'] ?>
                    </h6>
                </div>

                <!-- Akun -->
                <div class="nav-btn">
                    <a href="my-account.php" class="default-btn btn-bg-two">
                        Akun Saya
                    </a>
                </div>
            </div>
        </nav>
    </div>
</div>
