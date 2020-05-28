<!--------------------------------------------------------------->
      <div class="row">

        <div class="form-group col-md-6">
          <label for="update">Cambiar foto</label>
          <input type="file" class="form-control" id='image' name="image"/>          
        </div>

        <div class="form-group col-md-6">
          <label>Segundo Apellido</label>
          <!--La VAR (model) la seteamos en el UserController en el metodo de edit.
          *Hace referencia a la variable (user) que guarda la informacion del objeto con las propiedades de la busqueda en la base de datos
              --> 
          <input type="text" value="{{ ($user->mother_surname) ?? old('mother_surname') }}" class="form-control" name="mother_surname" id='mother_surname' placeholder="Apellido Materno" readonly="" />
        </div>

      </div>

<!--------------------------------------------------------------->
      <div class="row">

      <div class="form-group col-md-4">
            <label>Dirección de correo electronico *</label>
             <!--La VAR (model) la seteamos en el UserController en el metodo de edit.
                *Hace referencia a la variable (user) que guarda la informacion del objeto con las propiedades de la busqueda en la base de datos
              --> 
            <input type="text" value="{{ ($user->email) ?? old('email') }}" class="form-control" name="email" id='email' placeholder="Ej: hola@mundo.com" autocomplete="off"/>
        </div>

          <div class="form-group col-md-4">
            <label>Cambiar Contraseña *</label>
            <input type="password" class="form-control" name="password" id='password' placeholder=""/>
        </div>

        <div class="form-group col-md-4">
            <label>Confirmar Contraseña *</label>
            <input type="password" class="form-control" name="password_confirmation" id='password_confirmation' placeholder=""/>
        </div>
      </div>

<!--------------------------------------------------------------->
      <div class="row">

         <div class="form-group col-md-4">
          <label for="update">Role de usuario</label>                  
              <input readonly type="text" class="form-control" id="update" name="member" value="{{$user->roles->pluck('display_name')}}"/> 
              <!--Para conseguir la informacion de la tabla de ROLES necesito hacer un PLUCK. Desde el controlador tengo la consulta y desde aqui puedo conseguir la info con el puck-->
              <!--Necesito llamar a la variable USER y solicitar la consulta de ROLES. Y solo tengo que solicitar el nombre del campo de la table que deseo ver-->     
        </div>


        <div class="form-group col-md-4">
          <label for="update">Última actualización</label>
          <input readonly type="text" class="form-control" id="update" name="member" value="{{$user->updated_at}}"/>             
        </div>

        <div class="form-group col-md-4">
              <label for="member">Miembro desde</label>
              <input readonly type="text" class="form-control" id="member" name="member" value="{{$user->created_at}}"/>

        </div>
      </div>