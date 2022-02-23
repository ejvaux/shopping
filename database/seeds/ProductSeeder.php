<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'title' => 'Ang Huling El Bimbo',
            'artist' => 'Eraserheads',
            'filename' => 'el_bimbo.mp3',
            'photo' => 'https://upload.wikimedia.org/wikipedia/en/6/6e/Cutterpillow.jpg',
            'price' => 300,
            'created_at' => Date('Y-m-d h:i:s'),
            'updated_at' => Date('Y-m-d h:i:s'),
        ]);
        DB::table('products')->insert([
            'title' => '214',
            'artist' => 'Rivermaya',
            'filename' => '214.mp3',
            'photo' => 'https://1.bp.blogspot.com/-rJlX3j45fpk/Xbx3ZiTrbZI/AAAAAAAAAr8/nOImpC35EVcwfPWJLWbvPJtwGzrqzS3ZgCLcBGAsYHQ/s1600/rivermaya-214.jpg',
            'price' => 300,
            'created_at' => Date('Y-m-d h:i:s'),
            'updated_at' => Date('Y-m-d h:i:s'),
        ]);
        DB::table('products')->insert([
            'title' => 'Halaga',
            'artist' => 'Parokya ni Edgar',
            'filename' => 'halaga.mp3',
            'photo' => 'http://images.genius.com/a051e9a6cda5ea96817325b00fd05cd5.600x600x1.jpg',
            'price' => 200,
            'created_at' => Date('Y-m-d h:i:s'),
            'updated_at' => Date('Y-m-d h:i:s'),
        ]);
        DB::table('products')->insert([
            'title' => 'Narda',
            'artist' => 'Kamikazee',
            'filename' => 'narda.mp3',
            'photo' => 'https://m.media-amazon.com/images/I/81Yw8gvl5mL._SS500_.jpg',
            'price' => 250,
            'created_at' => Date('Y-m-d h:i:s'),
            'updated_at' => Date('Y-m-d h:i:s'),
        ]);
        DB::table('products')->insert([
            'title' => 'Una',
            'artist' => 'Spongecola',
            'filename' => 'una.mp3',
            'photo' => 'https://images.genius.com/eef1bc878fac02fe506bf87318d2c695.300x300x1.jpg',
            'price' => 200,
            'created_at' => Date('Y-m-d h:i:s'),
            'updated_at' => Date('Y-m-d h:i:s'),
        ]);
    }
}
