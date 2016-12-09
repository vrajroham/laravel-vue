<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Vue</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.2.3/css/bulma.min.css" />
	<style>
		body {
			margin-top: 40px;
		}
		.box{
			background-color: #ffffff;
		}
	</style>
</head>
<body>
	<div id="root" class="container">
	Hi
		<modal></modal>
	
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.3/vue.js"></script>
	<script>
		Vue.component('modal', {
					
					template : 
						`
						<div class="modal is-active">
	  <div class="modal-background"></div>
	  <div class="modal-content">
		<div class="box">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam fugit eum nostrum quibusdam cum, dolorum rerum a odio exercitationem odit temporibus in sed libero beatae hic. Ad commodi, ratione. Maiores!
		</div>	    
	  </div>
	  <button class="modal-close"></button>
	</div>
						`
					
				});

		new Vue({
			el : '#root'
		});
	</script>
</body>
</html>