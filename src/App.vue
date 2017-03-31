<template>
  <div id="main">
    <MyHeader></MyHeader>
    <div v-if="!isLogin" class="word">
      <p>不知道说些什么，还是写点字凑字数吧。</p>
    </div>
    <Banner v-bind:class="{logined:isLogin}"></Banner>
    <router-view></router-view>
    <MyFooter v-if="!isLogin"></MyFooter>
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
  computed:{
    isLogin(){
      return this.$route.fullPath === '/login'
    }
  },
  mounted() {
    console.log(this.$route.fullPath)
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
.word{
  position: absolute;
  top: 220px;
  left: 50%;
  padding: 4px 30px;
  transform: translateX(-50%);
  width: auto;
  font-size: 26px;
  color: #eeeeee;
  // background: rgba(101, 99, 99, 0.38);
  z-index: 2;
}
</style>