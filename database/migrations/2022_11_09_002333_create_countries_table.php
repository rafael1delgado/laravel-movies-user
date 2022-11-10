<?php

use App\Models\Country;
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
        Schema::create('countries', function (Blueprint $table) {
            $table->id();

            $table->string('name')->nullable();
            $table->string('code')->unique();

            $table->softDeletes();
            $table->timestamps();
        });

        $countries = [
            [
                'name' => "United States",
                'code' => 'US'
            ],
            [
                'name' => "Canada",
                'code' => 'CA'
            ],
            [
                'name' => "Germany",
                'code' => 'DE',
            ],
            [
                'name' => "France",
                'code' => 'FR'
            ],
            [
                'name' => "Colombia",
                'code' => 'CO'
            ],
            [
                'name' => "Venezuela",
                'code' => 'VE'
            ],
            [
                'name' => "United Kingdom",
                'code' => "UK"
            ]
        ];

        foreach($countries as $country)
            Country::create($country);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('countries');
    }
};
