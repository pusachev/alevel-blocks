<?php
/**
 * SpecialListProvider.php
 *
 * @author     Pavel Usachev <pausachev@gmail.com>
 * @copyright  2019 Pavel Usachev
 * @license    https://opensource.org/licenses/BSD-3-Clause  BSD-3-Clause
 */

namespace ALevel\Blocks\Provider;

use ALevel\Blocks\Api\Provider\SpecialListProviderInterface;
use Magento\Framework\Math\Random;
use Magento\Framework\Exception\LocalizedException;

/**
 * Class SpecialListProvider
 * @package ALevel\Blocks\Provider
 */
class SpecialListProvider implements SpecialListProviderInterface
{
    /**
     *
     * @var int
     */
    private $min;

    /**
     * @var int
     */
    private $max;

    /**
     * SpecialListProvider constructor.
     *
     * @param int    $min
     * @param int    $max
     */
    public function __construct(int $min = 0, int $max = 10)
    {
        $this->min = $min;
        $this->max = $max;
    }

    /** {@inheritDoc} */
    public function getList() : array
    {
        return [
            'S' => [
                'label' => __('Strength'),
                'value' => $this->getRandomNumber()
            ],
            'P' => [
                'label' => __('Perception'),
                'value' => $this->getRandomNumber()
            ],
            'E' => [
                'label' => __('Endurance'),
                'value' => $this->getRandomNumber()
            ],
            'C' => [
                'label' => __('Charisma'),
                'value' => $this->getRandomNumber()
            ],
            'I' => [
                'label' => __('Intelligence'),
                'value' => $this->getRandomNumber()
            ],
            'A' => [
                'label' => __('Agility'),
                'value' => $this->getRandomNumber()
            ],
            'L' => [
                'label' => __('Luck'),
                'value' => $this->getRandomNumber()
            ]
        ];
    }

    /**
     * @return int
     * @throws LocalizedException
     */
    private function getRandomNumber() : int
    {
        return $this->max > $this->min
            ? Random::getRandomNumber($this->min, $this->max)
            : Random::getRandomNumber($this->min, $this->max);
    }
}
