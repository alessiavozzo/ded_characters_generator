<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get('database/json/types.json');
        $types = json_decode($json, true);
        foreach ($types as $type) {
            $newType = new Type();
            $newType->name = $type['name'];
            $newType->slug = Str::slug($type['name'], '-');
            $newType->desc = $type['desc'];
            $newType->save();
        }
    }
}
