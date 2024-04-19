<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Web Prog II | Merancang Template sederhana dengan codeigniter</title>
    <style>
        /* Reset CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
        }

        #wrapper {
            width: 50%;
            margin: 200px auto;
        }

        header {
            background-color: #f0f0f0;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        #formIsian {
            max-width: 350px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-size: 15px;
        }

        input[type="text"],
        input[type="password"],
        select {
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="radio"],
        input[type="checkbox"] {
            margin-bottom: 10px;
            margin-right: 5px;
        }

        .clear {
            clear: both;
        }

        /* Style untuk tombol */
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        /* Style untuk judul besar dan kecil */
        #judulBesar {
            font-size: 24px;
            font-weight: bold;
            text-align: center; /* Tengahkan judul */
            margin-bottom: 15px; /* Beri sedikit jarak di bawah judul */
        }

        #judulKecil {
            font-size: 18px;
            color: #666;
            text-align: center; /* Tengahkan judul */
            margin-bottom: 20px;
        }

        /* Style untuk form isian */
        #formIsian {
            margin-top: 20px; /* Beri jarak dari judul */
        }

        #formIsian label {
            width: 100%;
            display: inline-block;
            margin-bottom: 5px;
        }

        #formIsian input[type="text"],
        #formIsian select {
            width: calc(100% - 100px); /* Lebar input dikurangi dengan lebar tanggal dropdown */
            float: left; /* Susun horizontal */
        }

        #formIsian select#bulanLahir {
            width: 100px; /* Lebar dropdown bulan disesuaikan */
        }

        #formIsian select {
            width: calc(33.33% - 4px); /* Lebar dropdown */
            margin-right: 8px; /* Beri sedikit jarak antara dropdown */
        }
        #alamat {
            height: 100px;
        }
        #tahunLahir {
            width: 10px;
        }
    </style>
</head>
<body>
    <div id="wrapper">
        <header>
            <div>
                <div id="judulBesar">Selamat Datang</div>
                <div id="judulKecil">Digital Learning Management System (Di-Lemas)</div>
            </div>
            <div id="formIsian">
                <label for="namaSiswa">Nama Siswa:</label>
                <input type="text" name="namaSiswa" id="namaSiswa" placeholder="Nama Siswa">
                <br>
                <label for="nis">NIS:</label>
                <input type="text" name="nis" id="nis" placeholder="1721****">
                <br>
                <label for="kelas">Kelas:</label>
                <input type="text" name="kelas" id="kelas" placeholder="Kelas">
                <br>
                <label for="tglLahir">Tanggal Lahir:</label>
                <select name="tglLahir" id="tglLahir">
                    <?php
                    // Generate options for tanggal
                    for ($tanggal = 1; $tanggal <= 31; $tanggal++) {
                        echo "<option value='$tanggal'>$tanggal</option>";
                    }
                    ?>
                </select>
                <select name="bulanLahir" id="bulanLahir">
                    <?php
                    // Generate options for bulan
                    $bulan = array(
                        "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli",
                        "Agustus", "September", "Oktober", "November", "Desember"
                    );
                    foreach ($bulan as $key => $value) {
                        echo "<option value='" . ($key + 1) . "'>$value</option>";
                    }
                    ?>
                </select>
                <select name="tahunLahir" id="tahunLahir">
                    <?php
                    // Generate options for tahun
                    $tahunSekarang = date("Y");
                    for ($tahun = $tahunSekarang; $tahun >= 1900; $tahun--) {
                        echo "<option value='$tahun'>$tahun</option>";
                    }
                    ?>
                </select>
                <br>
                <label for="tmptLahir">Tempat Lahir:</label>
                <input type="text" name="tmptLahir" id="tmptLahir" placeholder="Tempat Lahir">
                <br>
                <label for="alamat">Alamat:</label>
                <input type="text" name="alamat" id="alamat" placeholder="Alamat">
                <br>
                <label for="jenisKelamin">Jenis Kelamin:</label>
                <input type="radio" name="jenisKelamin" id="laki" value="Laki-laki">
                <label for="laki">Laki-laki</label>
                <input type="radio" name="jenisKelamin" id="perempuan" value="Perempuan">
                <label for="perempuan">Perempuan</label>
                <br>
                <label for="agama">Agama:</label>
                <select name="agama" id="agama">
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Budha">Budha</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Protestan">Protestan</option>
                    <option value="Khonghucu">Khonghucu</option>
                </select>
            </div>
            <nav>
            </nav>
            <div class="clear"></div>
        </header>
    </div>
</body>
</html>
