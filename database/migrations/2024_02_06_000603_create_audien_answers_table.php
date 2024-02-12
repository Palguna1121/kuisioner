<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAudienAnswersTable extends Migration
{
    public function up()
    {
        Schema::create('audien_answers', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('email')->unique();
            $table->string('usia');
            $table->string('jenis_kelamin');
            $table->string('tingkat_pendidikan');
            $table->string('masa_kerja');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('audien_answers');
    }
}
