<?php

namespace Hummingbird\Mod6\Block;

class CustomBlock extends \Magento\Framework\View\Element\AbstractBlock
{

    protected function _toHtml()
    {
        return "<h1>Cusotm Block </h1>";
    }

    protected  function _afterToHtml($html)
    {
        return parent::_afterToHtml($html);
    }

}