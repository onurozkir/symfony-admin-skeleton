<?php

namespace AppBundle\Form;


use AppBundle\Entity\Category;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CategoryType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('title', TextType::class, array(
            'label' => 'Title',
            'attr' => ['required' => true, 'class' => 'form-control', 'autofocus' => true, 'id' => 'categoryTitle' ]
        ))
            ->add('sort', TextType::class, array(
                'label' => 'Sort',
                'attr' => ['reuqired' => true, 'class' => 'form-control', 'type' => 'number', 'id' => 'categorySort']
            ))
            ->add('save', SubmitType::class, array(
                'label' => 'Kaydet',
                'attr' => ["class" => 'btn btn-lg btn-success pull-right', "title" => "Kaydet"]
            ));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Category::class,
            'csrf_protection' => true,
            'csrf_filed_name' => "news_token",
            'csrf_token_id'   => "sy_skeleton_appbundle_admin_category",
            'trim' => true,
        ));
    }


}
