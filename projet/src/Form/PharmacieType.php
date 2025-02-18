<?php
namespace App\Form;

use App\Entity\Pharmacie;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\Regex;

class PharmacieType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'required' => true,
                'empty_data' => '', // Empêche la valeur null
                'constraints' => [
                    new NotBlank(['message' => 'Le nom de la pharmacie est obligatoire.']),
                    new Length([
                        'min' => 2,
                        'max' => 255,
                        'minMessage' => 'Le nom doit contenir au moins {{ limit }} caractères.',
                        'maxMessage' => 'Le nom ne peut pas dépasser {{ limit }} caractères.',
                    ]),
                ],
            ])
            ->add('adresse', TextType::class, [
                'required' => true,
                'empty_data' => '',
                'constraints' => [
                    new NotBlank(['message' => 'L\'adresse est obligatoire.']),
                    new Length([
                        'min' => 5,
                        'max' => 255,
                        'minMessage' => 'L\'adresse doit contenir au moins {{ limit }} caractères.',
                        'maxMessage' => 'L\'adresse ne peut pas dépasser {{ limit }} caractères.',
                    ]),
                ],
            ])
            ->add('email', EmailType::class, [
                'required' => true,
                'empty_data' => '',
                'constraints' => [
                    new NotBlank(['message' => 'L\'email est obligatoire.']),
                ],
            ])
            ->add('tel', TextType::class, [
                'required' => true,
                'empty_data' => '',
                'constraints' => [
                    new NotBlank(['message' => 'Le numéro de téléphone est obligatoire.']),
                    new Regex([
                        'pattern' => '/^[0-9]{8}$/',
                        'message' => 'Le numéro de téléphone doit contenir exactement 8 chiffres.',
                    ]),
                ],
            ])
            ->add('type', ChoiceType::class, [
                'choices' => [
                    'Pharmacie de ville' => 'ville',
                    'Pharmacie hospitalière' => 'hopital',
                ],
                'placeholder' => 'Sélectionnez un type',
                'required' => true,
                'empty_data' => 'ville', // ⚡ Définit une valeur par défaut
                'constraints' => [
                    new NotBlank(['message' => 'Le type de pharmacie est obligatoire.']),
                ],
            ])
            
            ->add('logo', FileType::class, [
                'label' => 'Logo (Image File)',
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '2M',
                        'mimeTypes' => ['image/jpeg', 'image/png', 'image/webp'],
                        'mimeTypesMessage' => 'Veuillez télécharger une image valide (JPEG, PNG, WEBP).',
                    ]),
                ],
            ])
            ->add('ville', TextType::class, [
                'required' => true,
                'empty_data' => '',
                'constraints' => [
                    new NotBlank(['message' => 'La ville est obligatoire.']),
                    new Length([
                        'min' => 2,
                        'max' => 100,
                        'minMessage' => 'La ville doit contenir au moins {{ limit }} caractères.',
                        'maxMessage' => 'La ville ne peut pas dépasser {{ limit }} caractères.',
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
            'data_class' => Pharmacie::class,
        ]);
    }
}
