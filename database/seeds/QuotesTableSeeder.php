<?php

use App\Quote;
use Gmsantos\Inspiring;
use Illuminate\Database\Seeder;

class QuotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('quotes')->truncate();
        
        for ($i=0; $i<10; $i++) {
            $q = explode('-', Inspiring::quote());
            $q = array_map('trim', $q);

            $quote = new Quote;
            $quote->name = $q[1];
            $quote->quote = $q[0];
            $quote->save();
        }
    }
}
