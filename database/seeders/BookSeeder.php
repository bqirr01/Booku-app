<?php

namespace Database\Seeders;

use App\Models\Books;
use Illuminate\Database\Seeder;


class BookSeeder extends Seeder
{
    public function run(): void
    {
        $books = [
            [
                'name' => 'Atomic Habits',
                'cover'=> 'https://ebooks.gramedia.com/ebook-covers/49184/image_highres/ID_AHPK2019MTH09AHP.jpg',
                'pdf'=> 'https://jdih.situbondokab.go.id/barang/buku/Filosofi%20Teras%20(Henry%20Manampiring)%20(z-lib.org).pdf', 
                'sinopsis' => 'Buku Atomic Habits karya James Clear merupakan buku motivasi yang berisikan cara mengubah hidup melalui kebiasaan-kebiasaan kecil. Tidak hanya itu, buku ini juga berisikan teori-teori ilmiah serta kumpulan kisah inspiratif dari tokoh-tokoh sukses di dunia.',

            ],
            [
                'name' => 'Filosofi Teras',
                'cover'=> 'https://cdn.gramedia.com/uploads/items/9786024125189_filosofi_teras.jpg',
                'pdf'=> 'https://jdih.situbondokab.go.id/barang/buku/Filosofi%20Teras%20(Henry%20Manampiring)%20(z-lib.org).pdf', 
                'sinopsis' => 'Jadi gini, ini buku keren euy',

            ],
            [
                'name' => 'Jika Kita Tak Pernah Jadi Apa-Apa',
                'cover'=> 'https://cdn.gramedia.com/uploads/items/Jika-Kita-Tak-Pernah-Jadi-Apa-apa-Alvi-Syahrin.jpg',
                'pdf'=> 'https://jdih.situbondokab.go.id/barang/buku/Filosofi%20Teras%20(Henry%20Manampiring)%20(z-lib.org).pdf', 
                'sinopsis' => 'Jadi gini, ini buku keren euy',

            ],
            [
                'name' => 'The Art Of War',
                'cover'=> 'https://www.bukukita.com/babacms/displaybuku/114151_f.jpg',
                'pdf'=> 'https://jdih.situbondokab.go.id/barang/buku/Filosofi%20Teras%20(Henry%20Manampiring)%20(z-lib.org).pdf', 
                'sinopsis' => 'Jadi gini, ini buku keren euy',

            ],
        ];

        foreach ($books as $book) {
            Books::create([
                'name' => $book['name'],
                'cover' => $book['cover'],
                'pdf' => $book['pdf'],
                'sinopsis' => $book['sinopsis'],
            ]);
        }
    }
}
