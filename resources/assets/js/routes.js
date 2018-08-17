import Dashboard from './components/admin/Dashboard.vue';
import UsersIndex from './components/admin/users/UsersIndex.vue';
import UsersAdd from './components/admin/users/UsersAdd.vue';
import UsersEdit from './components/admin/users/UsersEdit.vue';
import PurposeList from './components/admin/purposes/List.vue';
import PurposeAdd from './components/admin/purposes/Add.vue';
import PurposeEdit from './components/admin/purposes/Edit.vue';

export const routes = [
	{
		name: 'dashboard',
		path: '/',
		component: Dashboard
	},
	{
		name: 'AdminHome',
		path: '/admin/home',
		component: Dashboard
	},
//User Routes
	{
		name: 'Users.Index',
		path: '/admin/users',
		component: UsersIndex,
		children: [	        
		]
	},
	{
		path:'/admin/users/create',
		name:'Users.Add',
		component: UsersAdd,
	},
	{
		path:'/admin/users/:id/edit',
		name:'Users.Edit',
		component: UsersEdit,
		props: (route) => ({propUserId: route.params.id}),
	},
//Purpose Route
	{
		name: 'Purpose.Index',
		path: '/admin/purpuses',
		component: PurposeList,
		children: [	        
		]
	},
	{
		path:'/admin/purposes/create',
		name:'Purpose.Add',
		component: PurposeAdd,
	},
	{
		path:'/admin/purposes/:id/edit',
		name:'Purpose.Edit',
		component: PurposeEdit,
		props: (route) => ({propPurposeId: route.params.id}),
	}

]