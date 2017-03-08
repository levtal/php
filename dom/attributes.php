 <?php
 /*
 Extracting values of attributes from elements

Suppose you want to get names of all input fields on a webpage, let’s say for e.g., http://nimishprabhu.com/chrome-extension-hello-world-example.html. 
Now if you see the webpage you will notice that there is a comment 
 on the page which has input fields. 
 Please note that the comment box is a textarea element and not input element, 
 so it will not be detected. But to detect rest of the visible as well has hidden
 fields you can use following code :
 
 
 */
include('simple_html_dom.php');
 
$url = 'http://nimishprabhu.com/chrome-extension-hello-world-example.html';
 
$html = file_get_html($url);


//<div id="push"> 
echo "<b>div<br>---------</b><br>";  
foreach($html->find('div') as $div) {
 echo $div->id.'<br />';
}  

 //	<li class="cat-item cat-item-24">
echo "<b>li<br>---------</b><br>";    
foreach($html->find('li') as $li) {
 echo $li->class.'<br />';
} 
 
 //<input id="author" name="author" type="text" value="" size="30" aria-required='true' required='required' /> 
echo "<b>input<br>---------</b><br>";   
foreach($html->find('input') as $input) {
 echo $input->name.'<br />';
}

// Output for '$input->name'
// author
// email
// url
// submit
// comment_post_ID
// comment_parent
 
?>