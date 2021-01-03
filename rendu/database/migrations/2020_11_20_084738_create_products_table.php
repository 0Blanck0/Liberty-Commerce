<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('owner_id')->unsigned()->nullable();
            $table->string('name');
            $table->string('reference')->unique();
            $table->integer('price');
            $table->longText('description');
            $table->longText('image_url');
            $table->integer('nb_max');
            $table->integer('nb_max_into_panier')->nullable();
            $table->string('categories');
            $table->timestamps();
        });

        Schema::table('products', function (Blueprint $table) {
            $table->foreign('owner_id')->references('id')->on('users');
        });

        DB::table('products')->insert(
            array(
                'name' => 'Demo 1',
                'reference' => '00001',
                'price' => 20,
                'description' => "This is demo product auto generate",
                'image_url' => 'none',
                'nb_max' => 1000,
                'nb_max_into_panier' => 1000,
                'categories' => 'Informatique'
            )
        );

        DB::table('products')->insert(
            array(
                'name' => 'Demo 2',
                'reference' => '00002',
                'price' => 20,
                'description' => "This is demo product auto generate",
                'image_url' => 'none',
                'nb_max' => 1000,
                'nb_max_into_panier' => 1000,
                'categories' => 'Informatique'
            )
        );
        
        DB::table('products')->insert(
            array(
                'name' => 'Demo 3',
                'reference' => '00003',
                'price' => 20,
                'description' => "This is demo product auto generate",
                'image_url' => 'none',
                'nb_max' => 1000,
                'nb_max_into_panier' => 1000,
                'categories' => 'Informatique'
            )
        );

        DB::table('products')->insert(
            array(
                'name' => 'Demo 4',
                'reference' => '00004',
                'price' => 20,
                'description' => "This is demo product auto generate",
                'image_url' => 'none',
                'nb_max' => 1000,
                'nb_max_into_panier' => 1000,
                'categories' => 'Informatique'
            )
        );

        DB::table('products')->insert(
            array(
                'name' => 'Demo 5',
                'reference' => '00005',
                'price' => 20,
                'description' => "This is demo product auto generate",
                'image_url' => 'none',
                'nb_max' => 1000,
                'nb_max_into_panier' => 1000,
                'categories' => 'Informatique'
            )
        );

        DB::table('products')->insert(
            array(
                'name' => 'Demo 6',
                'reference' => '00006',
                'price' => 20,
                'description' => "This is demo product auto generate",
                'image_url' => 'none',
                'nb_max' => 1000,
                'nb_max_into_panier' => 1000,
                'categories' => 'Informatique'
            )
        );

    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
