<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('general_settings', function (Blueprint $table) {
            $table->id();
            $table->string('site_name')->nullable();
            $table->string('site_email')->nullable();
            $table->string('site_phone')->nullable();
            $table->text('site_address')->nullable();
            $table->integer('is_under_main')->nullable();
            $table->float('usd_rate')->nullable();
            $table->float('service_charge')->nullable();
            $table->integer('job_auto_post')->nullable();
            $table->float('job_post_min_amt')->nullable();
            $table->float('screenshot_price')->nullable();
            $table->string('site_currency')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('general_settings');
    }
};
