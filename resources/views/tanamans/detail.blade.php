@extends('layouts/app')

@section('title', 'Detail Tanaman | CropSystem')

@section('container')
<div class="container-fluid">

    <!-- Content Row -->

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    @foreach($date as $dates)
                    @if($dates ->pembibitan <= $today && $today < $dates ->panen )
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Telah di
                            Tanam Selama
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"> {{(strtotime($today)-strtotime($dates->pembibitan))/ 86400}}
                            Hari
                        </div>
                        @endif
                        @endforeach
                </div>
            </div>
        </div>
    </div>
    <nav>
        <div class="nav nav-tabs ml-4" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Tentang Tanaman</a>
            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Jadwal Penanaman</a>
            <a class="nav-item nav-link" id="nav-method-tab" data-toggle="tab" href="#nav-method" role="tab" aria-controls="nav-method" aria-selected="false">Metode Penanaman</a>
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="flex flex-col">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                    <table class="min-w-full divide-y divide-gray-200">
                                        <thead class="bg-gray-50">
                                            <tr>
                                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Kategori Tanaman
                                                </th>
                                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Jenis Tanaman
                                                </th>
                                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Kondisi Agroclimatic
                                                </th>
                                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Jenis Pupuk
                                                </th>

                                            </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-200">
                                            @foreach($tanamans as $tanaman)
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="ml-4">
                                                        <div class="text-sm font-medium text-gray-900">
                                                            {{$tanaman->kategori}}
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    {{$tanaman->jenisTanaman}}
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                    {{$tanaman->kondisiAgroclimatic}}
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                    {{$tanaman->jenisPupuk}}
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="flex flex-col">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                    <table class="min-w-full divide-y divide-gray-200">
                                        <thead class="bg-gray-50">
                                            <tr>
                                                <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider mr-5">
                                                    Varietas Tanaman
                                                </th>
                                                <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider mr-5">
                                                    Waktu Pembibitan
                                                </th>
                                                <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider mr-5">
                                                    Waktu Penyemaian
                                                </th>
                                                <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider mr-5">
                                                    Waktu Panen
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-200">
                                            @foreach($jadwals as $jadwal)
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    {{$jadwal->jenis_tanaman}}
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                                    {{$jadwal->pembibitan}}
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                                    {{$jadwal->penyemaian}}
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                                    {{$jadwal->panen}}
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="nav-method" role="tabpanel" aria-labelledby="nav-method-tab">
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="flex flex-col">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <div class="text text-black mt-4">
                                        @foreach($tanamans as $tanaman)
                                        @if($tanaman->kategori == 'Umbi-Umbian')
                                        <h4>Umbi - umbian</h4> <br>
                                        <b>Kentang</b> <br>
                                        Syarat : <br>
                                        <div class="ml-5">
                                            - Tumbuh sempurna di dataran tinggi, berkisar antara
                                            1.600
                                            hingga 3.000 meter di atas permukaan laut. <br>
                                            - Kelembapan udara antara 80% hingga 90% <br>
                                            - Curah hujan berkisar antara 1200 hingga 1500 mm/th
                                            <br>
                                            - PH tanah netral berkisar 5 hingga 6, 5. Jika terlalu
                                            asam
                                            (kurang dai 5) lakukan pengapuran. Sebaliknya <br>
                                            jika tanah terlalu basa (lebih dari 9) berikan belerang
                                            sebelum
                                            penanaman. <br>
                                            - Suhu antara 15 hingga 20 derajat celsius <br>
                                        </div>
                                        <br>
                                        Cara Penanaman : <br>
                                        1. Cangkul tanah agar menjadi gembur dan biarkan kurang
                                        lebih 3 hari
                                        agar terpapar sinar matahari. <br>
                                        2. Berikan pupuk kompos pada lahan kemudian cangkul agar
                                        merata
                                        dalam tanah serta diamkan selama 7 hari <br>
                                        3. Buatlah bedengan dengan tinggi 30 cm, dan lebar 70 cam
                                        menghadap
                                        ke timur-barat agar mendapat pasokan sinar <br>
                                        matahari yang maksimal <br>
                                        4. Jarak bedengan 40 cm <br>
                                        5. Buatlah lubang tanam di atas bedengan dengan jarak antar
                                        lubang
                                        tanam kira-kira 20 cm hingga 25 cm. <br>
                                        6. Selanjutnya tanamlah umbi kentang yang telah bertunas
                                        kurang
                                        lebih 2 cm, kemudian tutup kembali dengan tanah <br>
                                        setebal 5 cm. <br>
                                        <br>
                                        Cara pemupukan : <br>
                                        Pemupukan rutin setiap 20 hari sekali sejak masa tanam
                                        dengan dosis:
                                        <br>
                                        <div class="ml-5">
                                            1. Pupuk Urea 500kg/h <br>
                                            2. Pupuk ZA 150 kg/h <br>
                                            3. Pupuk KCL 100 kg/h <br>
                                            4. Pupuk SP36 400 kg/h <br>
                                        </div>
                                        <br>
                                        Penyiangan: <br>
                                        Fase berikutnya penyianagn dapat dlakukan berbarengan dengan
                                        pemupukan. Atau dapat juga dimulai setelah usia <br>
                                        tanam menginjak umur 30 hari dan kemudian pada umur 50 hari.
                                        <br>
                                        <br>
                                        Penyiraman: <br>
                                        Siram pada tanah yang terlihat kering. Terlalu banyak air
                                        akan
                                        menghentikan pertumbuhan umbi kentang. Pentiraman <br>
                                        dapat dilakukan seminggu sekali tanpa membuat lahan terlalu
                                        basah
                                        tergenang air. <br>
                                        <br>
                                        Masa Panen: <br>
                                        Tanaman kentang umumnya dapat dipanen pada usia 3 sampa 4
                                        bulan
                                        setelah masa tanam. Lakukanlah panen kentang <br>
                                        pada waktu cuaca cerah. Memanen pada saat hujan akan membuat
                                        kentang
                                        cepat membusuk <br>

                                        @elseif($tanaman->kategori == 'Kacang-Kacangan')
                                        <!-- Kacang-kacangan -->
                                        <div class="tab-pane fade show active" id="nav-method" role="tabpanel" aria-labelledby="nav-method-tab">
                                            <div class="text text-black mt-4">
                                                <h4>Kacang - kacangan (Durasi: 3 - 5 bulan)</h4>
                                                Pupuk : pupuk kandang dan pupuk kompos <br>
                                                Syarat : <br>
                                                <div class="ml-5">- Suhu udara yang disarankan adalah 28-32
                                                    derajat celcius dan kelembaban
                                                    udara 65
                                                    hingga 75 persen. <br>
                                                    - Curah hujan yang disarankan adalah 800 hingga 1.300.
                                                    <br>
                                                    - Kacang tanah cocok dengan tanah yang memiliki keasaman
                                                    sekitar 5 sampai 6,3 pH. <br>
                                                </div>
                                                <br>
                                                <b>Cara penanaman : </b> <br>
                                                <div class="ml-5">
                                                    1. Tanah digemburkan terlebih dahulu sampai butiran
                                                    kecil-kecil. Lalu tambahkan dolomit
                                                    atau kapur
                                                    pertanian <br>
                                                    untuk membantu pembuahan kacang per hektar sebanyak 2
                                                    ton dan sebar secara merata pada
                                                    lahan.
                                                    Biarkan <br>
                                                    selama 2 hari. <br>
                                                    2. Tambahkan pupuk kandang dan pupuk kompos yang sudah
                                                    jadi lalu campurkan dengan cara
                                                    ditugal
                                                    dengan <br>
                                                    jarak 25 x 25 cm. Setiap lubang diisi satu benih biji.
                                                    Kemudian padatkan dengan tanah.
                                                    <br>
                                                    3. Lakukan penyiraman setiap pagi dan sore hari saat
                                                    benih selesai di tanam. <br>
                                                </div>
                                                <br>
                                                Note :
                                                <div class="ml-5">
                                                    - Pada 4-7 hari benih secara serempak akan mulai
                                                    berkecambah <br>
                                                    - Pada umur 20 hari setelah masa tanam, tanaman akan
                                                    mulai berbunga <br>
                                                    - Hasil dari penyerbukan dan pembuahan biasanya akan
                                                    tumbuh ginofor yang menuju ke tanah
                                                    dan
                                                    menembus ke <br>
                                                    tanah dan nantinya akan menjadi polong <br>
                                                    - Pada masa pembuahan berikan pupuk yang banyak
                                                    mengandung fosfor <br>
                                                    - Saat terjadi serangan penyakit pada kacang tanah,
                                                    lakukan identifikasi terhadap gejala
                                                    yang
                                                    muncul. <br>
                                                    Bila ada serangan penyakit, segera cabut tanaman kacang
                                                    tanah yang terserang penyakit.
                                                    Lalu masukkan
                                                    <br>
                                                    dalam kantong dan dibakar. Ini merupakan salah satu
                                                    upaya mencegah penyebaran penyakit
                                                    ke tanaman
                                                    yang lain. <br>
                                                    - Untuk meningkatkan buah bagus, disarankan melakukan
                                                    penyiangan dan pembubunan tanah
                                                    pada bagian
                                                    <br>
                                                    bawah tanaman.
                                                </div>
                                                <br>
                                                <b>Memanen Kacang Tanah</b> <br>
                                                Ciri tanaman kacang tanah yang telah siap panen sebagai
                                                berikut:
                                                <div class="ml-5">
                                                    • Batang mengeras. <br>
                                                    • Polong memiliki warna cokelat kehitaman. <br>
                                                    • Daun kacang tanah sudah mulai menguning dan mulai
                                                    gugur. <br>
                                                    • Polongnya keras dan penuh saat dipegang. <br>

                                                </div>
                                            </div>
                                        </div>
                                        @elseif($tanaman->kategori == 'Buah-Buahan')
                                        <!-- Buah-buahan -->
                                        <div class="tab-pane fade" id="nav-method" role="tabpanel" aria-labelledby="nav-method-tab">
                                            <div class="text text-black mt-4">
                                                <h4>Buah - buahan</h4> <br>
                                                1. Semangka <br>
                                                Syarat : <br>
                                                <div class="ml-5">
                                                    - Tanaman semangka dapat tumbuh maksimal pada pH normal
                                                    yaitu 6-7. <br>
                                                    - Tanaman semangka akan tumbuh baik di dataran rendah
                                                    ataupun dataran tinggi dengan
                                                    kisaran antara 0
                                                    – 1000 <br>
                                                    meter di atas permukaan laut. <br>
                                                    - curah hujan 40-50 mm per bulan dan suhu sekitar 25°C
                                                    saat siang hari. <br>
                                                </div>

                                                <b>Persiapan Benih Semangka</b> <br>
                                                Dari penampakan fisik benih yang bisa dipilih yaitu :
                                                <div class="ml-5">
                                                    1. Memiliki kualitas bagus terlihat tidak cacat <br>
                                                    2. Biasanya berat biji semangka diantara 30 sampai 35
                                                    gram <br>
                                                    3. Bentuknya elips dan didominasi warna hitam yang
                                                    terlihat jelas <br>
                                                    4. Dulur-dulur bisa mendapatkan benih semangka yang
                                                    berkualitas dari toko pertanian
                                                    terdekat. <br>
                                                </div>
                                                Setelah mendapatkan benih semangka yang berkualitas, jangan
                                                dulu menanam benih semangka
                                                tersebut. <br>
                                                <br>
                                                Lakukan proses perendaman benih semangka terlebih dahulu
                                                dengan Pupuk Organik Cair GDM
                                                Spesialis
                                                Buah-buahan <br>
                                                sebanyak 30 ml dicampur dengan 1 liter air hangat dan
                                                direndam selama 4-5 jam. Kemudian
                                                ditiriskan dan
                                                diperas <br>
                                                dengan kain basah atau kertas koran. Setelah 2-3 hari benih
                                                semangka akan mulai berkecambah
                                                dan siap
                                                dipindah <br>
                                                pada media semai. <br>
                                                <br>
                                                <b>Penyemaian Benih Semangka</b>
                                                <div class="ml-5">
                                                    1. Bersihkan tanah dari sampah dan hama pengganggu <br>
                                                    2. Campurkan tanah dengan pupuk kandang (jumlah
                                                    secukupnya) <br>
                                                    3. Tanam benih semangka dalam lubang tanah sedalam 3-5cm
                                                    <br>
                                                    4. Lakukan penyiraman dengan air bersih <br>
                                                    5. Pastikan langkah diatas dulur-dulur lakukan dengan
                                                    benar dan baik, agar benih
                                                    semangka dapat
                                                    tumbuh optimal <br>
                                                    dan baik. <br>
                                                </div>
                                                Pengolahan Lahan Tanam <br>
                                                Sambil menunggu benih semangka tumbuh menjadi bibit,
                                                dulur-dulur bisa menyiapkan lahan tanam
                                                untuk cara
                                                menanam <br>
                                                semangka. Tanaman semangka membutuhkan lahan tanah yang
                                                gembur. <br>
                                                <br>
                                                Penyiraman Tanaman Semangka <br>
                                                Lakukan penyiraman tanaman semangka setiap 3 hari sekali
                                                atau dapat disesuaikan dengan
                                                kondisi cuaca
                                                ataupun <br>
                                                lingkungan setempat. <br>
                                                Namun pada awal pembentukan bunga sebaiknya jangan disiram,
                                                lakukan penyiraman kembali saat
                                                buah
                                                semangka <br>
                                                mulai terbentuk. <br>
                                                Saat buah sudah mencapai bentuk maksimal kurangi intensitas
                                                penyiraman agar kadar gula dalam
                                                buah
                                                terjaga. <br>
                                                <br>

                                                <b>Posisi Batang Utama</b> <br>
                                                Atur posisi batang utama dan ranting tanaman semangka pada
                                                bedengan, agar budidaya semangka
                                                menjadi rapi
                                                dan <br>
                                                mudah dalam pemeliharaan. <br>
                                                <br>

                                                <b>Pemangkasan Cabang</b> <br>
                                                Agar produksi buah semangka menjadi maksimal, maka lakukan
                                                pemangkasan cabang. Cabang yang
                                                dipangkas
                                                yaitu <br>
                                                cabang utama setelah ruas ke lima. <br>
                                                Tunas samping yang baru tumbuh juga dipangkas, kemudian tiga
                                                cabang samping yang dipelihara.
                                                <br>
                                                Hal ini bertujuan agar selama budidaya semangka proses
                                                penyerapan unsur hara dapat terfokus
                                                pada cabang
                                                yang <br>
                                                dipelihara saja. <br>
                                                <br>

                                                <b>Penyiangan Gulma</b> <br>
                                                Lakukan proses penyiangan gulma yang mengganggu tanaman
                                                semangka, agar mengoptimalkan
                                                pertumbuhan
                                                tanaman semangka <br>
                                                secara maksimal. <br>
                                                Penyiangan dapat dilakukan sehari 2 kali atau dapat
                                                disesuaikan kebutuhan tanaman semangka
                                                <br>
                                                <br>
                                                Buang Buah Yang Tidak Normal <br>
                                                Pada umunya buah semangka yang dapat tumbuh dengan baik pada
                                                tanaman semangka hanya
                                                berjumlah 2-3 buah
                                                saja. <br>
                                                Maka dari itu buah semangka yang tidak normal pada daun
                                                pertama sampai ke 13 harus dibuang
                                                dan buah
                                                semangka yang <br>
                                                dipelihara hanya buah pada daun ke 14 keatas. Hal ini
                                                dilakukan agar dalam budidaya semangka
                                                dapat
                                                menghasilkan <br>
                                                buah yang maksimal. <br>
                                                <br>

                                                <b>Pengendalian Hama dan Penyakit Semangka</b> <br>
                                                Jika serangan hama berada diatas ambang batas ekonomi
                                                kendalikan dengan insektisida dan jika
                                                ada
                                                serangan penyakit <br>
                                                kendalikan dengan fungisida ataupun bakterisida. <br>
                                                <br>

                                                <b>Tahap Panen Semangka</b> <br>
                                                Saat semangka memasuki masa panen, tentu dulur mengetahui
                                                karakteristik buah semangka yang
                                                siap dipanen
                                                <br>
                                                Semangka dapat dipanen pada umur 60-70 HST, tergantung dari
                                                jenis dan varietasnya. Ciri-ciri
                                                buah yang
                                                siap panen <br>
                                                yaitu: <br>
                                                <div class="ml-5">
                                                    - warna kulit buah telah memudar <br>
                                                    - sulur pada pangkal tangkai buah telah mongering <br>
                                                    - Buah semangka dapat dipetik beserta tangkainya dan
                                                    dipanen saat cuaca cerah. <br>
                                                </div>
                                            </div>
                                        </div>
                                        @elseif($tanaman->kategori == 'Daun-Daunan')
                                        <!-- Daun-daunan -->
                                        <div class="tab-pane fade" id="nav-method" role="tabpanel" aria-labelledby="nav-method-tab">
                                            <div class="text text-black mt-4">
                                                <h4>Daun - daunan</h4> <br>
                                                Waktu tanam untuk tanaman jenis daun-daunan yang terbaik
                                                adalah pada awal musim hujan antara
                                                bulan Oktober–Nopember
                                                atau pada awal musim kemarau antara bulan Maret–April. <br>
                                                <div class="text text-gray-600">
                                                    <small>Syarat: Daun-daunan sebaiknya ditanam pada tanah
                                                        yang gembur dan cukup subur
                                                        dengan
                                                        kisaran pH
                                                        6-7.</small> <br>
                                                </div>
                                                <br>
                                                <b>BUDI DAYA TANAMAN</b><br>
                                                <br>
                                                <b>Persiapan Lahan, Persemaian dan Penanaman</b> <br>
                                                <div class="ml-5">
                                                    Lahan untuk pertanaman daun-daunan perlu diolah lebih
                                                    dahulu dengan dicangkul sedalam
                                                    20–30 cm
                                                    supaya <br>
                                                </div>
                                                gembur. Setelah itu dibuat bedengan dengan arah membujur
                                                dari Barat ke Timur, untuk
                                                mendapatkan cahaya
                                                penuh. <br>
                                                Lebar bedengan 1 m, sedangkan panjang bedengan dapat dibuat
                                                tergantung ukuran/bentuk lahan.
                                                Setelah <br>
                                                diratakan, bedengan diberi pupuk kandang kuda atau ayam
                                                dengan dosis 10 ton/ha atau 1 kg/10
                                                m2 bila <br>
                                                kondisi tanahnya kurang subur (kandungan bahan organiknya
                                                rendah). Lahan yang kaya bahan
                                                organik <br>
                                                tidak perlu diberikan pupuk kandang lagi. Selanjutnya, pupuk
                                                buatan diberikan dengan dosis N
                                                120 kg,
                                                <br>
                                                P2O5 90 kg dan K2O 50 kg per hektar atau setara dengan Urea
                                                30 g, TSP 20 g dan KCl 10 g tiap
                                                m2 luas
                                                <br>
                                                bedengan. Pupuk tersebut disebar rata dan diaduk pada
                                                bedengan, kemudian permukaannya
                                                diratakan. <br>
                                                Penanaman benih daun-daunan dapat dilakukan dengan tiga
                                                cara, yaitu menyebar biji langsung
                                                pada
                                                bedengan, <br>
                                                menyebar langsung pada larikan/barisan, dan melalui
                                                persemaian lebih dahulu. <br>
                                                <br>
                                                <div class="ml-5">
                                                    • Biji disebar langsung secara merata di atas permukaan
                                                    bedengan kemudian ditutup tipis
                                                    dengan tanah
                                                    (tebalnya <br>
                                                    kurang lebih 1 – 2 cm). <br>
                                                    • Biji dapat juga disebarkan pada larikan/barisan dengan
                                                    jarak antar barisan 10 – 15 cm,
                                                    kemudian
                                                    <br>
                                                    ditutup kembali dengan lapisan tipis tanah. <br>
                                                    • Benih disemai, kemudian
                                                    setelah tumbuh (kurang dari 10 hari), bibit dibumbun dan
                                                    dipelihara selama kurang <br>
                                                    lebih 3 minggu sampai siap dipindah ke lapangan. Jarak
                                                    tanam pada sistem ini adalah 50
                                                    cm x 30 cm. <br>
                                                </div>
                                                <br>

                                                <b>Pemeliharaan</b> <br>
                                                <div class="ml-5">
                                                    Tanaman daun-daunan yang masih muda (sampai minggu
                                                    pertama setelah tanam) memerlukan air
                                                    sebesar <br>
                                                </div>
                                                kurang lebih 4 mm/tanaman atau 4 l/m2 dalam sehari.
                                                Menjelang dewasa tanaman ini memerlukan
                                                air <br>
                                                sekitar 8 mm atau 8 l/m2 setiap harinya. Penyiangan rumput
                                                secara khusus pada pertanaman
                                                daun-daunan <br>
                                                petik tidak terlalu diperlukan. <br>
                                                <br>
                                                <b>Pengendalian Organisme Pengganggu Tumbuhan (OPT)</b> <br>
                                                <div class="ml-5">
                                                    Jenis hama yang sering menyerang tanaman daun-daunan
                                                    diantaranya ulat daun, kutu daun,
                                                    pengorok daun <br>
                                                </div>
                                                dan belalang. Jika terpaksa harus menggunakan insektisida,
                                                gunakan jenis insektisida yang
                                                aman <br>
                                                dan mudah terurai seperti insektisida biologi, insektisida
                                                nabati atau insektisida piretroid
                                                <br>
                                                sintetik. <br>
                                                <br>
                                                <b>Panen dan Pascapanen</b> <br>
                                                <div class="ml-5">
                                                    Bayam cabut biasanya dipanen apabila tingginya sudah
                                                    mencapai kira–kira 20 cm, yaitu
                                                    pada umur <br>
                                                </div>
                                                antara tiga sampai empat minggu setelah tanaman tumbuh.
                                                Tanaman ini dapat dicabut dengan
                                                akarnya <br>
                                                atau dengan cara memotong pada bagian pangkal sekitar 2 cm
                                                di atas permukaan tanah.
                                                Sedangkan bayam <br>
                                                petik biasanya mulai dapat dipanen pada umur antara satu
                                                sampai setengah bulan dengan
                                                interval <br>
                                                pemetikan seminggu sekali. Produksi tanaman bayam yang
                                                dipelihara dengan baik dapat mencapai
                                                5 <br>
                                                sampai 10 ton/ha. Penanganan pasca panen bayam terutama
                                                diarahkan untuk mempertahankan
                                                kesegarannya,
                                                <br>
                                                yaitu dengan cara menempatkan bayam yang baru dipanen di
                                                tempat berair, merendam bagian
                                                akarnya <br>
                                                dan transportasi (pengiriman produk) dilaksanakan secepat
                                                mungkin. <br>

                                                <br>
                                                2. Sawi <br>
                                                Curah hujan lebih dari 200 mm/bulan, tinggi bedengan 20 – 30
                                                cm. <br>

                                                <b>CARA PENGOLAHAN TANAH UNTUK TANAM SAWI </b> <br>
                                                <div class="ml-5">
                                                    - Pengolahan tanah secara umum melakukan penggemburan
                                                    dan pembuatan bedengan.
                                                    Tahap-tahap <br>
                                                    pengemburan yaitu pencangkulan untuk memperbaiki
                                                    struktur tanah dan sirkulasi udara dan
                                                    pemberian
                                                    <br>
                                                    pupuk dasar untuk memperbaiki fisik serta kimia tanah
                                                    yang akan menambah kesuburan lahan
                                                    yang <br>
                                                    akan kita gunakan. Akan tetapi jika lokasi tanah kita
                                                    tinggi tidak menggunakan bedengan
                                                    juga <br>
                                                    tidak masalah. <br>

                                                    - Tanah yang hendak digemburkan harus dibersihkan dari
                                                    bebatuan, rerumputan, semak atau
                                                    pepohonan
                                                    <br>
                                                    yang tumbuh. Dan bebas dari daerah ternaungi, karena
                                                    tanaman sawi suka pada cahaya
                                                    matahari secara
                                                    <br>
                                                    langsung. <br>

                                                    - kedalaman tanah yang dicangkul sedalam 20 sampai 40
                                                    cm. <br>

                                                    - Pemberian pupuk kandang fermentasi 3 - 5 ton/ha. Pupuk
                                                    kandang fermentasi diberikan
                                                    saat <br>
                                                    penggemburan agar cepat merata dan bercampur dengan
                                                    tanah yang akan kita gunakan. <br>
                                                    Bila daerah yang mempunyai pH terlalu rendah (asam)
                                                    sebaiknya dilakukan pengapuran.
                                                    Pengapuran <br>
                                                    ini bertujuan untuk menaikkan derajad keasam tanah,
                                                    pengapuran ini dilakukan jauh-jauh
                                                    sebelum <br>
                                                    penanaman benih, yaitu kira-kira 2 sampai 4 minggu
                                                    sebelumnya. Sehingga waktu yang baik
                                                    dalam <br>
                                                    melakukan penggemburan tanah yaitu 2 – 4 minggu sebelum
                                                    lahan hendak ditanam. Jenis
                                                    kapur yang <br>
                                                    digunakan adalah kapur kalsit (CaCO3) atau dolomit
                                                    (CaMg(CO3)2). <br>
                                                </div>
                                                <br>
                                                <b>PENANAMAN SAWI </b> <br>
                                                <div class="ml-5">
                                                    Bedengan dengan ukuran lebar 120 cm dan panjang sesuai
                                                    dengan ukuran petak tanah. Tinggi
                                                    bedeng <br>
                                                </div>
                                                20 – 30 cm dengan jarak antar bedeng 30 cm, seminggu sebelum
                                                penanaman dilakukan pemupukan
                                                terlebih <br>
                                                dahulu yaitu pupuk kandang 3 – 5 ton/ha, TSP 40 kg/ha, Kcl
                                                15 kg/ha. Sedang jarak tanam
                                                dalam bedengan
                                                <br>
                                                40 x 40 cm , 30 x 30 dan 20 x 20 cm. Pilihlah bibit yang
                                                baik, pindahkan bibit dengan
                                                hati-hati, lalu
                                                <br>
                                                membuat lubang dengan ukuran 4 – 8 x 6 – 10 cm. <br>
                                                <br>
                                                <b>PEMELIHARAAN TANAMAN CAISIM DAN SAWI</b> <br>
                                                <div class="ml-5">
                                                    1. Penyiraman, penyiraman ini tergantung pada musim,
                                                    bila musim penghujan dirasa
                                                    berlebih maka kita
                                                    <br>
                                                    perlu melakukan pengurangan air yang ada, tetapi
                                                    sebaliknya bila musim kemarau tiba kita
                                                    harus
                                                    menambah <br>
                                                    air demi kecukupan tanaman sawi yang kita tanam. Bila
                                                    tidak terlalu panas penyiraman
                                                    dilakukan
                                                    sehari <br>
                                                    cukup sekali sore atau pagi hari. <br>

                                                    2. Penjarangan dilakukan 2 minggu setelah penanaman.
                                                    Caranya dengan mencabut tanaman
                                                    yang tumbuh
                                                    <br>
                                                    terlalu rapat. <br>

                                                    3. Penyulaman ialah tindakan penggantian tanaman ini
                                                    dengan tanaman baru. Caranya sangat
                                                    mudah yaitu
                                                    <br>
                                                    tanaman yang mati atau terserang hama dan penyakit
                                                    diganti dengan tanaman yang baru.
                                                    <br>

                                                    4. Penyiangan biasanya dilakukan 2 – 4 kali selama masa
                                                    pertanaman sawi, disesuaikan
                                                    dengan kondisi
                                                    <br>
                                                    keberadaan gulma pada bedeng penanaman. Biasanya
                                                    penyiangan dilakukan 1 atau 2 minggu
                                                    setelah <br>
                                                    penanaman. Apabila perlu dilakukan penggemburan dan
                                                    pengguludan bersamaan dengan
                                                    penyiangan. <br>

                                                    5. Pemupukan tambahan diberikan setelah 3 minggu tanam,
                                                    yaitu dengan urea 20 kg/ha 1
                                                    minggu sekali
                                                    <br>
                                                    sampai masa panen. <br>
                                                </div>
                                                <br>
                                                <b>PANEN DAN PASCA PANEN CAISIM DAN SAWI</b> <br>
                                                <div class="ml-5">
                                                    Dalam hal pemanenan penting sekali diperhatikan umur
                                                    panen dan cara panennya. Umur panen
                                                    sawi paling
                                                </div>
                                                lama 70 hari. Paling pendek umur 40 hari. Terlebih dahulu
                                                melihat fisik tanaman seperti
                                                warna, bentuk
                                                dan <br>
                                                ukuran daun. Cara panen ada 2 macam yaitu mencabut seluruh
                                                tanaman beserta akarnya dan
                                                dengan memotong
                                                <br>
                                                bagian pangkal batang yang berada di atas tanah dengan pisau
                                                tajam. Pasca panen sawi dan
                                                caisim yang
                                                perlu <br>
                                                diperhatikan adalah: <br>
                                                <div class="ml-5">
                                                    1. Pencucian dan pembuangan kotoran. <br>
                                                    2. Sortasi. <br>
                                                    3. Pengemasan. <br>
                                                    4. Penyimpanan. <br>
                                                    5. Pengolahan. <br>
                                                    <br>
                                                    Menurut maspary, tehnik budidaya caisim atau sawi yang
                                                    ditulis diatas sifatnya tidaklah
                                                    mutlak
                                                    artinya tehnik <br>
                                                </div>
                                                budidaya diatas sangat memungkinkan untuk dimodifikasi
                                                disesuaiakan dengan kondisi alam dan
                                                iklim
                                                setempat <br>
                                                serta ketersediaan biaya dan tenaga kerja kita. Demikian
                                                cara teknis budidaya tanaman sawi
                                                atau caisim
                                                dari <br>
                                                Gerbang Pertanian untuk petani Indonesia semoga bisa
                                                bermanfaat bagi pembaca semua. <br>
                                            </div>
                                        </div>
                                        @endif
                                        @endforeach
                                    </div>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection