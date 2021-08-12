<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AGILL GIT SEARCH</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</head>
<body>
    
    <div class="container">
        <h1>AGILL GIT SEARCH</h1>
        <hr width = 100%>
        <br/>
        <h2>Realize sua busca</h2>
        <br/>
        <form action="{{route('resultado')}}">
            {{-- INPUT DE BUSCA --}}
            <div class="mb-3">
              <input type="text" name="termo" class="form-control" placeholder="Digite o nome do usuário que deseja buscar">
            </div>

            {{-- BOTÃO SUBMIT  --}}
            <div class="d-grid gap-2 col-6 mx-auto">
                <button type="submit" class="btn btn-primary">Buscar</button>
            </div>
        </form>
    </div>
</body>
</html>