<?php
/**
 * This file is part of Berlioz framework.
 *
 * @license   https://opensource.org/licenses/MIT MIT License
 * @copyright 2017 Ronan GIRON
 * @author    Ronan GIRON <https://github.com/ElGigi>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code, to the root.
 */

namespace Berlioz\Form;


interface FormTransformer
{
    /**
     * FormTransformer constructor.
     *
     * @param mixed $newValue     New value
     * @param mixed $defaultValue Default value
     */
    public function __construct($newValue, $defaultValue = null);

    /**
     * Get result after transformation.
     *
     * @return mixed
     */
    public function result();
}