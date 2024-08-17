<!DOCTYPE html>
<html lang="en">

<?php include 'head.php'; ?>

<body id="page-top">
    <div id="wrapper">
        <!-- Sidebar -->
        <?php include 'sidebar.php'; ?>
        <!-- Sidebar -->
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <!-- TopBar -->
                <?php include 'topbar.php'; ?>
                <!-- Topbar -->
                <!-- Container Fluid-->
                <div class="container-fluid" id="container-wrapper">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Cadastro de Alunos</h1>
                    </div>
                <!--cadastro de Alunos -->
                    <div class="content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card card-user">
                                    <div class="card-header">
                                        <h5 class="card-title">Cadastro de Alunos</h5>
                                    </div>
                                    <div class="card-body">
                                        <form action="<%=request.getContextPath()%>/ServletAluno"
                                            method="post" id="formAluno">

                                            <input type="hidden" name="acao" id="acao" value="">

                                            <div class="row">
                                                <div class="col-md-5 pr-1">
                                                    <div class="form-group">
                                                        <label>ID</label> <input type="text" id="idAluno" name="idAluno" class="form-control"
                                                            disabled="" readonly="readonly"
                                                            >
                                                    </div>
                                                </div>
                                                <div class="col-md-3 px-1">
                                                    <div class="form-group">
                                                        <label>Nome</label> <input type="text"
                                                            class="form-control" placeholder="name" name="nome"
                                                            id="nome" >
                                                    </div>
                                                </div>
                                                <div class="col-md-4 pl-1">
                                                    <div class="form-group">
                                                        <label for="telefone">Telefone</label> <input type="text"
                                                            class="form-control" placeholder="telefone"
                                                            name="telefone" id="telefone">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 pr-1">
                                                    <div class="form-group">
                                                        <label>CPF</label> <input type="text" class="form-control"
                                                            placeholder="cpf" name="cpf" id="cpf"
                                                            >
                                                    </div>
                                                </div>
                                                <div class="col-md-6 pl-1">
                                                    <div class="form-group">
                                                        <label>Cep</label> <input type="text" class="form-control"
                                                            placeholder="cep" name="cep" id="cep"
                                                            onblur="pesquisaCep();" >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 pr-1">
                                                    <div class="form-group">
                                                        <label>Logradouro</label> <input type="text"
                                                            class="form-control" placeholder="logradouro"
                                                            name="logradouro" id="logradouro"
                                                            >
                                                    </div>
                                                </div>
                                                <div class="col-md-6 pl-1">
                                                    <div class="form-group">
                                                        <label>Número</label> <input type="text"
                                                            class="form-control" placeholder="numero" name="numero"
                                                            id="numero" >
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-md-4 pr-1">
                                                    <div class="form-group">
                                                        <label>Bairro</label> <input type="text"
                                                            class="form-control" placeholder="bairro" name="bairro"
                                                            id="bairro" >
                                                    </div>
                                                </div>
                                                <div class="col-md-4 px-1">
                                                    <div class="form-group">
                                                        <label>Cidade</label> <input type="text"
                                                            class="form-control" placeholder="cidade" name="cidade"
                                                            id="cidade" >
                                                    </div>
                                                </div>
                                                <div class="col-md-4 pl-1">
                                                    <div class="form-group">
                                                        <label>UF</label> <input type="text" class="form-control"
                                                            placeholder="uf" name="uf" id="uf"
                                                            >
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="update ml-auto mr-auto">
                                                    <button type="submit" class="btn btn-primary btn-round"
                                                        onclick="mostrarAlerta()">Cadastrar</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--cadastro de Alunos -->
                    <br />
                    <!---Container Fluid-->
                </div>
                <!-- Footer -->
                <!-- Footer -->
            </div>
        </div>
        <!-- Scroll to top -->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>
        <?php include 'script.php'; ?>
</body>

</html>