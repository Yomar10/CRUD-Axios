<template>

    <div class="container">
        <div class="row justify-content-center">
        <!-- <div class="row"> PROBANDOOOOOOOOOOO--> 
            <!-- <div class="col-md-8"> -->
                <!-- <div class="card"> -->
                    <!-- <div class="card text-white bg-dark mb-3" style="width: 30rem;"> -->
                    <div class="text-white bg-dark mb-3" style="width: 30rem;">
                        <div class="card-header">NOTA: {{index+1}}</div>
                            <div class="card-body">
                                <h5 v-if="modoedit" class="card-title">{{nota.contenido}}</h5>
                                <input v-else type="text" name="" id="" v-model="nota.contenido" class="form-control">
                            </div>
                            
                            <div class="card-body">
                                <input v-if="modoedit" v-on:click="OnEditar" type="button" class="btn btn-success" value="Editar">
                                <input v-else type="submit" v-on:click="Onupdate" class="btn btn-primary" value="Guardar">
                                <input type="button" v-on:click="OnEliminar" class="btn btn-danger" value="Eliminar">
                            </div>
                    </div>
                
                <!-- </div> -->
            <!-- </div> -->
        </div>
    </div>
    
</template>
<script>
        export default {
            props:['nota','index'],
            data(){
                return {
                    modoedit:true
                }
            },
            methods:{
                OnEditar(){
                    this.modoedit=false
                },
                OnEliminar(){
                    axios.delete(`nota/${this.nota.id}`).then(()=>{
                        this.$emit('EliminarNota')
                    })
                },
                Onupdate(){
                    this.modoedit=true
                    const dato = {
                        contenido : this.nota.contenido
                    }; 
                    axios.put(`nota/${this.nota.id}`,dato).then((response)=>{
                        const nota = response.data;
                        this.$emit('EditarNota',nota)
                    })
                    
                    
                }
            }
        }
        
</script>