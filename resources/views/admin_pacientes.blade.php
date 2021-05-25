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
                  <form>                                
                    <div class="form-group">
                      <label for="dir_name">Nombre Completo</label>
                      <input type="text" name="name" class="form-control" id="dir_name" required>
                    </div>
                    <div class="form-group">
                      <label for="dir_EPS">EPS Asociada</label>
                      <select name="EPS" class="form-control">
                          <option>SURA</option>
                          <option>COOMEVA</option>
                          <option>SUSALUD</option>
                          <option>CAFESALUD</option>
                          <option>VIVA1A</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="dir_direccion">Dirección</label>
                      <input type="text" name="direccion" class="form-control" id="dir_direccion" required>
                    </div>
                    <div class="form-group">
                      <label for="dir_name_acompa">Nombre del Acompañante</label>
                      <input type="text" name="name_acompa" class="form-control" id="dir_name_acompa" required>
                    </div>
                    <div class="form-group">
                      <label for="phone_acompa">Teléfono del Acompañante</label>
                      <input type="tel" name="tel_acompa" class="form-control" id="phone_acompa" required>
                    </div>
                    <div class="form-group">
                      <label for="dir_antecedentes">Antecedentes Médicos</label>
                      <select name="EPS" class="form-control">
                          <option>Si</option>
                          <option>No</option>
                      </select>
                      <input type="text" name="antecedentes" class="form-control" id="dir_antecedentes">
                    </div>
                    <div class="form-group">
                      <label for="dir_motivos">Motivos de la Consulta</label>
                      <input type="text" name="motivos" class="form-control" id="dir_motivos" required>
                    </div>
                    <div class="form-group">
                      <label for="dir_diagnostico">Diagnóstico del Doctor</label>
                      <input type="text" name="diagnostico" class="form-control" id="dir_diagnostico" required>
                    </div>
                    <div class="form-group modal-footer">
                        <input type="submit" name="save" class="btn btn-primary" value="Registrar Doctor"></input>
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
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Sit</td>
                  <td>Amet</td>
                  <td>Consectetur</td>
                  <td>Sit</td>
                  <td>Amet</td>
                  <td>Consectetur</td>
                  <td>Sit</td>
                  <td>Amet</td>
                </tr>
              </tbody>
            </table>
          </div>


        </div>
      </div>
    </div>
</body>
</html>