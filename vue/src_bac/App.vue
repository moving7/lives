<template>
  <div id="app">
    <iheader></iheader>
    <img src="./assets/logo.png">
    <router-view></router-view>
    <ifooter></ifooter>
  </div>
</template>

<script>
import Iheader from './components/Header'
//import Icontent from './components/Content'
import Ifooter from './components/Footer'
export default {
  name: 'app',
  components: {
     Iheader, Ifooter
  }
}
</script>

<style>
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
