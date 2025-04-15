<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('musicians', function (Blueprint $table) {
            $table->text('about')->nullable();
            $table->string('genres')->nullable();
            $table->string('instruments')->nullable();
            $table->string('influences')->nullable();
            $table->integer('experience')->nullable();
            $table->string('profile_image')->nullable();
            $table->text('video_urls')->nullable();
            $table->text('audio_urls')->nullable();
        });
    }

    public function down()
    {
        Schema::table('musicians', function (Blueprint $table) {
            $table->dropColumn([
                'about', 'genres', 'instruments', 'influences', 'experience',
                'profile_image', 'video_urls', 'audio_urls'
            ]);
        });
    }
};
