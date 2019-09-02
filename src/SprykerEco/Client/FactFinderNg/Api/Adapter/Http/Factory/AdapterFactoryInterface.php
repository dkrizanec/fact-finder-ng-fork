<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace SprykerEco\Client\FactFinderNg\Api\Adapter\Http\Factory;

use SprykerEco\Client\FactFinderNg\Api\Adapter\FactFinderNgAdapterInterface;

interface AdapterFactoryInterface
{
    /**
     * @return \SprykerEco\Client\FactFinderNg\Api\Adapter\FactFinderNgAdapterInterface
     */
    public function createFactFinderNgSearchAdapter(): FactFinderNgAdapterInterface;

    /**
     * @return \SprykerEco\Client\FactFinderNg\Api\Adapter\FactFinderNgAdapterInterface
     */
    public function createFactFinderNgSuggestionAdapter(): FactFinderNgAdapterInterface;

    /**
     * @return \SprykerEco\Client\FactFinderNg\Api\Adapter\FactFinderNgAdapterInterface
     */
    public function createFactFinderNgNavigationAdapter(): FactFinderNgAdapterInterface;

    /**
     * @return FactFinderNgAdapterInterface
     */
    public function createFactFinderImportSearchAdapter(): FactFinderNgAdapterInterface;

    /**
     * @return FactFinderNgAdapterInterface
     */
    public function createFactFinderNgTrackCheckoutApiAdapter(): FactFinderNgAdapterInterface;

    /**
     * @return FactFinderNgAdapterInterface
     */
    public function createFactFinderNgTrackCartApiAdapter(): FactFinderNgAdapterInterface;

    /**
     * @return FactFinderNgAdapterInterface
     */
    public function createFactFinderNgTrackClickApiAdapter(): FactFinderNgAdapterInterface;
}
