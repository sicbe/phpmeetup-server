<?php

use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        
        $u = new User;
        $u->name = "Bert Lempens";
        $u->email = "bertlempens@gmail.com";
        $u->password = bcrypt('secret');
        $u->save();

        $this->call(QuotesTableSeeder::class);
    }
}
