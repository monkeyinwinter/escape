<?php
use App\Departement;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departements', function (Blueprint $table) {
            $table->increments('id');
            $table->string('departement');
            $table->tinyInteger('number');
            $table->integer('region_id')->unsigned();
            $table->timestamps();

            $table->foreign('region_id')->references('id')->on('regions');

        });
        Departement::create([
            'departement' => 'ain',
            'number'=> '01',
            'region_id'=> '1',
        ]);
        Departement::create([
            'departement' => 'aisne',
            'number'=> '02',
            'region_id'=> '6',
        ]);
        Departement::create([
            'departement' => 'allier',
            'number'=> '03',
            'region_id'=> '1',
        ]);
        Departement::create([
            'departement' => 'alpes-de-hautes-provence',
            'number'=> '04',
            'region_id'=> '12',
        ]);
        Departement::create([
            'departement' => 'hautes-alpes',
            'number'=> '05',
            'region_id'=> '12',
        ]);
        Departement::create([
            'departement' => 'alpes-maritimes',
            'number'=> '06',
            'region_id'=> '12',
        ]);
        Departement::create([
            'departement' => 'ardèche',
            'number'=> '07',
            'region_id'=> '1',
        ]);
        Departement::create([
            'departement' => 'ardennes',
            'number'=> '08',
            'region_id'=> '5',
        ]);
        Departement::create([
            'departement' => 'ariège',
            'number'=> '09',
            'region_id'=> '10',
        ]);
        Departement::create([
            'departement' => 'aube',
            'number'=> '10',
            'region_id'=> '5',
        ]);
        Departement::create([
            'departement' => 'aude',
            'number'=> '11',
            'region_id'=> '10',
        ]);
        Departement::create([
            'departement' => 'aveyron',
            'number'=> '12',
            'region_id'=> '10',
        ]);
        Departement::create([
            'departement' => 'bouches-du-rhône',
            'number'=> '13',
            'region_id'=> '12',
        ]);
        Departement::create([
            'departement' => 'calvados',
            'number'=> '14',
            'region_id'=> '8',
        ]);
        Departement::create([
            'departement' => 'cantal',
            'number'=> '15',
            'region_id'=> '1',
        ]);
        Departement::create([
            'departement' => 'charente',
            'number'=> '16',
            'region_id'=> '9',
        ]);
        Departement::create([
            'departement' => 'charente-maritime',
            'number'=> '17',
            'region_id'=> '9',
        ]);
        Departement::create([
            'departement' => 'cher',
            'number'=> '18',
            'region_id'=> '4',
        ]);
        Departement::create([
            'departement' => 'corrèze',
            'number'=> '19',
            'region_id'=> '9',
        ]);
                Departement::create([
                    'departement' => 'corse-nord',
                    'number'=> '20',
                    'region_id'=> '9',
                ]);
                Departement::create([
                    'departement' => 'corse-sud',
                    'number'=> '20',
                    'region_id'=> '9',
                ]);
        Departement::create([
            'departement' => 'côte-d\'or',
            'number'=> '21',
            'region_id'=> '2',
        ]);
        Departement::create([
            'departement' => 'côtes-d\'armor',
            'number'=> '22',
            'region_id'=> '3',
        ]);
        Departement::create([
            'departement' => 'creuse',
            'number'=> '23',
            'region_id'=> '9',
        ]);
        Departement::create([
            'departement' => 'dordogne',
            'number'=> '24',
            'region_id'=> '9',
        ]);
        Departement::create([
            'departement' => 'doubs',
            'number'=> '25',
            'region_id'=> '2',
        ]);
        Departement::create([
            'departement' => 'drôme',
            'number'=> '26',
            'region_id'=> '1',
        ]);
        Departement::create([
            'departement' => 'eure',
            'number'=> '27',
            'region_id'=> '8',
        ]);
        Departement::create([
            'departement' => 'eure-et-loire',
            'number'=> '28',
            'region_id'=> '4',
        ]);
        Departement::create([
            'departement' => 'finistère',
            'number'=> '29',
            'region_id'=> '3',
        ]);
        Departement::create([
            'departement' => 'gard',
            'number'=> '30',
            'region_id'=> '10',
        ]);
        Departement::create([
            'departement' => 'haute-garonne',
            'number'=> '31',
            'region_id'=> '10',
        ]);
        Departement::create([
            'departement' => 'gers',
            'number'=> '32',
            'region_id'=> '10',
        ]);
        Departement::create([
            'departement' => 'gironde',
            'number'=> '33',
            'region_id'=> '9',
        ]);
        Departement::create([
            'departement' => 'hérault',
            'number'=> '34',
            'region_id'=> '10',
        ]);
        Departement::create([
            'departement' => 'ille-et-vilaine',
            'number'=> '35',
            'region_id'=> '3',
        ]);
        Departement::create([
            'departement' => 'indre',
            'number'=> '36',
            'region_id'=> '4',
        ]);
        Departement::create([
            'departement' => 'indre-et-loire',
            'number'=> '37',
            'region_id'=> '4',
        ]);
        Departement::create([
            'departement' => 'isère',
            'number'=> '38',
            'region_id'=> '1',
        ]);
        Departement::create([
            'departement' => 'jura',
            'number'=> '39',
            'region_id'=> '2',
        ]);
        Departement::create([
            'departement' => 'landes',
            'number'=> '40',
            'region_id'=> '9',
        ]);
        Departement::create([
            'departement' => 'loire-et-cher',
            'number'=> '41',
            'region_id'=> '4',
        ]);
        Departement::create([
            'departement' => 'loire',
            'number'=> '42',
            'region_id'=> '1',
        ]);
        Departement::create([
            'departement' => 'haute-loire',
            'number'=> '43',
            'region_id'=> '1',
        ]);
        Departement::create([
            'departement' => 'loire-atlantique',
            'number'=> '44',
            'region_id'=> '11',
        ]);
        Departement::create([
            'departement' => 'loiret',
            'number'=> '45',
            'region_id'=> '4',
        ]);
        Departement::create([
            'departement' => 'lot',
            'number'=> '46',
            'region_id'=> '10',
        ]);
        Departement::create([
            'departement' => 'lot-et-garonne',
            'number'=> '47',
            'region_id'=> '9',
        ]);
        Departement::create([
            'departement' => 'lozère',
            'number'=> '48',
            'region_id'=> '10',
        ]);
        Departement::create([
            'departement' => 'maine-et-loire',
            'number'=> '49',
            'region_id'=> '11',
        ]);
        Departement::create([
            'departement' => 'manche',
            'number'=> '50',
            'region_id'=> '8',
        ]);
        Departement::create([
            'departement' => 'marne',
            'number'=> '51',
            'region_id'=> '5',
        ]);
        Departement::create([
            'departement' => 'haute-marne',
            'number'=> '52',
            'region_id'=> '5',
        ]);
        Departement::create([
            'departement' => 'mayenne',
            'number'=> '53',
            'region_id'=> '11',
        ]);
        Departement::create([
            'departement' => 'meurthe-et-moselle',
            'number'=> '54',
            'region_id'=> '5',
        ]);
        Departement::create([
            'departement' => 'meuse',
            'number'=> '55',
            'region_id'=> '5',
        ]);
        Departement::create([
            'departement' => 'morbihan',
            'number'=> '56',
            'region_id'=> '3',
        ]);
        Departement::create([
            'departement' => 'moselle',
            'number'=> '57',
            'region_id'=> '5',
        ]);
        Departement::create([
            'departement' => 'nièvre',
            'number'=> '58',
            'region_id'=> '2',
        ]);
        Departement::create([
            'departement' => 'nord',
            'number'=> '59',
            'region_id'=> '6',
        ]);
        Departement::create([
            'departement' => 'oise',
            'number'=> '60',
            'region_id'=> '6',
        ]);
        Departement::create([
            'departement' => 'orme',
            'number'=> '61',
            'region_id'=> '8',
        ]);
        Departement::create([
            'departement' => 'pas-de-calais',
            'number'=> '62',
            'region_id'=> '6',
        ]);
        Departement::create([
            'departement' => 'puy-de-dôme',
            'number'=> '63',
            'region_id'=> '1',
        ]);
        Departement::create([
            'departement' => 'pyrénées-atlantique',
            'number'=> '64',
            'region_id'=> '9',
        ]);
        Departement::create([
            'departement' => 'haute-pyrénées',
            'number'=> '65',
            'region_id'=> '10',
        ]);
        Departement::create([
            'departement' => 'pyrénées-orientales',
            'number'=> '66',
            'region_id'=> '10',
        ]);
        Departement::create([
            'departement' => 'bas-rhin',
            'number'=> '67',
            'region_id'=> '5',
        ]);
        Departement::create([
            'departement' => 'haut-rhin',
            'number'=> '68',
            'region_id'=> '5',
        ]);
        Departement::create([
            'departement' => 'rhône',
            'number'=> '69',
            'region_id'=> '1',
        ]);
        Departement::create([
            'departement' => 'haute-saône',
            'number'=> '70',
            'region_id'=> '2',
        ]);
        Departement::create([
            'departement' => 'saône-et-loire',
            'number'=> '71',
            'region_id'=> '2',
        ]);
        Departement::create([
            'departement' => 'sarthe',
            'number'=> '72',
            'region_id'=> '11',
        ]);
        Departement::create([
            'departement' => 'savoie',
            'number'=> '73',
            'region_id'=> '1',
        ]);
        Departement::create([
            'departement' => 'haute-savoie',
            'number'=> '74',
            'region_id'=> '1',
        ]);
        Departement::create([
            'departement' => 'paris',
            'number'=> '75',
            'region_id'=> '7',
        ]);
        Departement::create([
            'departement' => 'seine-maritime',
            'number'=> '76',
            'region_id'=> '8',
        ]);
        Departement::create([
            'departement' => 'seine-et-marne',
            'number'=> '77',
            'region_id'=> '7',
        ]);
        Departement::create([
            'departement' => 'yveline',
            'number'=> '78',
            'region_id'=> '7',
        ]);
        Departement::create([
            'departement' => 'deux-sèvres',
            'number'=> '79',
            'region_id'=> '9',
        ]);
        Departement::create([
            'departement' => 'somme',
            'number'=> '80',
            'region_id'=> '6',
        ]);

        Departement::create([
            'departement' => 'tarn',
            'number'=> '81',
            'region_id'=> '10',
        ]);

        Departement::create([
            'departement' => 'tarn-et-garonne',
            'number'=> '82',
            'region_id'=> '10',
        ]);
        Departement::create([
            'departement' => 'var',
            'number'=> '83',
            'region_id'=> '12',
        ]);
        Departement::create([
            'departement' => 'vaucluse',
            'number'=> '84',
            'region_id'=> '12',
        ]);
        Departement::create([
            'departement' => 'vendée',
            'number'=> '85',
            'region_id'=> '11',
        ]);
        Departement::create([
            'departement' => 'vienne',
            'number'=> '86',
            'region_id'=> '9',
        ]);
        Departement::create([
            'departement' => 'haute-vienne',
            'number'=> '87',
            'region_id'=> '9',
        ]);
        Departement::create([
            'departement' => 'vosges',
            'number'=> '88',
            'region_id'=> '5',
        ]);
        Departement::create([
            'departement' => 'yonne',
            'number'=> '89',
            'region_id'=> '2',
        ]);
        Departement::create([
            'departement' => 'territoire-de-belfort',
            'number'=> '90',
            'region_id'=> '2',
        ]);
        Departement::create([
            'departement' => 'essonne',
            'number'=> '91',
            'region_id'=> '7',
        ]);
        Departement::create([
            'departement' => 'haut-de-seine',
            'number'=> '92',
            'region_id'=> '7',
        ]);
        Departement::create([
            'departement' => 'seine-saint-denis',
            'number'=> '93',
            'region_id'=> '7',
        ]);
        Departement::create([
            'departement' => 'val-de-marne',
            'number'=> '94',
            'region_id'=> '7',
        ]);
        Departement::create([
            'departement' => 'val-d\'oise',
            'number'=> '95',
            'region_id'=> '7',
        ]);



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('departements');
    }
}
