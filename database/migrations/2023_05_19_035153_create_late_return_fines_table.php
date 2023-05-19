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
        Schema::create('late_return_fines', function (Blueprint $table) {
            $table->id();
            $table->foreignId('borrow_id')->constrained();
            $table->double('amount', 5, 2);
            $table->string('payment_type');
            $table->dateTime('payment_date');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('late_return_fines');
    }
};
