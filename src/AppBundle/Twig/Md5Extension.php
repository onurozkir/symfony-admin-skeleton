<?php
/**
 * Created by PhpStorm.
 * User: onurozkir
 * Date: 8/11/17
 * Time: 5:27 PM
 */

namespace AppBundle\Twig;


class Md5Extension extends \Twig_Extension
{
    /**
     * Komutun twig sayfasında nasıl kullanacağını belirler
     *
     * example {{ 50|md5 }}
     */
    public function getFilters(){
        return array(
            new \Twig_SimpleFilter('md5', array($this, 'md5Filter'))
        );
    }

    /**
     * Tanımlanan fonksiyonun ne yapacağını belirlenir.
     *
     * $value olarak verilen değerin md5 i ni al...
     */
    public function md5Filter($value){
            return md5($value);
    }

}