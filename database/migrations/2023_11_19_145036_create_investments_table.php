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
        Schema::create('investments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->string('package');
            $table->string('amount');
            $table->string('contract');
            $table->string('payment_coin');
            $table->string('wallet_address');
            // $table->string('wallet_email')->nullable();
            $table->string('payment_img')->nullable();
            // $table->string('ref_bonuse')->nullable();
            // $table->string('due_earnings')->nullable();
            $table->boolean('investment_status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('investments');
    }
};
