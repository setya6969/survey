<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem Survei Kepuasan - Jurusan Teknik Elektro - Fakultas Teknik - Universitas Negeri Malang</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.11.1/css/all.css">
    <!--   <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/quill/1.3.6/quill.snow.css">

    <meta name="viewport" content="width=device-width,minimum-scale=1">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/jquery.sidr/2.2.1/stylesheets/jquery.sidr.dark.min.css">


    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />




    <style>
        .menu {
            display: inline-block;
            cursor: pointer;
        }

        .bar1,
        .bar2,
        .bar3 {
            width: 35px;
            height: 5px;
            background-color: #007bff;
            margin: 6px 15px;
            transition: 0.4s;
        }

        .change .bar1 {
            -webkit-transform: rotate(-45deg) translate(-9px, 6px);
            transform: rotate(-45deg) translate(-9px, 6px);
        }

        .change .bar2 {
            opacity: 0;
        }

        .change .bar3 {
            -webkit-transform: rotate(45deg) translate(-8px, -8px);
            transform: rotate(45deg) translate(-8px, -8px);
        }

        #menubar {
            position: absolute;
        }

        #particles-js {
            height: 100%;
            position: fixed;
            top: 0px;
            left: 0px;
            right: 0px;
            bottom: 0px;
            z-index: -1;

        }

        .center {
            margin: auto;
        }

        .alert {
            opacity: 0.5;
        }
    </style>
</head>

<body style="background-color: #198fe3;"> 

    <div class="main-content-container container-fluid px-4">
        <div id="particles-js"></div>
        <!-- Page Header -->
        <div class="page-header row no-gutters py-4 mb-5" style="color: white">
            <div class="col-12 text-center text-sm-center mb-0">
                <br>
                <a href="index.php">
                    <img style="max-width=100"src="http://elektro.um.ac.id/wp-content/uploads/2016/02/logo-um.png" alt="Teknik Elektro – UM">    
                </a>
                <br>
                <span class="text-uppercase page-subtitle">Jurusan Teknik Elektro - Universitas Negeri Malang</span>

                <h3 class="page-title mt-4">Sistem Survei Kepuasan</h3>

            </div>
        </div>

        <!-- FORM QUESTION 1-31 -->
        <form action="koneksi.php" method="POST">
            <div align="center">
                <div class="col-lg-8 text-sm-left">
                    <div class="card card-small mb-4">
                        <div class="card-header border-bottom">
                            <h6 class="m-0">Berapa lama Saudara menjalani masa studi sesuai dengan batas waktu yang telah ditetapkan?</h6>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item p-3">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-row">
                                            <div class="form-group col-md-12 text-sm-left">
                                                <label></label>
                                                <fieldset>
                                                    <div class="custom-control custom-radio mb-1">
                                                        <input required="" type="radio" id="r1q1" name="q1" class="custom-control-input" value="3.5 tahun">
                                                        <label class="custom-control-label" for="r1q1"> 3.5 tahun</label>
                                                    </div>
                                                    <div class="custom-control custom-radio mb-1">
                                                        <input required="" type="radio" id="r2q1" name="q1" class="custom-control-input" value="4 tahun">
                                                        <label class="custom-control-label" for="r2q1"> 4 tahun</label>
                                                    </div>
                                                    <div class="custom-control custom-radio mb-1">
                                                        <input required="" type="radio" id="r3q1" name="q1" class="custom-control-input" value="Kurang dari sama dengan 5 tahun">
                                                        <label class="custom-control-label" for="r3q1"> Kurang dari sama dengan 5 tahun</label>
                                                    </div>
                                                    <div class="custom-control custom-radio mb-1">
                                                        <input required="" type="radio" id="r4q1" name="q1" class="custom-control-input" value="Kurang dari sama dengan 6 tahun">
                                                        <label class="custom-control-label" for="r4q1"> Kurang dari sama dengan 6 tahun</label>
                                                    </div>
                                                    <div class="custom-control custom-radio mb-1">
                                                        <input required="" type="radio" id="r5q1" name="q1" class="custom-control-input" value="Kurang dari sama dengan 7 tahun">
                                                        <label class="custom-control-label" for="r5q1"> Kurang dari sama dengan 7 tahun</label>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div align="center">
                <div class="col-lg-8 text-sm-left">
                    <div class="card card-small mb-4">
                        <div class="card-header border-bottom">
                            <h6 class="m-0">Apakah Saudara mempunyai sertifikat kemampuan berbahasa Inggris? </h6>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item p-0 px-3 pt-3">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="custom-controls-stacked">
                                            <div class="custom-control custom-radio mb-1">
                                                <input required="" type="radio" id="r1q2" name="q2" class="custom-control-input" value="Ya">
                                                <label class="custom-control-label" for="r1q2">Ya</label>
                                            </div>
                                            <div class="custom-control custom-radio mb-1">
                                                <input required="" type="radio" id="r2q2" name="q2" class="custom-control-input" value="Tidak">
                                                <label class="custom-control-label" for="r2q2">Tidak</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div align="center">
                <div class="col-lg-8 text-sm-left">
                    <div class="card card-small mb-4 quest_2">
                        <div class="card-header border-bottom">
                            <h6 class="m-0">Sertifikat kemampuan bahasa inggris :</h6>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item p-3">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label class="text-info"><i>Boleh lebih dari satu jawaban</i></label>
                                        <div class="form-row">
                                            <div class="form-group col-md-12 text-sm-left">
                                                <fieldset>
                                                    <div class="custom-control custom-checkbox mb-1">
                                                        <input type="checkbox" name="q3" class="custom-control-input" id="c1q3">
                                                        <label class="custom-control-label" for="c1q3">TOEFL, score </label>
                                                        <input type="text" name="q3a" id="c1q3_input" class="form-control">
                                                    </div>
                                                    <div class="custom-control custom-checkbox mb-1">
                                                        <input type="checkbox" name="q3" class="custom-control-input" id="c2q3">
                                                        <label class="custom-control-label" for="c2q3">TOEIC, score </label>
                                                        <input type="text" name="q3b" id="c2q3_input" class="form-control">
                                                    </div>
                                                    <div class="custom-control custom-checkbox mb-1">
                                                        <input type="checkbox" name="q3" class="custom-control-input" id="c3q3">
                                                        <label class="custom-control-label" for="c3q3">IELTS, score </label>
                                                        <input type="text" name="q3c" id="c3q3_input" class="form-control">
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div align="center">
                <div class="col-lg-8 text-sm-left">
                    <div class="card card-small mb-4">
                        <div class="card-header border-bottom">
                            <h6 class="m-0">Apakah Saudara mempunyai sertifikat kompetensi atau profesi? </h6>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item p-0 px-3 pt-3">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="custom-control custom-radio mb-1">
                                            <input required="" type="radio" id="r1q4" name="q4" class="custom-control-input" value="Iya" onclick="unlock5()" required="">
                                            <label class="custom-control-label" for="r1q4">Iya </label>
                                            <input type="form-control" name="q4" placeholder="Masukkan Nama Sertifikat" id="fillter_sertifikat" disabled="">
                                        </div>
                                        <div class="custom-control custom-radio mb-1">
                                            <input required="" type="radio" id="r2q4" name="q4" class="custom-control-input" value="Tidak" onclick="unlock6()" required="">
                                            <label class="custom-control-label" for="r2q4">Tidak</label>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div align="center">
                <div class="col-lg-8 text-sm-left">
                    <div class="card card-small mb-4">
                        <div class="card-header border-bottom">
                            <h6 class="m-0">Apakah Saudara melanjutkan studi atau bekerja setelah lulus dari menempuh pendidikan di Universitas Negeri Malang?</h6>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item p-3">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-row">
                                            <div class="form-group col-md-12 text-sm-left">
                                                <fieldset>
                                                    <div class="custom-control custom-radio mb-1">
                                                        <input required="" type="radio" id="r1q5" name="q5" class="custom-control-input" value="Studi Lanjut" onclick= "selectStudy()">
                                                        <label class="custom-control-label" for="r1q5">Studi Lanjut (S2/S3)</label>
                                                    </div>
                                                    <div class="custom-control custom-radio mb-1">
                                                        <input required="" type="radio" id="r2q5" name="q5" class="custom-control-input" value="Bekerja" onclick= "selectWork()">
                                                        <label class="custom-control-label" for="r2q5">Bekerja</label>
                                                    </div>
                                                    <div class="custom-control custom-radio mb-1">
                                                        <input required="" type="radio" id="r3q5" name="q5" class="custom-control-input" value="Keduanya">
                                                        <label class="custom-control-label" for="r3q5">Keduanya</label>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div align="center">
                <div class="col-lg-8 text-sm-left">
                    <div class="card card-small mb-4 quest_6">
                        <div class="card-header border-bottom">
                            <h6 class="m-0">Studi Lanjut</h6>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item p-3">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-row">
                                            <div class="form-group col-md-12 text-sm-left">
                                                <div class="col-lg-12 text-sm-left">
                                                    <div class="card card-small mb-4">
                                                        <div class="card-header border-bottom">
                                                            <h6 class="m-0">Berapa lama waktu tunggu yang Saudara lakukan setelah lulus hingga diterima di studi tersebut?</h6>
                                                        </div>
                                                        <ul class="list-group list-group-flush">
                                                            <li class="list-group-item p-3">
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <div class="form-row">
                                                                            <div class="form-group col-md-12 text-sm-left">
                                                                                <fieldset>
                                                                                    <div class="custom-control custom-radio mb-1">
                                                                                        <input type="radio" id="r1q6" name="q6" class="custom-control-input" value="1 sampai 3 bulan">
                                                                                        <label class="custom-control-label" for="r1q6">1 sampai 3 Bulan</label>
                                                                                    </div>
                                                                                    <div class="custom-control custom-radio mb-1">
                                                                                        <input type="radio" id="r2q6" name="q6" class="custom-control-input" value="4 sampai 6 bulan">
                                                                                        <label class="custom-control-label" for="r2q6">4 sampai 6 Bulan</label>
                                                                                    </div>
                                                                                    <div class="custom-control custom-radio mb-1">
                                                                                        <input type="radio" id="r3q6" name="q6" class="custom-control-input" value="7 sampai 9 bulan">
                                                                                        <label class="custom-control-label" for="r3q6">7 sampai 9 Bulan</label>
                                                                                    </div>
                                                                                    <div class="custom-control custom-radio mb-1">
                                                                                        <input type="radio" id="r4q6" name="q6" class="custom-control-input" value="10 sampai 12 bulan">
                                                                                        <label class="custom-control-label" for="r4q6">10 sampai 12 Bulan</label>
                                                                                    </div>
                                                                                    <div class="custom-control custom-radio mb-1">
                                                                                        <input type="radio" id="r5q6" name="q6" class="custom-control-input" value="lebih dari 1 tahun">
                                                                                        <label class="custom-control-label" for="r5q6">Lebih dari 1 Tahun</label>
                                                                                    </div>
                                                                                    <div class="custom-control custom-radio mb-1">
                                                                                        <input type="radio" id="r6q6" name="q6" class="custom-control-input" value="lebih dari 2 tahun">
                                                                                        <label class="custom-control-label" for="r6q6">Lebih dari 2 Tahun</label>
                                                                                    </div>
                                                                                </fieldset>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div align="center">
                                                    <div class="col-lg-8 text-sm-left">
                                                        <div class="card card-small mb-4">
                                                            <div class="card-header border-bottom">
                                                                <h6 class="m-0">Sebutkan Universitas dan Jurusan Studi Lanjut Saudara.</h6>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="form-group">
                                                                    <label class="">Universitas</label>
                                                                    <div class="input-group">
                                                                        <input id="univP2" type="text" name="q7a" class="form-control" required="">
                                                                        <!-- <input type="hidden" name="q7a" value="universitas :"> -->
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="">Jurusan</label>
                                                                    <div class="input-group">
                                                                        <input id="jurusanP2" type="text" name="q7b" class="form-control" required="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div align="center">
                                                    <div class="col-lg-8 text-sm-left">
                                                        <div class="card card-small mb-4">
                                                            <div class="card-header border-bottom">
                                                                <h6 class="m-0">Sebutkan sumber dana pembiayaan kuliah.</h6>
                                                            </div>
                                                            <ul class="list-group list-group-flush">
                                                                <li class="list-group-item p-3">
                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <div class="form-row">
                                                                                <div class="form-group col-md-12 text-sm-left">
                                                                                    <fieldset>
                                                                                        <div class="custom-control custom-radio mb-1">
                                                                                            <input type="radio" id="r1q8" name="q8" class="custom-control-input" value="Biaya Sendiri / Keluarga" onclick="unlock4()" required="">
                                                                                            <label class="custom-control-label" for="r1q8">[1] Biaya Sendiri / Keluarga</label>
                                                                                        </div>
                                                                                        <div class="custom-control custom-radio mb-1">
                                                                                            <input type="radio" id="r2q8" name="q8" class="custom-control-input" value="Beasiswa ADIK" onclick="unlock4()" required="">
                                                                                            <label class="custom-control-label" for="r2q8">[2] Beasiswa ADIK</label>
                                                                                        </div>
                                                                                        <div class="custom-control custom-radio mb-1">
                                                                                            <input type="radio" id="r3q8" name="q8" class="custom-control-input" value="Beasiswa BIDIKMISI" onclick="unlock4()" required="">
                                                                                            <label class="custom-control-label" for="r3q8">[3] Beasiswa BIDIKMISI</label>
                                                                                        </div>
                                                                                        <div class="custom-control custom-radio mb-1">
                                                                                            <input type="radio" id="r4q8" name="q8" class="custom-control-input" value="Beasiswa PPA" onclick="unlock4()" required="">
                                                                                            <label class="custom-control-label" for="r4q8">[4] Beasiswa PPA</label>
                                                                                        </div>
                                                                                        <div class="custom-control custom-radio mb-1">
                                                                                            <input type="radio" id="r5q8" name="q8" class="custom-control-input" value="Beasiswa AFIRMASI" onclick="unlock4()" required="">
                                                                                            <label class="custom-control-label" for="r5q8">[5] Beasiswa AFIRMASI</label>
                                                                                        </div>
                                                                                        <div class="custom-control custom-radio mb-1">
                                                                                            <input type="radio" id="r6q8" name="q8" class="custom-control-input" value="Beasiswa Perusahaan/Swasta" onclick="unlock4()" required="">
                                                                                            <label class="custom-control-label" for="r6q8">[6] Beasiswa Perusahaan/Swasta</label>
                                                                                        </div>
                                                                                        <div class="custom-control custom-radio mb-1">
                                                                                            <input type="radio" id="r7q8" name="q8" class="custom-control-input" value="Lainya" onclick="unlock3()" required="">
                                                                                            <label class="custom-control-label" for="r7q8">[7] Lainnya, Tuliskan:</label>
                                                                                            <input type="form-control" name="q8" placeholder="Masukkan Jenis Beasiswa" id="fillter_sumberdana" disabled="">
                                                                                        </div>
                                                                                    </fieldset>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div align="center">
                <div class="col-lg-8 text-sm-left">
                    <div class="card card-small mb-4 quest_9">
                        <div class="card-header border-bottom">
                            <h6 class="m-0">Bekerja</h6>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item p-3">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-row">
                                            <div class="form-group col-md-12 text-sm-left">
                                                <div class="col-lg-12 text-sm-left">
                                                    <div class="card card-small mb-4">
                                                        <div class="card-header border-bottom">
                                                            <h6 class="m-0">Berapa bulan waktu yang dibutuhkan (sebelum dan sesudah kelulusan) untuk memperoleh pekerjaan pertama?</h6>
                                                        </div>
                                                        <ul class="list-group list-group-flush">
                                                            <li class="list-group-item p-3">
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <div class="form-row">
                                                                            <div class="form-group col-md-12 text-sm-left">
                                                                                <fieldset>
                                                                                    <div class="form-inline mb-2">
                                                                                        <div class="custom-control custom-radio ">
                                                                                            <input  type="radio" id="r1q9" name="q9s" class="custom-control-input" value="sebelum ujian" onclick="unlock2()" required="">
                                                                                            <label class="custom-control-label" for="r1q9">Kira-kira</label>
                                                                                        </div>
                                                                                        <input type="number" name="q9" id="filter_bulan1" class="form-control form-control-sm mx-2" disabled="">
                                                                                        <label class="custom-control-control">bulan, sebelum ujian</label>
                                                                                    </div>
                                                                                    <div class="form-inline">
                                                                                        <div class="custom-control custom-radio ">
                                                                                            <input type="radio" id="r2q9" name="q9s" class="custom-control-input" value="sesudah ujian" onclick="unlock1()" required="">
                                                                                            <label class="custom-control-label" for="r2q9">Kira-kira</label>
                                                                                        </div>
                                                                                        <input type="number" name="q9" class="form-control form-control-sm mx-2" id="filter_bulan2" disabled="">
                                                                                        <label class="custom-control-control">bulan, setelah ujian</label>
                                                                                    </div>
                                                                                    <div class="card-body">
                                                                                </fieldset>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div align="center">
                                                    <div class="col-lg-8 text-sm-left">
                                                        <div class="card card-small mb-4">
                                                            <div class="card-header border-bottom">
                                                                <h6 class="m-0">Sebutkan Nama Instansi/Perusahaan dan Bagian Pekerjaan Saudara Saat Ini.</h6>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="form-group">
                                                                    <label class="">Nama Instansi/Perusahaan</label>
                                                                    <div class="input-group">
                                                                        <input type="text" id="instanP2" name="q10a" class="form-control" required="">
                                                                        <!-- <input type="hidden" name="q10a" value="instansi/perusahaan :"> -->
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="">Bagian</label>
                                                                    <div class="input-group">
                                                                        <input type="text" id="bagianP2" name="q10b" class="form-control" required="">
                                                                        <!-- <input type="hidden" name="q10b" value="bagian :"> -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div align="center">
                                                    <div class="col-lg-8 text-sm-left">
                                                        <div class="card card-small mb-4">
                                                            <div class="card-header border-bottom">
                                                                <h6 class="m-0">Kira-kira berapa pendapatan saudara pada saat pertama kali bekerja?</h6>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="form-group">
                                                                    <label class="">Total perolehan gaji pertama</label>
                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text">Rp</span>
                                                                        </div>
                                                                        <input type="number" id="q11" name="q11" class="form-control" required="">
                                                                        <input type="hidden" value="total perolehan gaji pertama :">
                                                                    </div>
                                                                    <i class="small text-info">*Isilah dengan angka saja tanpa titik(.) / koma(,)</i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div align="center">
                                                    <div class="col-lg-8 text-sm-left">
                                                        <div class="card card-small mb-4">
                                                            <div class="card-header border-bottom">
                                                                <h6 class="m-0">Kira-kira berapa jumlah pendapatan saudara dalam waktu tersebut?</h6>
                                                            </div>
                                                            <div class="form-group col-md-12 text-sm-left">
                                                                <ul class="list-group list-group-flush">
                                                                    <li class="list-group-item p-3">
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <div class="form-row">
                                                                                    <div class="form-group col-md-12 text-sm-left">
                                                                                        <fieldset>
                                                                                            <div class="custom-control custom-radio mb-1">
                                                                                                <input required="" type="radio" id="d3" class="custom-control-input" value="LulusanD3" onclick="switchQuestionsD3()">
                                                                                                <label class="custom-control-label" for="d3">Lulusan D3 dalam waktu 3 bulan sejak bekerja</label>
                                                                                                <div class="input-group">
                                                                                                    <div class="input-group-prepend">
                                                                                                        <span class="input-group-text">Rp</span>
                                                                                                    </div>
                                                                                                    <input type="number" id="formQ12a" name="q12a" class="form-control" required="">
                                                                                                </div>
                                                                                                <i class="small text-info">*Isilah dengan angka saja tanpa titik(.) / koma(,)</i>
                                                                                            </div>
                                                                                            <div class="custom-control custom-radio mb-1">
                                                                                                <input required="" type="radio" id="s1" class="custom-control-input" value="LulusanS1" onclick="switchQuestionsS1()">
                                                                                                <label class="custom-control-label" for="s1">Lulusan S1/S2 dalam waktu 6 bulan sejak bekerja</label>
                                                                                                <div class="input-group">
                                                                                                    <div class="input-group-prepend">
                                                                                                        <span class="input-group-text">Rp</span>
                                                                                                    </div>
                                                                                                    <input type="number" id="formQ12b" name="q12b" class="form-control" required="">
                                                                                                </div>
                                                                                                <i class="small text-info">*Isilah dengan angka saja tanpa titik(.) / koma(,)</i>
                                                                                            </div>
                                                                                        </fieldset>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div align="center">
                                                    <div class="col-lg-8 text-sm-left">
                                                        <div class="card card-small mb-4">
                                                            <div class="card-header border-bottom">
                                                                <h6 class="m-0">Tingkat pendidikan apa yang paling tepat/sesuai untuk pekerjaan saudara saat ini ?</h6>
                                                            </div>
                                                            <ul class="list-group list-group-flush">
                                                                <li class="list-group-item p-3">
                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <div class="form-row">
                                                                                <div class="form-group col-md-12 text-sm-left">
                                                                                    <fieldset>
                                                                                        <div class="custom-control custom-radio mb-1">
                                                                                            <input required="" type="radio" id="r1q13" name="q13" class="custom-control-input" value="Setingkat yang lebih tinggi">
                                                                                            <label class="custom-control-label" for="r1q13">Setingkat yang lebih tinggi</label>
                                                                                        </div>
                                                                                        <div class="custom-control custom-radio mb-1">
                                                                                            <input required="" type="radio" id="r2q13" name="q13" class="custom-control-input" value="Tingkat yang sama">
                                                                                            <label class="custom-control-label" for="r2q13">Tingkat yang sama</label>
                                                                                        </div>
                                                                                        <div class="custom-control custom-radio mb-1">
                                                                                            <input required="" type="radio" id="r3q13" name="q13" class="custom-control-input" value="Setingkat lebih rendah">
                                                                                            <label class="custom-control-label" for="r3q13">Setingkat lebih rendah</label>
                                                                                        </div>
                                                                                        <div class="custom-control custom-radio mb-1">
                                                                                            <input required="" type="radio" id="r4q13" name="q13" class="custom-control-input" value="Tidak perlu pendidikan Tinggi">
                                                                                            <label class="custom-control-label" for="r4q13">Tidak perlu pendidikan tinggi</label>
                                                                                        </div>
                                                                                    </fieldset>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div align="center">
                                                    <div class="col-lg-8 text-sm-left">
                                                        <div class="card card-small mb-4">
                                                            <div class="card-header border-bottom">
                                                                <h6 class="m-0">Apakah saudara bekerja saat ini (termasuk sambilan dan wirausaha)?</h6>
                                                            </div>
                                                            <ul class="list-group list-group-flush">
                                                                <li class="list-group-item p-3">
                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <div class="form-row">
                                                                                <div class="form-group col-md-12 text-sm-left">
                                                                                    <fieldset>
                                                                                        <div class="custom-control custom-radio mb-1">
                                                                                            <input required="" type="radio" id="r1q14" name="q14" class="custom-control-input" value="Iya">
                                                                                            <label class="custom-control-label" for="r1q14">Iya</label>
                                                                                        </div>
                                                                                        <div class="custom-control custom-radio mb-1">
                                                                                            <input required="" type="radio" id="r2q14" name="q14" class="custom-control-input" value="Tidak">
                                                                                            <label class="custom-control-label" for="r2q14">Tidak</label>
                                                                                        </div>
                                                                                    </fieldset>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div align="center">
                                                    <div class="col-lg-8 text-sm-left">
                                                        <div class="card card-small mb-4">
                                                            <div class="card-header border-bottom">
                                                                <h6 class="m-0">Tuliskan Pengalaman Pekerjaan yang Pernah Saudara Lakukan?</h6>
                                                            </div>
                                                            <ul class="list-group list-group-flush">
                                                                <li class="list-group-item p-3">
                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <div class="form-row">
                                                                                <div class="form-group col-md-12 text-sm-left">
                                                                                    <fieldset>
                                                                                        <div class="col-md-12">
                                                                                            <div class="card-body">
                                                                                                <textarea name="q15" class="form-control"></textarea>
                                                                                            </div>
                                                                                        </div>
                                                                                    </fieldset>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div align="center">
                <div class="col-lg-8 text-sm-left">
                    <div class="card card-small mb-4">
                        <div class="card-header border-bottom">
                            <h6 class="m-0">Refleksi Diri</h6>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item p-3">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-row">
                                            <div class="form-group col-md-12 text-sm-left">
                                                <label class="text-info"><i>Wajib Mengisi Pilihan Berikut ini</i></label>
                                                <div class="col-lg-12 text-sm-left">
                                                    <div class="card card-small mb-4">
                                                        <div class="card-header border-bottom">
                                                            <table width="100%">
                                                                <tbody>
                                                                    <tr>
                                                                        <td width="80%">Apakah Anda telah melaksanakan tugas dengan tanggung jawab terhadap pekerjaan yang diberikan?</td>
                                                                        <td width="20%"><select name="q16" class="form-control">
                                                                                <option value="4">Selalu</option>
                                                                                <option value="3">Cukup</option>
                                                                                <option value="2">Kurang</option>
                                                                                <option value="1">Tidak</option>
                                                                            </select></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="80%">Apakah dalam bertugas, Anda menjaga nama baik instansi?</td>
                                                                        <td width="20%"><select name="q17" class="form-control">
                                                                                <option value="4">Selalu</option>
                                                                                <option value="3">Cukup</option>
                                                                                <option value="2">Kurang</option>
                                                                                <option value="1">Tidak</option>
                                                                            </select></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="80%">Apakah Anda mengalami kesulitan dalam berkomunikasi dalam melaksanakan tugas pekerjaan?</td>
                                                                        <td width="20%"><select name="q18" class="form-control">
                                                                                <option value="4">Selalu</option>
                                                                                <option value="3">Cukup</option>
                                                                                <option value="2">Kurang</option>
                                                                                <option value="1">Tidak</option>
                                                                            </select></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="80%">Apakah Anda dipercaya untuk mengelola suatu proyek atau tugas dalam pekerjaan Anda?</td>
                                                                        <td width="20%"><select name="q19" class="form-control">
                                                                                <option value="4">Selalu</option>
                                                                                <option value="3">Cukup</option>
                                                                                <option value="2">Kurang</option>
                                                                                <option value="1">Tidak</option>
                                                                            </select></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="80%">Apakah Anda pernah melakukan pelanggaran etika dalam pekerjaan Anda?</td>
                                                                        <td width="20%"><select name="q20" class="form-control">
                                                                                <option value="4">Selalu</option>
                                                                                <option value="3">Cukup</option>
                                                                                <option value="2">Kurang</option>
                                                                                <option value="1">Tidak</option>
                                                                            </select></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="80%">Apakah Anda mempunyai kemampuan komputerisasi yang mencukupi dalam melaksanakan pekerjaan?</td>
                                                                        <td width="20%"><select name="q21" class="form-control">
                                                                                <option value="4">Selalu</option>
                                                                                <option value="3">Cukup</option>
                                                                                <option value="2">Kurang</option>
                                                                                <option value="1">Tidak</option>
                                                                            </select></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="80%">Apakah Anda mempunyai adaptasi teknologi yang mencukupi/mumpuni dalam melaksanakan pekerjaan Anda?</td>
                                                                        <td width="20%"><select name="q22" class="form-control">
                                                                                <option value="4">Selalu</option>
                                                                                <option value="3">Cukup</option>
                                                                                <option value="2">Kurang</option>
                                                                                <option value="1">Tidak</option>
                                                                            </select></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="80%">Apakah Anda mempunyai kemampuan dalam mengelola waktu, biaya, tenaga dan resiko pada tugas yang diberikan dalam bekerja?</td>
                                                                        <td width="20%"><select name="q23" class="form-control">
                                                                                <option value="4">Selalu</option>
                                                                                <option value="3">Cukup</option>
                                                                                <option value="2">Kurang</option>
                                                                                <option value="1">Tidak</option>
                                                                            </select></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div align="center">
                                                    <div class="col-lg-8 text-sm-left">
                                                        <div class="card card-small mb-4">
                                                            <div class="card-header border-bottom">
                                                                <h6 class="m-0">Bagaimana antusiasme Anda dalam meningkatkan karir?</h6>
                                                            </div>
                                                            <ul class="list-group list-group-flush">
                                                                <li class="list-group-item p-3">
                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <div class="form-row">
                                                                                <div class="form-group col-md-12 text-sm-left">
                                                                                    <fieldset>
                                                                                        <div class="col-md-12">
                                                                                            <div class="card-body">
                                                                                                <textarea name="q24" class="form-control"></textarea>
                                                                                            </div>
                                                                                        </div>
                                                                                    </fieldset>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div align="center">
                <div class="col-lg-8 text-sm-left">
                    <div class="card card-small mb-4">
                        <div class="card-header border-bottom">
                            <h6 class="m-0">Umpan Balik Program Studi</h6>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item p-3">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-row">
                                            <div class="form-group col-md-12 text-sm-left">
                                                <div align="center">
                                                    <div class="col-lg-8 text-sm-left">
                                                        <div class="card card-small mb-4">
                                                            <div class="card-header border-bottom">
                                                                <h6 class="m-0">Sebutkan keahlian / kemampuan yang merupakan keunggulan alumni TEUM pada tempat Anda bekerja saat ini!</h6>
                                                            </div>
                                                            <ul class="list-group list-group-flush">
                                                                <li class="list-group-item p-3">
                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <div class="form-row">
                                                                                <div class="form-group col-md-12 text-sm-left">
                                                                                    <fieldset>
                                                                                        <div class="col-md-12">
                                                                                            <div class="card-body">
                                                                                                <textarea name="q25" class="form-control"></textarea>
                                                                                            </div>
                                                                                        </div>
                                                                                    </fieldset>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div align="center">
                                                        <div class="col-lg-8 text-sm-left">
                                                            <div class="card card-small mb-4">
                                                                <div class="card-header border-bottom">
                                                                    <h6 class="m-0">Sebutkan kendala yang Anda miliki sebagai alumni TEUM pada tempat Anda bekerja saat ini! </h6>
                                                                </div>
                                                                <ul class="list-group list-group-flush">
                                                                    <li class="list-group-item p-3">
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <div class="form-row">
                                                                                    <div class="form-group col-md-12 text-sm-left">
                                                                                        <fieldset>
                                                                                            <div class="col-md-12">
                                                                                                <div class="card-body">
                                                                                                    <textarea name="q26" class="form-control"></textarea>
                                                                                                </div>
                                                                                            </div>
                                                                                        </fieldset>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div align="center">
                                                        <div class="col-lg-8 text-sm-left">
                                                            <div class="card card-small mb-4">
                                                                <div class="card-header border-bottom">
                                                                    <h6 class="m-0">Sebutkan kesempatan/peluang yang Anda miliki sebagai alumni TEUM pada tempat Anda bekerja saat ini! </h6>
                                                                </div>
                                                                <ul class="list-group list-group-flush">
                                                                    <li class="list-group-item p-3">
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <div class="form-row">
                                                                                    <div class="form-group col-md-12 text-sm-left">
                                                                                        <fieldset>
                                                                                            <div class="col-md-12">
                                                                                                <div class="card-body">
                                                                                                    <textarea name="q27" class="form-control"></textarea>
                                                                                                </div>
                                                                                            </div>
                                                                                        </fieldset>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div align="center">
                                                        <div class="col-lg-8 text-sm-left">
                                                            <div class="card card-small mb-4">
                                                                <div class="card-header border-bottom">
                                                                    <h6 class="m-0">Sebutkan hal-hal yang mengancam Anda sebagai alumni TEUM pada tempat Anda bekerja saat ini! </h6>
                                                                </div>
                                                                <ul class="list-group list-group-flush">
                                                                    <li class="list-group-item p-3">
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <div class="form-row">
                                                                                    <div class="form-group col-md-12 text-sm-left">
                                                                                        <fieldset>
                                                                                            <div class="col-md-12">
                                                                                                <div class="card-body">
                                                                                                    <textarea name="q28" class="form-control"></textarea>
                                                                                                </div>
                                                                                            </div>
                                                                                        </fieldset>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div align="center">
                                                        <div class="col-lg-8 text-sm-left">
                                                            <div class="card card-small mb-4">
                                                                <div class="card-header border-bottom">
                                                                    <h6 class="m-0">Saran apakah yang dapat Anda berikan sebagai penguatan kurikulum Program Studi D3 Teknik Elektronika UM untuk bekal bekerja? </h6>
                                                                </div>
                                                                <ul class="list-group list-group-flush">
                                                                    <li class="list-group-item p-3">
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <div class="form-row">
                                                                                    <div class="form-group col-md-12 text-sm-left">
                                                                                        <fieldset>
                                                                                            <div class="col-md-12">
                                                                                                <div class="card-body">
                                                                                                    <textarea name="q29" class="form-control"></textarea>
                                                                                                </div>
                                                                                            </div>
                                                                                        </fieldset>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div align="center">
                                                        <div class="col-lg-8 text-sm-left">
                                                            <div class="card card-small mb-4">
                                                                <div class="card-header border-bottom">
                                                                    <h6 class="m-0">Apakah saudara sudah tergabung dalam grup alumni TEUM? </h6>
                                                                </div>
                                                                <ul class="list-group list-group-flush">
                                                                    <li class="list-group-item p-0 px-3 pt-3">
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <div class="custom-controls-stacked">
                                                                                    <div class="custom-control custom-radio mb-1">
                                                                                        <input required="" type="radio" id="r1q30" name="q30" class="custom-control-input" value="Ya">
                                                                                        <label class="custom-control-label" for="r1q30">Ya</label>
                                                                                    </div>
                                                                                    <div class="custom-control custom-radio mb-1">
                                                                                        <input required="" type="radio" id="r2q30" name="q30" class="custom-control-input" value="Tidak">
                                                                                        <label class="custom-control-label" for="r2q30">Tidak</label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div align="center">
                                                        <div class="col-lg-8 text-sm-left">
                                                            <div class="card card-small mb-4">
                                                                <div class="card-header border-bottom">
                                                                    <h6 class="m-0">Bersediakah saudara menghadiri temu alumni TEUM di masa mendatang? </h6>
                                                                </div>
                                                                <ul class="list-group list-group-flush">
                                                                    <li class="list-group-item p-0 px-3 pt-3">
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <div class="custom-controls-stacked">
                                                                                    <div class="custom-control custom-radio mb-1">
                                                                                        <input required="" type="radio" id="r1q31" name="q31" class="custom-control-input" value="Ya">
                                                                                        <label class="custom-control-label" for="r1q31">Ya</label>
                                                                                    </div>
                                                                                    <div class="custom-control custom-radio mb-1">
                                                                                        <input required="" type="radio" id="r2q31" name="q31" class="custom-control-input" value="Tidak">
                                                                                        <label class="custom-control-label" for="r2q31">Tidak</label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group text-center">
                                                        <button type="submit" name="submit" class="btn btn-md btn-success">Simpan</button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </form>


        <div class="page-header row no-gutters py-4">
            <div class="col-12 text-center text-sm-center mt-4 mb-0">
                <h3 class="page-title" style="color: white">#ElektroUnity</h3>
            </div>
        </div>
    </div>
    <!-- Animation -->

    <!--  -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/shards-ui@latest/dist/js/shards.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sharrre/2.0.1/jquery.sharrre.min.js"></script>





    <script src="//cdn.jsdelivr.net/jquery/2.2.0/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/jquery.sidr/2.2.1/jquery.sidr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script src="https://survei.um.ac.id/js/textareacounter.js"></script>
    <!-- Particlejs -->

    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <!-- Vanta js start -->

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Vanta js end -->
</body>
<script>
    // VANTA.CLOUDS({
    // el: "#bgvanta",
    // skyColor: 0x68adc8,
    // cloudColor: 0xcbd3de,
    // sunColor: 0xff8d00,
    // sunGlareColor: 0xf03c00,
    // sunlightColor: 0xf57e08
    // })
    // VANTA.BIRDS({
    //   el: "#particles-js",
    //   backgroundColor: 0xe2e9f2,
    //   color1: 0x6068f2,
    //   color2: 0x4bed7b,
    //   colorMode: "lerpGradient",
    //   birdSize: 1.90,
    //   // wingSpan: 28.00,
    //   speedLimit: 7.00,
    //   // separation: 54.00,
    //   birdSize: 0.90,
    //   quantity: 3.00,
    //   backgroundAlpha: 0.94
    // })

    AOS.init();
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $("select[name='tahun']").change(function() {
            var tahun = $(this).val();
            window.location.href = "https://survei.um.ac.id/ubah-tahun/" + tahun;
        });
    });
</script>

<script>
    function myFunction(x) {
        x.classList.toggle("change");
    }
</script>

<script>
    $(document).ready(function() {
        $('#simple-menu').sidr();
    });
</script>


<script>
    function unlock1() {
        $filtter1 = document.getElementById("filter_bulan1").disabled = true;
        $filtter2 = document.getElementById("filter_bulan2").disabled = false;
    }

    function unlock2() {
        $filtter1 = document.getElementById("filter_bulan1").disabled = false;
        $filtter2 = document.getElementById("filter_bulan2").disabled = true;
    }

    function unlock3() {
        $filtter1 = document.getElementById("fillter_sumberdana").disabled = false;
    }

    function unlock4() {
        $filtter1 = document.getElementById("fillter_sumberdana").disabled = true;
    }

    function unlock5() {
        $filtter1 = document.getElementById("fillter_sertifikat").disabled = false;
    }

    function unlock6() {
        $filtter1 = document.getElementById("fillter_sertifikat").disabled = true;
    }

    //textareacounter
    $("textarea[name='q15']").textareaCounter({
        limit: 100
    });
    $("textarea[name='q24']").textareaCounter({
        limit: 100
    });
    $("textarea[name='q25']").textareaCounter({
        limit: 100
    });
    $("textarea[name='q26']").textareaCounter({
        limit: 100
    });
    $("textarea[name='q27']").textareaCounter({
        limit: 100
    });
    $("textarea[name='q28']").textareaCounter({
        limit: 100
    });
    $("textarea[name='q29']").textareaCounter({
        limit: 100
    });


    //input handler untuk checkbox "TOEFL"
    $(document).ready(function() {
        if ($("#c1q3").is(":checked")) {
            $("#c1q3_input").prop("required", true);
            $("#c1q3_input").prop("disabled", false);
        } else {
            $("#c1q3_input").prop("required", false);
            $("#c1q3_input").prop("disabled", true);
        }
    });
    $("#c1q3").on("change", function(e) {
        $("#c1q3_input").prop("required", $(this).is(":checked"));
        $("#c1q3_input").prop("disabled", !$(this).is(":checked"));
    });


    //input handler untuk checkbox "TOEIC"
    $(document).ready(function() {
        if ($("#c2q3").is(":checked")) {
            $("#c2q3_input").prop("required", true);
            $("#c2q3_input").prop("disabled", false);
        } else {
            $("#c2q3_input").prop("required", false);
            $("#c2q3_input").prop("disabled", true);
        }
    });
    $("#c2q3").on("change", function(e) {
        $("#c2q3_input").prop("required", $(this).is(":checked"));
        $("#c2q3_input").prop("disabled", !$(this).is(":checked"));
    });


    //input handler untuk checkbox "IELTS"
    $(document).ready(function() {
        if ($("#c3q3").is(":checked")) {
            $("#c3q3_input").prop("required", true);
            $("#c3q3_input").prop("disabled", false);
        } else {
            $("#c3q3_input").prop("required", false);
            $("#c3q3_input").prop("disabled", true);
        }
    });
    $("#c3q3").on("change", function(e) {
        $("#c3q3_input").prop("required", $(this).is(":checked"));
        $("#c3q3_input").prop("disabled", !$(this).is(":checked"));
    });


    //Pertanyaan 2 Sertifikat jumper handler
    $("input[name='q2']").change(function() {
        ($(this).val().toLowerCase() == 'tidak') ? disableQuestion(".quest_2"): enableQuestion(".quest_2");
    });

    function disableQuestion(selector = '') {
        if (selector) {
            $(selector).find("input:checkbox").prop('disabled', true);
            $(selector + " :input:radio").prop('required', false);
            $(selector + " :input").not(':button, :submit, :reset, :hidden, :radio, :checkbox').val('');
            $(selector + " :input:checkbox").prop('checked', false).prop('selected', false).trigger('change');
            $(selector).fadeOut();
        }
    }

    function enableQuestion(selector = '') {
        if (selector) {
            $(selector + " :input:radio").prop('required', true);
            $(selector).find("input:checkbox").prop('disabled', false);
            $(selector).fadeIn();
        }
    }

    //Pertanyaan Studi Lanjut jumper handler
    $("input[name='q5']").change(function() {
        ($(this).val().toLowerCase() == 'bekerja') ? disableQuestion(".quest_6"): enableQuestion(".quest_6");
    });

    function disableQuestion(selector = '') {
        if (selector) {
            $(selector).find("input:checkbox").prop('disabled', true);
            $(selector + " :input:radio").prop('required', false);
            $(selector + " :input").not(':button, :submit, :reset, :hidden, :radio, :checkbox').val('');
            $(selector + " :input:checkbox").prop('checked', false).prop('selected', false).trigger('change');
            $(selector).fadeOut();
        }
    }

    function enableQuestion(selector = '') {
        if (selector) {
            $(selector + " :input:radio").prop('required', true);
            $(selector).find("input:checkbox").prop('disabled', false);
            $(selector).fadeIn();
        }
    }

    //Pertanyaan Studi Lanjut jumper handler
    $("input[name='q5']").change(function() {
        ($(this).val().toLowerCase() == 'studi lanjut') ? disableQuestion(".quest_9"): enableQuestion(".quest_9");
    });

    function disableQuestion(selector = '') {
        if (selector) {
            $(selector).find("input:checkbox").prop('disabled', true);
            $(selector + " :input:radio").prop('required', false);
            $(selector + " :input").not(':button, :submit, :reset, :hidden, :radio, :checkbox').val('');
            $(selector + " :input:checkbox").prop('checked', false).prop('selected', false).trigger('change');
            $(selector).fadeOut();
        }
    }

    function enableQuestion(selector = '') {
        if (selector) {
            $(selector + " :input:radio").prop('required', true);
            $(selector).find("input:checkbox").prop('disabled', false);
            $(selector).fadeIn();
        }
    }


    // Problem 1
    // code for D3/S1 
    var selD3 = document.getElementById("d3");
    var selS1 = document.getElementById("s1");
    var Q12a = document.getElementById("formQ12a");
    var Q12b = document.getElementById("formQ12b");

    function switchQuestionsD3() {
        // alert("Hello i am clicked");
        selS1.required = false;
        Q12b.required = false;
    }

    function switchQuestionsS1() {
        // alert("Hi you clicked me");
        selD3.required = false;
        Q12a.required = false;
    }

    // Problem 2
    var univP2 = document.getElementById("univP2");
    var jurusanP2 = document.getElementById("jurusanP2");
    var q11 = document.getElementById("q11");
    var instanP2 = document.getElementById("instanP2");
    var bagianP2 = document.getElementById("bagianP2");
    var r1q9 = document.getElementById("r1q9");
    var filterBulan1 = document.getElementById("r1q9");
    var r2q9 = document.getElementById("r2q9");
    var filterBulan2 = document.getElementById("r2q9");
    var r1q13 = document.getElementById("r1q13");
    var r2q13 = document.getElementById("r2q13");
    var r3q13 = document.getElementById("r3q13");
    var r4q13 = document.getElementById("r4q13");
    var r1q14 = document.getElementById("r1q14");
    var r2q14 = document.getElementById("r2q14");

    function selectWork() {
        univP2.required = false;
        jurusanP2.required = false;
    }

    function selectStudy() {
        selD3.required = false;
        Q12a.required = false;
        selS1.required = false;
        Q12b.required = false;
        q11.required = false;
        instanP2.required = false;
        bagianP2.required = false;
        r1q9.required = false;
        filterBulan1.required = false;
        r2q9.required = false;
        filterBulan2.required = false;
        r1q13.required = false;
        r2q13.required = false;
        r3q13.required = false;
        r4q13.required = false;
        r1q14.required = false;
        r2q14.required = false;
    }
</script>

</body>

</html>