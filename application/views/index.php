<html>
<div class="p-3 mb-2 bg-dark text-white" style="height: 1000px;">

    <head>
        <title>PPDB</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Data Siswa</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <body>
        <header>
            <h3 align="center">Siswa Yang Sudah Mendaftar</h3>
        </header>
        <table class="table table-hover table-dark">
            <thead class="thead-light">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kode</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Agama</th>
                    <th scope="col">Sekolah Asal</th>
                    <th scope="col">Edit & Hapus</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $count = 0;
                foreach ($queryAllSiswa as $row) {
                    $count = $count + 1;
                ?>
                    <tr>
                        <td><?php echo $count ?></td>
                        <td><?php echo $row->Kode ?></td>
                        <td><?php echo $row->Nama ?></td>
                        <td><?php echo $row->Alamat ?></td>
                        <td><?php echo $row->JenisKelamin ?></td>
                        <td><?php echo $row->Agama ?></td>
                        <td><?php echo $row->AsalSekolah ?></td>
                        <td><a class='btn btn-outline-light' href="<?php echo base_url('/index/edit') ?>/<?php echo $row->Kode ?>">Edit</a> <a class='btn btn-outline-danger mx-1 btn-xs' href="<?php echo base_url('/index/deleteData') ?>/<?php echo $row->Kode ?>">Hapus</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <br>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end mx-5">
            <a id="input" class="btn btn-outline-light mx-auto" style="width: 200px;" href="<?php echo base_url('/index/input') ?>" text-decoration="none" text-align="center">Input data baru</a>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </body>
</div>

</html>