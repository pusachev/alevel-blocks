<?php
/**
 * RandomList.php
 *
 * @author    Pavel Usachev <pausachev@gmail.com>
 * @copyright 2019 Pavel Usachev
 * @license   https://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 */

namespace ALevel\Blocks\Block;

use ALevel\Blocks\Api\Provider\SpecialListProviderInterface;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;

/**
 * Class RandomList
 * @package ALevel\Blocks\Block
 */
class RandomList extends Template
{
    /**
     * @var SpecialListProviderInterface
     */
    private $provider;

    /**
     * RandomList constructor.
     *
     * @param Context $context
     * @param SpecialListProviderInterface $provider
     * @param array $data
     */
    public function __construct(
        Context $context,
        SpecialListProviderInterface $provider,
        array $data = []
    ) {
        $this->provider = $provider;

        parent::__construct($context, $data);
    }

    /**
     * @throws LocalizedException
     * @return string[]
     */
    public function getList() : array
    {
        return $this->provider->getList();
    }
}
