<template>
  <div id="app">
    <Iheader></Iheader>
    <Imenu></Imenu>
    <router-view></router-view>
  </div>
</template>

<script>
import Iheader from './components/Header'
// import Hello from './components/Hello'
import Imenu from './components/Menu'
export default {
  name: 'app',
  components: {
   Iheader,Imenu
  }
}
</script>

<style>
#app {
/*  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;*/
  margin-top: 0px;
}
</style>
