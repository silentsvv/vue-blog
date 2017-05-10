<template>
  <div id="alert">
    <div class="alert__title">提示</div>   
    <div class="alert__content"><span class="hide"></span><span>添加成功！</span></div>
    <div class="alert__btn">
      <div class="btn__yes">确认</div>
      <div class="btn__no">取消</div>
    </div>
    <div class="alert__close">X</div>
  </div> 
</template>

<script></script>

<style lang="less">
  #alert {
    position: fixed;
    top: 50%;
    left: 50%;
    margin-left: -110px;
    margin-top: -70px;
    width: 260px;
    height: 180px;
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
      height: 100px;
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
      color: #ca4d4d;
      cursor: pointer;
    }
    .alert__btn {
      border-top: 1px solid #f1cbae;
      height: 40px;
      .btn__yes {
        border-right: 1px solid #f1cbae;
      }
      .btn__yes,.btn__no {
        float: left;
        width: 50%;
        box-sizing: border-box;
        text-align: center;
        line-height: 40px;
        cursor: pointer;
        &:hover {
          background: #f1cbae;
          color: #fff;
        }
      }
    }
    .hide {
      width: 0;
      height: 100%;
      display: inline-block;
      vertical-align: middle;
    }
  }   
</style>