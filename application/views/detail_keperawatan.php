
<!--================Pricing area =================-->


<section class="packages_area p_60">
    <div class="container">
        <div class="row packages_inner">

            <div class="col-lg-9 col-md-12">
                <div style="margin-bottom:30px;">
                    <h2 data-aos="fade-up" data-aos-duration="1600" style="color:black; font-size: 43px !important;"><?= $title; ?> Aveecena</h2>
                    <h3 data-aos="fade-up" data-aos-duration="1600" style="color:#1bb3eb;">Healt Care</h3>
                    <p data-aos="fade-up" data-aos-duration="1600">Health Care | <?= $title; ?></p>
                </div>

                <div class="card pack_head">
                  <!-- <img src="<?= base_url('assets/') ?>img/courses/course-1.jpg" class="card-img-top" data-aos="fade-right" data-aos-duration="1800" alt="..."> -->
                  <iframe height="480px" src="https://www.youtube.com/embed/pb4UAm4ArUA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture;" allowfullscreen></iframe>
                    <div class="card-body">
                        <p class="card-text">
                            Some quick example text to build on the card title and make up the bulk of the card's content.
                            <br> checkdate
                            <br>checkdate
                            <br><br><br><br><br><br><br><br>
                        </p>
                    </div>

                </div>
            </div>

            <div class="row col-lg-3 col-md-5" style="margin-top:149px;margin-bottom: 192px;">
                <div class="packages_item">

                    <div class="pack_head">
                        <img class="image_price" src="<?= base_url('assets/') ?>img/courses/course-1.jpg" alt="...">
                        <h4 class="packages_text"><?= $title; ?></h4>
                        <h3>Rp. 182.000</h3>
                    </div>

                    <div class="pack_body">
                        <ul class="list">
                            <li>Akses Seumur Hidup</li>
                            <li>Bimbingan Langsung</li>
                            <li>Sertifikat</li>
                            <li>Sertifikat</li>
                            <li>Sertifikat</li>
                        </ul>
                    </div>

                    <div class="pack_footer">
                        <form id="payment-form" method="post" action="<?=site_url()?>snap/finish">
                            <input type="hidden" name="result_type" id="result-type" value="">
                            <input type="hidden" name="result_data" id="result-data" value="">
                            <input type="hidden" class="form-control" name="emailsiswa" value="<?= $user['email']; ?>" id="emailsiswa">
                            <input type="hidden" class="form-control" name="nama" value="<?= $user['nama']; ?>" id="nama">
                            <input type="hidden" class="form-control" name="no_tlp" value="<?= $user['no_tlp']; ?>" id="no_tlp">
                            <input type="hidden" class="form-control" name="kelas" value="keperawatan" id="kelas">
                            <input type="hidden" class="form-control" name="price" value="182000" id="price">
                            <input type="submit" class="main_btn" name="pay-button" value="Beli Kelas" id="pay-button">
                        </form>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
<!--================End Pricing Area =================-->

<script type="text/javascript">

    $('#pay-button').click(function (event) {
      event.preventDefault();
      $(this).attr("disabled", "disabled");
    
      var emailsiswa = $("#emailsiswa").val();
      var nama = $("#nama").val();
      var no_tlp = $("#no_tlp").val();
      var kelas = $("#kelas").val();
      var price = $("#price").val();
      
    $.ajax({
      type:  'POST',
      url: '<?=site_url()?>snap/token',
      data: {emailsiswa: emailsiswa,nama: nama,no_tlp: no_tlp,kelas: kelas,price: price},
      cache: false,

      success: function(data) {
        //location = data;

        console.log('token = '+data);
        
        var resultType = document.getElementById('result-type');
        var resultData = document.getElementById('result-data');

        function changeResult(type,data){
          $("#result-type").val(type);
          $("#result-data").val(JSON.stringify(data));
          //resultType.innerHTML = type;
          //resultData.innerHTML = JSON.stringify(data);
        }

        snap.pay(data, {
          
          onSuccess: function(result){
            changeResult('success', result);
            console.log(result.status_message);
            console.log(result);
            $("#payment-form").submit();
          },
          onPending: function(result){
            changeResult('pending', result);
            console.log(result.status_message);
            $("#payment-form").submit();
          },
          onError: function(result){
            changeResult('error', result);
            console.log(result.status_message);
            $("#payment-form").submit();
          }
        });
      }
    });
  });

  </script>
