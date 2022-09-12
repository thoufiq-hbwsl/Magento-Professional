<?php

namespace Hummingbird\Mod2\Plugin\Theme\Block\Html;

class Footer
{
    public function afterGetCopyright(\Magento\Theme\Block\Html\Footer $subject, $result)
    {
        return "Copyright @2022 Toff ";
    }
}