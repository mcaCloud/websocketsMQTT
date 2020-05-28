  <div class="form-group">
              <label>ID / Pasaporte / Cédula *</label>
              <!--La VAR (model) la seteamos en el UserController en el metodo de edit.
                *Hace referencia a la variable (user) que guarda la informacion del objeto con las propiedades de la busqueda en la base de datos
              --> 
              <input type="text" value="{{ ($user->rut) ?? old('rut') }}" class="form-control" name="rut" id='rut' placeholder="Ej: 12345678-9" readonly="" />
          </div>
 
          <div class="form-group">
              <label> Nombre *</label>
              <!--La VAR (model) la seteamos en el UserController en el metodo de edit.
                *Hace referencia a la variable (user) que guarda la informacion del objeto con las propiedades de la busqueda en la base de datos
              --> 
              <input type="text" value="{{ ($user->first_name) ?? old('first_name') }}" class="form-control" name="first_name" id='first_name' placeholder="Primer Nombre" readonly="" />
          </div>
 

          <div class="form-group">
              <label>Segundo Nombre</label>
                <!--La VAR (model) la seteamos en el UserController en el metodo de edit.
                *Hace referencia a la variable (user) que guarda la informacion del objeto con las propiedades de la busqueda en la base de datos
              --> 
              <input type="text" value="{{ ($user->last_name) ?? old('last_name') }}" class="form-control" name="last_name" id='last_name' placeholder="Segundo Nombre" readonly="" />
          </div>

          <div class="form-group">
              <label>Primer Apellido *</label>
              <!--La VAR (model) la seteamos en el UserController en el metodo de edit.
                *Hace referencia a la variable (user) que guarda la informacion del objeto con las propiedades de la busqueda en la base de datos
              --> 
              <input type="text" value="{{ ($user->father_surname) ?? old('father_surname') }}" class="form-control" name="father_surname" id='father_surname' placeholder="Apellido Paterno" readonly="" />
          </div>
