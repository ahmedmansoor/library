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
        Schema::create('borrows', function (Blueprint $table) {
            $table->id();
            $table->foreignId('borrower_id')->constrained();
            $table->foreignId('book_id')->constrained();
            $table->dateTime('issue_date');
            $table->dateTime('due_date');
            $table->dateTime('return_date')->nullable();
            $table->enum('is_late', ['no', 'yes']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('borrows');
    }
};
