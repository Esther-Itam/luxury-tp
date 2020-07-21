<?php

namespace App\Form;

use App\Entity\JobOffer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class JobOfferType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('reference')
            ->add('client')
            ->add('description')
            ->add('is_activated')
            ->add('notes_job')
            ->add('title_job')
            ->add('job_type')
            ->add('location_job')
            ->add('category_job')
            ->add('closing_at')
            ->add('salary')
            ->add('created_at')
            ->add('type_job')
            ->add('job_offer')
            ->add('category')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => JobOffer::class,
        ]);
    }
}
