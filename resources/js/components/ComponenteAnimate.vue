<template>
  <main class="main">
    <div class="container">
      <div class="card">
        <div class="card-header">

      <h1>componente usuarios</h1>
               
        </div>


        <h2></h2>
      </div>
    </div>
  </main>
</template>

<script>
export default {
  data() {
    return {
    
      arrayUser: []
    };
  },

  methods: {

      idUse(){
       
      },



    listarCompo(){
      let me = this;

      axios
        .get("/PerfilesAlarmas")
        .then(function(response) {
        me.arrayUser = response.data;
        
        
        
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
