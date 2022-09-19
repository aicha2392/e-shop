<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        $colors = ['black', 'white', 'blue','red','yellow', 'green'];
        $dataColors =[];
        for($i = 0; $i< count($colors); $i++){
            $color = new Color();
            $color->setName($colors[$i]);
            $dataColors[] = $color;
            $manager->persist($color);


        $prices = [29,39, 49];
        $dataPrices = [];
        for($i = 0; $i< count($prices); $i++){
            $price = new Price();
            $price->setAmount($prices[$i]);
            $dataPrices[] = $price;
            $manager->persist($price);


        $sizes = ['xs','s','m','l','xl'];
        $dataSizes = [];
        for($i = 0; $i< count($sizes); $i++){
            $size = new Size();
            $size->setName($sizes[$i]);
            $dataSizes[] = $size;
            $manager->persist($size);

        $titles = ['Dahu','Seoul','Aubrun'];
        $images = [
            'https://thumbs.dreamstime.com/b/la-mode-v%C3%AAtx-l-illustration-bleue-de-forme-de-t-shirt-8229384.jpg',
            'https://img.myloview.fr/images/illustration-unique-de-vecteur-de-dessin-anime-t-shirt-bleu-700-145918035.jpg',
            'https://previews.123rf.com/images/siberica/siberica1601/siberica160100173/51442205-t-shirt-croquis-homme-isol%C3%A9-sur-fond-blanc-vector-illustration-.jpg'
        ];
        $dataTitles = [];
        for ($i= 0; $i< count($titles);$i++){
            $title = new Reference();
            $title
                 ->setTitle($titles[$i])
                 ->setSlug(strtolower($titles[$i]))
                 ->setImage($images[$i])
                 ->setPrice($dataPrices[$i])
                 ->setDescription("Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages");

        }

        

        }
    
        $manager->flush();
    }

}
