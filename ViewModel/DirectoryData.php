<?php declare(strict_types=1);
/**
 * Copyright © 2023-present ParadoxLabs, Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * Need help? Try our knowledgebase and support system:
 *
 * @link https://support.paradoxlabs.com
 */

namespace ParadoxLabs\TokenBaseHyvaCheckout\ViewModel;

use Magento\Directory\Helper\Data;
use Magento\Framework\View\Element\Block\ArgumentInterface;

/**
 * Directory (country/region) data for the shared billing address fieldset.
 *
 * Same data sources as Luma's regionUpdater widget, deliberately independent of any Hyva view
 * model APIs so the shared templates have no unverifiable dependencies.
 */
class DirectoryData implements ArgumentInterface
{
    public function __construct(
        private readonly Data $directoryHelper,
    ) {
    }

    /**
     * Region data JSON keyed by country id, plus a 'config' entry.
     */
    public function getRegionJson(): string
    {
        return $this->directoryHelper->getRegionJson();
    }

    /**
     * JSON array of country ids where postcode is optional.
     */
    public function getCountriesWithOptionalZip(): string
    {
        return $this->directoryHelper->getCountriesWithOptionalZip(true);
    }
}
