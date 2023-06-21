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
        Schema::create('tots_device', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->tinyInteger('device_type')->nullable(false)->index()->default(0)->comments('0 = Undefined, 1 = Android, 2 = iOS, 3 = Web, 4 = Desktop');
            $table->text('device_token')->nullable(false);
            $table->string('app_version', 100)->nullable(true);
            $table->integer('language_id')->nullable(true);
            $table->text('device_model')->nullable(true);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('tots_user');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tots_device');
    }
};
