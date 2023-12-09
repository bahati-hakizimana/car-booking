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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('destination')->nullable();
            $table->string('airport')->nullable();
            $table->string('driver_status')->nullable();
            $table->string('product_id')->nullable();
            $table->integer('quantity')->nullable();
            $table->decimal('price', 10, 2)->nullable();
            $table->decimal('deposit', 10, 2)->nullable();
            $table->decimal('totaldeposit', 10, 2)->nullable();
            $table->integer('id_passport')->nullable();
            $table->date('pickup_date');
            $table->date('dropoff_date');
            $table->integer('total_days');
            $table->decimal('total_price', 10, 2)->nullable();
            $table->string('terms_condition')->nullable();
            $table->string('status')->nullable();
            $table->string('payment_method')->nullable();
            $table->unsignedBigInteger('payment_id')->nullable();
            $table->foreign('payment_id')->references('id')->on('payments')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
