<?php

use yii\db\Schema;
use yii\db\Migration;

class m190228_151356_beritaDataInsert extends Migration
{

    public function init()
    {
        $this->db = 'db';
        parent::init();
    }

    public function safeUp()
    {
        $this->batchInsert('{{%berita}}',
                           ["id_berita", "judul_berita", "inti_berita", "isi_berita", "gambar_berita", "penerbit_berita", "created_at", "updated_at"],
                            [
    [
        'id_berita' => '7',
        'judul_berita' => 'Ubuntu Spotted in ‘Maze Runner: The Death Cure’',
        'inti_berita' => 'You may spot something familiar.',
        'isi_berita' => '<p><strong>If you plan on renting a copy of&nbsp;<em>Maze Runner: The Death Cure</em></strong><em>&nbsp;</em><strong>when it hits home media later this month, you may spot&nbsp;something familiar that&rsquo;ll have you spitting your popcorn out.</strong></p>
<p>An eagle-eyed Reddit user&nbsp;<a href="https://www.reddit.com/user/Mr_M00" target="_blank" rel="noopener">spotted</a>&nbsp;Ubuntu, complete with the Unity desktop, being used in the latest instalment of the&nbsp;<em>Maze Runner</em>&nbsp;film franchise.</p>
<p>I have not seen any of the Maze Runner films (or read the books, but I can&rsquo;t imagine Ubuntu is specified in them) so I&rsquo;ve zero idea about the context for Ubuntu&rsquo;s appearance in &lsquo;<a href="https://en.wikipedia.org/wiki/Maze_Runner:_The_Death_Cure" target="_blank" rel="noopener">Maze Runner: The Death Cure</a>&lsquo;.</p>
<p>But based on the well-worn Hollywood tropes we can see in this screenshot, i.e the green-tinged screen and various command line prompts, I&rsquo;m guessing some sort of&nbsp;<em>&ldquo;hacking&rdquo;</em>&nbsp;is taking place.</p>
<p>Admittedly we&rsquo;re not talking high-level, elite hack0rz here though as if you look at the output of GNOME terminal closely you&rsquo;ll see the user has just run&nbsp;<em>sudo apt upgrade</em>.</p>
<p>For a a film set far into the future the in-world characters certainly take the Ubuntu Long Term Support release well and truly literally. Perhaps the Unity desktop still has a die-hard band of holdouts and followers in the year 2231.</p>
<p>Ubuntu&rsquo;s switch to GNOME Shell desktop could, in theory, make spotting its use &ldquo;in the wild&rdquo;, particularly in TV shows and movies like this, a little more difficult.</p>',
        'gambar_berita' => 'ubuntu-in-the-wild-in-maze-runner-film.jpg',
        'penerbit_berita' => '1',
        'created_at' => '1551364390',
        'updated_at' => '1551364390',
    ],
    [
        'id_berita' => '8',
        'judul_berita' => 'Cara Memakai Android P Bakal seperti iPhone X? ',
        'inti_berita' => 'Android P = iPhone X',
        'isi_berita' => '<p style="text-align: justify;">Sistem operasi Android seri P akan diperkenalkan Google pada Mei mendatang. Namun dari bocoran yang beredar di internet, diduga pengoperasian antarmuka Android P akan menyerupai iPhone X.</p>
<p style="text-align: justify;">Hal ini terlihat dari sebuah cuplikan layar (screenshot) yang beredar di jagat maya. Dari gambar tersebut tampak Google tengah menguji coba panel navigasi yang diduga adalah Android P.</p>
<p style="text-align: justify;">Pada gambar yang beredar tersebut, tak terlihat lagi tombol (soft button) Home pada bagian tengah di bawah layar, layaknya pada Android seri terdahulu.</p>
<p style="text-align: justify;">Tombol tersebut diganti dengan lambang strip kecil (-) yang menyerupai tampilan antarmuka iPhone X. Panel navigasi multitasking Android P diduga akan menyerupai tampilan iPhone X.</p>
<p style="text-align: justify;">Dikutip KompasTekno dari 9to5google, Senin (16/4/2018), kabarnya tombol strip pada gambar yang diduga antarmuka Android P tersebut akan hilang ketika tidak digunakan. Tanda strip ini diduga merupakan tombol navigasi yang memungkinkan pengguna melakukan multi-tasking.</p>
<p style="text-align: justify;">Pada iPhone X, terdapat tombol serupa pada bagian bawah layar, dengan ukuran yang lebih panjang. Tombol ini berguna untuk mengatur tampilan serta mengontrol multi-tasking dengan cara menggulirkannya ke arah atas. Baca juga: 10 Fitur yang Bakal Hadir di Android P</p>
<p style="text-align: justify;">Kendati demikian, belum ada konfirmasi jelas dari Google terkait beredarnya cuplikan layar ini. Bahkan sejumlah rumor mengatakan bahwa Android P akan dilengkapi dengan panel navigasi gesture control.</p>
<p style="text-align: justify;">Android P pun sejatinya masih misterius, Google baru akan memerkenalkan penerus Android Oreo ini pada Mei mendatang, bertepatan dengan ajang tahunan kumpul developer, Google I/O 2018, di Shoreline Amphitheatre, Mountain View, AS.</p>
<p style="text-align: justify;">Belum diketahui apa kepanjangan dari inisial &ldquo;P&rdquo;-nya, tetapi hampir pasti merujuk pada camilan manis seperti yang sudah-sudah. Yang teranyar, netizen menduga kepanjangan &ldquo;P&rdquo; tak lain adalah &ldquo;Popsicle&rdquo; atau dalam Bahasa Indonesia adalah es lilin. Selain penamaan, fitur-fitur Android selanjutnya juga sudah ramai dibicarakan di ranah maya. Baca juga: Google Beri Petunjuk Nama Android P.</p>
<p style="text-align: justify;">Beberapa di antaranya adalah fitur multi-kamera yang mendukung aplikasi, dukungan &ldquo;notch&rdquo; mirip iPhone X, Gmail Smart Replies, tampilan gambar di notifikasi, pemisahan percakapan grup dan personal yang lebih jelas, zooming-text seperti di iPhone, melihat peta indoor melalui aplikasi, kompresi foto, peningkatan password otomatis, hingga garis volume vertikal.<br /><br /></p>',
        'gambar_berita' => '3951286817.jpg',
        'penerbit_berita' => '1',
        'created_at' => '1551364390',
        'updated_at' => '1551364390',
    ],
    [
        'id_berita' => '9',
        'judul_berita' => 'Facebook Habiskan Rp 274 Miliar untuk Pengamanan Mark Zuckerberg',
        'inti_berita' => 'Facebook',
        'isi_berita' => '<p style="text-align: justify;">Mark Zuckerberg adalah kunci dari Facebook, jejaring sosial dengan 2 miliar pengguna aktif saat ini. Jika tak ada Mark Zuckerberg, barangkali Facebook tak akan sebesar hari ini. Karenanya, pengamanan untuk Mark Zuckerberg dinilai sangat penting.</p>
<p style="text-align: justify;">Dari tahun ke tahun, Facebook merogoh kocek semakin besar untuk melindungi sang pendiri sekaligus CEO. Sejak 2015, total biaya pengamanan Mark Zuckerberg mencapai 20 juta dollar AS atau sekitar Rp 274 miliar. Pada 2016, biaya pengamanannya 5,8 juta dollar AS (Rp 79 miliar), lantas pada 2017 membengkak menjadi 9 juta dollar AS (Rp 123 miliar). &ldquo;Biaya keamanan untuk menghadang ancaman keselamatan Mark Zuckerberg yang timbul akibat posisinya sebagai pendiri dan CEO kami,&rdquo; kata perwakilan Facebook. &ldquo;Kami mewajibkan keamanan ini untuk kepentingan perusahaan karena pentingnya Mark Zuckerberg untuk Facebook,&rdquo; ia menegaskan.</p>
<p style="text-align: justify;">Dari Rp 123 miliar biaya pengamanan Mark Zuckerberg, sebanyak 7,3 juta dollar AS (Rp 100 miliar) sendiri untuk bodyguard, pengamanan perjalanan, serta pengamanan di rumah. Pengamanan perjalanan meliputi penerbangan pribadi Mark Zuckerberg ke berbagai tempat, mulai untuk bahan bakar pesawat, konsumsi, hingga fee lainnya, sebagaimana dihimpun KompasTekno, Senin (16/4/2018), dari Gizmodo. Chief Operating Officer (COO) Facebook, Sheryl Sandberg juga diberi anggaran pengamanan. Hanya saja, nominalnya tak sebesar Mark Zuckerberg, yakni &ldquo;hanya&rdquo; 2,3 juta dollar AS (RP 31 miliar). Biaya pengamanan Mark Zuckerberg bisa dibilang sangat tinggi. Sebagai perbandingan, CEO Apple, Tim Cook cuma punya anggaran keamanan sebesar 317.000 dollar AS atau Rp 4,3 miliar.</p>',
        'gambar_berita' => '2723165131.jpg',
        'penerbit_berita' => '1',
        'created_at' => '1551364390',
        'updated_at' => '1551364390',
    ],
    [
        'id_berita' => '10',
        'judul_berita' => 'Alasan pemerintah Belum juga memblokir Facebook',
        'inti_berita' => 'Facebook',
        'isi_berita' => '<p>Beberapa waktu lalu tersebar berita hoaks soal Facebook yang akan diblokir dan ditutup di Indonesia pada 24 April ini. Meski tidak terbukti kebenarannya, pemerintah sejatinya bisa saja memblokir Facebook jika memang bersalah dan merugikan.</p>
<p>Lantas mengapa hal ini tidak dilakukan? Menurut Menurut Direktur Jenderal Aplikasi Informatika (Aptika) Samuel Abrijani Pangarepan, setiap upaya penutupan sebuah layanan macam Facebook harus ada dasarnya yakni pelanggaran atas Undang-undang.</p>
<p>Atau setidaknya ada indikasi meresahkan masyarakat. "Setiap penutupan harus ada dasarnya yakni pelanggaran UU atau sudah meresahkan masyarakat sehingga diputuskan oleh yang punya wewenang untuk ditutup," ungkap Samuel di sela-sela acara deklarasi Gerakan UMKM Jualan Online, di kawasan Thamrin, Selasa (24/4/2018). Samuel menambahkan tindakan penutupan atau pemblokiran harus selalu dilakukan jika terbukti melakukan pelanggaran hukum. Kemudian ia pun membandingkan antara kasus yang mendera Facebook dengan Vimeo dan Tumblr di Indonesia. (Baca juga : Tumblr Diblokir di Indonesia, Ini Penjelasan Kominfo) "Penutupan itu selalu dilakukan karena ada pelanggaran hukum. Itu yang harus dipahami. Vimeo dan Tumblr ada pelanggaran hukumnya. Ini yang harus kita tunggu. Tapi jika meresahkan dan mengganggu kesatuan negara, akan kita tutup," tambah Samuel.&nbsp;</p>
<p>Denda hingga Pemblokiran Menanti Facebook Selain itu, sikap Kominfo selanjutnya pada kasus bocornya data satu juta pengguna Facebook di Indonesia pun akan ditentukan berdasarkan hasil balasan dari surat permintaan yang dilayangkan pemerintah pada Facebook. Perimintaan yang berisi empat poin tersebut diminta untuk dijawab dan dipenuhi Facebook pada 26 April mendatang. " Kita tunggu saja dulu, tanggalnya kan belum lewat. Soalnya kami kan hanya minta penjelasan tambahan dari teguran kedua kemarin.</p>
<p>Karena ditengarai ada beberapa aplikasi juga (yang terlibat), apakah itu sudah dilakukan investigasi atau belum," ungkap Samuel "Jangan berandai-andai, kita lihat saja dulu," tambahnya. Pemerintah memang bisa saja mengambil tindakan tegas memblokir Facebook lantaran data satu juta pengguna Indonesia ikut bocor dalam skandal Cambridge Analytica (CA). Bahkan beberapa kali, Menkominfo Rudiantara pun berkata Kementerian Kominfo tak segan melakukan pemblokiran<br /><br /></p>',
        'gambar_berita' => 'berita.jpg',
        'penerbit_berita' => '1',
        'created_at' => '1551364390',
        'updated_at' => '1551364390',
    ],
    [
        'id_berita' => '11',
        'judul_berita' => 'Microsoft’s Newest OS is Based on Linux',
        'inti_berita' => 'Microsoft’s Newest OS is Based on Linux WOW',
        'isi_berita' => '<p><strong>Microsoft loves Linux so much that it has gone and made its very own, custom Linux kernel.</strong></p>
<p><em>I joke you not!</em></p>
<div class="PullQuote PullQuote--right">
<p>&lsquo;Microsoft loves Linux so much it has made its own, custom Linux kernel&rsquo;</p>
</div>
<p>Announcing the (somewhat unbelievable) news at an event in San Francisco, USA on April 16, Microsoft President Bad Smith said:</p>
<p><em>&ldquo;After 43 years, this is the first day that we are announcing, and will be distributing, a custom Linux kernel.&rdquo;</em></p>
<p>No, it&rsquo;s not April 1. No, he&rsquo;s not joking.</p>
<p>Microsoft is using Linux as part of a new product called&nbsp;<a href="https://azure.microsoft.com/en-us/services/sphere/" target="_blank" rel="noopener">Azure Sphere.</a></p>
<p>Azure Sphere is a new bit of technology from Microsoft designed to protect micro-processors used in small devices and the &lsquo;internet of things&rsquo;, as this video explains:</p>
<p><span class="embed-youtube"><iframe class="youtube-player" src="https://www.youtube.com/embed/iiDF26HNh-Y?version=3&amp;rel=1&amp;fs=1&amp;autohide=2&amp;showsearch=0&amp;showinfo=1&amp;iv_load_policy=1&amp;wmode=transparent" width="750" height="452" allowfullscreen="allowfullscreen" data-mce-fragment="1"></iframe></span></p>
<p>Once you get beyond the &ldquo;omg&rdquo;-ness of &ldquo;Microsoft making its own Linux&rdquo; the actual product itself isn&rsquo;t especially salacious. It&rsquo;s&nbsp;aim is to secure future smart gadgets through a partnership of three parts:</p>
<ul>
<li>A new micro controller unit (<a href="https://en.wikipedia.org/wiki/Microcontroller" target="_blank" rel="noopener">MCU</a>) design</li>
<li>Linux-based Azure Sphere OS</li>
<li>Azure Sphere cloud security</li>
</ul>
<p>Azure Stack OS is the Linux element in this sandwich. It&rsquo;s the operating system that Microsoft has chosen to run on (and help protect) the bespoke micro controller unit designs Microsoft is offering up to chip makers for free.</p>
<div class="PullQuote PullQuote--right">
<p>&lsquo;Microsoft concedes that Windows is too bloated for the task in hand&rsquo;</p>
</div>
<p>Why not&nbsp;<em>Windows 10</em>&nbsp;or the smaller, nimbler&nbsp;<em>Windows 10 for IoT</em>?</p>
<p>According to reports Smith says that Windows, even in its slimmed-down IoT guise, is just too &ldquo;full blown&rdquo; for the tiny task in has in mind:</p>
<p><em>&ldquo;Of course we are the Windows company [but] what we&rsquo;ve recognized is, the best solution for a computer of this size&mdash;in a toy&mdash;is not a full-blown version of Windows. It is what we are creating here.&rdquo;</em></p>
<p>By &lsquo;this&rsquo; size he means the new chip Microsoft has developed. This chip isn&rsquo;t the sort of processor you&rsquo;re going to find in regular PCs, phones, or even single-board computers.</p>
<p>But where this chip is used it&rsquo;s Linux that runs as the OS on them:</p>
<p><em>&ldquo;It is a custom Linux kernel complemented by the kinds of advances that we have created in Windows itself. It&rsquo;s an important step for us. It&rsquo;s an important step, I think, for the industry. And it will enable us to stand behind the technology in a way I believe the world needs.&rdquo;</em></p>
<p>More Linux is always a good thing &mdash; thought clearly here the lure is for device developers to continue building devices with what they know and want (i.e. Linux) but with some added advantages (improved security) and Microsoft leverage (cloud-based updates).</p>
<h4>Don&rsquo;t expect Microsoft Linux on the Desktop, Though</h4>
<p>This news does&nbsp;<strong>not</strong>&nbsp;mean Microsoft is about to branch out and build its very own desktop Linux distro!</p>
<p>It could, and some would argue it should, but it more than likely isn&rsquo;t going to.</p>
<p>Azure Sphere is a pointed, purposeful product designed for a very specific use case. Linux already dominates the embedded market and the &lsquo;internet of things&rsquo; because it is the most flexible, adaptable and malleable OS available.</p>
<h4>Microsoft Loves Linux, Remember?</h4>
<p><a href="https://www.omgubuntu.co.uk/2016/11/microsoft-joined-linux-foundation-no-really" target="_blank" rel="noopener">Microsoft joined the Linux Foundation</a>&nbsp;in 2016. And the software titan has expended a lot of effort in reproaching Linux as an equal rather than a rival, integrating Linux into its cloud offerings, and bringing Bash and Linux tools to the Windows desktop via WSL.</p>
<p>Despite Microsoft&rsquo;s new found respect for Linux raising all manner of muscle twitches from the&nbsp;<a href="https://hairatin.com/en/beard/longer-beard-wiser-men/" target="_blank" rel="noopener">long-beards</a>&nbsp;in the Linux community, the move has, more or less, yet to prove anything other than sincere.</p>
<p>So don&rsquo;t panic about this news. Like a lot of Microsoft efforts it may end up coming to nothing if developers continue to use established services and workflows.</p>
<p><strong><em>It is interesting to see that as Microsoft runs towards Linux so&nbsp;<a href="https://en.wikipedia.org/wiki/Google_Fuchsia" target="_blank" rel="noopener">Google moves away from it</a>&hellip;</em></strong></p>
<p><em><a href="https://azure.microsoft.com/en-us/blog/introducing-microsoft-azure-sphere-secure-and-power-the-intelligent-edge/" target="_blank" rel="noopener">Microsoft</a>&nbsp;(via&nbsp;<a href="http://uk.businessinsider.com/microsoft-azure-sphere-is-powered-by-linux-2018-4" target="_blank" rel="noopener">Business Insider</a>&nbsp;&amp;&nbsp;<a href="https://www.thurrott.com/internet-of-things-iot/156628/microsofts-next-os-based-linux-not-windows" target="_blank" rel="noopener">Thurrot</a>)</em></p>',
        'gambar_berita' => 'microsoft-loves-linux-1-750x422.jpg',
        'penerbit_berita' => '1',
        'created_at' => '1551364390',
        'updated_at' => '1551364390',
    ],
    [
        'id_berita' => '13',
        'judul_berita' => 'Ubuntu 18.04 Makes it Easier to Install Kernel Updates without Rebooting',
        'inti_berita' => 'Ubuntu',
        'isi_berita' => '<p><strong>With Ubuntu 18.04 LTS Canonical is making it super easy to&nbsp;take advantage of Linux kernel live patching.</strong></p>
<p><a href="https://en.wikipedia.org/wiki/Linux_kernel#Live_patching" target="_blank" rel="noopener">Live patching</a>&nbsp;lets you install and apply critical Linux kernel security updates&nbsp;<em>without</em>&nbsp;rebooting your system.</p>
<p>This means you can keep your computer safe at kernel level&nbsp;<em>without</em>&nbsp;any impact on your uptime or productivity.</p>
<p>Live patching is pretty fast, too. Most kernel fixes apply in seconds, and without any interference to whatever it is you&rsquo;re doing.</p>
<div class="PullQuote PullQuote--right">
<p>&lsquo;You can hold-off on rebooting without holding-out on the latest Linux kernel security patches&rsquo;</p>
</div>
<p>Neat, eh?</p>
<h4>Essential on servers, but available for desktop too</h4>
<p>On Linux servers live kernel patching is, naturally, a&nbsp;<em>massive</em>&nbsp;boon. It reduces downtime and maintenance costs while improving overall security and service reliability.</p>
<p>You don&rsquo;t need to be managing servers and systems that have to be accessible and available at all times to know that live patching is something of a no-brainer.</p>
<p>On the Linux desktop live kernel patching is &hellip;Well, it&rsquo;s a little less essential.</p>
<p>In short, it will allow you to be lazy and/or hit your all-time best up-time goal. You can hold-off on rebooting without holding-out on benefiting from the latest Linux kernel security patches.</p>
<p>There are some things that live patching<em>&nbsp;won&rsquo;t</em>&nbsp;do&sup1;, like install and enable new graphics drivers, swap out major modules, or seamlessly transition you to an all-new Linux kernel branch.</p>
<p>But it is useful enough to be worth enabling.</p>
<div class="PullQuote PullQuote--right">
<p>&lsquo;The &lsquo;Canonical Livepatch Service&rsquo; is free to use on up to 3 machines&rsquo;</p>
</div>
<h2>Enable Canonical Livepatch on Ubuntu 18.04 LTS</h2>
<p>You can make use of live patch on Ubuntu 14.04 LTS and 16.04 LTS, both desktop and server, via the command line.</p>
<p>For desktop users in particular Ubuntu 18.04 LTS makes it even easier to enable live kernel patching on Ubuntu thanks to the following new option in&nbsp;<em>Software &amp; Updates:</em></p>
<p><a href="https://www.omgubuntu.co.uk/wp-content/uploads/2018/04/canonical-kernel-live-patch-in-ubuntu-18.04-1.png"><img class="aligncenter size-large wp-image-130477" src="https://www.omgubuntu.co.uk/wp-content/uploads/2018/04/canonical-kernel-live-patch-in-ubuntu-18.04-1-750x563.png" sizes="(max-width: 750px) 100vw, 750px" srcset="https://www.omgubuntu.co.uk/wp-content/uploads/2018/04/canonical-kernel-live-patch-in-ubuntu-18.04-1-750x563.png 750w, https://www.omgubuntu.co.uk/wp-content/uploads/2018/04/canonical-kernel-live-patch-in-ubuntu-18.04-1-300x225.png 300w, https://www.omgubuntu.co.uk/wp-content/uploads/2018/04/canonical-kernel-live-patch-in-ubuntu-18.04-1-768x576.png 768w, https://www.omgubuntu.co.uk/wp-content/uploads/2018/04/canonical-kernel-live-patch-in-ubuntu-18.04-1.png 1024w" alt="canonical kernel live patch option in ubuntu 18.04" width="750" height="563" /></a></p>
<p>You no longer have to use the command line or fetch a token manually. Instead, just pop open the &lsquo;Software &amp; Updates&rsquo; utility, head to the &lsquo;updates&rsquo; tab, and sign in with your Ubuntu One account.</p>
<p>Signing in will automatically fetch a &ldquo;token&rdquo; that lets you use the service for free (see caveats below). When authorised, just tick the &lsquo;Use Canonical live patch to increase security between restarts&rsquo; option and you&rsquo;re done.</p>
<h4>Caveats</h4>
<p>The &lsquo;<a href="https://www.ubuntu.com/server/livepatch" target="_blank" rel="noopener">Canonical Livepatch Service</a>&lsquo; is&nbsp;<strong>free to use for desktop users</strong>, albeit on a maximum of 3 machines per Ubuntu One account.</p>
<p>To use it across more than 3 machines, e.g., enterprise&nbsp;databases, virtual/cloud hosts, and infrastructural services running on Ubuntu, you&rsquo;ll have to talk to Canonical about becoming an&nbsp;<em>Ubuntu&nbsp;</em><em>Advantage&nbsp;</em>customer.</p>
<h4>Summary</h4>
<p>Although live Linux kernel patching isn&rsquo;t something most desktop users will find essential &mdash; reboots on modern systems don&rsquo;t take long &mdash; it&rsquo;s great to see Canonical making it easier for those who need it to opt-in with less effort.</p>
<p>Improved security for all Ubuntu users is always a good thing.</p>
<p>wassalam</p>',
        'gambar_berita' => 'berita1.jpg',
        'penerbit_berita' => '1',
        'created_at' => '1551364390',
        'updated_at' => '1551364390',
    ],
    [
        'id_berita' => '14',
        'judul_berita' => 'Smart-Absen : Next Produk andalan TopApp.id',
        'inti_berita' => 'Aplikasi smart absen : Hadir memamfaatkan Teknologi demi Kemudahan',
        'isi_berita' => '<p>Berikut adalah Gambaran Sistem yang akan dibangun</p>
<p>&nbsp;</p>
<p><iframe src="//www.youtube.com/embed/fGpJ7AOVw98" width="560" height="315" frameborder="0" allowfullscreen="allowfullscreen"></iframe></p>
<p><iframe src="//www.youtube.com/embed/mLP2gWyU4a4" width="560" height="315" frameborder="0" allowfullscreen="allowfullscreen"></iframe></p>
<p>&nbsp;</p>',
        'gambar_berita' => 'smartabsen.jpg',
        'penerbit_berita' => '1',
        'created_at' => '1551364390',
        'updated_at' => '1551364390',
    ],
]
        );
    }

    public function safeDown()
    {
        //$this->truncateTable('{{%berita}} CASCADE');
    }
}
