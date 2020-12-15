<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Notas</div>
                    <div class="card-body">
                        <form action="" v-on:submit.prevent="Onagregar()">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Contenido</label>
                                <input type="label" name="contenido" class="form-control" id="exampleFormControlInput1" placeholder="Ingrese contenido de la nota" v-model="contenido">
                                <strong :class="[isactive?'text-primary':'text-danger']">{{cadena}}</strong>
                                
                            </div>  
                            <button type="submit" class="btn btn-primary">Enviar Nota</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data(){
            return{
                contenido:'',
                cadena:'',
                isactive:true
                
            }
        },
        methods:{
            Onagregar(){
                if(this.contenido===""){  
                    this.cadena='texto vacio'
                    this.isactive=false
                }
                else{
                    this.isactive=true
                    const params ={
                        contenido:this.contenido
                    }
                    axios.post('nota',params)
                        .then((response)=>{
                            const nota = response.data
                            this.$emit('AgregarNota',nota);
                        });
                    this.cadena='Nota agregada';
                    this.contenido=""
                }
                
                
                
            }
        }
    }
</script>
