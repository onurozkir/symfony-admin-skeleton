<?php

namespace AppBundle\Form;


use AppBundle\Entity\News;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class NewsType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('title', TextType::class, array(
            'label' => 'Title',
            'attr' => ['autofocus' => true, 'required' => true, 'class' => 'form-control', 'id' => 'newsTitle' ],
            ))
            ->add('tags', EntityType::class, array(
                'class' => 'AppBundle:Category',
                'choice_label' => 'Title',
                'multiple' => true,
                'label' => 'Categories',
                'attr' => ['class' => 'form-control tags', 'required' => true, 'id' => 'news_tag', 'style' => 'width:100%;']
            ))
            ->add('description', TextareaType::class, array(
                'label' => 'Description',
                'attr' => ['required' => true, 'class' => 'ckeditor', 'id' => 'description', 'rows' => 10, 'cols' => 80]
            ))
            ->add('seoTitle', TextType::class, array(
                'label' => 'Seo Title',
                'attr' => ['class' => 'form-control', 'id' => 'seoTitle']
            ))
            ->add('seoKeywords',TextType::class, array(
                'label' => 'Seo Keywords',
                'attr' => ['class' => 'form-control', 'id' => 'seoKeywords']
            ))
            ->add('seoDescription', TextType::class, array(
                'label' => 'Seo Description',
                'attr' => ['class' => 'form-control', 'id' => 'seoDescription']
            ))
            ->add('imageUrl', FileType::class, array(
                'data_class' => null,
                'label' => 'File Upload',
                'attr' => ['required' => true, 'class' => 'form-control', 'id'=>'file-input']
            ))
            ->add('save', SubmitType::class, array(
                'label' => 'Kaydet',
                'attr' => ['class' => 'btn btn-lg btn-primary pull-right', 'title' => 'Kaydet'],
            ));

    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => News::class,
            'csrf_protection' => true,
            'csrf_filed_name' => "news_token",
            'csrf_token_id'   => "sy_skeleton_appbundle_admin_news",
            'trim' => true,
            'required' => false,
            'allow_extra_fields' => true,
        ));
    }




}
