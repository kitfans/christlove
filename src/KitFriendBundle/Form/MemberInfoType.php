<?php

namespace KitFriendBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MemberInfoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('memberId')->add('school')->add('graduate')->add('education')->add('profession')->add('work')->add('company')->add('industry')->add('job')->add('marriage')->add('income')->add('house')->add('native')->add('introduction')->add('belief')->add('baptize')->add('church')->add('prayTime')->add('bibleTime')->add('faith')->add('smoking')->add('nature')->add('drink')->add('parent')->add('cooking')->add('hobby')->add('special')->add('habit')->add('createAt')->add('updateAt')        ;
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
