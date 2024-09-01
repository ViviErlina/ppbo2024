<?php

// Class Author
class Author
{
    public $name;
    public $description;

    public function __construct($name, $description)
    {
        $this->name = $name;
        $this->description = $description;
    }

    public function show($type): array
    {
        if ($type == 'short') {
            return ['name' => $this->name];
        } elseif ($type == 'full') {
            return [
                'name' => $this->name,
                'description' => $this->description
            ];
        } else {
            return [];
        }
    }
}

// Class Book
class Book
{
    public $ISBN;
    public $title;
    public $description;
    public $category;
    public $language;
    public $numberOfPage;
    public $author;
    public $publisher;

    public function __construct($ISBN, $title, $description, $category, $language, $numberOfPage, $author, $publisher)
    {
        $this->ISBN = $ISBN;
        $this->title = $title;
        $this->description = $description;
        $this->category = $category;
        $this->language = $language;
        $this->numberOfPage = $numberOfPage;
        $this->author = $author;
        $this->publisher = $publisher;
    }

    public function showAll(): array
    {
        return [
            'ISBN' => $this->ISBN,
            'title' => $this->title,
            'description' => $this->description,
            'category' => $this->category,
            'language' => $this->language,
            'numberOfPage' => $this->numberOfPage,
            'author' => $this->author,
            'publisher' => $this->publisher
        ];
    }

    public function detail($ISBN): array
    {
        if ($this->ISBN == $ISBN) {
            return $this->showAll();
        } else {
            return [];
        }
    }
}

// Class Publisher
class Publisher
{
    public $name;
    public $address;
    private $phone;

    public function __construct($name, $address, $phone)
    {
        $this->name = $name;
        $this->address = $address;
        $this->phone = $phone;
    }

    public function setPhone(int $phone): void
    {
        $this->phone = $phone;
    }

    public function getPhone(): int
    {
        return $this->phone;
    }
}

// Membuat objek dari kelas Author untuk Chairil Anwar
$author = new Author("Chairil Anwar", "Penyair terkenal Indonesia, bagian dari Angkatan '45, dikenal dengan puisi-puisi eksistensialis dan nasionalis.");

// Membuat objek dari kelas Publisher
$publisher = new Publisher("Pustaka Rakyat", "Jl. Kebon Sirih No. 34, Jakarta", 62212345678);

// Membuat objek dari kelas Book dengan informasi tentang karya Chairil Anwar
$book = new Book(
    9786021234567, 
    "Aku Ini Binatang Jalang", 
    "Kumpulan puisi Chairil Anwar yang mencerminkan semangat kebebasan dan perjuangan dalam kesusastraan Indonesia.", 
    "Puisi", 
    "Bahasa Indonesia", 
    150, 
    $author->name, 
    $publisher->name
);

// Menampilkan informasi tentang buku
echo "Informasi Buku:\n";
print_r($book->showAll());

echo "\nInformasi Penerbit:\n";
echo "Nama: " . $publisher->name . "\n";
echo "Alamat: " . $publisher->address . "\n";
echo "Telepon: " . $publisher->getPhone() . "\n";

?>
