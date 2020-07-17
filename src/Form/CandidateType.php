<?php

namespace App\Form;

use App\Entity\Candidate;
use App\Entity\JobCategory;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;


class CandidateType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email')
            ->add('password')
            ->add('isVerified')
            ->add('gender', ChoiceType::class,[
                'choices' => [
                    'female' => true,
                    'male' => true,
                    'transgender' => true,
                ],
            ])
            ->add('first_name')
            ->add('last_name')
            ->add('address')
            ->add('country')
            ->add('nationality')
            ->add('passport', CheckboxType::class,  array('required' => false))
            ->add('passport_file', FileType::class, [
                'label' => 'Passport (pdf file)',
                // unmapped means that this field is not associated to any entity property
                'mapped' => false,

                // make it optional so you don't have to re-upload the PDF file
                // every time you edit the Product details
                'required' => false,

                // unmapped fields can't define their validation using annotations
                // in the associated entity, so you can use the PHP constraint classes
                'constraints' => [
                    new File([
                        'maxSize' => '1024k',
                        'mimeTypes' => [
                            'application/pdf',
                            'application/x-pdf',
                        ],
                        'mimeTypesMessage' => 'Please upload a valid PDF document',
                    ])
                ],
            ])
            ->add('cv_file', FileType::class, [
                'label' => 'CV (pdf file)',
                 // unmapped means that this field is not associated to any entity property
                 'mapped' => false,

                 // make it optional so you don't have to re-upload the PDF file
                 // every time you edit the Product details
                 'required' => false,
 
                 // unmapped fields can't define their validation using annotations
                 // in the associated entity, so you can use the PHP constraint classes
                 'constraints' => [
                     new File([
                         'maxSize' => '1024k',
                         'mimeTypes' => [
                             'application/pdf',
                             'application/x-pdf',
                         ],
                         'mimeTypesMessage' => 'Please upload a valid PDF document',
                     ])
                 ],
            ])
            ->add('profil_picture')
            ->add('current_location')
            ->add('date_birth', DateType::class, [
                'widget' => 'single_text',
                'input'  => 'datetime_immutable',
            ])
            ->add('place_birth')
            ->add('availability')
            
            ->add('experience', ChoiceType::class,[
                'choices' => [
                    '0-6 months' => true,
                    '6 months - 1 year' => true,
                    '1-2 years' => true,
                    '2+ years' => true,
                    '5+ years' => true,
                    '10+ years' => true,
                ],
            ])
            ->add('short_description', TextareaType::class, [
                'row_attr' => ['class' => 'text-editor', 'id' => '...'],
                'attr' => ['class' => 'tinymce'],])
            ->add('notes_candidate')
            ->add('created_at', DateType::class, [
                'widget' => 'single_text',
                'input'  => 'datetime_immutable',
                'required'   => false,
            ])
            ->add('updated_at', DateType::class, [
                'widget' => 'single_text',
                'input'  => 'datetime_immutable',
                'required'   => false,
            ])
            ->add('deleted_at', DateType::class, [
                'widget' => 'single_text',
                'input'  => 'datetime_immutable',
                'required'   => false,
            ])
            ->add('files', FileType::class, [
                'label' => 'files (pdf file)',
                'required'   => false,
                // unmapped means that this field is not associated to any entity property
                'mapped' => false,

                // make it optional so you don't have to re-upload the PDF file
                // every time you edit the Product details
                'required' => false,

                // unmapped fields can't define their validation using annotations
                // in the associated entity, so you can use the PHP constraint classes
                'constraints' => [
                    new File([
                        'maxSize' => '1024k',
                        'mimeTypes' => [
                            'application/pdf',
                            'application/x-pdf',
                        ],
                        'mimeTypesMessage' => 'Please upload a valid PDF document',
                    ])
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Candidate::class,
        ]);
    }
}
