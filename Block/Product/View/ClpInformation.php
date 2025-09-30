<?php
declare(strict_types=1);

namespace DRogmann\ClpInformation\Block\Product\View;

use Magento\Catalog\Api\Data\ProductInterface;
use Magento\Framework\Registry;
use Magento\Framework\View\Element\Template;

class ClpInformation extends Template
{
    private Registry $registry;

    public function __construct(
        Template\Context $context,
        Registry $registry,
        array $data = []
    ) {
        $this->registry = $registry;
        parent::__construct($context, $data);
    }

    public function getProduct(): ?ProductInterface
    {
        $product = $this->getData('product');
        if ($product instanceof ProductInterface) {
            return $product;
        }
        $prod = $this->registry->registry('product');
        return $prod instanceof ProductInterface ? $prod : null;
    }

    public function hasClpData(): bool
    {
        $product = $this->getProduct();
        if (!$product) {
            return false;
        }
        return (bool)($product->getData('clp_h_phrases')
            || $product->getData('clp_p_phrases')
            || $product->getData('clp_signal_word'));
    }

    public function getHPhrases(): array
    {
        $product = $this->getProduct();
        $val = $product ? $product->getData('clp_h_phrases') : null;
        if (is_string($val)) {
            return array_filter(array_map('trim', explode(',', $val)));
        }
        if (is_array($val)) {
            return $val;
        }
        return [];
    }

    public function getPPhrases(): array
    {
        $product = $this->getProduct();
        $val = $product ? $product->getData('clp_p_phrases') : null;
        if (is_string($val)) {
            return array_filter(array_map('trim', explode(',', $val)));
        }
        if (is_array($val)) {
            return $val;
        }
        return [];
    }

    public function getSignalWord(): string
    {
        $product = $this->getProduct();
        return (string)($product ? (string)$product->getData('clp_signal_word') : '');
    }
}
