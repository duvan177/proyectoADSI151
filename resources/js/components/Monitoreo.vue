<template>
  <main class="main">
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">Home</li>
      <li class="breadcrumb-item">
        <a href="#">Admin</a>
      </li>
      <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <div class="container-fluid">
      <!-- Ejemplo de tabla Listado -->
      <div class="card">
        <div class="card-header">
          <i class="fa fa-align-justify"></i>
         
          <button
            type="button"
            class="btn btn-secondary"
             
            >
            <i class="icon-plus"></i>&nbsp;Gestion
          </button>
        </div>
        <div class="card-body">
          <div class="form-group row">
            <div class="col-md-6">
              <div class="input-group">
                <select class="form-control col-md-3" id="opcion" name="opcion">
                  <option value="nombre">Nombre</option>
                  <option value="descripcion">Descripción</option>
                </select>
                <input
                  type="text"
                  id="texto"
                  name="texto"
                  class="form-control"
                  placeholder="Texto a buscar"
                >
                <button type="submit" class="btn btn-primary">
                  <i class="fa fa-search"></i> Buscar
                </button>
              </div>
            </div>
          </div>
          <table class="table table-bordered table-striped table-sm">
            <thead>
              <tr>
                <th>Opciones</th>
                <th>Nombre</th>
                <th>Estado</th>
              </tr>
            </thead>
            <tbody>
              <div></div>
              <tr v-for="programacionComponente in arrayEstado" :key="programacionComponente.id">
                <td>
                  <button
                    type="button"
                    class="btn btn-warning btn-sm"
                    data-toggle="modal"
                    data-target="#modalNuevo"
                  >
                    <i class="icon-pencil"></i>
                  </button>

                   &nbsp;
                </td>
                <td v-text="programacionComponente.nomCompo"></td>

                <td>
                  <div v-if="programacionComponente.EstadoProgramado == 'Encendido'">
                    <span class="badge badge-success">Encendido</span>
                  </div>
                  <div v-else-if="programacionComponente.EstadoProgramado == 'Abierta'">
                    <span class="badge badge-success">Abierta</span>
                  </div>
                  <div v-else-if="programacionComponente.EstadoProgramado == 'Apagado'">
                    <span class="badge badge-danger">Apagado</span>
                  </div>
                  <div v-else-if="programacionComponente.EstadoProgramado == 'Cerrada'">
                    <span class="badge badge-danger">Cerrada</span>
                  </div>
                  <div v-else-if="programacionComponente.idAtributoXtipo == 4 ">
                    <span
                      class="badge badge-success"
                      v-text="programacionComponente.EstadoProgramado"
                    ></span>
                  </div>
                  <div v-else-if="programacionComponente.idAtributoXtipo == '8'">
                    <span
                      class="badge badge-danger"
                      v-text="programacionComponente.EstadoProgramado"
                    ></span>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
         
        </div>
      </div>
      <!-- Fin ejemplo de tabla Listado -->
    </div>
    <!--Inicio del modal agregar/actualizar-->
    <div
      class="modal fade"
      id="modalNuevo"
      tabindex="-1"
      role="dialog"
      aria-labelledby="myModalLabel"
      style="display: none;"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-primary modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Agregar categoría</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <form action method="post" enctype="multipart/form-data" class="form-horizontal">
              <div class="form-group row">
                <label class="col-md-3 form-control-label" for="text-input">Nombre</label>
                <div class="col-md-9">
                  <input
                    type="text"
                    id="nombre"
                    name="nombre"
                    class="form-control"
                    placeholder="Nombre de categoría"
                  >
                  <span class="help-block">(*) Ingrese el nombre de la categoría</span>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-md-3 form-control-label" for="email-input">Descripción</label>
                <div class="col-md-9">
                  <input
                    type="email"
                    id="descripcion"
                    name="descripcion"
                    class="form-control"
                    placeholder="Enter Email"
                  >
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-primary">Guardar</button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!--Fin del modal-->
    <!-- Inicio del modal Eliminar -->
    <div
      class="modal fade"
      id="modalEliminar"
      tabindex="-1"
      role="dialog"
      aria-labelledby="myModalLabel"
      style="display: none;"
      aria-hidden="true"
    >
      <!-- /.modal-dialog -->
    </div>
    <!-- Fin del modal Eliminar -->
  </main>
</template>

<script>
export default {
  data() {
    return {
      nombre: " ",
      estado: " ",
      arrayEstado: []
    };
  },

  methods: {
    idUse() {},

    listarCompo() {
      let me = this;

      axios
        .get("/programacionComponente")
        .then(function(response) {
          me.arrayEstado = response.data;
        })
        .catch(function(error) {
          // handle error
          console.log(error);
        })
        .then(function() {
          // always executed
        });
    }
  },
  mounted() {
    this.listarCompo();
  }
};
</script>
