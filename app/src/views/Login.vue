<template>
  <div id="app">
    <div class="login_w"></div>
  </div>
</template>

<script>

export default {
  name: 'app',
  data () {
    return {
      
    }
  },
  mounted() {

    

  },
  components: {
    
  }
}
</script>

<style lang="less">
html,body {
    font-size: 14px;
    margin: 0;
    height: 100%;
}

a {
    color: #4078c0;
    text-decoration: none;
}

#app {
  font-family: 'Microsoft Yahei', 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  color: #333;
  position: relative;
  width: 100%;
  height: 100%;
  background: #eee;
}

.login_w{
    width: 300px;
    height: 320px;
    margin: 0 auto;
    position: absolute;
    top: 50%;
    left: 50%;
    margin-left: -200px;
    margin-top: -160px;
    background: #fff;
    padding: 10px 50px;
}

</style>
