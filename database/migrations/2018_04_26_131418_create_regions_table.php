<?php


use App\Region;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('region');
            $table->timestamps();


        });
        Region::create([
            'region' => 'auvergne-rhone-alpes'
        ]);
        Region::create([
            'region' => 'bourgogne-franche-comte'
        ]);
        Region::create([
            'region' => 'bretagne'
        ]);
        Region::create([
            'region' => 'centre-val-de-loire'
        ]);
        Region::create([
            'region' => 'grand-est'
        ]);
        Region::create([
            'region' => 'hauts-de-france'
        ]);
        Region::create([
            'region' => 'ile-de-france'
        ]);
        Region::create([
            'region' => 'nouvelle-aquitaine'
        ]);
        Region::create([
            'region' => 'normandie'
        ]);
        Region::create([
            'region' => 'occitanie'
        ]);
        Region::create([
            'region' => 'pays-de-loire'
        ]);
        Region::create([
            'region' => 'provence-alpes-côte-d\'azur'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('regions');
    }
}
