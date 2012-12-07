<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
		"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Test Prototype</title>
<script type="text/javascript">
var head = document.getElementsByTagName('head')[0];
prototype_scripts =
	 [
		'https://ajax.googleapis.com/ajax/libs/prototype/1.7.0.0/prototype.js',
		'http://prototypejs.org/assets/2009/8/31/prototype.js',
		'http://www.prototypejs.org/assets/2008/9/29/prototype-1.6.0.3.js',
		'http://www.prototypejs.org/assets/2008/1/25/prototype-1.6.0.2.js',
		'http://www.prototypejs.org/assets/2007/11/6/prototype.js',
		'http://www.prototypejs.org/assets/2008/1/25/prototype-1.5.1.2.js',
		'http://www.prototypejs.org/assets/2007/6/20/prototype.js',
		'http://www.prototypejs.org/assets/2007/5/1/prototype.js',
		'http://www.prototypejs.org/assets/2007/1/18/prototype.js'
	 ];
proto_script = document.createElement('script');
proto_script.type = 'text/javascript';
proto_script.src = prototype_scripts[0];
head.appendChild(proto_script);
window.onload = function(){
	js_highlightme = document.createElement('script');
	js_highlightme.type = 'text/javascript';
	js_highlightme.src = '/project/media/highlightme.js';
	head.appendChild(js_highlightme);	
};
</script>
<script type="text/javascript">
   function test(){
       node = $("firstDiv");
       alert(node.innerHTML);
   }
</script>

</head>

<body>
   <div id="firstDiv">
      <p>This is first paragraph</p>
   </div>
   <div id="secondDiv">

      <p>This is another paragraph</p>
   </div>

<input type="button" value="Test $()" onclick="test();"/>
<h3>
In software, a stack overflow occurs when too much memory is used on the call stack. The call stack contains a limited amount of memory, often determined at the start of the program. The size of the call stack depends on many factors, including the programming language, machine architecture, multi-threading, and amount of available memory. When too much memory is used on the call stack the stack is said to overflow, typically resulting in a program crash.[1] This class of software bug is usually caused by one of two types of programming errors.[2]
</h3>
<a class="proto_link"></a>
</body>
</html>