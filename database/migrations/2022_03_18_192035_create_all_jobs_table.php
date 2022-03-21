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
        Schema::create('all_jobs', function (Blueprint $table) {
            $table->id();
            $table->integer('region_name')->nullable();
            $table->integer('main_category')->nullable();
            $table->integer('sub_category')->nullable();
            $table->string('job_title')->nullable();
            $table->text('relative_file')->nullable();
            $table->text('specific_task')->nullable();
            $table->text('require_proof')->nullable();
            $table->text('thumbnail')->nullable();
            $table->integer('worker_need')->nullable();
            $table->float('each_worker_earn')->nullable();
            $table->integer('screenshot')->nullable();
            $table->integer('est_day')->nullable();
            $table->float('est_job_cost')->nullable();
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
        Schema::dropIfExists('all_jobs');
    }
};
