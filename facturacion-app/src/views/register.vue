<script setup>
import InputComponent from '../components/InputComponent.vue';



</script>
<template>
    <h1>You are at register area</h1>

    <div class="container">
        <InputComponent type="text" id="nombre" name="name" tag="Nombre"  class="col-12 center-all"/>
        <InputComponent type="text" id="apellido" name="lastname" tag="Apellido"  class="col-12 center-all"/>
        <InputComponent type="email" id="correo" name="email" tag="Correo electronico"  class="col-12 center-all"/>
        <InputComponent type="password" id="contraseña" name="password" tag="Contraseña"  class="col-12 center-all"/>
        <InputComponent type="password" id="contraseña_confirmacion" name="password" tag="Confirmar contraseña"  class="col-12 center-all"/>
        <div  class="col-12 center-all">
            <button type="submit">Registrar</button>
        </div>
    </div>

</template>