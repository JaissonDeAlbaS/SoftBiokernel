<!DOCTYPE html>
<html lang="en">
<head>
  <title>Administrador</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/app.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="shortcut icon" href="hospital.png">
</head>
<body>
    <div class="sidebar-container">
      <div class="sidebar-logo">Administrador</div>
      <ul class="sidebar-navigation">
        <li></li>
        <li>
          <a href="/admin">
            <i class="fa fa-home" aria-hidden="true"></i>Agregar Hospital
          </a>
        </li>
        <li></li>
        <li>
          <a href="/admin_doctores">
            <i class="fa fa-tachometer" aria-hidden="true"></i>Agregar Doctor
          </a>
        </li>
        <li></li>
        <li>
          <a href="/admin_pacientes">
            <i class="fa fa-tachometer" aria-hidden="true"></i>Agregar Paciente
          </a>
        </li>
        <li></li>
        <li>
          <a href="/">
            <i class="fa fa-tachometer" aria-hidden="true"></i>Salir
          </a>
        </li>
      </ul>
    </div>

    <div class="content-container">
      <div class="container-fluid">
        <div class="jumbotron">
            <h2>Hospital</h2>
            <br>
            <form method="post" action="{{ url('/admin') }}">
                @csrf
                <div class="form-group">
                    <label for="dir_name">Nombre Hospital</label>

                    <input type="text" name="name" class="form-control" id="name" value="{{ isset($hospital->name) ? $hospital->name : '' }}"  required>

                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Guardar"></input>
                </div>
            </form>


          <br><div><h4>Hospitlaes Registrados</h4></div>

          <div>
            <table class="table table-striped table-hover table-info border-dark">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nombre Hospital</th>
                  <th scope="col">actualizar</th>
                  <!-- <th scope="col">eliminar</th> -->
                </tr>
              </thead>
                <tbody>
                  @foreach ($hospitales as $hospital)
                    <tr>
                      <th scope="row">{{ $hospital->id }}</th>
                      <td>{{ $hospital->name }}</td>
                      <!-- <td>
                        <a href="{{ url('admin/' . $hospital->id) . '/edit' }}" type="button">Actualizar</a>
                      </td> -->
                      <td>
                        <form action="{{ url('admin/' . $hospital->id) }}" method="post">
                            @csrf
                            {{ method_field('DELETE') }}
                            <button class="btn btn-link" type="submit" onclick="return confirm('¿Desea eliminar el hospital?')">Eliminar</button>
                        </form>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
              </table>
            </div>      
        </div>
      </div>
    </div>
</body>
</html>