<?php
class Book {
    private $code_book;
    private $name;
    private $qty;

    // Constructor untuk inisialisasi dan validasi
    public function __construct($code_book, $name, $qty) {
        $this->setCodeBook($code_book);
        $this->name = $name;
        $this->setQty($qty);
    }

    // Private setter untuk code_book
    private function setCodeBook($code) {
        if (preg_match('/^[A-Z]{2}[0-9]{2}$/', $code)) {
            $this->code_book = $code;
        } else {
            echo "Error: code_book harus terdiri dari 2 huruf kapital diikuti 2 angka.\n";
        }
    }

    // Private setter untuk qty
    private function setQty($quantity) {
        if (is_int($quantity) && $quantity > 0) {
            $this->qty = $quantity;
        } else {
            echo "Error: qty harus berupa integer positif.\n";
        }
    }

    // Getter untuk code_book
    public function getCodeBook() {
        return $this->code_book;
    }

    // Getter untuk qty
    public function getQty() {
        return $this->qty;
    }

    // Getter untuk name (opsional jika diperlukan)
    public function getName() {
        return $this->name;
    }
}

// Contoh penggunaan:
$book1 = new Book("KZ30", "Pemrograman PHP", 5);
echo "Kode Buku: " . $book1->getCodeBook() . "\n";
echo "Jumlah: " . $book1->getQty() . "\n";
