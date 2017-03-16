<template>
  <div id="main">
    <MyHeader>
    </MyHeader>
    <Banner></Banner>
    <router-view></router-view>
    <div></div>
    <MyFooter></MyFooter>
  </div>
</template>
<script>
import MyHeader from './components/header'
import Banner from './components/banner'
import MyFooter from './components/footer'
export default {
  data () {
    return {
      loadR : true
    }
  },
  components: {
    MyHeader,
    Banner,
    MyFooter
  },
  mounted() {
  }
}
</script>
<style lang="less">
@import './less/main.less';
*{
  padding: 0;
  margin: 0;
  font-size: "微软雅黑";
}
.back {
  background: #000;
}
</style>