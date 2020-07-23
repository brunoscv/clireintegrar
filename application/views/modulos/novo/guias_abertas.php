<form id="form_pacientes" action="<?php echo current_url(); ?>" class="form-horizontal" method="post">
    <input name="id" type="hidden" id="id" class="form-control" value="<?php echo set_value("id", @$item->id) ?>" />

    <div class="row">
        <div class="">
            <div class="">
                <label class="col-sm-4" for="nome_pac">Codigo da Guia
                    <input name="nome_pac" type="text" id="nome_pac" class="form-control" value="02156484" />
                    <?php echo form_error('nome_pac'); ?>
                </label>
                
            </div>
        </div>
        <div class="">
            <div class="">
                <label class="col-sm-4" for="filiacao">Atendimentos Autorizados
                    <input name="filiacao" type="text" id="filiacao" class="form-control" value="4" />
                    <?php echo form_error('filiacao'); ?>
                </label>
                
            </div>
        </div>
        <div class="">
            <div class="">
                <label class="col-sm-4" for="email_pac">Atendimentos Realizados
                    <input name="email_pac" type="text" id="email_pac" class="form-control" value="2" />
                    <?php echo form_error('email_pac'); ?>
                </label>
                
            </div>
        </div>
    </div>
    <div class="row">
        <div class="">
            <div class="">
                <label class="col-sm-4" for="data_nasc">Data da Guia
                    <input name="data_nasc" type="text" id="data_nasc" class="form-control" value="24/11/2019" />
                    <?php echo form_error('data_nasc'); ?>
                </label>
                
            </div>
        </div>
        <div class="">
            <div class="">
                <label class="col-sm-4" for="rg">Paciente
                    <input name="rg" type="text" id="rg" class="form-control" value="Ana Clara de Santana Pinheiro Nunes" />
                    <?php echo form_error('rg'); ?>
                </label>
                
            </div>
        </div>
        <div class="">
            <div class="">
                <label class="col-sm-4" for="cpf">Profissional
                    <input name="cpf" type="text" id="cpf" class="form-control" value="Claudio Luz" />
                    <?php echo form_error('cpf'); ?>
                </label>
                
            </div>
        </div>
    </div>
    <div class="row">
        <div class="">
            <div class="">
                <label class="col-sm-3" for="carteira">Validade da Guia
                    <input name="carteira" type="text" id="carteira" class="form-control" value="30/11/2019" />
                    <?php echo form_error('carteira'); ?>
                </label>
                
            </div>
        </div>
       
    </div>
</form>