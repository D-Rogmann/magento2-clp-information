<?php
namespace DRogmann\ClpInformation\Model\Config\Source;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;

class PPhrases extends AbstractSource
{
    public function getAllOptions()
    {
        if (!$this->_options) {
            $this->_options = [
                ['value' => 'P102', 'label' => __('P102 - Darf nicht in die Hände von Kindern gelangen')],
                ['value' => 'P264', 'label' => __('P264 - Nach Gebrauch gründlich waschen')],
                ['value' => 'P280', 'label' => __('P280 - Schutzhandschuhe/Schutzkleidung tragen')],
                ['value' => 'P301+P310', 'label' => __('P301+P310 - Bei Verschlucken: Giftinformationszentrum anrufen')],
            ];
        }
        return $this->_options;
    }
}
