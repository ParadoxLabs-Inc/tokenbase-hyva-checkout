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

use Magento\Framework\View\Element\Block\ArgumentInterface;

/**
 * Registry of TokenBase payment methods whose customer-account add/edit form supports Hyva.
 *
 * Gateway Hyva modules append their method code via frontend di.xml:
 *
 *   <type name="ParadoxLabs\TokenBaseHyvaCheckout\ViewModel\SupportedMethods">
 *       <arguments>
 *           <argument name="methods" xsi:type="array">
 *               <item name="method_code" xsi:type="string">method_code</item>
 *           </argument>
 *       </arguments>
 *   </type>
 *
 * Methods NOT registered still get the (gateway-agnostic) card list and delete actions on the
 * Hyva payment-options page; only the add/edit pane is gated behind registration.
 */
class SupportedMethods implements ArgumentInterface
{
    /**
     * @param string[] $methods
     */
    public function __construct(
        private readonly array $methods = [],
    ) {
    }

    /**
     * Whether the given method code has a Hyva-compatible add/edit form.
     */
    public function isSupported(string $methodCode): bool
    {
        return in_array($methodCode, $this->methods, true);
    }

    /**
     * Get all registered method codes.
     *
     * @return string[]
     */
    public function getMethods(): array
    {
        return array_values($this->methods);
    }
}
