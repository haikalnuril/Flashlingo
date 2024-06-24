<?php

namespace Database\Seeders;

use App\Models\Stage;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $level1 = Stage::create([
            'level' => '1',
            'jenis' => 'Colors',
            'cover' => 'Colors.png',
            'item1' => 'red',
            'item2' => 'green',
            'item3' => 'blue',
            'item4' => 'yellow',
            'item5' => 'black',
            'item6' => 'white',
            'item7' => 'purple',
            'item8' => 'pink',
            'item9' => 'orange',
            'item10' => 'grey',
            'gambar1' => 'merah.png',
            'gambar1_back' => 'merah (2).png',
            'gambar2' => 'hijau.png',
            'gambar2_back' => 'hijau (2).png',
            'gambar3' => 'biru.png',
            'gambar3_back' => 'biru (2).png',
            'gambar4' => 'kuning.png',
            'gambar4_back' => 'kuning (2).png',
            'gambar5' => 'hitam.png',
            'gambar5_back' => 'hitam (2).png',
            'gambar6' => 'putih.png',
            'gambar6_back' => 'putih (2).png',
            'gambar7' => 'ungu.png',
            'gambar7_back' => 'ungu (2).png',
            'gambar8' => 'pink.png',
            'gambar8_back' => 'pink (2).png',
            'gambar9' => 'orange.png',
            'gambar9_back' => 'orange (2).png',
            'gambar10' => 'abu.png',
            'gambar10_back' => 'abu (2).png',
        ]);

        $level2 = Stage::create([
            'level' => '2',
            'jenis' => 'Shapes',
            'cover' => 'Shapes.png',
            'item1' => 'square',
            'item2' => 'rectangle',
            'item3' => 'circle',
            'item4' => 'triangle',
            'item5' => 'oval',
            'item6' => 'heart',
            'item7' => 'star',
            'item8' => 'diamond',
            'item9' => 'crescent',
            'item10' => 'hexagon',
            'gambar1' => 'square.png',
            'gambar1_back' => 'square (2).png',
            'gambar2' => 'square (3).png',
            'gambar2_back' => 'square (4).png',
            'gambar3' => 'circle.png',
            'gambar3_back' => 'circle (2).png',
            'gambar4' => 'triangle.png',
            'gambar4_back' => 'triangle (2).png',
            'gambar5' => 'oval.png',
            'gambar5_back' => 'oval (2).png',
            'gambar6' => 'heart.png',
            'gambar6_back' => 'heart (2).png',
            'gambar7' => 'star.png',
            'gambar7_back' => 'star (2).png',
            'gambar8' => 'diamond.png',
            'gambar8_back' => 'diamond (2).png',
            'gambar9' => 'crescent.png',
            'gambar9_back' => 'crescent (2).png',
            'gambar10' => 'hexagon.png',
            'gambar10_back' => 'hexagon (2).png',
        ]);

        $level3 = Stage::create([
            'level' => '3',
            'jenis' => 'Numbers',
            'cover' => 'Numbers.png',
            'item1' => 'one',
            'item2' => 'two',
            'item3' => 'three',
            'item4' => 'four',
            'item5' => 'five',
            'item6' => 'six',
            'item7' => 'seven',
            'item8' => 'eight',
            'item9' => 'nine',
            'item10' => 'ten',
            'gambar1' => 'satu.png',
            'gambar1_back' => 'satu (2).png',
            'gambar2' => 'dua.png',
            'gambar2_back' => 'dua (2).png',
            'gambar3' => 'tiga.png',
            'gambar3_back' => 'tiga (2).png',
            'gambar4' => 'empat.png',
            'gambar4_back' => 'empat (2).png',
            'gambar5' => 'lima.png',
            'gambar5_back' => 'lima (2).png',
            'gambar6' => 'enam.png',
            'gambar6_back' => 'enam (2).png',
            'gambar7' => 'tujuh.png',
            'gambar7_back' => 'tujuh (2).png',
            'gambar8' => 'delapan.png',
            'gambar8_back' => 'delapan (2).png',
            'gambar9' => 'sembilan.png',
            'gambar9_back' => 'sembilan (2).png',
            'gambar10' => 'sepuluh.png',
            'gambar10_back' => 'sepuluh (2).png',
        ]);

        $level4 = Stage::create([
            'level' => '4',
            'jenis' => 'Animals',
            'cover' => 'Animals.png',
            'item1' => 'dog',
            'item2' => 'cat',
            'item3' => 'monkey',
            'item4' => 'elephant',
            'item5' => 'lion',
            'item6' => 'giraffe',
            'item7' => 'bird',
            'item8' => 'shark',
            'item9' => 'mouse',
            'item10' => 'ant',
            'gambar1' => 'dog.png',
            'gambar1_back' => 'dog (2).png',
            'gambar2' => 'cat.png',
            'gambar2_back' => 'cat (2).png',
            'gambar3' => 'monkey.png',
            'gambar3_back' => 'monkey (2).png',
            'gambar4' => 'elephant.png',
            'gambar4_back' => 'elephant (2).png',
            'gambar5' => 'lion.png',
            'gambar5_back' => 'lion (2).png',
            'gambar6' => 'giraffle.png',
            'gambar6_back' => 'giraffle (2).png',
            'gambar7' => 'birds.png',
            'gambar7_back' => 'birds (2).png',
            'gambar8' => 'sharks.png',
            'gambar8_back' => 'sharks (2).png',
            'gambar9' => 'mouse.png',
            'gambar9_back' => 'mouse (2).png',
            'gambar10' => 'ant.png',
            'gambar10_back' => 'ant (2).png',
        ]);

        $level5 = Stage::create([
            'level' => '5',
            'jenis' => 'Objects',
            'cover' => 'objects.png',
            'item1' => 'book',
            'item2' => 'pencil',
            'item3' => 'backpack',
            'item4' => 'clock',
            'item5' => 'chair',
            'item6' => 'table',
            'item7' => 'bicycle',
            'item8' => 'bed',
            'item9' => 'doll',
            'item10' => 'umbrella',
            'gambar1' => '72.png',
            'gambar1_back' => '73.png',
            'gambar2' => '74.png',
            'gambar2_back' => '75.png',
            'gambar3' => '76.png',
            'gambar3_back' => '77.png',
            'gambar4' => '78.png',
            'gambar4_back' => '79.png',
            'gambar5' => '80.png',
            'gambar5_back' => '81.png',
            'gambar6' => '82.png',
            'gambar6_back' => '83.png',
            'gambar7' => '84.png',
            'gambar7_back' => '85.png',
            'gambar8' => '86.png',
            'gambar8_back' => '87.png',
            'gambar9' => '88.png',
            'gambar9_back' => '89.png',
            'gambar10' => '90.png',
            'gambar10_back' => '91.png',
        ]);

        $level6 = Stage::create([
            'level' => '6',
            'jenis' => 'Clothes',
            'cover' => 'clothes.png',
            'item1' => 'dress',
            'item2' => 'pants',
            'item3' => 'skirt',
            'item4' => 't-shirt',
            'item5' => 'shirt',
            'item6' => 'sweater',
            'item7' => 'jacket',
            'item8' => 'shorts',
            'item9' => 'swimsuit',
            'item10' => 'coat',
            'gambar1' => 'dress.png',
            'gambar1_back' => 'dress (2).png',
            'gambar2' => 'pants.png',
            'gambar2_back' => 'pants (2).png',
            'gambar3' => 'skirts.png',
            'gambar3_back' => 'skirts (2).png',
            'gambar4' => '7.png',
            'gambar4_back' => '8.png',
            'gambar5' => '9.png',
            'gambar5_back' => '10.png',
            'gambar6' => '11.png',
            'gambar6_back' => '12.png',
            'gambar7' => '13.png',
            'gambar7_back' => '14.png',
            'gambar8' => '15.png',
            'gambar8_back' => '16.png',
            'gambar9' => '17.png',
            'gambar9_back' => '18.png',
            'gambar10' => '19.png',
            'gambar10_back' => '20.png',
        ]);

        $level7 = Stage::create([
            'level' => '7',
            'jenis' => 'Food',
            'cover' => 'Food.png',
            'item1' => 'rice',
            'item2' => 'noodle',
            'item3' => 'egg',
            'item4' => 'cheese',
            'item5' => 'chocolate',
            'item6' => 'carrot',
            'item7' => 'apple',
            'item8' => 'banana',
            'item9' => 'bread',
            'item10' => 'french fries',
            'gambar1' => '21.png',
            'gambar1_back' => '22.png',
            'gambar2' => '23.png',
            'gambar2_back' => '24.png',
            'gambar3' => '25.png',
            'gambar3_back' => '26.png',
            'gambar4' => '27.png',
            'gambar4_back' => '28.png',
            'gambar5' => '29.png',
            'gambar5_back' => '30.png',
            'gambar6' => '31.png',
            'gambar6_back' => '32.png',
            'gambar7' => '33.png',
            'gambar7_back' => '34.png',
            'gambar8' => '35.png',
            'gambar8_back' => '36.png',
            'gambar9' => '37.png',
            'gambar9_back' => '38.png',
            'gambar10' => '39.png',
            'gambar10_back' => '40.png',
        ]);
        $level8 = Stage::create([
            'level' => '8',
            'jenis' => 'Body Parts',
            'cover' => 'body.png',
            'item1' => 'head',
            'item2' => 'eyes',
            'item3' => 'nose',
            'item4' => 'mouth',
            'item5' => 'ear',
            'item6' => 'arm',
            'item7' => 'hand',
            'item8' => 'leg',
            'item9' => 'toes',
            'item10' => 'stomach',
            'gambar1' => '41.png',
            'gambar1_back' => '42.png',
            'gambar2' => '43.png',
            'gambar2_back' => '44.png',
            'gambar3' => '45.png',
            'gambar3_back' => '46.png',
            'gambar4' => '47.png',
            'gambar4_back' => '48.png',
            'gambar5' => '49.png',
            'gambar5_back' => '50.png',
            'gambar6' => '51.png',
            'gambar6_back' => '52.png',
            'gambar7' => '53.png',
            'gambar7_back' => '54.png',
            'gambar8' => '55.png',
            'gambar8_back' => '56.png',
            'gambar9' => '57.png',
            'gambar9_back' => '58.png',
            'gambar10' => '59.png',
            'gambar10_back' => '60.png',
        ]);
        $level9 = Stage::create([
            'level' => '9',
            'jenis' => 'Places',
            'cover' => 'places.png',
            'item1' => 'house',
            'item2' => 'school',
            'item3' => 'hospital',
            'item4' => 'park',
            'item5' => 'restaurant',
            'item6' => 'police station',
            'item7' => 'airport',
            'item8' => 'market',
            'item9' => 'beach',
            'item10' => 'movie theatre',
            'gambar1' => 'house.png',
            'gambar1_back' => 'house (2).png',
            'gambar2' => 'school.png',
            'gambar2_back' => 'school (2).png',
            'gambar3' => 'hospital.png',
            'gambar3_back' => 'hospital (2).png',
            'gambar4' => 'park.png',
            'gambar4_back' => 'park (2).png',
            'gambar5' => 'restaurant.png',
            'gambar5_back' => 'restaurant (2).png',
            'gambar6' => 'police station.png',
            'gambar6_back' => 'police station (2).png',
            'gambar7' => 'airport.png',
            'gambar7_back' => 'airport (2).png',
            'gambar8' => 'market.png',
            'gambar8_back' => 'market (2).png',
            'gambar9' => 'beach.png',
            'gambar9_back' => 'beach (2).png',
            'gambar10' => 'movie theatre.png',
            'gambar10_back' => 'movie theatre (2).png',
        ]);
    }
}