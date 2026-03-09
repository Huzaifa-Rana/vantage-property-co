<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AgentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $agents = [
            [
                'name' => 'Alexander Sterling',
                'email' => 'alexander@vantage.com',
                'phone' => '+1 234 567 890',
                'profile_image' => 'images/agents/agent1.png',
                'bio' => 'Visionary real estate advisor with a 15-year track record in the world\'s most exclusive postcodes.',
            ],
            [
                'name' => 'Isabella Montclaire',
                'email' => 'isabella@vantage.com',
                'phone' => '+1 098 765 432',
                'profile_image' => 'images/agents/agent2.png',
                'bio' => 'Interior architect turned real estate scout, specializing in bespoke architectural masterpieces.',
            ],
            [
                'name' => 'David Chen',
                'email' => 'david@vantage.com',
                'phone' => '+1 555 789 123',
                'profile_image' => 'images/agents/agent3.png',
                'bio' => 'Venture capitalist and portfolio manager with an eye for high-yield luxury developments.',
            ],
        ];

        foreach ($agents as $agent) {
            \App\Models\Agent::create($agent);
        }
    }
}
