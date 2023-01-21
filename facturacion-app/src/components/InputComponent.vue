
<script setup>
import { ref } from 'vue';

let props= defineProps(["name","type","id","tag"]);
let hasError=ref(false)
let Value=ref("")
let name=props.name;
let type=props.type;
let tag=props.tag;
let id=props.id;









//Components functions

function validateInput(e){
    if(e.target.value==""){
        hasError.value=true;
    }
    else{
        hasError.value=false
    }
}
</script>

<template>
    <div>
        <div>
            <label v-bind:for="{name}">{{ tag }}: </label><br/>
            <input v-bind:type="{type}" v-bind:placeholder="tag" v-model="Value" v-bind:name="{name}" v-on:focusout="validateInput($event)" v-bind:id="id" />
        </div>
        <div>
            <p v-if="hasError==false"></p>
            <p v-else-if="hasError==true"><strong>Este campo es requerido</strong></p>
        </div>
    </div>

</template>