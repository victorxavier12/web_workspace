<!-- <div class="formulario">
    <form action="" method="post" class="row g-3" class="form">
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="email" class="form-control" id="inputEmail4" name="">
        </div>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">assunto</label>
            <input type="text" class="form-control" id="" name="">
        </div>
        <div>
            <textarea name="" id="" cols="30" rows="10"></textarea>
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">ENVIAR</button>
        </div>
    </form>
</div> -->

<div class="container formulario">
    <div class="col-md-5">
        <div class="form-area">  
            <form role="form">
            <br style="clear:both">
                        <h3 style="margin-bottom: 25px; text-align: center;">Contact Form</h3>
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
                        </div>
                        <div class="form-group">
                        <textarea class="form-control" type="textarea" id="message" placeholder="Message" maxlength="140" rows="7"></textarea>
                            <span class="help-block"><p id="characterLeft" class="help-block ">You have reached the limit</p></span>                    
                        </div>
                
            <button type="button" id="submit" name="submit" class="btn btn-primary pull-right">Submit Form</button>
            </form>
        </div>
    </div>
</div>