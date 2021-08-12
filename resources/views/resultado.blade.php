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
        <h2>Resultado</h2>
        <hr width = 100%>
        <a class="btn btn-warning" href="{{route('inicial')}}">Nova Busca</a>
        <hr width = 100%>
        <p> {{$total_count}} resultado(s) encontrado(s)</p>
        <p><small>*OBS: Exibindo no máximo 30 usuários.</small></p>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col" width="80%">Login</th>
                <th scope="col">Visualizar</th>
              </tr>
            </thead>
            <tbody>
              @foreach($items as $item)
              <tr>
                <td>{{$item['id']}}</td>
                <td>{{$item['login']}}</td>
                <td><a href="{{route('perfil', ['usuario' => $item['login']])}}" class="btn btn-success">Visualizar</a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
</body>
</html>