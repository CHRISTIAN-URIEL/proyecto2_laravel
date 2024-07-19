@extends('VISTA')

@section('section')
<body>
    <div class="content">
        <div class="contact-wrapp">
            <div class="contact-form">
                <h3>Contactanos</h3>
                <form action="">
                    <p>
                        <label for="nombre completo">Nombre completo</label>
                        <input type="text" name="nombre copleto" id="nombre completo">
                    </p>
                    <p>
                        <label for="correo">Correo electronico</label>
                        <input type="text" name="correo" id="correo">
                    </p>
                    <p>
                        <label for="telefono">Telefono</label>
                        <input type="tel" name="telefono" id="telefono">
                    </p>
                    <p>
                        <label for="asunto">Asunto</label>
                        <input type="text" name="asunto" id="asunto">
                    </p>
                    <p>
                        <label>Mensaje</label>
                        <textarea name="mensaje" id="" cols="30" rows="10"></textarea>
                    </p>
                    <p>
                        <button type="submit">
                            enviar
                        </button>
                    </p>
                </form>
            </div>
            <div class="contact-info">
                <h4>mas informacion</h4>
                <ul>
                    <li><i class="fas fa-map-marker-alt"></i>Parque Puebla</li>
                    <li><i class="fas fa-phone"></i>+52 2225609821</li>
                    <li><i class="fas fa-envelope-open-text"></i>burguerchesee@gmail.com</li>
                </ul>
                <p>
                    Para mas informacion acerca de nuestros productos, puede visitar cada una de las redes sociales que se encuentran abajo.
                </p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.867311899065!2d-98.17410368562334!3d19.06957065713121!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cfc1a2f8d369c7%3A0x16c13b096bd48a0c!2sParque%20Puebla!5e0!3m2!1ses-419!2smx!4v1678148679495!5m2!1ses-419!2smx" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</body>

@stop
