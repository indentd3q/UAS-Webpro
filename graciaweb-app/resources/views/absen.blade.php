<!DOCTYPE html>
<html>
<head>
    <title>Absen Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        h1 {
            background: linear-gradient(to right, #1f67bf, #40d6ff);
            -webkit-background-clip: text;
            color: transparent;
            font-weight: bold;
            filter: drop-shadow(5px 5px 10px grey);
        }
        h2 {
            background: linear-gradient(to right, #696c70, #91abb3);
            -webkit-background-clip: text;
            color: transparent;
            font-weight: bold;
            filter: drop-shadow(5px 5px 10px grey);
        }
        table {
            border: 1px solid #000;
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body style="background-color: #a4a4a4;">
<div class="container">
    <h1>Absensi Siswa</h1>
    <br />
    <div class="card mb-3" style="width:100%; max-width: 1200px;">
        <h2 style="padding-left: 15px;">Daftar Siswa</h2>
        <div class="card-body">
            <div class="row" style="padding-left: 15px;">
            <?php
                $numRows = 12;
                echo '<table>';
                echo '
                <tr>
                <td style="width: 20px;">No.</td>
                <td style="width: 250px;">Nama</td>
                <td style="width: 250x;">No. Induk</td>
                <td style="width: 40px;">Kehadiran</td>
                <td style="width: 180px;">Keterangan</td>
            </tr>
                ';
                for ($i = 1; $i <= $numRows; $i++) {
                    echo '
                    <tr>
                        <td style="width: 20px;">' . $i . '.</td>
                        <td style="width: 250px;">loren ipsum</td>
                        <td style="width: 250px;">No. Induk</td>
                        <td style="width: 20px; text-align: center;"><input type="checkbox" id="remember" name="remember"></td>
                        <td style="width: 180px;"><select id="dropdown">
                        <option value="option1">Sakit</option>
                        <option value="option2">Izin</option>
                        <option value="option3">Tanpa Keterangan</option>
                    </select></td>
                    </tr>
                    ';
                }
                echo '</table>';
                ?>
            </div>
            <div class="text-end">
                <br />
                    <a href="#" class="btn btn-primary">Back</a>
                    <a href="#" class="btn btn-primary">Submit</a>
                </div>
            </div>
    </div>
</div>
</body>
</html>