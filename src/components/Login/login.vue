<template>
  <div id="login">
    <div class="login-wrap">
      <div class="login-nav">
        <span class="login-in">登录</span>
        <span class="reg-in">注册</span>
      </div> 
      <div class="show-part">
        <div  v-bind:class="['login-part',{'part-hide':!isLog}]">
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
        <div :class="['reg-part',{'part-hide':isLog}]">
          <div class="reg-username">
            <span class="username">姓名:</span>
            <input type="text" name="" id="">
          </div>
          <div class="reg-password">
            <span class="password">密码:</span>
            <input type="text" name="" id="">
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
        .log-username,.log-password{
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
        .log-btn{
          margin-top: 50px;
          .log-btn-click{
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
        background: rgba(0, 0, 0, 0.5);
      }
      .reg-in{
        font-size: 18px;
        padding: 16px 24px 0px 24px;
        background: rgba(0, 0, 0, 0.3);
      }
    }
    .part-hide{
      display: none;
    }
  } 
</style>