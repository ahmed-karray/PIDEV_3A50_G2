<?php

namespace App\Form;

use App\Entity\Medicament;
use App\Entity\Pharmacie;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\Positive;
use Symfony\Component\Validator\Constraints\Range;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType; // Add this

class MedicamentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', null, [
                'constraints' => [
                    new NotBlank(['message' => 'Le nom du médicament est obligatoire.']),
                    new Length([
                        'min' => 2,
                        'max' => 255,
                        'minMessage' => 'Le nom doit contenir au moins {{ limit }} caractères.',
                        'maxMessage' => 'Le nom ne peut pas dépasser {{ limit }} caractères.',
                    ]),
                ],
            ])
            ->add('description', null, [
                'constraints' => [
                    new NotBlank(['message' => 'La description est obligatoire.']),
                    new Length([
                        'min' => 10,
                        'max' => 1000,
                        'minMessage' => 'La description doit contenir au moins {{ limit }} caractères.',
                        'maxMessage' => 'La description ne peut pas dépasser {{ limit }} caractères.',
                    ]),
                ],
            ])
            ->add('dosage', null, [
                'constraints' => [
                    new NotBlank(['message' => 'Le dosage est obligatoire.']),
                    new Positive(['message' => 'Le dosage doit être un nombre positif.']),
                ],
            ])
            ->add('categorie', ChoiceType::class, [ // Use ChoiceType for categorie
                'choices' => [
                    'JOUR' => 'JOUR',
                    'NUIT' => 'NUIT',
                ],
                'constraints' => [
                    new NotBlank(['message' => 'La catégorie est obligatoire.']),
                ],
                'placeholder' => 'Sélectionnez une catégorie', // Optional: Add a placeholder
            ])            ->add('quantite')
            ->add('quantite', null, [
                'constraints' => [
                    new NotBlank(['message' => 'La quantité est obligatoire.']),
                    new Positive(['message' => 'La quantité doit être un nombre positif.']),
                ],
            ])
            ->add('prix', null, [
                'constraints' => [
                    new NotBlank(['message' => 'Le prix est obligatoire.']),
                    new Positive(['message' => 'Le prix doit être un nombre positif.']),
                    new Range([
                        'min' => 0.01,
                        'max' => 10000,
                        'notInRangeMessage' => 'Le prix doit être compris entre {{ min }} et {{ max }}.',
                    ]),
                ],
            ])
            ->add('imageurl', FileType::class, [
                'label' => 'Image du médicament',
                'mapped' => false, // Important! This prevents automatic mapping to `imageurl`
                'required' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '2M',
                        'mimeTypes' => ['image/jpeg', 'image/png', 'image/gif'],
                        'mimeTypesMessage' => 'Veuillez télécharger une image valide (JPEG, PNG, GIF).',
                    ])
                ],
            ])
            
            ->add('save', SubmitType::class);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Medicament::class,
        ]);
    }
}
