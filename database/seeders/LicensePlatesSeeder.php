<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LicensePlatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $plates = [
            ['kode' => 'A', 'wilayah' => 'Kabupaten Serang, Kota Serang, Kota Cilegon, Kabupaten Pandeglang, Kabupaten Lebak'],
            ['kode' => 'AA', 'wilayah' => 'Kabupaten Magelang, Kota Magelang, Kabupaten Wonosobo, Kabupaten Temanggung, Kabupaten Purworejo'],
            ['kode' => 'AB', 'wilayah' => 'Daerah Istimewa Yogyakarta (DIY)'],
            ['kode' => 'AD', 'wilayah' => 'Surakarta/Solo, Kabupaten Boyolali, Karanganyar, Klaten, Sukoharjo, Sragen, Wonogiri'],
            ['kode' => 'AE', 'wilayah' => 'Kabupaten Madiun, Kota Madiun, Kabupaten Ngawi, Kabupaten Pacitan, Kabupaten Ponorogo, Kabupaten Magetan'],
            ['kode' => 'AG', 'wilayah' => 'Kabupaten Kediri, Kota Kediri, Kabupaten Blitar, Kota Blitar, Kabupaten Tulungagung, Kabupaten Trenggalek, Kabupaten Nganjuk'],
            ['kode' => 'B', 'wilayah' => 'DKI Jakarta, Kota Depok, Kota Tangerang, Kota Tangerang Selatan, Kota Bekasi, Kabupaten Bekasi, Kabupaten Tangerang'],
            ['kode' => 'BA', 'wilayah' => 'Sumatera Barat'],
            ['kode' => 'BB', 'wilayah' => 'Kabupaten Tapanuli Tengah, Kota Sibolga, Tapanuli Utara, Tapanuli Selatan, Humbang Hasundutan, Tapanuli Tengah, Mandailing Natal, Padang Sidempuan'],
            ['kode' => 'BD', 'wilayah' => 'Bengkulu'],
            ['kode' => 'BE', 'wilayah' => 'Lampung'],
            ['kode' => 'BG', 'wilayah' => 'Sumatera Selatan'],
            ['kode' => 'BH', 'wilayah' => 'Jambi'],
            ['kode' => 'BK', 'wilayah' => 'Medan, Deli Serdang, Binjai, Langkat, Karo'],
            ['kode' => 'BL', 'wilayah' => 'Aceh'],
            ['kode' => 'BM', 'wilayah' => 'Riau daratan (Pekanbaru, Kampar, Indragiri Hulu, Indragiri Hilir, Rokan Hulu, dsb)'],
            ['kode' => 'BN', 'wilayah' => 'Kepulauan Bangka Belitung'],
            ['kode' => 'BP', 'wilayah' => 'Kepulauan Riau (Batam, Tanjung Pinang, Bintan, Karimun, Lingga, dsb)'],
            ['kode' => 'CC', 'wilayah' => 'Kendaraan Korps Diplomatik Konsuler Asing'],
            ['kode' => 'CD', 'wilayah' => 'Kendaraan Diplomatik Asing'],
            ['kode' => 'DA', 'wilayah' => 'Kalimantan Selatan (Banjarmasin, Banjarbaru, Banjar, Barito Kuala, Tapin, Hulu Sungai Selatan, Hulu Sungai Utara)'],
            ['kode' => 'DB', 'wilayah' => 'Sulawesi Utara bagian Utara (Manado, Bitung, Tomohon, Minahasa, Minahasa Utara)'],
            ['kode' => 'DC', 'wilayah' => 'Kabupaten Mamuju, Majene, Mamasa, Mamuju Tengah, Mamuju Utara (Sulawesi Barat)'],
            ['kode' => 'DD', 'wilayah' => 'Sulawesi Selatan (Makassar, Gowa, Maros, Pangkep, Jeneponto, Takalar, Selayar, dsb)'],
            ['kode' => 'DE', 'wilayah' => 'Maluku (Ambon, Maluku Tengah, Seram, Buru, Maluku Tenggara)'],
            ['kode' => 'DF', 'wilayah' => 'Papua Barat (Manokwari, Fakfak, Kaimana, Sorong)'],
            ['kode' => 'DG', 'wilayah' => 'Papua, Papua Pegunungan, Papua Tengah, Papua Selatan'],
            ['kode' => 'DH', 'wilayah' => 'Nusa Tenggara Timur (Kupang, Timor, Alor, Rote, Sumba, Lembata, Sabu Raijua)'],
            ['kode' => 'DK', 'wilayah' => 'Bali'],
            ['kode' => 'DL', 'wilayah' => 'Sulawesi Utara bagian Selatan (Bolaang Mongondow, Kotamobagu, Bolaang Mongondow Utara, Bolaang Mongondow Timur, Bolaang Mongondow Selatan)'],
            ['kode' => 'DM', 'wilayah' => 'Gorontalo, Kab. Boalemo, Pohuwato, Bone Bolango, Gorontalo Utara'],
            ['kode' => 'DN', 'wilayah' => 'Sulawesi Tengah (Palu, Parigi Moutong, Donggala, Poso, Sigi, Morowali, Touna, dsb)'],
            ['kode' => 'DR', 'wilayah' => 'Nusa Tenggara Barat (NTB) dari Lombok (Mataram, Lombok Barat, dsb)'],
            ['kode' => 'DS', 'wilayah' => 'Papua (Jayapura, Biak, Merauke, Mimika, Nabire, dsb)'],
            ['kode' => 'DT', 'wilayah' => 'Sulawesi Tenggara (Kendari, Bau-Bau, Kolaka, Buton, dsb)'],
            ['kode' => 'EA', 'wilayah' => 'NTB, Pulau Sumbawa (Bima, Dompu, Sumbawa Besar)'],
            ['kode' => 'EB', 'wilayah' => 'NTT, Pulau Flores (Ende, Maumere, Bajawa, Ruteng, dsb)'],
            ['kode' => 'ED', 'wilayah' => 'NTT, Pulau Sumba (Waikabubak, Waingapu)'],
            ['kode' => 'E', 'wilayah' => 'Kabupaten Cirebon, Kota Cirebon, Indramayu, Majalengka, Kuningan (Jawa Barat bagian timur)'],
            ['kode' => 'F', 'wilayah' => 'Bogor, Sukabumi, Cianjur (Jawa Barat bagian Selatan)'],
            ['kode' => 'G', 'wilayah' => 'Kabupaten/Kota Tegal, Kabupaten Brebes, Kabupaten Pemalang, Kabupaten Pemalang, Kabupaten Pekalongan, Kota Pekalongan, Kabupaten Batang, Kabupaten Slawi'],
            ['kode' => 'H', 'wilayah' => 'Semarang, Salatiga, Kendal, Demak, Grobogan, Semarang, Ungaran'],
            ['kode' => 'K', 'wilayah' => 'Pati, Kudus, Jepara, Rembang, Blora, Grobogan'],
            ['kode' => 'KH', 'wilayah' => 'Kalimantan Tengah (Palangka Raya, Sampit, Kapuas, Barito, dsb)'],
            ['kode' => 'KT', 'wilayah' => 'Kalimantan Timur (Samarinda, Balikpapan, Bontang, Kutai Kartanegara, dsb)'],
            ['kode' => 'KB', 'wilayah' => 'Kalimantan Barat (Pontianak, Singkawang, Sambas, Sanggau, Kapuas Hulu, dsb)'],
            ['kode' => 'KU', 'wilayah' => 'Kalimantan Utara (Tarakan, Nunukan, Tana Tidung, Bulungan, Malinau)'],
            ['kode' => 'L', 'wilayah' => 'Kota Surabaya, Gresik, Sidoarjo, Mojokerto'],
            ['kode' => 'M', 'wilayah' => 'Pulau Madura (Bangkalan, Sumenep, Sampang, Pamekasan)'],
            ['kode' => 'N', 'wilayah' => 'Malang, Batu, Pasuruan, Probolinggo, Lumajang'],
            ['kode' => 'P', 'wilayah' => 'Jember, Banyuwangi, Bondowoso, Situbondo'],
            ['kode' => 'R', 'wilayah' => 'Banyumas, Purwokerto, Cilacap, Purbalingga, Banjarnegara'],
            ['kode' => 'S', 'wilayah' => 'Mojokerto, Jombang, Nganjuk, Bojonegoro, Lamongan, Tuban'],
            ['kode' => 'T', 'wilayah' => 'Subang, Purwakarta, Karawang'],
            ['kode' => 'W', 'wilayah' => 'Sidoarjo, Gresik, Mojokerto (kadang interchange dengan L)'],
            ['kode' => 'Z', 'wilayah' => 'Ciamis, Tasikmalaya, Banjar, Garut (Jawa Barat bagian Timur-Selatan)']
        ];

        DB::table('license_plates')->insert($plates);
    }
}
