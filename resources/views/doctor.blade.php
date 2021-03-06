<!DOCTYPE html>
<html lang="en">
<head>
  <title>Doctor</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/app.css" >
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="shortcut icon" href="hospital.png">
</head>
<body>
    <div class="sidebar-container">
      <div class="sidebar-logo">Doctor</div>
      <ul class="sidebar-navigation">
        <li></li>
        <li>
          <a href="/doctor">
            <i class="fa fa-tachometer" aria-hidden="true"></i>Pacientes
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
                  <form method="post" action="{{ url('/doctor') }}">
                      @csrf                               
                      <div class="form-group">
                        <label for="dir_name">Nombre Completo</label>
                        <input type="text" name="nombre_completo" class="form-control" id="nombre_completo" value="{{ isset($dpacientes->nombre_completo) ? $dpacientes->nombre_completo : '' }}" required>
                      </div>
                      <div class="form-group">
                        <label for="dir_EPS">EPS Asociada</label>
                        <select name="EPS" class="form-control" value="{{ isset($dpacientes->eps) ? $dpacientes->eps : '' }}">
                            <option>SURA</option>
                            <option>COOMEVA</option>
                            <option>SUSALUD</option>
                            <option>CAFESALUD</option>
                            <option>VIVA1A</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="dir_direccion">Direcci??n</label>
                        <input type="text" name="direccion" class="form-control" id="direccion" value="{{ isset($dpacientes->direccion) ? $dpacientes->direccion : '' }}" required>
                      </div>
                      <div class="form-group">
                        <label for="dir_name_acompa">Nombre del Acompa??ante</label>
                        <input type="text" name="nombre_acompa??ante" class="form-control" id="nombre_acompa??ante" value="{{ isset($dpacientes->nombre_acompa??ante) ? $dpacientes->nombre_acompa??ante : '' }}" required>
                      </div>
                      <div class="form-group">
                        <label for="phone_acompa">Tel??fono del Acompa??ante</label>
                        <input type="tel" name="telefono_acompa??ante" class="form-control" id="telefono_acompa??ante" value="{{ isset($dpacientes->telefono_acompa??ante) ? $dpacientes->telefono_acompa??ante : '' }}"required>
                      </div>
                      <div class="form-group">
                        <label for="dir_antecedentes">Antecedentes M??dicos</label>
                        <select name="EPS" class="form-control">
                            <option>Si</option>
                            <option>No</option>
                        </select>
                        <input type="text" name="antecendentes" class="form-control" id="antecendentes" value="{{ isset($dpacientes->antecendentes) ? $dpacientes->antecendentes : '' }}">
                      </div>
                      <div class="form-group">
                        <label for="dir_motivos">Motivos de la Consulta</label>
                        <input type="text" name="motivos_consulta" class="form-control" id="motivos_consulta" value="{{ isset($dpacientes->motivos_consulta) ? $dpacientes->motivos_consulta : '' }}" required>
                      </div>
                      <div class="form-group">
                        <label for="dir_diagnostico">Diagn??stico del Doctor</label>
                        <input type="text" name="diagnostico" class="form-control" id="diagnostico" value="{{ isset($dpacientes->diagnostico) ? $dpacientes->diagnostico : '' }}" required>
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

          <button class="btn btn-primary" type="button" data-toggle='modal' data-target="#modal1">Registrar Paciente</button><br>

          <p>ESPACIO PARA LA LA TABLA DE PACIENTES</p>
          <div>
            <table class="table table-striped table-hover table-info border-dark">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nombre Completo</th>
                  <th scope="col">EPS</th>
                  <th scope="col">Direcci??n</th>
                  <th scope="col">Nombre Acompa??ante</th>
                  <th scope="col">Telefono Acompa??ante</th>
                  <th scope="col">Antecedentes M??dicos</th>
                  <th scope="col">Motivos Consulta</th>
                  <th scope="col">Diagn??stico</th>
                  <th scope="col">Eliminar</th>
                  <th scope="col">Acciones</th>
                </tr>
              </thead>
              <tbody>
              @foreach ($Dpacientes as $dpacientes)
                <tr>
                  <th scope="row">{{ $dpacientes->id }}</th>
                  <td>{{ $dpacientes->nombre_completo }}</td>
                  <td>{{ $dpacientes->eps }}</td>
                  <td>{{ $dpacientes->direccion }}</td>
                  <td>{{ $dpacientes->telefono }}</td>
                  <td>{{ $dpacientes->nombre_acompa??ante }}</td>
                  <td>{{ $dpacientes->antecendentes }}</td>
                  <td>{{ $dpacientes->motivos_consulta }}</td>
                  <td>{{ $dpacientes->diagnostico }}</td>
                  <td>
                    <form action="{{ url('doctor/' . $dpacientes->id) }}" method="post">
                      @csrf
                      {{ method_field('DELETE') }}
                      <button class="btn btn-link" type="submit" onclick="return confirm('??Desea eliminar el hospital?')">Eliminar</button>
                    </form>
                  </td>
                  <td><button class="btn btn-primary" type="button" data-toggle='modal' data-target="#modal2">COVID</button><br></td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          
          <div class="container_modal">
            <div class="modal fade" tabindex="-1" id="modal2">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button class="close" data-dismiss="modal">&times;</button>
                    <h3>S??ntomas de COVID</h3>
                  </div>
                  <div class="modal-body">
                  <form id="formulariocovid">
                    <div class="form-group">
                      <label for="dir_TOS">Tos</label><br>
                      <input type="radio" id="sitos" name="tos" value="Si">
                      <label for="sitos">Si</label><br>
                      <input type="radio" id="notos" name="tos" value="No">
                      <label for="notos">No</label><br>
                    </div>
                    <div class="form-group">
                      <label for="dir_dificultad">Dificultad para respirar</label><br>
                      <input type="radio" id="sirespirar" name="respirar" value="Si">
                      <label for="sirespirar">Si</label><br>
                      <input type="radio" id="norespirar" name="respirar" value="No">
                      <label for="norespirar">No</label><br>
                    </div>
                    <div class="form-group">
                      <label for="dir_sintomas">Otros s??ntomas</label><br>
                      <input type="checkbox" id="otros1" name="checkbox">
                      <label for="otros1">Fiebre</label><br>
                      <input type="checkbox" id="otros2" name="checkbox">
                      <label for="otros2">Escalofr??os</label><br>
                      <input type="checkbox" id="otros3" name="checkbox">
                      <label for="otros3">Temblores</label><br>
                      <input type="checkbox" id="otros4" name="checkbox">
                      <label for="otros4">Dolor M??scular</label><br>
                    </div>
                    <div class="form-group modal-footer">
                        <input type="submit" name="save" class="btn btn-primary" value="Registrar S??ntomas" onclick="covid()"></input>
                        <button class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                      </div>
                  </form>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <script>
          function covid(){
            var tos = document.getElementById("formulariocovid").tos;
            var res_tos;
            for (var x=0; x < tos.length; x++){
              if (tos[x].checked){
                res_tos = tos[x].value;
              }
            }

            var respirar = document.getElementById("formulariocovid").respirar;
            var res_res;
            for (var x=0; x < respirar.length; x++){
              if (respirar[x].checked){
                res_res = respirar[x].value;
              }
            }

            var checkboxes = document.getElementById("formulariocovid").checkbox;
            var cont = 0;
            for (var x=0; x < checkboxes.length; x++) {
             if (checkboxes[x].checked) {
              cont = cont + 1;
             }
            }

            if (res_tos == "Si" || res_res == "Si"){
              alert("Candidato a COVID-19");
            } else if (cont >= 2){
              alert("Candidato a COVID-19");
            } else {
              alert("No es candidato a COVID-19");
            }
          }
          </script>

        </div>
      </div>
    </div>
    
</body>
</html>
