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
        Schema::table('merchants', function (Blueprint $table) {
            $table->boolean('is_estimated_delivery_date_enabled')->default(false)->change();
            $table->boolean('is_enabled_fulfillment_status')->default(false)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('merchants', function (Blueprint $table) {
            $table->boolean('is_estimated_delivery_date_enabled')->default(true)->change();
            $table->boolean('is_enabled_fulfillment_status')->default(true)->change();
        });
    }
};
