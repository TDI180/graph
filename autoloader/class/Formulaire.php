<?php
/**
 * Created by PhpStorm.
 * User: capta
 * Date: 29/04/2019
 * Time: 12:08
 */
class  form
{
    /** @param array ()  contient les données du formulaires* */
    protected   $data;
    public      $surround = 'p';

    public function __construct($data=array())
    {
        $this->data = $data;
    }

    public function affich ($index)
                                      {
                                               return  $this->data[$index];
                                      }


    /**   @param $index  string  de la valeur à recuperer
     *   return   string **/

    protected function getvalue($index)
    {

       // $this->data[$index]= (!empty($this->data[$index]))    ? $this->data[$index] : "zebi" ;
        $this->data[$index]= (isset($this->data[$index]))    ? $this->data[$index] : "" ;
                    // if ( empty ($this->data[$index]) )  { $this->data[$index]="tazz"; }
                                                                                                         //   else {$this->data[$index]="zebi";}

               return $this->data[$index];
    }

    /**   @param $html   return   string **/
    protected function surround ($html)
                                                                                               {   return "<{$this->surround}> {$html} </{$this->surround}>";

                                                                                              }/**   @param $html   return   string,code html à entourer **/

    /**   @param $name  string  contient valeur entree
     *   return   string **/
    protected function input($name)
                            {

                                   return $this->surround ( '<input type="text"  name= "'.$name.'" value = " ' . $this->getvalue($name).' ">');
                             }

    protected function submit()
    {
        return ' <button type="submit">envoie_zebi</button>' ;
    }
}