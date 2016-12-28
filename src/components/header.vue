<template>
  <div class="header">
    <div class="link">
      <router-link to="/index" class="index">首页</router-link>
    </div>
  </div>
</template>

<style lang='less'>
  .header{
    position: fixed;
    width: 100%;
    height: 80px;
    z-index: 99;
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

</style>