<?php 
 /*
 lesson 27
  https://www.youtube.com/watch?v=ofVDm7XgC-g&list=PLFgUdubu2ofjuWm14mwzddzKTo5gqYvB3&index=29
 Template class
 create a template/view object
 Example of using 
  $template = new Template('templates/frontpage.php');
 
 
 
 */

 class Template{
	//Path to template/view
	protected $template;
	//Varibales passed in
	protected $vars = array();
	 
	public function __construct($template){
		$this->template = $template;
	} 
	 
	public function __get($key) {
		return $this->vars[$key];
	}
	
	public function __set($key,$value) {
		  $this->vars[$key] =  $value;
	}
	 
	public function __toString() {
		extract($this->vars);
	    chdir(dirname($this->template)); 
		ob_start();
		// turn output buffering on. No output is sent from the script (other than headers), 
		//instead the output is stored in an internal buffer.
        //Contents of this internal bufferis copied into a string using ob_get_contents().

       //  use ob_end_flush(). Alternatively, ob_end_clean() 
      // will silently discard the buffer contents. 
		include basename($this->template);
	// echo  basename("/etc/sudoers.d").PHP_EOL;  result sudoers.d
		
		return ob_get_clean();//Get current buffer contents and delete current output buffer
	}
		
 }	
 
 ?>  

