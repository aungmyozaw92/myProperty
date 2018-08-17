import Dashboard from './components/admin/Dashboard.vue';
import UsersIndex from './components/admin/users/UsersIndex.vue';
import UsersAdd from './components/admin/users/UsersAdd.vue';
import UsersEdit from './components/admin/users/UsersEdit.vue';

export const routes = [
	{
		name: 'dashboard',
		path: '/',
		component: Dashboard
	},
	{
		name: 'dashboard',
		path: '/admin/home',
		component: Dashboard
	},
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
	}

]