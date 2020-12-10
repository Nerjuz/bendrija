<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', null, ['label' => 'Vardas'])
            ->add('email', null, ['label' => 'Elektroninis paštas'])
            ->add('phone', null, ['label' => 'Kontaktinis telefonas'])
            ->add('houseNumber', null, ['label' => 'Namo numeris'])
            ->add('flatNumber', null, ['label' => 'Buto numeris'])
            ->add('agree', CheckboxType::class,
                  [
                      'label' => 'Patvirtinu kad suvesti duomenys yra teisingi ir sutinku gauti naujienas is DNSB "Tilžė"',
                      'constraints' => [new NotBlank()]
                  ]
            )
            ->add('Save', SubmitType::class, ['label' => 'Išsaugoti']);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(
            [
                'data_class' => User::class,
            ]
        );
    }
}
