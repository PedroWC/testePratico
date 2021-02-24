@extends('templates.template')

@section('content')
<!-- HTML QUE VAI DENTRO DO TEMPLATE -->
    <main>
        <p>OBS: Para editar o cadastro, preencha todos os campos novamente.</p>

        <form class="form-group" action="{{ route('editar_pessoa', $id) }}" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />

            <label for="">Nome</label><br>
            <input class="form-control" 
                   type="text" 
                   name="nome" 
                   maxlength="150" 
                   placeholder="Ex: Fulano de Tal" 
                   required><br>

            <label for="">CPF</label><br>
            <input class="form-control" 
                   type="text" 
                   name="cpf" 
                   maxlength="20" 
                   oninput="mascaraCPF(this)" 
                   placeholder="Ex: 999.999.999-99" 
                   required><br>

            <label for="">Telefone</label><br>
            <input class="form-control" 
                   type="text" 
                   name="telefone" 
                   maxlength="20" 
                   oninput="mascaraTel(this)" 
                   autocomplete="off" 
                   placeholder="Ex: (67)99666-6666" 
                   required><br>

            <label for="">E-mail</label><br>
            <input class="form-control" 
                   type="email" name="email" 
                   maxlength="100" 
                   placeholder="Ex: deTalFulano@gmail.com" 
                   required><br>

            <label for="">Data de Nascimento</label><br>
            <input class="form-control" 
                   type="date" 
                   name="data_nascimento" 
                   required><br>

            <label for="">Gênero</label><br>
            <select class="form-control" name="genero" required>
                <option value="M">Masculino</option>
                <option value="F">Feminino</option>
            </select><br>

            <label for="exampleFormControlTextarea1">Seu Diferencial</label><br>
            <textarea class="form-control" 
                      name="seu_diferencial" 
                      maxlength="500" 
                      id="exampleFormControlTextarea1" 
                      rows="3" 
                      required></textarea><br>

            <button class="btn btn-primary btn-lg btn-block">Atualizar</button>
        </form>

    </main>

    {{-- Função Javascript para formatar campo de CPF enquanto está sendo digitado --}}
    <script>
      function mascara(i){
   
        var v = i.value;
        
        // impede entrar outro caractere que não seja número
        if(isNaN(v[v.length-1])){ 
            i.value = v.substring(0, v.length-1);
            return;
        }
        
        i.setAttribute("maxlength", "14");
        if (v.length == 3 || v.length == 7) i.value += ".";
        if (v.length == 11) i.value += "-";

      }
    </script>
<!-- FIM DO HTML QUE VAI DENTRO DO TEMPLATE -->
@endsection