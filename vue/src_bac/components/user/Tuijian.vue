<template>
  <div class="ttt">
    这是文章的列表页面中的推荐小模块
  <router-view></router-view>
  </div>
</template>

<script>
export default {
  name: 'alist',
  data () {
    return {
      msg: 'Welcome to Your Vue.js App',
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
