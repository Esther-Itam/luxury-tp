<?php

namespace App\Form;

use App\Entity\Candidate;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CandidateType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email')
            //->add('roles')
            ->add('password')
            ->add('isVerified')
            ->add('gender')
            ->add('first_name')
            ->add('last_name')
            ->add('address')
            ->add('country')
            ->add('nationality')
            ->add('passport')
            ->add('passport_file')
            ->add('cv_file')
            ->add('profil_picture')
            ->add('current_location')
            ->add('date_birth')
            ->add('place_birth')
            ->add('availability')
            ->add('job_category')
            ->add('experience')
            ->add('short_description')
            ->add('notes_candidate')
            ->add('created_at')
            ->add('updated_at')
            ->add('deleted_at')
            ->add('files')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Candidate::class,
        ]);
    }
}
