<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([AdminSeeder::class,]);

        DB::table('identities')->insert([
            'title' => 'SMKN 1 Pacitan',
            'alamat' => 'Jl Letjend Soeprapto No. 53',
            'email' => 'smkn1pacitan.sch.id',
            'telp' => '08123456789',
            'fax' => '08123456789',
            'logo' => 'images/smk1.jpg',
        ]);

        DB::table('socials')->insert([
            'name' => 'facebook',
            'url' => '#'
        ]);
        DB::table('socials')->insert([
            'name' => 'instagram',
            'url' => '#'
        ]);
        DB::table('socials')->insert([
            'name' => 'youtube',
            'url' => '#'
        ]);
        DB::table('menus')->insert([
            'name' => 'Home',
            'url' => '#'
        ]);
        DB::table('menus')->insert([
            'name' => 'About',
            'url' => '#'
        ]);
        DB::table('menus')->insert([
            'name' => 'Jurusan',
            'url' => '#'
        ]);
        DB::table('menus')->insert([
            'name' => 'Contact',
            'url' => '#'
        ]);
        DB::table('posts')->insert([
            'title' => 'Amanat Upacara di SMK Negeri 1 Pacitan',
            'image' => 'images/smk1.jpg',
            'content' => 'Pagi ini, Senin, 11 September 2023, SMK Negeri 1 Pacitan menggelar upacara bendera yang dipimpin Kepala Sekolah selaku pembina Upacara Sekolah, memberikan amanat yang penuh makna tentang peningkatan disiplin murid dan tanggung jawab dalam menjaga aset sekolah.',
            'category_id' => '1',
        ]);
        DB::table('posts')->insert([
            'title' => 'Sambut Pemilu 2024, Siswa SMK Negeri 1 Pacitan lakukan perekaman E KTP',
            'image' => 'images/smk2.jpg',
            'content' => 'Dinas Kependudukan dan Catatan Sipil Kabupaten Pacitan menyelenggarakan percepatan perekaman E-KTP di SMK Negeri 1 Pacitan. Program ini ditujukan kepada 400 siswa/i SMK Negeri 1 Pacitan yang berusia 16 dan 17 tahun',
            'category_id' => '1',
        ]);
        DB::table('posts')->insert([
            'title' => 'Rayakan Kemerdekaan RI ke 78 SMK Negeri 1 Pacitan selenggarakan Karnaval Budaya',
            'image' => 'images/smk3.jpg',
            'content' => 'Suasana riang dan semangat membara terlihat di SMK Negeri 1 Pacitan saat Karnaval Merdeka digelar sebagai bagian dari perayaan Hari Kemerdekaan Indonesia ke-78.',
            'category_id' => '1',
        ]);
        DB::table('posts')->insert([
            'title' => 'Gebyar Pameran Tugas Akhir tahun 2023 SMK Negeri 1 Pacitan Kembali digelar',
            'image' => 'images/smk4.jpg',
            'content' => 'SMK Negeri 1 Pacitan akan menggelar pameran tugas akhir pada tanggal 4-7 Maret 2023 di Gedung Gasibu Pacitan. Acara yang dibuka oleh Bupati Pacitan, Indrata Nur Bayuaji, S.S, dan Wakil Bupati serta dihadiri oleh perwakilan dari dunia bisnis',
            'category_id' => '1',
        ]);
        DB::table('posts')->insert([
            'title' => 'Dukung Sapta Pesona Wisata, SMK Negeri 1 Pacitan gelar Bhakti Sosial Bersih Pantai',
            'image' => 'images/smk5.jpg',
            'content' => 'Dalam rangkaian HUT OSIS SMK NEGERI 1 PACITAN mengadakan bersih pantai. Kegiatan yang berlangsung di Pantai Pancer Dor Kab. Pacitan Jumat 3 Februari 2023 di ikuti oleh seluruh guru dan siswa SMK N 1 Pacitan.',
            'category_id' => '1',
        ]);
        DB::table('posts')->insert([
            'title' => 'Kenalkan Dunia Kampus, 18 Perguruan Tinggi Ramaikan Career Day di SMK Negeri 1 Pactian',
            'image' => 'images/smk6.jpg',
            'content' => 'Minimnya informasi studi lanjut pada siswa SMA/SMK sederajat membuat mereka bingung dan tidak tahu akan menjadi apa kedepannya dan bahkan banyak mahasiswa merasa salah mengambil jurusan.',
            'category_id' => '1',
        ]);

        DB::table('jurusans')->insert([
            'name' => 'Teknik Komputer dan Jaringan',
            'desc' => 'Sebuah kejuruan yang mempelajari tentang cara merakit komputer, mengenal dan mempelajari komponen hardware apa saja yang ada di dalam komputer, merakit komputer serta fokus mempelajari jaringan dasar.',
            'icon' => 'fas fa-desktop'
        ]);

        DB::table('jurusans')->insert([
            'name' => 'Rekayasa Perangkat Lunak',
            'desc' => 'Sebuah kejuruan yang didalamnya mempelajari prinsip sekaligus teknik mendesain perangkat lunak yang mudah digunakan dan tepat guna.',
            'icon' => 'fab fa-uncharted'
        ]);


        DB::table('jurusans')->insert([
            'name' => 'Multimedia',
            'desc' => 'Sebuah kejuruan yang mempelajari mengenai penggunaan komputer guna dalam menyajikan data-data dalam bentuk teks, suara, gambar, animasi, serta video yang dibuat semenarik mungkin dengan tools-tools yang telah tersedia seperti Adobe Photoshop, CorelDraw, Freehand, Adobe After Effect, dan lain-lain',
            'icon' => 'fas fa-camera'
        ]);


        DB::table('jurusans')->insert([
            'name' => ' Desain Pemodelan dan Informasi Bangunan',
            'desc' => 'Sebuah kejuruan yang mempelajari tentang perencanaan bangunan, pelaksanaan pembuatan gedung dan perbaikan gedung.',
            'icon' => 'fas fa-building'
        ]);


        DB::table('jurusans')->insert([
            'name' => ' Usaha Perjalanan Wisata',
            'desc' => 'Sebuah kejuruan yang mempelajari kegiatan yang bersifat komersial yang mengatur, menyediakan, dan menyelenggarakan pelayanan bagi seseorang, sekelompok orang yang melakukan perjalanan dengan tujuan utama yaitu berwisata.',
            'icon' => 'fas fa-plane'
        ]);


        DB::table('jurusans')->insert([
            'name' => ' Tata Kecantikan Kulit dan Rambut',
            'desc' => 'Sebuah kejuruan yang mempelajari tentang tata rias dan cara penggunaan peralatan kecantikan wajah dan rambut, serta cara menjaga kebersihan dan kesehatan dalam bekerja.',
            'icon' => 'fas fa-paint-brush'
        ]);


        DB::table('jurusans')->insert([
            'name' => ' Tata Busana',
            'desc' => 'Jurusan yang diperuntukkan bagi mereka yang ingin mengembangkan bakat dan minatnya dalam hal jahit menjahit, sampai dengan membuat produk yang berkualitas.',
            'icon' => 'fas fa-tshirt'
        ]);


        DB::table('jurusans')->insert([
            'name' => ' Desain Komunikasi Visual',
            'desc' => 'Jurusan ilmu desain yang mempelajari konsep komunikasi dan ekspresi kreatif dengan menggunakan elemen visual untuk menyampaikan pesan tertentu.',
            'icon' => 'fas fa-palette'
        ]);



        DB::table('jurusans')->insert([
            'name' => ' Animasi ',
            'desc' => 'Jurusan Animasi lebih fokus dalam mempelajari teori dan teknik dalam membuat animasi 2D dan 3D, animasi film, animasi game, dan bidang lainnya yang menggunakan konten animasi.',
            'icon' => 'fas fa-film'
        ]);


        DB::table('jurusans')->insert([
            'name' => ' Kriya Kreatif Batik dan Tekstil',
            'desc' => 'Suatu cabang seni kriya dalam pekerjaannya membuat produk kerajinan yang menggabungkan antara nilai fungsi dan nilai estetika atau hias pada produksi batik dan tekstil.',
            'icon' => 'fab fa-cotton-bureau'
        ]);


        DB::table('jurusans')->insert([
            'name' => ' Kriya Kreatif Kulit dan Imitasi',
            'desc' => 'Jurusan ini mempelajari tentang tata cara pembuatan desain dan produk kerajinan kulit dan imitasi secara kreatif dan berdaya jual tinggi.',
            'icon' => 'fas fa-shoe-prints'
        ]);


        DB::table('jurusans')->insert([
            'name' => ' Kriya Kreatif Kayu dan Rotan',
            'desc' => 'Jurusan yang dalam pekerjaannya membuat produk kerajinan yang menggabungkan antara nilai fungsi dan nilai estetika atau hias dengan menggunakan bahan kayu dan rotan.',
            'icon' => 'fas fa-chair'
        ]);

        DB::table('homepages')->insert([
            'section1' => 'About us',
            'section2' => 'Jurusan',
            'section3' => 'Ekstrakulikuler',
            'section4' => 'Guru',
            'desc1' => 'Welcome to SMKN 1 PACITAN Selamat datang di SMKN 1 PACITAN, tempat di mana setiap langkah membawa kita lebih dekat kepada masa depan yang gemilang. Sebagai lembaga pendidikan yang berkomitmen pada keunggulan akademis dan pengembangan karakter, kami di SMKN 1 PACITAN menawarkan lingkungan belajar yang inspiratif dan dinamis bagi siswa kami. Dengan dukungan staf pengajar yang berkualitas dan fasilitas modern, kami membantu siswa meraih potensi penuh mereka dalam berbagai bidang. Mari bergabung bersama kami dalam perjalanan menuju kesuksesan dan prestasi!',
            'desc2' => 'Jurusan',
            'desc3' => 'Extra Kulikuler Ekstra kurikuler tidak hanya sekadar aktivitas di luar jam pelajaran, tetapi juga sebagai sarana untuk pengembangan keterampilan, minat, dan bakat siswa, extra kurikuler telah menjadi bagian integral dari pengalaman belajar di sekolah. Dalam lingkungan pendidikan yang beragam, ada beberapa kegiatan ekstra kurikuler yang menonjol dan diminati oleh siswa dengan antusiasme yang tinggi. Artikel ini akan menjelajahi berbagai jenis extra kurikuler yang mendapatkan perhatian khusus dari siswa, mengungkapkan alasan di balik minat mereka yang tinggi, serta manfaat yang mereka bawa untuk perkembangan pribadi baik akademik dan non akademik. Dari kegiatan seni, olahraga, hingga pramuka. Temukan apa yang membuat extra kurikuler ini begitu diminati dan menjadi pilihan utama bagi siswa di seluruh sekolah.',
            'desc4' => 'Guru Favorit di SMKN 1 PACITAN',
        ]);

        DB::table('teachers')->insert([
            'name' => 'SISWANTO, S.Kom.',
            'jurusan_id' => '1',
            'photo' => 'images/guru1.jpg'
        ]);

        DB::table('teachers')->insert([
            'name' => '	Dra. HENY PRASETYAWATI',
            'jurusan_id' => '1',
            'photo' => 'images/guru2.jpg'
        ]);


        DB::table('teachers')->insert([
            'name' => '	JOKO HARIBOWO, S.Kom.',
            'jurusan_id' => '1',
            'photo' => 'images/guru3.webp'
        ]);


        DB::table('teachers')->insert([
            'name' => 'BAYU SEPTARINI, S.Pd.',
            'jurusan_id' => '1',
            'photo' => 'images/guru4.webp'
        ]);
    }
}
