<template>
  <div class="header">
    <div class="link">
      <router-link to="/index" class="index">首页</router-link>
      <router-link to="/article" class="other">其他</router-link>
    </div>
  </div>
</template>

<style lang='less'>
  .header{
    width: 100%;
    height: 80px;
    box-shadow: 0px 0px 7px 2px #ccc;
    background-color: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .link{
    width: 200px;
    height: 50px;
    display: flex;
    justify-content: center;
    align-items: center;
    .index,.other{
      display: flex;
      justify-content: center;
      align-items: center;
      width: 60px;
      height: 50px;
      text-decoration: none;
      color: #333;
    }
    .active{
      background-color: #ccc;
      color: #fff;
      border-radius: 3px;
    }
  }

</style>