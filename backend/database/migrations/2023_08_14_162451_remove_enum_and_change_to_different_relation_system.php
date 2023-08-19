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
        Schema::dropColumns('fuels', ['type']);

        Schema::table('fuels', function (Blueprint $table) {
            $table->foreignId('fuel_category_id')->after('description')->constrained('fuel_categories');
        });

        Schema::table('vehicles', function (Blueprint $table) {
            $table->bigInteger('fuel_id')->constrained('fuels')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropColumns('fuels', ['fuel_category_id']);

        Schema::table('fuels', function (Blueprint $table) {
            $table->enum('type', ['ELECTRIC', 'GASOLINE', 'DIESEL', 'GASEOUS'])->nullable();
        });

        // @TODO Fix down for constraint
        Schema::table('vehicles', function (Blueprint $table) {
            $table->bigInteger('fuel_id')->change();
        });
    }
};
