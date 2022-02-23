<?php

namespace Foggyline\Office\Controller\Test;

class Logging extends \Foggyline\Office\Controller\Test
{
    protected $logger;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Psr\Log\LoggerInterface $logger
    )
    {
        $this->logger = $logger;
        return parent::__construct($context);
    }

    public function execute()
    {
        $this->logger->log(\Monolog\Logger::DEBUG, 'debug msg');
        $this->logger->log(\Monolog\Logger::INFO, 'info msg');
        $this->logger->log(\Monolog\Logger::NOTICE, 'notice msg');
        $this->logger->log(\Monolog\Logger::WARNING, 'warning msg');
        $this->logger->log(\Monolog\Logger::ERROR, 'error msg');
        $this->logger->log(\Monolog\Logger::CRITICAL, 'critical msg');
        $this->logger->log(\Monolog\Logger::ALERT, 'alert msg');
        $this->logger->log(\Monolog\Logger::EMERGENCY, 'emergency msg');

        //preferred shorter version
        $this->logger->debug('debug msg');
        $this->logger->info('info msg');
        $this->logger->notice('notice msg');
        $this->logger->warning('warning msg');
        $this->logger->error('error msg');
        $this->logger->critical('critical msg');
        $this->logger->alert('alert msg');
        $this->logger->emergency('emergency msg');

        $this->logger->info('User logged in.', ['user'=>'Branko', 'age'=>32]);
    }
}