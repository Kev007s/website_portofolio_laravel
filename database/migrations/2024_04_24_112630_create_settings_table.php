<?php

use App\Models\setting;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->string('label');
            $table->string('value')->nullable();
            $table->string('type');
            $table->timestamps();
        });

        setting::create([
            'key'=>"_site_name",
            'label'=>"Judul situs",
            'value'=>"Portofolio",
            'type'=>"text"
        ]);

        setting::create([
            'key'=>"_Location",
            'label'=>"Alamat",
            'value'=>"Malang",
            'type'=>"text"
        ]);

        setting::create([
            'key'=>"_youtube",
            'label'=>"YouTube",
            'value'=>"link",
            'type'=>"text"
        ]);

        setting::create([
            'key'=>"_ig",
            'label'=>"Instagram",
            'value'=>"link",
            'type'=>"text"
        ]);

        setting::create([
            'key'=>"_x",
            'label'=>"Twtter",
            'value'=>"link",
            'type'=>"text"
        ]);

        setting::create([
            'key'=>"_Facebook",
            'label'=>"Facebook",
            'value'=>"link",
            'type'=>"text"
        ]);

        setting::create([
            'key'=>"_site_decs",
            'label'=>"Site Decription",
            'value'=>"Website Portofolio",
            'type'=>"text"
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
