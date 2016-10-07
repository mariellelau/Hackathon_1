<?php

namespace LicoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LicorneType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('iDLicorne')
            ->add('nomLicorne')
            ->add('corneLicorne')
            ->add('yeuxLicorne')
            ->add('alignementLicorne')
            ->add('regimeLicorne')
            ->add('pelageLicorne')
            ->add('imageLicorne')
            ->add('Environnement')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'LicoBundle\Entity\Licorne'
        ));
    }
}
