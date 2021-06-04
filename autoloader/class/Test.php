<?php
/**
 * Created by PhpStorm.
 * User: capta
 * Date: 01/05/2019
 * Time: 13:20
 */
namespace zebi;
class   test {

    private static $suffixe ="_euro";
    const  FLOUZE= "_dollar";

    public static  function  zebiwithzero($chiffre){

     return self::withzero($chiffre);
    }

private  static function withzero($chiffre){

         if ($chiffre<=9){   return '0'.$chiffre.test::FLOUZE ; }
         else
         {return $chiffre.self::FLOUZE;}
                                                                                                  }
}