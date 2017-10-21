<template>
  <div class="hello">
    <h1>{{ msg }}</h1>
    <h2>{{seen}}</h2>
    <h2 v-html="seen"></h2>

  </div>
</template>

<script>
import Artadd from './article/Add.vue'
import Artedite from './article/Edite.vue'
import Artlist from './article/List.vue'
export default {
  name: 'icontent',
  components: {
     Artadd, Artedite, Artlist
  },
  data () {
    return {
      msg: '欢迎来到八维内容管理后台',
      seen: '开发人员'
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
