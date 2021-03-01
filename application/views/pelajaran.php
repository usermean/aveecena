<!--================Home Banner Area =================-->
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="pelajaran bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background="">
        </div>
        <div class="container">
            <div class="banner_content text-center">
                <h2 data-aos="fade-up" data-aos-duration="1600">Kelas</h2>
                <div data-aos="fade-up" data-aos-duration="1800" class="page_link">
                    <a href="<?= base_url('welcome') ?>">Beranda</a>
                    <a href="<?= base_url('welcome/pelajaran') ?>">Kelas</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->

<!--================Courses Area =================-->
<section class="courses_area p_40">
    <div class="container">
    <div class="main_title">
        <h2 data-aos="fade-up" data-aos-duration="1600">Kelas Yang Tersedia di Aveecena</h2>
        <p data-aos="fade-up" data-aos-duration="1800">Disini kami menyediakan beberapa pilihan kelas untuk diikuti oleh para praktisi kesehatan. ikuti kelasnya sekarang.</p>
    </div>
        <div class="row courses_inner">
            <div class="col-lg-9">
                <div class="grid_inner">
                    <div class="grid_item wd55">
                        <div class="courses_item" data-aos="fade-right" data-aos-duration="1800">
                            <img src="<?= base_url('assets/') ?>img/courses/course-1.jpg" alt=""alt style="border-radius: 20px 20px 20px 20px">
                            <div class="hover_text">
                                <a class="cat" href="<?= base_url('snap/detail_kelas_keperawatan') ?>">Detail</a>
                                <a href="<?= base_url('snap/detail_kelas_keperawatan') ?>">
                                    <h4>Kelas Keperawatan</h4>
                                </a>
                                <ul class="list">
                                    <li><a href="#"><i class="lnr lnr-users"></i><?=$keperawatan?></a></li>
                                    <li><a href="#"><i class="lnr lnr-bubble"></i> 0</a></li>
                                    <li><a href="#"><i class="lnr lnr-user"></i>Pengajar Aveecena</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="grid_item wd44">
                        <div class="courses_item" data-aos="fade-down" data-aos-duration="1800">
                            <img src="<?= base_url('assets/') ?>img/courses/course-2.jpg" alt=""alt style="border-radius: 20px 20px 20px 20px">
                            <div class="hover_text">
                                <a class="cat" href="<?= base_url('snap/detail_kelas_kebidanan') ?>">Detail</a>
                                <a href="<?= base_url('snap/detail_kelas_kebidanan') ?>">
                                    <h4>Kelas Kebidanan</h4>
                                </a>
                                <ul class="list">
                                    <li><a href="#"><i class="lnr lnr-users"></i><?=$kebidanan?></a></li>
                                    <li><a href="#"><i class="lnr lnr-bubble"></i> 0</a></li>
                                    <li><a href="#"><i class="lnr lnr-user"></i> Pengajar Aveecena</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="grid_item wd44">
                        <div class="courses_item" data-aos="fade-right" data-aos-duration="1800">
                            <img src="<?= base_url('assets/') ?>img/courses/course-4.jpg" alt=""alt style="border-radius: 20px 20px 20px 20px">
                            <div class="hover_text">
                                <a class="cat" href="<?= base_url('snap/detail_kelas_kedokteran') ?>">Detail</a>
                                <a href="<?= base_url('snap/detail_kelas_kedokteran') ?>">
                                    <h4>Kelas Kedokteran</h4>
                                </a>
                                <ul class="list">
                                    <li><a href="#"><i class="lnr lnr-users"></i><?=$kedokteran?></a></li>
                                    <li><a href="#"><i class="lnr lnr-bubble"></i> 0</a></li>
                                    <li><a href="#"><i class="lnr lnr-user"></i> Pengajar Aveecena</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="grid_item wd55">
                        <div class="courses_item" data-aos="fade-up" data-aos-duration="1800">
                            <img src="<?= base_url('assets/') ?>img/courses/course-5.jpg" alt=""alt style="border-radius: 20px 20px 20px 20px">
                            <div class="hover_text">
                                <a class="cat" href="<?= base_url('snap/detail_kelas_gizi') ?>">Detail</a>
                                <a href="<?= base_url('snap/detail_kelas_gizi') ?>">
                                    <h4>Kelas Gizi</h4>
                                </a>
                                <ul class="list">
                                    <li><a href="#"><i class="lnr lnr-users"></i><?=$gizi?></a></li>
                                    <li><a href="#"><i class="lnr lnr-bubble"></i> 0</a></li>
                                    <li><a href="#"><i class="lnr lnr-user"></i> Pengajar Aveecena</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="course_item" data-aos="fade-left" data-aos-duration="1800">
                    <img src="<?= base_url('assets/') ?>img/courses/course-3.jpg" alt=""alt style="border-radius: 20px 20px 20px 20px">
                    <div class="hover_text">
                        <a class="cat" href="<?= base_url('snap/detail_kelas_apoteker') ?>">Detail</a>
                        <a href="<?= base_url('snap/detail_kelas_apoteker') ?>">
                            <h4>Kelas Apoteker</h4>
                        </a>
                        <ul class="list">
                            <li><a href="#"><i class="lnr lnr-users"></i><?=$apoteker?></a></li>
                            <li><a href="#"><i class="lnr lnr-bubble"></i> 0</a></li>
                            <li><a href="#"><i class="lnr lnr-user"></i> Pengajar Aveecena</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Courses Area =================-->