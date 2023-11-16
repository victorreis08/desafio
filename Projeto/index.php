<html>
    <head>
        <title></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
      <main class="container">
         <section class="mt-5 mb-5">
            <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">NOVO LEAD</button>
         </section>
         <section class="mt-5">
       
                <?php

                require_once ("php/carLeads.php");
                
            ?>
         </section>

         <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Cadastro</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="php/cadLead.php">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <label>Nome da empresa:
                                    <input type="text" name="txt-nomeEmpresa" id="txt-nomeEmpresa" class="form-control"></label>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <label>CEP:
                                    <input type="text" name="txt-cepEmpresa" id="txt-cepEmpresa" class="form-control" onblur="pesquisacep(this.value);"
                                     onkeyup="handleZipCode(event)" maxlength="9"></label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <label>Rua:
                                    <input type="text" name="txt-ruaEmpresa" id="txt-ruaEmpresa" class="form-control" readonly></label>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <label>Bairro:
                                    <input type="text" name="txt-bairroEmpresa" id="txt-bairroEmpresa" class="form-control" readonly></label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <label>Cidade:
                                    <input type="text" name="txt-cidadeEmpresa" id="txt-cidadeEmpresa" class="form-control" readonly></label>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <label>Estado:
                                    <input type="text" name="txt-estadoEmpresa" id="txt-estadoEmpresa" class="form-control" readonly></label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <label>E-mail:
                                    <input type="email" name="txt-emailEmpresa" id="txt-emailEmpresa" class="form-control"></label>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <label>Telefone:
                                    <input type="text" name="txt-telefoneEmpresa" id="txt-telefoneEmpresa" class="form-control" onkeyup="handlePhone(event)" maxlength="15"></label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <label for="txt-statusLead">Status:</label>
                                    <select name="txt-statusLead" id="txt-statusLead" class="form-control">
                                        <option value="A">Ativo</option>
                                        <option value="I">Inativo</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <label for="txt-descricaoDetalhes">Descrição:</label>
                                    <textarea name="txt-descricaoDetalhes" id="txt-descricaoDetalhes" class="form-control"></textarea>
                                </div>
                            </div>
                      
                        <hr>
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                        </form>
                    </div>
                </div>
            </div>
         </div>
      </main>  



    <script type="application/javascript" src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
     integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    </body>
</html>