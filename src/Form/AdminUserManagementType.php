<?php
// src/Form/AdminUserManagementType.php

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
    CheckboxType
};
use Symfony\Component\OptionsResolver\OptionsResolver;

class AdminUserManagementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder

            ->add('email', EmailType::class, [
                'label'    => 'Email',
                'disabled' => true,
            ])

            ->add('firstName', TextType::class, [
                'label' => 'First Name',
            ])

            ->add('lastName', TextType::class, [
                'label' => 'Last Name',
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

            ->add('enabled', CheckboxType::class, [
                'label'    => 'Enabled',
                'required' => false,
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
