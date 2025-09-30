<?php
namespace DRogmann\ClpInformation\Model\Config\Source;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;

class SignalWord extends AbstractSource
{
    public function getAllOptions()
    {
        if (!$this->_options) {
            $this->_options = [
                ['value' => '', 'label' => __('-- Bitte wählen --')],
                ['value' => 'Gefahr', 'label' => __('Gefahr')],
                ['value' => 'Achtung', 'label' => __('Achtung')],
            ];
        }
        return $this->_options;
    }
}
