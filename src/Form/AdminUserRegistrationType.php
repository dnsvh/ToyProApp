<?php
// src/Form/AdminUserRegistrationType.php

namespace App\Form;

use App\Entity\User;
use App\Entity\Role;
use App\Entity\UserTag;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\{
    EmailType,
    TextType,
    PasswordType,
    DateType,
    CheckboxType
};
use Symfony\Component\OptionsResolver\OptionsResolver;

class AdminUserRegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class, [
                'label' => 'Email',
            ])
            ->add('firstName', TextType::class, [
                'label' => 'First Name',
            ])
            ->add('lastName', TextType::class, [
                'label' => 'Last Name',
            ])
            ->add('plainPassword', PasswordType::class, [
                'mapped' => false,
                'label'  => 'Password',
            ])
            ->add('role', EntityType::class, [
                'class'        => Role::class,
                'choice_label' => 'description',
                'label'        => 'Role',
            ])
            ->add('tags', EntityType::class, [
                'class'        => UserTag::class,
                'choice_label' => 'name',
                'label'        => 'Teams / Tags',
                'multiple'     => true,
                'expanded'     => false,
                'required'     => false,
            ])

            ->add('birthday', DateType::class, [
                'widget'   => 'single_text',
                'required' => false,
                'label'    => 'Birthday',
            ])

            ->add('enabled', CheckboxType::class, [
                'required' => false,
                'label'    => 'Enabled',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
