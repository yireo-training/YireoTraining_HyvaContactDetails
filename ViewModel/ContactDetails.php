<?php declare(strict_types=1);

namespace YireoTraining\HyvaContactDetails\ViewModel;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class ContactDetails implements ArgumentInterface
{
    private ScopeConfigInterface $scopeConfig;

    public function __construct(
        ScopeConfigInterface $scopeConfig
    ) {
        $this->scopeConfig = $scopeConfig;
    }

    public function getPhoneNumber(): string
    {
        return (string)$this->scopeConfig->getValue('general/store_information/phone');
    }
}
