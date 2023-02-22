<?php

namespace App\Form;

use App\Entity\Product;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class, [
                'required'=>false,
                'attr'=>[
                    'placeholder'=>'Saisissez le nom du produit',
                    // 'class'=>'bg-warning'
                ],
                'label'=>'Nom du produit'
            ])
            ->add('price', NumberType::class, [
                'required'=>false,
                'attr'=>[
                    'placeholder'=>'Saisissez le prix'
                ],
                'label'=>'Prix'
            ])
            ->add('description', TextareaType::class, [
                'required'=>false,
                'attr'=>[
                    'placeholder'=>'Saisissez une description du produit'
                ],
                'label'=>'Description du produit'
            ])
            ->add('picture', FileType::class, [
                'required'=>false,
                'attr'=>[
                    'placeholder'=>'Telechargez une image du produit'
                ],
                'label'=>'Photo du produit',
                'constraints'=>[
                    new File([
                        'mimeTypes'=>[
                            "image/png",
                            "image/jpg",
                            "image/jpeg",
                            "image/webp",
                            "image/gif"
                        ],
                        'mimeTypesMessage'=>"Extensions autorisees: png, jpg, jpeg, webp et gif"
                    ])
                ]
            ])
            ->add('Enregistrer', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
        ]);
    }
}
