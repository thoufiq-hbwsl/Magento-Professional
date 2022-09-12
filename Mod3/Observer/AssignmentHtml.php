<?php

namespace Hummingbird\Mod3\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Hummingbird\Mod3\Logger\Logger;

class AssignmentHtml implements ObserverInterface
{

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function execute(Observer $observer) {
        $response = $observer->getEvent()->getData('response');
        $body = $response->getBody();
        $body = substr($body, 0, 1000);
        $this->logger->info($body);
    }
}