<!DOCTYPE html>
<html>
<head>
    <title>Nilai Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.tailwindcss.com"></script>
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
        .box-main{
            display: flex;
            justify-content: center;
            align-items: center;
            max-width: 100%;
            margin: auto;
            margin-top : 20px;
            height: 100%;
        }
    </style>
</head>
<body style="background-color: #a4a4a4;">
@include('navbar')
<div class="box-main">
    <br />
    <div class="card mb-3" style="width:100%; max-width: 1200px;">
        <h2 style="padding-left: 15px; font-size: 30px;">Nilai Siswa</h2>
        <p style="padding-left: 15px;">Nama :</p>
        <p style="padding-left: 15px;">NIK :</p>
        <div style ="padding-left: 15px;">
                <select id="semester" name="semester" style="width :100%; max-width:300px; height: 30px; font-size: 18px; margin-top: 5px; border: 1px solid #000;">
                    <option value="Ganjil">Ganjil</option>
                    <option value="Genap">Genap</option>
                </select>
            </div>
        <div class="card-body">
            <div class="row">
                <?php
                $numRows = 12;
                echo '<table>';
                echo '
                <tr>
                    <th style="max-width: 30px; text-align: center; vertical-align: middle;" rowspan="2">No</th>
                    <th style="text-align: center; vertical-align: middle;" rowspan="2">Mata Pelajaran</th>
                    <th colspan="4" style="text-align: center;">Nilai Ulangan</th>
                    <th style="text-align: center; vertical-align: middle;" rowspan="2">Nilai UTS</th>
                    <th style="text-align: center; vertical-align: middle;" rowspan="2">Nilai UAS</th>
                    <th style="text-align: center; vertical-align: middle;" rowspan="2">Nilai Akhir</th>
                    <th style="text-align: center; vertical-align: middle;" rowspan="2">Last Update</th>
                    <th style="text-align: center; vertical-align: middle;" rowspan="2">Tgl Dibuat</th>
                    <th style="text-align: center; vertical-align: middle;" rowspan="2">Edit</th>
                </tr>
                <tr>
                    <th style="max-width: 20px; text-align: center;">1</th>
                    <th style="max-width: 20px; text-align: center;">2</th>
                    <th style="max-width: 20px; text-align: center;">3</th>
                    <th style="max-width: 20px; text-align: center;">4</th>
                </tr>
                ';
                for ($i = 1; $i <= $numRows; $i++) {
                    echo '
                    <tr>
                        <td style="max-width: 30px; text-align: center;"></td>
                        <td style="text-align: center; vertical-align: middle;"></td>
                        <td style="max-width: 20px; text-align: center;"></td>
                        <td style="max-width: 20px; text-align: center;"></td>
                        <td style="max-width: 20px; text-align: center;"></td>
                        <td style="max-width: 20px; text-align: center;"></td>
                        <td style="max-width: 20px; text-align: center;"></td>
                        <td style="max-width: 20px; text-align: center;"></td>
                        <td style="max-width: 20px; text-align: center;"></td>
                        <td style="max-width: 20px; text-align: center;"></td>
                        <td style="max-width: 20px; text-align: center;"></td>
                        <td><a href="edit_data.php?table=makanan&id=">Edit</a></td>
                    </tr>
                    ';
                }
                echo '</table>';
                ?>
                <div class="text-end">
                    <br />
                    <a href="#" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
