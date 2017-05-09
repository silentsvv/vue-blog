<template>
  <div id="login">
    <div class="login-wrap">
      <div class="login-nav">
        <transition name="fade">
          <span :class="['login-in',{'nav-active':isLog}]" @click="log">登录</span>
        </transition>
        <span :class="['reg-in',{'nav-active':!isLog}]" @click="reg">注册</span>
      </div> 
      <div class="show-part">
        <div  v-bind:class="['login-part',{active:isLog}]" v-show="isLog">
          <div class="log-username">
            <span class="username">姓名:</span>
            <input type="text" name="" id="">
          </div>
          <div class="log-password">
            <span class="password">密码:</span>
            <input type="text" name="" id="">
          </div>
          <div class="log-btn">
            <span class="log-btn-click">登录</span>
          </div>
        </div> 
        <div :class="['reg-part',{active:!isLog}]" v-show="!isLog">
          <div class="reg-username">
            <span class="username">姓名:</span>
            <input type="text" name="" id="">
          </div>
          <div class="reg-password">
            <span class="password">密码:</span>
            <input type="text" name="" id="">
          </div>
          <div class="reg-btn">
            <span class="reg-btn-click">注册</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script type="text/javascript">
  export default{
    data(){
      return {
        isLog: true
      }
    },
    methods: {
      log() {
        this.isLog = true;
      },
      reg() {
        this.isLog = false;
      }
    }
  }
</script>

<style lang="less">
  #login{
    position: relative;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.3);
    color: #fff;
    .login-wrap{
      position: absolute;
      width: 600px;
      height: 300px;
      top: 50%;
      left: 50%;
      margin-top: -300px;
      margin-left: -300px;
      .show-part{
        width: 100%;
        height: 100%;
        text-align: center;
        background: rgba(0, 0, 0, 0.5);
        .login-part,.reg-part{
          width: 400px;
          padding-top: 50px;
          height: 100%;
          margin: 0 auto;
        }
        .log-username,.log-password,.reg-username,.reg-password{
          padding: 10px;
          input{
            margin-right: 40px;
            height: 36px;
            width: 200px;
            border: 0px;
          }
          span{
            margin-right: 20px;
          }
        }
        .log-btn,.reg-btn{
          margin-top: 50px;
          .log-btn-click,.reg-btn-click{
            display: inline-block;
            width: 80px;
            height: 34px;
            line-height: 34px;
            color: #fff;
            background: #545454;
          }
        }
      }
    }
    .login-nav{
      font-size: 0px;
      .login-in{
        font-size: 18px;
        padding: 16px 24px 0px 24px;
        background: rgba(0, 0, 0, 0.3);
      }
      .reg-in{
        font-size: 18px;
        padding: 16px 24px 0px 24px;
        background: rgba(0, 0, 0, 0.3);
      }
      .nav-active{
        background: rgba(0, 0, 0, 0.5);
      }
    }
    .part-hide{
      display: none;
    }
  } 
</style>