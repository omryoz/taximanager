<?php
$form = new Appform();
if(isset($errors)) {
   $form->errors = $errors;
}
if(isset($username)) {
   $form->values['username'] = $username;
}
// set custom classes to get labels moved to bottom:
$form->error_class = 'error block';
$form->info_class = 'info block';

?>
<div id="box">
   <div class="block">
      <h1><?php echo __('login'); ?></h1>
      <div class="content">
<?php
echo $form->open('user/login');
echo '<table><tr><td style="vertical-align: top;">';
echo '<ul>';

echo '<li>'.$form->label('username', __('email.or.username')).'</li>';
echo $form->input('username', null, array('class' => 'text twothirds'));

echo '<li>'.$form->label('password', __('password'),array('style'=>'display: inline; margin-right:10px;')).
     '<small> '.Html::anchor('user/forgot', __('?forgot.password')).'<br></small>'.
     '</li>';
echo $form->password('password', null, array('class' => 'text twothirds'));


$authClass = new ReflectionClass(get_class(Auth::instance()));

//set a valid salt in useradmin config or your bootstrap.php
if( $authClass->hasMethod('auto_login') AND Cookie::$salt )
{
    echo '<li>'.Kohana_Form::checkbox('remember','remember',false,array('style'=>'margin-right: 10px','id'=>'remember')).
            $form->label('remember', __('remember.me'),array('style'=>'display: inline')).
            $form->submit(NULL, __('login'),array('style'=>'float: right;')).
        '</li>';
    echo '</ul>';
}
else
{
    echo '</ul>';
    echo $form->submit(NULL, __('login'));
}

echo $form->close();


echo '</td></tr></table>';
?>
      </div>
   </div>
</div>


