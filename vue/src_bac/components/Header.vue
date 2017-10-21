<template>
  <div class="Iheader">
    <span>这是头部</span><br/>
    <span>{{seen}}</span>
    <input name="search"  v-model="message" value="" placeholder="请输入关键词" />
    {{message}}
  </div>
</template>

<script>
export default {
  name: 'iheader',
  data () {
    return {
      message: '',
      seen: '查询关键词'
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
