<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDomainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domains', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('domain');
            $table->integer('customer_id')->unsigned();
            $table->foreign('customer_id')->references('id')->on('customers');
            $table->unsignedInteger('seo_contract_id');
            $table->foreign('seo_contract_id')->references('id')->on('seo_contracts');
            $table->unsignedInteger('social_contract_id');
            $table->foreign('social_contract_id')->references('id')->on('social_contracts');
            $table->boolean('service_onderhoud')->default(false);
            $table->boolean('ssl')->default(false);
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
        Schema::dropIfExists('domains');
    }
}
