<?php
/**
 * SpecialListProviderInterface.php
 *
 * @author     Pavel Usachev <pausachev@gmail.com>
 * @copyright  2019 Pavel Usachev
 * @license    https://opensource.org/licenses/BSD-3-Clause  BSD-3-Clause
 */

namespace ALevel\Blocks\Api\Provider;

use Magento\Framework\Exception\LocalizedException;

/**
 * Class SpecialListProvider
 * @package ALevel\Blocks\Api\Provider
 */
interface SpecialListProviderInterface
{
    /**
     * Return SPECIAL list in array
     *
     * @throws LocalizedException
     * @return string[]
     */
    public function getList() : array;
}
