<template>

<div class="breadcrumb-line">
	<ul class="breadcrumb">
		<li><a href="index.html"><i class="icon-home2 position-left"></i> {{first_data}}</a></li>
		<li class="active">{{second_data}}</li>
	</ul>

	<ul class="breadcrumb-elements">
		<li><a href="#"><i class="icon-comment-discussion position-left"></i> Support</a></li>
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">
				<i class="icon-gear position-left"></i>
				Settings
				<span class="caret"></span>
			</a>

			<ul class="dropdown-menu dropdown-menu-right">
				<li><a href="#"><i class="icon-user-lock"></i> Account security</a></li>
				<li><a href="#"><i class="icon-statistics"></i> Analytics</a></li>
				<li><a href="#"><i class="icon-accessibility"></i> Accessibility</a></li>
				<li class="divider"></li>
				<li><a href="#"><i class="icon-gear"></i> All settings</a></li>
			</ul>
		</li>
	</ul>
</div>



</template>

<script>
	export default{
		props:['name'],
		data()
		{
			return{
				first_data:'Dashboard',
				second_data:'',
			}
		},
		created()
		{
			this.LoadingStatus();
			document.title = this.$route.meta.title;
			this.second_data=this.$route.meta.breadcumb;
			 
		}
	}
</script>