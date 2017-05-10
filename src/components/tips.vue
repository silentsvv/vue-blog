<template>
  <div id="tips" v-show="hasTips">
    <div class="alert__title"></div>   
    <div class="alert__content"><span class="hide"></span><span><slot></slot></span></div>
    <div class="alert__close" @click="close">X</div>
  </div> 
</template>

<script>
import Bus from '../bus.js'  
  export default {
    props: ['hasTips'],
    computed: {
      isShowTip () {
        return this.hasTips;
      }
    },
    watch: {
      hasTips (val) {
        console.log(val)
        if(val == true) {
          setTimeout(function(){Bus.$emit('closeTip')},500)
        }
      } 
    },
    methods: {
      close () {
        Bus.$emit('closeTip')
      }
    },
    mounted () {
      console.log(this.isShowTip)
    }
  }
</script>

<style lang="less">
  #tips {
    position: fixed;
    top: 36%;
    left: 50%;
    margin-left: -90px;
    margin-top: -50px;
    width: 180px;
    height: 100px;
    background: #fff;
    border: 1px solid #f1cbae;
    border-radius: 10px;
    color: #666;
    overflow: hidden;
    z-index: 9;
    .alert__title {
      height: 40px;
      line-height: 40px;
      padding-left: 20px;
      border-bottom: 1px solid #eee;
      color: #fff;
      background: #f7c096;
    }
    .alert__content {
      height: 60px;
      width: 100%;
      vertical-align: middle;
      text-align: center;
    }
    .alert__close {
      position: absolute;
      right: 0;
      top: 0;
      width: 30px;
      height: 40px;
      font-size: 16px;
      line-height: 40px;
      color: #fff;
      cursor: pointer;
    }
    .hide {
      width: 0;
      height: 100%;
      display: inline-block;
      vertical-align: middle;
    }
  }   
</style>