<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UtakmicaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('utakmicas')->insert(
            [
                ['domacin' => 'Atletico Madrid', 'domacin_url' => 'https://icons.iconarchive.com/icons/giannis-zographos/spanish-football-club/256/Atletico-Madrid-icon.png', 'gost' => 'Sevilla', 'gost_url' => 'https://icons.iconarchive.com/icons/giannis-zographos/spanish-football-club/256/Atletico-Madrid-icon.png','domacin_golovi' => '2', 'gost_golovi' => '1', 'opis' => 'dsadsa', 'liga_id' => '1'],
                ['domacin' => 'Manchester United', 'domacin_url' => 'https://icons.iconarchive.com/icons/giannis-zographos/spanish-football-club/256/Atletico-Madrid-icon.png', 'gost' => 'Liverpool', 'gost_url' => 'https://icons.iconarchive.com/icons/giannis-zographos/spanish-football-club/256/Atletico-Madrid-icon.png','domacin_golovi' => '2', 'gost_golovi' => '1', 'opis' => 'dsadsa', 'liga_id' => '2'],
                ['domacin' => 'Barcelona', 'domacin_url' => 'https://icons.iconarchive.com/icons/giannis-zographos/spanish-football-club/256/Atletico-Madrid-icon.png', 'gost' => 'Real Madrid', 'gost_url' => 'https://icons.iconarchive.com/icons/giannis-zographos/spanish-football-club/256/Atletico-Madrid-icon.png','domacin_golovi' => '2', 'gost_golovi' => '1', 'opis' => 'dsadsa', 'liga_id' => '1']
            ]
        );
    }
}
