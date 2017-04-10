<?php

namespace KitFriendBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class MemberInfoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('memberId')
        ->add('school', null, [
                'label' => '标题'
            ])
        ->add('graduate', null, [
                'label' => '标题'
            ])
        ->add('education', null, [
                'label' => '标题'
            ])
        ->add('profession', ChoiceType::class, [
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
        ->add('work')
        ->add('company')
        ->add('industry')
        ->add('job')
        ->add('marriage')
        ->add('income')
        ->add('house')
        ->add('native')
        ->add('introduction')
        ->add('belief')
        ->add('baptize')
        ->add('church')
        ->add('prayTime')
        ->add('bibleTime')
        ->add('faith')
        ->add('smoking', ChoiceType::class, [
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
        ->add('nature')
        ->add('drink', ChoiceType::class, [
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
        ->add('parent')
        ->add('cooking')
        ->add('hobby')
        ->add('special')
        ->add('habit')
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
            'data_class' => 'KitFriendBundle\Entity\MemberInfo'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'kitfriendbundle_memberinfo';
    }


}
