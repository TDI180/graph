<?php  namespace zebi\HTML ;

class  Form
{
   protected $zboub=array("1" => "zebi_kbir_25cm",	"2" => "foo",);
   public    $surround = 'b';
   public   $data;
   
   public function __construct($data=array())
																	   {
																		   $this->data = $data;
																	   }
   protected function surround ($html)
                                                          {
															  return "<{$this->surround}> {$html} </{$this->surround}>";
	                                                       }

   protected function getValue ($index)
                        									{
		                                                        return isset ($this->data[$index] ) ? $this->data [$index]   :  null;
	                                                       
               											 	 }
protected function input($index)
							                      {
								                   // return  $this-> surround(  '<input type="text"  name= "  '.$index .'  " value = " tazzzzzzz ">');
													return '<h2><input type="text"  name= "  ' .   $index  . '  "  value = " ' . $this->getValue($index) . ' "></h2>' ;
													//  return $this->surround ('< input type="text"  name= "  ' .   $index  . '  "     value = " '. $this->data['username__' ].' "/ >' );
							                      }

   public function submit()
										   {
											  // return $this->surround ('<button type="submit">----Envoyer------------</button>'  );
										   }

	public function  verif ($index)
													{
														echo 'zebi' ;
														return $this->data[$index];
													}
}

?>

