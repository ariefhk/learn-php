<?php

// Print Value
echo "Hello World" . PHP_EOL;
print "Hello World with print" . PHP_EOL;

// Variale
$nama = "Arief Rachman Hakim";

// TIPE DATA
// 1. number
// - integer
$angka_integer = 10;
// - float
$angka_float = 10.5;

// 2. boolean
$benar = true; // true == 1
$salah = false; // false == 0 | kosong

// 3. string
$nama_panjang = "Arief Rachman Hakim";

// template literal
$perkenalan = "Haii, {$nama_panjang}";
print $perkenalan . PHP_EOL;

// 4. null
$punya_istri = "Sabrina";
// isnull
$apakah_punya_istri = is_null($punya_istri) ? "sudah ada istrinya mba" : "masih single dia";
// isset
$sudah_beristri = isset($punya_istri) ? "istrinya {$punya_istri}" : "belom punya istri";

print $apakah_punya_istri . PHP_EOL;
print $sudah_beristri . PHP_EOL;

// 5. array
$makanan_kesukaan = array('nasi goreng', 'mie instant');
$hobbies = ['ngoding', 'gaming', 'sleeping'];
$hobbies_to_str = implode(', ', $hobbies);

print("hobbieku adalah " . $hobbies_to_str . PHP_EOL);

// get value array
$my_hobby = $hobbies[0];
print("Hobby pertamaku " . $my_hobby . PHP_EOL);

// change value array
$hobbies[0] = "mancing";
print("Hobby pertamaku ganti jadi " . $hobbies[0] . PHP_EOL);


// menambah data dari yg paling belakang
$hobbies[] = "main mobile legend";
print("Hobby gw nambah " . $hobbies[count($hobbies) - 1] . PHP_EOL);

// menghapus value
// unset($hobbies[0]); // tidak disarankan karena menghapus indeks
print("hobi pertamaku sebelum dihapus " . $hobbies[0] . PHP_EOL);

// $deleted_hobbie = array_splice($hobbies, 0, 1);
array_splice($hobbies, 0, 1);
$deleted_hobbie = array_splice($hobbies, 10, 1); // deleting unknown indeks is not problem

print("hobi pertamaku sesudah dihapus " . $hobbies[0] . PHP_EOL);

// fitur search
$search_input = 'gamings';
$daftar_array = $hobbies;
$indeks_array = array_search($search_input, $daftar_array); //hasilnya 0

$search_hobby = $indeks_array == false && $daftar_array[0] != $search_input  ?   "hobby tidak ditemukan" : "Hobbie Anda {$daftar_array[$indeks_array]}";

print($search_hobby . PHP_EOL);

// mengetahui panjang array
$total_hobby = count($hobbies);
print("total hobiku ada " . $total_hobby . PHP_EOL);


// array sebagai map
$arief = [
    'id' => 1,
    'name' => "arief rachman hakim",
    'age' => 21,
    'address' => [
        'desa' => 'kalapasawit',
        'rt' => 16
    ]
];

$property = array_search(16, $arief); //hasilnya 0
print("{$property}: " . $arief[$property] . PHP_EOL);

// 6. constant
define("PROGRAMMER", "Mr.Arief");
print PROGRAMMER;
