<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../../../assets/img/favicon/favicon.ico" />

    <title>PTJPT</title>

    <!-- CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500&display=swap">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css"
        integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/media-queries.css">



    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="assets/ico/ptjpt.jpeg">


</head>

<body>

    <!-- Wrapper -->
    <div class="wrapper">

        <!-- Content -->
        <div class="content">

            <!-- open sidebar menu -->
            <a class="btn btn-primary btn-customized open-menu" style="color: white;"
                onclick="document.getElementById('id01').style.display='block'" role="button">
                <i class="fas fa-align-left"></i> <span>LOGIN</span>
            </a>
            @yield('login')

            <!-- Top content -->
            <div class="top-content section-container" id="top-content">
                <div class="container">
                    <div class="row">
                        <div class="col col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                            <h1 class="wow fadeIn">PT. JASA MARGA <strong>PANDAAN TOL</strong></h1>
                            <div class="description wow fadeInLeft">
                                <p>
                                    <strong>Plaza Tol Pandaan</strong> Kali Tengah, Karang Jati, Kec. Pandaan, Pasuruan,
                                    Jawa Timur

                                </p>
                            </div>
                            <div class="buttons wow fadeInUp">
                                <a class="btn btn-primary btn-customized scroll-link" href="#section-1" role="button">
                                    <i class="fas fa-pencil-alt"></i> Bisnis Perusahaan
                                </a>
                                <a class="btn btn-primary btn-customized-2 scroll-link" href="#section-2" role="button">
                                    <i class="fas fa-book-open"></i> Profil Perusahaan
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid mt-3">
                <div class="row">
                    <marquee scrollamount="7"><strong> Up E-Money bisa dilakukan di Exit Gerbang Tol Pandaan dan Gempol
                            | Arus lalu lintas Gempol - Pandaan aman & lancar | Info Tol (0343) 5650729</strong>
                    </marquee>
                </div>
            </div>


            <!-- Section 1 -->
            <div class="section-1-container section-container" id="section-1">
                <div class="container">
                    <div class="row">
                        <div class="col section-1 section-description wow fadeIn">
                            <h2>Bisnis Perusahaan</h2>
                            <div class="divider-1 wow fadeInUp"><span></span></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 section-1-box wow fadeInUp">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="section-1-box-icon">
                                        <i class="fa fa-building"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h3>Pembangunan Konstruksi Jalan Tol</h3>
                                    <p>PT Jasamarga Pandaan Tol ikut berperan dalam pembangunan jalan tol di Indonesia
                                        dengan menyelenggarakan pembangunan jalan tol ruas Gempol - Pandaan.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 section-1-box wow fadeInDown">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="section-1-box-icon">
                                        <i class="fa fa-road"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h3>Operasional Jalan Tol</h3>
                                    <p>PT Jasamarga Pandaan Tol memiliki hak konsesi jalan tol ruas Gempol - Pandaan,
                                        selalu memelihara dan melaksanakan operasional jalan tol yang mencakup pelayanan
                                        transaksi dan pelayanan lalu lintas untuk menjaga keamanan,
                                        kelancaran dan keselamatan pengguna jalan tol.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 section-1-box wow fadeInUp">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="section-1-box-icon">
                                        <i class="fa-solid fa-chart-column"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h3>Pengembangan Usaha Lain</h3>
                                    <p>PT Jasamarga Pandaan Tol berupaya mengembangkan bisnis lain di bidang jalan tol
                                        yakni dengan menyediakan layanan iklan, dan penyewaan gedung kantor dengan
                                        tujuan mendukung bisnis utama.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section 2 -->
            <div class="section-2-container section-container section-container-gray-bg" id="section-2">
                <div class="container">
                    <div class="row">
                        <div class="col section-2 section-description wow fadeIn">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8 section-2-box wow fadeInLeft">
                            <h3>Profil Perusahaan</h3>
                            <p>
                                Jalan Tol Gempol – Pandaan merupakan bagian dari rencana pembangunan jalan bebas
                                hambatan Surabaya-Malang yang sejak tahun 1970 telah dibuat pra-study kelayakannya oleh
                                Pemerintah. Sebagai jalan penghubung alternatif antara Surabaya dengan Malang, jalan
                                tol ini akan berperan strategis untuk pengembangan wilayah, yaitu sebagai penghubung
                                pusat-pusat kegiatan ekonomi seperti Pelabuhan Tanjung Perak, Kawasan Industri dan
                                Perdagangan serta Perkebunan/Pertanian/ Pariwisata
                                di wilayah Surabaya, Pasuruan, dan Malang.
                            </p>
                            <p>
                                Berdasarkan Undang – Undang Republik Indonesia Nomor : 38 tahun 2004, tentang Jalan dan
                                mempertimbangkan kemampuan APBN, maka sejak pertengahan tahun 1980 program pembangunan
                                Jalan Tol dilaksanakan dengan melibatkan partisipasi pihak swasta. Pada tahun
                                1997 Pemerintah telah menetapkan PT Margabumi Adhikaraya sebagai penyelenggara Jalan Tol
                                Gempol – Pandaan. Sejalan dengan perubahan kepemilikan saham mayoritas pada tahun 2011,
                                maka pada tahun 2013 PT Margabumi Adhikaraya
                                berubah nama menjadi PT Jasamarga Pandaan Tol. Pelaksanaan pembangunan Jalan Tol Gempol
                                – Pandaan dimulai tahun 2012 dan dioperasikan pada tanggal 12 Juni 2015, dengan harapan
                                dapat memberikan pelayanan yang lebih baik
                                kepada pemakai jalan serta memberikan waktu tempuh yang lebih pendek dari Surabaya
                                menuju ke Malang atau sebaliknya.
                            </p>
                        </div>
                        <div class="col-4 section-2-box ">
                            <img src="assets/img/tentang-lita.jpg" alt="Tentang-Kita">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section 3 -->
            <div class="section-3-container section-container" id="section-3">
                <div class="container">

                    <div class="row">
                        <div class="col section-3 section-description wow fadeIn">
                            <h2>VISI</h2>
                            <div class="divider-1 wow fadeInUp"><span></span></div>
                        </div>
                        <div class="col section-3 section-description wow fadeIn">
                            <h2>MISI</h2>
                            <div class="divider-1 wow fadeInUp"><span></span></div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 section-3-box wow fadeInLeft">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="section-3-box-icon">
                                        <i class="fas fa-paperclip"></i>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <p>
                                        Menjadi Pengelola Jalan Tol Yang Handal, Terpercaya, Inovatif dan Berestetika.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 section-3-box wow fadeInLeft">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="section-3-box-icon">
                                        <i class="fas fa-pencil-alt"></i>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <p>
                                    <ul>
                                        <li>Memberikan kontribusi pengembangan kawasan sekitar</li>
                                        <li>Melaksanakan pengelolaan perusahaan secara profesional</li>
                                        <li>Menunjang kelancaran distribusi barang dan jasa</li>
                                        <li>Meningkatkan pelayanan secara berkesinambungan untuk memenuhi kepuasan
                                            pelanggan</li>
                                    </ul>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section 6 -->
            <div class="section-6-container section-container section-container-image-bg" id="section-6">
                <div class="container">
                    <div class="row">
                        <div class="col section-6 section-description wow fadeIn">
                            <h2>Contact Us</h2>
                            <div class="divider-1 wow fadeInUp"><span></span></div>
                            <p>Send us an email using the form below or follow us on our social media channels.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 section-6-box wow fadeInUp">
                            <h3>By eMail</h3>
                            <div class="section-6-form">
                                <form role="form" action="assets/contact.php" method="post">
                                    <div class="form-group">
                                        <label class="sr-only" for="contact-email">Email</label>
                                        <input type="text" name="email" placeholder="Email..."
                                            class="contact-email form-control" id="contact-email">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="contact-subject">Subject</label>
                                        <input type="text" name="subject" placeholder="Subject..."
                                            class="contact-subject form-control" id="contact-subject">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="contact-message">Message</label>
                                        <textarea name="message" placeholder="Message..." class="contact-message form-control" id="contact-message"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-customized"><i
                                            class="fas fa-paper-plane"></i> Send Message</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-5 offset-md-1 section-6-box wow fadeInDown">
                            <h3>Follow us</h3>
                            <div class="section-6-social">
                                <a href="https://www.facebook.com/official.jpt/"><i class="fab fa-facebook-f"></i></a>

                                <!-- <a href="https://twitter.com/tolpanmal"><i class="fab fa-twitter"></i></a> -->
                                <a href="https://www.instagram.com/official.jpt/"><i class="fab fa-instagram"></i></a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <footer class="footer-container">

                <div class="container">
                    <div class="row">

                        <div class="col" style="color: white;">
                            &copy; PT Jasamarga Pandaan Tol.</a>
                        </div>

                    </div>
                </div>

            </footer>

        </div>
        <!-- End content -->

    </div>
    <!-- End wrapper -->

    <!-- Javascript -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/jquery-migrate-3.0.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="assets/js/jquery.backstretch.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/js/scripts.js"></script>

</body>

</html>
