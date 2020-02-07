import system_configuration from './components/system_configuration.vue'
import Module from './components/Module.vue'
export const routes=[
	
	{
		path:"/module",
		component:Module,
		name:"dashboard",
		meta:{
			breadcumb:"Module",
			title:'Module'
		}
	},
	
	{
		path:"/system_configuration",
		component:system_configuration,
		name:"defaultview",
		meta:{
			breadcumb:"System Configuration",
			title:'System Configuration'
		}
	}

	
];