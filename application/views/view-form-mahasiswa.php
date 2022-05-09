<html>

<head>
    <title>Form Input Data Mahasiswa</title>
</head>

<body>
    <center>
        <form action="<?= base_url('mahasiswa/cetak'); ?>" method="post">
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
                        <input type="text" name="nama" id="nama" placeholder="Required">
                    </td>
                </tr>
                <!-- Batas -->
                <tr>
                    <th>Nim</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="nim" id="nim" placeholder="Required">
                    </td>
                </tr>
                <!-- Batas -->
                <tr>
                    <th>TTl</th>
                    <td>:</td>
                    <td>
                        <input type="date" name="ttl" id="ttl" placeholder="Required">
                    </td>
                </tr>
                <!-- Batas -->
                <tr>
                    <th>Alamat</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="alamat" id="alamat" placeholder="Required">
                    </td>
                </tr>
                <!-- Batas -->
                <tr>
                    <th>Jenis Kelamin</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="kelamin" id="kelamin" placeholder="Required">
                    </td>
                </tr>
                 <!-- Batas -->
                 <tr>
                    <th>Agama</th>
                    <td>:</td>
                    <td>
                        <select name="agama" id="agama">
                            <option value="">Pilih Agama</option>
                            <option value="islam">islam</option>
                            <option value="kristen">Kristen</option>
                            <option value="hindu">Hindu</option>
                            <option value="budha">Budha</option>
                        </select>
                    </td>
                </tr>
                 <!-- Batas -->
                 <tr>
                    <td colspan="3" align="center">
                        <input type="submit" value="submit" placeholder="Required">
                    </td>
                </tr>
                <!-- Batas -->
            </table>
        </form>
    </center>
</body>

</html>