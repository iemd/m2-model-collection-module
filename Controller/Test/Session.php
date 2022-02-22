<?php

namespace Foggyline\Office\Controller\Test;

class Session extends \Foggyline\Office\Controller\Test
{
    protected $sessionManager;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\Session\SessionManagerInterface $sessionManager
    )
    {
        $this->sessionManager = $sessionManager;
        return parent::__construct($context);
    }

    public function execute()
    {
        $this->sessionManager->setFoggylineOfficeVar1('Office1');
        echo "<pre>";
        echo $this->sessionManager->getFoggylineOfficeVar1();        
        echo "</pre>";
        echo "<pre>";
        print_r($this->sessionManager->getData());  
        echo $this->sessionManager->getName();      
        echo "</pre>";
    }
}