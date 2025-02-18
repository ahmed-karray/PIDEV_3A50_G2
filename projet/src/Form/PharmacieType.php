<?php
namespace App\Form;

use App\Entity\Pharmacie;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\EmailType; // For email validation
use Symfony\Component\Form\Extension\Core\Type\ChoiceType; // Add this

use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\Regex;

class PharmacieType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', null, [
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
            ->add('adresse', null, [
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
            ->add('email', EmailType::class, [ // Use EmailType for email validation
                'constraints' => [
                    new NotBlank(['message' => 'L\'email est obligatoire.']),
                ],
            ])
            ->add('tel', null, [
                'constraints' => [
                    new NotBlank(['message' => 'Le numéro de téléphone est obligatoire.']),
                    new Regex([
                        'pattern' => '/^[0-9]{8}$/', // Example: 8-digit phone number
                        'message' => 'Le numéro de téléphone doit contenir exactement 8 chiffres.',
                    ]),
                ],
            ])
            ->add('categorie', null, [
                'constraints' => [
                    new NotBlank(['message' => 'La catégorie est obligatoire.']),
                    new Length([
                        'min' => 2,
                        'max' => 100,
                        'minMessage' => 'La catégorie doit contenir au moins {{ limit }} caractères.',
                        'maxMessage' => 'La catégorie ne peut pas dépasser {{ limit }} caractères.',
                    ]),
                ],
            ])
            ->add('logo', FileType::class, [
                'label' => 'Logo (Image File)',
                'mapped' => false, // Important! Not mapped directly to the entity
                'required' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '2M',
                        'mimeTypes' => ['image/jpeg', 'image/png', 'image/webp'],
                        'mimeTypesMessage' => 'Veuillez télécharger un fichier image valide (JPEG, PNG, WEBP).',
                    ]),
                ],
            ])
            ->add('ville', null, [
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
                'label' => 'Enregistrer', // Customize the submit button label
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Pharmacie::class,
        ]);
    }
}