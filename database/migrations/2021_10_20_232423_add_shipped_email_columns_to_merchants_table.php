<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddShippedEmailColumnsToMerchantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('merchants', function (Blueprint $table) {
            $table->string('shipped_email_headline_text')->after('console_created_email_subheader_text')->nullable();
            $table->string('shipped_email_subheader_text')->after('shipped_email_headline_text')->nullable();
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
            $table->dropColumn(['shipped_email_headline_text', 'shipped_email_subheader_text']);
        });
    }
}
