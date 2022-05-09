<html>
<head>
    <title>Tampil Data Mahasiswa</title>
</head>
<body>
    
    <center >
    <table>
        <tr>
            <th colspan="3">
                Form Input Data Mahasiswa
            </th>
        </tr>
        <!-- Batas -->
        <tr>
            <th>Nama</th>
            <td>:</td>
            <td>
                <?= $nama; ?>
            </td>
        </tr>
        <!-- Batas -->
        <tr>
            <th>Nim</th>
            <td>:</td>
            <td>
                <?= $nim; ?>
            </td>
        </tr>
        <!-- Batas -->
        <tr>
            <th>TTl</th>
            <td>:</td>
            <td>
                <?= $ttl; ?>
            </td>
        </tr>
        <!-- Batas -->
        <tr>
            <th>Alamat</th>
            <td>:</td>
            <td>
                <?= $alamat; ?>
            </td>
        </tr>
        <!-- Batas -->
        <tr>
            <th>Jenis Kelamin</th>
            <td>:</td>
            <td>
                <?= $kelamin; ?>
            </td>
        </tr>
        <!-- Batas -->
        <tr>
            <th>Agama</th>
            <td>:</td>
            <td>
                <?= $agama; ?>
            </td>
        </tr>
        <!-- Batas -->
        <tr>
            <td colspan="3" align="center">
                <a href="<?= base_url('mahasiswa'); ?>">kembali</a>
            </td>
        </tr>
        <!-- Batas -->
        </table>
    </center>
    
</body>
</html>