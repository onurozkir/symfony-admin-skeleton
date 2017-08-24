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
    public function getFilters(){
        return array(
            new \Twig_SimpleFilter('md5', array($this, 'md5Filter'))
        );
    }

    public function md5Filter($value){
            return md5($value);
    }

}