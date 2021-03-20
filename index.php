<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>
<script>AOS.init();</script>
<body>
    <div class="main-content-container container-fluid px-4">
        <!-- page header -->
        <div class="page-header row no-gutters py-4 mb-5">
            <div class="col-12 text-center text-sm-center mb-0">
                <img src="" alt="">
                <br>
                <span class="text-uppercase page-subtitle">Teknik Elektro</span>
                <h3 class="page-title mt-4">Teknik Elektro</h3>
            </div>
        </div>
        <div align="center">
            <b>
                <h5>Tracer Alumni</h5>
            </b>
        </div>
        <!-- form -->
        <div align="center">
            <div class="col-lg-12 text-sm-left">
                <div class="card card-small mb-4">
                    <div class="card-header border-bottom">
                        <h6 class="m-0">
                            Identitas Alumni
                            <i>(Alumni Identity)</i>
                        </h6>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item p-3">
                            <div class="row">
                                <div class="col">
                                    <form method="POST" action="function/f_bio.php">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="Nama">
                                                    Nama
                                                    <i>(Name)</i>
                                                </label>
                                                <input type="text" class="form-control" id="name" placeholder="Nama" name="name">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control" id="email" placeholdere="Email" name="email">
                                            </div>
                                        </div>    
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="prodi">
                                                    Program Studi
                                                    <i>(Study program)</i>
                                                </label>
                                                <select name="prodi" id="prodi" class="select2 form-control select2-hidden-accessible" required placeholder="Program Studi" data-select2-id="prodi" aria-hidden="true" style="width:650px;">
                                                    <option value="">--Pilih Program Studi--</option>
                                                    <option value="TI">S1 Teknik Informatika</option>
                                                    <option value="TE">S1 Teknik Elektro</option>
                                                    <option value="PTI">S1 Pendidikan Teknik Informatika</option>
                                                    <option value="PTE">S1 Pendidikan Teknik Elektro</option>
                                                </select>
                                                <!--
                                                <span class="select2 select2-container select2-container--default" dir="ltr" style="width:647px;">
                                                    <span class="selection">
                                                        <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" aria-labelledby="select2-prodi-container">
                                                            <span class="select2-selection__rendered" role="textbox" aria-readonly="true">
                                                                <span class="select2-selection__placeholder">
                                                                    Pilih Program Studi
                                                                </span>
                                                            </span>
                                                            <span class="select2-selection__arrow" role="presentation">
                                                                <b role="presentation"></b>
                                                            </span>
                                                        </span>
                                                    </span>
                                                    <span class="dropdown-wrapper">
                                                    </span>
                                                </span>
                                                -->
                                            </div>
                                            <div class="form-group col-md-6 inline-group">
                                                <p>Jenis Kelamin <i>(Gender)</i></p>
                                                <label for="male" class="radio-inline">
                                                    <input type="radio" name="gender" id="male" value="male"><i></i> Laki-laki <i>(Male)</i>    
                                                </label>
                                                <label for="female" class="radio-inline">
                                                    <input type="radio" name="gender" id="female" value="female"><i></i> Perempuan <i>(Female)</i>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="angkatan">
                                                    Angkatan
                                                </label>
                                                <select name="angkatan" id="angkatan" class="select2 form-control select2-hidden-accessible" required placeholder="Angkatan" data-select2-id="angkatan" aria-hidden="true" style="width:650px;">
                                                    <option value="">--Pilih Angkatan--</option>
                                                    <option value="1997">1997</option>
                                                    <option value="1998">1998</option>
                                                    <option value="1999">1999</option>
                                                    <option value="2000">2000</option>
                                                    <option value="2001">2001</option>
                                                    <option value="2002">2002</option>
                                                    <option value="2003">2003</option>
                                                    <option value="2004">2004</option>
                                                    <option value="2005">2005</option>
                                                    <option value="2006">2006</option>
                                                    <option value="2007">2007</option>
                                                    <option value="2008">2008</option>
                                                    <option value="2009">2009</option>
                                                    <option value="2010">2010</option>
                                                    <option value="2011">2011</option>
                                                    <option value="2012">2012</option>
                                                    <option value="2013">2013</option>
                                                    <option value="2014">2014</option>
                                                    <option value="2015">2015</option>
                                                    <option value="2016">2016</option>
                                                    <option value="2017">2017</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="phone">
                                                    Nomor Telepon 
                                                    <i>(Phone Number)</i>
                                                </label>
                                                <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone Number">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="ipk">
                                                    Indeks Prestasi Kumulatif
                                                    <i>(IPK)</i>
                                                </label>
                                                <input type="text" class="form-control" name="ipk" id="ipk" placeholder="IPK">
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">
                                            Mulai Isi Angket
                                            <i>(Start)</i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>