<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('channel');
            $table->timestamps();

            // $table->foreign('article_id')
            //     ->references('id')
            //     ->on('articles')
            //     ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Sch‌​ema::disableForeignKe‌​yConstraints();
        Schema::dropIfExists('subscriptions');
        // Sch‌​ema::enableForeignKe‌​yConstraints();

    }
}
