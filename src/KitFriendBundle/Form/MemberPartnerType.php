<?php

namespace KitFriendBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class MemberPartnerType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('memberId')
        ->add('belief', null, [
                'label' => '标题'
            ])
        ->add('age', null, [
                'label' => '标题'
            ])
        ->add('mariage', null, [
                'label' => '标题'
            ])
        ->add('income', ChoiceType::class, [
                'choices' => [
                    '普通文章' => 0,
                    '头条新闻' => 1,
                    '焦点新闻' => 2,
                    '图文推荐' => 3,
                    '普通推荐' => 4,
                    '图片新闻' => 5
                ],
                'label' => '文章级别',
                'data' => 0,
                'label_attr' => [
                    'class' => 'radio-inline'
                ]
            ])
        ->add('house', ChoiceType::class, [
                'choices' => [
                    '普通文章' => 0,
                    '头条新闻' => 1,
                    '焦点新闻' => 2,
                    '图文推荐' => 3,
                    '普通推荐' => 4,
                    '图片新闻' => 5
                ],
                'label' => '文章级别',
                'data' => 0,
                'label_attr' => [
                    'class' => 'radio-inline'
                ]
            ])
        ->add('height', ChoiceType::class, [
                'choices' => [
                    '普通文章' => 0,
                    '头条新闻' => 1,
                    '焦点新闻' => 2,
                    '图文推荐' => 3,
                    '普通推荐' => 4,
                    '图片新闻' => 5
                ],
                'label' => '文章级别',
                'data' => 0,
                'label_attr' => [
                    'class' => 'radio-inline'
                ]
            ])
        ->add('weight')
        ->add('native', null, [
                'label' => '标题'
            ])
        ->add('city', null, [
                'label' => '标题'
            ])
        ->add('submit', SubmitType::class, [
                'label' => '提交'
            ]);
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'KitFriendBundle\Entity\MemberPartner'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'kitfriendbundle_memberpartner';
    }


}
