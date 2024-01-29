<?php

declare(strict_types=1);

namespace Acme\SyliusExamplePlugin\Form\Extension;

use Sylius\Bundle\CustomerBundle\Form\Type\CustomerGroupChoiceType;
use Sylius\Bundle\TaxationBundle\Form\Type\TaxRateType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\NotBlank;

final class TaxRateTypeExtension extends AbstractTypeExtension
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            // Adding new fields works just like in the parent form type.
            ->add('customerGroup', CustomerGroupChoiceType::class, [
                'required' => true,
                'label' => 'app.form.tax_rate.customer_group',
                'constraints' => [
                    new NotBlank(['groups' => 'sylius']),
                ],
            ]);
    }

    public static function getExtendedTypes(): iterable
    {
        return [TaxRateType::class];
    }
}
