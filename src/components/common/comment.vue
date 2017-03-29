<template>
  <div class="comment-list">
    <div class="comment">
      <div class="comment-name">李大燕</div> 
      <div class="comment-text">
        沙发
      </div>
      <div class="comment-date">
        2017-03-14
      </div>
    </div>      
  </div>
</template>

<style lang="less">
  .comment-list{
    margin: 10px auto;
    max-width: 1000px;
    // background: #eee;
    border: 1px solid #ccc;
    .comment{
      padding: 10px;
      min-height: 100px;
      background: #fff; 
      .comment-name{
        padding: 10px;
        font-size: 14px;
      }
      .comment-text{
        padding: 20px;
        background: #eee;
      }
      .comment-date{
        text-align: right;
        color: #888;
        padding-top: 10px;
        font-size: 14px;
      }
    }
  }
</style>