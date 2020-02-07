import DashboardComponent from './components/ExampleComponent.vue'
import Module from './components/Module.vue'
export const routes=[
	
	{
		path:"/module",
		component:Module,
		name:"dashboard",
		meta:{
			title:"Dashboard"
		}
	},
	{
		path:"/",
		component:DashboardComponent,
		name:"defaultview",
		meta:{
			title:"Dashboard"
		}
	}

	
];