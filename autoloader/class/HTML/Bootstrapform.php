<?php namespace zebi\HTML ;

		/**
		 * Created by PhpStorm.
		 * User: capta
		 * Date: 02/05/2019
		 * Time: 13:11
		 */

class   Bootstrapform extends  form  /* HTML C UN DOSSIER , zebi c un namespace...*/
{
    /**   @param $name  string  contient valeur entree
     *   return   string **/
    protected function surround($html)
															{
																return "<div class=\" form-group \">      <b> {$html}</b>  </div>";
															}

    public function input($name)
    {
        return $this->surround( '<label>' . $name.'</br><label> <input type="text"  name= " ' . $name. ' "  value =" ' . $this->getValue($name) . ' " class="form-control ">' );
		
    }

    public function submit()
											{
												return $this->surround('<button type="button" class="btn btn-primary">zebi</button>');
											}
}


