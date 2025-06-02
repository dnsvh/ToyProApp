<?php
namespace App\Form;

use App\Entity\Announcement;
use App\Entity\Role;
use App\Entity\User;
use App\Entity\UserTag;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\{
    TextType, TextareaType, FileType, CheckboxType
};
use Symfony\Component\OptionsResolver\OptionsResolver;

class AnnouncementForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            // Title
            ->add('title', TextType::class, [
                'label' => 'Title',
            ])
            // Content (optional)
            ->add('content', TextareaType::class, [
                'label'    => 'Content',
                'required' => false,
            ])
            // Image file (optional)
            ->add('imageFile', FileType::class, [
                'label'    => 'Upload Image (PNG, JPG)',
                'mapped'   => false,
                'required' => false,
            ])
            // Public vs Private toggle
            ->add('isPublic', CheckboxType::class, [
                'label'    => 'Public (everyone can see)',
                'required' => false,
            ])
            // Show on InfoBoard?
            ->add('infoboard', CheckboxType::class, [
                'label'    => 'Show on InfoBoard',
                'required' => false,
            ])
            // Allow comments?
            ->add('commentsEnabled', CheckboxType::class, [
                'label'    => 'Allow Comments',
                'required' => false,
            ])
            // Visible = whether the announcement is live
            ->add('visible', CheckboxType::class, [
                'label'    => 'Visible',
                'required' => false,
            ])

            ->add('targetRoles', EntityType::class, [
                'class'        => Role::class,
                'choice_label' => 'description',
                'label'        => 'Allowed Roles',
                'multiple'     => true,
                'expanded'     => false,
                'required'     => false,
                'attr'         => ['class' => 'select2'],
            ])
            ->add('targetTags', EntityType::class, [
                'class'        => UserTag::class,
                'choice_label' => 'name',
                'label'        => 'Allowed Tags',
                'multiple'     => true,
                'expanded'     => false,
                'required'     => false,
                'attr'         => ['class' => 'select2'],
            ])
            ->add('targetUsers', EntityType::class, [
                'class'        => User::class,
                'choice_label' => 'email',
                'label'        => 'Allowed Users (specific persons)',
                'multiple'     => true,
                'expanded'     => false,
                'required'     => false,
                'attr'         => ['class' => 'select2'],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Announcement::class,
        ]);
    }
}
