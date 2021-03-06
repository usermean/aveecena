<!--
@Project: Aveecena
@Programmer: gustian adam
@instagram: @gustinadam
@Email : ryansaptama@gmail.com

@About-Aveecena :
aveecena merupakan sebuah platform yang dikembangkan untuk pembelajaran secara online 
untuk praktisi kesehatan di Indonesia. Memasuki akses digital Informasi yang kuat, 
aveecena bertransformasi untuk memberikan layanan pembelajaran online untuk apapun, 
dimanapun dan kapanpun untuk mengembangkan keterampilan, keahlian maupun pengetahuan 
para praktisi kesehatan di Indonesia.
-->

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Data Peserta - Aveecena</title>
    <!-- General CSS Files -->
    <link rel="icon" href="<?= base_url('assets/') ?>img/favicon.png" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>stisla-assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>stisla-assets/css/components.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.10.0/dist/sweetalert2.all.min.js"></script>

</head>

<body>

    <!-- Start Sidebar -->
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class=" navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a>
                        </li>
                    </ul>
                </form>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" style="margin-bottom:3px !important;" src="../assets/stisla-assets/img/avatar/avatar-2.png" class="rounded-circle mr-1 my-auto">
                            <div class="d-sm-none d-lg-inline-block" style="font-size:15px;">Hello, <?php
                                                                                                    $data['user'] = $this->db->get_where('admin', ['email' =>
                                                                                                    $this->session->userdata('email')])->row_array();
                                                                                                    echo $data['user']['username'];
                                                                                                    ?></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-title">Admin - Aveecena</div>
                            <a href="<?= base_url('welcome/logout') ?>" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand text-danger">
                        <div>
                            <a href="<?= base_url('admin') ?>" style="font-size: 30px;font-weight:900;font-family: 'Poppins', sans-serif;" class="text-success text-center"><i style="font-size: 30px;" class="fas fa-graduation-cap"></i> |
                                Aveecena <sup>3</sup></a>
                        </div>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="<?= base_url('admin') ?>">AV <sup>3</sup></a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header ">Dashboard</li>
                        <li class="nav-item dropdown">
                            <a href="<?= base_url('admin') ?>" class="nav-link"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
                        </li>
                        <li class="menu-header">Management Peserta</li>
                        <li class="nav-item dropdown active">
                            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-user"></i>
                                <span>Peserta</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="<?= base_url('admin/data_siswa') ?>">Data Peserta</a></li>
                            </ul>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="<?= base_url('admin/data_transaksi') ?>">Data Transaksi Peserta</a></li>
                            </ul>
                        </li>
                        <li class="menu-header">Admin konfigurasi</li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-user-tie"></i>
                                <span>Admin</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="<?= base_url('admin/data_admin') ?>">Data admin</a></li>
                                <li><a class="nav-link" href="<?= base_url('admin/add_admin') ?>">Tambah Admin</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-header">Management Pengajar</li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link has-dropdown"><i class="fas fa-chalkboard-teacher"></i>
                                <span>Pengajar</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="<?= base_url('admin/data_guru') ?>">Data Pengajar</a>
                                </li>
                                <li><a class="nav-link" href="<?= base_url('admin/add_guru') ?>">Tambah Data Pengajar</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-header">Management Materi</li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link has-dropdown"><i class="fas fa-book"></i>
                                <span>Materi</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="<?= base_url('admin/data_materi') ?>">Data Materi</a>
                                </li>
                                <li><a class="nav-link" href="<?= base_url('admin/tambah_materi') ?>">Tambah Materi</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-header">Management Kegiatan</li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link has-dropdown"><i class="fas fa-book"></i>
                                <span>Kegiatan</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="<?= base_url('admin/data_materi') ?>">Data Kegiatan</a>
                                </li>
                                <li><a class="nav-link" href="<?= base_url('admin/tambah_materi') ?>">Tambah Kegiatan</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-header">About Developer</li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link has-dropdown"><i class="fas fa-address-card"></i>
                                <span>Developer</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="<?= base_url('admin/about_developer') ?>">Tentang
                                        Pembuat</a>
                                </li>
                                <li><a class="nav-link" href="<?= base_url('admin/about_aveecena') ?>">Tentang
                                        Aveecena</a>
                                </li>
                            </ul>
                        </li>
                </aside>
            </div>
            <!-- End Sidebar -->

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title" style="color: black;">Management Data Transaksi Peserta Aveecena</h2>
                            <hr>
                            <p class="card-text"> Berikut adalah data Transaksi peserta kelas aveecena mohon gunakan data tersebut dengan bijak dan tidak disalah gunakan </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="bg-white p-4" style="border-radius:3px;box-shadow:rgba(0, 0, 0, 0.03) 0px 4px 8px 0px;">
                                <div class="table-responsive">
                                    <table id="example" class="table align-items-center table-flush">
                                        <thead class="thead-light">
                                            <tr class="text-center">
                                                <th scope="col">ID Transaksi</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Nominal</th>
                                                <th scope="col">Pembayaran Via</th>
                                                <th scope="col">Tanggal</th>
                                                <th scope="col">Bank</th>
                                                <th scope="col">Detail Trx</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Pembelian Kls</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php

                                            foreach ($user as $u) {
                                            ?>
                                                <tr class="text-center">

                                                    <th scope="row">
                                                        <?php echo $u->order_id ?>
                                                    </th>

                                                    <td>
                                                        <?php echo $u->email ?>
                                                    </td>

                                                    <td>
                                                        <?php echo $u->gross_amount ?>
                                                    </td>

                                                    <td>
                                                        <?php echo $u->payment_type ?>
                                                    </td>

                                                    <td>
                                                        <?php echo $u->transaction_time ?>
                                                    </td>
                                                    
                                                    <td>
                                                        <?php echo $u->bank ?>
                                                    </td>
                                                    
                                                    <td>
                                                        <a href="<?php echo $u->pdf_url ?>" >Klik Disini</a>
                                                    </td>

                                                    <td><?php 
                                                        if ($u->status_code == 200){ ?>
                                                        <span class="badge badge-primary">Dibayar</span>
                                                        <?php
                                                        }else{
                                                        ?>
                                                        <span class="badge badge-danger">Pending</span>
                                                        <?php } ?>
                                                    </td>

                                                    <td>
                                                        <?php echo $u->kelas ?>
                                                    </td>

                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                    <p class="small font-weight-bold">* Pending bisa saja dikarenakan peserta belum membayar maupun transaksi tidak diselesaikan, silahkan ulang pembelian jika terjadi hal tersebut</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- End Main Content -->

    <!-- Start Sweetalert -->

    <?php if ($this->session->flashdata('success-edit')) : ?>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Data Peserta Telah Dirubah!',
                text: 'Selamat data berubah!',
                showConfirmButton: false,
                timer: 2500
            })
        </script>
    <?php endif; ?>

    <?php if ($this->session->flashdata('user-delete')) : ?>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Data Peserta Telah Dihapus!',
                text: 'Selamat data telah Dihapus!',
                showConfirmButton: false,
                timer: 2500
            })
        </script>
    <?php endif; ?>

    <!-- End Sweetalert -->

    <!-- Start Footer -->
    <footer class="main-footer">
        <div class="text-center">
            Copyright &copy; 2020 <div class="bullet"></div><a href="instagram.com/gustin.adam">Gustian adam</a>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="<?= base_url('assets/') ?>stisla-assets/js/stisla.js"></script>
    <!-- JS Libraies -->
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
    <!-- Template JS File -->
    <script src="<?= base_url('assets/') ?>stisla-assets/js/scripts.js"></script>
    <script src="<?= base_url('assets/') ?>stisla-assets/js/custom.js"></script>
</body>

</html>