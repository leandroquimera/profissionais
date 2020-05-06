<?//=resgatamensage('avisausuario'); / tem que ser o mesmo do trataemail criamensage primeiro parametro?>

<div class="row">

    <div class="col-md-4 contatolms">

        <div class="card text-dark">
            <img class="card-img-top" src="app/_img/qr_code_quimera_leandro.png" alt="Logo da empresa">
            <div class="card-body">
                <p class="card-text mb-3"><strong>Leandro Marques</strong></p>
                <p class="card-text">Rua: Christian Heins</p>
                <p class="card-text">Jd.Satélite - Interlagos - Zona Sul</p>
                <p class="card-text">São Paulo - SP - Brasil - 04815-190</p>
            </div>
        </div>

    </div>

    <div class="col-md-8">

        <form method="POST" action="_paginas/_contato/trataemail.php" role="form">

            <div class="form-group">
                <label for="">Nome:</label>
                <input type="text" class="form-control" name="nome" id="" placeholder="Digite seu nome..." autofocus>
            </div>

            <div class="form-group">
                <label for="">E-mail:</label>
                <input type="email" class="form-control" name="email" id="" placeholder="Digite seu e-mail...">
            </div>
         
            <div class="form-group">
                <label for="">Assunto:</label>
                <input type="subject " class="form-control" name="assunto" id="" placeholder="Digite um assunto...">
            </div>

            <div class="form-group">
                <label for="">Prioridade: </label>
                <div class="row linhacontato bg-light text-dark">
                    <div class="col-md-2"><input type="radio" name="prioridade" id="" value="alta"><label for="alta"><strong>&nbsp;&nbsp;ALTA</strong></label></div>
                    <div class="col-md-2"><input type="radio" name="prioridade" id="" value="media"><label for="media"><strong>&nbsp;Média</strong></label></div>
                    <div class="col-md-2"><input type="radio" name="prioridade" id="" value="baixa" checked><label for="baixa"><strong>&nbsp;baixa</strong></label></div>
                </div>
            </div>

            <div class="form-group">
                <label for="mensagem">Descreva seu problema:</label>
                <textarea class="form-control" name="mensagem" id="mensagem" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-light btn-block">Enviar</button>

        </form>

    </div>

</div>