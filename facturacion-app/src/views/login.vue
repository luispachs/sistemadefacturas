<script setup>
import { ref } from 'vue';
import InputComponent from '../components/InputComponent.vue';




</script>

<template>
    <main class="container-fluid">
        <div class="col-4"></div>
        <div class="col-4">
            <div class=" column">
                <InputComponent name="user" type="text" id="user" class="col-12 center-all" tag="Usuario"/>
                <InputComponent name="password" type="password" id="password" class="col-12 center-all" tag="Contraseña"/>
                <div class="col-12 center-all">
                    <button>Ingresar</button>
                </div>
                <div class="col-12 center-all">
                    <div  class="col-12 center-all">
                        <p><a href="/register">¿Aun no estas registrado?</a></p>
                    </div>
                    <div class="col-12 center-all">
                        <p><a href="">¿Has olvidado tu contraseña?</a></p>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="col-4"></div>
    </main>
</template>