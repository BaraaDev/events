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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name', '500');
            $table->text('description');
            $table->date('available_date');
            $table->enum('status', ['Expired', 'Available', 'Stopped'])->nullable();
            $table->float('price');
            $table->integer('create_user_id');
            $table->integer('update_user_id')->nullable();
            $table->string('category_id')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
};
