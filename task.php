<?php
class Product {

    // TODO: Add properties
    public $id;
    public $name;
    public $price;

    public function __construct($id, $name, $price) {

        // TODO: Initialize properties
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;

    }


    // TODO: Add getFormattedPrice method
    public function getFormattedPrice(){

        $formattedPrice = "$".number_format($this->price, 2, '.', '');
        return $formattedPrice;

    }

    // TODO: Add showDetails method
    public function showDetails(){

        $formattedPrice = $this->getFormattedPrice();
        echo "Product Details: <br>- ID: {$this->id}. <br>- Name: {$this->name}. <br>- Price: {$formattedPrice}.";
    
    }
}


// Test the Product class
$product = new Product(1, 'T-shirt', 19.99);
$product->showDetails();



// Expected Output:


// Product Details:
// - ID: 1
// - Name: T-shirt
// - Price: $19.99