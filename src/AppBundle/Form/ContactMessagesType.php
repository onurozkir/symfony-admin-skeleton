<?php
namespace AppBundle\Form;
use AppBundle\Entity\ContactMessages;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
class ContactMessagesType extends AbstractType
{
    /** {@inheritdoc}  */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nameSurname', TextType::class, array(
            'label' => 'Name Surname',
            'attr' => ['class' => 'form-control', 'id' => 'contactMessageNameSurname', 'required' => true, 'autofocus' => true]
        ))
            ->add('email', EmailType::class, array(
                'label' => 'E-mail',
                'attr' => ['class' => 'form-control', 'id' => 'contactMessageEmail', 'required' => true]
            ))
            ->add('phone', NumberType::class, array(
                'label' => 'Phone Number',
                'attr' => ['class' => 'form-control', 'id' => 'contactMessagePhoneNumber']
            ))
            ->add('address', TextType::class, array(
                'label' => 'Address',
                'attr' => ['class' => 'form-control', 'id' => 'contactMessageAddress']
            ))
            ->add('messageTitle', ChoiceType::class, array(
                'label' => 'Message Title',
                'choices' => array(
                    'General' => 'General',
                    'Complaint' => 'Complaint',
                    'Claim' => 'Claim',
                    'Opinion' => 'Opinion'
                ),
                'placeholder' => 'Message Title Choosen...',
                'multiple' => false,
                'attr' => ['class' => 'form-control', 'id' => 'contactMessageMessageTitle', 'required' => true]
            ))
            ->add('message', TextareaType::class, array(
                'label' => 'Message',
                'attr' => ['class' => 'form-control', 'id' => 'contactMessageMessage', 'required' => true, 'rows' => 10, 'cols' => 80]
            ))
            ->add('attachment', FileType::class, array(
                'data_class' => null,
                'label' => 'Attachment',
                'attr' => ['class' => 'form-control', 'id' => 'contactMessageAttachment']
            ))
            ->add('save', SubmitType::class, array(
                'label' => 'Save',
                'attr' => ['class' => 'btn btn-lg btn-primary pull-right', 'title' => 'Save']
            ));
    }
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => ContactMessages::class,
            'csrf_protection' => true,
            'csrf_filed_name' => "news_token",
            'csrf_token_id'   => "sy_skeleton_appbundle_admin_news",
            'trim' => true,
            'required' => false,
            'allow_extra_fields' => true,
        ));
    }
}
