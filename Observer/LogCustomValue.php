<?php

namespace Foggyline\Office\Observer;

use Magento\Framework\Event\ObserverInterface;

class LogCustomValue implements ObserverInterface
{
    protected $logger;

    public function __construct(
        \Psr\Log\LoggerInterface $logger
    )
    {
        $this->logger = $logger;
    }

    /**
     * @param \Magento\Framework\Event\Observer $observer
     * @return self
     */
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        //$val_one = $observer->getEvent()->getVarOne();
        $val_two = $observer->getEvent()->getVarTwo();
        $this->logger->info('Foggyline\Office: ' . $val_two);
        return $this;
    }
}