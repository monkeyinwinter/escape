<?php
use App\Spot;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spots', function (Blueprint $table) {
            $table->increments('id');
            $table->string('spot');
            $table->integer('departement_id')->unsigned();
            $table->timestamps();

            $table->foreign('departement_id')->references('id')->on('departements');

        });

        Spot::create([
            'spot' => 'les-ollières-sur-eyrieux',
            'departement_id'=> '7',
        ]);
        Spot::create([
            'spot' => 'vernoux',
            'departement_id'=> '7',
        ]);
        Spot::create([
            'spot' => 'mariac',
            'departement_id'=> '7',
        ]);
        Spot::create([
            'spot' => 'le-cheylard',
            'departement_id'=> '7',
        ]);
        Spot::create([
            'spot' => 'saint-martin',
            'departement_id'=> '7',
        ]);
        Spot::create([
            'spot' => 'vallon',
            'departement_id'=> '7',
        ]);
        Spot::create([
            'spot' => 'valence',
            'departement_id'=> '27',
        ]);
        Spot::create([
            'spot' => 'saint-marcel-les-valences',
            'departement_id'=> '27',
        ]);
        Spot::create([
            'spot' => 'cres',
            'departement_id'=> '27',
        ]);
        Spot::create([
            'spot' => 'die',
            'departement_id'=> '27',
        ]);
        Spot::create([
            'spot' => 'roman',
            'departement_id'=> '27',
        ]);
        Spot::create([
            'spot' => 'pita-ou-chnoque',
            'departement_id'=> '27',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('spots');
    }
}
