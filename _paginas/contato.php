<?=resgatamensage('avisausuario'); // tem que ser o mesmo do trataemail criamensage primeiro parametro?>

<div class="row">
    <div class="col-md-4">

        <div class="card">
            <img class="card-img-top img-responsive mt-5" src="../../public-quimera/_img/logo_navbar_001.png" alt="ALT-IMG"
                style="width:130px;height:120px;">
            <br>
            <div class="card-body">
                <p class="card-text mb-3"><strong>Leandro Marques</strong></p>
                <p class="card-text">Rua: Christian Heins</p>
                <p class="card-text">Jd.Satélite - Interlagos - Zona Sul</p>
                <p class="card-text">São Paulo - SP - Brasil - 04815-190</p>
                <p class="cart-text">(11) 9 4028-6850</p>

            </div>
        </div>

    </div>

    <div class="col-md-8">

        <form method="POST" action="funcoes/trataemail.php" role="form">

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
                <label for="mensagem">Descreva seu problema:</label>
                <textarea class="form-control" name="mensagem" id="mensagem" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-light btn-block">Enviar</button>

        </form>

    </div>

</div>