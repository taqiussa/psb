<?php

namespace Database\Seeders;

use App\Models\Gaya;
use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $questions =
            [
                [
                    'priority' => 1,
                    'body' => '	Hasil dari 20×(40:8)-(16+9) = …',
                    'answers' => json_encode([60, 75, 100, 125]),
                    'correct' => 1,
                    'foto' => '',
                ],
                [
                    'priority' => 2,
                    'body' => '	Ari mempunyai 2 lembar uang seribuan dan 6 koin seratusan dan Santi mempunyai 3 lembar uang seribuan dan 7 koin seratusan. Jumlah uang Ari dan Santi adalah...',
                    'answers' => json_encode(['Rp. 6.300', 'Rp. 7.300', 'Rp. 7.700', 'Rp. 8.300']),
                    'foto' => '',
                    'correct' => 0
                ],
                [
                    'priority' => 3,
                    'body' => '	Ahmad memiliki kelereng yang disimpan di 4 toples miliknya, setiap toples berisi 75 kelereng. Ahmad mengambil 15 kelereng dari masing-masing toples untuk diberikan kepada teman-temannya. Sisa kelereng yang dimiliki Ahmad adalah ….',
                    'answers' => json_encode([60, 240, 285, 300]),
                    'foto' => '',
                    'correct' => 1
                ],
                [
                    'priority' => 4,
                    'body' => '	Data pengunjung perpustakaan sekolah pada bulan November 2022 disajikan dalam diagram batang di atas, berdasarkan diagram batang di atas, selisih pengunjung pada minggu kedua dan minggu kelima adalah …. Orang',
                    'answers' => json_encode([20, 30, 40, 50]),
                    'correct' => 0,
                    'foto' => '4.png'
                ],
                [
                    'priority' => 5,
                    'body' => '	Keliling dari bangun datar di atas adalah... . cm',
                    'answers' => json_encode([40, 80, 192, 384]),
                    'correct' => 1,
                    'foto' => '5.png'
                ],
                [
                    'priority' => 6,
                    'body' => '	Kalimat yang tepat untuk melengkapi percakapan rumpang tersebut adalah ….',
                    'answers' => json_encode([
                        'Kapan kak Rio bisa bermain bola professional?',
                        'Berapa umur kak Rio sekarang?',
                        'Kalau boleh saya tahu, sejak kapan kak Rio mulai berlatih bermain bola?',
                        'Oh ya, kapan ulang tahun kak Rio ya?'
                    ]),
                    'correct' => 2,
                    'foto' => '6.png'
                ],
                [
                    'priority' => 7,
                    'body' => '	Kalimat yang tepat untuk melengkapi isi pantun di atas adalah ….',
                    'answers' => json_encode(['Jika kita naik kelas satu,
                Akan dipuji orang tuanya
                ', 'Setiap hari membuat jamu,
                Diminum hilang rasa sakitnya
                ', 'Rajin-rajinlah menuntut ilmu,
                Untuk bekal di hari tua
                ', 'Orang baik adalah aku,
                Berkata baik dan wajah ceria
                ']),
                    'correct' => 2,
                    'foto' => '7.png'
                ],
                [
                    'priority' => 8,
                    'body' => '	Isi cuplikan laporan di atas adalah ….',
                    'answers' => json_encode(['Gangguan jalan akibat hujan dan angin kencang', 'Perjalanan warga ke kota lebih jauh', 'Keterlambatan orang-orang sampai ke temat tujuan', 'Gangguan jalan akibat pohon yang tumbang']),
                    'correct' => 3,
                    'foto' => '8.png'
                ],
                [
                    'priority' => 9,
                    'body' => '	Sejak kelas I sampai kelas VI SD, Anisa selalu menjadi … . Dia tak pernah absen untuk menerima hadiah prestasi yang diberikan kepala sekolah. Ungkapan yang tepat untuk melengkapi kalimat tersebut adalah… ',
                    'answers' => json_encode(['Buah bibir', 'Besar kepala', 'Bintang kelas', 'Kabar burung']),
                    'foto' => '',
                    'correct' => 2
                ],
                [
                    'priority' => 10,
                    'body' => 'Pertandingan sepakbola antara PSS dan Persebaya berakhir dengan kemenangan oleh Persebaya. Suasana permainan sangat hidup. Para pendukung telah membanjiri Stadion Maguwoharjo sebelum pertandingan dimulai. Mereka saling menjaga satu sama lain, sehingga tidak ada banyak keributan sampai pertandingan selesai. Arti kata pendukung dalam paragraf adalah… .',
                    'answers' => json_encode(['Reporter', 'Proyektor', 'Provokator', 'Supporter']),
                    'foto' => '', 'correct' => 3

                ],
                [
                    'priority' => 11,
                    'body' => '	One, Two, ... , Four, Five.',
                    'answers' => json_encode(['Try', 'Tree', 'Three', 'There']),
                    'foto' => '',
                    'correct' => 2
                ],
                [
                    'priority' => 12,
                    'body' => '	',
                    'answers' => json_encode(['Good bye', 'Good night', 'Good morning', "I'm fine thank you"]),
                    'correct' => 3,
                    'foto' => '12.png'
                ],
                [
                    'priority' => 13,
                    'body' => '“Good morning” in Indonesia means... .',
                    'answers' => json_encode(['Selamat pagi', 'Selamat sore', 'Selamat malam', 'Selamat jumpa']),
                    'foto' => '',
                    'correct' => 0
                ],
                [
                    'priority' => 14,
                    'body' => '	It is ...',
                    'answers' => json_encode(['Five past eight', 'One past eight', 'Five to eight', 'One to eight']),
                    'correct' => 0,
                    'foto' => '14.png'
                ],
                [
                    'priority' => 15,
                    'body' => '	The colour of apple is...',
                    'answers' => json_encode(['Yellow', 'Green', 'Red', 'Orange']),
                    'correct' => 2,
                    'foto' => '15.jpg'
                ],
                [
                    'priority' => 16,
                    'body' => '	Simbiosis mutualisme ditunjukkan oleh… ',
                    'answers' => json_encode(['Tali putri dengan teh-tehan', 'Gulma dengan tanaman padi', 'Anggrek dengan pohon besar', 'Kerbau dengan burung jalak']),
                    'foto' => '',
                    'correct' => 3
                ],
                [
                    'priority' => 17,
                    'body' => '	Doni menaruh kapur barus di dalam lemari untuk mengusir kecoa, setelah beberapa hari kapur barus hilang. Hal ini dikarenakan kapur barus... .',
                    'answers' => json_encode(['Mencair', 'Menguap', 'Menyublim', 'Dimakan kecoa']),
                    'foto' => '',
                    'correct' => 2
                ],
                [
                    'priority' => 18,
                    'body' => '	Urutan tahap perkembangan hewan di atas dalam daur hidupnya adalah...',
                    'answers' => json_encode(['A-B-C-D', 'C-D-B-A', 'B-D-A-B', 'D-B-C-A']),
                    'correct' => 1,
                    'foto' => '18.png'
                ],
                [
                    'priority' => 19,
                    'body' => '	Alat yang mempunyai bentuk perubahan energi yang sama pada gambar tersebut ditunjukkan oleh nomor... ',
                    'answers' => json_encode(['I dan II', 'I dan IV', 'II dan III', 'II dan IV']),
                    'correct' => 0,
                    'foto' => '19.png'
                ],
                [
                    'priority' => 20,
                    'body' => 'Curah hujan yang tinggi di wilayah perbukitan membuat lahan pertanian berkurang kesuburannya karena erosi. Cara yang dapat kita lakukan untuk mengatasi hal tersebut adalah… .',
                    'answers' => json_encode(['Melakukan rotasi tanaman', 'Membuat teras bertingkat', 'Mengganti jenis tanaman palawija', 'Melakukan sistem tumpang sari']),
                    'foto' => '',
                    'correct' => 1
                ],
            ];
        foreach ($questions as $item) {
            Question::create([
                'priority' => $item['priority'],
                'body' => $item['body'],
                'answers' => $item['answers'],
                'correct' => $item['correct'],
                'foto' => $item['foto']
            ]);
        }

        $gayas = [
            [
                'priority' => 1,
                'body' => 'Jika hendak menghadapi ulangan, maka kamu...',
                'answers' => json_encode([
                    'Membaca catatan yang telah kamu buat, serta memperhatikan diagram atau gambar yang berkaitan dengan materi yang diujikan',
                    'Meminta orang lain untuk memberinya pertanyaan tentang materi yang dipelajari',
                    'Membuat ringkasan berupa diagram atau gambar'
                ])
            ], [


                'priority' => 2,
                'body' => 'Jika mendengar musik atau lagu yang kamu sukai, biasanya kamu akan...',
                'answers' => json_encode([
                    'Menghayati lagu yang didengar (seperti memejamkan mata, melamun dsb)',
                    'Bergumam mengikuti lagu',
                    'Bergoyang mengikuti irama lagu'
                ]),
            ], [


                'priority' => 3,
                'body' => 'Jika menghadapi banyak tugas, maka kamu akan...',
                'answers' => json_encode([
                    'Membuat daftar tugas dan menentukan mana yang kamu akan kerjakan terlebih dahulu',
                    'Membicarakannya dengan orang tua atau temanmu apa yang sebaiknya kamu lakukan',
                    'Membuat daftar tugas dan kemudian menuliskan cara-cara kamu akan menyelesaikan tugas-tugas tersebut'
                ]),

            ], [

                'priority' => 4,
                'body' => 'Apa bacaan favorit kamu ?',
                'answers' => json_encode([
                    'Komik atau buku cerita dengan banyak gambar',
                    'Buku-buku misteri dengan banyak percakapan di dalamnya',
                    'Buku apa saja yang menarik hatimu. Terutama jika isi buku itu adalah jawaban dari pertanyaan-pertanyaan yang kamu cari (misal buku tentang bagaimana memenangkan sebuah game online)'
                ]),
            ], [

                'priority' => 5,
                'body' => 'Mainan/ barang kesayanganmu rusak. Maka kamu akan ...',
                'answers' => json_encode([
                    'Membaca buku petunjuk untuk memperbaiki',
                    'Mendatangi teman-temanmu untuk meminta tolong memperbaiki bersama-sama',
                    'Membiarkannya dan berusaha memperbaiki sendiri'
                ]),
            ], [


                'priority' => 6,
                'body' => 'Jika kamu ke tempat wahan permainan baru, maka kamu akan ...',
                'answers' => json_encode([
                    'Melihat-lihat sekeliling terlebih dahulu, mengamati petunjuk permainan, dan baru memilih salah satu permainan',
                    'Bertanya kepada petugas penjaga dan memintanya memberi saran permainan mana yang paling asik untuk dimainkan pertama kali',
                    'Langsung mencoba permainan yang dianggap paling menarik'
                ]),
            ], [

                'priority' => 7,
                'body' => 'Kegiatan ekstra kurikuler apa yang kamu sukai?',
                'answers' => json_encode([
                    'Menggambar, membuat prakarya',
                    'Musik',
                    'Olah Raga'
                ]),
            ], [

                'priority' => 8,
                'body' => 'Apa reaksimu saat kamu merasa bahagia?',
                'answers' => json_encode([
                    'Santai dan hanya tersenyum lebar',
                    'Berteriak kegirangan',
                    'Melompat-lompat senang'
                ]),
            ], [

                'priority' => 9,
                'body' => 'Jika kamu ditanya orang lain tentang suasana kelas di hari pertama kamu masuk sekolah, kira-kira apa yang akan kamu jawab?',
                'answers' => json_encode([
                    'Menggambarkan apa saja yang ada dikelas, berapa orang yang ada didalamnya, namun kamu tak mampu menyebutkan nama meski seseorang baru yang duduk disebelahnya',
                    'Kamu dapat menggambarkan suasana dengan baik, namun ceritanya lebih terfokus kepada siapa saja teman barumu dan seperti apakah ia',
                    'Hanya bercerita keadaan dan perasaanmu saja'
                ]),
            ], [

                'priority' => 10,
                'body' => 'Jika mendapat tugas untuk bercerita tentang pengalaman liburan, maka kamu akan ...',
                'answers' => json_encode([
                    'Menuliskannya dengan lengkap dan detil',
                    'Menawar atau berkata “Langsung cerita saja, ya, Bu.”',
                    'Fokus ceritanya lebih kepada apa yang kamu lakukan selama liburan'
                ]),
            ], [

                'priority' => 11,
                'body' => 'Hal apakah yang paling dapat mengganggu konsentrasi kamu?',
                'answers' => json_encode([
                    'Gambar atau apa saja yang melintas di depannya',
                    'Aneka suara',
                    'Perasaan seperti lapar, haus, cemas dsb'
                ]),

            ]
        ];

        foreach ($gayas as $gaya) {
            Gaya::create([
                'priority' => $gaya['priority'],
                'body' => $gaya['body'],
                'answers' => $gaya['answers']
            ]);
        }
    }
}
