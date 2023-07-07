<?php 
namespace App\Http\Controllers;

use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use BotMan\BotMan\Messages\Incoming\Answer;

class BotManController extends controller
{

    public function handle()
    {
        $botman = app('botman');

        $botman->hears('{massage}', function($botman, $massage) {

            if($massage == 'hi' OR $massage == 'hai'OR $massage == 'Hai' OR $massage == 'Hi' OR $massage == 'Hello' OR $massage == 'Hallo'){
                $this->askName($botman);
            }
            elseif ($massage=='Terimaksih' OR $massage == 'makasih') {
                $botman->reply("Sama-sama kawan");
            }


            //sapaan hari
            elseif ($massage == 'Selamat Siang' OR $massage == 'Siang') {
                $botman->reply("Hai, Selamat siang kawan"); 
            }
            elseif ($massage == 'Selamat Sore' OR $massage == 'Sore') {
                $botman->reply("Hai, Selamat sore kawan"); 
            }
            elseif ($massage == 'Selamat Pagi' OR $massage == 'Pagi') {
                $botman->reply("Hai, Selamat pagi kawan"); 
            }
            elseif ($massage == 'Selamat Malam' OR $massage == 'Malam') {
                $botman->reply("Hai, Selamat malam kawan"); 
            }


            //first
            elseif ($massage == 'Siapa kamu?' OR $massage == 'Kamu siapa?') {
                  $botman->reply("Saya Hanya sebuah bot Smart'S, Ayo mulai dengan pertanyaanmu.."); 
            }


            // seputar beasiswa secara umum
            elseif ($massage == 'Apa itu beasiswa ?' OR $massage == 'Beasiswa itu apa ?' OR $massage == 'Beasiswa adalah ?' OR $massage == 'apa itu beasiswa ?' ) {
                $botman->reply("Beasiswa adalah pemberian berupa bantuan keuangan yang diberikan kepada perorangan yang 
                bertujuan untuk digunakan demi keberlangsungan pendidikan yang ditempuh. Beasiswa dapat diberikan oleh 
                lembaga pemerintah, perusahaan ataupun yayasan.");
            }

            elseif ($massage == 'tujuan beasiswa' OR $massage == 'Tujuan beasiswa ?' OR $massage == 'tujuan beasiswa ?' OR $massage == 'apa tujuan beasiswa ?' ) {
                $botman->reply("Tujuan beasiswa adalah untuk Membantu para pelajar sma/smk sederajat Fokus Belajar. Terutama bagi 
                pelajar yang mungkin membiayai uang kuliahnya sendiri, mendapatkan beasiswa yang meringankan 
                beban kuliah akan membantu kamu lebih fokus saat kuliah. Kamu tidak perlu bersusah payah 
                mencari berbagai pekerjaan paruh waktu atau bahkan full-time untuk menutupi biaya kuliah.");
            }

            elseif ($massage == 'Jenis beasiswa ?' OR $massage == 'jenis beasiswa ?' OR $massage == 'jenis beasiswa' OR $massage == 'jenis beasiswa apa aja ?' OR $massage == 'jenis beasiswa apa saja yang ada di pendidikan kuliah ?' OR $massage == 'jenis beasiswa perguruan tinggi apa saja ?' ) {
                $botman->reply("Jenis-jenis beasiswa secara umum itu ada beasiswa penuh dan beasiswa parsial. Namun jika 
                dilihat dari sumber pendanaan jenis beasiswa bisa dibedakan menjadi 5 yaitu beasiswa dari pemerintah, beasiswa dari pihak swasta, 
                beasiswa dari negara maju, beasiswa oragnisasi atau komunitas, dan beasiswa dari perguruan tinggi."); 
            }

            elseif ($massage == 'Siapa yang bertanggung jawab beasiswa smarts ?' OR $massage == 'Penanggung jawab beasiswa smarts ?' OR $massage == 'Siapa yang mendanai beasiswa smarts ?' ) {
                $botman->reply("Yayasan Harapan Bersama"); 
            }

            elseif ($massage == 'beasiswa itu berupa apa' OR $massage == 'beasiswa itu berupa apa ?'  OR $massage == 'beasiswa itu bisa berupa apa ?'OR $massage == 'Beasiswa itu berupa apa ?' OR $massage == 'Beasiswa itu berupa apa' ) {
                $botman->reply("Beasiswa itu bisa diberikan berupa bantuan keuangan yang diberikan kepada perorangan yang bertujuan untuk digunakan demi keberlangsungan pendidikan yang ditempuh."); 
            }

            elseif ($massage == 'Siapa yang berhak mendapatkan beasiswa smarts ?' OR $massage == 'Siapa yang berhak mendapatkan beasiswa' OR $massage == 'siapa yang berhak mendapat beasiswa smarts' ) {
                $botman->reply("Semua Warga Negara Indonesia yang memenuhi ketentuan persyaratan dan kriteria dari program beasiswa smarts"); 
            }

            elseif ($massage == 'Apa manfaat beasiswa ?' OR $massage == 'Manfaat beasiswa' OR $massage == 'manfaat beasiswa ?' OR $massage == 'apa manfaat beasiswa ?' ) {
                $botman->reply("Manfaat beasiswa selain untuk meringankan beban dan biaya kuliah, beasiswa juga bisa digunakan untuk memperkuat Cv, 
                membantu para pelajar sma/smk sederajat untuk fokus belajar, dan untuk memberikan kesempatan untuk masuk ke perguruan tinggi ternama yang diinginkan siswa"); 
            }

            //pertanyaan beasiswa smart
            elseif ($massage == 'Pendaftaran' OR $massage == 'Info daftar' OR $massage== 'syarat daftar' OR $massage== 'Info Pendaftaran') {
                $botman->reply("Syarat pendaftaran bisa berupa Rekap nilai rapot, Keaktifan dan organisasi. Untuk lebih
                jelasnya anda dapat mengeceknya di website Smart'S dengan cermat sesuai beasiswa yang cocok untuk anda"); 
            }

            elseif ($massage == 'Jadwal' OR $massage == 'jadwal' OR $massage == 'tanggal penutupan beasiswa') {
                $botman->reply("Untuk lebih lengkapnya anda dapat mengecek pada menu beasiswa di website Smart'S yang update tanggal dan jadwal
                beasiswa yang selalu tersedia"); 
            }

            elseif ($massage == 'info berkas' OR $massage == 'Info berkas' OR $massage== 'Berkas yang diperlukan ?' OR $massage == 'Berkas yang diperlukan' OR $massage == 'berkas yang diperlukan') {
            $botman->reply("Berkas yang perlu dilengkapi atau dibutuhkan seperti Scan Kartu Keluarga, Scan raport, Scan surat keterangan penghasilan orang tua dan masih banyak lagi. Kamu bisa cek langsung pada website Smart'S di bagian Beasiswa ya kawan"); 
            }

            elseif ($massage == 'Help' OR $massage == 'help' OR $massage == 'bantuan' OR $massage == 'Tolong') {
                $botman->reply("AI Smart'S ada disini.. Apa yang bisa saya lakukan ?"); 
            }

            elseif ($massage == 'Beasiswa' OR $massage == 'beasiswa' OR $massage == 'Apa saja beasiswanya' OR $massage == 'Ada beasiswa' OR $massage == 'rekomendasi') {
                $botman->reply("Beberapa rekomendasi beasiswa yang tersedia dapat di cek melalui menu rekomendasi"); 
            }

            else{
                $botman->reply("Hello kawan, Selamat datang di Bot Smart'S");
            }
        });
        
        $botman->listen();
    
    }

    public function askName($botman)
    {
        $botman->ask('Hello! What is your Name?', function(Answer $answer) {

            $name = $answer->getText();

            $this->say('Nice to meet you '.$name);
        });
    }
    
}