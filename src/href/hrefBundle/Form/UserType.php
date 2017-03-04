<?php

namespace href\hrefBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class UserType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('position',ChoiceType::class,array(
            'choices'=>array(
                'General Manager'=>'General Manager',
                'Bussines Unit Director'=>'Bussines Unit Director',
                'Field Force Manager'=>'Field Force Manager',
                'District Manager'=>'District Manager',
                'Representative'=>'Representative'
            )
    ))->add('promoLine',ChoiceType::class,array(
            'choices'=>array(
                '0'=>'Nie dotyczy',
                'Pulmo'=>'Pulmo',
                'Orto'=>'Orto',
                'GP'=>'GP',
            )
        ))->add('structure','entity',array(
            'class'=>'hrefBundle:Structure',
            'choice_label'=>'id'
        ))->add('email')->add('user_name')->add('password');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'href\hrefBundle\Entity\User'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'href_hrefbundle_user';
    }


}
