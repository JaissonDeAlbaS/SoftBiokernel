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
    </div>

    <div class="content-container">
      <div class="container-fluid">
        <div class="jumbotron">
          <h2>Pacientes</h2>
          <br>
          <div class="container_modal">
            <div class="modal fade" tabindex="-1" id="modal1">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button class="close" data-dismiss="modal">&times;</button>
                    <h3>Agregar Doctor</h3>
                  </div>
                  <div class="modal-body">
                  <form method="post" action="{{ url('/admin_pacientes') }}">
                      @csrf                               
                      <div class="form-group">
                        <label for="dir_name">Nombre Completo</label>
                        <input type="text" name="nombre_completo" class="form-control" id="nombre_completo" value="{{ isset($pacientes->nombre_completo) ? $pacientes->nombre_completo : '' }}" required>
                      </div>
                      <div class="form-group">
                        <label for="dir_EPS">EPS Asociada</label>
                        <select name="EPS" class="form-control" value="{{ isset($pacientes->eps) ? $pacientes->eps : '' }}">
                            <option>SURA</option>
                            <option>COOMEVA</option>
                            <option>SUSALUD</option>
                            <option>CAFESALUD</option>
                            <option>VIVA1A</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="dir_direccion">Dirección</label>
                        <input type="text" name="direccion" class="form-control" id="direccion" value="{{ isset($pacientes->direccion) ? $pacientes->direccion : '' }}" required>
                      </div>
                      <div class="form-group">
                        <label for="dir_name_acompa">Nombre del Acompañante</label>
                        <input type="text" name="nombre_acompañante" class="form-control" id="nombre_acompañante" value="{{ isset($pacientes->nombre_acompañante) ? $pacientes->nombre_acompañante : '' }}" required>
                      </div>
                      <div class="form-group">
                        <label for="phone_acompa">Teléfono del Acompañante</label>
                        <input type="tel" name="telefono_acompañante" class="form-control" id="telefono_acompañante" value="{{ isset($pacientes->telefono_acompañante) ? $pacientes->telefono_acompañante : '' }}"required>
                      </div>
                      <div class="form-group">
                        <label for="dir_antecedentes">Antecedentes Médicos</label>
                        <select name="EPS" class="form-control">
                            <option>Si</option>
                            <option>No</option>
                        </select>
                        <input type="text" name="antecendentes" class="form-control" id="antecendentes" value="{{ isset($pacientes->antecendentes) ? $pacientes->antecendentes : '' }}">
                      </div>
                      <div class="form-group">
                        <label for="dir_motivos">Motivos de la Consulta</label>
                        <input type="text" name="motivos_consulta" class="form-control" id="motivos_consulta" value="{{ isset($pacientes->motivos_consulta) ? $pacientes->motivos_consulta : '' }}" required>
                      </div>
                      <div class="form-group">
                        <label for="dir_diagnostico">Diagnóstico del Doctor</label>
                        <input type="text" name="diagnostico" class="form-control" id="diagnostico" value="{{ isset($pacientes->diagnostico) ? $pacientes->diagnostico : '' }}" required>
                      </div>
                      <div class="form-group modal-footer">
                        <input type="submit" class="btn btn-primary" value="Guardar"></input>
                        <button class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <button class="btn btn-primary" type="button" data-toggle='modal' data-target="#modal1">Registrar Pacientes</button><br>

          <br><div><h4>Pacientes Registrados</h4></div>

          <div>
            <table class="table table-striped table-hover table-info border-dark">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nombre Completo</th>
                  <th scope="col">EPS</th>
                  <th scope="col">Dirección</th>
                  <th scope="col">Nombre Acompañante</th>
                  <th scope="col">Telefono Acompañante</th>
                  <th scope="col">Antecedentes Médicos</th>
                  <th scope="col">Motivos Consulta</th>
                  <th scope="col">Diagnóstico</th>
                  <th scope="col">Eliminar</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($Pacientes as $pacientes)
                <tr>
                  <th scope="row">{{ $pacientes->id }}</th>
                  <td>{{ $pacientes->nombre_completo }}</td>
                  <td>{{ $pacientes->eps }}</td>
                  <td>{{ $pacientes->direccion }}</td>
                  <td>{{ $pacientes->telefono }}</td>
                  <td>{{ $pacientes->nombre_acompañante }}</td>
                  <td>{{ $pacientes->antecendentes }}</td>
                  <td>{{ $pacientes->motivos_consulta }}</td>
                  <td>{{ $pacientes->diagnostico }}</td>
                  <td>
                    <form action="{{ url('admin_pacientes/' . $pacientes->id) }}" method="post">
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