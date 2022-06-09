<?php

namespace App\Form;

use App\Entity\Product;
//use App\Entity\Category;
use Symfony\Component\Form\AbstractType;
use App\Repository\ProductRepository;
use App\Repository\StockHistoryRepository;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

use App\EventSubscriber\EventSubscriber;


class ModifyStockType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        
            ->add('stock', null, [
                'disabled' => false,
                'label' => 'Increment/decrement stock',
                'data' => 0,
                
            ]);


    }


    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
        ]);
    }
}