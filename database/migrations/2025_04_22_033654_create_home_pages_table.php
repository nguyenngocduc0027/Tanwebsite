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
        Schema::create('home_pages', function (Blueprint $table) {
            $table->id();
            $table->string('service1')->nullable();
            $table->string('content1')->nullable();
            $table->string('image1')->nullable();
            $table->string('service2')->nullable();
            $table->string('content2')->nullable();
            $table->string('image2')->nullable();
            $table->string('service3')->nullable();
            $table->string('content3')->nullable();
            $table->string('image3')->nullable();
            $table->string('service4')->nullable();
            $table->string('content4')->nullable();
            $table->string('image4')->nullable();
            $table->string('set_product_title')->nullable();
            $table->string('set_product_subtitle')->nullable();
            $table->text('set_product_description')->nullable();
            $table->string('sale_product_title')->nullable();
            $table->string('sale_product_subtitle')->nullable();
            $table->text('sale_product_description')->nullable();
            $table->string('coupon_title')->nullable();
            $table->string('coupon_subtitle')->nullable();
            $table->text('coupon_description')->nullable();
            $table->string('about_title')->nullable();
            $table->string('about_subtitle')->nullable();
            $table->text('about_description')->nullable();
            $table->string('image_about')->nullable();
            $table->string('why_title')->nullable();
            $table->string('why_subtitle')->nullable();
            $table->string('why1')->nullable();
            $table->string('content_why1')->nullable();
            $table->string('image_why1')->nullable();
            $table->string('why2')->nullable();
            $table->string('content_why2')->nullable();
            $table->string('image_why2')->nullable();
            $table->string('why3')->nullable();
            $table->string('content_why3')->nullable();
            $table->string('image_why3')->nullable();
            $table->string('why4')->nullable();
            $table->string('content_why4')->nullable();
            $table->string('image_why4')->nullable();
            $table->string('why5')->nullable();
            $table->string('content_why5')->nullable();
            $table->string('image_why5')->nullable();
            $table->string('why6')->nullable();
            $table->string('content_why6')->nullable();
            $table->string('image_why6')->nullable();
            $table->string('img_why')->nullable();
            $table->string('product_title')->nullable();
            $table->string('product_subtitle')->nullable();
            $table->text('product_description')->nullable();
            $table->string('feedback_title')->nullable();
            $table->string('feedback_subtitle')->nullable();
            $table->text('feedback_description')->nullable();
            $table->string('blog_title')->nullable();
            $table->string('blog_subtitle')->nullable();
            $table->text('blog_description')->nullable();
            $table->string('partner_title')->nullable();
            $table->string('partner_subtitle')->nullable();
            $table->text('partner_description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_pages');
    }
};
