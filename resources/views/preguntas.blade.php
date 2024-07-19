@extends('VISTA')

@section('preguntas')
    <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preguntas frecuentes</title>
    <link rel="stylesheet" href="{{asset('css/preguntas.css')}}">
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="container-faq">
                <div class="title-faq">
                    <h3>Preguntas Frecuentes</h3>
                </div>

                <div class="item-faq">
                    <div class="question">
                        <h3>¿Donde se localiza la sucursal y cuales son sus horarios <span>P</span></h3>
                        <div class="more"><i>+</i></div>
                    </div>
                    <div class="answer">
                        <p>Para más información sobre las sucursales y horarios, por favor ingresa a la sección Restaurantes nuestra página web o da clic <a href="rutaConta">aqui</a> <span>R</span></p>
                    </div>
                </div>

                <div class="item-faq">
                    <div class="question">
                        <h3>¿como puedo reportar un problema con mi pedido?<span>P</span></h3>
                        <div class="more"><i>+</i></div>
                    </div>
                    <div class="answer">
                        <p>Si realizaste tu pedido a través de nuestra aplicación, página web o call center, por favor comunícate con nuestro<a href="rutaConta">equipo de soporte</a><span>R</span></p>
                    </div>
                </div>

                <div class="item-faq">
                    <div class="question">
                        <h3>¿Que puedo hacer si mi orden es erronea?<span>P</span></h3>
                        <div class="more"><i>+</i></div>
                    </div>
                    <div class="answer">
                        <p>Lamentamos el inconveniente. Por favor comunicate con nuestro<a href="rutaConta">equipo de soporte</a> para revisar tu caso y poder ayudarte<span>R</span></p>
                    </div>
                </div>

                <div class="item-faq">
                    <div class="question">
                        <h3>¿Cuanto cuesta el envio a domicilio?<span>P</span></h3>
                        <div class="more"><i>+</i></div>
                    </div>
                    <div class="answer">
                        <p>El envio a domicilio tiene un costo de $50 y dependiendo de la distancia aumentara el precio<span>R</span></p>
                    </div>
                </div>

                <div class="item-faq">
                    <div class="question">
                        <h3>¿Qué hago si me llega el producto dañado durante el transporte?<span>P</span></h3>
                        <div class="more"><i>+</i></div>
                    </div>
                    <div class="answer">
                        <p>si el producto llega dañado o no es el que solicito, puede regresarlo o enviar una queja <a> aqui</a><span>R</span></p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="{{asset('js/preguntas.js')}}"></script>
</body>
</html>
@stop