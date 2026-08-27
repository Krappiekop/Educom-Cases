<?php

class ShoppingCart
{
    private $items;

    public function addToCart($item_id)
    {
        if (!empty($this->items[$item_id])) {
            // item zit al in store_items array dus waarde + 1
            $this->items[$item_id] = $this->items[$item_id] + 1;
        }
        else {
            // item zit nog niet in store_items array dus maak waarde aan
            $this->items[$item_id] = 1;
        }
    }

    public function emptyCart()
    {
    }

    public function getCart()
    {
        return $this->items;
    }
}