<?php

namespace App\Form;

use App\Entity\Medicament;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\Positive;
use Symfony\Component\Validator\Constraints\Range;
use Symfony\Component\Validator\Constraints\Regex;

class MedicamentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'required' => true,
                'empty_data' => '', // Empêche la valeur null
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
            ->add('description', TextType::class, [
                'required' => true,
                'empty_data' => '',
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
            ->add('dosage', IntegerType::class, [
                'required' => true,
                'empty_data' => 0, // Valeur par défaut
                'constraints' => [
                    new NotBlank(['message' => 'Le dosage est obligatoire.']),
                    new Positive(['message' => 'Le dosage doit être un nombre positif.']),
                    new Range([
                        'min' => 1,
                        'max' => 1000,
                        'notInRangeMessage' => 'Le dosage doit être compris entre {{ min }} et {{ max }}.',
                    ]),
                ],
            ])
            ->add('categorie', ChoiceType::class, [
                'choices' => [
                    'JOUR' => 'JOUR',
                    'NUIT' => 'NUIT',
                ],
                'placeholder' => 'Sélectionnez une catégorie',
                'required' => true,
                'empty_data' => 'JOUR', // Valeur par défaut
                'constraints' => [
                    new NotBlank(['message' => 'La catégorie est obligatoire.']),
                ],
            ])
            ->add('quantite', IntegerType::class, [
                'required' => true,
                'empty_data' => 0, // Valeur par défaut
                'constraints' => [
                    new NotBlank(['message' => 'La quantité est obligatoire.']),
                    new Positive(['message' => 'La quantité doit être un nombre positif.']),
                    new Range([
                        'min' => 1,
                        'max' => 1000,
                        'notInRangeMessage' => 'La quantité doit être comprise entre {{ min }} et {{ max }}.',
                    ]),
                ],
            ])
            ->add('prix', TextType::class, [
                'required' => true,
                'empty_data' => '0.00', // Valeur par défaut
                'constraints' => [
                    new NotBlank(['message' => 'Le prix est obligatoire.']),
                    new Regex([
                        'pattern' => '/^\d+(\.\d{1,2})?$/',
                        'message' => 'Le prix doit être un nombre décimal valide (ex: 10.99).',
                    ]),
                    new Range([
                        'min' => 0.01,
                        'max' => 10000,
                        'notInRangeMessage' => 'Le prix doit être compris entre {{ min }} et {{ max }}.',
                    ]),
                ],
            ])
            ->add('imageurl', FileType::class, [
                'label' => 'Image du médicament',
                'mapped' => false, // Ne pas mapper directement à l'entité
                'required' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '2M',
                        'mimeTypes' => ['image/jpeg', 'image/png', 'image/gif'],
                        'mimeTypesMessage' => 'Veuillez télécharger une image valide (JPEG, PNG, GIF).',
                    ]),
                ],
            ])
            ->add('save', SubmitType::class, [
                'label' => 'Enregistrer',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Medicament::class,
        ]);
    }
}