<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoicelistingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoicelisting', function (Blueprint $table) {
            $table->increments('id_inlist');
            $table->string('company_id');
            $table->string('address_company');
            $table->string('total');
            $table->dateTime('date');
            $table->dateTime('due');
            $table->string('name_user');
            $table->string('name_company');
            $table->string('address_user');
            $table->string('message');
            $table->string('status');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
