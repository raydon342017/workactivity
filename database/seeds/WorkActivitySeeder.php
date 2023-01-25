<?php

use Illuminate\Database\Seeder;

class WorkActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(App\WorkActivity::class, 50)->create()->each(function($workactivity){
$workactivity->save();
});
    }
}
