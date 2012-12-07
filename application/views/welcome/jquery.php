<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
		"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Test jQuery</title>
<script type="text/javascript">
var head = document.getElementsByTagName('head')[0];
jquery_scripts =
	 [
		'http://code.jquery.com/jquery-1.0.pack.js',
		'http://code.jquery.com/jquery-1.0.1.pack.js',
		'http://code.jquery.com/jquery-1.0.2.pack.js',
		'http://code.jquery.com/jquery-1.0.3.pack.js',
		'http://code.jquery.com/jquery-1.0.4.pack.js',
		'http://code.jquery.com/jquery-1.1.pack.js',
		'http://code.jquery.com/jquery-1.1.1.pack.js',
		'http://code.jquery.com/jquery-1.1.2.pack.js',
		/*
		'http://code.google.com/p/jqueryjs/downloads/detail?name=jquery-1.1.3.pack.js',
		'http://code.google.com/p/jqueryjs/downloads/detail?name=jquery-1.1.3.1.pack.js',
		'http://code.google.com/p/jqueryjs/downloads/detail?name=jquery-1.1.4.pack.js',
	    'http://code.google.com/p/jqueryjs/downloads/detail?name=jquery-1.2.min.js',
	    'http://code.google.com/p/jqueryjs/downloads/detail?name=jquery-1.2.1.min.js',
	    'http://code.google.com/p/jqueryjs/downloads/detail?name=jquery-1.2.2.min.js',
		'http://code.google.com/p/jqueryjs/downloads/detail?name=jquery-1.2.3.min.js',
		'http://code.google.com/p/jqueryjs/downloads/detail?name=jquery-1.2.4.min.js',
		'http://code.google.com/p/jqueryjs/downloads/detail?name=jquery-1.2.5.min.js',
		'http://code.google.com/p/jqueryjs/downloads/detail?name=jquery-1.2.6.min.js',
		'http://code.google.com/p/jqueryjs/downloads/detail?name=jquery-1.3.min.js',
		'http://code.google.com/p/jqueryjs/downloads/detail?name=jquery-1.3.1.min.js',
		'http://code.google.com/p/jqueryjs/downloads/detail?name=jquery-1.3.2.min.js',
		*/
		'http://code.jquery.com/jquery-1.4.min.js',
		'http://code.jquery.com/jquery-1.4.2.min.js',
		'http://code.jquery.com/jquery-1.4.3.min.js',
		'http://code.jquery.com/jquery-1.4.4.min.js',
		'http://code.jquery.com/jquery-1.5.min.js',
		'http://code.jquery.com/jquery-1.5.1.min.js',
		'http://code.jquery.com/jquery-1.5.2.min.js',
		'http://code.jquery.com/jquery-1.6.min.js',
		'http://code.jquery.com/jquery-1.6.1.min.js',
		'http://code.jquery.com/jquery-1.6.2.min.js',
		'http://code.jquery.com/jquery-1.6.3.min.js',
		'http://code.jquery.com/jquery-1.6.4.min.js',
		'http://code.jquery.com/jquery-1.7.min.js'
	 ];
jq_script = document.createElement('script');
jq_script.type = 'text/javascript';
jq_script.src = jquery_scripts[19];
head.appendChild(jq_script);
window.onload = function(){
	js_highlightme = document.createElement('script');
	js_highlightme.type = 'text/javascript';
	js_highlightme.src = '/project/media/highlightme.js';
	head.appendChild(js_highlightme);	
};
</script>
<script type="text/javascript">
	var counter = 0;
	function test(){
		$("#firstDiv").html('').html('<h1>fucckers' + counter + '</h1>');
		counter++;
	}
	
</script>
</head>
<body style=" overflow-y: scroll">
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
<h3>
In software, a stack overflow occurs when too much memory is used on the call stack. The call stack contains a limited amount of memory, often determined at the start of the program. The size of the call stack depends on many factors, including the programming language, machine architecture, multi-threading, and amount of available memory. When too much memory is used on the call stack the stack is said to overflow, typically resulting in a program crash.[1] This class of software bug is usually caused by one of two types of programming errors.[2]
</h3>
<h3>
In software, a stack overflow occurs when too much memory is used on the call stack. The call stack contains a limited amount of memory, often determined at the start of the program. The size of the call stack depends on many factors, including the programming language, machine architecture, multi-threading, and amount of available memory. When too much memory is used on the call stack the stack is said to overflow, typically resulting in a program crash.[1] This class of software bug is usually caused by one of two types of programming errors.[2]
</h3>
<h3>
In software, a stack overflow occurs when too much memory is used on the call stack. The call stack contains a limited amount of memory, often determined at the start of the program. The size of the call stack depends on many factors, including the programming language, machine architecture, multi-threading, and amount of available memory. When too much memory is used on the call stack the stack is said to overflow, typically resulting in a program crash.[1] This class of software bug is usually caused by one of two types of programming errors.[2]
</h3>
<h3>
In software, a stack overflow occurs when too much memory is used on the call stack. The call stack contains a limited amount of memory, often determined at the start of the program. The size of the call stack depends on many factors, including the programming language, machine architecture, multi-threading, and amount of available memory. When too much memory is used on the call stack the stack is said to overflow, typically resulting in a program crash.[1] This class of software bug is usually caused by one of two types of programming errors.[2]
</h3>

</body>
</html>