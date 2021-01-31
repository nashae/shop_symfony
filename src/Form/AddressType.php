<?php

namespace App\Form;

use App\Entity\Address;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AddressType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Quel nom souhaitez vous donner à votre adresse?',
                'attr' => [
                    'placeholder' => "Nommez votre adresse"
                ]
            ])
            ->add('firstname', TextType::class, [
                'label' => 'Votre prénom',
                'attr' => [
                    'placeholder' => "Saisissez votre prénom"
                ]
            ])
            ->add('lastname', TextType::class, [
                'label' => 'Votre nom',
                'attr' => [
                    'placeholder' => "Saisissez votre nom"
                ]
            ])
            ->add('company', TextType::class, [
                'label' => 'Votre société (facultatif)',
                'required' => false,
                'attr' => [
                    'placeholder' => "Saisissez le nom de votre entreprise"
                ]
            ])
            ->add('address', TextType::class, [
                'label' => 'Votre adresse',
                'attr' => [
                    'placeholder' => "Saisissez votre adresse"
                ]
            ])
            ->add('postal', TextType::class, [
                'label' => 'Votre code postal',
                'attr' => [
                    'placeholder' => "Saisissez votre code postal"
                ]
            ])
            ->add('city', TextType::class, [
                'label' => 'Votre ville',
                'attr' => [
                    'placeholder' => "Saisissez votre ville"
                ]
            ])
            ->add('country', CountryType::class, [
                'label' => 'Votre pays',
                'attr' => [
                    'placeholder' => "Saisissez votre pays"
                ]
            ])
            ->add('phone', TelType::class, [
                'label' => 'Votre telephone',
                'attr' => [
                    'placeholder' => "Saisissez votre numéro"
                ]
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Valider',
                'attr' => [
                    'class' => 'btn btn-block btn-success'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Address::class,
        ]);
    }
}
