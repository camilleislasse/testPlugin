<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Sylius Sp. z o.o.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Acme\SyliusExamplePlugin\Model;
use Sylius\Component\Customer\Model\CustomerGroupInterface;
use Sylius\Component\Customer\Model\CustomerGroup;
use Doctrine\ORM\Mapping as ORM;

trait TaxRateTrait
{
    /**
     * @ORM\ManyToOne(targetEntity="Sylius\Component\Customer\Model\CustomerGroup")
     * @ORM\JoinColumn(name="customer_group_id", referencedColumnName="id")
     */
    private CustomerGroup|null $customerGroup = null;

    public function getCustomerGroup(): ?CustomerGroup
    {
        return $this->customerGroup;
    }

    public function setCustomerGroup(?CustomerGroup $customerGroup): void
    {
        $this->customerGroup = $customerGroup;
    }


}
