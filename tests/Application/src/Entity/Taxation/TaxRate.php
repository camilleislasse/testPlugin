<?php

declare(strict_types=1);

namespace App\Entity\Taxation;

use Doctrine\ORM\Mapping as ORM;
use Sylius\Component\Core\Model\TaxRate as BaseTaxRate;
use Acme\SyliusExamplePlugin\Model\TaxRateTrait;

/**
 * @ORM\Entity
 * @ORM\Table(name="sylius_tax_rate")
 */

#[ORM\Entity]
#[ORM\Table(name: 'sylius_tax_rate')]
class TaxRate extends BaseTaxRate
{
    use TaxRateTrait;
}
