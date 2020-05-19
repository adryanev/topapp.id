<?php

use yii\db\Schema;
use yii\db\Migration;

class m190228_151417_produkDataInsert extends Migration
{

    public function init()
    {
        $this->db = 'db';
        parent::init();
    }

    public function safeUp()
    {
        $this->batchInsert('{{%produk}}',
                           ["id_produk", "nama_produk", "kategori_produk", "developer", "deskripsi_produk", "fitur_produk", "spesifikasi", "harga", "video", "source_code", "demo", "manual_book", "rancangan", "status", "added_by", "created_at", "updated_at"],
                            [
    [
        'id_produk' => '1',
        'nama_produk' => 'Aplikasi Pembelajaran Bahasa Arab berbasis android/web',
        'kategori_produk' => '3',
        'developer' => 'Adryan Eka Vandra',
        'deskripsi_produk' => '<p>Produk ini tentang aplikasi</p>',
        'fitur_produk' => '<p>Produk ini bisa melakukan : - Ujian - Materi - Pembahasan</p>',
        'spesifikasi' => '<p>Framework Yii2 bla bla bla</p>',
        'harga' => '3500000',
        'video' => 'GXGEpZSxmYA',
        'source_code' => 'belajar-arab.zip',
        'demo' => 'topapp.id/e-arab',
        'manual_book' => 'MANUAL BOOK APLIKASI.pdf',
        'rancangan' => 'RANCANGAN APLIKASI.pdf',
        'status' => '10',
        'added_by' => '1',
        'created_at' => '1551364390',
        'updated_at' => '1551364390',
    ],
    [
        'id_produk' => '2',
        'nama_produk' => 'Aplikasi Smart Lapor berbasis Android dengan Teknologi AR+LBS',
        'kategori_produk' => '3',
        'developer' => 'Nazruddin Safaat H / Radinal Dwiki N',
        'deskripsi_produk' => '<p>Aplikasi Smart Lapor berbasis Android menggunakan Teknologi Augmented Reality</p>
<p>&nbsp;</p>
<p>Perkembangan teknologi yang begitu pesat dapat menjadi solusi untuk mengatasi permasalahan tersebut. Suatu sistem aplikasi yang dirancang ramah pengguna agar saksi kejadian kecelakaan lalu lintas dapat melaporkan perkara dengan mudah dan cepat merupakan solusi yang tepat. Aplikasi ini dibuat tidak hanya untuk mempercepat dan memudahkan proses pelaporan kecelakaan, tetapi juga agar hasil yang didapatkan lebih baik dan akurat. Pemanfaatan teknologi secara bijak dan partisipasi masyarakat dalam menggunakan aplikasi tersebut diharapkan dapat meningkatkan kualitas pelayanan dan penanganan kecelakaan lalu lintas oleh aparat kepolisian</p>
<p>&nbsp;</p>',
        'fitur_produk' => '<p>Gambaran Aplikasi :</p>
<p>Di Indonesia kecelakaan lalu lintas merupakan hal yang membutuhkan perhatian serius. Selain rendahnya kesadaran hukum pengguna jalan dalam berlalu lintas, rendahnya pengetahuan masyarakat mengenai prosedur pelaporan suatu kejadian perkara ketika terjadi kecelakaan juga menjadi kendala tersendiri bagi pihak kepolisian. Tak jarang pihak kepolisian kesulitan untuk melakukan olah tempat kejadian perkara (TKP) yang meliputi pencarian saksi dan reka ulang kejadian. Hal tersebut juga berdampak pada korban kecelakaan yang pada akhirnya kesulitan untuk memperoleh pelayanan asuransi kecelakaan dari Jasa Raharja. Tak hanya pada kasus kecelakaan lalu lintas saja, pihak kepolisian juga sering terhambat dalam mengumpulkan data perkara tindak kriminal. Sehingga muncul masalah baru seperti kurangnya saksi, barang bukti, dan lain sebagainya. Keterbatasan jumlah personil dan pendataan perkara yang masih dilakukan secara manual juga menjadi penghambat bagi aparat kepolisian yang bertugas. Sehingga aparat keamanan terkesan lamban dalam menangani permasalahan kecelakaan lalu lintas dan tindak kriminalitas. Untuk itu dirancang sebuah Aplikasi Smart Lapor. Aplikasi yang dibangun&nbsp; terdiri dari aplikasi Android untuk pengguna dan Sistem <em>web</em> yang akan dioperasikan oleh <em>Administrator</em>. Dalam melakukan perancangan aplikasi dilakukan analisa dengan alat bantu skema yaitu <em>Unified Modeling of Language </em>(UML) yang meliputi <em>Use Case Diagram, Activity Diagram, </em>dan <em>Sequence Diagram</em>. Aplikasi yang telah dibangun diharapkan dapat mempercepat dan memudahkan proses pelaporan kecelakaan dan tindak kriminal sehingga mendapatkan hasil yang lebih baik dan akurat.</p>
<p>&nbsp;</p>
<p>1. Aplikasi Android : Digunakan oleh masyarakat untuk melaporkan kecelakaan kepada pihak kepolisian, alamat pelapor akan otomatis terload, aplikasi android juga bisa digunakan untuk melihat kantor polisi terdekat dengan teknologi AR + LBS.</p>
<p>Demo Aplikasi Android : <a href="https://play.google.com/store/apps/details?id=org.inkubator.radinaldn">https://play.google.com/store/apps/details?id=org.inkubator.radinaldn</a></p>
<p>&nbsp;</p>
<p>2. Aplikasi Web (Responsive web) : Digunakan oleh admin, pihak kepolisian untuk menerima laporan dari masyarakat</p>
<p style="text-align: justify;">Demo Aplikasi Web : <a href="../../../ar-lacak">https://topapp.id/ar-lacak&nbsp;</a>&nbsp; (user : dwiki, password : dwiki)</p>',
        'spesifikasi' => '<p>Kelebihan dari aplikasi yang akan dibangun ini adalah sebagai berikut:</p>
<ol>
<li>Mempermudah pihak kepolisian dalam menerima dan menangani laporan secara cepat</li>
<li>Mempermudah pihak kepolisian dalam menyimpan data laporan, karena data-data tersebut langsung tersimpan di dalam <em>database</em>.</li>
<li>Mempermudah masyarakat dalam membantu korban kecelakaan dengan langsung melaporkan kejadian kepada pihak kepolisian untuk segera ditangani</li>
</ol>',
        'harga' => '5500000',
        'video' => 'FxhhTkXkl7Q',
        'source_code' => 'SourceCode.pdf',
        'demo' => 'www.topapp.id/ar-lacak/',
        'manual_book' => 'MANUAL BOOK APLIKASI.pdf',
        'rancangan' => 'RANCANGAN APLIKASI.pdf',
        'status' => '10',
        'added_by' => '1',
        'created_at' => '1551364390',
        'updated_at' => '1551364390',
    ],
    [
        'id_produk' => '3',
        'nama_produk' => 'Aplikasi klinik kecantikan (Salon)',
        'kategori_produk' => '4',
        'developer' => 'Meiridha Elviana',
        'deskripsi_produk' => '<p>halo</p>
<p>halo&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>halo</p>',
        'fitur_produk' => '<p>haloo</p>
<p>halo</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><em><strong>halo</strong></em></p>',
        'spesifikasi' => '<p>haloo</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>halo</p>',
        'harga' => '3500000',
        'video' => '',
        'source_code' => 'Source Code.zip',
        'demo' => 'topapp.id/beauties',
        'manual_book' => 'MANUAL BOOK APLIKASI.pdf',
        'rancangan' => 'RANCANGAN APLIKASI.pdf',
        'status' => '10',
        'added_by' => '1',
        'created_at' => '1551364390',
        'updated_at' => '1551364390',
    ],
    [
        'id_produk' => '4',
        'nama_produk' => 'Aplikasi Real Count Pilkada',
        'kategori_produk' => '7',
        'developer' => 'Nazruddin Safaat H / Radinal Dwiki N / Aby Wahyu',
        'deskripsi_produk' => '<h2>Latar Belakang</h2>
<p>Pada tahun ini adalah tahun pesta demokrasi untuk negara Indonesia karena akan dilaksanakannya Pemilihan Umum Kepala Daerah (PEMILUKADA) hampir di seluruh daerah di Indonesia. Salah satunya adalah Provinsi Riau. PEMILUKADA adalah salah satu sistem demokrasi yang diadakan setiap lima tahun sekali dengan melakukan pemungutan suara. PEMILUKADA biasanya digunakan untuk menentukan calon Gubernur, Walikota atau Bupati suatu daerah. Kandidat yang memiliki suara terbanyak dari hasil perhitungan suara tersebut adalah yang berhak menjadi kepala daerah.</p>
<p>Hingga sekarang hasil perhitungan suara PEMILUKADA masih dilakukan secara manual. Proses perhitungan suara awalnya dilakukan dari tiap-tiap Tempat Pemungutan Suara (TPS), hasil perhitungan suara dari tiap TPS dikirim ke kelurahan untuk direkap berdasarkan jumlah suara yang masuk di seluruh TPS di bawah kelurahan tersebut. Lalu dari hasil rekap suara di kelurahan tersebut akan dikirim ke kecamatan untuk direkap dengan kelurahan lain oleh Panitia Pemilihan Kecamatan (PPK) di tingkat kecamatan.</p>
<p>Berdasarkan data Komisi Pemilihan Umum (KPU) tahun 2018 tentang pemilihan Gubernur dan Wakil Gubernur Provinsi Riau tahun 2018, diketahui terdapat 12.054 TPS dengan total calon pemilih berjumlah 3.922.086 pemilih. Dengan data yang dijelaskan di atas, perhitungan suara ini membutuhkan waktu yang sangat lama dan sangat tidak efisien karena jumlah suara dan jumlah TPS yang begitu banyak. Sedangkan, banyak pihak membutuhkan informasi yang cepat tentang hasil perolehan suara seperti tim sukses dari setiap pasangan calon (PASLON).</p>
<p>Melihat kebutuhan data dan perlunya penyebaran informasi hasil PEMILUKADA yang cepat, untuk itulah dengan adanya penghitungan suara secara riil (<em>Real Count</em>) atau juga dikenal sebagai tabulasi suara paralel (<em>Parallel Vote Tabulation</em>) merupakan salah satu metode yang berguna untuk memantau dan mempercepat proses penghitungan suara. <em>Real Count</em> merupakan sebuah proses pengumpulan informasi oleh ratusan bahkan ribuan relawan melalui pemantauan langsung saat pemungutan dan perhitungan suara di seluruh TPS yang ada.</p>
<p>Proses <em>Real Count </em>membutuhkan infrastruktur yang memadai agar informasi yang dikirim langsung dapat diketahui oleh tim sukses PASLON. Teknologi terbaru yang bisa digunakan yang untuk proses pengiriman informasi tersebut adalah dengan teknologi <em>Cloud. </em>Jika proses pengiriman informasi menggunakan teknologi <em>Cloud </em>dengan <em>Resource</em> yang tidak terbatas, akan membutuhkan biaya yang mahal. Oleh karena itu, permasalahan <em>Resource</em> yang mahal ini dapat diselesaikan dengan memanfaatkan teknologi <em>Cloud</em> milik Telegram melalui <em>Build Operate and Transfer</em> (BOT) <em>Application Programming Interface</em> (API). Dengan menggunakan BOT ini, sebanyak apapun data yang dikirimkan <em>server</em> dipastikan tidak akan <em>down</em> karena yang menerima data hasil perolehan suara adalah <em>server cloud </em>(<em>Telegram</em>).</p>
<p>&nbsp;</p>',
        'fitur_produk' => '<p>Aplikasi terdiri dari tiga bagian</p>
<ol>
<li>Aplikasi Native Android <em>untuk pihak management pemenangan DAN SAKSI.</em></li>
<li>Menggunakan BOT <em>telegram</em> sebagai sarana PELAPORAN SUARA <em>Real Count</em>.</li>
<li>Aplikasi berbasis web untuk management suara (view) perhitungan suara yang masuk</li>
</ol>
<p>untuk live demo silahkan gunakan username :dwiki, password : dwiki</p>',
        'spesifikasi' => '<p>Ada tiga pengguna yang terlibat dalam Aplikasi <em>Real-Count</em> yang akan dibangun, diantaranya adalah:</p>
<ol>
<li>Saksi</li>
</ol>
<p>Saksi menjadi pengguna utama pada aplikasi <em>Real-count</em> ini. Saksi menggunakan &nbsp;BOT Telegram yang akan dibangun untuk mengirimkan data hasil perolehan suara disetiap TPS yang ada.</p>
<ol start="2">
<li>Pimpinan</li>
</ol>
<p>Pimpinan merupakan pengguna yang memiliki hak akses untuk melihat da mengirimkan data perolehan suara PEMILU pada aplikasi <em>Real-count</em> berbasis android berdasarkan daerah tertentu dan mengetahui daerah mana yang belum mengirimkan perolehan suara.</p>
<ol start="3">
<li>Admin</li>
</ol>
<p>Admin merupakan pengguna yang memiliki hak akses penuh terhadap aplikasi <em>Real-Count </em>berbasis <em>web</em>, admin bertugas mengelola data user, data saksi, data perolehan suara dan laporan.</p>',
        'harga' => '40000000',
        'video' => 'mkNBDMrSemU',
        'source_code' => 'SourceCode_readlcount.pdf',
        'demo' => 'topapp.id/real-count',
        'manual_book' => 'Implementasi_realcount1.pdf',
        'rancangan' => 'Rancangan_realcountfix.pdf',
        'status' => '10',
        'added_by' => '1',
        'created_at' => '1551364390',
        'updated_at' => '1551364390',
    ],
    [
        'id_produk' => '5',
        'nama_produk' => 'Aplikasi Pelaporan kegiatan berbasis Android Menggunakan LBS (SIBCAD)',
        'kategori_produk' => '7',
        'developer' => 'Nazruddin Safaat H / Radinal Dwiki N / Satria Nugraha',
        'deskripsi_produk' => '<p>Politik berasal dari bahasa yunani yaitu &ldquo;polis&rdquo; berarti Negara atau kota dan &ldquo;teta&rdquo; berarti urusan. Secara umum, defenisi politik adalah proses pembentukan dan pembagian kekuasaan dalam masyarakat yang antara lain berwujud proses pembuatan keputusan, khususnya dalam Negara. Dalam melakukan kegiatan politik terdapat suatu organisasi yang berperan penting yaitu partai politik.</p>
<p>Menurut UU No.31 tahun 2002 pasal 1(1), partai politik merupakan organisasi yang dibentuk oleh sekelompok warga Negara Republik Indonesia secara sukarela atas dasar persamaan kehendak dan cita-cita untuk memperjuangkan kepentingan anggota, masyarakat, bangsa dan Negara melalui pemilihan umum. Setiap partai politik memiliki bakal calon anggota dewan (BCAD) yang dapat dicalonkan menjadi anggota DPRD Kabupaten/Kota dan DPRD Provinsi melalui proses pemilihan umum. &nbsp;&nbsp;&nbsp;</p>
<p>Setiap BCAD partai politik harus melakukan kegiatan-kegiatan kampanye untuk menampung aspirasi masyarakat dan menyampaikan program-program kerja yang akan dilakukan jika terpilih menjadi angota DPRD Kabupaten/Kota dan DPRD Provinsi. Kegiatan-kegiatan tersebut harus dilaporkan kepada pimpinan partai politik sebagai bahan evaluasi dan bukti bahwa BCAD tersebut telah melakukan kegiatan-kegiatan di daerah pemilihannya. Laporan tersebut berisi kegiatan apa saja yang dilakukan oleh BCAD, lokasi kegiatan, waktu pelaksanaan kegiatan dan bukti kegiatan berupa gambar.</p>
<p>Namun saat ini dalam pelaporan kegiatan-kegiatan tersebut tidak dapat dilakukan secara <em>real-time</em> karena laporan tersebut dicetak dan disatukan, sehingga pimpinan tidak dapat memastikan apakah BCAD tersebut benar-benar ada dilokasi saat itu. Pimpinan partai politik juga tidak dapat melihat daerah-daerah mana saja yang telah dilakukan kegiatan dan yang belum dilakukan kegiatan oleh BCAD tersebut secara lebih jelas dan terperinci. &nbsp;Disebabkan belum adanya mapping atau pemetaan daerah-daerah kegiatan BCAD. Dan juga rawan terjadinya laporan palsu.</p>
<p>Untuk mengatasi hal tersebut diperlukannya suatu teknologi yang dapat membantu dalam pembuatan laporan-laporan kegiatan BCAD dan menentukan lokasi kegiatan tersebut. Laporan tersebut hanya dapat dibuat pada saat BCAD berada di lokasi kegiatan saat itu juga karena lokasi nya akan langsung terdeteksi. Dengan aplikasi memudahkan BCAD membuat laporan secara <em>real-time</em> dan juga pimpinan dapat melakukan evaluasi kegiatan dengan lebih efektif dan efisien.</p>
<p>Partai Keadilan Sejahtera (PKS) merupakan sebuah partai politik berbasis islam di Indonesia. Partai ini didirikan pada tanggal 20 April 2002. Dewan pimpinan pusat partai PKS terdapat di Jakarta. Tiap-tiap provinsi memiliki dewan pimpinan wilayah termasuk juga provinsi Riau yang berada di jalan Soekarno Hatta no. 24 kecamatan marpoyan damai. Partai PKS dalam mengikuti pemilihan anggota dewan kabupaten/kota dan provinsi memiliki BCAD yang dapat dipilih oleh masyarakat. Setiap BCAD yang melakukan kampanye diharuskan membuat laporan-laporan kegiatannya. &nbsp;<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></p>
<p>Teknologi yang menyediakan layanan-layanan yang dapat mempermudah melihat dan menentukan lokasi atau objek, yaitu <em>Location Based Service (LBS).</em> <em>LBS </em>digunakan untuk mengetahui lokasi berdasarkan titik geografis dari lokasi kita dan lokasi yang diinginkan (Kusuma, 2014). Cara mengaksesnya dengan menggunakan <em>GPS</em> yang ada pada <em>mobile device</em>. Dengan menerapkan teknologi LBS lokasi kegiatan-kegiatan BCAD partai politik dapat ditampilkan dan dilaporkan. Sehingga mempermudah pimpinan partai politik dalam mengontrol dan mengambil kebijakan kedepannya. Pemantauan kegiatan kader juga dapat berjalan efektif dan efisien.</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Location Based Service (LBS) atau layanan berbasis lokasi ini diterapkan dalam sebuah platform android. Android adalah sistem operasi bergerak (mobile operating system) yang mengadopsi sistem operasi Linux, namun telah dimodifikasi (Agustina, 2012). Pada umumnya <em>linux</em> merupakan <em>platform open source, s</em>ehingga bebas untuk dikembangkan dan tidak ada biaya hak penciptaan aplikasi dalam bentuk apapun, hal ini mempermudah para pengembang untuk membuat aplikasi terbaru (Sasmito, 2013).</p>',
        'fitur_produk' => '<p>aplikasi terbagi dua bagian yaitu native android dan aplikasi web dengan keterangan sebagai berikut :</p>
<ol>
<li>Aplikasi yang dibangun untuk BCAD menggunakan <em>platform Android.</em></li>
<li>Aplikasi pimpinan DPW PKS berbasis web.</li>
<li>Menggunakan <em>Google Maps </em>sebagai dasar peta untuk lokasi kegiatan BCAD.</li>
<li>Aplikasi ini menggunakan Location Based Service (LBS).</li>
</ol>',
        'spesifikasi' => '<p>Aplikasi Android dengan Android Studio 3.1.2 dengan menggunakan client server side (php sbg service)</p>
<p>Aplikasi berbasis web dengan menggunakan Framework Yii 2</p>',
        'harga' => '5500000',
        'video' => 'CZp6NkOuOvQ',
        'source_code' => 'SourceCode_ekin.pdf',
        'demo' => 'topapp.id/sibcad',
        'manual_book' => 'UserManual_Sibcad.pdf',
        'rancangan' => 'Rancangan_Sibcad.pdf',
        'status' => '10',
        'added_by' => '1',
        'created_at' => '1551364390',
        'updated_at' => '1551364390',
    ],
    [
        'id_produk' => '37',
        'nama_produk' => 'Aplikasi Penilaian Kinerja Pegawai (SKP)',
        'kategori_produk' => '7',
        'developer' => 'Muhammad Fikry / Nazruddin Safaat H / Radinal Dwiki N',
        'deskripsi_produk' => '<p>Aplikasi ini sudah di pakai oleh Kantor Kementerian Agama Wilayah Riau</p>
<p>lihat di online aplikasi <a href="http://ekinkanwildepagriau.online/">e-kin</a></p>
<p>Aplikasi di play google : <a href="https://play.google.com/store/apps/details?id=com.weLapHarian_5694307">https://play.google.com/store/apps/details?id=com.weLapHarian_5694307</a></p>
<p>Untuk dapat menjalankan aplikasi e-Laporan kinerja ini tentunya tidak dapat dipisahkan dari<br />user/pengguna system yang akan terlibat langsung dengan system itu sendiri, adapun user/pengguna<br />dalam system ini dibagi dalam 3 (tiga) kelompok yaitu :</p>
<ul>
<li>Administrator<br />Administrator selanjutnya akan disebut admin adalah orang yang bertanggung jawab dalam<br />mengadministrasikan system, seperti mendefenisikan pengguna/user yang lain, membuat unit<br />kerja baru, dll, untuk lebih lengkapnya akan dibahas dalam modul admin dihalaman selanjutnya</li>
<li>Pegawai<br />Pegawai yang dimaksud disini adalah seluruh PNS dilingkungan kanwil Kementerian Agama Prov.<br />Riau, untuk tahap ini, Pegawai Non PNS belum terlibat sebagai pengguna/user system,<br />penjelasan lebih rinci mengenai user/pengguna sebagai pegawai akan dibahas pada Modul<br />Pegawai.</li>
<li>Penilai<br />Penilai adalah setiap atasan dari setiap PNS di lingkungan Kanwil Kemenag Prov. Riau, dalam hal<br />ini seorang penilai akan juga sebagai pegawai karena yang bersangkutan adalah PNS yang<br />mempunyai kewajiban untuk melaporkan rencana dan capaian kinerjanya sebagai aparatur sipil<br />Negara. Apa dan bagaimana akan dibahas lebih rinci dalam Modul Penilai dihalaman berikutnya.</li>
</ul>',
        'fitur_produk' => '<p>Aplikasi Bisa di akses melalui komputer/leptop dan smartphone baik secara langsung di browser maupun donwload apk di playstore</p>
<p>&nbsp;</p>',
        'spesifikasi' => '<p>KEBUTUHAN SYSTEM<br />Untuk dapat menjalan aplikasi e-Laporan Kinerja Pegawai Kantor wilayah kementerian agama<br />Prov. Riau dengan baik dan lancar, diperlukan beberapa hal :<br />Kebutuhan Hardware :<br />1. Koneksi internet<br />2. PC/Laptop Pentium 4/setara, keatas<br />3. Kamera/scanner (optional)<br />Kamera/scanner digunakan untuk menscan dokumen/bukti fisik dalam pelaksanaan pekerjaan untuk<br />selanjutnya di upload di aplikasi e-Laporan kinerja, jika kedua perangkat tersebut tidak dimiliki, dapat<br />disiasati dengan menggunakan kamera HP/smart Phone yang bisa terhubung ke perangkat utama<br />system.<br />Kebutuhan Software :<br />1. OS windows 7/setara, keatas<br />2. Browser Crhome, Mozilla Firefox update<br />3. Pdf reader, misal : Adobe reader<br />4. PDF creator, misal : dobpdf<br />Kebutuhan Hardware dan Software diatas adalah standar minimal untuk dapat menjalankan<br />system secara baik, namun jika memiliki perangkat baik software maupun hardware diatas itu, tentu<br />menjadi semakin baik.</p>',
        'harga' => '15000000',
        'video' => 'mkNBDMrSemU',
        'source_code' => 'SourceCode_ekin.pdf',
        'demo' => 'www.ekinkanwildepagriau.online',
        'manual_book' => 'UserManual_ekin.pdf',
        'rancangan' => 'Rancangan_ekin.pdf',
        'status' => '10',
        'added_by' => '1',
        'created_at' => '1551364390',
        'updated_at' => '1551364390',
    ],
    [
        'id_produk' => '38',
        'nama_produk' => 'Aplikasi Pendistribusian Daging Kurban',
        'kategori_produk' => '7',
        'developer' => 'Nazruddin Safaat H / Ratna Sari',
        'deskripsi_produk' => '<p>Teknologi <em>mobile</em> semakin berkembang seiring dengan meningkatnya penggunaan aplikasi <em>mobile</em> dan tersedianya perangkat <em>mobile</em> dengan berbagai sistem operasi seperti Android, IOS, Windows Phone dan Blackberry. Menurut International Data Corporation (IDC), data pengguna perangkat <em>mobile</em> di dunia menunjukkan bahwa Android memiliki pangsa pasar tertinggi di dunia di ikuti oleh IOS dan Windows Phone.</p>
<p>Android adalah sebuah sistem operasi untuk perangkat <em>mobile</em> berbasis Linux yang mencakup sistem operasi <em>middleware</em> dan aplikasi. Android menyediakan <em>platform</em> terbuka (<em>open source</em>) bagi para pengembang untuk menciptakan aplikasi merekasendiri (Tonael dan Belalawe,2015).</p>
<p>Salah satu aplikasi teknologi di perangkat <em>mobile</em> yang banyak di gunakan pada masa sekarang adalah penerapan <em>Location Based Service</em> (LBS, selanjutnya akan ditulis sebagai LBS). LBS adalah penerapan teknologi yang dapat menyajikan layanan informasi sesuai dengan keberadaan lokasi pengguna dengan memanfaatkan <em>Global Positioning System</em> (GPS) yang didapatkan dari <em>device</em> yang dipakai oleh pengguna (Agung dan Gani, 2015).</p>
<p>Masyarakat sangat membutuhkan aplikasi yang dapat menyediakan layanan informasi lokasi. Kebanyakan aplikasi <em>mobile</em> yang ada hanya dapat berjalan pada <em>platform</em> tertentu saja, seperti aplikasi pada Android hanya dapat berjalan di <em>platform</em> Android sementara untuk <em>platform </em>Blackberry dan iOS tidak dapat dijalankan. Pada saat ini perkembangan perangkat <em>mobile</em> yang ada di masyarakat terdiri dari berbagai macam <em>platform</em>. Solusi yang dapat dilakukan adalah mengembangkan aplikasi layanan informasi lokasi yang dapat berjalan pada setiap mobile platform yang ada. <em>Location Based Service</em> (LBS) adalah layanan informasi yang dapat diakses melalui perangkat <em>mobile</em> dengan menggunakan jaringan internet dan dilengkapi kemampuan untuk memanfaatkan lokasi dari perangkat <em>mobile</em> tersebut (Safaat &amp; Putra, 2014).</p>
<p>Dewasa ini daging hewan kurban tidak lagi didistribusikan di daerah sekitar tempat tinggal pekurban. Daging hewan kurban dikalengkan menjadi kornet dan didistribusikan ke daerah-daerah terpencil dengan jumlah pekurban yang minim (desa/kelurahan binaan Rumah Zakat), atau daerah rawan konflik, ataupun daerah korban bencana alam. Informasi pendistribusian daging hewan kurban umumnya dilaporkan dalam bentuk tabel, sedangkan dalam laporan tersebut memuat informasi lokasi, dimana hal itu menjadi alasan kuat untuk dapat direpresentasikan dalam bentuk peta.</p>
<p>Berdasarkan alasan-alasan yang dikemukakan diatas, maka penelitian ini secara khusus akan membahas tentang &ldquo;APLIKASI PENDISTRIBUSIAN KURBAN MENGGUNAKAN <em>LOCATION BASED SERVICE</em> (LBS) DENGAN STUDI KASUS DI RUMAH ZAKAT PEKANBARU&rdquo;</p>',
        'fitur_produk' => '<p>Aplikasi dibagai dua bahagian :</p>
<p>1. Client : Petugas yang mempunyai tugas untuk mendistribusikan daging ke peserta dan lokasi-lokasi distribusi</p>
<p>2. Pihak Management : melihat persebaran distribusi peserta ataupun penerima kurban dalam bentuk titik-titik distribusi yang ditampilkan dalam bentuk maps.</p>',
        'spesifikasi' => '<p>Aplikasi ini akan dititikberatkan pada rumusan masalah berikut ini:</p>
<ol>
<li>Bagaimana menerapkan LBS pada manajemen pendistribusian daging kurban</li>
<li>Bagaimana membangun aplikasi yang menggunakan LBS yang dapat memudahkan pendistribusian daging qurban</li>
</ol>
<p>&nbsp;</p>
<p>Aplikasi ini memiliki batasan masalah sebagai berikut:</p>
<ol>
<li>LBS digunakan untuk merepresentasi lokasi desa/kelurahan binaan tempat pendistribusian daging kurban</li>
<li>Metodologi analisa dan perancangan dibuat berdasarkan orientasi objek dengan menggunakan pemodelan <em>Unified Modelling Language</em> (UML)</li>
<li>Peta digital yang digunakan diperoleh dari Google Maps API</li>
<li>Aplikasi yang dibangun berjalan untuk perangkat <em>mobile</em></li>
</ol>
<p>&nbsp;</p>
<h2>Tujuan Aplikasi</h2>
<ol>
<li>Melaporkan lokasi distribusi daging hewan kurban dalam bentuk representasi visual (peta).</li>
<li>Menerapkan metode LBS pada manajemen pendistribusian daging hewan kurban</li>
<li>Membangun aplikasi yang dapat berjalan secara <em>multiplatform</em><em>.</em></li>
</ol>',
        'harga' => '4000000',
        'video' => 'mkNBDMrSemU',
        'source_code' => 'SourceCode.pdf',
        'demo' => 'www.ruangbelajar.net/apk/',
        'manual_book' => 'Implementasi_apk.pdf',
        'rancangan' => 'Rancangan_apk.pdf',
        'status' => '10',
        'added_by' => '1',
        'created_at' => '1551364390',
        'updated_at' => '1551364390',
    ],
]
        );
    }

    public function safeDown()
    {
        //$this->truncateTable('{{%produk}} CASCADE');
    }
}
