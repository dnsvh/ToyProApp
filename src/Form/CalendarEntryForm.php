<?php
// src/Form/CalendarEntryForm.php

namespace App\Form;

use App\Entity\CalendarEntry;
use App\Entity\CalendarTag;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CalendarEntryForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('date', DateType::class, [
                'widget' => 'single_text',
            ])
            ->add('clockIn', DateTimeType::class, [
                'widget'   => 'single_text',
                'required' => false,
            ])
            ->add('clockOut', DateTimeType::class, [
                'widget'   => 'single_text',
                'required' => false,
            ])
            ->add('hoursWorked')
            ->add('comment')
            ->add('user', EntityType::class, [
                'class'        => User::class,
                'choice_label' => 'email',
                'disabled'     => true,
            ])
            ->add('tags', EntityType::class, [
                'class'        => CalendarTag::class,
                'choice_label' => 'name',
                'multiple'     => true,
                'expanded'     => false,
                'required'     => false,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => CalendarEntry::class,
        ]);
    }
}
