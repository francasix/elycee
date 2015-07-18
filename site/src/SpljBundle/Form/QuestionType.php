<?php

namespace SpljBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class QuestionType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
        for ($i=0; $i < $options['nbQuestion']; $i++) {
            echo 'test';
        }
        $builder->add('question','textarea')
                //->add('id_qcm','hidden')
                ->add('answer1', new AnswerType())
                ->add('answer2', new AnswerType())
                ->add('answer3', new AnswerType());
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SpljBundle\Entity\Question',
            'nbQuestion' => null
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'question';
    }
}
