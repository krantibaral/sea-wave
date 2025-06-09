<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('food_truck_menus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('food_truck_category_id')
                ->constrained()
                ->onDelete('cascade');
            $table->string('menu_name');
            $table->text('description')->nullable();
            $table->decimal('price', 10, 2)->default(0.00);
            $table->string('slug')->unique();
            $table->boolean('special_menu')->default(false);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('food_truck_menus');
    }
};
