<!-- Start Class Card -->
<section class="courses_area p_40">
    <div class="container">
        
        <div class="row courses_inner">
            <div class="col-lg-9">
                <div class="grid_inner">
                    <div class="grid_item wd55">
                        <div class="courses_item" data-aos="fade-right" data-aos-duration="1800">
                            <img src="<?= base_url('assets/') ?>img/courses/course-1.jpg" alt=""alt style="border-radius: 20px 20px 20px 20px">
                            <div class="hover_text">
                                <a class="cat" href="#"><?php if ($user['keperawatan']== 1){echo "Dibeli";}else{echo "Beli Kelas";}?></a>
                                <a href="<?= base_url('materi/kelas_keperawatan') ?>">
                                    <h4>Kelas Keperawatan</h4>
                                </a>
                                <ul class="list">
                                    <li><a href="<?= base_url('materi/kelas_keperawatan') ?>"><i class="lnr lnr-users"></i><?= $keperawatan?></a></li>
                                    <li><a href="<?= base_url('materi/kelas_keperawatan') ?>"><i class="lnr lnr-bubble"></i> 0</a></li>
                                    <li><a href="<?= base_url('materi/kelas_keperawatan') ?>"><i class="lnr lnr-user"></i>Pengajar Aveecena</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="grid_item wd44">
                        <div class="courses_item" data-aos="fade-down" data-aos-duration="1800">
                            <img src="<?= base_url('assets/') ?>img/courses/course-2.jpg" alt=""alt style="border-radius: 20px 20px 20px 20px">
                            <div class="hover_text">
                                <a class="cat" href="#"><?php if ($user['kebidanan']== 1){echo "Dibeli";}else{echo "Beli Kelas";}?></a>
                                <a href="<?= base_url('materi/kelas_kebidanan') ?>">
                                    <h4>Kelas Kebidanan</h4>
                                </a>
                                <ul class="list">
                                    <li><a href="<?= base_url('materi/kelas_kebidanan') ?>"><i class="lnr lnr-users"></i><?= $kebidanan?></a></li>
                                    <li><a href="<?= base_url('materi/kelas_kebidanan') ?>"><i class="lnr lnr-bubble"></i> 0</a></li>
                                    <li><a href="<?= base_url('materi/kelas_kebidanan') ?>"><i class="lnr lnr-user"></i> Pengajar Aveecena</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="grid_item wd44">
                        <div class="courses_item" data-aos="fade-right" data-aos-duration="1800">
                            <img src="<?= base_url('assets/') ?>img/courses/course-4.jpg" alt=""alt style="border-radius: 20px 20px 20px 20px">
                            <div class="hover_text">
                                <a class="cat" href="#"><?php if ($user['kedokteran']== 1){echo "Dibeli";}else{echo "Beli Kelas";}?></a>
                                <a href="<?= base_url('materi/kelas_kedokteran') ?>">
                                    <h4>Kelas Kedokteran</h4>
                                </a>
                                <ul class="list">
                                    <li><a href="<?= base_url('materi/kelas_kedokteran') ?>"><i class="lnr lnr-users"></i><?= $kedokteran?></a></li>
                                    <li><a href="<?= base_url('materi/kelas_kedokteran') ?>"><i class="lnr lnr-bubble"></i> 0</a></li>
                                    <li><a href="<?= base_url('materi/kelas_kedokteran') ?>"><i class="lnr lnr-user"></i> Pengajar Aveecena</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="grid_item wd55">
                        <div class="courses_item" data-aos="fade-up" data-aos-duration="1800">
                            <img src="<?= base_url('assets/') ?>img/courses/course-5.jpg" alt=""alt style="border-radius: 20px 20px 20px 20px">
                            <div class="hover_text">
                                <a class="cat" href="#"><?php if ($user['gizi']== 1){echo "Dibeli";}else{echo "Beli Kelas";}?></a>
                                <a href="<?= base_url('materi/kelas_gizi') ?>">
                                    <h4>Kelas Gizi</h4>
                                </a>
                                <ul class="list">
                                    <li><a href="<?= base_url('materi/kelas_gizi') ?>"><i class="lnr lnr-users"></i><?= $gizi?></a></li>
                                    <li><a href="<?= base_url('materi/kelas_gizi') ?>"><i class="lnr lnr-bubble"></i> 0</a></li>
                                    <li><a href="<?= base_url('materi/kelas_gizi') ?>"><i class="lnr lnr-user"></i> Pengajar Aveecena</a>
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
                        <a class="cat" href="#"><?php if ($user['apoteker']== 1){echo "Dibeli";}else{echo "Beli Kelas";}?></a>
                        <a href="<?= base_url('materi/kelas_apoteker') ?>">
                            <h4>Kelas Apoteker</h4>
                        </a>
                        <ul class="list">
                            <li><a href="<?= base_url('materi/kelas_apoteker') ?>"><i class="lnr lnr-users"></i><?= $apoteker?></a></li>
                            <li><a href="<?= base_url('materi/kelas_apoteker') ?>"><i class="lnr lnr-bubble"></i> 0</a></li>
                            <li><a href="<?= base_url('materi/kelas_apoteker') ?>"><i class="lnr lnr-user"></i> Pengajar Aveecena</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- End Class Card -->