<template>
  <div id="app">
    <MyHeader>
    </MyHeader>
    <router-view></router-view>
  </div>
</template>
<script>
import MyHeader from './components/header'
export default {
  name: 'app',
  components: {
    MyHeader
  }
}
</script>
<style lang="less">
@import './less/main.less';
*{
  padding: 0;
  margin: 0;
}
</style>