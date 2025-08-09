<?php

use App\Models\Account;
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
        Schema::create('cards', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->string('name');
            $table->boolean('type');
            $table->string("number")->nullable();
            $table->integer("cvv")->nullable();
            $table->string('residential_address');
            $table->string('phone');
            $table->string('email');
            $table->double('balance');
            $table->foreignId('account_id')->constrained()->cascadeOnDelete();
            $table->boolean('status')->default(0);
            $table->date('date')->default(now());
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cards');
    }
};
