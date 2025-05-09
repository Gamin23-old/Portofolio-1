<div class="main-nav nav-three">
    <div class="container">
        <nav class="navbar navbar-expand-md navbar-light">

            <!-- Logo -->
            <a class="navbar-brand" href="index.php">
                <img src="../admin/dist/images/dark.png" class="logo-one" alt="Logo Perpus">
                <img src="../admin/dist/images/light.png" class="logo-two" alt="Logo Perpus">
            </a>

            <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">

                <ul class="navbar-nav m-auto">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">Beranda</a>
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
                                <a href="cart.php" class="nav-link">
                                    Keranjang Buku <i class="fas fa-shopping-cart"></i>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="log-out.php" class="nav-link text-danger">
                                    Log Out
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="shop-grid.php" class="nav-link">Koleksi Buku</a>
                    </li>

                    <li class="nav-item">
                        <a href="contact.php" class="nav-link">Kontak Kami</a>
                    </li>
                </ul>

                <!-- Username -->
                <div class="top-header-right me-3 ms-3">
                    <h6 class="mb-0 text-warning">
                        <i class="bx bx-user"></i> <?= $_SESSION['username'] ?>
                    </h6>
                </div>

                <!-- Tombol Akun -->
                <div class="nav-btn nav-other-btn">
                    <a href="my-account.php" class="default-btn btn-bg-three">
                        Akun Saya
                    </a>
                </div>

            </div>
        </nav>
    </div>
</div>
