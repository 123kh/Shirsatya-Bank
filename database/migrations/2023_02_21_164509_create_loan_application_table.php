<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoanApplicationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loan_application', function (Blueprint $table) {
            $table->id();
            $table->integer('id_of_loan_scheme');
            $table->integer('id_of_customer');
            $table->integer('id_of_city');
            $table->integer('amount');
            $table->integer('tenure_for_days');
            $table->string('alternative_mobile_number');
            $table->integer('intrest');
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
        Schema::dropIfExists('loan_application');
    }
}
