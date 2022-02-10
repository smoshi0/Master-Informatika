<?php

require '../functions.php';

$keyword = $_GET["keyword"];
$query = "SELECT * FROM mahasiswa WHERE
nim LIKE '%$keyword%' OR
nama LIKE '%$keyword%' OR
email LIKE '%$keyword%' OR
jurusan LIKE '%$keyword%'";
$mahasiswa = query($query);

?>

<table class="table table-borderless table-data3">
    <thead>
        <tr>
            <th>No</th>
            <th>Aksi</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1 ?>
        <?php foreach ($mahasiswa as $row) :?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="form.php?id=<?= $row["id"]; ?>"> <button type="button" class="btn btn-warning btn-sm">Edit</button></a>
                <a href="delete.php?id=<?= $row["id"]; ?>" onclick="return confirm('Yakin?');"> <button type="button" class="btn btn-danger btn-sm">Hapus</button></a>
            </td>
            <td><?= $row["nim"]; ?></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["email"]; ?></td>
            <td><?= $row["jurusan"]; ?></td>
        </tr>
        <?php $i++ ?>
        <?php endforeach; ?>
    </tbody>
</table>