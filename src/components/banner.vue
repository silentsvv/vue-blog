<template>
	<div id="banner">
	
	</div>
</template>

<style lang='less'>
	#banner{
		position: fixed;
		top: 0px;
		height: 100%;
		width: 100%;
		background:url('../assets/bg.jpg');
		background-size: cover;
		background-position: 50% 50%;
		/*background-attachment: fixed;*/
		&:after{
			content: '';
			position: absolute;
			height: 100%;
			width: 100%;
			background-color: rgba(0,0,0,0.35);
			z-index: -1;
		}
	}
</style>