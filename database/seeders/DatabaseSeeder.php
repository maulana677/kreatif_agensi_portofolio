<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::factory(1)->create();
        \App\Models\Hero::factory(1)->create();
        \App\Models\About::factory(1)->create();
        \App\Models\ServiceSectionSetting::factory(1)->create();
        \App\Models\ProjectSectionSetting::factory(1)->create();
        \App\Models\WorkflowSectionSetting::factory(1)->create();
        \App\Models\TestimonialSectionSetting::factory(1)->create();
        \App\Models\GeneralSetting::factory(1)->create();
        \App\Models\FaqSectionSetting::factory(1)->create();
        \App\Models\FooterInfo::factory(1)->create();
    }
}
