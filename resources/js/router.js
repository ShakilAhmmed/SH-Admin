import DashboardComponent from './components/ExampleComponent.vue'
import testC from './components/testC.vue'
export const routes=[
	
	{
		path:"/test",
		component:testC,
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