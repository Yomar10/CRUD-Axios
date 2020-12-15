<template>
    <div>
        <FormularioComponent
        @AgregarNota="AgregarNota"
        ></FormularioComponent>
        <NotificacionComponent
        v-for="(nota,index) in notas"
        :key="nota.id"
        :nota="nota"
        :index="index"
        @EliminarNota="EliminarNota(index)"
        @EditarNota="EditarNota(index,...arguments)"
        >
        </NotificacionComponent>
    </div>
</template>
<script>
export default {
    data(){
        return{
            notas:[
               
            ]
        }
    },
    mounted(){
        axios.get('nota').then((response)=>{
            this.notas = response.data
        })
        // axios.get('nota').then(response=>(this.notas=response.data));
    },
    methods:{
        AgregarNota(nota){
            this.notas.push(nota)
            // alert("")
            // var x = Math.floor(Math.random()*8);
            // this.fondo = this.card[x].bg
            // this.texto = this.card[x].texto
            
        },
        EliminarNota(index){
            this.notas.splice(index,1)
        },
        EditarNota(index,nota){
            // this.notas.splice(index,1,nota)
            this.notas[index]=nota; 
        }
    }
}
</script>