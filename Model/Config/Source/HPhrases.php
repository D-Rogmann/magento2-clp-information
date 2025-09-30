<?php
namespace DRogmann\ClpInformation\Model\Config\Source;

class HPhrases extends \Magento\Eav\Model\Entity\Attribute\Source\AbstractSource
{
    public function getAllOptions()
    {
        if (!$this->_options) {
            $this->_options = [
                ['value' => 'H301', 'label' => __('H301 - Giftig bei Verschlucken')],
                ['value' => 'H302', 'label' => __('H302 - Gesundheitsschädlich bei Verschlucken')],
                ['value' => 'H315', 'label' => __('H315 - Verursacht Hautreizungen')],
                ['value' => 'H319', 'label' => __('H319 - Verursacht schwere Augenreizung')],
                ['value' => 'H335', 'label' => __('H335 - Kann die Atemwege reizen')],
                ['value' => 'H412', 'label' => __('H412 - Schädlich für Wasserorganismen')]
            ];
        }
        return $this->_options;
    }
}
