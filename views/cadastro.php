   <h3>Bem Vindo ao Processo Seletivo Simplificado do Municipio de Teófilo Otoni.</h3>
   <h4>Efetue o cadastro a inscrição:</h4>
   <form method="post" action="inc/cadastro.php">

    <div class="form-group">
     <div class="input-group">
      <div class="input-group-addon">Dados Pessoais:</div>
     </div>
    </div>

    <div class="form-group">
     <label class="sr-only" for="nome">Nome</label>
     <div class="input-group">
      <div class="input-group-addon">Nome</div>
      <input type="text" class="form-control" id="nome" name="nome" />
     </div>
    </div>

    <div class="form-group">
     <label class="sr-only" for="mae">Mãe</label>
     <div class="input-group">
      <div class="input-group-addon">Mãe</div>
      <input type="text" class="form-control" id="mae" name="mae" />
     </div>
    </div>

    <div class="form-group">
     <label class="sr-only" for="pai">Pai</label>
     <div class="input-group">
      <div class="input-group-addon">Pai</div>
      <input type="text" class="form-control" id="pai" name="pai" />
     </div>
    </div>

    <div class="form-group">
     <label class="sr-only" for="cpf">CPF</label>
     <div class="input-group">
      <div class="input-group-addon">CPF</div>
      <input type="text" class="form-control" id="cpf" name="cpf" placeholder="00000000000" size="12" maxlength="11" onblur="return verificarCPF(this.value)"/>
     </div>
    </div>

    <div class="form-group">
     <label class="sr-only" for="rg">RG</label>
     <div class="input-group">
      <div class="input-group-addon">RG</div>
      <input type="text" class="form-control" id="rg" name="rg" />
     </div>
    </div>

    <div class="form-group">
     <label class="sr-only" for="datanasc">Nascimento</label>
     <div class="input-group">
      <div class="input-group-addon">Nascimento</div>
      <input type="text" class="form-control" id="datanasc" name="datanasc" required onkeyup=dataConta(this) minlength="10" maxlength="10"/>
     </div>
    </div>

    <div class="form-group">
     <label class="sr-only" for="sexo">Sexo</label>
     <div class="input-group">
      <div class="input-group-addon">Sexo</div>
      <select name="sexo" id="sexo" class="form-control">
       <option value="">Escolha</option>
       <option value="F">Feminino</option>
       <option value="M">Masculino</option>
       <option value="O">Outro(a)</option>
      </select>
     </div>
    </div>

    <div class="form-group">
     <div class="input-group">
      <div class="input-group-addon">Contato:</div>
     </div>
    </div>

    <div class="form-group">
     <label class="sr-only" for="rua">Rua</label>
     <div class="input-group">
      <div class="input-group-addon">Rua</div>
      <input type="text" class="form-control" id="rua" name="rua" />
     </div>
    </div>

    <div class="form-group">
     <label class="sr-only" for="numero">Número</label>
     <div class="input-group">
      <div class="input-group-addon">Número</div>
      <input type="text" class="form-control" id="numero" name="numero" />
     </div>
    </div>

    <div class="form-group">
     <label class="sr-only" for="complemento">Complemento</label>
     <div class="input-group">
      <div class="input-group-addon">Complemento</div>
      <input type="text" class="form-control" id="complemento" name="complemento" />
     </div>
    </div>

    <div class="form-group">
     <label class="sr-only" for="Bairro">Bairro</label>
     <div class="input-group">
      <div class="input-group-addon">Bairro</div>
      <input type="text" class="form-control" id="bairro" name="bairro" />
     </div>
    </div>

    <div class="form-group">
     <label class="sr-only" for="cidade">Cidade</label>
     <div class="input-group">
      <div class="input-group-addon">Cidade</div>
      <input type="text" class="form-control" id="cidade" name="cidade" />
     </div>
    </div>

    <div class="form-group">
     <label class="sr-only" for="uf">Estado</label>
     <div class="input-group">
      <div class="input-group-addon">Estado</div>
      <select name="uf" id="uf" class="form-control">
       <option value="">Escolha...</option>
       <option value="AC">Acre</option>
       <option value="AL">Alagoas</option>
       <option value="AP">Amapá</option>
       <option value="AM">Amazonas</option>
       <option value="BA">Bahia</option>
       <option value="CE">Ceará</option>
       <option value="DF">Distrito Federal</option>
       <option value="ES">Espirito Santo</option>
       <option value="GO">Goiás</option>
       <option value="MA">Maranhão</option>
       <option value="MS">Mato Grosso do Sul</option>
       <option value="MT">Mato Grosso</option>
       <option value="MG">Minas Gerais</option>
       <option value="PA">Pará</option>
       <option value="PB">Paraíba</option>
       <option value="PR">Paraná</option>
       <option value="PE">Pernambuco</option>
       <option value="PI">Piauí</option>
       <option value="RJ">Rio de Janeiro</option>
       <option value="RN">Rio Grande do Norte</option>
       <option value="RS">Rio Grande do Sul</option>
       <option value="RO">Rondônia</option>
       <option value="RR">Roraima</option>
       <option value="SC">Santa Catarina</option>
       <option value="SP">São Paulo</option>
       <option value="SE">Sergipe</option>
       <option value="TO">Tocantins</option>
      </select>
     </div>
    </div>

    <div class="form-group">
     <label class="sr-only" for="email">E-mail</label>
     <div class="input-group">
      <div class="input-group-addon">E-mail</div>
      <input type="email" class="form-control" id="email" name="email" />
     </div>
    </div>

    <div class="form-group">
     <div class="input-group">
      <div class="input-group-addon">Acesso:</div>
     </div>
    </div>

    <div class="form-group">
     <label class="sr-only" for="senha">Senha</label>
     <div class="input-group">
      <div class="input-group-addon">Senha</div>
      <input type="password" class="form-control" id="senha" name="senha" />
     </div>
    </div>

    <div class="form-group">
     <label class="sr-only" for="confirmar">Confirmar</label>
     <div class="input-group">
      <div class="input-group-addon">Confirmar</div>
      <input type="password" class="form-control" id="confirmar" name="confirmar" />
     </div>
    </div>

    <div class="form-group">
     <input type="submit" class="btn btn-primary" value="Enviar" onclick="if(validaCadastro()) submit(); else return false " onsubmit="if(validaCadastro()) submit(); else return false " />
    </div>

   </form>
