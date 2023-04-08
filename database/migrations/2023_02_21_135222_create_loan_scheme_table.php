<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoanSchemeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loan_scheme', function (Blueprint $table) {
            $table->id();
            $table->string('loan_scheme_name');
            $table->integer('type_of_value_in_intrest');
            $table->integer('value_of_intrest');
            $table->integer('application_fees');
            $table->integer('processing_fees');
            $table->integer('valuation_fees');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loan_scheme');
    }
}
