<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard || JPT</title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../../../assets/img/favicon/icon.png" />
    <link rel="stylesheet" href="../../../landingpage/css/fontAwesome.css">

    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
            background-color: #FAFAFA;
            scroll-behavior: smooth;

        }

        * {
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            -webkit-print-color-adjust: exact !important;
            color-adjust: exact !important;
        }

        .page {
            width: 210mm;
            min-height: 297mm;
            padding: 20mm;
            margin: 10mm auto;
            border: 1px #D3D3D3 solid;
            border-radius: 5px;
            background: white;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        .block_container {
            text-align: left;
        }

        .wraptext {
            width: 210px;
            word-wrap: break-word;
        }

        #bloc1,
        #bloc2,
        #bloc3,
        #bloc4,
        #bloc5,
        #bloc6,
        #bloc7,
        #bloc8,
        #bloc9,
        #bloc10,
        #bloc11,
        #bloc12,
        #bloc13,
        #bloc14,
        #bloc15,
        #bloc16,
        #bloc17,
        #bloc18,
        #bloc19,
        #bloc20,
        #bloc21,
        #bloc22,
        #bloc23,
        #bloc24,
        #bloc25,
        #bloc26,
        #bloc27,
        #bloc28,
        #bloc29,
        #bloc30,
        #bloc31,
        #bloc32,
        #bloc33,
        #bloc34,
        #bloc35,
        #bloc36 {
            display: inline-block;
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

        .text-bank {
            /* position: absolute; */
            font-weight: 400;
            font-size: 12px;
            text-align: right;
            line-height: 30px;
        }

        .text {
            font-weight: 400;
            font-size: 14px;
            line-height: 20px;
        }

        .sebutan {
            /* position: relative; */
            width: 50%;
            top: 0px;
            left: 0px;

            /* top: 100px; */
        }

        .separ {
            /* position: relative; */
            width: 14px;
            left: 50px;
            top: 0px;
        }

        .keterangan {
            /* position: flex; */
            /* width: auto; */
            /* left: 143px; */
            top: 0px;
        }

        .status {
            position: flex;
            width: 100px;
            height: auto;
            left: 0px;
            top: 30px;
        }

        .ii {
            position: flex;
            left: 30px;
            height: auto;
            /* top: p; */
        }

        .uang {
            text-align: right;
            /* margin-right: 0px; */
            width: 60px;
        }

        /* button float */
        .float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 40px;
            right: 40px;
            background-color: #0C9;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            box-shadow: 2px 2px 3px #999;
            cursor: pointer;
        }

        .float:hover {
            background-color: #0B7;
        }

        .my-float {
            margin-top: 22px;
        }

        @page {
            size: A4;
            margin: 0;
        }

        @media print {
            .float {
                visibility: hidden;
            }

            html,
            body {
                width: 210mm;
                height: 297mm;
            }

            .page {
                margin: 0;
                border: initial;
                border-radius: initial;
                width: initial;
                min-height: initial;
                background: initial;
                page-break-after: always;
            }
        }

    </style>
</head>

<body>
    @csrf
    @method('PUT')
    <div class="page">
        <section class="body-letter text">
            <!-- Judul -->
            <img class="logo" src="../../../assets/img/logo-jpt1.png" alt="logo">
            <div class="title">
                <a> RINCIAN PENGHASILAN {{ Str::upper($data->remunerasi->jabatan) }} <br> BULAN :
                    {{ Str::upper($monthName) }}
                    {{ $year }}
                </a>
            </div>
            <div class="text-bank">
                <a>Pembayaran : <strong>{{ Str::upper($data->bank) }}</strong></a>
            </div>
            <div class="text">
                <table border="1" cellspacing="0" cellpadding="0" width="100%">
                    <tbody>
                        <tr>
                            <!-- identitas -->
                            <td colspan="2" valign="top">
                                <div class="block_container">
                                    <div class="sebutan" style="width: 207px;" id="bloc1">
                                        <span>
                                            NIK - Nama <br>
                                            Jabatan<br>
                                            Nomor Pokok Wajib Pajak (NPWP)<br>
                                            Tanggal Masuk Bekerja<br>
                                            Masa Kerja Efektif
                                        </span>
                                    </div>
                                    <div class="separ" id="bloc2">
                                        <a>:<br>:<br>:<br>:<br>:</a>
                                    </div>
                                    <div class="keterangan" id="bloc3" style="width:9.7rem;">
                                        <a>{{ old('nik', $data->nik) }} - {{ old('nama', $data->nama) }}
                                            <br>
                                            {{ $data->remunerasi->jabatan }}<br>
                                            {{ old('npwp', $data->npwp) }} <br>
                                            {{ old('tmk', $data->tmk) }}
                                            <br>{{ $beetween }} </a>
                                    </div>
                                    <div class="status" id="bloc4">
                                        <a>Status Karyawan <br> Status Keluarga</a>
                                    </div>
                                    <div class="separ ii" id="bloc5">
                                        <a>:<br>:</a>
                                    </div>
                                    <div class="keterangan ii" id="bloc6">
                                        <a>{{ old('ska', $data->ska) }}<br>
                                            @if ($data->skk == '1')
                                                <span class="badge bg-label-primary me-1">Belum Menikah</span>
                                            @elseif ($data->skk == '2')
                                                <span class="badge bg-label-warning me-2">Menikah</span>
                                            @elseif ($data->skk == '3')
                                                <span class="badge bg-label-danger me-3">Janda</span>
                                            @elseif ($data->skk == '4')
                                                <span class="badge bg-label-purple me-4">Duda</span>
                                            @endif
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <!-- Penerimaan -->
                            <td valign="top">
                                <strong>I. PENERIMAAN</strong> <br>
                                <div class="block_container">
                                    <div class="sebutan" style="margin-left: 7px;" id="bloc7">
                                        <strong>Gaji</strong> <br>
                                        <a>1. Gaji Pokok</a> <br>
                                        <div style="text-align: right; margin-right: 3px;">
                                            <strong>Sub Total </strong> <br>
                                        </div>
                                    </div>
                                    <div class="separ ii" style="top: 9px;" id="bloc8">
                                        <a>:<br><strong>:</strong></a>
                                    </div>
                                    <div class="keterangan ii uang" style="top: 9px;" id="bloc9">
                                        <a>
                                            @idr($data->sgp)
                                        </a><br>
                                        <strong>@idr($data->sgp)</strong>
                                    </div>
                                </div>
                                <!-- separator -->
                                <div class="block_container">
                                    <div class="sebutan" style="margin-left: 7px; " id="bloc10">
                                        <?php $no = 1; ?>
                                        <strong>Tunjangan</strong> <br>
                                        {{-- Tunjangan Perum & Kom --}}
                                        @if ($perumkom == 0)
                                        @else
                                            <a>{{ $no++ }}. Tunjangan Perum & Kom</a> <br>
                                        @endif

                                        {{-- Tunjangan Jabatan --}}
                                        @if ($data->remunerasi->tunj_jabatan == 0)
                                        @else
                                            <a>{{ $no++ }}. Tunjangan Jabatan</a> <br>
                                        @endif

                                        {{-- Tunjangan Prestasi --}}
                                        @if ($data->remunerasi->tunj_prestasi == 0)
                                        @else
                                            <a>{{ $no++ }}. Tunjangan Prestasi</a> <br>
                                        @endif

                                        {{-- Tunjangan Shift --}}
                                        @if ($data->remunerasi->tunj_shift == 0)
                                        @else
                                            <a>{{ $no++ }}. Tunjangan Shift</a> <br>
                                        @endif

                                        <div style="text-align: right; margin-right: 3px;">
                                            <strong>Sub Total</strong> <br>
                                            <strong>Jumlah Penghasilan</strong> <br>
                                        </div>
                                    </div>
                                    <div class="separ ii" style="top: 9px;" id="bloc11">
                                        <a>
                                            @if ($perumkom == 0)
                                            @else
                                                :<br>
                                            @endif

                                            @if ($data->remunerasi->tunj_jabatan == 0)
                                            @else
                                                :<br>
                                            @endif

                                            @if ($data->remunerasi->tunj_prestasi == 0)
                                            @else
                                                :<br>
                                            @endif

                                            @if ($data->remunerasi->tunj_shift == 0)
                                            @else
                                                :<br>
                                            @endif
                                            <strong>:<br>:</strong>
                                        </a>
                                    </div>
                                    <div class="keterangan ii uang" style="top: 9px;" id="bloc12">
                                        {{-- Nilai Tunjangan Perumahan & Komunikasi --}}
                                        @if ($perumkom == 0)
                                        @else
                                            <a>@idr($perumkom)</a><br>
                                        @endif

                                        {{-- Nilai Tunjangan Jabatan --}}
                                        @if ($data->remunerasi->tunj_jabatan == 0)
                                        @else
                                            <a>@idr($data->remunerasi->tunj_jabatan) </a><br>
                                        @endif

                                        {{-- Nilai Tunjangan Prestasi --}}
                                        @if ($data->remunerasi->tunj_prestasi == 0)
                                        @else
                                            <a>@idr($data->remunerasi->tunj_prestasi) </a><br>
                                        @endif

                                        {{-- Nilai Tunjangan Shift --}}
                                        @if ($data->remunerasi->tunj_shift == 0)
                                        @else
                                            <a>@idr($data->remunerasi->tunj_shift) </a><br>
                                        @endif

                                        <strong>@idr($total_tunj)</strong><br>
                                        <strong>@idr($jum_penghasilan)</strong>
                                    </div>
                                </div>
                                <!-- separator -->
                                <div class="block_container">
                                    <div class="sebutan" style="margin-left: 7px; " id="bloc13">
                                        <strong>Umum</strong> <br>
                                        <a>1. BPJS Kesehatan</a> <br>
                                        <a>2. BPJS Ketenagakerjaan</a> <br>
                                        <div style="text-align: right; margin-right: 3px;">
                                            <strong>Sub Total </strong> <br>
                                        </div>
                                    </div>
                                    <div class="separ ii" style="top: 9px;" id="bloc14">
                                        <a>:<br>:<br><strong>:</strong></a>
                                    </div>
                                    <div class="keterangan ii uang" style="top: 9px;" id="bloc15">
                                        <a>@idr($bpjskes_umum)</a><br>
                                        <a>@idr($bpjskt_umum)</a><br>
                                        <strong>@idr($sub_tot_umum)</strong>
                                    </div>
                                </div>
                                <!-- separator -->
                                <div class="block_container">
                                    <div class="sebutan" style="margin-left: 7px; " id="bloc16">
                                        <strong>Lain-lain</strong> <br>
                                    </div>
                                    <div class="separ ii" id="bloc17">
                                        <a><strong>:</strong></a>
                                    </div>
                                    <div class="keterangan ii uang" id="bloc18">
                                        <strong>0</strong>
                                    </div>
                                </div>
                            </td>
                            <!-- End of Penerimaan -->

                            <!-- potongan -->
                            <td valign="top">
                                <strong>II. POTONGAN</strong> <br>
                                <div class="block_container">
                                    <div class="sebutan" style="margin-left: 10px;" id="bloc19">
                                        <strong>Umum</strong> <br>
                                        <a>1. Gaji Pokok</a> <br> <br>
                                        <a>2. BPJS Kesehatan</a> <br>
                                        <div style="margin-left: 9px;">
                                            <a> -Beban Perusahaan</a> <br>
                                            <a> -Beban Karyawan</a> <br>
                                        </div>
                                        <div style="text-align: right; margin-right: 3px;">
                                            <strong>Sub Total </strong> <br>
                                        </div>
                                        <br>
                                        <a>3. BPJS Ketenagakerjaan</a> <br>
                                        <div style="margin-left: 9px;">
                                            <a> -Beban Perusahaan</a> <br>
                                            <a> -Beban Karyawan</a> <br>
                                        </div>
                                        <div style="text-align: right; margin-right: 3px;">
                                            <strong>Sub Total </strong> <br>
                                        </div>
                                    </div>
                                    <div class="separ ii" style="top: 9px;" id="bloc20">
                                        <a>:<br><br>
                                            :<br>
                                            :<br>
                                            :<br>
                                            :<br> <br>
                                            :<br>
                                            :<br>
                                            :<br>
                                            <strong>:</strong>
                                        </a>
                                    </div>
                                    <div class="keterangan ii uang" style="top: 9px;" id="bloc21">
                                        <a>@idr($data->sgp)</a><br>
                                        <br>
                                        <a>@idr($potong_bpjskes)</a><br>
                                        <a>@idr($bpjskes_pot_bp)</a><br>
                                        <a>@idr($bpjskes_pot_bk)</a><br>
                                        <strong><a>@idr($sub_tot_bpjskes)</a></strong><br> <br>
                                        <a>halo</a><br>
                                        <a>@idr($bpjskt_umum)</a><br>
                                        <a>@idr($jum_bebanpeg)</a><br>
                                        <strong>@idr($sub_tot_bpjskt)</strong>
                                    </div>
                                </div>
                                <!-- separator -->
                                <div class="block_container">
                                    <div class="sebutan" style="margin-left: 10px;" id="bloc22">
                                        <strong>Lain-lain</strong> <br>
                                    </div>
                                    <div class="separ ii" style="top: 0px;" id="bloc23">
                                        <a><strong>:</strong></a>
                                    </div>
                                    <div class="keterangan ii uang" style="top: 0px;" id="bloc24">
                                        <strong>0</strong>
                                    </div>
                                </div>
                            </td>
                            <!-- End of Potongan -->
                        </tr>

                        <!-- total -->
                        <tr>
                            <td valign="top">
                                <div class="block_container">
                                    <div class="sebutan" style="margin-left: 7px; " id="bloc25">
                                        <strong>Total Penerimaan</strong>
                                    </div>
                                    <div class="separ ii" style="top: 0px;" id="bloc26">
                                        <a><strong>:</strong></a>
                                    </div>
                                    <div class="keterangan ii uang" style="top: 0px;" id="bloc27">
                                        <strong>@idr($total_penerimaan)</strong>
                                    </div>
                                </div>
                            </td>
                            <td valign="top">
                                <div class="block_container">
                                    <div class="sebutan" style="margin-left: 10px; " id="bloc28">
                                        <strong>Total Potongan</strong>
                                    </div>
                                    <div class="separ ii" style="top: 0px;" id="bloc29">
                                        <a><strong>:</strong></a>
                                    </div>
                                    <div class="keterangan ii uang" style="top: 0px;" id="bloc30">
                                        <strong>@idr($total_potongan)</strong>
                                    </div>
                                </div>
                            </td>
                            <!-- end of total -->
                        </tr>

                        <!-- Penerimaan bersih -->
                        <tr>
                            <td colspan="2 " valign="top ">
                                <div class="block_container">
                                    <div class="sebutan" style="width:214px;" id="bloc31">
                                        <strong>III. Penerimaan Bersih</strong>
                                    </div>
                                    <div class="separ ii " style="top: 0px; " id="bloc32">
                                        <strong>:</strong>
                                    </div>
                                    <div class="keterangan ii uang " style="top: 0px; " id="bloc33">
                                        <strong>@idr($penerimaan_bersih)</strong>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <!-- end of Penerimaan bersih -->

                        <!-- Pajak pph -->
                        <tr>
                            <td colspan="2" valign="top">
                                <div class="block_container">
                                    <div class="sebutan" style="width:214px;" id="bloc34">
                                        <strong>IV. Pajak Penghasilan (PPh 21)</strong> <br>
                                        <div style=" margin-left: 11px; ">
                                            <a> -Beban Perusahaan</a> <br>
                                            <a> -Beban Karyawan</a> <br>
                                        </div>
                                        <div style="text-align: right; margin-right: 3px; ">
                                            <strong>Sub Total </strong> <br>
                                        </div>
                                    </div>
                                    <div class="separ ii " style="top: 9px;" id="bloc35">
                                        <a>:<br>:<br><strong>:</strong></a>
                                    </div>
                                    <div class="keterangan ii uang " style="top: 9px;" id="bloc36">
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
                        <?php $no = 1; ?>
                        @forelse ($keterangan as $keterangan)
                            {{ $no++ }}. {{ $keterangan->Ur_Keterangan }}<br>
                        @empty
                            <li>Tidak Ada Catatan!</li>
                        @endforelse
                    </ol>
                </div>
                <!-- end of keterangan -->

                <div>
                    <table width="100%" border="1" cellspacing="0" cellpadding="0"
                        style="background-color: #AFFFFF; margin-bottom: 9rem;">
                        <tbody>
                            <tr>
                                <td valign="top">
                                    <strong>&nbsp; Rincian Penerimaan Lain-lain</strong>
                                </td>
                                <td valign="top">
                                    <strong>&nbsp; Rincian Potongan Lain-lain</strong>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <section class="footer" style="text-align: center;">
                <hr> PT Jasamarga Pandaan Tol : {{ $today }}
            </section>
        </section>

        <a onclick="window.print()" class="float" style="bottom : 120px;">
            <i class="fa fa-print my-float"></i>
        </a>
        <a onclick="history.back()" class="float">
            <i class="fa fa-arrow-left my-float"></i>
        </a>
    </div>
</body>

</html>
