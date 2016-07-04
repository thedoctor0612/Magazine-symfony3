<?php

namespace Mayssoun\MagazineBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArticleType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('code')
            ->add('date', 'date')
            ->add('field', array(
                "class"=>"Mayssoun\MagazineBundle\Entity\Field",
                "property"=>"name"))
            ->add('blogger', array(
                "class"=>"Mayssoun\MagazineBundle\Entity\Blogger",
                "property"=>"code"))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Mayssoun\MagazineBundle\Entity\Article'
        ));
    }
}
