@extends('layouts.default')
@section('container')

    <!--Banner Content-->
  
        <div id="banner" class="row clearfix">

            <div class="col-38">

                <div class="section-heading">
                    <h1>PONDOK KALIGRAFI HANJUANGHEJO</h1>
                    <h2>Pondok Kaligrafi Hanjung Hejo adalah sebuah lembaga pendidikan Islam Indonesia yang berfokus pada seni kaligrafi</h2>
                    <h3>Dsn. Pasirhuni Rt. 02 RW. 01 Ds. Sukamantri Tanjungkerta Sumedang 45354</h3>
                </div>

                <!--Call to Action-->
                <a href="#" class="button">INFO LEBIH LANJUT</a>
                <!--End Call to Action-->

            </div>

        </div><!--End of Row-->
    </header>
<!--Main Content Area-->
<main id="content">

        <!--Introduction-->
        <section id="about" class="introduction scrollto">

            <div class="row clearfix">

                <div class="col-1">
                    <div class="section-heading">
                        <h3>PONDOK KALIGRAFI HANJUNGHEJO</h3>
                        <h2 class="section-title">SEJARAH SINGKAT</h2>
                        <p class="section-subtitle"> Ide pertama untuk mendirikan sebuah lembaga berasal dari K. Saefudin Aziz ms. Dimulai dari keinginan dan merasa mempunyai bakat dalam seni kaligrafi , beliau berkhayal untuk mendirikan semacam organisasi atau lembaga untuk mengembangkan seni  Kaligrafi Art ( menulis, melukis Kaligrafi ) yang jadi kegemaranya.  Keinginan itu muncul sejak Saefudin Aziz belajar Di PonpesAl-Hikamussalafiyyah pada tahun 2001
                           <br> Setahun kemudian , 2002.  keinginannya itu bertambah kuat , Saefudin Aziz memutuskan untuk belajar lebih dalam tentang kaligrafi ke LEMKA (Lembaga Kaligrafi Al-Qur’an) yang dipimpin Oleh Drs. D. Sirojuddin AR. Setelah belajar di LEMKA selama kurang lebih 3 Tahun. Saefudin Aziz ikut  Isep Misbah yang merupakan seniornya  di LEMKA ke Jakarta Untuk mendirikan sebuah perusahaan yang bertujuan untuk dekorasi kaligrafi. <br><br>
                            Setelah sukses dijakarta. Pada Tahun 2013 saefudin aziz kembali ke tanah kelahiranya atas permintaan  Pimpinan Ponpes Al-Hikamussalafiyyah KH. MohammadAliyuddin dan Pengasuh Pesantrenya KH. Sa’dulloh, SQ. M.MP.d saefudin aziz disuruh menjadi Keamanan Pusat di Pesantren tersebut, dan untuk mengembangkan bakatnya dibidang kaligrafi Saefudin Aziz Mengajar Ektrakulikuler Kaligrafi, baru sebentar mengajar kaligrafi karya-karyanya mulai dikenal di masyarakat sumedang alhasil saefudin aziz  disuruh  membuka privat  untuk SD maupun SMP  yang akan berlomba dibidang seni lukis kaligrafi.
                            Setelah  namanya mulai dikenal Saefudin Aziz mulai berencana untuk mendirikan Pesabtreb Khusus Kaligrafi. <br><br> Beberapa Tahun kemudian atas dukungan dari  Pimpinan Ponpes Al-Hikamussalafiyyah KH. MohammadAliyuddin dan Pengasuh Pesantrenya KH. Sa’dulloh, SQ. M.MP.d untuk mendirikan Pesantren Kaligrafi karena di sumedang belum ada khusus untuk belajar kaligrafi, setelah itu saefudin aziz merumuskan sebuah nama untuk pesantren kaligrafi tersebut yaitu Pondok Pesantren “ KREASI SENI KALIGRAFI ART HANJUANG HEJO”.
                        </p>
                    </div>

                </div>         

            </div>

        </section>
        <!--End of Introduction-->


    <!--Gallery-->
    <aside id="gallery" class="row text-center scrollto clearfix" data-featherlight-gallery
             data-featherlight-filter="a">
             <div class="section-heading">
                <h3>PONDOK KALIGRAFI HANJUNGHEJO</h3>
                <h2 class="section-title">GALERI PONDOK</h2>
@foreach($gallerys as $gallery)
<a href="{{ Storage::url($gallery->image) }}" data-featherlight="image" class="col-3 wow fadeIn"
               data-wow-delay="0.1s"><img src="{{ Storage::url($gallery->image) }}" alt="Landing Page" 
               style="object-fit: cover;width:300px;height:300px"
               /></a>
@endforeach
    </aside>
    <!--End of Gallery-->


    <!--Content Section-->
    <div id="services" class="scrollto clearfix">

        <div class="row no-padding-bottom clearfix">


            <!--Content Left Side-->
            <div class="col-3">
                <!--User Testimonial-->
                <blockquote class="testimonial text-right bigtest">
                    <q>Jika seni bertujuan untuk memelihara akar dari budaya kita, masyarakat harus membiarkan seniman bebas mengikuti visi mereka masing-masing kemanapun hal itu membawa mereka</q>
                    <footer>— K Saefuddin Azis, Pimpinan Pesantren</footer>
                </blockquote>
                <!-- End of Testimonial-->

            </div>
            <!--End Content Left Side-->

    <!--Content of the Right Side-->
    <div class="col-3">
        <div class="section-heading">
            <h3>Belajar</h3>
            <h2 class="section-title">KALIGRAFI</h2>
            <p class="section-subtitle">“Riwayat seni kaligrafi di Indonesia sendiri diketahui sejak abad ke 11. Hal itu didasarkan penemuan dari makam Fatimah binti Maimun. Nisan Fatimah binti Maimun tertulis hiasan aksara kaligrafi arab bertarikh tahun 1082 M.”</p>
        </div>
        <p>Riwayat seni kaligrafi di Indonesia sendiri diketahui sejak abad ke 11. Berita tertua mengabarkan telah terbentuk sebuah komunitas muslim, dengan bertempat di Gresik Jawa Timur. Hal itu didasarkan berdasarkan analisa atas hasil penemuan dari makam Fatimah binti Maimun. Nisan Fatimah tertulis aksara arab dengan tahun 1082 M.  Berdasarkan analisa para arekolog, nisan tersebut merupakan tanda dari permulaan tulisan kaligrafi di Nusantara.
        </p>
        <p>
            Adapun mengenai riwayat dinamika seni kaligrafi lokal di Indonesia menurut Sirajudin dibagi dalam beberapa tahapan periodisasi (D S. A., 1994). Pertama, angkatan perintis, dalam periode islamisasi tentu bakal terjadi arabisasi, mengingat hampir seluruh rujukan tentang ajaran Islam berbahasa Arab. Apalagi para penyebar yang menyampaikan Islam kepada masyarakat Nusantara, terutama pada masa permulaan perkembangan Islam, didominasi oleh ulama-ulama keturunan Arab atau non-arab yang lama belajar di Arab. Sehingga faktor inilah yang kemudian memaksa setiap muallaf  mesti bersentuhan dengan bahasa dan tulisan Arab. Dari titik ini cukup jelas kehadiran Islam menandai babak baru semarak penggunaan tulisan kaligrafi Arab.


        </p>
        <!-- Just replace the Video ID "UYJ5IjBRlW8" with the ID of your video on YouTube (Found within the URL) -->
        <a href="#" data-videoid="UjHibRKHX6Y" data-videosite="youtube" class="button video link-lightbox">
            WATCH VIDEO <i class="fa fa-play" aria-hidden="true"></i>
        </a>
    </div>
    <!--End Content Right Side-->


            <div class="col-3">
                <img src="images/01.png" alt="Dancer"/>
            </div>
            <div class="col-3">
                <img src="images/02.png" alt="Dancer"/>
            </div>

        </div>


    </div>
    <!--End of Content Section-->
        <!--Clients-->
        <section id="clients" class="scrollto clearfix">
            <div class="row clearfix">

                <div class="col-3">

                    <div class="section-heading">
                        <h3>JENIS-JENIS</h3>
                        <h2 class="section-title">KALIGRAFI</h2>
                        <p class="section-subtitle">Kaligrafi terabagi kedalam beberapa jenis gaya penulisan diantaranya :</p>
                        <p>-Khat Riq'ah</p>
                        <p>-Khat Kufi Murobba</p>
                        <p>-Khat Tsulus</p>
                        <p>-Khat Naskhi</p>
                        <p>-Khat Farisi</p>
                        <p>-Khat Diwani</p>
                        <p>-Khat Diwani jali</p>
                    </div>

                </div>

                <div class="col-2-3">

                    <a href="#" class="col-3">
                        <img src="images/company-images/company-logo1.jpg" alt="Company"/>
                        <div class="client-overlay"><span>khat riq'ah</span></div>
                    </a>
                    <a href="#" class="col-3">
                        <img src="images/company-images/company-logo55.png" alt="Company"/>
                        <div class="client-overlay"><span>khat kufi murabba</span></div>
                    </a>
                    <a href="#" class="col-3">
                        <img src="images/company-images/company-logo3.jpeg" alt="Company"/>
                        <div class="client-overlay"><span>khat tsulus</span></div>
                    </a>
                    <a href="#" class="col-3">
                        <img src="images/company-images/company-logo4.jpg" alt="Company"/>
                        <div class="client-overlay"><span>khat naskhi</span></div>
                    </a>
                    <a href="#" class="col-3">
                        <img src="images/company-images/company-logo5.jpg" alt="Company"/>
                        <div class="client-overlay"><span>khat farisi</span></div>
                    </a>
                    <a href="#" class="col-3">
                        <img src="images/company-images/company-logo6.jpg" alt="Company"/>
                        <div class="client-overlay"><span>khat Diwani</span></div>
                    </a>
                    <a href="#" class="col-3" >
                        <img src="images/company-images/company-logo7.jpg" alt="Company"/>
                        <div class="client-overlay"><span>khat Diwani jali</span></div>
                    </a>
                    

                </div>

            </div>
        </section>
        <!--End of Clients-->
</main>

<!--End Main Content Area-->
@endsection