<?php

namespace Hummingbird\Mod2\Plugin\Theme\Block\Html;

class Header
{
    public function afterGetWelcome(\Magento\Theme\Block\Html\Header $subject, $result)
    {
        return "Winter Sale is On";
    }
}