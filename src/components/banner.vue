<template>
	<div id="banner">
	</div>
</template>

<style lang='less'>
	#banner{
		position: relative;
		top: 0px;
		height: 500px;
		width: 100%;
		background:url('../assets/bg.jpg');
		background-size: cover;
		&:after{
			content: '';
			position: absolute;
			height: 500px;
			width: 100%;
			background-color: rgba(0,0,0,0.25);
		}
	}
</style>