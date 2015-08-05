<?php

namespace Idestru\MMCrmBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ClientOrderType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName')
            ->add('lastName')
            ->add('phoneNumber')
            ->add('material')
            ->add('variant')
            ->add('tasks')
            ->add('doneAt')
            ->add('createdAt')
            ->add('price')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Idestru\MMCrmBundle\Entity\ClientOrder'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'idestru_mmcrmbundle_clientorder';
    }
}
