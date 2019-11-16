<?php
namespace Cats;

class HungryCat
{
    public $alias;
    public $color;
    public $favoritFood;

    public function __construct($alias, $color, $favoritFood)
    {
        $this->alias = $alias;
        $this->color = $color;
        $this->favoritFood = $favoritFood;
    }

    public function eat($food)
    {
        $strEnd = "";
        if ($food == $this->favoritFood) {
            $strEnd = " и замурчал 'мррррр' от своей любимой еды";
        }
        echo "Голодный кот " . $this->alias . " особые приметы: цвет " . $this->color . ", съел " . $food . $strEnd;
    }
}