<template>
  <div class="header" v-bind:class="{ scroll: isActive }">
    <div class="link">
      <router-link to="/index" class="index">首页</router-link>
    </div>
  </div>
</template>

<script type="text/javascript">
  export default {
    data(){
      return {
        isActive: false
      }
    },
    methods:{
      myScroll(){
        if(window.scrollY > 350){
          this.isActive = true;
          console.log(this.isActive)
        }
        if(window.scrollY < 350){
          this.isActive = false;
          console.log(this.isActive)
        }
      }
    },
    created() {
      window.addEventListener('scroll', this.myScroll);
    }
  }
</script>

<style lang='less'>
  .header{
    position: fixed;
    width: 100%;
    height: 80px;
    z-index: 99;
    transition:all 1s;
  }
  .link{
    position: relative;
    margin-left: 80px;
    width: 200px;
    height: 80px;
    .index,.other{
      position: absolute;
      top: 50%;
      margin-top: -40px;
      width: 60px;
      height: 80px;
      font-size: 20px;
      font-weight: 600;
      line-height: 80px;
      color: #ffffff;
      text-decoration: none;
      &:hover{
        color: #614224;
      }
    }
    .active{
      color: #ffffff;
      border-radius: 3px;
    }
  }
   .scroll{
    color: #666;
    opacity: 1;
    background: #fff;
    transition:all 1s;
    box-shadow: 0 0 25px 0 #ccc;
    .index{
      color: #666;
    }
  }
</style>