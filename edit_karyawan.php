<!DOCTYPE html>
<html lang="en">

<?php
include "config.php";
$id = $_GET['id'];
$sql = "SELECT * FROM karyawan WHERE id= '$id' ";
$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_assoc($query);
?>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Project 1 - Kepegawaian</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="apple-touch-icon" sizes="120x120" href="<?= $base_url ?>assets/img/favicon/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="<?= $base_url ?>assets/img/favicon/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="<?= $base_url ?>assets/img/favicon/favicon-16x16.png" />
    <link rel="manifest" href="<?= $base_url ?>assets/img/favicon/site.webmanifest" />
    <link rel="mask-icon" href="<?= $base_url ?>assets/img/favicon/safari-pinned-tab.svg" color="#ffffff" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="theme-color" content="#ffffff" />
    <link type="text/css" href="<?= $base_url ?>assets/vendor/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet" />
    <link type="text/css" href="<?= $base_url ?>assets/vendor/notyf/notyf.min.css" rel="stylesheet" />
    <link type="text/css" href="<?= $base_url ?>assets/css/volt.css" rel="stylesheet" />
</head>

<body>
    <?php
    include "components/navbar.php";
    include "components/sidebar.php";
    ?>


    <main class="content">
        <nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark ps-0 pe-2 pb-0">
            <div class="container-fluid px-0">
                <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
                    <div class="d-flex align-items-center">
                        <!-- Search form -->
                        <form class="navbar-search form-inline" id="navbar-search-main">
                            <div class="input-group input-group-merge search-bar">
                                <span class="input-group-text" id="topbar-addon">
                                    <svg class="icon icon-xs" x-description="Heroicon name: solid/search" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                                    </svg>
                                </span>
                                <input type="text" class="form-control" id="topbarInputIconLeft" placeholder="Search" aria-label="Search" aria-describedby="topbar-addon" />
                            </div>
                        </form>
                        <!-- / Search form -->
                    </div>
                    <!-- Navbar links -->
                    <ul class="navbar-nav align-items-center">
                        <li class="nav-item dropdown">
                            <a class="nav-link text-dark notification-bell unread dropdown-toggle" data-unread-notifications="true" href="#" role="button" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                                <svg class="icon icon-sm text-gray-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z">
                                    </path>
                                </svg>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-center mt-2 py-0">
                                <div class="list-group list-group-flush">
                                    <a href="#" class="text-center text-primary fw-bold border-bottom border-light py-3">Notifications</a>
                                    <a href="#" class="list-group-item list-group-item-action border-bottom">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <!-- Avatar -->
                                                <img alt="Image placeholder" src="<?= $base_url ?>assets/img/team/profile-picture-1.jpg" class="avatar-md rounded" />
                                            </div>
                                            <div class="col ps-0 ms-2">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <h4 class="h6 mb-0 text-small">Jose Leos</h4>
                                                    </div>
                                                    <div class="text-end">
                                                        <small class="text-danger">a few moments ago</small>
                                                    </div>
                                                </div>
                                                <p class="font-small mt-1 mb-0">
                                                    Added you to an event "Project stand-up" tomorrow at
                                                    12:30 AM.
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action border-bottom">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <!-- Avatar -->
                                                <img alt="Image placeholder" src="<?= $base_url ?>assets/img/team/profile-picture-2.jpg" class="avatar-md rounded" />
                                            </div>
                                            <div class="col ps-0 ms-2">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <h4 class="h6 mb-0 text-small">Neil Sims</h4>
                                                    </div>
                                                    <div class="text-end">
                                                        <small class="text-danger">2 hrs ago</small>
                                                    </div>
                                                </div>
                                                <p class="font-small mt-1 mb-0">
                                                    You've been assigned a task for "Awesome new
                                                    project".
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action border-bottom">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <!-- Avatar -->
                                                <img alt="Image placeholder" src="<?= $base_url ?>assets/img/team/profile-picture-3.jpg" class="avatar-md rounded" />
                                            </div>
                                            <div class="col ps-0 m-2">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <h4 class="h6 mb-0 text-small">Roberta Casas</h4>
                                                    </div>
                                                    <div class="text-end">
                                                        <small>5 hrs ago</small>
                                                    </div>
                                                </div>
                                                <p class="font-small mt-1 mb-0">
                                                    Tagged you in a document called "Financial plans",
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action border-bottom">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <!-- Avatar -->
                                                <img alt="Image placeholder" src="<?= $base_url ?>assets/img/team/profile-picture-4.jpg" class="avatar-md rounded" />
                                            </div>
                                            <div class="col ps-0 ms-2">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <h4 class="h6 mb-0 text-small">Joseph Garth</h4>
                                                    </div>
                                                    <div class="text-end">
                                                        <small>1 d ago</small>
                                                    </div>
                                                </div>
                                                <p class="font-small mt-1 mb-0">
                                                    New message: "Hey, what's up? All set for the
                                                    presentation?"
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action border-bottom">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <!-- Avatar -->
                                                <img alt="Image placeholder" src="<?= $base_url ?>assets/img/team/profile-picture-5.jpg" class="avatar-md rounded" />
                                            </div>
                                            <div class="col ps-0 ms-2">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <h4 class="h6 mb-0 text-small">Bonnie Green</h4>
                                                    </div>
                                                    <div class="text-end">
                                                        <small>2 hrs ago</small>
                                                    </div>
                                                </div>
                                                <p class="font-small mt-1 mb-0">
                                                    New message: "We need to improve the UI/UX for the
                                                    landing page."
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="dropdown-item text-center fw-bold rounded-bottom py-3">
                                        <svg class="icon icon-xxs text-gray-400 me-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                            <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path>
                                        </svg>
                                        View all
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown ms-lg-3">
                            <a class="nav-link dropdown-toggle pt-1 px-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <div class="media d-flex align-items-center">
                                    <img class="avatar rounded-circle" alt="Image placeholder" src="<?= $base_url ?>assets/img/team/profile-picture-3.jpg" />
                                    <div class="media-body ms-2 text-dark align-items-center d-none d-lg-block">
                                        <span class="mb-0 font-small fw-bold text-gray-900">Bonnie Green</span>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-menu dashboard-dropdown dropdown-menu-end mt-2 py-1">
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd"></path>
                                    </svg>
                                    My Profile
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path>
                                    </svg>
                                    Settings
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M5 3a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V5a2 2 0 00-2-2H5zm0 2h10v7h-2l-1 2H8l-1-2H5V5z" clip-rule="evenodd"></path>
                                    </svg>
                                    Messages
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-2 0c0 .993-.241 1.929-.668 2.754l-1.524-1.525a3.997 3.997 0 00.078-2.183l1.562-1.562C15.802 8.249 16 9.1 16 10zm-5.165 3.913l1.58 1.58A5.98 5.98 0 0110 16a5.976 5.976 0 01-2.516-.552l1.562-1.562a4.006 4.006 0 001.789.027zm-4.677-2.796a4.002 4.002 0 01-.041-2.08l-.08.08-1.53-1.533A5.98 5.98 0 004 10c0 .954.223 1.856.619 2.657l1.54-1.54zm1.088-6.45A5.974 5.974 0 0110 4c.954 0 1.856.223 2.657.619l-1.54 1.54a4.002 4.002 0 00-2.346.033L7.246 4.668zM12 10a2 2 0 11-4 0 2 2 0 014 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    Support
                                </a>
                                <div role="separator" class="dropdown-divider my-1"></div>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <svg class="dropdown-icon text-danger me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                                        </path>
                                    </svg>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="card card-body border-0 shadow my-4">
            <h2 class="h5 mb-4">General information KARYAWAN</h2>
            <form action="PE_karyawan.php" method="POST">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div>
                            <label for="first_name">Nama</label>
                            <input class="form-control" name="nama" type="text" value="<?= $result['nama'] ?>" placeholder="Enter your first name" required="">
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div>
                            <label for="last_name">Jenis Kelamin</label>
                            <input class="form-control" name="jenis_kelamin" type="text" value="<?= $result['jenis_kelamin'] ?>" placeholder="Also your last name" required="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div>
                            <label for="first_name">Tempat Lahir</label>
                            <input class="form-control" name="tempat_lahir" type="text" value="<?= $result['tempat_lahir'] ?>" placeholder="Enter your first name" required="">
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div>
                            <label for="last_name">Tanggal Lahir</label>
                            <input class="form-control" name="tanggal_lahir" type="text" value="<?= $result['tanggal_lahir'] ?>" placeholder="Also your last name" required="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div>
                            <label for="first_name">No.HP</label>
                            <input class="form-control" name="no_hp" type="text" value="<?= $result['no_hp'] ?>" placeholder="Enter your first name" required="">
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div>
                            <label for="last_name">Golongan Darah</label>
                            <input class="form-control" name="gol_darah" type="text" value="<?= $result['gol_darah'] ?>" placeholder="Also your last name" required="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div>
                            <label for="first_name">Alamat</label>
                            <input class="form-control" name="alamat" type="text" value="<?= $result['alamat'] ?>" placeholder="Enter your first name" required="">
                        </div>
                    </div>
                    <div class="col-sm-4 mb-3">
                        <label for="jabatan">divisi</label>
                        <select class="form-select w-100 mb-0" id="divisi" name="divisi" aria-label="jabatan select example">
                            <?php
                            include "config.php";
                            $sql = "SELECT * FROM divisi";
                            $query = mysqli_query($conn, $sql);

                            foreach ($query as $data) { ?>
                                <option <?= ($result['divisi'] == $data['nama_divisi']) ? ' selected' : '' ?>><?php echo $data['nama_divisi'] ?></option>
                            <?php  } ?>
                        </select>

                    </div>
                    <div class="col-sm-4 mb-3">
                        <label for="jabatan">jabatan</label>
                        <select class="form-select w-100 mb-0" id="jabatan" name="jabatan" aria-label="select example">
                            <?php
                            include "config.php";
                            $sql = "SELECT * FROM jabatan";
                            $query = mysqli_query($conn, $sql);

                            foreach ($query as $data) { ?>
                                <option <?= ($result['jabatan'] == $data['nama_jabatan']) ? ' selected' : '' ?>><?php echo $data['nama_jabatan'] ?></option>
                            <?php  } ?>
                        </select>

                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div>
                                <label for="first_name"></label>
                                <input class="form-control" name="id" type="hidden" value="<?= $result['id'] ?>" placeholder="Enter your first name" required="">
                            </div>
                        </div>
                        <div class="mt-3">
                            <button class="btn btn-gray-800 mt-2 animate-up-2" name="saveall" type="submit">Save all</button>
                        </div>
            </form>
        </div>

    </main>

    <!-- Core -->
    <script src="<?= $base_url ?>assets/vendor/@popperjs/core/dist/umd/popper.min.js"></script>
    <script src="<?= $base_url ?>assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Vendor JS -->
    <script src="<?= $base_url ?>assets/vendor/onscreen/dist/on-screen.umd.min.js"></script>

    <!-- Slider -->
    <script src="<?= $base_url ?>assets/vendor/nouislider/distribute/nouislider.min.js"></script>

    <!-- Smooth scroll -->
    <script src="<?= $base_url ?>assets/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

    <!-- Charts -->
    <script src="<?= $base_url ?>assets/vendor/chartist/dist/chartist.min.js"></script>
    <script src="<?= $base_url ?>assets/vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>

    <!-- Datepicker -->
    <script src="<?= $base_url ?>assets/vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>

    <!-- Sweet Alerts 2 -->
    <script src="<?= $base_url ?>assets/vendor/sweetalert2/dist/sweetalert2.all.min.js"></script>

    <!-- Moment JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script>

    <!-- Vanilla JS Datepicker -->
    <script src="<?= $base_url ?>assets/vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>

    <!-- Notyf -->
    <script src="<?= $base_url ?>assets/vendor/notyf/notyf.min.js"></script>

    <!-- Simplebar -->
    <script src="<?= $base_url ?>assets/vendor/simplebar/dist/simplebar.min.js"></script>

    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <!-- Volt JS -->
    <script src="<?= $base_url ?>assets/js/volt.js"></script>
</body>

</html>