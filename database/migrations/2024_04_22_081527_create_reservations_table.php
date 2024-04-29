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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();

            $table->string('code')->nullable();
            $table->string('full_name');
            $table->string('email')->nullable();
            $table->string('phone');
            $table->foreignId('car_pricing_id')->constrained('car_pricings');
            $table->string('from_address')->nullable();
            $table->string('to_address')->nullable();

            $table->dateTime('customer_arrived_at');
            $table->dateTime('driver_arrived_at');

            $table->integer('people_number');
            $table->string('attachment')->nullable();
            $table->text('note')->nullable();
            $table->enum('status', ['pending', 'accepted', 'not-accepted', 'failed', 'done'])->default('pending');
            $table->boolean('is_prepaid')->default(0);

            // $table->string('arrival_time')->nullable();
            // $table->string('departure_time')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
