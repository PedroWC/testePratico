@extends('templates.template')

@section('content')
<!-- HTML QUE VAI DENTRO DO TEMPLATE -->
    <main>
        <form class="form-group" action="{{ route('cadastrar_pessoa') }}" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />

            <label for="">Nome</label><br>
            <input class="form-control" type="text" name="nome" maxlength="150" placeholder="Ex: Fulano de Tal" required><br>

            <label for="">CPF</label><br>
            <input class="form-control" type="text" name="cpf" maxlength="20" oninput="mascaraCPF(this)" pattern="\d{3}\.\d{3}\.\d{3}\-\d{2}" title="Digite um CPF no formato: xxx.xxx.xxx-xx" required><br>

            <label for="">Telefone</label><br>
            <input class="form-control" type="text" name="telefone" maxlength="20" oninput="mascaraTel(this)" pattern="\(\d{2}\)\d{5}\-\d{4}" autocomplete="off" title="Digite um número no formato: (12)12345-1234" required><br>

            <label for="">E-mail</label><br>
            <input class="form-control" type="email" name="email" maxlength="100" placeholder="Ex: deTalFulano@gmail.com" required><br>

            <label for="">Data de Nascimento</label><br>
            <input class="form-control" pattern="\d{2}\.\d{2}\.\d{4}" oninput="mascaraData(this)" title="Digite uma data no formato: DD.MM.AAA" type="text" name="data_nascimento" required><br>

            <label for="">Gênero</label><br>
            <select class="form-control" name="genero" required>
                <option value="M">Masculino</option>
                <option value="F">Feminino</option>
            </select><br>

            <label for="exampleFormControlTextarea1">Seu Diferencial</label><br>
            <textarea class="form-control" name="seu_diferencial" maxlength="500" id="exampleFormControlTextarea1" rows="3" required></textarea><br>

            <button class="btn btn-primary btn-lg btn-block">Salvar</button>
        </form>

        
    </main>
<!-- FIM DO HTML QUE VAI DENTRO DO TEMPLATE -->
@endsection