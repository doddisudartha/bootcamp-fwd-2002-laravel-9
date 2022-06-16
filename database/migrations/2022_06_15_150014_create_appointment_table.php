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
        Schema::create('appointment', function (Blueprint $table) {
            $table->id();
            $table->foreignId('doctor_id')->constrained('doctor');
            $table->foreignId('user_id')->constrained('user');
            $table->foreignId('consultation_id')->constrained('consultation');
            $table->enum('level', [1,2,3]);
            $table->date('date');
            $table->time('time');
            $table->enum('status', [1,2]); // ini adalah status appointment mengacu kepada user tersebut datang atau tidak
            $table->timestamps();
            $table->softDeletes(); // soft deletes akan menghasilkan field deleted_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appointment');
    }
};
