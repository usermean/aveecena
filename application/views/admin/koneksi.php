<?php
$koneksi = mysqli_connect("localhost", "k7980598_gustian", "commeradvati1871", "k7980598_aveecena");

// Check connection
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}