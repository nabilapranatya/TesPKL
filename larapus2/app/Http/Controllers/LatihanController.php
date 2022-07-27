<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    //
    public function menu()
    {
        $menu = [
            [
                'beranda' => 'Beranda',
        
         
                'berita' => 'berita',
            
                'kategori_berita' => [
                    [
                        'nama' => 'olahraga',
                        'data' => ['sepak bola' , 'bulu tangkis']
                    ], 
                    [
                        'nama' => 'politik',
                        'data' => []
                    ],
                    [
                        'nama' => 'manca negara',
                        'data' => []
                    ]
                ],
            'tentang' => 'tentang'
            ]
        ];
        // dd($menu)
        return view('pages.menu', ['menu' => $menu]);
    }

    public function Dosen()
    {
        $a = [
        [
             'namadosen' => 'Yusuf Bachtiar',
             'matkul' => 'Pemrograman Mobile',
             'mahasiswa' => [
                ['nama' => 'Muhammad Soleh', 'nilai' => 78],
                ['nama' => 'Jujun Junaedi', 'nilai' => 85],
                ['nama' => 'Mamat Alkatiri', 'nilai' => 90],
                ['nama' => 'Ubay Holin', 'nilai' => 87],
                ['nama' => 'Fadilah', 'nilai' => 95],
             ]
        ],

        [
            'namadosen' => 'Yaris Riyadi Yusuf',
             'matkul' => 'Pemrograman Web',
             'mahasiswa' => [
                ['nama' => 'Alfred McTomminay', 'nilai' => 67],
                ['nama' => 'Bruno Kasmir', 'nilai' => 90],
                ['nama' => 'Akid Hendra', 'nilai' => 50],
                ['nama' => 'Dany Irawan', 'nilai' => 70],
                ['nama' => 'Candra Mega Putra', 'nilai' => 60],
             ]

        ]
        ];
        return view('pages.dosen', ['Dosen' => $a]);
    }

    public function penyiaran()
    {
        $penyiaran = [
            [
                'nama_siaran' => 'NET TV',
                'jadwal' => [
                    [
                        'siaran' => 'One Championship Warrior',
                        'tanggal' => '27 Oktober 2004',
                        'jam' => '02.00 WIB',
                    ],
                    [ 
                        'siaran' => '86',
                        'tanggal' => '11 November 2020',
                        'jam' => '07.00 WIB',
                    ],
                    [
                        'siaran' => 'Fakta +62',
                        'tanggal' => '12 Januari 2021',
                        'jam' => '09.00 WIB',
                    ],
                    [
                        'siaran' => 'Zona Musik',
                        'tanggal' => '19 Oktober 2019',
                        'jam' => '12.00 WIB',
                    ],
                ],
            ],
            [
                'nama_siaran' => 'TVRI',
                'jadwal' => [
                    [
                        'siaran' => 'Flashback',
                        'tanggal' => '22 Oktober 2018',
                        'jam' => '21.00 WIB',
                    ],
                    [
                        'siaran' => 'Komedy Bikin Happy',
                        'tanggal' => 'o6 Juli 2022',
                        'jam' => '07.30 WIB',
                    ],
                    [
                        'siaran' => 'Jendela Dunia',
                        'tanggal' => '02 Juli 2022',
                        'jam' => '09.30 WIB',
                    ],
                    [
                        'siaran' => 'Canda Of The Day',
                        'tanggal' => '03 April 2022',
                        'jam' => '12.00 WIB',
                    ],
                ],
            ],
            [
                'nama_siaran' => 'BEINSPORT',
                'jadwal' => [
                    [
                        'siaran' => 'Nashville VS Seattle',
                        'tanggal' => '23 Juni 2022',
                        'jam' => '08.00 WIB',
                    ],
                    [
                        'siaran' => 'MLS Show 2022',
                        'tanggal' => '15 Februari 2022',
                        'jam' => '00.30 WIB',
                    ],
                    [
                        'siaran' => 'Major League Soccer',
                        'tanggal' => '01 Maret 2021',
                        'jam' => '01.30 WIB',
                    ],
                    [
                        'siaran' => 'Pure ETCR',
                        'tanggal' => '07 Mei 2022',
                        'jam' => '06.20 WIB',
                    ],
                ],
            ],
            [
                'nama_siaran' => 'Ochannel',
                'jadwal' => [
                    [
                        'siaran' => 'Volleyball Nations League',
                        'tanggal' => '17 Agustus 2021',
                        'jam' => '04.30 WIB',
                    ],
                    [
                        'siaran' => 'Sport Update',
                        'tanggal' => '27 Januari 2021',
                        'jam' => '06.30 WIB',
                    ],
                    [
                        'siaran' => 'Indonesia Street Food',
                        'tanggal' => '10 Juli 2022',
                        'jam' => '08.00 WIB',
                    ],
                    [
                        'siaran' => 'KOREA MANIA',
                        'tanggal' => '19 Februari 2022',
                        'jam' => '16.00 WIB',
                    ],
                ],
            ],
            [
                'nama_siaran' => 'Indosiar',
                'jadwal' => [
                    [
                        'siaran' => 'Suara Hati Istri',
                        'tanggal' => '17 Desember 2021',
                        'jam' => '15.30 WIB',
                    ],
                    [
                        'siaran' => 'Azab',
                        'tanggal' => '26 Juli 2022',
                        'jam' => '17.00 WIB',
                    ],
                    [
                        'siaran' => 'Kisah Nyata',
                        'tanggal' => '30 Maret 2022',
                        'jam' => '12.00 WIB',
                    ],
                    [
                        'siaran' => 'Pintu Berkah',
                        'tanggal' => '05 Mei 2022',
                        'jam' => '16.30 WIB',
                    ],
                ],
            ],
        ];
        return view('pages.televisi', ['penyiaran' => $penyiaran]);
    }
}






// array {
        //     "nama1" => "Beranda"
        // }
        // $pilihan = [
        //     array('menu1' => 'Beranda', 'menu2' => 'Berita' => ['Olahraga', 'olahraga' => ['Sepak Bola', 'Bulu Tangkis'], 'Politik', 'Manca Negara'], 'menu3' => 'Tentang'),
        //     array('id' => 2, 'name' => "Bella", 'age' => 16, 'mapel' => ['B.Sunda', 'Fisika']),
        // ];
        // dd($a)
