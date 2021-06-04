<?php
/**
 * Created by PhpStorm.
 * User: capta
 * Date: 02/05/2019
 * Time: 13:11
 */

class   bootstrapform extends  form
{
    /**   @param $name  string  contient valeur entree
     *   return   string **/
    protected function surround($html)
    {
        return "<div class=\" form-group \"> {$html}</div>";
    }

    public function input($name)
    {
        return $this->surround('<label>' . $name . '<label><input type="text"  name= "' . $name . '" value = " ' . $this->getvalue($name) . ' "class="form-control ">');
    }

    public function submit()
    {
        return $this->surround('<button type="button" class="btn btn-primary">envoie_ya-zebi</button>');
    }
}


