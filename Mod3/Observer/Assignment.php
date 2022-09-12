<?php

namespace Hummingbird\Mod3\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Hummingbird\Mod3\Logger\Logger;

class Assignment implements ObserverInterface
{

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function execute(Observer $observer)
    {
        $product = $observer->getData("product");
        $this->logger->info($product->getName());
    }
}