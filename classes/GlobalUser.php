<?php
    class GlobalUser {
        public $name;
        public $mail;
        public $budget = 0;
        public $discount = 0;
        protected $cartProducts = [];

        public function __construct($_name, $_mail) {
            $this->name = $_name;
            $this->mail = $_mail;
        }
    
        public function addProductToCart($product) {
            $this->cartProducts[] = $product;
        }
    
        public function getCart() {
            return $this->cartProducts;
        }

        public function calcPrice() {
            $sum = 0;

            foreach($this->cartProducts as $product) {
                $sum += $product->price;
            }
    
            $sum -= ($sum * $this->discount / 100);
    
            return $sum;
        }
    
        public function doPayment() {
            $priceToPay = $this->calcPrice();
    
            if($this->budget > $priceToPay) {
                return('ok');
            } 
        }
    }
?>