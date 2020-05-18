<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateDuckTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('duck', function (Blueprint $table) {
            $table->integer('progress')->after('hunger')->default(0);
        });

        Schema::table('duck', function (Blueprint $table) {
            $table->dropColumn('breed');
            $table->dropColumn('age');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('duck', function (Blueprint $table) {
            $table->dropColumn('progress');
        });

        Schema::table('duck', function (Blueprint $table) {
            $table->string('breed')->after('hunger');
            $table->integer('age')->after('hunger');
        });
    }
}
