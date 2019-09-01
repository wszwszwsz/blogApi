<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserLoginType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('password')
            ->add('name')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}

//
//->add('title', TextType::class, [
//    'label' => 'Tytuł',
//])
//    ->add('content', TextareaType::class, [
//        'label' => 'Treść',
//        'attr' => [
//            'placeholder' => 'Tu wpisz tekst posta'
//        ]
//    ])
//    ->add('submit', SubmitType::class)
//;
