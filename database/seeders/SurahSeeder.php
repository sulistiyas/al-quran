<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SurahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $surah = [
            [
                "nomor"=> 1,
                "nama"=> "الفاتحة",
                "nama_latin"=> "Al-Fatihah",
                "jumlah_ayat"=> 7,
                "tempat_turun"=> "mekah",
                "arti"=> "Pembukaan",
                "deskripsi"=> "Surat \u003Ci\u003EAl Faatihah\u003C/i\u003E (Pembukaan) yang diturunkan di Mekah dan terdiri dari 7 ayat adalah surat yang pertama-tama diturunkan dengan lengkap  diantara surat-surat yang ada dalam Al Quran dan termasuk golongan surat Makkiyyah. Surat ini disebut \u003Ci\u003EAl Faatihah\u003C/i\u003E (Pembukaan), karena dengan surat inilah dibuka dan dimulainya Al Quran. Dinamakan \u003Ci\u003EUmmul Quran\u003C/i\u003E (induk Al Quran) atau \u003Ci\u003EUmmul Kitaab\u003C/i\u003E (induk Al Kitaab) karena dia merupakan induk dari semua isi Al Quran, dan karena itu diwajibkan membacanya pada tiap-tiap sembahyang.\u003Cbr\u003E Dinamakan pula \u003Ci\u003EAs Sab'ul matsaany\u003C/i\u003E (tujuh yang berulang-ulang) karena ayatnya tujuh dan dibaca berulang-ulang dalam sholat.",
                "audio"=> "https=>//santrikoding.com/storage/audio/001.mp3"
              ],
              [
                "nomor"=> 2,
                "nama"=> "البقرة",
                "nama_latin"=> "Al-Baqarah",
                "jumlah_ayat"=> 286,
                "tempat_turun"=> "madinah",
                "arti"=> "Sapi",
                "deskripsi"=> "Surat \u003Ci\u003EAl Baqarah\u003C/i\u003E yang 286 ayat itu turun di Madinah yang sebahagian besar diturunkan pada permulaan tahun Hijrah, kecuali ayat 281 diturunkan di Mina pada Hajji wadaa' (hajji Nabi Muhammad s.a.w. yang terakhir). Seluruh ayat dari surat Al Baqarah termasuk golongan Madaniyyah, merupakan surat yang terpanjang di antara surat-surat Al Quran yang di dalamnya terdapat pula ayat yang terpancang (ayat 282). Surat ini dinamai \u003Ci\u003EAl Baqarah\u003C/i\u003E karena di dalamnya disebutkan kisah penyembelihan sapi betina yang diperintahkan Allah kepada Bani Israil (ayat 67 sampai dengan 74), dimana dijelaskan watak orang Yahudi pada umumnya. Dinamai \u003Ci\u003EFusthaatul-Quran\u003C/i\u003E (puncak Al Quran) karena memuat beberapa hukum yang tidak disebutkan dalam surat yang lain. Dinamai juga surat  \u003Ci\u003Ealif-laam-miim\u003C/i\u003E karena surat ini dimulai dengan Alif-laam-miim.",
                "audio"=> "https=>//santrikoding.com/storage/audio/002.mp3"
              ],
              [
                "nomor"=> 3,
                "nama"=> "اٰل عمران",
                "nama_latin"=> "Ali 'Imran",
                "jumlah_ayat"=> 200,
                "tempat_turun"=> "madinah",
                "arti"=> "Keluarga Imran",
                "deskripsi"=> "Surat \u003Ci\u003EAli 'Imran\u003C/i\u003E yang terdiri dari 200 ayat ini adalah surat Madaniyyah.  Dinamakan \u003Ci\u003EAli 'Imran\u003C/i\u003E karena memuat kisah keluarga 'Imran yang di dalam kisah itu disebutkan kelahiran Nabi Isa a.s., persamaan kejadiannya dengan Nabi Adam a. s., kenabian dan beberapa mukjizatnya, serta disebut pula kelahiran Maryam puteri 'Imran, ibu dari Nabi Isa a.s. Surat Al Baqarah dan Ali 'Imran ini dinamakan \u003Ci\u003EAz Zahrawaani\u003C/i\u003E (dua yang cemerlang), karena kedua surat ini menyingkapkan hal-hal yang disembunyikan oleh para Ahli Kitab, seperti kejadian dan kelahiran Nabi Isa a.s., kedatangan Nabi Muhammad s.a.w. dan sebagainya.",
                "audio"=> "https=>//santrikoding.com/storage/audio/003.mp3"
              ],
              [
                "nomor"=> 4,
                "nama"=> "النساۤء",
                "nama_latin"=> "An-Nisa'",
                "jumlah_ayat"=> 176,
                "tempat_turun"=> "madinah",
                "arti"=> "Wanita",
                "deskripsi"=> "Surat An Nisaa' yang terdiri dari 176 ayat itu, adalah surat Madaniyyah yang terpanjang sesudah surat Al Baqarah. Dinamakan \u003Ci\u003EAn Nisaa'\u003C/i\u003E karena dalam surat ini banyak dibicarakan hal-hal yang berhubungan dengan wanita serta merupakan surat yang paling membicarakan hal itu dibanding dengan surat-surat yang lain. Surat yang lain banyak juga yang membicarakan tentang hal wanita ialah surat Ath Thalaq. Dalam hubungan ini biasa disebut surat An Nisaa' dengan sebutan=> \u003Ci\u003ESurat An Nisaa' Al Kubraa\u003C/i\u003E (surat An Nisaa' yang besar), sedang  surat Ath Thalaq disebut dengan sebutan=> \u003Ci\u003ESurat An Nisaa' Ash Shughraa\u003C/i\u003E (surat An Nisaa' yang kecil).",
                "audio"=> "https=>//santrikoding.com/storage/audio/004.mp3"
              ],
              [
                "nomor"=> 5,
                "nama"=> "الماۤئدة",
                "nama_latin"=> "Al-Ma'idah",
                "jumlah_ayat"=> 120,
                "tempat_turun"=> "madinah",
                "arti"=> "Hidangan",
                "deskripsi"=> "Surat Al Maa'idah terdiri dari 120 ayat; termasuk golongan surat Madaniyyah. Sekalipun ada ayatnya yang turun di Mekah, namun ayat ini diturunkan sesudah Nabi Muhammad s.a.w. hijrah ke Medinah, yaitu di waktu haji wadaa'. Surat ini dinamakan \u003Ci\u003EAl Maa'idah\u003C/i\u003E (hidangan) karena memuat kisah pengikut-pengikut setia Nabi Isa a.s. meminta kepada Nabi Isa a.s. agar Allah menurunkan untuk mereka Al Maa'idah (hidangan makanan) dari langit (ayat 112). Dan dinamakan \u003Ci\u003EAl Uqud\u003C/i\u003E (perjanjian), karena kata itu terdapat pada ayat pertama surat ini, dimana Allah menyuruh agar hamba-hamba-Nya memenuhi janji prasetia terhadap Allah dan perjanjian-perjanjian yang mereka buat sesamanya. Dinamakan juga \u003Ci\u003EAl Munqidz\u003C/i\u003E (yang menyelamatkan), karena akhir surat ini mengandung kisah tentang Nabi Isa a.s. penyelamat pengikut-pengikut setianya dari azab Allah.",
                "audio"=> "https=>//santrikoding.com/storage/audio/005.mp3"
              ],
              [
                "nomor"=> 6,
                "nama"=> "الانعام",
                "nama_latin"=> "Al-An'am",
                "jumlah_ayat"=> 165,
                "tempat_turun"=> "mekah",
                "arti"=> "Binatang Ternak",
                "deskripsi"=> "Surat Al An'aam (binatang ternak=> unta, sapi, biri-biri dan kambing) yang terdiri atas 165 ayat, termasuk golongan surat Makkiyah, karena hampur seluruh ayat-ayat-Nya diturunkan di Mekah dekat sebelum hijrah. Dinamakan \u003Ci\u003EAl An'aam\u003C/i\u003E karena di dalamnya disebut kata \u003Ci\u003EAn'aam\u003C/i\u003E dalam hubungan dengan adat-istiadat kaum musyrikin, yang menurut mereka binatang-binatang ternak itu dapat dipergunakan untuk mendekatkan diri kepada tuhan mereka. Juga dalam surat ini disebutkan hukum-hukum yang berkenaan dengan binatang ternak itu.",
                "audio"=> "https=>//santrikoding.com/storage/audio/006.mp3"
              ],
              [
                "nomor"=> 7,
                "nama"=> "الاعراف",
                "nama_latin"=> "Al-A'raf",
                "jumlah_ayat"=> 206,
                "tempat_turun"=> "mekah",
                "arti"=> "Tempat Tertinggi",
                "deskripsi"=> "Surat Al A'raaf yang berjumlah 206 ayat termasuk golongan surat Makkiyah, diturunkan sebelum turunnya surat Al An'aam dan termasuk golongan surat \u003Ci\u003EAssab 'uththiwaal\u003C/i\u003E (tujuh surat yang panjang). Dinamakan \u003Ci\u003EAl A'raaf\u003C/i\u003E karena perkataan Al A'raaf terdapat dalam ayat 46 yang mengemukakan tentang keadaan orang-orang yang berada di atas Al A'raaf yaitu=> tempat yang tertinggi di batas surga dan neraka.",
                "audio"=> "https=>//santrikoding.com/storage/audio/007.mp3"
              ],
              [
                "nomor"=> 8,
                "nama"=> "الانفال",
                "nama_latin"=> "Al-Anfal",
                "jumlah_ayat"=> 75,
                "tempat_turun"=> "madinah",
                "arti"=> "Rampasan Perang",
                "deskripsi"=> "Surat Al Anfaal terdiri atas 75 ayat dan termasuk golongan surat-surat Madaniyyah, karena seluruh ayat-ayatnya diturunkan di Madinah. Surat ini dinamakan \u003Ci\u003EAl Anfaal\u003C/i\u003E yang berarti harta rampasan perang berhubung kata \u003Ci\u003EAl Anfaal\u003C/i\u003E terdapat pada permulaan surat ini dan juga persoalan yang menonjol dalam surat ini ialah tentang harta rampasan perang, hukum perang dan hal-hal yang berhubungan dengan peperangan pada umumnya. Menurut riwayat Ibnu Abbas r.a. surat ini diturunkan berkenaan dengan perang Badar Kubra yang terjadi pada tahun kedua hijrah. Peperangan ini sangat penting artinya, karena dialah yang menentukan jalan sejarah Perkembangan Islam. Pada waktu itu umat Islam dengan berkekuatan kecil untuk pertama kali dapat mengalahkan kaum musyrikin yang berjumlah besar, dan berperlengkapan yang cukup, dan mereka dalam peperangan ini memperoleh harta rampasan perang yang tidak sedikit. Oleh sebab itu timbullah masalah bagaimana membagi harta-harta rampasan perang itu, maka kemudian Allah menurunkan ayat pertama dari surat ini.",
                "audio"=> "https=>//santrikoding.com/storage/audio/008.mp3"
              ],
              [
                "nomor"=> 9,
                "nama"=> "التوبة",
                "nama_latin"=> "At-Taubah",
                "jumlah_ayat"=> 129,
                "tempat_turun"=> "madinah",
                "arti"=> "Pengampunan",
                "deskripsi"=> "Surat At Taubah terdiri atas 129 ayat termasuk golongan surat-surat Madaniyyah. Surat ini dinamakan \u003Ci\u003EAt Taubah\u003C/i\u003E yang berarti pengampunan berhubung kata \u003Ci\u003EAt Taubah\u003C/i\u003E berulang kali disebut dalam surat ini. Dinamakan juga dengan \u003Ci\u003EBaraah\u003C/i\u003E yang berarti berlepas diri yang di sini maksudnya pernyataan pemutusan perhubungan, disebabkan kebanyakan pokok pembicaraannya tentang pernyataan pemutusan perjanjian damai dengan kaum musyrikin. \u003Cbr\u003E Di samping kedua nama yang masyhur itu ada lagi beberapa nama yang lain yang merupakan sifat dari surat ini. \u003Cbr\u003E Berlainan dengan surat-surat yang lain, maka pada permulaan surat ini tidak terdapat basmalah, karena surat ini adalah pernyataan perang dengan arti bahwa segenap kaum muslimin dikerahkan untuk memerangi seluruh kaum musyrikin, sedangkan basmalah bernafaskan perdamaian dan cinta kasih Allah. \u003Cbr\u003E Surat ini diturunkan sesudah Nabi Muhammad s.a.w. kembali dari peperangan Tabuk yang terjadi pada tahun 9 H. Pengumuman ini disampaikan oleh Saidina 'Ali r.a. pada musim haji tahun itu juga.",
                "audio"=> "https=>//santrikoding.com/storage/audio/009.mp3"
              ],
              [
                "nomor"=> 10,
                "nama"=> "يونس",
                "nama_latin"=> "Yunus",
                "jumlah_ayat"=> 109,
                "tempat_turun"=> "mekah",
                "arti"=> "Yunus",
                "deskripsi"=> "Surat Yunus terdiri atas 109 ayat, termasuk golongan surat-surat Makkiyyah kecuali ayat 40, 94, 95, yang diturunkan pada masa Nabi Muhmmad s.a.w. berada di Madinah. Surat ini dinamai \u003Ci\u003Esurat Yunus\u003C/i\u003E karena dalam surat ini terutama ditampilkan kisah Nabi Yunus a.s. dan pengikut-pengikutnya yang teguh imannya.",
                "audio"=> "https=>//santrikoding.com/storage/audio/010.mp3"
              ],
              [
                "nomor"=> 11,
                "nama"=> "هود",
                "nama_latin"=> "Hud",
                "jumlah_ayat"=> 123,
                "tempat_turun"=> "mekah",
                "arti"=> "Hud",
                "deskripsi"=> "Surat Huud termasuk golongan surat-surat Makkiyyah, terdiri dari 123 ayat diturunkan sesudah surat Yunus. Surat ini dinamai \u003Ci\u003Esurat Huud\u003C/i\u003E karena ada hubungan dengan terdapatnya kisah Nabi Huud a.s. dan kaumnya dalam surat ini terdapat juga kisah-kisah Nabi yang lain, seperti kisah Nuh a.s., Shaleh a.s., Ibrahim a.s., Luth a.s., Syu'aib a.s. dan Musa a.s.",
                "audio"=> "https=>//santrikoding.com/storage/audio/011.mp3"
              ],
              [
                "nomor"=> 12,
                "nama"=> "يوسف",
                "nama_latin"=> "Yusuf",
                "jumlah_ayat"=> 111,
                "tempat_turun"=> "mekah",
                "arti"=> "Yusuf",
                "deskripsi"=> " Surat Yusuf ini terdiri atas 111 ayat, termasuk golongan surat-surat Makkiyyah karena diturunkan di Mekah sebelum hijrah. Surat ini dinamakan \u003Ci\u003Esurat Yusuf\u003C/i\u003E adalah karena titik berat dari isinya mengenai riwayat Nabi Yusuf a.s.  Riwayat tersebut salah satu di antara cerita-cerita ghaib yang diwahyukan kepada Nabi Muhammad s.a.w. sebagai mukjizat bagi beliau, sedang beliau sebelum diturunkan surat ini tidak mengetahuinya.  Menurut riwayat Al Baihaqi dalam kitab \u003Ci\u003EAd Dalail\u003C/i\u003E bahwa segolongan orang Yahudi masuk agama Islam sesudah mereka mendengar cerita Yusuf a.s. ini, karena sesuai dengan cerita-cerita yang mereka ketahui. Dari cerita Yusuf a.s. ini, Nabi Muhammad s.a.w. mengambil pelajaran-pelajaran yang banyak dan merupakan penghibur terhadap beliau dalam menjalankan tugasnya.",
                "audio"=> "https=>//santrikoding.com/storage/audio/012.mp3"
              ],
              [
                "nomor"=> 13,
                "nama"=> "الرّعد",
                "nama_latin"=> "Ar-Ra'd",
                "jumlah_ayat"=> 43,
                "tempat_turun"=> "madinah",
                "arti"=> "Guruh",
                "deskripsi"=> "Surat Ar Ra'd ini terdiri atas 43 ayat termasuk golongan surat-surat Makkiyyah. Surat ini dinamakan \u003Ci\u003EAr Ra'd\u003C/i\u003E yang berarti \u003Ci\u003Eguruh\u003C/i\u003E karena dalam ayat 13 Allah berfirman yang artinya \u003Ci\u003EDan guruh itu bertasbih sambil memuji-Nya\u003C/i\u003E, menunjukkan sifat kesucian dan kesempurnaan Allah s.w.t.  Dan lagi sesuai dengan sifat Al Quran yang mengandung ancaman dan harapan, maka demikian pulalah halnya bunyi guruh itu menimbulkan kecemasan dan harapan kepada manusia. Isi yang terpenting dari surat ini ialah bahwa bimbingan Allah kepada makhluk-Nya bertalian erat dengan hukum sebab dan akibat. Bagi Allah s.w.t. tidak ada pilih kasih dalam menetapkan hukuman. Balasan atau hukuman adalah akibat dan ketaatan atau keingkaran terhadap hukum Allah.",
                "audio"=> "https=>//santrikoding.com/storage/audio/013.mp3"
              ],
              [
                "nomor"=> 14,
                "nama"=> "ابرٰهيم",
                "nama_latin"=> "Ibrahim",
                "jumlah_ayat"=> 52,
                "tempat_turun"=> "mekah",
                "arti"=> "Ibrahim",
                "deskripsi"=> "Surat Ibrahim ini terdiri atas 52 ayat, termasuk golongan surat-surat Makkiyyah karena diturunkan di Mekah sebelum Hijrah. Dinamakan \u003Ci\u003EIbrahim\u003C/i\u003E, karena surat ini mengandung doa Nabi Ibrahim a.s. yaitu ayat 35 sampai dengan 41. Do'a ini isinya antara lain=> permohonan agar keturunannya mendirikan shalat, dijauhkan dari menyembah berhala-berhala dan agar Mekah dan daerah sekitarnya menjadi daerah yang aman dan makmur. Doa Nabi Ibrahim a.s. ini telah diperkenankan oleh Allah s.w.t. sebagaimana telah terbukti keamanannya sejak dahulu sampai sekarang. Do'a tersebut dipanjatkan beliau ke hadirat Allah s.w.t. sesudah selesai membina Ka'bah bersama puteranya Ismail a.s., di dataran tanah Mekah yang tandus.",
                "audio"=> "https=>//santrikoding.com/storage/audio/014.mp3"
              ],
              [
                "nomor"=> 15,
                "nama"=> "الحجر",
                "nama_latin"=> "Al-Hijr",
                "jumlah_ayat"=> 99,
                "tempat_turun"=> "mekah",
                "arti"=> "Hijr",
                "deskripsi"=> "Surat ini terdiri atas 99 ayat, termasuk golongan surat-surat Makkiyyah,  karena diturunkan di Mekah sebelum hijrah. Al Hijr  adalah nama  sebuah daerah  pegunungan yang didiami zaman dahulu  oleh kaum  Tsamud terletak  di  pinggir  jalan antara Madinah dan Syam (Syria).\u003Cbr\u003E Nama surat ini diambil dari nama daerah pegunungan itu, berhubung nasib  penduduknya yaitu  kaum Tsamud  diceritakan pada ayat  80 sampai  dengan 84,  mereka  telah  dimusnahkan Allah  s.w.t.,  karena  mendustakan  Nabi  Shaleh  a.s.  dan berpaling   dari ayat-ayat  Allah. Dalam  surat ini terdapat juga kisah-kisah  kaum yang lain yang telah dibinasakan oleh Allah seperti  kaum Luth  a.s. dan kaum Syu'aib a.s. Dari ke semua kisah-kisah  itu dapat  diambil pelajaran bahwa orang-orang  yang  menentang  ajaran  rasul-rasul  akan  mengalami kehancuran.",
                "audio"=> "https=>//santrikoding.com/storage/audio/015.mp3"
              ],
              [
                "nomor"=> 16,
                "nama"=> "النحل",
                "nama_latin"=> "An-Nahl",
                "jumlah_ayat"=> 128,
                "tempat_turun"=> "mekah",
                "arti"=> "Lebah",
                "deskripsi"=> "Surat ini terdiri atas 128 ayat, termasuk golongan surat-surat Makkiyyah. Surat ini dinamakan \u003Ci\u003EAn Nahl\u003C/i\u003E yang berarti \u003Ci\u003Elebah\u003C/i\u003E karena di dalamnya, terdapat firman Allah s.w.t. ayat 68 yang artinya => \"Dan Tuhanmu mewahyukan kepada lebah.\" Lebah adalah makhluk Allah yang banyak memberi manfaat  dan kenikmatan kepada manusia. Ada persamaan antara madu yang dihasilkan oleh lebah dengan Al Quranul Karim. Madu berasal dari bermacam-macam sari bunga dan dia menjadi obat bagi bermacam-macam penyakit manusia (lihat ayat 69). Sedang Al Quran mengandung inti sari dari kitab-kitab yang telah diturunkan kepada Nabi-nabi zaman dahulu ditambah dengan ajaran-ajaran yang diperlukan oleh semua bangsa sepanjang masa untuk mencapai kebahagiaan dunia dan akhirat. (Lihat surat (10) Yunus ayat 57 dan surat (17) Al Isra' ayat  82). Surat ini dinamakan pula \"An Ni'am\" artinya nikmat-nikmat, karena di dalamnya Allah menyebutkan pelbagai macam nikmat untuk hamba-hamba-Nya.",
                "audio"=> "https=>//santrikoding.com/storage/audio/016.mp3"
              ],
              [
                "nomor"=> 17,
                "nama"=> "الاسراۤء",
                "nama_latin"=> "Al-Isra'",
                "jumlah_ayat"=> 111,
                "tempat_turun"=> "mekah",
                "arti"=> "Memperjalankan Malam Hari",
                "deskripsi"=> "Surat ini terdiri atas 111 ayat, termasuk golongan surat-surat Makkiyyah. Dinamakan dengan \u003Ci\u003EAl Israa'\u003C/i\u003E yang berarti \u003Ci\u003Ememperjalankan di malam hari\u003C/i\u003E, berhubung peristiwa Israa' Nabi Muhammad s.a.w. di Masjidil Haram di Mekah ke Masjidil Aqsha di Baitul Maqdis dicantumkan pada ayat pertama dalam surat ini. Penuturan cerita Israa' pada permulaan surat ini, mengandung isyarat bahwa Nabi Muhammad s.a.w. beserta umatnya kemudian hari akan mencapai martabat yang tinggi dan akan menjadi umat yang besar.\u003Cbr\u003E Surat ini dinamakan pula dengan \u003Ci\u003EBani Israil\u003C/i\u003E artinya \u003Ci\u003Eketurunan Israil\u003C/i\u003E berhubung dengan permulaan surat ini, yakni pada ayat kedua sampai dengan ayat kedelapan dan kemudian dekat akhir surat yakni pada ayat 101 sampai dengan ayat 104, Allah menyebutkan tentang Bani Israil yang setelah menjadi bangsa yang kuat lagi besar lalu menjadi bangsa yang terhina karena menyimpang dari ajaran Allah s.w.t. Dihubungkannya kisah Israa' dengan riwayat \u003Ci\u003EBani Israil\u003C/i\u003E pada surat ini, memberikan peringatan bahwa umat Islam akan mengalami keruntuhan, sebagaimana halnya Bani Israil, apabila mereka juga meninggalkan ajaran-ajaran agamanya.",
                "audio"=> "https=>//santrikoding.com/storage/audio/017.mp3"
              ],
              [
                "nomor"=> 18,
                "nama"=> "الكهف",
                "nama_latin"=> "Al-Kahf",
                "jumlah_ayat"=> 110,
                "tempat_turun"=> "mekah",
                "arti"=> "Goa",
                "deskripsi"=> "Surat  ini terdiri atas 110 ayat, termasuk  golongan  surat-surat Makkiyyah. Dinamai \u003Ci\u003EAl-Kahfi\u003C/i\u003E artinya \u003Ci\u003EGua\u003C/i\u003E dan \u003Ci\u003EAshhabul Kahfi\u003C/i\u003E yang artinya \u003Ci\u003EPenghuni-Penghuni Gua\u003C/i\u003E. Kedua nama ini diambil dari cerita yang terdapat dalam surat ini pada ayat 9 sampai dengan 26, tentang beberapa orang pemuda yang tidur dalam gua bertahun-tahun lamanya. Selain cerita tersebut, terdapat pula beberapa buah cerita dalam surat ini, yang kesemuanya mengandung i'tibar dan pelajaran-pelajaran yang amat berguna bagi kehidupan manusia. Banyak hadist-hadist Rasulullah s.a.w. yang menyatakan keutamaan membaca surat ini.",
                "audio"=> "https=>//santrikoding.com/storage/audio/018.mp3"
              ],
              [
                "nomor"=> 19,
                "nama"=> "مريم",
                "nama_latin"=> "Maryam",
                "jumlah_ayat"=> 98,
                "tempat_turun"=> "mekah",
                "arti"=> "Maryam",
                "deskripsi"=> "Surat Maryam terdiri atas 98 ayat, termasuk golongan surat-surat Makkiyyah, karena hampir seluruh ayatnya diturunkan sebelum Nabi Muhammad s.a.w. hijrah ke Madinah, bahkan sebelum sahabat-sahabat beliau hijrah ke negeri Habsyi. Menurut riwayat Ibnu Mas'ud, Ja'far bin Abi Thalib membacakan permulaan surat Maryam ini kepada raja Najasyi dan pengikut-pengikutnya di waktu ia ikut hijrah bersama-sama sahabat-sahabat yang lain ke negeri Habsyi.\u003Cbr\u003ESurat ini dinamai \u003Ci\u003EMaryam\u003C/i\u003E, karena surat ini mengandung kisah Maryam, ibu Nabi Isa a.s. yang serba ajaib, yaitu melahirkan puteranya lsa a.s., sedang ia sebelumnya belum pernah dikawini atau dicampuri oleh seorang laki-laki pun. Kelahiran Isa a.s. tanpa bapa, merupakan suatu bukti kekuasaan Allah s.w.t.  Pengutaraan kisah Maryam sebagai kejadian yang luar biasa dan ajaib dalam surat ini, diawali dengan kisah kejadian yang luar biasa dan ajaib pula, yaitu dikabulkannya doa Zakaria a.s. oleh Allah s.w.t., agar beliau dianugerahi seorang putera sebagai pewaris dan pelanjut cita-cita dan kepercayaan beliau, sedang usia beliau sudah sangat tua dan isteri beliau seorang yang mandul yang menurut ukuran ilmu biologi tidak mungkin akan terjadi.",
                "audio"=> "https=>//santrikoding.com/storage/audio/019.mp3"
              ],
              [
                "nomor"=> 20,
                "nama"=> "طٰهٰ",
                "nama_latin"=> "Taha",
                "jumlah_ayat"=> 135,
                "tempat_turun"=> "mekah",
                "arti"=> "Taha",
                "deskripsi"=> "Surat Thaahaa terdiri atas 135 ayat, diturunkan sesudah diturunkannya surat Maryam, termasuk golongan surat-surat Makkiyyah. Surat ini dinamai \u003Ci\u003EThaahaa\u003C/i\u003E, diambil dari perkataan yang berasal dan ayat pertama surat ini. Sebagaimana yang lazim terdapat pada surat-surat yang memakai huruf-huruf abjad pada permulaannya, di mana huruf tersebut seakan-akan merupakan pemberitahuan Allah kepada orang-orang yang membacanya, bahwa sesudah huruf itu akan dikemukakan hal-hal yang  sangat penting diketahui, maka demikian pula halnya dengan ayat-ayat yang terdapat sesudah huruf \u003Ci\u003Ethaahaa\u003C/i\u003E dalam surat ini. Allah menerangkan bahwa Al Quran merupakan peringatan bagi manusia, wahyu dari Allah, Pencipta semesta alam. Kemudian Allah menerangkan kisah beberapa orang nabi; akibat-akibat yang telah ada akan dialami oleh orang-orang yang percaya kepada Allah dan orang-orang yang mengingkari-Nya, baik di dunia maupun di akhirat. Selain hal-hal tersebut di atas, maka surat ini mengandung pokok-pokok isi sebagai berikut=>",
                "audio"=> "https=>//santrikoding.com/storage/audio/020.mp3"
              ],
              [
                "nomor"=> 21,
                "nama"=> "الانبياۤء",
                "nama_latin"=> "Al-Anbiya'",
                "jumlah_ayat"=> 112,
                "tempat_turun"=> "mekah",
                "arti"=> "Para Nabi",
                "deskripsi"=> "Surat Al Anbiyaa' yang terdiri atas 112 ayat, termasuk golongan surat Makkiyyah. Dinamai surat ini dengan \u003Ci\u003Eal anbiyaa'\u003C/i\u003E(nabi-nabi), karena surat ini mengutarakan kisah beberapa orang nabi. Permulaan surat Al Anbiyaa' menegaskan bahwa manusia lalai dalam menghadapi hari berhisab, kemudian berhubung adanya pengingkaran kaum musyrik Mekah terhadap wahyu yang dibawa Nabi Muhammad s.a.w. maka ditegaskan Allah, kendatipun nabi-nabi itu manusia biasa, akan tetapi masing-masing mereka adalah manusia yang membawa wahyu yang pokok ajarannya adalah tauhid, dan keharusan manusia menyembah Allah Tuhan Penciptanya. Orang yang tidak mau mengakui kekuasaan Allah dan mengingkari ajaran yang dibawa oleh nabi-nabi itu, akan diazab Allah didunia dan di akhirat nanti. Kemudian dikemukakan kisah beberapa orang nabi dengan umatnya. Akhirnya surat itu ditutup dengan seruan agar kaum musyrik Mekah percaya kepada ajaran yang dibawa Muhammad s.a.w supaya tidak mengalami apa yang telah dialami oleh umat-umat yang dahulu.",
                "audio"=> "https=>//santrikoding.com/storage/audio/021.mp3"
              ],
              [
                "nomor"=> 22,
                "nama"=> "الحج",
                "nama_latin"=> "Al-Hajj",
                "jumlah_ayat"=> 78,
                "tempat_turun"=> "madinah",
                "arti"=> "Haji",
                "deskripsi"=> "Surat Al Hajj, termasuk golongan surat-surat Madaniyyah, terdiri atas 78 ayat, sedang menurut pendapat sebahagian ahli tafsir termasuk golongan surat-surat Makkiyah. Sebab perbedaan ini ialah karena sebahagian ayat-ayat surat ini ada yang diturunkan di Mekah dan sebahagian lagi diturunkan di Madinah. \u003Cbr\u003EDinamai surat ini \u003Ci\u003EAl Hajj\u003C/i\u003E, karena surat ini mengemukakan hal-hal yang berhubungan dengan ibadat haji, seperti ihram, thawaf, sa'i, wuquf di Arafah, mencukur rambut, syi'ar-syi'ar Allah, faedah-faedah dan hikmah-hikmah disyari'atkannya haji. Ditegaskan pula bahwa ibadat haji itu telah disyari'atkan di masa Nabi Ibrahim a.s., dan Ka'bah didirikan oleh Nabi Ibrahim a.s. bersama puteranya Ismail a.s.\u003Cbr\u003EMenurut Al Ghaznawi, surat Al Hajj termasuk di antara surat- surat yang ajaib, diturunkan di malam dan di siang hari, dalam musafir dan dalam keadaan tidak musafir, ada ayat-ayat yang diturunkan di Mekah dan ada pula yang diturunkan di Madinah, isinya ada yang berhubungan dengan peperangan dan ada pula yang berhubungan dengan perdamaian, ada ayat-ayatnya yang muhkam dan ada pula yang mutasyabihaat.",
                "audio"=> "https=>//santrikoding.com/storage/audio/022.mp3"
              ],
              [
                "nomor"=> 23,
                "nama"=> "المؤمنون",
                "nama_latin"=> "Al-Mu'minun",
                "jumlah_ayat"=> 118,
                "tempat_turun"=> "mekah",
                "arti"=> "Orang-Orang Mukmin",
                "deskripsi"=> "Surat Al Mu'minuun terdiri atas 118 ayat, termasuk golongan surat-surat Makkiyyah. Dinamai \u003Ci\u003EAl Mu'minuun\u003C/i\u003E, karena permulaan ayat ini manerangkan bagaimana seharusnya sifat-sifat orang mukmin yang menyebabkan keberuntungan mereka di akhirat dan ketenteraman jiwa mereka di dunia. Demikian tingginya sifat-sifat itu, hingga ia telah menjadi akhlak bagi Nabi Muhammad s.a.w.",
                "audio"=> "https=>//santrikoding.com/storage/audio/023.mp3"
              ],
              [
                "nomor"=> 24,
                "nama"=> "النّور",
                "nama_latin"=> "An-Nur",
                "jumlah_ayat"=> 64,
                "tempat_turun"=> "madinah",
                "arti"=> "Cahaya",
                "deskripsi"=> "Surat An Nuur terdiri atas 64 ayat, dan termasuk golongan surat-surat Madaniyah. Dinamai \u003Ci\u003EAn Nuur\u003C/i\u003E yang berarti \u003Ci\u003ECahaya\u003C/i\u003E, diambil dari kata An Nuur yang terdapat pada ayat ke 35. Dalam ayat ini, Allah s.w.t. menjelaskan tentang Nuur Ilahi, yakni Al Quran yang mengandung petunjuk-petunjuk. Petunjuk-petunjuk Allah itu, merupakan cahaya yang terang benderang menerangi alam semesta. Surat ini sebagian besar isinya memuat petunjuk- petunjuk Allah yang berhubungan dengan soal kemasyarakatan dan rumah tangga.",
                "audio"=> "https=>//santrikoding.com/storage/audio/024.mp3"
              ],
              [
                "nomor"=> 25,
                "nama"=> "الفرقان",
                "nama_latin"=> "Al-Furqan",
                "jumlah_ayat"=> 77,
                "tempat_turun"=> "mekah",
                "arti"=> "Pembeda",
                "deskripsi"=> "Surat ini terdiri atas 77 ayat, termasuk golongan surat-surat Makkiyah. Dinamai \u003Ci\u003EAl Furqaan\u003C/i\u003E yang artinya \u003Ci\u003Epembeda\u003C/i\u003E, diambil dari kata \u003Ci\u003EAl Furqaan\u003C/i\u003E yang terdapat pada ayat pertama surat ini. Yang dimaksud dengan Al Furqaan dalam ayat ini ialah Al Quran.\u003Cbr\u003E Al Quran dinamakan Al Furqaan karena dia membedakan antara yang haq dengan yang batil. MAka pada surat ini pun terdapat ayat-ayat yang membedakan antara kebenaran ke-esaan Allah s.w.t. dengan kebatilan kepercayaan syirik.",
                "audio"=> "https=>//santrikoding.com/storage/audio/025.mp3"
              ],
              [
                "nomor"=> 26,
                "nama"=> "الشعراۤء",
                "nama_latin"=> "Asy-Syu'ara'",
                "jumlah_ayat"=> 227,
                "tempat_turun"=> "mekah",
                "arti"=> "Para Penyair",
                "deskripsi"=> "Surat ini terdiri dari 227 ayat termasuk golongan surat-surat Makkiyyah. Dinamakan \u003Ci\u003EAsy Syu'araa'\u003C/i\u003E (kata jamak dari \u003Ci\u003EAsy Syaa'ir\u003C/i\u003E yang berarti penyair) diambil dari kata \u003Ci\u003EAsy Syuaraa'\u003C/i\u003E yang terdapat pada ayat 224, yaitu pada bagian terakhir surat ini, di kala Allah s.w.t. secara khusus menyebutkan kedudukan penyair- penyair. Para penyair-penyair itu mempunyai sifat-sifat yang jauh berbeda dengan para rasul-rasul; mereka diikuti oleh orang-orang yang sesat dan mereka suka memutar balikkan lidah dan mereka tidak mempunyai pendirian, perbuatan mereka tidak sesuai dengan tidak mempunyai pendirian, perbuatan mereka tidak sesuai dengan apa yang mereka ucapkan. Sifat-sifat yang demikian tidaklah sekali-kali terdapat pada rasul-rasul. Oleh karena demikian tidak patut bila Nabi Muhammad s.a.w. dituduh sebagai penyair, dan Al Quran dituduh sebagai syair, Al Quran adalah wahyu Allah, bukan buatan manusia.",
                "audio"=> "https=>//santrikoding.com/storage/audio/026.mp3"
              ],
              [
                "nomor"=> 27,
                "nama"=> "النمل",
                "nama_latin"=> "An-Naml",
                "jumlah_ayat"=> 93,
                "tempat_turun"=> "mekah",
                "arti"=> "Semut-semut",
                "deskripsi"=> "Surat An Naml terdiri atas 98 ayat, termasuk golongan surat- surat Makkiyyah dan diturunkan sesudah surat Asy Syu'araa'. Dinamai dengan \u003Ci\u003EAn Naml\u003C/i\u003E, karena pada ayat 18 dan 19 terdapat perkataan \u003Ci\u003EAn Naml\u003C/i\u003E (semut), di mana raja semut mengatakan kepada anak buahnya agar masuk sarangnya masing-masing, supaya jangan terpijak oleh Nabi Sulaiman a.s. dan tentaranya yang akan lalu di tempat itu. Mendengar perintah raja semut kepada anak buahnya itu, Nabi Sulaiman tersenyum dan ta'jub atas keteraturan kerajaan semut itu dan beliau mengucapkan syukur kepada Tuhan Yang Maba Kuasa yang telah melimpahkan nikmat kepadanya, berupa kerajaan, kekayaan, memahami ucapan-ucapan binatang, mempunyai tentara yang terdiri atas jin, manusia, burung dan sebagainya. Nabi Sulaiman a.s. yang telah diberi Allah nikmat yang besar itu tidak merasa takabur dan sombong dan sebagai seorang hamba Allah mohon agar Allah memasukkannya ke dalam golongan orang-orang yang saleh. Allah s.w.t. menyebut binatang semut dalam surat ini agar manusia mengambil pelajaran dari kehidupan semut itu. Semut adalah binatang yang hidup berkelompok di dalam tanah, membuat liang dan ruang yang bertingkat-tingkat sebagai rumah dan gudang tempat menyimpan makanan musim dingin. Kerapian dan kedisiplinan yang terdapat dalam kerajaan semut ini, dinyatakan Allah dalam ayat ini dengan bagaimana rakyat semut mencari perlindungan segera agar jangan terpijak oleh Nabi Sulaiman a.s dan tentaranya, setelah menerima peringatan dari rajanya. Secara tidak langsung Allah mengingatkan juga kepada manusia agar dalam berusaha untuk mencukupkan kebutuhan sehari-hari, mementingkan pula kemaslahatan bersama dan sebagainya, rakyat semut mempunyai organisasi dan kerja sama yang baik pula. Dengan mengisahkan kisah Nabi Sulaiman a.s. dalam surat ini Allah mengisyaratkan hari depan dan kebesaran Nabi Muhammad s.a.w. Nabi Sulaiman a.s. sebagai seorang nabi, rasul dan raja yang dianugerahi kekayaan yang melimpah ruah, begitu pula Nabi Muhammad s.a.w. sebagai seorang nabi, rasul dan seoramg kepala negara yang ummi' dan miskin akan berhasil membawa dan memimpin umatnya ke jalan Allah.",
                "audio"=> "https=>//santrikoding.com/storage/audio/027.mp3"
              ],
              [
                "nomor"=> 28,
                "nama"=> "القصص",
                "nama_latin"=> "Al-Qasas",
                "jumlah_ayat"=> 88,
                "tempat_turun"=> "mekah",
                "arti"=> "Kisah-Kisah",
                "deskripsi"=> "Surat Al Qashash terdiri atas 88 ayat termasuk golongan surat-surat Makkiyyah. Dinamai dengan \u003Ci\u003EAl Qashash\u003C/i\u003E, karena pada ayat 25 surat ini terdapat kata \u003Ci\u003EAl Qashash\u003C/i\u003E yang berarti \u003Ci\u003Ecerita\u003C/i\u003E. Ayat ini menerangkan bahwa setelah Nabi Musa a.s. bertemu dengan Nabi Syua'ib a.s. ia menceritakan cerita yang berhubungan  dengan dirinya sendiri, yakni pengalamannya dengan Fir'aun, sampai waktu ia diburu oleh Fir'aun karena membunuh seseorang dari bangsa Qibthi tanpa disengaja, Syua'ib a.s. menjawab bahwa Musa a.s. telah selamat dari pengejaran  orang-orang zalim. Turunnya ayat 25 surat ini amat besar artinya bagi Nabi Muhammad s.a.w. dan bagi sahabat-sahabat yang melakukan hijrah ke Madinah, yang menambah keyakinan mereka, bahwa akhirnya orang-orang Islamlah yang menang, sebab ayat ini menunjukkan bahwa barangsiapa yang berhijrah dari tempat musuh untuk mempertahankan keimanan, pasti akan berhasil dalam perjuangannya menghadapi musuh-musuh agama. Kepastian kemenangan bagi kaum muslimin itu, ditegaskan pada bagian akhir surat ini yang mengandung bahwa setelah hijrah ke Madinah kaum muslimin akan kembali ke Mekah sebagai pemenang dan penegak agama Allah. Surat Al Qashash ini adalah surat yang paling lengkap memuat cerita Nabi Musa a.s. sehingga menurut suatu riwayat, surat ini dinamai juga dengan surat Musa.",
                "audio"=> "https=>//santrikoding.com/storage/audio/028.mp3"
              ],
              [
                "nomor"=> 29,
                "nama"=> "العنكبوت",
                "nama_latin"=> "Al-'Ankabut",
                "jumlah_ayat"=> 69,
                "tempat_turun"=> "mekah",
                "arti"=> "Laba-Laba",
                "deskripsi"=> "Surat Al 'Ankabuut terdiri atas 69 ayat, termasuk golongan surat-surrat Makkiyah. Dinamai \u003Ci\u003EAl 'Ankabuut\u003C/i\u003E berhubung terdapatnya perkataan \u003Ci\u003EAl 'Ankabuut\u003C/i\u003E yang berarti \u003Ci\u003Elaba-laba\u003C/i\u003E pada ayat 41 surat ini, dimana Allah mengumpamakan penyembah-penyembah berhala-berhala itu, dengan laba-laba yang percaya kepada kekuatan rumahnya sebagai tempat ia berlindung dan tempat ia menjerat mangsanya, padahal kalau dihembus angin atau ditimpa oleh suatu barang yang kecil saja, rumah itu akan hancur. Begitu pula halnya dengan kaum musyrikin yang percaya kepada kekuatan sembahan-sembahan mereka sebagai tempat berlindung dan tempat meminta sesuatu yang mereka ingini, padahal sembahan-sembahan mereka itu tidak mampu sedikit juga menolong mereka dari azab Allah waktu di dunia, seperti yang terjadi pada kaum Nuh, kaum Ibrahim, kaum Luth, kaum Syu'aib, kaum Saleh, dan lain-lain. Apalagi menghadapi azab Allah di akhirat nanti, sembahan-sembahan mereka itu lebih tidak mampu menghindarkan dan melindungi mereka.",
                "audio"=> "https=>//santrikoding.com/storage/audio/029.mp3"
              ],
              [
                "nomor"=> 30,
                "nama"=> "الرّوم",
                "nama_latin"=> "Ar-Rum",
                "jumlah_ayat"=> 60,
                "tempat_turun"=> "mekah",
                "arti"=> "Romawi",
                "deskripsi"=> "Surat Ar Ruum terdiri atas 60 ayat, termasuk golongan surat-surat Makkiyah diturunkan sesudah ayat Al Insyiqaq. Dinamakan \u003Ci\u003EAr Ruum\u003C/i\u003E karena pada permulaan surat ini, yaitu ayat 2, 3 dan 4 terdapat pemberitaan bangsa Rumawi yang pada mulanya dikalahkan oleh bangsa Persia, tetapi setelah beberapa tahun kemudian kerajaan Ruum dapat menuntut balas dan mengalahkan kerajaan Persia kembali. Ini adalah suatu mukjizat Al Quran, yaitu memberitakan hal-hal yang akan terjadi di masa yang akan datang. Dan juga suatu isyarat bahwa kaum muslimin yang demikian lemahnya di waktu itu akan menang dan dapat menghancurkan kaum musyrikin. Isyarat ini terbukti pertama kali pada perang Badar.",
                "audio"=> "https=>//santrikoding.com/storage/audio/030.mp3"
              ],
              [
                "nomor"=> 31,
                "nama"=> "لقمٰن",
                "nama_latin"=> "Luqman",
                "jumlah_ayat"=> 34,
                "tempat_turun"=> "mekah",
                "arti"=> "Luqman",
                "deskripsi"=> "Surat  Luqman  terdiri   dari   34   ayat,   termasuk   golongan   surat-surat Makkiyyah, diturunkan sesudah surat Ash Shaffaat. \u003Cbr\u003EDinamai \u003Ci\u003ELuqman\u003C/i\u003E karena pada  ayat  12   disebutkan   bahwa   \u003Ci\u003ELuqman\u003C/i\u003E   telah diberi   oleh   Allah   nikmat   dan   ilmu   pengetahuan,  oleh sebab itu dia bersyukur kepadaNya atas nikmat yang  diberikan  itu.   Dan   pada   ayat   13 sampai 19 terdapat nasihat-nasihat Luqman kepada anaknya.\u003Cbr\u003EIni adalah sebagai  isyarat   daripada   Allah   supaya   setiap   ibu   bapak melaksanakan  pula terhadap anak-anak mereka sebagai yang telah dilakukan oleh Luqman.",
                "audio"=> "https=>//santrikoding.com/storage/audio/031.mp3"
              ],
              [
                "nomor"=> 32,
                "nama"=> "السّجدة",
                "nama_latin"=> "As-Sajdah",
                "jumlah_ayat"=> 30,
                "tempat_turun"=> "mekah",
                "arti"=> "Sajdah",
                "deskripsi"=> "Surat As Sajdah terdiri atas 30 ayat termasuk golongan surat Makkiyah diturunkan sesudah surat Al Mu'minuun. Dinamakan \u003Ci\u003EAs Sajdah\u003C/i\u003E berhubung pada surat ini terdapat ayat sajdah, yaitu ayat yang kelima belas.",
                "audio"=> "https=>//santrikoding.com/storage/audio/032.mp3"
              ],
              [
                "nomor"=> 33,
                "nama"=> "الاحزاب",
                "nama_latin"=> "Al-Ahzab",
                "jumlah_ayat"=> 73,
                "tempat_turun"=> "madinah",
                "arti"=> "Golongan Yang Bersekutu",
                "deskripsi"=> "Surat Al Ahzab terdiri atas 73 ayat, termasuk golongan surat-surat Madaniyah, diturunkan sesudah surat Ali'Imran. Dinamai \u003Ci\u003EAl Ahzab\u003C/i\u003E yang berarti \u003Ci\u003Egolongan-golongan yang bersekutu\u003C/i\u003E karena dalam surat ini terdapat beberapa ayat, yaitu ayat 9 sampai dengan ayat 27 yang berhubungan dengan peperangan Al Ahzab, yaitu peperangan yang dilancarkan oleh orang-orang Yahudi, kaum munafik dan orang-orang musyrik terhadap orang-orang mukmin di Medinah. Mereka telah mengepung rapat orang- orang mukmin sehingga sebahagian dari mereka telah berputus asa dan menyangka bahwa mereka akan dihancurkan oleh musuh-musuh mereka itu. Ini adalah suatu ujian yang berat dari Allah untuk menguji sampai dimana teguhnya keimanan mereka. Akhirnya Allah mengirimkan bantuan berupa tentara yang tidak kelihatan dan angin topan, sehingga musuh-musuh itu menjadi kacau balau dan melarikan diri.",
                "audio"=> "https=>//santrikoding.com/storage/audio/033.mp3"
              ],
              [
                "nomor"=> 34,
                "nama"=> "سبأ",
                "nama_latin"=> "Saba'",
                "jumlah_ayat"=> 54,
                "tempat_turun"=> "mekah",
                "arti"=> "Saba'",
                "deskripsi"=> "Surat Saba' terdiri atas 54 ayat, termasuk golongan surat-surat Makkiyyah, diturunkan sesudah surat Luqman. Dinamakan \u003Ci\u003ESaba'\u003C/i\u003E karena didalamnya terdapat kisah kaum Saba'. Saba' adalah nama suatu kabilah dari kabilah-kabilah Arab yang tinggal di daerah Yaman sekarang ini. Mereka mendirikan kerajaan yang terkenal dengan nama kerajaan Sabaiyyah, ibukotanya Ma'rib; telah dapat membangun suatu bendungan raksasa, yang bernama \u003Ci\u003EBendungan Ma'rib\u003C/i\u003E, sehingga negeri meka subur dan makmur. Kemewahan dan kemakmuran ini menyebabkan kaum Saba' lupa dan ingkar kepada Allah yang telah melimpahkan nikmatnya kepada mereka, serta mereka mengingkari pula seruan para rasul. Karena keingkaran mereka ini, Allah menimpahkan kepada mereka azab berupa \u003Ci\u003Esailul 'arim\u003C/i\u003E (banjir yang besar) yang ditimbulkan oleh bobolnya bendungan Ma'rib. Setelah bendungan ma'rib bobol negeri Saba' menjadi kering dan kerajaan mereka hancur.",
                "audio"=> "https=>//santrikoding.com/storage/audio/034.mp3"
              ],
              [
                "nomor"=> 35,
                "nama"=> "فاطر",
                "nama_latin"=> "Fatir",
                "jumlah_ayat"=> 45,
                "tempat_turun"=> "mekah",
                "arti"=> "Maha Pencipta",
                "deskripsi"=> "Surat Faathir terdiri atas 45 ayat, termasuk golongan surat-surat Makkiyyah, diturunkan sesudah surat Al Furqaan dan merupakan surat akhir dari urutan surat-surat dalam Al Quran yang dimulai dengan \u003Ci\u003EAlhamdulillah\u003C/i\u003E. Dinamakan \u003Ci\u003EFaathir\u003C/i\u003E (pencipta) ada hubungannya dengan perkataan \u003Ci\u003EFaathir\u003C/i\u003E yang terdapat pada ayat pertama pada surat ini. Pada ayat tersebut diterangkan bahwa Allah adalah Pencipta langit dan bumi, Pencipta malaikat-malaikat, Pencipta semesta alam yang semuanya itu adalah sebagai bukti atas kekuasaan dan kebesaran-Nya. Surat ini dinamai juga dengan \u003Ci\u003Esurat Malaikat\u003C/i\u003E karena pada ayat pertama disebutkan bahwa Allah telah menjadikan malaikat-malaikat sebagai utusan-Nya  yang mempunyai beberapa sayap.",
                "audio"=> "https=>//santrikoding.com/storage/audio/035.mp3"
              ],
              [
                "nomor"=> 36,
                "nama"=> "يٰسۤ",
                "nama_latin"=> "Yasin",
                "jumlah_ayat"=> 83,
                "tempat_turun"=> "mekah",
                "arti"=> "Yasin",
                "deskripsi"=> "Surat \u003Ci\u003EYaasiin\u003C/i\u003E terdiri atas 83 ayat, termasuk golongan surat-surat Makkiyyah,  diturunkan sesudah surat Jin. Dinamai \u003Ci\u003EYaasiin\u003C/i\u003E karena dimulai dengan huruf \u003Ci\u003EYaasiin\u003C/i\u003E. Sebagaimana halnya arti huruf-huruf abjad yang terletak pada permulaan beberapa surat Al Quran, maka demikian pula arti \u003Ci\u003EYaasiin\u003C/i\u003E yang terdapat pada ayat permulaan surat ini, yaitu Allah mengisyaratkan bahwa sesudah huruf tersebut akan dikemukakan hal-hal yang penting antara lain=> Allah bersumpah dengan Al Quran bahwa Muhammad s.a.w. benar-benar seorang rasul yang diutus-Nya kepada kaum yang belum pernah diutus kepada mereka rasul-rasul.",
                "audio"=> "https=>//santrikoding.com/storage/audio/036.mp3"
              ],
              [
                "nomor"=> 37,
                "nama"=> "الصّٰۤفّٰت",
                "nama_latin"=> "As-Saffat",
                "jumlah_ayat"=> 182,
                "tempat_turun"=> "mekah",
                "arti"=> "Barisan-Barisan",
                "deskripsi"=> "Surat Ash Shaaffaat terdiri atas 182 ayat termasuk golongan surat Makkiyyah diturunkan sesudah surat Al An'aam. Dinamai dengan \u003Ci\u003EAsh Shaaffaat\u003C/i\u003E (yang bershaf-shaf) ada hubungannya dengan perkataan \u003Ci\u003EAsh Shaaffaat\u003C/i\u003E yang terletak pada ayat permulaan surat ini yang mengemukakan bagaimana para malaikat yang berbaris di hadapan Tuhannya yang bersih jiwanya, tidak dapat digoda oleh syaitan. Hal ini hendaklah menjadi i'tibar bagi manusia dalam menghambakan dirinya kepada Allah.",
                "audio"=> "https=>//santrikoding.com/storage/audio/037.mp3"
              ],
              [
                "nomor"=> 38,
                "nama"=> "ص",
                "nama_latin"=> "Sad",
                "jumlah_ayat"=> 88,
                "tempat_turun"=> "mekah",
                "arti"=> "Sad",
                "deskripsi"=> "Surat Shaad  terdiri atas  88 ayat  termasuk golongan  surat Makkiyyah, diturunkan sesudah surat Al Qamar. Dinamai  dengan  \u003Ci\u003EShaad\u003C/i\u003E  karena surat  ini  dimulai  dengan \u003Ci\u003EShaad\u003C/i\u003E (selanjutnya lihat no. \u003Ca href=\"s002a001.htm\"\u003E[10)\u003C/a\u003E). Dalam surat  ini Allah  bersumpah dengan  Al Quran,   untuk menunjukkan bahwa Al Quran itu suatu  kitab yang  agung dan bahwa siapa saja yang  mengikutinya  akan mendapat  kebahagiaan  dunia  dan akhirat dan untuk menunjukkan bahwa Al Quran ini adalah mukjizat Nabi Muhammad s.a.w. yang  menyatakan kebenarannya dan ketinggian akhlaknya.",
                "audio"=> "https=>//santrikoding.com/storage/audio/038.mp3"
              ],
              [
                "nomor"=> 39,
                "nama"=> "الزمر",
                "nama_latin"=> "Az-Zumar",
                "jumlah_ayat"=> 75,
                "tempat_turun"=> "mekah",
                "arti"=> "Rombongan",
                "deskripsi"=> "Surat Az Zumar terdiri ataz 75 ayat, termasuk golongan surat-surat Makkiyyah, diturunkan sesudah surat Saba'. Dinamakan \u003Ci\u003EAz Zumar\u003C/i\u003E (Rombongan-rombongan) karena perkataan \u003Ci\u003EAz Zumar\u003C/i\u003E yang terdapat pada ayat 71 dan 73 ini. Dalam ayat-ayat tersebut diterangkan keadaan manusia di hari kiamat setelah mereka dihisab, di waktu itu mereka terbagi atas dua rombongan; satu rombongan dibawa ke neraka dan satu rombongan lagi dibawa ke syurga. Masing- masing rombongan memperoleh balasan dari apa yang mereka kerjakan di dunia dahulu. Surat ini dinamakan juga \u003Ci\u003EAl Ghuraf\u003C/i\u003E (kamar-kamar) berhubung perkataan \u003Ci\u003Eghuraf\u003C/i\u003E yang terdapat pada ayat 20, dimana diterangkan keadaan kamar-kamar dalam syurga yang diperoleh orang-orang yang bertakwa.",
                "audio"=> "https=>//santrikoding.com/storage/audio/039.mp3"
              ],
              [
                "nomor"=> 40,
                "nama"=> "غافر",
                "nama_latin"=> "Gafir",
                "jumlah_ayat"=> 85,
                "tempat_turun"=> "mekah",
                "arti"=> "Maha Pengampun",
                "deskripsi"=> "Surat Al Mu'min terdiri atas 85 ayat, termasuk golongan surat-surat Makkiyyah, diturunkan sesudah surat Az Zumar. Dinamai \u003Ci\u003EAl Mu'min\u003C/i\u003E (Orang yang beriman), berhubung dengan perkataan \u003Ci\u003Emukmin\u003C/i\u003E yang terdapat pada ayat 28 surat ini. Pada ayat 28 diterangkan bahwa salah seorang dari kaum Fir'aun telah beriman kepada Nabi Musa a.s. dengan menyembunyikan imannya kepada kaumnya, setelah mendengar keterangan dan melihat mukjizat yang dikemukakan oleh Nabi Musa a.s. Hati kecil orang ini mencela Fir'aun dan kaumnya yang tidak mau beriman kepada Nabi Musa a.s., sekalipun telah dikemukakan keterangan dan mukjizat yang diminta mereka.\u003Cbr\u003EDinamakan pula \u003Ci\u003EGhafir\u003C/i\u003E (yang mengampuni), karena ada hubungannya dengan kalimat \u003Ci\u003EGhafir\u003C/i\u003E yang terdapat pada ayat 3 surat ini. Ayat ini mengingatkan bahwa \u003Ci\u003EMaha Pengampun\u003C/i\u003E dan \u003Ci\u003EMaha Penerima Taubat\u003C/i\u003E adalah sebagian dari sifat-sifat Allah, karena itu hamba-hamba Allah tidak usah khawatir terhadap  perbuatan-perbuatan dosa yang telah terlanjur mereka lakukan, semuanya itu akan diampuni Allah asal benar-benar memohon ampun dan bertaubat kepada-Nya dan berjanji tidak akan mengerjakan  perbuatan-perbuatan dosa itu lagi. Dan surat ini dinamai \u003Ci\u003EDzit Thaul\u003C/i\u003E (Yang Mempunyai Kurnia) karena perkataan tersebut terdapat pada ayat 3.",
                "audio"=> "https=>//santrikoding.com/storage/audio/040.mp3"
              ],
              [
                "nomor"=> 41,
                "nama"=> "فصّلت",
                "nama_latin"=> "Fussilat",
                "jumlah_ayat"=> 54,
                "tempat_turun"=> "mekah",
                "arti"=> "Yang Dijelaskan",
                "deskripsi"=> "Surat Fushshilat terdiri atas 54 ayat, termasuk golongan surat-surat Makkiyyah, diturunkan sesudah surat Al Mu'min. Dinamai \u003Ci\u003EFushshilat\u003C/i\u003E (yang dijelaskan) karena ada hubungannya dengan perkataan \u003Ci\u003EFushshilat\u003C/i\u003E yang terdapat pada permulaan surat ini yang berarti \u003Ci\u003Eyang dijelaskan\u003C/i\u003E. Maksudnya ayat-ayatnya diperinci dengan jelas tentang hukum-hukum, keimanan, janji dan ancaman, budi pekerti, kisah, dan sebagainya. Dinamai juga dengan \u003Ci\u003EHaa Miim dan As Sajdah\u003C/i\u003E karena surat ini dimulai dengan \u003Ci\u003EHaa Miim\u003C/i\u003E dan dalam surat ini terdapat ayat Sajdah.",
                "audio"=> "https=>//santrikoding.com/storage/audio/041.mp3"
              ],
              [
                "nomor"=> 42,
                "nama"=> "الشورى",
                "nama_latin"=> "Asy-Syura",
                "jumlah_ayat"=> 53,
                "tempat_turun"=> "mekah",
                "arti"=> "Musyawarah",
                "deskripsi"=> "Surat Asy Syuura terdiri atas 53 ayat, termasuk golongan surat-surat Makkiyyah, diturunkan sesudah surat Fushshilat. Dinamai dengan \u003Ci\u003EAsy Syuura\u003C/i\u003E (musyawarat) diambil dari perkataan \u003Ci\u003ESyuura\u003C/i\u003E yang terdapat pada ayat 38 surat ini. Dalam ayat tersebut diletakkan salah satu dari dasar-dasar pemerintahan Islam ialah musyawarat. Dinamai juga \u003Ci\u003EHaa Miim 'Ain Siin Qaaf\u003C/i\u003E karena surat ini dimulai dengan huruf-huruf hijaiyah itu.",
                "audio"=> "https=>//santrikoding.com/storage/audio/042.mp3"
              ],
              [
                "nomor"=> 43,
                "nama"=> "الزخرف",
                "nama_latin"=> "Az-Zukhruf",
                "jumlah_ayat"=> 89,
                "tempat_turun"=> "mekah",
                "arti"=> "Perhiasan",
                "deskripsi"=> "Surat Az Zukhruf terdiri atas 89 ayat, termasuk golongan  surat-surat Makkiyyah, diturunkan sesudah surat Asy Syuura. \u003Cbr\u003EDinamai \u003Ci\u003EAz Zukhruf\u003C/i\u003E (Perhiasan) diambil dari perkataan \u003Ci\u003EAz Zukhruf\u003C/i\u003E yang terdapat pada ayat 35 surat ini.  Orang-orang musyrik mengukur tinggi rendahnya derajat seseorang tergantung kepada perhiasan dan harta benda yang ia punyai, karena Muhammad s.a.w. adalah seorang anak yatim lagi miskin, ia tidak pantas diangkat Allah sebagai seorang rasul dan nabi.  Pangkat rasul dan nabi harus diberikan kepada orang yang kaya.  Ayat ini menegaskan bahwa harta tidak dapat dijadikan dasar untuk mengukur tinggi rendahnya derajat seseorang, karena harta itu merupakan hiasan kehidupan duniawi, bukan berarti kesenangan akhirat.",
                "audio"=> "https=>//santrikoding.com/storage/audio/043.mp3"
              ],
              [
                "nomor"=> 44,
                "nama"=> "الدخان",
                "nama_latin"=> "Ad-Dukhan",
                "jumlah_ayat"=> 59,
                "tempat_turun"=> "mekah",
                "arti"=> "Kabut",
                "deskripsi"=> "Surat Ad Dukhaan terdiri atas 59 ayat, termasuk golongan surat-surat Makkiyyah, diturunkan sesudah Az Zukhruf. \u003Cbr\u003EDinamai \u003Ci\u003EAd Dukhaan\u003C/i\u003E (kabut), diambil dari perkataan \u003Ci\u003EDukhaan\u003C/i\u003E yang terdapat pada ayat 10 surat ini.\u003Cbr\u003EMenurut riwayat Bukhari secara ringkas dapat diterangkan sebagai berikut=> Orang-orang kafir Mekah dalam menghalang-halangi agama Islam dan menyakiti serta mendurhakai Nabi Muhammad s.a.w. sudah melewati batas, karena itu Nabi mendoa kepada Allah agar diturunkan azab sebagaimana yang telah diturunkan kepada orang-orang yang durhaka kepada Nabi Yusuf yaitu musim kemarau yang panjang.  Do'a Nabi itu dikabulkan Allah sampai orang-orang kafir memakan tulang dan bangkai, karena kelaparan.  Mereka selalu menengadah ke langit mengharap pertolongan Allah.  Tetapi tidak satupun yang mereka lihat kecuali kabut yang menutupi pandangan mereka.\u003Cbr\u003EAkhirnya mereka datang kepada Nabi agar Nabi memohon kepada Allah supaya hujan diturunkan.  Setelah Allah mengabulkan doa Nabi, dan hujan di turunkan, mereka kembali kafir seperti semula; karena itu Allah menyatakan bahwa nanti mereka akan diazab dengan azab yang pedih.",
                "audio"=> "https=>//santrikoding.com/storage/audio/044.mp3"
              ],
              [
                "nomor"=> 45,
                "nama"=> "الجاثية",
                "nama_latin"=> "Al-Jasiyah",
                "jumlah_ayat"=> 37,
                "tempat_turun"=> "mekah",
                "arti"=> "Berlutut",
                "deskripsi"=> "Surat Al Jaatsiyah terdiri atas 37 ayat, termasuk golongan surat-surat Makkiyyah, diturunkan sesudah surat Ad Dukhaan. Dinamai dengan \u003Ci\u003EAl Jaatsiyah\u003C/i\u003E (yang berlutut) diambil dari perkataan \u003Ci\u003EJaatsiyah\u003C/i\u003E yang terdapat pada ayat 28 surat ini. Ayat tersebut menerangkan tentang keadaan manusia pada hari kiamat, yaitu semua manusia dikumpulkan ke hadapan mahkamah Allah Yang Maha Tinggi yang memberikan keputusan terhadap perbuatan yang telah mereka lakukan di dunia. Pada hari itu semua manusia berlutut di hadapan Allah. Dinamai juga dengan \u003Ci\u003EAsy Syari'ah\u003C/i\u003E diambil dari perkataan \u003Ci\u003ESyari'ah\u003C/i\u003E (Syari'at) yang terdapat pada ayat 18 surat ini.",
                "audio"=> "https=>//santrikoding.com/storage/audio/045.mp3"
              ],
              [
                "nomor"=> 46,
                "nama"=> "الاحقاف",
                "nama_latin"=> "Al-Ahqaf",
                "jumlah_ayat"=> 35,
                "tempat_turun"=> "mekah",
                "arti"=> "Bukit Pasir",
                "deskripsi"=> "Surat Al Ahqaaf terdiri dari 35 ayat termasuk golongan surat-surat Makkiyyah, diturunkan sesudah surat Al Jaatsiyah. Dinamai \u003Ci\u003EAl Ahqaaf\u003C/i\u003E  (bukit-bukit pasir) dari perkataan \u003Ci\u003EAl Ahqaaf\u003C/i\u003E yang terdapat pada ayat 21 surat ini.\u003Cbr\u003EDalam ayat tersebut dan ayat-ayat sesudahnya diterangkan bahwa Nabi Hud a.s. telah menyampaikan risalahnya kepada kaumnya di \u003Ci\u003EAl Ahqaaf\u003C/i\u003E yang sekarang dikenal dengan Ar Rab'ul Khaali, tetapi kaumnya tetap ingkar sekalipun mereka telah diberi peringatan pula oleh rasul-rasul yang sebelumnya.  Akhirnya Allah menghancurkan mereka dengan tiupan angin kencang.  Hal ini adalah sebagai isyarat dari Allah kepada kaum musyrikin Quraisy bahwa mereka akan dihancurkan bila mereka tidak mengindahkan seruan Rasul.",
                "audio"=> "https=>//santrikoding.com/storage/audio/046.mp3"
              ],
              [
                "nomor"=> 47,
                "nama"=> "محمّد",
                "nama_latin"=> "Muhammad",
                "jumlah_ayat"=> 38,
                "tempat_turun"=> "madinah",
                "arti"=> "Muhammad",
                "deskripsi"=> "Surat Muhammad terdiri atas 38 ayat, termasuk golongan surat-surat Madaniyyah, diturunkan sesudah surat Al Hadiid. Nama \u003Ci\u003EMuhammad\u003C/i\u003E sebagai nama surat ini diambil dari perkataan Muhammad yang terdapat pada ayat 2 surat ini. Pada ayat 1, 2, dan 3 surat ini, Allah membandingkan antara hasil yang diperoleh oleh orang-orang yang tidak percaya kepada apa yang diturunkan kepada Nabi Muhammad s.a.w dan hasil yang diperoleh oleh orang-orang yang tidak percaya kepadanya. Orang-orang yang percaya kepada apa yang dibawa oleh Muhammad s.a.w merekalah orang-orang yang beriman dan mengikuti yang hak, diterima Allah semua amalnya, diampuni segala kesalahannya. Adapun orang-orang yang tidak percaya kepada Muhammad s.a.w adalah orang-orang yang mengikuti kebatilan, amalnya tidak diterima, dosa mereka tidak diampuni, kepada mereka dijanjikan azab di dunia dan di akhirat.\u003Cbr\u003EDinamai juga dengan \u003Ci\u003EAl Qital\u003C/i\u003E (peperangan), karena sebahagian besar surat ini mengutarakan tentang peperangan dan pokok-pokok hukumnya, serta bagaimana seharusnya sikap orang-orang mukmin terhadap orang-orang kafir.",
                "audio"=> "https=>//santrikoding.com/storage/audio/047.mp3"
              ],
              [
                "nomor"=> 48,
                "nama"=> "الفتح",
                "nama_latin"=> "Al-Fath",
                "jumlah_ayat"=> 29,
                "tempat_turun"=> "madinah",
                "arti"=> "Kemenangan",
                "deskripsi"=> "Surat Al Fath terdiri atas 29 ayat, termasuk golongan surat-surat Madaniyyah, diturunkan sesudah surat Al Jum'ah. Dinamakan \u003Ci\u003EAl Fath (kemenangan)\u003C/i\u003E diambil dari perkataan \u003Ci\u003EFat-han\u003C/i\u003E yang terdapat pada ayat pertama surat ini. Sebagian besar dari ayat-ayat surat ini menerangkan hal-hal yang berhubungan dengan kemenangan yang dicapai Nabi Muhammad s.a.w. dalam peperangan-peperangannya. \u003Cbr\u003ENabi Muhammad s.a.w. sangat gembira dengan turunnya ayat pertama surat ini. Kegembiraan ini dinyatakan dalam sabda beliau yang diriwayatkan Bukhari; \u003Ci\u003ESesungguhnya telah diturunkan kepadaku satu surat, yang surat itu benar-benar lebih aku cintai dari seluruh apa yang disinari matahari\u003C/i\u003E. Kegembiraan Nabi Muhammad s.a.w. itu ialah karena ayat-ayatnya menerangkan tentang kemenangan yang akan diperoleh Muhammad s.a.w. dalam perjuangannya dan tentang kesempurnaan nikmat Allah kepadanya.",
                "audio"=> "https=>//santrikoding.com/storage/audio/048.mp3"
              ],
              [
                "nomor"=> 49,
                "nama"=> "الحجرٰت",
                "nama_latin"=> "Al-Hujurat",
                "jumlah_ayat"=> 18,
                "tempat_turun"=> "madinah",
                "arti"=> "Kamar-Kamar",
                "deskripsi"=> "Surat Al Hujuraat terdiri atas 18 ayat, termasuk golongan surat-surat Madaniyyah, diturunkan sesudah surat Al Mujaadalah. Dinamai \u003Ci\u003EAl Hujuraat\u003C/i\u003E diambil dari perkataan \u003Ci\u003EAl Hujuraat\u003C/i\u003E yang terdapat pada ayat 4 surat ini. Ayat tersebut mencela para sahabat yang memanggil Nabi Muhammad SAW yang sedang berada di dalam kamar rumahnya bersama isterinya. Memanggil Nabi Muhammad SAW dengan cara dan dalam keadaan yang demikian menunjukkan sifat kurang hormat kepada beliau dan mengganggu ketenteraman beliau.",
                "audio"=> "https=>//santrikoding.com/storage/audio/049.mp3"
              ],
              [
                "nomor"=> 50,
                "nama"=> "ق",
                "nama_latin"=> "Qaf",
                "jumlah_ayat"=> 45,
                "tempat_turun"=> "mekah",
                "arti"=> "Qaf",
                "deskripsi"=> "Surat Qaaf terdiri atas 45 ayat, termasuk golongan surat-surat Makkiyah diturunkan sesudah surat Al Murssalaat. Dinamai \u003Ci\u003EQaaf\u003C/i\u003E karena surat ini dimulai dengan huruf \u003Ci\u003EQaaf\u003C/i\u003E. Menurut hadits yang diriwayatkan Imam Muslim, bahwa Rasulullah SAW senang membaca surat ini pada rakaat pertama sembahyang subuh dan pada shalat hari raya. Sedang menurut riwayat Abu Daud, Al Baihaqy dan Ibnu Majah bahwa Rasulullah SAW membaca surat ini pada tiap-tiap membaca Khutbah pada hari Jum'at. Kedua riwayat ini menunjukkan bahwa surat QAAF sering dibaca Nabi Muhammad SAW di tempat-tempat umum, untuk memperingatkan manusia tentang kejadian mereka dan nikmat-nikmat yang diberikan kepadanya, begitu pula tentang hari berbangkit, hari berhisab, syurga, neraka, pahala, dosa, dsb. Surat ini dinamai juga \u003Ci\u003EAl Baasiqaat\u003C/i\u003E, diambil dari perkataan \u003Ci\u003EAl- Baasiqaat\u003C/i\u003E yang terdapat pada ayat 10 surat ini.",
                "audio"=> "https=>//santrikoding.com/storage/audio/050.mp3"
              ],
              [
                "nomor"=> 51,
                "nama"=> "الذّٰريٰت",
                "nama_latin"=> "Az-Zariyat",
                "jumlah_ayat"=> 60,
                "tempat_turun"=> "mekah",
                "arti"=> "Angin yang Menerbangkan",
                "deskripsi"=> "Surat Adz Dzaariyaat terdiri atas 60 ayat, termasuk golongan surat-surat Makkiyah, diturunkan sesudah surat Al Ahqaaf. Dinamai \u003Ci\u003EAdz Dzaariyaat\u003C/i\u003E (angin yang menerbangkan), diambil dari perkataan \u003Ci\u003EAdz Dzaariyaat\u003C/i\u003E yang terdapat pada ayat pertama surat ini. Allah bersumpah dengan angin, mega, bahtera, dan malaikat yang menjadi sumber kesejahteraan dan pembawa kemakmuran. Hal ini meng- isyaratkan inayat Allah kepada hamba-hamba-Nya.",
                "audio"=> "https=>//santrikoding.com/storage/audio/051.mp3"
              ],
              [
                "nomor"=> 52,
                "nama"=> "الطور",
                "nama_latin"=> "At-Tur",
                "jumlah_ayat"=> 49,
                "tempat_turun"=> "mekah",
                "arti"=> "Bukit Tursina",
                "deskripsi"=> "Surat Ath Thuur terdiri atas 49 ayat, termasuk golongan surat-surat Makkiyyah, diturunkan sesudah surat As Sajdah. Dinamai \u003Ci\u003EAth Thuur\u003C/i\u003E (Bukit) diambil dari perkataan \u003Ci\u003EAth Thuur\u003C/i\u003E yang terdapat pada ayat pertama surat ini. Yang dimaksud dengan \u003Ci\u003Ebukit\u003C/i\u003E di sini ialah bukit Thursina yang terletak di semenanjung Sinai, tempat Nabi Musa menerima wahyu dari Tuhannya.",
                "audio"=> "https=>//santrikoding.com/storage/audio/052.mp3"
              ],
              [
                "nomor"=> 53,
                "nama"=> "النجم",
                "nama_latin"=> "An-Najm",
                "jumlah_ayat"=> 62,
                "tempat_turun"=> "mekah",
                "arti"=> "Bintang",
                "deskripsi"=> "Surat An Najm terdiri atas 62 ayat, termasuk golongan surat-surat Makkiyyah, diturunkan sesudah surat Al Ikhlash. Nama \u003Ci\u003EAn Najm\u003C/i\u003E (bintang), diambil dari perkataan  \u003Ci\u003EAn Najm\u003C/i\u003E yang terdapat pada ayat pertama surat ini. Allah bersumpah dengan \u003Ci\u003EAn Najm\u003C/i\u003E (bintang) adalah karena bintang-bintang yang timbul dan tenggelam, amat besar manfaatnya bagi manusia, sebagai pedoman bagi manusia dalam melakukan pelayaran di lautan, dalam perjalanan di padang pasir, untuk menentukan peredaran musim dan sebagainya.",
                "audio"=> "https=>//santrikoding.com/storage/audio/053.mp3"
              ],
              [
                "nomor"=> 54,
                "nama"=> "القمر",
                "nama_latin"=> "Al-Qamar",
                "jumlah_ayat"=> 55,
                "tempat_turun"=> "mekah",
                "arti"=> "Bulan",
                "deskripsi"=> "Surat Al Qamar terdiri atas 55 ayat, termasuk golongan surat-surat Makkiyyah, diturunkan sesedah surat Ath Thaariq. Nama \u003Ci\u003EAl Qamar\u003C/i\u003E (bulan) diambil dari perkataan \u003Ci\u003EAl Qamar\u003C/i\u003E yang terdapat pada ayat pertama surat ini. Pada ayat ini diterangkan tentang terbelahnya bulan sebagai mukjizat Nabi Muhammad s.a.w.",
                "audio"=> "https=>//santrikoding.com/storage/audio/054.mp3"
              ],
              [
                "nomor"=> 55,
                "nama"=> "الرحمن",
                "nama_latin"=> "Ar-Rahman",
                "jumlah_ayat"=> 78,
                "tempat_turun"=> "madinah",
                "arti"=> "Maha Pengasih",
                "deskripsi"=> "Surat Ar Rahmaan terdiri atas 78 ayat, termasuk golongan surat- surat Makkiyyah, diturunkan sesudah surat Ar Ra'du. Dinamai \u003Ci\u003EAr Rahmaan\u003C/i\u003E (Yang Maha Pemurah), diambil dari perkataan \u003Ci\u003EAr Rahmaan\u003C/i\u003E yang terdapat pada ayat pertama surat ini. Ar Rahmaan adalah salah satu dari nama-nama Allah. Sebagian besar dari surat ini menerangkan kepemurahan Allah s.w.t. kepada hamba-hamba-Nya, yaitu dengan memberikan nikmat-nikmat yang tidak terhingga baik di dunia maupun di akhirat nanti.",
                "audio"=> "https=>//santrikoding.com/storage/audio/055.mp3"
              ],
              [
                "nomor"=> 56,
                "nama"=> "الواقعة",
                "nama_latin"=> "Al-Waqi'ah",
                "jumlah_ayat"=> 96,
                "tempat_turun"=> "mekah",
                "arti"=> "Hari Kiamat",
                "deskripsi"=> "Surat Al Waaqi'ah terdiri atas 96 ayat, termasuk golongan surat-surat Makkiyah, diturunkan sesudah surat Thaa Haa. \tDinamai dengan \u003Ci\u003EAl Waaqi'ah\u003C/i\u003E (Hari Kiamat), diambil dari perkataan \u003Ci\u003EAl Waaqi'ah\u003C/i\u003E yang terdapat pada ayat pertama surat ini.",
                "audio"=> "https=>//santrikoding.com/storage/audio/056.mp3"
              ],
              [
                "nomor"=> 57,
                "nama"=> "الحديد",
                "nama_latin"=> "Al-Hadid",
                "jumlah_ayat"=> 29,
                "tempat_turun"=> "madinah",
                "arti"=> "Besi",
                "deskripsi"=> "Surat Al Hadiid terdiri atas 29 ayat, termasuk golongan surat-surat Madaniyyah, diturunkan sesudah surat Az Zalzalah. Dinamai \u003Ci\u003EAl Hadiid\u003C/i\u003E (Besi), diambil dari perkataan \u003Ci\u003EAl Hadiid\u003C/i\u003E yang terdapat pada ayat 25 surat ini.",
                "audio"=> "https=>//santrikoding.com/storage/audio/057.mp3"
              ],
              [
                "nomor"=> 58,
                "nama"=> "المجادلة",
                "nama_latin"=> "Al-Mujadalah",
                "jumlah_ayat"=> 22,
                "tempat_turun"=> "madinah",
                "arti"=> "Gugatan",
                "deskripsi"=> "Surat Al Mujaadilah terdiri atas 22 ayat, termasuk golongan surat Madaniyyah, diturunkan sesudah surat Al Munaafiquun. Surat ini dinamai dengan \u003Ci\u003EAl Mujaadilah\u003C/i\u003E (wanita yang mengajukan gugatan) karena pada awal surat ini disebutkan bantahan seorang perempuan, menurut riwayat bernama Khaulah binti Tsa'labah terhadap sikap suaminya yang telah menzhiharnya. Hal ini diadukan kepada Rasulullah s.a.w. dan ia menuntut supaya beliau memberikan putusan yang adil dalam persoalan itu. Dinamai juga \u003Ci\u003EAl Mujaadalah\u003C/i\u003E yang berarti \u003Ci\u003Eperbantahan\u003C/i\u003E.",
                "audio"=> "https=>//santrikoding.com/storage/audio/058.mp3"
              ],
              [
                "nomor"=> 59,
                "nama"=> "الحشر",
                "nama_latin"=> "Al-Hasyr",
                "jumlah_ayat"=> 24,
                "tempat_turun"=> "madinah",
                "arti"=> "Pengusiran",
                "deskripsi"=> "Surat Al Hasyr terdiri atas 24 ayat, termasuk golongan surat-surat Madaniyyah, diturunkan sesudah surat Al Bayyinah.\u003Cbr\u003E \tDinamai surat \u003Ci\u003EAl Hasyr\u003C/i\u003E (pengusiran) diambil dari perkataan \u003Ci\u003EAl-Hasyr\u003C/i\u003E yang terdapat pada ayat 2 surat ini. Di dalam surat ini disebutkan  kisah pengusiran suatu suku Yahudi yang bernama Bani Nadhir yang berdiam  di sekitar kota Madinah.",
                "audio"=> "https=>//santrikoding.com/storage/audio/059.mp3"
              ],
              [
                "nomor"=> 60,
                "nama"=> "الممتحنة",
                "nama_latin"=> "Al-Mumtahanah",
                "jumlah_ayat"=> 13,
                "tempat_turun"=> "madinah",
                "arti"=> "Wanita Yang Diuji",
                "deskripsi"=> "Surat Al Mumtahanah terdiri atas 13 ayat, termasuk golongan surat-surat Madaniyyah, diturunkan sesudah surat Al Ahzab. Dinamai \u003Ci\u003EAl Mumtahanah\u003C/i\u003E (wanita yang diuji), diambil dari kata \"Famtahinuuhunna\" yang berarti \u003Ci\u003Emaka ujilah mereka\u003C/i\u003E, yang terdapat pada ayat 10 surat ini.",
                "audio"=> "https=>//santrikoding.com/storage/audio/060.mp3"
              ],
              [
                "nomor"=> 61,
                "nama"=> "الصّفّ",
                "nama_latin"=> "As-Saff",
                "jumlah_ayat"=> 14,
                "tempat_turun"=> "madinah",
                "arti"=> "Barisan",
                "deskripsi"=> "Surat Ash Shaff terdiri atas 14 ayat termasuk golongan surat-surat Madaniyyah. Dinamai dengan \u003Ci\u003EAsh Shaff\u003C/i\u003E, karena pada ayat 4 surat ini terdapat kata \u003Ci\u003EShaffan\u003C/i\u003E yang berarti \u003Ci\u003Esatu barisan\u003C/i\u003E. Ayat ini menerangkan apa yang diridhai Allah sesudah menerangkan apa yang dimurkai-Nya. Pada ayat 3 diterangkan bahwa Allah murka kepada orang yang hanya pandai berkata saja tetapi tidak melaksanakan apa yang diucapkannya. Dan pada ayat 4 diterangkan bahwa Allah menyukai orang yang mempraktekkan apa yang diucapkannya yaitu orang-orang yang berperang pada jalan Allah dalam satu barisan.",
                "audio"=> "https=>//santrikoding.com/storage/audio/061.mp3"
              ],
              [
                "nomor"=> 62,
                "nama"=> "الجمعة",
                "nama_latin"=> "Al-Jumu'ah",
                "jumlah_ayat"=> 11,
                "tempat_turun"=> "madinah",
                "arti"=> "Jumat",
                "deskripsi"=> "Surat Al Jumu'ah ini terdiri atas 11 ayat, termasuk golongan-golongan surat-surat Madaniyyah dan diturunkan sesudah surat Ash Shaf. Nama surat Al Jumu'ah diambil dari kata \u003Ci\u003EAl Jumu'ah\u003C/i\u003E yang terdapat pada ayat 9 surat ini yang artinya=> \u003Ci\u003Ehari Jum'at\u003C/i\u003E.",
                "audio"=> "https=>//santrikoding.com/storage/audio/062.mp3"
              ],
              [
                "nomor"=> 63,
                "nama"=> "المنٰفقون",
                "nama_latin"=> "Al-Munafiqun",
                "jumlah_ayat"=> 11,
                "tempat_turun"=> "madinah",
                "arti"=> "Orang-Orang Munafik",
                "deskripsi"=> "Surat ini terdiri atas 11 ayat, termasuk golongan surat-surat Madaniyyah, diturunkan sesudah surat Al Hajj. Surat ini dinamai \u003Ci\u003EAl-Munaafiquun\u003C/i\u003E  yang artinya orang-orang munafik, karena surat ini mengungkapkan  sifat-sifat orang-orang munafik.",
                "audio"=> "https=>//santrikoding.com/storage/audio/063.mp3"
              ],
              [
                "nomor"=> 64,
                "nama"=> "التغابن",
                "nama_latin"=> "At-Tagabun",
                "jumlah_ayat"=> 18,
                "tempat_turun"=> "madinah",
                "arti"=> "Pengungkapan Kesalahan",
                "deskripsi"=> "Surat ini terdiri atas 18 ayat, termasuk golongan surat-surat Madaniyyah dan diturunkan sesudah surat At Tahrim. Nama \u003Ci\u003EAt Taghaabun\u003C/i\u003E diambil dari kata \u003Ci\u003EAt Taghaabun\u003C/i\u003E yang terdapat pada ayat ke 9 yang artinya \u003Ci\u003Ehari dinampakkan kesalahan-kesalahan\u003C/i\u003E.",
                "audio"=> "https=>//santrikoding.com/storage/audio/064.mp3"
              ],
              [
                "nomor"=> 65,
                "nama"=> "الطلاق",
                "nama_latin"=> "At-Talaq",
                "jumlah_ayat"=> 12,
                "tempat_turun"=> "madinah",
                "arti"=> "Talak",
                "deskripsi"=> "Surat ini terdiri atas 12 ayat, termasuk golongan surat-surat Madaniyyah, diturunkan sesudah surat Al Insaan. Dinamai surat \u003Ci\u003EAth Thalaaq\u003C/i\u003E karena kebanyakan ayat-ayatnya mengenai masalah talak dan yang berhubungan dengan masalah itu.",
                "audio"=> "https=>//santrikoding.com/storage/audio/065.mp3"
              ],
              [
                "nomor"=> 66,
                "nama"=> "التحريم",
                "nama_latin"=> "At-Tahrim",
                "jumlah_ayat"=> 12,
                "tempat_turun"=> "madinah",
                "arti"=> "Pengharaman",
                "deskripsi"=> "Surat ini terdiri atas 12 ayat, termasuk golongan surat-surat Madaniyyah, diturunkan sesudah surat Al Hujuraat. Dinamai surat \u003Ci\u003EAt Tahrim\u003C/i\u003E karena pada awal surat ini terdapat kata \u003Ci\u003Etuharrim\u003C/i\u003E yang kata asalnya adalah Attahrim yang berarti \u003Ci\u003Emengharamkan\u003C/i\u003E.",
                "audio"=> "https=>//santrikoding.com/storage/audio/066.mp3"
              ],
              [
                "nomor"=> 67,
                "nama"=> "الملك",
                "nama_latin"=> "Al-Mulk",
                "jumlah_ayat"=> 30,
                "tempat_turun"=> "mekah",
                "arti"=> "Kerajaan",
                "deskripsi"=> "Surat ini terdiri atas 30 ayat, termasuk golongan surat-surat  Makkiyah, diturunkan sesudah Ath Thuur.\u003Cbr\u003E Nama \u003Ci\u003EAl Mulk\u003C/i\u003E diambil dari kata \u003Ci\u003EAl Mulk\u003C/i\u003E yang terdapat pada ayat pertama surat ini yang artinya kerajaan atau kekuasaan. Dinamai pula surat ini dengan \u003Ci\u003EAt Tabaarak\u003C/i\u003E (Maha Suci).",
                "audio"=> "https=>//santrikoding.com/storage/audio/067.mp3"
              ],
              [
                "nomor"=> 68,
                "nama"=> "القلم",
                "nama_latin"=> "Al-Qalam",
                "jumlah_ayat"=> 52,
                "tempat_turun"=> "mekah",
                "arti"=> "Pena",
                "deskripsi"=> "Surat ini terdiri atas 52 ayat,termasuk golongan surat-surat Makkiyah,diturunkan sesudah surat Al Alaq. \u003Cbr\u003ENama \u003Ci\u003EAl Qalam\u003C/i\u003E diambil dari kata Al Qalam yang terdapat pada ayat pertama surat iniyang artinya \u003Ci\u003Epena\u003C/i\u003E. Surat ini dinamai pula dengan surat \u003Ci\u003ENun\u003C/i\u003E (huruf \u003Ci\u003Enun\u003C/i\u003E).",
                "audio"=> "https=>//santrikoding.com/storage/audio/068.mp3"
              ],
              [
                "nomor"=> 69,
                "nama"=> "الحاۤقّة",
                "nama_latin"=> "Al-Haqqah",
                "jumlah_ayat"=> 52,
                "tempat_turun"=> "mekah",
                "arti"=> "Hari Kiamat",
                "deskripsi"=> "Surat ini terdiri atas 52 ayat,termasuk golongan surat-surat Makkiyah,diturunkan sesudah surat Al Mulk. \u003Cbr\u003E Nama \u003Ci\u003EAl Haaqqah\u003C/i\u003E diambil dari kata \u003Ci\u003EAl Haaqqah\u003C/i\u003E yang terdapat pada ayat pertama surat ini yang artinya \u003Ci\u003Ehari kiamat\u003C/i\u003E",
                "audio"=> "https=>//santrikoding.com/storage/audio/069.mp3"
              ],
              [
                "nomor"=> 70,
                "nama"=> "المعارج",
                "nama_latin"=> "Al-Ma'arij",
                "jumlah_ayat"=> 44,
                "tempat_turun"=> "mekah",
                "arti"=> "Tempat Naik",
                "deskripsi"=> "Surat ini terdiri atas 44 ayat, termasuk golongan surat-surat Makkiyyah, diturunkan sesudah surat Al Haaqqah.\u003Cbr\u003EPerkataan \u003Ci\u003EAl Ma'arij\u003C/i\u003E yang menjadi nama bagi surat ini adalah kata jamak dari \u003Ci\u003EMi'raj\u003C/i\u003E, diambil dari perkataan Al Ma'arij yang terdapat pada ayat 3, yang artinya menurut bahasa \u003Ci\u003Etempat naik\u003C/i\u003E. Sedang para ahli  tafsir memberi arti bermacam-macam, di antaranya \u003Ci\u003Elangit\u003C/i\u003E, nikmat karunia dan derajat atau tingkatan yang diberikan Allah s.w.t kepada ahli surga.",
                "audio"=> "https=>//santrikoding.com/storage/audio/070.mp3"
              ],
              [
                "nomor"=> 71,
                "nama"=> "نوح",
                "nama_latin"=> "Nuh",
                "jumlah_ayat"=> 28,
                "tempat_turun"=> "mekah",
                "arti"=> "Nuh",
                "deskripsi"=> "Surat ini terdiri atas 28 ayat, termasuk golongan surat-surat Makkiyah, diturunkan sesudah surat An Nahl. \u003Cbr\u003EDinamakan dengan surat \u003Ci\u003ENuh\u003C/i\u003E karena surat ini seluruhnya menjelaskan da'wah dan doa Nabi Nuh a.s.",
                "audio"=> "https=>//santrikoding.com/storage/audio/071.mp3"
              ],
              [
                "nomor"=> 72,
                "nama"=> "الجن",
                "nama_latin"=> "Al-Jinn",
                "jumlah_ayat"=> 28,
                "tempat_turun"=> "mekah",
                "arti"=> "Jin",
                "deskripsi"=> "Surat Al Jin terdiri atas 28 ayat, termasuk golongan surat-surat Makkiyyah, diturunkan sesudah surat Al A'raaf. Dinamai \u003Ci\u003EAl Jin\u003C/i\u003E diambil dari perkataan \u003Ci\u003EAl Jin\u003C/i\u003E yang terdapat  pada ayat pertama surat ini. Pada ayat tersebut dan ayat-ayat berikutnya  diterangkan bahwa Jin sebagai makhluk halus telah mendengar pembacaan  Al Quran dan mereka mengikuti ajaran Al Quran tersebut.",
                "audio"=> "https=>//santrikoding.com/storage/audio/072.mp3"
              ],
              [
                "nomor"=> 73,
                "nama"=> "المزّمّل",
                "nama_latin"=> "Al-Muzzammil",
                "jumlah_ayat"=> 20,
                "tempat_turun"=> "mekah",
                "arti"=> "Orang Yang Berselimut",
                "deskripsi"=> "Surat Al Muzzammil terdiri atas 20 ayat, termasuk golongan surat-surat Makkiyah, diturunkan sesudah surat Al Qalam.\u003Cbr\u003EDinamai \u003Ci\u003EAl Muzzammil\u003C/i\u003E (orang yang berselimut) diambil dari perkataan \u003Ci\u003EAl Muzzammil\u003C/i\u003E yang terdapat pada ayat pertama surat ini. Yang dimaksud dengan \u003Ci\u003Eorang yang berkemul\u003C/i\u003E ialah Nabi Muhammad s.a.w.",
                "audio"=> "https=>//santrikoding.com/storage/audio/073.mp3"
              ],
              [
                "nomor"=> 74,
                "nama"=> "المدّثّر",
                "nama_latin"=> "Al-Muddassir",
                "jumlah_ayat"=> 56,
                "tempat_turun"=> "mekah",
                "arti"=> "Orang Yang Berkemul",
                "deskripsi"=> "Surat Al Muddatstsir terdiri atas 56 ayat, termasuk golongan  surat-surat Makkiyah, diturunkan sesudah surat Al Muzzammil. \tDinamai \u003Ci\u003EAl Muddatstsir\u003C/i\u003E (orang yang berkemul) diambil dari perkataan \u003Ci\u003EAl Muddatstsir\u003C/i\u003E yang terdapat pada ayat pertama surat ini.",
                "audio"=> "https=>//santrikoding.com/storage/audio/074.mp3"
              ],
              [
                "nomor"=> 75,
                "nama"=> "القيٰمة",
                "nama_latin"=> "Al-Qiyamah",
                "jumlah_ayat"=> 40,
                "tempat_turun"=> "mekah",
                "arti"=> "Hari Kiamat",
                "deskripsi"=> "Surat Al Qiyaamah terdiri atas 40 ayat, termasuk golongan surat-surat Makkiyah, diturunkan sesudah surat Al Qaari'ah. Dinamai \u003Ci\u003EAl Qiyaamah\u003C/i\u003E (hari kiamat) diambil dari perkataan \u003Ci\u003EAl Qiyaamah\u003C/i\u003E yang terdapat pada ayat pertama surat ini.",
                "audio"=> "https=>//santrikoding.com/storage/audio/075.mp3"
              ],
              [
                "nomor"=> 76,
                "nama"=> "الانسان",
                "nama_latin"=> "Al-Insan",
                "jumlah_ayat"=> 31,
                "tempat_turun"=> "madinah",
                "arti"=> "Manusia",
                "deskripsi"=> "Surat Al Insaan terdiri atas 31 ayat, termasuk golongan surat-surat Madaniyyah, diturunkan sesudah surat Ar Rahmaan. Dinamai \u003Ci\u003Eal Insaan\u003C/i\u003E (manusia) diambil dari perkataan \u003Ci\u003EAl Insaan\u003C/i\u003E yang terdapat pada ayat pertama surat ini.",
                "audio"=> "https=>//santrikoding.com/storage/audio/076.mp3"
              ],
              [
                "nomor"=> 77,
                "nama"=> "المرسلٰت",
                "nama_latin"=> "Al-Mursalat",
                "jumlah_ayat"=> 50,
                "tempat_turun"=> "mekah",
                "arti"=> "Malaikat Yang Diutus",
                "deskripsi"=> "Surat Al Mursalaat terdiri atas 50 ayat, termasuk golongan surat-surat Makkiyah, diturunkan sesudah surat Al Humazah. Dinamai \u003Ci\u003EAl Mursalaat\u003C/i\u003E (Malaikat-Malaikat yang diutus), diambil dari perkataan \u003Ci\u003EAl Mursalaat\u003C/i\u003E yang terdapat pada ayat pertama surat ini. Dinamai juga \u003Ci\u003EAmma yatasaa aluun\u003C/i\u003E diambil dari perkataan \u003Ci\u003EAmma yatasaa aluun\u003C/i\u003E yang terdapat pada ayat 1 surat ini.",
                "audio"=> "https=>//santrikoding.com/storage/audio/077.mp3"
              ],
              [
                "nomor"=> 78,
                "nama"=> "النبأ",
                "nama_latin"=> "An-Naba'",
                "jumlah_ayat"=> 40,
                "tempat_turun"=> "mekah",
                "arti"=> "Berita Besar",
                "deskripsi"=> "Surat An NabaÂ´ terdiri atas 40 ayat, termasuk golongan surat-surat Makkiyah, diturunkan sesudah surat Al MaÂ´aarij. \u003Cbr\u003EDinamai \u003Ci\u003EAn NabaÂ´\u003C/i\u003E (berita besar) diambil dari perkataan \u003Ci\u003EAn NabaÂ´\u003C/i\u003E yang terdapat pada ayat 2 surat ini. Dinamai juga \u003Ci\u003EAmma yatasaa aluun\u003C/i\u003E diambil dari perkataan \u003Ci\u003EAmma yatasaa aluun\u003C/i\u003E yang terdapat pada ayat 1 surat ini.",
                "audio"=> "https=>//santrikoding.com/storage/audio/078.mp3"
              ],
              [
                "nomor"=> 79,
                "nama"=> "النّٰزعٰت",
                "nama_latin"=> "An-Nazi'at",
                "jumlah_ayat"=> 46,
                "tempat_turun"=> "mekah",
                "arti"=> "Malaikat Yang Mencabut",
                "deskripsi"=> "Surat An NaaziÂ´aat terdiri atas 46 ayat, termasuk golongan surat-surat Makkiyah, diturunkan sesudah surat An NabaÂ´. Dinamai \u003Ci\u003EAn NaaziÂ´aat\u003C/i\u003E diambil dari perkataan \u003Ci\u003EAn NaaziÂ´aat\u003C/i\u003E yang terdapat pada ayat pertama surat ini. Dinamai pula \u003Ci\u003Eas Saahirah\u003C/i\u003E yang diambil dari ayat 14, dinamai juga \u003Ci\u003EAth Thaammah\u003C/i\u003E diambil dari ayat 34.",
                "audio"=> "https=>//santrikoding.com/storage/audio/079.mp3"
              ],
              [
                "nomor"=> 80,
                "nama"=> "عبس",
                "nama_latin"=> "'Abasa",
                "jumlah_ayat"=> 42,
                "tempat_turun"=> "mekah",
                "arti"=> "Bermuka Masam",
                "deskripsi"=> "Surat 'Abasa terdiri atas 42 ayat, termasuk golongan surat-surat Makkiyah, diturunkan sesudah surat An Najm. Dinamai \u003Ci\u003E'Abasa\u003C/i\u003E  diambil dari perkataan \u003Ci\u003E'Abasa\u003C/i\u003E yang terdapat pada ayat pertama surat ini.\u003Cbr\u003E Menurut riwayat, pada suatu ketika Rasulullah s.a.w. menerima dan berbicara dengan pemuka-pemuka Quraisy yang beliau harapkan agar mereka masuk Islam. Dalam pada itu datanglah Ibnu Ummi Maktum, seorang sahabat yang buta yang mengharap agar Rasulullah s.a.w. membacakan kepadanya ayat- ayat Al Quran yang telah diturunkan Allah. tetapi Rasulullah s.a.w. bermuka masam dan memalingkan muka dari Ibnu Ummi Maktum yang buta itu, lalu Allah menurunkan surat ini sebagai teguran atas sikap Rasulullah terhadap ibnu Ummi Maktum itu.",
                "audio"=> "https=>//santrikoding.com/storage/audio/080.mp3"
              ],
              [
                "nomor"=> 81,
                "nama"=> "التكوير",
                "nama_latin"=> "At-Takwir",
                "jumlah_ayat"=> 29,
                "tempat_turun"=> "mekah",
                "arti"=> "Penggulungan",
                "deskripsi"=> "Surat At Takwir terdiri atas 29 ayat dan termasuk golongan surat-surat Makkiyah, diturunkan sesudah surat Al Masadd. Kata \u003Ci\u003EAt Takwir\u003C/i\u003E (terbelah) yang menjadi nama bagi surat ini adalah dari kata asal (mashdar) dari kata kerja \u003Ci\u003Ekuwwirat\u003C/i\u003E (digulung) yang terdapat pada ayat pertama surat ini.",
                "audio"=> "https=>//santrikoding.com/storage/audio/081.mp3"
              ],
              [
                "nomor"=> 82,
                "nama"=> "الانفطار",
                "nama_latin"=> "Al-Infitar",
                "jumlah_ayat"=> 19,
                "tempat_turun"=> "mekah",
                "arti"=> "Terbelah",
                "deskripsi"=> "Surat ini terdiri atas 19 ayat, termasuk golongan surat-surat Makkiyah dan diturunkan sesudah surat An Naazi'aat. Al Infithaar yang dijadikan  nama untuk surat ini adalah kata asal dari kata \u003Ci\u003EInfatharat\u003C/i\u003E (terbelah)  yang terdapat pada ayat pertama.",
                "audio"=> "https=>//santrikoding.com/storage/audio/082.mp3"
              ],
              [
                "nomor"=> 83,
                "nama"=> "المطفّفين",
                "nama_latin"=> "Al-Mutaffifin",
                "jumlah_ayat"=> 36,
                "tempat_turun"=> "mekah",
                "arti"=> "Orang-Orang Curang",
                "deskripsi"=> "Surat ini terdiri atas 36 ayat, termasuk golongan surat-surat Makkiyyah, diturunkan sesudah surat Al 'Ankabuut dan merupakan  surat yang terakhir di Mekkah sebelum hijrah. \u003Ci\u003EAl Muthaffifiin\u003C/i\u003E  yang dijadikan nama bagi surat ini diambil dari kata  \u003Ci\u003EAl Muthaffifiin\u003C/i\u003E yang terdapat pada ayat pertama.",
                "audio"=> "https=>//santrikoding.com/storage/audio/083.mp3"
              ],
              [
                "nomor"=> 84,
                "nama"=> "الانشقاق",
                "nama_latin"=> "Al-Insyiqaq",
                "jumlah_ayat"=> 25,
                "tempat_turun"=> "mekah",
                "arti"=> "Terbelah",
                "deskripsi"=> "Surat Al Insyiqaaq, terdiri atas 25 ayat, termasuk golongan surat-surat Makkiyah, diturunkan sesudah surat Al Infithaarr. Dinamai \u003Ci\u003EAl Insyiqaaq\u003C/i\u003E (terbelah), diambil dari perkataan \u003Ci\u003EInsyaqqat\u003C/i\u003E yang terdapat pada permulaan surat ini, yang pokok katanya ialah \u003Ci\u003Einsyiqaaq\u003C/i\u003E.",
                "audio"=> "https=>//santrikoding.com/storage/audio/084.mp3"
              ],
              [
                "nomor"=> 85,
                "nama"=> "البروج",
                "nama_latin"=> "Al-Buruj",
                "jumlah_ayat"=> 22,
                "tempat_turun"=> "mekah",
                "arti"=> "Gugusan Bintang",
                "deskripsi"=> "Surat Al Buruuj terdiri atas 22 ayat, termasuk golongan surat-surat Makkiyyah diturunkan sesudah surat Asy-Syams.\u003Cbr\u003EDinamai \u003Ci\u003EAl Buruuj\u003C/i\u003E (gugusan bintang) diambil dari perkataan \u003Ci\u003EAl Buruuj\u003C/i\u003E yang terdapat pada ayat 1 surat ini.",
                "audio"=> "https=>//santrikoding.com/storage/audio/085.mp3"
              ],
              [
                "nomor"=> 86,
                "nama"=> "الطارق",
                "nama_latin"=> "At-Tariq",
                "jumlah_ayat"=> 17,
                "tempat_turun"=> "mekah",
                "arti"=> "Yang Datang Di Malam Hari",
                "deskripsi"=> "Surat Ath Thaariq terdiri atas 17 ayat, termasuk golongan surat-surat Makkiyah,  diturunkan sesudah surat Al Balad.  Dinamai \u003Ci\u003EAth Thaariq\u003C/i\u003E (yang datang di malam hari) diambil dari  perkataan \u003Ci\u003EAth Thaariq\u003C/i\u003E yang terdapat pada ayat 1 surat ini.",
                "audio"=> "https=>//santrikoding.com/storage/audio/086.mp3"
              ],
              [
                "nomor"=> 87,
                "nama"=> "الاعلى",
                "nama_latin"=> "Al-A'la",
                "jumlah_ayat"=> 19,
                "tempat_turun"=> "mekah",
                "arti"=> "Maha Tinggi",
                "deskripsi"=> "Surat ini terdiri atas 19 ayat, termasuk golongan surat-surat Makkiyyah, dan diturunkan sesudah surat At Takwiir. Nama \u003Ci\u003EAl AÂ´laa\u003C/i\u003E diambil dari kata \u003Ci\u003EAl AÂ´laa\u003C/i\u003E yang terdapat pada ayat pertama, berarti \u003Ci\u003EYang Paling Tinggi\u003C/i\u003E. Muslim meriwayatkan dalam kitab Al Jumu'ah, dan diriwayatkan pula oleh Ashhaabus Sunan, dari Nu'man ibnu Basyir bahwa Rasulullah s.a.w. pada shalat dua hari Raya (Fitri dan Adha) dan shalat Jum'at membaca surat Al AÂ´laa pada rakaat pertama, dan surat Al Ghaasyiyah pada rakaat kedua.",
                "audio"=> "https=>//santrikoding.com/storage/audio/087.mp3"
              ],
              [
                "nomor"=> 88,
                "nama"=> "الغاشية",
                "nama_latin"=> "Al-Gasyiyah",
                "jumlah_ayat"=> 26,
                "tempat_turun"=> "mekah",
                "arti"=> "Hari Kiamat",
                "deskripsi"=> "Surat ini terdiri atas 26 ayat, termasuk surat-surat Makkiyah, diturunkan sesudah surat Adz Dzaariat. Nama \u003Ci\u003EGhaasyiyah\u003C/i\u003E diambil dari kata \u003Ci\u003EAl Ghaasyiyah\u003C/i\u003E yang terdapat pada ayat pertama surat ini yang  artinya peristiwa yang dahsyat, tapi yang dimaksud adalah hari kiamat. Surat ini adalah surat yang kerap kali dibaca Nabi pada rakaat kedua  pada shalat hari-hari Raya dan shalat Jum'at",
                "audio"=> "https=>//santrikoding.com/storage/audio/088.mp3"
              ],
              [
                "nomor"=> 89,
                "nama"=> "الفجر",
                "nama_latin"=> "Al-Fajr",
                "jumlah_ayat"=> 30,
                "tempat_turun"=> "mekah",
                "arti"=> "Fajar",
                "deskripsi"=> "Surat ini terdiri atas 30 ayat, termasuk golongan surat-surat Makkiyyah, diturunkan sesudah surat Al Lail. Nama \u003Ci\u003EAl Fajr\u003C/i\u003E diambil dari kata \u003Ci\u003EAl Fajr\u003C/i\u003E yang terdapat pada ayat pertama surat ini yang artinya \u003Ci\u003Efajar\u003C/i\u003E.",
                "audio"=> "https=>//santrikoding.com/storage/audio/089.mp3"
              ],
              [
                "nomor"=> 90,
                "nama"=> "البلد",
                "nama_latin"=> "Al-Balad",
                "jumlah_ayat"=> 20,
                "tempat_turun"=> "mekah",
                "arti"=> "Negeri",
                "deskripsi"=> "Surat Al Balad terdiri atas 20 ayat, termasuk golongan surat-surat Makkiyyah, diturunkan sesudah surat Qaaf. Dinamai \u003Ci\u003EAl Balad\u003C/i\u003E, diambil dari perkataan \u003Ci\u003EAl Balad\u003C/i\u003E yang terdapat  pada ayat pertama surat ini. Yang dimaksud dengan kota di sini ialah kota Mekah.",
                "audio"=> "https=>//santrikoding.com/storage/audio/090.mp3"
              ],
              [
                "nomor"=> 91,
                "nama"=> "الشمس",
                "nama_latin"=> "Asy-Syams",
                "jumlah_ayat"=> 15,
                "tempat_turun"=> "mekah",
                "arti"=> "Matahari",
                "deskripsi"=> "Surat Asy Syams terdiri atas 15 ayat, termasuk golongan surat-surat Makkiyyah, diturunkan sesudah surat Al Qadar.  Dinamai \u003Ci\u003EAsy Syams\u003C/i\u003E (matahari) diambil dari perkataan \u003Ci\u003EAsy Syams\u003C/i\u003E yang terdapat pada ayat permulaan surat ini.",
                "audio"=> "https=>//santrikoding.com/storage/audio/091.mp3"
              ],
              [
                "nomor"=> 92,
                "nama"=> "الّيل",
                "nama_latin"=> "Al-Lail",
                "jumlah_ayat"=> 21,
                "tempat_turun"=> "mekah",
                "arti"=> "Malam",
                "deskripsi"=> "Surat ini terdiri atas 21 ayat, termasuk golongan surat-surat Makkiyah, diturunkan sesudah surat Al A'laa. Surat ini dinamai \u003Ci\u003EAl Lail\u003C/i\u003E (malam), diambil dari perkataan \u003Ci\u003EAl Lail\u003C/i\u003E yang terdapat pada ayat pertama surat ini",
                "audio"=> "https=>//santrikoding.com/storage/audio/092.mp3"
              ],
              [
                "nomor"=> 93,
                "nama"=> "الضحى",
                "nama_latin"=> "Ad-Duha",
                "jumlah_ayat"=> 11,
                "tempat_turun"=> "mekah",
                "arti"=> "Duha",
                "deskripsi"=> "Surat ini terdiri atas 11 ayat, termasuk golongan surat Makiyyah dan diturunkan sesudah surat Al Fajr. Nama \u003Ci\u003EAdh Dhuhaa\u003C/i\u003E diambil dari kata yang terdapat pada ayat pertama, artinya => waktu matahari sepenggalahan naik.",
                "audio"=> "https=>//santrikoding.com/storage/audio/093.mp3"
              ],
              [
                "nomor"=> 94,
                "nama"=> "الشرح",
                "nama_latin"=> "Asy-Syarh",
                "jumlah_ayat"=> 8,
                "tempat_turun"=> "mekah",
                "arti"=> "Lapang",
                "deskripsi"=> "Surat ini terdiri atas 8 ayat, termasuk golongan surat-surat Makkiyah dan diturunkan sesudah surat Adh Dhuhaa. Nama \u003Ci\u003EAlam Nasyrah\u003C/i\u003E diambil dari kata \u003Ci\u003EAlam Nasyrah\u003C/i\u003E yang terdapat pada ayat pertama, yang berarti=> bukankah Kami telah melapangkan.",
                "audio"=> "https=>//santrikoding.com/storage/audio/094.mp3"
              ],
              [
                "nomor"=> 95,
                "nama"=> "التين",
                "nama_latin"=> "At-Tin",
                "jumlah_ayat"=> 8,
                "tempat_turun"=> "mekah",
                "arti"=> "Buah Tin",
                "deskripsi"=> "Surat ini terdiri atas 8 ayat, termasuk golongan surat-surat Makkiyah, diturunkan sesudah surat Al Buruuj. Nama At Tiin diambil dari kata \u003Ci\u003EAt Tiin\u003C/i\u003E yang terdapat pada ayat pertama surat ini yang artinya buah Tin.",
                "audio"=> "https=>//santrikoding.com/storage/audio/095.mp3"
              ],
              [
                "nomor"=> 96,
                "nama"=> "العلق",
                "nama_latin"=> "Al-'Alaq",
                "jumlah_ayat"=> 19,
                "tempat_turun"=> "mekah",
                "arti"=> "Segumpal Darah",
                "deskripsi"=> "Surat Al 'Alaq terdiri atas 19 ayat, termasuk golongan surat-surat Makkiyah. Ayat 1 sampai dengan 5 dari surat ini adalah ayat-ayat Al Quran yang pertama sekali diturunkan, yaitu di waktu Nabi Muhammad s.a.w. berkhalwat di gua Hira'. Surat ini dinamai \u003Ci\u003EAl 'Alaq\u003C/i\u003E (segumpal darah), diambil dari perkataan \u003Ci\u003EAlaq\u003C/i\u003E yang terdapat pada ayat 2 surat ini. Surat ini dinamai juga dengan \u003Ci\u003EIqra\u003C/i\u003E atau \u003Ci\u003EAl Qalam\u003C/i\u003E.",
                "audio"=> "https=>//santrikoding.com/storage/audio/096.mp3"
              ],
              [
                "nomor"=> 97,
                "nama"=> "القدر",
                "nama_latin"=> "Al-Qadr",
                "jumlah_ayat"=> 5,
                "tempat_turun"=> "mekah",
                "arti"=> "Kemuliaan",
                "deskripsi"=> "Surat Al Qadr terdiri atas 5 ayat, termasuk golongan surat-surat Makkiyah, diturunkan sesudah surat 'Abasa. Surat ini dinamai \u003Ci\u003EAl Qadr\u003C/i\u003E (kemuliaan), diambil dari perkataan \u003Ci\u003EAl Qadr\u003C/i\u003E yang terdapat pada ayat pertama surat ini.",
                "audio"=> "https=>//santrikoding.com/storage/audio/097.mp3"
              ],
              [
                "nomor"=> 98,
                "nama"=> "البيّنة",
                "nama_latin"=> "Al-Bayyinah",
                "jumlah_ayat"=> 8,
                "tempat_turun"=> "madinah",
                "arti"=> "Bukti Nyata",
                "deskripsi"=> "Surat Al Bayyinah terdiri atas 8 ayat, termasuk golongan surat-surat Madaniyyah, diturunkan sesudah surat Ath Thalaq. Dinamai \u003Ci\u003EAl Bayyinah\u003C/i\u003E (bukti yang nyata) diambil dari perkataan \u003Ci\u003EAl Bayyinah\u003C/i\u003E yang terdapat pada ayat pertama surat ini.",
                "audio"=> "https=>//santrikoding.com/storage/audio/098.mp3"
              ],
              [
                "nomor"=> 99,
                "nama"=> "الزلزلة",
                "nama_latin"=> "Az-Zalzalah",
                "jumlah_ayat"=> 8,
                "tempat_turun"=> "madinah",
                "arti"=> "Guncangan",
                "deskripsi"=> "Surat ini terdiri atas 8 ayat, termasuk golongan surat-surat Madaniyyah diturunkan sesudah surat An Nisaa'. Nama \u003Ci\u003EAl Zalzalah\u003C/i\u003E diambil dari kata=> \u003Ci\u003EZilzaal\u003C/i\u003E yang terdapat pada ayat pertama surat ini yang berarti goncangan.",
                "audio"=> "https=>//santrikoding.com/storage/audio/099.mp3"
              ],
              [
                "nomor"=> 100,
                "nama"=> "العٰديٰت",
                "nama_latin"=> "Al-'Adiyat",
                "jumlah_ayat"=> 11,
                "tempat_turun"=> "mekah",
                "arti"=> "Kuda Yang Berlari Kencang",
                "deskripsi"=> "Surat ini terdiri atas 11 ayat, termasuk golongan surat-surat Makkiyyah, diturunkan sesudah surat Al'Ashr. Nama \u003Ci\u003EAl 'Aadiyaat\u003C/i\u003E diambil dari kata \u003Ci\u003EAl 'Aadiyaat\u003C/i\u003E yang terdapat pada ayat pertama surat ini, artinya yang berlari kencang.",
                "audio"=> "https=>//santrikoding.com/storage/audio/100.mp3"
              ],
              [
                "nomor"=> 101,
                "nama"=> "القارعة",
                "nama_latin"=> "Al-Qari'ah",
                "jumlah_ayat"=> 11,
                "tempat_turun"=> "mekah",
                "arti"=> "Hari Kiamat",
                "deskripsi"=> "Surat ini terdiri atas 11 ayat, termasuk golongan surat-surat Makkiyyah, diturunkan sesudah surat Quraisy. Nama \u003Ci\u003EAl Qaari'ah\u003C/i\u003E diambil dari kata \u003Ci\u003EAl Qaari'ah\u003C/i\u003E yang terdapat pada ayat pertama, artinya mengetok dengan keras, kemudian kata ini dipakai untuk nama hari kiamat.",
                "audio"=> "https=>//santrikoding.com/storage/audio/101.mp3"
              ],
              [
                "nomor"=> 102,
                "nama"=> "التكاثر",
                "nama_latin"=> "At-Takasur",
                "jumlah_ayat"=> 8,
                "tempat_turun"=> "mekah",
                "arti"=> "Bermegah-Megahan",
                "deskripsi"=> "Surat At Takaatsur terdiri atas 8 ayat, termasuk golongan surat-surat Makkiyyah, diturunkan sesudah surat Al Kautsar. Dinamai \u003Ci\u003EAt Takaatsur\u003C/i\u003E (bermegah-megahan) diambil dari perkataan \u003Ci\u003EAt Takaatsur\u003C/i\u003E yang terdapat pada ayat pertama surat ini.",
                "audio"=> "https=>//santrikoding.com/storage/audio/102.mp3"
              ],
              [
                "nomor"=> 103,
                "nama"=> "العصر",
                "nama_latin"=> "Al-'Asr",
                "jumlah_ayat"=> 3,
                "tempat_turun"=> "mekah",
                "arti"=> "Asar",
                "deskripsi"=> "Surat Al 'Ashr terdiri atas 3 ayat, termasuk golongan surat-surat Makkiyyah, diturunkan sesudah surat Alam Nasyrah. Dinamai \u003Ci\u003EAl 'Ashr\u003C/i\u003E (masa) diambil dari perkataan \u003Ci\u003EAl 'Ashr\u003C/i\u003E yang terdapat pada ayat pertama surat ini.",
                "audio"=> "https=>//santrikoding.com/storage/audio/103.mp3"
              ],
              [
                "nomor"=> 104,
                "nama"=> "الهمزة",
                "nama_latin"=> "Al-Humazah",
                "jumlah_ayat"=> 9,
                "tempat_turun"=> "mekah",
                "arti"=> "Pengumpat",
                "deskripsi"=> "Surat Al Humazah terdiri atas 9 ayat, termasuk golongan surat-surat Makkiyyah, diturunkan sesudah surat Al Qiyaamah. Dinamai \u003Ci\u003EAl Humazah\u003C/i\u003E (pengumpat) diambil dari perkataan \u003Ci\u003EHumazah\u003C/i\u003E yang terdapat pada ayat pertama surat ini.",
                "audio"=> "https=>//santrikoding.com/storage/audio/104.mp3"
              ],
              [
                "nomor"=> 105,
                "nama"=> "الفيل",
                "nama_latin"=> "Al-Fil",
                "jumlah_ayat"=> 5,
                "tempat_turun"=> "mekah",
                "arti"=> "Gajah",
                "deskripsi"=> "Surat ini terdiri atas 5 ayat, termasuk golongan surat-surat Makkiyyah, diturunkan sesudah surat Al Kaafirun. Nama \u003Ci\u003EAl Fiil\u003C/i\u003E diambil dari kata \u003Ci\u003EAl Fiil\u003C/i\u003E yang terdapat pada ayat pertama surat ini, artinya \u003Ci\u003Egajah\u003C/i\u003E. Surat Al Fiil mengemukakan cerita pasukan bergajah dari Yaman yang dipimpin oleh Abrahah yang ingin meruntuhkan Ka'bah di Mekah. Peristiwa ini terjadi pada tahun Nabi Muhammad s.a.w. dilahirkan.",
                "audio"=> "https=>//santrikoding.com/storage/audio/105.mp3"
              ],
              [
                "nomor"=> 106,
                "nama"=> "قريش",
                "nama_latin"=> "Quraisy",
                "jumlah_ayat"=> 4,
                "tempat_turun"=> "mekah",
                "arti"=> "Quraisy",
                "deskripsi"=> "Surat ini terdiri atas 4 ayat, termasuk golongan surat-surat Makkiyyah dan diturunkan sesudah surat At Tiin. Nama \u003Ci\u003EQuraisy\u003C/i\u003E diambil dari kata \u003Ci\u003EQuraisy\u003C/i\u003E yang terdapat pada ayat pertama, artinya suku Quraisy. Suku Quraisy adalah suku yang mendapat  kehormatan untuk memelihara Ka'bah.",
                "audio"=> "https=>//santrikoding.com/storage/audio/106.mp3"
              ],
              [
                "nomor"=> 107,
                "nama"=> "الماعون",
                "nama_latin"=> "Al-Ma'un",
                "jumlah_ayat"=> 7,
                "tempat_turun"=> "mekah",
                "arti"=> "Barang Yang Berguna",
                "deskripsi"=> "Surat ini terdiri atas 7 ayat, termasuk golongan surat-surat Makkiyyah, diturunkan sesudah surat At Taakatsur. Nama \u003Ci\u003EAl Maa'uun\u003C/i\u003E diambil dari kata \u003Ci\u003EAl Maa'uun\u003C/i\u003E yang terdapat pada ayat 7, artinya barang-barang yang berguna.",
                "audio"=> "https=>//santrikoding.com/storage/audio/107.mp3"
              ],
              [
                "nomor"=> 108,
                "nama"=> "الكوثر",
                "nama_latin"=> "Al-Kausar",
                "jumlah_ayat"=> 3,
                "tempat_turun"=> "mekah",
                "arti"=> "Pemberian Yang Banyak",
                "deskripsi"=> "Surat Al Kautsar terdiri atas 3 ayat, termasuk golongan surat-surat  Makkiyyah diturunkan sesudah surat Al 'Aadiyaat. Dinamai \u003Ci\u003EAl Kautsar\u003C/i\u003E (nikmat yang banyak) diambil dari perkataan \u003Ci\u003EAl Kautsar\u003C/i\u003E yang terdapat pada ayat pertama surat ini.\u003Cbr\u003ESurat ini sebagai penghibur hati Nabi Muhammad s.a.w.",
                "audio"=> "https=>//santrikoding.com/storage/audio/108.mp3"
              ],
              [
                "nomor"=> 109,
                "nama"=> "الكٰفرون",
                "nama_latin"=> "Al-Kafirun",
                "jumlah_ayat"=> 6,
                "tempat_turun"=> "mekah",
                "arti"=> "Orang-Orang kafir",
                "deskripsi"=> "Surat Al Kaafiruun terdiri atas 6 ayat, termasuk golongan surat-surat  Makkiyyah, diturunkan sesudah surat Al Maa'uun. Dinamai \u003Ci\u003EAl Kaafiruun\u003C/i\u003E (orang-orang kafir), diambil dari perkataan  \u003Ci\u003EAl Kaafiruun\u003C/i\u003E yang terdapat pada ayat pertama surat ini.",
                "audio"=> "https=>//santrikoding.com/storage/audio/109.mp3"
              ],
              [
                "nomor"=> 110,
                "nama"=> "النصر",
                "nama_latin"=> "An-Nasr",
                "jumlah_ayat"=> 3,
                "tempat_turun"=> "madinah",
                "arti"=> "Pertolongan",
                "deskripsi"=> "Surat An Nashr terdiri atas 3 ayat, termasuk golongan surat-surat  Madaniyyah yang diturunkan di Mekah sesudah surat At Taubah.  Dinamai \u003Ci\u003EAn Nashr\u003C/i\u003E (pertolongan) diambil dari perkataan \u003Ci\u003ENashr\u003C/i\u003E yang  terdapat pada ayat pertama surat ini.",
                "audio"=> "https=>//santrikoding.com/storage/audio/110.mp3"
              ],
              [
                "nomor"=> 111,
                "nama"=> "اللهب",
                "nama_latin"=> "Al-Lahab",
                "jumlah_ayat"=> 5,
                "tempat_turun"=> "mekah",
                "arti"=> "Api Yang Bergejolak",
                "deskripsi"=> "Surat ini terdiri atas 5 ayat, termasuk golongan surat-surat Makkiyyah,  diturunkan sesudah surat Al Fath. Nama \u003Ci\u003EAl Lahab\u003C/i\u003E diambil dari kata  \u003Ci\u003EAl Lahab\u003C/i\u003E yang terdapat pada ayat ketiga surat ini yang artinya gejolak  api. Surat ini juga dinamakan surat \u003Ci\u003EAl Masad\u003C/i\u003E.",
                "audio"=> "https=>//santrikoding.com/storage/audio/111.mp3"
              ],
              [
                "nomor"=> 112,
                "nama"=> "الاخلاص",
                "nama_latin"=> "Al-Ikhlas",
                "jumlah_ayat"=> 4,
                "tempat_turun"=> "mekah",
                "arti"=> "Ikhlas",
                "deskripsi"=> "Surat ini terdiri atas 4 ayat, termasuk golongan surat-surat  Makkiyyah, diturunkan sesudah sesudah surat An Naas. Dinamakan \u003Ci\u003EAl Ikhlas\u003C/i\u003E karena surat ini sepenuhnya menegaskan kemurnian keesaan Allah s.w.t.",
                "audio"=> "https=>//santrikoding.com/storage/audio/112.mp3"
              ],
              [
                "nomor"=> 113,
                "nama"=> "الفلق",
                "nama_latin"=> "Al-Falaq",
                "jumlah_ayat"=> 5,
                "tempat_turun"=> "mekah",
                "arti"=> "Subuh",
                "deskripsi"=> "Surat ini terdiri atas 5 ayat, termasuk golongan surat-surat Makkiyah, diturunkan sesudah surat Al Fiil. Nama \u003Ci\u003EAl Falaq\u003C/i\u003E diambil dari kata \u003Ci\u003EAl Falaq\u003C/i\u003E yang terdapat pada ayat pertama surat ini yang artinya waktu subuh. Diriwayatkan oleh Abu Daud, At Tirmizi dan An Nasa-i dari 'Uqbah bin 'Aamir bahwa Rasulullah s.a.w. bersembahyang dengan membaca surat Al Falaq  dan surat An Naas dalam perjalanan.",
                "audio"=> "https=>//santrikoding.com/storage/audio/113.mp3"
              ],
              [
                "nomor"=> 114,
                "nama"=> "الناس",
                "nama_latin"=> "An-Nas",
                "jumlah_ayat"=> 6,
                "tempat_turun"=> "mekah",
                "arti"=> "Manusia",
                "deskripsi"=> "Surat ini terdiri atas 6 ayat, termasuk golongan surat-surat Makkiyah,  diturunkan sesudah surat Al Falaq. Nama \u003Ci\u003EAn Naas\u003C/i\u003E diambil dari \u003Ci\u003EAn Naas\u003C/i\u003E yang berulang kali disebut dalam surat ini yang artinya manusia.",
                "audio"=> "https=>//santrikoding.com/storage/audio/114.mp3"
              ]
        ];
        DB::table('tbl_master_surah')->insert($surah);
    }
}