<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class UserRegisterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Imie',
            ])
            ->add('last_name', TextType::class, [
                'label' => 'Nazwisko',
            ])
            ->add('email', EmailType::class, [
                'label' => 'email',
            ] )
            ->add('password', RepeatedType::class, array(
                'type' => PasswordType::class, [
                    'label' => 'Haslo',
                ] ) )
                // 'first_options'  => array('label' => 'Password'),
                // 'second_options' => array('label' => 'Repeat Password'),   ->add('password', RepeatedType::class, array(
                //                'type' => PasswordType::class,
                //                // 'first_options'  => array('label' => 'Password'),
                //                // 'second_options' => array('label' => 'Repeat Password'),

            ->add('submit', SubmitType::class)
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
