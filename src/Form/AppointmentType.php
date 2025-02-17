<?php

namespace App\Form;

use App\Entity\Appointment;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class AppointmentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            
            ->add('nomPatient', TextType::class, [
                'label' => 'Nom du patient'
            ])
            ->add('email', EmailType::class, [
                'label' => 'Email du patient'
            ])
            ->add('date', DateType::class, [
                'label' => 'Date du rendez-vous',
                'widget' => 'single_text',
                'data' => new \DateTime(),
            ])
            ->add('heure', TimeType::class, [
                'widget' => 'single_text',
                'required' => false,
                'attr' => ['class' => 'form-control'],
            ])
            
            ->add('typeConsultation', ChoiceType::class, [
                'label' => 'Type de Consultation',
                'choices' => [
                    'Consultation en ligne' => 'Online Consultation',
                    'Consultation en face-à-face' => 'face-to-face consultation',
                ]
            ])
            ->add('statut', ChoiceType::class, [
                'label' => 'Statut',
                'choices' => [
                    'En attente' => 'pending',
                    'Complété' => 'completed',
                    'Annulé' => 'canceled',
                ]
            ])
            ->add("save", SubmitType::class)
            ;

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Appointment::class,
        ]);
    }
}
