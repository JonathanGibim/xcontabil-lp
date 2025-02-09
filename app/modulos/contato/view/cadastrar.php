<?php if(isset($arrAdminPermissoes[$objRoute->getArrUrl(1)]['gerenciar'])){ ?>
    <div class="row col-12 mb-3">
        <a class="btn btn-outline-primary" href="<?php echo $strUrlAdminModulo."gerenciar/"; ?>"><i class="fa fa-list"></i> Gerenciar</a>
    </div>
<?php } ?>
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Cadastrar</h3>
    </div>
    <div class="col-12 mt-2">
        <?php echo $strAlertaSisitema; ?>
    </div>
    <form action="<?php echo URL_ATUAL; ?>" method="POST">
        <div class="card-body">
            <div class="form-group">
                <label for="strNome">Nome</label>
                <input type="text" maxlength="250" class="form-control" id="strNome" name="strNome" placeholder="Nome" value="<?php echo $strNome; ?>">
            </div>
            <div class="form-group">
                <label for="strEmail">E-mail</label>
                <input type="email" maxlength="250" class="form-control" id="strEmail" name="strEmail" placeholder="Email" value="<?php echo $strEmail; ?>">
            </div>
            <div class="form-group">
                <label for="strTelefone">Telefone</label>
                <input type="text" maxlength="250" class="form-control" id="strTelefone" name="strTelefone" placeholder="Telefone" value="<?php echo $strTelefone; ?>">
            </div>
            <div class="form-group">
                <label for="strAssunto">Assunto</label>
                <input type="text" maxlength="250" class="form-control" id="strAssunto" name="strAssunto" placeholder="Assunto" value="<?php echo $strAssunto; ?>">
            </div>
            <div class="form-group">
                <label for="strMensagem">Mensagem</label>
                <textarea rows="5" class="form-control" id="strMensagem" name="strMensagem" placeholder="Mensagem"><?php echo $strMensagem; ?></textarea>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary" name="submitForm" value="cadastrar">Cadastrar</button>
        </div>
    </form>
</div>