<?php

namespace AppBundle\Form;

use AppBundle\Entity\ContactAddress;
use AppBundle\Entity\WorldCity;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactAddressType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('title', TextType::class, array(
                'label' => 'Title',
                'attr' => ['required' => true, 'class' => 'form-control', 'autofocus' => true, 'id' => 'contactAddressTitle']
            ))
            ->add('companyName', TextType::class, array(
                'label' => 'Company Name',
                'attr' => ['class' => 'form-control', 'id' => 'contactAddressCompanyName']
            ))
            ->add('address', TextType::class, array(
                'label' => 'Address',
                'attr' => ['class' => 'form-control', 'id' => 'contactAddressAddress']
            ))
            ->add('phone', NumberType::class, array(
                'label' => 'Phone Number',
                'attr' => ['class' => 'form-control col-md-4', 'id' => 'contactAddressPhone', 'required' => true]
            ))
            ->add('phoneTwo', NumberType::class, array(
                'label' => 'Phone Number [ alternative ]',
                'attr' => ['class' => 'form-control col-md-4', 'id' => 'contactAddressAlternativePhone', 'required' => false]
            ))
            ->add('fax', NumberType::class, array(
                'label' => 'Faks Number',
                'attr' => ['class' => 'form-control', 'id' => 'contactAddressFax']
            ))
            ->add('mail', EmailType::class, array(
                'label' => 'Email',
                'attr' => ['class' => 'form-control col-md-4', 'id' => 'contactAddressEmail', 'required' => true]
            ))
            ->add('cityId', EntityType::class, array(
                'class' => WorldCity::class,
                'choice_label' => 'title',
                'multiple' => false,
                'label' => 'City',
                'attr' => ['class' => 'form-control', 'id' => 'contactAddressCity', 'style' => 'width:100%;'],
                'expanded' => false,
                'empty_data' => null,

            ))
            ->add('type', ChoiceType::class, array(
                'choices' => array(
                    'Merkez' => 'Merkez',
                    'Bayi' => 'Bayi',
                    'Fabrika' => 'Fabrika',
                    'Depo' => 'Depo',
                    'Şube' => 'Şube',
                    'Tedarikçi' => 'Tedarikçi',
                    'Anlaşmalı Kurum' => 'Anlaşmalı Kurum',
                    ),

                'placeholder' => 'Tipini Seçiniz',
                'required' => true,
                'attr' => ['class' => 'form-control', 'id' => 'contactAddressType'],
                'multiple' => false,
                'label' => 'Type',
            ))
            ->add('coordinate', TextType::class, array(
                'label' => 'Coordinate',
                'attr' => ['class' => 'form-control', 'id' => 'contactAddressCoordinate']
            ))
            ->add('authPerson', TextType::class, array(
                'label' => 'Auth Person',
                'attr' => ['class' => 'form-control', 'id' => 'contactAddressAuthPerson']
            ))
            ->add('sort', NumberType::class, array(
                'label' => 'Sıralama',
                'attr' => ['class' => 'form-control', 'id' => 'contactAddressSort', 'required' => true]
            ))
            ->add(
            'save', SubmitType::class, array(
                'label' => 'Kaydet',
                'attr' => ['class' => 'btn btn-lg btn-primary pull-right', 'title' => 'Kaydet']
            ));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => ContactAddress::class,
            'csrf_protection' => true,
            'csrf_filed_name' => "news_token",
            'csrf_token_id'   => "sy_skeleton_appbundle_admin_contactAddress",
            'trim' => true,
            'required' => false,
            'allow_extra_fields' => true,
        ));
    }
}
