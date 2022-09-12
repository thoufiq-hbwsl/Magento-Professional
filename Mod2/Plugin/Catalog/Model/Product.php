<?php

namespace Hummingbird\Mod2\Plugin\Catalog\Model;

class Product
{
    public function afterGetName(\Magento\Catalog\Model\Product $subject, $result)
    {
        $priceOfProduct = $subject->getPrice();
        if($priceOfProduct<60){
            return $result . " On Sale!";
        }
        return $result;
    }
}