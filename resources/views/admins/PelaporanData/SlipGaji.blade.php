<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
        }
        
        #block_container {
            text-align: left;
            display: flex;
        }
        /* judul */
        
        .logo {
            /* position: absolute; */
            width: 169px;
            height: 41px;
        }
        
        .title {
            /* position: absolute; */
            text-align: center;
            font-style: normal;
            font-weight: 800;
            font-size: 18px;
            line-height: 21px;
            /* identical to box height */
            color: #000000;
        }
        /* .body-letter {
    position: absolute;
    width: 516px;
    height: 746px;
    left: 39px;
    top: 23px;
    width: 21cm;
    height: 29.7cm;
} */
        
        .text-bank {
            /* position: absolute; */
            font-weight: 400;
            font-size: 8px;
            text-align: right;
            line-height: 10px;
        }
        
        .text {
            font-weight: 400;
            font-size: 8px;
            line-height: 10px;
        }
        
        .maincontent {
            width: 516px;
            height: 319px;
            left: 0px;
            top: 81px;
            border: 1px solid #000000;
        }
        
        .sebutan {
            position: relative;
            width: 132px;
            left: 0px;
            top: 0px;
        }
        
        .separ {
            width: 12px;
            left: 136px;
            top: 0px;
        }
        
        .keterangan {
            width: 136px;
            left: 143px;
            top: 0px;
        }
        
        .status {
            position: relative;
            width: 72px;
            height: 0;
            left: 0px;
            top: 30px;
        }
        
        .ii {
            position: relative;
            left: 0px;
            height: 0;
            top: 30px;
        }
        
        .uang {
            text-align: right;
            margin-right: 0px;
        }
    </style>
</head>

<body>

    <section class="body-letter text">
        <!-- Judul -->
        <img class="logo" src=".../.../.../assets/img/logo.png" alt="logo">
        <div class="title">
            <a> RICIAN PENGHASILAN DIREKSI <br> BULAN : MARET 2022</a>
        </div>
        <div class="text-bank">
            <a>Pembayaran : BANK MANDIRI</a>
        </div>
        <div class="text">
            <table border="1" cellspacing="0" cellpadding="0">
                <tbody>
                    <tr>
                        <!-- identitas -->
                        <td width="700" colspan="2" valign="top">
                            <div id="block_container">
                                <div class="sebutan">
                                    <a>NIK - Nama</a> <br>
                                    <a>Jabatan</a> <br>
                                    <a>Nomor Pokok Wajib Pajak (NPWP) </a> <br>
                                    <a>Tanggal Masuk Bekerja </a> <br>
                                    <a>Masa Kerja Efektif</a> <br>
                                </div>
                                <div class="separ">
                                    <a>:<br>:<br>:<br>:<br>:</a>
                                </div>
                                <div class="keterangan">
                                    <a>D1603 - Ir. H. Bahrul Alam <br> Direktur Keuangan & SDM Direksi <br> 48.762.688.9-624.000 <br> 01 Juni 2016 <br> 5 Tahun 9 Bulan</a>
                                </div>
                                <div class="status">
                                    <a>Status Karyawan <br> Status Keluarga</a>
                                </div>
                                <div class="separ ii">
                                    <a>:<br>:</a>
                                </div>
                                <div class="keterangan ii">
                                    <a>Direksi<br>K/2</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <!-- Penerimaan -->
                        <td width="700" valign="top">
                            <strong>I. PENERIMAAN</strong> <br>
                            <div id="block_container">
                                <div class="sebutan" style="margin-left: 7px; width: 125px;">
                                    <strong>Gaji</strong> <br>
                                    <a>1. Gaji Pokok</a> <br>
                                    <div style="text-align: right; margin-right: 3px;">
                                        <strong>Sub Total </strong> <br>
                                    </div>
                                </div>
                                <div class="separ ii" style="top: 9px;">
                                    <a>:<br><strong>:</strong></a>
                                </div>
                                <div class="keterangan ii uang" style="top: 9px;">
                                    <a>45.973.015</a><br>
                                    <strong>45.973.015</strong>
                                </div>
                            </div>
                            <!-- separator -->
                            <div id="block_container">
                                <div class="sebutan" style="margin-left: 7px; width: 125px;">
                                    <strong>Tunjangan</strong> <br>
                                    <a>1. Tunjangan Perum & Kom</a> <br>
                                    <a>1. Tunjangan Jabatan</a> <br>
                                    <div style="text-align: right; margin-right: 3px;">
                                        <strong>Sub Total</strong> <br>
                                        <strong>Jumlah Penghasilan</strong> <br>
                                    </div>
                                </div>
                                <div class="separ ii" style="top: 9px;">
                                    <a>:<br>:<br><strong>:<br>:</strong></a>
                                </div>
                                <div class="keterangan ii uang" style="top: 9px;">
                                    <a>11.500.000</a><br>
                                    <a>9.180.000</a><br>
                                    <strong>20.680.000</strong><br>
                                    <strong>66.653.015</strong>
                                </div>
                            </div>
                            <!-- separator -->
                            <div id="block_container">
                                <div class="sebutan" style="margin-left: 7px; width: 125px;">
                                    <strong>Umum</strong> <br>
                                    <a>1. Jamsostek</a> <br>
                                    <div style="text-align: right; margin-right: 3px;">
                                        <strong>Sub Total </strong> <br>
                                    </div>
                                </div>
                                <div class="separ ii" style="top: 9px;">
                                    <a>:<br><strong>:</strong></a>
                                </div>
                                <div class="keterangan ii uang" style="top: 9px;">
                                    <a>3.687.599</a><br>
                                    <strong>3.687.599</strong>
                                </div>
                            </div>
                            <!-- separator -->
                            <div id="block_container">
                                <div class="sebutan" style="margin-left: 7px; width: 125px;">
                                    <strong>Lain-lain</strong> <br>
                                </div>
                                <div class="separ ii" style="top: 0px;">
                                    <a><strong>:</strong></a>
                                </div>
                                <div class="keterangan ii uang" style="top: 0px;">
                                    <strong>0</strong>
                                </div>
                            </div>
                        </td>
                        <!-- End of Penerimaan -->

                        <!-- potongan -->
                        <td width="700" valign="top">
                            <strong>II. POTONGAN</strong> <br>
                            <div id="block_container">
                                <div class="sebutan" style="margin-left: 10px; width: 125px;">
                                    <strong>Umum</strong> <br>
                                    <a>1. Gaji Pokok</a> <br>
                                    <a>2. Jamsostek</a> <br>
                                    <div style="margin-left: 9px;">
                                        <a> -Beban Perusahaan</a> <br>
                                        <a> -Beban Karyawan</a> <br>
                                    </div>
                                    <div style="text-align: right; margin-right: 3px;">
                                        <strong>Sub Total </strong> <br>
                                    </div>
                                </div>
                                <div class="separ ii" style="top: 9px;">
                                    <a>:<br>:<br>:<br>:<br><strong>:</strong></a>
                                </div>
                                <div class="keterangan ii uang" style="top: 9px;">
                                    <a>0</a><br>
                                    <br>
                                    <a>3.687.599</a><br>
                                    <a>1.543.836</a><br>
                                    <strong>5.231.435</strong>
                                </div>
                            </div>
                            <!-- separator -->
                            <div id="block_container">
                                <div class="sebutan" style="margin-left: 10px; width: 125px;">
                                    <strong>Lain-lain</strong> <br>
                                </div>
                                <div class="separ ii" style="top: 0px;">
                                    <a><strong>:</strong></a>
                                </div>
                                <div class="keterangan ii uang" style="top: 0px;">
                                    <strong>0</strong>
                                </div>
                            </div>
                        </td>
                        <!-- End of Potongan -->
                    </tr>

                    <!-- total -->
                    <tr>
                        <td width="700" valign="top">
                            <div id="block_container">
                                <div class="sebutan" style="margin-left: 7px; width: 125px;">
                                    <strong>Total Penerimaan</strong>
                                </div>
                                <div class="separ ii" style="top: 0px;">
                                    <a><strong>:</strong></a>
                                </div>
                                <div class="keterangan ii uang" style="top: 0px;">
                                    <strong>70.340.614</strong>
                                </div>
                            </div>
                        </td>
                        <td width="700" valign="top">
                            <div id="block_container">
                                <div class="sebutan" style="margin-left: 10px; width: 125px;">
                                    <strong>Total Potongan</strong>
                                </div>
                                <div class="separ ii" style="top: 0px;">
                                    <a><strong>:</strong></a>
                                </div>
                                <div class="keterangan ii uang" style="top: 0px;">
                                    <strong>5.231.435</strong>
                                </div>
                            </div>
                        </td>
                        <!-- end of total -->
                    </tr>

                    <!-- Penerimaan bersih -->
                    <tr>
                        <td width="700 " colspan="2 " valign="top ">
                            <div id="block_container">
                                <div class="sebutan">
                                    <strong>III. Penerimaan Bersih</strong>
                                </div>
                                <div class="separ ii " style="top: 0px; ">
                                    <strong>:</strong>
                                </div>
                                <div class="keterangan ii uang " style="top: 0px; ">
                                    <strong>65.109.179</strong>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <!-- end of Penerimaan bersih -->

                    <!-- Pajak pph -->
                    <tr>
                        <td width="700" colspan="2" valign="top">
                            <div id="block_container">
                                <div class="sebutan">
                                    <strong>IV. Pajak Penghasilan (PPh 21)</strong> <br>
                                    <div style=" margin-left: 11px; ">
                                        <a> -Beban Perusahaan</a> <br>
                                        <a> -Beban Karyawan</a> <br>
                                    </div>
                                    <div style="text-align: right; margin-right: 3px; ">
                                        <strong>Sub Total </strong> <br>
                                    </div>
                                </div>
                                <div class="separ ii " style="top: 9px; ">
                                    <a>:<br>:<br><strong>:</strong></a>
                                </div>
                                <div class="keterangan ii uang " style="top: 9px; ">
                                    <a>13.523.119</a><br>
                                    <a>0</a><br>
                                    <strong>13.523.119</strong>
                                </div>
                            </div>
                        </td>
                        <!-- end of pajak pph -->
                    </tr>
                </tbody>
            </table>
            <!-- keterangan -->
            <div>
                Keterangan :
                <ol>
                    <li>amsostek merupakan tunjangan yang dibayarkan Perusahaan</li>
                    <li>PPh 21 adalah jumlah Pajak yang seharusnya disetor ke kantor Pajak</li>
                    <li>Rincian Potongan Santunan Duka : </li>
                    3 Orang Karyawan (Suderajat/06864, Abdurahman/10280, Imam Ansori/04694)
                </ol>
            </div>
            <!-- end of keterangan -->

            <div>
                <table border="1" cellspacing="0" cellpadding="0" style="background-color: #AFFFFF; margin-bottom: 35rem;">
                    <tbody>
                        <tr>
                            <td width="700" valign="top">
                                <strong>Rincian Penerimaan Lain-lain</strong>
                            </td>
                            <td width="700" valign="top">
                                <strong>Rincian Potongan Lain-lain</strong>
                            </td>
                            <!-- end of total -->
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <section class="footer" style="text-align: center;">
            <hr> PT Jasamarga Pandaan Tol : 06/04/2022 08:59:19
        </section>
    </section>
</body>

</html>