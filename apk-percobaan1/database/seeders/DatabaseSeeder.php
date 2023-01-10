<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(3)->create();
        

        User::create([
            'name' => 'Anang Marsyal',
            'username' => 'anangarpand000',
            'email' => 'anangmisbakhulkhoir@gmail.com',
            'password' => bcrypt('12345')
        ]);
        
        User::create([
            'name' => 'Aan Miftahul Fawaid',
            'username' => 'aanmadjapahit321',
            'email' => 'aanmiftakhulfawaid@gmail.com',
            'password' => bcrypt('12345')
        ]);

        Category::create([
            'name' => 'Pemrograman Dasar',
            'slug' => 'pemrograman-dasar'
        ]);

        Category::create([
            'name' => 'Jurnal Teknologi',
            'slug' => 'jurnal-teknologi'
        ]);

        Category::create([
            'name' => 'Kumparan Orang Orang Bodoh',
            'slug' => 'kumparan-orang-orang-bodoh'
        ]);

        Post::factory(20)->create();
        // post::create([
        //     'title' => 'ANALISIS PENERIMAAN TEKNOLOGI 5G MENGGUNAKAN UTAUT 3 PADA MAHASISWA UIN SUNAN AMPEL SURABAYA',
        //     'slug' => 'analisis-penerimaan-teknologi-5g-mengunakan-utaut-3-pada-mahasiswa-uin-sunan-ampel-surabaya',
            
        //     'excerpt' => 'Perkembangan global banyak memberikan fasilitas teknologi terbarukan yang memudahkan banyak manusia dalam 
        //     kehidupan sehari-hari, seperti adanya teknologi terbarukan yaitu jaringan 5G yang mana kecepatannya bisa sepuluh kali lipat 
        //     lebih cepat dari teknologi terdahulunya 4G. Dengan menggunakan teknologi 5G memungkinkan bisa semakin mempermudah dalam kegiatan 
        //     berselancar didunia digital saat ini.',

        //     'body' => 'Perkembangan global banyak memberikan fasilitas teknologi terbarukan yang memudahkan banyak manusia dalam kehidupan 
        //     sehari-hari, seperti adanya teknologi terbarukan yaitu jaringan 5G yang mana kecepatannya bisa sepuluh kali lipat lebih cepat dari 
        //     teknologi terdahulunya 4G. Dengan menggunakan teknologi 5G memungkinkan bisa semakin mempermudah dalam kegiatan berselancar didunia 
        //     digital saat ini. Meskipun dalam penggunaan teknologi 5G bisa mempercepat seseorang berselancar didunia digital sepuluh kali lebih cepat 
        //     dari teknologi sebelumnya tetapi beberapa mahasiswa masih terbilang lamban dalam mengintegrasikan teknologi terdahulunya ke dalam teknologi 
        //     terbarukan pada saat ini. Sehingga, analisis ini bertujuan untuk memahami indikator-indikator yang mempengaruhi adopsi teknologi yang merupakan 
        //     komponen penting dalam keberhasilan implementasi teknologi di dunia digital. 
            
        //     Metode kuantitatif diterapkan dalam penelitian ini dan teori UTAUT-3 digunakan sebagai rujukan model penelitian. Kuesioner disebarkan kepada 
        //     mahasiswa yang menggunakan teknologi 5G. Pengujian model dalam penelitian ini menggunakan metode PLS-SEM yang dilakukan dengan software Smart-PLS. 
        //     Hasil analisis menunjukan bahwa ditemukan beberapa indikator-indikator yang terbukti dapat mempengaruhi Niat Perilaku (Behavioural Intention) mahasiswa 
        //     UIN Sunan Ampel Surabaya dalam menggunakan teknologi 5G untuk berselancar didunia digital antara lain yaitu Pengaruh Sosial (Social Influence) 
        //     dengan nilai koefisien 0.234 serta didapatkan juga nilai T-Statistik 1.987 > 1.96 dan P-Values 0.047 < 0.1, dan Motivasi Hedonis (Hedonic Motivation) 
        //     dengan nilai koefisien sebesar 0,285 selain itu nilai T-Statistik 2,781 > 1,96 dan P-Values 0.06 < 0.1. Sedangkan dalam indikator Kebiasaan (Habit) secara 
        //     langsung mempengaruhi Perilaku Penggunaan (Use Behavior) menunjukkan nilai koefisien positif yakni 0,700 serta nilai T-Statistik sebesar 7,430 < 1,96 dan 
        //     P-Values 0,000 < 0,1 terhadap teknologi 5G.',
            
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'username' => 'anangarpand000'
        // ]);

        // post::create([
        //     'title' => 'TREN PERSAINGAN VENDOR ENTERPRISE RESOURCE PLANNING (ERP) DALAM BISNIS GLOBAL',
        //     'slug' => 'tren-persaingan-vendor-enterprise-resource-planning-(erp)-dalam-bisnis-global',
            
        //     'excerpt' => 'Perkembangan teknologi informasi yang semakin maju membuat setiap perusahaan berpeluang 
        //     untuk menggunakan teknologi sebagai alat yang digunakan untuk menunjukkan keunggulan bersaing 
        //     dari perusahaan lainnya. Teknologi yang saat ini digunakan oleh berbagai perusahaan untuk unjuk 
        //     gigi di dunia perbisnisan adalah teknologi dari Enterprise Resource Planning (ERP) ini.',
            
        //     'body' => 'Perkembangan teknologi informasi yang semakin maju membuat setiap perusahaan berpeluang 
        //     untuk menggunakan teknologi sebagai alat yang digunakan untuk menunjukkan keunggulan bersaing 
        //     dari perusahaan lainnya. Teknologi yang saat ini digunakan oleh berbagai perusahaan untuk unjuk 
        //     gigi di dunia perbisnisan adalah teknologi dari Enterprise Resource Planning (ERP) ini.

        //     Enterprise Resource Planning (ERP) merupakan konsep untuk mengelola sumber daya dan 
        //     merencanakan perusahaan seperti mesin, suku cadang, manusia, dana, material, waktu, dan kapasitas
        //     kapasitas yang membuat pengaruh menjadi luas[6]. Dari konsep inilah perusahaan, dapat 
        //     mengotomasi dan mengintegrasi proses bisnisnya dengan baik dan benar didukung juga oleh 
        //     infrastruktur yang memadaimulai dari infrastruktur komputer dan aplikasi, baik software maupun 
        //     hardware yang dapat mengolah data informasi perusahaan agar mudah dipergunakan. Hal itu terjadi 
        //     agar perusahaan mendapatkan hasil yang maksimal dengan menghasilkan nilai – nilai plus dalam 
        //     setiap pihak pihak yang berkepentingan dalam perusahaan tersebut.
            
        //     Enterprise Resource Planning (ERP) merupakan suatu perangkat lunak software aplikasi yang 
        //     terintegrasi dengan baik dan digunakan secara luas dalam Organisasi bisnis[7]. Aplikasi inilah yang 
        //     menjalankan fungsi – fungsi operasional dalam bisnis dan juga meningkatkan efektivitas dan efisiensi
        //     dari sebuah perusahaan. Dari aplikasi ini juga muncul modul – modul ERP yang dirancang sesuai 
        //     dengan proses bisnisnya dari hulu ke hilir dan terintegrasi dalam basis datanya untuk dipergunakan 
        //     dalam fungsi – fungsi operasionalnya.',
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'username' => 'anangarpand000'
        // ]);

        // post::create([
        //     'title' => 'Mengenal Tentang Pemrograman',
        //     'slug' => 'mengenal-tentang-pemrograman',
            
        //     'excerpt' => 'Pemrograman atau penataolahan adalah proses menulis, menguji dan memperbaiki (debug), dan 
        //     memelihara kode yang membangun suatu program komputer.[1] Kode ini ditulis dalam berbagai bahasa pemrograman. 
        //     Tujuan dari pemrograman adalah untuk memuat suatu program yang dapat melakukan suatu perhitungan atau pekerjaan 
        //     sesuai dengan keinginan si pemrogram. Untuk melakukan pemrograman, diperlukan keterampilan dalam algoritme, logika, 
        //     bahasa pemrograman, dan pada banyak kasus, pengetahuan-pengetahuan lain seperti matematika.',
            
        //     'body' => 'Pemrograman atau penataolahan adalah proses menulis, menguji dan memperbaiki (debug), dan 
        //     memelihara kode yang membangun suatu program komputer.[1] Kode ini ditulis dalam berbagai bahasa pemrograman. 
        //     Tujuan dari pemrograman adalah untuk memuat suatu program yang dapat melakukan suatu perhitungan atau pekerjaan 
        //     sesuai dengan keinginan si pemrogram. Untuk melakukan pemrograman, diperlukan keterampilan dalam algoritme, logika, 
        //     bahasa pemrograman, dan pada banyak kasus, pengetahuan-pengetahuan lain seperti matematika.
            
        //     Pemrograman adalah suatu seni dalam menggunakan satu atau lebih algoritme yang saling
        //     berhubungan dengan menggunakan suatu bahasa pemrograman tertentu sehingga menjadi
        //     suatu program komputer. Bahasa pemrograman yang berbeda mendukung gaya pemrograman yang berbeda pula.
        //     Gaya pemrograman ini biasa disebut paradigma pemrograman.
        //     Apakah memprogram perangkat lunak lebih merupakan seni, ilmu, atau teknik telah lama diperdebatkan. 
        //     Pemrogram yang baik biasanya mengkombinasikan ketiga hal tersebut, agar dapat menciptakan program yang efisien, 
        //     baik dari sisi saat dijalankan (run time) atau memori yang digunakan.',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'username' => 'anangarpand000'
        // ]);

        // post::create([
        //     'title' => 'HUBUNGAN KEPUASAN KERJA PIMPINAN TERHADAP IKLIM SEKOLAH DI SEKOLAH MENENGAH PERTAMA PGRI 6 SURABAYA',
        //     'slug' => 'hubungan-kepuasan-kerja-pimpinan-terhadap-iklim-sekolah-di-sekolah-menengah-pertama-pgri-6-surabaya',
            
        //     'excerpt' => 'Hubungan kepuasan kerja pimpinan terhadap iklim sekolah di sekolah menengah pertama PGRI 6
        //     Surabaya” Penelitian ini beranjak dari asumsi bahwa kepuasan kerja pimpinan dan iklim sekolah sangat penting dalam kegiatan belajar
        //     mengajar.Pertama kepuasan kerja merupakan hal yang harus di perhatikan oleh seorang pemimpin kepada para karyawan. Karena,
        //     kepuasan kerja pimpinan inilah yang akan memberikan feed back kepada semua yang ada di lembaga. Kedua, iklim sekolah dimana
        //     keadaan atau suasana yang ada pada lingkungan lembaga tersebut menjadi yang utama dalam aktifitas belajar-mengajar. Dalam hal ini
        //     pimpinan menjadi pokok yang utama dalam menjadikan sebuah iklim sekolah di katakan baik dan nyaman. Nyaman untuk belajar dan 
        //     nyaman untuk bersosialisasinya para peserta didik.',


        //     'body' => 'Hubungan kepuasan kerja pimpinan terhadap iklim sekolah di sekolah menengah pertama PGRI 6
        //     Surabaya” Penelitian ini beranjak dari asumsi bahwa kepuasan kerja pimpinan dan iklim sekolah sangat penting dalam kegiatan belajar
        //     mengajar.Pertama kepuasan kerja merupakan hal yang harus di perhatikan oleh seorang pemimpin kepada para karyawan. Karena,
        //     kepuasan kerja pimpinan inilah yang akan memberikan feed back kepada semua yang ada di lembaga. Kedua, iklim sekolah dimana
        //     keadaan atau suasana yang ada pada lingkungan lembaga tersebut menjadi yang utama dalam aktifitas belajar-mengajar. Dalam hal ini
        //     pimpinan menjadi pokok yang utama dalam menjadikan sebuah iklim sekolah di katakan baik dan nyaman. Nyaman untuk belajar dan 
        //     nyaman untuk bersosialisasinya para peserta didik.
            
        //     Penelitian ini bertujuan untuk mengetahui hubungan dari kepuasan kerja pimpinan di sekolah dengan iklim sekolah di sekolah Sekolah Menengah 
        //     Pertama PGRI 6 Surabaya. Jenis penelitian ini merupakan penelitian kuantitatif dengan jenis analisis korelasi product moment dengan jumlah responden 70. 
        //     Pengambilan data dari penelitian ini menggunakan angket yang disebarkan ke 70 responden di sekolah. Dan angket yang di buat oleh peneliti 
        //     merujuk pada dimensi-dimensi yang ada pada variabel X dan Y. Setelah itu, baru peneliti menjadikan indikator yang menjadi sebuah pernyataan pada angket. 
        //     Hasil penelitian pada pengolahan data SPSS for windows yang digunakan oleh penulis menunjukkan angka signifikansi 0,000 yang berarti H0 ditolak Ha diterima yang 
        //     berarti terdapat hubungan antara kepuasan kerja pimpinan dan iklim sekolah. Pada nilai korelasi Pearson menunjukkan angka 0,955 yang berarti terdapat korelasi sebesar 95,5%, 
        //     dengan angka itu dapat diketahui bahwa nilai korelasi tinggi, artinya sangat berhubungan antara kepuasan kerja pimpinan dengan iklim sekolah di Sekolah Menengah Pertama PGRI 6 Surabaya.',
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'username' => 'aanmadjapahit321'
        // ]);
    }
}
