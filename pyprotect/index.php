<!--

	pyprotecao - by Milhano
	Version 0.1alpha
	http://wr.inf.br/pyprotect/pyprotecao

	This is an open source software
	Read LICENSE file before using it

-->

<html>
	<head>
	    <!-- Tags -->
		<meta name="robots" content="index,follow">
		<meta charset="utf-8">
		<meta name="language" content="pt_BR">
		<meta http-equiv="content-language" content="pt_BR">
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<meta name="author" content="WR Informatica">
		<meta name="reply-to" content="contato@wr.inf.br">
		<meta name="rating" content="general">
		<meta name="application-name" content="pyprotecao">
		<meta name="description" content="This is a simple online tool to obfuscate python codes and &quot;hide&quot; their sources.">
		<meta name="abstract" content="Online python code obfuscator.">
		<meta name="keywords" content="pyprotecao, python, obfuscate, obfuscator, crypt, encrypt, encode, pyobfuscate, tk, hide, source, secure, code, py, protecao">
		<meta property="og:site_name" content="pyprotecao">
		<meta property="og:type" content="website">
		<meta property="og:url" content="http://wr.inf.br/pyprotect/pyprotecao">
		<meta property="og:title" content="pyprotecao">
		<meta property="og:image" content="http://wr.inf.br/pyprotect/ogicon.png">
		<meta property="og:image:type" content="image/png">
		<meta property="og:image:width" content="256">
		<meta property="og:image:height" content="256">
		<meta property="og:locale" content="pt_BR">
		<link rel="canonical" href="http://wr.inf.br/pyprotect/pyprotecao">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	    
		<title>pyprotect</title>
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="stylesheet" href="main.css">
		<script type="text/javascript">
			function showLoad(){
				document.getElementById('form').style.display = 'none';
				document.getElementById('img').style.display = 'inline';
				document.getElementById('txt').innerHTML = 'Enviando arquivo. Por favor, aguarde...'
			}
		</script>
	</head>
	<body>
		<table class="centeredContent" cellpadding="0" cellspacing="0">
			<tr>
				<td>
					<span class="title">pyprotect</span>
					<hr>
					<span id="txt" style="color: #424242;">Select a .py file to be obfuscated:</span><br>
					<img src="loading.gif" id="img" class="loader">
					<form action="process" onsubmit="showLoad();" id="form" method="post" enctype="multipart/form-data">
						<input accept=".py" type="file" required name="file"><br>
						<button>Send file</button>
					</form>
					<hr>
					<span class="copy">by Milhano<br>
					<a href="http://milhano.com.pt" target="_blank">[Website]</a>&nbsp;&nbsp;<a href="mailto:contato@wr.inf.br" target="_blank">[Contact]</a>&nbsp;&nbsp;<a href="https://github.com/Milhano/pyprotecao" target="_blank">[Source]</a></span>
				</td>
			</tr>
		</table>
	</body>
</html>
