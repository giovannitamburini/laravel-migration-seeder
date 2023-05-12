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
        // schema è l'alias della tabella
        // dice che crea una tabella chiamata trains e blueprint è il progetto della tabella
        Schema::create('trains', function (Blueprint $table) {
            // sarà in automatico primary key, auto increment, not null, unique
            $table->id();

            //aziendd,stazione di partenza, sta di arrivo, orario partenza, orario arrivo, codice treno, n carrozze, in orario(Boolean), cancellato
            $table->string('company', 50);
            $table->string('departure_station', 50);
            $table->string('arrival_station', 50);
            $table->date('date');
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->smallInteger('code')->unique();
            $table->tinyInteger('number_coaches')->nullable();
            $table->boolean('on_time')->nullable();
            $table->boolean('cancelled')->nullable();

            // questa espressione genera in automatico due colonne: -quando è creata una riga(created_at); -quando viene modificata la riga(updated_at)
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
        Schema::dropIfExists('trains');
    }
};
