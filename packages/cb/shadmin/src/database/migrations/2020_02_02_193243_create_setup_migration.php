<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
//use cb\shadmin\SetupSeeder;
class CreateSetupMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setup', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('system_name',100);
            $table->string('system_title',100);
            $table->string('system_email',100);
            $table->text('system_address');
            $table->timestamps();
        });

        // Artisan::call('db:seed', [
        //     '--class' => SetupSeeder::class
        // ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('setup');
    }
}
