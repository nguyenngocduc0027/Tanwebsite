<?php

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
            $table->string('name')->nullable();          // Tên Website
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('facebook')->nullable();
            $table->string('shoppe')->nullable();
            $table->string('lazada')->nullable();
            $table->string('tiktok')->nullable();
            $table->string('maps')->nullable();
            $table->text('subtitle')->nullable();

            $table->boolean('momo')->default(false);
            $table->boolean('zalopay')->default(false);
            $table->boolean('qrcode')->default(false);
            $table->boolean('visa')->default(false);
            $table->boolean('bank')->default(false);

            $table->string('logo')->nullable();
            $table->string('favicon')->nullable();
            $table->string('certi1')->nullable();
            $table->string('certi2')->nullable();
            $table->string('certi3')->nullable();
            $table->string('certi4')->nullable();

            $table->string('seo_author')->nullable();
            $table->text('seo_keywords')->nullable();
            $table->string('seo_site_name')->nullable();
            $table->text('seo_title')->nullable();
            $table->string('seo_image')->nullable();
            $table->text('seo_description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
