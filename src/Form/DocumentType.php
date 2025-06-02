<?php


namespace App\Form;

use App\Entity\Document;
use App\Entity\Role;
use App\Entity\User;
use App\Entity\UserTag;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\{
    TextType,
    FileType,
    CheckboxType
};
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DocumentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            // Title field
            ->add('title', TextType::class, [
                'label' => 'Title',
            ])
            // New file upload (optional)
            ->add('documentFile', FileType::class, [
                'label'    => 'Upload New File (PDF, DOCX, etc.)',
                'mapped'   => false,
                'required' => false,
            ])
            // Public checkbox
            ->add('public', CheckboxType::class, [
                'label'    => 'Public (everyone can view)',
                'required' => false,
            ])
            // Target Roles
            ->add('targetRoles', EntityType::class, [
                'class'        => Role::class,
                'choice_label' => 'description',
                'multiple'     => true,
                'expanded'     => false,
                'required'     => false,
                'label'        => 'Restrict to Roles (if not public)',
            ])
            // Target UserTags
            ->add('targetTags', EntityType::class, [
                'class'        => UserTag::class,
                'choice_label' => 'name',
                'multiple'     => true,
                'expanded'     => false,
                'required'     => false,
                'label'        => 'Restrict to Tags (if not public)',
            ])
            // Target Users
            ->add('targetUsers', EntityType::class, [
                'class'        => User::class,
                'choice_label' => 'email',
                'multiple'     => true,
                'expanded'     => false,
                'required'     => false,
                'label'        => 'Restrict to Specific Users (if not public)',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Document::class,
        ]);
    }
}
