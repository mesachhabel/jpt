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
    
    <!-- CSS nya aku pindah ke path dibawah -->
    <link rel="stylesheet" href="../../../assets/css/slipgaji.css">
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
                    <table width="100%" border="0"  cellpadding="2">
                        <tbody>
                            <tr valign="top" align="left" style="background-color: #AFFFFF;" >
                                <th style="border: 1px solid black;">
                                    <strong>&nbsp; Rincian Penerimaan Lain-lain</strong>
                                </th>
                                <th style="border: 1px solid black;">
                                    <strong>&nbsp; Rincian Potongan Lain-lain</strong>
                                </th>
                            </tr>
                            <tr valign="top">
                                <td>
                                    <a>&nbsp; - Lembur  : 300,000</a>
                                </td>
                                <td>
                                    <a>&nbsp; - Iuran Dana Pensiun : 127,253</a>
                                </td>
                            </tr>
                            <tr valign="top">
                                <td>
                                </td>
                                <td>
                                    <a>&nbsp; - Iuran Purna Karya : 127,253</a>
                                </td>
                            </tr>
                            <tr valign="top">
                                <td>
                                </td>
                                <td>
                                    <a>&nbsp; - Iuran SKMJ : 127,253</a>
                                </td>
                            </tr>
                            <tr valign="top">
                                <td>
                                </td>
                                <td>
                                    <a>&nbsp; - Pot. Kop. JMB Surgem : 127,253</a>
                                </td>
                            </tr>
                            <tr valign="top">
                                <td>
                                </td>
                                <td>
                                    <a>&nbsp; - Santunan Duka SKMJ @ Rp 3 : 127,253</a>
                                </td>
                            </tr>
                            <tr valign="top">
                                <td>
                                </td>
                                <td>
                                    <a>&nbsp; - Santunan Duka Pensiunan @ : 127,253</a>
                                </td>
                            </tr>
                            <tr valign="top">
                                <td>
                                </td>
                                <td>
                                    <a>&nbsp; - Iuran PhDP Tambahan : 127,253</a>
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
