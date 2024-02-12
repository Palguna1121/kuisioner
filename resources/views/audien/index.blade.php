<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuesioner Penelitian</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <style>
        body {
            background-color: #f8f9fa;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container text-center text-dark">
        <h4>KUESIONER PENELITIAN</h4>
        <h4>PENGARUH PELATIHAN, KOMPENSASI DAN PENGEMBANGAN KARIR TERHADAP KINERJA KARYAWAN</h4>
        <p>PT. PUTRA DEWATA SEJATI CABANG DENPASAR</p>
        <div class="text-left mb-4 text-dark">
            <p><strong>Perihal:</strong> Permohonan menjadi responden</p>
            <p><strong>Kepada:</strong> Yth, Bapak/Ibu/Saudara/i</p>
            <p>diTempat</p>
            <p>Dengan Hormat,</p>

            <p>Dalam rangka penyusunan tugas akhir, sebagai salah satu syarat untuk mendapatkan gelar Sarjana Manajemen, maka dengan ini saya:</p>

            <ul>
                <li><strong>Nama:</strong> Desak Putu Sonya Prema Jyoti</li>
                <li><strong>NIM:</strong> 1.20.1.1267</li>
                <li><strong>Program Studi:</strong> Manajemen</li>
                <li><strong>Universitas:</strong> Pendidikan Nasional Denpasar</li>
            </ul>

            <p>Bermaksud untuk melakukan penelitian pada karyawan PT. Putra Dewata Sejati Cabang Denpasar. Adapun topik yang diangkat dalam penelitian ini adalah “Pengaruh Pelatihan, Kompensasi dan Pengembangan Karir Terhadap Kinerja Karyawan PT. Putra Dewata Sejati Cabang Denpasar”</p>

            <p>Untuk itu, kami mohon kesediaan Bapak/Ibu/Saudara/i untuk mengisi Kuesioner ini sesuai dengan petunjuk pengisian, dengan lengkap dan jujur. Adapun tujuan dari penelitian ini semata-mata hanya untuk kepentingan ilmiah dan segala identitas yang Anda berikan akan dijaga kerahasiaannya.</p>

            <p>Atas kerjasamanya dan kesediaan Bapak/Ibu/Saudara/I, saya ucapkan terima kasih.</p>

            <p>Hormat saya,</p>
            <p>Desak Putu Sonya Prema Jyoti</p>
        </div>
    </div>

    <div class="text-center">
        <form method="POST" id="audienForm" onsubmit="handleSubmit(event)" action="{{ route('audien.store.answer') }}">
            @csrf

            <!-- Form untuk data audien -->
            <div class="container my-4 text-left">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" id="nama" name="nama" required class="form-control" placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" id="email" name="email" required class="form-control" placeholder="Enter email">
                </div>
            </div>

            <div class="container my-4 text-left">
                <div class="text-left">
                    <p class="mb-3"><strong>Usia:</strong></p>
                    <div class="mb-3">
                        <div class="icheck-primary">
                            <input type="radio" id="usia1" name="usia" value="< 20 Tahun" required>
                            <label for="usia1">
                                < 20 Tahun
                            </label>
                        </div>
                        <div class="icheck-primary">
                            <input type="radio" id="usia2" name="usia" value="20 - 30 Tahun" required>
                            <label for="usia2">
                                20 - 30 Tahun
                            </label>
                        </div>
                        <div class="icheck-primary">
                            <input type="radio" id="usia3" name="usia" value="31 - 40 Tahun" required>
                            <label for="usia3">
                                31 - 40 Tahun
                            </label>
                        </div>
                        <div class="icheck-primary">
                            <input type="radio" id="usia4" name="usia" value="> 40 Tahun" required>
                            <label for="usia4">
                                > 40 Tahun
                            </label>
                        </div>
                    </div>
                    
                </div>

                <div class="my-4 text-left">
                    <p class="mb-3"><strong>Jenis Kelamin:</strong></p>
                    <div class="mb-3">
                        <div class="icheck-primary">
                            <input type="radio" id="jenis_kelamin1" name="jenis_kelamin" value="Laki-Laki" required>
                            <label for="jenis_kelamin1">Laki-Laki</label>
                        </div>
                        <div class="icheck-primary">
                            <input type="radio" id="jenis_kelamin2" name="jenis_kelamin" value="Perempuan" required>
                            <label for="jenis_kelamin2">Perempuan</label>
                        </div>
                    </div>
                </div>

                <div class="my-4 text-left">
                    <p class="mb-3"><strong>Tingkat Pendidikan:</strong></p>
                    <div class="mb-3">
                        <div class="icheck-primary">
                            <input type="radio" id="pendidikan1" name="tingkat_pendidikan" value="Dibawah SMA/Sederajat" required>
                            <label for="pendidikan1">Dibawah SMA/Sederajat</label>
                        </div>
                        <div class="icheck-primary">
                            <input type="radio" id="pendidikan2" name="tingkat_pendidikan" value="SMA/Sederajat" required>
                            <label for="pendidikan2">SMA/Sederajat</label>
                        </div>
                        <div class="icheck-primary">
                            <input type="radio" id="pendidikan3" name="tingkat_pendidikan" value="Diploma I/II/III" required>
                            <label for="pendidikan3">Diploma I/II/III</label>
                        </div>
                        <div class="icheck-primary">
                            <input type="radio" id="pendidikan4" name="tingkat_pendidikan" value="Strata I (S1)/Sederajat" required>
                            <label for="pendidikan4">Strata I (S1)/Sederajat</label>
                        </div>
                        <div class="icheck-primary">
                            <input type="radio" id="pendidikan5" name="tingkat_pendidikan" value="Strata II (S2)/Sederajat" required>
                            <label for="pendidikan5">Strata II (S2)/Sederajat</label>
                        </div>
                        <div class="icheck-primary">
                            <input type="radio" id="pendidikan6" name="tingkat_pendidikan" value="Strata III (S3)/Sederajat" required>
                            <label for="pendidikan6">Strata III (S3)/Sederajat</label>
                        </div>
                    </div>
                </div>

                <div class="my-4 text-left">
                    <p class="mb-3"><strong>Masa Kerja:</strong></p>
                    <div class="mb-3">
                        <div class="icheck-primary">
                            <input type="radio" id="masa_kerja1" name="masa_kerja" value="1 - 5 Tahun" required>
                            <label for="masa_kerja1">1 - 5 Tahun</label>
                        </div>
                        <div class="icheck-primary">
                            <input type="radio" id="masa_kerja2" name="masa_kerja" value="5 - 10 Tahun" required>
                            <label for="masa_kerja2">5 - 10 Tahun</label>
                        </div>
                        <div class="icheck-primary">
                            <input type="radio" id="masa_kerja3" name="masa_kerja" value="> 10 Tahun" required>
                            <label for="masa_kerja3">> 10 Tahun</label>
                        </div>
                    </div>
                </div>
            </div>


            <div class="container my-4 text-left">
                <p><strong>Petunjuk Pengisian:</strong></p>
                <p>1) Pilihlah jawaban dari pertanyaan-pertanyaan berikut menurut pendapat Bapak/Ibu/Saudara/i yang paling tepat</p>
                <p>2) Alternatif jawabannya yaitu berikut:</p>
                <ul>
                    <li>STS : Sangat Tidak Setuju </li>
                    <li>TS : Tidak Setuju </li>
                    <li>N : Netral </li>
                    <li>S : Setuju </li>
                    <li>SS : Sangat Setuju </li>
                </ul>
            </div>

            @foreach ($questionChunks as $category => $questions)
                <div class="container my-4 text-left">
                    <h3>{{ $category }}</h3>
                    @foreach ($questions as $question)
                            <p class="mb-3"><strong>{{ $question['question_text'] }}</strong></p>
                            @foreach ($question['answers'] as $answer)
                                <div class="icheck-primary">
                                    <input type="radio" id="answer{{ $answer['id'] }}" name="answers[{{ $question['id'] }}]" value="{{ $answer['id'] }}">
                                    <label for="answer{{ $answer['id'] }}">{{ $answer['answer_text'] }}</label>
                                </div>
                            @endforeach
                    @endforeach
                </div>
            @endforeach

            <button class="btn btn-primary" id="submitBtn" type="submit">Kirim Jawaban</button>

        </form>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
                var submitBtn = document.getElementById('submitBtn');
                submitBtn.disabled = true; // Disable the submit button by default

                var requiredInputs = document.querySelectorAll('input[required]');
                requiredInputs.forEach(function(input) {
                    input.addEventListener('input', function() {
                        var isFormValid = validateForm();
                        submitBtn.disabled = !isFormValid; // Enable/disable the submit button based on form validity
                    });
                });
    
                function validateForm() {
                    var isValid = true;
                    requiredInputs.forEach(function(input) {
                        if (!input.value.trim()) {
                            isValid = false;
                        }
                    });
                    return isValid;
                }
            });
    
            function handleSubmit(event) {
                event.preventDefault();
                if (validateForm()) {
                    var form = document.getElementById('audienForm');
                    var formData = new FormData(form);
    
                    var xhr = new XMLHttpRequest();
                    xhr.open('POST', form.getAttribute('action'), true);
                    xhr.setRequestHeader('X-CSRF-TOKEN', '{{ csrf_token() }}');
                    xhr.onreadystatechange = function() {
                        if (xhr.readyState === XMLHttpRequest.DONE) {
                            if (xhr.status === 200) {
                                alert('Jawaban berhasil disimpan!');
                                window.location.href = '/done';
                            } else if (xhr.status === 422) {
                                var response = JSON.parse(xhr.responseText);
                                alert(response.message);
                            } else {
                                alert('Terjadi kesalahan saat menyimpan jawaban.');
                            }
                        }
                    };
                    xhr.send(formData);
                }
            }
    
        function validateForm() {
                var questions = document.querySelectorAll('input[type="radio"]');
                var isAnyQuestionAnswered = false;
    
                questions.forEach(function(question) {
                    if (question.checked) {
                        isAnyQuestionAnswered = true;
                    }
                });
    
                if (!isAnyQuestionAnswered) {
                    alert('Anda harus menjawab semua pertanyaan.');
                    return false;
                }
    
                return true;
            }
    </script>
</body>
</html>
