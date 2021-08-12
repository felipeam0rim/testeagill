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
        <h1>{{$usuario['login']}}</h1>
        <hr width = 100%>
        <a class="btn btn-warning" href="{{route('inicial')}}">Nova Busca</a>
        <hr width = 100%>
        <h2>Avatar <br/><img src="{{$usuario['avatar_url']}}" /></h2>
        <br/>
        <h2>Biografia {{$usuario['bio']}}</h2>
        <h2>Email {{$usuario['email']}}</h2>
        <h2>Seguidores {{$usuario['followers']}}</h2>
        <h2>Seguindo {{$usuario['following']}}</h2>
        <br/>
        <h2>Repositórios</h2>
        @foreach($repositorios as $repositorio)
        {{-- TABELA --}}
          <hr/>
          <p>Name: {{$repositorio['name']}}</p>
          <p>Link: <a href = "github.com/{{$repositorio['full_name']}}">{{$repositorio['full_name']}}</a></p>
        @endforeach
  
    </div>
</body>
</html>