<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionAnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $questions = [
            [
                'question_text' => 'Bapak/Ibu/Saudara/i melihat efektivitas jenis pelatihan kerja yang telah diikuti',
            ],
            [
                'question_text' => 'Bapak/Ibu/Saudara/i merasa tujuan pelatihan tersebut berhasil tercapai',
            ],
            [
                'question_text' => 'Bapak/Ibu/Saudara/i melihat kesesuaian materi pelatihan yang diberikan dengan pekerjaan',
            ],
            [
                'question_text' => 'Bapak/Ibu/Saudara/i merasa metode pelatihan yang digunakan efektif dalam memahami dan mengaplikasikan pengetahuan baru',
            ],
            [
                'question_text' => 'Bapak/Ibu/Saudara/i merasa peserta pelatihan memiliki tingkat kualifikasi yang sebanding dengan materi pelatihan',
            ],
            [
                'question_text' => 'Bapak/Ibu/Saudara/i merasa instruktur memiliki pengalaman yang relevan dalam memberikan pelatihan',
            ],
            [
                'question_text' => 'Bapak/Ibu/Saudara/i merasa waktu yang diberikan  perusahaan cukup dalam pelatihan',
            ],
            [
                'question_text' => 'Bapak/Ibu/Saudara/i selalu menerima gaji yang diberikan tepat waktu oleh perusahaan',
            ],
            [
                'question_text' => 'Bapak/Ibu/Saudara/i mendapatkan upah lembur jika mendapatkan pekerjaan yang diselesaikan diluar dari ketentuan jam kerja',
            ],
            [
                'question_text' => 'Bapak/Ibu/Saudara/i menerima insentif atau bonus tambahan yang diberikan oleh perusahaan karena sudah mencapai atau bahkan melebihi dari target yang dimiliki',
            ],
            [
                'question_text' => 'Bapak/Ibu/Saudara/i mendapatkan hak cuti dan jaminan kesehatan sesuai dengan peraturan yang berlaku ',
            ],
            [
                'question_text' => 'Bapak/Ibu/Saudara/i merasa fasilitas yang diberikan dapat meningkatkan semangat dalam bekerja',
            ],
            [
                'question_text' => 'Bapak/Ibu/Saudara/i merasa diperlakukan secara adil dalam hal promosi dan kesempatan karir',
            ],
            [
                'question_text' => 'Bapak/Ibu/Saudara/i merasa atasan langsung mendukung dalam mencapai tujuan karir',
            ],
            [
                'question_text' => 'Bapak/Ibu/Saudara/i mendapatkan informasi yang cukup tentang peluang promosi yang tersedia di perusahaan',
            ],
            [
                'question_text' => 'Bapak/Ibu/Saudara/i memiliki niat, keterampilan dan kompetensi yang kuat untuk dipromosikan dalam perusahaan',
            ],
            [
                'question_text' => 'Bapak/Ibu/Saudara/i merasa puas dengan peluang promosi yang telah diberikan oleh perusahaan',
            ],
            [
                'question_text' => 'Bapak/Ibu/Saudara/i merasa bahwa perusahaan memberikan cukup perhatian terhadap peningkatan kualitas',
            ],
            [
                'question_text' => 'Bapak/Ibu/Saudara/i merasa tim atau departemen Anda mencapai target atau menyelesaikan tugas yang ditetapkan',
            ],
            [
                'question_text' => 'Bapak/Ibu/Saudara/i sering mengalami tekanan terkait dengan jangka waktu atau tenggat waktu pekerjaan',
            ],
            [
                'question_text' => 'Bapak/Ibu/Saudara/i merasa tingkat kerja sama antar karyawan di tempat kerja cukup baik',
            ],
            [
                'question_text' => 'Bapak/Ibu/Saudara/i merasa bahwa upaya untuk mengurangi biaya mempengaruhi kinerja secara positif atau negatif',
            ],
            [
                'question_text' => 'Bapak/Ibu/Saudara/i merasa bahwa tingkat pengawasan yang ada membantu dalam mencapai tujuan perusahaan',
            ],
        ];

        $answers = [
            [
                'question_id' => '1',
                'answer_text' => 'STS = Sangat Tidak Setuju'
            ],
            [
                'question_id' => '1',
                'answer_text' => 'TS = Tidak Setuju'
            ],
            [
                'question_id' => '1',
                'answer_text' => 'N = Netral'
            ],
            [
                'question_id' => '1',
                'answer_text' => 'S = Setuju'
            ],
            [
                'question_id' => '1',
                'answer_text' => 'SS = Sangat Setuju'
            ],
            [
                'question_id' => '2',
                'answer_text' => 'STS = Sangat Tidak Setuju'
            ],
            [
                'question_id' => '2',
                'answer_text' => 'TS = Tidak Setuju'
            ],
            [
                'question_id' => '2',
                'answer_text' => 'N = Netral'
            ],
            [
                'question_id' => '2',
                'answer_text' => 'S = Setuju'
            ],
            [
                'question_id' => '2',
                'answer_text' => 'SS = Sangat Setuju'
            ],
            [
                'question_id' => '3',
                'answer_text' => 'STS = Sangat Tidak Setuju'
            ],
            [
                'question_id' => '3',
                'answer_text' => 'TS = Tidak Setuju'
            ],
            [
                'question_id' => '3',
                'answer_text' => 'N = Netral'
            ],
            [
                'question_id' => '3',
                'answer_text' => 'S = Setuju'
            ],
            [
                'question_id' => '3',
                'answer_text' => 'SS = Sangat Setuju'
            ],
            [
                'question_id' => '4',
                'answer_text' => 'STS = Sangat Tidak Setuju'
            ],
            [
                'question_id' => '4',
                'answer_text' => 'TS = Tidak Setuju'
            ],
            [
                'question_id' => '4',
                'answer_text' => 'N = Netral'
            ],
            [
                'question_id' => '4',
                'answer_text' => 'S = Setuju'
            ],
            [
                'question_id' => '4',
                'answer_text' => 'SS = Sangat Setuju'
            ],
            [
                'question_id' => '5',
                'answer_text' => 'STS = Sangat Tidak Setuju'
            ],
            [
                'question_id' => '5',
                'answer_text' => 'TS = Tidak Setuju'
            ],
            [
                'question_id' => '5',
                'answer_text' => 'N = Netral'
            ],
            [
                'question_id' => '5',
                'answer_text' => 'S = Setuju'
            ],
            [
                'question_id' => '5',
                'answer_text' => 'SS = Sangat Setuju'
            ],
            [
                'question_id' => '6',
                'answer_text' => 'STS = Sangat Tidak Setuju'
            ],
            [
                'question_id' => '6',
                'answer_text' => 'TS = Tidak Setuju'
            ],
            [
                'question_id' => '6',
                'answer_text' => 'N = Netral'
            ],
            [
                'question_id' => '6',
                'answer_text' => 'S = Setuju'
            ],
            [
                'question_id' => '6',
                'answer_text' => 'SS = Sangat Setuju'
            ],
            [
                'question_id' => '7',
                'answer_text' => 'STS = Sangat Tidak Setuju'
            ],
            [
                'question_id' => '7',
                'answer_text' => 'TS = Tidak Setuju'
            ],
            [
                'question_id' => '7',
                'answer_text' => 'N = Netral'
            ],
            [
                'question_id' => '7',
                'answer_text' => 'S = Setuju'
            ],
            [
                'question_id' => '7',
                'answer_text' => 'SS = Sangat Setuju'
            ],
            [
                'question_id' => '8',
                'answer_text' => 'STS = Sangat Tidak Setuju'
            ],
            [
                'question_id' => '8',
                'answer_text' => 'TS = Tidak Setuju'
            ],
            [
                'question_id' => '8',
                'answer_text' => 'N = Netral'
            ],
            [
                'question_id' => '8',
                'answer_text' => 'S = Setuju'
            ],
            [
                'question_id' => '8',
                'answer_text' => 'SS = Sangat Setuju'
            ],
            [
                'question_id' => '9',
                'answer_text' => 'STS = Sangat Tidak Setuju'
            ],
            [
                'question_id' => '9',
                'answer_text' => 'TS = Tidak Setuju'
            ],
            [
                'question_id' => '9',
                'answer_text' => 'N = Netral'
            ],
            [
                'question_id' => '9',
                'answer_text' => 'S = Setuju'
            ],
            [
                'question_id' => '9',
                'answer_text' => 'SS = Sangat Setuju'
            ],
            [
                'question_id' => '10',
                'answer_text' => 'STS = Sangat Tidak Setuju'
            ],
            [
                'question_id' => '10',
                'answer_text' => 'TS = Tidak Setuju'
            ],
            [
                'question_id' => '10',
                'answer_text' => 'N = Netral'
            ],
            [
                'question_id' => '10',
                'answer_text' => 'S = Setuju'
            ],
            [
                'question_id' => '10',
                'answer_text' => 'SS = Sangat Setuju'
            ],
            [
                'question_id' => '11',
                'answer_text' => 'STS = Sangat Tidak Setuju'
            ],
            [
                'question_id' => '11',
                'answer_text' => 'TS = Tidak Setuju'
            ],
            [
                'question_id' => '11',
                'answer_text' => 'N = Netral'
            ],
            [
                'question_id' => '11',
                'answer_text' => 'S = Setuju'
            ],
            [
                'question_id' => '11',
                'answer_text' => 'SS = Sangat Setuju'
            ],
            [
                'question_id' => '12',
                'answer_text' => 'STS = Sangat Tidak Setuju'
            ],
            [
                'question_id' => '12',
                'answer_text' => 'TS = Tidak Setuju'
            ],
            [
                'question_id' => '12',
                'answer_text' => 'N = Netral'
            ],
            [
                'question_id' => '12',
                'answer_text' => 'S = Setuju'
            ],
            [
                'question_id' => '12',
                'answer_text' => 'SS = Sangat Setuju'
            ],
            [
                'question_id' => '13',
                'answer_text' => 'STS = Sangat Tidak Setuju'
            ],
            [
                'question_id' => '13',
                'answer_text' => 'TS = Tidak Setuju'
            ],
            [
                'question_id' => '13',
                'answer_text' => 'N = Netral'
            ],
            [
                'question_id' => '13',
                'answer_text' => 'S = Setuju'
            ],
            [
                'question_id' => '13',
                'answer_text' => 'SS = Sangat Setuju'
            ],
            [
                'question_id' => '14',
                'answer_text' => 'STS = Sangat Tidak Setuju'
            ],
            [
                'question_id' => '14',
                'answer_text' => 'TS = Tidak Setuju'
            ],
            [
                'question_id' => '14',
                'answer_text' => 'N = Netral'
            ],
            [
                'question_id' => '14',
                'answer_text' => 'S = Setuju'
            ],
            [
                'question_id' => '14',
                'answer_text' => 'SS = Sangat Setuju'
            ],
            [
                'question_id' => '15',
                'answer_text' => 'STS = Sangat Tidak Setuju'
            ],
            [
                'question_id' => '15',
                'answer_text' => 'TS = Tidak Setuju'
            ],
            [
                'question_id' => '15',
                'answer_text' => 'N = Netral'
            ],
            [
                'question_id' => '15',
                'answer_text' => 'S = Setuju'
            ],
            [
                'question_id' => '15',
                'answer_text' => 'SS = Sangat Setuju'
            ],
            [
                'question_id' => '16',
                'answer_text' => 'STS = Sangat Tidak Setuju'
            ],
            [
                'question_id' => '16',
                'answer_text' => 'TS = Tidak Setuju'
            ],
            [
                'question_id' => '16',
                'answer_text' => 'N = Netral'
            ],
            [
                'question_id' => '16',
                'answer_text' => 'S = Setuju'
            ],
            [
                'question_id' => '16',
                'answer_text' => 'SS = Sangat Setuju'
            ],
            [
                'question_id' => '17',
                'answer_text' => 'STS = Sangat Tidak Setuju'
            ],
            [
                'question_id' => '17',
                'answer_text' => 'TS = Tidak Setuju'
            ],
            [
                'question_id' => '17',
                'answer_text' => 'N = Netral'
            ],
            [
                'question_id' => '17',
                'answer_text' => 'S = Setuju'
            ],
            [
                'question_id' => '17',
                'answer_text' => 'SS = Sangat Setuju'
            ],
            [
                'question_id' => '18',
                'answer_text' => 'STS = Sangat Tidak Setuju'
            ],
            [
                'question_id' => '18',
                'answer_text' => 'TS = Tidak Setuju'
            ],
            [
                'question_id' => '18',
                'answer_text' => 'N = Netral'
            ],
            [
                'question_id' => '18',
                'answer_text' => 'S = Setuju'
            ],
            [
                'question_id' => '18',
                'answer_text' => 'SS = Sangat Setuju'
            ],
            [
                'question_id' => '19',
                'answer_text' => 'STS = Sangat Tidak Setuju'
            ],
            [
                'question_id' => '19',
                'answer_text' => 'TS = Tidak Setuju'
            ],
            [
                'question_id' => '19',
                'answer_text' => 'N = Netral'
            ],
            [
                'question_id' => '19',
                'answer_text' => 'S = Setuju'
            ],
            [
                'question_id' => '19',
                'answer_text' => 'SS = Sangat Setuju'
            ],
            [
                'question_id' => '20',
                'answer_text' => 'STS = Sangat Tidak Setuju'
            ],
            [
                'question_id' => '20',
                'answer_text' => 'TS = Tidak Setuju'
            ],
            [
                'question_id' => '20',
                'answer_text' => 'N = Netral'
            ],
            [
                'question_id' => '20',
                'answer_text' => 'S = Setuju'
            ],
            [
                'question_id' => '20',
                'answer_text' => 'SS = Sangat Setuju'
            ],
            [
                'question_id' => '21',
                'answer_text' => 'STS = Sangat Tidak Setuju'
            ],
            [
                'question_id' => '21',
                'answer_text' => 'TS = Tidak Setuju'
            ],
            [
                'question_id' => '21',
                'answer_text' => 'N = Netral'
            ],
            [
                'question_id' => '21',
                'answer_text' => 'S = Setuju'
            ],
            [
                'question_id' => '21',
                'answer_text' => 'SS = Sangat Setuju'
            ],
            [
                'question_id' => '22',
                'answer_text' => 'STS = Sangat Tidak Setuju'
            ],
            [
                'question_id' => '22',
                'answer_text' => 'TS = Tidak Setuju'
            ],
            [
                'question_id' => '22',
                'answer_text' => 'N = Netral'
            ],
            [
                'question_id' => '22',
                'answer_text' => 'S = Setuju'
            ],
            [
                'question_id' => '22',
                'answer_text' => 'SS = Sangat Setuju'
            ],
            [
                'question_id' => '23',
                'answer_text' => 'STS = Sangat Tidak Setuju'
            ],
            [
                'question_id' => '23',
                'answer_text' => 'TS = Tidak Setuju'
            ],
            [
                'question_id' => '23',
                'answer_text' => 'N = Netral'
            ],
            [
                'question_id' => '23',
                'answer_text' => 'S = Setuju'
            ],
            [
                'question_id' => '23',
                'answer_text' => 'SS = Sangat Setuju'
            ],
        ];


        foreach ($questions as $question) {
            DB::table('questions')->insert($question);
        }
        foreach ($answers as $answer) {
            DB::table('answers')->insert($answer);
        }
    }
}
