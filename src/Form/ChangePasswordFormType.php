<?php
// src/Form/ChangePasswordFormType.php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormBuilderInterface;

class ChangePasswordFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            // You could add a current‐password field here if you want to verify
            ->add('newPassword', RepeatedType::class, [
                'type'            => PasswordType::class,
                'first_options'   => ['label' => 'Nieuw wachtwoord'],
                'second_options'  => ['label' => 'Herhaal nieuw wachtwoord'],
                'invalid_message' => 'De ingevoerde wachtwoorden komen niet overeen.',
                'mapped'          => false,
            ])
        ;
    }
}
