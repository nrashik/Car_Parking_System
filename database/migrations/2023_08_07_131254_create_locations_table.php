<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        // <th scope="col">SL</th>
        // <th scope="col">Area</th>
        // <th scope="col">Loaction Name</th>
        // <th scope="col">Address</th>
        // <th scope="col">CC Camera</th>
        // <th scope="col">Guard</th>
        // <th scope="col">Action</th>
        
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('area_id')->constrained('areas')->restrictOnDelete();
            $table->string('location');
            $table->string('address');
            $table->string('cc_camera');
            $table->string('guard');
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
        Schema::dropIfExists('locations');
    }
}
