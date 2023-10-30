@extends('layouts.lay')

<!-- Theme styles -->
<link href="assets4/build/main.min.css" rel="stylesheet">
<link href="assets4/css/amcharts.css" rel="stylesheet">

<!-- Amcharts -->
<script src="https://www.amcharts.com/lib/4/core.js"></script>
<script src="https://www.amcharts.com/lib/4/charts.js"></script>
<script src="https://www.amcharts.com/lib/4/plugins/wordCloud.js"></script>
<script src="https://www.amcharts.com/lib/4/themes/kelly.js"></script>
<script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>

@section('content')
<section class="">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6" style="padding-right:7.5px;">
                        <div class="graph keyword">
                            <h5 class="keyword__name"><i class="icon-anchor"></i> Tabungan Perumahan Rakyat</h5>
                            <br />
                            <p>Percakapan tentang <strong>tabungan perumahan rakyat</strong> khususnya berkaitan dengan ditandatanganinya Peraturan Pemerintah Nomor 25 Tahun 2020 tentang Tabungan Perumahan Rakyat.</p>
                        </div>
                    </div>
                    <div class="col" style="padding:0 7.5px;">
                        <div class="graph">
                            <h5 class="keyword__name">Source: <i class="fa fa-twitter" aria-hidden="true" style="margin-right:5px;"></i> Twitter</h5>
                            <br />
                            <p>Sumber data diambil dari sosial media Twitter. Pengambilan data dilakukan pada akun publik.</p>
                        </div>
                    </div>
                    <div class="col" style="padding-left:7.5px;">
                        <div class="graph">
                            <h5 class="keyword__name"><i class="fa fa-calendar" style="margin-right:5px;"></i> 8 Jun 2020 - 15 Jun 2020</h5>
                            <br />
                            <p>Rentang waktu pengambilan data dilakukan secara bertahap selama 8 hari.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8" style="padding-right:7.5px;">
                        <div class="graph">
                            <h2 class="section__title">Time Series Sentiment</h2>
                            <div class="amcharts" id="time-series-sentiment"></div>
                            <div class="section__description">
                                <br />
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4" style="padding-left:7.5px;">
                        <div class="graph">
                            <h2 class="section__title">Sentiment Summary</h2>
                            <div class="amcharts" id="pie-chart-sentiment"></div>
                            <div class="section__description">
                                <br />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="graph graph--padding-eq">
                            <h2 class="section__title">Respon publik</h2>
                            <p>Berbagai respon baik positif maupun negatif diperbincangkan oleh masyarakat melalui platform media sosial ini.</p>
                            <p>Tanggapan Negatif dari masyarakat mencapai titik tertinggi pada tanggal 9 Juni 2020. Masyarakat merasa resah dengan dikeluarkannya PP Nomor 25 ini ditengah-tengah pandemic Covid-19. Ketidaktepatan waktu dikeluarkan PP ini oleh pemerintah yang banyak disoroti oleh masyarakat. </p>
                            <p>Pemerintah melalui berbagai media baik media mainstream (Televisi, Radio, dan Surat Kabar versi cetak), maupun media online berusaha untuk memberikan penjelasan tentang penerapan peraturan pemerintah nomor 25 ini.</p>
                        </div>
                        <div class="graph graph--padding-none">
                            <ul class="nav nav-tabs" id="sentiment-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="positive-tab" data-toggle="tab" href="#positive" role="tab" aria-controls="home" aria-selected="true"><i class="fa fa-thumbs-up" aria-hidden="true" style="margin-right:5px;"></i> Positive</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="negative-tab" data-toggle="tab" href="#negative" role="tab" aria-controls="profile" aria-selected="false"><i class="fa fa-thumbs-down" aria-hidden="true" style="margin-right:5px;"></i>Negative</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="neutral-tab" data-toggle="tab" href="#neutral" role="tab" aria-controls="messages" aria-selected="false"><i class="fa fa-hand-peace-o" aria-hidden="true" style="margin-right:5px;"></i>Neutral</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane active" id="positive" role="tabpanel" aria-labelledby="positive-tab">
                                    <ul class="posts">
                                        <li class="post__item">
                                            <img src="http://pbs.twimg.com/profile_images/1250976921619439617/mqA_WQDp_normal.jpg" alt="" />
                                            <div class="post__meta">
                                                <div class="post__identity">
                                                    <h5 class="post__user">Fauzan Meidireza</h5>
                                                    <span class="post__account">@meidireza</span>
                                                </div>
                                                <p class="post__content">Tidak disebutkan soal perumahan rakyat. Oke sip.</p>
                                                <span class="post__date"><i class="fa fa-calendar" aria-hidden="true"></i> 15/6/2020 16.22.35</span>
                                            </div>
                                        </li>
                                        <li class="post__item">
                                            <img src="http://pbs.twimg.com/profile_images/1267631082523901952/8mSfsenD_normal.jpg" alt="" />
                                            <div class="post__meta">
                                                <div class="post__identity">
                                                    <h5 class="post__user">Dyah</h5>
                                                    <span class="post__account">@beautydyah</span>
                                                </div>
                                                <p class="post__content">Para pekerja di Indonesia mulai tahun depan akan ditambah bebannya untuk membayar iuran wajib Tabungan Perumahan</p>
                                                <span class="post__date"><i class="fa fa-calendar" aria-hidden="true"></i> 15/6/2020 07.41.55</span>
                                            </div>
                                        </li>
                                        <li class="post__item">
                                            <img src="http://pbs.twimg.com/profile_images/1264812884413931521/3qimX61l_normal.jpg" alt="" />
                                            <div class="post__meta">
                                                <div class="post__identity">
                                                    <h5 class="post__user">Qy 4ns</h5>
                                                    <span class="post__account">@4nsQy</span>
                                                </div>
                                                <p class="post__content">Adalah Tapera, tabungan perumahan rakyat yang pada awal juli kemarin berhasil ditandatangani oleh Presiden</p>
                                                <span class="post__date"><i class="fa fa-calendar" aria-hidden="true"></i> 15/6/2020 05.27.59</span>
                                            </div>
                                        </li>
                                        <li class="post__item">
                                            <img src="http://pbs.twimg.com/profile_images/1252476168541843456/smFR0piL_normal.jpg" alt="" />
                                            <div class="post__meta">
                                                <div class="post__identity">
                                                    <h5 class="post__user">Thoriqoh</h5>
                                                    <span class="post__account">@Thoriqoh01</span>
                                                </div>
                                                <p class="post__content">Adalah Tapera, tabungan perumahan rakyat yang pada awal juli kemarin berhasil ditandatangani oleh Presiden</p>
                                                <span class="post__date"><i class="fa fa-calendar" aria-hidden="true"></i> 15/6/2020 05.27.59</span>
                                            </div>
                                        </li>
                                        <li class="post__item">
                                            <img src="http://pbs.twimg.com/profile_images/1260557375439683587/WuuEtaI7_normal.jpg" alt="" />
                                            <div class="post__meta">
                                                <div class="post__identity">
                                                    <h5 class="post__user">Mustanir 3</h5>
                                                    <span class="post__account">@Mustanir03</span>
                                                </div>
                                                <p class="post__content">Adalah Tapera, tabungan perumahan rakyat yang pada awal juli kemarin berhasil ditandatangani oleh Presiden</p>
                                                <span class="post__date"><i class="fa fa-calendar" aria-hidden="true"></i> 15/6/2020 05.27.59</span>
                                            </div>
                                        </li>
                                        <li class="post__item">
                                            <img src="http://pbs.twimg.com/profile_images/1259408468613554176/8O6u4K8W_normal.jpg" alt="" />
                                            <div class="post__meta">
                                                <div class="post__identity">
                                                    <h5 class="post__user">Manat</h5>
                                                    <span class="post__account">@TahkikulManat</span>
                                                </div>
                                                <p class="post__content">Adalah Tapera, tabungan perumahan rakyat yang pada awal juli kemarin berhasil ditandatangani oleh Presiden</p>
                                                <span class="post__date"><i class="fa fa-calendar" aria-hidden="true"></i> 15/6/2020 05.19.19</span>
                                            </div>
                                        </li>
                                        <li class="post__item">
                                            <img src="http://pbs.twimg.com/profile_images/1102027075878187008/7TditCP1_normal.jpg" alt="" />
                                            <div class="post__meta">
                                                <div class="post__identity">
                                                    <h5 class="post__user">Pejuang Tangguh</h5>
                                                    <span class="post__account">@Pejuang10489922</span>
                                                </div>
                                                <p class="post__content">Adalah Tapera, tabungan perumahan rakyat yang pada awal juli kemarin berhasil ditandatangani oleh Presiden</p>
                                                <span class="post__date"><i class="fa fa-calendar" aria-hidden="true"></i> 15/6/2020 03.48.04</span>
                                            </div>
                                        </li>
                                        <li class="post__item">
                                            <img src="http://pbs.twimg.com/profile_images/1269950962254241795/cjstJqZD_normal.jpg" alt="" />
                                            <div class="post__meta">
                                                <div class="post__identity">
                                                    <h5 class="post__user">Kanidwi</h5>
                                                    <span class="post__account">@KaniDwiharyani</span>
                                                </div>
                                                <p class="post__content">Para pekerja di Indonesia mulai tahun depan akan ditambah bebannya untuk membayar iuran wajib Tabungan Perumahan</p>
                                                <span class="post__date"><i class="fa fa-calendar" aria-hidden="true"></i> 15/6/2020 01.06.46</span>
                                            </div>
                                        </li>
                                        <li class="post__item">
                                            <img src="http://pbs.twimg.com/profile_images/1104432709693104128/EkyqUU6D_normal.jpg" alt="" />
                                            <div class="post__meta">
                                                <div class="post__identity">
                                                    <h5 class="post__user">fajar perbadi</h5>
                                                    <span class="post__account">@djarcastras</span>
                                                </div>
                                                <p class="post__content">Para pekerja di Indonesia mulai tahun depan akan ditambah bebannya untuk membayar iuran wajib Tabungan Perumahan</p>
                                                <span class="post__date"><i class="fa fa-calendar" aria-hidden="true"></i> 15/6/2020 00.43.39</span>
                                            </div>
                                        </li>
                                        <li class="post__item">
                                            <img src="http://pbs.twimg.com/profile_images/1237337447807070208/zk2rmHS-_normal.jpg" alt="" />
                                            <div class="post__meta">
                                                <div class="post__identity">
                                                    <h5 class="post__user">Teuku Tafdillah</h5>
                                                    <span class="post__account">@tfadillah</span>
                                                </div>
                                                <p class="post__content">Para pekerja di Indonesia mulai tahun depan akan ditambah bebannya untuk membayar iuran wajib Tabungan Perumahan</p>
                                                <span class="post__date"><i class="fa fa-calendar" aria-hidden="true"></i> 15/6/2020 00.13.06</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane" id="negative" role="tabpanel" aria-labelledby="negative-tab">
                                    <ul class="posts">
                                        <li class="post__item">
                                            <img src="http://pbs.twimg.com/profile_images/1269947985950982144/0ZqCNkUc_normal.jpg" alt="" />
                                            <div class="post__meta">
                                                <div class="post__identity">
                                                    <h5 class="post__user">	Mohd Azhan</h5>
                                                    <span class="post__account">@MohdAzhan5865</span>
                                                </div>
                                                <p class="post__content">Malah masa dlm kerajaan 80an 90an siap perkenal bank islam, universiti islam, perumahan rakyat (pprt)</p>
                                                <span class="post__date"><i class="fa fa-calendar" aria-hidden="true"></i> 14/6/2020 11.02.12</span>
                                            </div>
                                        </li>
                                        <li class="post__item">
                                            <img src="http://pbs.twimg.com/profile_images/463271020019720193/sDbEsyqJ_normal.png" alt="" />
                                            <div class="post__meta">
                                                <div class="post__identity">
                                                    <h5 class="post__user">Himapajak Official</h5>
                                                    <span class="post__account">@himapajakfiaub</span>
                                                </div>
                                                <p class="post__content">dan pencarian korban, Balai Prasarana Permukiman Wilayah (BPPW) dan Kementerian Pekerjaan Umum dan Perumahan</p>
                                                <span class="post__date"><i class="fa fa-calendar" aria-hidden="true"></i> 14/6/2020 09.14.31</span>
                                            </div>
                                        </li>
                                        <li class="post__item">
                                            <img src="http://pbs.twimg.com/profile_images/1266489134899539968/7uva4iCv_normal.jpg" alt="" />
                                            <div class="post__meta">
                                                <div class="post__identity">
                                                    <h5 class="post__user">CC22</h5>
                                                    <span class="post__account">@rinachaidir</span>
                                                </div>
                                                <p class="post__content">RT @ZyeZykia: Semoga setelah Tabungan Perumahan Rakyat yang dibuat oleh Pemerintahan Jokowi dapat membuat</p>
                                                <span class="post__date"><i class="fa fa-calendar" aria-hidden="true"></i> 13/6/2020 20.28.24</span>
                                            </div>
                                        </li>
                                        <li class="post__item">
                                            <img src="http://pbs.twimg.com/profile_images/1268940102358560768/d2eBQz9K_normal.jpg" alt="" />
                                            <div class="post__meta">
                                                <div class="post__identity">
                                                    <h5 class="post__user">Kiki, STOP TOUCHING YOUR FACE!</h5>
                                                    <span class="post__account">@jjsengui</span>
                                                </div>
                                                <p class="post__content">PDI_Perjuangan: Presiden Jokowi telah menandatangani PP No. 25 Tahun 2020 tentang Penyelenggaraan Tabungan Perumahan</p>
                                                <span class="post__date"><i class="fa fa-calendar" aria-hidden="true"></i> 15/6/2020 05.27.59</span>
                                            </div>
                                        </li>
                                        <li class="post__item">
                                            <img src="http://pbs.twimg.com/profile_images/1269710474674753538/qpAoZ-BQ_normal.jpg" alt="" />
                                            <div class="post__meta">
                                                <div class="post__identity">
                                                    <h5 class="post__user">Nafisah Tanjung</h5>
                                                    <span class="post__account">@nafisahtanjung</span>
                                                </div>
                                                <p class="post__content">yang belum paham soal Tabungan Perumahan Rakyat (TAPERA), coba buka link dibawah ini, disini dibahas</p>
                                                <span class="post__date"><i class="fa fa-calendar" aria-hidden="true"></i> 15/6/2020 05.27.59</span>
                                            </div>
                                        </li>
                                        <li class="post__item">
                                            <img src="http://pbs.twimg.com/profile_images/1259408468613554176/8O6u4K8W_normal.jpg" alt="" />
                                            <div class="post__meta">
                                                <div class="post__identity">
                                                    <h5 class="post__user">BimoSeterah</h5>
                                                    <span class="post__account">@Bimo_Seterah</span>
                                                </div>
                                                <p class="post__content">RT @BamsBulaksumur: Program merakyat dari Presiden @jokowi Kali ini Presiden menawarkan Tabungan Perumahan</p>
                                                <span class="post__date"><i class="fa fa-calendar" aria-hidden="true"></i> 13/6/2020 17.02.15</span>
                                            </div>
                                        </li>
                                        <li class="post__item">
                                            <img src="http://pbs.twimg.com/profile_images/1128797792657219587/MsPXoYZ2_normal.jpg" alt="" />
                                            <div class="post__meta">
                                                <div class="post__identity">
                                                    <h5 class="post__user">Satriya Mudha</h5>
                                                    <span class="post__account">@mudha_satriya</span>
                                                </div>
                                                <p class="post__content">PDI_Perjuangan: Presiden Jokowi telah menandatangani PP No. 25 Tahun 2020 tentang Penyelenggaraan Tabungan Perumahan</p>
                                                <span class="post__date"><i class="fa fa-calendar" aria-hidden="true"></i> 15/6/2020 03.48.04</span>
                                            </div>
                                        </li>
                                        <li class="post__item">
                                            <img src="http://pbs.twimg.com/profile_images/1198462147505688577/2usLkCt0_normal.jpg" alt="" />
                                            <div class="post__meta">
                                                <div class="post__identity">
                                                    <h5 class="post__user">Didi Saprudin</h5>
                                                    <span class="post__account">@dizdye</span>
                                                </div>
                                                <p class="post__content">PDI_Perjuangan: Presiden Jokowi telah menandatangani PP No. 25 Tahun 2020 tentang Penyelenggaraan Tabungan Perumahann</p>
                                                <span class="post__date"><i class="fa fa-calendar" aria-hidden="true"></i> 13/6/2020 16.24.30</span>
                                            </div>
                                        </li>
                                        <li class="post__item">
                                            <img src="http://pbs.twimg.com/profile_images/1042879272904351744/uUPx_ooG_normal.jpg" alt="" />
                                            <div class="post__meta">
                                                <div class="post__identity">
                                                    <h5 class="post__user">PDI Perjuangan</h5>
                                                    <span class="post__account">@PDI_Perjuangan</span>
                                                </div>
                                                <p class="post__content">Presiden Jokowi telah menandatangani PP No. 25 Tahun 2020 tentang Penyelenggaraan Tabungan Perumahan</p>
                                                <span class="post__date"><i class="fa fa-calendar" aria-hidden="true"></i> 15/6/2020 00.43.39</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane" id="neutral" role="tabpanel" aria-labelledby="neutral-tab">
                                    <ul class="posts">
                                        <li class="post__item">
                                            <img src="http://pbs.twimg.com/profile_images/1112865303686393862/Nzz-u8q9_normal.jpg" alt="" />
                                            <div class="post__meta">
                                                <div class="post__identity">
                                                    <h5 class="post__user">AnggrekHitam</h5>
                                                    <span class="post__account">@AnggrekHitam16</span>
                                                </div>
                                                <p class="post__content">TAPERA Yang Tak Dirindukan Oleh: Ummu Rufaida (Aktivis Dakwah Ideologis) Juni ini rakyat mendapat</p>
                                                <span class="post__date"><i class="fa fa-calendar" aria-hidden="true"></i> 14/6/2020 11.02.12</span>
                                            </div>
                                        </li>
                                        <li class="post__item">
                                            <img src="http://pbs.twimg.com/profile_images/1259063301931102208/YLtx_TRr_normal.jpg" alt="" />
                                            <div class="post__meta">
                                                <div class="post__identity">
                                                    <h5 class="post__user">Alif</h5>
                                                    <span class="post__account">@Alif50112516</span>
                                                </div>
                                                <p class="post__content">TAPERA Yang Tak Dirindukan Oleh: Ummu Rufaida (Aktivis Dakwah Ideologis) Juni ini rakyat mendapat</p>
                                                <span class="post__date"><i class="fa fa-calendar" aria-hidden="true"></i> 15/6/2020 07.02.22</span>
                                            </div>
                                        </li>
                                        <li class="post__item">
                                            <img src="http://pbs.twimg.com/profile_images/1241385401048158209/Mi2QhLhs_normal.jpg" alt="" />
                                            <div class="post__meta">
                                                <div class="post__identity">
                                                    <h5 class="post__user">Dari Madu</h5>
                                                    <span class="post__account">@dari_madu</span>
                                                </div>
                                                <p class="post__content">TAPERA Yang Tak Dirindukan Oleh: Ummu Rufaida (Aktivis Dakwah Ideologis) Juni ini rakyat mendapat</p>
                                                <span class="post__date"><i class="fa fa-calendar" aria-hidden="true"></i> 15/6/2020 06.57.58</span>
                                            </div>
                                        </li>
                                        <li class="post__item">
                                            <img src="http://pbs.twimg.com/profile_images/1240207157124976640/ycbPSphd_normal.jpg" alt="" />
                                            <div class="post__meta">
                                                <div class="post__identity">
                                                    <h5 class="post__user">azzamalfatih1924</h5>
                                                    <span class="post__account">@azzamalfatih191</span>
                                                </div>
                                                <p class="post__content">TAPERA Yang Tak Dirindukan Oleh: Ummu Rufaida (Aktivis Dakwah Ideologis) Juni ini rakyat mendapat</p>
                                                <span class="post__date"><i class="fa fa-calendar" aria-hidden="true"></i> 15/6/2020 06.42.20</span>
                                            </div>
                                        </li>
                                        <li class="post__item">
                                            <img src="http://pbs.twimg.com/profile_images/1255278014910341123/PfniBTda_normal.jpg" alt="" />
                                            <div class="post__meta">
                                                <div class="post__identity">
                                                    <h5 class="post__user">Saripman</h5>
                                                    <span class="post__account">@saripmanfr</span>
                                                </div>
                                                <p class="post__content">Apakah program Tabungan Perumahan Rakyat bakal efektif?</p>
                                                <span class="post__date"><i class="fa fa-calendar" aria-hidden="true"></i> 15/6/2020 06.29.29</span>
                                            </div>
                                        </li>
                                        <li class="post__item">
                                            <img src="http://pbs.twimg.com/profile_images/1253397662700679168/3FoK_N_n_normal.jpg" alt="" />
                                            <div class="post__meta">
                                                <div class="post__identity">
                                                    <h5 class="post__user">Sulistyo</h5>
                                                    <span class="post__account">@SULIS_TIO77</span>
                                                </div>
                                                <p class="post__content">RT @setkabgoid: Menteri Pekerjaan Umum dan Perumahan Rakyat (PUPR), Basuki Hadimuljono, meninjau lahan</p>
                                                <span class="post__date"><i class="fa fa-calendar" aria-hidden="true"></i> 15/6/2020 06.29.29</span>
                                            </div>
                                        </li>
                                        <li class="post__item">
                                            <img src="http://pbs.twimg.com/profile_images/742296136728207360/OkW2cYb8_normal.jpg" alt="" />
                                            <div class="post__meta">
                                                <div class="post__identity">
                                                    <h5 class="post__user">ervik ari susanto</h5>
                                                    <span class="post__account">@Ervik_AS</span>
                                                </div>
                                                <p class="post__content">RT @setkabgoid: Menteri Pekerjaan Umum dan Perumahan Rakyat (PUPR), Basuki Hadimuljono, meninjau lahan</p>
                                                <span class="post__date"><i class="fa fa-calendar" aria-hidden="true"></i> 15/6/2020 06.29.29</span>
                                            </div>
                                        </li>
                                        <li class="post__item">
                                            <img src="http://pbs.twimg.com/profile_images/820813952061845505/2KeMVKqq_normal.jpg" alt="" />
                                            <div class="post__meta">
                                                <div class="post__identity">
                                                    <h5 class="post__user">Johanes Jenito</h5>
                                                    <span class="post__account">@SeringanAwan</span>
                                                </div>
                                                <p class="post__content">RT @setkabgoid: Menteri Pekerjaan Umum dan Perumahan Rakyat (PUPR), Basuki Hadimuljono, meninjau lahan</p>
                                                <span class="post__date"><i class="fa fa-calendar" aria-hidden="true"></i> 15/6/2020 07.17.04</span>
                                            </div>
                                        </li>
                                        <li class="post__item">
                                            <img src="http://pbs.twimg.com/profile_images/1139000915250180096/2F8dXi2W_normal.jpg" alt="" />
                                            <div class="post__meta">
                                                <div class="post__identity">
                                                    <h5 class="post__user">Sekretariat Kabinet</h5>
                                                    <span class="post__account">@setkabgoid</span>
                                                </div>
                                                <p class="post__content">Menteri Pekerjaan Umum dan Perumahan Rakyat (PUPR), Basuki Hadimuljono, meninjau lahan potensial yang</p>
                                                <span class="post__date"><i class="fa fa-calendar" aria-hidden="true"></i> 15/6/2020 07.17.04</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="graph graph--padding-eq">
                            <h2 class="section__title">Wordcloud</h2>
                            <div class="amcharts" id="wordcloud"></div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="graph graph--padding-eq">
                            <h4 class="section__title"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Respon Positif</h4>
                            <p>Sentiment positif berdatangan dari masyarakat yang memandang sebagai peluang bagi rakyat kelas ekonomi bawah untuk memperoleh tempat tinggal yang layak. UUD 1945 Pasal 28 H ayat 1 telah mengamatkan kepada pemerintah untuk menyediakan tempat tinggal yang layak bagi rakyatnya. Pada kesempatan ini pemerintah melalui BPTapera memberikan penjelasan bahwa peluang ini diberi kesempatan pertama pada para pekerja dengan status ASN.</p>
                            <p>Hal ini dikarenakan ASN telah memiliki tabungan perumahansehingga mereka hanya melanjutkan saja mekanisme pembayarannya. Peraturan ini baru akan dijalankan pada tahun 2021.</p>
                        </div>
                        <div class="graph graph--padding-eq">
                            <h4 class="section__title"><i class="fa fa-thumbs-down" aria-hidden="true"></i> Respon Negatif</h4>
                            <p>Sentiment Negatif dari Isu Tapera yang banyak diperbincangkan di Twitter mencapai angka 43.8%. Masyarakat memangdang negative terhadap penandatangan Peraturan Pemerintah Nomor 25 Tahun 2020 oleh Presiden. Hal ini ditanggapi sebagai beban baru bagi masyarakat ditengah himpitan ekonomi di masa pandemic Covid-19 ini. Ketepatan waktu juga dianggap masyarakat yang harus dipertimbangkan oleh pemerintah untuk mengeluarkan PP ini, dan realisasi pelaksanaannya.</p>
                        </div>
                        <div class="graph graph--padding-eq">
                            <h4 class="graph__title"><i class="fa fa-star" aria-hidden="true"></i> Top Tweets</h4>
                            <ul class="posts">
                                <li class="post__item">
                                    <img src="http://pbs.twimg.com/profile_images/1225436466580312064/Ltjh2xSW_normal.jpg" alt="" />
                                    <div class="post__meta">
                                        <div class="post__identity">
                                            <h5 class="post__user">awkarin</h5>
                                        </div>
                                        <p class="post__content">Keadilan sosial bagi seluruh rakyat Indonesia???...</p>
                                        <span class="post__date"><i class="fa fa-retweet" aria-hidden="true"></i> 19317 retweets</span>
                                    </div>
                                </li>
                                <li class="post__item">
                                    <img src="http://pbs.twimg.com/profile_images/1047426902359564289/pp7SMiNZ_normal.jpg" alt="" />
                                    <div class="post__meta">
                                        <div class="post__identity">
                                            <h5 class="post__user">BennyHarmanID</h5>
                                        </div>
                                        <p class="post__content">Saya ndak persoalkan buzzers istana itu dibiaya uang negara atau tidak.Saya hanya luruskan...</p>
                                        <span class="post__date"><i class="fa fa-retweet" aria-hidden="true"></i> 900 retweets</span>
                                    </div>
                                </li>
                                <li class="post__item">
                                    <img src="http://pbs.twimg.com/profile_images/909977743168638976/1yIX3pee_normal.jpg" alt="" />
                                    <div class="post__meta">
                                        <div class="post__identity">
                                            <h5 class="post__user">geloraco</h5>
                                        </div>
                                        <p class="post__content">BBM Tak Kunjung Turun, KMPHB Bakal Tuntut Presiden karena Rakyat Sudah Rugi Rp13,7...</p>
                                        <span class="post__date"><i class="fa fa-retweet" aria-hidden="true"></i> 923 retweets</span>
                                    </div>
                                </li>
                                <li class="post__item">
                                    <img src="http://pbs.twimg.com/profile_images/909977743168638976/1yIX3pee_normal.jpg" alt="" />
                                    <div class="post__meta">
                                        <div class="post__identity">
                                            <h5 class="post__user">geloraco</h5>
                                        </div>
                                        <p class="post__content">Dipoliskan Luhut, Said Didu akan Membangkitkan Semangat Rakyat Melawan Rezim...</p>
                                        <span class="post__date"><i class="fa fa-retweet" aria-hidden="true"></i> 690 retweets</span>
                                    </div>
                                </li>
                                <li class="post__item">
                                    <img src="http://pbs.twimg.com/profile_images/1252331849755455488/lGpHPmAM_normal.jpg" alt="" />
                                    <div class="post__meta">
                                        <div class="post__identity">
                                            <h5 class="post__user">AlineYoana_Tan</h5>
                                        </div>
                                        <p class="post__content">Gue Suka Gaya Lu @habiburokhman Pas Kampanye Di Rangkul Baik-Baik, Di Ambil Keringatnya, Pas Udah...</p>
                                        <span class="post__date"><i class="fa fa-retweet" aria-hidden="true"></i> 595 retweets</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="graph graph--padding-eq">
                            <h4 class="graph__title">Top Users</h4>
                            <ul class="posts">
                                <li class="post__item">
                                    <img src="http://pbs.twimg.com/profile_images/1270524729900728323/l1PaGTa5_normal.jpg" alt="" />
                                    <div class="post__meta">
                                        <div class="post__identity">
                                            <h5 class="post__user">woelannnn</h5>
                                        </div>
                                        <div class="post__data">
                                            <span class="user__followers"><i class="fa fa-bell" aria-hidden="true"></i> 41 followers</span>
                                            <span class="user__tweets"><i class="fa fa-twitter" aria-hidden="true"></i> 57 tweets</span>
                                            <span class="user__favorites"><i class="fa fa-star" aria-hidden="true"></i> 56 favorites</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="post__item">
                                    <img src="http://pbs.twimg.com/profile_images/1264282375099305984/0Sb-9GCo_normal.jpg" alt="" />
                                    <div class="post__meta">
                                        <div class="post__identity">
                                            <h5 class="post__user">Kesit_</h5>
                                        </div>
                                        <div class="post__data">
                                            <span class="user__followers"><i class="fa fa-bell" aria-hidden="true"></i> 37 followers</span>
                                            <span class="user__tweets"><i class="fa fa-twitter" aria-hidden="true"></i> 51 tweets</span>
                                            <span class="user__favorites"><i class="fa fa-star" aria-hidden="true"></i> 51 favorites</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="post__item">
                                    <img src="http://pbs.twimg.com/profile_images/1267519825032560641/-R8Flb6__normal.jpg" alt="" />
                                    <div class="post__meta">
                                        <div class="post__identity">
                                            <h5 class="post__user">Aryprasetyo85</h5>
                                        </div>
                                        <div class="post__data">
                                            <span class="user__followers"><i class="fa fa-bell" aria-hidden="true"></i> 32 followers</span>
                                            <span class="user__tweets"><i class="fa fa-twitter" aria-hidden="true"></i> 48 tweets</span>
                                            <span class="user__favorites"><i class="fa fa-star" aria-hidden="true"></i> 46 favorites</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="post__item">
                                    <img src="http://pbs.twimg.com/profile_images/1252064245274931200/L4Qhdr_T_normal.jpg" alt="" />
                                    <div class="post__meta">
                                        <div class="post__identity">
                                            <h5 class="post__user">YRadianto</h5>
                                        </div>
                                        <div class="post__data">
                                            <span class="user__followers"><i class="fa fa-bell" aria-hidden="true"></i> 28 followers</span>
                                            <span class="user__tweets"><i class="fa fa-twitter" aria-hidden="true"></i> 33 tweets</span>
                                            <span class="user__favorites"><i class="fa fa-star" aria-hidden="true"></i> 33 favorites</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="post__item">
                                    <img src="http://pbs.twimg.com/profile_images/1150373834375045133/4-qyRqg6_normal.jpg" alt="" />
                                    <div class="post__meta">
                                        <div class="post__identity">
                                            <h5 class="post__user">AchmadyaniAy70</h5>
                                        </div>
                                        <div class="post__data">
                                            <span class="user__followers"><i class="fa fa-bell" aria-hidden="true"></i> 25 followers</span>
                                            <span class="user__tweets"><i class="fa fa-twitter" aria-hidden="true"></i> 34 tweets</span>
                                            <span class="user__favorites"><i class="fa fa-star" aria-hidden="true"></i> 34 favorites</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="post__item">
                                    <img src="http://pbs.twimg.com/profile_images/1271427155113590784/JiInyU78_normal.jpg" alt="" />
                                    <div class="post__meta">
                                        <div class="post__identity">
                                            <h5 class="post__user">BaruSatoe</h5>
                                        </div>
                                        <div class="post__data">
                                            <span class="user__followers"><i class="fa fa-bell" aria-hidden="true"></i> 20 followers</span>
                                            <span class="user__tweets"><i class="fa fa-twitter" aria-hidden="true"></i> 110 tweets</span>
                                            <span class="user__favorites"><i class="fa fa-star" aria-hidden="true"></i> 69 favorites</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="post__item">
                                    <img src="http://pbs.twimg.com/profile_images/1265600263894601730/g3euGov8_normal.jpg" alt="" />
                                    <div class="post__meta">
                                        <div class="post__identity">
                                            <h5 class="post__user">Muhamma11761378</h5>
                                        </div>
                                        <div class="post__data">
                                            <span class="user__followers"><i class="fa fa-bell" aria-hidden="true"></i> 17 followers</span>
                                            <span class="user__tweets"><i class="fa fa-twitter" aria-hidden="true"></i> 17 tweets</span>
                                            <span class="user__favorites"><i class="fa fa-star" aria-hidden="true"></i> 17 favorites</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="post__item">
                                    <img src="http://pbs.twimg.com/profile_images/1270340937181356033/C3HqQw86_normal.jpg" alt="" />
                                    <div class="post__meta">
                                        <div class="post__identity">
                                            <h5 class="post__user">FaGtng</h5>
                                        </div>
                                        <div class="post__data">
                                            <span class="user__followers"><i class="fa fa-bell" aria-hidden="true"></i> 16 followers</span>
                                            <span class="user__tweets"><i class="fa fa-twitter" aria-hidden="true"></i> 31 tweets</span>
                                            <span class="user__favorites"><i class="fa fa-star" aria-hidden="true"></i> 30 favorites</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
    <script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>

    <script src="assets4/js/bootstrap.min.js"></script>
    <!-- Main JS -->
    <script src="assets4/build/main.min.js"></script>
    <script src="assets4/js/perumahan-rakyat.js"></script>
@endsection