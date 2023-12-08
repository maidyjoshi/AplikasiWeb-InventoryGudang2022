<?php
    $namaHost = "localhost";
    $username = "root";
    $password = "";
    $database = "inventory";

    $connect = mysqli_connect($namaHost, $username, $password, $database);

    $sql = "INSERT INTO pegawai( id, passwords, nama)
            VALUES ('0001', 'putramerdeka12', 'Muhammad Putra'),
                   ('0002', 'setyabudi', 'Setya Budi Busono'),
                   ('0003', 'nurulazizah', 'Nurul Azizah'),
                   ('0004', 'ekakurnia04', 'Eka Kurniawan'),
                   ('0005', 'cahyati', 'Cahyati'),
                   ('0006', 'bimasakti', 'Bima Sakti Mandraguna'),
                   ('0007', 'andreyudi', 'Andre Yudi Purwanto'),
                   ('0008', 'herlambang', 'Putra Herlambang'),
                   ('0009', 'yudhapratama', 'Muhammad Yudha Pratama'),
                   ('00010', 'juwitapermata', 'Juwita Permata')";

    if (mysqli_query($connect, $sql)){
        echo "Record berhasil ditambahkan";
    } else {
        echo "Record gagal ditambahkan <br>" . mysqli_error($connect);
    }

    mysqli_close($connect);
    ?>