<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<style>
		#alerta1 {
            display: none;
            width: 200px;
            height: 200px;
            background-color: green;
            position: absolute;
            top: 50%;
            left:  50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }

        p.mensagem {
            position: relative;
            top: 50%;
            transform: translateY(-50%);
        }
	</style>
</head>
<body>
    <div id="container">
        <div id="alerta">
            <div id="alerta1">
                <p class="mensagem"></p>
            </div>
        </div>
    </div>
    <script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
	<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript">
        
        function alertBox(message) {
            $('p.mensagem').append(message);
            $('#alerta1').fadeIn('slow', ()=>{
                setTimeout(()=>{
                    limpaBox()
                }, 10000);
            });
        }

        function limpaBox(){
            $('p.mensagem').empty();
            $('#alerta1').fadeOut();
        }

        Echo.channel('output-react-alert')
            .listen('NewReact', (e)=>{
                console.log(e.message);
                alertBox(e.message);
            });
    </script>
</body>
</html>