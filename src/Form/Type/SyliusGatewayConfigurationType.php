<?php

declare(strict_types=1);

namespace Eclyptox\SyliusRedsysPlugin\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

final class SyliusGatewayConfigurationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('merchant_code', TextType::class)
            ->add('terminal', NumberType::class)
            ->add('secret_key', TextType::class)
            ->add('sandbox', CheckboxType::class);
    }
}
