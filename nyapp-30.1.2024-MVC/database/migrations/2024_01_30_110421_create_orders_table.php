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
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('item');
            $table->decimal('cost');
            $table->timestamps();
        });

        Schema::table('orders',
            function (Blueprint $table) {
                $table->integer('estimation');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::dropIfExists('orders');
        if (Schema::hasColumn('orders', 'estimation'))
            {
                Schema::table('orders',
                function (Blueprint $table)
                {
                $table->dropColumn('estimation');
                });
            }
    }
};
