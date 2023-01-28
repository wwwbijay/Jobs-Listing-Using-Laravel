<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Jobs;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(5)->create();

        Jobs::create([
            'jobtitle' => 'Java Developer',
            'company' => 'Tradelogic Corporation',
            'city' => 'Austin',
            'state' => 'TX',
            'country' => 'US',
            'formattedLocation' => 'Austin, TX',
            'date' => 'Mon, 22 Jul 2013 01:16:44 GMT',
            'snippet' => 'a <b>Java</b> Developer to join our team. This position will be responsible for design and development of <b>Java</b>... <b>Java</b> or C# Frameworks/Skills: <b>Java</b> EE, <b>Java</b> Swing or... ',
            'url' => 'http://www.indeed.com/viewjob?jk=83400e947276d20b&qd=VurSLpjL_C5x-OsC8F-9NGcYiUmqnprrq2MtIyXogmRpzcw_E7jGkHBk-CGbv6Dm_Xi5BXyNYBQGtr4UYaav2xGUWcVBinyLZAVK0SVVur0&indpubnum=1757981803167718&atk=1806r4s2v0mph2o9',
            'sponsored' => false,
            'expired' => false,
          ]);

          Jobs::create([
            'jobtitle' => 'Sr. Java Developer',
            'company' => 'CoreLogic',
            'city' => 'Austin',
            'state' => 'TX',
            'country' => 'US',
            'formattedLocation' => 'Austin, TX',
            'date' => 'Fri, 19 Jul 2013 17:22:19 GMT',
            'snippet' => 'Knowledge/Skills Strong <b>Java</b> development skills... abreast of emerging technology trends Core <b>Java</b> and <b>Java</b> Enterprise Edition (JavaEE) Strong relational... ',
            'url' => 'http://www.indeed.com/viewjob?jk=9d2c6535dc61d3b6&qd=VurSLpjL_C5x-OsC8F-9NGcYiUmqnprrq2MtIyXogmRpzcw_E7jGkHBk-CGbv6Dm_Xi5BXyNYBQGtr4UYaav2xGUWcVBinyLZAVK0SVVur0&indpubnum=1757981803167718&atk=1806r4s2v0mph2o9',
            'sponsored' => false,
            'expired' => false,
          ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}