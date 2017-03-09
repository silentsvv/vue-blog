<template>
  <div class="header" v-bind:class="{ scroll: isActive }">
    <div class="link">
      <router-link to="/index" class="index">首页</router-link>
      <div class="login">
        <span class="avatar" @click.stop="infoA"></span>
        <div class="about" v-bind:class="{ clicked: isClicked}">
          <div class="about-me">
            <img :src="avatar" alt=""> 
          </div>
          <div class="send-mes">
            <span class="message">
              发送消息
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script type="text/javascript">
  export default {
    data(){
      return {
        avatar: require("../assets/avatar.jpg"),
        isActive: false,
        isClicked: false
      }
    },
    methods:{
      myScroll(){
        if(window.scrollY > 350){
          this.isActive = true;
        }
        if(window.scrollY < 350){
          this.isActive = false;
        }
      },
      infoA(){
        this.isClicked = !this.isClicked
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
    transition:all 0.35s;
  }
  .link{
    position: relative;
    width: 100%;
    height: 80px;
    box-sizing: border-box;
    z-index: 1;
    .index,.other{
      position: absolute;
      top: 50%;
      left: 5%;
      margin-top: -40px;
      width: 60px;
      height: 80px;
      text-align: center;
      font-size: 18px;
      line-height: 80px;
      color: #ffffff;
      text-decoration: none;
      transition: all 0.2;
      &:hover{
        color: #614224;
      }
    }
  }
   .scroll{
    color: #666;
    opacity: 1;
    background: #fff;
    transition:all 1s;
    box-shadow: 0 0 25px 0 #ccc;
    z-index: 22;
    .index{
      color: #666;
    }
  }


  .login{
    position: absolute;
    display: inline-block;
    right: 5%;
    top: 15px;
    width: 50px;
    height: 50px;
    .avatar{
      display: inline-block;
      width: 100%;
      height: 100%;
      transition: all 0.2s;
      border-radius: 50%;
      border: 1px solid #eee;
      box-shadow: 0px 0px 7px 2px #c5c3c3;
      background-image: url('../assets/avatar.jpg');
      background-size: contain;
      cursor: pointer;
      z-index: 9999;
    }
  }

  
  .about{
    position: absolute;
    top: 65px;
    right: 0px;
    height: 200px;
    width: 180px;
    box-shadow: 0px 0px 8px 1px #afaaaa;
    background-color: #fff;
    transition: 0.5s ease-out;
    transition-delay: 0.3s;
    transform: translate(50px, -200px);
    opacity: 0;
    z-index: -1;
    .about-me{
      padding: 20px 30px 20px 30px;
      height: 120px;
      width: 120px;
      img{
        width: 100%;
        height: 100%;
        border: 1px solid #e6e6e6;
      }
    }
    .send-mes{
      .message{
        display: block;
        margin:0 auto;
        padding: 2px 5px;
        width: 100px;
        height: 20px;
        font-size: 14px;
        text-align: center;
        border: 1px solid #ccc;
        cursor: pointer;
      }
    }
  }

  .about.clicked{
    transform: translate(20px,0px);
    opacity: 1;
  }

  .scroll{
    .avatar{
      transition: all 0.2s;
      box-shadow: 0px 0px 0px 0px #c5c3c3;
      border: 1px solid #e8e8e8;
    }
  }
  
</style>