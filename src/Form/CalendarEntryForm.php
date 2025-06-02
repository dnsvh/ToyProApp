<?php

namespace App\Form;

use App\Entity\CalendarEntry;
use App\Entity\CalendarTag;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CalendarEntryForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('date')
            ->add('clockIn')
            ->add('clockOut')
            ->add('hoursWorked')
            ->add('comment')
            ->add('user', EntityType::class, [
                'class'        => User::class,
                'choice_label' => 'getEmail',
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
