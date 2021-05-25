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
          <h2>Doctores</h2>
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
                      <label for="dir_direccion">Dirección</label>
                      <input type="text" name="direccion" class="form-control" id="dir_direccion" required>
                    </div>
                    <div class="form-group">
                      <label for="phone">Teléfono</label>
                      <input type="tel" name="tel" class="form-control" id="phone" required>
                    </div>
                    <div class="form-group">
                      <label for="dir_sangre">Tipo de Sangre</label>
                      <input type="text" name="sangre" class="form-control" id="dir_sangre" required>
                    </div>
                    <div class="form-group">
                      <label for="dir_experiencia">Años de Experiencia</label>
                      <input type="text" name="experiencia" class="form-control" id="dir_experiencia" required>
                    </div>
                    <div class="form-group">
                      <label for="dir_nacimiento">Fecha de nacimiento</label>
                      <input type="date" name="nacimiento" class="form-control" id="dir_nacimiento" required>
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

          <button class="btn btn-primary" type="button" data-toggle='modal' data-target="#modal1">Registrar Doctor</button><br>

          <p>ESPACIO PARA LA LA TABLA DE DOCTORES</p>


        </div>
      </div>
    </div>
</body>
</html>