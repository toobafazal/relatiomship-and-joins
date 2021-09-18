<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewColumnInStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('students', function (Blueprint $table) {
            //
            $table->string('course_id')->nullable();
            // ye humne ek column add kiya hau name as course id by default null rhega
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('students', function (Blueprint $table) {
            //
            $table->dropColumn('course_id');
            // if in case  ye column remove karna ho to ye function use hota ha.. I'll guide you later
        });
    }
}
