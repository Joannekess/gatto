<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DiseasesSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('diseases')->insert([
            'kodePenyakit' => 'P01',
            'namaPenyakit' => 'Leptospirosis',
            'detailPenyakit' => 'Leptospirosis disebabkan oleh bakteri ordo Spirochaetales, famili Leptospiraceae dan genus Leptospira. Leptospira dapat masuk melalui kulit yang luka dan menyebar melalui aliran darah. Penularan dapat terjadi melalui kontak langsung atau tidak langsung, dan pada manusia dapat menyebabkan demam, nyeri perut, muntah, anoreksia, gangguan paru - paru, pendarahan di mulut, faringitis, dan gangguan reproduksi.',
            'pencegahanPenyakit' => 'Pencegahan yang terbaik adalah dengan memberikan vaksin khusus untuk bakteri leptospirosis ( lepto vaksin ). Hindarkan tempat makan dan tempat minum yang tercemari air kencing anjing, kucing, atau tikus. Bersihkan tempat makan dan tempat minum setiap hari. Perhatikan sanitasi kandang secara rutin , dan terapkan higienis yang baik.',
        ]);

        DB::table('diseases')->insert([
            'kodePenyakit' => 'P02',
            'namaPenyakit' => 'Rabies',
            'detailPenyakit' => 'Rabies merupakan penyakit yang disebabkan oleh rhabdovirus. Penyakit ini menular melalui air liur yang terkontaminasi masuk ke dalam tubuh melewati luka cakaran atau gigitan. Setelah gigitan terjadi, virus rabies akan menginfeksi sel saraf di dalam otak dan menyebabkan kerusakan pada otak. Rabies sendiri merupakan penyakit yang berbahaya karena dapat menyebabkan kematian.',
            'pencegahanPenyakit' => 'Untuk pencegahan, sebaiknya semua kucing divaksinasi. Sebaiknya kucing tidak selalu dibiarkan berkeliaran di luar rumah. Jangan biarkan kucing memakan bangkai. Terutama pada malam hari, usahakan untuk mengandangkan kucing. Penderita penyakit ini beraktivitas dan menjadi lebih agresif pada malam hari karena mereka takut terhadap sinar.',
        ]);

        DB::table('diseases')->insert([
            'kodePenyakit' => 'P03',
            'namaPenyakit' => 'Ringworm',
            'detailPenyakit' => 'Ringworm atau Dermatofitosis adalah penyakit kulit yang disebabkan oleh kapang dermatofita, yang menginfeksi kulit bagian superfisial. Kucing di bawah empat bulan memiliki resiko lebih tinggi untuk terinfeksi Ringworm, karena memiliki kekebalan tubuh yang belum sempurna. Ringworm dapat menular ke manusia dan didukung oleh kelembaban udara yang tinggi. Penyakit ini dapat menyebabkan gatal dan ruam merah pada kulit.',
            'pencegahanPenyakit' => 'Untuk pencegahan sebaiknya ruang kucing tidak dipasangi karpet agar pembersihannya lebih mudah dan tuntas. Untuk sanitasi ruangan, sebaiknya gunakan penghisap debu. Tempat tidur, kasur, dan selimut sebaiknya dibersihkan dengan larutan kaporit atau air panas. Pembersihan rutin sangat dianjurkan. Sering mandikan kucing dengan sampo antifungi atau lakukan grooming , minimal 1-2 kali seminggu sehingga spora yang menempel di bulu dapat dibersihkan dan tidak sempat menginfeksi kulit kucing.',
        ]);

        DB::table('diseases')->insert([
            'kodePenyakit' => 'P04',
            'namaPenyakit' => 'Toxoplasma',
            'detailPenyakit' => 'Toxoplasmosis kucing merupakan infeksi oleh parasit intraseluler, yaitu Toxoplasma gondii. Penyakit ini menyerang semua ternak berdarah panas dan manusia, dan dikenal sebagai penyakit yang berbahaya apabila menginfeksi wanita hamil. Di dalam tubuh kucing, Toxoplasma dapat berkembang biak dengan sempurna, karena menjadi tempat reproduksi hingga muncul ookista. Penyakit ini dapat menulari manusia melalui kotoran kucing yang terinfeksi, daging mentah, air susu sapi yang mentah, serta sayur dan buah yang tidak dicuci dengan bersih. Pada kucing sendiri biasa terinfeksi karena memakan burung, tikus, daging mentah, atau air susu sapi yang mentah.',
            'pencegahanPenyakit' => 'Jangan sering memberikan daging mentah atau air susu yang mentah pada kucing. Air minum yang disediakan harus dari sumber yang betul - betul higienis. Sebaiknya kita tidak menyentuh kotoran kucing secara langsung. Pembersihan tempat kotoran dilakukan dengan air panas atau larutan pemutih ( kaporit ). Sebaiknya pembersihan tempat kotoran tidak dilakukan oleh ibu hamil. Selalu cuci tangan sesudah memegang kucing dan sesudah membersihkan kotoran kucing.',
        ]);

        DB::table('diseases')->insert([
            'kodePenyakit' => 'P05',
            'namaPenyakit' => 'Toxocariasis',
            'detailPenyakit' => 'Penyakit ini disebabkan oleh infeksi cacing Toxocara dengan spesies cacing Toxocara cati. T. cati bersifat zoonosis dan sering ditemukan di dalam usus kucing di seluruh dunia. Infeksi ini bisa terjadi melalui rute oral dengan tertelannya telur T. cati. Manusia dapat tertular T. cati dengan menelan telur berembrio dari lingkungan, seperti buah dan sayur yang tidak dicuci, ataupun melalui tanah. Pada manusia, penyakit ini bisa menyebabkan muntah-muntah dan ocular larva migrans yang menyebabkan kerusakan mata permanen pada manusia.',
            'pencegahanPenyakit' => 'Memberikan obat cacing setiap enam bulan sekali, dan menjaga kebersihan lingkungan. Telur cacing dapat melekat pada benda - benda di sekitarnya, misalnya dinding tanah dan debu. Sebaiknya kucing diletakan di tempat kering. Usahakan agar kucing tidak membuang kotoran di luar rumah, untuk mencegah kucing terinfeksi oleh cacing - cacing lainnya. Tempat kotorannya juga harus setiap hari dicuci, dan kotorannya harus dibuang setiap hari di tempat khusus yang telah disediakan.',
        ]);
    }
}
