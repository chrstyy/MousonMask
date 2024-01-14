<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $menuData = [
            'snack' => [
                ['id_jenisMakanan'=> 2, 'name' => 'Torilla with Bolognese and Cheese', 'price' => '$2.99', 'image' => 'https://tse3.mm.bing.net/th?id=OIP.CiuAgf6j3D1taLtQ3EzN9AHaFj&pid=Api&P=0&h=180'],
                ['id_jenisMakanan'=> 2, 'name' => 'Fried Wonton with Sour Spicy Sauce', 'price' => '$2.69', 'image' => 'https://tse2.mm.bing.net/th?id=OIP.afwIXrNiJKbVLbfHTMGFHQHaJ4&pid=Api&P=0&h=180'],
                ['id_jenisMakanan'=> 2, 'name' => 'Potato Sticks with Dipping Sauce', 'price' => '$2.00', 'image' => 'https://tse4.mm.bing.net/th?id=OIP.G0-VSkKoFW5BHHlmbWBKBwHaFP&pid=Api&P=0&h=180'],
                ['id_jenisMakanan'=> 2, 'name' => 'Popcorn Chicken', 'price' => '$3.00', 'image' => 'https://tse4.mm.bing.net/th?id=OIP.yi3uQb4_pdGvgoLxT9vpjAHaHa&pid=Api&P=0&h=180'],
                ['id_jenisMakanan'=> 2, 'name' => 'Spicy Honey Chicken Wings', 'price' => '$3.22', 'image' => 'https://tse2.mm.bing.net/th?id=OIP.XmbsOTbH3m-zM6Rpx80HgAHaHa&pid=Api&P=0&h=180'],
                ['id_jenisMakanan'=> 2, 'name' => 'Banana Turon with Caramel', 'price' => '$1.69', 'image' => 'https://tse2.mm.bing.net/th?id=OIP.c6VRUTOCpyAC_6coVwn-DwHaHa&pid=Api&P=0&h=180'],
                ['id_jenisMakanan'=> 2, 'name' => 'Loaded Nachos with Chicken Mayo', 'price' => '$2.35', 'image' => 'https://tse1.mm.bing.net/th?id=OIP.p5z4FtE-LH__3jXheaCV6QHaH5&pid=Api&P=0&h=180'],
                ['id_jenisMakanan'=> 2, 'name' => 'Garlic Cheese Bread', 'price' => '$2.10', 'image' => 'https://tse3.mm.bing.net/th?id=OIP.DXIj4r5NEb72P0smgNGMigHaFF&pid=Api&P=0&h=180'],
            ],
            'appetizer' => [
                ['id_jenisMakanan'=> 1, 'name' => 'Artisan Cheese Plate', 'price' => '$15.00', 'image' => 'https://tse3.mm.bing.net/th?id=OIP.yj0lsGkIN5QtZi3Jo9rc7wHaGR&pid=Api&P=0&h=180'],
                ['id_jenisMakanan'=> 1, 'name' => 'Bruschetta', 'price' => '$8.00', 'image' => 'https://tse4.mm.bing.net/th?id=OIP.4-aDQrUwyM6B6vxTZrXAJAHaEz&pid=Api&P=0&h=180'],
                ['id_jenisMakanan'=> 1, 'name' => 'Caesar Salad', 'price' => '$5.12', 'image' => 'https://tse4.mm.bing.net/th?id=OIP.QmHw_37gNHByVUGMekg3awHaHa&pid=Api&P=0&h=180'],
                ['id_jenisMakanan'=> 1, 'name' => 'Shrimp Cocktail', 'price' => '$10.00', 'image' => 'https://tse2.mm.bing.net/th?id=OIP.R3QKd3XafMBUMH_tktFQEgHaE8&pid=Api&P=0&h=180'],
                ['id_jenisMakanan'=> 1, 'name' => 'Caprese Skewers', 'price' => '$7.50', 'image' => 'https://tse1.mm.bing.net/th?id=OIP.7cIwTBHkkYJt2JSFHib3UAHaHa&pid=Api&P=0&h=180'],
                ['id_jenisMakanan'=> 1, 'name' => 'Spinach and Artichoke Dip', 'price' => '$9.00', 'image' => 'https://tse4.mm.bing.net/th?id=OIP._C5NTz1y153qrsJmiDeKNgHaFC&pid=Api&P=0&h=180'],
                ['id_jenisMakanan'=> 1, 'name' => 'Stuffed Mushrooms', 'price' => '$6.35', 'image' => 'https://tse3.mm.bing.net/th?id=OIP.8CyOKwbqSKXZwsPSPLO6EgHaE8&pid=Api&P=0&h=180'],
                ['id_jenisMakanan'=> 1, 'name' => 'Deviled Eggs', 'price' => '$7.10', 'image' => 'https://tse4.mm.bing.net/th?id=OIP.QUZ0--hojQe1OV40SJlBDgHaE8&pid=Api&P=0&h=180'],
            ],
            'alcohol' => [
                ['id_jenisMakanan'=> 3, 'name' => 'Martini', 'price' => '$12.00', 'image' => 'https://tse1.mm.bing.net/th?id=OIP.3ZV0fYQZbEmRY2y8yehM1wHaHa&pid=Api&P=0&h=180'],
                ['id_jenisMakanan'=> 3, 'name' => 'Margarita', 'price' => '$8.50', 'image' => 'https://tse3.mm.bing.net/th?id=OIP.Zljihe1OVdpMs8JO5C0C_AHaE8&pid=Api&P=0&h=180'],
                ['id_jenisMakanan'=> 3, 'name' => 'Old Fashioned', 'price' => '$12.50', 'image' => 'https://tse1.mm.bing.net/th?id=OIP.STfR97mTboXVcMYRVhHMfAHaHa&pid=Api&P=0&h=180'],
                ['id_jenisMakanan'=> 3, 'name' => 'Mojito', 'price' => '$11.45', 'image' => 'https://tse2.mm.bing.net/th?id=OIP._Zeuj-mSku2-dVCgVaEDMAHaHa&pid=Api&P=0&h=180'],
                ['id_jenisMakanan'=> 3, 'name' => 'Craft Beer (pint)', 'price' => '$6.50', 'image' => 'https://tse2.mm.bing.net/th?id=OIP.lg2YFtzLZx8pz8Jx0q6qsAHaEm&pid=Api&P=0&h=180'],
                ['id_jenisMakanan'=> 3, 'name' => 'Wine by the Glass', 'price' => '$13.20', 'image' => 'https://tse2.mm.bing.net/th?id=OIP.fE_O2ERZDAeMVIBZijFAjQHaE8&pid=Api&P=0&h=180'],
                ['id_jenisMakanan'=> 3, 'name' => 'Whiskey Sour', 'price' => '$14.00', 'image' => 'https://tse1.mm.bing.net/th?id=OIP.-qaun2STZ7J1C9q1RADaBwHaE8&pid=Api&P=0&h=180'],
                ['id_jenisMakanan'=> 3, 'name' => 'Cosmopolitan', 'price' => '$16.20', 'image' => 'https://tse4.mm.bing.net/th?id=OIP.GNomUD5tyfXSJ4MHRC0qJQHaHa&pid=Api&P=0&h=180'],
            ],
            'nonAlcohol' => [
                ['id_jenisMakanan'=> 4, 'name' => 'Lemonade', 'price' => '$3.99', 'image' => 'https://tse2.mm.bing.net/th?id=OIP.O4-BlwnK5XddkVPnAKuEVQHaE8&pid=Api&P=0&h=180'],
                ['id_jenisMakanan'=> 4, 'name' => 'Virgin Mojito', 'price' => '$7.00', 'image' => 'https://tse2.mm.bing.net/th?id=OIP.srPfMqNzMSam8jw0JpYnEQHaHa&pid=Api&P=0&h=180'],
                ['id_jenisMakanan'=> 4, 'name' => 'Shirley Temple', 'price' => '$4.00', 'image' => 'https://tse1.mm.bing.net/th?id=OIP.M8OS8YtsYUVzT738-yKeLAHaHa&pid=Api&P=0&h=180'],
                ['id_jenisMakanan'=> 4, 'name' => 'Iced Tea', 'price' => '$3.00', 'image' => 'https://tse2.mm.bing.net/th?id=OIP.E_gCRT8XQRVS_WM6U8oLTgHaFj&pid=Api&P=0&h=180'],
                ['id_jenisMakanan'=> 4, 'name' => 'Soda (per can)', 'price' => '$3.00', 'image' => 'https://tse4.mm.bing.net/th?id=OIP.HuiZ0wKn4fJzdUo9nFpqOQHaFj&pid=Api&P=0&h=180'],
                ['id_jenisMakanan'=> 4, 'name' => 'Mocktail (non-alcoholic)', 'price' => '$7.69', 'image' => 'https://tse1.mm.bing.net/th?id=OIP.i6Po_-gOp0NXSJXIhA_ODQHaJ9&pid=Api&P=0&h=180'],
                ['id_jenisMakanan'=> 4, 'name' => 'Brewed Coffee', 'price' => '$5.35', 'image' => 'https://tse1.mm.bing.net/th?id=OIP.gyi2811SPA3O1YcuPtJiSwHaHa&pid=Api&P=0&h=180'],
                ['id_jenisMakanan'=> 4, 'name' => 'Matchless Coffee', 'price' => '$6.10', 'image' => 'https://tse1.mm.bing.net/th?id=OIP.7UntTq1JqkCiTLMEB-IwvwHaE8&pid=Api&P=0&h=180'],
            ],
            'dessert' => [
                ['id_jenisMakanan'=> 5, 'name' => 'Chocolate Lava Cake', 'price' => '$12.50', 'image' => 'https://tse4.mm.bing.net/th?id=OIP.UqPA6l0j5zEUC34D2WyFpAHaJw&pid=Api&P=0&h=180'],
                ['id_jenisMakanan'=> 5, 'name' => 'Cheesecake (slice)', 'price' => '$10.99', 'image' => 'https://tse1.mm.bing.net/th?id=OIP.S-q_0M8EpT3xB4SviRG9tAHaHa&pid=Api&P=0&h=180'],
                ['id_jenisMakanan'=> 5, 'name' => 'Tiramisu', 'price' => '$14.00', 'image' => 'https://tse2.mm.bing.net/th?id=OIP.g6OCL5qbY-Nnp-jUe3qzeQHaE7&pid=Api&P=0&h=180'],
                ['id_jenisMakanan'=> 5, 'name' => 'Apple Pie (slice)', 'price' => '$5.20', 'image' => 'https://tse4.mm.bing.net/th?id=OIP.DuFc4e9W7H6789dtveuQcQHaE8&pid=Api&P=0&h=180'],
                ['id_jenisMakanan'=> 5, 'name' => 'Crème Brûlée', 'price' => '$13.22', 'image' => 'https://tse4.mm.bing.net/th?id=OIP.1Xc5cFVVnIY6b-rACqGqeQHaE7&pid=Api&P=0&h=180'],
                ['id_jenisMakanan'=> 5, 'name' => 'Brownie Sundae', 'price' => '$14.60', 'image' => 'https://tse3.mm.bing.net/th?id=OIP.TxM8wBI4P8J-EBGZaK8a6wHaHa&pid=Api&P=0&h=180'],
                ['id_jenisMakanan'=> 5, 'name' => 'Key Lime Pie (slice)', 'price' => '$9.35', 'image' => 'https://tse2.mm.bing.net/th?id=OIP.9vdkk310qAFXV-o3B__CcwHaHa&pid=Api&P=0&h=180'],
                ['id_jenisMakanan'=> 5, 'name' => 'Strawberry Shortcake', 'price' => '$8.10', 'image' => 'https://tse2.mm.bing.net/th?id=OIP.XMYMOFgxzRkPuAoWLF7dCwHaHa&pid=Api&P=0&h=180'],
            ],
        ];

        foreach ($menuData as $category => $items) {
            foreach ($items as $item) {
                // Insert category into the data array
                $item['category'] = $category;
                DB::table('menus')->insert($item);
            }
        }
    }
}
