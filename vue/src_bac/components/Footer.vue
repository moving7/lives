<template>
  <div class="ttt">
    这是尾部导航
    {{msg}}
  </div>
</template>

<script>
export default {
  name: 'ifooter',
  data () {
    return {
      msg: 'Welcome to Your Vue.js 尾部',
      seen: 'niubi'
    }    
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h1, h2 {
  font-weight: normal;
}

ul {
  list-style-type: none;
  padding: 0;
}

li {
  display: inline-block;
  margin: 0 10px;
}

a {
  color: #42b983;
}
</style>
