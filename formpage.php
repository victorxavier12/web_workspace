<?php
include "./php/cabecalho.php";
?>

<form action=""></form>

<div class="container formulario">
    <div class="col-md-5">
        <div class="form-area">  
            <form role="form" action="post">
            <br style="clear:both">
                        <h3 style="margin-bottom: 25px; text-align: center; color: white;">Contact Form</h3>
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Nome" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-control" id="mobile" name="mobile" placeholder="Telemovel no formato: 123 456 789" pattern="[0-9]{3} [0-9]{3} [0-9]{3}" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Assunto" required>
                        </div>
                        <div class="form-group">
                        <textarea class="form-control" type="textarea" id="message" placeholder="Mensagem" maxlength="140" rows="7"></textarea>                  
                        </div>
                        <input type="submit" class="enviar" value="submeter">
            </form>
        </div>
    </div>
</div>
    
<footer>
        <div class="footer footer2">
            <p>
                copyright &COPY; 2023 victor xavier 
            </p>

        </div>
    </footer>
</body>
</html>